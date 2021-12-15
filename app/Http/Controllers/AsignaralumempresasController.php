<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignaralumempresasController extends Controller
{
    public function asignaraempresas() //tiene que ser un nombre diferente
    {
        return view('addalumnos/addalumnostres');
    }
}
