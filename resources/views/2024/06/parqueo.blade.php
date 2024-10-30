@extends('welcome')
@section('title','parqueo')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Set parqueo -->
<div class="set-wrapper parqueo">

    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
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
            transform: scale(1.05);
            -moz-transform: scale(1.05);
            /* Firefox */
            -webkit-transform: scale(1.05);
            /* Chrome - Safari */
            -o-transform: scale(1.05);
            /* Opera */
            -ms-transform: scale(1.05);
            /* IE9 */
        }

        .paragraph-desc {
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            line-height: 1.5;
            color: rgba(77, 84, 31, 1);

        }
    </style>

    <!-- box bh -->
    <style>
        .set-wrapper .bh {
            grid-area: bh;
            background-color: #4d541f;
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-07-2024/parqueo_landing_1.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center bottom;

        }

        .set-wrapper .head {
            background-color: #4d541f;
            opacity: 0.9;
            padding: 32px;
        }

        .bh .cpnt-title-ppal {
            margin-top: 32px;
            margin-bottom: 48px;
        }

        .bh .cpnt-title-ppal .enf {
            display: block;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            line-height: 1.2;
            /* color: #BED000; */
            color: #ffffff;
            margin-bottom: 8px;

        }

        .bh .cpnt-title-ppal .title {
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 28px;
            font-weight: 400;
            text-align: center;
            line-height: 1.5;
            color: #ffffff;
            margin-top: 8px;
        }

        .bh .cpnt-botones {
            position: relative;
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            gap: 16px;
            max-width: 800px;
            margin: auto;
            justify-items: center;


        }

        .bh .cpnt-botones .btn-anchor {
            display: inline-flex;
            padding: 8px;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            line-height: 1;
            color: #4d541f;
            background-color: #BED000;
            border-radius: 50px;

            height: auto;
            word-break: break-word;
            word-wrap: break-word;
            width: 100%;
            min-width: 150px;
            max-width: 360px;
            white-space: normal;
            justify-content: space-between;
            align-items: center;

        }

        .bh .cpnt-botones .btn-anchor:hover {
            background-color: #ffffff;
            color: #252525;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(250, 250, 250, 0.16);
            box-shadow: 0px 0px 10px 3px rgba(250, 250, 250, 0.16);
        }

        @media(min-width:768px) {
            .bh .cpnt-botones {
                grid-template-columns: 1fr 1fr;
            }
        }

        .bh .icon1 {
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/coche_nfb.png");
            height: 50px;
            width: 50px;
            min-width: 50px;
            top: 0px;
            right: 0px;
            position: relative;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .bh .btn-anchor:hover .icon1 {
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/coche_cfo.png");
        }

        .bh .icon2 {
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/accidente_nfb.png");
            height: 50px;
            width: 50px;
            min-width: 50px;
            top: 0px;
            right: 0px;
            position: relative;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .bh .btn-anchor:hover .icon2 {
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/accidente_cfo.png");
        }
    </style>
    <div class="box bh">
        <div class="head">
            <div class="cpnt cpnt-title-ppal">
                <span class='enf enf1'>Inmovilización y Salida de Patios</span>
                <h2 class="title title-ppal">Si tu vehículo fue inmovilizado, te indicamos qué hacer</h2>
            </div>
            <div class="cpnt cpnt-botones">
                <a class="btn btn-anchor btn-anchor-1" href="#box-infraccion">Inmovilización por infracción a las normas de tránsito <span class="icon1"></span></a>
                <a class="btn btn-anchor btn-anchor-2" href="#box-siniestro">Inmovilización por siniestro vial <span class="icon2"></span></a>
            </div>
        </div>
    </div>

    <!-- box b1 -->
    <style>
        .set-wrapper .b1 {
            grid-area: b1;
            margin-top: 84px;
            margin-bottom: 32px;
        }

        .b1 .cpnt-1 {
            margin-bottom: 32px;
        }

        .b1 .cpnt-1 .title1 {
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            line-height: 1.2;
            color: #4d541f;
            margin-bottom: 8px;
        }

        .b1 .cpnt-1 .enf1 {
            display: block;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 16px;
            font-weight: normal;
            text-align: center;
            line-height: 1;
            color: #4d541f;
            margin: 32px;
        }

        .b1 .cpnt-2 {
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        @media(min-width:768px) {
            .b1 .cpnt-2 {
                display: grid;
                grid-auto-flow: dense;
                grid-template-columns: 40% 60%;
            }

        }

        .b1 .cpnt-2 .img1 {
            border-radius: 8px;

        }

        .b1 .cpnt-2 .img1 img {
            display: block;
            padding: auto 16px;
            width: 100%;
            height: auto;
            object-fit: cover;
            padding-bottom: 16px;

            @media(min-width:768px) {
                padding-right: 32px;
                padding-bottom: 0px;
            }
        }

        .b1 .cpnt-2 .collapse-infraccion {
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            padding-right: 0px;
            padding-left: 0px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            background-color: #e9e9e9;

            @media(min-width:768px) {
                padding-right: 32px;
                padding-left: 32px;
            }
        }

        #accordion-infraccion {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            row-gap: 8px;
        }

        .b1 .glyphicon-chevron-right::before {
            color: #4d541f !important;
        }

        .b1 .glyphicon-chevron-left::before {
            color: #4d541f !important;
        }

        .b1 .panel,
        .b1 .panel-default {
            border-radius: 25px !important;
        }

        .b1 .panel-group {
            margin-bottom: 0px;
        }

        .b1 .panel-group .panel-heading+.panel-collapse>.list-group,
        .panel-group .panel-heading+.panel-collapse>.panel-body {
            border-top: none !important;
        }

        .b1 .panel-heading {
            border-color: #BED000 !important;
            background-color: #BED000 !important;
            background-image: none !important;
            height: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 25px;
        }

        .b1 .panel-heading .panel-title {
            padding-right: 8px;
        }

        .b1 .panel-heading .panel-title a {
            font-family: 'Montserrat', sans-serif;
            color: #4d541f !important;
            font-size: 16px;
            font-weight: 600;
        }

        .b1 .panel-heading .panel-title a::before {
            font-family: 'Glyphicons Halflings';
            content: "\e080";
            float: right;
            color: #4d541f;
            font-size: 18px;
            margin-left: 12px;
        }

        .b1 .panel-heading .panel-title a.collapsed::before {
            content: "\e114";
        }

        .b1 .panel-body {
            padding: 16px;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 16px;
            font-weight: normal;
            text-align: left;
            line-height: 1.4;
            color: #000000c9;
        }

        .b1 .panel-body ol>li {
            padding-left: 16px;
            padding-bottom: 12px;
        }
    </style>
    <div class="box b1" id="box-infraccion">
        <div class="cpnt cpnt-1">
            <h3 class="title title1">Inmovilización por infracción a las normas de tránsito</h3>
            <a href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/orden-de-entrega-de-vehiculo-inmovilizado-sdm-37092"><span class='enf enf1'>Consulta el paso a paso</span></a>
        </div>
        <div class="cpnt cpnt-2">
            <div class="imagen img1">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-07-2024/img-parqueo-1.png" alt="Foto: Inmovilización de vehículo en la vía" title="Foto: Inmovilización de vehículo en la vía">
            </div>
            <div class="collapse-infraccion">

                <!-- collapse group infraccion -->
                <div class='panel-group' id='accordion-infraccion' role='tablist ' aria-multiselectable='true'>

                    <!-- collapse menor -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='heading-menor'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordion-infraccion' href='#collapse-menor' aria-expanded='false' aria-controls='collapse-menor'>
                                    Vehículos inmovilizados hace menos de un año
                                </a>
                            </h4>
                        </div>
                        <div id='collapse-menor' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-menor' aria-expanded='false'>
                            <div class='panel-body'>
                                <div class='body-collapse-menor'>
                                    <ol>
                                        <li><b>Valida</b> aquí si tu vehículo se encuentra inmovilizado: <a href="https://portalmimovilidad.movilidadbogota.gov.co/#/pages/inmovilizaciones/consulta-vehiculos">https://portalmimovilidad.movilidadbogota.gov.co/#/pages/inmovilizaciones/consulta-vehiculos</a></li>
                                        <li><b>Agenda tu cita</b> de Salida de Patios en <a href="https://www.ventanillamovilidad.com.co/">https://www.ventanillamovilidad.com.co/</a> o recibe más información en la línea <a href="tel:+576013649400">(601) – 364 9400</a>, opción 2. También puedes agendar la cita en <a href="https://portalmimovilidad.movilidadbogota.gov.co/#/">Mi Movilidad a un Clic</a>.</li>
                                        <li>Asiste a tu cita con los <b>documentos</b> solicitados para el trámite.</li>
                                        <li>Realiza el <b>pago</b> de la liquidación de patios y grúas <a href="https://cmovilgyp.com/wliquidacion/">en línea</a> o en los puntos autorizados.</li>
                                        <li>Preséntate al patio autorizado Nro 1, con la <b>orden de salida y liquidación</b> cancelada originales.</li>
                                        <li><b>Retira</b> tu vehículo.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- collapse mayor -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='heading-mayor'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordion-infraccion' href='#collapse-mayor' aria-expanded='false' aria-controls='collapse-mayor'>
                                    Vehículos inmovilizados hace más de un año
                                </a>
                            </h4>
                        </div>
                        <div id='collapse-mayor' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-mayor' aria-expanded='false'>
                            <div class='panel-body'>
                                <div class='body-collapse-mayor'>
                                    <ol>
                                        <li><b>Acércate</b> al Centro de Servicios de Movilidad en la Calle 13 # 37 -35, para validar en qué patios se encuentra tu vehículo.</li>
                                        <li><b>Agenda tu cita</b> de Salida de Patios en <a href="https://www.ventanillamovilidad.com.co/">https://www.ventanillamovilidad.com.co/</a> o recibe más información en la línea <a href="tel:+576013649400">(601) – 364 9400</a>, opción 2. También puedes agendar la cita en <a href="https://portalmimovilidad.movilidadbogota.gov.co/#/">Mi Movilidad a un Clic.</a></li>
                                        <li>Asiste a tu cita con los <b>documentos</b> solicitados para el trámite.</li>
                                        <li>Realiza el <b>pago</b> de la liquidación de patios y grúas en los puntos autorizados.</li>
                                        <li>Preséntate al patio indicado, con la <b>orden de salida y liquidación cancelada</b> originales.</li>
                                        <li><b>Retira</b> tu vehículo.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- collapse tarifas -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='heading-tarifas'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordion-infraccion' href='#collapse-tarifas' aria-expanded='false' aria-controls='collapse-tarifas'>
                                    Tarifas 2024
                                </a>
                            </h4>
                        </div>
                        <div id='collapse-tarifas' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-tarifas' aria-expanded='false'>
                            <div class='panel-body'>
                                <div class='body-collapse-tarifas'>
                                    <div class="imagen img1">
                                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-07-2024/img-parqueo-2.png">
                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-07-2024/img-parqueo-2.png" alt="Imagen: Tarifas servicios de parqueo y grúa" title="Imagen: Tarifas servicios de parqueo y grúa">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- box b2 -->
    <style>
        .set-wrapper .b2 {
            grid-area: b2;
            margin-top: 84px;
            margin-bottom: 32px;
        }

        .b2 .cpnt-1 .title1 {
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            line-height: 1.2;
            color: #4d541f;
            margin-bottom: 8px;
        }


        .b2 .cpnt-2 {
            margin-top: 48px;
            max-width: 700px;
            margin: auto;
        }

        .b2 .cpnt-2 .video-1 {
            margin-top: 32px;

        }
    </style>
    <div class="box b2">
        <div class="cpnt cpnt-1">
            <h3 class="title title1">Salida de Patios Virtual</h3>
            <p class="paragraph ph1 paragraph-desc">Ahorra&nbsp;tiempo&nbsp;y&nbsp;saca&nbsp;tu&nbsp;vehículo&nbsp;de&nbsp;los&nbsp;patios&nbsp;de&nbsp;forma&nbsp;virtual. Olvídate de esperar. ¡Haz&nbsp;clic&nbsp;y&nbsp;descubre&nbsp;lo&nbsp;fácil&nbsp;que&nbsp;puede&nbsp;ser!</p>
        </div>
        <div class="cpnt cpnt-2">
            <div class="video video-1">
                <video controls style="width: 100%;" poster="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/241021_1920x1080_80.png">
                    <source src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/salida_de_patios_final_1.12_subti_e_inter.mp4" type="video/mp4" preload>
                    <track label="Español" kind="captions" srclang="es" src="resources/myvideo-es.vtt">
                </video>
            </div>
        </div>
    </div>

    <!-- box b3 -->
    <style>
        .set-wrapper .b3 {
            grid-area: b3;
            margin-top: 84px;
            margin-bottom: 32px;
        }

        .b3 .cpnt-1 .title1 {
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            line-height: 1.2;
            color: #4d541f;
            margin-bottom: 32px;
        }

        .b3 .cpnt-cards {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: normal;
            align-content: normal;
            gap: 32px;

            @media(min-width:768px) {

                padding: 42px;
            }
        }


        .b3 .cpnt-cards .card {
            /* display: block;
        flex-grow: 0;
        flex-shrink: 1;
        flex-basis: auto;
        align-self: auto;
        text-align: center; */

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 16px;
            width: 280px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        @media(min-width:768px) {
            .b3 .cpnt-cards .card-4 {
                width: 450px;
            }
        }

        .b3 .cpnt-cards .card:hover {
            background-color: #f5f5f5;
        }

        .b3 .cpnt-cards .imagen {
            display: inline-block;
            margin: auto;
            width: 100%;
            max-width: 120px;
        }

        .b3 .cpnt-cards .title-card {
            display: inline-block;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            line-height: 1.25;
            color: #4d541f;
            margin-bottom: 8px;
        }

        .b3 .cpnt-cards .ph-card {
            display: inline-block;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 15px;
            font-weight: normal;
            text-align: center;
            line-height: 1.2;
            color: #4d541f;

            overflow-y: auto;

        }

        @media(min-width:768px) {
            .b3 .cpnt-cards .ph-card {
                height: 160px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }

        .b3 .cpnt-boton {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: normal;
            align-content: normal;
            margin-top: 32px;
            margin-bottom: 32px;
        }

        .b3 .cpnt-boton .btn-download {
            position: relative;
            display: inline-flex;
            padding: 8px;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            line-height: 1;
            color: #4d541f;
            background-color: #BED000;
            border-radius: 50px;

            height: auto;
            word-break: break-word;
            word-wrap: break-word;
            width: 100%;
            min-width: 150px;
            max-width: 460px;
            white-space: normal;
            justify-content: space-between;
            align-items: center;
        }

        .b3 .cpnt-boton .btn-download:hover {
            background-color: #4d541f;
            color: #BED000;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(250, 250, 250, 0.16);
            box-shadow: 0px 0px 10px 3px rgba(250, 250, 250, 0.16);
        }

        .b3 .cpnt-boton .icon-descarga {
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-07-2024/descargar_b.png");
            height: 40px;
            width: 40px;
            min-width: 40px;
            top: 0px;
            right: 0px;
            position: relative;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .b3 .cpnt-boton .btn-download:hover .icon-descarga {
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-07-2024/descargar_v.png");
        }
    </style>
    <div class="box b3">
        <div class="cpnt cpnt-1">
            <h3 class="title title1">Ruta de inmovilización por por infracción a las normas de tránsito</h3>
            <p class="paragraph ph1 paragraph-desc">Conoce el paso a paso de todo el procedimiento de inmovilización de vehículo por infracción a las normas de tránsito y transporte.</p>

        </div>
        <div class="cpnt cpnt-cards">

            <div class="card card-1">
                <img class="imagen img-card img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/iconos_website_1.png" alt="icono indicacion de mano alto" title="icono indicacide mano alto">
                <h4 class="title title-card">1. Inmovilización</h4>
                <p class="paragraph ph-card">La inmovilización del vehículo consiste en la suspensión temporal de su circulación y solo la ordena la autoridad de tránsito.</p>
            </div>

            <div class="card card-2">
                <img class="imagen img-card img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/iconos_website_2.png" alt="icono indicacion de mano alto" title="icono indicacide mano alto">
                <h4 class="title title-card">2. Traslado a Patios</h4>
                <p class="paragraph ph-card">La Policía de Tránsito o Secretaría Distrital de Movilidad (SDM), solicita al concesionario el servicio de grúa, que se requiere en vía.</p>
            </div>

            <div class="card card-3">
                <img class="imagen img-card img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/iconos_website_3.png" alt="icono indicacion de mano alto" title="icono indicacide mano alto">
                <h4 class="title title-card">3. Grúas</h4>
                <p class="paragraph ph-card">El servicio de grúa se presta para traslado de vehículos que infringen las normas de tránsito, descritas en el Código Nacional de Tránsito y el Manual de Infracciones, accidentes, despeje de vías, carros volcados, orilladas, entre otros.</p>
            </div>

            <div class="card card-4">
                <img class="imagen img-card img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/iconos_website_4.png" alt="icono indicacion de mano alto" title="icono indicacide mano alto">
                <h4 class="title title-card">4. Parqueadero (Patio)</h4>
                <p class="paragraph ph-card">Una vez la grúa hace el traslado a los patios, los vehículos inmovilizados son objeto de un inventario digital de ingreso, donde se detallan sus condiciones y partes y se realiza un video de ingreso. Se toman fotos de apoyo, de los comparendos y de la grúa que trasladó el vehículo.</p>
            </div>

            <div class="card card-5">
                <img class="imagen img-card img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/iconos_website_5.png" alt="icono indicacion de mano alto" title="icono indicacide mano alto">
                <h4 class="title title-card">5. Retiro</h4>
                <p class="paragraph ph-card">Para el retiro de los vehículos inmovilizados, los propietarios o infractores deben presentarse al patio indicado, con la orden de salida y liquidación cancelada originales.</p>
            </div>
        </div>
        <div class="cpnt cpnt-boton">
            <a href="https://www.movilidadbogota.gov.co/web/guia_de_inmovilizacion" class="btn btn-anchor btn-download" download>Descargar la Guía de inmovilización completa <span class="icon-descarga"></span></a>
        </div>
    </div>

    <!-- box b4 -->
    <style>
        #box-siniestro {
            grid-area: b4;
            margin-top: 32px;
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-07-2024/parqueo_landing_2.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center bottom;
        }

        .fondo2 {
            background: #4d541f;
            opacity: 0.9;
            padding: 8px;
        }

        @media(min-width:768px) {
            .fondo2 {
                padding: 32px 64px;
            }
        }

        .b4 .cpnt-1 {
            margin-bottom: 32px;
        }

        .b4 .cpnt-1 .title {
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 32px;
            font-weight: normal;
            text-align: center;
            line-height: 1.2;
            color: #ffffff;
            margin-bottom: 8px;
        }

        .b4 .cpnt-1 .paragraph {
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 16px;
            font-weight: normal;
            text-align: center;
            line-height: 1.5;
            color: rgba(255, 255, 255, 1);
        }

        .b4 .cpnt-1 .paragraph {
            padding: 0 16px;
        }

        .b4 .glyphicon-chevron-right::before {
            color: #4d541f !important;
        }

        .b4 .glyphicon-chevron-left::before {
            color: #4d541f !important;
        }

        .b4 .panel {
            border: solid 1px #BED000;
        }

        .b4 .panel-heading {
            border-color: #BED000 !important;
            background-color: #BED000 !important;
            background-image: none !important;
            border-radius: 25px;
        }

        .b4 .panel-heading .panel-title a {
            text-decoration: none;
            color: #1c1d39 !important;
            font-size: 18px;
            font-weight: 600;
            /* letter-spacing: 1px; */
        }

        .b4 .panel-heading .panel-title a:after {
            font-family: 'Glyphicons Halflings';
            content: "\e080";
            float: right;
            color: #4d541f;
            font-size: 18px;
        }

        .b4 .panel-heading .panel-title a.collapsed:after {
            content: "\e114";
        }

        .b4 .panel-default {
            border-radius: 25px !important;
            opacity: 1;
        }

        .b4 .panel-body ol>li {
            padding-left: 16px;
            padding-bottom: 12px;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
        }

        .b4 .panel-body {
            padding: 16px;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 15px;
            font-weight: normal;
            text-align: left;
            line-height: 1.4;
            color: #000000c9;
        }
    </style>
    <div class="box b4" id="box-siniestro">
        <div class="fondo2">
            <div class="cpnt cpnt-1">
                <h3 class="title title-1"><b>Inmovilizado por siniestro vial</b></h3>
                <p class="paragraph ph-1">Si tu vehículo se encuentra inmovilizado por un siniestro vial (con persona herida o fallecida), ten en cuenta los siguientes requisitos para su salida del patio transitorio. </p>
            </div>

            <div class="cpnt cpnt-collapse-inmovilizado">

                <!-- collapse group inmovilizado -->
                <div class='panel-group' id='accordion-inmovilizado' role='tablist ' aria-multiselectable='true'>

                    <!-- collapse peritaje -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='heading-peritaje'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordion-inmovilizado' href='#collapse-peritaje' aria-expanded='false' aria-controls='collapse-peritaje'>
                                    Peritaje
                                </a>
                            </h4>
                        </div>
                        <div id='collapse-peritaje' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-peritaje' aria-expanded='false'>
                            <div class='panel-body'>
                                <div class='body-collapse-peritaje'>
                                    <p class="paragraph ph-1 text-uppercase"><strong>El trámite NO tiene costo y no necesita intermediarios.</strong></p>
                                    <p class="paragraph ph-1"><b>PARA SOLICITAR CITA DE PERITAJE:</b></p>
                                    <ol>
                                        <li>Debes contar con disponibilidad de 2 horas como mínimo.</li>
                                        <li>A partir del día siguiente a la inmovilización del vehículo, preséntate en el Patio Transitorio (Av. Calle 63 No. 94-51/93), antes de las 7:00 a.m. para la asignación de la cita de “PERITAJE” por parte del Seccional de Tránsito de la Policía Nacional.</li>
                                        <li>Si cuenta con el Informe policial de accidente de tránsito – IPAT preséntelo y si no, con la copia de la licencia de tránsito (tarjeta de propiedad).</li>
                                    </ol>
                                    <p class="paragraph ph-1"><b>AL MOMENTO DEL PERITAJE:</b></p>
                                    <ol>
                                        <li>Presenta el Formato de solicitud de análisis con la noticia criminal completa FPJ12.</li>
                                        <li>Lleva las llaves del vehículo en caso de no haberlas entregado al momento de la inmovilización.</li>
                                        <li>Presenta original y fotocopia de:
                                            <ul>
                                                <li>De la licencia de tránsito (tarjeta de propiedad del vehículo).</li>
                                                <li>Documento de identidad del propietario o poseedor.</li>
                                            </ul>
                                        </li>
                                        <li>Lleva:
                                            <ul>
                                                <li>Una hoja carbón azul.</li>
                                                <li>Vinilo transparente de 15 x20 cm.</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- collapse retiro -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='heading-retiro'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordion-inmovilizado' href='#collapse-retiro' aria-expanded='false' aria-controls='collapse-retiro'>
                                    Retiro de patios
                                </a>
                            </h4>
                        </div>
                        <div id='collapse-retiro' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-retiro' aria-expanded='false'>
                            <div class='panel-body'>
                                <div class='body-collapse-retiro'>
                                    <p class="paragraph ph-1 text-uppercase"><strong>El trámite NO tiene costo y no necesita intermediarios.</strong></p>
                                    <p>Para realizar el retiro de tu vehículo inmovilizado del patio transitorio, debes aportar los siguientes documentos: </p>
                                    <ul>
                                        <li>Original del Oficio expedido por la Fiscalía General de la Nación, el cual será confirmado con la URI correspondiente.</li>
                                        <li>Fotocopia del Documento de identidad del propietario o apoderado autorizado, según oficio de la Fiscalía General de la Nación.</li>
                                        <li>Fotocopia de la Licencia de tránsito (Tarjeta de propiedad) del Vehículo, motocicleta, derivado o bicicleta.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <!-- box b5 -->
    <style>
        .set-wrapper .b5 {
            padding-top: 32px;
            background: #BED000;
            padding: 16px 8px;
            border-radius: 16px;
            margin-top: 32px;

            @media(min-width:768px) {
                margin-top: 62px;

            }
        }



        .b5 .cpnt-1 {
            grid-area: b5-titulo;
            padding: 16px;
        }

        .b5 .cpnt-1 .title-1 {
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            line-height: 1.2;
            color: #4d541f;
            margin-bottom: 32px;
        }

        .b5 .cpnt-2 {
            grid-area: b5-collapse;
            padding: 0px;

            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: normal;
            align-content: normal;

            font-weight: normal;
            font-size: clamp(2rem, 3vw + 2rem, 2rem);
            margin: 0px;
            padding: 32px;
            color: #4d541f;
            line-height: 1.2;

            font-weight: normal;
            font-family: 'Montserrat', sans-serif;
            margin: 0px;
            padding: 32px;

        }

        .b5 .cpnt-2 p>a{
            color: #252525;
        }


        .b5 .cpnt-2 .btn-enlace {
            position: relative;
            display: inline-flex;
            padding: 8px;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            line-height: 1;
            color: #BED000;
            background-color: #4d541f;
            border-radius: 50px;

            height: 60px;
            word-break: break-word;
            word-wrap: break-word;
            width: 100%;
            min-width: 150px;
            max-width: 280px;
            white-space: normal;
            justify-content: space-between;
            align-items: center;
            padding-left: 16px;
        }

        .b5 .cpnt-2 .btn-enlace:hover {
            background-color: #f5f5f5;
            color: #4d541f;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(250, 250, 250, 0.16);
            box-shadow: 0px 0px 10px 3px rgba(250, 250, 250, 0.16);
        }

        .b5 .cpnt-2 .icon-enlace {
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-07-2024/enlace_a.png");
            height: 40px;
            width: 40px;
            min-width: 40px;
            top: 0px;
            right: 0px;
            position: relative;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .b5 .cpnt-2 .btn-enlace:hover .icon-enlace {
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-07-2024/enlace_v.png");
        }

        .b5 .cpnt-3 {
            padding: 0px 0px 16px 0px;

        }


        .b5 .cpnt-3 .imagen img {
            display: block;
            padding: auto 16px;
            width: 100%;
            max-width: 350px;
            margin: auto;
            height: auto;
            object-fit: cover;
            border-radius: 16px;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
        }

        @media(min-width:768px) {
            .b5 .cpnt-1 .title-1 {
                margin: 0;
            }

            .b5 .cpnt-2 {
                padding: 16px;
            }

            .b5 .cpnt-2 p {
                padding: 16px;
                font-optical-sizing: auto;
                font-size: 18px;
                font-weight: normal;
                text-align: center;
                line-height: 1.3;
            }

            .b5 .cpnt-2 .btn {
                margin-top: 16px;
            }

            .b5 .cpnt-3 .imagen img {
                max-width: 100%;
            }
        }
    </style>
    <div class="box b5">
        <div class="cpnt cpnt-1">
            <h3 class="title title-1">Ubicación de Patios</h3>
        </div>
        <div class="cpnt cpnt-2 .cpnt-boton">
            <p>Conoce la ubicación de los patios en nuestra página de <a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion"><b>Puntos de atención.</b></a> Si tu vehículo está inmovilizado hace más de un año, recuerda acércate al Centro de Servicios de Movilidad en la <a href="https://maps.app.goo.gl/SnQZ4eSVgHPhmqJR8"><b>Calle 13 # 37 -35,</b></a> para validar en qué patios se encuentra tu vehículo.</p>
            <a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion" class="btn btn-enlace">Ir a puntos de atención<span class="icon-enlace"></span></a>
        </div>
    </div>

    <!-- box b6 -->
    <style>
        .set-wrapper .b6 {
            grid-area: b6;
            margin-top: 32px;
            background-color: #4d541f;
            position: relative;

        }

        .b6 .group-images .img-1 {
            position: absolute;
            width: 357px;
            left: calc(42% - 200px);
            z-index: -0;
            visibility: hidden;

            @media(min-width:768px) {
                visibility: visible;
            }
        }

        .b6 .group-images .img-2 {
            position: absolute;
            width: 110px;
            bottom: 0;
        }

        .b6 .group-images .img-3 {
            position: absolute;
            width: 300px;
            right: 0;
        }

        .b6 .group-text {
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            padding: 32px 16px;
            align-items: center;
            gap: 32px;

            @media(min-width:768px) {
                grid-template-columns: 1fr 1fr;
                padding: 20px;
            }
        }

        .b6 .group-text .logo-1 img {
            width: 200px;
            margin: auto;

            @media(min-width:768px) {
                width: 240px;
                margin: 0px;
            }

        }

        .b6 .cpnt-2 {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: normal;
            align-content: normal;

            @media(min-width:768px) {
                padding-left: 72px;

            }
        }

        .b6 .cpnt-2 .paragraph {
            font-family: 'Montserrat', sans-serif;
            text-align: center;
            color: #ffffff;
        }

        .b6 .cpnt-2 .ph-1 {
            font-size: 24px;
            line-height: 1.2;
            padding: 8px;
            text-align: left;
        }

        .b6 .cpnt-2 .ph-2 {
            padding: 8px;
            font-size: 16px;
            text-align: left;
        }

        .b6 .cpnt-2 .btn-movilidad {
            background: #BED000;
            color: #1c1d39;
            text-align: center;
            margin: auto;
            font-weight: bold;
            border-radius: 50px;

        }

        .b6 .cpnt-2 .btn-movilidad:hover {
            background: #ffffff;
            color: #4d541f;
        }
    </style>
    <div class="box b6">

        <div class="group-images">
            <div class="imagen img-1">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/g273.png" alt="recurso 1" title="recurso 1">
            </div>
            <div class="imagen img-2">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/g272.png" alt="recurso 2" title="recurso 2">
            </div>
            <div class="imagen img-3">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/g274.png" alt="recurso 3" title="recurso 3">
            </div>

            <div class="group-text">
                <div class="cpnt cpnt-1">
                    <div class="logo logo-1">
                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2024/g271.png" alt="logo Mo Movilidad a un Clic">
                    </div>
                </div>
                <div class="cpnt cpnt-2">
                    <p class="paragraph ph-1">Toda la información de la <b>Secretaría Distrital de Movilidad</b>, personalizada y en tu dispositivo.</p>
                    <p class="paragraph ph-2">Agendamiento de citas, comparendos, inmovilizaciones, cursos pedagógicos, pico y placa y más.</p>
                    <a class="btn btn-movilidad" href="https://portalmimovilidad.movilidadbogota.gov.co/">Accede y Regístrate aquí</a>
                </div>
            </div>
        </div>

    </div>

    <!-- box b7 -->
    <style>
        .set-wrapper .b7 {
            grid-area: b7;
            margin-top: 32px;
            border: solid 2px #BED000;
            margin-bottom: 32px;

            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-rows: auto;
            grid-template-columns: 1fr;
            align-content: center;
            align-items: center;
            justify-items: center;

            @media(min-width:768px) {
                grid-template-columns: 70% 30%;

            }
        }

        .b7 .cpnt-1 .paragraph {
            font-weight: bold;
            line-height: 1.2;
            font-size: clamp(2rem, 3vw + 2rem, 3rem);
            margin: 0px;
            padding: 32px;
            color: #4d541f;
            text-align: right;
        }

        .b7 .btn-anchor {
            display: inline-flex;
            padding: 8px 16px;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            line-height: 1;
            color: #4d541f;
            background-color: #BED000;
            border-radius: 50px;

            height: auto;
            word-break: break-word;
            word-wrap: break-word;
            width: 100%;
            min-width: 150px;
            max-width: 360px;
            white-space: normal;
            justify-content: space-between;
            align-items: center;

        }

        .b7 .btn-anchor:hover {
            background-color: #252525;
            color: #BED000;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(250, 250, 250, 0.16);
            box-shadow: 0px 0px 10px 3px rgba(250, 250, 250, 0.16);
        }


        .b7 .icon1 {
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-07-2024/coche_a.png");
            height: 50px;
            width: 50px;
            min-width: 50px;
            top: 0px;
            right: 0px;
            position: relative;
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>
    <div class="box b7">
        <div class="cpnt cpnt-1">
            <p class="paragraph ph-1">Conoce el portal de Integridad, Antisoborno y Anticorrupción</p>
        </div>
        <div class="cpnt cpnt-2">
            <a class="btn btn-anchor btn-anchor-1" href="https://www.movilidadbogota.gov.co/web/integridad_antisoborno_y_anticorrupcion">Ingresa aquí<span class="icon2"></span></a>
        </div>
    </div>


</div>


</div>
<!-- Fin Set -->
