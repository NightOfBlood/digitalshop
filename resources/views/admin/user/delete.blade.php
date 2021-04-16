@extends('layouts.app')
@section('title-block')
    Удаление пользователя
@endsection
@section('content')
    @include('general.head')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <h4 class="middleAdminZagolovok">Удаление пользователя</h4>
                    <div>
                        <div>
                            <p>Вы действительно хотите удалить этого пользователя?</p>
                        </div>
                        <div class="signup-form">
                            <form method="post">
                                <input type="submit" name="submit" value="Удалить">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
