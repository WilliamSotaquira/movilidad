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
Route::view('/transparencia/activosInformacion', 'transparencia/activosInformacion');
Route::view('/transparencia/clasificadaReservada', 'transparencia/clasificadaReservada');
Route::view('/transparencia/indiceClasificadaReservada', 'transparencia/indiceClasificadaReservada');
Route::view('/transparencia/costosReproduccion', 'transparencia/costosReproduccion');
Route::view('/transparencia/gestionDocumental', 'transparencia/gestionDocumental');
Route::view('/transparencia/retencionDocumental', 'transparencia/retencionDocumental');


// Información Entidad
Route::view('/transparencia/informacionEntidad/directorioEntidades', 'transparencia/informacionEntidad/directorioEntidades');


// Seccion 1
Route::view('/transparencia/1/5/funcionarios', 'transparencia/1/5/funcionarios');
Route::view('/transparencia/1/9/procedimiento', 'transparencia/1/9/procedimiento');

// Seccion 4
Route::view('/transparencia/4/presupuesto', 'transparencia/4/presupuesto');

// Seccion 6
Route::view('/transparencia/6/gestionSocial/agendas', 'transparencia/6/gestionSocial/agendas');
Route::view('/transparencia/6/participacion', 'transparencia/6/participacion');

// Seccion 9
Route::view('/transparencia/9/informesDiaSinCarro', 'transparencia/9/informesDiaSinCarro');
