<?php

namespace App\Http\Controllers;


use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsignaralumempresasController extends Controller
{
    public function asignaraempresas(Request $request) //tiene que ser un nombre diferente
    {
        $registros = DB::table('registroempresas')->where("carrera",'like',"%".$request->carrera."%")
                                                  ->where("estatus",'Activo')->get();;

        return view('addalumnos/addalumnostres', compact('registros', 'request'));
    }
    public function asignar(Request $request)
    {
        $nregistro = new Assignment();
        $nregistro = Assignment::where('alumno_id', $request->alumnoid)->get();
        $nregistro[0]->alumno_id = $request->alumnoid;
        $nregistro[0]->empresa_id = $request->empresaid;
        $nregistro[0]->proyecto_id = 0;
        $nregistro[0]->estatus = $request->estatus;
        $nregistro[0]->save();

        return redirect('/busquedaalumnos');
    }
}
