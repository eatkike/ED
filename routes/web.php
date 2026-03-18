<?php
use App\Http\Controllers\BolsaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
//Actualizar
//Route::put('/bolsa/{id}',[
    //BolsaController::class, 'update'
//])->name('bolsas.update');
=======
Route::resource('bolsas', BolsaController::class);
Route::get('/bolsas/{id}/edit', [BolsaController::class, 'edit'])->name('bolsas.edit');
Route::put('/bolsas/{id}', [BolsaController::class, 'update'])->name('bolsas.update');
Route::delete('/bolsas/{id}', [BolsaController::class, 'destroy'])->name('bolsas.destroy');
Route::get('/bolsas', [BolsaController::class, 'index'])->name('bolsas.index');

    
>>>>>>> a4ab0f35a3d992ebc2c3b6c79495f0f73c8599dd
