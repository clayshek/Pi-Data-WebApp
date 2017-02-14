<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/pi', 'PiController@index');
Route::post('/pi', 'PiController@store');
Route::get('/pi/create', 'PiController@create');
Route::get('/pi/{pi}', 'PiController@show');

Route::get('/ups', 'UpsHeartbeatController@index');
Route::get('/ups/{id}', 'UpsHeartbeatController@show');

Route::get('/about', function () {
    return view('about');
});
