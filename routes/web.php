<?php
use App\Http\Controllers\BolsaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('bolsas', BolsaController::class);
Route::get('/bolsas/{id}/edit', [BolsaController::class, 'edit'])->name('bolsas.edit');
Route::put('/bolsas/{id}', [BolsaController::class, 'update'])->name('bolsas.update');
Route::delete('/bolsas/{id}', [BolsaController::class, 'destroy'])->name('bolsas.destroy');
Route::get('/bolsas', [BolsaController::class, 'index'])->name('bolsas.index');

    
