@extends('layouts.app')

@section('title', 'Оформление заказа')
@section('description', '★ Интернет-магазин Vitamarket ★ Широкий выбор товаров ✔ Удобная оплата ✔ Продукция с гарантией и доставкой в интернет-магазине витамин и БАД ➤ Круглосуточно 24/7 ☎ +7 707 807 97 77')

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
                                {{Form::text('lastname', null, ['required', 'class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('city_id', 'Город')}}
                                {{Form::select('city_id', $cities, null, ['required', 'class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('street', 'Адрес')}}
                                {{Form::text('street', null, ['required', 'class' => 'form-control', 'required'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('street2', 'Адрес')}}
                                {{Form::text('street2', null, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('phone', 'Номер телефона')}}
                                {{Form::text('phone', null, ['required', 'class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('email', 'Электронная почта')}}
                                {{Form::email('email', null, ['required', 'class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('shipping_type_id', 'Вид доставки')}}
                                {{Form::select('shipping_type_id', $shipping_types, null, ['required', 'class' => 'form-control', 'placeholder' => 'Выбрать'])}}
                            </div>
                            <p class="shipping_description"></p>
                            <div class="form-group">
                                {{Form::label('comment', 'Комментарии к заказу')}}
                                {{Form::text('comment', null, ['class' => 'form-control'])}}
                            </div>
                            <button class="btn btn-success mb-3">Оформить заказ</button>
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
                                    @if(isset($cart->items))
                                        @foreach($cart->items as $item)
                                            <tr>
                                                <td> {{$item['item']['name']}} <strong> × {{$item['qty']}}</strong></td>
                                                <td> {{$item['qty'] * $item['item']['price']}} тг.</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Общее</th>
                                        <td>
                                            @if(isset($cart->items))
                                                {{$cart->totalPrice}} тг.
                                            @else
                                                0 тг.
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Доставка</th>
                                        <td><strong class="shipping_price">0 тг.</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Общее</th>
                                        <td>
                                            @if(isset($cart->items))
                                                <strong>{{$cart->totalPrice + 2000}} тг.</strong>
                                            @else
                                                0 тг.
                                            @endif
                                        </td>
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

        $('document').ready(function(){
            var shipping_types = {!!$raw_shipping_types!!}
            $('#shipping_type_id').on('change', function(){
                shipping_types.forEach(function(value, index) {
                    if(value.id == $('#shipping_type_id option:selected').val()) {
                        $('.shipping_price').html(value.price + ' тг.')
                        $('.shipping_description').html(value.description)
                    }
                })
            })
        })
    </script>
@endsection
