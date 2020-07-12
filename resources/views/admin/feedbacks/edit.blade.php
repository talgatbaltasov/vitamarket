@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавить</div>
                <div class="card-body">
                    {!!Form::model($feedback, ['route' => ['admin.feedbacks.update', $feedback->id], 'method' => 'put', 'files' => true])!!}
                        <div class="form-group">
                            {{Form::label('product_id', 'Товар')}}
                            {{Form::select('product_id', $products, null, ['class' => 'form-control', 'placeholder' => 'Выбрать'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('name', 'Имя автора')}}
                            {{Form::text('name', null, ['class' => 'form-control', 'required'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('position', 'Должность автора')}}
                            {{Form::text('position', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('description', 'Текст отзыва')}}
                            {{Form::textarea('description', null, ['class' => 'form-control', 'required'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('image', 'Фото')}}
                            {{Form::file('image', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('link', 'Ссылка')}}
                            {{Form::text('link', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('link_label', 'Текст ссылки')}}
                            {{Form::text('link_label', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('status_id', 'Статус')}}
                            {{Form::select('status_id', $statuses, null, ['class' => 'form-control', 'required'])}}
                        </div>
                        <button class="btn btn-success">Сохранить</button>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
        };
        $('textarea').ckeditor(options);
    </script>
@endsection
