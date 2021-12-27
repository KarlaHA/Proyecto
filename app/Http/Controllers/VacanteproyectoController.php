<?php

namespace App\Http\Controllers;
use App\Models\Registroproyecto;
use Illuminate\Http\Request;
use App\Models\vacantesproyecto;

class VacanteproyectoController extends Controller
{
    //
    public function mostrarvacante()
    {
            
        return view ('proyectos.vacantesproyect');
             
    }

    public function agregavacantes(Request $request)
    {

        $nvacante = new vacantesproyecto();
        $nvacante->carrera = $request->input('carrera');
        $nvacante->cantidad = $request->input('cantidad');
        $nvacante->registroproyectos_id = $nvacante->proyecto;
    

        $nvacante->save();

        return redirect('/vacanteproyecto');
    }
}