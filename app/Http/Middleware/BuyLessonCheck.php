<?php

namespace App\Http\Middleware;

use App\Models\Lesson;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BuyLessonCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $lesson_id = Str::after(url()->current(), 'show/');
        $lesson = Lesson::where('id', $lesson_id)->first();
        $course_id = $lesson->course_id;

        $user = User::where('id', auth()->user()->id)->whereHas('courses', function($q) use($course_id){
            $q->where('courses.id', $course_id);
        })->first();

        if ($user !== null || (!auth()->guest() && 1 === auth()->user()->is_admin)){
            return $next($request);
        }else{
           return redirect()->back()->with('error', 'شما این درس را خریداری نکرده اید');

        }

    }
}
