<h1>Ваш заказ #{{$order->id}} принят в обработку!</h1>
<p>По всем вопросам обращайтесь по номеру: +7 (707) 807-97-77</p>
<p>Спасибо что вы с нами!</p>
<h3>Детали заказа</h3>
<table>
    <tr>
        <td>Товар</td>
        <td>Количество</td>
        <td>Цена</td>
    </tr>
    @php
        $total = 0;
    @endphp
    @foreach($order->items as $item)
        @php
            $total += $item->quantity*$item->price;
        @endphp
        <tr>
            <td>{{$item->product->name}}</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->price}} тг.</td>
        </tr>
    @endforeach
    <tr>
        <td colspan="2">Доставка</td>
        <td>{{$order->shipping_type->price}} тг.</td>
    </tr>
    <tr>
        <td colspan="2">Общее</td>
        <td>{{$total + $order->shipping_type->price}} тг.</td>
    </tr>
</table>