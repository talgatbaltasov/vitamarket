<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Category;

class CategoryComposer
{
    public $categories = [];
    protected $cart;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->categories = Category::whereNull('parent_id')->orderBy('order')->get();
        $cart = $request->session()->get('cart');
        $this->cart = $cart;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->categories)
            ->with('cart', $this->cart);
    }
}
