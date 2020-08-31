@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Товары
            <ul class="nav float-right">
                <li class="nav-item">
                    <a href="/admin/products/create" class="btn btn-primary">Добавить</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Название</td>
                        <td>Статус</td>
                        <td>В наличии?</td>
                        <td>Дата обновления</td>
                        <td>Действие</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td><a href="/admin/products/{{$product->id}}">{{$product->id}}</a></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->status->name_ru}}</td>
                        <td>{{$product->in_stock == 1 ? 'Да' : 'Нет'}}</td>
                        <td>{{$product->updated_at}}</td>
                        <td>
                            <a href="/admin/products/{{$product->id}}/edit" class="btn btn-success">Редактировать</a>
                            <a href="{{route('admin.products.destroy', ['product' => $product->id])}}"
                                onclick="event.preventDefault();
                                    document.getElementById('delete{{$product->id}}').submit();" class="btn btn-danger">Удалить</a>
                            {!!Form::open(['route' => ['admin.products.destroy', $product->id], 'id' => 'delete'.$product->id, 'style' => 'display:none;', 'method' => 'delete'])!!}
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
