<?php

use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->name('dashboard');


Route::resource('purchases', PurchaseController::class);