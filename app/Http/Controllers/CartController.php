<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Product;
use App\Models\Cart;
use DB;
use Auth;

class CartController extends Controller
{
    //
    public function getAddToCart(Request $request, $id)
    {
        if(Auth::user()) {
            $cart = new Cart();
            $cart->product_id = Product::find($id)->id;
            $cart->user_id = Auth()->user()->id;
            $cart->quantity = $request->quantity;
            $cart->save();
            dd($cart);
            $alertadd = 'Add to cart successfully!';
            return redirect()->route('cart');
        }
        else {
            return redirect()->route('login');
        }
    }

    public function getCart()
    {
        // $cart = new Cart();
        $cart = DB::table('carts')
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->join('users', 'users.id', '=', 'carts.user_id')
            ->select('carts.id','products.productname', 'products.price', 'products.images','products.color', 'users.username')
            ->where('users.id', Auth::user()->id)
            ->get();
        $total = 0;
        return view('cart', ['cart' => $cart], ['total' => $total]);

    }

    public function getReduceByOne($id)
    {
        $cart = Cart::find($id);
        // $cart->quantity = $cart->quantity - 1;
        $cart->delete();
        return redirect()->route('getCart');
    }

    // public function 
}
