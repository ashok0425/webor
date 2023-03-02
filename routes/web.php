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
    
    return view('frontend.index');
})->name('/');

Route::get('/about', function () {
    return view('frontend.about.index');
})->name('about');


Route::get('/term', function () {
    return view('frontend.about.term');
})->name('term');


Route::get('/contact', function () {
    
    return view('frontend.contact.index');
})->name('contact.page');

Route::get('/review', function () {
    
    return view('frontend.review.index');
})->name('review');

Route::post('/contact', 'Frontend\ContactController@store')->name('contact');
Route::get('/product-category/{id}', 'Frontend\ProductController@index')->name('store');
Route::get('/product', 'Frontend\ProductController@index')->name('products');
Route::get('/product-detail/{id}', 'Frontend\ProductController@deatil')->name('product.deatil');
Route::post('/subscribe','Frontend\NewsletterController@store')->name('subscribe');
Route::get('/blog', 'Frontend\BlogController@index')->name('blog');
Route::get('/blog/{id}', 'Frontend\BlogController@detail')->name('blog.detail');






