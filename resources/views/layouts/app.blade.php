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
                                <a href="index.html"><img src="/assets/img/logo/logo.png" alt=""></a>
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
                                       <a href="javascript:void(0)"><i class="icon-shopping-bag"></i><span class="item_count">2</span></a>
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_gallery">
                                                <div class="cart_close">
                                                	<div class="cart_text">
                                                		<h3>cart</h3>
                                                	</div>
                                                	<div class="mini_cart_close">
                                                		<a href="javascript:void(0)"><i class="icon-x"></i></a>
                                                	</div>
                                                </div>
                                                <div class="cart_item">
                                                   <div class="cart_img">
                                                       <a href="#"><img src="/assets/img/s-product/product.jpg" alt=""></a>
                                                   </div>
                                                    <div class="cart_info">
                                                        <a href="#">Primis In Faucibus</a>
                                                        <p>1 x <span> $65.00 </span></p>    
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a href="#"><i class="icon-x"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart_item">
                                                   <div class="cart_img">
                                                       <a href="#"><img src="/assets/img/s-product/product2.jpg" alt=""></a>
                                                   </div>
                                                    <div class="cart_info">
                                                        <a href="#">Letraset Sheets</a>
                                                        <p>1 x <span> $60.00 </span></p>    
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a href="#"><i class="icon-x"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini_cart_table">
                                                <div class="cart_table_border">
                                                    <div class="cart_total">
                                                        <span>Sub total:</span>
                                                        <span class="price">$125.00</span>
                                                    </div>
                                                    <div class="cart_total mt-10">
                                                        <span>total:</span>
                                                        <span class="price">$125.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini_cart_footer">
                                               <div class="cart_button">
                                                    <a href="cart.html"><i class="fa fa-shopping-cart"></i> View cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a class="active" href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
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
    
    <!--slider area start-->
    <section class="slider_section">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="/assets/img/slider/slider1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>BIG SALE</h1>
                                <p>Discount <span>20% Off </span> For Lukani Members </p> 
                                <a class="button" href="shop.html">Discover Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="/assets/img/slider/slider2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>TOP SALE</h1>
                                <p>Discount <span>20% Off </span> For Lukani Members </p> 
                                <a class="button" href="shop.html">Discover Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="/assets/img/slider/slider3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>Lovely Plants </h1>
                                <p>Discount <span>20% Off </span> For Lukani Members </p>
                                <a class="button" href="shop.html">Discover Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->
    
    <!--shipping area start-->
    <div class="shipping_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="/assets/img/about/shipping1.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>Бесплатная доставка</h3>
                            <p>Бесплатная доставка при заказе <br> свыше 10000 тг.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping col_2">
                        <div class="shipping_icone">
                            <img src="/assets/img/about/shipping2.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>Оплата</h3>
                            <p>Оплата через Каспи перевод<br/> или наличными<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping col_3">
                        <div class="shipping_icone">
                            <img src="/assets/img/about/shipping3.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>Акции и скидки</h3>
                            <p>Регулярно проводим акции и скидки<br></p>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <!--shipping area end-->
    
    <!--banner area start-->
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="/assets/img/bg/banner1.jpg" alt=""></a> 
                            <div class="banner_content">
                                <h3>Товары со скидкой</h3>
                                <h2>Plants <br> For Interior</h2>
                                <a href="shop.html">Посмотреть</a>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="/assets/img/bg/banner2.jpg" alt=""></a> 
                            <div class="banner_content">
                                <h3>Популярные товары</h3>
                                <h2>Plants <br> For Healthy</h2>
                                <a href="shop.html">Посмотреть</a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
        
    <!--product area start-->
    <div class="product_area  mb-95">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title">
                           <h2>Наши товары</h2>
                        </div>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist">
                                @foreach($categories as $category)
                                    <li>
                                        <a @if($loop->first) class="active" @endif data-toggle="tab" href="#category{{$category->id}}" role="tab" aria-controls="category{{$category->id}}" aria-selected="true"> 
                                            {{$category->name}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="tab-content">
                @foreach($categories as $category)
                    <div class="tab-pane fade @if($loop->first) show active @endif" id="category{{$category->id}}" role="tabpanel">
                        <div class="row">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product1.jpg" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">-7%</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                    </div>
                                                    <h4 class="product_name"><a href="product-details.html">commodo augue nisi</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="current_price">£69.00</span>
                                                        <span class="old_price">£74.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product2.jpg" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">-9%</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                    </div>
                                                    <h4 class="product_name"><a href="product-details.html">eget sagittis</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="current_price">£65.00</span>
                                                        <span class="old_price">£70.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div> 
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product3.jpg" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">-6%</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                    </div>
                                                    <h4 class="product_name"><a href="product-details.html">fringilla augue</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="current_price">£68.00</span>
                                                        <span class="old_price">£75.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product4.jpg" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">-5%</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                    </div>
                                                    <h4 class="product_name"><a href="product-details.html">massa massa</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="current_price">£75.00</span>
                                                        <span class="old_price">£80.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div> 
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product5.jpg" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">-8%</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                    </div>
                                                    <h4 class="product_name"><a href="product-details.html">placerat vestibulum</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="current_price">£65.00</span>
                                                        <span class="old_price">£70.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product6.jpg" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">-9%</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                    </div>
                                                    <h4 class="product_name"><a href="product-details.html">Porro Cook</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="current_price">£62.00</span>
                                                        <span class="old_price">£68.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div> 
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product7.jpg" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">-4%</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                    </div>
                                                    <h4 class="product_name"><a href="product-details.html">sapien libero</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="current_price">£69.00</span>
                                                        <span class="old_price">£74.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product8.jpg" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">-6%</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                    </div>
                                                    <h4 class="product_name"><a href="product-details.html">vulputate rutrum</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="current_price">£64.00</span>
                                                        <span class="old_price">£72.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div> 
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product9.jpg" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">-8%</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                    </div>
                                                    <h4 class="product_name"><a href="product-details.html">adipiscing cursus</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="current_price">£60.00</span>
                                                        <span class="old_price">£70.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product10.jpg" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">-9%</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                    </div>
                                                    <h4 class="product_name"><a href="product-details.html">Donec eu cook</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="current_price">£67.00</span>
                                                        <span class="old_price">£77.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div> 
                            </div> 
                        </div>   
                    </div>
                @endforeach
            </div>
        </div> 
    </div>
    <!--product area end-->
    
    <!--product area start-->
    <div class="product_area product_deals ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2>Акции и скидки</h2>
                    </div>
                </div>
            </div> 
            <div class="product_deals_container">
                <div class="row">
                    <div class="product_carousel product_column5 owl-carousel">
                        <div class="col-lg-3">
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product1.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-7%</span>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2020/12/15"></div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                               </ul>
                                            </div>
                                            <h4 class="product_name"><a href="product-details.html">commodo augue nisi</a></h4>
                                            <div class="price_box"> 
                                                <span class="current_price">£69.00</span>
                                                <span class="old_price">£74.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                        </div>        
                        <div class="col-lg-3">        
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product2.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-9%</span>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2020/12/15"></div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                               </ul>
                                            </div>
                                            <h4 class="product_name"><a href="product-details.html">eget sagittis</a></h4>
                                            <div class="price_box"> 
                                                <span class="current_price">£65.00</span>
                                                <span class="old_price">£70.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                        </div> 
                        <div class="col-lg-3">
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product3.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-6%</span>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2020/12/15"></div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                               </ul>
                                            </div>
                                            <h4 class="product_name"><a href="product-details.html">fringilla augue</a></h4>
                                            <div class="price_box"> 
                                                <span class="current_price">£68.00</span>
                                                <span class="old_price">£75.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                        </div>        
                        <div class="col-lg-3">        
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product4.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-5%</span>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2020/12/15"></div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                               </ul>
                                            </div>
                                            <h4 class="product_name"><a href="product-details.html">massa massa</a></h4>
                                            <div class="price_box"> 
                                                <span class="current_price">£75.00</span>
                                                <span class="old_price">£80.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                        </div> 
                        
                        <div class="col-lg-3">
                            <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product5.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-8%</span>
                                            </div>
                                           <div class="product_timing">
                                                <div data-countdown="2020/12/15"></div>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                                   <li><a href="#"><i class="icon-star"></i></a></li>
                                               </ul>
                                            </div>
                                            <h4 class="product_name"><a href="product-details.html">placerat vestibulum</a></h4>
                                            <div class="price_box"> 
                                                <span class="current_price">£65.00</span>
                                                <span class="old_price">£70.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                        </div>        
                        <div class="col-lg-3">        
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product6.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-9%</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2020/12/15"></div>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="icon-star"></i></a></li>
                                               <li><a href="#"><i class="icon-star"></i></a></li>
                                               <li><a href="#"><i class="icon-star"></i></a></li>
                                               <li><a href="#"><i class="icon-star"></i></a></li>
                                               <li><a href="#"><i class="icon-star"></i></a></li>
                                           </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html">Porro Cook</a></h4>
                                        <div class="price_box"> 
                                            <span class="current_price">£62.00</span>
                                            <span class="old_price">£68.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div> 
                    </div> 
                </div>   
            </div>
        </div> 
    </div>
    <!--product area end-->
    
    <!--testimonial area start-->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2>Отзывы</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial_container">
                <div class="row">
                    <div class="testimonial_carousel owl-carousel">
                        <div class="col-12">
                            <div class="single-testimonial">
                                <div class="testimonial-icon-img">
                                    <img src="/assets/img/about/testimonials-icon.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>“ When a beautiful design is combined with powerful technology, <br>
                                    it truly is an artwork. I love how my website operates and looks with this theme. Thank you for the awesome product. ”</p>
                                    <div class="testimonial_text_img">
                                        <a href="#"><img src="/assets/img/about/testimonial1.png" alt=""></a>
                                    </div>
                                    <div class="testimonial_author">
                                        <p><a href="#">Rebecka Filson</a> / <span>CEO of CSC</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-testimonial">
                                <div class="testimonial-icon-img">
                                    <img src="/assets/img/about/testimonials-icon.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>“ When a beautiful design is combined with powerful technology, <br>
                                    it truly is an artwork. I love how my website operates and looks with this theme. Thank you for the awesome product. ”</p>
                                    <div class="testimonial_text_img">
                                        <a href="#"><img src="/assets/img/about/testimonial2.png" alt=""></a>
                                    </div>
                                    <div class="testimonial_author">
                                        <p><a href="#">Amber Laha</a> / <span>CEO of DND</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-testimonial">
                                <div class="testimonial-icon-img">
                                    <img src="/assets/img/about/testimonials-icon.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>“ When a beautiful design is combined with powerful technology, <br>
                                    it truly is an artwork. I love how my website operates and looks with this theme. Thank you for the awesome product. ”</p>
                                    <div class="testimonial_text_img">
                                        <a href="#"><img src="/assets/img/about/testimonial3.png" alt=""></a>
                                    </div>
                                    <div class="testimonial_author">
                                        <p><a href="#">Lindsy Neloms</a> / <span>CEO of SFD</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--testimonial area end-->
    
    <!--blog area start-->
    <section class="blog_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2>Статьи</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_carousel blog_column3 owl-carousel">
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="/assets/img/blog/blog1.jpg" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                   <h4 class="post_title"><a href="blog-details.html">Libero lorem</a></h4>
                                   <div class="articles_date">
                                        <p>By <span>admin / July 16, 2019</span></p>
                                    </div>
                                    <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                    <footer class="blog_footer">
                                        <a href="blog-details.html">Continue Reading</a>
                                        <p><i class="icon-message-circle"></i> <span>0</span></p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="/assets/img/blog/blog2.jpg" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                   <h4 class="post_title"><a href="blog-details.html">Blog image post</a></h4>
                                   <div class="articles_date">
                                        <p>By <span>admin / July 16, 2019</span></p>
                                    </div>
                                    <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                    <footer class="blog_footer">
                                        <a href="blog-details.html">Continue Reading</a>
                                        <p><i class="icon-message-circle"></i> <span>0</span></p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="/assets/img/blog/blog3.jpg" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                   <h4 class="post_title"><a href="blog-details.html">Post with Gallery</a></h4>
                                   <div class="articles_date">
                                        <p>By <span>admin / July 16, 2019</span></p>
                                    </div>
                                    <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                    <footer class="blog_footer">
                                        <a href="blog-details.html">Continue Reading</a>
                                        <p><i class="icon-message-circle"></i> <span>0</span></p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="/assets/img/blog/blog2.jpg" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                   <h4 class="post_title"><a href="blog-details.html">Post with Audio</a></h4>
                                   <div class="articles_date">
                                        <p>By <span>admin / July 16, 2019</span></p>
                                    </div>
                                    <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                    <footer class="blog_footer">
                                        <a href="blog-details.html">Continue Reading</a>
                                        <p><i class="icon-message-circle"></i> <span>0</span></p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog area end-->

    <!--footer area start-->
    <footer class="footer_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container contact_us">
                            <h3>Время работы</h3>
                            <p><span>Понедельник - Пятница:</span> 09:00 - 18:00</p>
                            <p><span>Суббота:</span> 09:00 - 14:00</p>
                            <p><span>Воскресенье:</span> 09:00 - 14:00</p>
                            <p><b>Работаем без выходных и праздников</b></p>
                        </div>          
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="faq.html">Frequently Questions</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="widgets_container widget_app">
                            <div class="footer_logo">
                               <a href="index.html"><img src="/assets/img/logo/logo.png" alt=""></a>
                           </div>
                           <div class="footer_widgetnav_menu">
                               <ul>
                                   <li><a href="#">Payment</a></li>
                                   <li><a href="#">Affiliates</a></li>
                                   <li><a href="#">Contact</a></li>
                                   <li><a href="#">Internet</a></li>
                               </ul>
                           </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="footer_app">
                                <ul>
                                    <li><a href="#"><img src="/assets/img/icon/icon-app.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/assets/img/icon/icon1-app.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>My Account</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="cart.html">Shopping cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="#">Order History</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Customer Service</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="contact.html">Site Map</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Returns</a></li>
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
                            <p>Copyright &copy; 2020 <a href="#">Lukani</a>  All Right Reserved.</p>
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
   
    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="icon-x"></i></span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">  
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="/assets/img/product/productbig1.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="/assets/img/product/productbig2.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="/assets/img/product/productbig3.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="/assets/img/product/productbig4.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">    
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="/assets/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="/assets/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="/assets/img/product/product3.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="/assets/img/product/product8.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>    
                                </div>  
                            </div> 
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Donec Ac Tempus</h2> 
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>    
                                        <span class="old_price" >$78.99</span>    
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>    
                                    </div> 
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option">
                                               <option selected value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>   
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>    
                                    </div>      
                                </div>    
                            </div>    
                        </div>     
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <!-- modal area end-->
    
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
