<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/',[ProductController::class, 'index']);
Route::get('/create', [ProductController::class, 'create']);
Route::POST('/store', [ProductController::class, 'store']);
Route::get('/show/{id}', [ProductController::class, 'show']);
Route::get('/edit/{id}', [ProductController::class, 'edit']);
Route::POST('/update/{id}', [ProductController::class, 'update']);
Route::post('/destroy/{id}', [ProductController::class, 'destroy']);

