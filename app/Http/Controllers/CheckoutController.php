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
use App\ShippingType;
use App\User;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cities = City::pluck('name', 'id');

        $shipping_types = ShippingType::pluck('name', 'id');

        return view('checkout.index', compact('cart', 'cities', 'shipping_types'));
    }

    public function store(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if(!$user) {
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname'  => $request->lastname,
                'email'     => $request->email
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
        return redirect('/thank-you?order='.$order->id);
    }

    public function thankYou(Request $request){
        $order = Order::find($request->order);
        return view('checkout.done', compact('order'));
    }
}
