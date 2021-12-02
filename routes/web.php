<?php

use App\Http\Controllers\BuscadorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\VacanteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);

Route::get('buscar', [HomeController::class, 'buscar']);

Route::get('registro', [RegistroController::class, 'nuevoregistro']);

Route::get('vacantes', [VacanteController::class, 'create']);

Route::get('proyectos', [ProyectoController::class, 'mostrar']);

Route::get('proyectos/buscar', [ProyectoController::class, 'buscar']);

Route::get('proyectosnuevo', [ProyectoController::class, 'nuevo']);

Route::post('registro/nuevo', [RegistroController::class, 'guardar']);

