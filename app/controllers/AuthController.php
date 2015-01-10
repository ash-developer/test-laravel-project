<?php

class AuthController extends BaseController
{

    public function login()
    {

        if (Request::isMethod('post')) {
            if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
                return Redirect::route('admin');
            }
        }

        return View::make('auth.login');
    }

}