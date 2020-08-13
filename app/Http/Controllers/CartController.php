<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Library\Cart;
use Session;
use Mail;
use DB;

use App\Product;
use App\Log;
use App\Image;
use App\Order;
use App\OrderProduct;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        $cart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        return view('cart.index', compact('cart'));
    }

    public function applyCoupon(Request $request)
    {
    	$cart = $request->session()->get('cart');
    	if($cart->discountCode == ''){
	        $email = $request->discount_email;
	        $request->session()->put('user', ['email' => $email]);
	        $discount_code = $request->discount_code;
	        $cart->discountCode = $discount_code;
	        $discount = Discount::where('code', $discount_code)->where('start_date', '<=', date('Y-m-d H:i:s'))->where('end_date', '>=', date('Y-m-d H:i:s'))->first();
	        foreach($cart->items as $key=>$item){
	        	if(
	                isset($discount->id) &&
	                ($discount->product_type == 'all' || $discount->group->products()->where(DB::raw('products.id'), $item['item']['id'])->count() > 0) &&
		            ($discount->user_type == 'all' || $discount->group->users()->where(DB::raw('group_users.email'), $email)->count() > 0)
		        ){
	                $cart->items[$key]['discount_price'] = $item['item']['price'] * $item['qty'] * ((100-$discount->rate)/100);
		            $cart->totalPrice = $cart->totalPrice - $item['price'] + $cart->items[$key]['discount_price'];
		        }
	        }
    	}

        return back();
    }

    public function addToCart(Request $request)
    {
        $product = Product::find($request->product_id);

        $price = $product->price;
        if($product->sale_price != null){
            $price = $product->sale_price;
        }

        return $price;

        $log = new Log;
        $log->session_id = $request->session()->getId();
        $log->log_type_id = 1;
        $log->product_id = $product->id;
        $log->user_id = \Auth::user() ? \Auth::user()->id : null;
        $log->save();

        $cart_data = [
            'id' => $product->id,
            'name' => $product->name,
            'description' => $product->description,
            'category_id' => $product->category_id,
            'slug' => $product->slug,
            'main_image' => $product->main_image->image,
            'price' => $price
        ];

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($cart_data, $product->main_image->image, $cart_data['id'], $request->quantity);
        $request->session()->put('cart', $cart);

        return ['result'=>'new_added', 'product' => $product, 'main_image' => $product->main_image->image, 'quantity' => $request->quantity];
    }

    public function clearCart(Request $request)
    {
        return $request->session()->forget('cart');
    }

    public function removeCartItem(Request $request)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($request->key);

        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return 'success';
    }

    public function incrementCartItem(Request $request)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseByOne($request->id);
        Session::put('cart', $cart);
        return 'success';
    }

    public function decrementCartItem(Request $request)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($request->id);

        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return 'success';
    }
}
