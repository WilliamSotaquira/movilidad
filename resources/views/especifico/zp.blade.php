@extends('welcome')
@section('title','zp')
@section('contenido')

<div class="set-wrapper zp">

    <!-- Set tramitesServicios -->
    <div class="set-wrapper tramitesServicios"><template>
            <div class="card-ts">
                <div class="details-ts">
                    <div class="tags-ts">
                        <div class="tags"><span class="label label-default">Trámite</span></div>
                    </div>
                    <a class="link-ppal"><h3>Inscripción o autorización para la circulación vial (excepciones pico y placa).</h3></a>
                    <p class="p1">Inscríbete virtualmente al registro de los vehículos exceptuados de la medida de pico y placa en Bogotá.</p>
                </div>

                <div class="canals-ts">
                    <ul class="list-canals"><!-- <li><span><img src="/images/ts/20x20/link_20.png"></span>demos</li> --></ul>
                </div>
            </div>
        </template>
        <style type="text/css">
            .set-wrapper {
                /* font-family: 'Montserrat', sans-serif; */
                font-size: 16px;
                font-weight: normal !important;
                text-align: left;
                line-height: 1.5;
                color: #000000bf;
            }

            .calendario {
                font-size: 16px !important;
                font-weight: 500;
                text-align: left;
                line-height: 1.5;
            }

            .card-ts {
                background: #fff;
                display: grid;
                gap: 8px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    /* 'tags-ts' */
                    'details-ts'
                    'canals-ts';
                padding: 8px;
                border: solid 1px #e5e5e5;
                border-radius: 5px;
                -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.08);
                box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.08);
                margin-bottom: 16px;
            }

            @media(min-width:768px) {
                .card-ts {
                    padding: 2rem;
                }

            }

            .tags-ts span {
                display: inline-block;
                margin: 2px 4px;
                background-color: #fff;
                color: #4d541f;
                padding: 4px 8px;
                border-radius: 25px;
                border: solid 2px #4d541f;
            }

            .details-ts {
                grid-area: details-ts;
            }

            .link-ts {
                grid-area: link-ts;
                position: relative;
                text-align: left;
            }

            .canals-ts {
                grid-area: canals-ts;
                margin: 16px;

            }

            .participants-ts p strong {
                color: #00000099;
            }

            @media(min-width:768px) {
                .card-ts {
                    grid-template-columns: repeat(3, 1fr);
                    grid-template-rows: auto;
                    grid-template-areas:
                        /* 'tags-ts tags-ts canals-ts' */
                        /* 'details-ts details-ts canals-ts' */
                        'details-ts details-ts canals-ts';
                    padding-top: 24px;
                }

                .tags-ts a {
                    position: relative;
                    text-align: left;
                    display: inline-block;
                    padding-top: 6px;
                }
            }

            .card-ts p,
            .card-ts h3,
            .card-ts h4,
            .card-ts a,
            .card-ts i {
                margin: 4px;
            }

            .card-ts .date-ts {
                color: #00000099;
                font-weight: 600;
            }

            .card-ts .date-ts::before {
                content: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-09-2023/calendario_3.png');
                position: relative;
                display: inline-block;
                max-width: 60px;
                padding: 4px;
                margin-right: 4px;

            }

            .card-ts h3 {

                padding-top: 0;
                padding-bottom: 0.1em;
                font-weight: 700;
                text-align: left;
                line-height: 1.2;
                color: #333333ff;
                font-size: 24px;
            }

            .card-ts p {
                font-size: 16px;
                font-weight: 500;
                text-align: left;
                line-height: 1.3;
                color: #000000bf;
            }

            .card-ts .tags {
                /* padding-top: 1.5em; */
            }

            .set-wrapper .box-calendar {
                display: grid;
                row-gap: 2em;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                margin: 2em;

            }

            .canals-ts ul {
                list-style: none;
                padding: 0px;
                margin: 0px;
            }


            .canals-ts ul li {
                /* margin-right: 20px; */
                margin-left: 24px;
                margin-bottom: 12px;
                position: relative;
                font-size: 14px;
                font-weight: 500;
                text-align: left;
                line-height: 1.2;
            }

            .canals-ts ul li span {
                position: absolute;
                margin-left: -24px;

            }

            .canals-ts ul li a {
                color: #191c3d;
                text-decoration: underline;

            }

            .canals-ts ul li a:hover {
                color: #4d541f;
                text-decoration: underline;
                font-weight: 700;

            }
        </style>
        <!-- Sección box header-ts -->
        <div class="box box-header-ts">
            <div class="title-ts">
                <h3 class="title title-type-ppal title-id-1">Trámites, servicios, consultas y otros procedimientos</h3>
            </div>

            <div class="paragraph-ppal">
                <p>Para conocer los trámites, servicios, PQRSD y otros procedimientos administrativos (OPA) de la Secretaría Distrital de Movilidad, puedes consultarlos en la Guía de trámites y servicios de Bogotá o en el Portafolio de trámites de la secretaría, también puedes buscarlos en la lista que se encuentra a continuación. Al lado derecho encontrarás otros sitios de tu interés.</p>
            </div>

            <div class="icons">
                <div class="icon zoom ico-1"><a href="https://www.movilidadbogota.gov.co/web/portafolio_tramites_y_servicios" onmouseover="mouseoversound.playclip()" title="Ir a portafolio de tramites y servicios"><img alt="Logo portafolio de trámites y servicios" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/portafolio.png"> </a></div>

                <div class="icon zoom ico-2"><a href="https://www.ventanillamovilidad.com.co/" onmouseover="mouseoversound.playclip()" title="Ir a ventanilla unica de servicios"><img alt="logo ventanilla unica de servicios" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/vus.png"> </a></div>

                <div class="icon zoom ico-3"><a href="https://bogota.gov.co/servicios/entidad/secretaria-distrital-de-movilidad-sdm" onmouseover="mouseoversound.playclip()" title="Ir a guía de tramites"><img alt="Logo guía de tramites SDM" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/guia-tramites.png"> </a></div>

                <div class="icon zoom ico-4"><a href="https://www.gov.co/" onmouseover="mouseoversound.playclip()" title="Ir a gov.co"><img alt="Logo GOV CO" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/gov-co.png"> </a></div>

                <div class="icon zoom ico-5"><a href="https://www.funcionpublica.gov.co/web/suit" onmouseover="mouseoversound.playclip()" title="Ir a SUIT"><img alt="Logo SUIT" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/suit.png"> </a></div>

                <div class="icon zoom ico-5"><a href="https://portalmimovilidad.movilidadbogota.gov.co/#/pages/landing-page" onmouseover="mouseoversound.playclip()" title="Ir a Mi movilidad"><img alt="Logo Mi Movilidad" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/mimovilidad.png"> </a></div>
            </div>
        </div>
        <style type="text/css">
            .field-item.even .centertil {
                visibility: hidden;
                margin-top: -50px;
            }

            .box-header-ts .title-ts {
                grid-area: title-ts;
            }

            .title-ts h3 {
                font-size: 26px;
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: #191c3d;
                margin-bottom: 32px;
            }

            .box-header-ts .paragraph-ppal {
                grid-area: paragraph-ppal;

            }

            .box-header-ts .paragraph-ppal p {
                font-size: 16px;
                font-weight: 500;
                text-align: justify;
                line-height: 1.6;
                margin: 0px;
            }

            @media(min-width:768px) {
                .box-header-ts .paragraph-ppal p {
                    padding: 16px;
                }
            }

            .box-header-ts .icons {
                grid-area: icons;
                display: grid;
                gap: 8px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;
                margin-left: 0px;
                margin-right: 0px;
            }


            .set-wrapper .box-header-ts {
                grid-area: box-header-ts;
                display: grid;
                gap: 16px;
                padding: 16px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'title-ts'
                    'paragraph-ppal'
                    'icons';
                justify-content: space-evenly;
            }

            .box-header-ts .icons .icon {
                border: solid 1px #99999950;
                border-radius: 8px;
                max-width: 200px;
                margin: auto;
                -webkit-box-shadow: 5px 5px 10px 0px #00000029;
                box-shadow: 5px 5px 10px 0px #00000029;
            }

            .box-header-ts .icons .icon img {
                border-radius: 6px;
                display: inline-block;
            }

            @media(min-width:768px) {
                .set-wrapper .box-header-ts {
                    column-gap: 32px;
                    grid-template-columns: 70% 30%;
                    grid-template-areas:
                        'title-ts title-ts'
                        'paragraph-ppal icons';
                }


            }
        </style>
        <hr> <!-- Sección box bloque-2 -->
        <div class="box box-bloque-2">
            <div class="filter">
                <form>
                    <div class="filter-text"><label for="sentence">Buscar</label> <input class="form-control" id="sentence" placeholder="Buscar" type="text"></div>
                    <!-- <div class="filter-radio">
                    <label for="">&nbsp;</label>
                    <div>

                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="tramite"> Tramites
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="servicio"> Servicios
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> PQRSD
                        </label>
                    </div>
                </div> -->

                    <div class="filter-clear"><button class="btn btn-filtro" onclick="limpiarFiltro()">Limpiar Filtro</button></div>
                </form>
            </div>

            <div class="ts-cards">&nbsp;</div>
        </div>
        <style type="text/css">
            .set-wrapper .box-bloque-2 {
                grid-area: box-bloque-2;
            }

            .box-bloque-2 .filter {
                padding: 16px;
                margin-bottom: 32px;

            }

            .box-bloque-2 form {
                display: grid;
                gap: 16px;
                grid-auto-flow: dense;
                grid-template-rows: auto;
                grid-template-columns: 1fr;
                grid-template-areas:
                    'buscar'
                    'checkbox'
                    'limpiar';
                margin: 0px;
            }

            @media(min-width:768px) {
                .box-bloque-2 form {
                    column-gap: 32px;
                    grid-template-columns: 40% 40% auto;
                    grid-template-areas:
                        'buscar checkbox limpiar';
                }
            }

            .box-bloque-2 form .filter-text {
                grid-area: buscar;
            }

            .box-bloque-2 form .filter-radio {
                grid-area: checkbox;
            }

            .box-bloque-2 form .filter-clear {
                grid-area: limpiar;
                /* margin: auto; */
                margin-top: 0px;
            }

            @media(min-width:768px) {
                .box-bloque-2 form .filter-clear {
                    margin-top: 24px;
                }
            }

            .box-bloque-2 .ts-cards {
                padding: 0px;
            }

            @media(min-width:768px) {
                .box-bloque-2 .ts-cards {
                    padding: 16px;
                }
            }
        </style>
    </div>
    <!-- Fin Set -->
    <style type="text/css">
        .checkbox input[type=checkbox],
        .checkbox-inline input[type=checkbox],
        .radio input[type=radio],
        .radio-inline input[type=radio] {
            position: absolute;
            margin-top: 8px;
            /* margin-left: -61px; */
            left: -24px;
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
    </style>
    <script>
        // Visit JavaScript Kit at http://www.javascriptkit.com/ for full source code
        //** Usage: Instantiate script by calling: var uniquevar=createsoundbite("soundfile1", "fallbackfile2", "fallebacksound3", etc)
        //** Call: uniquevar.playclip() to play sound

        var html5_audiotypes = { //define list of audio file extensions and their associated audio types. Add to it if your specified audio file isn't on this list:
            "mp3": "audio/mpeg",
            "mp4": "audio/mp4",
            "ogg": "audio/ogg",
            "wav": "audio/wav"
        }

        function createsoundbite(sound) {
            var html5audio = document.createElement('audio')
            if (html5audio.canPlayType) { //check support for HTML5 audio
                for (var i = 0; i < arguments.length; i++) {
                    var sourceel = document.createElement('source')
                    sourceel.setAttribute('src', arguments[i])
                    if (arguments[i].match(/\.(\w+)$/i))
                        sourceel.setAttribute('type', html5_audiotypes[RegExp.$1])
                    html5audio.appendChild(sourceel)
                }
                html5audio.load()
                html5audio.playclip = function() {
                    html5audio.pause()
                    html5audio.currentTime = 0
                    html5audio.play()
                }
                return html5audio
            } else {
                return {
                    playclip: function() {
                        throw new Error("Your browser doesn't support HTML5 audio unfortunately")
                    }
                }
            }
        }

        var mouseoversound = createsoundbite("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/click.ogg", "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/click.mp3");
        var clicksound = createsoundbite("https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/click.ogg", "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/click.mp3");

        const canals = [{
                position: 0,
                name: 'Solicítalo',
                urlCanal: 'https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/link_20.png'
            },
            {
                position: 1,
                name: 'Presencial Sede Calle 13 (Personas con discapacidad)',
                urlCanal: 'https://goo.gl/maps/HZtRnz1zADb64a1y6',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/posicion_20.png'
            },
            {
                position: 2,
                name: 'Presencial Sede Paloquemao (Personas con discapacidad)',
                urlCanal: 'https://goo.gl/maps/G3w4osY6PFcf39Y67',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/posicion_20.png'
            },
            {
                position: 3,
                name: 'Llámanos',
                urlCanal: 'tel:6013649400',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/phone_20.png'
            },
            {
                position: 4,
                name: 'Te regresamos la llamada',
                urlCanal: 'https://cls45-ws-secmovilidad.inconcertcc.com/CALLBACKSECMOV/',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/call_20.png'
            },
            {
                position: 5,
                name: 'Chat en línea',
                urlCanal: 'https://chat1-cls45-dal.i6.inconcertcc.com/inconcert/apps/webdesigner/WCSecMovilidadV1?token=37CC9C9E2A638DC23750B4EC3F74D96E&notify=b8c4b55f-8a9e-e6bd-b364-6ab30e41be18&dev=false&type=popup',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/chat_20.png'

            },
            {
                position: 6,
                name: 'Videollamada en lengua de señas colombiana',
                urlCanal: 'https://cls45-ws-secmovilidad.inconcertcc.com/VCSECMOV/',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/lengua_20.png'
            },
            {
                position: 7,
                name: 'Agenda la cita',
                urlCanal: 'https://vus.circulemosdigital.com.co/#/login',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/calendar_20.png'
            },
            {
                position: 8,
                name: 'Puntos de atención (previo agendamiento)',
                urlCanal: 'https://www.movilidadbogota.gov.co/web/puntos_de_atencion',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/posicion_20.png'
            },
            {
                position: 9,
                name: 'Presencial Sede Calle 13 (Previo agendamiento)',
                urlCanal: 'https://goo.gl/maps/HZtRnz1zADb64a1y6',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/posicion_20.png'
            },
            {
                position: 10,
                name: 'Presencial Sede Paloquemao (Previo agendamiento)',
                urlCanal: 'https://goo.gl/maps/G3w4osY6PFcf39Y67',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/posicion_20.png'
            },
            {
                position: 11,
                name: 'Solicítalo',
                urlCanal: 'https://bogota.gov.co/sdqs',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/link_20.png'
            },
            {
                position: 12,
                name: 'Radicar correo',
                urlCanal: 'https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/email_20.png'
            },
            {
                position: 13,
                name: 'Solicítalo',
                urlCanal: 'https://vucapp.habitatbogota.gov.co/vuc/login.seam',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/link_20.png'
            },
            {
                position: 14,
                name: 'Presencial Sede Paloquemao',
                urlCanal: 'https://goo.gl/maps/G3w4osY6PFcf39Y67',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/posicion_20.png'
            },
            {
                position: 15,
                name: 'Solicítalo',
                urlCanal: 'https://bogota.gov.co/sdqs/crear-peticion',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/link_20.png'
            },
            {
                position: 16,
                name: 'Solicítalo',
                urlCanal: 'https://bogota.gov.co/sdqs/',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/link_20.png'
            },
            {
                position: 17,
                name: 'Presencial: Puntos de radicación de correspondencia',
                urlCanal: 'https://www.movilidadbogota.gov.co/web/puntos_de_atencion',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/posicion_20.png'
            },
            {
                position: 18,
                name: 'Presencial Sede Calle 13',
                urlCanal: 'https://goo.gl/maps/HZtRnz1zADb64a1y6',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/posicion_20.png'
            },
            {
                position: 19,
                name: 'Presencial (Previo agendamiento) Sede Calle 13',
                urlCanal: 'https://goo.gl/maps/HZtRnz1zADb64a1y6',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/posicion_20.png'
            },
            {
                position: 20,
                name: 'Solicítalo',
                urlCanal: 'https://www.movilidadbogota.gov.co/web/entrega_de_licencia_retenida_y_realizacion_del_curso',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/calendar_20.png'
            },
            {
                position: 21,
                name: 'Solicítalo',
                urlCanal: 'https://registrobicibogota.movilidadbogota.gov.co/#!/',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/link_20.png'
            },
            {
                position: 22,
                name: 'Presencial: Centros locales de movilidad',
                urlCanal: 'https://www.movilidadbogota.gov.co/web/centros-locales-de-movilidad',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/posicion_20.png'
            },
            {
                position: 23,
                name: 'Solicítalo',
                urlCanal: 'https://www.movilidadbogota.gov.co/web/cicloparqueaderos',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/link_20.png'
            },
            {
                position: 24,
                name: 'Solicítalo',
                urlCanal: 'https://picoyplacasolidario.movilidadbogota.gov.co/PortalCiudadano/#/',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/link_20.png'
            },
            {
                position: 25,
                name: 'Solicítalo',
                urlCanal: 'https://www.movilidadbogota.gov.co/web/content/plan_marshall',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/link_20.png'
            },
            {
                position: 26,
                name: 'Ve a la página web',
                urlCanal: 'https://www.movilidadbogota.gov.co/web/ORVI',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/link_20.png'
            },
            {
                position: 27,
                name: 'Escríbe por Whatsapp',
                urlCanal: 'https://api.whatsapp.com/send?phone=573058703458&text=Hola%20somos%20ORVI%2C%20el%20Centro%20de%20Orientaci%C3%B3n%20para%20V%C3%ADctimas%20por%20Siniestros%20Viales%C2%A0de%C2%A0Bogot%C3%A1%20D.C%2C%20%C2%BFEn%20qu%C3%A9%20te%20podemos%20ayudar%3F',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/link_20.png'
            },
            {
                position: 28,
                name: 'Repórtalo',
                urlCanal: 'https://bogota.gov.co/sdqs/',
                icon: 'https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/link_20.png'
            },
        ];


        const portafolio = [{
                type: 'Trámite',
                title: 'Inscripción o autorización para la circulación vial (excepciones pico y placa)',
                description: 'Inscríbete virtualmente al registro de los vehículos exceptuados de la medida de pico y placa en Bogotá.',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/inscripcion-o-autorizacion-para-la-circulacion-vial-sdm',
                canals: [0, 1, 2, 3, 4, 5, 6]
            },
            {
                type: 'Trámite',
                title: 'Curso Pedagógico por Infracción a las Normas de Tránsito',
                description: 'Promover en los asistentes la participación, reflexión y sensibilización frente a los cambios de comportamiento y hábitos en la vía. Agenda la asistencia al curso pedagógico, dando clic en agendar o llamando al (601) 3649400 opción 2.',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/curso-sobre-normas-de-transito-sdm-37156-2',
                canals: [7, 8, 3, 4, 5, 6]
            },
            {
                type: 'Trámite',
                title: 'Orden de Entrega de Vehículo Inmovilizado',
                description: 'Para retirar el vehículo inmovilizado del parqueadero de patios, agenda virtualmente tu cita para la orden de entrega. Una vez agendado, dirígete al punto de atención.',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/orden-de-entrega-de-vehiculo-inmovilizado-sdm-37092',
                canals: [7, 9, 10, 3, 4, 5, 6]
            },
            {
                type: 'Trámite',
                title: 'Facilidades de pago para los deudores de obligaciones no tributarias',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/facilidades-de-pago-para-los-deudores-de-obligaciones-no-tributarias-sdm-37027',
                description: 'Obtén por el deudor o por un tercero a su nombre, facilidades para el pago de las obligaciones no tributarias, agenda tu cita.',
                canals: [7, 9, 10, 3, 4, 5, 6]
            },
            {
                type: 'Tramite',
                title: 'Devolución y/o compensación de pagos en exceso y de lo no debido por conceptos no tributarios.',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/devolucion-yo-compensacion-de-pagos-en-exceso-y-de-lo-no-debido-por-conceptos-no-tributarios-sdm',
                description: 'Si ha cancelado sumas mayores por concepto de obligaciones no tributarias, solicita la devolución.',
                canals: [11, 12, 3, 4, 5, 6]
            },
            {
                type: 'Trámite',
                title: 'Devolución y/o compensación de pagos en exceso y pagos de lo no debido.',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/devolucion-yo-compensacion-de-pagos-en-exceso-y-pagos-de-lo-no-debido-sdm',
                description: 'Si ha efectuado pagos sin que exista causa legal para hacer exigible su cumplimiento, solicita la devolución.',
                canals: [11, 12, 3, 4, 5, 6]
            },
            {
                type: 'Trámite',
                title: 'Plan de Manejo de Tránsito - PMT',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/plan-de-manejo-de-transito-sdm',
                description: 'Herramienta técnica que plantea las estrategias necesarias, para mitigar el impacto generado en la movilidad por la ejecución de una obra o por la realización de un evento en el espacio público.',
                canals: [13, 14, 3, 4, 5, 6]
            },
            {
                type: 'Trámite',
                title: 'Revisión y aprobación de estudios de tránsito',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/revision-y-aprobacion-de-estudios-de-transito-sdm',
                description: 'Contiene el análisis de la situación actual del tránsito, de la demanda vehicular proyectada y de los impactos que un proyecto urbanístico genera, sobre la movilidad circundante y su zona de influencia. ',
                canals: [13, 14, 3, 4, 5, 6]
            },
            {
                type: 'Trámite',
                title: 'Permiso de circulación para carga extrapesada y/o extradimensionada e indivisible',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/permiso-de-circulacion-para-carga-extrapesada-yo-extradimensionada-sdm',
                description: 'Autorización para movilizar por la red vial, maquinaria o carga con dimensiones extremas de longitud, anchura y altura o que exceda los límites de peso.',
                canals: [15, 12, 3, 4, 5, 6]
            },
            {
                type: 'Trámite',
                title: 'Registro ruta escolar',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/registro-de-ruta-de-transporte-escolar-sdm',
                description: 'Permitir que los establecimientos educativos (públicos y/o privados), ubicados dentro del perímetro capital, presenten el informe anual de transporte escolar, con el objetivo de adelantar acciones de control de tipo administrativo y operativo sobre vehículos de servicio público especial, que presenten transporte escolar.',
                canals: [16, 12, 17, 3, 4, 5, 6]
            },
            {
                type: 'Trámite',
                title: 'Emisión concepto a técnicas de señalización',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/emision-de-concepto-propuestas-tecnicas-de-disenos-de-senalizacion',
                description: 'Efectuar el trámite de emisión de conceptos a propuestas de proyectos de diseños de señalización, frente a las solicitudes presentadas ante la Secretaría Distrital de Movilidad.',
                canals: [13, 14, 18, 3, 4, 5, 6]
            },
            {
                type: 'Servicio',
                title: 'Impugnación de comparendos',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/impugnacion-de-comparendos-notificados-en-via-sdm-37109-2',
                description: 'Agenda virtualmente tu cita para la impugnación. Una vez agendado, ve al punto de atención.',
                canals: [7, 19, 3, 4, 5, 6]
            },
            {
                type: 'Servicio',
                title: 'Entrega de licencias de conducción retenidas por infracción a las normas de tránsito',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/entrega-de-licencia-retenidas-por-infraccion-a-las-normas-de-transito-sdm-37108-2',
                description: 'Informar sobre la autorización para realizar el Curso de Sensibilización (Horas Comunitarias) para la prevención de la conducción bajo la influencia de alcohol o sustancias psicoactivas. Brindar información para la entrega de las licencias retenidas, al haber cumplido el tiempo de sanción por infracciones a las normas de tránsito.',
                canals: [20, 3, 4, 5, 6]
            },
            {
                type: 'Servicio',
                title: 'Registro de Bici Bogotá',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/puntos-de-atencion-registro-bici',
                description: 'Asocia los datos personales de los ciudadanos con los de su bicicleta.',
                canals: [21, 22, 3, 4, 5, 6]
            },
            {
                type: 'Servicio',
                title: 'Sellos de calidad cicloparqueaderos',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/requisitos-sello-de-calidad-cicloparqueaderos',
                description: 'Postula un cicloparqueadero que merece sello de calidad, expedido por la Secretaría Distrital de Movilidad.',
                canals: [23, 3, 4, 5, 6]
            },
            {
                type: 'Servicio',
                title: 'Pico y placa solidario',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/pico-y-placa-solidario',
                description: 'Permiso especial que, durante su vigencia, permite que los vehículos inscritos no estén sujetos a la restricción de circulación por Pico y Placa.',
                canals: [24, 3, 4, 5, 6]
            },
            {
                type: 'Servicio',
                title: 'Descuento tributario por la habilitación y mantenimiento de cicloparqueaderos - Plan Marshall',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/descuento-tributario-por-la-habilitacion-y-mantenimiento-de-ciclo-parqueaderos',
                description: 'Orientar y dar una guía sobre los requisitos que los contribuyentes deben tener presente, al momento de presentar su proyecto de inversión para habilitar y/o mantener cicloparqueaderos, cuya actividad económica no sea plazas de estacionamiento para automóviles, garajes (parqueaderos).',
                canals: [25, 3, 4, 5, 6]
            },
            {
                type: 'Servicio',
                title: 'Centro de orientación a víctimas de siniestros viales - ORVI',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/centro-de-orientacion-para-victimas-de-siniestros-viales',
                description: 'El Centro de orientación para víctimas de siniestros viales tiene como propósito informar y orientar a las víctimas y sus familiares sobre procedimientos a seguir luego de un siniestro vial.',
                canals: [26, 3, 27]
            },
            {
                type: 'Servicio',
                title: 'Plan estratégico de seguridad vial - PESV',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/planes-estrategicos-de-seguridad-vial-pesv',
                description: 'Dar a conocer a los Centros de Enseñanza Automovilística (CEAs) el proceso a seguir, para que la Secretaría Distrital de Movilidad realice la revisión y el seguimiento a la implementación de los Planes Estratégicos de Seguridad Vial.',
                canals: [11, 12, 17, 3, 4, 5, 6]
            },
            {
                type: 'PQRSD',
                title: 'Desvinculación administrativa de vehículos de transporte público',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/desvinculacion-administrativa-de-vehiculos-de-transporte-publico',
                description: 'Desvincular un vehículo de servicio público individual o colectivo cuando no exista mutuo acuerdo entre las partes (empresa vinculadora y propietario). Hazlo a través de Bogotá tu escucha.',
                canals: [11, 12, 17, 3, 4, 5, 6]
            },
            {
                type: 'PQRSD​',
                title: 'Verificación documental para la desintegración física del vehículo',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/informacion-sobre-la-desintegracion-fisica-de-vehiculos-de-servicio-publico-y-particular-sdm',
                description: 'La desintegración física de vehículos de transporte público se define como la destrucción de todos los elementos y componentes del automotor, hasta convertirlos en chatarra.',
                canals: [11, 12, 17, 3, 4, 5, 6]
            },
            {
                type: 'PQRSD​',
                title: 'Reporte de semáforos que presentan fallas en la vía',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/reporte-de-semaforos-que-presentan-fallas-en-la-via',
                description: 'Restituir los elementos dañados o faltantes de los semáforos en la vía.',
                canals: [28, 12, 3, 4, 5, 6]
            },
            {
                type: 'PQRSD',
                title: 'Solicitud de prescripción',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/solicitud-de-prescripcion',
                description: 'El propósito de este servicio es solicitar la prescripción de obligaciones contraídas por contravenir las normas de tránsito. Como resultado usted obtendrá estudio de cartera, conforme al artículo 159 de la ley 769 de 2002 y los artículos 817 y 818 del Estatuto Tributario con el fin de identificar, prescribiendo, si corresponde, los comparendos, y los comparendos integrados en acuerdo de pago que sobrepasaron el límite del término impartido por la ley.',
                canals: [11, 12, 3, 4, 5, 6]
            },
            {
                type: 'PQRSD',
                title: 'Entrega de copias de informes policiales de accidentes de tránsito',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/Entrega-de-las-copias-de-informes-policiales-de-accidente-de-transito-sdm-43014-opa',
                description: 'Descriptivo de un accidente de tránsito simple, con lesiones o fallecidos, realizado en el sitio de los hechos por el Policía de Tránsito.',
                canals: [11, 12, 3, 4, 5, 6]
            },
            {
                type: 'PQRSD',
                title: 'Revocatoria directa por infracciones a las normas de tránsito',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/solicitud-de-revocatoria-directa-por-infracciones-a-las-normas-de-transito-sdm',
                description: 'Restablecer el derecho del ciudadano, mediante la revocación directa del acto mediante el cual fue sancionado por infringir las normas de tránsito.',
                canals: [11, 12, 17, 3, 4, 5, 6]
            },
            {
                type: 'PQRSD',
                title: 'Solicitud de desembargo por multas e infracciones a las normas de tránsito y transporte público',
                url: 'https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/solicitud-desembargo-por-multas-infracciones-de-normas-de-transito-y-transporte-publico-autorizacion-apropiaci%C3%B3n-devolucion-titulo-judicial-sdm',
                description: 'Desembargar un bien o inmueble por deudas a favor de la Secretaría Distrital de Movilidad. Previa cancelación de las obligaciones que hayan motivado el embargo.',
                canals: [11, 12, 17, 3, 4, 5, 6]
            },



        ];

        const template = document.querySelector("template");
        let parent = document.querySelector(`.ts-cards`);

        // console.log(portafolio);

        const rta = portafolio.sort((c, d) => c.title.toLowerCase().charCodeAt(0) - d.title.toLowerCase().charCodeAt(0))

        console.log(rta);

        for (let i = 0; i < rta.length; i++) {

            let tipo = rta[i].type;
            let title = rta[i].title;
            let description = rta[i].description;
            let url = rta[i].url;
            let canalsCount = rta[i].canals;

            textData = template.content.cloneNode(true);

            textData.querySelector(".link-ppal").setAttribute("href", url);
            textData.querySelector("h3").textContent = title;
            textData.querySelector(".tags .label-default").textContent = tipo;
            textData.querySelector(".details-ts .p1").textContent = description;


            for (let j = 0; j < canalsCount.length; j++) {

                // Recorrer el array de canales y traer el id del canal en el array de canales
                let canalSingle = canalsCount[j];
                // console.log('Id', canalSingle);

                let canalInsert = canals[canalSingle];

                // console.log('Canal', canalInsert);
                let nameCanal = canalInsert.name;
                let urlCanal = canalInsert.urlCanal;
                let icon = canalInsert.icon;

                let canalResume = document.createElement("li");
                canalResume.innerHTML = `<span><img src="${icon}" alt="icono"></span><a href="${urlCanal}">${nameCanal}</a>`;
                textData.querySelector(".list-canals").appendChild(canalResume);
            }

            parent.appendChild(textData);


        }

        let find = document.addEventListener('keyup', (e) => {
            let sentence = document.querySelector('#sentence').value;
            let cards = document.querySelectorAll('.card-ts');
            let filter = sentence.toLowerCase();

            cards.forEach((card) => {
                let title = card.querySelector('h3').textContent.toLowerCase();
                let description = card.querySelector('p').textContent.toLowerCase();
                let tags = card.querySelector('.tags').textContent.toLowerCase();

                if (title.indexOf(filter) > -1 || description.indexOf(filter) > -1 || tags.indexOf(filter) > -1) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });





        let checkbox = document.querySelectorAll('input[type=checkbox]');
        checkbox.forEach((check) => {
            check.addEventListener('change', (e) => {
                let cards = document.querySelectorAll('.card-ts');
                let filter = e.target.value.toLowerCase();

                cards.forEach((card) => {
                    let tags = card.querySelector('.tags').textContent.toLowerCase();

                    if (tags.indexOf(filter) > -1) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        function limpiarFiltro() {

            preventDefault();
            let textFilter = document.querySelector('#sentence');
            textFilter.value = '';
        }
    </script>


</div>
<!-- Fin Set -->


<script>
    $(document).ready(function () {
    window.location.replace("https://www.movilidadbogota.gov.co/web/racionalizacion_de_tramites");
    });
</script>
