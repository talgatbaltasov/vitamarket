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
Route::post('/contacts', 'HomeController@postContact');
Route::get('/search', 'HomeController@search');
Route::get('/search/get-variants', 'HomeController@getVariants');

Route::group(['prefix' => 'articles'], function(){
    Route::get('/', 'BlogController@index');
    Route::get('/{slug}', 'BlogController@show');
});

// Route::post('/subscribe', 'HomeController@subscribe');

Route::get('/cart', 'CartController@cart');
Route::post('/cart/add', 'CartController@addToCart');
Route::get('/cart/clearCart', 'CartController@clearCart');
Route::post('/cart/clearCart', 'CartController@clearCart');
Route::post('/cart/removeCartItem', 'CartController@removeCartItem');
Route::post('/cart/incrementCartItem', 'CartController@incrementCartItem');
Route::post('/cart/decrementCartItem', 'CartController@decrementCartItem');
// Route::post('/cart/apply-coupon', 'CartController@applyCoupon');

Route::get('/checkout', 'CheckoutController@index');
Route::post('/checkout', 'CheckoutController@store');
Route::get('/thank-you', 'CheckoutController@thankYou');

Route::get('/vse-tovary', 'CategoryController@all');
Route::get('/tovary-so-skidkoi', 'CategoryController@saleProducts');

Route::get('/p/{slug}', 'ProductController@show');
Route::get('/c/{slug}/{brand}', 'CategoryController@brand');
Route::get('/c/{slug}', 'CategoryController@show');
Route::get('/brands', 'BrandController@index');
Route::get('/brands/{slug}', 'BrandController@show');


Route::middleware(['auth'])->prefix('admin')->group(function(){
    Route::get('/', 'Admin\AdminController@index');

    Route::resource('/articles', 'Admin\ArticleController', ['as' => 'admin']);
    Route::resource('/banners', 'Admin\BannerController', ['as' => 'admin']);
    Route::resource('/brands', 'Admin\BrandController', ['as' => 'admin']);
    Route::resource('/feedbacks', 'Admin\FeedbackController', ['as' => 'admin']);
    Route::resource('/orders', 'Admin\OrderController', ['as' => 'admin']);
    Route::get('/orders/{order}/order-status/{order_status}', 'Admin\OrderController@orderStatus');
    Route::resource('/products', 'Admin\ProductController', ['as' => 'admin']);
    Route::resource('/product_images', 'Admin\ProductImageController', ['as' => 'admin']);
});
