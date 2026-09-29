<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// Route::get('/hello', function () {
//     return 'Hello Badsha, How are you?';
// });


Route::get('/Products', [ProductController::class, 'index']);