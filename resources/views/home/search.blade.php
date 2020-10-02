@extends('layouts.app')

@section('title', $_GET['search'].' → купить в Алматы и Астане в интернет-магазине "Vitamarket" | цены, отзывы, доставка')
@section('description', '★ Vitamarket ★ '.$_GET['search'].' -  низкие цены и удобный выбор в интернет-магазине ➤ Круглосуточно 24/7 ☎ +7 707 807 97 77')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Поиск</h3>
                        <ul>
                            <li><a href="/">Главная</a></li>
                            <li>Поиск</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    <!--shop  area start-->
    <div class="shop_area shop_fullwidth mt-100 mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_3" type="button" class="btn-grid-3" data-toggle="tooltip" title="3"></button>
                            <button data-role="grid_4" type="button" class="btn-grid-4 active" data-toggle="tooltip" title="4"></button>
                            <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip" title="List"></button>
                        </div>
                        {{-- <div class=" niceselect_option">
                            <form class="select_option" action="#" style="display: none;">
                                <select name="orderby" id="short">
                                    <option selected="" value="1">Sort by average rating</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form><div class="nice-select select_option" tabindex="0"><span class="current">Sort by average rating</span><ul class="list"><li data-value="1" class="option selected">Sort by average rating</li><li data-value="2" class="option">Sort by popularity</li><li data-value="3" class="option">Sort by newness</li><li data-value="4" class="option">Sort by price: low to high</li><li data-value="5" class="option">Sort by price: high to low</li><li data-value="6" class="option">Product Name: Z</li></ul></div>
                        </div> --}}
                        <div class="page_amount">
                            <p>Показано {{$products->firstItem()}}–{{$products->lastItem()}} от {{$products->total()}}</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <div class="row shop_wrapper grid_4">
                        @foreach($products as $product)
                            <div class="col-md-4 col-sm-6 col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="/p/{{$product->slug}}"><img src="{{$product->main_image->image}}" alt=""></a>
                                            <div class="label_product">
                                                @if($product->sale_price != null)
                                                    <span class="label_sale">-{{$product->sale_rate}}%</span>
                                                @endif
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="javascript:void(0)" onclick="addToCart(this, {{$product->id}})" title="" data-original-title="В корзину"><i class="icon-shopping-bag"></i></a></li>  
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="Быстрый просмотр"> <i class="icon-eye"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="action_links list_action">
                                                <ul>  
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="Быстрый просмотр"> <i class="icon-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="product_price_rating">
                                                <h4 class="product_name"><a href="/p/{{$product->slug}}">{{$product->name}}</a></h4>
                                                <div class="price_box">
                                                    @if($product->sale_price != null)
                                                        <span class="current_price">{{$product->sale_price}} тг.</span>
                                                        <span class="old_price">{{$product->price}} тг.</span>
                                                    @else
                                                        <span class="current_price">{{$product->price}} тг.</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_content list_content">
                                            <h4 class="product_name"><a href="/p/{{$product->slug}}">{{$product->name}}</a></h4>
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
                                            <div class="action_links list_action_right">
                                                <ul>
                                                    <li class="add_to_cart"><a href="javascript:void(0)" title="" onclick='addToCart(this, {{$product->id}})' data-original-title="В корзину">В корзину</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                        @endforeach
                    </div>

                    <div class="shop_toolbar t_bottom">
                        {{$products->links()}}
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->
@endsection