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
        Route::get('/courses', [App\Http\Controllers\CoursesController::class, 'index'])->name('admin.courses');
        Route::get('/lessons', [App\Http\Controllers\CoursesController::class, 'index'])->name('admin.lessons');
        Route::get('/courses/create', [App\Http\Controllers\CoursesController::class, 'create'])->name('admin.create');
        Route::post('/courses/store', [App\Http\Controllers\CoursesController::class, 'store'])->name('admin.store');
        Route::get('/courses/update/{id}', [App\Http\Controllers\CoursesController::class, 'update'])->name('admin.update');
        Route::get('/courses/delete/{id}', [App\Http\Controllers\CoursesController::class, 'destroy'])->name('admin.destroy');



    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
