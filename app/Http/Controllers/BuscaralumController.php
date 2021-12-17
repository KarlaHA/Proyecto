<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnosporcarrera;
class BuscaralumController extends Controller
{
    public function mostraralumnos() //tiene que ser un nombre diferente
    {
        $listaalumnos = Alumnosporcarrera:: all();
        return view('addalumnos/addalumnosuno', compact('listaalumnos'));
    }
}
