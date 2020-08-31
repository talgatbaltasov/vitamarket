@extends('layouts.app')

@section('title', 'Интернет-магазин Vitamarket')
@section('description', '★ Интернет-магазин Vitamarket ★ Широкий выбор товаров ✔ Удобная оплата ✔ Продукция с гарантией и доставкой в интернет-магазине витамин и БАД ➤ Круглосуточно 24/7 ☎ +7 707 807 97 77')

@section('content')
    <!--slider area start-->
    <section class="slider_section">
        <div class="slider_area owl-carousel">
            @foreach($banners as $banner)
                <div class="single_slider d-flex align-items-center" data-bgimg="{{$banner->image}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider_content">
                                    <h1>{{$banner->title}}</h1>
                                    <p>{!!$banner->description!!}</p> 
                                    <a class="button" href="{{$banner->link}}">{{$banner->link_label}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
                            <p>Бесплатная доставка при заказе <br> свыше 15000 тг.</p>
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
                            <a href="/c/vitaminy-iherb"><img src="/assets/img/bg/banner1.jpg" alt=""></a> 
                            <div class="banner_content">
                                <h3>Товары со скидкой</h3>
                                <a href="/tovary-so-skidkoi">Посмотреть</a>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="/c/tovary-vostochnoi-islamskoi-mediciny"><img src="/assets/img/bg/banner2.jpg" alt=""></a> 
                            <div class="banner_content">
                                <h3>Все товары</h3>
                                <a href="/vse-tovary">Посмотреть</a>
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
                    @php
                        $products = $category->products()->has('main_image')->inRandomOrder()->get();
                    @endphp
                    <div class="tab-pane fade @if($loop->first) show active @endif" id="category{{$category->id}}" role="tabpanel">
                        <div class="row">
                            <div class="product_carousel product_column4 owl-carousel">
                                @for($i = 0; $i < 6; $i++)
                                    <div class="col-lg-3">
                                        <div class="product_items">
                                            @for($j = 0; $j < 2; $j++)
                                                @if(isset($products[2*$i + $j]))
                                                    @php $product = $products[2*$i + $j]; @endphp
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
                                                                        <li class="add_to_cart"><a href="#" onclick="addToCart(this, {{$product->id}})" title="В корзину"><i class="icon-shopping-bag"></i></a></li>  
                                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#product{{$product->id}}"  title="Быстрый просмотр"> <i class="icon-eye"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <figcaption class="product_content">
                                                                <h4 class="product_name"><a href="/p/{{$product->slug}}">{{$product->name}}</a></h4>
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
                    @foreach($articles as $article)
                        <div class="col-lg-3">
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="/articles/{{$article->slug}}"><img src="{{$article->main_image}}" alt=""></a>
                                    </div>
                                    <figcaption class="blog_content">
                                    <h4 class="post_title">
                                        <a href="/articles/{{$article->slug}}">{{$article->title}}</a>
                                    </h4>
                                    <div class="articles_date">
                                            <p><span>{{$article->created_at->format('Y-m-d')}}</span></p>
                                        </div>
                                        <div class="post_desc">{!!$article->short_description!!}</div>
                                        <footer class="blog_footer">
                                            <a href="/articles/{{$article->slug}}">Читать далее</a>
                                            <p><i class="icon-message-circle"></i> <span>0</span></p>
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    @endforeach
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
                                                                <button type="button" onclick="addToCart(this, {{$product->id}}, $('.modal_add_to_cart form input').val())">В корзину</button>
                                                            </form>
                                                        </div>   
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
