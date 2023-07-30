<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth.basic')->group(function () {
    Route::post('/items', 'ItemApiController@store')->name('items.store');
});

//Route::get('/items', 'ItemApiController@index')->name('items.index');
//Route::middleware('auth.basic')->get('/user', function (Request $request) {
//    return Auth::user();
//});
