@extends('layouts.app')
 <body>
    @include('general.head')
    @section('content')
        <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-sm-offset-4 padding-right">
                    <?php if(isset($errors)&& is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                        <li>
                            <?php echo $error; ?>
                        </li>
                        <?php endforeach;?>
                    </ul>
                    <?php endif; ?>
                    <div class="signup-form">
                        <h2 class="middleAdminZagolovok">Вход на сайт</h2>
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label>Введите логин</label>
                                <input type='email' placeholder='Емайл' name='email' class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Введите пароль</label>
                                <input type='password' placeholder='Пароль' name='password' class="form-control">
                            </div>

                            <div class="form-group">
                                <input type='submit' value='Вход' name='submit' class="form-control">
                            </div>
                                <a href="{{ route('auth.signup') }}">Регистрация</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</section>

@endsection
 </body>
