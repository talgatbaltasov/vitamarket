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
        $filename = '/images/articles/'.$request->slug.'.'.$request->main_image->extension();
        Image::make($request->file('main_image'))->resize(870, 400)->save(public_path($filename));
        $data = $request->all();
        $data['main_image'] = $filename;
        $article = Article::create($data);

        return redirect('/admin/articles');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Article $article, Request $request)
    {
        $data = $request->all();

        if(isset($request->main_image)){
            $filename = '/images/articles/'.$request->slug.'.'.$request->main_image->extension();
            Image::make($request->file('main_image'))->resize(870, 400)->save(public_path($filename));
            $data['main_image'] = $filename;
        }
        
        $article->update($data);

        return redirect('/admin/articles');
    }

    public function delete(Article $article)
    {
        $article->delete();
        return redirect('/admin/articles');
    }
}
