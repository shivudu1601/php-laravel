<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloShivaniController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shivani', [HelloShivaniController::class, 'index']);