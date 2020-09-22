@extends('layouts.app')
<body>
@include('general.head')
@section('content')
    <html>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-sm-offset-4 padding-right">
                    <div class="signup-form">
                        <h2 style="text-align:center" >Регистрация</h2>
                        <form  action="#" method="POST">
                            <div class="form-group">
                                <label>Введите имя</label>
                                <input class="btn btn-default" type="text" name="name" placeholder="Имя" value="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Введите email</label>
                                <input class="btn btn-default" type="email" name="email" placeholder="Емайл" value="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Введите пароль</label>
                                <input class="btn btn-default" type="password" name="password" placeholder="Пароль" value="" class="form-control">
                            </div>

                            <div class="form-group">
                                <input class="btn btn-default" type="submit" name="submit"  value="Регистрация" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </html>

@endsection
</body>
