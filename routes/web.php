<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ModalController;
use App\Models\Subscriber;

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



Route::middleware(['auth:', 'verified'])->get('/', function () {
    return view('frontend.index');
})->name('dashboard');


Route::get('/', function () {
    return view('frontend.index');
})->name('/');

//profile
Route::get('/profile','Frontend\AuthController@index')->name('profile');
Route::post('/profile/update','Frontend\AuthController@update')->name('profile.update');
Route::post('/profile/change/password','Frontend\AuthController@changePassword')->name('profile.password');
Route::get('/profile/logout','Frontend\AuthController@destory')->name('profile.logout');





// book appointment 
Route::get('/appointment','Frontend\AppointmentController@index')->name('appointment');
Route::get('loaddata/{table}/{id}/{option1?}/{option2?}','Frontend\AppointmentController@loadData');
Route::get('loadprice/{id}','Frontend\AppointmentController@loadPrice');
Route::post('appointment/store','Frontend\AppointmentController@store')->name('appointment.store');
Route::get('/appointment/list','Frontend\AppointmentController@history')->name('appointment.history');
Route::get('/appointment/list/show/{id}','Frontend\AppointmentController@show')->name('appointment.show');

// product store
Route::get('/store','Frontend\StoreController@allProduct')->name('store');
Route::get('/filterproduct/ajax','Frontend\StoreController@filterProductAjax');


//  contact page
Route::get('/contact','Frontend\ContactController@index')->name('contact');
Route::post('/contact/store','Frontend\ContactController@store')->name('contact.store');

// product detail
Route::get('/product/{id}/{name}','Frontend\ProductController@index')->name('product.detail');
Route::get('/loadprice/{id}','Frontend\ProductController@loadPrice');
Route::get('/loadimage/{id}','Frontend\ProductController@loadImage');
Route::post('/review/store','Frontend\ProductreviewController@store')->name('rating.store');
Route::post('/review/update','Frontend\ProductreviewController@update')->name('rating.update');
Route::get('/review/delete/{id}','Frontend\ProductreviewController@destroy')->name('rating.delete');
Route::get('/review/edit/{id}','Frontend\ProductreviewController@edit')->name('rating.delete');

// Subscriber store 
Route::post('/subscriber/store','Frontend\NewsletterController@store')->name('subscriber.store');





// Add to cart
Route::post('/cart/store','Frontend\CartController@store')->name('addtocart');
Route::get('/cart','Frontend\CartController@index')->name('cart');
Route::get('/cart/delete/{id}','Frontend\CartController@destroy')->name('cart.remove');
Route::post('/cart/update','Frontend\CartController@update')->name('cart.update');
Route::get('/checkout','Frontend\CartController@checkout')->name('checkout');
Route::post('/coupon','Frontend\CartController@coupon')->name('coupon');
Route::get('remove-coupon','Frontend\CartController@CouponRemove')->name('remove-coupon');


// Payment
Route::get('payment','Frontend\CartController@PaymentPage')->name('payment');
Route::post('payment/store','Frontend\PaymentController@store')->name('payment.store');
Route::get('payment/success/{code}','Frontend\PaymentController@success')->name('payment.success');
Route::get('payment/failed/','Frontend\PaymentController@failed')->name('payment.failed');

// order 
Route::get('orders/list/','Frontend\OrderController@index')->name('order');
Route::get('orders/show/{id}','Frontend\OrderController@show')->name('order.show');







// Blog
Route::get('/blog','Frontend\BlogController@index')->name('blog');
// Route::post('/loadprice/{id}','Frontend\BlogController@loadPrice');