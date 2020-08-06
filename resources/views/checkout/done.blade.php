@extends('layouts.app')

@section('title', 'Интернет-магазин Vitamarket')
@section('description', '★ Интернет-магазин Vitamarket ★ Широкий выбор товаров ✔ Удобная оплата ✔ Продукция с гарантией и доставкой в интернет-магазине витамин и БАД ➤ Круглосуточно 24/7 ☎ +7 707 807 97 77')

@section('content')
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                    <h3>Заказ оформлен</h3>
                        <ul>
                            <li><a href="/">Главная</a></li>
                            <li>Заказ оформлен</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    <!--contact area start-->
    <div class="contact_area mt-100">
        <div class="container">   
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message content">
                        <h3>Заказ успешно оформлен</h3>    
                        <ul>
                            <li>ФИО: {{$order->user->full_name}}</li>
                            <li>Электронная почта: {{$order->user->email}}</li>
                            <li>Номер телефона: {{$order->address->phone_number}}</li>
                            <li>Адрес: {{$order->address->full_address}}</li>
                            <li>Тип доставки: {{$order->shipping_type->name}} - {{$order->shipping_type->price}} тг.</li>
                        </ul>
                    </div> 
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message content">
                        <h3>Детали заказа</h3>    
                        <ul>
                            @php $total = 0; @endphp
                            @foreach($order->items as $item)
                                @php $total += $item->price * $item->quantity; @endphp
                                <li>{{$item->product->name}}: {{$item->price * $item->quantity}} тг.</li>
                            @endforeach
                            <li>Общее: {{$total}} тг.</li>
                        </ul> 
                    </div> 
                </div>
            </div>
        </div>    
    </div>
@endsection
