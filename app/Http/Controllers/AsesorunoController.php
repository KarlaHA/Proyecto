<?php

namespace App\Http\Controllers;
use App\Models\Registrodocente;
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

        $nasesor = new Registrodocente();
        $nasesor->docente = $request->input('docente');
        $nasesor->carrera = $request->input('carrera');
        $nasesor->periodo = $request->input('periodo');
        $nasesor->cantidad = $request->input('cantidad');

    

        $nasesor->save();

        return redirect('/asesoruno');
    }
}
