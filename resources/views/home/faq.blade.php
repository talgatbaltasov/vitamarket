@extends('layouts.app')

@section('title', 'Вопросы и ответы')
@section('description', '★ Интернет-магазин Vitamarket ★ Широкий выбор товаров ✔ Удобная оплата ✔ Продукция с гарантией и доставкой в интернет-магазине витамин и БАД ➤ Круглосуточно 24/7 ☎ +7 700 103 01 10')

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
                            <a href="#" title="">Вопросы и ответы</a>
                        </li>
                    </ul><!-- /.breacrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <section class="flat-row flat-accordion">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion">
                        <div class="title">
                            <h3>Вопросы и ответы</h3>
                        </div>
                        <div class="accordion-toggle">
                            <div class="toggle-title">
                                Какой у вас график работы?
                            </div>
                            <div class="toggle-content">
                                <p>
                                    Пн-Вс: 10:00 – 19:00 Без выходных<br/>
                                    Обед с 13:00 – 14:00 (Пт с 13:00 – 15:00)<br/>
                                    Заказ в интернет-магазине принимаются круглосуточно.
                                </p>
                            </div>
                        </div><!-- /.accordion-toggle -->
                        <div class="accordion-toggle">
                            <div class="toggle-title">
                                Как проверить гарантийный талон при получении?
                            </div>
                            <div class="toggle-content">
                                <p>
                                    Все обязательные для заполнения поля должны быть заполнены (модель, серийный номер, продавец, дата покупки), также должны быть проставлены штамп на гарантийном талоне.
                                </p>
                            </div>
                        </div><!-- /.accordion-toggle -->
                        <div class="accordion-toggle">
                            <div class="toggle-title">
                                Что делать, если оплаченный товар не доставлен?
                            </div>
                            <div class="toggle-content">
                                <p>
                                    Мы страхуем весь товар, который отправляем в другие города. В случае отсутствия (по каким-либо причинам) Вашего товара в офисе перевозчика, мы в течение 2 - 3 дней отправим Вам новый товар.
                                </p>
                            </div>
                        </div><!-- /.accordion-toggle -->
                        <div class="accordion-toggle">
                            <div class="toggle-title">
                                Какая гарантия, что после предоплаты заказа я его получу?
                            </div>
                            <div class="toggle-content">
                                <p>
                                    У вас остается документ, который подтверждают наше с Вами сотрудничество: документ об оплате, который предоставляет банк. При перечислении денег у нас возникает долговое обязательство перед Вами. Оно погашается только после подписания накладной, которую Вам привезет курьер. <br/><br/>
                                    Таким образом, у Вас есть все рычаги влияния на нас: суд, общество защиты прав потребителей и другие. Также Ваши интересы защищает закон "О защите прав потребителей".
                                </p>
                            </div>
                        </div><!-- /.accordion-toggle -->
                        <div class="accordion-toggle">
                            <div class="toggle-title">
                                Как отменить заказ?
                            </div>
                            <div class="toggle-content">
                                <p>
                                    Позвоните на наши номера и сообщите какой товар хотите отменить. Наши номера телефонов: +7 (707) 915 61 15, +7 (707) 897 02 47
                                </p>
                            </div>
                        </div><!-- /.accordion-toggle -->
                        <div class="accordion-toggle">
                            <div class="toggle-title active">
                                Как проверить товар при получении?
                            </div>
                            <div class="toggle-content">
                                <p>
                                    При адресной доставке вы сможете осмотреть устройство на внешние повреждения и целостность комплектации. Если же вам необходимо детально проверить устройство на работоспособность, подключить устройство в сеть и протестировать.
                                </p>
                            </div>
                        </div><!-- /.accordion-toggle -->
                    </div><!-- /.accordion -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection
