<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

//Pagina principal dirige a tablas que se encuentran el el menu
Route::get('/usuarios', function () {
    return view('index');
});
/*Route::get('/', function () {
    return view('index');
});*/

Route::resource( 'usuario', UsuarioController::class)
    ->parameters(['usuario' => 'usuario'])
    ->middleware('auth');

//Route::resource('create-usuario', UsuarioController::class)->parameters(['usuario' => 'usuario']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/landing', function () {
    return view('landing');
});