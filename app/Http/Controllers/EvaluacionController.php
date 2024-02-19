<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcial;

class EvaluacionController extends Controller
{
    public function show(string $id)
    {
        
        $parcial = Parcial::findOrFail($id);
        $evaluaciones = $parcial->evaluaciones()->get();
        return $evaluaciones;


        //$personas = $asignatura->personas()->get();
        /*
        return view('calificaciones.asignatura',[
            'parcial'=>$parcial,
            'evaluaciones'=>$evaluaciones,
        ]);
        */
    }

    
}
