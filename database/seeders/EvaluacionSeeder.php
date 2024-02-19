<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evaluacion;

class EvaluacionSeeder extends Seeder
{
    public function run(): void
    {
        Evaluacion::create([
            'parcial_id'=>1,
            'persona_id'=>1,
            'nota'=>10,
            'imagen'=>'001.jpg',
        ]);
        Evaluacion::create([
            'parcial_id'=>1,
            'persona_id'=>2,
            'nota'=>20,
            'imagen'=>'002.jpg',
        ]);
        Evaluacion::create([
            'parcial_id'=>1,
            'persona_id'=>3,
            'nota'=>30,
            'imagen'=>'003.jpg',
        ]);

        Evaluacion::create([
            'parcial_id'=>2,
            'persona_id'=>1,
            'nota'=>12,
            'imagen'=>'001.jpg',
        ]);
        Evaluacion::create([
            'parcial_id'=>2,
            'persona_id'=>2,
            'nota'=>22,
            'imagen'=>'002.jpg',
        ]);
        Evaluacion::create([
            'parcial_id'=>2,
            'persona_id'=>3,
            'nota'=>33,
            'imagen'=>'003.jpg',
        ]);
    }
}
