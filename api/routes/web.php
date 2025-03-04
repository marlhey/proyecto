<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DiscountsController;
use App\Http\Controllers\PaymentsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-email',[UsersController::class,'sendEmail']);
Route::get('/admin',function(){ return view('admin.index');});
Route::get('/admin/products',[ProductsController::class,'viewProduct']);
Route::delete('/admin/products/{id}',[ProductsController::class,'destroy'])->name('products.destroy');
Route::get('/admin/categories',[CategoriesController::class,'viewCategory']);
Route::delete('/admin/categories/{id}',[CategoriesController::class,'destroy'])->name('categories.destroy');
Route::get('/admin/discounts',[DiscountsController::class,'viewDiscount']);
Route::delete('/admin/discounts/{id}',[DiscountsController::class,'destroy'])->name('discounts.destroy');
Route::get('/admin/payments',[PaymentsController::class,'viewPayments']);
Route::get('/admin/sales',function(){ return view('admin.sales');});
Route::get('/admin/shipments',function(){ return view('admin.shipments');});
Route::get('/admin/customers',function(){ return view('admin.customers');});
Route::get('/admin/suppliers',function(){ return view('admin.suppliers');});
Route::get('/admin/users',function(){ return view('admin.users');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
