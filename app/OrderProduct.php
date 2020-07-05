<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'order_product';
    public $timestamps = false;

    public function order()
    {
    	return $this->belongsTo('App\Order');
    }
    
    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
    
    public function discount()
    {
    	return $this->belongsTo('App\Discount');
    }
}
