<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('bolsas', BolsaController::class);

Route::get('bolsas/{id}/edit', [BolsaController::class, 'edit'])->name('bolsas.edit');

    
