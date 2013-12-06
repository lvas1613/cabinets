<?php
/**
 * Created by PhpStorm.
 * User: csoliz
 * Date: 12/4/13
 * Time: 11:56 AM
 */
class UserController extends BaseController {

public function getLogin(){

    return View::make('users.login');
}
public function postSignin(){

    if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
        return Redirect::to('content/create')->with('message', 'You are now logged in!');
    }
    else {
        return Redirect::to('users/login')
            ->with('message', 'Your username/password combination was incorrect')
            ->withInput();
    }
}

    public function getLogout(){
        Auth::logout();
        return Redirect::to('users/login')->with('message','You are now logged out');
    }

}