<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Order;
use App\OrderStatus;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::join('order_statuses', 'order_statuses.id', '=', 'orders.order_status_id')->orderBy('order_statuses.id')->get();
    	return view('admin.orders.index', compact('orders'));
    }
    
    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }

    public function orderStatus(Order $order, OrderStatus $order_status)
    {
        if($order_status->id == 2) {
            Mail::send(
                'emails.orders.send',
                ['order' => $order],
                function ($message) use($order) {
                    $message->from('kzvitamarket@gmail.com')
                        ->to($order->user->email)
                        ->bcc('talgat.baltasov@gmail.com')
                        ->subject('Ваш заказ #'.$order->id.' отправлен');
                }
            );
        }

        $order->order_status_id = $order_status->id;
        $order->save();

        return back()->withSuccess('Статус заказа успешно изменен');
    }
}
