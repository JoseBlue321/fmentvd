<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Parcial;

class ParcialSeeder extends Seeder
{
    public function run(): void
    {
        Parcial::create(['id'=>1,'asignatura_id'=>1,'parcial'=>'Primer Parcial','patron'=>'1.pdf','fecha'=>'24/02/2024']);

    }
}
