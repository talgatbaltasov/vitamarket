<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['order_id', 'product_id', 'price', 'quantity'];

    public function getPriceAttribute($value)
    {
        return number_format($value, 0, '.', '');
    }
    
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
