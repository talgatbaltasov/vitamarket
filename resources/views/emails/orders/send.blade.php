<h1>Ваш заказ #{{$order->id}} отправлен!</h1>
<h3>Детали заказа</h3>
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