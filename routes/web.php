<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/',[ProductController::class, 'index']);
Route::get('/create', [ProductController::class, 'create']);
Route::POST('/store', [ProductController::class, 'store']);
