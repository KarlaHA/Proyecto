<?php

namespace App\Http\Controllers;

use App\Models\Alumnosporcarrera;
use App\Models\Asesorexterno;
use App\Models\Asigdocente;
use App\Models\Registrodocente;
use App\Models\Registroempresa;
use Illuminate\Http\Request;

class AsesorexternoController extends Controller
{
    //
    public function asesores() //tiene que ser un nombre diferente
    {
        $list = Asesorexterno::join('registroempresas', 'asesorexternos.empresa_id', '=', 'registroempresas.id')
        ->select('asesorexternos.id','registroempresas.id as empresa_id', 'asesorexternos.nombre', 'registroempresas.nombre as nombreempresa', 'asesorexternos.correo', 'asesorexternos.telefono', 'asesorexternos.cargo')
        ->get();
        //return $list;
        return view('asesoresexternos/asesorexterno', compact('list'));
    }
    public function nuevo() //tiene que ser un nombre diferente
    {
        $list = Registroempresa::all();
        return view('asesoresexternos/nuevoasesor', compact('list'));
    }
    public function asignacion(Request $request) //tiene que ser un nombre diferente
    {
        $asesor =Asesorexterno::join('registroempresas', 'asesorexternos.empresa_id', '=', 'registroempresas.id')
        ->select('asesorexternos.id','registroempresas.id as empresa_id', 'asesorexternos.nombre', 'registroempresas.nombre as nombreempresa', 'asesorexternos.correo', 'asesorexternos.telefono', 'asesorexternos.cargo')
        ->where('asesorexternos.id', $request->id)->get();
        $alumnos= Alumnosporcarrera::all();

        //return $asesor;
        return view('asesoresexternos/asignarasesor', compact('asesor', 'alumnos'));
    }
    public function guardar(Request $request)
    {

        $nregistro = new Asesorexterno();
        $nregistro->nombre= $request->nombre;
        $nregistro->empresa_id= $request->empresa;
        $nregistro->correo= $request->correo;
        $nregistro->telefono= $request->telefono;
        $nregistro->cargo= $request->cargo;

        $nregistro->save();

        return redirect('asesorexterno');

    }
    public function asignar(Request $request)
    {

        $nregistro = Asigdocente::where('alumno_id', $request->alumno_id)->get();
        $nregistro[0]->estatus= 'Asignado';
        $nregistro[0]->tipo= 'Asesor externo';
        $nregistro[0]->docente_id= null;
        $nregistro[0]->asesorexterno_id= $request->asesorexterno_id;
        $nregistro[0]->alumno_id= $request->alumno_id;

        $nregistro[0]->save();

        return redirect('asesorexterno');

    }
}
