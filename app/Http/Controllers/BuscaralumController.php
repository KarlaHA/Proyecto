<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnosporcarrera;
class BuscaralumController extends Controller
{
    public function mostraralumnos() //tiene que ser un nombre diferente
    {
        $listaalumnos = Alumnosporcarrera::join('assignments', 'alumnosporcarreras.id', '=', 'assignments.alumno_id')
        ->select('alumnosporcarreras.id', 'alumnosporcarreras.matricula', 'alumnosporcarreras.nombre', 'alumnosporcarreras.carrera', 'alumnosporcarreras.semestre', 'alumnosporcarreras.creditos')
        ->where('assignments.estatus', 'LIKE', 'No asignado')->get();
        return view('addalumnos/addalumnosuno', compact('listaalumnos'));
    }
}
