<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'description', 'slug', 'image', 'status_id'];
    
    public function products(){
        return $this->hasMany(Product::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
