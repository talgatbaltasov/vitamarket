@extends('layouts.app')

@section('title', $article->title)
@section('keywords', implode(', ', explode(' ', $article->short_description)))
@section('description', $article->short_description)

@section('opengraph')
    <meta property="og:url"           content="http://maddt.com/b/{{$article->slug}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{$article->title}}" />
    <meta property="og:description"   content="{!!$article->short_description!!}" />
    <meta property="og:image"         content="http://maddt.com/public/photos/{{$article->main_image}}" />
@endsection

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
                        <a href="/blog">Блог</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="blog-detail">
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
                <div class="col-md-9 col-sm-9 col-lg-9 col-xs-12">
                    <div class="image">
                        <img class="img-responsive" src="/photos/{{$article->main_image}}" alt="image" title="image">
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
                    <div class="matter">
                        <h4>{{$article->title}}</h4>
                        <h6 style="display: none;">Default category<span class="pull-right">by - john doe</span></h6>
                        {!!$article->description!!}
                        <ul class="list-inline social">
                            <li>Поделиться : </li>
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{urlencode('http://maddt.com/b/'.$article->slug)}}" target="_blank">
                                    <i class="social_facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/intent/tweet?url={{urlencode('http://maddt.com/b/'.$article->slug)}}" target="_blank">
                                    <i class="social_twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <h5 style="display:none;">Похожие статьи</h5>
                        <div class="row" style="display:none;">
                            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                                <img src="/images/post1.png" class="img-responsive similar" alt="img" title="img">
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                                <img src="/images/post2.png" class="img-responsive similar" alt="img" title="img">
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                                <img src="/images/post3.png" class="img-responsive similar" alt="img" title="img">
                            </div>
                        </div>
                    </div>
                    <div class="comment" style="display:none;">
                        <h3>Комментарии</h3>
                        <ul class="list-unstyled">
                            <li>
                                <img src="/images/comment1.png" alt="pic1" title="pic1" class="img-responsive">
                                <h4>Name here <span>october - 11 - 2015</span></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusrty's standard dummy text ever since the 1500s.</p>
                                <a href="#"><i class="fa fa-reply"></i></a>
                            </li>
                            <li>
                                <img src="/images/comment2.png" alt="pic2" title="pic2" class="img-responsive">
                                <h4>Name here <span>october - 11 - 2015</span></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusrty's standard dummy text ever since the 1500s.</p>
                                <a href="#"><i class="fa fa-reply"></i></a>
                            </li>
                            <li>
                                <img src="/images/comment3.png" alt="pic1" title="pic1" class="img-responsive">
                                <h4>Name here <span>october - 11 - 2015</span></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusrty's standard dummy text ever since the 1500s.</p>
                                <a href="#"><i class="fa fa-reply"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="leave">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <h1>ОСТАВИТЬ КОММЕНТАРИИ</h1>
                    <form class="form-horizontal" method="post">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" placeholder="Имя *" id="input-name" value="" name="name" required="" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="input-email" placeholder="Электронная почта *" value="" name="email" required="" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="input-enquiry" rows="10" name="enquiry" placeholder="комментарии *" required=""></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btnus">Отправить</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
