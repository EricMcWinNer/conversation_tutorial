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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/signup", function() {
    return view('auth.signup');
});
Route::get("/signin", function() {
    return view('auth.signin');
});
Route::prefix('/doctor')->group(function() {
    Route::get('/home', function () {
        return view('doctor.home');
    });
    Route::get('/messenger', function () {
        return view('doctor.messenger');
    });
});
Route::prefix('/patient')->group(function() {
    Route::get('/home', function () {
        return view('doctor.home');
    });
    Route::get('/messenger', function () {
        return view('doctor.messenger');
    });
});
