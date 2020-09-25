@extends('layouts.app')
<body>
@include('general.head')
@section('content')

    <section>
        <div class="container">
            <div class="row">
                <h1 class="zagolovok">Личный кабинет</h1>
                <h3 class="zagolovok"></h3>

                <table class="table-bordered table-striped table">
                    <tr>
                        <th>Код заказа</th>
                        <th>Название товара</th>
                        <th>Телефон </th>
                        <th>Комментарий</th>
                        <th>Статус</th>
                    </tr>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{$order['id']}}</td>
                        <td>{{Product::getNameProduct($result['name'])}}</td>
                        <td>{{['phone']}}</td>
                        <td>{{$order['comment']}}</td>
                        <td>{{User::getStatus($order['status'])}}</td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </section>

@endsection
</body>
