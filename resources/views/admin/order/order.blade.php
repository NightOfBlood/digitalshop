@extends('layouts.app')
@section('title-block')
    Работа с заказами
@endsection
@section('content')
    @include('general.head')

    <section>
    <div class="container">
        <div class="row">

            <h4 class="middleAdminZagolovok">Просмотр заказа {{$order['id']}}</h4>
            <div class="login-form">
                <form>
                    <label>Имя клиента</label>
                    <input type="text" value="{{$order['userName']}}">
                    <label>Телефон клиента</label>
                    <input type="text" value="{{$order['userPhone']}}">
                    <label>Комментарий клиента</label>
                    <input type="text" value="{{$order['userComment']}}">
                    <label>Дата заказа</label>
                    <input type="text" value="{{$order['date']}}">
                    <label>Статус заказа</label>
                    <input type="text" value="{{$order['status']}}">
                </form>
            </div>

            <h5>Товары в заказе</h5>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Номер товара</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Количество</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td>{{$product['id']}}</td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['price']}}</td>
                    <td>{{$productsQuantity[$product['id']]}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>

@endsection
