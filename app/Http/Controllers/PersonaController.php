<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MOdels\Persona;

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
            'carnet' => ['exists:App\Models\Persona,carnet'],
        ]);
        $carnet = $request->input('carnet');
        $personas = Persona::where('carnet','=',$carnet)->get();

        return view('calificaciones.asignatura',
        [
            'personas'=>$personas,
        ]);
        
        
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
