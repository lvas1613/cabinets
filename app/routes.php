<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('content/create', array('before'=>'auth', 'uses'=>'ContentController@create'));
Route::post('content/post', 'ContentController@store');

Route::get('/images/create', array('before'=>'auth', 'uses'=>'ImageController@create'));
Route::post('/post', 'ImageController@store');

Route::get('content/{name}', 'ContentController@show');





Route::controller('users', 'UserController');







//Home Page route static pages

Route::get('/home', 'ContentController@index');



