<?php

use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EvaluacionController;
use Illuminate\Support\Facades\Route;

//***********************VISTAS PRINCIPALES************************* */
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('calificaciones',[HomeController::class,'calificaciones'])->name('calificaciones');
Route::get('certificados',[HomeController::class,'certificados'])->name('certificados');
Route::get('documentos',[HomeController::class,'documentos'])->name('documentos');

//***********************CALIFICACIONES************************* */
Route::post('persona',[PersonaController::class,'show'])->name('show.persona');




//Route::get('asignatura/{id}',[AsignaturaController::class,'show'])->name('asignatura');
//sRoute::get('evaluacion/{id}',[EvaluacionController::class,'show'])->name('evaluacion');
