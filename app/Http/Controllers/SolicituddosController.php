<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicituddosController extends Controller
{
    //
    public function asesoralumno()
    {
        return view ('solicitudasesorint.relacion');
         
    }
}
