<?php

use App\Http\Controllers\AuthFacebookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//AuthFacebookController::routes();

Route::get('/redirect', [App\Http\Controllers\AuthFacebookController::class, 'redirect']); //Route Facebook
Route::get('/callback', [App\Http\Controllers\AuthFacebookController::class, 'callback']); //Route Facebook
