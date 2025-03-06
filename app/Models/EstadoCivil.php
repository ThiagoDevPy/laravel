<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    use HasFactory;
    protected $table = 'est_civil';  //

    // Agrega 'clase_persona' aquí
    protected $fillable = [
        'nombre_est_civil',
    ];


    // Definir la relación con el modelo Persona
    public function personas()
    {
        return $this->hasMany(Persona::class, 'id_est_civl');
    }
}
