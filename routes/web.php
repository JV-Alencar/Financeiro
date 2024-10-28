<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FinanceiroController;
use App\Http\Controllers\UsuarioController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/financeiro', [FinanceiroController::class, 'index']);
Route::post('/financeiro', [FinanceiroController::class, 'store']);
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::post('/usuarios', [UsuarioController::class, 'store']);

