<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);

Route::get('/', function () {
    return redirect()->route('products.index');
});
