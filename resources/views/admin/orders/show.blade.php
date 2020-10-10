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
                <div class="col-2 h2 text-center">
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
                <div class="col-2 h2 text-center">
                    <i class="fa fa-truck"></i>
                </div>
                <div class="col-10">
                    <p class="small text-muted mb-0">Способ доставки</p>
                    <p>
                        {{$order->shipping_type->name}}, 
                        {{$order->address->city->name}}, 
                        {{$order->address->street}}, 
                        {{$order->address->street2}}<br/>
                    </p>
                </div>
                <div class="col-2 h2 text-center">
                    <i class="fa fa-comment"></i>
                </div>
                <div class="col-10">
                    <p class="small text-muted mb-0">Примечание</p>
                    <p>
                        {{$order->comment}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Товары в заказе
        </div>
        <div class="card-body">
            @php
                $total = 0;
            @endphp
            <div class="row">
                @foreach($order->items as $item)
                    <div class="col-3">
                        <img src="{{$item->product->main_image->image}}" alt="">
                    </div>
                    <div class="col-9">
                        <p class="mb-0">{{$item->product->name}}</p>
                        <p class="mb-0 text-muted">
                            <i class="fa fa-clock"></i> В наличии<br/>
                            <i class="fa fa-tag"></i> {{$item->price}} тг. x {{$item->quantity}} (шт.)
                        </p>
                    </div>
                @endforeach
                <tr>
                    <td colspan="4" class="text-right">Итого:</td>
                    <td>{{$total}} тг.</td>
                </tr>
            </div>
        </div>
    </div>
</div>
@endsection
