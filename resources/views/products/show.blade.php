@extends('layouts.app')

@section('title', (($product->category->parent) ? $product->category->parent->name.' ' : '').$product->category->name.' '.$product->name.' → купить в Алматы и Казахстане в "Vitamarket" | цены и отзывы')
@section('description', '★ Vitamarket ★ Доставка '.$product->name.' по Алматы и регионам Казахстана ➤ Круглосуточно 24/7 ☎ +7 707 807 97 77')

@section('content')
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">Главная</a></li>
                            <li>Детали товара</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    <!--product details start-->
    <div class="product_details mt-100 mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{$product->main_image->image}}" data-zoom-image="{{$product->main_image->image}}" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active owl-loaded owl-drag" id="gallery_01">
                                @foreach($product->product_images as $image)
                                    <div>
                                        <li>
                                            <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{$image->image}}" data-zoom-image="{{$image->image}}">
                                                <img src="{{$image->image}}" alt="zo-th-1">
                                            </a>
                                        </li>
                                    </div>
                                @endforeach
                                {{-- <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(-471px, 0px, 0px); transition: 0s; width: 1413px;">
                                        @foreach($product->product_images as $image)
                                            <div class="owl-item cloned" style="width: 102.75px; margin-right: 15px;">
                                                <li>
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{$image->image}}" data-zoom-image="{{$image->image}}">
                                                        <img src="{{$image->image}}" alt="zo-th-1">
                                                    </a>
                                                </li>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <div class="owl-prev">
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                    <div class="owl-next">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                                <div class="owl-dots disabled"></div> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">
                            <h1><a href="#">{{$product->name}}</a></h1>
                            <div class="price_box">
                                @if($product->sale_price != null)
                                    <span class="current_price">{{$product->sale_price}} тг.</span>
                                    <span class="old_price">{{$product->price}} тг.</span>
                                @else
                                    <span class="current_price">{{$product->price}} тг.</span>
                                @endif
                            </div>
                            <div class="product_desc">
                                <p>{!!$product->description!!}</p>
                            </div>
                            <div class="product_variant quantity">
                                <label>Количество</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" onclick="addToCart(this, {{$product->id}})">Добавить в корзину</button>  
                            </div>
                            <div class="product_meta">
                                <span>Категория: <a href="#">{{$product->category->name}}</a></span>
                            </div>
                            
                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>           
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>           
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>           
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>        
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>        
                            </ul>      
                        </div>

                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--product details end-->
    <!--product info start-->
    <div class="product_d_info mb-90">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">   
                        <div class="product_info_button">    
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Описание</a>
                                </li>
                                <li>
                                <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Отзывы ({{$product->feedbacks->count()}})</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    {!!$product->description!!}
                                </div>    
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="reviews_wrapper">
                                    <h2>{{$product->feedbacks->count()}}</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="/assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>   
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published.  Required fields are marked </p>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment"></textarea>
                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author" type="text">

                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email" type="text">
                                                </div>  
                                            </div>
                                            <button type="submit">Submit</button>
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
    <!--product info end-->
    <!--product area start-->
    <section class="product_area related_products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Похожие товары</h2>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="product_carousel product_column4 owl-carousel owl-loaded owl-drag">
                    @foreach($viewed as $p)
                        <div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="/p/{{$p->slug}}">
                                                <img src="{{$p->main_image->image}}" alt="">
                                            </a>
                                            @if($p->sale_price != null)
                                                <div class="label_product">
                                                    <span class="label_sale">-{{$p->sale_price}}%</span>
                                                </div>
                                            @endif
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="#" title="" onclick="addToCart(this, {{$p->id}})" data-original-title="Добавить в корзину"><i class="icon-shopping-bag"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="Быстрый просмотр"> <i class="icon-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="/p/{{$p->slug}}">{{$p->name}}</a></h4>
                                            <div class="price_box">
                                                @if($p->sale_price != null)
                                                    <span class="current_price">{{$p->sale_price}} тг.</span>
                                                    <span class="old_price">{{$p->price}} тг.</span>
                                                @else
                                                    <span class="current_price">{{$p->price}} тг.</span>
                                                @endif
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        </div>
                    @endforeach
                </div> 
            </div>  
        </div>
    </section>
    <!--product area end-->
@endsection
