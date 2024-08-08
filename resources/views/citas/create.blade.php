<!DOCTYPE html>
<html>
<head>
    <title>Crear Cita</title>
</head>
<body>
    <h1>Crear Nueva Cita</h1>
    <form action="{{ route('citas.store') }}" method="POST">
        @csrf
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required>
        <br>
        <label for="hora">Hora:</label>
        <input type="time" name="hora" id="hora" required>
        <br>
        <label for="id_cliente">Cliente:</label>
        <select name="id_cliente" id="id_cliente">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id_cliente }}">{{ $cliente->nombre }}</option>
            @endforeach
        </select>
        <br>
        <label for="id_mascota">Mascota:</label>
        <select name="id_mascota" id="id_mascota">
            @foreach ($mascotas as $mascota)
                <option value="{{ $mascota->id_mascota }}">{{ $mascota->nombre }}</option>
            @endforeach
        </select>
        <br>
        <label for="id_servicio">Servicio:</label>
        <select name="id_servicio" id="id_servicio">
            @foreach ($servicios as $servicio)
                <option value="{{ $servicio->id_servicio }}">{{ $servicio->nombre_servicio }}</option>
            @endforeach
        </select>
        <br>
        <label for="id_empleado">Empleado:</label>
        <select name="id_empleado" id="id_empleado">
            @foreach ($empleados as $empleado)
                <option value="{{ $empleado->id_empleado }}">{{ $empleado->nombre }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('citas.index') }}">Volver</a>
</body>
</html>
