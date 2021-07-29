<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id','desc')->paginate(4);
        return view ('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $test = 'ali';
//        $test2 = 'emilia';
//        dd($test.'&'.$test2);
        $request->validate([
            'image'=>'required',
            'title'=>'required',
            'description'=>'required',
            'price'=>'required|numeric',
            'duration'=>'required|numeric',
        ]);

//        12312546543.jpg

        $fileName = time().'.'.$request->file('image')->extension();
//        dd(public_path('assets/images'));
        $request->image->move(public_path('assets/images'), $fileName);

        $data=($request->toArray());
//        dd($data);
        $data['image'] = "assets/images/".$fileName;
//        $data['duration'] = "1111";
//        $data['jadid'] = "pooo";
//        dd($data);
//$file_path = 'assets/images/'.$fileName;
//        dd($request->toArray());
//        $users = Course::create([
//            'image'=>$data['image'],
////            'image'=>'assets/images/'.$fileName,
////            'image'=>$file_path,
//            'title'=>$data['title'],
//            'description'=>$data['description'],
//            'price'=>$data['price'],
//            'duration'=>$data['duration'],
//        ]);

       $course = Course::create($data);

       //mishe dakhele sync yek array az id ha dad
        // vaya mishe yek object dad
//        $course->users()->sync(
//            User::where('id', 1)->get(),
//        );
        $course->users()->sync($request->users);

        return redirect('courses/index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Course::find($id);
        return view('admin.courses.edit', compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=($request->toArray());
        $courses = Course::find($id);
        $courses->update($data);
        return redirect('courses/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::where('id', $id)->delete();
        return redirect('courses/index');
    }
}
