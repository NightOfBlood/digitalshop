@extends('layouts.app')
@section('title-block')
    Создание категорий
@endsection
<body>
@include('general.head')
@section('content')

    <section>
        <div class="container">
            <div class="row">
                <h4 class="middleAdminZagolovok">Добавить новую категорию</h4>
                <div class="middleAdminPanel">
                    <div class="col-lg-12 mx-auto">
                        <div class="signup-form">
                            <form action="/admin/category/create" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label>Название категории</label>
                                    <input type="text" name="name">
                                    <input class="btn btn-default" type="submit" name="submit" value="Сохранить">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
