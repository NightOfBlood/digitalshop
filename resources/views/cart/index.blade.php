@extends('layouts.app')

<body>
@include('general.head')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
        </div>
        <div class="col-sm-12">
            <div class="features_items">
                <h2 class="title text-center">Корзина</h2>
                @if($productsInCart)
                <p>Ваши товары:</p>
                <table class="table-bordered table-striped table">
                    <tr>
                        <th>Код товара</th>
                        <th>Название </th>
                        <th>Категория</th>
                        <th>Стоимость, руб </th>
                        <th>Количество, шт </th>
                        <th>Удалить</th>
                    </tr>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product['id']}}</td>
                        <td>{{$product['name']}}</td>
                        <td>{{$product['category']}}</td>
                        <td>{{$product['price']}}</td>
                        <td>{{$productsInCart[$product['id']]}}</td>
                        <td><a class="btn btn-default checkout" href="/cart/delete/{{$product['id']}}"><i class="fa fa-times"></i></a></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan='3'>Общая стоимость:</td>
                        <td>{{$totalPrice}}</td>
                    </tr>
                </table>
                <a class="btn btn-default checkout " href="/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a>
                @else
                <p>Корзина пуста</p>
                <a class="btn btn-default checkout " href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
</body