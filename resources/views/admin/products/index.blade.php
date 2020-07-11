@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Товары
            <ul class="nav float-right">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/products/create" class="btn btn-primary">Добавить</a>
        </div>
        <div class="col-md-12">
            
        </div>
    </div>
</div>
@endsection
