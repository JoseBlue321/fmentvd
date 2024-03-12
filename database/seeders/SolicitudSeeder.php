<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Solicitud;

class SolicitudSeeder extends Seeder
{

    public function run(): void
    {
        Solicitud::create([
            'nombre'=>'Dr. Martin Villarroel Mareño',
            'celular'=>'72589745',
            'correo'=>'vicedecano@gmail.com',
            'asignatura'=>'Anatomia Humana',
            'carrera'=>'Medicina',
            'departamento'=>'',
            'catedra'=>'',
            'anio'=>'Primer año',
            'tipo'=>'Primer Parcial',
            'fecha_examen'=>'2024/02/05',
            'numero_preguntas'=>100,
        ]);
    }
}
