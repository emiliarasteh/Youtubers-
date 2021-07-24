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

Route::middleware(['auth'])->group(function() {


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


    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
