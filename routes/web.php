<?php

use App\Http\Controllers\SpaceController;
use App\Http\Controllers\SpaceMovieController;
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

Route::middleware('auth')->group(function () {
    Route::get('/spaces', 'SpaceController@index')->name('spaces');
    Route::post('/spaces', 'SpaceController@store');
    Route::get('/spaces/create', 'SpaceController@create');
    Route::get('/spaces/{space}', 'SpaceController@show');
    Route::post('/spaces/{space}/join', 'SpaceJoinController@store');
    Route::post('/spaces/{space}/leave', 'SpaceJoinController@destroy');

    Route::get('/movies', 'MovieController@index');
    Route::get('/movies/{id}', 'MovieController@show');

    Route::get('/spaces/{space}/movies', 'SpaceMovieController@index');
    Route::get('/spaces/{space}/movies/{id}', 'SpaceMovieController@show');
    //Route::post('/space/{space}/movies/{id}', 'SpaceMovieController@store');
});

Route::get('/explore', 'ExploreController');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
