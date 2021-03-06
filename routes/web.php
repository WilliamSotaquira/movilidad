<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// --------------------------------------------------------------------------------------------------------------------------------------------------------- Inicio
Route::view('/inicio/bannersInstitucionales', 'inicio/bannersInstitucionales');
Route::view('/inicio/banners', 'inicio/banners');
Route::view('/inicio/agendamiento', 'inicio/agendamiento');
Route::view('/inicio/footer', 'inicio/footer');

Route::view('/inicio/ccm/centroContacto', 'inicio/ccm/centroContacto');
Route::view('/inicio/ccm/botones', 'inicio/ccm/botones');

Route::view('/inicio/bannerAncho', 'inicio/bannerAncho');

// --------------------------------------------------------------------------------------------------------------------------------------------------------- Plantillas
Route::view('/plantillas/imagen_adaptativa', 'plantillas/imagen_adaptativa');
Route::view('/plantillas/iframe', 'plantillas/iframe');
Route::view('/plantillas/collapse', 'plantillas/collapse');
Route::view('/plantillas/noticia', 'plantillas/noticia');
Route::view('/plantillas/acordeon', 'plantillas/acordeon');
Route::view('/plantillas/tabla', 'plantillas/tabla');
Route::view('/plantillas/tabs', 'plantillas/tabs');
Route::view('/plantillas/btn-dinamico', 'plantillas/btn-dinamico');

// --------------------------------------------------------------------------------------------------------------------------------------------------------- Tramites y Servicios
Route::view('/atencionServicio/home', 'atencionServicio/home');
Route::view('/atencionServicio/menu', 'atencionServicio/menu');
Route::view('/atencionServicio/tramitesServicios', 'atencionServicio/tramitesServicios');

Route::view('/atencionServicio/tramites/cursos', 'atencionServicio/tramites/cursos');

Route::view('/atencionServicio/servicios/cursos', 'atencionServicio/servicios/cursos');




// --------------------------------------------------------------------------------------------------------------------------------------------------------- Carpeta de contenido Especifico

    Route::view('/especifico/tramitesServicios', 'especifico/tramitesServicios');
    Route::view('/especifico/mujer', 'especifico/mujer');
    Route::view('/especifico/planMaestro', 'especifico/planMaestro');
    Route::view('/especifico/RCL', 'especifico/RCL');
    Route::view('/especifico/zp', 'especifico/zp');
    Route::view('/especifico/gestionRiesgos', 'especifico/gestionRiesgos');
    Route::view('/especifico/perfilesdeServidores', 'especifico/perfilesdeServidores');

    // Cicloparqueaderos
    Route::view('/especifico/cicloparqueaderos/principal', 'especifico//cicloparqueaderos/principal');

    // Nueva Concesi??n
    Route::view('/especifico/nuevaConcesion/home', 'especifico/nuevaConcesion/home');

    // OGS
    Route::view('/especifico/OGS/Participaci??nCiudadana', 'especifico/OGS/Participaci??nCiudadana');
    Route::view('/especifico/OGS/Rendici??nCuentasLocales', 'especifico/OGS/Rendici??nCuentasLocales');
    Route::view('/especifico/OGS/ProgramasSociales', 'especifico/OGS/ProgramasSociales');
    Route::view('/especifico/OGS/GestionSocial', 'especifico/OGS/GestionSocial');

    // Taxis Bogota
    Route::view('/especifico/taxisBogota/home', 'especifico/taxisBogota/home');

    // Transparencia Antisoborno y Anticorrupcion
    Route::view('/especifico/transparencia/boton', 'especifico/transparencia/boton');
    Route::view('/especifico/transparencia/cuentaConmigo', 'especifico/transparencia/cuentaConmigo');
    Route::view('/especifico/transparencia/canalAnticorrupcion', 'especifico/transparencia/canalAnticorrupcion');
    Route::view('/especifico/transparencia/canalAntisoborno', 'especifico/transparencia/canalAntisoborno');
    Route::view('/especifico/transparencia/cpp', 'especifico/transparencia/cpp');

    // Temas de Impacto
    Route::view('/especifico/temasdeImpacto/ABCDesembargo', 'especifico/temasdeImpacto/ABCDesembargo');

    // Procesos Contractuales Estrategicos
    Route::view('/especifico/contractuales/procesos', 'especifico/contractuales/procesos');
    Route::view('/especifico/contractuales/semaforizacion', 'especifico/contractuales/semaforizacion');
    Route::view('/especifico/contractuales/soc', 'especifico/contractuales/soc');
    Route::view('/especifico/contractuales/operador', 'especifico/contractuales/operador');
    Route::view('/especifico/contractuales/parqueo', 'especifico/contractuales/parqueo');

    // Movilab
    Route::view('/2022/enero/movilab', '2022/enero/movilab');

    // Gerencia en via
    Route::view('/especifico/gerencia/inicio', 'especifico/gerencia/inicio');
    Route::view('/especifico/gerencia/guias', 'especifico/gerencia/guias');
    Route::view('/especifico/gerencia/agentes', 'especifico/gerencia/agentes');


    // Entidad
    Route::view('/especifico/entidad/planEstrategico', 'especifico/entidad/planEstrategico');
    Route::view('/especifico/entidad/funcionesDeberes', 'especifico/entidad/funcionesDeberes');
    Route::view('/especifico/entidad/organigrama', 'especifico/entidad/organigrama');

// fin especifico


// --------------------------------------------------------------------------------------------------------------------------------------------------------- 2021

    // Contenido Agosto
    Route::view('/2021/agosto/modificacionesPresupuestales', '2021/agosto/modificacionesPresupuestales');

    // Contenido septiembre
    Route::view('/2021/septiembre/pqrsd', '2021/septiembre/pqrsd');
    Route::view('/2021/septiembre/socioEconomico', '2021/septiembre/socioEconomico');
    Route::view('/2021/septiembre/instancias', '2021/septiembre/instancias');
    Route::view('/2021/septiembre/rescate', '2021/septiembre/rescate');
    Route::view('/2021/septiembre/ceroBajas', '2021/septiembre/ceroBajas');
    Route::view('/2021/septiembre/vi??etas', '2021/septiembre/vi??etas');
    Route::view('/2021/septiembre/sisben', '2021/septiembre/sisben');
    Route::view('/2021/septiembre/semanaBici', '2021/septiembre/semanaBici');
    Route::view('/2021/septiembre/consultaComparendos', '2021/septiembre/consultaComparendos');

    // Contenido octubre
    Route::view('/2021/octubre/derechosDeberes', '2021/octubre/derechosDeberes');
    Route::view('/2021/octubre/RoadSafetyLab', '2021/octubre/RoadSafetyLab');
    Route::view('/2021/octubre/midele', '2021/octubre/midele');
    Route::view('/2021/octubre/movilab', '2021/octubre/movilab');
    Route::view('/2021/octubre/zpp', '2021/octubre/zpp');
    Route::view('/2021/octubre/albarrio_BU', '2021/octubre/albarrio_BU');
    Route::view('/2021/octubre/abandonados', '2021/octubre/abandonados');

    // Contenido noviembre
    Route::view('/2021/noviembre/instancias', '2021/noviembre/instancias');
    Route::view('/2021/noviembre/siniestralidad', '2021/noviembre/siniestralidad');
    Route::view('/2021/noviembre/agentes', '2021/noviembre/agentes');
    Route::view('/2021/noviembre/ccm', '2021/noviembre/ccm');
    Route::view('/2021/noviembre/orvi', '2021/noviembre/orvi');
    Route::view('/2021/noviembre/centroContacto', '2021/noviembre/centroContacto');

    // Contenido diciembre
    Route::view('/2021/diciembre/excepciones', '2021/diciembre/excepciones');
    Route::view('/2021/diciembre/defensor', '2021/diciembre/defensor');
    Route::view('/2021/diciembre/gestionCalidad', '2021/diciembre/gestionCalidad');
    Route::view('/2021/diciembre/SGSST', '2021/diciembre/SGSST');
    Route::view('/2021/diciembre/nuestraEntidad', '2021/diciembre/nuestraEntidad');
    Route::view('/2021/diciembre/esquemaPublicacion', '2021/diciembre/esquemaPublicacion');
    Route::view('/2021/diciembre/formulario', '2021/diciembre/formulario');

    
// fin 2021

// --------------------------------------------------------------------------------------------------------------------------------------------------------- 2022

    // Contenido enero 2022
    Route::view('/2022/01/picoPlaca_2022', '2022/01/picoPlaca_2022');
    Route::view('/2022/01/picoPlaca', '2022/01/picoPlaca');
    Route::view('/2022/01/boletin_4enero', '2022/01/boletin_4enero');
    Route::view('/2022/01/mejorando', '2022/01/mejorando');
    Route::view('/2022/01/exceptuados', '2022/01/exceptuados');
    Route::view('/2022/01/botones_pyp', '2022/01/botones_pyp');
    Route::view('/2022/01/camaras', '2022/01/camaras');
    Route::view('/2022/01/agentes', '2022/01/agentes');

    // Contenido febrero 2022
    Route::view('/2022/02/calendariopyp', '2022/02/calendariopyp');
    Route::view('/2022/02/bicicarga', '2022/02/bicicarga');
    Route::view('/2022/02/ceroybajas', '2022/02/ceroybajas');
    Route::view('/2022/02/participacion', '2022/02/participacion');
    Route::view('/2022/02/resolucion001', '2022/02/resolucion001');
    Route::view('/2022/02/medidas', '2022/02/medidas');
    Route::view('/2022/02/defensor', '2022/02/defensor');
    Route::view('/2022/02/desembargos', '2022/02/desembargos');
    Route::view('/2022/02/ambiental', '2022/02/ambiental');
    Route::view('/2022/02/efr', '2022/02/efr');
    Route::view('/2022/02/vus', '2022/02/vus');
    
    // Contenido marzo 2022
    
    Route::view('/2022/03/bicicarga_resultados', '2022/03/bicicarga_resultados');
    Route::view('/2022/03/motociclistas', '2022/03/motociclistas');
    Route::view('/2022/03/planMarshall', '2022/03/planMarshall');
    
    // Contenido abril 2022
    
    Route::view('/2022/04/contraflujo', '2022/04/contraflujo');
    Route::view('/2022/04/milagros', '2022/04/milagros');
    Route::view('/2022/04/prevencionVial', '2022/04/prevencionVial');
    
    // Contenido mayo 2022
    
    Route::view('/2022/05/barriosVitales', '2022/05/barriosVitales');
    Route::view('/2022/05/excepcionesSalud', '2022/05/excepcionesSalud');
    
    // Contenido junio 2022
    Route::view('/2022/06/construyendo', '2022/06/construyendo');
    Route::view('/2022/06/comparendos', '2022/06/comparendos');
    Route::view('/2022/06/acuerdos', '2022/06/acuerdos');
    Route::view('/2022/06/parking', '2022/06/parking');
    
    // Contenido julio 2022
    Route::view('/2022/07/piezaEncuesta', '2022/07/piezaEncuesta');
    Route::view('/2022/07/CLMinfantil', '2022/07/CLMinfantil');
    Route::view('/2022/07/cicliviasTemporales', '2022/07/cicliviasTemporales');
    Route::view('/2022/07/participacion', '2022/07/participacion');
    Route::view('/2022/07/runt', '2022/07/runt');
    Route::view('/2022/07/sisben', '2022/07/sisben');
    Route::view('/2022/07/agendas', '2022/07/agendas');
    Route::view('/2022/07/excelencia', '2022/07/excelencia');
    Route::view('/2022/07/mesTaxitas', '2022/07/mesTaxitas');
    Route::view('/2022/07/bloomberg', '2022/07/bloomberg');