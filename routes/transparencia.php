<?php

use Illuminate\Support\Facades\Route;


// Transparencia Antisoborno y Anticorrupcion
Route::view('/transparencia/boton', 'transparencia/boton');
Route::view('/transparencia/cuentaConmigo', 'transparencia/cuentaConmigo');
Route::view('/transparencia/canalAnticorrupcion', 'transparencia/canalAnticorrupcion');

Route::view('/transparencia/cpp', 'transparencia/cpp');
Route::view('/transparencia/pqrs', 'transparencia/pqrs');
Route::view('/transparencia/agremiaciones', 'transparencia/agremiaciones');
Route::view('/transparencia/pie', 'transparencia/pie');
Route::view('/transparencia/poa', 'transparencia/poa');
Route::view('/transparencia/participacion', 'transparencia/participacion');
Route::view('/transparencia/activosInformacion', 'transparencia/activosInformacion');
Route::view('/transparencia/clasificadaReservada', 'transparencia/clasificadaReservada');
Route::view('/transparencia/indiceClasificadaReservada', 'transparencia/indiceClasificadaReservada');
Route::view('/transparencia/costosReproduccion', 'transparencia/costosReproduccion');
Route::view('/transparencia/gestionDocumental', 'transparencia/gestionDocumental');
Route::view('/transparencia/retencionDocumental', 'transparencia/retencionDocumental');


// Información Entidad
Route::view('/transparencia/informacionEntidad/directorioEntidades', 'transparencia/informacionEntidad/directorioEntidades');


// Seccion 4
Route::view('/transparencia/4/presupuesto', 'transparencia/4/presupuesto');

// Seccion 9
Route::view('/transparencia/9/informesDiaSinCarro', 'transparencia/9/informesDiaSinCarro');
