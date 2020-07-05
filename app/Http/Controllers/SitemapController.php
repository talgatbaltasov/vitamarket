<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;
use App\Product;
use App\Category;

class SitemapController extends Controller
{
    public function index()
    {
        $brands = Brand::where('status', 1)->get();
        $categories = Category::all();
        $products = Product::where('status', 1)->get();
        return view('sitemap.index', compact('brands', 'categories', 'products'));
    }
}
