<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/productos', [ProductoController::class, 'index']);     // Listar
Route::post('/productos', [ProductoController::class, 'store']);    // Crear
Route::put('/productos/{id}', [ProductoController::class, 'update']); // Editar