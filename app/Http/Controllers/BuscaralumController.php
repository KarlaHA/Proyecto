<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscaralumController extends Controller
{
    public function mostraralumnos() //tiene que ser un nombre diferente
    {
        return view('addalumnosuno');
    }
}
