<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\MemoriaController;
use Illuminate\Support\Facades\Route;

//***********************VISTAS PRINCIPALES************************* */
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('calificaciones',[HomeController::class,'calificaciones'])->name('calificaciones');
Route::get('certificado',[HomeController::class,'certificados'])->name('certificados');
Route::get('memorias',[HomeController::class,'memorias'])->name('memorias');

//***********************CALIFICACIONES************************* */
Route::post('persona',[PersonaController::class,'show'])->name('show.persona');
Route::get('persona/{id}',[PersonaController::class,'img'])->name('img.persona');
Route::get('solicitudes',[PersonaController::class,'solicitudes'])->name('solicitudes.persona');
Route::post('plantilla',[PersonaController::class,'plantilla'])->name('plantillas.persona');

//***********************CERTIFICADOS************************* */
Route::get('evento',[EventoController::class,'index'])->name('index.evento'); //login para descargar el certificado
Route::post('participante',[EventoController::class,'verificacion'])->name('verificacion.evento');  //descarga del certificado
Route::get('validacion',[EventoController::class,'validacion'])->name('validacion.evento');  //login de validacion
Route::post('validacioncertificado',[EventoController::class,'VerificacionCertificado'])->name('verificacion.certificado'); //consulta de la validacion
Route::get('historial',[EventoController::class,'historial'])->name('historial.evento');  //login de historial
Route::post('verifiacionhistorial',[EventoController::class,'verificacionhistorial'])->name('verificacion.historial'); //consulta del historial

//***********************MEMORIAS DE INVESTIGACION************************* */
Route::get('memorias/proyectos',[MemoriaController::class,'proyectos'])->name('proyectos.memorias');
Route::get('memorias/articulos',[MemoriaController::class,'articulos'])->name('articulos.memorias');
Route::get('memorias/libros',[MemoriaController::class,'libros'])->name('libros.memorias');
Route::get('memorias/tesis',[MemoriaController::class,'tesis'])->name('tesis.memorias');
Route::get('memorias/aportes',[MemoriaController::class,'aportes'])->name('aportes.memorias');