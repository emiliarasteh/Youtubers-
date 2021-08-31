<?php

namespace App\Providers;

use App\Core\DataService;
use App\Core\Youtube;
use App\Models\Course;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->app->bind(DataService::class, Youtube::class);
        Paginator::useBootstrap();

        View::composer('layouts.master', function($view) {

//            $course = Course::orderBy()->limit(16)->get();
            $course = Course::orderBy('id', 'desc')->limit(16)->get();

            $view->with('course', $course);



        });
    }
}
