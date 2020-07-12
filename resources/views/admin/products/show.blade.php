@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Товары
            <ul class="nav float-right">
                <li class="nav-item">
                    <a href="/admin/products/{{$product->id}}/edit" class="btn btn-primary">Редактировать</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h1>{{$product->name}}</h1>
            <div>
                @if($product->brand)
                    <span class="badge badge-primary">{{$product->brand->name}}</span>
                @endif
                <span class="badge badge-success">{{$product->category->name}}</span>
            </div>
            <div>
                Цена: {{$product->price}}<br/>
                @if($product->sale_price > 0)
                    Цена со скидкой: {{$product->sale_price}}<br/>
                    Скидка действительна до: {{$product->sale_end_at}}
                @endif
            </div>
            <div>
                {!!$product->description!!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/product_images/create?product_id={{$product->id}}" class="btn btn-primary">Добавить фото</a>
        </div>
        @foreach($product->product_images as $product_image)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{$product_image->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            @if($product_image->is_main == 1)
                                Главное фото
                            @else
                                Фото
                            @endif
                        </h5>
                        <a href="{{route('admin.product_images.destroy', ['product_image' => $product_image->id])}}"
                            onclick="event.preventDefault();
                                document.getElementById('delete{{$product_image->id}}').submit();" class="btn btn-danger">Удалить</a>
                        {!!Form::open(['route' => ['admin.product_images.destroy', $product_image->id], 'id' => 'delete'.$product_image->id, 'style' => 'display:none;', 'method' => 'delete'])!!}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
