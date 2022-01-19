<?php

namespace App\Http\Controllers;

use App\Models\Alumnosporcarrera;
use App\Models\Asigdocente;
use App\Models\Registrodocente;
use Illuminate\Http\Request;

class AsesorunoController extends Controller
{
    //
    public function asesorprincipal()
    {
        $list = Registrodocente::where('cantidad', '>=', 1)->get();
        return view('asesoresinternos.asesoresregis', compact('list'));
        
         
    }
    public function asignar(Request $request)
    {
        $lista = Alumnosporcarrera::join('asigdocentes', 'alumnosporcarreras.id', '=', 'asigdocentes.alumno_id')
        ->select('alumnosporcarreras.id', 'alumnosporcarreras.matricula', 'alumnosporcarreras.nombre', 'alumnosporcarreras.carrera', 'alumnosporcarreras.semestre', 'alumnosporcarreras.creditos')
        ->where('asigdocentes.estatus', 'LIKE', 'No asignado')->where('carrera', 'LIKE', $request->carrera)->get();
        /*$lista = Alumnosporcarrera::where('carrera', $request->carrera)->get();*/
        return view('asesoresinternos.asignardocente', compact('lista', 'request'));
        
         
    }
    public function guardar(Request $request)
    {
        $asignacion = Asigdocente::where('alumno_id', $request->id)->get();
        $docente = Registrodocente::where('id', $request->docenteid)->get();
        $asignacion[0]->alumno_id=$request->id;
        $asignacion[0]->docente_id=$request->docenteid;
        $asignacion[0]->estatus='Asignado';
        $asignacion[0]->save();
        $docente[0]->cantidad = ($docente[0]->cantidad)-1;
        $docente[0]->save();

        return redirect('/asesoruno');

    }
    
}
