<?php

namespace App\Providers;

use App\Core\DataService;
use App\Core\Youtube;
use App\Models\Course;
use App\Models\Indicator;
use App\Models\Setting;
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
            $email = Setting::where('key', 'email')->first()->value;
            $phone = Setting::where('key', 'phone_number')->first()->value;
            $address = Setting::where('key', 'address')->first()->value;

            $view->with('courses', $courses);
            $view->with('phone', $phone);
            $view->with('email', $email);
            $view->with('address', $address);

        });

    }
}
