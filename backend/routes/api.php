<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;

// Rutas RESTful para el recurso "categorias"
Route::apiResource('categorias', CategoriaController::class);
Route::apiResource('clientes', ClienteController::class);