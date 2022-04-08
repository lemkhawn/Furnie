<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navController extends Controller
{
    //
    public function getNav()
    {
        return view('admin.navigationBar');
    }
}
