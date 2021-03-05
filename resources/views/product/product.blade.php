@extends('layouts.app')
@section('title-block')
    Страница о товаре
@endsection
<body>
@include('general.head')
@section('content')
    <section>
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        @foreach ($categories as $item)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/{{$item['id']}}">
                                            {{$item['name']}}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="product-details">
                    <div class="col-sm-4">
                        <div class="view-product">
                            <img  src="{{URL::asset('img/'.$product['image'].'.jpg')}}"/>
                        </div>
                    </div>

                    <div class="col-sm-5">
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

                    <div class="col-sm-8">
                        <h5>Описание товара:</h5>
                        {{$product['description']}}
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
</body>

