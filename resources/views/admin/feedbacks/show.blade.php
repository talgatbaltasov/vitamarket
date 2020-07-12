@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Отзывы
            <ul class="nav float-right">
                <li class="nav-item">
                    <a href="/admin/feedbacks/{{$feedback->id}}/edit" class="btn btn-primary">Редактировать</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h1>{{$feedback->name}}</h1>
            <div>
                @if($feedback->product)
                    <a href="/admin/products/{{$feedback->product->id}}">{{$feedback->product->name}}</a>
                @endif
            </div>
            <div>
                {!!$feedback->description!!}
            </div>
        </div>
    </div>
</div>
@endsection
