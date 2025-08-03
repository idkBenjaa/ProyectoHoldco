<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\MaquinaController;
use App\Http\Controllers\Api\TareaController;

// Aquí van las rutas API
Route::apiResource('maquinas', MaquinaController::class);
Route::apiResource('tareas', TareaController::class);