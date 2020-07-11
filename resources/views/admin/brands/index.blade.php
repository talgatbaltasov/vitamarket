@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Бренды
            <ul class="nav float-right">
                <li class="nav-item">
                    <a href="/admin/brands/create" class="btn btn-primary">Добавить</a>
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
                    @foreach($brands as $brand)
                    <tr>
                        <td>{{$brand->id}}</td>
                        <td>{{$brand->name}}</td>
                        <td>{{$brand->status->name_ru}}</td>
                        <td>{{$brand->updated_at}}</td>
                        <td>
                            <a href="/admin/brands/{{$brand->id}}/edit" class="btn btn-success">Редактировать</a>
                            <a href="{{route('admin.brands.destroy', ['brand' => $brand->id])}}"
                                onclick="event.preventDefault();
                                    document.getElementById('delete{{$brand->id}}').submit();" class="btn btn-danger">Удалить</a>
                            {!!Form::open(['route' => ['admin.brands.destroy', $brand->id], 'id' => 'delete'.$brand->id, 'style' => 'display:none;', 'method' => 'delete'])!!}
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
