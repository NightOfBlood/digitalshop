@extends('layouts.app')
@section('title-block')
    Контакты
@endsection
@section('content')

<body>
@include('general.head')

    <form action="/contact/submit" method="post">
        @csrf
        <div class="signup-form">
            <h4 class="zagolovok">Обратная связь</h4>
            <div class="col-lg-4 mx-auto">

                <div class="form-group">
                    <label>Введите имя</label>
                    <input type="name" name="name" placeholder="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Тема сообщения</label>
                    <input type="Email-l" name="subject" placeholder="Email-l" class="form-control">
                </div>

                <div class="form-group">
                    <label>Сообщение</label>
                    <input type="text" name="message" placeholder="Сообщение" class="form-control">
                </div>

                <button type="submit" name="submit" class="btn btn-success" value="Отправить">Отправить</button>
            </div>
        </div>
    </form>

</body>

@endsection
