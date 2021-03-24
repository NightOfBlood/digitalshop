@extends('layouts.app')
@section('title-block')
    Страница разделов
@endsection
<body>
@include('general.head')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="GET" action="{{url('search')}}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <input class="form-control mr-sm-12" name="search" type="search" placeholder="Search" aria-label="Search">
                            </div>
                            <div class="form-group col-md-2">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
</body>
