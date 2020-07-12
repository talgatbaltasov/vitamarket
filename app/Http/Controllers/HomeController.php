<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Product;
use App\Category;
use App\Article;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')->orderBy('order')->get();
        $sale_products = Product::where('status_id', 1)
                            ->whereNotNull('sale_price')
                            ->where('sale_end_at', '>', Carbon::now())
                            ->orderBy('order')
                            ->get();
        return view('home.home', compact('categories', 'sale_products'));
    }

    public function search(Request $request)
    {
        $products = Product::where('title', 'like', '%'.$request->search.'%')->get();
        return view('home.search', compact('products'));
    }

    public function serviceCenter()
    {
        return view('home.service-center');
    }

    public function paymentsDelivery()
    {
        return view('home.payments-delivery');
    }

    public function faq()
    {
        return view('home.faq');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function postContact(Request $request)
    {
        $to      = 'talgat.baltasov@gmail.com';
        $subject = $request->subject;
        $message = 'Имя: '.$request->name.'<br>';
        $message .= 'Email: '.$request->email.'<br>';
        $message .= $request->comment;
        $headers = 'From: '.$request->email."\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
        return redirect('/');
    }

    public function blog()
    {
        $bestsellers = Product::inRandomOrder()->take(5)->get();
        $articles = Article::where('status_id', 1)->orderBy('id', 'desc')->paginate(5);
        return view('blog.index', compact('bestsellers', 'articles'));
    }

    public function blogShow($slug)
    {
        $bestsellers = Product::inRandomOrder()->take(5)->get();
        $article = Article::where('slug', $slug)->first();
        return view('blog.show', compact('article', 'bestsellers'));
    }
}
