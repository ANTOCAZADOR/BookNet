<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
</head>
<body>
    <h1>Editar usuario</h1>
    <form action="{{ route('usuario.update', $usuario) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for= "nombre">Nombre:</label><br>
        <input type="text" name="nombre" value="{{ old('nombre') ?? $usuario->nombre }}"><br>

        <label for= "email">Email:</label><br>
        <input type="text" name="email" value="{{ old('email') ?? $usuario->email }}">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for= "password">Password:</label><br>
        <input type="text" name="password" value="{{ old('password') ?? $usuario->password}}"><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>