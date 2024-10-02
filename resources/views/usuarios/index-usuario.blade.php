<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
<h1>Lista de Usuarios</h1>

<p>
    <a href="{{ route('usuario.create') }}">Agregar Usuario</a>
</p>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>
                <a href="{{ route('usuario.show', $usuario) }}">
                    {{ $usuario->nombre }}
                </a>
            </td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->rol }}</td>
            <td>{{ $usuario->created_at }}</td>
            <td>{{ $usuario->updated_at }}</td>
            <td>
                <a href="{{ route('usuario.edit', $usuario) }}">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>