<?php

Route::get('content/create', array('before'=>'auth', 'uses'=>'ContentController@create'));
Route::post('content/post', 'ContentController@store');

Route::get('/images/create', array('before'=>'auth', 'uses'=>'ImageController@create'));
Route::post('/post', 'ImageController@store');

Route::get('content/{name}', 'ContentController@show');

Route::controller('users', 'UserController');

Route::get('/home', 'ContentController@index');



