@extends('layouts.app')
@section('title-block')
    Административная панель
@endsection
@section('content')
    @include('general.head')

<body>
<head><h2 class="zagolovok">Административная панель</h2></head>
<section>
    <div class="container">
        <div class="row">
            <div class="container text-center">
                <ul class="page nav navbar-nav">
                    <li>
                        <a href="/admin/product">
                            <div>
                                <img style="width:200px; height:200px" src="{{URL::asset('img/goods.png')}}"/></div>Управление товарами

                        </a>
                    </li>
                    <li>
                        <a href="/admin/category">
                            <div>
                                <img style="width:200px; height:200px" src="{{URL::asset('img/category.png')}}"/></div>Управление категориями

                        </a>
                    </li>
                    <li>
                        <a href="/admin/order">
                            <div>
                                <img style="width:200px; height:200px" src="{{URL::asset('img/orders.png')}}"/></div>Управление заказами
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
</body>
@endsection
