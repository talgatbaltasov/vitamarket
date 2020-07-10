@extends('layouts.app')

@section('title', 'Интернет-магазин Vitamarket')
@section('description', '★ Интернет-магазин Vitamarket ★ Широкий выбор товаров ✔ Удобная оплата ✔ Продукция с гарантией и доставкой в интернет-магазине витамин и БАД ➤ Круглосуточно 24/7 ☎ +7 700 103 01 10')

@section('content')
    <section class="flat-row flat-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="slider owl-carousel">
                    <div class="slider-item" style="background-image: url(/images/banners/banner2.jpg);">
                        <a href="#">
                            <h2>
                                Mi MIX 2S<br/>
                                <small>Искусство x Технологии</small>
                            </h2>
                            <p class="descp">
                                Двойная AI-камера с Dual Pixel автофокусом<br>
                                Большие пиксели 1,4 мкм, 4-осевая стабилизация<br>
                                5,99 Полноэкранный дисплей<br>
                                Изогнутый керамический корпус<br>
                            </p>
                            <span class="btn-shop">ПОДРОБНЕЕ</span>
                        </a>
                    </div><!-- /.slider -->
                    <div class="slider-item slider-light" style="background-image: url(/images/banners/banner3.jpg);">
                        <a href="#">
                            <h2>
                                Redmi Note 5<br/>
                                <small>Монстр фотографии</small>
                            </h2>
                            <p class="descp">
                                Двойная камера 12 Мп + 5 Мп<br>
                                Большие пиксели размером 1,4 мкм, Dual Pixel автофокус<br>
                                5,99"" FHD+ дисплей<br>
                                Соотношение сторон 18:9<br>
                            </p>
                            <span class="btn-shop">ПОДРОБНЕЕ</span>
                        </a>
                    </div><!-- /.slider -->
                    <div class="slider-item" style="background-image: url(/images/banners/banner4.jpg);">
                        <a href="#">
                            <h2>
                                Redmi 5<br/>
                                <small><small>Полноэкранный смартфон для каждого</small></small>
                            </h2>
                            <p class="descp">
                                5.7"HD+ полноэкранный дисплей<br>
                                12 Мп основная камера, размер пикселя 1.25 мкм<br>
                                Селфи-вспышка<br>
                                Аккумулятор 3300 мАч<br>
                                8-ядерный процессор Snapdragon 450<br>
                            </p>
                            <span class="btn-shop">ПОДРОБНЕЕ</span>
                        </a>
                    </div><!-- /.slider -->
                    <div class="slider-item slider-light" style="background-image: url(/images/banners/banner5.jpg);">
                        <a href="#">
                            <h2>
                                Redmi 5 Plus<br/>
                                <small><small>Полноэкранный смартфон для каждого</small></small>
                            </h2>
                            <p class="descp">
                                5.99"HD+ полноэкранный дисплей<br>
                                12 Мп основная камера, размер пикселя 1.25 мкм<br>
                                Селфи-вспышка<br>
                                Аккумулятор 4000 мАч обеспечивает до 2 дней использования<br>
                                8-ядерный процессор Snapdragon 625<br>
                            </p>
                            <span class="btn-shop">ПОДРОБНЕЕ</span>
                        </a>
                    </div><!-- /.slider -->
                    <div class="slider-item" style="background-image: url(/images/banners/banner6.jpg);">
                        <a href="#">
                            <h2>
                                Mi A1 Red<br/>
                                <small>Ограниченная серия!</small>
                            </h2>
                            <p class="descp">
                                Специальная цена только для первых покупателей.<br>
                            </p>
                            <span class="btn-shop">ПОДРОБНЕЕ</span>
                        </a>
                    </div><!-- /.slider -->
                </div><!-- /.slider -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-slider -->

    <section class="flat-row flat-banner-box" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="banner-box one-half">
                        <div class="inner-box">
                            <a href="#" title="">
                                <img src="/images/banner_boxes/home-01.jpg" alt="">
                            </a>
                        </div><!-- /.inner-box -->
                        <div class="inner-box">
                            <a href="#" title="">
                                <img src="/images/banner_boxes/home-05.jpg" alt="">
                            </a>
                        </div><!-- /.inner-box -->
                        <div class="clearfix"></div>
                    </div><!-- /.box -->
                    <div class="banner-box">
                        <div class="inner-box">
                            <a href="#" title="">
                                <img src="/images/banner_boxes/home-04.jpg" alt="">
                            </a>
                        </div>
                    </div><!-- /.box -->
                </div><!-- /.col-md-8 -->
                <div class="col-md-4">
                    <div class="banner-box">
                        <div class="inner-box">
                            <a href="#" title="">
                                <img src="/images/banner_boxes/home-03.jpg" alt="">
                            </a>
                        </div><!-- /.inner-box -->
                    </div><!-- /.box -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-banner-box -->

    <section class="flat-imagebox">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-tab">
                        <ul class="tab-list">
                            <li class="active">Специальные предложения</li>
                        </ul>
                    </div><!-- /.product-tab -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="box-product">
                <div class="row">
                    @foreach($sale_products as $product)
                        <div class="col-lg-3 col-sm-6">
                            <div class="product-box">
                                <div class="imagebox">
                                    <span class="item-sale">АКЦИЯ</span>
                                    <ul class="box-image owl-carousel-1">
                                        @foreach($product->images as $image)
                                            <li>
                                                <a href="/p/{{$product->slug}}" title="">
                                                    <img src="/images{{$image->image}}" class="product-image" alt="">
                                                </a>
                                            </li>
                                        @endforeach
                                        <li>
                                            <a href="#" title="">
                                                <img src="/images/product/other/05.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul><!-- /.box-image -->
                                    <div class="box-content">
                                        <div class="cat-name">
                                            <a href="/c/{{$product->category->slug}}" title="">{{$product->category->name}}</a>
                                        </div>
                                        <div class="product-name">
                                            <a href="/p/{{$product->slug}}" title="{{$product->title}}">{{$product->title}}</a>
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
                        </div><!-- /.col-lg-3 col-sm-6 -->
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.box-product -->
        </div><!-- /.container -->
    </section><!-- /.flat-imagebox -->

    <section class="flat-imagebox">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-tab">
                        <ul class="tab-list">
                            <li class="active">Новинки</li>
                        </ul>
                    </div><!-- /.product-tab -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="box-product">
                <div class="row">
                    @foreach($new_products as $product)
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-box">
                            <div class="imagebox">
                                <span class="item-new">НОВИНКА</span>
                                <ul class="box-image owl-carousel-1">
                                    @foreach($product->images as $image)
                                        <li>
                                            <a href="/p/{{$product->slug}}" title="">
                                                <img src="/images{{$image->image}}" class="product-image" alt="">
                                            </a>
                                        </li>
                                    @endforeach
                                </ul><!-- /.box-image -->
                                <div class="box-content">
                                    <div class="cat-name">
                                        <a href="/c/{{$product->category->slug}}" title="">{{$product->category->name}}</a>
                                    </div>
                                    <div class="product-name">
                                        <a href="/p/{{$product->slug}}" title="{{$product->title}}">{{$product->title}}</a>
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
                    </div><!-- /.col-lg-3 col-sm-6 -->
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.box-product -->
        </div><!-- /.container -->
    </section><!-- /.flat-imagebox -->

    <section class="flat-imagebox style2 background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-wrap">
                        <div class="product-tab style1">
                            <ul class="tab-list">
                                @php $i = 0;@endphp
                                @foreach($bottom_categories as $category)
                                    @if($category->products->count() > 0)
                                        <li @if($i==0) class="active" @endif>{{$category->name}}</li>
                                        @php $i++;@endphp
                                    @endif
                                @endforeach
                            </ul><!-- /.tab-list -->
                        </div><!-- /.product-tab style1 -->
                        <div class="tab-item">
                            @php $i = 0;@endphp
                            @foreach($bottom_categories as $category)
                                @if($category->products->count() > 0)
                                    <div class="row">
                                        <div class="col-md-6">
                                            @php $product = $category->products()->where('is_category_main', 1)->orderBy('order_by')->first(); @endphp
                                            <div class="product-box">
                                                <div class="imagebox style2 v1">
                                                    <div class="box-image">
                                                        <a href="/p/{{$product->slug}}" title="">
                                                            <img src="/images{{$product->mainImage()}}" alt="" class="image-h-400">
                                                        </a>
                                                    </div><!-- /.box-image -->
                                                    <div class="box-content">
                                                        <div class="cat-name">
                                                            <a href="/c/{{$category->slug}}" title="">{{$category->name}}</a>
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
                                                </div><!-- /.imagebox style2 -->
                                            </div><!-- /.product-box -->
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-3 col-sm-6">
                                            @php $products = $category->products()->where('is_category_main', 1)->orderBy('order_by')->skip(1)->take(2)->get(); @endphp
                                            @foreach($products as $product)
                                            <div class="product-box style2">
                                                <div class="imagebox style2">
                                                    <div class="box-image">
                                                        <a href="/p/{{$product->slug}}" title="">
                                                            <img src="/images{{$product->mainImage()}}" alt="" class="image-h-177">
                                                        </a>
                                                    </div><!-- /.box-image -->
                                                    <div class="box-content">
                                                        <div class="cat-name">
                                                            <a href="/c/{{$category->slug}}" title="">{{$category->name}}</a>
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
                                                </div><!-- /.imagebox style2 -->
                                            </div><!-- /.product-box -->
                                            @endforeach
                                        </div><!-- /.col-md-3 col-sm-6 -->
                                        <div class="col-md-3 col-sm-6">
                                            @php $products = $category->products()->where('is_category_main', 1)->orderBy('order_by')->skip(3)->take(2)->get(); @endphp
                                            @foreach($products as $product)
                                            <div class="product-box style2">
                                                <div class="imagebox style2">
                                                    <div class="box-image">
                                                        <a href="/p/{{$product->slug}}" title="">
                                                            <img src="/images{{$product->mainImage()}}" alt="" class="image-h-177">
                                                        </a>
                                                    </div><!-- /.box-image -->
                                                    <div class="box-content">
                                                        <div class="cat-name">
                                                            <a href="/c/{{$category->slug}}" title="">{{$category->name}}</a>
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
                                                            <a onclick='addToCart(this, {{$product->id}})' title="">
                                                                <img src="/images/icons/add-cart.png" alt="">В КОРЗИНУ
                                                            </a>
                                                        </div>
                                                    </div><!-- /.box-bottom -->
                                                </div><!-- /.imagebox style2 -->
                                            </div><!-- /.product-box -->
                                            @endforeach
                                        </div><!-- /.col-md-3 col-sm-6 -->
                                    </div><!-- /.row -->
                                    @php $i++;@endphp
                                @endif
                            @endforeach
                        </div><!-- /.tab-item -->
                    </div><!-- /.product-wrap -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-imagebox style2 -->

    {{-- <section class="flat-imagebox style3" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel-2">
                        <div class="box-counter">
                            <div class="counter">
                                <span class="special">Специальное предложение</span>
                                <div class="counter-content">
                                    <p>Акция продолжится еще</p>
                                    <div class="count-down">
                                        <div class="square">
                                            <div class="numb">
                                                14
                                            </div>
                                            <div class="text">
                                                ДНЕЙ
                                            </div>
                                        </div>
                                        <div class="square">
                                            <div class="numb">
                                                09
                                            </div>
                                            <div class="text">
                                                ЧАСОВ
                                            </div>
                                        </div>
                                        <div class="square">
                                            <div class="numb">
                                                48
                                            </div>
                                            <div class="text">
                                                МИНУТ
                                            </div>
                                        </div>
                                        <div class="square">
                                            <div class="numb">
                                                23
                                            </div>
                                            <div class="text">
                                                СЕКУНД
                                            </div>
                                        </div>
                                    </div><!-- /.count-down -->
                                </div><!-- /.counter-content -->
                            </div><!-- /.counter -->
                            <div class="product-item">
                                <div class="imagebox style3">
                                    <div class="box-image save">
                                        <a href="#" title="">
                                            <img src="/images/product/other/l06.jpg" alt="">
                                        </a>
                                        <span>Сэкономь 15000 тг.</span>
                                    </div><!-- /.box-image -->
                                    <div class="box-content">
                                        <div class="product-name">
                                            <a href="#" title="">27-inch iMac with Retina 5K display</a>
                                        </div>
                                        <ul class="product-info">
                                            <li>3.3GHz quad-core Intel Core i5 processor</li>
                                            <li>Turbo Boost up to 3.9GHz</li>
                                            <li>8GB (two 4GB) memory, configurable up to 32GB</li>
                                            <li>2TB Fusion Drive1</li>
                                            <li>AMD Radeon R9 M395 with 2GB video memory</li>
                                            <li>Retina 5K 5120-by-2880 P3 display</li>
                                        </ul>
                                        <div class="price">
                                            <span class="sale">$2,299.00</span>
                                            <span class="regular">$2,999.00</span>
                                        </div>
                                    </div><!-- /.box-content -->
                                    <div class="box-bottom">
                                        <div class="btn-add-cart">
                                            <a onclick='addToCart(this, {{$product->id}})' title="">
                                                <img src="/images/icons/add-cart.png" alt="">Add to Cart
                                            </a>
                                        </div>
                                    </div><!-- /.box-bottom -->
                                </div><!-- /.imagbox style3 -->
                            </div><!-- /.product-item -->
                        </div><!-- /.box-counter -->
                        <div class="box-counter">
                            <div class="counter">
                                <span class="special">Special Offer</span>
                                <div class="counter-content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majorited have suffered alteration.</p>
                                    <div class="count-down">
                                        <div class="square">
                                            <div class="numb">
                                                14
                                            </div>
                                            <div class="text">
                                                DAYS
                                            </div>
                                        </div>
                                        <div class="square">
                                            <div class="numb">
                                                09
                                            </div>
                                            <div class="text">
                                                HOURS
                                            </div>
                                        </div>
                                        <div class="square">
                                            <div class="numb">
                                                48
                                            </div>
                                            <div class="text">
                                                MINS
                                            </div>
                                        </div>
                                        <div class="square">
                                            <div class="numb">
                                                23
                                            </div>
                                            <div class="text">
                                                SECS
                                            </div>
                                        </div>
                                    </div><!-- /.count-down -->
                                </div><!-- /.counter-content -->
                            </div><!-- /.counter -->
                            <div class="product-item">
                                <div class="imagebox style3">
                                    <div class="box-image save">
                                        <a href="#" title="">
                                            <img src="/images/product/other/l06.jpg" alt="">
                                        </a>
                                        <span>Save $105.00</span>
                                    </div><!-- /.box-image -->
                                    <div class="box-content">
                                        <div class="product-name">
                                            <a href="#" title="">27-inch iMac with Retina 5K display</a>
                                        </div>
                                        <ul class="product-info">
                                            <li>3.3GHz quad-core Intel Core i5 processor</li>
                                            <li>Turbo Boost up to 3.9GHz</li>
                                            <li>8GB (two 4GB) memory, configurable up to 32GB</li>
                                            <li>2TB Fusion Drive1</li>
                                            <li>AMD Radeon R9 M395 with 2GB video memory</li>
                                            <li>Retina 5K 5120-by-2880 P3 display</li>
                                        </ul>
                                        <div class="price">
                                            <span class="sale">$5,599.00</span>
                                            <span class="regular">$2,999.00</span>
                                        </div>
                                    </div><!-- /.box-content -->
                                    <div class="box-bottom">
                                        <div class="btn-add-cart">
                                            <a onclick='addToCart(this, {{$product->id}})' title="">
                                                <img src="/images/icons/add-cart.png" alt="">Add to Cart
                                            </a>
                                        </div>
                                        <div class="compare-wishlist">
                                            <a href="#" class="compare" title="">
                                                <img src="/images/icons/compare.png" alt="">Compare
                                            </a>
                                            <a href="#" class="wishlist" title="">
                                                <img src="/images/icons/wishlist.png" alt="">Wishlist
                                            </a>
                                        </div>
                                    </div><!-- /.box-bottom -->
                                </div><!-- /.imagbox style3 -->
                            </div><!-- /.product-item -->
                        </div><!-- /.box-counter -->
                    </div><!-- /.owl-carousel-2 -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-imagebox style3 --> --}}

    <section class="flat-imagebox style4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-row-title">
                        <h3>Популярные</h3>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel-3">
                        @foreach($most_viewed as $product)
                            <div class="imagebox style4">
                                <div class="box-image">
                                    <a href="/p/{{$product->slug}}" title="">
                                        <img src="/images{{$product->mainImage()}}" alt="" class="image-h-117">
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
                            </div><!-- /.imagebox style4 -->
                        @endforeach
                    </div><!-- /.owl-carousel-3 -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-imagebox style4 -->

    <section class="flat-highlights" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="flat-row-title">
                        <h3>Bestsellers</h3>
                    </div>
                    <ul class="product-list style1">
                        <li>
                            <div class="img-product">
                                <a href="#" title="">
                                    <img src="/images/product/highlights/10.jpg" alt="">
                                </a>
                            </div>
                            <div class="info-product">
                                <div class="name">
                                    <a href="#" title="">Razer RZ02-01071500-R3M1</a>
                                </div>
                                <div class="queue">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="price">
                                    <span class="sale">$50.00</span>
                                    <span class="regular">$2,999.00</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="img-product">
                                <a href="#" title="">
                                    <img src="/images/product/highlights/9.jpg" alt="">
                                </a>
                            </div>
                            <div class="info-product">
                                <div class="name">
                                    <a href="#" title="">Apple iPad Mini G2356</a>
                                </div>
                                <div class="queue">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="price">
                                    <span class="sale">$24.00</span>
                                    <span class="regular">$2,999.00</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="img-product">
                                <a href="#" title="">
                                    <img src="/images/product/highlights/8.jpg" alt="">
                                </a>
                            </div>
                            <div class="info-product">
                                <div class="name">
                                    <a href="#" title="">Beats Pill + Portable Speaker</a>
                                </div>
                                <div class="queue">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="price">
                                    <span class="sale">$90.00</span>
                                    <span class="regular">$2,999.00</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul><!-- /.product-list style1 -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="flat-row-title">
                        <h3>Featured</h3>
                    </div>
                    <ul class="product-list style1">
                        <li>
                            <div class="img-product">
                                <a href="#" title="">
                                    <img src="/images/product/highlights/3.jpg" alt="">
                                </a>
                            </div>
                            <div class="info-product">
                                <div class="name">
                                    <a href="#" title="">Razer RZ02-01071500-R3M1</a>
                                </div>
                                <div class="queue">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="price">
                                    <span class="sale">$50.00</span>
                                    <span class="regular">$2,999.00</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="img-product">
                                <a href="#" title="">
                                    <img src="/images/product/highlights/2.jpg" alt="">
                                </a>
                            </div>
                            <div class="info-product">
                                <div class="name">
                                    <a href="#" title="">Apple iPad Mini G2356</a>
                                </div>
                                <div class="queue">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="price">
                                    <span class="sale">$24.00</span>
                                    <span class="regular">$2,999.00</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="img-product">
                                <a href="#" title="">
                                    <img src="/images/product/highlights/1.jpg" alt="">
                                </a>
                            </div>
                            <div class="info-product">
                                <div class="name">
                                    <a href="#" title="">Beats Pill + Portable Speaker</a>
                                </div>
                                <div class="queue">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="price">
                                    <span class="sale">$90.00</span>
                                    <span class="regular">$2,999.00</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="flat-row-title">
                        <h3>Hot Sale</h3>
                    </div>
                    <ul class="product-list style1">
                        <li>
                            <div class="img-product">
                                <a href="#" title="">
                                    <img src="/images/product/highlights/19.jpg" alt="">
                                </a>
                            </div>
                            <div class="info-product">
                                <div class="name">
                                    <a href="#" title="">Razer RZ02-01071500-R3M1</a>
                                </div>
                                <div class="queue">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="price">
                                    <span class="sale">$50.00</span>
                                    <span class="regular">$2,999.00</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="img-product">
                                <a href="#" title="">
                                    <img src="/images/product/highlights/11.jpg" alt="">
                                </a>
                            </div>
                            <div class="info-product">
                                <div class="name">
                                    <a href="#" title="">Apple iPad Mini G2356</a>
                                </div>
                                <div class="queue">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="price">
                                    <span class="sale">$24.00</span>
                                    <span class="regular">$2,999.00</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="img-product">
                                <a href="#" title="">
                                    <img src="/images/product/highlights/20.jpg" alt="">
                                </a>
                            </div>
                            <div class="info-product">
                                <div class="name">
                                    <a href="#" title="">Beats Pill + Portable Speaker</a>
                                </div>
                                <div class="queue">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="price">
                                    <span class="sale">$90.00</span>
                                    <span class="regular">$2,999.00</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-highlights -->

    <section class="flat-iconbox">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox">
                        <div class="box-header">
                            <div class="image" onclick="location.href='/payments-delivery'">
                                <img src="/images/icons/car.png" alt="">
                            </div>
                            <div class="box-title">
                                <h3>Быстрая доставка</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>по Алматы, низкие цены в другие города</p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox -->
                </div><!-- /.col-md-3 col-sm-6 -->
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox">
                        <div class="box-header">
                            <div class="image" onclick="location.href='/faq'">
                                <img src="/images/icons/order.png" alt="">
                            </div>
                            <div class="box-title">
                                <h3>Как купить?</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>Добавляйте товар и заказывайте</p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox -->
                </div><!-- /.col-md-3 col-sm-6 -->
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox">
                        <div class="box-header">
                            <div class="image" onclick="location.href='/faq'">
                                <img src="/images/icons/payment.png" alt="">
                            </div>
                            <div class="box-title">
                                <h3>Удобная оплата</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>Наличный, безналичный расчет</p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox -->
                </div><!-- /.col-md-3 col-sm-6 -->
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox">
                        <div class="box-header">
                            <div class="image" onclick="location.href='/faq'">
                                <img src="/images/icons/return.png" alt="">
                            </div>
                            <div class="box-title">
                                <h3>Возврат товара</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>Условия возврата товара</p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox -->
                </div><!-- /.col-md-3 col-sm-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-iconbox -->
@endsection
