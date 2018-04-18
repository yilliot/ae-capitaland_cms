<?php

Route::group(['prefix' => 'api'], function(){
    Route::get('/version', 'PublishController@getVersion');
    Route::get('/data', 'PublishController@getData');
});

Route::group(['prefix' => 'user-office', 'namespace' => 'UserOffice'
        // , 'middleware' => 'auth'
    ], function(){
    Route::get('/update', 'UserController@getUpdate');
    Route::post('/update', 'UserController@postUpdate');

});
Route::group(['prefix' => 'su-office', 'namespace' => 'SuOffice'
        // , 'middleware' => 'auth'
    ], function(){
    Route::get('/shop/list', 'ShopController@getList');
    Route::get('/shop/create', 'ShopController@getCreate');
    Route::get('/shop/edit/{shop_id}', 'ShopController@getEdit');
    Route::get('/shop/auth/edit/{shop_id}', 'ShopController@getAuthEdit');

});
Route::group(['prefix' => 'shop-office', 'namespace' => 'ShopOffice'
        // , 'middleware' => 'auth'
    ], function(){

    Route::get('/', 'OfficeController@index');

    Route::group(['prefix' => 'smart-screen', 'namespace' => 'SmartScreen'], function(){

        Route::group(['prefix' => 'screen-saver'], function(){
            Route::get('/edit', 'ScreenSaverController@getEdit');
            Route::post('/edit', 'ScreenSaverController@postEdit');
        });

        Route::group(['prefix' => 'photo'], function(){
            Route::get('/list', 'PhotoController@getList');
            Route::get('/create', 'PhotoController@getCreate');
            Route::get('/edit/{id}', 'PhotoController@getEdit');
        });

        Route::group(['prefix' => 'product'], function(){
            Route::get('/list', 'ProductController@getList');
            Route::get('/create', 'ProductController@getCreate');
            Route::get('/edit/{id}', 'ProductController@getEdit');
        });

        Route::group(['prefix' => 'category'], function(){
            Route::get('/list', 'CategoryController@getList');
            Route::get('/create', 'CategoryController@getCreate');
            Route::get('/edit/{id}', 'CategoryController@getEdit');
            Route::get('/details/{id}', 'CategoryController@getDetails');
        });

        Route::group(['prefix' => 'publish'], function(){
            Route::post('/create', 'PublishController@postCreate');
        });

    });

    Route::group(['prefix' => 'ola-lab', 'namespace' => 'OlaLab'], function(){

        Route::group(['prefix' => 'template'], function(){
            Route::get('/list', 'TemplateController@getList');
            Route::get('/create', 'TemplateController@getCreate');
            Route::get('/edit/{id}', 'TemplateController@getEdit');
        });

        Route::group(['prefix' => 'product'], function(){
            Route::get('/list', 'ProductController@getList');
            Route::get('/create', 'ProductController@getCreate');
            Route::get('/edit', 'ProductController@getEdit');
        });

        Route::group(['prefix' => 'publish'], function(){
            Route::post('/create', 'PublishController@postCreate');
        });

    });

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
