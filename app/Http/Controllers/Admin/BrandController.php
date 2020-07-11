<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use App\Status;
use Intervention\Image\ImageManagerStatic as Image;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->get();
    	return view('admin.brands.index', compact('brands'));
    }

    public function create()
    {
        $statuses = Status::pluck('name_ru', 'id');
        return view('admin.brands.create', compact('statuses'));
    }

    public function store(Request $request)
    {
        $filename = '/images/brands/'.$request->slug.'_'.time().'.'.$request->file('image')->extension();
        
        Image::make($request->file('image'))->save(public_path($filename));

        $data = $request->all();
        $data['image'] = $filename;
        $brand = Brand::create($data);
        
        return redirect('/admin/brands');
    }

    public function edit(Brand $brand)
    {
        $statuses = Status::pluck('name_ru', 'id');

        return view('admin.brands.edit', compact('brand', 'statuses'));
    }

    public function update(Brand $brand, Request $request)
    {
        $brand->update($request->all());

        return redirect()->route('admin.brands');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('admin.brands');
    }
}
