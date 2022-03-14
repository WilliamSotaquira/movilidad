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
Route::view('/inicio/ccm/ccmbotones', 'inicio/ccm/ccmbotones');

// --------------------------------------------------------------------------------------------------------------------------------------------------------- Plantillas
Route::view('/plantillas/imagen_adaptativa', 'plantillas/imagen_adaptativa');
Route::view('/plantillas/iframe', 'plantillas/iframe');
Route::view('/plantillas/collapse', 'plantillas/collapse');
Route::view('/plantillas/noticia', 'plantillas/noticia');
Route::view('/plantillas/acordeon', 'plantillas/acordeon');
Route::view('/plantillas/tabla', 'plantillas/tabla');
Route::view('/plantillas/tabs', 'plantillas/tabs');

// --------------------------------------------------------------------------------------------------------------------------------------------------------- Tramites y Servicios
Route::view('/atencionServicio/menu', 'atencionServicio/menu');
Route::view('/atencionServicio/tramitesServicios', 'atencionServicio/tramitesServicios');
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

    // Nueva Concesión
    Route::view('/especifico/nuevaConcesion/home', 'especifico/nuevaConcesion/home');

    // OGS
    Route::view('/especifico/OGS/ParticipaciónCiudadana', 'especifico/OGS/ParticipaciónCiudadana');
    Route::view('/especifico/OGS/RendiciónCuentasLocales', 'especifico/OGS/RendiciónCuentasLocales');
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

    // Entidad
    Route::view('/especifico/entidad/planEstrategico', 'especifico/entidad/planEstrategico');
    Route::view('/especifico/entidad/funcionesDeberes', 'especifico/entidad/funcionesDeberes');
    Route::view('/especifico/entidad/organigrama', 'especifico/entidad/organigrama');

// fin especifico


// --------------------------------------------------------------------------------------------------------------------------------------------------------- 2021

    // Contenido Ajustado en Agosto
    Route::view('/2021/agosto/modificacionesPresupuestales', '2021/agosto/modificacionesPresupuestales');

    // Contenido Ajustado en septiembre
    Route::view('/2021/septiembre/pqrsd', '2021/septiembre/pqrsd');
    Route::view('/2021/septiembre/socioEconomico', '2021/septiembre/socioEconomico');
    Route::view('/2021/septiembre/instancias', '2021/septiembre/instancias');
    Route::view('/2021/septiembre/rescate', '2021/septiembre/rescate');
    Route::view('/2021/septiembre/ceroBajas', '2021/septiembre/ceroBajas');
    Route::view('/2021/septiembre/viñetas', '2021/septiembre/viñetas');
    Route::view('/2021/septiembre/sisben', '2021/septiembre/sisben');
    Route::view('/2021/septiembre/semanaBici', '2021/septiembre/semanaBici');
    Route::view('/2021/septiembre/consultaComparendos', '2021/septiembre/consultaComparendos');

    // Contenido Ajustado en octubre
    Route::view('/2021/octubre/derechosDeberes', '2021/octubre/derechosDeberes');
    Route::view('/2021/octubre/RoadSafetyLab', '2021/octubre/RoadSafetyLab');
    Route::view('/2021/octubre/midele', '2021/octubre/midele');
    Route::view('/2021/octubre/movilab', '2021/octubre/movilab');
    Route::view('/2021/octubre/zpp', '2021/octubre/zpp');
    Route::view('/2021/octubre/albarrio_BU', '2021/octubre/albarrio_BU');
    Route::view('/2021/octubre/abandonados', '2021/octubre/abandonados');

    // Contenido Ajustado en noviembre
    Route::view('/2021/noviembre/instancias', '2021/noviembre/instancias');
    Route::view('/2021/noviembre/siniestralidad', '2021/noviembre/siniestralidad');
    Route::view('/2021/noviembre/agentes', '2021/noviembre/agentes');
    Route::view('/2021/noviembre/agendamiento', '2021/noviembre/agendamiento');
    Route::view('/2021/noviembre/orvi', '2021/noviembre/orvi');

    // Contenido Ajustado en diciembre
    Route::view('/2021/diciembre/excepciones', '2021/diciembre/excepciones');
    Route::view('/2021/diciembre/defensor', '2021/diciembre/defensor');
    Route::view('/2021/diciembre/gestionCalidad', '2021/diciembre/gestionCalidad');
    Route::view('/2021/diciembre/SGSST', '2021/diciembre/SGSST');
    Route::view('/2021/diciembre/nuestraEntidad', '2021/diciembre/nuestraEntidad');
    Route::view('/2021/diciembre/esquemaPublicacion', '2021/diciembre/esquemaPublicacion');
    Route::view('/2021/diciembre/formulario', '2021/diciembre/formulario');

    
// fin 2021

// --------------------------------------------------------------------------------------------------------------------------------------------------------- 2022

    // Contenido Ajustado en enero 2022
    Route::view('/2022/enero/picoPlaca_2022', '2022/enero/picoPlaca_2022');
    Route::view('/2022/enero/picoPlaca', '2022/enero/picoPlaca');
    Route::view('/2022/enero/boletin_4enero', '2022/enero/boletin_4enero');
    Route::view('/2022/enero/mejorando', '2022/enero/mejorando');
    Route::view('/2022/enero/exceptuados', '2022/enero/exceptuados');
    Route::view('/2022/enero/botones_pyp', '2022/enero/botones_pyp');
    Route::view('/2022/enero/camaras', '2022/enero/camaras');
    Route::view('/2022/enero/agentes', '2022/enero/agentes');

    // Contenido Ajustado en febrero 2022
    Route::view('/2022/febrero/calendariopyp', '2022/febrero/calendariopyp');
    Route::view('/2022/febrero/bicicarga', '2022/febrero/bicicarga');
    Route::view('/2022/febrero/ceroybajas', '2022/febrero/ceroybajas');
    Route::view('/2022/febrero/participacion', '2022/febrero/participacion');
    Route::view('/2022/febrero/resolucion001', '2022/febrero/resolucion001');
    Route::view('/2022/febrero/medidas', '2022/febrero/medidas');
    Route::view('/2022/febrero/defensor', '2022/febrero/defensor');
    Route::view('/2022/febrero/desembargos', '2022/febrero/desembargos');
    Route::view('/2022/febrero/ambiental', '2022/febrero/ambiental');
    Route::view('/2022/febrero/efr', '2022/febrero/efr');
    Route::view('/2022/febrero/vus', '2022/febrero/vus');
    
    // Contenido Ajustado en febrero 2022
    Route::view('/2022/marzo/agentes', '2022/marzo/agentes');
    Route::view('/2022/marzo/bicicarga_resultados', '2022/marzo/bicicarga_resultados');
