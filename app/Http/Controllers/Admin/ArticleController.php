<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use Intervention\Image\ImageManagerStatic as Image;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->get();
    	return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $filename = $request->slug.'.'.$request->main_image->extension();
        Image::make($request->file('main_image'))->resize(870, 400)->save(public_path('/images/articles/'.$filename));
        $article = Article::create($request->all());

        return redirect('/admin/articles');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Article $article, Request $request)
    {
        if(isset($request->main_image)){
            $filename = $request->slug.'.'.$request->main_image->extension();
            Image::make($request->file('main_image'))->resize(870, 400)->save(public_path('/images/articles/'.$filename));
            $article->main_image = $filename;
        }

        $article->title = $request->title;
        $article->short_description = $request->short_description;
        $article->description = $request->description;
        $article->slug = $request->slug;
        if(isset($request->status) && $request->status == 1){
            $article->status = $request->status;
        } else {
            $article->status = 0;
        }
        $article->save();

        return redirect('/admin/articles');
    }

    public function delete(Article $article)
    {
        $article->delete();
        return redirect('/admin/articles');
    }
}
