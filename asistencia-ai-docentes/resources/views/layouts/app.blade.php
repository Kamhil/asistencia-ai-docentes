<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Educación a Distancia - UNHEVAL')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        :root {
            --color-azul: #002C77;
            --color-dorado: #FDB813;
            --color-blanco: #ffffff;
        }
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7fa; }
        .sidebar {
            width: 260px;
            min-height: 100vh;
            background-color: var(--color-azul);
            position: fixed;
            color: var(--color-blanco);
        }
        .sidebar h3 { padding: 20px; margin: 0; font-weight: bold; background-color: #001e50; }
        .sidebar a {
            display: block;
            padding: 15px 20px;
            color: var(--color-blanco);
            text-decoration: none;
            transition: background-color .2s;
        }
        .sidebar a:hover { background-color: #0040a0; }
        /* Esta clase 'active' es nueva, para marcar la página actual */
        .sidebar a.active {
            background-color: #0040a0;
            font-weight: bold;
        }
        .content { margin-left: 260px; } /* ¡Quitamos el padding de aquí! */
        section { padding: 40px; } /* Añadimos padding a cada sección */
        
        /* ... (tus otros estilos como .hero, .btn-primary, etc. van aquí) ... */
        .hero {
            background: linear-gradient(135deg, var(--color-azul) 0%, #0040a0 100%);
            color: var(--color-blanco);
            text-align: center;
            padding: 120px 40px;
        }
        .hero h1 { font-size: 3rem; margin-bottom: 20px; }
        .hero p { font-size: 1.25rem; }
        footer {
            background-color: #001e50;
            color: var(--color-blanco);
            text-align: center;
            padding: 20px 0;
            margin-left: 260px;
        }
        .btn-primary { background-color: var(--color-dorado); border-color: var(--color-dorado); color: #000; }
        .btn-primary:hover { background-color: #e0a800; border-color: #d39e00; }
        .btn-outline-light { border-color: var(--color-dorado); color: var(--color-blanco); }
        .btn-outline-light:hover { background-color: var(--color-dorado); color: #000; }
        .team-member img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid var(--color-dorado);
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h3><i class="bi bi-mortarboard-fill"></i> Educación a Distancia</h3>
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
        <i class="bi bi-house-door"></i> Inicio
    </a>
    <a href="{{ route('equipo') }}" class="{{ request()->routeIs('equipo') ? 'active' : '' }}">
        <i class="bi bi-people-fill"></i> Nuestro Equipo
    </a>
    <a href="{{ route('asistencia.form') }}" class="{{ request()->routeIs('asistencia.form') ? 'active' : '' }}">
        <i class="bi bi-check-square"></i> Asistencia Curso IA
    </a>
    
    <form method="POST" action="{{ route('logout') }}" class="mt-4 px-3">
        @csrf
        <button type="submit" class="btn btn-outline-light w-100 text-start"><i class="bi bi-box-arrow-right"></i> Cerrar Sesión</button>
    </form>
</div>

<div class="content">
    
    @yield('content')

    <footer>
        <div class="container">
            <p class="mb-0">© {{ date('Y') }} Unidad de Educación a Distancia - UNHEVAL</p>
            <small>educacionadistancia@unheval.edu.pe | Anexo: 2058</small>
        </div>
    </footer>
</div>

</body>
</html>