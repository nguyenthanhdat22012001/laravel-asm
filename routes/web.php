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



//FRONTEND
Route::group(['namespace' => 'frontend'],function(){

    Route::group(['namespace' => 'Auth'],function(){

        Route::get('/login','LoginController@getLogin')->name('get.login');
        Route::post('/login','LoginController@postLogin')->name('post.login');
        Route::get('/logout','LoginController@getLogout')->name('get.logout');
        //login google
        Route::get('login-google/{driver}', 'LoginController@redirectToGoogle') ->name('get.login.google');
        Route::get('handleGoogleCallback/{driver}', 'LoginController@handleGoogleCallback');

        Route::get('register','RegisterController@getRegister')->name('get.register');
        Route::post('register','RegisterController@postRegister');

        Route::get('forget-password', 'ForgotPasswordController@getEmail')->name('forget-password');
        Route::post('forget-password', 'ForgotPasswordController@postEmail');

        Route::get('reset-password/{token}', 'ResetPasswordController@getPassword');
        Route::post('reset-password', 'ResetPasswordController@updatePassword')->name('password.update');

        // đổi mật khẩu
        Route::get('thay-doi-mat-khau', 'changePasswordController@index')->name('change.password');
        Route::post('thay-doi-mat-khau', 'changePasswordController@updatePassword');
        
        // thông tin khách hàng 
        Route::get('thong-tin-tai-khoan', 'userController@index')->name('get.myInfor');
        Route::post('thong-tin-tai-khoan', 'userController@updateUser');

          // thông tin đơn hàng
        Route::get('don-hang-cua-toi', 'userController@listOrder')->name('get.myOrder');
        Route::get('chi-tiet-don-hang/{id}', 'userController@OrderDetail')->name('get.myOrderDetail');
     
    });
    //trang chu
    Route::get('','homeController@index')->name('get.home');

    //gioi thieu
    Route::get('gioi-thieu','aboutController@index')->name('get.about');
    
    //lien he
    Route::get('lien-he','contactController@index')->name('get.contact');

    //san pham
    Route::get('san-pham','productController@index')->name('get.product');
    
        //danh mục sản phẩm
        Route::get('san-pham/{slug}','productController@categoryProduct')->name('get.categoryProduct');

        //chi tiết sản phẩm
        Route::get('{slug}.html','productController@detail')->name('get.productDetail');
         
        //search sản phẩm
         Route::get('tim-kiem/key={search}','productController@search')->name('get.productSearch');
        //gui rating va comment
        Route::post('postRatingComment','rating_CommnentController@postRatingComment')->name('postRatingComment');
    
    //tin tức
    Route::get('tin-tuc','blogController@index')->name('get.blog');
    
        //danh mục tin tức
        Route::get('tin-tuc/danh-muc/{slug}','blogController@categoryblog')->name('get.categoryblog');

        //chi tiết tin tức
        Route::get('tin-tuc/{slug}.html','blogController@detail')->name('get.blogDetail');

     //giỏ hàng
     Route::get('gio-hang','orderController@cart')->name('get.orderCart');   
    // xử lí tác vụ giỏ hàng
     Route::get('them-gio-hang/{id}','orderController@addCart')->name('get.addCart'); 
     Route::get('xoa-gio-hang/{id}','orderController@deleteItemCart')->name('get.deleteCart'); 
     Route::get('xoa-page-gio-hang/{id}','orderController@deleteItempageCart')->name('get.deletePageCart');    
     Route::get('update-page-gio-hang/{id}/{quanty}','orderController@updateItemPageCart')->name('get.updatePageCart'); 
     Route::get('update-menu-gio-hang','orderController@updateCartMenu');   

    //thanh toán
     Route::get('thanh-toan','orderController@checkOut')->name('get.orderCheckOut')->middleware('auth'); 
     //thanh toán khi nhận hàng
     Route::post('thanh-toan-khi-nhan-hang','orderController@postCheckOut')->middleware('auth');
     //thanh toán online
     Route::post('thanh-toan-online','orderController@methodPaymentVnpay')->middleware('auth'); 
     Route::post('thanh-toan-vnpay','orderController@postPaymentvnpay')->name('post.checkOutVnpay'); 
     Route::get('vnpay-return','orderController@vnpayReturn')->name('get.vnpayReturn'); 
      

     Route::get('hoan-tat/{id}','orderController@success')->name('get.orderSuccess')->middleware('auth');   
     //tìm kiếm giỏ hàng
     Route::get('don-hang/key={search}','orderController@search')->name('get.orderSearch');   
      

});


include "route_admin.php";


