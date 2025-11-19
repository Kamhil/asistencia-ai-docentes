<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $fillable = [
        'nombre_completo',
        'correo',
        'dni',
        'asistencias', // este campo contendrá un array de fechas con true/false
    ];

    protected $casts = [
        'asistencias' => 'array', // ¡muy importante!
    ];
}
