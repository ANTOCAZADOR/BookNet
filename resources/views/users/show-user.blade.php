<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de usuario</title>
</head>
<body>
    <h1>{{ $user->name }}</h1>
    <form action="{{ route('user.show', $user) }}"method="POST">
    <ul>
        <li>{{ $user->email }}</li>
        <li>{{ $user->rol }}</li>
        <li>{{ $user->password }}</li>
        <li>{{ $user->created_at }}</li>
        <li>{{ $user->updated_at }}</li>
    </ul>

    <a href="{{ route('user.edit', $user) }}">Editar</a><br>

    <form action="{{ route('user.destroy', $user) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Borrar">
    </form>
</body>
</html>