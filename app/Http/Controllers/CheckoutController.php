<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Library\Cart;
use Session;
use Mail;
use DB;

use App\City;
use App\Product;
use App\Log;
use App\Order;
use App\OrderProduct;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cities = City::pluck('name', 'id');

        return view('checkout.index', compact('cart', 'cities'));
    }

    public function store(Request $request)
    {
        $log = new Log;
        $log->session_id = $request->session()->getId();
        $log->log_type_id = 2;
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
        return view('checkout.done', compact('order'));
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
        return view('checkout.done', compact('order'));
    }

    public function getCancel(Request $request){
        return redirect('/');
    }
}
