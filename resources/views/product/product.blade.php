@extends('layouts.app')
<body>
@include('general.head')
@section('content')
    <section>
        <div class="container">
            <div class="product-details">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img  src="{{URL::asset('img/'.$product['image'].'.jpg')}}"/>
                        </div>
                    </div>

                    <div class="col-sm-7">
                        <div class="product-information">
                            <h2>Название товара: {{$product['name']}}</h2>
                            <h2>Страна производитель: {{$product['country']}}</h2>
                            <h2>Компания производитель: {{$product['brand']}}</h2>
                            <span>
                            <span>{{$product['price']}} Руб.</span>
                            <label>Количество:</label>
                            <input type="text">
                            <a href="#" data-id="{{$product['productId']}}"
                               class="btn btn-default cart"><i class="fa fa-shopping-cart"></i> В корзину </a>
                        </span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-10">
                        <h5>Описание товара:</h5>
                        {{$product['description']}}
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
</body>

