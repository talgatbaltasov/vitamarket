<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use App\Product;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::where('in_stock', 1)->where('slug', $slug)->first();
        $viewed = Product::where('in_stock', 1)->inRandomOrder()->take(20)->get();
    	return view('products.show', compact('product', 'viewed'));
    }
}
