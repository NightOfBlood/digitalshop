@extends('layouts.app')
@section('title-block')
    Добавление нового товара
@endsection
@section('content')
@include('general.head')

<section>
    <form action="admin/product" method="post">
        @csrf
        <div class="signup-form">
            <h4 class="zagolovok">Добавление нового товара</h4>
            <div class="col-lg-4 mx-auto">

                <div class="form-group">
                    <label>Название товара</label>
                    <input type="text" name="name" placeholder=" Name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Описание товара</label>
                    <input type="text" name="description" placeholder="Description" class="form-control">
                </div>

                <div class="form-group">
                    <label>Изображение товара</label>
                    <input type="file" name="image" placeholder="Image" class="form-control">
                </div>

                <div class="form-group">
                    <label>Количество товара</label>
                    <input type="text" name="count" placeholder="Count" class="form-control">
                </div>

                <div class="form-group">
                    <label>Стоимость</label>
                    <input type="text" name="price" placeholder="Price" class="form-control">
                </div>

                <div class="form-group">
                    <label>Категория</label>
                    <input type="text" name="category" placeholder="Category" class="form-control">
                </div>

                <div class="form-group">
                    <label>Производитель товара</label>
                    <input type="text" name="country" placeholder="Country" class="form-control">
                </div>

                <div class="form-group">
                    <label>Бренд</label>
                    <input type="text" name="brand" placeholder="Brand" class="form-control">
                </div>


                <button type="submit" name="submit" class="btn btn-success" value="Отправить">Отправить</button>
            </div>
        </div>
    </form>

</section>
@endsection
