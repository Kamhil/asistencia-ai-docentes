@extends('layouts.app')

@section('title', 'Resultado de Asistencia - UED')

@section('content')

    <section id="resultado" class="bg-white">
        <div class="container">
            <!-- Botón para volver al formulario de búsqueda -->
            <a href="{{ route('asistencia.form') }}" class="btn btn-outline-secondary mb-4">
                <i class="bi bi-arrow-left"></i> Volver a la consulta
            </a>

            <h2 class="text-center mb-4" style="color: var(--color-azul);">Reporte de Asistencia</h2>
            
            <div class="card col-md-8 mx-auto shadow-sm">
                <div class="card-header bg-light">
                    <h3>{{ $docente->nombre_completo }}</h3>
                </div>
                <div class="card-body">
                    <p><strong>DNI:</strong> {{ $docente->dni }}</d>
                    <p><strong>Correo:</strong> {{ $docente->correo ?? 'No registrado' }}</p>
                    <p class="fs-5">
                        <strong>Porcentaje de Asistencia Total:</strong> 
                        <span class="fw-bold text-primary">{{ $porcentaje }}%</span>
                    </p>

                    <h4 class="mt-4">Detalle de Sesiones</h4>
                    <table class="table table-striped table-bordered">
                        <thead style="background-color: var(--color-azul); color: var(--color-blanco);">
                            <tr>
                                <th>Fecha de Sesión</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($asistencias as $sesion => $asistio)
                                <tr>
                                    <td>{{ $sesion }}</td>
                                    <td>
                                        @if ($asistio)
                                            <span class="badge bg-success">ASISTIÓ</span>
                                        @else
                                            <span class="badge bg-danger">FALTÓ</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection