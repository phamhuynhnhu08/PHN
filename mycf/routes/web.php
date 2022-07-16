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



//--User
Route::get('/','App\Http\Controllers\HomeController@index' );
Route::get('/trang-chu','App\Http\Controllers\HomeController@index')->name('trang-chu');
Route::post('/tim-kiem','App\Http\Controllers\HomeController@search');

Route::get('/about','App\Http\Controllers\AboutController@about')->name('about');
Route::get('/contact','App\Http\Controllers\ContactController@contact')->name('contact');
Route::get('/shopping','App\Http\Controllers\ProductController@product')->name('product');

//Checkout
Route::get('/login-checkout','App\Http\Controllers\CheckoutController@login_checkout');
Route::get('/login-checkout1','App\Http\Controllers\CheckoutController@login_checkout1');
Route::get('/logout-checkout','App\Http\Controllers\CheckoutController@logout_checkout');

Route::post('/add-customer','App\Http\Controllers\CheckoutController@add_customer');
Route::post('/order-place','App\Http\Controllers\CheckoutController@order_place');
Route::post('/login-customer','App\Http\Controllers\CheckoutController@login_customer');
Route::get('/show_checkout','App\Http\Controllers\CheckoutController@show_checkout');
Route::get('/payment','App\Http\Controllers\CheckoutController@payment');


//profile
Route::get('/personal-in4','App\Http\Controllers\ProfileController@personal_in4');
//Route::post('/update-in4/{customer_id}','App\Http\Controllers\ProfileController@update_in4');

Route::post('/save-checkout-customer','App\Http\Controllers\CheckoutController@save_checkout_customer');


//Hien thi danh muc, chi tiet san pham
Route::get('/danh-muc-san-pham/{slug_category_product}','App\Http\Controllers\CategoryProduct@show_category_home');
Route::get('/chi-tiet-san-pham/{product_slug}','App\Http\Controllers\ProductController@details_product');

//Cart
Route::post('/update-cart-quantity','App\Http\Controllers\CartController@update_cart_quantity'); //cap nhat so luong trong gio hang
Route::post('/save-cart','App\Http\Controllers\CartController@save_cart');
Route::get('/show-cart','App\Http\Controllers\CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','App\Http\Controllers\CartController@delete_to_cart');



//--Admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');

Route::get('/dashboard1','App\Http\Controllers\AdminController@thongke');
Route::get('/xinchao','App\Http\Controllers\AdminController@hi');


// Route::get('/logout','App\Http\Controllers\AdminController@logout');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');
Route::get('/logout', 'App\Http\Controllers\UserRolesController@logout');

//Product
Route::get('/add-product','App\Http\Controllers\ProductController@add_product');
Route::get('/edit-product/{product_id}','App\Http\Controllers\ProductController@edit_product');
Route::get('/delete-product/{product_id}','App\Http\Controllers\ProductController@delete_product');
Route::get('/all-product','App\Http\Controllers\ProductController@all_product');

Route::get('/unactive-product/{product_id}','App\Http\Controllers\ProductController@unactive_product');
Route::get('/active-product/{product_id}','App\Http\Controllers\ProductController@active_product');

Route::post('/save-product','App\Http\Controllers\ProductController@save_product');
Route::post('/update-product/{product_id}','App\Http\Controllers\ProductController@update_product');

//Category Product
Route::get('/add-category-product','App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('/edit-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@delete_category_product');
Route::get('/all-category-product','App\Http\Controllers\CategoryProduct@all_category_product');

Route::get('/unactive-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@active_category_product');


Route::post('/save-category-product','App\Http\Controllers\CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@update_category_product');

//Order
Route::get('/manage-order','App\Http\Controllers\CheckoutController@manage_order');
Route::get('/view-order/{orderId}','App\Http\Controllers\CheckoutController@view_order');
Route::get('/delete_order/{orderId}','App\Http\Controllers\CheckoutController@delete_order');
Route::post('/update-order-qty','App\Http\Controllers\CheckoutController@update_order_qty');


//Authentication roles
Route::get('/register-auth','App\Http\Controllers\AuthController@register_auth');
Route::post('/dangky','App\Http\Controllers\AuthController@register');
//register-auth



Auth::routes();


//Quản lí nhân viên, users
Route::get('/create-spatie/{admin_id}','App\Http\Controllers\UserRolesController@create');
Route::get('/add-user','App\Http\Controllers\UserRolesController@add_user');
Route::post('/post-user','App\Http\Controllers\UserRolesController@post_user');
//Route::get('/create-permission/{admin_id}','App\Http\Controllers\UserRolesController@create_permission');
Route::get('/index-spatie','App\Http\Controllers\UserRolesController@index');
Route::post('/assign-role/{admin_id}','App\Http\Controllers\UserRolesController@assign_role');
Route::post('/assign-permission/{admin_id}','App\Http\Controllers\UserRolesController@assign_permission');

//manage users
Route::get('users','App\Http\Controllers\UserRolesController@index');
Route::get('delete_user/{id}','App\Http\Controllers\UserRolesController@delete_user');
Route::get('edit-users/{id}','App\Http\Controllers\UserRolesController@edit_users');

Route::post('/update-users/{id}','App\Http\Controllers\UserRolesController@update_users');




//momo
// Route::post('/momo','App\Http\Controllers\CheckoutController@momo');

//thong ke
// Route::post('/days-order','App\Http\Controllers\CheckoutController@days_order');
// Route::post('/dashboard-filter','App\Http\Controllers\CheckoutController@dashboard_filter');