<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Vacante;
use Illuminate\Http\Request;

class VacanteController extends Controller
{
    public function create()
    {
            
        $registros=Departamento::all();
        return view ('addvacantes', compact('registros'));
             
    }
    public function nuevo(Request $registro)
    {
        $nregistro = new Vacante();
        $nregistro->periodo = $registro->periodo;
        $nregistro->carrera = $registro->carrera;
        $nregistro->cantidad = $registro->cantidad;
        $nregistro->departamento_id = $registro->departamento;

        $nregistro->save();

        return redirect('/vacantes');

    }

        
}
    


