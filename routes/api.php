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

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/user', "Api\AuthController@anaUser");
    Route::get('/cities', 'Api\TripsController@getCities');
    Route::post('/where-to', 'Api\TripsController@index');
    Route::post('/line-details', 'Api\LinesController@index');
    Route::post('/booking', 'Api\BookingController@store');
});


Route::post('/register', 'Api\AuthController@register');
Route::post('/login', 'Api\AuthController@login');
