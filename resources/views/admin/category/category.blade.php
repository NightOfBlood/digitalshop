@extends('layouts.app')
@section('title-block')
    Страница категорий
@endsection
<body>
@include('general.head')
@section('content')

    <section>
        <div class="container">
            <div class="row">
                <h4>Список категорий</h4>
                <a href="/admin/category/create"><i class="fa fa-plus"></i>Добавить категорию</a>
                <table class="table-bordered table-striped table">
                    <tr>
                        <th>Id категории</th>
                        <th>Название категории</th>
                        <th colspan="2">Действия</th>
                    @foreach($categoriesList as $category)
                        <tr>
                            <td>{{$category['id']}}</td>
                            <td>{{$category['name']}}</td>

                            <td><a href="/admin/category/update/{{$category['id']}}"><i class="fa fa-pencil-square-o"></i></a></td>
                            <td><a href="/admin/category/delete/{{$category['id']}}"><i class="fa fa-times"></i></a></td>
                        </tr>
                        @endforeach
                        </tr>
                </table>
            </div>
        </div>
    </section>

<?php include root . '/views/general/footer.php';?>
