<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Actualizar
//Route::put('/bolsa/{id}',[
    //BolsaController::class, 'update'
//])->name('bolsas.update');