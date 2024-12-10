<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\HelloShivaniController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsManager;


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
