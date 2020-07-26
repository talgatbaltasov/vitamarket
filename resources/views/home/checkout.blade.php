@extends('layouts.app')

@section('title', 'Оформление заказа')
@section('description', '★ Интернет-магазин Vitamarket ★ Широкий выбор товаров ✔ Удобная оплата ✔ Продукция с гарантией и доставкой в интернет-магазине витамин и БАД ➤ Круглосуточно 24/7 ☎ +7 700 103 01 10')

@section('content')
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Оформление заказа</h3>
                        <ul>
                            <li><a href="/">Главная</a></li>
                            <li>Оформление заказа</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    <!--Checkout page section-->
    <div class="Checkout_section mt-100">
        <div class="container">
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        {!!Form::open(['route' => 'admin.articles.store', 'files' => true])!!}
                            <h3>Информация</h3>
                            <div class="form-group">
                                {{Form::label('firstname', 'Имя')}}
                                {{Form::text('firstname', null, ['class' => 'form-control', 'required'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('lastname', 'Фамилия')}}
                                {{Form::text('lastname', null, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('city_id', 'Город')}}
                                {{Form::select('city_id', $cities, null, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('street', 'Адрес')}}
                                {{Form::text('street', null, ['class' => 'form-control', 'required'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('street2', 'Адрес')}}
                                {{Form::text('street2', null, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('phone', 'Номер телефона')}}
                                {{Form::text('phone', null, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('email', 'Электронная почта')}}
                                {{Form::email('email', null, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('comment', 'Комментарии к заказу')}}
                                {{Form::text('comment', null, ['class' => 'form-control'])}}
                            </div>
                            <button class="btn btn-success">Добавить</button>
                        {!!Form::close()!!}
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form action="#">    
                            <h3>Ваш заказ</h3> 
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Товар</th>
                                            <th>Общее</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cart->items as $item)
                                            <tr>
                                                <td> {{$item['item']['name']}} <strong> × {{$item['qty']}}</strong></td>
                                                <td> {{$item['qty'] * $item['item']['price']}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td>$215.00</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td><strong>$5.00</strong></td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Order Total</th>
                                            <td><strong>$220.00</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>     
                            </div>
                            <div class="payment_method">
                            <div class="panel-default">
                                    <input id="payment" name="check_method" type="radio" data-target="createp_account">
                                    <label for="payment" data-toggle="collapse" data-target="#method" aria-controls="method">Create an account?</label>

                                    <div id="method" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div> 
                            <div class="panel-default">
                                    <input id="payment_defult" name="check_method" type="radio" data-target="createp_account">
                                    <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult">PayPal <img src="assets/img/icon/papyel.png" alt=""></label>

                                    <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="order_button">
                                    <button type="submit">Proceed to PayPal</button> 
                                </div>    
                            </div> 
                        </form>         
                    </div>
                </div> 
            </div> 
        </div>       
    </div>
    <!--Checkout page section end-->
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
