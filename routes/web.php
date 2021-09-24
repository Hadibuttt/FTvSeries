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

Route::get('/search/list-of-all-series', [App\Http\Controllers\IndexController::class, 'list_all_series'] );
Route::get('/{series_slug}/series', [App\Http\Controllers\IndexController::class, 'series'] );
Route::get('/{series_slug}/{season_slug}/series', [App\Http\Controllers\IndexController::class, 'season'] );
Route::get('/{series_slug}/{season_slug}/{episode_slug}/series', [App\Http\Controllers\IndexController::class, 'episode'] );
Route::get('/{series_slug}/{season_slug}/{episode_slug}/download', [App\Http\Controllers\IndexController::class, 'download'] );
Route::get('/tv-series-starting-with/{a1}/{a2}/{a3}', [App\Http\Controllers\IndexController::class, 'tv_series_starting'] );
Route::get('/search/genre', [App\Http\Controllers\IndexController::class, 'list_all_genre'] );
Route::get('/{genre}/genre', [App\Http\Controllers\IndexController::class, 'genre'] );
Route::post('/search', [App\Http\Controllers\IndexController::class, 'search'] );

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/insert-genre', [App\Http\Controllers\AdminController::class, 'genre_view'] );
    Route::post('/insert-genre', [App\Http\Controllers\AdminController::class, 'insert_genre_view'] );
    Route::get('/insert-series', [App\Http\Controllers\AdminController::class, 'series_view'] );
    Route::post('/insert-series', [App\Http\Controllers\AdminController::class, 'insert_series_view'] );
    Route::get('/insert-season', [App\Http\Controllers\AdminController::class, 'season_view'] );
    Route::post('/insert-season', [App\Http\Controllers\AdminController::class, 'insert_season_view'] );
    Route::get('/insert-episode', [App\Http\Controllers\AdminController::class, 'episode_view'] );
    Route::post('/insert-episode', [App\Http\Controllers\AdminController::class, 'insert_episode_view'] );
    Route::get('/insert-download-link', [App\Http\Controllers\AdminController::class, 'download_link_view'] );
    Route::post('/insert-download-link', [App\Http\Controllers\AdminController::class, 'insert_link_view'] );
});