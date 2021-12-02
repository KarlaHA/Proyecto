<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function mostrar()
    {
        return view('proyectos');
    }
    public function buscar()
    {
        return view('proyectos');
    }
    public function nuevo()
    {
        return view('nuevoproyecto');
    }
}
