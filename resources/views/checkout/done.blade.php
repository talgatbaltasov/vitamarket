@extends('layouts.app')

@section('title', 'Интернет-магазин Vitamarket')
@section('description', '★ Интернет-магазин Vitamarket ★ Широкий выбор товаров ✔ Удобная оплата ✔ Продукция с гарантией и доставкой в интернет-магазине витамин и БАД ➤ Круглосуточно 24/7 ☎ +7 700 103 01 10')

@section('content')
    <section class="flat-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumbs">
                        <li class="trail-item">
                            <a href="/" title="">Главная</a>
                            <span><img src="/images/icons/arrow-right.png" alt=""></span>
                        </li>
                        <li class="trail-end">
                            <a href="#" title="">Заказ успешно оформлен</a>
                        </li>
                    </ul><!-- /.breacrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <section class="flat-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 colxs-12">
                    <div class="commontop text-left">
                        <h4>
                            Детали заказа [ id:{{$order->id}} ]
                            <i class="icon_star_alt"></i>
                            <i class="icon_star_alt"></i>
                            <i class="icon_star_alt"></i>
                        </h4>
                    </div>
                    <h5>Информация</h5>
                    <table>
                        <tbody><tr>
                            <td style="width:13%;">ФИО</td>
                            <td style="width:12%;">:</td>
                            <td style="width:70%;"><span>{{$order->name}}</span></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><span>{{$order->user}}</span></td>
                        </tr>
                        <tr>
                            <td>Телефон</td>
                            <td>:</td>
                            <td><span>{{$order->phone}}</span></td>
                        </tr>
                        <tr>
                            <td>Адрес</td>
                            <td>:</td>
                            <td><span>{{$order->address}}</span></td>
                        </tr>
                    </tbody></table>
                    <h5>Детали покупки</h5>
                    <table>
                        <tbody>
                            @php $total = 0; @endphp
                            @foreach($order->items as $item)
                                @php $total += $item->price * $item->quantity; @endphp
                                <tr>
                                    <td style="width:18%;">{{$item->product->title}}</td>
                                    <td style="width:12%;">:</td>
                                    <td style="width:45%;"><span>{{$item->price * $item->quantity}} тг.</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <h3>Общее <span>{{$total}} тг.</span></h3>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                    <h2>Заказ успешно оформлен!</h2>
                    <p>Спасибо за покупку</p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center box-cart style2">
                    <div class="buttons btn-add-cart">
                        <a href="/">На главную</button>
                        <a href="/">Продолжить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
