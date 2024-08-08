<!DOCTYPE html>
<html>
<head>
    <title>Crear Mascota</title>
</head>
<body>
    <h1>Crear Nueva Mascota</h1>
    <form action="{{ route('mascotas.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="especie">Especie:</label>
        <input type="text" name="especie" id="especie" required>
        <br>
        <label for="raza">Raza:</label>
        <input type="text" name="raza" id="raza">
        <br>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
        <br>
        <label for="id_cliente">Cliente:</label>
        <select name="id_cliente" id="id_cliente">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id_cliente }}">{{ $cliente->nombre }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('mascotas.index') }}">Volver</a>
</body>
</html>
