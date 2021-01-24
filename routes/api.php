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

Route::middleware(['client','throttle:20,2'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['client','throttle:20,2'])->group(function () {
    Route::apiResource('tweet', 'App\Http\Controllers\API\TweetController');
    Route::options('tweet','App\Http\Controllers\API\TweetController@options');
    Route::options('tweet/{tweet}','App\Http\Controllers\API\TweetController@options2');
});

