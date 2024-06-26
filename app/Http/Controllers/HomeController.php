<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;
use App\Models\Evento;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function calificaciones(){
        //$carreras = Carrera::all();
        return view('calificaciones',[
            //'carreras'=>$carreras,
        ]);
    }

    public function certificados(){
        $eventos = Evento::all();
        return view('certificados',[
            'eventos'=>$eventos,
        ]);
    }

    public function memorias(){
        return view('memorias');
    }
}
