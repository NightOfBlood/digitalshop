@extends('layouts.app')
@section('content')
@include('general.head')

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



                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <h2 class="title text-center">Новинки</h2>
                        <div class="row">
                        @foreach($lastItems as $item)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="/product/ {{$item['id']}}">
                                                <img style="width:270px; height:250px"
                                                     src="{{URL::asset('img/'.$item['image'].'.jpg')}}"/>
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

{{-- Рекомендации --}}
                    </div>
                </div>
            </div>
        </div>


</section>


@endsection
