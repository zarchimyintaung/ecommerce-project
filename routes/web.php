<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

route::get('/',[AuthController::class,'home']);

route::get('/dashboard',[AuthController::class,'login_home'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['admin'])->group(function () {
    Route::get('admin/dashboard', [AuthController::class, 'index']);

    // Category
    Route::get('view_category', [CategoryController::class, 'view_category']);
    Route::post('add_category', [CategoryController::class, 'add_category']);
    Route::get('edit_category/{id}', [CategoryController::class, 'edit_category']);
    Route::post('update_category/{id}', [CategoryController::class, 'update_category']);
    Route::get('delete_category/{id}', [CategoryController::class, 'delete_category']);

    // Category
    Route::get('add_product', [ProductController::class, 'add_product']);
    Route::post('upload_product', [ProductController::class, 'upload_product']);
    Route::get('view_product', [ProductController::class, 'view_product']);
    Route::get('update_product/{id}', [ProductController::class, 'update_product']);
    Route::post('edit_product/{id}', [ProductController::class, 'edit_product']);
    Route::get('delete_product/{id}', [ProductController::class, 'delete_product']);
    Route::get('product_search', [ProductController::class, 'product_search']);

});

    // Frontend Product
    Route::get('product_details/{id}',[AuthController::class,'product_details']);

