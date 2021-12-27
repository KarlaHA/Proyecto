<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registroempresa;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke()
    {
            
        $registros=Registroempresa::all();

        
        return view('index', compact('registros'));
    }
    /*public function buscar(Request $request)
    {
        $txtnombre=$request->get('nombre');
            $txtestatus=$request->get('estatus');
            $txtcarrera=$request->get('carrera');
            if ($txtestatus =='vacio'&& $txtcarrera  =='vacio')

                {$registros = DB::table('registroempresas')
                            ->where('nombre','LIKE', '%'.$txtnombre.'%')
                            ->orderBy('id', 'desc')->get();}
                           
                            else

                            {$registros = DB::table('registroempresas')
                            ->where('estatus', $txtestatus)
                            ->where('carrera','LIKE', '%'.$txtcarrera.'%')
                            ->orderBy('id', 'desc')->get();}

        return view('index', compact('registros', 'txtnombre', 'txtestatus', 'txtcarrera'));
    }*/
    public function buscar(Request $request){
        
        if(isset($request->texto))
        {
            $registros= DB::table('registroempresas')->orWhere("nombre",'like',$request->texto."%")
                                                 ->orWhere("carrera",'like',$request->texto."%")
                                                 ->orWhere("representante",'like',$request->texto."%")
                                                 ->orWhere("ciudad",'like',$request->texto."%")
                                                 ->orWhere("estado",'like',$request->texto."%")
                                                 ->orWhere("estatus",'like',$request->texto."%")->get();
            return response()->json(
                [
                    'lista' => $registros,
                    'success' => true
                ]
                );
        }
        else{
            $registros=Registroempresa::all();
            return response()->json(
                [
                    'lista' => $registros,
                    'success' => true
                ]
                );

        }
    }
}
