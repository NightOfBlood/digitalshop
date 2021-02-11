@extends('layouts.app')
@section('title-block')
  Обновление категории
@endsection
<body>
@include('general.head')
@section('content')

    <section>
    <div class="container">
        <div class="row">
            <h4 class="middleAdminZagolovok">Обновление категории продуктов</h4>
            <div class="middleAdminPanel">
                <div class="col-sm-12">
                    <div class="login-form">
                        <form action="#" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Название категории</label>
                                <input type="text" value="{{$category['name']}}" name="name">
                                <input class="btn btn-default" type="submit" name="submit" value="Сохранить">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
