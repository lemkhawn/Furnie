<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;


class loginController extends Controller
{
    //
    public function getLogin() 
    {
        return view('Login');
    }

    public function postLogin()
    {
        $data = request()->all();
        if (Auth::attempt(['username' => $data['username'], 'password' => $data['password']])) {
            return redirect()->route('index');
        } else {
            return redirect()->back();
        }
    }

    public function getSignup()
    {
        return view('Register');
    }

    public function postSignup(Request $request)
    {
        $user = new User;
        $user->user_name = $request->user_name;
        $user->user_fullname = $request->user_fullname;
        $user->user_email = $request->user_email;
        $user->user_phonenumber = $request->user_phonenumber;
        $user->password = Hash::make($request->password);
        $user->user_role = $request->user_role;
        $user->user_gender = $request->user_gender;
        $user->save();
        return redirect()->route('login');
    }
}
