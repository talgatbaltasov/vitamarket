@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Заказ #{{$order->id}}
        </div>
        <div class="card-body">
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
