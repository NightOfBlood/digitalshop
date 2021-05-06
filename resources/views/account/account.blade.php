@extends('layouts.app')
@section('title-block')
    Личный кабинет
@endsection
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
                    </tr>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{$order['id']}}</td>
                        <td>{{$order['name']}}</td>
                        <td>{{$order['phone']}}</td>
                        <td>{{$order['comment']}}</td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </section>

@endsection
</body>
