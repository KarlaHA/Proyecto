<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsigcalifController extends Controller
{
    public function buscarcalif() //tiene que ser un nombre diferente
    {
        return view('asigcalificaciones/asigcalificacionesuno');
    }
}
