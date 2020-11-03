<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Order;

class NewOrderComposer
{
    public $new_orders = [];
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->new_orders = Order::where('order_status_id', 1)->count();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('new_orders', $this->new_orders);
    }
}
