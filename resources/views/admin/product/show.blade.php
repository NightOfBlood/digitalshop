@extends('layouts.app')
@section('title-block')
    Информация о товарах
@endsection
@section('content')
    @include('general.head')
    <section>
        <div class="container">
            <div class="row">
                <div>
                    <h4 class="centerPositionForTitle">Список товаров</h4>
                </div>
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th>Id Товара</th>
                        <th>Название товара</th>
                        <th>Описание товара</th>
                        <th>Количество товара</th>
                        <th>Цена товара</th>
                        <th>Категория товара</th>
                        <th>Страна производитель</th>
                        <th>Бренд товара</th>

                        <!--<th colspan="3">Действия</th>-->
                        @foreach($product as $product)
                    </tr>
                    </thead>
                    <td>{{$product['id']}}</td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['description']}}</td>
                    <td>{{$product['count']}}</td>
                    <td>{{$product['price']}}</td>
                    <td>{{$product['category']}}</td>
                    <td>{{$product['country']}}</td>
                    <td>{{$product['brand']}}</td>

                    </tr>
                    @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </section>
@endsection
