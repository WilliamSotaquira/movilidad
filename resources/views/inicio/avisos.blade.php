@extends('welcome')
@section('title','avisos')
@section('contenido')

<!-- Set avisos -->
<div class="set-wrapper avisos">
    <div class="cmpnt cmpnt-banner-principal">&nbsp;
        <div class="item zoom bs">
            <a href="https://api.whatsapp.com/send?phone=573160231524&text=P%C3%A9gate+al+plan">
                <picture>
                    <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-02-2024/banners_portalpegatealplan_1140_x_200.png">
                    <img alt="Click aquí para acceder a Pégate al plan" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-02-2024/piezas_internas_banner_cuadrado.png" title="Imagen: Click aquí para acceder a Pégate al plan">
                </picture>
            </a>
        </div>

        <hr>
    </div>

    <div class="cmpnt cmpnt-carousel">
        <div class="carousel slide" data-interval="12000" data-ride="carousel-avisos" id="carousel-avisos">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#carousel-avisos" title="Banner 1">&nbsp;</li>
                <li data-slide-to="1" data-target="#carousel-avisos" title="Banner 2">&nbsp;</li>
                <li data-slide-to="2" data-target="#carousel-avisos" title="Banner 3">&nbsp;</li>
                <li data-slide-to="3" data-target="#carousel-avisos" title="Banner 4">&nbsp;</li>
                <li data-slide-to="4" data-target="#carousel-avisos" title="Banner 5">&nbsp;</li>
            </ol>
            <!-- Wrapper for slides -->

            <div class="carousel-inner" role="listbox">
                <div class="item active"><a href="https://www.movilidadbogota.gov.co/web/pegate_al_plan">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-03-2024/banner_pdd_950x300.png">
                            <img alt="Pégate al plan" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-03-2024/banner_pdd_340x300.png" title="Image: Pégate al plan">
                        </picture>
                    </a></div>

                    <div class="item">
                        <picture>
                           <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2024/susp_de_servicios_240322_ext-banner_950x300.png">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2024/susp_de_servicios_240322_ext-banner_340x300.png" class="img-responsive w-100" alt="Ir a " title="Image: aviso de mantenimiento ">
                        </picture>
                    </div>

                    <div class="item"><a href="https://www.movilidadbogota.gov.co/web/pegate_al_plan">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-03-2024/banner_pdd_950x300.png">
                            <img alt="Pégate al plan" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-03-2024/banner_pdd_340x300.png" title="Image: Pégate al plan">
                        </picture>
                    </a></div>

                <div class="item">
                    <a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2024/canalesatencion_large.png">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2024/canalesatencion_short.png" class="img-responsive w-100" alt="Banner Puntos de atención" title="Image: Banner Puntos de atención">
                        </picture>
                    </a>
                </div>
                <div class="item"><a href="https://portalmimovilidad.movilidadbogota.gov.co/">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-11-2023/banner_mimovilidad_1.png">
                            <img alt="Mi movilidad a un clic" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-11-2023/banner_mimovilidad_2.png" title="Image: Mi movilidad a un clic">
                        </picture>
                    </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/noticia/bogota_adelanta_caracterizacion_de_movilidad_a_poblacion_con_discapacidad">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-01-2024/encuestadiscapacidad_0.png">
                            <img alt="ir a encuesta para población en condición de discapacidad" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-11-2023/encuesta-discapacidad_330x300.jpg" title="Image: ir a encuesta para población en condición de discapacidad">
                        </picture>
                    </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/plan_de_movilidad_sostenible_y_segura">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-11-2023/benner-pmss_930x300.png">
                            <img alt="Ir a Plan de Movilidad Sostenible y Segura" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-11-2023/banner-pmss_300x330.png" title="Image: Plan de Movilidad Sostenible y Segura">
                        </picture>
                    </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2023/carta_bitacora_senda.pdf">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2023/bitacora_senda_integridad_web_950x400.png">
                            <img alt="Ir a bitácora de la senda de integridad" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2023/bitacora_senda_integridad_web_340x300.png" title="Image: bitácora de la senda de integridad">
                        </picture>
                    </a></div>

                <div class="item"><a href="https://www.ventanillamovilidad.com.co/">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-11-2023/salidapatios_banner1.png">
                            <img alt="Ir a Salida de patios virtual" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-11-2023/salidapatios_banner2.png" title="Image: Salida de patios virtual">
                        </picture>
                    </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-05-2023/abc_ciclomotores_ojos_en_las_vias.pdf">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-05-2023/pantallas_y_creditos_ciclomotores_950x300_web.png">
                            <img alt="Ir a Resolución que define la circulación de ciclomotores en Bogotá" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-05-2023/pantallas_y_creditos_ciclomotores_340x300_web.png" title="Image: Resolución que define la circulación de ciclomotores en Bogotá">
                        </picture>
                    </a></div>

                <div class="item"><a href="http://www.fotodeteccionbogota.com/">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2023/banner_foto_detenciones_banner_950x300.png">
                            <img alt="Ir a Consulta aquí todo acerca de las fotodetecciones" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2023/banner_foto_detenciones_banner_340x300.png" title="Image: Consulta aquí todo acerca de las fotodetecciones">
                        </picture>
                    </a></div>
            </div>
            <!-- Controls --><a class="left carousel-control" data-slide="prev" href="#carousel-avisos" role="button" title="Anterior"><span class="sr-only">Previous</span> </a> <a class="right carousel-control" data-slide="next" href="#carousel-avisos" role="button" title="Siguiente"> <span class="sr-only">Next</span> </a>
        </div>
    </div>

    <hr>
</div>
<!-- Styles -->
<style type="text/css">
    :root {
        --color-primario: #4c531e;
        --color-secundario: #879225;
        --color-terciario: #bed000;
        --color-gris: #e5e5e5;
        --color-blanco: #ffffff;
        --color-negro: #191919;
        --color-fondo: #333333;
    }

    .set-wrapper.avisos {
        max-width: 980px;
        margin: auto;
    }

    .region-content {
        padding: 0px;
    }

    .cmpnt-carousel .carousel-control {
        color: var(--color-terciario) !important;
        opacity: 1 !important;
    }

    .cmpnt-carousel .carousel-control.right,
    .carousel-control.left {
        width: 15% !important;
        border-radius: 7px !important;
    }

    .cmpnt-carousel .carousel-control.left {
        background-image: none !important;
        filter: none !important;
        background-repeat: repeat-x;
    }

    .cmpnt-carousel .carousel-control:focus.left,
    .cmpnt-carousel .carousel-control:hover.left {
        background-repeat: repeat-x;
        background-image: -moz-linear-gradient(left, #4C531E65 0%, #FFFFFF00 100%) !important;
        background-image: -webkit-linear-gradient(left, #4C531E65 0%, #FFFFFF00 100%) !important;
        background-image: linear-gradient(to right, #4C531E65 0%, #FFFFFF00 100%) !important;
    }

    .cmpnt-carousel .carousel-control .glyphicon-chevron-left,
    .cmpnt-carousel .carousel-control .icon-prev {
        left: 25% !important;
    }

    .cmpnt-carousel .carousel-control.right {
        background-image: none !important;
        filter: none !important;
        background-repeat: repeat-x;
    }

    .cmpnt-carousel .carousel-control:focus.right,
    .cmpnt-carousel .carousel-control:hover.right {
        background-repeat: repeat-x;
        background-image: -moz-linear-gradient(left, #FFFFFF00 0%, #4C531E65 100%) !important;
        background-image: -webkit-linear-gradient(left, #FFFFFF00 0%, #4C531E65 100%) !important;
        background-image: linear-gradient(to right, #FFFFFF00 0%, #4C531E65 100%) !important;
    }

    .cmpnt-carousel .carousel-control .glyphicon-chevron-right,
    .cmpnt-carousel .carousel-control .icon-prev {
        right: 25% !important;
    }

    .cmpnt-carousel .carousel-control:focus,
    .cmpnt-carousel .carousel-control:hover {
        color: var(--color-primario) !important;
        background: #FFFFFF00;


    }

    .cmpnt-carousel .carousel-control .glyphicon-chevron-left,
    .cmpnt-carousel .carousel-control .glyphicon-chevron-right,
    .cmpnt-carousel .carousel-control .icon-prev {
        color: var(--color-terciario);
        background-color: #4c531e;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        margin-top: -10px;
        font-size: 32px;
    }

    .cmpnt-carousel .carousel-control .glyphicon-chevron-left:hover,
    .cmpnt-carousel .carousel-control .glyphicon-chevron-right:hover,
    .cmpnt-carousel .carousel-control .icon-prev:hover,
    .cmpnt-carousel .carousel-control .glyphicon-chevron-left:focus,
    .cmpnt-carousel .carousel-control .glyphicon-chevron-right:focus,
    .cmpnt-carousel .carousel-control .icon-prev:focus {
        color: var(--color-gris);
        background-color: #333333;


    }

    /* bootstrap.min.css | https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css */

    .cmpnt-carousel .carousel-indicators {
        background: var(--color-fondo);
        position: absolute;
        z-index: 15;
        width: auto;
        border-radius: 15px;
        bottom: -40px !important;
        padding: 3px 8px 0px 8px;
        margin-left: 0%;
        left: calc(50% - 3.2em);
        text-align: center;
        list-style: none;
    }

    .cmpnt-carousel .carousel-indicators li {
        background-color: var(--color-terciario) !important;
        border: 1px solid var(--color-terciario) !important;
    }

    .cmpnt-carousel .carousel-indicators li:hover {
        background-color: var(--color-blanco) !important;
        border: 1px solid var(--color-terciario) !important;
    }

    .cmpnt-carousel .carousel-indicators .active {
        background-color: var(--color-negro) !important;
    }



    .cmpnt-carousel .carousel-inner {
        margin-bottom: 37px;
    }

    .cmpnt-carousel .carousel-inner .item img {
        max-height: 300px;
        object-fit: cover;
        object-position: center;
        margin: auto;
    }

    .zoom {
        transition: 0.5s ease;
        -moz-transition: 0.5s ease;
        /* Firefox */
        -webkit-transition: 0.5s ease;
        /* Chrome - Safari */
        -o-transition: 0.5s ease;
        /* Opera */
        -ms-transition: 0.5s ease;
        /* IE9 */
    }

    .zoom:hover {
        transform: scale(1.03);
        -moz-transform: scale(1.03);
        /* Firefox */
        -webkit-transform: scale(1.03);
        /* Chrome - Safari */
        -o-transform: scale(1.03);
        /* Opera */
        -ms-transform: scale(1.03);
        /* IE9 */
    }
</style>


