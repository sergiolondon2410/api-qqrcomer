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

Route::get('businesses', 'App\Http\Controllers\ApiController@getAllBusinesses');
Route::get('businesses/{id}', 'App\Http\Controllers\ApiController@getBusiness');
Route::get('{slug}', 'App\Http\Controllers\ApiController@getAllBusinessProductsBySlug');
Route::get('products/business/{id}', 'App\Http\Controllers\ApiController@getAllBusinessProducts');
