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
                <li data-target="#carrusel_avisos_xs" title="imagen 7" data-slide-to="6"></li>
                <li data-target="#carrusel_avisos_xs" title="imagen 8" data-slide-to="7"></li>
                <li data-target="#carrusel_avisos_xs" title="imagen 9" data-slide-to="8"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner zoom">

            <div class="item active">
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-10-2023/mimovilidad_abc_oct2023_v3_0.pdf">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-10-2023/banner_abc_340x300_2.png" alt="ir a mi movilidad" title="ir a mi movilidad">
                    </a>
                </div>
            <div class="item">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/rutas_soacha_bogota">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-10-2023/piezas_soacha_banner_web_y_redes_banner_2.jpg" alt="ir a rutas Soacha - Bogotá" title="ir a rutas Soacha - Bogotá">
                    </a>
                </div>
                <div class="item">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2023/carta_bitacora_senda.pdf">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2023/bitacora_senda_integridad_web_340x300.png" alt="ir a bitácora de la senda de integridad" title="ir a bitácora de la senda de integridad">
                    </a>
                </div>
                <div class="item">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/preguntas_y_respuestas_frecuentes_migrantes">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/banner_340x300_recategoriza_licencia.png" alt="ir a convocatoria - Recategoriza tu licencia" title="ir a convocatoria - Recategoriza tu licencia">
                    </a>
                </div>

                <div class="item">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-07-2023/cuestionarioparaabc_230713.pdf">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-07-2023/banner_resolucion-132490_230713_710x626.png" alt="ir a abecé Resolución 132490 de 2023" title="ir a abecé Resolución 132490 de 2023">
                    </a>
                </div>


                <div class="item">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-07-2023/informe-bogota-derechos-infancia-juventud-2020-2023.pdf">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-05-2023/pantallas_y_creditos_ciclomotores_340x300_web.png" alt="Click aquí para conocer el informe de gestión sobre la garantía de derechos de la primera infancia, infancia, adolescencia y juventud" title="Click aquí para conocer el informe de gestión sobre la garantía de derechos de la primera infancia, infancia, adolescencia y juventud">
                    </a>
                </div>

                <div class="item">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-05-2023/abc_ciclomotores_ojos_en_las_vias.pdf">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-05-2023/pantallas_y_creditos_ciclomotores_340x300_web.png" alt="Click aquí para conocer la Resolución que define la circulación de ciclomotores en Bogotá" title="Click aquí para conocer la Resolución que define la circulación de ciclomotores en Bogotá">
                    </a>
                </div>


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
        <div id="carrusel_avisos_lg" class="carousel slide" data-ride="carousel" data-interval="20000">
            <!-- Indicators -->
            <ol class="carousel-indicators zoom">
                <li data-target="#carrusel_avisos_lg" title="imagen 1" data-slide-to="0" class="active"></li>
                <li data-target="#carrusel_avisos_lg" title="imagen 2" data-slide-to="1"></li>
                <li data-target="#carrusel_avisos_lg" title="imagen 3" data-slide-to="2"></li>
                <li data-target="#carrusel_avisos_lg" title="imagen 4" data-slide-to="3"></li>
                <li data-target="#carrusel_avisos_lg" title="imagen 5" data-slide-to="4"></li>
                <li data-target="#carrusel_avisos_lg" title="imagen 6" data-slide-to="5"></li>
                <li data-target="#carrusel_avisos_lg" title="imagen 7" data-slide-to="6"></li>
                <li data-target="#carrusel_avisos_lg" title="imagen 8" data-slide-to="7"></li>
                <li data-target="#carrusel_avisos_lg" title="imagen 9" data-slide-to="8"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

            <div class="item active">
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-10-2023/mimovilidad_abc_oct2023_v3_0.pdf">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-10-2023/banner_abc_950x300_2.jpg" alt="ir a mi movilidad" title="ir a mi movilidad">
                    </a>
                </div>
                <div class="item">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/rutas_soacha_bogota">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-10-2023/piezas_soacha_banner_web_y_redes_banner_1.jpg" alt="ir a rutas Soacha - Bogotá" title="ir a rutas Soacha - Bogotá">
                    </a>
                </div>
                <div class="item">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2023/carta_bitacora_senda.pdf">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2023/bitacora_senda_integridad_web_950x400.png" alt="ir a bitácora de la senda de integridad" title="ir a bitácora de la senda de integridad">
                    </a>
                </div>

                <div class="item">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/preguntas_y_respuestas_frecuentes_migrantes">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/banner_950x300_recategoriza_licencia.png" alt="ir a convocatoria - Recategoriza tu licencia" title="ir a convocatoria - Recategoriza tu licencia">
                    </a>
                </div>

                <div class="item">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-07-2023/cuestionarioparaabc_230713.pdf">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-07-2023/banner_resolucion-132490_230713_938x313.png" alt="ir a abecé Resolución 132490 de 2023" title="ir a abecé Resolución 132490 de 2023">
                    </a>
                </div>

                <div class="item">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-07-2023/informe-bogota-derechos-infancia-juventud-2020-2023.pdf">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2023/aviso_portalbogota_230707_950x300.png" alt="Click aquí para conocer el informe de gestión sobre la garantía de derechos de la primera infancia, infancia, adolescencia y juventud" title="Click aquí para conocer el informe de gestión sobre la garantía de derechos de la primera infancia, infancia, adolescencia y juventud">
                    </a>
                </div>

                <div class="item">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-05-2023/abc_ciclomotores_ojos_en_las_vias.pdf">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-05-2023/pantallas_y_creditos_ciclomotores_950x300_web.png" alt="Click aquí para conocer la Resolución que define la circulación de ciclomotores en Bogotá" title="Click aquí para conocer la Resolución que define la circulación de ciclomotores en Bogotá">
                    </a>
                </div>

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
    <hr>
</div>
