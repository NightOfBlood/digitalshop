@extends('layouts.app')
@section('title-block')
    Административная панель
@endsection
@section('content')
    @include('general.head')
<section>
    <div class="container">
        <div class="row">
            <h4>Список товаров</h4>
            <a href="/admin/product/create"><i class="fa fa-plus"></i>Добавить товар</a>
            <table class="table-bordered table-striped table">
                <tr>
                    <th>Id Товара</th>
                    <th>Название товара</th>
                    <th>Цена</th>
                    <th colspan="2">Действия</th>
                 @foreach($productList as $product)
                <tr>
                    <td>{{$product['id']}}</td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['price']}}</td>
                    <td><a href="/admin/product/update/{{$product['id']}}"><i class="fa fa-pencil-square-o"></i></a></td>
                    <td><a href="/admin/product/delete/{{$product['id']}}>"><i class="fa fa-times"></i></a></td>
                </tr>
                @endforeach
                </tr>
            </table>
        </div>
    </div>
</section>
@endsection

