<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Category;
use App\Product;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::where('status_id', 1)->get();
    	return view('brands.index', compact('brands'));
    }

    public function show($slug)
    {
        $brand = Brand::where('slug', $slug)->first();
        $products = $brand->products()->paginate(15);
        $categories = Category::whereNull('parent_id')->orderBy('order')->get();
        $bestsellers = Product::has('main_image')->inRandomOrder()->take(5)->get();

        $viewed = Product::inRandomOrder()->take(20)->get();

    	return view('brands.view', compact('brand', 'categories', 'bestsellers', 'products', 'viewed'));
    }
}
