<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloShivaniController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\UserController;

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