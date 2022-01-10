<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Registroproyecto;
use Illuminate\Http\Request;

class AsignaralumproyController extends Controller
{
    public function asignaraproyectos(Request $request) //tiene que ser un nombre diferente
    {
        $registros = Registroproyecto::all();
        return view('addalumnos/addalumnoscuatro', compact('request', 'registros'));
    }
    public function asignar(Request $request)
    {
        $nregistro = new Assignment();
        $nregistro = Assignment::where('alumno_id', $request->alumnoid)->get();
        
        $nregistro[0]->alumno_id = $request->alumnoid;
        $nregistro[0]->empresa_id = 0;
        $nregistro[0]->proyecto_id = $request->proyectoid;
        $nregistro[0]->estatus = $request->estatus;

        $nregistro[0]->save();

        return redirect('/busquedaalumnos');
    }
}
