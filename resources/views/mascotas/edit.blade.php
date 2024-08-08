<!DOCTYPE html>
<html>
<head>
    <title>Editar Mascota</title>
</head>
<body>
    <h1>Editar Mascota</h1>
    <form action="{{ route('mascotas.update', $mascota->id_mascota) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $mascota->nombre }}" required>
        <br>
        <label for="especie">Especie:</label>
        <input type="text" name="especie" id="especie" value="{{ $mascota->especie }}" required>
        <br>
        <label for="raza">Raza:</label>
        <input type="text" name="raza" id="raza" value="{{ $mascota->raza }}">
        <br>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ $mascota->fecha_nacimiento }}">
        <br>
        <label for="id_cliente">Cliente:</label>
        <select name="id_cliente" id="id_cliente">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id_cliente }}" {{ $mascota->id_cliente == $cliente->id_cliente ? 'selected' : '' }}>
                    {{ $cliente->nombre }}
                </option>
            @endforeach
        </select>
        <br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('mascotas.index') }}">Volver</a>
</body>
</html>
