@extends('layouts.app')

@section('title', 'Asistencia Curso IA - UED')

@section('content')

    <section id="curso" class="bg-white">
        <div class="container">
            <h2 class="text-center mb-5" style="color: var(--color-azul);">Taller: Herramientas de Inteligencia Artificial aplicada a la Investigación Académica</h2>
            
            <div class="row align-items-center">
                
                <div class="col-md-5">
                    <img src="https://webs.unheval.edu.pe/public/uploads/archivos/generico/173/0_173_1758811503_0.jpeg" class="img-fluid rounded shadow-sm" alt="Curso IA">
                </div>

                <div class="col-md-7">
                    <p class="lead fs-6" style="font-weight: 500;">
                        🧠 Aprende a aplicar herramientas de INTELIGENCIA ARTIFICIAL en tu labor investigadora y eleva el impacto académico de tus estudios.
                    </p>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-lg-7">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0"><strong>Modalidad:</strong> 💻 100% Virtual</li>
                                <li class="list-group-item px-0"><strong>Plataforma:</strong> CiscoWebex 🖥️</li>
                                <li class="list-group-item px-0"><strong>Costo:</strong> 💰 Gratuito</li>
                                <li class="list-group-item px-0"><strong>Beneficiarios:</strong> Docentes de la Unheval</li>
                            </ul>
                        </div>
                        <div class="col-lg-5">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0"><strong>Inicio:</strong> 🗓️ 10 de Octubre</li>
                                <li class="list-group-item px-0"><strong>Horario:</strong> ⏲️ 18:00 - 20:30</li>
                                <li class="list-group-item px-0"><strong>(Viernes y Sábado)</strong></li>
                            </ul>
                        </div>
                    </div>

                    <div class="alert alert-success mt-4">
                        <h5 class="alert-heading h6">📌 Incluye</h5>
                        <ul class="list-unstyled mb-0 small">
                            <li class="mb-1">✅ Módulos complementarios de regalo</li>
                            <li>✅ Certificación Gratuita</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="asistencia-form" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-5" style="color: var(--color-azul);">Consulta tu Asistencia</h2>
            
            @if(session('error'))
                <div class="alert alert-danger text-center">{{ session('error') }}</div>
            @endif

            <form action="{{ route('buscar.docente') }}" method="GET" class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" name="dni" class="form-control form-control-lg mb-3" placeholder="Ingrese su DNI" required>
                    <button type="submit" class="btn btn-primary btn-lg w-100">Consultar</button>
                </div>
            </form>
        </div>
    </section>

@endsection