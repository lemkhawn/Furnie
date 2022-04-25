<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class brandController extends Controller
{
    

    public function addBrand() 
    {
        return view('admin.addBrand');
    }

    public function addBrands() 
    {
        $brand = new Brand;
        $brand->brand_name = request('brand_name');
        $brand->brand_description = request('brand_description');
        $brand->save();
        return redirect()->route('listBrand')->with('success', 'add brand success');
    }

    public function showBrand()
    {
        $brand = Brand::all();
        return view('admin.showBrand')->with('brand', $brand);   
    }

    public function editBrand($id)
    {
        $brand = Brand::find($id);
        return view('admin.editBrand')->with('brand', $brand);
    }

    public function editBrands($id)
    {
        $brand = Brand::find($id);
        $brand->brand_name = request('brand_name');
        $brand->brand_description = request('brand_description');
        $brand->save();
        return redirect()->route('listBrand')->with('success', 'edit brand success');
    }

    public function deleteBrand($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('listBrand')->with('success', 'delete brand success');
    }
}
