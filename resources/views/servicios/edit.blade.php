<!DOCTYPE html>
<html>
<head>
    <title>Editar Servicio</title>
</head>
<body>
    <h1>Editar Servicio</h1>
    <form action="{{ route('servicios.update', $servicio->id_servicio) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre_servicio">Nombre del Servicio:</label>
        <input type="text" name="nombre_servicio" id="nombre_servicio" value="{{ $servicio->nombre_servicio }}" required>
        <br>
        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio" value="{{ $servicio->precio }}" required>
        <br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('servicios.index') }}">Volver</a>
</body>
</html>
