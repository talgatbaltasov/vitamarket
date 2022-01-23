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

    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
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
        $data = $request->all();
        if($request->has('in_stock')) { 
            $data['in_stock'] = 1;
        } else {
            $data['in_stock'] = 0;
        }
        $product = Product::create($data);
        
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
        $data = $request->all();
        if($request->has('in_stock') && $request->in_stock == 1) { 
            $data['in_stock'] = 1;
        } else {
            $data['in_stock'] = 0;
        }
        $product->update($data);

        return redirect('/admin/products/'.$product->id);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
