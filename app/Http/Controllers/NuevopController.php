<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registroproyecto;
use Illuminate\Support\Facades\DB;

class NuevopController extends Controller
{
    //
    public function nuevop()
    {
        return view ('proyectos.create');
         
    }
    public function guardarproyecto(Request $request)
    {

        $nproyecto = new Registroproyecto();
        $nproyecto->nombre = $request->input('nombre');
        $nproyecto->docente = $request->input('docente');
        $nproyecto->periodo = $request->input('periodo');
    

        $nproyecto->save();

        return redirect('/vacanteproyecto');
    }
}
