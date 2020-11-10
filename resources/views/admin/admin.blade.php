@extends('layouts.app')
@section('title-block')
    Административная панель
@endsection
@section('content')

<body>
@include('general.head')
<head><h2 class="zagolovok">Административная панель</h2></head>
<section>
    <div class="container">
        <div class="row ">
            <div class="container text-center">
                <ul class="nav navbar-nav collapse navbar-collapse ">
                    <li>
                        <a href="/admin">
                            <div>
                                <img style="width:200px; height:200px" src="{{URL::asset('/img/goods.png')}}"/>Управление товарами
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/admin">
                            <div>
                                <img style="width:200px; height:200px" src="{{URL::asset('/img/category.png')}}"/>Управление категориями
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/admin">
                            <div>
                                <img style="width:200px; height:200px" src="{{URL::asset('/img/orders.png')}}"/>Управление заказами
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
</body>
@endsection
