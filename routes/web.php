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

Route::get('/sitemap', 'SitemapController@index');

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/payments-delivery', 'HomeController@paymentsDelivery');
Route::get('/service-center', 'HomeController@serviceCenter');
Route::get('/contacts', 'HomeController@contact');
Route::post('/contact', 'HomeController@postContact');
Route::get('/faq', 'HomeController@faq');
// Route::get('/search', 'HomeController@search');
// Route::get('/blog', 'HomeController@blog');
// Route::get('/b/{slug}', 'HomeController@blogShow');

// Route::post('/subscribe', 'HomeController@subscribe');

Route::get('/cart', 'CartController@cart');
Route::post('/cart/addToCart', 'CartController@addToCart');
Route::get('/cart/clearCart', 'CartController@clearCart');
Route::post('/cart/clearCart', 'CartController@clearCart');
Route::post('/cart/removeCartItem', 'CartController@removeCartItem');
Route::post('/cart/incrementCartItem', 'CartController@incrementCartItem');
Route::post('/cart/decrementCartItem', 'CartController@decrementCartItem');
// Route::post('/cart/apply-coupon', 'CartController@applyCoupon');

Route::get('/checkout', 'CartController@checkout');
Route::post('/checkout', 'CartController@postCheckout');
Route::get('/checkout/done', 'CartController@getDone');
Route::get('/checkout/cancel', 'CartController@getCancel');

Route::get('/p/{slug}', 'ProductController@show');
Route::get('/c/{slug}/{brand}', 'CategoryController@brand');
Route::get('/c/{slug}', 'CategoryController@show');
Route::get('/brands', 'BrandController@index');
Route::get('/brands/{slug}', 'BrandController@show');


Route::middleware(['auth'])->prefix('admin')->group(function(){
    Route::get('/', 'Admin\AdminController@index');

    Route::resource('/products', 'Admin\ProductController', ['as' => 'admin']);
    Route::resource('/product_images', 'Admin\ProductImageController', ['as' => 'admin']);

    Route::prefix('articles')->group(function(){
        Route::get('/', 'Admin\ArticleController@index');
        Route::get('/create', 'Admin\ArticleController@create');
        Route::post('/store', 'Admin\ArticleController@store');
        Route::get('/edit/{article}', 'Admin\ArticleController@edit');
        Route::post('/update/{article}', 'Admin\ArticleController@update');
        Route::get('/delete/{article}', 'Admin\ArticleController@delete');
    });
});
