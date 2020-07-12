<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['brand_id', 'category_id', 'name', 'description', 'slug', 'price', 'sale_price', 'sale_end_at', 'order', 'status_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function main_image()
    {
        return $this->hasOne(ProductImage::class)->where('is_main', 1);
    }

    public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
