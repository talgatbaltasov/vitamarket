<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['product_id', 'name', 'position', 'description', 'image', 'link', 'link_label'];
}
