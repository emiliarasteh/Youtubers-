<?php

namespace App\Http\Controllers;

use App\Models\Indicator;
use Illuminate\Http\Request;

class IndicatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicators = Indicator::paginate(6);
        return view('admin.indicators.index', compact('indicators'));
    }

    public function file_download($fileName)
    {
        $filePath = public_path("assets/indicators/$fileName");
        $headers = ['Content-Type: application/pdf'];
        return response()->download($filePath, $fileName, $headers);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.indicators.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required',
            'size' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $fileName = time() . '.' . $request->file('file')->getClientOriginalExtension();

        $request->file->move(public_path('assets/indicators'), $fileName);

        $data = $request->toArray();

        $data['file'] = $fileName;

        $indicators = Indicator::create($data);
        return redirect('indicators/index');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicators = Indicator::find($id);
        return view('admin.indicators.edit', compact('indicators'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ($request->toArray());
        $indicators = Indicator::find($id);

        if ($request->hasFile('file'))
        {
            $fileName = time() . '.' . $request->file('file')->extension();

            $request->file->move(public_path('assets/indicators'), $fileName);

            $data['file'] = $fileName;

        }else{

        $indicators['file'] = $indicators->file;
    }
        $indicators->update($data);
        return redirect('indicators/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Indicator::where('id', $id)->delete();
        return redirect('indicators/index');
    }
}
