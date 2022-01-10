<?php

use App\Http\Controllers\BuscadorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\BuscaralumController;
use App\Http\Controllers\AsignaralumempresasController;
use App\Http\Controllers\AsignaralumproyController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\NuevopController;
use App\Http\Controllers\IndexproyectoController;
use App\Http\Controllers\VacanteproyectoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\DocumentodosController;
use App\Http\Controllers\AsesorunoController;
use App\Http\Controllers\AsesordosController;
use App\Http\Controllers\SolicitudunoController;
use App\Http\Controllers\SolicituddosController;
use App\Http\Controllers\AsigcalifController;
use App\Http\Controllers\AsigcalifdosController;
use App\Http\Controllers\AsignarAlumnoController;

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

Route::post('buscar', [HomeController::class, 'buscar']);

Route::get('registro', [RegistroController::class, 'nuevoregistro']);

Route::post('registro/municipios', [RegistroController::class, 'municipios']);

Route::get('vacantes', [VacanteController::class, 'create']);

Route::post('vacantes/nuevo', [VacanteController::class, 'nuevo']);

Route::get('proyectos', [ProyectoController::class, 'mostrar']);

Route::get('proyectos/buscar', [ProyectoController::class, 'buscar']);

Route::get('proyectosnuevo', [ProyectoController::class, 'nuevo']);

Route::post('registro/nuevo', [RegistroController::class, 'guardar']);

Route::get('busquedaalumnos', [BuscaralumController::class, 'mostraralumnos']); //primero en el buscador, segundo nombre de la funcion

Route::post('asignacionaempresas', [AsignaralumempresasController::class, 'asignaraempresas']);

Route::post('asignacionaempresas/nuevo', [AsignaralumempresasController::class, 'asignar']);

Route::post('asignacionaproyectos', [AsignaralumproyController::class, 'asignaraproyectos']);

Route::post('asignacionaproyectos/nuevo', [AsignaralumproyController::class, 'asignar']);

Route::get('departamento', [DepartamentoController::class, 'mostrarDep']);

Route::post('departamento/nuevo', [DepartamentoController::class, 'nuevoDep']);

Route::get('prueba', [IndexproyectoController::class, 'proyect']);

Route::get('empresa', [nuevopController::class, 'nuevop']);

Route::post('enviar', [nuevopController::class, 'guardarproyecto']);

Route::get('vacanteproyecto', [VacanteproyectoController::class, 'mostrarvacante']);

Route::post('enviavacantep', [VacanteproyectoController::class, 'agregavacantes']);

Route::get('documentos', [DocumentoController::class, 'mostrardocs']);

Route::get('creardocumento', [DocumentodosController::class, 'creardocs']);

Route::get('asesoruno', [AsesorunoController::class, 'asesorprincipal']);

Route::post('enviarasesor', [AsesorunoController::class, 'guardarasesor']);

Route::get('asesordos', [AsesordosController::class, 'asesorsegundo']);

Route::get('solicitud', [SolicitudunoController::class, 'solicitudasesor']);

Route::get('relacion', [SolicituddosController::class, 'asesoralumno']);

Route::get('calificaciones', [AsigcalifController::class, 'buscarcalif']);

Route::get('asignarcalificaciones', [AsigcalifdosController::class, 'asignarcalif']);

