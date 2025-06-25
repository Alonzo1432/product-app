<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

// Ruta por defecto: redirige al listado de productos
Route::get('/', [ProductController::class, 'index']);

// Rutas CRUD automáticas
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
