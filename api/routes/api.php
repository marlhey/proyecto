<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\IndexController;
use App\Http\Controllers\Api\SalesController;
use App\Http\Controllers\Api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('products',ProductsController::class);
Route::resource('index',IndexController::class);
Route::resource('sales',SalesController::class);

//localhost:8000/api/login =>POST{ "email":"JuanaP1@gmail.com", "password":"1111" }
Route::post('/login', [AuthController::class, 'login']);

///api/products