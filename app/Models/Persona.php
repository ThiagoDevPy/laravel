<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    // Si la tabla asociada al modelo no sigue la convención de pluralización, puedes especificar el nombre de la tabla
    protected $table = 'personas';

    // Si las columnas 'created_at' y 'updated_at' no están presentes en la tabla, puedes desactivar los timestamps
    public $timestamps = true;  // Este es el valor predeterminado, pero lo puedes cambiar si no usas timestamps.

    // Para asignación masiva, puedes definir qué campos se pueden llenar masivamente
    protected $fillable = [
        'id',
        'nombre_persona', 
        'apellido_persona', 
        'telefono_persona', 
        'direccion_persona', 
        'ci_persona', 
        'sexo_persona',
        'id_tip_persona', 
        'id_est_civl',
    ];



    public function estadoCivil()
    {
        return $this->belongsTo(EstadoCivil::class, 'id_est_civl');
    }
}
