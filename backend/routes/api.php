<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

// Rutas RESTful para el recurso "categorias"
Route::apiResource('categorias', CategoriaController::class);