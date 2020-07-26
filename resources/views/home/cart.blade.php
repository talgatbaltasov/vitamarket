@extends('layouts.app')

@section('title', 'Корзина')
@section('description', '★ Интернет-магазин Vitamarket ★ Широкий выбор товаров ✔ Удобная оплата ✔ Продукция с гарантией и доставкой в интернет-магазине витамин и БАД ➤ Круглосуточно 24/7 ☎ +7 700 103 01 10')

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
                                @foreach($cart->items as $item)
                                    <tr>
                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                        <td class="product_thumb"><a href="#"><img src="{{$item['main_image']}}" alt=""></a></td>
                                        <td class="product_name"><a href="#">{{$item['item']['name']}}</a></td>
                                        <td class="product-price">{{$item['item']['price']}} тг.</td>
                                        <td class="product_quantity"><label>Количество</label> <input min="1" max="100" value="{{$item['qty']}}" type="number" name="quantity"></td>
                                        <td class="product_total">{{$item['item']['price'] * $item['qty']}} тг.</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>   
                            </div>  
                            <div class="cart_submit">
                                <button type="submit">обновить корзину</button>
                            </div>      
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Купон</h3>
                                <div class="coupon_inner">   
                                    <p>Введите купонный код если у вас есть.</p>                                
                                    <input placeholder="Купонный код" type="text">
                                    <button type="submit">Использовать код</button>
                                </div>    
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Общее</h3>
                                <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Общее</p>
                                    <p class="cart_amount">{{$cart->totalPrice}} тг.</p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Доставка</p>
                                    <p class="cart_amount"><span>Стандарт:</span> 2000 тг</p>
                                </div>
                                <a href="#">Рассчитать стоимость доставки</a>

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount">£215.00</p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="#">Оформить заказ</a>
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
    <!--brand area start-->
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        @foreach($brands as $brand)
                            <div class="owl-item" style="width: 195px;">
                                <div class="single_brand">
                                    <a href="#"><img src="{{$brand->main_image}}" alt=""></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            $j.ajax({
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
            $j.ajax({
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
