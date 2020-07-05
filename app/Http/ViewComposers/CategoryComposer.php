<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Brand;

class CategoryComposer
{
    public $categories = [];
    protected $cart;
    public $products = [];
    public $brands = [];
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->categories = Category::whereNull('parent_id')->orderBy('order')->get();
        $this->products = Product::where('status', 1)->inRandomOrder()->take(6)->get();
        $this->brands = Brand::where('status', 1)->get();
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
            ->with('cart', $this->cart)
            ->with('products', $this->products)
            ->with('brands', $this->brands);
    }
}
