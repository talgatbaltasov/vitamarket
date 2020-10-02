@extends('layouts.app')

@section('title', 'Контакты')
@section('description', '★ Интернет-магазин Vitamarket ★ Широкий выбор товаров ✔ Удобная оплата ✔ Продукция с гарантией и доставкой в интернет-магазине витамин и БАД ➤ Круглосуточно 24/7 ☎ +7 707 807 97 77')

@section('content')
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                    <h3>Контакты</h3>
                        <ul>
                            <li><a href="/">Главная</a></li>
                            <li>Контакты</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    <!--contact map start-->
    <div class="contact_map mt-100">
        <div class="map-area">
            
        </div>
    </div>
    <!--contact map end-->
    <!--contact area start-->
    <div class="contact_area">
        <div class="container">   
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message content">
                        <h3>Наши контакты</h3>    
                        <ul>
                            <li><i class="fa fa-fax"></i>  Адрес: проспект Абая 143, уг. Гагарина, офис 105</li>
                            <li><i class="fa fa-phone"></i> <a href="mailto:kzvitamarket@gmail.com">kzvitamarket@gmail.com</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="tel:+77078079777">+7 (707) 807-97-77</a></li>
                        </ul>
                        <div class="mt-23">
                            <a class="dg-widget-link" href="http://2gis.kz/almaty/firm/70000001045157133/center/76.892612,43.239186/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a><div class="dg-widget-link"><a href="http://2gis.kz/almaty/center/76.892612,43.239186/zoom/16/routeTab/rsType/bus/to/76.892612,43.239186╎Vitamarket, магазин здоровья?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Vitamarket, магазин здоровья</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":560,"height":600,"borderColor":"#a3a3a3","pos":{"lat":43.239186,"lon":76.892612,"zoom":16},"opt":{"city":"almaty"},"org":[{"id":"70000001045157133"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-6 col-md-12">
                <div class="contact_message form">
                        <h3>Задайте ваш вопрос</h3>
                        {!!Form::open(['url' => '/contacts', 'id' => 'contact-form'])!!}
                            <p>
                                {{Form::label('name', 'Имя и фамилия')}}
                                {{Form::text('name', null)}}
                            </p>
                            <p>
                                {{Form::label('email', 'Электронная почта')}}
                                {{Form::email('email', null)}}
                            </p>
                            <p>
                                {{Form::label('subject', 'Тема')}}
                                {{Form::text('subject', null)}}
                            </p>
                            <p>
                                {{Form::label('comment', 'Сообщение')}}
                                {{Form::textarea('comment', null, ['class' => "form-control2"])}}
                            </p>
                            <button type="submit" class="contact">Отправить</button>
                        {!!Form::close()!!}
                    </div> 
                </div>
            </div>
        </div>    
    </div>
    <!--contact area end-->
@endsection
