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
Route::get('/auth/signup','AuthController@getSignUp')->name('authSignUp');
Route::post('/auth/signup','AuthController@postSignUp');

//Вход на сайт
Route::get('/auth/signin','AuthController@getSignIn')->name('authSignIn');
Route::post('/auth/signin','AuthController@postSignIn');

//Выход с аккаунта пользователя
Route::get('/auth/signout','AuthController@getSignOut')->name('authSignOut');

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
})->name('adminPage');
//---------------------------------Работа с товарами---------------------------------

//Переход на страницу для работы с товарами
Route::get('/admin/product', 'AdminController@actionProduct')->name('productView');

//Перехрод на страницу просмотра товара
Route::get('/admin/product/show','AdminController@getInformationAboutProduct');

//переход на страницу для добавление товара
Route::get('/admin/product/form','AdminController@formProduct');

//переход на страницу создания товара
Route::post('/admin/product/create','AdminController@createProduct');
Route::get('/admin/product/create', function () {
    return view('admin.product.create');
});

//переход на страницу для обновления товара
Route::get('/admin/product/update/{id}', 'AdminController@editProduct');
Route::post('/admin/product/update/{id}', 'AdminController@updateProduct')->name('productUpdate');

//переход на страницу для удаление товара
Route::get('/admin/product/delete/{id}', 'AdminController@deleteProduct');

//---------------------------------Работа с категориями---------------------------------

//Переход на страницу для работы с категориями
Route::get('/admin/category', 'AdminController@actionCategory');

//Переход на страницу для создания категории
Route::get('/admin/category/create', function () {
    return view('admin.category.create');
});
Route::post('/admin/category/create', 'AdminController@createCategory');

//переход на страницу для обновления категория
Route::get('/admin/category/update/{id}', 'AdminController@editCategory');
Route::post('/admin/category/update/{id}', 'AdminController@updateCategory')->name('categoryUpdate');

//Переход на страницу для удаления категории
Route::get('/admin/category/delete/{id}', 'AdminController@deleteCategory');


//---------------------------------Работа с заказами---------------------------------

//Переход на страницу для работы с  заказами
Route::get('/admin/order', 'AdminController@actionOrder');

//----------------------------------Работа с пользователями---------------------------------

Route::get('/admin/users', function () {
    return view('admin.user.index');
});

//-------------------------------------------------------------------------------------------
//---------------------------------Работа с корзиной товаров---------------------------------
//-------------------------------------------------------------------------------------------

//Route::get('/cart', 'CartController@cartIndex')->name('cartIndex');
/*Route::get('/cart', function () {
    return view('cart.index');
});*/

//Route::post('/cart/add/{id}','CartController@cartAdd')->name('cartAdd');


//-------------------------------------------------------------------------------------------
//---------------------------------Поиск---------------------------------
//-------------------------------------------------------------------------------------------

Route::get('/search','SearchController@getResults')->name('searchResults');



//-------------------------------------------------------------------------------------------
//---------------------------------Добовление товара в корзину-------------------------------
//-------------------------------------------------------------------------------------------


Route::get('/cart','CartController@cart')->name('cart');
Route::get('/cart/place','CartController@cartPlace')->name('cart-place');

Route::post('cart/add/{id}','CartController@cartAdd')->name('cart-add');
