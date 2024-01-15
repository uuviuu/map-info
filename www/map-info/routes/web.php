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
    Route::get('/registration', 'AuthController@getPageRegistration')->name('registration.get-page');
    Route::post('/registration', 'AuthController@registration')->name('registration');
    Route::get('/login', 'AuthController@getPageLogin')->name('login.get-page');
    Route::post('/login', 'AuthController@login')->name('login');
    Route::post('/logout', 'AuthController@logout')->name('logout');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'task-sql'], function () {
        Route::get('/', 'TaskSqlController@getPageSql')->name('task-sql.get-page');
        Route::post('/generate-table', 'TaskSqlController@createShopTable')->name('task-sql.generate-table');
    });

    Route::group(['prefix' => 'task-php'], function () {
        Route::get('/', 'TaskPhpController@getPagePhp')->name('task-php.get-page');
        Route::get('/get-map-info', 'TaskPhpController@getMapInfo')->name('task-php.get-map-info');
    });

});
