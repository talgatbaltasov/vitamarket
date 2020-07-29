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
@endsection
