@extends('layouts.app')
@section('content')
<body>
@include('general.head')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 padding-right">
                    @if($result)}}
                    <p>Вы зарегистрированы!</p>
                    <?php else: ?>
                    @if(isset($errors) && is_array($errors))}}
                    <ul>
                        @foreach ($errors as $error):
                        <li>
                            {{$error}}
                        </li>
                        @endforeach
                    </ul>
                    @endif
                    <div class="signup-form">
                        <h2 style="text-align:center" >Регистрация</h2>
                        <form  action="#" method="POST">
                            <input class="btn btn-default" type="text" name="name" placeholder="Имя" value=" {{$name}}">
                            <input class="btn btn-default" type="email" name="email" placeholder="Емайл" value="{{$email}}">
                            <input class="btn btn-default" type="password" name="password" placeholder="Пароль" value="{{$password}}">
                            <input class="btn btn-default" type="submit" name="submit"  value="Регистрация">
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
<body>
@endsection
