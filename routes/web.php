<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Client\ClientHomeController;

Route::get('/form-login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login-post');
Route::get('/form-register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register-post');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


Route::prefix('/')->name('client.')->group(function () {
    Route::get('/', [ClientHomeController::class, 'index'])->name('home');
    Route::get('/shop', [ClientHomeController::class, 'shop'])->name('shop');
    Route::get('/detail', [ClientHomeController::class, 'detail'])->name('detail');
    Route::get('/shopcard', [ClientHomeController::class, 'shopcard'])->name('shopcard');
    Route::get('/checkout', [ClientHomeController::class, 'checkout'])->name('checkout');
});


// Admin Order Routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/{id}/show', [ProductController::class, 'show'])->name('show');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::get('/{id}/create_variants', [ProductController::class, 'createVariants'])->name('create_variants');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        Route::post('/{id}/store_variants', [ProductController::class, 'storeVariants'])->name('store_variants');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::put('/{id}/update', [ProductController::class, 'update'])->name('update');
        Route::delete('/{id}/delete', [ProductController::class, 'destroy'])->name('delete');
        Route::delete('/{id}/delete_variant', [ProductController::class, 'destroyVariants'])->name('delete_variant');
        Route::get('/{id}/edit_variant', [ProductController::class, 'editVariants'])->name('edit_variant');
        Route::put('/{id}/update_variants', [ProductController::class, 'updateVariants'])->name('update_variants');
        Route::post('/{id}/delete', [ProductController::class, 'destroy'])->name('delete');
    });
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');

        Route::get('/{id}/show', [UserController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
        Route::post('/{id}/update', [UserController::class, 'update'])->name('update');
        Route::post('/{id}/delete', [UserController::class, 'destroy'])->name('delete');
        //
    });
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/{id}/update', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{id}/delete', [CategoryController::class, 'destroy'])->name('delete');
    });
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('index');
    });
    // Order routes
    Route::get('/orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('orders.show');
    Route::post('/orders/{id}/update-status', [App\Http\Controllers\Admin\OrderController::class, 'updateStatus'])->name('orders.update_status');
    Route::post('/orders/{id}/handle-return', [App\Http\Controllers\Admin\OrderController::class, 'handleReturn'])->name('orders.handle_return');
    Route::get('/orders/{id}/print', [App\Http\Controllers\Admin\OrderController::class, 'printBill'])->name('orders.print');
});