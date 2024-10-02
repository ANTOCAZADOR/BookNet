<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('pagina_principal');
});*/

Route::resource( 'usuario', UsuarioController::class)
    ->parameters(['usuario' => 'usuario']);