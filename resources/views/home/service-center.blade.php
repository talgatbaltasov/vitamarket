@extends('layouts.app')

@section('title', 'Сервисный центр')
@section('description', '★ Интернет-магазин Vitamarket ★ Широкий выбор товаров ✔ Удобная оплата ✔ Продукция с гарантией и доставкой в интернет-магазине витамин и БАД ➤ Круглосуточно 24/7 ☎ +7 707 807 97 77')

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
                            <a href="#" title="">Сервисный центр</a>
                        </li>
                    </ul><!-- /.breacrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <section class="flat-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-about">
                        <img src="/images/service-center/remont-telefonov.jpg" alt="">
                    </div>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="text-about">
                        <div class="title">
                            <h3>Ремонт телефонов всех моделей в Алматы.</h3>
                        </div>
                        <div class="content">
                            <ul>
                                <li>1. Прошивка оборудования: установка прошивки, обновление прошивки, русификация оборудования. </li>
                                <li>2. Установка программ: установка игр, установка операционных систем. </li>
                                <li>3. Замена дисплея: замена защитного стекла, замена тач скрина, замена дисплея. </li>
                                <li>4. Замена корпусных деталей: замена нижней крышки, замена рамки и обрамления, различные заглушки. </li>
                                <li>5. Замена внутренних компонентов: материнские платы, микрофоны, динамики, батарейки.</li>
                            </ul>
                        </div><!-- /.content -->
                    </div><!-- /.text-about -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection
