<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/bolsas', [BolsaController::class, 'index'])->name('bolsas.index');
Route::delete('/bolsas/{id}', [BolsaController::class, 'destroy'])->name('bolsas.destroy');