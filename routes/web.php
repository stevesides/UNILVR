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
    return view('master');
});
Route::get('/headers', function () {
    return view('components.headers');
});
Route::get('/footers', function () {
    return view('components.footers');
});
Route::get('/home', function () {
    return view('layouts.home');
});


