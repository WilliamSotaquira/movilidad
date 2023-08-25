<?php

use Illuminate\Support\Facades\Route;

// home
Route::view('sistemasGestion/sistemas', 'sistemasGestion/sistemas');
// Route::view('sistemasGestion/sdm', 'sistemasGestion/sdm');

// sistemas de gestion
Route::view('sistemasGestion/calidad', 'sistemasGestion/calidad');
Route::view('sistemasGestion/antisoborno', 'sistemasGestion/antisoborno');
Route::view('sistemasGestion/SGSST', 'sistemasGestion/SGSST');
Route::view('sistemasGestion/ambiental', 'sistemasGestion/ambiental');
Route::view('sistemasGestion/informacion', 'sistemasGestion/informacion');
Route::view('sistemasGestion/negocio', 'sistemasGestion/negocio');
Route::view('sistemasGestion/efr', 'sistemasGestion/efr');

