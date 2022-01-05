<?php

namespace App\Http\Controllers;
use App\Models\Registrodocente;
use Illuminate\Http\Request;

class AsesordosController extends Controller
{
    //
    public function asesorsegundo()
    {
        
        $list = Registrodocente:: all();
        return view('asesoresinternos.asesoresregis', compact('list'));
         
    }
}
