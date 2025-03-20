<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::prefix('admin')->group(function () {
//     Route::get('/', [DashboardController::class, 'index']);
//     Route::get('/products', [ProductController::class, 'index']);
//     Route::get('/products/create', [ProductController::class, 'create']);
// });



Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
});
