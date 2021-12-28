<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;

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




Route::view("/","home" )->name("home");

Route::get("/products",[productController::class,"getProduct"] );


Route::view("/add_product","add_product" )->name("add_product");


Route::post('/save_product', [ProductController::class, 'saveProduct'])->name("save_product");


