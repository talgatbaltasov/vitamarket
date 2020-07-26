<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Library\Cart;
use Session;
use Mail;
use DB;

use App\Brand;
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
        $brands = Brand::where('status_id', 1)->get();
        return view('home.cart', compact('cart', 'brands'));
    }

    public function checkout(Request $request)
    {
        $cart = $request->session()->has('cart') ? $request->session()->get('cart') : null;

        return view('home.checkout', compact('cart'));
    }

    public function postCheckout(Request $request)
    {
        $log = new Log;
        $log->session_id = $request->session()->getId();
        $log->type = 'checkout';
        $log->user = $request->email;
        $log->save();

        $request->session()->put('user', ['email' => $request->email]);

        $cart = $request->session()->get('cart');

        $order = new Order;
        $order->total = $cart->totalPrice;
        $order->name = $request->fullname;
        $order->user = $request->email;
        $order->phone = $request->phone;
        $order->status = 'pending';
        $order->shipping_price = 0;
        $order->total = $cart->totalPrice;
        $order->address = $request->address.', '.$request->city.', '.$request->zip;
        $order->comment = $request->comment;
        $order->save();

        foreach ($cart->items as $item) {
            $order_product = new OrderProduct();
            $order_product->order_id = $order->id;
            $order_product->product_id = $item['item']['id'];
            $order_product->price = $item['item']['price'];
            $order_product->quantity = $item['qty'];
            if($cart->discountCode != null){
            	$discount = Discount::where('code', $cart->discountCode)->where('start_date', '<=', date('Y-m-d H:i:s'))->where('end_date', '>=', date('Y-m-d H:i:s'))->first();
            	if(
	                isset($discount->id) &&
	                $discount->group->products()->where(DB::raw('products.id'), $item['item']['id'])->count() > 0 &&
	                (
	                	($discount->group->users()->where(DB::raw('group_users.email'), $address->user)->count() > 0) ||
	                	($discount->group->users()->count() == 0)
	                )
	            ){
            		$order_product->discount_id = $discount->id;
	            }
            }
            $order_product->save();
        }

        // Clear the shopping cart, write to database, send notifications, etc.

        $request->session()->forget('cart');

        // Thank the user for the purchase

        $order_products = OrderProduct::where('order_id', $order->id)->get();

        Mail::send(
            [],
            [],
            function ($message) {
                $message->from('talgat.baltasov@gmail.com')->to('talgat.baltasov@gmail.com')
                    ->subject('New Order on Litestore.kz')
                    ->setBody('<h1>Hi, there is new order!</h1>', 'text/html');
            }
        );
        //$request->session()->forget('cart');
        return view('home.done', compact('order'));
    }

    public function getDone(Request $request){
        $address = Address::find($request->address_id);
        $cart = $request->session()->get('cart');

        $order = new Order;
        $order->total = $cart->totalPrice;
        $order->name = $request->name;
        $order->user = $address->user;
        $order->status = 'pending';
        $order->shipping_price = 0;
        $order->total = $cart->totalPrice;
        $order->address_id = $address->id;
        if(isset($request->paymentId)){
            $order->payment_id = $request->paymentId;
            $order->payer_id = $request->PayerID;
        }
        $order->save();

        foreach ($cart->items as $item) {
            $order_product = new OrderProduct();
            $order_product->order_id = $order->id;
            $order_product->product_id = $item['item']['id'];
            $order_product->price = $item['item']['price'];
            $order_product->quantity = $item['qty'];
            if($cart->discountCode != null){
            	$discount = Discount::where('code', $cart->discountCode)->where('start_date', '<=', date('Y-m-d H:i:s'))->where('end_date', '>=', date('Y-m-d H:i:s'))->first();
            	if(
	                isset($discount->id) &&
	                $discount->group->products()->where(DB::raw('products.id'), $item['item']['id'])->count() > 0 &&
	                (
	                	($discount->group->users()->where(DB::raw('group_users.email'), $address->user)->count() > 0) ||
	                	($discount->group->users()->count() == 0)
	                )
	            ){
            		$order_product->discount_id = $discount->id;
	            }
            }
            $order_product->save();
        }
        if(isset($request->paymentId)){
            $id = $request->paymentId;
            $token = $request->token;
            $payer_id = $request->PayerID;

            $payment = Paypalpayment::getById($id, $this->_apiContext);
            $paymentExecution = Paypalpayment::paymentExecution();
            $paymentExecution->setPayerId($payer_id);

            try {
                $payment->execute($paymentExecution, $this->_apiContext);
            } catch (\PayPal\Exception\PayPalConnectionException $ex) {
                echo $ex->getCode(); // Prints the Error Code
                echo $ex->getData(); // Prints the detailed error message
                die($ex);
            } catch (Exception $ex) {
                die($ex);
            }
        }

        // Clear the shopping cart, write to database, send notifications, etc.

        $request->session()->forget('cart');

        // Thank the user for the purchase

        $order_products = OrderProduct::where('order_id', $order->id)->get();

        //Mail::to($address->user)->send(new OrderFinished($order_products));
        //$request->session()->forget('cart');
        return view('home.done', compact('order'));
    }

    public function getCancel(Request $request){
        return redirect('/');
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

        $log = new Log;
        $log->session_id = $request->session()->getId();
        $log->log_type_id = 1;
        $log->product_id = $product->id;
        $log->user_id = \Auth::user() ? \Auth::user()->id : null;
        $log->save();

        $cart_data = [
            'id' => $product->id,
            'name' => $product->title,
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
