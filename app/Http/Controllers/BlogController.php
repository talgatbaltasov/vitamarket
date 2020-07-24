<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::where('status_id', 1)->orderBy('id', 'desc')->paginate(5);
        return view('blog.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();
        return view('blog.show', compact('article'));
    }
}
