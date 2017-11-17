<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'], function(){

    Route::group(['prefix'=>'categories'], function(){
        Route::get('/', 'AdminCategoriesController@index');
    });
    Route::get('category/{category}', ['as'=>'admin.category', function (\CodeCommerce\Category $category){
        return $category->description;
    }]);

    Route::group(['prefix'=>'products'], function(){
        Route::get('/', 'AdminProductsController@index');
    });
    Route::get('products/{product}', ['as'=>'admin.product', function (\CodeCommerce\Product $product){
        return $product->description;
    }]);

});



Route::pattern('id', '[0,9]+');