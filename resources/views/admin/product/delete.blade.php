@extends('layouts.app')
@section('title-block')
    Удаление товара
@endsection
@section('content')
    @include('general.head')

    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <h4 class="middleAdminZagolovok">Удаление товара</h4>
                <div>
                    <div>
                        <p>Вы действительно хотите удалить этот товар?</p>
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
