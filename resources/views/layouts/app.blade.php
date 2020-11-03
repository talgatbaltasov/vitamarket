<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="js sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox picture srcset webworkers">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	@yield('opengraph')
    <title>@yield('title')</title>
	<meta name="description" content="@yield('description')">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="/assets/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="/assets/css/font.awesome.css">
    <!--animate css-->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="/assets/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="/assets/css/slinky.menu.css">
    <!--plugins css-->
    <link rel="stylesheet" href="/assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    
    <!--modernizr min js here-->
    <script src="/assets/js/modernizr-3.7.1.min.js"></script>

</head>
<body>

    <!--mini cart-->
    <div class="mini_cart_wrapper_custom">
        <div class="mini_cart_custom">
            <div class="cart_gallery">
                <div class="cart_close">
                    <div class="cart_text">
                        <h3>Корзина</h3>
                    </div>
                    <div class="mini_cart_close">
                        <a href="javascript:void(0)"><i class="icon-x"></i></a>
                    </div>
                </div>
                <div style="overflow: scroll; height: 262px;">
                    @if(isset($cart->items) && count($cart->items) > 0)
                        @foreach($cart->items as $product)
                            <div class="cart_item">
                                <div class="cart_img">
                                    <a href="#"><img src="{{$product['main_image']}}" alt=""></a>
                                </div>
                                <div class="cart_info">
                                    <a href="#">{{$product['item']['name']}}</a>
                                    <p>{{$product['qty']}} x <span> {{$product['item']['price']}} тг. </span></p>    
                                </div>
                                <div class="cart_remove">
                                    <a href="#" onclick='removeCartItem({{$product["item"]["id"]}})'><i class="icon-x"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="mini_cart_table">
                <div class="cart_table_border">
                    <div class="cart_total">
                        <span>Общее:</span>
                        <span class="price">@if(isset($cart->items)) {{$cart->totalPrice}} @else 0 @endif тг.</span>
                    </div>
                </div>
            </div>
            <div class="mini_cart_footer">
            <div class="cart_button">
                    <a href="/cart"><i class="fa fa-shopping-cart"></i> Посмотреть корзину</a>
                </div>
                <div class="cart_button">
                    <a class="active" href="/checkout"><i class="fa fa-sign-in"></i> Заказать</a>
                </div>

            </div>
        </div>
    </div>
    <!--mini cart end-->

    <div class="mini_cart_wrapper_custom_mobile">
        Товар добавлен в корзину<br/>
        <a href="/checkout" class="button">Оформить заказ</a>
    </div>

    <a href="https://api.whatsapp.com/send?phone=77078079777" style="position: fixed; z-index: 999; bottom: 150px; right: 15px;">
        <img src="/assets/img/icon/whatsapp.png" alt="" width="70">
    </a>
    <!--header area start-->
    
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>

    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="icon-x"></i></a>  
                        </div>
                        <div class="call-support">
                            <p>Также можете связаться со специалистом для оформления заказа по телефону/whatsapp: <a href="tel:+77078079777">+7 (707) 807-97-77</a></p>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                @foreach($categories as $category)
                                    <li class="menu-item-has-children">
                                        <a href="/c/{{$category->slug}}">{{$category->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="offcanvas_footer">
                            <span>
                                <a href="https://instagram.com/vitamarket.almaty">
                                    <img src="/assets/img/icon/instagram.png" alt="" width="100">
                                </a>
                            </span>
                            <br/>
                            <span><a href="mailto:kzvitamarket@gmail.com"><i class="fa fa-envelope-o"></i> kzvitamarket@gmail.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--offcanvas menu area end-->
    <header>
        <div class="main_header">
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-4">
                            <div class="logo">
                                <a href="/"><img src="/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 col-6">
                            <div class="header_right_info">
                                <div class="search_container">
                                   <form action="/search" method="GET">
                                       <div class="hover_category">
                                            <select class="select_option" name="select" id="categori1">
                                                <option value="0">Все категории</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->slug}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                       </div>
                                        <div class="search_box">
                                            <input placeholder="Поиск..." type="text" name="search" onkeyup="search()">
                                            <button type="submit"><i class="icon-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="header_account_area">
                                    <div class="header_account-list top_links">
                                        <a href="https://wa.me/77078079777?text={{urlencode('Здравствуйте. Я заинтересован в покупке с вашего интернет-магазина')}}" target="_blank">
                                            <img src="/assets/img/icon/whatsapp.png" width="25" alt="">
                                        </a>
                                    </div>
                                    <div class="header_account-list header_wishlist">
                                        <a href="https://instagram.com/vitamarket.almaty" target="_blank">
                                            <img src="/assets/img/icon/instagram.png" width="20" alt="">
                                        </a>
                                    </div>
                                    <div class="header_account-list  mini_cart_wrapper">
                                       <a href="javascript:void(0)"><i class="icon-shopping-bag"></i><span class="item_count">@if(isset($cart->items)) {{$cart->totalQty}} @else 0 @endif</span></a>
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_gallery">
                                                <div class="cart_close">
                                                	<div class="cart_text">
                                                		<h3>Корзина</h3>
                                                	</div>
                                                	<div class="mini_cart_close">
                                                		<a href="javascript:void(0)"><i class="icon-x"></i></a>
                                                	</div>
                                                </div>
                                                @if(isset($cart->items) && count($cart->items) > 0)
                                                    @foreach($cart->items as $product)
                                                        <div class="cart_item">
                                                            <div class="cart_img">
                                                                <a href="#"><img src="{{$product['main_image']}}" alt=""></a>
                                                            </div>
                                                            <div class="cart_info">
                                                                <a href="#">{{$product['item']['name']}}</a>
                                                                <p>{{$product['qty']}} x <span> {{$product['item']['price']}} тг. </span></p>    
                                                            </div>
                                                            <div class="cart_remove">
                                                                <a href="#" onclick='removeCartItem({{$product["item"]["id"]}})'><i class="icon-x"></i></a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="mini_cart_table">
                                                <div class="cart_table_border">
                                                    <div class="cart_total">
                                                        <span>Общее:</span>
                                                        <span class="price">@if(isset($cart->items)) {{$cart->totalPrice}} @else 0 @endif тг.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini_cart_footer">
                                               <div class="cart_button">
                                                    <a href="/cart"><i class="fa fa-shopping-cart"></i> Посмотреть корзину</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a class="active" href="/checkout"><i class="fa fa-sign-in"></i> Заказать</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                   </div>
                                </div>
                            </div>
                            <div class="header_mobile_number text-right">
                                <a href="tel:+77078079777">+7 (707) 807-97-77</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom sticky-header">
                <div class="container">  
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="categories_menu">
                                <div class="categories_title">
                                    <h2 class="categori_toggle">Категории</h2>
                                </div>
                                <div class="categories_menu_toggle">
                                    <ul>
                                        <li><a href="/vse-tovary"> Все товары</a></li>
                                        <li><a href="/tovary-so-skidkoi"> Товары со скидкой</a></li>
                                        @foreach($categories as $category)
                                            @if($category->children->count() > 0)
                                                <li class="menu_item_children"><a href="/c/{{$category->slug}}">{{$category->name}} <i class="fa fa-angle-right"></i></a>
                                                    <ul class="categories_mega_menu">
                                                        <li class="menu_item_children">
                                                            <ul class="categorie_sub_menu">
                                                                @foreach($category->children as $child)
                                                                    <li><a href="/c/{{$child->slug}}">{{$child->name}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            @else
                                                <li><a href="/c/{{$category->slug}}"> {{$category->name}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="search_container search_container_mobile mt-3">
                                    <form action="/search" method="GET">
                                         <div class="hover_category">
                                             <select class="select_option" name="select" id="categori2">
                                                 <option value="0">Все категории</option>
                                                 @foreach($categories as $category)
                                                     <option value="{{$category->slug}}">{{$category->name}}</option>
                                                 @endforeach
                                             </select>                        
                                         </div>
                                         <div class="search_box">
                                             <input placeholder="Поиск..." type="text" name="search" onkeyup="search()">
                                              <button type="submit"><i class="icon-search"></i></button>
                                         </div>
                                     </form>
                                 </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--main menu start-->
                            <div class="main_menu menu_position"> 
                                <nav>  
                                    <ul>
                                        <li>
                                            <a class="active" href="/">Главная</a>
                                        </li>
                                        <li>
                                            <a href="/payments-delivery">Доставка и оплата</a>
                                        </li>
                                        <li>
                                            <a href="/contacts"> Контакты</a> 
                                        </li>
                                        <li>
                                            <a href="/contacts">Вопросы и ответы</a>
                                        </li>
                                    </ul>  
                                </nav> 
                            </div>
                            <!--main menu end-->
                        </div>
                        <div class="col-lg-3">
                            <div class="call-support">
                                <p>
                                    Наш телефон: <a href="tel:+77078079777">+7 (707) 807-97-77</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </header>
    <!--header area end-->
    
    @yield('content')

    <!--footer area start-->
    <footer class="footer_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4">
                        <div class="widgets_container contact_us">
                            <h3>Время работы</h3>
                            <p><span>Понедельник - Пятница:</span> 10:00 - 20:00</p>
                            <p><span>Суббота:</span> 10:00 - 18:00</p>
                            <p><span>Воскресенье:</span> выходной</p>

                            <h3 class="mt-23">Информация</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="/checkout">Оформить заказ</a></li>
                                    <li><a href="/contacts">Контакты</a></li>
                                    <li><a href="/payments-delivery">Доставка и оплата</a></li>
                                    <li><a href="/contacts">Вопросы и ответы</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="widgets_container widget_app">
                            <div class="footer_logo">
                               <a href="/"><img src="/assets/img/logo/logo.png" alt=""></a>
                           </div>
                            <div class="footer_social">
                                <a href="https://instagram.com/vitamarket.almaty">
                                    <img src="/assets/img/icon/instagram.png" alt="" width="50">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-5">
                        <div class="widgets_container widget_menu">
                            <a class="dg-widget-link" href="http://2gis.kz/almaty/firm/70000001045157133/center/76.892612,43.239186/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a><div class="dg-widget-link"><a href="http://2gis.kz/almaty/center/76.892612,43.239186/zoom/16/routeTab/rsType/bus/to/76.892612,43.239186╎Vitamarket, магазин здоровья?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Vitamarket, магазин здоровья</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":'100%',"height":400,"borderColor":"#a3a3a3","pos":{"lat":43.239186,"lon":76.892612,"zoom":16},"opt":{"city":"almaty"},"org":[{"id":"70000001045157133"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p>Copyright &copy; {{date('Y')}} <a href="#">Brainsmedia</a>  All Right Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </footer>
    <!--footer area end-->
    
    <!-- JS
    ============================================ -->
    <!--jquery min js-->
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <!--popper min js-->
    <script src="/assets/js/popper.js"></script>
    <!--bootstrap min js-->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!--owl carousel min js-->
    <script src="/assets/js/owl.carousel.min.js"></script>
    <!--slick min js-->
    <script src="/assets/js/slick.min.js"></script>
    <!--magnific popup min js-->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <!--counterup min js-->
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <!--jquery countdown min js-->
    <script src="/assets/js/jquery.countdown.js"></script>
    <!--jquery ui min js-->
    <script src="/assets/js/jquery.ui.js"></script>
    <!--jquery elevatezoom min js-->
    <script src="/assets/js/jquery.elevatezoom.js"></script>
    <!--isotope packaged min js-->
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <!--slinky menu js-->
    <script src="/assets/js/slinky.menu.js"></script>
    <!-- Plugins JS -->
    <script src="/assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

	@yield('js')
	<script>
		function addToCart(that, product_id, quantity = 1){
			$.ajax({
				url:'/cart/add',
				method:'POST',
				data:{
					product_id:product_id,
					quantity:quantity,
					_token:"<?=csrf_token()?>"
				},
				success:function(res) {
                    // window.location.href = '/cart';
                    if($(window).width() > 767) {
                        $('.mini_cart_custom').addClass('active');
                        setTimeout(function(){
                            $('.mini_cart_custom').removeClass('active')
                        }, 2500)
                    } else {
                        $('.mini_cart_wrapper_custom_mobile').addClass('active');
                        setTimeout(function(){
                            $('.mini_cart_wrapper_custom_mobile').removeClass('active')
                        }, 10000)
                    }
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

        $(document).ready(function(){
            $('#categori2').on('change', function(){
                console.log($('#categori2 option:selected').val())
                if($('#categori2 option:selected').val() == 0) {
                    window.location.href = '/';
                } else {
                    window.location.href = '/c/' + $('#categori2 option:selected').val();
                }
            })
        })

        function search()
        {
            console.log($('.search_box input').val())
        }
	</script>
</body>
</html>
