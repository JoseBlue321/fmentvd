<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoriaController extends Controller
{
    public function proyectos(){
        return view('memorias.proyectos');
    }
    public function articulos(){
        return view('memorias.articulos');
    }
    public function libros(){
        return view('memorias.libros');
    }
    public function tesis(){
        return view('memorias.tesis');
    }
    public function aportes(){
        return view('memorias.aportes');
    }
}
