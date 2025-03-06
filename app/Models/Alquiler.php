<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    use HasFactory;
    protected $table = 'contratos';
    public $timestamps = true;  // Este es el valor predeterminado, pero lo puedes cambiar si no usas timestamps.

    protected $fillable = [
        'fecha_inicio',         
        'fecha_fin', 
        'monto', 
        'estado', 
    ];
}
