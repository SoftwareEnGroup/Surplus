<?php

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
Auth::routes();

Route::get('/', 'MapController@show');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/error',function(){
   abort(404);
});

Route::get('/profile', [
    'uses' => 'UserController@getProfile',
    'as' => 'user.profile',
    'middleware' => 'auth'
]);

Route::get('/products', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/reduce/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('/removeItem/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.removeItem'
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::get('contact', 'ContactController@create')->name('contact.create');

Route::post('contact', 'ContactController@store')->name('contact.store');

Route::get('/add-product', [
    'uses' => 'ProductController@getAddProduct',
    'as' => 'product.addInventory'
]);

Route::post('/add-product',[
    'uses' => 'ProductController@postAddProduct',
    'as' => 'product.addInventory'
]);