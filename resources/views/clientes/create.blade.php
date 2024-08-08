<!DOCTYPE html>
<html>
<head>
    <title>Crear Cliente</title>
</head>
<body>
    <h1>Crear Nuevo Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" required>
        <br>
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion">
        <br>
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('clientes.index') }}">Volver</a>
</body>
</html>
