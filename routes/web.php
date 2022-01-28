<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\ShoppingCart;
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

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', [ProductController::class, 'dashboardPage'])
    ->name('dashboard');

Route::get("/", [productController::class, "index"])->name("home");

// admin routes
Route::get("/add_product", [productController::class, 'addProductPage'])->name(
    "add_product"
);

Route::post('/save_product', [ProductController::class, 'saveProduct'])->name(
    "save_product"
);

Route::get('/delete_product/{id}', [
    ProductController::class,
    'deleteProduct',
])->name("delete_product");

Route::get('/edit_product/{id}', [
    ProductController::class,
    'editProduct',
])->name("edit_product");

Route::post('/update_product/{id}', [
    ProductController::class,
    'updateProduct',
])->name("update_product");

// shoppingCart routes
Route::get('cartHome', [ShoppingCart::class, 'storeCart'])->name('storeCart');

// category routes
//get all categories
Route::get('/categories', [CategoryController::class, 'getCategory'])->name(
    'categories'
);

//get single category
Route::get('/single_category/{id}', [
    CategoryController::class,
    'getSingleCategory',
])->name('single_category');

// add new category
Route::post('/save_category', [
    CategoryController::class,
    'saveCategory',
])->name('save_category');

// add category page
Route::get('/add_category', [
    CategoryController::class,
    'addCategoryPage',
])->name('add_category');
