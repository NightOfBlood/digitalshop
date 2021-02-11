@extends('layouts.app')
@section('title-block')
    Обновление товара
@endsection
@section('content')
    @include('general.head')

    <section>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('productUpdate', $product->id)}}" method="post">
            @csrf
            <div class="signup-form">
                <h4 class="zagolovok">Обновление товара</h4>
                <div class="col-lg-4 mx-auto">

                    <div class="form-group">
                        <label>Название товара</label>
                            <input type="text" name="name" value="{{$product->name}}" placeholder="Name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Описание товара</label>
                        <input type="text" name="description" value="{{$product->description}}" placeholder="Description" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Изображение</label>
                        <img src="{{asset('img/'.$product->image.'.jpg')}}">
                        <input type="file" name="image" placeholder="Image" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Количество товара</label>
                        <input type="text" name="count" value="{{$product->count}}" placeholder="Count" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Цена</label>
                        <input type="text" name="price" value="{{$product->price}}" placeholder="Price" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Категория</label>
                        <input type="text" name="category" value="{{$product->category}}" placeholder="Category" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Страна</label>
                        <input type="text" name="country" value="{{$product->country}}" placeholder="Country" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Brand</label>
                        <input type="text" name="brand" value="{{$product->brand}}" placeholder="Brand" class="form-control">
                    </div>

                    <button type="submit" name="submit" class="btn btn-success" value="Отправить">Отправить</button>
                </div>
            </div>
        </form>
</section>

@endsection

