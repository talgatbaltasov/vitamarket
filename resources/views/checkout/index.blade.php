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
                        {!!Form::open(['url' => '/checkout'])!!}
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
                                            <td> {{$item['qty'] * $item['item']['price']}} тг.</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Общее</th>
                                        <td>{{$cart->totalPrice}} тг.</td>
                                    </tr>
                                    <tr>
                                        <th>Доставка</th>
                                        <td><strong>2000 тг.</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Общее</th>
                                        <td><strong>{{$cart->totalPrice + 2000}} тг.</strong></td>
                                    </tr>
                                </tfoot>
                            </table>     
                        </div>
                    </div>
                </div> 
            </div> 
        </div>       
    </div>
    <!--Checkout page section end-->
@endsection

@section('js')
    <script>
        function sendOrder() {
            $('#order-form').submit();
        }
    </script>
@endsection
