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



Route::get('/p', function(){

    $a = Content::where('cat_name', '=', 'about')->find(3)->paragraph;
    print $a;


});



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








//Array tests


Route::get('/d', function(){


    $dimension = array('thumbs'=>array('width'=>300, 'height'=>300), 'normal'=>array('width'=>800, 'height'=>600));

    var_dump($dimension);

    echo '<hr />';

    foreach ($dimension as $d):
	echo $d['width'].', '. $d['height'].'<br />';
    endforeach;

});


//Home Page route static pages

Route::get('/home', 'HomeController@index');

Route::get('/contact', function(){
    return View::make('contact');
});




