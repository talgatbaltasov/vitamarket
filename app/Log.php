<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['log_type_id', 'session_id', 'user_id', 'product_id'];
}
