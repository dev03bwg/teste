<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/registro', [RegistroController::class, 'create'])->name('Autenticacao.registro');
Route::post('/registro', [RegistroController::class, 'store'])->name('Autenticacao.registro');


Route::get('/login', [LoginController::class, 'create'])->name('Autenticacao.login');
Route::post('/login', [LoginController::class, 'store'])->name('Autenticacao.login');
