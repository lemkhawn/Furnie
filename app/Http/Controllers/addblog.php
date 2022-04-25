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

    public function addBlogs() 
    {
        $blog = new Blog;
        $blog->blog_name = request('blog_name');
        $blog->blog_description = request('blog_description');
        $blog->save();
        return redirect()->route('listBlog')->with('success', 'add Blog success');
    }

    public function showBlog()
    {
        $blog = Blog::all();
        return view('admin.showBlog')->with('blog', $blog);   
    }

    public function editBlog($id)
    {
        $blog = Blog::find($id);
        return view('admin.editBlog')->with('blog', $blog);
    }

    public function editBlogs($id)
    {
        $blog = Blog::find($id);
        $blog->blog_name = request('blog_name');
        $blog->blog_description = request('blog_description');
        $blog->save();
        return redirect()->route('listBlog')->with('success', 'edit Blog success');
    }

    public function deleteBlog($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('listBlog')->with('success', 'delete blog success');
    }
}


