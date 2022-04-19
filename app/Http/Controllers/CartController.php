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
            $cart->quantity = $value ?? '1';
            $cart->save();
            $alertadd = 'Add to cart successfully!';
            // dd($cart);
            return back()->with('alertadd', $alertadd);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function getCart()
    {
        // $cart = new Cart();
        $cart = DB::table('cart')
            ->join('products', 'products.id', '=', 'cart.product_id')
            ->join('users', 'users.id', '=', 'cart.user_id')
            ->select('cart.id','products.productname', 'products.price', 'products.images','products.color', 'users.username')
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
