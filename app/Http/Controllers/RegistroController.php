<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Registroempresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    public function nuevoregistro()
    {
        $estados = Estado::all();
        return view('pagina2', compact('estados'));
    }

    public function guardar(Request $registro)
    {
        $est= DB::table('estados')->select('nombre')->where('id', $registro->estado)->get();
        
        $nregistro = new Registroempresa();
        $nregistro->nombre = $registro->nombre;
        $nregistro->representante = $registro->representante;
        $nregistro->ciudad = $registro->ciudad;
        $nregistro->estado = $est[0]->nombre;
        $nregistro->carrera = $registro->carrera;
        $nregistro->estatus = $registro->estatus;

        $nregistro->save();

        return redirect('/departamento');
    }
    public function municipios(Request $request)
    {

        if(isset($request->texto))
        {
            $municipios= DB::table('municipios')->where('estado_id', $request->texto)->get();
            return response()->json(
                [
                    'lista' => $municipios,
                    'success' => true
                ]
                );
        }
        else{
            return response()->json(
                [
                    'success' => false
                ]
                );

        }
        
    }
}
