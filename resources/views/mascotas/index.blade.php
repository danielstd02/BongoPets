<!DOCTYPE html>
<html>
<head>
    <title>Mascoas</title>
</head>
<body>
    <h1>Mascoas</h1>
    <a href="{{ route('mascotas.create') }}">Crear Nueva Mascota</a>
    <ul>
        @foreach ($mascotas as $mascota)
            <li>
                {{ $mascota->nombre }} - {{ $mascota->especie }} - {{ $mascota->raza }}
                <a href="{{ route('mascotas.edit', $mascota->id_mascota) }}">Editar</a>
                <form action="{{ route('mascotas.destroy', $mascota->id_mascota) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
