<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Article;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\productController;
use App\Http\Controllers\User;
use App\Http\Controllers\Category;

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
    $article = DB::table('articles')->get();
    return view('index', compact('product', 'article'));
}) -> name('index');

Route::get('/products', function () {
    return view('products');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    $article = DB::table('articles')->get();
    return view('blog', compact('article'));
}) -> name('blog');
// Route::get('/about', function () {
// //     return view('about');
// });
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/chandeliers', function () {
    return view('chandeliers');
});
Route::get('/admin', function () {
    // if(Auth::check()) {
    //     if(Auth::user()->user_role == 'admin') {
    //         return view('admin');
    //     } else {
    //         return view('index');
    //     }
    // } else {
    //     return view('index');
    // }
    return view('admin.admin');
}) -> name('admin');


// Route login and register
Route::get('/login', 'loginController@getLogin') -> name('login');
Route::post('/login', 'loginController@postLogin');

Route::get('/register', 'loginController@getSignup') -> name('register');
Route::post('/register', 'loginController@postSignup');
Route::get('/logout', 'loginController@logOut') -> name('logout');


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

Route::get('/chair', function () {
    $products = DB::table('products')->get();
    return view('chair', ['products' => $products]);
});

Route::get('/detail/{id}', function ($id) {
    $product = DB::table('products')->where('id', $id)->first();
    return view('detailProduct', ['product' => $product]);
}) -> name('detail');
Route::post('/detail/{id}', 'CartController@getAddToCart') -> name('getAddToCart');

Route::get('/cart', 'CartController@getCart') -> name('cart');
Route::get('/deleteCart/{id}', 'CartController@getReduceByOne') -> name('deleteCart');

Route::get('getOrder', 'CartController@getOrder') -> name('getOrder');
Route::post('getOrder', 'CartController@postOrder') -> name('postOrder');


Route::get('/showArticle', 'ArticleController@showArticle') -> name('showArticle'); // show in index
Route::get('/showAdminArticle', 'ArticleController@showAdminArticle') -> name('showAdminArticle'); // show in admin
Route::get('/addArticle', 'ArticleController@addArticle') -> name('addArticle'); // add in admin
Route::post('/addArticle', 'ArticleController@postArticle');

Route::get('detailArticle/{id}', function ($id) {
    $article = DB::table('articles')->where('id', $id)->first();
    return view('detailArticle', ['article' => $article]);
}) -> name('detailArticle'); // view article in index

Route::get('/editArticle/{id}', 'ArticleController@getEditArticle') -> name('editArticle');
Route::post('/editArticle/{id}', 'ArticleController@postEditArticle');
Route::get('/deleteArticle/{id}', 'ArticleController@deleteArticle') -> name('deleteArticle');