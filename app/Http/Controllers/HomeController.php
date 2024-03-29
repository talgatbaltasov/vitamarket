<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Mail;
use App\Article;
use App\Category;
use App\Banner;
use App\Feedback;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')->orderBy('order')->get();
        $sale_products = Product::where('status_id', 1)
                            ->where('in_stock', 1)
                            ->whereNotNull('sale_price')
                            ->where('sale_end_at', '>', Carbon::now())
                            ->inRandomOrder()
                            ->get();

        $feedbacks = Feedback::where('status_id', 1)->take(3)->get();

        $articles = Article::where('status_id', 1)->take(4)->get();
        $banners = Banner::where('status_id', 1)->get();
        return view('home.home', compact('categories', 'sale_products', 'feedbacks', 'articles', 'banners'));
    }

    public function search(Request $request)
    {
        $products = Product::where('in_stock', 1)->where(function($q) use($request){
            $q->where('name', 'like', '%'.$request->search.'%')->orWhere('slug', 'like', '%'.$request->search.'%');
        })->paginate(20);
        return view('home.search', compact('products'));
    }

    public function getVariants(Request $request)
    {
        $products = Product::where('in_stock', 1)->where('name', 'like', '%'.$request->search.'%')->take(20)->get();
        return response()->json($products);
    }

    public function serviceCenter()
    {
        return view('home.service-center');
    }

    public function paymentsDelivery()
    {
        return view('home.payments-delivery');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function postContact(Request $request)
    {
        Mail::send(
            [],
            [],
            function ($message) use($request) {
                $message->from('kzvitamarket@gmail.com')
                    ->to('kzvitamarket@gmail.com')
                    ->bcc('talgat.baltasov@gmail.com')
                    ->subject('Контакт: '.$request->subject)
                    ->setBody('Имя: '.$request->name.'<br>'.
                            'Email: '.$request->email.'<br>'. 
                            $request->comment, 'text/html');
            }
        );
        return redirect('/');
    }
}
