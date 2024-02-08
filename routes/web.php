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

Route::get('/componente', function () {
    return view('componente');
});


// --------------------------------------------------------------------------------------------------------------------------------------------------------- Menu
Route::view('/menu/principal', 'menu/principal');


// --------------------------------------------------------------------------------------------------------------------------------------------------------- Menu
Route::view('/components/tabpills', 'components/tabpills');
Route::view('/components/collapse_btn', 'components/collapse_btn');



// --------------------------------------------------------------------------------------------------------------------------------------------------------- Plantillas
Route::view('/plantillas/imagen_adaptativa', 'plantillas/imagen_adaptativa');
Route::view('/plantillas/iframe', 'plantillas/iframe');
Route::view('/plantillas/collapse', 'plantillas/collapse');
Route::view('/plantillas/noticia', 'plantillas/noticia');
Route::view('/plantillas/acordeon', 'plantillas/acordeon');
Route::view('/plantillas/tabla', 'plantillas/tabla');
Route::view('/plantillas/tabs', 'plantillas/tabs');
Route::view('/plantillas/btn-dinamico', 'plantillas/btn-dinamico');
Route::view('/plantillas/verticalTabs', 'plantillas/verticalTabs');
Route::view('/plantillas/temp-botones', 'plantillas/temp-botones');
Route::view('/plantillas/normativa', 'plantillas/normativa');


// --------------------------------------------------------------------------------------------------------------------------------------------------------- Carpeta de contenido Especifico

Route::view('/especifico/tramitesServicios', 'especifico/tramitesServicios');
Route::view('/especifico/mujer', 'especifico/mujer');
Route::view('/especifico/planMaestro', 'especifico/planMaestro');
Route::view('/especifico/RCL', 'especifico/RCL');
Route::view('/especifico/zp', 'especifico/zp');
Route::view('/especifico/gestionRiesgos', 'especifico/gestionRiesgos');
Route::view('/especifico/perfilesdeServidores', 'especifico/perfilesdeServidores');

// Cicloparqueaderos
Route::view('/especifico/cicloparqueaderos/principal', 'especifico/cicloparqueaderos/principal');

// Nueva Concesión
Route::view('/especifico/nuevaConcesion/home', 'especifico/nuevaConcesion/home');

// OGS
Route::view('/especifico/OGS/participacionCiudadana', 'especifico/OGS/participacionCiudadana');
Route::view('/especifico/OGS/RendiciónCuentasLocales', 'especifico/OGS/RendiciónCuentasLocales');
Route::view('/especifico/OGS/ProgramasSociales', 'especifico/OGS/ProgramasSociales');
Route::view('/especifico/OGS/GestionSocial', 'especifico/OGS/GestionSocial');

// Taxis Bogota
Route::view('/especifico/taxisBogota/home', 'especifico/taxisBogota/home');


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

// Pico y placa
Route::view('/especifico/picoyplaca/calendario', 'especifico/picoyplaca/calendario');

//organigrama
Route::view('/organigrama/consolidado', 'organigrama/consolidado');

// --------------------------------------------------------------------------------------------------------------------------------------------------------- 2021

// Contenido Agosto
Route::view('/2021/agosto/modificacionesPresupuestales', '2021/agosto/modificacionesPresupuestales');

// Contenido septiembre
Route::view('/2021/septiembre/pqrsd', '2021/septiembre/pqrsd');
Route::view('/2021/septiembre/socioEconomico', '2021/septiembre/socioEconomico');
Route::view('/2021/septiembre/instancias', '2021/septiembre/instancias');
Route::view('/2021/septiembre/rescate', '2021/septiembre/rescate');
Route::view('/2021/septiembre/ceroBajas', '2021/septiembre/ceroBajas');
Route::view('/2021/septiembre/viñetas', '2021/septiembre/viñetas');
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
Route::view('/2022/07/runt', '2022/07/runt');
Route::view('/2022/07/agendas', '2022/07/agendas');
Route::view('/2022/07/excelencia', '2022/07/excelencia');
Route::view('/2022/07/mesTaxitas', '2022/07/mesTaxitas');
Route::view('/2022/07/bloomberg', '2022/07/bloomberg');
Route::view('/2022/07/1730', '2022/07/1730');

// Contenido agosto 2022
Route::view('/2022/08/seAgente', '2022/08/seAgente');
Route::view('/2022/08/normatividadZZP', '2022/08/normatividadZZP');
Route::view('/2022/08/preguntasZPP', '2022/08/preguntasZPP');
Route::view('/2022/08/gremios', '2022/08/gremios');
Route::view('/2022/08/rutaInmovilizacion', '2022/08/rutaInmovilizacion');
Route::view('/2022/08/botones', '2022/08/botones');
Route::view('/2022/08/convocatoriaMujer', '2022/08/convocatoriaMujer');
Route::view('/2022/08/controlSocial', '2022/08/controlSocial');
Route::view('/2022/08/adolecentes', '2022/08/adolecentes');

Route::view('/2022/08/participacion', '2022/08/participacion');
Route::view('/2022/08/centrosLocales', '2022/08/centrosLocales');
Route::view('/2022/08/pip', '2022/08/pip');
Route::view('/2022/08/rendicion', '2022/08/rendicion');
Route::view('/2022/08/agendasParticipativas', '2022/08/agendasParticipativas');

// Contenido septiembre 2022
Route::view('/2022/09/cuentaRegresiva', '2022/09/cuentaRegresiva');
Route::view('/2022/09/bannerDinamico', '2022/09/bannerDinamico');
Route::view('/2022/09/bicicarga', '2022/09/bicicarga');
Route::view('/2022/09/politicas', '2022/09/politicas');
Route::view('/2022/09/semanaBici', '2022/09/semanaBici');
Route::view('/2022/09/sinCarro', '2022/09/sinCarro');
Route::view('/2022/09/seguridadVial', '2022/09/seguridadVial');
Route::view('/2022/09/biciCompartida', '2022/09/biciCompartida');

// Contenido actubre 2022
Route::view('/2022/10/ferias', '2022/10/ferias');
Route::view('/2022/10/publicaciones', '2022/10/publicaciones');
Route::view('/2022/10/regulatoria', '2022/10/regulatoria');
Route::view('/2022/10/sisben', '2022/10/sisben');
Route::view('/2022/10/esquema', '2022/10/esquema');
Route::view('/2022/10/infDiasinCarro', '2022/10/infDiasinCarro');

// Contenido noviembre 2022
Route::view('/2022/11/administrativos', '2022/11/administrativos');
Route::view('/2022/11/procesosAdmin', '2022/11/procesosAdmin');
Route::view('/2022/11/contravenciones', '2022/11/contravenciones');
Route::view('/2022/11/investigacionesTP', '2022/11/investigacionesTP');
Route::view('/2022/11/noticias', '2022/11/noticias');


// Contenido diciembre 2022
Route::view('/2022/12/defensor', '2022/12/defensor');
Route::view('/2022/12/familiando', '2022/12/familiando');
Route::view('/2022/12/obras', '2022/12/obras');

// Contenido enere 2023
Route::view('/2023/01/ecologistics', '2023/01/ecologistics');

// Contenido febrero 2023
Route::view('/2023/02/orvi', '2023/02/orvi');

// Contenido marzo 2023
Route::view('/2023/03/patios', '2023/03/patios');
Route::view('/2023/03/calendario', '2023/03/calendario');


// Contenido abril 2023
Route::view('/2023/04/rlu', '2023/04/rlu');
Route::view('/2023/04/arm', '2023/04/arm');

// Contenido Mayo 2023
Route::view('/2023/05/trabajo', '2023/05/trabajo');
Route::view('/2023/05/menu', '2023/05/menu');


// Contenido junio 2023
Route::view('/2023/06/formulario', '2023/06/formulario');
Route::view('/2023/06/mujer', '2023/06/mujer');
Route::view('/2023/06/pqrsd', '2023/06/pqrsd');
Route::view('/2023/06/mapaCiclorutas', '2023/06/mapaCiclorutas');

// Contenido julio 2023


// Contenido agosto 2023
Route::view('/2023/08/cartaIntegridad', '2023/08/cartaIntegridad');

// Contenido septiembre
Route::view('/2023/09/adolecentes', '2023/09/adolecentes');
Route::view('/2023/09/diaSinCarro', '2023/09/diaSinCarro');
Route::view('/2023/09/semanaBici', '2023/09/semanaBici');
Route::view('/2023/09/semanaSeguridadVial', '2023/09/semanaSeguridadVial');
Route::view('/2023/09/recategorizacion', '2023/09/recategorizacion');

// Contenido octubre
Route::view('/2023/10/rutas', '2023/10/rutas');
Route::view('/2023/10/tramitesServicios', '2023/10/tramitesServicios');

// Contenido noviembre
Route::view('/2023/11/peaton', '2023/11/peaton');

// Contenido diciembre
Route::view('/2023/12/puntos', '2023/12/puntos');

// Contenido enero 2024
Route::view('/2024/01/dscsm', '2024/01/dscsm');
