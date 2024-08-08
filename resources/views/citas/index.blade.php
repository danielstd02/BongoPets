<!DOCTYPE html>
<html>
<head>
    <title>Citas</title>
</head>
<body>
    <h1>Citas</h1>
    <a href="{{ route('citas.create') }}">Crear Nueva Cita</a>
    <ul>
        @foreach ($citas as $cita)
            <li>
                {{ $cita->fecha }} - {{ $cita->hora }}
                <a href="{{ route('citas.edit', $cita->id_cita) }}">Editar</a>
                <form action="{{ route('citas.destroy', $cita->id_cita) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
