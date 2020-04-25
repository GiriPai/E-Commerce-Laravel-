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
    return view('welcome');
});


Auth::routes();
//-------------Admin Resources-----------------
Route::prefix('admin')->group(function () {
 	Route::prefix('/sections')->group(function (){

 			Route::get('/types/ajax/{id}','AdminControllers\TypeResource@ajax_type_list')->name('ajax_type_list');

 			Route::get('/classifications/ajax','AdminControllers\ClassificationResource@ajax_classification_list');

 			Route::get('/categories/ajax','AdminControllers\CategoryResource@ajax_category_list');

 			Route::resource('/products', 'AdminControllers\ProductResource');
 			Route::resource('/classifications','AdminControllers\ClassificationResource');
 			Route::resource('/categories','AdminControllers\CategoryResource');
 			Route::resource('/types','AdminControllers\TypeResource');
 			Route::resource('/rating','AdminControllers\RatingResource');


	 });
    Route::resource('/customers','AdminControllers\UserResource');
  	Route::prefix('/sources')->group(function (){

			Route::get('/types/ajax/{id}','AdminControllers\TypeResource@ajax_type_list')->name('ajax_type_list');

			Route::get('/classifications/ajax','AdminControllers\ClassificationResource@ajax_classification_list');

			Route::get('/categories/ajax','AdminControllers\CategoryResource@ajax_category_list');

			Route::resource('/stock','AdminControllers\StockController');
      Route::get('/sales','AdminControllers\StockController@all_sales')->name('all_sales');

 	});
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');



	Route::resource('/home','AdminControllers\AdminResource');
  Route::resource('/Newsfeeds','AdminControllers\FeedController');
  Route::get('/admin-refurbish','CustomerControllers\RefurbishController@admin_index')->name('admin.refurbish.index');
  Route::get('/admin-purchases','CustomerControllers\RefurbishController@admin_purchases')->name('admin.refurbish.purchases');
  Route::get('/admin-view/{id}','CustomerControllers\RefurbishController@admin_show')->name('admin.refurbish.view');


	// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
 	// Route::post('/login', 'Auth\LoginController@login');
    //Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('/logout','Auth\AdminLoginController@adminLogout')->name('admin.logout');

});
//-----------------Admin Resources-------------------


Route::prefix('customer')->group(function () {

  Route::get('/newsfeeds','AdminControllers\FeedController@')->name('Newsfeeds_cust_index');
  Route::get('orders/checkout','CustomerControllers\OrdersController@checkout')->name('customer.checkout');
  Route::resource('/orders','CustomerControllers\OrdersController');
  Route::resource('/cart','CustomerControllers\CartController');
  Route::delete('/cart/delete/{id}','CustomerControllers\CartController@delete_cart')->name('delete_cart');
	Route::resource('/customer_dashboard','CustomerControllers\CustomerResource');
  Route::get('/profile','CustomerControllers\CustomerResource@show')->name('customers.profile.show');
  Route::post('/profile/update','CustomerControllers\CustomerResource@update')->name('customers.profile.update');

	Route::get('/classifications/{id}','CustomerControllers\CustomerResource@classification')->name('classification_page');
	Route::get('/types/{id}','CustomerControllers\CustomerResource@type')->name('type_page');
	Route::get('/categories/{id}','CustomerControllers\CustomerResource@category')->name('category_page');
  Route::get('/details/{id}', 'CustomerControllers\CustomerResource@details')->name('details_view');

  Route::get('/newsfeeds', 'AdminControllers\FeedController@Newsfeeds_cust_index')->name('Newsfeeds_cust_index');

  Route::get('/stock/available/{id}','CustomerControllers\CartController@get_stock_available_for_product')->name('stock_available');

});

Route::resource('/refurbish','CustomerControllers\RefurbishController');





// Route::get('/dashboard',function(){
// 	return view('customers/customer_dashboard');

// });
