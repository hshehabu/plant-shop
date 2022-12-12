<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductControllerCopy;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


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


Auth::routes();
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:cache');

    return '<h1>Cache facade value cleared</h1>';
});
Route::get('/clear-view', function() {
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('view:cache');
  

    return '<h1>view cleared</h1>';
});
Route::get('/user', ' App\Http\Controllers\ProductControllerCopy@auth;')->name('user')->middleware('user');
Route::get('/out',function(){
    return view('welcome');
});
Route::middleware(['admin'])->group(function(){
    Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin');
    Route::get('/new-orders', 'App\Http\Controllers\AdminController@new_orders');
    Route::get('/home', 'App\Http\Controllers\HomeController@index');
    Route::get('/all-orders',[AdminController::class,'orders']);
    Route::get('/completed-orders',[AdminController::class,'completed']);
    Route::put('update-order/{id}',[AdminController::class,'update']);
    Route::get('view/{id}/order',[AdminController::class,'view']);
    Route::post('update', 'App\Http\Controllers\HomeController@update')->name('update');
    Route::get('/setting', [App\Http\Controllers\HomeController::class, 'setting']);
    Route::resource('create','App\Http\Controllers\ProductController');
    Route::resource('category','App\Http\Controllers\CategoryController');
    Route::get('add-category','App\Http\Controllers\CategoryController@create');
    Route::get('product', [App\Http\Controllers\ProductsController::class, 'index']);
    Route::get('detail/{id}', [App\Http\Controllers\ProductsController::class, 'detail']);
    Route::get('add_sales',[App\Http\Controllers\SalesController::class,'add_sales']);
    Route::get('post-view/{id}',[ProductsController::class, 'view'])->name('postview');
    Route::delete('remove_item/{id}','App\Http\Controllers\ProductController@destroy')->name('remove');
    Route::get('edit_item/{id}','App\Http\Controllers\ProductController@edit');
    Route::post('update_item/{id}','App\Http\Controllers\ProductController@update');
    Route::post('sales', 'App\Http\Controllers\SalesController@sales')->name('add-sales');
    Route::get('/manage', 'App\Http\Controllers\SalesController@manage');
    Route::delete('remove/{id}','App\Http\Controllers\SalesController@destroy')->name('remove');
    Route::get('edit/{id}','App\Http\Controllers\SalesController@edit');
    Route::post('update/{id}','App\Http\Controllers\SalesController@update');
    

});
Route::middleware(['sales'])->group(function(){
    Route::get('/sales', 'App\Http\Controllers\SalesController@index')->name('sales');
    Route::get('/dash', 'App\Http\Controllers\SalesController@home');
     Route::get('completed',[SalesController::class,'completed']);
    Route::get('/pending',[SalesController::class,'new_orders']);
    Route::get('orders',[SalesController::class,'orders']);
    Route::get('view/{id}',[SalesController::class,'view']);
    Route::get('products',[SalesController::class,'products']);
    Route::get('search', [SalesController::class, 'search']);
    Route::get('/logout',function(){
        return view('welcome');
});
});

Route::get('/log', function () {
    return view('login');

});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/log');

});
Route::view('reg','registercopy');
// Route
Route::post("log",[UserController::class,'log']);
Route::post("reg",[UserController::class,'reg']);
Route::get('super', function () {
    return view('super');
});
Route::get("/",[ProductControllerCopy::class,'index']);
// Route::get("/category",[ProductControllerCopy::class,'category']);
Route::get("product/{id}",[ProductControllerCopy::class,'detail']);
Route::post("add_to_cart",[ProductControllerCopy::class,'addToCart']);
Route::get("cartlist",[ProductControllerCopy::class,'CartList']);
Route::get("removecart/{id}",[ProductControllerCopy::class,'removeCart']);
Route::get("ordernow",[ProductControllerCopy::class,'orderNow']);
Route::post("orderplace",[ProductControllerCopy::class,'orderPlace']);
Route::get("myorders",[ProductControllerCopy::class,'myOrders']);
Route::post('update-cart', [ProductControllerCopy::class,'updatecart']);
Route::get("view-order/{id}",[ProductControllerCopy::class,'view']);
Route::get("view-category/{name}",[ProductControllerCopy::class,'viewCategory']);
Route::get("/shop",[ProductControllerCopy::class,'shop']);
Route::get("/about-us",[UserController::class,'about']);
Route::get("/contact-us",[UserController::class,'contact']);
Route::get("/search-product",[UserController::class,'search']);


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


// Route::get('/redirect',[App\Http\Controllers\HomeController::class,"redirect"]);






