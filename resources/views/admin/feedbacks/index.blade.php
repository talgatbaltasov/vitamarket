@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Отзывы
            <ul class="nav float-right">
                <li class="nav-item">
                    <a href="/admin/feedbacks/create" class="btn btn-primary">Добавить</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Автор</td>
                        <td>Статус</td>
                        <td>Товар</td>
                        <td>Действие</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedbacks as $feedback)
                    <tr>
                        <td><a href="/admin/feedbacks/{{$feedback->id}}">{{$feedback->id}}</a></td>
                        <td>{{$feedback->name}}</td>
                        <td>{{$feedback->status->name_ru}}</td>
                        <td>
                            @if($feedback->product)
                                <a href="/admin/products/{{$feedback->product->id}}">{{$feedback->product->name}}</a>
                            @endif
                        </td>
                        <td>
                            <a href="/admin/feedbacks/{{$feedback->id}}/edit" class="btn btn-success">Редактировать</a>
                            <a href="{{route('admin.feedbacks.destroy', ['feedback' => $feedback->id])}}"
                                onclick="event.preventDefault();
                                    document.getElementById('delete{{$feedback->id}}').submit();" class="btn btn-danger">Удалить</a>
                            {!!Form::open(['route' => ['admin.feedbacks.destroy', $feedback->id], 'id' => 'delete'.$feedback->id, 'style' => 'display:none;', 'method' => 'delete'])!!}
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
