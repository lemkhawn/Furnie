<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class addProduct extends Controller
{
    //
    public function addForm()
    {
        $category = Category::all();
        return view('formAddProduct')->with('category', $category);;	
    }
    public function addProduct(Request $request)
    {
        //
        $product = new Product;
        // $product->productid = $request->productid;
        $product->productname = $request->productname;
        $product->price = $request->price;
        $product->size = $request->size;
        $product->color = $request->color;

        // if($request->hasFile('images')) {
        //     $file = $request->file('images');
        //     $path = public_path('images');
        //     $filename = time() . '_' .$file->getClientOriginalName();
        //     $file->move($path,$filename);
        // } else {
        //     $filename = 'b1.jpg';
        // }

        $product->images = $request->images;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->save();
        return redirect('/')-> with('success', 'Product has been added');
    }

    public function showProduct()
    {
        //
        $product = Product::all();
        return view('showProduct', ['product' => $product]);
    }

    public function showProductByCategory($id)
    {
        //
        $product = Product::where('category_id', $id)->get();
        return view('showProduct', ['product' => $product]);
    }
     
    public function store()
    {

    }
}
