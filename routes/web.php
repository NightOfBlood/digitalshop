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

//Переход на страницу о магазине
Route::get('/about', function () {
    return view('about.about');

});

//Переход в личный кабинет пользователя
Route::get('/account', function () {
    return view('account.account');

});

//Переход в личный кабинет пользователя
Route::get('/cart', function () {
    return view('cart.cart');

});

//Переход на страницу товаров
/*
Route::get('/category','CatalogController@actionCategory')->name('product');
Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');
*/

//Регистрация
Route::get('/signup','AuthController@signIn');
//Route::post('/signup','AuthController@postSignup');

//Авторизация
//Route::get('/auth/signup', '');

//Перехрод на страницу входа
Route::get('/user/login', function () {
    return view('user.login');

});


Route::get('/category/{id}','CatalogController@actionCategory');

//Переход на страницу конкретного продукта
Route::get('/product/{id}','ProductController@actionView');
