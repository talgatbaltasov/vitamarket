<h1>Детали заказа</h1>
Новый заказ: <a href="{{env('APP_URL').'/admin/orders/'.$order->id}}">#{{$order->id}}s</a>
<table>
    <tr>
        <td>Товар</td>
        <td>Количество</td>
        <td>Цена</td>
    </tr>
    @foreach($order->items as $item)
        <tr>
            <td>{{$item->product->name}}</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->price}} тг.</td>
        </tr>
    @endforeach
</table>