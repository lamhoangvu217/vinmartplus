<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Events\notification;
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

Route::get('/', 'Frontend\HomeController@index')->name('trangchu');
Route::get('/search', 'Frontend\HomeController@search')->name('search');


Route::get('/shopping', 'Frontend\ProductController@product')->name('product');
Route::get('/about', 'Frontend\AboutController@about')->name('about');
Route::get('/product_detail', 'HomeController@productDetail')->name('productDetail');
Route::get('/login', 'HomeController@authenticate')->name('authenticate');


Route::get('/product', 'Backend\ProductController@product');
Route::get('/detail/{id}', 'Frontend\ProductController@detail')->name('detail');

Route::get('/render-product', 'Frontend\ProductController@renderProductByCategory')->name('renderProduct');
Route::get('/render-product-search', 'Frontend\ProductController@renderProductBySearch')->name('renderProductBySearch');

Route::get('/search-product', 'Frontend\ProductController@searchProduct')->name('searchProduct');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sendemail', 'SendEmailController@index')->name('sendemail');
Route::post('/sendemail/send', 'SendEmailController@send');


Route::group(['prefix' => 'admin'], function () {
    // Linh sua web.php
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('login.admin');
    Route::post('login', 'Admin\LoginController@login');
    Route::post('logout', 'Admin\LoginController@logout')->name('logout.admin');
});
Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/admin', 'Backend\DashboardController@index');
    Route::get('/dashboard', 'Backend\DashboardController@index')->name('admin.index');
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['prefix' => 'customer'], function () {
            Route::get('index', 'Backend\CustomerController@index')->name('customer.index');
            Route::get('delete/{id}', 'Backend\CustomerController@delete')->name('customer.delete');
        });
        Route::group(['prefix' => 'promotion'], function () {
            Route::get('index', 'Backend\PromotionController@index')->name('promotion.index');
            Route::get('create', 'Backend\PromotionController@create')->name('promotion.create');
            Route::post('submitcreate', 'Backend\PromotionController@submitcreate')->name('promotion.submitcreate');
        });
        Route::group(['prefix' => 'order'], function () {
            Route::get('index', 'Backend\OrderController@index')->name('order.index');
            Route::get('detail/{id}', 'Backend\OrderController@detail')->name('order.detail');
            Route::post('changeStatus', 'Backend\OrderController@changeStatus')->name('order.change');
            Route::post('cancelOrder', 'Backend\OrderController@cancelOrder')->name('order.cancel');
        });
        Route::group(['prefix' => 'employee'], function () {
            Route::get('index', 'Backend\EmployeeController@index')->name('employee.index');
            Route::get('create', 'Backend\EmployeeController@create')->name('employee.create');
            Route::post('submitcreate', 'Backend\EmployeeController@submitcreate')->name('employee.submitcreate');
        });
        Route::group(['prefix' => 'product'], function () {
            Route::get('index', 'Backend\ProductController@index')->name('product.index');
            Route::get('create', 'Backend\ProductController@create')->name('product.create');
            Route::post('create', 'Backend\ProductController@store')->name('product.store');

            Route::get('edit/{id}', 'Backend\ProductController@edit')->name('product.edit');
            Route::post('edit/{id}', 'Backend\ProductController@update')->name('product.update');
            Route::get('delete/{id}', 'Backend\ProductController@delete')->name('product.delete');
        });
        Route::group(['prefix' => 'category'], function () {
            Route::get('index', 'Backend\CategoryController@index')->name('category.index');
            Route::get('create', 'Backend\CategoryController@create')->name('category.create');
            Route::post('create', 'Backend\CategoryController@store')->name('category.store');

            Route::get('edit/{id}', 'Backend\CategoryController@edit')->name('category.edit');
            Route::post('edit/{id}', 'Backend\CategoryController@update')->name('category.update');
            Route::get('delete/{id}', 'Backend\CategoryController@delete')->name('category.delete');
        });
    });
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('cart', 'Frontend\CartController@index')->name('cart');
    Route::post('delete', 'Frontend\CartController@removeCart')->name('removefromcart');
    Route::post('changeqty', 'Frontend\CartController@updateCart')->name('changeqty');
    Route::get('/checkout', 'Frontend\CheckOut@CheckOut')->name('checkout');
    Route::get('/finishshopping', 'Frontend\CheckOut@FinishShopping')->name('finishshopping');
});
Route::post('add', 'Frontend\CartController@addCart')->name('addtocart');


Route::group(['middleware' => ['auth'], 'prefix' => 'profile'], function () {
    Route::get('/', 'Frontend\ProfileController@index')->name('profile');
    Route::post('/update/{id}', 'Frontend\ProfileController@update')->name('updateProfile');
});
