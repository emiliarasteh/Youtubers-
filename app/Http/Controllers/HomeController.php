<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::orderBy('id','desc')->get();
        $key = config('youtube.key');
        $base_url = config('youtube.base_url');
        $channel_id = config('youtube.channel_id');
        $maxResult = 10;
        $last_videos_url = "activities?order=date&part=snippet&part=contentDetails&channelId=$channel_id&maxResults=$maxResult&key=$key";
        $last_videos = Http::get(  $base_url.$last_videos_url)->json();
//dd($last_videos);

        return view('index', compact('courses', 'last_videos'));
    }

    public function about()
    {

        return view('others.about');
    }

    public function contact()
    {

        return view('others.contact');
    }

    public function question()
    {

        return view('others.question');
    }
    public function show()
    {

    }
}
