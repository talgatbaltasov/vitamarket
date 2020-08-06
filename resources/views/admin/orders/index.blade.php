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
                        <td>Действие</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->user->full_name}}</td>
                        <td>{{$order->order_status->name}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>
                            <a href="/admin/orders/{{$order->id}}/edit" class="btn btn-success">Редактировать</a>
                            <a href="{{route('admin.orders.destroy', ['order' => $order->id])}}"
                                onclick="event.preventDefault();
                                    document.getElementById('delete{{$order->id}}').submit();" class="btn btn-danger">Удалить</a>
                            {!!Form::open(['route' => ['admin.orders.destroy', $order->id], 'id' => 'delete'.$order->id, 'style' => 'display:none;', 'method' => 'delete'])!!}
                            {!!Form::close()!!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection