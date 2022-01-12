<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnosporcarrera;
class MostraralumController extends Controller
{
    public function presentaralumnos() //tiene que ser un nombre diferente
    {
        $listaalumnos = Alumnosporcarrera::join('assignments', 'alumnosporcarreras.id', '=', 'assignments.alumno_id')
        ->select('alumnosporcarreras.id', 'alumnosporcarreras.matricula', 'alumnosporcarreras.nombre', 'alumnosporcarreras.carrera', 'alumnosporcarreras.semestre', 'alumnosporcarreras.creditos')
        ->where('assignments.estatus', 'LIKE', 'Asignado')->get();
        return view('addalumnos/addalumnosdos', compact('listaalumnos'));
    }
}