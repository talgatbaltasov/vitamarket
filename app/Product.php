<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['brand_id', 'category_id', 'name', 'description', 'slug', 'price', 'sale_price', 'order', 'status_id'];

    public function images(){
        return $this->hasMany('App\Image');
    }

    public function mainImage(){
        return $this->images()->where('is_main', 1)->first()->image;
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
