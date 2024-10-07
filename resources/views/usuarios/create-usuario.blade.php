@extends('layouts.plantillabase')

@section('contenido')
    <title>Crear usuario</title>

    <h1>Create User</h1>
    <form action="{{ route('usuario.store') }}"method="POST">
        @csrf

        <div class="mb-2">
        <label for= "nombre" class="form-label">Name:</label><br>
        <input type="text" name="nombre" class="form-control" tabindex="1" value="{{ old('nombre')}}"><br>
        </div>

        <div class="mb-2">
        <label for= "email">Email:</label><br>
        <input type="text" name="email" class="form-control" tabindex="2" value="{{ old('email')}}">
        </div>

        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-2">
        <label for= "password">Password:</label><br>
        <input type="text" name="password" class="form-control" tabindex="3" value="{{ old('password')}}"><br>
        </div>

        <button type="submit" class="btn btn-primary">Send</button>
    </form>

@endsection