@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавить</div>
                <div class="card-body">
                    {!!Form::open(['route' => 'admin.product_images.store', 'files' => true])!!}
                        {{Form::hidden('product_id', $_GET['product_id'])}}
                        <div class="form-group">
                            {{Form::label('main_image', 'Главное фото')}}
                            <input type="file" name="main_image" id="main_image" class="form-control" accept="image/png, image/jpeg">
                        </div>
                        <div class="form-group">
                            {{Form::label('image', 'Фото (можно выбрать несколько фото)')}}
                            <input type="file" name="image[]" id="image" multiple accept="image/png, image/jpeg">
                        </div>
                        <button class="btn btn-success">Добавить</button>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
