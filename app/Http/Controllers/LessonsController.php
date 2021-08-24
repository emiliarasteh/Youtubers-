<?php

namespace App\Http\Controllers;

use App\Jobs\VideoMaker;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::orderBy('id','desc')->paginate(4);
        return view ('admin.lessons.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $courses = Course::get();
        return view('admin.lessons.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'duration'=>'required|numeric',
            'order'=>'required'
        ]);

        $fileName = time().'.'.$request->file('video')->extension();
        $fileNameWithoutExt = time().'.m3u8';
//        dd($fileNameWithoutExt);
        $request->video->move(storage_path('uploads'), $fileName);
        $data=($request->toArray());
        $data['video'] = $fileNameWithoutExt;
        VideoMaker::dispatch($data, $fileName, $fileNameWithoutExt);
        Lesson::create($data);
        return redirect('lessons/index');

    }

    public function video($playlist)
    {
//        dd($playlist);
        return FFMpeg::dynamicHLSPlaylist()
            ->fromDisk('public')
            ->open("videos/$playlist")
            ->setKeyUrlResolver(function($key){
                return route('lessons.secrets',['key' => $key]);
            })
            ->setPlaylistUrlResolver(function($playlist) {
                return route('lessons.video',['playlist' => $playlist]);
            })
            ->setMediaUrlResolver(function($media){
                return Storage::disk('public')->url("videos/{$media}");
            });
    }

    public function secret($key)
    {
        return Storage::disk('secrets')->download($key);
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
        $lessons = Lesson::find($id);
        return view('admin.lessons.edit', compact('lessons'));
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
        $lessons = Lesson::find($id);
        $lessons->update($data);
        return redirect('lessons/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lesson::where('id', $id)->delete();
        return redirect('lessons/index');
    }
}
