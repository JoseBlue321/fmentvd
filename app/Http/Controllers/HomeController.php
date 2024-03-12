<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

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
        return view('certificados');
    }

    public function memorias(){
        return view('memorias');
    }
}
