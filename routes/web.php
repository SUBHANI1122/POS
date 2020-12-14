<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::resources([
        'general/users' => 'general\UserController',
        'general/suppliers' => 'general\SupplierController',
        'inventory/products' => 'inventory\ProductController',
        'general/clients' => 'general\ClientController',
        'inventory/categories' => 'inventory\CategoryController',
        'administrator/accounts' => 'administrator\AccountController',
    ]);
});

Route::get('sale','sale\SaleController@index');
Route::get('sale/create','sale\SaleController@create');
Route::post('sale/store','Sale\SaleController@store');
Route::get('sale/get_product','Sale\SaleController@add_product_to_sale');
// Route::post('edit_state/{id}', 'General\StateController@edit');
// Route::post('update_state','General\StateController@update');
Route::get('sale/delete/{id}','Sale\SaleController@destroy');
