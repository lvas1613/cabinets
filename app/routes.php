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

Route::get('/show/{name}', 'ContentController@show');



Route::get('/p', function(){

    $a = Content::where('cat_name', '=', 'about')->find(3)->paragraph;
    print $a;


});

Route::get('users', function(){
    $users = User::all();

    return View::make('users')->with('users', $users);
}
);


Route::get('/zulu', function() {


    $image = Imagine::make('assets/imgs/new.jpg')->resize(300, 300, true)->save('assets/imgs/thumbs/new4.jpg');



    return Response::make($image, 200, array('Content-type'=>'image/jpeg'));

}
);


Route::get('/', array('before' => 'auth' ,function()
{
    return 'Hello, '.Auth::user()->email.'!';
}));

Route::get('/login', function()
{
    return View::make('login');
});

Route::post('/login', function()
{

    Auth::attempt( array('email' => Input::get('email'), 'password' => Input::get('password')) );

    return Redirect::to('/');
});


Route::get('/images/create', 'ImageController@create');
Route::post('/post', 'ImageController@store');
