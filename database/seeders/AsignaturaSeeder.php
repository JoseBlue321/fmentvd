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
            'nombre'=>'ANATOMIA',
            'detalle'=>'PRIMER PARCIAL - DR. Choque',
            'patron'=>'1.jpg',
        ]);

        Asignatura::create([
            'curso_id'=>1,
            'nombre'=>'Embriologia Y Genetica',
            'detalle'=>'PRIMER PARCIAL  - DR. PEREZ',
            'patron'=>'2.jpg',
        ]);

        Asignatura::create([
            'curso_id'=>1,
            'nombre'=>'Histologia',
            'detalle'=>'PRIMER PARCIAL TERCER AÑO  - DR. LOZA',
            'patron'=>'3.jpg',
        ]);
    }
}
