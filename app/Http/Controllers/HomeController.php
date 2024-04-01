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
        $evento = Evento::findOrFail(2); //ejemplo "2" es el id del evento
        return view('certificados',[
            'evento'=>$evento,
        ]);
    }

    public function memorias(){
        return view('memorias');
    }
}
