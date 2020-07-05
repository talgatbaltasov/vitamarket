@extends('layouts.app')

@section('title', 'Контакты')
@section('description', '★ Интернет-магазин Лайтстор ★ Широкий выбор товаров ✔ Удобная оплата ✔ Продукция с гарантией и доставкой в интернет-магазине электроники ➤ Круглосуточно 24/7 ☎ +7 707 897 02 47')

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
                            <a href="#" title="">Контакты</a>
                        </li>
                    </ul><!-- /.breacrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <section class="flat-map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="flat-map" class="pdmap">
                        <div class="flat-maps" data-address="Тимирязева 42 к3. ТЦ Атакент mall" data-height="444" data-images="/images/icons/map.png" data-name="Карта Лайтстор"></div>
                        <div class="gm-map">
                            <div class="map"></div>
                        </div>
                    </div><!-- /#flat-map -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section class="flat-iconbox style4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="iconbox style2">
                        <div class="box-header">
                            <div class="image">
                                <img src="/images/icons/address.png" alt="">
                            </div>
                            <div class="title">
                                <h3>Адрес</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>
                                Тимирязева 42 к3. ТЦ Атакент mall. Центр мобильности "Student". Витрина 95, Алматы.
                            </p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox style2 -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="iconbox style2">
                        <div class="box-header">
                            <div class="image">
                                <img src="/images/icons/address.png" alt="">
                            </div>
                            <div class="title">
                                <h3>Адрес</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>
                                Абылай хана проспект, 62 уг.ул. Жибек Жолы, 85 ТД «Цум» 1 этаж, 3 сектор, витрина №19, Алматы.
                            </p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox style2 -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="iconbox style2">
                        <div class="box-header">
                            <div class="image">
                                <img src="/images/icons/phone.png" alt="">
                            </div>
                            <div class="title">
                                <h3>Телефон</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>
                                <a href="tel:+77079156115" title="">+7 (707) 915 61 15</a>
                            </p>
                            <p>
                                <a href="tel:+77078970247">+7 (707) 897 02 47</a>
                            </p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox style2 -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="iconbox style2">
                        <div class="box-header">
                            <div class="image">
                                <img src="/images/icons/mail-2.png" alt="">
                            </div>
                            <div class="title">
                                <h3>Электронная почта</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>
                                litestore.kz@mail.ru
                            </p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox style2 -->
                </div><!-- /.col-md-6 col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-iconbox style4 -->

    <section class="flat-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="form-contact center">
                        <div class="form-contact-header">
                            <h3>Оставьте сообщение</h3>
                            <p>
                                Если возникнут вопросы и пожелания то мы с радостью ответим вам.
                            </p>
                        </div><!-- /.form-contact-header -->
                        <div class="form-contact-content">
                            <form action="/contact" method="post" id="form-contact">
                                @csrf
                                <div class="form-box one-half name">
                                    <label for="name">Имя и фамилия*</label>
                                    <input type="text" id="name" name="name">
                                </div>
                                <div class="form-box one-half email">
                                    <label for="email">Электронная почта*</label>
                                    <input type="email" id="email" name="email">
                                </div>
                                <div class="form-box">
                                    <label for="subject">Тема</label>
                                    <input type="text" id="subject" name="subject">
                                </div>
                                <div class="form-box">
                                    <label for="comment">Сообщение</label>
                                    <textarea id="comment"></textarea>
                                </div>
                                <div class="form-box">
                                    <button type="submit" class="contact">Отправить</button>
                                </div>
                            </form>
                        </div><!-- /.form-contact-content -->
                    </div><!-- /.form-contact center -->
                </div><!-- /.col-lg-8 col-md-12 -->
                <div class="col-lg-2">
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-contact -->
@endsection
