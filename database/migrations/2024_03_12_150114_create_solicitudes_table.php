<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('celular');
            $table->string('correo');
            $table->string('asignatura');
            $table->string('carrera');
            $table->string('departamento')->nullable();
            $table->string('catedra')->nullable();
            $table->string('anio');
            $table->string('tipo');
            $table->date('fecha_examen');
            $table->integer('numero_preguntas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
