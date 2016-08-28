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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//留言板
Route::get('/messages', 'MessageController@index');
Route::get('/post', 'MessageController@create');
Route::post('/messages', 'MessageController@store');
Route::delete('/messages/{message}', 'MessageController@destroy');
Route::get('/messages/{message}/edit', 'MessageController@edit');
Route::get('/messages/{message}', 'MessageController@show');
Route::patch('messages/{message}', 'MessageController@update');