<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Ruta para listar los clientes
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');