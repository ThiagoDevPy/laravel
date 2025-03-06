<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    public $timestamps = true;  // Este es el valor predeterminado, pero lo puedes cambiar si no usas timestamps.

    protected $fillable = [
        'nombre_usuario',         
        'email', 
        'rol', 
        'activo', 
    ];
}
