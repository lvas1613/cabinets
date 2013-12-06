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


Route::get('content/create', 'ContentController@create');
Route::post('content/post', 'ContentController@store');



Route::get('content/{name}', 'ContentController@show');

Route::get('users', function(){
    $users = User::all();

    return View::make('users')->with('users', $users);
}
);


Route::get('/zulu', function() {


    $image = Imagine::make('assets/imgs/abc.jpg')
        ->resize(800, 600, true)->save('assets/imgs/normal.jpg')
        ->resize(300, 300, true)->save('assets/imgs/thumbs/new4.jpg');

    return Response::make($image, 200, array('Content-type'=>'image/jpeg'));

}
);

//Filters



Route::controller('users', 'UserController');


Route::get('/images/create', 'ImageController@create');
Route::post('/post', 'ImageController@store');


//Home Page route static pages

Route::get('/home', 'HomeController@index');

Route::get('/contact', function(){
    return View::make('contact');
});




