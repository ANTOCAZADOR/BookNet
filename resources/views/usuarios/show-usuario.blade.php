<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de usuario</title>
</head>
<body>
    <h1>{{ $usuario->nombre }}</h1>
    <form action="{{ route('usuario.show', $usuario) }}"method="POST">
    <ul>
        <li>{{ $usuario->email }}</li>
        <li>{{ $usuario->rol }}</li>
        <li>{{ $usuario->password }}</li>
        <li>{{ $usuario->created_at }}</li>
        <li>{{ $usuario->updated_at }}</li>
    </ul>

    <a href="{{ route('usuario.edit', $usuario) }}">Editar</a><br>

    <form action="{{ route('usuario.destroy', $usuario) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Borrar">
    </form>
</body>
</html>