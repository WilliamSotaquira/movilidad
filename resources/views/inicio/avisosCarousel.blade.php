@extends('welcome')
@section('contenido')

<!-- Styles -->
<style type='text/css'>
    :root {
        --color-primario: #4c531e;
        --color-secundario: #879225;
        --color-terciario: #bed000;
        --color-gris: #e5e5e5;
        --color-blanco: #ffffff;
        --color-negro: #191919;
        --color-fondo: #333333;
    }

    .region-content {
        padding: 0px;
    }

    .box-avisos {
        max-width: 980px;
        word-wrap: break-word;
        margin: auto;

    }

    .w-100 {
        width: 100%;
    }

    .box-avisos .carousel-control {
        color: var(--color-terciario) !important;
        opacity: 1 !important;
    }


    .box-avisos .carousel-control:focus,
    .box-avisos .carousel-control:hover {
        color: var(--color-primario) !important;
    }

    .box-avisos .carousel-control .glyphicon-chevron-left,
    .box-avisos .carousel-control .glyphicon-chevron-right,
    .box-avisos .carousel-control .icon-prev {
        color: var(--color-terciario);
    }

    .box-avisos .carousel-control:hover .glyphicon-chevron-left,
    .box-avisos .carousel-control:hover .glyphicon-chevron-right,
    .box-avisos .carousel-control:hover .icon-prev {
        color: var(--color-primario);
    }

    .box-avisos .carousel-control.right,
    .carousel-control.left {
        width: 15% !important;
        border-radius: 7px !important;
    }

    .box-avisos .carousel-control.left {
        background-image: none !important;
        filter: none !important;
        background-repeat: repeat-x;
    }

    .box-avisos .carousel-control .glyphicon-chevron-left,
    .box-avisos .carousel-control .icon-prev {
        left: 25% !important;
    }

    .box-avisos .carousel-control.right {
        background-image: none !important;
        filter: none !important;
        background-repeat: repeat-x;
    }

    .box-avisos .carousel-control .glyphicon-chevron-right,
    .box-avisos .carousel-control .icon-prev {
        right: 25% !important;
    }

    /* bootstrap.min.css | https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css */

    .box-avisos .carousel-indicators {
        bottom: 0px !important;
    }

    .box-avisos .carousel-indicators li {
        background-color: #0000 !important;
        border: 1px solid var(--color-terciario) !important;
    }

    .box-avisos .carousel-indicators .active {
        background-color: var(--color-primario) !important;
    }


    @media(max-width:768px) {
        .box-avisos .carousel-lg {
            position: absolute;
            visibility: hidden;
        }

    }

    @media(min-width:769px) {
        .box-avisos .carousel-xs {
            position: absolute;
            visibility: hidden;
        }
    }
</style>
<!-- End Styles -->


<!-- Sección Bloque de Mantenimiento  -->
<!-- Primero banner-xs, segundo banner-lg  -->
<div class="box-avisos">
    <hr>

    <!-- carousel xs -->
    <div class="carousel-xs">
        <div id="carrusel_avisos_xs" class="carousel slide" data-ride="carousel" data-interval="12000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carrusel_avisos_xs" data-slide-to="0" class="active"></li>
                <li data-target="#carrusel_avisos_xs" data-slide-to="1"></li>
                <li data-target="#carrusel_avisos_xs" data-slide-to="2"></li>
                <li data-target="#carrusel_avisos_xs" data-slide-to="3"></li>
                <!-- <li data-target="#carrusel_avisos_xs" data-slide-to="4"></li> -->
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <a href="http://www.fotodeteccionbogota.com/" target="_blank" rel="noopener noreferrer">
                        <img class="bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2023/banner_foto_detenciones_banner_340x300.png" alt="Consulta aquí todo acerca de las fotodetecciones">
                    </a>
                </div>

                <div class="item">
                    <a href="https://bogota.gov.co/que-esta-haciendo-claudia-alcaldesa/" target="_blank" rel="noopener noreferrer">
                        <img class="bs img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-03-2023/bannersrendicioncuentas2023vigencia2022_340x300.png" alt="Click aquí para ir a Rendición de Cuentas">
                    </a>
                </div>

                <div class="item">
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-03-2023/politica_general_de_seguridad_de_la_informacion_de_la_secretaria_distrital_de_movilidad_pa04-p01_v.2.pdf" target="_blank" rel="noopener noreferrer">
                        <img class="bs img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-03-2023/banners_politica_de_seguridad_banner_340x300.png" alt="Click aquí para acceder a la política de seguridad">
                    </a>
                </div>

                <div class="item">
                    <img class="bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-12-2022/banner_600x300.png" alt="Información acerca de la sanciono en las investigaciones por infracciones de transito">
                </div>

                <!-- <div class="item">
                    <img class="bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2023/aviso_de_suspencion_de_servicios_22marzo_banner_340x300.png" alt="Aviso de Mantenimiento">
                </div> -->

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carrusel_avisos_xs" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carrusel_avisos_xs" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- carousel lg -->
    <div class="carousel-lg">
        <div id="carrusel_avisos_lg" class="carousel slide" data-ride="carousel" data-interval="10000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carrusel_avisos_lg" data-slide-to="0" class="active"></li>
                <li data-target="#carrusel_avisos_lg" data-slide-to="1"></li>
                <li data-target="#carrusel_avisos_lg" data-slide-to="2"></li>
                <li data-target="#carrusel_avisos_lg" data-slide-to="3"></li>
                <!-- <li data-target="#carrusel_avisos_lg" data-slide-to="4"></li> -->
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <a href="http://www.fotodeteccionbogota.com/" target="_blank" rel="noopener noreferrer">
                        <img class="bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2023/banner_foto_detenciones_banner_950x300.png" alt="Consulta aquí todo acerca de las fotodetecciones">
                    </a>
                </div>
                <div class="item">
                    <a href="https://bogota.gov.co/que-esta-haciendo-claudia-alcaldesa/" target="_blank" rel="noopener noreferrer">
                        <img class="bs img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-03-2023/bannersrendicioncuentas2023vigencia2022_950x300.png" alt="Click aquí para ir a Rendición de Cuentas">
                    </a>
                </div>

                <div class="item">
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-03-2023/politica_general_de_seguridad_de_la_informacion_de_la_secretaria_distrital_de_movilidad_pa04-p01_v.2.pdf" target="_blank" rel="noopener noreferrer">
                        <img class="bs img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-03-2023/banners_politica_de_seguridad_banner_950x300.png" alt="Click aquí para acceder a la política de seguridad">
                    </a>
                </div>

                <div class="item">
                    <img class="bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-12-2022/banner_1920x640.png" alt="Información acerca de la sanción en las investigaciones por infracciones de transito">
                </div>
                <!-- <div class="item">
                    <img class="bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2023/aviso_de_suspencion_de_servicios_22marzo_banner_950x300_.png" alt="Aviso de Mantenimiento">
                </div> -->


            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carrusel_avisos_lg" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carrusel_avisos_lg" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!-- <div class="row">
        <div class="col-xs-12 visible-xs-12 visible-xs-block">
            <img alt="Aviso Mantenimiento Sistema Contravencional" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-12-2022/suspension_de_servicios_15_dic_benner_900x300.png" title="Aviso Mantenimiento Sistema Contravencional">
        </div>
        <div class="col-sm-12 hidden-xs">
            <img alt="Aviso Mantenimiento Sistema Contravencional" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-12-2022/suspension_de_servicios_15_dic_banner_1920x640.png" title="Aviso Mantenimiento Sistema Contravencional">
        </div>
    </div> -->
    <hr>
</div>

<!-- Fin Sección Bloque de Mantenimiento  -->
