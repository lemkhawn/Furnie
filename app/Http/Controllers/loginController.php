<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;


class loginController extends Controller
{
    //
    public function getLogin() 
    {
        return view('Login');
    }

    public function postLogin(Request $request)
    {
        $data = request()->all();
        if (Auth::attempt(['username' => $data['username'], 'password' => $data['password']])) {
            $info = Session::put('username', $data['username']);
            $info = Session::put('password', $data['password']);
            $success = 'Login Successfully';
            return redirect()->route('index')->with('success', $info);
        } else {
            $error = 'Login Failed';
            return redirect()->back()->with('error', $error);
        }
    }

    // public function getSession() 
    // {
    //     if(Session::has('username')) {
    //         // return response()->json(['session' => Session::get('username')]);
    //         $data = Session::get('username');
    //         $data = Session::get('password');
    //         dd($data);
    //     } else {
    //         return response()->json(['session' => 'null']);
    //     }
    // }

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
