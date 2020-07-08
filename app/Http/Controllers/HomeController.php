<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use App\Product;
use App\Category;
use App\Article;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('order')->get();
        $bottom_categories = Category::where('parent_id', 6)->orderBy('order')->get();
        // search tips
        $products = Product::where('status_id', 1)->take(6)->get();

        $new_products = Product::where('status_id', 1)->orderBy('id', 'desc')->take(4)->get();
        $sale_products = Product::where('status_id', 1)->orderBy('id', 'desc')->skip(4)->take(4)->get();
        $most_viewed = Product::where('status_id', 1)->inRandomOrder()->take(30)->get();
        return view('home.home', compact('bottom_categories', 'categories', 'products', 'new_products', 'sale_products', 'most_viewed'));
    }

    public function subscribe(Request $request)
    {
        Newsletter::subscribe($request->email, [], 'subscribers', ['status' => 'pending']);
        return back()->with(['subscribed'=>'success']);
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
