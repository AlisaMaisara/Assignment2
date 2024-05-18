<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PizzaController;
use App\Http\Controllers\Api\OrderController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/get_pizzas', [PizzaController::class, 'getPizzas'])->name('get_pizzas');
Route::get('/get_pizza/{pizza_id}', [PizzaController::class, 'getPizza'])->where('pizza_id', '[0-9_\-]+')->name('get_pizza');
Route::get('/get_cart', [PizzaController::class, 'getCart'])->name('get_cart');
Route::post('/checkout', [PizzaController::class, 'postCheckout'])->name('post_checkout');

Route::middleware('auth:sanctum')->get('/get_user_orders', [OrderController::class, 'getUserOrders'])->name('get_user_orders');
