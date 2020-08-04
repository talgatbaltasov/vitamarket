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

    <a href="https://api.whatsapp.com/send?phone=77001030110" style="position: fixed; z-index: 999; bottom: 35px; right: 15px;">
        <img src="/assets/img/icon/whatsapp.png" alt="" width="50">
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
                        <a href="javascript:void(0)"><i class="icon-menu"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="icon-x"></i></a>  
                        </div>
                        <div class="welcome-text">
                           <p>Free Delivery: Take advantage of our time to save event</p>
                       </div>
                        <div class="search_container">
                           <form action="#">
                                <div class="hover_category">
                                    <select class="select_option" name="select" id="categori2">
                                        <option selected value="0">Все категории</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>                        
                                </div>
                                <div class="search_box">
                                    <input placeholder="Поиск..." type="text">
                                     <button type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="call-support">
                            <p>Наш телефон: <a href="tel:+77001030110">+7 (700) 103-01-10</a></p>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="/">Главная</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/payments-delivery">Доставка и оплата</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/contacts"> Контакты</a> 
                                </li>
                            </ul>
                        </div>

                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> dulat-serikov@mail.ru</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--offcanvas menu area end-->
    <header>
        <div class="main_header">
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-7">
                            <div class="welcome-text">
                                <p>Free Delivery: Take advantage of our time to save event</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="language_currency text-right">
                                <ul>
                                    <li class="currency"><a href="#"> USD <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">GPB</a></li>
                                            <li><a href="#">RUP</a></li>
                                        </ul>
                                    </li>
                                    <li class="language"><a href="#"> English <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown_language">
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Russian</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                   <form action="#">
                                       <div class="hover_category">
                                            <select class="select_option" name="select" id="categori1">
                                                <option selected value="0">Все категории</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>                        
                                       </div>
                                        <div class="search_box">
                                            <input placeholder="Поиск..." type="text">
                                             <button type="submit"><i class="icon-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="header_account_area">
                                    <div class="header_account-list top_links">
                                        <a href="https://wa.me/77001030110?text={{urlencode('Здравствуйте. Я заинтересован в покупке с вашего интернет-магазина')}}" target="_blank"><i class="icon-message-circle"></i></a>
                                    </div>
                                    <div class="header_account-list header_wishlist">
                                        <a href="https://instagram.com/vitamarket.almaty" target="_blank"><i class="icon-instagram"></i></a>
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
                                    </ul>  
                                </nav> 
                            </div>
                            <!--main menu end-->
                        </div>
                        <div class="col-lg-3">
                            <div class="call-support">
                                <p>Наш телефон: <a href="tel:+77001030110">+7 (700) 103-01-10</a></p>
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
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container contact_us">
                            <h3>Время работы</h3>
                            <p><span>Понедельник - Пятница:</span> 10:00 - 20:00</p>
                            <p><span>Суббота:</span> 10:00 - 18:00</p>
                            <p><span>Воскресенье:</span> выходной</p>
                        </div>          
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Информация</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="/checkout">Оформить заказ</a></li>
                                    <li><a href="/contact">Контакты</a></li>
                                    <li><a href="/payments-delivery">Доставка и оплата</a></li>
                                    <li><a href="/faq">Вопросы и ответы</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="widgets_container widget_app">
                            <div class="footer_logo">
                               <a href="/"><img src="/assets/img/logo/logo.png" alt=""></a>
                           </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="https://instagram.com/vitamarket.almaty"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Заказ</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="/contact">Контакты</a></li>
                                    <li><a href="/cart">Корзина</a></li>
                                    <li><a href="/checkout">Оформить заказ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Служба поддержки</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="/contact">Контакты</a></li>
                                </ul>
                            </div>
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
                    <div class="col-lg-6 col-md-6">    
                        <div class="footer_payment">
                            <a href="#"><img src="/assets/img/icon/payment.png" alt=""></a>
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
