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
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">Главная</a></li>
                            <li>Статья</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    <!--blog body area start-->
    <div class="blog_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_wrapper blog_wrapper_details">
                        <article class="single_blog">
                            <figure>
                                <div class="post_header">
                                    <h3 class="post_title">{{$article->title}}</h3>
                                    <div class="blog_meta">   
                                        <p>Опубликовано : <a href="#">{{$article->created_at->format('Y-m-d')}}</a></p>                                     
                                    </div>
                                </div>
                                <div class="blog_thumb">
                                    <a href="#"><img src="{{$article->main_image}}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <div class="post_content">
                                        {!!$article->description!!}
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <!--blog grid area start-->
                </div>
            </div>
        </div>
    </div>
    <!--blog section area end-->
@endsection
