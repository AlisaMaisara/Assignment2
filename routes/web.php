<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\OrderController;

Route::get('/', [PizzaController::class, 'index'])->name('index');
Route::get('/cart', [PizzaController::class, 'cart'])->name('cart');
Route::get('/checkout', [PizzaController::class, 'checkout'])->name('checkout');
Route::get('/pizza/{pizza_id}', [PizzaController::class, 'pizzaPage'])->where('pizza_id', '[0-9_\-]+')->name('pizzaPage');
Route::get('/success', [PizzaController::class, 'success'])->name('success');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',  [OrderController::class, 'dashboard'])->name('dashboard');
