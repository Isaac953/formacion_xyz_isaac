<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('formacions', 'FormacionsController@list');
Route::get('formacions/{id}', 'FormacionsController@get');
Route::post('formacions', 'FormacionsController@create');
Route::put('formacions/{id}', 'FormacionsController@update');
Route::delete('formacions/{id}', 'FormacionsController@delete');
