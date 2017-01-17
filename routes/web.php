<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', 'Auth\CustomAuthController@getLogin');
    Route::post('/login', 'Auth\CustomAuthController@postLogin');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'IncomeController@index');

    Route::get('/home', 'IncomeController@index');
    Route::get('/income', 'IncomeController@index');

    Route::get('/user', 'UserController@index');
    Route::post('/user/add', 'UserController@store');
    Route::get('/user/{id}/edit', 'UserController@getUpdate')->where(['id' => '[0-9]+']);
    Route::post('/user/{id}/update', 'UserController@postUpdate')->where(['id' => '[0-9]+']);
    Route::get('/user/{id}/delete', 'UserController@getDelete')->where(['id' => '[0-9]+']);

    Route::get('/logout', 'Auth\CustomAuthController@logout');
});

