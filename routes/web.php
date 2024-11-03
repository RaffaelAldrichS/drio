<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');
Route::get('/cashier', function () {
    return view('cashier.index');
})->name('cashier');

// Category Controller

Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);
