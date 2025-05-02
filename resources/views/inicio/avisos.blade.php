@extends('welcome')
@section('title', 'avisos')
@section('contenido')

<!-- Set avisos -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;family=Work+Sans:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">

<div class="set-wrapper avisos">
    <hr>
    <div class="cmpnt cmpnt-carousel">
        <div class="carousel slide" data-interval="12000" data-ride="carousel-avisos" id="carousel-avisos">
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#carousel-avisos" title="Banner"></li>
                <li data-slide-to="1" data-target="#carousel-avisos" title="Banner"></li>
                <li data-slide-to="2" data-target="#carousel-avisos" title="Banner"></li>
                <li data-slide-to="3" data-target="#carousel-avisos" title="Banner"></li>
                <li data-slide-to="4" data-target="#carousel-avisos" title="Banner"></li>
                <li data-slide-to="5" data-target="#carousel-avisos" title="Banner"></li>
            </ol>

            <div class="carousel-inner" role="listbox">

            <div class="item active">
                <a>
                    <picture>
                        <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-04-2025/Feria_Ciudad_Bolivar_Abr2025_Banner_1980x625.jpg">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-04-2025/Feria_Ciudad_Bolivar_Abr2025_Bannes_340x300.jpg" class="img-responsive w-100" alt="Feria A Tu Servicio Ciudad Bolivar" title="Image: Feria A Tu Servicio Ciudad Bolivar">
                    </picture>
                </a>
            </div>

            <div class="item">
                <a>
                    <picture>
                        <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-04-2025/BPO_Abr2025_banner1.jpg">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-04-2025/BPO_Abr2025_banner2.jpg" class="img-responsive w-100" alt="Actualización BPO" title="Image:Actualización BPO">
                    </picture>
                </a>
            </div>
                <div class="item">
                    <a href="https://www.movilidadbogota.gov.co/web/mujeres_en_ruta">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2025/banner_web_obgem_mar2025_lg.jpg">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-03-2025/banner_web_obgem_mar2025_xs.jpg" class="img-responsive w-100" alt="Concurso mujeres en ruta 2025" title="Image: Concurso mujeres en ruta 2025">
                        </picture>
                    </a>
                </div>

                <div class="item">
                    <a href="https://bogota.gov.co/mi-ciudad/habitat/terminan-turnos-de-racionamiento-de-agua-en-bogota-sabado-12-de-abril" target="_blank">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-04-2025/piezas_portal_suspension_racionamiento_950x300.png">
                            <img class="img-responsive w-100" loading="lazy" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-04-2025/piezas_portal_suspension_racionamiento_340x300.png" title="Terminan los turnos de racionamiento en Bogotá">
                        </picture>
                    </a>
                </div>

                <div class="item">
                    <a href="https://www.movilidadbogota.gov.co/web/salida_de_patios">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-03-2025/salida_patios_virtual_mar2025_banner1.jpg">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-03-2025/salida_patios_virtual_mar2025_banner2.jpg" class="img-responsive w-100" alt="Salida de patios de forma virtual" title="Image: Salida de patios de forma virtual">
                        </picture>
                    </a>
                </div>


                <div class="item"><a href="https://docs.google.com/forms/d/e/1FAIpQLSfXMHfqXpLwAgjt64zRzCcUFyObjwWtzrQ3aiCmvlzSHqGkMg/viewform?usp=dialog" target="_blank">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-02-2025/banner-encuesta-hibridos-electricos-desktop.jpg">
                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-02-2025/banner-encuesta-hibridos-electricos-mobile.jpg" title="Image: Vehículos híbridos y eléctricos ¿qué tanto sabes?" loading="lazy">
                        </picture>
                    </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/cierres_obras_metro">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-1-linea-metro-cierres-desktop.jpg">
                            <img alt="Ir aLas obras de la Línea 1 del Metro avanzan" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-1-linea-metro-cierres-mobile.jpg" title="Image:Las obras de la Línea 1 del Metro avanzan" loading="lazy">
                        </picture>
                    </a></div>


                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/consulta_de_comparendos">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-mal-parqueado-desktop.jpg">
                            <img alt="Si dejaste tu vehìculo malparqueado" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-mal-parqueado-mobile.jpg" title="Si dejaste tu vehìculo malparqueado" loading="lazy">
                        </picture>
                    </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-04-2025/pieza_mapa_pico_y_placa_carga.jpg" target="_blank">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banners-restricciones-de-carga-desktop.jpg">
                            <img alt="" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banners-restricciones-de-carga-mobile.jpg" title="Image: " loading="lazy">
                        </picture>
                    </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2024/abc_contravencional_dic2024_1.pdf">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-abc-contravencional-desktop.jpg">
                            <img alt="Abecé contravencional" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-abc-contravencional-mobile.jpg" title="Image: Abecé contravencional" loading="lazy">
                        </picture>
                    </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/movilidad_segura">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-campanas-conciencia-vial-desktop.jpg">
                            <img alt="Campañas de conciencia Vial" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-campanas-conciencia-vial-mobile.jpg" title="Image: Campañas de conciencia Vial" loading="lazy">
                        </picture>
                    </a></div>

                <div class="item"><a href="https://whatsapp.com/channel/0029VadhWYGJENyA2aKsbF2B">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-canal-whatsapp-desktop.jpg">
                            <img alt="Únete a nuestro canal de WhatsApp" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-canal-whatsapp-mobile.jpg" title="Image: Únete a nuestro canal de WhatsApp" loading="lazy">
                        </picture>
                    </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/plan_distrital_de_desarrollo_2024_2027">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-plan-distrital-desarrollo-desktop.jpg">
                            <img alt="Ir a Plan de Desarrollo Distrital" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-plan-distrital-desarrollo-mobile.jpg" title="Image: Plan de Desarrollo Distrital" loading="lazy">
                        </picture>
                    </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-retiro-vehiculo-inmovilizado-desktop.jpg">
                            <img alt="Banner retiro de vehículo inmovilizado" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-retiro-vehiculo-inmovilizado-mobile.jpg" title="Image: Banner retiro de vehículo inmovilizado" loading="lazy">
                        </picture>
                    </a></div>

                <div class="item"><a href="https://portalmimovilidad.movilidadbogota.gov.co/">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-mi-movilidad-clic-desktop.jpg">
                            <img alt="Mi movilidad a un clic" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-mi-movilidad-clic-mobile.jpg" title="Image: Mi movilidad a un clic" loading="lazy">
                        </picture>
                    </a></div>

                <div class="item">
                    <a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://datos.movilidadbogota.gov.co/&ved=2ahUKEwipufGjm7-MAxXcRTABHfFACCAQFnoECAoQAQ&usg=AOvVaw1UMKwfJn3-92o28Apq0A0I">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-04-2025/banner_datos_abiertos_2_900x300.jpg">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-04-2025/banner_datos_abiertos_2_340x300.jpg" class="img-responsive w-100" alt="Datos abiertos Secretaría Distrital de Movilidad" title="Image: Datos abiertos Secretaría Distrital de Movilidad">
                        </picture>
                    </a>
                </div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/plan_de_movilidad_sostenible_y_segura">
                        <picture>
                            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-plan-movilidad-sostenible-segura-desktop.jpg">
                            <img alt="Ir a Plan de Movilidad Sostenible y Segura" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-01-2025/banner-plan-movilidad-sostenible-segura-mobile.jpg" title="Image: Plan de Movilidad Sostenible y Segura" loading="lazy">
                        </picture>
                    </a></div>

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
        max-height: 340px;
        object-fit: contain;
        object-position: center;
        margin: auto;
        /* height: 100%; */
        border-radius: 8px !important;
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
