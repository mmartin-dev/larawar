<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function index(){
        //return "Aqui estaran las estadisticas de CR7";
        
        $nombre = "CR7";
        
        return view('stats.statscontroller', [
            'CR' => $nombre
        ]);
    }
}
