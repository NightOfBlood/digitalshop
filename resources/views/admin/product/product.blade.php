@extends('layouts.app')
@section('title-block')
    Административная панель
@endsection
@section('content')
    @include('general.head')
<section>

    @if(session()->get('success'))
        <div class="alert alert-success mt-3">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="addProduct">
                <h4>Список товаров</h4>
                <a href="/admin/product/create" class="btn btn-primary pull-right">Добавить товар</a>
            </div>
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th>Id Товара</th>
                    <th>Название товара</th>
                    <th>Цена</th>
                    <th colspan="3">Действия</th>
                 @foreach($productList as $product)
                </tr>
                </thead>
                    <td>{{$product['id']}}</td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['price']}}</td>

                    <td><a href="/admin/product/show/"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
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

