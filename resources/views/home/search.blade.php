@extends('layouts.app')

@section('title', 'Comics, movies, series, Dota 2 Game Cosplay Supplies, Accessories and Products Online | Maddt')
@section('keywords', 'comics products, comics accessories, movies products, movies accessories, dota2 products, dota2 accessories, cosplay products, cosplay accessories')
@section('description', 'Get the best comics, dota2 products and accessories online and in store! Maddt offers quality products and accessories for a cosplay, halloween and fun meeting.')

@section('content')
    <!-- breadcrumbs -->
		<div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb--ys pull-left">
                <li class="home-link"><a href="/" class="icon icon-home"></a></li>
                <li class="active">Search Result</li>
            </ol>
        </div>
    </div>
    <!-- /breadcrumbs -->
    <!-- CONTENT section -->
    <div id="pageContent">
        <div class="container">
            <!-- two columns -->
            <div class="row">
                <!-- left column -->
                <aside class="col-md-4 col-lg-3 col-xl-2" id="leftColumn">
                    <a href="#" class="slide-column-close visible-sm visible-xs"><span class="icon icon-chevron_left"></span>back</a>
                </aside>
                <!-- /left column -->
                <!-- center column -->
                <aside class="col-md-8 col-lg-9 col-xl-10" id="centerColumn">
                    <!-- filters row -->
                    <div class="filters-row">
                        <div class="pull-right">
                            <div class="filters-row__items hidden-sm hidden-xs">{{count($products)}} Item(s)</div>
                        </div>
                    </div>
                    <!-- /filters row -->
                    <div class="product-listing row">
                        @foreach($products as $product)
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
                                <!-- product -->
                                <div class="product product--zoom">
                                    <div class="product__inside">
                                        <!-- product image -->
                                        <div class="product__inside__image">
                                            @if(count($product->images) > 1)
                                            <!-- product image carousel -->
                                            <div class="product__inside__carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    @foreach($product->images as $key=>$image)
                                                        <div class="item @if($key == 0) active @endif"> <a href="/products/{{$product->slug}}"><img src="{{ Voyager::image( $image->image ) }}" alt="{{$product->title}}"></a> </div>
                                                    @endforeach
                                                </div>
                                                <!-- Controls -->
                                                <a class="carousel-control next"></a> <a class="carousel-control prev"></a>
                                            </div>
                                            <!-- /product image carousel -->
                                            @else
                                            <a href="/products/{{$product->slug}}"> <img src="{{ Voyager::image( $product->main_image->image->image ) }}" alt="{{$product->title}}"> </a>
                                            @endif
                                            <!-- quick-view -->
                                            <a href="#" data-toggle="modal" data-target="#quickViewModal{{$product->id}}" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>
                                            <!-- /quick-view -->
                                        </div>
                                        <!-- /product image -->
                                        @if($product->sale_price != null)
                                        <!-- label sale -->
                                        <div class="product__label product__label--left product__label--sale"> <span>Sale<br>
                                            -{{round(100-($product->sale_price*100/$product->price))}}%</span>
                                        </div>
                                        <!-- /label sale -->
                                        @endif
                                        <!-- product name -->
                                        <div class="product__inside__name">
                                            <h2><a href="/products/{{$product->slug}}">{{$product->title}}</a></h2>
                                        </div>
                                        <!-- /product name -->
                                        <!-- product description -->
                                        <!-- visible only in row-view mode -->
                                        <div class="product__inside__description row-mode-visible"> {{$product->description}} </div>
                                        <!-- /product description -->
                                        <!-- product price -->
                                        @if($product->sale_price != null)
                                            <div class="product__inside__price price-box">${{$product->sale_price}}<span class="price-box__old">${{$product->price}}</span></div>
                                        @else
                                            <div class="product__inside__price price-box">${{$product->price}}</div>
                                        @endif
                                        <!-- /product price -->
                                        <div class="product__inside__hover">
                                            <!-- product info -->
                                            <div class="product__inside__info">
                                                <div class="product__inside__info__btns"> 
                                                    <button onclick='addToCart({{$product->id}})' class="btn btn--ys btn--xl">
                                                        <span class="icon icon-shopping_basket"></span> Add to cart
                                                    </button>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                </div>
                                            </div>
                                            <!-- /product info -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /product -->
                            </div>
                        @endforeach
                    </div>
                </aside>
                <!-- center column -->
            </div>
            <!-- /two columns -->
        </div>
    </div>
    <!-- End CONTENT section -->
@endsection

@section('quickview')
    @foreach($products as $product)        
        <!-- Modal (quickViewModal) -->		
        <div class="modal  modal--bg fade productQuickView"  id="quickViewModal{{$product->id}}">
            <div class="modal-dialog white-modal">
                <div class="modal-content container">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                    </div>
                    <!--  -->
                    <div class="product-popup">
                        <div class="product-popup-content">
                            <div class="container-fluid">
                                <div class="row product-info-outer">
                                    <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
                                        <div class="product-main-image">
                                            <div class="product-main-image__item"><img src="{{ Voyager::image( $product->main_image->image->image ) }}" alt="{{$product->title}}" /></div>
                                        </div>
                                    </div>
                                    <div class="product-info col-xs-12 col-sm-7 col-md-6 col-lg-6">
                                        <div class="wrapper">
                                            <div class="product-info__sku pull-left">SKU: <strong>{{sprintf("%06d", $product->id)}}</strong></div>
                                            <div class="product-info__availabilitu pull-right">Availability:   <strong class="color">In Stock</strong></div>
                                        </div>
                                        <div class="product-info__title">
                                            <h2>{{$product->title}}</h2>
                                        </div>
                                        @if($product->sale_price != null)
                                            <div class="price-box product-info__price"><span class="price-box__new">${{$product->sale_price}}</span> <span class="price-box__old">{{$product->price}}</span></div>
                                        @else
                                            <div class="price-box product-info__price"><span class="price-box__new">${{$product->price}}</span></div>
                                        @endif
                                        <div class="divider divider--xs product-info__divider"></div>
                                        @if($product->images()->count() > 1)
                                        <div class="wrapper">
                                            <div class="pull-left"><span class="option-label">COLOR:</span></div>
                                            <div class="pull-left required">*</div>
                                            <div class="pull-right required">* Required Fields</div>
                                        </div>
                                        <ul class="options-swatch options-swatch--color options-swatch--lg">
                                            @foreach($product->images as $image)
                                                <li>
                                                    <input type='radio' name='image' id='image_{{$product->id}}_{{$image->id}}' value='{{$image->id}}' />
                                                    <label for='image_{{$product->id}}_{{$image->id}}' class="swatch-label image-label" onclick="changeMainImage('{{Voyager::image( $image->image )}}', {{$product->id}} )">
                                                        <img src="{{Voyager::image( $image->image )}}" alt="{{$product->title}}"/>
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>						
                                        @endif
                                        @if($product->sizes()->count() > 0)
                                        <div class="wrapper">
                                            <div class="pull-left"><span class="option-label">SIZE:</span></div>
                                            <div class="pull-left required">*</div>
                                        </div>
                                        <ul class="options-swatch options-swatch--size options-swatch--lg">
                                            @foreach($product->sizes as $size)
                                            <li>
                                                <input type='radio' name="size" value='{{$size->id}}' id='size_{{$product->id}}_{{$size->id}}' />
                                                <label for='size_{{$product->id}}_{{$size->id}}'>
                                                    {{$size->name}}
                                                </label>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                        <div class="divider divider--sm"></div>
                                        <div class="wrapper">
                                            <div class="pull-left"><span class="qty-label">QTY:</span></div>
                                            <div class="pull-left"><input type="text" name="quantity" class="input--ys qty-input pull-left" value="1"></div>
                                            <div class="pull-left">
                                                <button type="submit" class="btn btn--ys btn--xxl" onclick='addToCart({{$product->id}}, $j("input[name=\"image\"]:checked").val(), $j("input[name=\"size\"]:checked").val(), $j("#quickViewModal{{$product->id}} input[type=\"quantity\"]").val())'>
                                                    <span class="icon icon-shopping_basket"></span> Add to cart
                                                </button>
                                            </div>
                                        </div>
                                        <div class="divider divider--xs product-info__divider"></div>
                                        <div class="product-info__description">
                                            <div class="product-info__description__brand">
                                            	<a href='/{{$product->brand->slug}}'>
                                            		<img src="{{Voyager::image( $product->brand->image )}}" alt="{{$product->brand->title}}"> 
                                            	</a>
                                            </div>
                                            <div class="product-info__description__text">{{$product->brand->description}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                </div>
            </div>
        </div>
        <!-- / Modal (quickViewModal) -->
    @endforeach
@endsection

@section('js')
    <script>
        $j(document).ready(function() {
            listingModeToggle();
            verticalCarousel($j('.vertical-carousel-1'),2,2,2,2,2);
        })
    </script>
@endsection