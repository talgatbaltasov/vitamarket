<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	@yield('opengraph')
    <title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
	<link rel="shortcut icon" href="/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124200291-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-124200291-1');
    </script>

</head>
<body class="header_sticky">
    <div class="boxed">

        <div class="overlay"></div>

        <section id="header" class="header">
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div id="logo" class="logo">
                                <a href="/" title="">
                                    <img src="/images/logos/logo.png" alt="">
                                </a>
                            </div><!-- /#logo -->
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-6">
                            <div class="top-search">
                                <form action="#" method="get" class="form-search" accept-charset="utf-8">
                                    <div class="cat-wrap">
                                        <select name="category">
                                            <option hidden value="">Все Категории</option>
                                        </select>
                                        <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        <div class="all-categories">
                                            @foreach($categories as $category)
                                                <div class="cat-list-search">
                                                    <div class="title">
                                                        {{$category->name}}
                                                    </div>
                                                    @if($category->children->count() > 0)
                                                    <ul>
                                                        @foreach($category->children as $child)
                                                            <li>{{$child->name}}</li>
                                                        @endforeach
                                                    </ul>
                                                    @endif
                                                </div><!-- /.cat-list-search -->
                                            @endforeach
                                        </div><!-- /.all-categories -->
                                    </div><!-- /.cat-wrap -->
                                    <div class="box-search">
                                        <input type="text" name="search" placeholder="Что вы ищете?" autocomplete="off">
                                        <span class="btn-search">
                                            <button type="submit" class="waves-effect"><img src="/images/icons/search.png" alt=""></button>
                                        </span>
                                        <div class="search-suggestions">
                                            <div class="box-suggestions">
                                                <div class="title">
                                                    Подсказки
                                                </div>
                                                <ul>
                                                    @foreach($products as $product)
                                                        <li>
                                                            <div class="image">
                                                                <img src="/images/product/other/s05.jpg" alt="">
                                                            </div>
                                                            <div class="info-product">
                                                                <div class="name">
                                                                    <a href="#" title="">{{$product->title}}</a>
                                                                </div>
                                                                <div class="price">
                                                                    <span class="sale">
                                                                        {{$product->price}}
                                                                    </span>
                                                                    <!-- <span class="regular">
                                                                        $2,999.00
                                                                    </span> -->
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div><!-- /.box-suggestions -->
                                            <div class="box-cat">
                                                <div class="cat-list-search">
                                                    <div class="title">
                                                        Категории
                                                    </div>
                                                    <ul>
                                                        @foreach($categories as $category)
                                                            <li>
                                                                <a href="/c/{{$category->slug}}">{{$category->name}}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div><!-- /.cat-list-search -->
                                            </div><!-- /.box-cat -->
                                        </div><!-- /.search-suggestions -->
                                    </div><!-- /.box-search -->
                                </form><!-- /.form-search -->
                            </div><!-- /.top-search -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-3">
                            <div class="box-cart">
                                <div class="inner-box mr-4">
                                    <a href="tel:+77079156115" title="">+7 (707) 915 61 15</a><br/>
                                    <a href="tel:+77078970247" title="">+7 (707) 897 02 47</a>
								</div><!-- /.inner-box -->
                                <div class="inner-box">
                                    <a href="#" title="">
                                        <div class="icon-cart">
                                            <img src="/images/icons/cart.png" alt="">
                                            <span>@if(isset($cart->items)) {{$cart->totalQty}} @else 0 @endif</span>
                                        </div>
                                        <div class="price">
                                            @if(isset($cart->items)) {{$cart->totalPrice}} @else 0 @endif тг.
                                        </div>
                                    </a>
                                    <div class="dropdown-box">
                                        <ul>
                                            @if(isset($cart->items))
                                                @foreach($cart->items as $product)
                                                    <li>
                                                        <div class="img-product">
                                                            <img src="/images{{$product['main_image']}}" class="cart-image" alt="">
                                                        </div>
                                                        <div class="info-product">
                                                            <div class="name">
                                                                {{$product['item']['name']}}
                                                            </div>
                                                            <div class="price">
                                                                <span>{{$product['qty']}} x</span>
                                                                <span>{{$product['item']['price']}} тг.</span>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="delete" onclick='removeCartItem({{$product["item"]["id"]}})'>x</span>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                        <div class="total">
                                            <span>Общее:</span>
                                            <span class="price">@if(isset($cart->items)) {{$cart->totalPrice}} @else 0 @endif тг.</span>
                                        </div>
                                        <div class="btn-cart">
                                            <a href="/cart" class="view-cart" title="">Корзина</a>
                                            <a href="/checkout" class="check-out" title="">Заказать</a>
                                        </div>
                                    </div>
                                </div><!-- /.inner-box -->
                            </div><!-- /.box-cart -->
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.header-middle -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-2">
                            <div id="mega-menu">
                                <div class="btn-mega"><span></span>ВСЕ КАТЕГОРИИ</div>
                                <ul class="menu">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="/c/{{$category->slug}}" title="" class="dropdown">
                                                <span class="menu-img">
                                                    @if($category->slug == 'noutbuki' || $category->slug == 'kompyutery')
                                                        <img src="/images/icons/menu/01.png" alt="">
                                                    @elseif($category->slug == 'smartfony')
                                                        <img src="/images/icons/menu/02.png" alt="">
                                                    @elseif($category->slug == 'aksessuary')
                                                        <img src="/images/icons/menu/09.png" alt="">
                                                    @else
                                                        <img src="/images/icons/menu/10.png" alt="">
                                                    @endif
                                                </span>
                                                <span class="menu-title">
                                                    {{$category->name}}
                                                </span>
                                            </a>
                                            <div class="drop-menu">
                                                <div class="one-third">
                                                    <div class="cat-title">
                                                        {{$category->name}}
                                                    </div>
                                                    @if($category->children->count())
                                                    <ul>
                                                        @foreach($category->children as $c)
                                                        <li>
                                                            <a href="/c/{{$c->slug}}" title="">{{$c->name}}</a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                    <div class="show">
                                                        <a href="/c/{{$category->slug}}" title="">Посмотреть все</a>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-9 col-10">
                            <div class="nav-wrap">
                                <div id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li class="column-1">
                                            <a href="/" title="">Главная</a>
                                        </li><!-- /.column-1 -->
                                        <li class="has-mega-menu" style="display: none;">
                                            <a href="/brands" title="">Бренды</a>
                                            <div class="submenu">
                                                <div class="row">
                                                    @foreach($brands as $brand)
                                                        @if($brand->products->count() > 0)
                                                            <div class="col-lg-3 col-md-12">
                                                                <h3 class="cat-title">{{$brand->title}}</h3>
                                                                <ul class="submenu-child">
                                                                    @foreach($categories as $category)
                                                                        @if($category->products()->where('brand_id', $brand->id)->count() > 0)
                                                                            <li>
                                                                                <a href="/c/{{$category->slug}}/{{$brand->slug}}" title="">{{$category->name}} {{$brand->title}}</a>
                                                                            </li>
                                                                        @endif
                                                                    @endforeach
                                                                </ul>
                                                                <div class="show">
                                                                    <a href="/brands/{{$brand->slug}}" title="">Посмотреть все</a>
                                                                </div>
                                                            </div><!-- /.col-lg-3 col-md-12 -->
                                                        @endif
                                                    @endforeach
                                                </div><!-- /.row -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="banner-box">
                                                            <div class="inner-box">
                                                                <a href="#" title="">
                                                                    <img src="/images/banner_boxes/submenu-01.png" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="banner-box">
                                                            <div class="inner-box">
                                                                <a href="#" title="">
                                                                    <img src="/images/banner_boxes/submenu-02.png" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.row -->
                                            </div><!-- /.submenu -->
                                        </li><!-- /.has-mega-menu -->
                                        <li class="column-1">
                                            <a href="/payments-delivery" title="">Оплата и доставка</a>
                                        </li><!-- /.column-1 -->
                                        <li class="column-1">
                                            <a href="/service-center" title="">Сервисный центр</a>
                                        </li><!-- /.column-1 -->
                                        <li class="column-1">
                                            <a href="/faq" title="">Вопросы и ответы</a>
                                        </li><!-- /.column-1 -->
                                        <li class="column-1">
                                            <a href="/contacts" title="">Контакты</a>
                                        </li><!-- /.column-1 -->
                                    </ul><!-- /.menu -->
                                </div><!-- /.mainnav -->
                            </div><!-- /.nav-wrap -->
                            <div class="btn-menu">
                                <span></span>
                            </div><!-- //mobile menu button -->
                        </div><!-- /.col-md-9 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.header-bottom -->
        </section><!-- /#header -->

        @yield('content')

        <footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="widget-ft widget-about">
							<div class="logo logo-ft">
								<a href="/" title="">
									<img src="/images/logos/logo-ft.png" alt="">
								</a>
							</div><!-- /.logo-ft -->
							<div class="widget-content">
								<div class="icon">
									<img src="/images/icons/call.png" alt="">
								</div>
								<div class="info">
									<p class="questions">Есть вопросы? Звоните!</p>
									<p class="phone">
                                        <a href="tel:+77079156115" title="">+7 (707) 915 61 15</a><br/>
                                        <a href="tel:+77078970247">+7 (707) 897 02 47</a>
                                    </p>
									<p class="address">
                                    Тимирязева, 42 к3 уг.ул. Ауэзова, ТРК «Атакент Mall» 1 этаж, витрина №95.<br/><br/>
                                    Абылай хана проспект, 62 уг.ул. Жибек Жолы, 85 ТД «Цум» 1 этаж, 3 сектор, витрина №19.
									</p>
								</div>
							</div><!-- /.widget-content -->
							<ul class="social-list">
								<li>
									<a href="#" title="">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#" title="">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/litestorekz/" target="_blank" title="">
										<i class="fa fa-instagram" aria-hidden="true"></i>
									</a>
								</li>
							</ul><!-- /.social-list -->
						</div><!-- /.widget-about -->
					</div><!-- /.col-lg-3 col-md-6 -->
					<div class="col-lg-3 col-md-6">
						<div class="widget-ft widget-categories-ft">
							<div class="widget-title">
								<h3>Категории</h3>
							</div>
							<ul class="cat-list-ft">
                                @foreach($categories as $category)
								<li>
									<a href="/c/{{$category->slug}}" title="">{{$category->name}}</a>
								</li>
                                @endforeach
							</ul><!-- /.cat-list-ft -->
						</div><!-- /.widget-categories-ft -->
					</div><!-- /.col-lg-3 col-md-6 -->
					<div class="col-lg-2 col-md-6">
						<div class="widget-ft widget-menu">
							<div class="widget-title">
								<h3>Забота о покупателях</h3>
							</div>
							<ul>
								<li>
									<a href="/contacts" title="">
										Контакты
									</a>
								</li>
								<li>
									<a href="/payments-delivery" title="">
										Доставка
									</a>
								</li>
							</ul>
						</div><!-- /.widget-menu -->
					</div><!-- /.col-lg-2 col-md-6 -->
					<div class="col-lg-4 col-md-6">
						<div class="widget-ft widget-newsletter">
							<div class="widget-title">
								<h3>Подписка на рассылку</h3>
							</div>
							<p>Будьте уверены что вы не пропустите акции и скидки<br />
								подписываясь на нашу рассылку
							</p>
							<form action="#" class="subscribe-form" method="get" accept-charset="utf-8">
								<div class="subscribe-content">
									<input type="text" name="email" class="subscribe-email" placeholder="Ваш E-Mail">
									<button type="submit"><img src="/images/icons/right-2.png" alt=""></button>
								</div>
							</form><!-- /.subscribe-form -->
						</div><!-- /.widget-newsletter -->
					</div><!-- /.col-lg-4 col-md-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer><!-- /footer -->

		<section class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright"> Все права защищены © LiteStore {{date('Y')}}</p>
						<p class="btn-scroll">
							<a href="#" title="">
								<img src="/images/icons/top.png" alt="">
							</a>
						</p>
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.footer-bottom -->

	</div><!-- /.boxed -->

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="/stylesheets/bootstrap.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="/stylesheets/style.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="/stylesheets/responsive.css">

    <!-- Javascript -->
	<script type="text/javascript" src="/javascript/jquery.min.js"></script>
	<script type="text/javascript" src="/javascript/tether.min.js"></script>
	<script type="text/javascript" src="/javascript/bootstrap.min.js"></script>
	<script type="text/javascript" src="/javascript/waypoints.min.js"></script>
	<!-- <script type="text/javascript" src="/javascript/jquery.circlechart.js"></script> -->
	<script type="text/javascript" src="/javascript/easing.js"></script>
	<script type="text/javascript" src="/javascript/jquery.zoom.min.js"></script>
	<script type="text/javascript" src="/javascript/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="/javascript/owl.carousel.js"></script>
	<script type="text/javascript" src="/javascript/smoothscroll.js"></script>
	<!-- <script type="text/javascript" src="/javascript/jquery-ui.js"></script> -->
	<script type="text/javascript" src="/javascript/jquery.mCustomScrollbar.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&region=GB"></script>
	<script type="text/javascript" src="/javascript/gmap3.min.js"></script>
	<script type="text/javascript" src="/javascript/waves.min.js"></script>
	<script type="text/javascript" src="/javascript/jquery.countdown.js"></script>

    <script type="text/javascript" src="/javascript/main.js"></script>

	<div class="modal  fade"  id="modalAddToCart" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		<div class="modal-dialog white-modal modal-sm">
			<div class="modal-content ">
				<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button></div>
				<div class="modal-body"><div class="text-center"></div></div>
				<div class="modal-footer text-center"><a href="/cart" class="btn btn-block btn-primary">В КОРЗИНУ</a></div>
			</div>
		</div>
	</div>
	@yield('js')
	<script>
		function addToCart(that, product_id, quantity = 1){
			$.ajax({
				url:'/cart/addToCart',
				method:'POST',
				data:{
					product_id:product_id,
					quantity:quantity,
					_token:"<?=csrf_token()?>"
				},
				success:function(res) {
					location.href = '/cart';
				}
			})
		}

        function removeCartItem(key){
            $.ajax({
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
	</script>
</body>
</html>
