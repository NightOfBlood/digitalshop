@extends('layouts.app')
@section('title-block')
    Удаление категории
@endsection
@section('content')
    @include('general.head')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <h4 class="middleAdminZagolovok">Удаление категории</h4>
                    <div>
                        <div>
                            <p>Вы действительно хотите удалить эту категорию?</p>
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
