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

//

Route::get('/home', 'HomeController@index')->name('home');

Route::get('userinfo', function (){
    return \Auth::User();
});

Route::get('movies/manage', 'MovieController@showDeleted');

Route::get('movies/{movie}/forceDelete', 'MovieController@forceDelete');

Route::get('movies/{movie}/restore', 'MovieController@restore');


Route::resource('movies', 'MovieController');
Route::resource('reviews', 'ReviewController');


