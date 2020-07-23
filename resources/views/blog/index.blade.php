@extends('layouts.app')

@section('title', 'Сухофрукты, безглютеновые продукты в розницу и по подписке')
@section('keywords', 'сухофрукты, безглютеновые продукты, безглютеновые пироги, безглютеновые торты, в розницу, по подписке')
@section('description', 'Сухофрукты, безглютеновые продукты в розницу и по подписке')

@section('content')
    <div class="bread-crumb">
        <img src="/images/top-banner.jpg" class="img-responsive" alt="banner-top" title="banner-top">
        <div class="container">
            <div class="matter">
                <h2><span>GLUTEN</span> FREE</h2>
                <ul class="list-inline">
                    <li>
                        <a href="/">Главная</a>
                    </li>
                    <li>
                        <a href="#">Блог</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mainblog">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-12 hidden-xs">
                    <div class="leftside">
                        <div class="bestseller">
                            <h3>бестселлеры</h3>
                            @foreach($bestsellers as $product)
                            <div class="box">
                                <div class="image">
                                    <img src="/images{{$product->main_image->image}}" alt="image" title="image" class="img-responsive">
                                </div>
                                <div class="caption">
                                    <h4>{{$product->title}}</h4>
                                    <p>{{$product->category->name}}</p>
                                    <div class="button-group">
                                        <button type="button"><i class="icon_heart"></i></button>
                                        <button type="button" onclick="location.href='/p/{{$product->slug}}'"><i class="fa fa-expand"></i></button>
                                        <button type="button" onclick='addToCart(this, {{$product->id}})'><i class="icon_cart"></i></button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <img src="/images/banner-1.png" alt="img" title="img" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-lg-9 col-xs-12 blog">
                    <div class="row">
                        @foreach($articles as $article)
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="/b/{{$article->slug}}">
                                            <img class="img-responsive" src="/photos/{{$article->main_image}}" alt="image" title="image">
                                        </a>
                                        <div class="onhover">
                                            <p>
                                                {{date('d', strtotime($article->updated_at))}}
                                                <br>
                                                @php $month = date('n', strtotime($article->updated_at)); @endphp
                                                @switch($month)
                                                    @case(1)
                                                        Янв
                                                        @break
                                                    @case(2)
                                                        Фев
                                                        @break
                                                    @case(3)
                                                        Мар
                                                        @break
                                                    @case(4)
                                                        Апр
                                                        @break
                                                    @case(5)
                                                        Май
                                                        @break
                                                    @case(6)
                                                        Июн
                                                        @break
                                                    @case(7)
                                                        Июл
                                                        @break
                                                    @case(8)
                                                        Авг
                                                        @break
                                                    @case(9)
                                                        Сен
                                                        @break
                                                    @case(10)
                                                        Окт
                                                        @break
                                                    @case(11)
                                                        Ноя
                                                        @break
                                                    @case(12)
                                                        Дек
                                                        @break
                                                    @default
                                                        Янв
                                                @endswitch
                                            </p>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <a href="/b/{{$article->slug}}"><h4>{{$article->title}}</h4></a>
                                        <h6 style="display:none;">Default category<span class="pull-right">by - john doe</span></h6>
                                        <p>{!! $article->short_description !!}</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="icon_comment"></i></button>
                                            <hr>
                                            <a class="pull-right" href="/b/{{$article->slug}}">Подробнее <i class="arrow_carrot-2right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{$articles->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
