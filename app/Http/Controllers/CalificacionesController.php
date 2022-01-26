<?php

namespace App\Http\Controllers;

use App\Models\Alumnosporcarrera;
use App\Models\Asesorexterno;
use App\Models\Asigdocente;
use Illuminate\Http\Request;

class CalificacionesController extends Controller
{
    //
    public function index()
    {
        $lista = Asigdocente::join('asesorexternos', 'asesorexternos.id', '=','asigdocentes.asesorexterno_id')
                            ->join('alumnosporcarreras', 'asigdocentes.alumno_id', '=', 'alumnosporcarreras.id')
                            ->select('alumnosporcarreras.id as alumnoid', 'alumnosporcarreras.matricula', 'alumnosporcarreras.nombre as alumnonombre', 'asesorexternos.id as asesorid','asesorexternos.nombre', 'asesorexternos.empresa_id','alumnosporcarreras.cal_p1', 'alumnosporcarreras.cal_p2')
                            ->where('asigdocentes.estatus', '=', 'Asignado')->get();

        return view('calificaciones/calificacionesindex', compact('lista'));
    }
    public function asignar(Request $request)
    {
        $nregistro = Alumnosporcarrera::where('id', $request->id)->get();
        $nregistro[0]->cal_p1 = $request->cal_p1;
        $nregistro[0]->cal_p2 = $request->cal_p2;

        $nregistro[0]->save();

        return redirect('calificaciones');
    }
}
