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
        z-index: 0;
        position: relative;

    }

    .w-100 {
        width: 100%;
    }

    .box-avisos .carousel-control {
        color: var(--color-terciario) !important;
        opacity: 1 !important;
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

    .box-avisos .carousel-control:focus.left,
    .box-avisos .carousel-control:hover.left {
        background-repeat: repeat-x;
        background-image: -moz-linear-gradient(left, #4C531E65 0%, #FFFFFF00 100%) !important;
        background-image: -webkit-linear-gradient(left, #4C531E65 0%, #FFFFFF00 100%) !important;
        background-image: linear-gradient(to right, #4C531E65 0%, #FFFFFF00 100%) !important;
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

    .box-avisos .carousel-control:focus.right,
    .box-avisos .carousel-control:hover.right {
        background-repeat: repeat-x;
        background-image: -moz-linear-gradient(left, #FFFFFF00 0%, #4C531E65 100%) !important;
        background-image: -webkit-linear-gradient(left, #FFFFFF00 0%, #4C531E65 100%) !important;
        background-image: linear-gradient(to right, #FFFFFF00 0%, #4C531E65 100%) !important;
    }

    .box-avisos .carousel-control .glyphicon-chevron-right,
    .box-avisos .carousel-control .icon-prev {
        right: 25% !important;
    }

    .box-avisos .carousel-control:focus,
    .box-avisos .carousel-control:hover {
        color: var(--color-primario) !important;
        background: #FFFFFF00;


    }

    .box-avisos .carousel-control .glyphicon-chevron-left,
    .box-avisos .carousel-control .glyphicon-chevron-right,
    .box-avisos .carousel-control .icon-prev {
        color: var(--color-terciario);
        background-color: #4c531e;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        margin-top: -10px;
        font-size: 32px;
    }

    .box-avisos .carousel-control .glyphicon-chevron-left:hover,
    .box-avisos .carousel-control .glyphicon-chevron-right:hover,
    .box-avisos .carousel-control .icon-prev:hover,
    .box-avisos .carousel-control .glyphicon-chevron-left:focus,
    .box-avisos .carousel-control .glyphicon-chevron-right:focus,
    .box-avisos .carousel-control .icon-prev:focus {
        color: var(--color-gris);
        background-color: #333333;


    }

    /* bootstrap.min.css | https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css */

    .box-avisos .carousel-indicators {
        bottom: 0px !important;
        position: absolute;
        bottom: 10px;
        left: calc(50% - 3.2em);
        z-index: 15;
        width: auto;
        padding-left: 0;
        margin-left: 0%;
        text-align: center;
        list-style: none;
        padding: 0 8px;
        background: var(--color-fondo);
        border-radius: 15px;

    }

    .box-avisos .carousel-indicators li {
        background-color: var(--color-terciario) !important;
        border: 1px solid var(--color-terciario) !important;
    }

    .box-avisos .carousel-indicators li:hover {
        background-color: var(--color-blanco) !important;
        border: 1px solid var(--color-terciario) !important;
    }

    .box-avisos .carousel-indicators .active {
        background-color: var(--color-negro) !important;
    }



    .box-avisos .carousel-inner .item img {
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
        transform: scale(1.1);
        -moz-transform: scale(1.1);
        /* Firefox */
        -webkit-transform: scale(1.1);
        /* Chrome - Safari */
        -o-transform: scale(1.1);
        /* Opera */
        -ms-transform: scale(1.1);
        /* IE9 */
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
    <div class="row">
        <div class="col-xs-12 visible-xs-12 visible-xs-block">
            <img alt="La SDM modificará el canal de contacto ciudadano" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-05-2023/mensaje-banner.png" title="La SDM modificará el canal de contacto ciudadano">
        </div>
        <div class="col-sm-12 hidden-xs">
            <img alt="La SDM modificará el canal de contacto ciudadano" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-05-2023/mensaje-banner-1-sin-logo.png" title="La SDM modificará el canal de contacto ciudadano">
        </div>
    </div>
    <hr>
    <!-- carousel xs -->
    <div class="carousel-xs">
        <div id="carrusel_avisos_xs" class="carousel slide" data-ride="carousel" data-interval="12000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carrusel_avisos_xs" title="imagen 1" data-slide-to="0" class="active"></li>
                <li data-target="#carrusel_avisos_xs" title="imagen 2" data-slide-to="1"></li>
                <li data-target="#carrusel_avisos_xs" title="imagen 3" data-slide-to="2"></li>
                <li data-target="#carrusel_avisos_xs" title="imagen 4" data-slide-to="3"></li>
                <li data-target="#carrusel_avisos_xs" title="imagen 5" data-slide-to="4"></li>
                <li data-target="#carrusel_avisos_xs" title="imagen 6" data-slide-to="5"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner zoom">

                <div class="item active">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/cronograma_mes_de_la_prevencion_vial_2023">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-05-2023/banner_mpv_2023_340x300.png" alt="Click aquí para conocer más acerca del mes de la prevención vial" title="Click aquí para conocer más acerca del mes de la prevención vial">
                    </a>
                </div>

                <div class="item">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/sisben_iv">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-04-2023/banner_sisben_iv_340x300.jpg" alt="Click aquí para conocer más acerca de cómo podrías obtener subsidio en las tarifas del sistema" title="Click aquí para conocer más acerca de cómo podrías obtener subsidio en las tarifas del sistema">
                    </a>
                </div>

                <!-- <div class="item">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-05-2023/piezas_suspension_de_servicios_banner_2.jpg" alt="Aviso de mantenimiento">
                </div> -->

                <div class="item">
                    <a href="http://www.fotodeteccionbogota.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2023/banner_foto_detenciones_banner_340x300.png" alt="Consulta aquí todo acerca de las fotodetecciones">
                    </a>
                </div>

                <div class="item">
                    <a href="https://bogota.gov.co/que-esta-haciendo-claudia-alcaldesa/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-03-2023/bannersrendicioncuentas2023vigencia2022_340x300.png" alt="Click aquí para ir a Rendición de Cuentas">
                    </a>
                </div>

                <div class="item">
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-03-2023/politica_general_de_seguridad_de_la_informacion_de_la_secretaria_distrital_de_movilidad_pa04-p01_v.2.pdf" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-03-2023/banners_politica_de_seguridad_banner_340x300.png" alt="Click aquí para acceder a la política de seguridad">
                    </a>
                </div>

                <div class="item">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-12-2022/banner_600x300.png" alt="Información acerca de la sanciono en las investigaciones por infracciones de transito">
                </div>


            </div>

            <!-- Controls -->
            <a class="left carousel-control zoom" href="#carrusel_avisos_xs" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" title="Anterior"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control zoom" href="#carrusel_avisos_xs" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" title="Siguiente"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- carousel lg -->
    <div class="carousel-lg">
        <div id="carrusel_avisos_lg" class="carousel slide" data-ride="carousel" data-interval="10000">
            <!-- Indicators -->
            <ol class="carousel-indicators zoom">
                <li data-target="#carrusel_avisos_lg" title="imagen 1" data-slide-to="0" class="active"></li>
                <li data-target="#carrusel_avisos_lg" title="imagen 2" data-slide-to="1"></li>
                <li data-target="#carrusel_avisos_lg" title="imagen 3" data-slide-to="2"></li>
                <li data-target="#carrusel_avisos_lg" title="imagen 4" data-slide-to="3"></li>
                <li data-target="#carrusel_avisos_lg" title="imagen 5" data-slide-to="4"></li>
                <li data-target="#carrusel_avisos_lg" title="imagen 6" data-slide-to="5"></li>
            </ol>



            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/cronograma_mes_de_la_prevencion_vial_2023">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-05-2023/banner_mpv_2023_950x300.png" alt="Click aquí para conocer más acerca del mes de la prevención vial" title="Click aquí para conocer más acerca del mes de la prevención vial">
                    </a>
                </div>

                <div class="item">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/sisben_iv">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-04-2023/banner_sisben_iv_950x300.jpg" alt="Click aquí para conocer más acerca de cómo podrías obtener subsidio en las tarifas del sistema" title="Click aquí para conocer más acerca de cómo podrías obtener subsidio en las tarifas del sistema">
                    </a>
                </div>
                <!--
                <div class="item">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-05-2023/piezas_suspension_de_servicios_951x301.jpg" alt="Aviso de mantenimiento">
                </div> -->

                <div class="item">
                    <a href="http://www.fotodeteccionbogota.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2023/banner_foto_detenciones_banner_950x300.png" alt="Consulta aquí todo acerca de las fotodetecciones">
                    </a>
                </div>
                <div class="item">
                    <a href="https://bogota.gov.co/que-esta-haciendo-claudia-alcaldesa/" target="_blank" rel="noopener noreferrer">
                        <img class="bs img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2023/bannersrendicioncuentas2023vigencia2022_950x300.png" alt="Click aquí para ir a Rendición de Cuentas">
                    </a>
                </div>

                <div class="item">
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-03-2023/politica_general_de_seguridad_de_la_informacion_de_la_secretaria_distrital_de_movilidad_pa04-p01_v.2.pdf" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2023/banners_politica_de_seguridad_banner_950x300.png" alt="Click aquí para acceder a la política de seguridad">
                    </a>
                </div>

                <div class="item">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2023/investigaciones_950x300.png" alt="Información acerca de la sanción en las investigaciones por infracciones de transito">
                </div>



            </div>

            <!-- Controls -->
            <a class="left carousel-control zoom" href="#carrusel_avisos_lg" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" ar aria-hidden="true" title="Anterior"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control zoom" href="#carrusel_avisos_lg" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" title="Siguiente"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>





</div>

<!-- Fin Sección Bloque de Mantenimiento  -->
