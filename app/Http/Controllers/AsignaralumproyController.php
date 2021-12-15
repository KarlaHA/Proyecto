<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignaralumproyController extends Controller
{
    public function asignaraproyectos() //tiene que ser un nombre diferente
    {
        return view('addalumnos/addalumnoscuatro');
    }
}
