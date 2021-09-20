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

Route::get('/', function () {
    return view('frontend.contents.homepage');
});
Route::get('/shopping', 'Frontend\ProductController@product')->name('product');
Route::get('/about', 'Frontend\AboutController@about')->name('about');
Route::get('/product_detail', 'HomeController@productDetail')->name('productDetail');
Route::get('/login', 'HomeController@authenticate')->name('authenticate'); 
Route::get('/cart', 'Frontend\CartController@cart')->name('cart'); 
Route::get('/checkout', 'HomeController@checkout')->name('checkout'); 

Route::get('/product', 'Backend\ProductController@product'); 
Route::get('/detail/{id}', 'Frontend\ProductController@detail')->name('detail'); 



Route::get('/admin', 'Backend\DashboardController@index')->name('admin.index'); 

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


// admin
Route::get('/admin/home', 'Backend\AdminController@index');
Route::get('/admin', 'Admin\LoginController@showLoginForm')->name('login.admin');
Route::post('/admin', 'Admin\LoginController@login');