<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function mostrardocs() //tiene que ser un nombre diferente
    {
        return view('docs/docuno');
    }
}
