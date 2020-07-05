@extends('layouts.app')

@section('title', 'Корзина')
@section('description', '★ Интернет-магазин Лайтстор ★ Широкий выбор товаров ✔ Удобная оплата ✔ Продукция с гарантией и доставкой в интернет-магазине электроники ➤ Круглосуточно 24/7 ☎ +7 707 897 02 47')

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
                            <a href="#" title="">Корзина</a>
                        </li>
                    </ul><!-- /.breacrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section class="flat-shop-cart">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="flat-row-title style1">
                        <h3>Корзина</h3>
                    </div>
                    <div class="table-cart mCustomScrollbar _mCS_1 mCS_no_scrollbar"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_horizontal mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_x_hidden mCS_no_scrollbar_x" style="position: relative; top: 0px; left: 0px; width: 616px; min-width: 100%; overflow-x: inherit;" dir="ltr">
                        <table>
                            <thead>
                                <tr>
                                    <th>Товар</th>
                                    <th>Количество</th>
                                    <th>Общее</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($cart->items))
                                    @foreach($cart->items as $product)
                                    <tr>
                                        <td>
                                            <div class="img-product">
                                                <img src="/images{{$product['main_image']}}" alt="" class="mCS_img_loaded">
                                            </div>
                                            <div class="name-product">
                                                {{$product['item']['name']}}
                                            </div>
                                            <div class="price">
                                                {{$product['item']['price']}} тг.
                                            </div>
                                            <div class="clearfix"></div>
                                        </td>
                                        <td>
                                            <div class="quanlity">
                                                <span class="btn-down" onclick='decrementCartItem({{$product["item"]["id"]}})'></span>
                                                <input type="number" name="number" value="{{$product['qty']}}" min="1" max="100" placeholder="Quanlity">
                                                <span class="btn-up" onclick='incrementCartItem({{$product["item"]["id"]}})'></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="total">
                                                {{$product['item']['price'] * $product['qty']}} тг.
                                            </div>
                                        </td>
                                        <td>
                                            <a onclick='removeCartItem({{$product["item"]["id"]}})' title="" style="cursor: pointer;">
                                                <img src="/images/icons/delete.png" alt="" class="mCS_img_loaded">
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="form-coupon" style="display: none;">
                            <form action="#" method="get" accept-charset="utf-8">
                                <div class="coupon-input">
                                    <input type="text" name="coupon code" placeholder="Coupon Code">
                                    <button type="submit">Apply Coupon</button>
                                </div>
                            </form>
                        </div><!-- /.form-coupon -->
                    </div><div id="mCSB_1_scrollbar_horizontal" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_horizontal" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 30px; width: 0px; left: 0px;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><!-- /.table-cart -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="cart-totals">
                        <h3>Корзина</h3>
                        <form action="#" method="get" accept-charset="utf-8">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Доставка</td>
                                        <td class="btn-radio">
                                            Может взиматься дополнительная плата за доставку.
                                        </td><!-- /.btn-radio -->
                                    </tr>
                                    <tr>
                                        <td>Общее</td>
                                        <td class="price-total">{{$cart->totalPrice}} тг.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="btn-cart-totals">
                                <a href="/cart" class="update" title="">Обновить корзину</a>
                                <a href="/checkout" class="checkout" title="">Оформить заказ</a>
                            </div><!-- /.btn-cart-totals -->
                        </form><!-- /form -->
                    </div><!-- /.cart-totals -->
                </div><!-- /.col-lg-4 -->
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
