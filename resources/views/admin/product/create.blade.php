@extends('layouts.app')
@section('title-block')
    Добавление нового товара
@endsection
@section('content')
@include('general.head')

<section>
    <form action="/contact/submit" method="post">
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
                    <input type="text" name="message" placeholder="Description" class="form-control">
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

                <div class="form-group">
                    <label>Новинка</label>
                    <select name="is_new" class="form-control">
                        <option value="1" selected> Да </option>
                        <option value="0" selected> Нет </option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Наличие на складе</label>
                    <select name="is_new" class="form-control">
                        <option value="1" selected> Да </option>
                        <option value="0" selected> Нет </option>
                    </select>
                </div>

                <button type="submit" name="submit" class="btn btn-success" value="Отправить">Отправить</button>
            </div>
        </div>
    </form>
    {{--
    <div class="container">
        <div class="row">
            <h4 class="middleAdminZagolovok">Добавить новый товар</h4>
            <div class="middleAdminPanel">
                <div class="col-lg-4">
                    <div class="login-form">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <label>Название товара</label>
                            <input type="text" name="name">
                            <label>Стоимость</label>
                            <input type="text" name="price">
                            <label>Категория</label>
                            <select name="category_id">
                              {{--  @if (is_array($categoriesList))
                                @foreach($categoriesList as $category)
                                <option value=" {{$category['id']}}">
                                    {{$category['name']}}
                                </option>
                                @endforeach
                                @endif
                            </select>
                            <!-- <label> Производитель </label>-->
                            <label>Изображение товара</label>
                            <input type="file" name="image">
                            <label>Количество</label>
                            <input type="text" name="count">
                            <label>Описание товара</label>
                            <textarea name="description"></textarea>
                            <label> Новинка </label>
                            <select name="is_new">
                                <option value="1" selected> Да </option>
                                <option value="0" selected> Нет </option>
                            </select>
                            <!-- <label> Наличие на складе </label>-->
                            <input class="btn btn-default" type="submit" name="submit" value="Сохранить">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}
</section>
@endsection
