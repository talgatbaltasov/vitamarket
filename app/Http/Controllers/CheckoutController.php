<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Library\Cart;
use Session;
use Mail;
use DB;

use App\Address;
use App\City;
use App\Product;
use App\Log;
use App\Order;
use App\OrderItem;
use App\User;

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
        $user = User::where('email', $request->email)->first();
        if(!$user) {
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
            ]);
        }
        $log = Log::create([
            'session_id'    => $request->session()->getId(),
            'log_type_id'   => 2,
            'user_id'       => $user->id
        ]);

        $request->session()->put('user', ['id' => $user->id]);

        $cart = $request->session()->get('cart');

        $address = Address::create([
            'user_id'       => $user->id, 
            'phone_number'  => $request->phone, 
            'street'        => $request->street, 
            'street2'       => $request->street2, 
            'city_id'       => $request->city_id
        ]);

        $order = Order::create([
            'user_id'           => $user->id, 
            'address_id'        => $address->id, 
            'order_status_id'   => 1, 
            'shipping_type_id'  => $request->shipping_type_id, 
            'total'             => $cart->totalPrice, 
            'comment'           => $request->comment
        ]);

        foreach ($cart->items as $item) {
            $order_item = OrderItem::create([
                'order_id'      => $order->id, 
                'product_id'    => $item['item']['id'], 
                'price'         => $item['item']['price'], 
                'quantity'      => $item['qty']
            ]);
        }

        // Clear the shopping cart, write to database, send notifications, etc.

        $request->session()->forget('cart');

        // Thank the user for the purchase

        $order_items = OrderItem::where('order_id', $order->id)->get();

        Mail::send(
            [],
            [],
            function ($message) {
                $message->from('talgat.baltasov@gmail.com')->to('dulat-serikov@mail.ru')
                    ->subject('Новый заказ на сайте Vitamarket.kz')
                    ->setBody('<h1>Ассалямуалейкум. Пришел новый заказ!</h1>', 'text/html');
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
