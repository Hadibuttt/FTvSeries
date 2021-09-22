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
    return view('index');
});

Route::get('/list-of-all-series', function () {
    return view('list-of-series');
});

Route::get('/list-of-all-genre', function () {
    return view('list-of-genre');
});

Route::get('/tv-series-starting-with/{a1}/{a2}/{a3}', function () {
    return view('tv-series');
});