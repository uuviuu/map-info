<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@getHome')->name('home');

Route::group(['prefix' => 'auth'], function () {
    Route::get('/registration', 'AuthController@showRegistration')->name('show-registration');
    Route::post('/registration', 'AuthController@registration')->name('registration');
    Route::get('/login', 'AuthController@showLogin')->name('show-login');
    Route::post('/login', 'AuthController@login')->name('login');
    Route::post('/logout', 'AuthController@logout')->name('logout');
});
