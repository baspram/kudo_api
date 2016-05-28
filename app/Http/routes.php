<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();

Route::get('/', 'MoviesController@index');
Route::get('movies', 'MoviesController@lists');
Route::post('movies', 'MoviesController@store');
Route::post('movies/search', 'MoviesController@search');
Route::get('movies/{id}', 'MoviesController@show');

Route::get('user', 'UserController@index');
Route::get('user/create', 'UserController@create');
Route::post('user', 'UserController@store');

