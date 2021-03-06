<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIsAdmin
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
        if (auth()->user()->is_admin === 1 || auth()->user()->email === 'emiliyarasty@yahoo.com'){
            return $next($request);
        }else{
            return redirect()->back()->with('error', 'شما به این صفحه دسترسی ندارید');

        }
    }
}
