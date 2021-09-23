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
Route::get('/{series_slug}/{season_slug}/series', [App\Http\Controllers\IndexController::class, 'season'] );
Route::get('/{series_slug}/{season_slug}/{episode_slug}/series', [App\Http\Controllers\IndexController::class, 'episode'] );
Route::get('/{series_slug}/{season_slug}/{episode_slug}/download', [App\Http\Controllers\IndexController::class, 'download'] );

Route::get('/tv-series-starting-with/{a1}/{a2}/{a3}', [App\Http\Controllers\IndexController::class, 'tv_series_starting'] );

Route::get('/list-of-all-genre', function () {
    return view('list-of-genre');
});

// Admin Routes
Route::get('/admin/insert-series', [App\Http\Controllers\AdminController::class, 'series_view'] );
Route::post('/admin/insert-series', [App\Http\Controllers\AdminController::class, 'insert_series_view'] );
Route::get('/admin/insert-season', [App\Http\Controllers\AdminController::class, 'season_view'] );
Route::post('/admin/insert-season', [App\Http\Controllers\AdminController::class, 'insert_season_view'] );
Route::get('/admin/insert-episode', [App\Http\Controllers\AdminController::class, 'episode_view'] );
Route::post('/admin/insert-episode', [App\Http\Controllers\AdminController::class, 'insert_episode_view'] );
Route::get('/admin/insert-download-link', [App\Http\Controllers\AdminController::class, 'download_link_view'] );
Route::post('/admin/insert-download-link', [App\Http\Controllers\AdminController::class, 'insert_link_view'] );


