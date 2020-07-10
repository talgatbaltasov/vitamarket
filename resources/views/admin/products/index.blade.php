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
                            @if($article->status == 0)
                                Выкл.
                            @else
                                Вкл.
                            @endif
                        </td>
                        <td>{{$article->updated_at}}</td>
                        <td>
                            <a href="/admin/articles/edit/{{$article->id}}">Редактировать</a>
                            <a href="/admin/articles/delete/{{$article->id}}">Удалить</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
