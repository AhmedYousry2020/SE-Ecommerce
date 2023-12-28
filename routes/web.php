<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/{categoryId}',[CategoryController::class,'getCategory'])->name('categories.show');

Route::get('/',[ProductController::class,'index'])->name('products.index');
