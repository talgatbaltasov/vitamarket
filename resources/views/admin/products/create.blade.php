@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавить</div>
                <div class="card-body">
                    {!!Form::open(['route' => 'admin.products.store'])!!}
                        <div class="form-group">
                            {{Form::label('brand_id', 'Бренд')}}
                            {{Form::select('brand_id', $brands, null, ['class' => 'form-control', 'placeholder' => 'Выбрать', 'required'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('category_id', 'Категория')}}
                            {{Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Выбрать', 'required'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('name', 'Название')}}
                            {{Form::text('name', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('description', 'Описание')}}
                            {{Form::textarea('description', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('slug', 'Ссылка')}}
                            {{Form::text('slug', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('price', 'Цена')}}
                            {{Form::text('price', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('sale_price', 'Цена со скидкой')}}
                            {{Form::text('sale_price', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('order', 'Последовательность')}}
                            {{Form::number('order', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('status_id', 'Статус')}}
                            {{Form::select('status_id', $statuses, null, ['class' => 'form-control', 'placeholder' => 'Выбрать', 'required'])}}
                        </div>
                        <button class="btn btn-success">Добавить</button>
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
