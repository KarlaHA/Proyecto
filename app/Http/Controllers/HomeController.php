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
    public function buscar(Request $request)
    {
        $txtnombre=$request->get('nombre');
            $txtestatus=$request->get('estatus');
            $txtcarrera=$request->get('carrera');

                $registros = DB::table('registroempresas')
                            ->where('nombre','LIKE', '%'.$txtnombre.'%')
                            ->where('estatus', $txtestatus)
                            ->where('carrera','LIKE', '%'.$txtcarrera.'%')
                            ->orderBy('id', 'desc')->get();

        return view('index', compact('registros', 'txtnombre', 'txtestatus', 'txtcarrera'));
    }
}
