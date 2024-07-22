@extends('welcome')
@section('title','parqueo')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Set parqueo -->
<div class="set-wrapper parqueo">

    <style>
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
    </style>

    <!-- box bh -->
    <style>
        .set-wrapper .bh {
            grid-area: bh;
            background-color: #1b1d39;
            padding: 32px;
        }

        .bh .cpnt-title-ppal {
            margin-bottom: 32px;
        }

        .bh .cpnt-title-ppal .enf {
            display: block;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            line-height: 1.2;
            /* color: #bdcf44; */
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
            color: #1b1d39;
            background-color: #bdcf44;
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
            background-image: url("/images/parqueo/coche_a.png");
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
            background-image: url("/images/parqueo/coche_v.png");
        }

        .bh .icon2 {
            background-image: url("/images/parqueo/choque_a.png");
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
            background-image: url("/images/parqueo/choque_v.png");
        }
    </style>
    <div class="box bh">
        <div class="cpnt cpnt-title-ppal">
            <span class='enf enf1'>Si tu vehículo fue inmovilizado te indicamos qué hacer</span>
            <h2 class="title title-ppal">Grúas y Parqueaderos</h2>
        </div>
        <div class="cpnt cpnt-botones">
            <a class="btn btn-anchor btn-anchor-1" href="#box-infraccion">Inmovilización por infracción a las normas de tránsito <span class="icon1"></span></a>
            <a class="btn btn-anchor btn-anchor-2" href="#box-siniestro">Inmovilizado por siniestro vial <span class="icon2"></span></a>
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
            color: #1b1d39;
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
            color: #1b1d39;
            margin: 32px;
        }

        .b1 .cpnt-2 {
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            gap: 16px;
        }

        @media(min-width:768px) {
            .b1 .cpnt-2 {
                display: grid;
                grid-auto-flow: dense;
                grid-template-columns: 40% 60%;
                gap: 32px;
            }

        }

        .b1 .cpnt-2 .img1 img {
            display: block;
            padding: auto 16px;
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
        }

        .b1 .cpnt-2 .collapse-infraccion {
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            gap: 16px;
            padding: 16px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            background-color: #f5f5f5;
        }

        #accordion-infraccion {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .b1 .glyphicon-chevron-right::before {
            color: #1b1d39 !important;
        }

        .b1 .glyphicon-chevron-left::before {
            color: #1b1d39 !important;
        }

        .b1 .panel,
        .b1 .panel-default {
            border-radius: 25px !important;
        }

        .b1 .panel-group .panel-heading+.panel-collapse>.list-group,
        .panel-group .panel-heading+.panel-collapse>.panel-body {
            border-top: none !important;
        }

        .b1 .panel-heading {
            border-color: #bdcf44 !important;
            background-color: #bdcf44 !important;
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
            color: #1b1d39 !important;
            font-size: 16px;
            font-weight: 600;
        }

        .b1 .panel-heading .panel-title a::before {
            font-family: 'Glyphicons Halflings';
            content: "\e080";
            float: right;
            color: #1b1d39;
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
                <img class="img-responsive w-100" src="/images/parqueo/img-parqueo-1.png" alt="Foto: Inmovilización de vehículo en la vía" title="Foto: Inmovilización de vehículo en la vía">
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
                                        <li><b>Valida</b> aquí si tu vehículo se encuentra inmovilizado: <a href="https://consultas.transitobogota.gov.co:8010/publico/index3.php">https://consultas.transitobogota.gov.co:8010/publico/index3.php</a></li>
                                        <li><b>Agenda tu cita</b> de Salida de Patios en <a href="https://www.ventanillamovilidad.com.co/">https://www.ventanillamovilidad.com.co/</a> o recibe más información en la línea (601) – 364 9400, opción 2. También puedes agendar la cita en <a href="https://portalmimovilidad.movilidadbogota.gov.co/#/">Mi Movilidad a un Clic</a>.</li>
                                        <li>Asiste a tu cita con los <b>documentos</b> solicitados para el trámite.</li>
                                        <li>Realiza el <b>pago</b> de la liquidación de patios y grúas en <a href="https://cmovilgyp.com/wliquidacion/">línea</a> o en los puntos autorizados.</li>
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
                                        <li><b>Agenda tu cita</b> de Salida de Patios en <a href="https://www.ventanillamovilidad.com.co/">https://www.ventanillamovilidad.com.co/</a> o recibe más información en la línea (601) – 364 9400, opción 2. También puedes agendar la cita en <a href="https://portalmimovilidad.movilidadbogota.gov.co/#/">Mi Movilidad a un Clic.</a></li>
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
                                        <a href="/images/parqueo/img-parqueo-2.png">
                                            <img class="img-responsive w-100" src="/images/parqueo/img-parqueo-2.png" alt="Imagen: Tarifas servicios de parqueo y grúa" title="Imagen: Tarifas servicios de parqueo y grúa">
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
            color: #1b1d39;
            margin-bottom: 8px;
        }

        .b2 .cpnt-2 {
            margin-top: 48px;
        }

        .b2 .cpnt-2 .imagen img {
            display: block;
            padding: auto 16px;
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
        }
    </style>
    <div class="box b2">
        <div class="cpnt cpnt-1">
            <h3 class="title title1">Salida de Patios Virtual</h3>
        </div>
        <div class="cpnt cpnt-2">
            <div class="imagen img-1 zoom">
                <a href="https://b2cprdciudadanos.b2clogin.com/b2cprdciudadanos.onmicrosoft.com/b2c_1a_signinvus/oauth2/v2.0/authorize?client_id=dbf00fe0-455f-4d25-baab-403f2ff4a277&scope=openid%20offline_access%20profile&redirect_uri=https%3A%2F%2Fvus.circulemosdigital.com.co%2F&client-request-id=d2910a3e-552b-48bd-952e-e9382af182e3&response_mode=fragment&response_type=code&x-client-SKU=msal.js.browser&x-client-VER=2.30.0&client_info=1&code_challenge=4aTiaBPZy7gZc9hmqpdvhRjR7Hmi5XECgt5cZeYeeLw&code_challenge_method=S256&nonce=79328171-a40e-4cd0-8ed3-a8908f6b0be9&state=eyJpZCI6IjE5MzczN2RiLWQyOWMtNGZjMS1iZTQ2LThiOGM0N2YxM2I1NCIsIm1ldGEiOnsiaW50ZXJhY3Rpb25UeXBlIjoicmVkaXJlY3QifX0%3D">
                    <img class="img-responsive w-100" src="/images/parqueo/img-parqueo-3.png" alt="Imagen: Salida de patios virtual" title="Imagen: Salida de patios virtual">
                </a>
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
            color: #252525;
            margin-bottom: 32px;
        }

        .b3 .cpnt-cards {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: normal;
            align-content: normal;
        }


        .b3 .cpnt-cards .card {
            display: block;
            flex-grow: 0;
            flex-shrink: 1;
            flex-basis: auto;
            align-self: auto;
            padding: 16px;
            margin: 16px;
            width: 280px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            text-align: center;
        }

        .b3 .cpnt-cards .card:hover {
            background-color: #bdcf44;
        }

        .b3 .cpnt-cards .imagen {
            display: inline-block;
            margin: auto;
            width: 100%;
            max-width: 200px;
        }

        .b3 .cpnt-cards .title-card {
            display: inline-block;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            line-height: 1.25;
            color: #1b1d39;
            margin-bottom: 8px;
        }

        .b3 .cpnt-cards .ph-card {
            display: inline-block;
            font-family: 'Work Sans', sans-serif;
            font-optical-sizing: auto;
            font-size: 15px;
            font-weight: normal;
            text-align: center;
            line-height: 1.25;
            color: #1b1d39;

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
            color: #1b1d39;
            background-color: #bdcf44;
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
            background-color: #1b1d39;
            color: #bdcf44;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(250, 250, 250, 0.16);
            box-shadow: 0px 0px 10px 3px rgba(250, 250, 250, 0.16);
        }

        .b3 .cpnt-boton .icon-descarga {
            background-image: url("/images/parqueo/descargar_b.png");
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
            background-image: url("/images/parqueo/descargar_v.png");
        }
    </style>
    <div class="box b3">
        <div class="cpnt cpnt-1">
            <h3 class="title title1">Ruta de inmovilización por por infracción a las normas de tránsito</h3>
        </div>
        <div class="cpnt cpnt-cards">

            <div class="card card-1">
                <img class="imagen img-card img-responsive w-100" src="/images/parqueo/pare.png" alt="icono indicacion de mano alto" title="icono indicacide mano alto">
                <h4 class="title title-card">1. Inmovilización</h4>
                <p class="paragraph ph-card">La inmovilización del vehículo consiste en la suspensión temporal de su circulación y solo la ordena la autoridad de tránsito.</p>
            </div>

            <div class="card card-2">
                <img class="imagen img-card img-responsive w-100" src="/images/parqueo/patios.png" alt="icono indicacion de mano alto" title="icono indicacide mano alto">
                <h4 class="title title-card">2. Traslado a Patios</h4>
                <p class="paragraph ph-card">La Policía de Tránsito o Secretaría Distrital de Movilidad (SDM), solicita al concesionario el servicio de grúa, que se requiere en vía.</p>
            </div>

            <div class="card card-3">
                <img class="imagen img-card img-responsive w-100" src="/images/parqueo/grua.png" alt="icono indicacion de mano alto" title="icono indicacide mano alto">
                <h4 class="title title-card">3. Grúas</h4>
                <p class="paragraph ph-card">El servicio de grúa se presta para traslado de vehículos que infringen las normas de tránsito, descritas en el Código Nacional de Tránsito y el Manual de Infracciones, accidentes, despeje de vías, carros volcados, orilladas, entre otros.</p>
            </div>

            <div class="card card-4">
                <img class="imagen img-card img-responsive w-100" src="/images/parqueo/patios-camara.png" alt="icono indicacion de mano alto" title="icono indicacide mano alto">
                <h4 class="title title-card">4. Parqueadero (Patio)</h4>
                <p class="paragraph ph-card">Una vez la grúa hace el traslado a los patios, los vehículos inmovilizados son objeto de un inventario digital de ingreso, donde se detallan sus condiciones y partes y se realiza un video de ingreso. Se toman fotos de apoyo, de los comparendos y de la grúa que trasladó el vehículo.</p>
            </div>

            <div class="card card-5">
                <img class="imagen img-card img-responsive w-100" src="/images/parqueo/retiro-patios.png" alt="icono indicacion de mano alto" title="icono indicacide mano alto">
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
        .set-wrapper .b4 {
            grid-area: b4;
            margin-top: 32px
        }

        .b4 {
            background-color: #1c1d39;
            padding: 16px 0px;
        }

        @media(min-width:768px) {
            .b4 {
                padding: 64px;
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
            color: #bdcf44;
        }

        .b4 .cpnt-1 .paragraph {
            padding: 0 16px;
        }

        .b4 .glyphicon-chevron-right::before {
            color: #1b1d39 !important;
        }

        .b4 .glyphicon-chevron-left::before {
            color: #1b1d39 !important;
        }

        .b4 .panel {
            border: solid 1px #bdcf44;
        }

        .b4 .panel-heading {
            border-color: #bdcf44 !important;
            background-color: #bdcf44 !important;
            background-image: none !important;
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
            color: #1b1d39;
            font-size: 18px;
        }

        .b4 .panel-heading .panel-title a.collapsed:after {
            content: "\e114";
        }

        .b4 .panel-body ol>li {
            padding-left: 16px;
            padding-bottom: 12px;
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
        <div class="cpnt cpnt-1">
            <h3 class="title title-1">Inmovilizado por siniestro vial</h3>
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
                                <h3 class="">El trámite NO tiene costo y no necesita intermediarios.</h3>
                                <b>PARA SOLICITAR CITA DE PERITAJE</b>
                                <ol>
                                    <li>Debes contar con disponibilidad de 2 Horas como mínimo.</li>
                                    <li>A partir del día siguiente a la inmovilización del vehículo, preséntate en el Patio Transitorio (Av. Calle 63 No. 94-51/93), antes de las 7:00 Am para la asignación de la cita de “PERITAJE” por parte del Seccional de Tránsito de la Policía Nacional.</li>
                                    <li>Si cuenta con el Informe policial de accidente de tránsito – IPAT preséntelo y si no, con la copia de la licencia de tránsito (tarjeta de propiedad).</li>
                                </ol>
                                <b>AL MOMENTO DEL PERITAJE:</b>
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
                                <h3>El trámite NO tiene costo y no necesita intermediarios.</h3>
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

    <!-- box b5 -->
    <style>
        .set-wrapper .b5 {
            grid-area: b5;
            padding-top: 32px;
            background: #bdcf44;

            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'b5-titulo'
                'b5-collapse'
                'b5-imagen';
        }

        @media(min-width:768px) {
            .set-wrapper .b5 {
                grid-template-columns: 60% 40%;
                grid-template-rows: auto;
                grid-template-areas:
                    'b5-titulo b5-titulo'
                    'b5-collapse b5-imagen';
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
            color: #1b1d39;
            margin-bottom: 32px;
        }

        .b5 .cpnt-2 {
            grid-area: b5-collapse;
            padding: 0px;

            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: normal;
            align-content: normal;

        }

        .b5 .cpnt-3 {
            grid-area: b5-imagen;
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
            .b5 .cpnt-2 {
                padding: 32px;
            }

            .b5 .cpnt-3 {
                padding: 0px 64px 64px 0;
            }
        }
    </style>
    <div class="box b5">
        <div class="cpnt cpnt-1">
            <h3 class="title title-1">Ubicación de Patios</h3>
        </div>
        <div class="cpnt cpnt-2">
            <a href="" class="btn btn-default">Ir a sitio web puntos de servicio</a>
        </div>
        <div class="cpnt cpnt-3">
            <div class="imagen img-1">
                <img class="img-responsive w-100" src="/images/parqueo/img-parqueo-4.png" alt="imagen: cuenta conmigo" title="imagen: cuenta conmigo">
            </div>
        </div>
    </div>

    <!-- box b6 -->
    <style>
        .set-wrapper .b6 {
            grid-area: b6;
            margin-top: 32px
        }
    </style>
    <div class="box b6">
        <div class="cpnt cpnt-1">
            <div class="imagen img-1">
                <a href="https://b2cprdciudadanos.b2clogin.com/b2cprdciudadanos.onmicrosoft.com/b2c_1a_signinvus/oauth2/v2.0/authorize?client_id=dbf00fe0-455f-4d25-baab-403f2ff4a277&scope=openid%20offline_access%20profile&redirect_uri=https%3A%2F%2Fvus.circulemosdigital.com.co%2F&client-request-id=d2910a3e-552b-48bd-952e-e9382af182e3&response_mode=fragment&response_type=code&x-client-SKU=msal.js.browser&x-client-VER=2.30.0&client_info=1&code_challenge=4aTiaBPZy7gZc9hmqpdvhRjR7Hmi5XECgt5cZeYeeLw&code_challenge_method=S256&nonce=79328171-a40e-4cd0-8ed3-a8908f6b0be9&state=eyJpZCI6IjE5MzczN2RiLWQyOWMtNGZjMS1iZTQ2LThiOGM0N2YxM2I1NCIsIm1ldGEiOnsiaW50ZXJhY3Rpb25UeXBlIjoicmVkaXJlY3QifX0%3D">
                    <img class="img-responsive w-100" src="/images/parqueo/img-parqueo-5.png" alt="Imagen: Mi movilidad a un clic" title="Imagen: Mi movilidad a un clic">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Fin Set -->
