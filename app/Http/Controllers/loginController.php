<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
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

    

    public function postLogin(UserRequest $request)
    {
        dd($request);
        $data = request()->all();
        if (Auth::attempt(['username' => $data['username'], 'password' => $data['password']])) {
            // $info = Session::put('username', $data['username']);
            // $info = Session::put('password', $data['password']);
            dd($data);
            $success = 'Login Successfully';
            return redirect()->route('index')->with('success', $success);
        } else {
            dd('Failed');
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
        return view('admin.formUpdate', $data);
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
}
