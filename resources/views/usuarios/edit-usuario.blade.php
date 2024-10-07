@extends('layouts.plantillabase')

@section('contenido')
    <title>Editar usuario</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="{{ route('usuario.update', $usuario) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-2">
        <label for= "nombre" class="form-label">Name:</label><br>
        <input type="text" name="nombre" class="form-control" tabindex="1" value="{{ old('nombre') ?? $usuario->nombre }}"><br>
        </div>

        <div class="mb-2">
        <label for= "email" class="form-label">Email:</label><br>
        <input type="text" name="email" class="form-control" tabindex="1" value="{{ old('email') ?? $usuario->email }}">
        </div>

        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-2">
        <label for= "password" class="form-label">Password:</label><br>
        <input type="text" name="password" class="form-control" tabindex="1" value="{{ old('password') ?? $usuario->password}}"><br>
        </div>

        <button type="submit" class="btn btn-primary">Send</button>
        
    </form>
    @endsection