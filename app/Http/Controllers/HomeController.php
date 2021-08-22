<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

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

        return view('index', compact('courses'));
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
