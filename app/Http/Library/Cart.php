<?php

namespace App\Http\Library;

use App\Discount;
use DB;
use Session;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public $discountCode = '';

    public function __construct($oldCart)
    {
        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
            $this->discountCode = $oldCart->discountCode;
        }
    }

    public function add($item, $main_image, $id, $quantity=1) {
        $storedItem = ['qty' => $quantity, 'price' => $item['price'], 'discount_price'=>'', 'item' => $item, 'main_image' => $main_image];
        if($this->items) {
            if(array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
                $storedItem['qty'] += $quantity;
            }
        }

        $storedItem['price'] = $item['price'] * $storedItem['qty'];

        $user = Session::get('user');

        if($this->discountCode != ''){
            $discount = Discount::where('code', $this->discountCode)->where('start_date', '<=', date('Y-m-d H:i:s'))->where('end_date', '>=', date('Y-m-d H:i:s'))->first();
            $user = Session::get('user');
            if(
                isset($discount->id) &&
                ($discount->product_type == 'all' || $discount->group->products()->where(DB::raw('products.id'), $id)->count() > 0) &&
	            ($discount->user_type == 'all' || $discount->group->users()->where(DB::raw('group_users.email'), $user['email'])->count() > 0)
            ){
                $storedItem['discount_price'] = $storedItem['item']['price'] * $storedItem['qty'] * ((100-$discount->rate)/100);
                $this->totalPrice = $this->totalPrice - $item['price'] + $storedItem['discount_price']/$storedItem['qty'];
            }
        }

        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $storedItem['price'];
    }

    public function increaseByOne($id) {
        $this->items[$id]['qty']++;
        $this->items[$id]['price'] += $this->items[$id]['item']['price'];
        $this->totalQty++;
        $this->totalPrice += $this->items[$id]['item']['price'];

        $user = Session::get('user');

        if($this->discountCode != ''){
            $discount = Discount::where('code', $this->discountCode)->where('start_date', '<=', date('Y-m-d H:i:s'))->where('end_date', '>=', date('Y-m-d H:i:s'))->first();
            $user = Session::get('user');
            if(
                isset($discount->id) &&
                ($discount->product_type == 'all' || $discount->group->products()->where(DB::raw('products.id'), $id)->count() > 0) &&
	            ($discount->user_type == 'all' || $discount->group->users()->where(DB::raw('group_users.email'), $user['email'])->count() > 0)
            ){
                $this->items[$id]['discount_price'] = $this->items[$id]['item']['price'] * $this->items[$id]['qty'] * ((100-$discount->rate)/100);
                $this->totalPrice = $this->totalPrice - $this->items[$id]['item']['price'] + $this->items[$id]['discount_price']/$this->items[$id]['qty'];
            }
        }

        if($this->items[$id]['qty'] <= 0) {
            unset($this->items[$id]);
        }
    }

    public function reduceByOne($id) {
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['price'];

        $user = Session::get('user');

        if($this->discountCode != ''){
            $discount = Discount::where('code', $this->discountCode)->where('start_date', '<=', date('Y-m-d H:i:s'))->where('end_date', '>=', date('Y-m-d H:i:s'))->first();
            $user = Session::get('user');
            if(
                isset($discount->id) &&
                ($discount->product_type == 'all' || $discount->group->products()->where(DB::raw('products.id'), $id)->count() > 0) &&
	            ($discount->user_type == 'all' || $discount->group->users()->where(DB::raw('group_users.email'), $user['email'])->count() > 0)
            ){
                $this->items[$id]['discount_price'] = $this->items[$id]['item']['price'] * $this->items[$id]['qty'] * ((100-$discount->rate)/100);
                if($this->items[$id]['qty'] == 0){
                    $this->totalPrice = $this->totalPrice + $this->items[$id]['item']['price'] - $this->items[$id]['discount_price']/($this->items[$id]['qty'] + 1);
                } else {
                    $this->totalPrice = $this->totalPrice + $this->items[$id]['item']['price'] - $this->items[$id]['discount_price']/$this->items[$id]['qty'];
                }
            }
        }

        if($this->items[$id]['qty'] <= 0) {
            unset($this->items[$id]);
        }
    }

    public function removeItem($id) {
        $this->totalQty -= $this->items[$id]['qty'];
        if($this->items[$id]['discount_price'] > 0){
            $this->totalPrice -= $this->items[$id]['discount_price'];
        } else {
            $this->totalPrice -= $this->items[$id]['price'];
        }

        unset($this->items[$id]);
    }
}
