<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentodosController extends Controller
{
    public function creardocs() //tiene que ser un nombre diferente
    {
        return view('docs/docdos');
    }
}
