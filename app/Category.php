<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['parent_id', 'name', 'description', 'slug', 'order', 'status_id'];
    
    public function products(){
        return $this->hasMany(Product::class);
    }

    public function children(){
        return $this->hasMany('App\Category', 'parent_id');
    }

    public function parent(){
        return $this->belongsTo('App\Category', 'parent_id');
    }
}
