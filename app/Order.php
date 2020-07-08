<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'address_id', 'order_status_id', 'shipping_type_id', 'total', 'comment'];

    public function items()
    {
        return $this->hasMany('App\OrderProduct');
    }
}
