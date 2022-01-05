<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesorunoController extends Controller
{
    //
    public function asesorprincipal()
    {
        return view ('asesoresinternos.index');
         
    }
    public function guardarasesor(Request $request)
    {

        $nasesor = new Asesordocente();
        $nasesor->nombre = $request->input('docente');
        $nasesor->docente = $request->input('carrera');
        $nasesor->periodo = $request->input('periodo');
        $nasesor->periodo = $request->input('vacantes');

    

        $nasesor->save();

        return redirect('/asesoruno');
    }
}
