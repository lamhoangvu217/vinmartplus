<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('frontend.contents.homepage');
});
Route::get('/shopping', 'Frontend\ProductController@product')->name('product');
Route::get('/about', 'Frontend\AboutController@about')->name('about');
Route::get('/product_detail', 'HomeController@productDetail')->name('productDetail');
Route::get('/login', 'HomeController@authenticate')->name('authenticate');

Route::get('/checkout', 'HomeController@checkout')->name('checkout');

Route::get('/product', 'Backend\ProductController@product');
Route::get('/detail/{id}', 'Frontend\ProductController@detail')->name('detail');




Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');



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
        });
        Route::group(['prefix' => 'employee'], function () {
            Route::get('index', 'Backend\EmployeeController@index')->name('employee.index');
            Route::get('create', 'Backend\EmployeeController@create')->name('employee.create');
        });
    });
});

    Route::get('cart', 'Frontend\CartController@cart')->name('cart');
    Route::get('add/{id}', 'Frontend\CartController@CartAdd')->name('addtocart');
    Route::get('delete/{id}','Frontend\CartController@CartRemove')->name('removefromcart');

    
