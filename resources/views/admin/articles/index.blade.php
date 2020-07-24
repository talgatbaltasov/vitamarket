@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/articles/create" class="btn btn-primary">Добавить</a>
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
                    @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>
                            @if($article->status_id == 1)
                                Вкл.
                            @else
                                Выкл.
                            @endif
                        </td>
                        <td>{{$article->updated_at}}</td>
                        <td>
                            <a href="/admin/articles/{{$article->id}}/edit" class="btn btn-success">Редактировать</a>
                            <a href="{{route('admin.articles.destroy', ['article' => $article->id])}}"
                                onclick="event.preventDefault();
                                    document.getElementById('delete{{$article->id}}').submit();" class="btn btn-danger">Удалить</a>
                            {!!Form::open(['route' => ['admin.articles.destroy', $article->id], 'id' => 'delete'.$article->id, 'style' => 'display:none;', 'method' => 'delete'])!!}
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
