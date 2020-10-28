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

//Регистрация
//Route::get('/signup','AuthController@signIn');
//Route::post('/signup','AuthController@postSignup');
Route::get('/auth/signup','AuthController@getSignup')->name('auth.signup');
Route::post('/auth/signup','AuthController@postSignup');

//Перехрод на страницу входа
Route::get('/user/login', function () {
    return view('user.login');
});

Route::get('/category/{id}','CatalogController@actionCategory');

//Переход на страницу конкретного продукта
Route::get('/product/{id}','ProductController@actionView');

//Переход на страницу регистрации пользователей
/*
Route::get('/auth/signup', function () {
    return view('auth.signup');
});*/

Route::post('/cart/add/{id}', 'CartController@actionAddToCart');

