@extends('layouts.app')
@section('title-block')
    Страница регистрации
@endsection
<body>
@include('general.head')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <form  action="{{route('authSignUp')}}" method="POST" novalidate>
                        @csrf
                        <div class="signup-form">
                            <h2 style="text-align:center" >Регистрация</h2>

                            <div class="form-group">
                                <label>Введите имя</label>
                                <input type="text" name="name" placeholder="Имя" value="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Введите email</label>
                                <input type="email" name="email" placeholder="Емайл" value="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Введите пароль</label>
                                <input  type="password" name="password" placeholder="Пароль" value="" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit"  value="Регистрация" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
</body>
