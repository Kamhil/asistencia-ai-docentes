<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Unidad de Educación a Distancia ‑ UNHEVAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        :root {
            --color-azul: #002C77;
            --color-dorado: #FDB813;
            --color-blanco: #ffffff;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f7fa;
        }
        .sidebar {
            width: 260px;
            min-height: 100vh;
            background-color: var(--color-azul);
            position: fixed;
            color: var(--color-blanco);
        }
        .sidebar h3 {
            padding: 20px;
            margin: 0;
            font-weight: bold;
            background-color: #001e50;
        }
        .sidebar a {
            display: block;
            padding: 15px 20px;
            color: var(--color-blanco);
            text-decoration: none;
            transition: background-color .2s;
        }
        .sidebar a:hover {
            background-color: #0040a0;
        }
        .content {
            margin-left: 260px;
            padding: 40px;
        }
        section {
            padding: 60px 0;
        }
        .hero {
            background: linear-gradient(135deg, var(--color-azul) 0%, #0040a0 100%);
            color: var(--color-blanco);
            text-align: center;
            padding: 120px 0;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.25rem;
        }
        footer {
            background-color: #001e50;
            color: var(--color-blanco);
            text-align: center;
            padding: 20px 0;
            margin-left: 260px;
        }

        .btn-primary {
            background-color: var(--color-dorado);
            border-color: var(--color-dorado);
            color: #000;
        }

        .btn-primary:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-outline-light {
            border-color: var(--color-dorado);
            color: var(--color-blanco);
        }

        .btn-outline-light:hover {
            background-color: var(--color-dorado);
            color: #000;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h3><i class="bi bi-mortarboard-fill"></i> Educación a Distancia</h3>
    <a href="#inicio"><i class="bi bi-house-door"></i> Inicio</a>
    <a href="#nosotros"><i class="bi bi-people-fill"></i> Nosotros</a>
    <a href="#curso"><i class="bi bi-laptop"></i> Curso IA</a>
    <a href="#asistencia"><i class="bi bi-check-square"></i> Consulta Asistencia</a>
    <form method="POST" action="{{ route('logout') }}" class="mt-4 px-3">
        @csrf
        <button type="submit" class="btn btn-outline-light w-100 text-start"><i class="bi bi-box-arrow-right"></i> Cerrar Sesión</button>
    </form>
</div>

<div class="content">

    <!-- Hero / Inicio -->
    <section id="inicio" class="hero">
        <div class="container">
            <h1>Bienvenidos a la Unidad<br>de Educación a Distancia</h1>
            <p>Educación moderna, virtual y de calidad para docentes UNHEVAL.</p>
            <a href="#curso" class="btn btn-primary btn-lg mt-4">Ver curso</a>
        </div>
    </section>

    <!-- Nosotros -->
    <section id="nosotros" class="bg-white">
        <div class="container">
            <h2 class="text-center mb-5 text-primary">Sobre Nosotros</h2>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <img src="https://webs.unheval.edu.pe/public/uploads/archivos/generico/193/0_193_1745593797_0.jpeg" class="img-fluid rounded shadow" alt="Jefe de Unidad">
                    <p class="mt-3"><strong>Dr. Orlando Ascayo León</strong><br>Jefe de la Unidad</p>
                </div>
                <div class="col-md-8">
                    <p>La Unidad de Educación a Distancia de la UNHEVAL impulsa programas de formación académica en modalidad virtual y semipresencial, garantizando un acompañamiento técnico y pedagógico de calidad para todos los participantes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Curso IA -->
    <section id="curso" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-5 text-primary">Curso: IA Aplicada a la Investigación Académica</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x300" class="img-fluid rounded shadow" alt="Curso IA">
                </div>
                <div class="col-md-6">
                    <ul class="list-group mb-4">
                        <li class="list-group-item"><strong>Duración:</strong> 7 sesiones</li>
                        <li class="list-group-item"><strong>Inicio:</strong> Octubre 2025</li>
                        <li class="list-group-item"><strong>Modalidad:</strong> Virtual</li>
                        <li class="list-group-item"><strong>Certificación:</strong> Gratuita y digital</li>
                    </ul>
                    <p>Aprende a usar herramientas de inteligencia artificial para potenciar tu investigación académica. ¡Inscríbete y transforma tu forma de investigar!</p>
                    <a href="#asistencia" class="btn btn-primary mt-3">Ver asistencia</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Consulta Asistencia -->
    <section id="asistencia" class="bg-white">
        <div class="container">
            <h2 class="text-center mb-5 text-primary">Consulta tu Asistencia</h2>
            @if(session('error'))
                <div class="alert alert-danger text-center">{{ session('error') }}</div>
            @endif
            <form action="{{ route('buscar.docente') }}" method="GET" class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" name="dni" class="form-control form-control-lg mb-3" placeholder="Ingrese su DNI" required>
                    <button type="submit" class="btn btn-success btn-lg w-100">Consultar</button>
                </div>
            </form>
        </div>
    </section>

</div>

<footer>
    <div class="container">
        <p class="mb-0">© {{ date('Y') }} Unidad de Educación a Distancia - UNHEVAL</p>
        <small>educacionadistancia@unheval.edu.pe | Anexo: 2058</small>
    </div>
</footer>

</body>
</html>
