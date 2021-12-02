<?php

namespace App\Http\Controllers;

use App\Models\Registroempresa;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function nuevoregistro()
    {
        return view('pagina2');
    }

    public function guardar(Request $registro)
    {
        $nregistro = new Registroempresa();
        $nregistro->nombre = $registro->nombre;
        $nregistro->representante = $registro->representante;
        $nregistro->ciudad = $registro->ciudad;
        $nregistro->estado = $registro->estado;
        $nregistro->carrera = $registro->carrera;
        $nregistro->estatus = $registro->estatus;

        $nregistro->save();

        return redirect('http://localhost/proyecto/public');
    }
    
}
