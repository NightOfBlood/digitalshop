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

                </table>

            </div>
        </div>
    </section>

@endsection
</body>
