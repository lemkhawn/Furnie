<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class loginController extends Controller
{
    //
    public function getLogin() 
    {
        return view('Login');
    }

    public function postLogin(Request $request)
    {
        $arr = ['username' => $request->username, 'password' => $request->password];
        if(Auth::attempt($arr)) {
            $success = 'Login success';
            if(Auth::user()->user_role == 'admin') {
                return redirect()->route('listProduct');
            } else {
                return redirect()->route('index');
            }
            // return redirect()->route('index')->with('success', $success);
        } else {
            return redirect()->back()->with('error', 'Login Failed');
        }
    }


    public function getSignup()
    {
        return view('Register');
    }

    public function postSignup(Request $request)
    {
        $user = new User;
        $user->username = $request->username;
        $user->user_fullname = $request->user_fullname;
        $user->user_email = $request->user_email;
        $user->user_phonenumber = $request->user_phonenumber;
        $user->password = Hash::make($request->password);
        $user->user_role = $request->user_role;
        $user->user_gender = $request->user_gender;
        $user->save();
        return redirect()->route('login');
    }

    public function getEditUser($id) 
    {
        $data['user'] = User::find($id);
        return view('admin.editUser', $data);
    }

    public function postEditUser(Request $request)
    {
        $user = User::find($request->id);
        $user->username = $request->username;
        $user->user_fullname = $request->user_fullname;
        $user->user_email = $request->user_email;
        $user->user_phonenumber = $request->user_phonenumber;
        $user->password = Hash::make($request->password);
        $user->user_role = $request->user_role;
        $user->user_gender = $request->user_gender;
        $user -> save();
        return redirect()->route('listUser');
    }

    public function listUser() 
    {
        $user = User::all();
        return view('admin.listuser', compact('user'));
    }

    public function deleteUser($id) 
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('listUser');
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
