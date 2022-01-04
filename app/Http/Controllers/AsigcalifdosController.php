<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsigcalifdosController extends Controller
{
    public function asignarcalif() //tiene que ser un nombre diferente
    {
        return view('asigcalificaciones/asigcalificacionesdos');
    }
}
