@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/banners/create" class="btn btn-primary">Добавить</a>
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
                    @foreach($banners as $banner)
                    <tr>
                        <td>{{$banner->id}}</td>
                        <td>{{$banner->title}}</td>
                        <td>
                            @if($banner->status_id == 1)
                                Вкл.
                            @else
                                Выкл.
                            @endif
                        </td>
                        <td>{{$banner->updated_at}}</td>
                        <td>
                            <a href="/admin/banners/{{$banner->id}}/edit" class="btn btn-success">Редактировать</a>
                            <a href="{{route('admin.banners.destroy', ['banner' => $banner->id])}}"
                                onclick="event.preventDefault();
                                    document.getElementById('delete{{$banner->id}}').submit();" class="btn btn-danger">Удалить</a>
                            {!!Form::open(['route' => ['admin.banners.destroy', $banner->id], 'id' => 'delete'.$banner->id, 'style' => 'display:none;', 'method' => 'delete'])!!}
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
