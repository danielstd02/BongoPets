<!DOCTYPE html>
<html>
<head>
    <title>Servicios</title>
</head>
<body>
    <h1>Servicios</h1>
    <a href="{{ route('servicios.create') }}">Crear Nuevo Servicio</a>
    <ul>
        @foreach ($servicios as $servicio)
            <li>
                {{ $servicio->nombre_servicio }} - {{ $servicio->precio }}
                <a href="{{ route('servicios.edit', $servicio->id_servicio) }}">Editar</a>
                <form action="{{ route('servicios.destroy', $servicio->id_servicio) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
