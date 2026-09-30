<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return 'Welcome to the Product Management System!';
});

Route::get('/Products', [ProductController::class, 'index']);
Route::get('/Products/create', [ProductController::class, 'create']);
Route::post('/Products/store', [ProductController::class, 'store']);
Route::get('/Products/{product}/edit', [ProductController::class, 'edit']);
Route::put('/Products/{product}', [ProductController::class, 'update']);
Route::delete('/products/{product}', [ProductController::class, 'destroy']);

