<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Basic routes 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/chair', function () {
    return view('chair');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/chandeliers', function () {
    return view('chandeliers');
});


// Route login and register
Route::get('/login', 'loginController@getLogin');
// Route::post('/login', 'loginController@postLogin');	
Route::get('/register', 'loginController@getSignup');
