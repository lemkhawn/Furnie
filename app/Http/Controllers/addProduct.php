<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class addProduct extends Controller
{
    //
    public function getAddProduct()
    {
        $category = Category::all();
        return view('admin.formAddProduct')->with('category', $category);;	
    }
    public function postAddProduct(Request $request)
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
            return redirect()->route('listProduct')-> with('success', 'Product has been added');
        }
    }



     
    public function getEditProduct( $id)
    {
        //
        $category = Category::all();
        $product = Product::find($id);
        return view('admin.editProduct', ['product' => $product], ['category' => $category]);
    }

    public function postEditProduct(Request $request,$id) 
    {
        //
        if($request->hasFile('images')) {
            $file = $request->file('images');
            // $path = $request->file('images')->store('images/products');
            $path = public_path('images/products');
            $filename = time().'_' . $file->getClientOriginalName();
            $file->move($path, $filename);
        } 
        $product = Product::find($id);
        $product->productname = $request->productname;
        $product->price = $request->price;
        $product->size = $request->size;
        $product->color = $request->color;
        $product->images = $filename;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('listProduct')-> with('success', 'Product has been updated');
    }

    public function deleteProduct($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('listProduct')-> with('success', 'Product has been deleted');
    }

<<<<<<< HEAD

=======
    public function listProduct()
    {
        $product = Product::all();
        return view('admin.showProduct', ['product' => $product] );
    }

    
>>>>>>> KienNg
}
