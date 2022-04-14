<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class addblog extends Controller
{
    //
    public function addBlog() 
    {
        return view('admin.addBlog');
    }

    public function addBlog() 
    {
        $blog = new Blog;
        $blog->blog_name = request('blog_name');
        $blog->blog_description = request('blog_description');
        $blog->save();
        return redirect()->route('listBlog')->with('success', 'add Blog success');
    }

    public function showBlog()
    {
        $category = Blog::all();
        return view('admin.showBlog')->with('blog', $blog);;    
    }

    public function editBlog($id)
    {
        $category = Blog::find($id);
        return view('admin.editBlog')->with('blog', $blog);
    }

    public function editBlog($id)
    {
        $blog = new Blog;
        $blog->blog_name = request('blog_name');
        $blog->blog_description = request('blog_description');
        $blog->save();
        return redirect()->route('listBlog')->with('success', 'add Blog success');
    }

    public function deleteCategory($id)
    {
        $category = Blog::find($id);
        $category->delete();
        return redirect()->route('blog')->with('success', 'delete category success');
    }
}


