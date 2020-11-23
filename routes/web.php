<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Переход на главную страницу
Route::get('/', 'SiteController@actionIndex')->name('main');

//Переход на страницу контакты
Route::get('/contacts', function () {
    return view('site.contact');

});

//Переход на страницу разделов
Route::get('/goods', function () {
    return view('goods.goods');

});

//Переход на страницу о магазине
Route::get('/about', function () {
    return view('about.about');

});

//Переход в личный кабинет пользователя
Route::get('/account', function () {
    return view('account.account');
});

//Регистрация
Route::get('/auth/signup','AuthController@getSignup')->name('auth.signup');
Route::post('/auth/signup','AuthController@postSignup');

//Перехрод на страницу входа
Route::get('/user/login', function () {
    return view('user.login');
});

Route::get('/category/{id}','CatalogController@actionCategory');

//Переход на страницу конкретного продукта
Route::get('/product/{id}','ProductController@actionView');

// переходы
Route::post('/cart/add/{id}', 'CartController@actionAddToCart');

//
Route::get('/registration/checkin', function () {
    return view('registration/checkin');
});

//Админка
Route::get('/admin', function () {
    return view('admin.admin');
});
//Переход на страницу продуктов в админке
Route::get('/admin/product', 'AdminController@actionProduct');

//
//Route::get('product','CatalogController@index');

//переход на страницу для добавление товара
Route::get('/admin/product/create', function () {
    return view('admin/product/create');
});
