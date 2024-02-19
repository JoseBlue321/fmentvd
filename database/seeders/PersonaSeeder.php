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
            'carnet'=>'001',
            'nombre'=>'JOSE',
            'paterno'=>'APAZA',
            'materno'=>'SAAVEDRA',
        ]);

        Persona::create([
            'carnet'=>'002',
            'nombre'=>'ANA',
            'paterno'=>'MAMANI',
            'materno'=>'PEREZ',
        ]);

        Persona::create([
            'carnet'=>'003',
            'nombre'=>'CARLOR',
            'paterno'=>'CONDORI',
            'materno'=>'PEREZ',
        ]);

        Persona::create([
            'carnet'=>'004',
            'nombre'=>'MARIA',
            'paterno'=>'GALARZA',
            'materno'=>'PEREZ',
        ]);

        Persona::create([
            'carnet'=>'005',
            'nombre'=>'MARIA',
            'paterno'=>'DELGADO',
            'materno'=>'ANDRADE',
        ]);

        Persona::create([
            'carnet'=>'006',
            'nombre'=>'MARINA',
            'paterno'=>'LOZA',
            'materno'=>'CONDE',
        ]);
        
    }
}
