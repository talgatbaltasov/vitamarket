<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['user_id', 'phone_number', 'street', 'street2', 'city_id'];

    public function getFullAddressAttribute()
    {
        return $this->street.', '.$this->street2.', '.$this->city->name;
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
