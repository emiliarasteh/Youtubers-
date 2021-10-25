<?php

namespace App\Providers;

use App\Core\DataService;
use App\Core\Youtube;
use App\Models\Course;
use App\Models\Indicator;
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

        View::composer('*', function($view) {
            $courses = Course::orderBy('id', 'desc')->limit(16)->get();
            $view->with('courses', $courses);


        });

    }
}
