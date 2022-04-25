<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\productController;
use App\Http\Controllers\User;
use App\Http\Controllers\Category;
use App\Http\Controllers\addblog;
use App\Http\Controllers\brandController;

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
    $product = DB::table('products')->get();
    return view('index');
}) -> name('index');

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
Route::get('/table', function () {
    return view('table');
});
Route::get('/chandeliers', function () {
    return view('chandeliers');
});

Route::get('/product_detail', function () {
    return view('product_detail');
});
Route::get('/master', function () {
    return view('layout.master');
});
Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('navi', 'navController@getNav');


// Route login and register
Route::get('/login', 'loginController@getLogin') -> name('login');
Route::post('/login', 'loginController@postLogin');

Route::get('/register', 'loginController@getSignup') -> name('register');
Route::post('/register', 'loginController@postSignup');

// Route edit and delete user
// Route::group(['prefix' => 'user'], function() 
// {
    Route::get('/listUser/', 'loginController@listUser') -> name('listUser');
    Route::get('/editUser/{id}', 'loginController@getEditUser') -> name('editUser');
    Route::post('/editUser/{id}', 'loginController@postEditUser');
    Route::get('/deleteUser/{id}', 'loginController@deleteUser') -> name('deleteUser');
// });

Route::get('/getSession', 'loginController@getSession') -> name('getSession');

// route product
// Route::group(['prefix' => 'product'], function() 
// {
    Route::get('/listProduct/', 'addProduct@listProduct') -> name('listProduct');
    Route::get('/addProduct/', 'addProduct@getAddProduct') -> name('addProduct');
    Route::post('/addProduct/', 'addProduct@postAddProduct');
    Route::get('/editProduct/{id}', 'addProduct@getEditProduct') -> name('editProduct');
    Route::post('/editProduct/{id}', 'addProduct@postEditProduct');
    Route::get('/deleteProduct/{id}', 'addProduct@deleteProduct') -> name('deleteProduct');
// });

// Route::get('/product', 'addProduct@showProduct') -> name('product');
// Route::get('/addproductform', 'addProduct@addForm') -> name('addform');
// Route::post('/addproductform', 'addProduct@addProduct') -> name('addProduct');

// route category
// Route::group(['prefix' => 'cate'], function() 
// {
    Route::get('/listCategory', 'CategoryController@showCategory') -> name('listCategory');
    Route::get('/addcategoryform', 'CategoryController@addCate') -> name('addCategory');
    Route::post('/addcategoryform', 'CategoryController@addCategory') -> name('addCategory');
    Route::get('/editcategoryform/{id}', 'CategoryController@editCate') -> name('editCategoryForm');
    Route::post('/editcategoryform/{id}', 'CategoryController@editCategory') -> name('editCategory');
    Route::get('/deletecategoryform/{id}', 'CategoryController@deleteCategory') -> name('deleteCategory');
// });

    Route::get('/listblog', 'addblog@showBlog') -> name('listBlog');
    Route::get('/addBlog', 'addblog@addBlog') -> name('addBlogs');
    Route::post('/addBlog', 'addblog@addBlogs') -> name('addBlogs');
    Route::get('/editblogform/{id}', 'addblog@editBlog') -> name('editBlog');
    Route::post('/editblogform/{id}', 'addblog@editBlogs') -> name('editBlogs');
    Route::get('/deleteblogform/{id}', 'addblog@deleteBlog') -> name('deleteBlog');

    Route::get('/listbrand', 'brandController@showBrand') -> name('listBrand');
    Route::get('/addBrand', 'brandController@addBrand') -> name('addBrands');
    Route::post('/addBrand', 'brandController@addBrands') -> name('addBrands');
    Route::get('/editbrandform/{id}', 'brandController@editBrand') -> name('editBrand');
    Route::post('/editbrandform/{id}', 'brandController@editBrands') -> name('editBrand');
    Route::get('/deletebrandform/{id}', 'brandController@deleteBrand') -> name('deleteBrand');

Route::get('/chair', function () {
    $products = DB::table('products')->get();
    return view('chair', ['products' => $products]);
});

Route::get('detail/{id}', function ($id) {
    $product = DB::table('products')->where('id', $id)->first();
    return view('detailProduct', ['product' => $product]);
}) -> name('detail');