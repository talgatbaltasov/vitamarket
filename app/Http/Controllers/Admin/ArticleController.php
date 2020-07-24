<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use App\Status;
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
        $statuses = Status::pluck('name_ru', 'id');
        return view('admin.articles.create', compact('statuses'));
    }

    public function store(Request $request)
    {
        $filename = '/images/articles/'.$request->slug.'.'.$request->main_image->extension();
        Image::make($request->file('main_image'))->resize(600, 373)->save(public_path($filename));
        $data = $request->all();
        $data['main_image'] = $filename;
        $article = Article::create($data);

        return redirect('/admin/articles');
    }

    public function edit(Article $article)
    {
        $statuses = Status::pluck('name_ru', 'id');
        return view('admin.articles.edit', compact('article', 'statuses'));
    }

    public function update(Article $article, Request $request)
    {
        $data = $request->all();

        if(isset($request->main_image)){
            $filename = '/images/articles/'.$request->slug.'.'.$request->main_image->extension();
            Image::make($request->file('main_image'))->resize(600, 373)->save(public_path($filename));
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
