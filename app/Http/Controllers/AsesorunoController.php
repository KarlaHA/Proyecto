<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesorunoController extends Controller
{
    //
    public function asesorprincipal()
    {
        return view ('asesoresinternos.index');
         
    }
}
