<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/UpsHeartbeat', 'Api\UpsHeartbeatController@store');
Route::get('/UpsHeartbeat/{id}/linev', 'Api\UpsHeartbeatController@showLinev');

//Route::get('/PiHeartbeat', 'Api\PiHeartbeatController@index'); //->middleware('auth:api'); not figured out yet
//Route::get('/PiHeartbeat/{id}', 'Api\PiHeartbeatController@show');
Route::post('/PiHeartbeat', 'Api\PiHeartbeatController@store');
//Route::delete('/PiHeartbeat/{id}', 'Api\PiHeartbeatController@destroy');
//Route::patch('/PiHeartbeat/{id}', 'Api\PiHeartbeatController@update');