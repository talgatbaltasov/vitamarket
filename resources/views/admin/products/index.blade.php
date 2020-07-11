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
                        <td>Дата обновления</td>
                        <td>Действие</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->status->name_ru}}</td>
                        <td>{{$product->updated_at}}</td>
                        <td>
                            <a href="/admin/products/edit/{{$product->id}}">Редактировать</a>
                            <a href="/admin/products/delete/{{$product->id}}">Удалить</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
