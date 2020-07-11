<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use App\Category;
use App\Product;
use App\Status;
use Intervention\Image\ImageManagerStatic as Image;

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
        $filename = $request->slug.'.'.$request->main_image->extension();
        Image::make($request->file('main_image'))->resize(870, 400)->save(public_path('/photos/'.$filename));

        $product = Product::create($request->all());
        $product = new Product;
        $product->title = $request->title;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->main_image = $filename;
        $product->slug = $request->slug;
        if(isset($request->status) && $request->status == 1){
            $product->status = $request->status;
        } else {
            $product->status = 0;
        }
        $product->save();

        return redirect('/admin/products');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Product $product, Request $request)
    {
        if(isset($request->main_image)){
            $filename = $request->slug.'.'.$request->main_image->extension();
            Image::make($request->file('main_image'))->resize(870, 400)->save(public_path('/photos/'.$filename));
            $product->main_image = $filename;
        }

        $product->title = $request->title;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->slug = $request->slug;
        if(isset($request->status) && $request->status == 1){
            $product->status = $request->status;
        } else {
            $product->status = 0;
        }
        $product->save();

        return redirect('/admin/products');
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect('/admin/products');
    }
}
