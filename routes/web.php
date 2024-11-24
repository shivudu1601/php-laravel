<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloShivaniController;
use App\Http\Controllers\HelloCalculatorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shivani', [HelloShivaniController::class, 'index']);
Route::get('/add/{num1}/{num2}', [HelloCalculatorController::class, 'add']);
Route::get('/sub/{num1}/{num2}', [HelloCalculatorController::class, 'sub']);
Route::get('/mul/{num1}/{num2}', [HelloCalculatorController::class, 'mul']);
Route::get('/div/{num1}/{num2}', [HelloCalculatorController::class, 'div']);