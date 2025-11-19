<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #002f6c;
            color: white;
        }
        .login-box {
            background: white;
            color: black;
            padding: 30px;
            border-radius: 8px;
            margin-top: 10%;
        }
    </style>
</head>
<body>
<div class="container d-flex justify-content-center">
    <div class="col-md-4 login-box">
        <h4 class="mb-4 text-center">Iniciar Sesión</h4>
        <form method="POST" action="/login">
            @csrf
            <div class="mb-3">
                <label>Correo</label>
                <input type="email" name="email" class="form-control" required value="kmartel@unheval.edu.pe">
            </div>
            <div class="mb-3">
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control" required value="72650309">
            </div>
            <button type="submit" class="btn btn-primary w-100">Ingresar</button>
        </form>
    </div>
</div>
</body>
</html>
