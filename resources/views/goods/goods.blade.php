@extends('layouts.app')
@section('title-block')
    Страница разделов
@endsection
<body>
@include('general.head')
@section('content')
<section>
    <div class="col-sm-12 padding-right">
        <div class="features_items">
            <h2 class="title text-center">Новинки</h2>
            <div class="row">
                @foreach($lastItems as $item)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="/product/ {{$item['id']}}"><img style="width:270px; height:240px" src="{{URL::asset('img/'.$item['image'].'.jpg')}}"/>
                                        <h2>{{$item['price']}} Руб. </h2>
                                        <a href="/product/ {{$item['id']}}">
                                            {{$item['name']}}
                                        </a>
                                        <br>
                                        <a href="#" class="btn btn-default add-to-cart cart" data-id="{{$item["id"]}}">
                                            <i class="fa fa-shopping-cart"></i>В корзину
                                        </a>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
</body>
