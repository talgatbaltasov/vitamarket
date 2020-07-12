<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Feedback;
use App\Product;
use App\Status;
use Intervention\Image\ImageManagerStatic as Image;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
    	return view('admin.feedbacks.index', compact('feedbacks'));
    }

    public function show(Feedback $feedback)
    {
        return view('admin.feedbacks.show', compact('feedback'));
    }

    public function create()
    {
        $products = Product::pluck('name', 'id');
        $statuses = Status::pluck('name_ru', 'id');
        return view('admin.feedbacks.create', compact('products', 'statuses'));
    }

    public function store(Request $request)
    {
        $filename = '/images/feedbacks/'.time().'.'.$request->file('image')->extension();
        Image::make($request->file('image'))->resize(200, 200)->save(public_path($filename));

        $data = $request->all();
        $data['image'] = $filename;
        $feedback = Feedback::create($data);
        
        return redirect('/admin/feedbacks');
    }

    public function edit(Feedback $feedback)
    {
        $products = Product::pluck('name', 'id');
        $statuses = Status::pluck('name_ru', 'id');

        return view('admin.feedbacks.edit', compact('feedback', 'products', 'statuses'));
    }

    public function update(Feedback $feedback, Request $request)
    {
        $data = $request->all();

        if($request->has('image')) {
            $filename = '/images/feedbacks/'.time().'.'.$request->file('image')->extension();
            Image::make($request->file('image'))->resize(200, 200)->save(public_path($filename));
    
            $data['image'] = $filename;
        }
        
        $feedback->update($data);

        return redirect('/admin/feedbacks');
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->route('admin.feedbacks');
    }
}
