@extends('layouts.app')
@section('title-block')
    Страница поиска
@endsection
<body>
@include('general.head')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <h3 class="centerPositionForTitle">Результаты поиска: {{ Request::input('query')}}</h3>

                @if(!$products->count())
                    <p>Товар не найден</p>
                @else

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Название товара</th>
                                <th>Изображение</th>
                                <th>Бренд товара</th>
                                <th>Цена</th>
                                @foreach($products as $product)
                            </tr>
                        </thead>
                            <td>
                                <a href="/product/{{$product['id']}}">
                                    {{$product['name']}}
                                </a>
                            </td>
                            <td><img src="{{asset('img/'.$product['image'].'jpg')}}"></td>
                            <td> {{$product['brand']}}</td>
                            <td> {{$product['price']}}</td>
                        @endforeach

                    </table>
                @endif
            </div>
        </div>
    </section>

@endsection
</body>
