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


Route::get('/create', 'ContentController@create');
Route::post('/post', 'ContentController@store');

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
    // Validation? Not in my quickstart!
    // No, but really, I'm a bad person for leaving that out
    Auth::attempt( array('email' => Input::get('email'), 'password' => Input::get('password')) );

    return Redirect::to('/');
});
