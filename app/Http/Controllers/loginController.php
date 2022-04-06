<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function getLogin() 
    {
        return view('Login');
    }

    public function postLogin()
    {
        
    }

    public function getSignup()
    {
        return view('Register');
    }
}
