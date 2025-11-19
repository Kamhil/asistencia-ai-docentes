<!DOCTYPE html>
<html>
<head>
    <title>Importar Excel</title>
</head>
<body>
    <form action="{{ route('importar.excel') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="excel" required>
        <button type="submit">Importar Excel</button>
    </form>
</body>
</html>
