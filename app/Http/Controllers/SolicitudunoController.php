<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudunoController extends Controller
{
    //
    public function solicitudasesor()
    {
        return view ('solicitudasesorint.index');
         
    }
}
