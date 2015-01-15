<?php

class AuthController extends BaseController
{

    public function login()
    {
        if (Auth::attempt(Input::only('email', 'password'))) {
            return Redirect::route('admin');
        } else {
            return Redirect::back()->withInput()->with('error', 'Invalid credentials');
        }
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::to('/');
    }

}
