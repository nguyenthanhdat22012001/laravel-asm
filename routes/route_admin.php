<?php
//BACKEND

	//upload images ckeditor
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

Route::group(['namespace' => 'backend','prefix' => 'admin'],function(){
    //home
    Route::get('','homeController@index')->name('get_backend.home');
    //category
    Route::prefix('danh-muc')->group(function(){
        Route::get('','categoryController@index')->name('get_backend.category.index');

        Route::get('them-moi','categoryController@create')->name('get_backend.category.create');
        Route::post('them-moi','categoryController@store')->name('get_backend.category.store');

        Route::get('cap-nhat/{id}','categoryController@edit')->name('get_backend.category.edit');
        Route::post('cap-nhat/{id}','categoryController@update')->name('get_backend.category.update');

        Route::get('xoa/{id}','categoryController@delete')->name('get_backend.category.delete');
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
   
});