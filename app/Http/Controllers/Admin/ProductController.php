<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use App\Category;
use App\Product;
use App\Status;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
    	return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $brands = Brand::pluck('name', 'id');
        $categories = Category::pluck('name', 'id');
        $statuses = Status::pluck('name_ru', 'id');
        return view('admin.products.create', compact('brands', 'categories', 'statuses'));
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        
        return redirect('/admin/product_images/create?product_id='.$product->id);
    }

    public function edit(Product $product)
    {
        $brands = Brand::pluck('name', 'id');
        $categories = Category::pluck('name', 'id');
        $statuses = Status::pluck('name_ru', 'id');

        return view('admin.products.edit', compact('product', 'brands', 'categories', 'statuses'));
    }

    public function update(Product $product, Request $request)
    {
        $product->update($request->all());

        return redirect()->route('admin.products');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products');
    }
}
