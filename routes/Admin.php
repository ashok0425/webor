<?php
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

// Admin Auth 
Route::middleware('guest:admin')->group(function(){
    Route::get('/login','Admin\AuthController@index')->name('admin.logins');
    Route::post('/login','Admin\AuthController@store')->name('admin.login');
});
    
// Note :: active,deactive,destroy,method are place in Traits/status file 



//admin guard middleware
Route::middleware('auth:admin')->name('admin.')->group(function () {

    // Admin profile 
    Route::get('/dashboard','Admin\AuthController@show')->name('dashboard');
    Route::get('/profile','Admin\AuthController@profile')->name('profile');
    Route::post('/update-profile','Admin\AuthController@update')->name('profile.update');
    Route::post('/change-password','Admin\AuthController@changePassword')->name('password');
    Route::post('/logout','Admin\AuthController@destory')->name('logout');


// category 

Route::get('/category','backend\CategoryController@index')->name('category');
Route::get('/category/create','backend\CategoryController@create')->name('category.create');
Route::post('/category/store','backend\CategoryController@store')->name('category.store');
Route::get('/category/edit/{id}/','backend\CategoryController@edit')->name('category.edit');
Route::post('/category/edit/','backend\CategoryController@update')->name('category.update');
Route::get('/category/show/{id}','backend\CategoryController@show')->name('category.show');
Route::get('/category/active/{id}/{table}','backend\CategoryController@active')->name('category.active');
Route::get('/category/deactive/{id}/{table}','backend\CategoryController@deactive')->name('category.deactive');
Route::get('/category/delete/{id}/{table}','backend\CategoryController@destroy')->name('category.delete');


// Subcategory 

Route::get('/subcategory','backend\SubcategoryController@index')->name('subcategory');
Route::get('/subcategory/create','backend\SubcategoryController@create')->name('subcategory.create');
Route::post('/subcategory/store','backend\SubcategoryController@store')->name('subcategory.store');
Route::get('/subcategory/edit/{id}/','backend\SubcategoryController@edit')->name('subcategory.edit');
Route::post('/subcategory/edit/','backend\SubcategoryController@update')->name('subcategory.update');
Route::get('/subcategory/show/{id}','backend\SubcategoryController@show')->name('subcategory.show');
Route::get('/subcategory/active/{id}/{table}','backend\SubcategoryController@active')->name('subcategory.active');
Route::get('/subcategory/deactive/{id}/{table}','backend\SubcategoryController@deactive')->name('subcategory.deactive');
Route::get('/subcategory/delete/{id}/{table}','backend\SubcategoryController@destroy')->name('subcategory.delete');




// Model 

Route::get('/model','backend\ModalController@index')->name('model');
Route::get('/model/create','backend\ModalController@create')->name('model.create');
Route::post('/model/store','backend\ModalController@store')->name('model.store');
Route::get('/model/edit/{id}/','backend\ModalController@edit')->name('model.edit');
Route::post('/model/edit/','backend\ModalController@update')->name('model.update');
Route::get('/model/show/{id}','backend\ModalController@show')->name('model.show');
Route::get('/model/active/{id}/{table}','backend\ModalController@active')->name('model.active');
Route::get('/model/deactive/{id}/{table}','backend\ModalController@deactive')->name('model.deactive');
Route::get('/model/delete/{id}/{table}','backend\ModalController@destroy')->name('model.delete');




// Part 

Route::get('/part','backend\PartController@index')->name('part');
Route::get('/part/create','backend\PartController@create')->name('part.create');
Route::post('/part/store','backend\PartController@store')->name('part.store');
Route::get('/part/edit/{id}/','backend\PartController@edit')->name('part.edit');
Route::post('/part/edit/','backend\PartController@update')->name('part.update');
Route::get('/part/show/{id}','backend\PartController@show')->name('part.show');
Route::get('/part/active/{id}/{table}','backend\PartController@active')->name('part.active');
Route::get('/part/deactive/{id}/{table}','backend\PartController@deactive')->name('part.deactive');
Route::get('/part/delete/{id}/{table}','backend\PartController@destroy')->name('part.delete');



// Product 

Route::get('/product','backend\ProductController@index')->name('product');
Route::get('/deactiveproduct','backend\ProductController@deactiveproduct')->name('deactiveproduct');
Route::get('/product/create','backend\ProductController@create')->name('product.create');
Route::post('/product/store','backend\ProductController@store')->name('product.store');
Route::get('/product/edit/{id}/','backend\ProductController@edit')->name('product.edit');
Route::post('/product/edit/','backend\ProductController@update')->name('product.update');
Route::get('/product/show/{id}','backend\ProductController@show')->name('product.show');
Route::get('/product/active/{id}/{table}','backend\ProductController@active')->name('product.active');
Route::get('/product/deactive/{id}/{table}','backend\ProductController@deactive')->name('product.deactive');
Route::get('/product/delete/{id}/{table}','backend\ProductController@destroy')->name('product.delete');
Route::get('/product/attribute/{id}/','backend\ProductController@addAttribute')->name('product.attribute');

// Product Color
Route::get('/productcolor/create/{id}','backend\ProductcolorController@create')->name('color.create');
Route::post('/productcolor/store','backend\ProductcolorController@store')->name('color.store');
Route::get('/productcolor/edit/{id}/','backend\ProductcolorController@edit')->name('color.edit');
Route::post('/productcolor/edit/','backend\ProductcolorController@update')->name('color.update');
Route::get('/product/productcolor/{id}/{table}','backend\ProductcolorController@destroy')->name('color.delete');

// Product variation
Route::get('/productvariation/create/{id}','backend\ProductvariationController@create')->name('variation.create');
Route::post('/productvariation/store','backend\ProductvariationController@store')->name('variation.store');
Route::get('/productvariation/edit/{id}/','backend\ProductvariationController@edit')->name('variation.edit');
Route::post('/productvariation/edit/','backend\ProductvariationController@update')->name('variation.update');
Route::get('/product/productvariation/{id}/{table}','backend\ProductvariationController@destroy')->name('variation.delete');


// coupon
Route::get('/coupon','backend\CouponController@index')->name('coupon');
Route::get('/coupon/create','backend\CouponController@create')->name('coupon.create');
Route::post('/coupon/store','backend\CouponController@store')->name('coupon.store');
Route::get('/coupon/edit/{id}','backend\CouponController@edit')->name('coupon.edit');
Route::post('/coupon/update','backend\CouponController@update')->name('coupon.update');
Route::get('/coupon/show/{id}','backend\CouponController@show')->name('coupon.show');
Route::get('/coupon/active/{id}/{table}','backend\CouponController@active')->name('coupon.active');
Route::get('/coupon/deactive/{id}/{table}','backend\CouponController@deactive')->name('coupon.deactive');
Route::get('/coupon/delete/{id}/{table}','backend\CouponController@destroy')->name('coupon.delete');


// Blog Catgory
Route::get('/blogcategory','backend\BlogcategoryController@index')->name('blogcategory');
Route::get('/blogcategory/create','backend\BlogcategoryController@create')->name('blogcategory.create');
Route::post('/blogcategory/store','backend\BlogcategoryController@store')->name('blogcategory.store');
Route::get('/blogcategory/edit/{id}','backend\BlogcategoryController@edit')->name('blogcategory.edit');
Route::post('/blogcategory/update','backend\BlogcategoryController@update')->name('blogcategory.update');
Route::get('/blogcategory/show/{id}','backend\BlogcategoryController@show')->name('blogcategory.show');
Route::get('/blogcategory/active/{id}/{table}','backend\BlogcategoryController@active')->name('blogcategory.active');
Route::get('/blogcategory/deactive/{id}/{table}','backend\BlogcategoryController@deactive')->name('blogcategory.deactive');
Route::get('/blogcategory/delete/{id}/{table}','backend\BlogcategoryController@destroy')->name('blogcategory.delete');


// Blog 
Route::get('/blog','backend\BlogController@index')->name('blog');
Route::get('/blog/create','backend\BlogController@create')->name('blog.create');
Route::post('/blog/store','backend\BlogController@store')->name('blog.store');
Route::get('/blog/edit/{id}','backend\BlogController@edit')->name('blog.edit');
Route::post('/blog/update','backend\BlogController@update')->name('blog.update');
Route::get('/blog/show/{id}','backend\BlogController@show')->name('blog.show');
Route::get('/blog/active/{id}/{table}','backend\BlogController@active')->name('blog.active');
Route::get('/blog/deactive/{id}/{table}','backend\BlogController@deactive')->name('blog.deactive');
Route::get('/blog/delete/{id}/{table}','backend\BlogController@destroy')->name('blog.delete');

});

// getting subcategory,modal,part using ajax 
Route::get('loaddata/{table}/{id}/{option?}','backend\ModalController@loadData');
