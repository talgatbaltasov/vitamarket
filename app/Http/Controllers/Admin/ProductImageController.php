<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use Intervention\Image\ImageManagerStatic as Image;

class ProductImageController extends Controller
{
    public function create()
    {
        return view('admin.product_images.create');
    }

    public function store(Request $request)
    {
        $product = Product::find($request->product_id);

        if($request->has('main_image')) {
            $filename = '/images/products/'.$product->slug.'_'.time().'.'.$request->file('main_image')->extension();
            $product_image = ProductImage::create([
                'product_id'    => $product->id,
                'image'         => $filename,
                'is_main'       => 1
            ]);
            
            Image::make($request->file('main_image'))->resize(1000, null, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(1000, 1000)->save(public_path($filename));
        }
        
        if($request->has('image')) {
            $i = 0;
            foreach($request->file('image') as $image) {
                $filename = '/images/products/'.$product->slug.'_'.$i.time().'.'.$image->extension();
                $product_image = ProductImage::create([
                    'product_id'    => $product->id,
                    'image'         => $filename
                ]);
                
                Image::make($request->file('main_image'))->resize(1000, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->crop(1000, 1000)->save(public_path($filename));
                $i++;
            }
        }

        return redirect('/admin/products/'.$product->id);
    }

    public function destroy(ProductImage $product_image)
    {
        $product_id = $product_image->product_id;
        $product_image->delete();
        return redirect('/admin/products/'.$product_id);
    }
}
