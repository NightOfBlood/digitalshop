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
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2 class="middleAdminZagolovok">Выберите нужный вам раздел продукции:</h2>
                    <div class="panel-group category-products">
                        @foreach ($categories as $item)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/{{$item['id']}}">
                                            {{$item['name']}}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
</body>
