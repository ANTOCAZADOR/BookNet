@extends('layouts.plantillabase')

@section('contenido')
<h1>Lista de Usuarios</h1>

<p>
    <a href="{{ route('usuario.create') }}">Agregar Usuario</a>
</p>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Rol</th>
            <th scope="col">Password</th>
            <th scope="col">Creado</th>
            <th scope="col">Modificación</th>
            <th scope="col">Acciones</th>
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
            <td>{{ $usuario->password }}</td>
            <td>{{ $usuario->created_at }}</td>
            <td>{{ $usuario->updated_at }}</td>
            <td>
                <form action="{{ route ('usuario.destroy', $usuario) }}" method="POST">
                <a class="btn btn-info" href="{{ route('usuario.edit', $usuario) }}">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
 </table>
@endsection
