@extends('layouts.app')

@section('title', 'Корзина')
@section('description', '★ Интернет-магазин Vitamarket ★ Широкий выбор товаров ✔ Удобная оплата ✔ Продукция с гарантией и доставкой в интернет-магазине витамин и БАД ➤ Круглосуточно 24/7 ☎ +7 707 807 97 77')

@section('content')
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                    <h3>Корзина</h3>
                        <ul>
                            <li><a href="/">Главная</a></li>
                            <li>Корзина</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-100">
        <div class="container">  
            <form action="#"> 
                <div class="row">
                    <div class="col-12">
                        <p>
                            Также можете связаться со специалистом для оформления заказа по телефону/whatsapp: <a href="tel:+77078079777">+7 (707) 807-97-77</a>
                        </p>
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Удалить</th>
                                            <th class="product_thumb">Картинка</th>
                                            <th class="product_name">Товар</th>
                                            <th class="product-price">Цена</th>
                                            <th class="product_quantity">Количество</th>
                                            <th class="product_total">Общее</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($cart->items) && count($cart->items) > 0)
                                            @foreach($cart->items as $item)
                                                <tr>
                                                    <td class="product_remove"><a href="#" onclick='removeCartItem({{$item["item"]["id"]}})'><i class="fa fa-trash-o"></i></a></td>
                                                    <td class="product_thumb"><a href="#"><img src="{{$item['main_image']}}" alt=""></a></td>
                                                    <td class="product_name"><a href="#">{{$item['item']['name']}}</a></td>
                                                    <td class="product-price">{{$item['item']['price']}} тг.</td>
                                                    <td class="product_quantity">
                                                        <label>Количество</label> 
                                                        {{$item['qty']}}
                                                        <span onclick="incrementCartItem({{$item['item']['id']}})">+</span>
                                                        <span onclick="decrementCartItem({{$item['item']['id']}})">-</span>
                                                    </td>
                                                    <td class="product_total">{{$item['item']['price'] * $item['qty']}} тг.</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>   
                            </div>
                            <div class="cart_submit">
                                <button type="submit">обновить корзину</button>
                            </div>
                            <div class="cart_submit">
                                <a href="/">Продолжить покупку</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Общее</h3>
                                <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Общее</p>
                                    <p class="cart_amount">
                                        @if(isset($cart->items) && count($cart->items) > 0)
                                            {{$cart->totalPrice}} тг.
                                        @else
                                            0 тг.
                                        @endif
                                    </p>
                                </div>

                                <div class="cart_subtotal">
                                    <p>Общее</p>
                                    <p class="cart_amount">
                                        @if(isset($cart->items) && count($cart->items) > 0)
                                            {{$cart->totalPrice}} тг.
                                        @else
                                            0 тг.
                                        @endif
                                    </p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="/checkout">Оформить заказ</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form> 
        </div>     
    </div>
    <!--shopping cart area end -->
@endsection

@section('js')
    <script>
        function clearCart(){
            $j.ajax({
				url: '/cart/clearCart',
				method: 'POST',
                data: {
                    _token: "<?=csrf_token()?>"
                },
				success: function(res) {
                    window.location.href = '/'
				}
			})
        }

        function removeCartItem(key){
            $j.ajax({
				url: '/cart/removeCartItem',
				method: 'POST',
                data: {
                    key: key,
                    _token: "<?=csrf_token()?>"
                },
				success: function(res) {
                    location.reload()
				}
			})
        }

        function incrementCartItem(id){
            $.ajax({
				url: '/cart/incrementCartItem',
				method: 'POST',
                data: {
                    id: id,
                    _token: "<?=csrf_token()?>"
                },
				success: function(res) {
                    location.reload()
				}
			})
        }

        function decrementCartItem(id){
            $.ajax({
				url: '/cart/decrementCartItem',
				method: 'POST',
                data: {
                    id: id,
                    _token: "<?=csrf_token()?>"
                },
				success: function(res) {
                    location.reload()
				}
			})
        }
    </script>
@endsection
