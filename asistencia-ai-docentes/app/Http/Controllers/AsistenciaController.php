<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class AsistenciaController extends Controller
{
    public function form()
    {
        return view('buscar');
    }

    public function buscar(Request $request)
    {
        $dni = $request->input('dni');

        $docente = Docente::where('dni', $dni)->first();

        if (!$docente) {
            return redirect()->route('buscar.form')->with('error', 'Docente no encontrado');
        }

        $asistenciasRaw = $docente->asistencias ?? [];

$asistencias = [];
$presentes = 0;

foreach ($asistenciasRaw as $fecha => $estado) {
    $asistencias[$fecha] = $estado ? '✅' : '❌';
    if ($estado) $presentes++;
}

$porcentaje = count($asistenciasRaw) > 0 ? round(($presentes / count($asistenciasRaw)) * 100, 2) : 0;

        return view('resultado', compact('docente', 'asistencias', 'porcentaje'));
    }
}
