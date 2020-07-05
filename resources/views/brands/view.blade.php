@extends('layouts.app')

@section('title', 'Товары '.$brand->title.' → купить в Алматы и Астане в интернет-магазине "Лайтстор" | цены, отзывы, доставка')
@section('description', '★ Лайтстор ★ '.$brand->title.' - удобный выбор в интернет-магазине ➤ Круглосуточно 24/7 ☎ +7 707 897 02 47')

@section('content')
<section class="flat-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumbs">
                    <li class="trail-item">
                        <a href="/" title="">Главная</a>
                        <span><img src="/images/icons/arrow-right.png" alt=""></span>
                    </li>
                    <li class="trail-end">
                        <a href="#" title="">{{$brand->title}}</a>
                    </li>
                </ul><!-- /.breacrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<main id="shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="sidebar ">
                    <div class="widget widget-categories">
                        <div class="widget-title">
                            <h3>Категории<span></span></h3>
                        </div>
                        <ul class="cat-list style1 widget-content">
                            @foreach($categories as $c)
                                <li>
                                    <a href="/c/{{$c->slug}}"><span>{{$c->name}}<i>({{$c->products->count()}})</i></span></a>
                                    <ul class="cat-child" style="display: none;">
                                        @foreach($c->children as $child)
                                        <li>
                                            <a href="/c/{{$child->slug}}" title="">{{$child->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul><!-- /.cat-list -->
                    </div><!-- /.widget-categories -->
                    <div class="widget widget-price">
                        <div class="widget-title">
                            <h3>Цена<span></span></h3>
                        </div>
                        <div class="widget-content">
                            <p>Цена</p>
                            <div class="price search-filter-input">
                                <div id="slider-range" class="price-slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 49.0835%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 49.0835%;"></div></div>
                                <p class="amount">
                                    <input type="text" id="amount" disabled="">
                                </p>
                            </div>
                        </div>
                    </div><!-- /.widget widget-price -->
                    <div class="widget widget-products">
                        <div class="widget-title">
                            <h3>Бестселлеры<span></span></h3>
                        </div>
                        <ul class="product-list widget-content">
                            @foreach($bestsellers as $product)
                            <li>
                                <div class="img-product">
                                    <a href="/p/{{$product->slug}}" title="">
                                        <img src="/images{{$product->mainImage()}}" class="image-w-100" alt="">
                                    </a>
                                </div>
                                <div class="info-product">
                                    <div class="name">
                                        <a href="/p/{{$product->slug}}" title="">{{$product->title}}</a>
                                    </div>
                                    <div class="queue">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="price">
                                        <span class="sale">{{$product->price}} тг.</span>
                                        <!-- <span class="regular">$2,999.00</span> -->
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div><!-- /.widget widget-products -->
                    <div class="widget widget-banner">
                        <div class="banner-box">
                            <div class="inner-box">
                                <a href="#" title="">
                                    <img src="/images/banner_boxes/06.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div><!-- /.widget widget-banner -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-3 col-md-4 -->
            <div class="col-lg-9 col-md-8">
                <div class="main-shop">
                    <div class="slider owl-carousel-16 owl-carousel">
                        <div class="slider-item style9">
                            <div class="item-text">
                                <div class="header-item">
                                    <p>You can build the banner for other category</p>
                                    <h2 class="name">Shop Banner</h2>
                                </div>
                            </div>
                            <div class="item-image">
                                <img src="/images/banner_boxes/07.png" alt="">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="slider-item style9">
                            <div class="item-text">
                                <div class="header-item">
                                    <p>You can build the banner for other category</p>
                                    <h2 class="name">Shop Banner</h2>
                                </div>
                            </div>
                            <div class="item-image">
                                <img src="/images/banner_boxes/07.png" alt="">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div><!-- /.slider -->
                    <div class="wrap-imagebox">
                        <div class="flat-row-title">
                            <h3>{{$brand->title}}</h3>
                            <span>
                                Показано {{$products->firstItem()}}–{{$products->lastItem()}} от {{$products->total()}}
                            </span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="sort-product">
                            <ul class="icons">
                                <li class="active">
                                    <img src="/images/icons/list-1.png" alt="">
                                </li>
                                <li>
                                    <img src="/images/icons/list-2.png" alt="">
                                </li>
                            </ul>
                            <div class="sort" style="display:none;">
                                <div class="popularity">
                                    <select name="popularity">
                                        <option value="">Sort by popularity</option>
                                        <option value="">Sort by popularity</option>
                                        <option value="">Sort by popularity</option>
                                        <option value="">Sort by popularity</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-product">
                            <div class="row sort-box">
                                @foreach($products as $product)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="imagebox">
                                            <div class="box-image owl-carousel-1">
                                                @foreach($product->images as $image)
                                                    <a href="/p/{{$product->slug}}" title="">
                                                        <img src="/images{{$image->image}}" class="product-image" alt="">
                                                    </a>
                                                @endforeach
                                                <a href="#" title="">
                                                    <img src="/images/product/other/02.jpg" alt="">
                                                </a>
                                            </div><!-- /.box-image -->
                                            <div class="box-content">
                                                <div class="cat-name">
                                                    <a href="/c/{{$product->category->slug}}" title="">{{$product->category->name}}</a>
                                                </div>
                                                <div class="product-name">
                                                    <a href="/p/{{$product->slug}}" title="">{{$product->title}}</a>
                                                </div>
                                                <div class="price">
                                                    <span class="sale">{{$product->price}} тг.</span>
                                                    <!-- <span class="regular">$2,999.00</span> -->
                                                </div>
                                            </div><!-- /.box-content -->
                                            <div class="box-bottom">
                                                <div class="btn-add-cart">
                                                    <a title="" onclick='addToCart(this, {{$product->id}})'>
                                                        <img src="/images/icons/add-cart.png" alt="">В КОРЗИНУ
                                                    </a>
                                                </div>
                                            </div><!-- /.box-bottom -->
                                        </div><!-- /.imagebox -->
                                    </div>
                                </div><!-- /.col-lg-4 col-sm-6 -->
                                @endforeach
                            </div>
                            <div class="sort-box" style="display: none;">
                                @foreach($products as $product)
                                <div class="product-box style3">
                                    <div class="imagebox style1 v3">
                                        <div class="box-image">
                                            <a href="/p/{{$product->slug}}" title="">
                                                <img src="/images{{$product->mainImage()}}" class="image-hw-227" alt="">
                                            </a>
                                        </div><!-- /.box-image -->
                                        <div class="box-content">
                                            <div class="cat-name">
                                                <a href="/c/{{$product->category->slug}}" title="">{{$product->category->name}}</a>
                                            </div>
                                            <div class="product-name">
                                                <a href="/p/{{$product->slug}}" title="">{{$product->title}}</a>
                                            </div>
                                            <div class="status">
                                                В наличии
                                            </div>
                                            <div class="info">
                                                <p>
                                                    {{$product->description}}
                                                </p>
                                            </div>
                                        </div><!-- /.box-content -->
                                        <div class="box-price">
                                            <div class="price">
                                                <!-- <span class="regular">$2,999.00</span> -->
                                                <span class="sale">{{$product->price}} тг.</span>
                                            </div>
                                            <div class="btn-add-cart">
                                                <a title="" onclick='addToCart(this, {{$product->id}})'>
                                                    <img src="/images/icons/add-cart.png" alt="">В КОРЗИНУ
                                                </a>
                                            </div>
                                        </div><!-- /.box-price -->
                                    </div><!-- /.imagebox -->
                                </div><!-- /.product-box -->
                                @endforeach
                                <div style="height: 9px;"></div>
                            </div>
                        </div>
                    </div><!-- /.wrap-imagebox -->
                    <div class="blog-pagination">
                        <span>
                            Показано {{$products->firstItem()}}–{{$products->lastItem()}} от {{$products->total()}}
                        </span>
                        <ul class="flat-pagination style1">
                            <li class="prev">
                                <a href="{{$products->previousPageUrl()}}" title="">
                                    <img src="/images/icons/left-1.png" alt="">Предыдущая
                                </a>
                            </li>
                            @for($i = 1; $i <= ceil($products->total()/$products->perPage()); $i++)
                                <li @if($products->currentPage() == $i) class="active" @endif>
                                    <a href="/brands/{{$brand->slug}}?page={{$i}}" class="waves-effect" title="">{{$i}}</a>
                                </li>
                            @endfor
                            <li class="next">
                                <a href="{{$products->nextPageUrl()}}" title="">
                                    Следующая<img src="/images/icons/right-1.png" alt="">
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div><!-- /.blog-pagination -->
                </div><!-- /.main-shop -->
            </div><!-- /.col-lg-9 col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</main>

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
                                    <img src="/images{{$p->mainImage()}}" class="image-hw-117" alt="">
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
