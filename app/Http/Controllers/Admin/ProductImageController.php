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

        $filename = $product->slug.'_'.time().'.'.$request->file('main_image')->extension();
        $product_image = ProductImage::create([
            'product_id'    => $product->id,
            'image'         => $filename,
            'is_main'       => 1
        ]);
        
        Image::make($request->file('main_image'))->resize(870, 400)->save(public_path('/images/products/'.$filename));
        
        $i = 0;
        foreach($request->file('image') as $image) {
            $filename = $product->slug.'_'.$i.time().'.'.$image->extension();
            $product_image = ProductImage::create([
                'product_id'    => $product->id,
                'image'         => $filename
            ]);
            
            Image::make($image)->resize(870, 400)->save(public_path('/images/products/'.$filename));
            $i++;
        }

        return redirect('/admin/products');
    }

    public function delete(ProductImage $product_image)
    {
        $product_image->delete();
        return redirect()->route('admin.products');
    }
}
