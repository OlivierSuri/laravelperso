<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'gohomepage']);

Route::get('/product', [ProductController::class, 'goproducts']);

Route::get('/product/{id}', [ProductController::class, 'goproduct']);

Route::get('/cart', [CartController::class, 'gocart']
);
