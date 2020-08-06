<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->get();
    	return view('admin.orders.index', compact('orders'));
    }
    
    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }
}
