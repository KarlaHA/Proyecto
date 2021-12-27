<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registroproyecto;


class IndexproyectoController extends Controller
{
    //
    public function proyect()
    {

        $lista = Registroproyecto:: all();
    return view('proyectos/nuevoproyecto', compact('lista'));

         
    }
}
