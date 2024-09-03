<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;






Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
