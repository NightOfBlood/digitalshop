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

//Route::get('/','Controller@index')->name('welcome-form');

//Переход на главную страницу
Route::get('/', function () {
    return view('main');})->name('main');

//Переход на страницу контакты
Route::get('/contacts', function () {
    return view('site.contact');

});

//Переход на страницу о магазине
Route::get('/about', function () {
    return view('about.about');

});

//Переход на страницу авторизации
Route::get('/user/login', function () {
    return view('user.login');

});

//Переход на страницу регистрации пользователя
Route::get('/user/register', function () {
    return view('user.register');

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
Route::get('/category', function () {
    return view('catalog.category');

});

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

//Переход на страницу авторизации
Route::get('/user/login', function () {
    return view('user.login');

});
