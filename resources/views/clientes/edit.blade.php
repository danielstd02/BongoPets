<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->id_cliente) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $cliente->nombre }}" required>
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" value="{{ $cliente->telefono }}" required>
        <br>
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" value="{{ $cliente->direccion }}">
        <br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('clientes.index') }}">Volver</a>
</body>
</html>
