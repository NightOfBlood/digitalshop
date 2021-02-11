@extends('layouts.app')
@section('title-block')
    Работа с заказами
@endsection
@section('content')
    @include('general.head')

    <section>
    <div class="container">
        <div class="row">

            <h5>Товары в заказе</h5>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Номер товара</th>
                    <th>Название</th>
                    <th>Дата</th>
                </tr>
                @foreach($listOrders as $order)
                <tr>
                    <td>{{$order['id']}}</td>
                    <td>{{$order['name']}}</td>
                    <td>{{$order['date']}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>

@endsection
