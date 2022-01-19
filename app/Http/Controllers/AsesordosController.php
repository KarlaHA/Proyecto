<?php

namespace App\Http\Controllers;

use App\Models\Asigdocente;
use App\Models\Registrodocente;
use Illuminate\Http\Request;

class AsesordosController extends Controller
{
    //
    public function asesorsegundo()
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
        $nasesor=Registrodocente::where('docente', $request->input('docente'))->get();
        $nasignacion = new Asigdocente();
        $nasignacion->estatus = "No asignado";
        $nasignacion->docente_id = $nasesor[0]->id;
        $nasignacion->save();


        return redirect('/asesoruno');
    }
}
