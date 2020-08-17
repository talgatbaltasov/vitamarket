@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Заказы
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Пользователь</td>
                        <td>Статус</td>
                        <td>Дата заказа</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td><a href="/admin/orders/{{$order->id}}">{{$order->id}}</a></td>
                            <td>{{$order->user->full_name}}</td>
                            <td>
                                @if($order->order_status_id == 1)
                                    <span class="badge badge-primary">{{$order->order_status->name}}</span>
                                @elseif($order->order_status_id == 2)
                                    <span class="badge badge-success">{{$order->order_status->name}}</span>
                                @elseif($order->order_status_id == 3)
                                    <span class="badge badge-warning">{{$order->order_status->name}}</span>
                                @else
                                    <span class="badge badge-danger">{{$order->order_status->name}}</span>
                                @endif
                            </td>
                            <td>{{$order->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
