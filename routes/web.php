<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripeController;
use App\Http\Livewire\ShoppingCart;

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

// public routes

// home page
Route::get("/", [productController::class, "index"])->name("home");

// shoppingCart routes
Route::get('cartHome', [ShoppingCart::class, 'storeCart'])->name('storeCart');

// category routes
//get all categories
Route::get('/categories', [CategoryController::class, 'getCategory'])->name(
    'categories'
);

//get single category products
Route::get('/single_category/{id}', [
    CategoryController::class,
    'getSingleCategory',
])->name('single_category');


// STRIPE routes
Route::get('stripe', [StripeController::class, 'stripe'])->name('stripe');
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');



// protected routes

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [ProductController::class, 'dashboardPage'])->name('dashboard');

    // add new product page
    Route::get("/add_product", [productController::class, 'addProductPage'])->name("add_product");


    // add new product
    Route::post('/save_product', [ProductController::class, 'saveProduct'])->name("save_product");

    // delete product
    Route::get('/delete_product/{id}', [
        ProductController::class,
        'deleteProduct',
    ])->name("delete_product");

    // edit product
    Route::get('/edit_product/{id}', [
        ProductController::class,
        'editProduct',
    ])->name("edit_product");

    // update product
    Route::post('/update_product/{id}', [
        ProductController::class,
        'updateProduct',
    ])->name("update_product");

    // add category page
    Route::get('/add_category', [
        CategoryController::class,
        'addCategoryPage',
    ])->name('add_category');

    // add new category function
    Route::post('/save_category', [
        CategoryController::class,
        'saveCategory',
    ])->name('save_category');

    // delete category function
    Route::get('/delete_category/{id}', [
        CategoryController::class,
        'deleteCategory',
    ])->name('delete_category');

    // edit category page
    Route::get('/edit_category/{id}', [
        CategoryController::class,
        'updateCategoryPage',
    ])->name('edit_category');

    // update category function
    Route::post('/update_category/{id}', [
        CategoryController::class,
        'updateCategory',
    ])->name('update_category');
});
