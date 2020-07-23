@extends('layouts.app')

@section('title', (($product->category->parent) ? $product->category->parent->name.' ' : '').$product->category->name.' '.$product->title.' → купить в Алматы и Казахстане в "Vitamarket" | цены и отзывы')
@section('description', '★ Vitamarket ★ Доставка '.$product->title.' по Алматы и регионам Казахстана ➤ Круглосуточно 24/7 ☎ +7 700 103 01 10')

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
                            <a href="#" title="">{{$product->title}}</a>
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
                            @foreach($product->images as $image)
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
                            <h4 class="name">{{$product->title}}</h4>
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
