<?php

namespace App\Http\Controllers;

use App\Models\Course;
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

    public function show()
    {

    }
}
