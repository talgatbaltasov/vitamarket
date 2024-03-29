<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use App\Category;
use App\Product;
use App\Brand;

class CategoryController extends Controller
{
    public function all()
    {
        $products = Product::where('in_stock', 1)->paginate(15);
        $categories = Category::whereNull('parent_id')->orderBy('order')->get();
        $bestsellers = Product::where('in_stock', 1)->inRandomOrder()->take(5)->get();

        $viewed = Product::where('in_stock', 1)->inRandomOrder()->take(20)->get();

    	return view('categories.all', compact('categories', 'bestsellers', 'products', 'viewed'));
    }

    public function saleProducts()
    {
        $products = Product::where('in_stock', 1)->whereNotNull('sale_price')->paginate(15);
        $categories = Category::whereNull('parent_id')->orderBy('order')->get();
        $bestsellers = Product::where('in_stock', 1)->inRandomOrder()->take(5)->get();

        $viewed = Product::where('in_stock', 1)->inRandomOrder()->take(20)->get();

    	return view('categories.all', compact('categories', 'bestsellers', 'products', 'viewed'));
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();
        if(Category::where('parent_id', $category->id)->count() > 0) {
            $products = Product::where('in_stock', 1)->whereIn('category_id', Category::where('parent_id', $category->id)->get(['id'])->toArray())->paginate(15);
        } else {
            $products = $category->products()->paginate(15);
        }
        $categories = Category::whereNull('parent_id')->orderBy('order')->get();
        $bestsellers = Product::where('in_stock', 1)->inRandomOrder()->take(5)->get();

        $viewed = Product::where('in_stock', 1)->inRandomOrder()->take(20)->get();

    	return view('categories.show', compact('category', 'categories', 'bestsellers', 'products', 'viewed'));
    }

    public function brand($slug, $brand)
    {
        $category = Category::where('slug', $slug)->first();
        $brand = Brand::where('slug', $brand)->first();
        $products = $category->products()->where('brand_id', $brand->id)->paginate(15);
        $categories = Category::whereNull('parent_id')->orderBy('order')->get();
        $bestsellers = Product::where('in_stock', 1)->inRandomOrder()->take(5)->get();

        $viewed = Product::where('in_stock', 1)->inRandomOrder()->take(20)->get();

    	return view('categories.brand', compact('category', 'brand', 'categories', 'bestsellers', 'products', 'viewed'));
    }
}
