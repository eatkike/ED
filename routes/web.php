<?php

use App\Http\Controllers\BolsaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('bolsas', BolsaController::class);
Route::get('/bolsas/{id}/edit', [BolsaController::class, 'edit'])->name('bolsas.edit');
Route::put('/bolsas/{id}', [BolsaController::class, 'update'])->name('bolsas.update');
Route::delete('/bolsas/{id}', [BolsaController::class, 'destroy'])->name('bolsas.destroy');
Route::get('/bolsas', [BolsaController::class, 'index'])->name('bolsas.index');

//Ruta para mostrar el formulario de registro
Route::get('/registro', [AuthController::class, 'registerForm'])->name('registro');

// Ruta para manejar el registro del usuario
Route::post('/registro', [AuthController::class, 'register'])->name('registro.store');

//Ruta para mostrar el formulario de inicio de sesión
Route::get('/acceso', [AuthController::class, 'loginForm'])->name('acceso');

//Ruta para verificar el inicio de sesion
Route::post('/acceso', [AuthController::class, 'login' ])->name('acceso.store');

//Ruta para cerrar sesión
Route::post('/cerrar',[AuthController::class, 'logout'])->name('cerrar');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-dashboard', [
        AuthController::class, 'adminDashborad'
    ])->name('admin-dashboard');
});

