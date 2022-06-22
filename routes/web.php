<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;


/* Rota Home */
Route::get('/', [HomeController::class, 'index'])->name('home');


/* Rotas Registro */
Route::get('/registro', [RegistroController::class, 'create'])->name('Autenticacao.registro');
Route::post('/registro', [RegistroController::class, 'store'])->name('Autenticacao.registro');

/* Rotas Login */
Route::get('/login', [LoginController::class, 'create'])->name('Autenticacao.login');
Route::post('/login', [LoginController::class, 'store'])->name('Autenticacao.login');

/* Rota Dashboard */
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


