@extends('welcome')
@section('title', 'avisos')
@section('contenido')

<!-- Set avisos -->
<hr>
<div class="set-wrapper avisos">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">



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

                <div class="item active">
                    <a>
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-12-2024/horarios_cierre_csm_banner1.jpg">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-12-2024/horarios_cierre_csm_banner2.jpg" class="img-responsive w-100" alt="Horarios SDM fin de año" title="Image: Horarios SDM fin de año">
                        </picture>
                    </a>
                </div>

                <div class="item">
                    <a href="https://legalbog.secretariajuridica.gov.co/regimen-legal-publico#/acto-admin-publico/1211">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-12-2024/piezas_pyp_banner_950x300.png">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-12-2024/piezas_pyp_banner_340x300.png" class="img-responsive w-100" alt="Pico y Placa en Bogota - Fin de Año" title="Image: Pico y Placa en Bogota - Fin de Año">
                        </picture>
                    </a>
                </div>

                <div class="item">
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2024/abc_contravencional_dic2024_1.pdf">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2024/banner_abc_contravencional_1.jpg">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2024/banner_abc_contravencional_2.jpg" class="img-responsive w-100" alt="Abecé contravencional" title="Image: Abecé contravencional">
                        </picture>
                    </a>
                </div>

                <div class="item">
                    <a href="https://bogota.gov.co/navidad-2024/">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2024/banner_en_bogota_la_navidad_es_cultura_950x300.jpg">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2024/banner_en_bogota_la_navidad_es_cultura_340-300.jpg" class="img-responsive w-100" alt="En Bogotá la navidad es cultura" title="Image: En Bogotá la navidad es cultura">
                        </picture>
                    </a>
                </div>

                <div class="item">
                    <a>
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-12-2024/img_5406.jpeg">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-12-2024/orvi_horarios_findeano_banner2.jpg" class="img-responsive w-100" alt="horarios de atención fin de año ORVI" title="Image: horarios de atención fin de año ORVI">
                        </picture>
                    </a>
                </div>

                <div class="item">
                    <a>
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-11-2024/info_importante_csm_nov2024_banner1.jpg">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-11-2024/info_importante_csm_nov2024_banner2.jpg" class="img-responsive w-100" alt="¡Información importante! Centro de Servicios de Movilidad Calle 13" title="Image: ¡Información importante! Centro de Servicios de Movilidad Calle 13">
                        </picture>
                    </a>
                </div>

                <div class="item">
                    <a href="https://bogota.gov.co/racionamiento-agua-bogota/">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-12-2024/banners_turnos_racionamiento_sdm_banner_turnos_racionamiento_sdm_dic_2_-_950x300.jpg">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-12-2024/banners_turnos_racionamiento_sdm_banner_turnos_racionamiento_sdm_dic_2_-_340x300.jpg" class="img-responsive w-100" alt="Turnos de racionamiento" title="Image: Turnos de racionamiento">
                        </picture>
                    </a>
                </div>

                <div class="item">
                    <a href="https://www.movilidadbogota.gov.co/web/movilidad_segura">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-10-2024/campanas_micrositio-lg.png">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-10-2024/campanas_micrositio-xs.png" class="img-responsive w-100" alt="Campañas de conciencia Vial" title="Image: Campañas de conciencia Vial">
                        </picture>
                    </a>
                </div>

                <div class="item">
                    <a href="https://www.movilidadbogota.gov.co/web/subasta-abandonados">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2024/mailing_subasta_dic2024_banner1.jpg">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2024/mailing_subasta_dic2024_banner2.jpg" class="img-responsive w-100" alt="Subasta 25" title="Image: Subasta 25">
                        </picture>
                    </a>
                </div>

                <div class="item">
                    <a href="https://whatsapp.com/channel/0029VadhWYGJENyA2aKsbF2B">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-10-2024/banner_pag_web_canal_whatsapp_950x300_v2.jpg">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-10-2024/banner_pag_web_canal_whatsapp_340x300_op1.jpg" class="img-responsive w-100" alt="Únete a nuestro canal de WhatsApp" title="Image: Únete a nuestro canal de WhatsApp">
                        </picture>
                    </a>
                </div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/cierres_obras_metro">
                        <picture>
                            <source media="(min-width: 465px)"
                                srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2024/solicitud_piezas_metro_950x300.png">
                            <img alt="Ir aLas obras de la Línea 1 del Metro avanzan" class="img-responsive w-100"
                                src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-10-2024/solicitud_piezas_metro_340x300.png"
                                title="Image:Las obras de la Línea 1 del Metro avanzan">
                        </picture>
                    </a></div>

                <div class="item">
                    <a>
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-12-2024/feria_pn_nov2024_banner1.jpg">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-12-2024/feria_pn_nov2024_banner2.jpg" class="img-responsive w-100" alt="Feria A Tu Servicio en el Parque Nacional" title="Image: Feria A Tu Servicio en el Parque Nacional">
                        </picture>
                    </a>
                </div>

                <div class="item"><a href="https://www.youtube.com/watch?v=6mYhZhLHnX8">
                        <picture>
                            <source media="(min-width: 465px)"
                                srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-07-2024/solicitud_prioritaria_banners_bogota_mi_ciudad_mi_casa_950x300.png">
                            <img alt="Aviso Bogotá Mi Ciudad, Mi Casa" class="img-responsive w-100"
                                src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-07-2024/solicitud_prioritaria_banners_bogota_mi_ciudad_mi_casa_340x300.png"
                                title="Image: Aviso Bogotá Mi Ciudad, Mi Casa">
                        </picture>
                    </a></div>

                <div class="item"><a
                        href="https://www.movilidadbogota.gov.co/web/noticia/a_partir_del_22_de_julio_inicia_la_operacion_del_nuevo_carril_preferencial_en_la_carrera_13">
                        <picture>
                            <source media="(min-width: 465px)"
                                srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/17-07-2024/3.-banner-web950x300.jpg">
                            <img alt="Aviso a partir del 22 de julio inicia la operacion del nuevo carril preferencial en la carrera 13"
                                class="img-responsive w-100"
                                src="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/17-07-2024/3.-banner-web-340x300.jpg"
                                title="Image: Aviso a partir del 22 de julio inicia la operacion del nuevo carril preferencial en la carrera 13">
                        </picture>
                    </a></div>

                <div class="item"><a
                        href="https://www.movilidadbogota.gov.co/web/plan_distrital_de_desarrollo_2024_2027">
                        <picture>
                            <source media="(min-width: 465px)"
                                srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-07-2024/banners_aprobado_el_pdd_bogota_camina_segura_950x300.png">
                            <img alt="Ir a Plan de Desarrollo Distrital" class="img-responsive w-100"
                                src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-07-2024/banners_aprobado_el_pdd_bogota_camina_segura_340x300.png"
                                title="Image: Plan de Desarrollo Distrital">
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

                <div class="item"><a href="https://www.ventanillamovilidad.com.co/">
                        <picture>
                            <source media="(min-width: 465px)"
                                srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-11-2023/salidapatios_banner1.png">
                            <img alt="Ir a Salida de patios virtual" class="img-responsive w-100"
                                src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-11-2023/salidapatios_banner2.png"
                                title="Image: Salida de patios virtual">
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

            <a class="left carousel-control" data-slide="prev" href="#carousel-avisos" title="Anterior">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" data-slide="next" href="#carousel-avisos" title="Siguiente">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
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
        z-index: 0;
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
        font-size: 35px !important;
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
        font-size: 35px !important;
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
        border: solid 2px #4c531e;
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
        border: dotted 2px red;
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
        border: 1px dotted red !important;
    }

    #carousel-avisos .carousel-indicators .active {
        background-color: var(--color-negro) !important;
    }



    #carousel-avisos .carousel-inner {
        margin-bottom: 37px;
    }

    #carousel-avisos .carousel-inner .item img {
        max-height: 360px;
        object-fit: contain;
        object-position: center;
        margin: auto;
        height: 100%;
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
