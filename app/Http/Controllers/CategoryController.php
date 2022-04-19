<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function addCate() 
    {
        return view('admin.addCate');
    }

    public function addCategory() 
    {
        $category = new Category;
        $category->categoryname = request('categoryname');
        $category->description = request('description');
        $category->save();
        return redirect()->route('listCategory')->with('success', 'add category success');
    }

    public function showCategory()
    {
        $category = Category::all();
        return view('admin.showCate')->with('category', $category);;	
    }

    public function editCate($id)
    {
        $category = Category::find($id);
        return view('admin.editCate')->with('category', $category);
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        $category->categoryname = request('categoryname');
        $category->description = request('description');
        $category->save();
        return redirect()->route('listCategory')->with('success', 'update category success');
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('listCategory')->with('success', 'delete category success');
    }
}
