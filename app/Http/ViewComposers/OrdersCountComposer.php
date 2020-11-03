<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Order;

class OrdersCountComposer
{
    public $new_orders = 0;
    public $processing_orders = 0;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->new_orders = Order::where('order_status_id', 1)->count();
        $this->processing_orders = Order::where('order_status_id', 2)->count();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('new_orders', $this->new_orders)->with('processing_orders', $this->processing_orders);
    }
}
