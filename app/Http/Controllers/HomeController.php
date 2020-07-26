<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Article;
use App\Category;
use App\Feedback;
use App\Product;

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

        $feedbacks = Feedback::where('status_id', 1)->take(3)->get();

        $articles = Article::where('status_id', 1)->take(4)->get();
        return view('home.home', compact('categories', 'sale_products', 'feedbacks', 'articles'));
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
}
