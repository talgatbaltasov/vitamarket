@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/products/create" class="btn btn-primary">Добавить</a>
        </div>
        <div class="col-md-12">
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
                        <td>
                            @if($product->status->name == 'Active')
                                Вкл.
                            @else
                                Выкл.
                            @endif
                        </td>
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
