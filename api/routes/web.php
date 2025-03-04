<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-email',[UsersController::class,'sendEmail']);
Route::get('/admin',function(){ return view('admin.index');});
Route::get('/admin/products',[ProductsController::class,'viewProduct']);
Route::delete('/admin/products/{id}',[ProductsController::class,'destroy'])->name('products.destroy');
Route::get('/admin/categories',[CategoriesController::class,'viewCategory']);
Route::delete('/admin/categories/{id}',[CategoriesController::class,'destroy'])->name('categories.destroy');

Route::get('/admin/discounts',function(){ return view('admin.discounts');});
Route::get('/admin/payments',function(){ return view('admin.payments');});
Route::get('/admin/sales',function(){ return view('admin.sales');});
Route::get('/admin/shipments',function(){ return view('admin.shipments');});
Route::get('/admin/customers',function(){ return view('admin.customers');});
Route::get('/admin/suppliers',function(){ return view('admin.suppliers');});
Route::get('/admin/users',function(){ return view('admin.users');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
