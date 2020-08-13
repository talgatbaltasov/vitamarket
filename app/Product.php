<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['brand_id', 'category_id', 'name', 'description', 'slug', 'price', 'sale_price', 'sale_end_at', 'order', 'status_id'];

    protected $dates = ['sale_end_at'];

    public function getPriceAttribute($value)
    {
        return number_format($value, 0);
    }

    public function getSalePriceAttribute($value)
    {
        if($value != null) {
            return number_format($value, 0);
        }
        return null;
    }

    public function getSaleRateAttribute()
    {
        return ceil(($this->price - $this->sale_price) * 100 / $this->price);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
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
