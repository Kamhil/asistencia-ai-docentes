@extends('layouts.app')

@section('title', 'Inicio - UED')

@section('content')

    <section id="inicio" class="hero">
        <div class="container">
            <h1>Bienvenidos a la Unidad<br>de Educación a Distancia</h1>
            <p>Educación moderna, virtual y de calidad para docentes UNHEVAL.</p>
        </div>
    </section>

    <section id="nosotros" class="bg-white">
        <div class="container">
            <h2 class="text-center mb-5" style="color: var(--color-azul);">Sobre Nosotros</h2>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <img src="https://webs.unheval.edu.pe/public/uploads/archivos/generico/193/0_193_1745593797_0.jpeg" class="img-fluid rounded shadow" alt="Jefe de Unidad">
                    <p class="mt-3"><strong>Dr. Orlando Ascayo León</strong><br>Jefe de la Unidad</p>
                </div>
                <div class="col-md-8">
                    <p>Es la unidad orgánica de línea dependiente de la Dirección de Asuntos y Servicios Académicos; responsable de conducir la implementación de los programas de estudios y programas de formación continua en la modalidad semipresencial y/o a distancia a través de las unidades de organización involucradas a nivel de pregrado y posgrado.</p>
                </div>
            </div>

            <hr class="my-5">

            <h3 class="text-center mb-4" style="color: var(--color-azul);">Atribuciones de la Unidad</h3>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <ul>
                        <li>Proponer la actualización de los documentos de gestión de la UNHEVAL, en el ámbito de su competencia.</li>
                        <li>Proponer, difundir y aplicar normativas para el funcionamiento de los programas en la modalidad semipresencial y/o a distancia.</li>
                        <li>Monitorear y evaluar la implementación de dichos programas en coordinación con las unidades competentes.</li>
                        <li>Evaluar las propuestas de las escuelas profesionales para el desarrollo de los programas.</li>
                        <li>Promover la implementación de la infraestructura tecnológica adecuada en coordinación con la Oficina de Tecnologías de la Información.</li>
                        <li>Programar, monitorear y evaluar los entornos de enseñanza - aprendizaje.</li>
                        <li>Brindar capacitación permanente a los estudiantes y docentes en el uso de los entornos no presenciales.</li>
                        <li>Demás funciones que le asigne el jefe inmediato.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection