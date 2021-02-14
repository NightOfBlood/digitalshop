@extends('layouts.app')
@section('title-block')
    Результаты поиска
@endsection
@section('content')
    @include('general.head')
<section>
    <div class="row">
        <div class="col-lg-6">
            <h3>Результаты поиска: "{{Request::input('query')}}"</h3>
        </div>
    </div>
</section>
@endsection
