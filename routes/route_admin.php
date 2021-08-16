<?php

// // ------------------------------register---------------------------------------
// Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');
// Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@storeUser')->name('register');
// //Auth::routes();

// // Route::group(['middleware' => 'auth:admin'], function () {
// // });




//BACKEND
Route::group(['namespace' => 'backend','prefix' => 'admin'],function(){
        // -----------------------------login-----------------------------------------
    Route::get('/login', 'Auth\LoginBackendController@login')->name('get.backend.login');
    Route::post('/login', 'Auth\LoginBackendController@postLogin');
    Route::get('/logout', 'Auth\LoginBackendController@getLogout')->name('get.backend.logout');
        // -----------------------------forget password ------------------------------
    Route::get('forget-password', 'Auth\ForgotPasswordBackendController@getEmail')->name('get.backend.forget-password');
    Route::post('forget-password', 'Auth\ForgotPasswordBackendController@postEmail');

    Route::get('reset-password/{token}', 'Auth\ResetPasswordController@getPassword');
    Route::post('reset-password', 'Auth\ResetPasswordController@updatePassword');
    //home
    Route::get('','homeController@index')->name('get_backend.home')->middleware('admin'); 
    Route::get('returnCategory','homeController@returnCategory')->name('get_backend.home.returnCategory');
    Route::get('chartReturnRevenueByMonth','homeController@chartReturnRevenueByMonth')->name('get_backend.home.chartReturnRevenueByMonth');
    Route::get('chartReturnProductHotTrend','homeController@chartReturnProductHotTrend')->name('get_backend.home.chartReturnProductHotTrend');
    //category
    Route::prefix('danh-muc')->group(function(){
        Route::get('','categoryController@index')->name('get_backend.category.index');

        Route::get('them-moi','categoryController@create')->name('get_backend.category.create');
        Route::post('them-moi','categoryController@store')->name('get_backend.category.store');

        Route::get('cap-nhat/{id}','categoryController@edit')->name('get_backend.category.edit');
        Route::post('cap-nhat/{id}','categoryController@update')->name('get_backend.category.update');

        Route::get('xoa/{id}','categoryController@delete')->name('get_backend.category.delete');
    });
         //category child
         Route::prefix('danh-muc-con')->group(function(){
            Route::get('','categoryChildController@index')->name('get_backend.categoryChild.index');
    
            Route::get('them-moi','categoryChildController@create')->name('get_backend.categoryChild.create');
            Route::post('them-moi','categoryChildController@store')->name('get_backend.categoryChild.store');
    
            Route::get('cap-nhat/{id}','categoryChildController@edit')->name('get_backend.categoryChild.edit');
            Route::post('cap-nhat/{id}','categoryChildController@update')->name('get_backend.categoryChild.update');
    
            Route::get('xoa/{id}','categoryChildController@delete')->name('get_backend.categoryChild.delete');
        });
     //tag
     Route::prefix('tag')->group(function(){
        Route::get('','tagController@index')->name('get_backend.tag.index');

        Route::get('them-moi','tagController@create')->name('get_backend.tag.create');
        Route::post('them-moi','tagController@store')->name('get_backend.tag.store');

        Route::get('cap-nhat/{id}','tagController@edit')->name('get_backend.tag.edit');
        Route::post('cap-nhat/{id}','tagController@update')->name('get_backend.tag.update');

        Route::get('xoa/{id}','tagController@delete')->name('get_backend.tag.delete');
    });
     //category blog
     Route::prefix('danh-muc-blog')->group(function(){
        Route::get('','categoryBlogController@index')->name('get_backend.categoryBlog.index');

        Route::get('them-moi','categoryBlogController@create')->name('get_backend.categoryBlog.create');
        Route::post('them-moi','categoryBlogController@store')->name('get_backend.categoryBlog.store');

        Route::get('cap-nhat/{id}','categoryBlogController@edit')->name('get_backend.categoryBlog.edit');
        Route::post('cap-nhat/{id}','categoryBlogController@update')->name('get_backend.categoryBlog.update');

        Route::get('xoa/{id}','categoryBlogController@delete')->name('get_backend.categoryBlog.delete');
    });
    //blog
    Route::prefix('blog')->group(function(){
        Route::get('','blogController@index')->name('get_backend.blog.index');

        Route::get('them-moi','blogController@create')->name('get_backend.blog.create');
        Route::post('them-moi','blogController@store')->name('get_backend.blog.store');

        Route::get('cap-nhat/{id}','blogController@edit')->name('get_backend.blog.edit');
        Route::post('cap-nhat/{id}','blogController@update')->name('get_backend.blog.update');

        Route::get('xoa/{id}','blogController@delete')->name('get_backend.blog.delete');
    });
     //discount
     Route::prefix('giam-gia')->group(function(){
        Route::get('','discountController@index')->name('get_backend.discount.index');

        Route::get('them-moi','discountController@create')->name('get_backend.discount.create');
        Route::post('them-moi','discountController@store')->name('get_backend.discount.store');

        Route::get('cap-nhat/{id}','discountController@edit')->name('get_backend.discount.edit');
        Route::post('cap-nhat/{id}','discountController@update')->name('get_backend.discount.update');

        Route::get('xoa/{id}','discountController@delete')->name('get_backend.discount.delete');
    });
     //brand
     Route::prefix('thuong-hieu')->group(function(){
        Route::get('','brandController@index')->name('get_backend.brand.index');

        Route::get('them-moi','brandController@create')->name('get_backend.brand.create');
        Route::post('them-moi','brandController@store')->name('get_backend.brand.store');

        Route::get('cap-nhat/{id}','brandController@edit')->name('get_backend.brand.edit');
        Route::post('cap-nhat/{id}','brandController@update')->name('get_backend.brand.update');

        Route::get('xoa/{id}','brandController@delete')->name('get_backend.brand.delete');
    });
    //product
    Route::prefix('san-pham')->group(function(){
        Route::get('','productController@index')->name('get_backend.product.index');

        Route::get('them-moi','productController@create')->name('get_backend.product.create');
        Route::post('them-moi','productController@store')->name('get_backend.product.store');

        Route::get('cap-nhat/{id}','productController@edit')->name('get_backend.product.edit');
        Route::post('cap-nhat/{id}','productController@update')->name('get_backend.product.update');

        Route::get('xoa/{id}','productController@delete')->name('get_backend.product.delete');
    });
    //payment
    Route::prefix('payment')->group(function(){
        Route::get('','paymentController@index')->name('get_backend.payment.index');

        Route::get('them-moi','paymentController@create')->name('get_backend.payment.create');
        Route::post('them-moi','paymentController@store')->name('get_backend.payment.store');

        Route::get('cap-nhat/{id}','paymentController@edit')->name('get_backend.payment.edit');
        Route::post('cap-nhat/{id}','paymentController@update')->name('get_backend.payment.update');

        Route::get('xoa/{id}','paymentController@delete')->name('get_backend.payment.delete');
    });
    //promotion
    Route::prefix('khuyen-mai')->group(function(){
        Route::get('','promotionController@index')->name('get_backend.promotion.index');

        Route::get('them-moi','promotionController@create')->name('get_backend.promotion.create');
        Route::post('them-moi','promotionController@store')->name('get_backend.promotion.store');

        Route::get('cap-nhat/{id}','promotionController@edit')->name('get_backend.promotion.edit');
        Route::post('cap-nhat/{id}','promotionController@update')->name('get_backend.promotion.update');

        Route::get('xoa/{id}','promotionController@delete')->name('get_backend.promotion.delete');
    });
       //customer
       Route::prefix('khach-hang')->group(function(){
        Route::get('','customerController@index')->name('get_backend.customer.index');

        Route::get('xoa/{id}','customerController@delete')->name('get_backend.customer.delete');
    });
     //account
     Route::prefix('thanh-vien')->group(function(){
        Route::get('','accountController@index')->name('get_backend.account.index');

        Route::get('them-moi','accountController@create')->name('get_backend.account.create');
        Route::post('them-moi','accountController@store')->name('get_backend.account.store');

        Route::get('cap-nhat/{id}','accountController@edit')->name('get_backend.account.edit');
        Route::post('cap-nhat/{id}','accountController@update')->name('get_backend.account.update');

        Route::get('xoa/{id}','accountController@delete')->name('get_backend.account.delete');
    });
        //don hang
        Route::prefix('don-hang')->group(function(){
            Route::get('','orderController@index')->name('get_backend.order.index');
    
            Route::get('chi-tiet/{id}','orderController@detail')->name('get_backend.order.detail');
            Route::post('chi-tiet/{id}','orderController@update')->name('get_backend.order.update');
    
            Route::get('xoa/{id}','orderController@delete')->name('get_backend.order.delete');
            //post comment admin
            Route::post('postCommnetAdmin','orderController@postCommnetAdmin')->name('get_backend.order.postCommnetAdmin');
             //put order status
             Route::post('putOrderStatus','orderController@putOrderStatus')->name('get_backend.order.putOrderStatus');
        });
});