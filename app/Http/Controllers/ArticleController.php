<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function showAdminArticle()
    {
        $article = Article::all();
        return view('admin.showArticle')->with('article', $article);
    }

    public function showArticle()
    {
        $article = Article::all();
        return view('about')->with('article', $article);
    }

    public function addArticle() 
    {
        return view('admin.addArticle');
    }

    public function postArticle(Request $request)
    {
        
        if($request->hasFile('images')) {
            $file = $request->file('images');
            // $path = $request->file('images')->store('images/products');
            $path = public_path('images/article');
            $filename = time().'_' . $file->getClientOriginalName();
            $file->move($path, $filename);
        } 
        $article = new Article;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->content = $request->content;
        $article->image = $filename;
        $article->save();
        return redirect()->route('showAdminArticle')->with('success', 'add article success');
    }

    
    public function getEditArticle($id)
    {
        $article = Article::find($id);  
        return view('admin.editArticle', compact('article'));
    }

    public function postEditArticle(Request $request, $id)
    {
        if($request->hasFile('images')) {
            $file = $request->file('images');
            // $path = $request->file('images')->store('images/products');
            $path = public_path('images/article');
            $filename = time().'_' . $file->getClientOriginalName();
            $file->move($path, $filename);
        } 
        $article = Article::find($id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->content = $request->content;
        $article->image = $filename;
        $article->save();
        return redirect()->route('showAdminArticle')->with('success', 'update article success');
    }

    public function deleteArticle($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('showAdminArticle')->with('success', 'delete article success');
    }

}
