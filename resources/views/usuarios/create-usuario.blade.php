<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
</head>
<body>
    <h1>Crear usuario</h1>
    <form action="{{ route('usuario.store') }}"method="POST">
        @csrf

        <label for= "nombre">Nombre:</label><br>
        <input type="text" name="nombre" value="{{ old('nombre')}}"><br>

        <label for= "email">Email:</label><br>
        <input type="text" name="email" value="{{ old('email')}}">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for= "password">Password:</label><br>
        <input type="text" name="password" value="{{ old('password')}}"><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>