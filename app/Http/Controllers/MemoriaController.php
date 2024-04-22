<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class MemoriaController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nombre'=>['required','string'],
            'telefono'=>['required'],
            'correo'=>['required'],
            'password'=>['required','min:5'],
        ]);
        $autor = Autor::create([
            'nombre'=>$request->input('nombre'),
            'telefono'=>$request->input('telefono'),
            'correo'=>$request->input('correo'),
            'password'=>$request->input('password'),
        ]);
        return to_route('memorias');
    }

    public function login(Request $request){
        return $request;
    }

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
    public function organizadores(){
        return view('memorias.organizadores');
    }
    public function patentes(){
        return view('memorias.patentes');
    }
}
