<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class UsuarioController extends Controller implements HasMiddleware
{
    //Controla el acceso a diferentes partes de la app segun el estado de autenticación del usuario.
    public static function middleware(): array 
    {
        return [
            new Middleware('auth', except: ['index', 'show']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index-usuario', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
