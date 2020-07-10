@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="/admin/articles/store" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="main_image">Главная картинка</label>
                    <input type="file" id="main_image" name="main_image">
                </div>
                <div class="form-group">
                    <label for="short_description">Краткое описание</label>
                    <textarea name="short_description" id="short_description"></textarea>
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea name="description" id="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="slug">Ссылка</label>
                    <input type="text" id="slug" name="slug" class="form-control">
                </div>
                <div class="form-group">
                    <input type="checkbox" id="status" name="status" value="1">
                    <label for="status">Активный?</label>
                </div>
                <button class="btn btn-success">Добавить</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
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
