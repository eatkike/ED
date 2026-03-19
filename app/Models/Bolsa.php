<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bolsa extends Model
{
  protected $table = 'bolsas';

    protected $fillable = [
        'Nombre',
        'Meta',
        'Fecha de Meta',
        'Descripcion',
        'Monto Actual'
    ];
}
