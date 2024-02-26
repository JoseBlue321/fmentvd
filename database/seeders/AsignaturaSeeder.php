<?php

namespace Database\Seeders;

use App\Models\Asignatura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignaturaSeeder extends Seeder
{
    public function run(): void
    {
        Asignatura::create(['id'=>1,'curso_id'=>4,'nombre'=>'Inmunologia','detalle'=>'Dra. Jacqueline Cortes']);
    }
}
