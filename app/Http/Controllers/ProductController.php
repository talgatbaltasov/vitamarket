<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use App\Product;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $viewed = Product::inRandomOrder()->take(20)->get();
    	return view('products.view', compact('product', 'viewed'));
    }
}
