<?php

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

Route::get('/', 'HomeController@index')->name('homeIndex');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/logout', 'AuthController@logout');
    Route::get('/create', 'HomeController@create');
    Route::post('/create', 'HomeController@store');
});
Route::group(['middleware' => 'guest'], function(){ 
    Route::get('/login', 'AuthController@loginForm')->name('login');
    Route::post('/login', 'AuthController@login');
    Route::get('/register', 'AuthController@registerForm');
    Route::post('/register', 'AuthController@register');
});
