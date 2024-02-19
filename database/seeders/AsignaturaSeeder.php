<?php

namespace Database\Seeders;

use App\Models\Asignatura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignaturaSeeder extends Seeder
{
    public function run(): void
    {
        Asignatura::create([
            'curso_id'=>1,
            'nombre'=>'Anatomia',
            'detalle'=>'DR. Choque',
        ]);

        Asignatura::create([
            'curso_id'=>1,
            'nombre'=>'Embriologia Y Genetica',
            'detalle'=>'DR. PEREZ',
        ]);

        Asignatura::create([
            'curso_id'=>1,
            'nombre'=>'Histologia',
            'detalle'=>'DR. LOZA',
        ]);
    }
}
