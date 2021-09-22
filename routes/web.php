<?php

use Illuminate\Support\Facades\Route;
use App\Models\Series;

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

Route::get('/list-of-all-series', [App\Http\Controllers\IndexController::class, 'list_all_series'] );
Route::get('/{series_slug}/series', [App\Http\Controllers\IndexController::class, 'series'] );

Route::get('/list-of-all-genre', function () {
    return view('list-of-genre');
});

Route::get('/tv-series-starting-with/{a1}/{a2}/{a3}', function () {
    return view('tv-series');
});

// Admin Routes
Route::get('/admin/insert-series', [App\Http\Controllers\AdminController::class, 'series_view'] );
Route::post('/admin/insert-series', [App\Http\Controllers\AdminController::class, 'insert_series_view'] );
