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
    return view('welcome');
});

Route::group(['prefix' => 'FirstFashion'], function (){
    Route::group(
        [
            'prefix' => 'admin',
            'middleware' => ['manual.auth']
        ],
    function () {
        Route::get('', [
            'uses' => 'FirstFashionAdminController@index',
            'as' => 'FirstFashion.index'
        ]);
        Route::get('customer_manager', [
            'uses' => 'FirstFashionCustomerController@customer_manager',
            'as' => 'FirstFashion.customer_manager'
        ]);
        // customer details
        Route::get('showCustomer/{cus_id}', [
            'uses' => 'FirstFashionCustomerController@showCustomer',
            'as' => 'FirstFashion.showCustomer'
        ]);
        // update customer
        Route::get('updateCustomer/{cus_id}', [
            'uses' => 'FirstFashionCustomerController@editCustomer',
            'as' => 'FirstFashion.editCustomer'
        ]);
        Route::post('updateCustomer/{cus_id}', [
            'uses' => 'FirstFashionCustomerController@updateCustomer',
            'as' => 'FirstFashion.updateCustomer'
        ]);
        //delete customer
        Route::get('deleteCustomer/{cus_id}', [
            'uses' => 'FirstFashionCustomerController@confirmCustomer',
            'as' => 'FirstFashion.confirmCustomer'
        ]);
        Route::post('deleteCustomer/{cus_id}', [
            'uses' => 'FirstFashionCustomerController@destroyCustomer',
            'as' => 'FirstFashion.destroyCustomer'
        ]);



        Route::get('admin_manager', [
            'uses' => 'FirstFashionAdminController@admin_manager',
            'as' => 'FirstFashion.admin_manager'
        ]);

        Route::get('showAdmin/{ad_id}', [
            'uses' => 'FirstFashionAdminController@showAdmin',
            'as' => 'FirstFashion.showAdmin'
        ]);
        //update admin
        Route::get('updateAdmin/{ad_id}', [
            'uses' => 'FirstFashionAdminController@editAdmin',
            'as' => 'FirstFashion.editAdmin'
        ]);
        Route::post('updateAdmin/{ad_id}', [
            'uses' => 'FirstFashionAdminController@updateAdmin',
            'as' => 'FirstFashion.updateAdmin'
        ]);

        Route::get('deleteAdmin/{ad_id}', [
            'uses' => 'FirstFashionAdminController@confirmAdmin',
            'as' => 'FirstFashion.confirmAdmin'
        ]);
        Route::post('deleteAdmin/{ad_id}', [
            'uses' => 'FirstFashionAdminController@destroyAdmin',
            'as' => 'FirstFashion.destroyAdmin'
        ]);

        //Route Category
        // category manager
        Route::get('category_manager', [
            'uses' => 'FirstFashionCategoryController@category_manager',
            'as' => 'FirstFashion.category_manager'
        ]);
        // category details
        Route::get('showCategory/{cat_id}', [
            'uses' => 'FirstFashionCategoryController@showCategory',
            'as' => 'FirstFashion.showCategory'
        ]);
        // add category
        Route::get('createCategory', [
            'uses' => 'FirstFashionCategoryController@createCategory',
            'as' => 'FirstFashion.createCategory'
        ]);
        Route::post('createCategory', [
            'uses' => 'FirstFashionCategoryController@storeCategory',
            'as' => 'FirstFashion.storeCategory'
        ]);
        // update category
        Route::get('updateCategory/{cat_id}', [
            'uses' => 'FirstFashionCategoryController@editCategory',
            'as' => 'FirstFashion.editCategory'
        ]);
        Route::post('updateCategory/{cat_id}', [
            'uses' => 'FirstFashionCategoryController@updateCategory',
            'as' => 'FirstFashion.updateCategory'
        ]);
        //delete category
        Route::get('deleteCategory/{cat_id}', [
            'uses' => 'FirstFashionCategoryController@confirmCategory',
            'as' => 'FirstFashion.confirmCategory'
        ]);
        Route::post('deleteCategory/{cat_id}', [
            'uses' => 'FirstFashionCategoryController@destroyCategory',
            'as' => 'FirstFashion.destroyCategory'
        ]);
        //End Route Category

        // Shirt manager
        Route::get('shirt_manager', [
            'uses' => 'FirstFashionShirtController@shirt_manager',
            'as' => 'FirstFashion.shirt_manager'
        ]);
        // category shirt
        Route::get('showShirt/{shirt_id}', [
            'uses' => 'FirstFashionShirtController@showShirt',
            'as' => 'FirstFashion.showShirt'
        ]);
        // add shirt
        Route::get('createShirt', [
            'uses' => 'FirstFashionShirtController@createShirt',
            'as' => 'FirstFashion.createShirt'
        ]);
        Route::post('createShirt', [
            'uses' => 'FirstFashionShirtController@storeShirt',
            'as' => 'FirstFashion.storeShirt'
        ]);
        // update shirt
        Route::get('updateShirt/{shirt_id}', [
            'uses' => 'FirstFashionShirtController@editShirt',
            'as' => 'FirstFashion.editShirt'
        ]);
        Route::post('updateShirt/{shirt_id}', [
            'uses' => 'FirstFashionShirtController@updateShirt',
            'as' => 'FirstFashion.updateShirt'
        ]);
        //delete shirt
        Route::get('deleteShirt/{shirt_id}', [
            'uses' => 'FirstFashionShirtController@confirmShirt',
            'as' => 'FirstFashion.confirmShirt'
        ]);
        Route::post('deleteShirt/{shirt_id}', [
            'uses' => 'FirstFashionShirtController@destroyShirt',
            'as' => 'FirstFashion.destroyShirt'
        ]);
    });
    Route::get('registerCustomer', [
        'uses' => 'FirstFashionCustomerController@registerCustomer',
        'as' => 'FirstFashion.registerCustomer'
    ]);
    Route::post('registerCustomer',[
        'uses' => 'FirstFashionCustomerController@storeCustomer',
        'as' => 'FirstFashion.storeCustomer'
    ]);

    Route::get('', [
        'uses' => 'FirstFashionHomepageController@homepage',
        'as' => 'FirstFashion.homepage'
    ]);

    Route::get('ShirtbyCat/{cat_id}',[
        'uses' => 'FirstFashionHomepageController@getCategories',
        'as' => 'FirstFashion.ShirtbyCat'
    ]);

    Route::get('allShirt',[
        'uses' => 'FirstFashionHomepageController@allShirt',
        'as' => 'FirstFashion.allShirt'
    ]);
    Route::get('', [
        'uses' => 'FirstFashionHomepageController@homepage',
        'as' => 'FirstFashion.homepage'
    ]);

    Route::get('detailShirt/{shirt_id}', [
        'uses' => 'FirstFashionHomepageController@detailShirt',
        'as' => 'FirstFashion.detailShirt'
    ]);
    Route::get('search',[
        'uses' => 'FirstFashionHomepageController@search',
        'as' => 'FirstFashion.search'
    ]);
    Route::get('gallery',[
        'uses' => 'FirstFashionHomepageController@gallery',
        'as'=>'FirstFashion.gallery'
    ]);
    Route::get('download',[
        'uses' =>'FirstFashionHomepageController@download',
        'as'=>'FirstFashion.download'
    ]);

});

Route::group(['prefix' => 'auth'], function (){
    Route::get('login',[
        'uses' => 'ManualAuthController@ask',
        'as' => 'auth.ask'
    ]);

    Route::post('login',[
        'uses' => 'ManualAuthController@signin',
        'as' => 'auth.signin'
    ]);

    Route::get('logout',[
        'uses' => 'ManualAuthController@signout',
        'as' => 'auth.signout'
    ]);
});
