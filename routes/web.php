<?php

use Illuminate\Support\Facades\Route;

//------------------------------------------------------------------------------
//---------------------------------Главная страница-----------------------------
//------------------------------------------------------------------------------

//Переход на главную страницу
Route::get('/', 'SiteController@actionIndex')->name('main');

//Переход на страницу разделов по товарам
Route::get('/goods', function () {
    return view('goods.goods');

});

//Переход на страницу о магазине
Route::get('/about', function () {
    return view('about.about');

});

//Переход на страницу контакты
Route::get('/contacts', function () {
    return view('site.contact');

});

//Переход в личный кабинет пользователя
Route::get('/account', function () {
    return view('account.account');
});

//------------------------------------------------------------------------------
//--------------------------Страница Регистрации и входа------------------------
//------------------------------------------------------------------------------

//Регистрация
Route::get('/auth/signup','AuthController@getSignup')->name('auth.signup');
Route::post('/auth/signup','AuthController@postSignup');

//Перехрод на страницу входа
Route::get('/user/login', function () {
    return view('user.login');
});

Route::get('/registration/checkin', function () {
    return view('registration/checkin');
});


//------------------------------------------------------------------------------
//--------------------------Страница товары ------------------------------------
//------------------------------------------------------------------------------

Route::get('/category/{id}','CatalogController@actionCategory');

//Переход на страницу конкретного продукта
Route::get('/product/{id}','ProductController@actionView');


//

//------------------------------------------------------------------------------
//--------------------------Административная панель-----------------------------
//------------------------------------------------------------------------------

// Переход на страницу административной панели
Route::get('/admin', function () {
    return view('admin.admin');
});

//Переход на страницу для работы с товарами
Route::get('/admin/product', 'AdminController@actionProduct')->name('productView');

//переход на страницу для добавление товара
Route::get('/admin/product/form','AdminController@formProduct');

//создание
Route::get('/admin/product/create','AdminController@createProduct');

//переход на страницу для обновления товара
Route::get('/admin/product/update/{id}', function () {
    return view('admin/product/update');
});

//переход на страницу для удаление товара
Route::get('/admin/product/delete/{id}', 'AdminController@deleteProduct');


//Переход на страницу для работы с категориями
Route::get('/admin/category', 'AdminController@actionCategory');

//Переход на страницу для удаления категории
Route::get('/admin/category', 'AdminController@deleteCategory')->name('deleteCategory');

//Переход на страницу для работы с  заказами
Route::get('/admin/order', 'AdminController@actionOrder');
