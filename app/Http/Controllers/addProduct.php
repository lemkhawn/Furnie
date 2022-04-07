<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;

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
        if ($request->isMethod('POST')) {

            if($request->hasFile('images')) {
                $file = $request->file('images');
                // $path = $request->file('images')->store('images/products');
                $path = public_path('images/products');
                $filename = time().'_' . $file->getClientOriginalName();
                $file->move($path, $filename);
            } 
            $product = new Product;
            // $product->productid = $request->productid;
            $product->productname = $request->productname;
            $product->price = $request->price;
            $product->size = $request->size;
            $product->color = $request->color;
            $product->images = $filename;
            $product->category_id = $request->category_id;
            $product->description = $request->description;
            $product->save();
            return redirect()->route('product')-> with('success', 'Product has been added');
        }
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
