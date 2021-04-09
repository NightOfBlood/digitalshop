@extends('layouts.app')
@section('title-block')
     Страница пользователей
@endsection
@section('content')
    @include('general.head')
<section>
    <div class="container">
        <div class="row">
                <h4>Список товаров</h4>
        </div>
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th>Id Товара</th>
                    <th>Имя пользователя</th>
                    <th>Email</th>
                    <th>Пароль</th>
                    <th colspan="1">Действия</th>
                    @foreach($listUsers as $users)
                </tr>
                </thead>
                <td>{{$users['id']}}</td>
                <td>{{$users['name']}}</td>
                <td>{{$users['email']}}</td>
                <td>{{$users['password']}}</td>

                <td><a href="/admin/user/delete/{{$users['id']}}>"><i class="fa fa-times"></i></a></td>
                </tr>
                @endforeach
                </tr>
            </table>
        </div>
    </div>
</section>
@endsection
