<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Registroempresa;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function mostrarDep()
    {
            
        $registros=Registroempresa::all();
        return view ('adddepartamento', compact('registros'));
             
    }

    public function nuevoDep(Request $registro)
    {
        $nregistro = new Departamento();
        $nregistro->nombre = $registro->nombre;
        $nregistro->empresa_id = $registro->empresa;

        $nregistro->save();

        return redirect('/vacantes');

    }
}
