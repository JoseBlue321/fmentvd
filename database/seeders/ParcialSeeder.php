<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Parcial;

class ParcialSeeder extends Seeder
{
    public function run(): void
    {
        Parcial::create([
            'asignatura_id'=>1,
            'parcial'=>'Primer Parcial',
            'patron'=>'1.jpg',
            'fecha'=>'01/02/2024',
        ]);
        Parcial::create([
            'asignatura_id'=>1,
            'parcial'=>'Segundo Parcial',
            'patron'=>'2.jpg',
            'fecha'=>'15/03/2024',
        ]);
        Parcial::create([
            'asignatura_id'=>1,
            'parcial'=>'Tercer Parcial',
            'patron'=>'3.jpg',
            'fecha'=>'25/04/2024',
        ]);
    }
}
