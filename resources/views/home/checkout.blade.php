@extends('layouts.app')

@section('title', 'Оформление заказа')
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
                            <a href="#" title="">Оформление заказа</a>
                        </li>
                    </ul><!-- /.breacrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section class="flat-checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="box-checkout">
                        <h3 class="title">Оформление заказа</h3>
                        <div class="checkout-login" style="display: none;">
                            Returning customer? <a href="#" title="">Click here to login</a>
                        </div>
                        <form action="/checkout" method="post" id="order-form" class="checkout" accept-charset="utf-8">
                            @csrf
                            <div class="billing-fields">
                                <div class="fields-title">
                                    <h3>Данные</h3>
                                    <span></span>
                                    <div class="clearfix"></div>
                                </div><!-- /.fields-title -->
                                <div class="fields-content">
                                    <div class="field-row">
                                        <label for="fullname">Имя и фамилия *</label>
                                        <input type="text" id="fullname" name="fullname">
                                    </div>
                                    <div class="field-row">
                                        <p class="field-one-half">
                                            <label for="email">Электронная почта *</label>
                                            <input type="email" id="email" name="email">
                                        </p>
                                        <p class="field-one-half">
                                            <label for="phone">Номер телефона *</label>
                                            <input type="text" id="phone" name="phone">
                                        </p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="field-row">
                                        <label for="address">Адрес *</label>
                                        <input type="text" id="address" name="address">
                                    </div>
                                    <div class="field-row">
                                        <p class="field-one-half">
                                            <label for="city">Город / Село *</label>
                                            <input type="text" id="city" name="city">
                                        </p>
                                        <p class="field-one-half">
                                            <label for="zip">Индекс *</label>
                                            <input type="text" id="zip" name="zip">
                                        </p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="field-row">
                                        <label for="comment">Комментарии к заказу</label>
                                        <textarea id="comment" name="comment"></textarea>
                                    </div>
                                    <div class="checkbox" style="display: none;">
                                        <input type="checkbox" id="create-account" name="create-account" checked="">
                                        <label for="create-account">Create an account?</label>
                                    </div>
                                </div><!-- /.fields-content -->
                            </div><!-- /.billing-fields -->
                        </form><!-- /.checkout -->
                    </div><!-- /.box-checkout -->
                </div><!-- /.col-md-7 -->
                <div class="col-md-5">
                    <div class="cart-totals style2">
                        <h3>Ваш заказ</h3>
                        <table class="product">
                            <thead>
                                <tr>
                                    <th>Товар</th>
                                    <th>Цена</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cart->items as $product)
                                <tr>
                                    <td>{{$product['item']['name']}}</td>
                                    <td>{{$product['item']['price'] * $product['qty']}} тг.</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table><!-- /.product -->
                        <table>
                            <tbody>
                                <tr>
                                    <td>Общее</td>
                                    <td class="price-total">{{$cart->totalPrice}} тг.</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-radio style2">
                            Может взиматься дополнительная плата за доставку.
                        </div><!-- /.btn-radio style2 -->
                        <div class="btn-order">
                            <a href="#" class="order" onclick="sendOrder()" title="">Заказать</a>
                        </div><!-- /.btn-order -->
                    </div><!-- /.cart-totals style2 -->
                </div><!-- /.col-md-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section class="flat-iconbox">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox">
                        <div class="box-header">
                            <div class="image">
                                <img src="/images/icons/car.png" alt="">
                            </div>
                            <div class="box-title">
                                <h3>Быстрая доставка</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>по Алматы, низкие цены в другие города</p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox -->
                </div><!-- /.col-md-3 col-sm-6 -->
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox">
                        <div class="box-header">
                            <div class="image">
                                <img src="/images/icons/order.png" alt="">
                            </div>
                            <div class="box-title">
                                <h3>Как купить?</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>Добавляйте товар и заказывайте</p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox -->
                </div><!-- /.col-md-3 col-sm-6 -->
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox">
                        <div class="box-header">
                            <div class="image">
                                <img src="/images/icons/payment.png" alt="">
                            </div>
                            <div class="box-title">
                                <h3>Удобная оплата</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>Наличный, безналичный расчет</p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox -->
                </div><!-- /.col-md-3 col-sm-6 -->
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox">
                        <div class="box-header">
                            <div class="image">
                                <img src="/images/icons/return.png" alt="">
                            </div>
                            <div class="box-title">
                                <h3>Возврат товара</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>Условия возврата товара</p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox -->
                </div><!-- /.col-md-3 col-sm-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-iconbox -->
@endsection

@section('js')
    <script>
        function sendOrder() {
            $('#order-form').submit();
        }
    </script>
@endsection
