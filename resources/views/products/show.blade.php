@extends('layouts.app')

@section('title', (($product->category->parent) ? $product->category->parent->name.' ' : '').$product->category->name.' '.$product->name.' → купить в Алматы и Казахстане в "Vitamarket" | цены и отзывы')
@section('description', '★ Vitamarket ★ Доставка '.$product->name.' по Алматы и регионам Казахстана ➤ Круглосуточно 24/7 ☎ +7 700 103 01 10')

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
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li class="review"><a href="#"> (отзывы клиентов) </a></li>
                                </ul>
                            </div>
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
                                <button class="button" type="submit">Добавить в корзину</button>  
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
                                    <div class="product_ratting mb-10">
                                    <h3>Your rating</h3>
                                        <ul>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                        </ul>
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
                        <h2>Related Products	</h2>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="product_carousel product_column4 owl-carousel owl-loaded owl-drag">
                        
                    
                        
                    
                        
                    
                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1200px, 0px, 0px); transition: 0s; width: 4200px;"><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product3.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-6%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">     
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product4.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-5%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product5.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-8%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">    
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product6.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-9%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item active" style="width: 300px;"><div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product1.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-7%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item active" style="width: 300px;"><div class="col-lg-3">    
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product2.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-9%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item active" style="width: 300px;"><div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product3.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-6%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item active last" style="width: 300px;"><div class="col-lg-3">     
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product4.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-5%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item" style="width: 300px;"><div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product5.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-8%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item" style="width: 300px;"><div class="col-lg-3">    
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product6.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-9%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product1.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-7%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">    
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product2.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-9%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product3.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-6%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">     
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product4.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-5%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div></div></div><div class="owl-nav"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div> 
            </div>  
        </div>
    </section>
    <!--product area end-->
    <!--product area start-->
    <section class="product_area upsell_products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Upsell Products	</h2>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="product_carousel product_column4 owl-carousel owl-loaded owl-drag">
                        
                    
                        
                    
                        
                    
                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1200px, 0px, 0px); transition: 0s; width: 4200px;"><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product9.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-8%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">    
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product10.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-9%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product1.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-7%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">    
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product2.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-9%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item active" style="width: 300px;"><div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product7.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-4%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item active" style="width: 300px;"><div class="col-lg-3">    
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product8.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-6%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item active" style="width: 300px;"><div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product9.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-8%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item active last" style="width: 300px;"><div class="col-lg-3">    
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product10.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-9%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item" style="width: 300px;"><div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product1.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-7%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item" style="width: 300px;"><div class="col-lg-3">    
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product2.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-9%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product7.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-4%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">    
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product8.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-6%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product9.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-8%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div><div class="owl-item cloned" style="width: 300px;"><div class="col-lg-3">    
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="/assets/img/product/product10.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-9%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li class="compare"><a href="#" title="" data-original-title="Add to Compare"><i class="icon-sliders"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><i class="icon-heart"></i></a></li>    
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <i class="icon-eye"></i></a></li>
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
                    </div></div></div></div><div class="owl-nav"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div> 
            </div>   
        </div>
    </section>
    <!--product area end-->
    <section class="flat-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumbs">
                        <li class="trail-item">
                            <a href="/" title="">Главная</a>
                            <span><img src="/images/icons/arrow-right.png" alt=""></span>
                        </li>
                        @if($product->category->parent)
                        <li class="trail-item">
                            <a href="/c/{{$product->category->parent->slug}}" title="">{{$product->category->parent->name}}</a>
                            <span><img src="/images/icons/arrow-right.png" alt=""></span>
                        </li>
                        @endif
                        <li class="trail-item">
                            <a href="/c/{{$product->category->slug}}" title="">{{$product->category->name}}</a>
                            <span><img src="/images/icons/arrow-right.png" alt=""></span>
                        </li>
                        <li class="trail-end">
                            <a href="#" title="">{{$product->name}}</a>
                        </li>
                    </ul><!-- /.breacrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <section class="flat-product-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach($product->product_images as $image)
                                <li data-thumb="/images{{$image->image}}">
                                    <a href='#' id="zoom{{$image->id}}" class='zoom'><img src="/images{{$image->image}}" alt='' width='400' height='300' /></a>
                                    <span>НОВИНКА</span>
                                </li>
                            @endforeach
                        </ul>
                    </div><!-- /.flexslider -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="product-detail">
                        <div class="header-detail">
                            <h4 class="name">{{$product->name}}</h4>
                            <div class="category">
                                {{($product->category->parent) ? $product->category->parent->name : ''}} {{$product->category->name}}
                            </div>
                            <div class="reviewed">
                                <div class="review" style="display: none;">
                                    <div class="queue">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <span>3 Отзыва</span>
                                        <span class="add-review">Добавить отзыв</span>
                                    </div>
                                </div><!-- /.review -->
                                <div class="status-product">
                                    <span>В наличии</span>
                                </div>
                            </div><!-- /.reviewed -->
                        </div><!-- /.header-detail -->
                        <div class="content-detail">
                            <div class="price">
                                <!-- <div class="regular">
                                    $2,999.00
                                </div> -->
                                <div class="sale">
                                    {{$product->price}} тг.
                                </div>
                            </div>
                            <div class="info-text">
                                {{$product->description}}
                            </div>
                        </div><!-- /.content-detail -->
                        <div class="footer-detail">
                            <div class="box-cart style2">
                                <div class="btn-add-cart">
                                    <a title="" onclick='addToCart(this, {{$product->id}})'><img src="/images/icons/add-cart.png" alt="">В КОРЗИНУ</a>
                                </div>
                            </div><!-- /.box-cart -->
                        </div><!-- /.footer-detail -->
                    </div><!-- /.product-detail -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <section class="flat-product-content" style="display: none;">
        <ul class="product-detail-bar">
            <li class="active">Описание</li>
            <li>Характеристики</li>
            <li>Отзывы</li>
        </ul><!-- /.product-detail-bar -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="description-text">
                        <div class="box-text">
                            <h4>Nuqqam Et Massa</h4>
                            <p>Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="box-text wireless">
                            <h4>Wireless</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece <br>of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                        <div class="box-text design">
                            <h4>Fresh Design</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of <br>a page when looking at its layout. The point of using Lorem Ipsum is that it has a <br>more-or-less normal distribution of letters, as opposed to using</p>
                        </div>
                        <div class="box-text sound">
                            <h4>Fabolous Sound</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the <br>majority have suffered alteration in some form, by injected humour, or <br>randomised words which don't look even slightly believable.</p>
                        </div>
                    </div><!-- /.description-text -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="description-image">
                        <div class="box-image">
                            <img src="/images/product/single/01.png" alt="">
                        </div>
                        <div class="box-text">
                            <h4>Nuqqam Et Massa</h4>
                            <p>Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div><!-- /.description-image -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-12">
                    <div class="different-color">
                        <div class="title">
                            Different Colors
                        </div>
                        <p>
                            Sed sodales sed orci<br>molestie
                        </p>
                    </div><!-- /.different-color -->
                </div><!-- /.col-md-12 -->
                <div class="col-md-6">
                    <div class="box-left">
                        <div class="img-line">
                            <img src="/images/product/single/line-1.png" alt="">
                        </div>
                        <div class="img-product">
                            <img src="/images/product/single/06.png" alt="">
                        </div>
                    </div><!-- /.box-left -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="box-right">
                        <div class="img-line">
                            <img src="/images/product/single/line-2.png" alt="">
                            <img src="/images/product/single/04.png" alt="">
                        </div>
                        <div class="img-product">

                        </div>
                        <div class="box-text">
                            <h4>Nuqqam Et Massa</h4>
                            <p>Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div><!-- /.box-right -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <div class="row" style="display: none;">
                <div class="col-md-12">
                    <div class="tecnical-specs">
                        <h4 class="name">
                            Warch 42 mm Smart Watches
                        </h4>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Height</td>
                                    <td>38.6mm</td>
                                </tr>
                                <tr>
                                    <td>Meterial</td>
                                    <td>Stainless Stee</td>
                                </tr>
                                <tr>
                                    <td>Case</td>
                                    <td>40g</td>
                                </tr>
                                <tr>
                                    <td>Color</td>
                                    <td>blue, gray, green, light blue, lime, purple, red, yellow</td>
                                </tr>
                                <tr>
                                    <td>Depth</td>
                                    <td>10.5mm</td>
                                </tr>
                                <tr>
                                    <td>Width</td>
                                    <td>33.3mm</td>
                                </tr>
                                <tr>
                                    <td>Size</td>
                                    <td>Large, Medium, Small</td>
                                </tr>
                            </tbody>
                        </table><!-- /.table -->
                    </div><!-- /.tecnical-specs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row" style="display: none;">
                <div class="col-md-6">
                    <div class="rating">
                        <div class="title">
                            Based on 3 reviews
                        </div>
                        <div class="score">
                            <div class="average-score">
                                <p class="numb">4.3</p>
                                <p class="text">Average score</p>
                            </div>
                            <div class="queue">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div><!-- /.score -->
                        <ul class="queue-box">
                            <li class="five-star">
                                <span>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                                <span class="numb-star">3</span>
                            </li><!-- /.five-star -->
                            <li class="four-star">
                                <span>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                                <span class="numb-star">4</span>
                            </li><!-- /.four-star -->
                            <li class="three-star">
                                <span>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                                <span class="numb-star">3</span>
                            </li><!-- /.three-star -->
                            <li class="two-star">
                                <span>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                                <span class="numb-star">2</span>
                            </li><!-- /.two-star -->
                            <li class="one-star">
                                <span>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                                <span class="numb-star">0</span>
                            </li><!-- /.one-star -->
                        </ul><!-- /.queue-box -->
                    </div><!-- /.rating -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="form-review">
                        <div class="title">
                            Add a review
                        </div>
                        <div class="your-rating queue">
                            <span>Your Rating</span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <form action="#" method="get" accept-charset="utf-8">
                            <div class="review-form-name">
                                <input type="text" name="name-author" value="" placeholder="Name">
                            </div>
                            <div class="review-form-email">
                                <input type="text" name="email-author" value="" placeholder="Email">
                            </div>
                            <div class="review-form-comment">
                                <textarea name="review-text" placeholder="Your Name"></textarea>
                            </div>
                            <div class="btn-submit">
                                <button type="submit">Add Review</button>
                            </div>
                        </form>
                    </div><!-- /.form-review -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-12">
                    <ul class="review-list">
                        <li>
                            <div class="review-metadata">
                                <div class="name">
                                    Ali Tufan : <span>April 3, 2016</span>
                                </div>
                                <div class="queue">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div><!-- /.review-metadata -->
                            <div class="review-content">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p>
                            </div><!-- /.review-content -->
                        </li>
                        <li>
                            <div class="review-metadata">
                                <div class="name">
                                    Peter Tufan : <span>April 3, 2016</span>
                                </div>
                                <div class="queue">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div><!-- /.review-metadata -->
                            <div class="review-content">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p>
                            </div><!-- /.review-content -->
                        </li>
                        <li>
                            <div class="review-metadata">
                                <div class="name">
                                    Jon Tufan : <span>April 3, 2016</span>
                                </div>
                                <div class="queue">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div><!-- /.review-metadata -->
                            <div class="review-content">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p>
                            </div><!-- /.review-content -->
                        </li>
                    </ul><!-- /.review-list -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <section class="flat-imagebox style4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-row-title">
                        <h3>Просмотренные товары</h3>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel-3 style3">
                        @foreach($viewed as $p)
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="/p/{{$p->slug}}" title="">
                                        <img src="/images{{$p->main_image->image}}" class="image-hw-117" alt="">
                                    </a>
                                </div><!-- /.box-image -->
                                <div class="box-content">
                                    <div class="cat-name">
                                        <a href="/c/{{$p->category->slug}}" title="">{{$p->category->name}}</a>
                                    </div>
                                    <div class="product-name">
                                        <a href="/p/{{$p->slug}}" title="">{{$p->title}}</a>
                                    </div>
                                    <div class="price">
                                        <span class="sale">{{$p->price}} тг.</span>
                                        <!-- <span class="regular">$2,999.00</span> -->
                                    </div>
                                </div><!-- /.box-content -->
                            </div>
                        @endforeach
                    </div><!-- /.owl-carousel-3 -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection
