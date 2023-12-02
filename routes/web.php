<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Home;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resources([
    'categories' => CategoryController::class,
    'products' => ProductController::class,
]);

Route::get('/', [Home::class, 'index'])->name('home');

Route::get('products/show', 'ProductController@show')->name('products.show');

// Route::get('categories/show/{category}', 'CategoryController@show')->name('categories.show');

Route::get('categories/show', 'CategoryController@show')->name('categories.show');
