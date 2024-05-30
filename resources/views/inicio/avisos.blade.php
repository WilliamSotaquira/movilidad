@extends('welcome')
@section('title', 'avisos')
@section('contenido')

    <!-- Set avisos -->
    <div class="set-wrapper avisos">
        <br>
        <div class="cmpnt cmpnt-banner-principal">
            <div class="item zoom bs"><a href="https://bogota.gov.co">
                    <picture>
                        <source media="(min-width: 465px)"
                            srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-05-2024/banners_entidades_movilidad_1140x275.png">
                        <img alt="Click aquí para conocer más sobre #CierraLaLlaveYa" class="img-responsive w-100"
                            src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-05-2024/banners_entidades_movilidad_1140x275.png"
                            title="Imagen: Click aquí para conocer más sobre #CierraLaLlaveYa">
                    </picture>
                </a>
            </div>
        </div>
        <hr>
        <div class="cmpnt cmpnt-carousel">
            <div class="carousel slide" data-interval="12000" data-ride="carousel-avisos" id="carousel-avisos">
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carousel-avisos" title="Banner 1"></li>
                    <li data-slide-to="1" data-target="#carousel-avisos" title="Banner 2"></li>
                    <li data-slide-to="2" data-target="#carousel-avisos" title="Banner 3"></li>
                    <li data-slide-to="3" data-target="#carousel-avisos" title="Banner 4"></li>
                    <li data-slide-to="4" data-target="#carousel-avisos" title="Banner 5"></li>
                    <li data-slide-to="5" data-target="#carousel-avisos" title="Banner 6"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active"><a
                            href="https://picoyplacasolidario.movilidadbogota.gov.co/PortalCiudadano/#/">
                            <picture>
                                <source media="(min-width: 465px)"
                                    srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-05-2024/pieza_pyp-lg.png">
                                <img alt="Ir a actualización Pico y Placa Solidario" class="img-responsive w-100"
                                    src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-05-2024/pieza_pyp-xs.png"
                                    title="Image: actualización Pico y Placa Solidario">
                            </picture>
                        </a></div>
                    <!-- <div class="item active"><a
                            href="https://picoyplacasolidario.movilidadbogota.gov.co/PortalCiudadano/#/">
                            <picture>
                                <source media="(min-width: 465px)"
                                    srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-05-2024/banner_lg_pps.jpg">
                                <img alt="Ir a actualización Pico y Placa Solidario" class="img-responsive w-100"
                                    src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-05-2024/banner_xs_pps.jpg"
                                    title="Image: actualización Pico y Placa Solidario">
                            </picture>
                        </a></div> -->
                    <div class="item"><a href="https://www.movilidadbogota.gov.co/web/cierres_obras_metro">
                            <picture>
                                <source media="(min-width: 465px)"
                                    srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-05-2024/piezas_metro_banners_banner_950x300.png">
                                <img alt="Ir a cierre estación Transmilenio calle 26" class="img-responsive w-100"
                                    src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-05-2024/piezas_metro_banners_banner_340x300.png"
                                    title="Image: cierre estación Transmilenio calle 26">
                            </picture>
                        </a></div>

                    <div class="item"><a
                            href="https://www.movilidadbogota.gov.co/web/noticia/estos_son_los_desvios_autorizados_por_inicio_de_traslado_de_redes_en_la_avenida_caracas">
                            <picture>
                                <source media="(min-width: 465px)"
                                    srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/10-04-2024/desvios_metro_banner_950x300.jpg">
                                <img alt="Estos son los desvíos autorizados por inicio de traslado de redes en la Avenida Caracas"
                                    class="img-responsive w-100"
                                    src="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/10-04-2024/desvios_metro_banner_340x300.jpg"
                                    title="Image: Estos son los desvíos autorizados por inicio de traslado de redes en la Avenida Caracas">
                            </picture>
                        </a></div>

                    <div class="item"><a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion">
                            <picture>
                                <source media="(min-width: 465px)"
                                    srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-05-2024/gyp_banner_950x300.png">
                                <img alt="Banner retiro de vehículo inmovilizado" class="img-responsive w-100"
                                    src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-05-2024/gyp_banner_340x300.png"
                                    title="Image: Banner retiro de vehículo inmovilizado">
                            </picture>
                        </a></div>

                    <div class="item"><a href="https://portalmimovilidad.movilidadbogota.gov.co/">
                            <picture>
                                <source media="(min-width: 465px)"
                                    srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-11-2023/banner_mimovilidad_1.png">
                                <img alt="Mi movilidad a un clic" class="img-responsive w-100"
                                    src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-11-2023/banner_mimovilidad_2.png"
                                    title="Image: Mi movilidad a un clic">
                            </picture>
                        </a></div>

                    <div class="item"><a
                            href="https://www.movilidadbogota.gov.co/web/plan_de_movilidad_sostenible_y_segura">
                            <picture>
                                <source media="(min-width: 465px)"
                                    srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-11-2023/benner-pmss_930x300.png">
                                <img alt="Ir a Plan de Movilidad Sostenible y Segura" class="img-responsive w-100"
                                    src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-11-2023/banner-pmss_300x330.png"
                                    title="Image: Plan de Movilidad Sostenible y Segura">
                            </picture>
                        </a></div>

                    <div class="item"><a
                            href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2023/carta_bitacora_senda.pdf">
                            <picture>
                                <source media="(min-width: 465px)"
                                    srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2023/bitacora_senda_integridad_web_950x400.png">
                                <img alt="Ir a bitácora de la senda de integridad" class="img-responsive w-100"
                                    src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2023/bitacora_senda_integridad_web_340x300.png"
                                    title="Image: bitácora de la senda de integridad">
                            </picture>
                        </a></div>

                    <div class="item"><a href="https://www.ventanillamovilidad.com.co/">
                            <picture>
                                <source media="(min-width: 465px)"
                                    srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-11-2023/salidapatios_banner1.png">
                                <img alt="Ir a Salida de patios virtual" class="img-responsive w-100"
                                    src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-11-2023/salidapatios_banner2.png"
                                    title="Image: Salida de patios virtual">
                            </picture>
                        </a></div>

                    <div class="item"><a
                            href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-05-2023/abc_ciclomotores_ojos_en_las_vias.pdf">
                            <picture>
                                <source media="(min-width: 465px)"
                                    srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-05-2023/pantallas_y_creditos_ciclomotores_950x300_web.png">
                                <img alt="Ir a Resolución que define la circulación de ciclomotores en Bogotá"
                                    class="img-responsive w-100"
                                    src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-05-2023/pantallas_y_creditos_ciclomotores_340x300_web.png"
                                    title="Image: Resolución que define la circulación de ciclomotores en Bogotá">
                            </picture>
                        </a></div>

                    <div class="item"><a href="http://www.fotodeteccionbogota.com/">
                            <picture>
                                <source media="(min-width: 465px)"
                                    srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2023/banner_foto_detenciones_banner_950x300.png">
                                <img alt="Ir a Consulta aquí todo acerca de las fotodetecciones"
                                    class="img-responsive w-100"
                                    src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2023/banner_foto_detenciones_banner_340x300.png"
                                    title="Image: Consulta aquí todo acerca de las fotodetecciones">
                            </picture>
                        </a></div>
                </div>
                <a class="left carousel-control" data-slide="prev" href="#carousel-avisos" role="button"
                    title="Anterior"><span class="sr-only">Anterior</span></a>
                <a class="right carousel-control" data-slide="next" href="#carousel-avisos" role="button"
                    title="Siguiente"> <span class="sr-only">Siguiente</span></a>
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

        #carousel-avisos .carousel-control {
            color: var(--color-terciario) !important;
            opacity: 1 !important;
        }

        #carousel-avisos .carousel-control.right,
        .carousel-control.left {
            width: 15% !important;
            border-radius: 7px !important;
        }

        #carousel-avisos .carousel-control.left {
            background-image: none !important;
            filter: none !important;
            background-repeat: repeat-x;
        }

        #carousel-avisos .carousel-control:focus.left,
        #carousel-avisos .carousel-control:hover.left {
            background-repeat: repeat-x;
            background-image: -moz-linear-gradient(left, #4C531E65 0%, #FFFFFF00 100%) !important;
            background-image: -webkit-linear-gradient(left, #4C531E65 0%, #FFFFFF00 100%) !important;
            background-image: linear-gradient(to right, #4C531E65 0%, #FFFFFF00 100%) !important;
        }

        #carousel-avisos .carousel-control .glyphicon-chevron-left,
        #carousel-avisos .carousel-control .icon-prev {
            left: 25% !important;
        }

        #carousel-avisos .carousel-control.right {
            background-image: none !important;
            filter: none !important;
            background-repeat: repeat-x;
        }

        #carousel-avisos .carousel-control:focus.right,
        #carousel-avisos .carousel-control:hover.right {
            background-repeat: repeat-x;
            background-image: -moz-linear-gradient(left, #FFFFFF00 0%, #4C531E65 100%) !important;
            background-image: -webkit-linear-gradient(left, #FFFFFF00 0%, #4C531E65 100%) !important;
            background-image: linear-gradient(to right, #FFFFFF00 0%, #4C531E65 100%) !important;
        }

        #carousel-avisos .carousel-control .glyphicon-chevron-right,
        #carousel-avisos .carousel-control .icon-prev {
            right: 25% !important;
        }

        #carousel-avisos .carousel-control:focus,
        #carousel-avisos .carousel-control:hover {
            color: var(--color-primario) !important;
            background: #FFFFFF00;


        }

        #carousel-avisos .carousel-control .glyphicon-chevron-left,
        #carousel-avisos .carousel-control .glyphicon-chevron-right,
        #carousel-avisos .carousel-control .icon-prev {
            color: var(--color-terciario);
            background-color: #4c531e;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-top: -10px;
            font-size: 32px;
        }

        #carousel-avisos .carousel-control .glyphicon-chevron-left:hover,
        #carousel-avisos .carousel-control .glyphicon-chevron-right:hover,
        #carousel-avisos .carousel-control .icon-prev:hover,
        #carousel-avisos .carousel-control .glyphicon-chevron-left:focus,
        #carousel-avisos .carousel-control .glyphicon-chevron-right:focus,
        #carousel-avisos .carousel-control .icon-prev:focus {
            color: var(--color-gris);
            background-color: #333333;


        }

        /* bootstrap.min.css | https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css */

        #carousel-avisos .carousel-indicators {
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

        #carousel-avisos .carousel-indicators li {
            background-color: var(--color-terciario) !important;
            border: 1px solid var(--color-terciario) !important;
        }

        #carousel-avisos .carousel-indicators li:hover {
            background-color: var(--color-blanco) !important;
            border: 1px solid var(--color-terciario) !important;
        }

        #carousel-avisos .carousel-indicators .active {
            background-color: var(--color-negro) !important;
        }



        #carousel-avisos .carousel-inner {
            margin-bottom: 37px;
        }

        #carousel-avisos .carousel-inner .item img {
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
