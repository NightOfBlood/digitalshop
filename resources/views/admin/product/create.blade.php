@extends('layouts.app')
@section('title-block')
Создание товара
@endsection
@section('content')
    @include('general.head')
    <section>
            <form action="#" method="post" >
                @csrf
                <div class="signup-form">
                    <h4 class="zagolovok">Создание товара</h4>
                    <div class="col-lg-4 mx-auto">
                        <div class="form-group">
                            <label>Название товара</label>
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Описание товара</label>
                            <input type="text" name="description" placeholder="Description" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Изображение</label>
                            <input type="file" name="image" placeholder="Image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Количество товара</label>
                            <input type="text" name="count" placeholder="Count" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Цена</label>
                            <input type="text" name="price" placeholder="Price" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Категория</label>
                            <input type="text" name="category" placeholder="Category" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Страна</label>
                            <input type="text" name="country" placeholder="Country" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Brand</label>
                            <input type="text" name="brand" placeholder="Brand" class="form-control">
                        </div>

                        <!-- <label> Наличие на складе </label>-->

                        <input class="btn btn-success" type="submit" name="submit" value="Сохранить">
                    </div>
                </div>
            </form>
    </section>
@endsection
