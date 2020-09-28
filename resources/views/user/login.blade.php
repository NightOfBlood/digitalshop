@extends('layouts.app')
 <body>
    @include('general.head')
    @section('content')
        <section>
            <form action="/contact/submit" method="post">
                @csrf
                <div class="signup-form">
                    <h4 class="zagolovok">Вход на сайт</h4>
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label>Введите имя/логин</label>
                            <input type="login" name="login" placeholder="login" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Введите пароль</label>
                            <input type="password" name="password" placeholder="password" class="form-control">
                        </div>

                        <a href="/user/register/">Регистрация</a>
                        <button type="submit" name="submit" class="btn btn-success" value="Отправить">Отправить</button>

                    </div>
                </div>
            </form>
</section>

@endsection
 </body>
