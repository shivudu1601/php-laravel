<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\HelloShivaniController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsManager;
use App\Http\Controllers\CartController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/shivani', [HelloShivaniController::class, 'index']);
Route::get('/add/{num1}/{num2}', [CalculatorController::class, 'add']);
Route::get('/sub/{num1}/{num2}', [CalculatorController::class, 'sub']);
Route::get('/mul/{num1}/{num2}', [CalculatorController::class, 'mul']);
Route::get('/div/{num1}/{num2}', [CalculatorController::class, 'div']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);

// Login and registration routes 

Route::get('authlogin', [App\Http\Controllers\AuthManager::class, 'login'])->name('authlogin');
Route::get('authregister', [App\Http\Controllers\AuthManager::class, 'register'])->name('authregister');
Route::post('/authlogin', 'App\Http\Controllers\AuthManager@loginPost')->name('authlogin.post');
Route::post('/authregister', 'App\Http\Controllers\AuthManager@registerPost')->name('authregister.post');
Route::get('/home', 'App\Http\Controllers\ProductsManager@index')->name('home');
Route::get('/login', 'App\Http\Controllers\AuthManager@login')->name('login');
Route::get('logout', [App\Http\Controllers\AuthManager::class, 'logout'])->name('logout');
Route::get('products', [App\Http\Controllers\ProductsManager::class, 'Product'])->name('products');
Route::get('categories', [App\Http\Controllers\CategoriesManager::class, 'category'])->name('categories');
Route::get('products/{slug}', [App\Http\Controllers\ProductsManager::class, 'show'])->name('products.details');
Route::middleware('auth')->group(function(){
Route::get('/cart/{id}', [App\Http\Controllers\ProductsManager::class, 'addToCart'])->name('cart.add');
Route::middleware('auth')->group(function () {
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index'); // View cart // 
Route::put('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update'); // Update cart quantity
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove'); // Remove from cart
    });

});