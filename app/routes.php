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



Route::get('content/{name}', 'ContentController@show');


Route::get('images/content/{name}', 'ImageController@show');

Route::get('users', function(){
    $users = User::all();

    return View::make('users')->with('users', $users);
}
);



Route::controller('users', 'UserController');


Route::get('/images/create', array('before'=>'auth', 'uses'=>'ImageController@create'));
Route::post('/post', 'ImageController@store');




//Home Page route static pages

Route::get('/home', 'HomeController@index');

Route::get('/contact', function(){
    $data['title'] = 'contact';
    return View::make('contact',$data);
});




Route::get('test/{name}', function($name){
    
    try {
    $content = Category::where('name','=', $name)->firstOrFail();

    }

    catch (ModelNotFoundException $e)
    {
        return Redirect::to('users/login');
    }

    

    	


});
