<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{

    public function index()
    {
        return view('certificados.evento');
    }

    public function verificacion(Request $request)
    {
        $request->validate([
            'codigo' => ['exists:App\Models\Evento,codigo'],
            'carnet' => ['exists:App\Models\Participante,carnet'],
        ]);
        $codigo = $request->input('codigo');
        $carnet = $request->input('carnet');

        $participantes = DB::select("select p.carnet,p.nombre,p.paterno,p.materno,p.correo,p.telefono,p.certificado, e.codigo,e.evento,e.detalle,e.fecha 
        from eventos e 
        inner join participantes p on e.id = p.evento_id
        where e.codigo = $codigo and p.carnet = '$carnet'");
        
        if($participantes != null ){
            return view('certificados.participante',[
                'participantes'=>$participantes,
            ]);
        }else{
            return to_route('index.evento');
        }


    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
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
