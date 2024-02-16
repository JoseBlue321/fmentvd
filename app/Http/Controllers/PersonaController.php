<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {
        $request->validate([
            'asignatura_id' => 'exists:App\Models\Asignatura,id',
            'carnet' => 'exists:App\Models\Persona,carnet',
        ]);

        $asignatura_id = $request->input('asignatura_id');
        $carnet = $request->input('carnet');

        $persona = DB::select("select p.id,p.carnet,p.nombre,p.paterno,p.materno,p.nota,p.imagen,a.patron,a.id as asignatura_id 
        from asignaturas a 
        inner join personas p on a.id = p.asignatura_id 
        where p.asignatura_id = $asignatura_id and p.carnet ='$carnet';");

        if($persona != null){
            return view('calificaciones.persona',[
                'persona'=>$persona
            ]);
        }else{
            return to_route('asignatura',$asignatura_id);
        }

        
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
