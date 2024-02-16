<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    public function run(): void
    {
        Persona::create([
            'asignatura_id'=>1,
            'carnet'=>'001',
            'nombre'=>'JOSE',
            'paterno'=>'APAZA',
            'materno'=>'SAAVEDRA',
            'nota'=>20,
            'imagen'=>'001.jpg',
        ]);

        Persona::create([
            'asignatura_id'=>1,
            'carnet'=>'002',
            'nombre'=>'ANA',
            'paterno'=>'MAMANI',
            'materno'=>'PEREZ',
            'nota'=>30,
            'imagen'=>'002.jpg',
        ]);

        Persona::create([
            'asignatura_id'=>1,
            'carnet'=>'003',
            'nombre'=>'CARLOR',
            'paterno'=>'CONDORI',
            'materno'=>'PEREZ',
            'nota'=>40,
            'imagen'=>'003.jpg',
        ]);

        Persona::create([
            'asignatura_id'=>2,
            'carnet'=>'004',
            'nombre'=>'MARIA',
            'paterno'=>'GALARZA',
            'materno'=>'PEREZ',
            'nota'=>20,
            'imagen'=>'004.jpg',
        ]);

        Persona::create([
            'asignatura_id'=>2,
            'carnet'=>'005',
            'nombre'=>'MARIA',
            'paterno'=>'DELGADO',
            'materno'=>'ANDRADE',
            'nota'=>26,
            'imagen'=>'005.jpg',
        ]);

        Persona::create([
            'asignatura_id'=>3,
            'carnet'=>'006',
            'nombre'=>'MARINA',
            'paterno'=>'LOZA',
            'materno'=>'CONDE',
            'nota'=>26,
            'imagen'=>'006.jpg',
        ]);
        
    }
}
