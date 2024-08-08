<!DOCTYPE html>
<html>
<head>
    <title>Editar Cita</title>
</head>
<body>
    <h1>Editar Cita</h1>
    <form action="{{ route('citas.update', $cita->id_cita) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" value="{{ $cita->fecha }}" required>
        <br>
        <label for="hora">Hora:</label>
        <input type="time" name="hora" id="hora" value="{{ $cita->hora }}" required>
        <br>
        <label for="id_cliente">Cliente:</label>
        <select name="id_cliente" id="id_cliente">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id_cliente }}" {{ $cita->id_cliente == $cliente->id_cliente ? 'selected' : '' }}>
                    {{ $cliente->nombre }}
                </option>
            @endforeach
        </select>
        <br>
        <label for="id_mascota">Mascota:</label>
        <select name="id_mascota" id="id_mascota">
            @foreach ($mascotas as $mascota)
                <option value="{{ $mascota->id_mascota }}" {{ $cita->id_mascota == $mascota->id_mascota ? 'selected' : '' }}>
                    {{ $mascota->nombre }}
                </option>
            @endforeach
        </select>
        <br>
        <label for="id_servicio">Servicio:</label>
        <select name="id_servicio" id="id_servicio">
            @foreach ($servicios as $servicio)
                <option value="{{ $servicio->id_servicio }}" {{ $cita->id_servicio == $servicio->id_servicio ? 'selected' : '' }}>
                    {{ $servicio->nombre_servicio }}
                </option>
            @endforeach
        </select>
        <br>
        <label for="id_empleado">Empleado:</label>
        <select name="id_empleado" id="id_empleado">
            @foreach ($empleados as $empleado)
                <option value="{{ $empleado->id_empleado }}" {{ $cita->id_empleado == $empleado->id_empleado ? 'selected' : '' }}>
                    {{ $empleado->nombre }}
                </option>
            @endforeach
        </select>
        <br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('citas.index') }}">Volver</a>
</body>
</html>
