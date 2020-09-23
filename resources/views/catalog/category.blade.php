@extends('layouts.app')
<body>
@include('general.head')
@section('content')
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        @foreach ($categories as $item)

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"></h4>
                                    <a href="/category/
                                    {{$item['id']}}
                                    ">
                                        {{$item['name']}}
                                    </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-sm-9">

                <div class="features_items">
                    <h2 class="title text-center">Товары</h2>
                    @foreach ($categoryProducts as $product)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="/product/{{$product['id']}}"><img  style="width:250px; height:250px" src="{{Product::getImage({{$product['id']}})}}"/></a>
                                    <h2>{{$product['price']}} Руб.</h2>
                                    <p><a href="/product{{product['id']}}">
                                            {{$product['name']}} </a></p>

                                    <a href="#" data-id="{{$product['id']}}"
                                       class="btn btn-default cart"><i class="fa fa-shopping-cart"></i> В корзину </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection
</body>
