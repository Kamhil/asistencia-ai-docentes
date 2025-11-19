<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class DocenteController extends Controller
{
    // 1. Muestra la página de INICIO (Hero + Nosotros)
    public function showHome()
    {
        return view('home');
    }

    // 2. Muestra la página de EQUIPO
    public function showEquipo()
    {
        return view('equipo');
    }

    // 3. Muestra la página de ASISTENCIA (Formulario + Info del Curso)
    public function showAsistenciaForm()
    {
        return view('asistencia');
    }

    // 4. Procesa la BÚSQUEDA de DNI (esta ya la tenías, está perfecta)
    public function buscar(Request $request)
    {
        $request->validate([
            'dni' => 'required|digits_between:6,10'
        ]);

        $docente = Docente::where('dni', $request->dni)->first();

        if (!$docente) {
            return redirect()->route('asistencia.form')->with('error', 'Docente no encontrado'); // Corregido para que redirija a la pág. de asistencia
        }

        $asistencias = collect($docente->asistencias);
        $total = $asistencias->count();
        $presentes = $asistencias->filter()->count();
        $porcentaje = $total > 0 ? round(($presentes / $total) * 100, 2) : 0;

        return view('resultado', compact('docente', 'asistencias', 'porcentaje'));
    }
}