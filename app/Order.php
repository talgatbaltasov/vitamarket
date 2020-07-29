<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'address_id', 'order_status_id', 'shipping_type_id', 'total', 'comment'];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function shipping_type()
    {
        return $this->belongsTo(ShippingType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
