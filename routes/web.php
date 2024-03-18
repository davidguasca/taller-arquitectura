<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/ordenar-pizza', [OrderController::class, 'create'])->name('ordenar-pizza');

Route::post('/ordenar-pizza', [OrderController::class, 'store'])->name('ordenar-pizza.store');

Route::get('/confirmar-pedido', [OrderController::class, 'confirm'])->name('confirmar-pedido');



/*
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
*/


