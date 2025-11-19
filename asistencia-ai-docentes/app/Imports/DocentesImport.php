<?php

namespace App\Imports;

use App\Models\Docente;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DocentesImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Definir las columnas de asistencia según tu Excel
        $sesiones = [
            '10_de_octubre',
            '11_de_octubre',
            '17_de_octubre',
            '18_de_octubre',
            '24_de_octubre',
            '25_de_octubre',
            '31_de_octubre', 
            '7_de_noviembre', 
        ];

        $asistencias = [];

        foreach ($sesiones as $col) {
            $valor = isset($row[$col]) ? trim($row[$col]) : '';
            // Solo ✅ se considera presente
            $asistencias[$col] = ($valor === '✅');
        }

        return new Docente([
            'nombre_completo' => $row['nombre_completo'],
            'correo' => isset($row['correo']) ? $row['correo'] : null,
            'dni' => $row['dni'],
            'asistencias' => $asistencias,
        ]);
    }
}
