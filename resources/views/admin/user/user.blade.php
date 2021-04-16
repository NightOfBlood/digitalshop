@extends('layouts.app')
@section('title-block')
     Страница пользователей
@endsection
@section('content')
    @include('general.head')
<section>
    <div class="container">
        <div class="row">
                <h4>Список  пользователей</h4>
        </div>
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th>Id пользователя</th>
                    <th>Имя пользователя</th>
                    <th>Email</th>
                    <th>Пароль</th>
                    <th colspan="1">Действия</th>
                    @foreach($users as $user)
                </tr>
                </thead>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['password']}}</td>

                <td><a href="/admin/user/delete/{{$user['id']}}>"><i class="fa fa-times"></i></a></td>
                </tr>
                @endforeach
                </tr>
            </table>
        </div>
    </div>
</section>
@endsection
