<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['total_items', 'total_unique_items', 'user_id', 'log_id'];
}
