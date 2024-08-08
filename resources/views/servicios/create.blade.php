<!DOCTYPE html>
<html>
<head>
    <title>Crear Servicio</title>
</head>
<body>
    <h1>Crear Nuevo Servicio</h1>
    <form action="{{ route('servicios.store') }}" method="POST">
        @csrf
        <label for="nombre_servicio">Nombre del Servicio:</label>
        <input type="text" name="nombre_servicio" id="nombre_servicio" required>
        <br>
        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('servicios.index') }}">Volver</a>
</body>
</html>
