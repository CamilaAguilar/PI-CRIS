<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsersController;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['middleware'=>'auth'], function(){
    Route::get('/cart/add/{product}', [CartsController::class, 'add'])->name('cart.add');
    Route::get('/cart/remove/{product}', [CartsController::class, 'remove'])->name('cart.remove');
    Route::get('/cart/payment', [CartsController::class, 'payment'])->name('cart.payment');
    Route::get('/cart', [CartsController::class, 'show'])->name('cart.show');
    Route::post('/order/add/', [OrderController::class, 'add'])->name('order.add');
    Route::get('/order', [OrderController::class, 'show'])->name('order.show');
    Route::get('/user', [UsersController::class, 'edit'])->name('user.edit');
    Route::put('/user', [UsersController::class, 'update'])->name('user.update');
});

Route::group(['middleware' => 'isAdmin'], function(){
    Route::resource('/product', ProductsController::class, ['except' => ['show']]);
    Route::resource('/category', CategoriesController::class, ['except' => ['show']]);
    Route::resource('/tag',TagsController::class, ['except' => ['show']]);
    Route::get('/trash/product', [ProductsController::class, 'trash'])->name('product.trash');
    Route::patch('/trash/product/restore/{id}', [ProductsController::class, 'restore'])->name('product.restore');
});

Route::resource('/product', ProductsController::class, ['only'=> ['show']]);
Route::resource('/category', CategoriesController::class, ['only'=> ['show']]);
Route::resource('/tag', TagsController::class, ['only'=> ['show']]);
Route::get('/search', [ProductsController::class, 'search'])->name('search');
