<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioController extends Controller
{
    public function index(){
        //return "Aqui estaran las estadisticas de CR7";
        
        $nombre = "CR7";
        
        return view('biografia.biocontroller', [
            'CR' => $nombre
        ]);
    }
}
