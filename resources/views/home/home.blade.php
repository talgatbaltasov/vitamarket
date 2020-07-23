@extends('layouts.app')

@section('title', 'Интернет-магазин Vitamarket')
@section('description', '★ Интернет-магазин Vitamarket ★ Широкий выбор товаров ✔ Удобная оплата ✔ Продукция с гарантией и доставкой в интернет-магазине витамин и БАД ➤ Круглосуточно 24/7 ☎ +7 700 103 01 10')

@section('content')
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
                                @for($i = 0; $i < 6; $i++)
                                    <div class="col-lg-3">
                                        <div class="product_items">
                                            @for($j = 0; $j < 2; $j++)
                                                @if(isset($category->products[2*$i + $j]))
                                                    @php $product = $category->products[2*$i + $j]; @endphp
                                                    <article class="single_product">
                                                        <figure>
                                                            <div class="product_thumb">
                                                                <a class="primary_img" href="/p/{{$product->slug}}"><img src="{{$product->main_image->image}}" alt=""></a>
                                                                @if($product->sale_price > 0) 
                                                                    <div class="label_product">
                                                                        <span class="label_sale">-{{$product->sale_rate}}%</span>
                                                                    </div>
                                                                @endif
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li class="add_to_cart"><a href="#" onclick="addToCart(this, {{$product->id}})" title="Добавить в корзину"><i class="icon-shopping-bag"></i></a></li>  
                                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#product{{$product->id}}"  title="Быстрый просмотр"> <i class="icon-eye"></i></a></li>
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
                                                                <h4 class="product_name"><a href="product-details.html">{{$product->name}}</a></h4>
                                                                <div class="price_box">
                                                                    @if($product->sale_price > 0) 
                                                                        <span class="current_price">{{$product->sale_price}} тг.</span>
                                                                        <span class="old_price">{{$product->price}} тг.</span>
                                                                    @else
                                                                        <span class="current_price">{{$product->price}} тг.</span>
                                                                    @endif
                                                                </div>
                                                            </figcaption>
                                                        </figure>
                                                    </article>
                                                @endif
                                            @endfor
                                        </div>
                                    </div> 
                                @endfor
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
                        @foreach($sale_products as $product)
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="/p/{{$product->slug}}"><img src="{{$product->main_image->image}}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-{{$product->sale_rate}}%</span>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="{{$product->sale_end_at->format('Y/m/d')}}"></div>
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
                                            <h4 class="product_name"><a href="/p/{{$product->slug}}">{{$product->name}}</a></h4>
                                            <div class="price_box"> 
                                                <span class="current_price">{{$product->sale_price}} тг.</span>
                                                <span class="old_price">{{$product->price}} тг.</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        @endforeach
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
                        @foreach($feedbacks as $feedback)
                            <div class="col-12">
                                <div class="single-testimonial">
                                    <div class="testimonial-icon-img">
                                        <img src="/assets/img/about/testimonials-icon.png" alt="">
                                    </div>
                                    <div class="testimonial_content">
                                        <p>“ {{$feedback->description}} ”</p>
                                        @if($feedback->image != '')
                                            <div class="testimonial_text_img">
                                                <a href="#"><img src="{{$feedback->image}}" alt=""></a>
                                            </div>
                                        @endif
                                        <div class="testimonial_author">
                                            <p>
                                                @if($feedback->link != '')
                                                    <a href="{{$feedback->link}}">{{$feedback->name}}</a>
                                                @else
                                                    {{$feedback->name}}
                                                @endif
                                                @if($feedback->position != '')
                                                    / <span>{{$feedback->position}}</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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

    @foreach($categories as $category)
        @for($i = 0; $i < 6; $i++)
            @for($j = 0; $j < 2; $j++)
                @if(isset($category->products[2*$i + $j]))
                    @php $product = $category->products[2*$i + $j]; @endphp
                    <!-- modal area start-->
                    <div class="modal fade" id="product{{$product->id}}" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                                        @foreach($product->product_images as $pi)
                                                            <div class="tab-pane fade @if($loop->first) show active @endif" id="product_images{{$pi->id}}" role="tabpanel">
                                                                <div class="modal_tab_img">
                                                                    <a href="#"><img src="{{$pi->image}}" alt=""></a>    
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="modal_tab_button">    
                                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                                            @foreach($product->product_images as $pi)
                                                                <li>
                                                                    <a class="nav-link @if($loop->first) active @endif" data-toggle="tab" href="#product_images{{$pi->id}}" role="tab" aria-controls="product_images{{$pi->id}}" aria-selected="false"><img src="{{$pi->image}}" alt=""></a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>    
                                                </div>  
                                            </div> 
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="modal_right">
                                                    <div class="modal_title mb-10">
                                                        <h2>{{$product->name}}</h2> 
                                                    </div>
                                                    <div class="modal_price mb-10">
                                                        @if($product->sale_price > 0)
                                                            <span class="new_price">{{$product->sale_price}} тг.</span>
                                                            <span class="old_price" >{{$product->price}} тг.</span>    
                                                        @else
                                                            <span class="new_price">{{$product->price}} тг.</span>
                                                        @endif
                                                    </div>
                                                    <div class="modal_description mb-15">
                                                        {!!$product->description!!}
                                                    </div> 
                                                    <div class="variants_selects">
                                                        <div class="modal_add_to_cart">
                                                            <form action="#">
                                                                <input min="1" max="100" step="1" value="1" type="number">
                                                                <button type="submit">Добавить в корзину</button>
                                                            </form>
                                                        </div>   
                                                    </div>
                                                    <div class="modal_social">
                                                        <h2>Поделиться</h2>
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
                @endif
            @endfor
        @endfor
    @endforeach
@endsection
