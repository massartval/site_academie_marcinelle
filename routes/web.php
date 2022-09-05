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

/*
Route::get('/', function () {
    return view('home');
});
*/

Auth::routes();

// Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Profile
Route::get('/dashboard', [App\Http\Controllers\ProfileController::class, 'show'])->name('dashboard');

// Course
Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index']);

// Group
Route::get('/groups', [App\Http\Controllers\GroupController::class, 'index']);
