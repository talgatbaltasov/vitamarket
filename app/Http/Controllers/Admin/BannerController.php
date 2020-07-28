<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banner;
use App\Status;
use Intervention\Image\ImageManagerStatic as Image;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('id', 'desc')->get();
    	return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        $statuses = Status::pluck('name_ru', 'id');
        return view('admin.banners.create', compact('statuses'));
    }

    public function store(Request $request)
    {
        $filename = '/images/banners/'.time().'.'.$request->image->extension();
        Image::make($request->file('image'))->resize(600, 373)->save(public_path($filename));
        $data = $request->all();
        $data['image'] = $filename;
        $banner = Banner::create($data);

        return redirect('/admin/banners');
    }

    public function edit(Banner $banner)
    {
        $statuses = Status::pluck('name_ru', 'id');
        return view('admin.banners.edit', compact('banner', 'statuses'));
    }

    public function update(Banner $banner, Request $request)
    {
        $data = $request->all();

        if(isset($request->image)){
            $filename = '/images/banners/'.time().'.'.$request->image->extension();
            Image::make($request->file('image'))->resize(600, 373)->save(public_path($filename));
            $data['image'] = $filename;
        }
        
        $banner->update($data);

        return redirect('/admin/banners');
    }

    public function delete(Banner $banner)
    {
        $banner->delete();
        return redirect('/admin/banners');
    }
}
