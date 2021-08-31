<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::get('/pages', [App\Http\Controllers\FrontPagesController::class, 'index'])->name('pages');
Route::get('/pages/show/{id}', [App\Http\Controllers\FrontPagesController::class, 'show'])->name('pages.show');


Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/courses/show/{id}', [App\Http\Controllers\front\CoursesController::class, 'show'])->name('courses.show');

    Route::get('/lessons/show/{id}', [App\Http\Controllers\front\LessonsController::class, 'show'])->name('lessons.show');


    Route::get('/lessons/video-loader/{playlist}', [App\Http\Controllers\LessonsController::class, 'video'])->name('lessons.video');
    Route::get('/lessons/secrets-loader/{key}', [App\Http\Controllers\LessonsController::class, 'secret'])->name('lessons.secrets');

    Route::middleware(['isAdmin'])->group(function() {
        Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
        Route::get('/courses/index', [App\Http\Controllers\CoursesController::class, 'index'])->name('admin.courses');
        Route::get('/courses/create', [App\Http\Controllers\CoursesController::class, 'create'])->name('admin.create');
        Route::post('/courses/store', [App\Http\Controllers\CoursesController::class, 'store'])->name('admin.store');
        Route::put('/courses/update/{id}', [App\Http\Controllers\CoursesController::class, 'update'])->name('admin.update');
        Route::get('/courses/delete/{id}', [App\Http\Controllers\CoursesController::class, 'destroy'])->name('admin.destroy');

        Route::get('/lessons/index', [App\Http\Controllers\LessonsController::class, 'index'])->name('admin.lessons');
        Route::get('/lessons/create', [App\Http\Controllers\LessonsController::class, 'create'])->name('admin.lessons.create');
        Route::post('/lessons/store', [App\Http\Controllers\LessonsController::class, 'store'])->name('admin.lessons.store');
        Route::put('/lessons/update/{id}', [App\Http\Controllers\LessonsController::class, 'update'])->name('admin.lessons.update');
        Route::get('/lessons/delete/{id}', [App\Http\Controllers\LessonsController::class, 'destroy'])->name('admin.lessons.destroy');


//        💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋 💋
//        ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️ 💗 💗 💗 💗 💗 💗 💗 💗 💗 💗 💗 💗 💗 💗 💗 💗 💗 💗
        Route::get('/users/index', [App\Http\Controllers\UserController::class, 'index'])->name('admin.users');
        Route::get('/setting/index', [App\Http\Controllers\SettingController::class, 'index'])->name('admin.setting');
        Route::put('/setting/update/{id}', [App\Http\Controllers\SettingController::class, 'update'])->name('admin.setting.update');



        Route::get('/pages/index', [App\Http\Controllers\PageController::class, 'index'])->name('admin.pages');
        Route::get('/pages/create', [App\Http\Controllers\PageController::class, 'create'])->name('admin.pages.create');
        Route::post('/pages/store', [App\Http\Controllers\PageController::class, 'store'])->name('admin.pages.store');
        Route::get('/pages/edit/{id}', [App\Http\Controllers\PageController::class, 'edit'])->name('admin.pages.edit');
        Route::put('/pages/update/{id}', [App\Http\Controllers\PageController::class, 'update'])->name('admin.pages.update');
        Route::get('/pages/delete/{id}', [App\Http\Controllers\PageController::class, 'destroy'])->name('admin.pages.destroy');




        Route::post('/users/courses', [App\Http\Controllers\VideoController::class, 'userCourseSync'])->name('users.courses');



    });

});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
