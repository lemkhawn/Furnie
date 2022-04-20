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
            // dd($cart);
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
        if(Auth::user()) {
            $cart = DB::table('carts')
                ->join('products', 'products.id', '=', 'carts.product_id')
                ->join('users', 'users.id', '=', 'carts.user_id')
                ->select('carts.*','products.productname', 'products.price', 'products.images','products.color', 'users.username')
                ->where('users.id', Auth::user()->id)
                ->get();
            $total = 0;
            return view('cart', ['cart' => $cart], ['total' => $total]);
        } else {
            return redirect()->route('login');
        }
    }
    // Get Order


    public function getReduceByOne($id)
    {
        $cart = Cart::find($id);
        // $cart->quantity = $cart->quantity - 1;
        $cart->delete();
        return redirect()->route('cart');
    }

    // public function getOrder() 
    // {

    // }

    public function postOrder(Request $request)
    {
        $order = new Order();
        // $order->user_id = Auth::user()->id;

        $order->cart_id = $request -> cart_id;
        $order->total = $request->total;
        $order->address = $request->address;
        $order->save();
        return redirect()->route('index');
    }

}
