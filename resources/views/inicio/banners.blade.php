@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid box-banners-short'>



    <hr>

    <div class="row">
        <div class="col-xs-12 visible-xs-12 visible-xs-block">
            <a href="https://www.movilidadbogota.gov.co/web/tus_acciones_salvan_vidas" target="_blank" rel="noopener noreferrer">
                <img alt="Click aquí para acceder " class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2022/banners_banner2_320x300_0.png" title="">
            </a>
        </div>
        <div class="col-sm-12 hidden-xs">
            <a href="https://www.movilidadbogota.gov.co/web/tus_acciones_salvan_vidas" target="_blank" rel="noopener noreferrer">
                <img alt="Click aquí para acceder " class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2022/banners_banner1_980x250_0.png" title="">
            </a>
        </div>
    </div>

    <hr>
    <!-- <div class="row">
        <div class="col-sm-6">
            <a href="https://www.movilidadbogota.gov.co/web/ventanilla_unica_de_servicios" target="_blank" rel="noopener noreferrer">
                <img class="img-responsive bs zoom w-100 img-rounded focusable" src="" title="" alt="Click aquí para acceder al sitio ">
            </a>
        </div>
        <div class="col-sm-6">
            <a href="https://salidadepatios.movilidadbogota.gov.co/" target="_blank" rel="noopener noreferrer">
                <img alt="Realiza de forma virtual el trámite para la salida de patios" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-salidapatios_1_0.png">
            </a>
        </div>
    </div> -->
    <div class="row">
        <div class="col-sm-6">
            <a href="https://www.movilidadbogota.gov.co/web/consulta_de_comparendos" target="_blank" rel="noopener noreferrer">
                <img alt="Clic aquí para Consulta y pagos de comparendos" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2022/comparendos_20220220307_xs.jpg">
            </a>
        </div>
        <div class="col-sm-6">
            <a href="http://zonadeparqueopago.gov.co/" target="_blank" rel="noopener noreferrer">
                <img class="img-responsive bs zoom w-100 img-rounded focusable" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-11-2021/banner_zonas_parqueo_900x300.png" title="Zona de Parqueo Pago" alt="Click aquí para acceder al sitio Zona de Parqueo Pago">
            </a>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-sm-6">
            <a href="https://www.movilidadbogota.gov.co/web/beneficio_de_circulacion" target="_blank" rel="noopener noreferrer">
                <img alt="Beneficio Distrital de Circulacion por condiciones Ambientales para la Carga Liviana en Bogotá" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-02-2022/carga_liviana_xs.webp" title="Beneficio Distrital de Circulacion por condiciones Ambientales para la Carga Liviana en Bogotá">
            </a>
        </div>
        <div class="col-sm-6">
            <a href="https://www.movilidadbogota.gov.co/web/consulta_de_comparendos" target="_blank" rel="noopener noreferrer">
                <img class="img-responsive bs zoom w-100 img-rounded focusable" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2022/comparendos_20220220307_xs.jpg" title="Consulta de Comparendos" alt="Click aquí para acceder al sitio de consulta de comparendos">
            </a>
        </div>
    </div> -->

    <div class="row">
        <div class="col-sm-6">
            <a href="https://www.movilidadbogota.gov.co/web/abecedesembargos" target="_blank" rel="noopener noreferrer"><img alt="Abecé desembargos" class="img-responsive bs zoom w-100 img-rounded  center-block" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-02-2022/boton_desembargo_900x300.webp" title="Abecé desembargos"></a>
        </div>
        <div class="col-sm-6">
            <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/noticia/este_sabado_23_de_julio_entra_en_operacion_el_par_vial_suba_tibabuyes">
                <img alt="Par Vial Suba Tibabuyes" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-07-2022/banner-par-vial-tibabuyes_450-x-150-px.png" title="Par Vial Suba Tibabuyes">
            </a>
        </div>
    </div>

    <hr>


    <!-- Sección de imágenes en contenedor slider para dispositivos panorámicos-->
    <div class="row">
        <!--carrusel largo -->
        <div class="col-sm-12 hidden-xs">
            <div class="carousel slide" data-ride="carousel" id="carousel_banner_lg" data-interval="10000">
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carousel_banner_lg">&nbsp;</li>
                    <li data-slide-to="1" data-target="#carousel_banner_lg">&nbsp;</li>
                    <li data-slide-to="2" data-target="#carousel_banner_lg">&nbsp;</li>
                    <li data-slide-to="3" data-target="#carousel_banner_lg">&nbsp;</li>
                    <li data-slide-to="4" data-target="#carousel_banner_lg">&nbsp;</li>
                    <li data-slide-to="5" data-target="#carousel_banner_lg">&nbsp;</li>
                    <li data-slide-to="6" data-target="#carousel_banner_lg">&nbsp;</li>
                    <li data-slide-to="7" data-target="#carousel_banner_lg">&nbsp;</li>
                    <li data-slide-to="8" data-target="#carousel_banner_lg">&nbsp;</li>
                    <li data-slide-to="9" data-target="#carousel_banner_lg">&nbsp;</li>
                    <li data-slide-to="10" data-target="#carousel_banner_lg">&nbsp;</li>
                    <li data-slide-to="11" data-target="#carousel_banner_lg">&nbsp;</li>
                    <!-- <li data-slide-to="11" data-target="#carousel_banner_lg">&nbsp;</li> -->
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/cursos_teorico_practicos_motociclistas"><img alt="Cursos Teórico Prácticos de Conducción en Moto" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-03-2022/curso_motociclistas_sm.jpg" title="Cursos Teórico Prácticos de Conducción en Moto"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones"><img alt="Ingresa aquí ir a Cero y Bajas Emisiones" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-05-2022/banner_ceroybajas_a.jpg" title="Ingresa aquí ir a Cero y Bajas Emisiones"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/avisos_electronicos"><img alt="Ingresa aquí para ir a Notificaciones Procesos Disciplinarios" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-03-2022/diciplinarios_sm.png" title="Ingresa aquí para ir a Notificaciones Procesos Disciplinarios"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/transparencia/conoce_propone_y_prioriza"><img alt="Aquí puede acceder a la información clave sibre Bogotá, Conoce, Propone y Prioriza" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-04-2022/conoceproponeprioriza_lg.webp" title="Aquí puede acceder a la información clave sibre Bogotá, Conoce, Propone y Prioriza"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/integridad_antisoborno_y_anticorrupcion"><img alt="Portal Transparencia, Antisoborno y Anticorrupción" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-10-2021/banner_antisoborno_micrositio-02_1.jpg" title="Portal Transparencia, Antisoborno y Anticorrupción"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/RoadSafetyLab"><img alt="Road Safety Lab - Convocatoria Internacional de Desarrollo Tecnológicos para la Seguridad Vial" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-10-2021/roadsafetylab_1921x321.jpg" title="Road Safety Lab - Convocatoria Internacional de Desarrollo Tecnológicos para la Seguridad Vial"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/nueva-concesion-tramites-servicios-movilidad"><img alt="Concesión de Tramites y Servicios de Movilidad" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2021/concesion_tramites_sm_0.png" title="Concesión de Tramites y Servicios de Movilidad"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="http://www.sdp.gov.co/gestion-socioeconomica/conpes-dc/documentos-conpes-dc/conpes-dc-aprobados"><img alt="Política publica de la bicicleta" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-politicapublicabicicleta_1.png" title="Política publica de la bicicleta"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/encuesta_de_movilidad_2019"><img alt="Encuentra aquí los datos más relevantes para la movilidad en Bogotá" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-movilidaddatos_1.png" title="Encuentra aquí los datos más relevantes para la movilidad en Bogotá:"> </a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/plan-desarrollo-economico-social-ambiental-2020-2024"><img alt="Plan de Desarrollo Económico, Social, Ambiental y de Obras Públicas del Distrito Capital  2020 - 2024" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-nuevocontratosocialambienta_1.png" title="Plan de Desarrollo Económico, Social, Ambiental y de Obras Públicas del Distrito Capital  2020 - 2024"> </a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/cicloparqueaderos"><img alt="Mas y mejores cicloparqueaderos" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-06-2021/np-cicloparqueaderos_1.png" title="Mas y mejores cicloparqueaderos"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/mapa_de_ciclorrutas_de_bogota"><img alt="Mas y mejores cicloparqueaderos" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2022/2022-07-19_banner-mapa-ciclorrutas_1920-x-320.png" title="Mapa de Ciclorrutas de Bogotá"></a></div>
                    <!-- <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/reconocimiento-excelencia-logistica-2021"><img alt="Reconocimiento Excelencia Logística 2021" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-excelenciallogistica_1.png" title="Reconocimiento Excelencia Logística 2021"></a></div> -->
                </div>
            </div>
        </div>
        <!-- fin carrusel largo -->

        <!-- carrusel en contenedor slider para dispositivos móviles -->
        <div class="col-xs-12 visible-xs-12 visible-xs-block">
            <div class="carousel slide" data-ride="carousel" id="carousel-sdm-xs" data-interval="10000">
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carousel-sdm-xs">&nbsp;</li>
                    <li data-slide-to="1" data-target="#carousel-sdm-xs">&nbsp;</li>
                    <li data-slide-to="2" data-target="#carousel-sdm-xs">&nbsp;</li>
                    <li data-slide-to="3" data-target="#carousel-sdm-xs">&nbsp;</li>
                    <li data-slide-to="4" data-target="#carousel-sdm-xs">&nbsp;</li>
                    <li data-slide-to="5" data-target="#carousel-sdm-xs">&nbsp;</li>
                    <li data-slide-to="6" data-target="#carousel-sdm-xs">&nbsp;</li>
                    <li data-slide-to="7" data-target="#carousel-sdm-xs">&nbsp;</li>
                    <li data-slide-to="8" data-target="#carousel-sdm-xs">&nbsp;</li>
                    <li data-slide-to="9" data-target="#carousel-sdm-xs">&nbsp;</li>
                    <li data-slide-to="10" data-target="#carousel-sdm-xs">&nbsp;</li>
                    <li data-slide-to="11" data-target="#carousel-sdm-xs">&nbsp;</li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/cursos_teorico_practicos_motociclistas"><img alt="Cursos Teórico Prácticos de Conducción en Moto" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-03-2022/curso_motociclistas_xs.jpg" title="Cursos Teórico Prácticos de Conducción en Moto"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones"><img alt="Ingresa aquí ir a Cero y Bajas Emisiones" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-05-2022/banner_ceroybajas_b.jpg" title="Ingresa aquí ir a Cero y Bajas Emisiones"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/avisos_electronicos"><img alt="Ingresa aquí para ir a " class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-03-2022/diciplinarios_xs.png" title="" Ingresa aquí para ir a Notificaciones Procesos Disciplinario"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/transparencia/conoce_propone_y_prioriza"><img alt="Aquí puede acceder a la información clave sibre Bogotá, Conoce, Propone y Prioriza" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-04-2022/conoceproponeprioriza_xs.webp" title="Aquí puede acceder a la información clave sibre Bogotá, Conoce, Propone y Prioriza"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/integridad_antisoborno_y_anticorrupcion"><img alt="Road Safety Lab - Convocatoria Internacional de Desarrollo Tecnológicos para la Seguridad Vial" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-08-2021/banner_t-a-a_anticorrupcion_900.jpg" title="Portal Transparencia, Antisoborno y Anticorrupción"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/RoadSafetyLab"><img alt="Portal Transparencia, Antisoborno y Anticorrupción" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-10-2021/roadsafetylab_901x300.jpg" title="Road Safety Lab - Convocatoria Internacional de Desarrollo Tecnológicos para la Seguridad Vial"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/nueva-concesion-tramites-servicios-movilidad"><img alt="Concesión de Tramites y Servicios de Movilidad" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2021/concesion_tramites_xs_0.png" title=""></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="http://www.sdp.gov.co/gestion-socioeconomica/conpes-dc/documentos-conpes-dc/conpes-dc-aprobados"><img alt="Política publica de la bicicleta" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-politicapublicabicicleta_2.png" title="Política publica de la bicicleta"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/encuesta_de_movilidad_2019"><img alt="Encuentra aquí los datos más relevantes para la movilidad en Bogotá" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-movilidaddatos_2.png" title="Encuentra aquí los datos más relevantes para la movilidad en Bogotá:"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/plan-desarrollo-economico-social-ambiental-2020-2024"><img alt="Plan de Desarrollo Económico, Social, Ambiental y de Obras Públicas del Distrito Capital  2020 - 2024" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-nuevocontratosocialambienta_2.png" title="Plan de Desarrollo Económico, Social, Ambiental y de Obras Públicas del Distrito Capital  2020 - 2024"> </a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/cicloparqueaderos"><img alt="Mas y mejores cicloparqueaderos" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-06-2021/np-cicloparqueaderos_2.png" title="Mas y mejores cicloparqueaderos"></a></div>
                    <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/mapa_de_ciclorrutas_de_bogota"><img alt="Mas y mejores cicloparqueaderos" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2022/2022-06-16_banner-mapa-ciclorrutas_1.png" title="Mapa de Ciclorrutas de Bogotá"></a></div>
                    <!-- <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/reconocimiento-excelencia-logistica-2021"><img alt="Política publica de la bicicleta" class="img-rounded w-100 img-responsive bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-excelenciallogistica_2.png" title="Reconocimiento Excelencia Logística 2021"></a></div> -->
                </div>
            </div>
        </div>
        <!-- fin carrusel corto -->
    </div>
    <!--Fin Sección de imágenes en contenedor slider -->
    <style>
        .carousel-indicators {
            position: absolute;
            /* margin-left: 100px; */
            bottom: -30px !important;
        }

        .carousel-indicators li {
            background-color: #fff !important;
            border: 1px solid #191C3A !important;
        }

        .carousel-indicators .active {
            background-color: #66e026 !important;
        }

        .img-rounded {
            margin: 10px 0px 10px 0px;

            display: flex;
            justify-content: center;
            vertical-align: middle;
            align-items: center;

        }
    </style>

    <!-- Fin Bloque   -->

</div>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .box-banners-short {
        font-size: 13px !important;
        line-height: 1.4 !important;
        max-width: 980px;
    }

    /*
    .box-banners-short [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }
    */

    .w-100 {
        width: 100%;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->