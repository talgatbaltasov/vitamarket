@extends('layouts.admin')

@section('content')
@if($order->order_status_id == 1)
    @php $class_text = 'success'; @endphp
@elseif($order->order_status_id == 2)    
    @php $class_text = 'primary'; @endphp
@else
    @php $class_text = 'danger'; @endphp
@endif
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    Заказ
                </div>
                <div class="col-6 text-right">
                    {{$order->created_at}}
                </div>
                <div class="col-12">
                    <span style="width: 10px; height: 10px;" class="mr-1 d-inline-block rounded-circle bg-{{$class_text}}"></span>
                    {{$order->order_status->name}} #{{$order->id}}
                </div>
            </div>
            {{-- <ul class="nav float-right">
                @if($order->order_status_id == 1)
                    <li class="nav-item mr-3">
                        <a href="/admin/orders/{{$order->id}}/order-status/2" class="btn btn-primary">Отправлен</a>
                    </li>
                @elseif($order->order_status_id == 2)    
                    <li class="nav-item mr-3">
                        <a href="/admin/orders/{{$order->id}}/order-status/3" class="btn btn-success">Доставлен</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="/admin/orders/{{$order->id}}/order-status/4" class="btn btn-danger">Отменен</a>
                </li>
            </ul> --}}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-2">
                    <i class="fa fa-user"></i>
                </div>
                <div class="col-10">
                    <p class="small text-muted mb-0">Клиент</p>
                    <p>
                        {{$order->user->full_name}}<br/> 
                        {{$order->user->email}}<br/>
                        {{$order->address->phone_number}}<br/>
                    </p>
                </div>
                    Адрес: {{$order->address->street}} {{$order->address->street2}}, {{$order->address->city->name}}<br/>
                    Вид доставки: {{$order->shipping_type->name}}<br/>
                    Статус заказа: {{$order->order_status->name}}<br/>
                    Комментарии к заказу: {{$order->comment}}<br/>
                </div>
            </div>
            <table class="table table-striped">
                <tr>
                    <td>ID</td>
                    <td>Товар</td>
                    <td>Количество</td>
                    <td>Цена за 1шт</td>
                    <td>Общее</td>
                </tr>
                @php
                    $total = 0;
                @endphp
                @foreach($order->items as $item)
                    @php
                        $total += $item->quantity * $item->price;
                    @endphp
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><a href="/p/{{$item->product->slug}}">{{$item->product->name}}</a></td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->price}} тг.</td>
                        <td>{{$item->quantity * $item->price}} тг.</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4" class="text-right">Итого:</td>
                    <td>{{$total}} тг.</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
