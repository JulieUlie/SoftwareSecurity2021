  
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\TweetController;
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

Auth::routes(['verify' => true]);

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::post("/user/login", "LoginController@login")->middleware("throttle:10,2");

Route::middleware(['auth'])->group(function () {
    Route::middleware(['verified'])->group(function () {
        Route::get('/', function () {
            return view('home');
        });
        Route::get('/home', function () {
            return view('home');
        });
        Route::resource('tweet', TweetController::class);
        Route::get('/api', function () {
            return view('api');
        });
    });
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/terms', function () {
    return view('terms');
});