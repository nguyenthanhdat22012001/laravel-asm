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
        Route::get('login','loginController@getLogin')->name('get.login');
        Route::post('login','loginController@postLogin');

        Route::get('register','registerController@getRegister')->name('get.register');
        Route::post('register','registerController@postRegister');

        Route::get('logout','logoutController@getLogout')->name('get.logout');
    });
    //trang chu
    Route::get('','homeController@index')->name('get.home');

    //gioi thieu
    Route::get('gioi-thieu','aboutController@index')->name('get.about');
    
    //lien he
    Route::get('lien-he','contactController@index')->name('get.contact');

    //tin tuc
    Route::get('tin-tuc','blogController@index')->name('get.blog');

        //chi tiet tin tuc
        Route::get('tin-tuc/{slug}.html','blogController@detail')->name('get.blogDetail');


    //san pham
    Route::get('san-pham','productController@index')->name('get.product');
    
        //danh mục sản phẩm
        Route::get('san-pham/{slug}','categoryController@index')->name('get.categoryProduct');

        //chi tiết sản phẩm
        Route::get('{slug}.html','productController@detail')->name('get.productDetail');
         
        //search sản phẩm
         Route::get('tim-kiem/key={search}','productController@search')->name('get.productSearch');
    
    //form
    Route::get('dang-nhap','formController@login')->name('get.formLogin');    
    Route::get('dang-ki','formController@resign')->name('get.formResign');  
    
     //order
     Route::get('gio-hang','orderController@cart')->name('get.orderCart');    
     Route::get('thanh-toan','orderController@checkOut')->name('get.orderCheckOut');  
     Route::get('hoan-tat','orderController@success')->name('get.orderSuccess');   
     Route::get('don-hang/key={search}','orderController@search')->name('get.orderSearch');   

});


include "route_admin.php";
