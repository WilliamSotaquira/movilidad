@extends('welcome')
@section('title','zp')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Set zp -->
<style>
    .set-wrapper {
        position: relative;
    }
</style>
<div class="set-wrapper zp">

    <!-- box b-cards -->
    <style>
        .set-wrapper .b-cards {
            grid-area: b-cards;
            margin-top: 32px;
            display: grid;
            gap: 32px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        @media(min-width:768px) {
            .set-wrapper .b-cards {
                grid-template-columns: 1fr 1fr;
            }
        }

        .b-cards .cpnt-card {
            border: 1px solid #eeeeee;
            border-radius: 8px;
            display: grid;
            gap: 16px;
            padding: 16px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            max-height: 300px;
            background-color: #fcfcfc;
            box-shadow: 5px 5px 12px 0px rgba(48, 48, 48, 0.2);

            font-family: 'Montserrat', sans-serif;
        }

        @media(max-width:767px) {
            .b-cards .cpnt-card {
                max-height: 100%;
            }
        }

        @media(min-width:768px) {
            .b-cards .cpnt-card {
                max-height: 100%;
            }
        }

        @media(min-width:992px) {
            .b-cards .cpnt-card {
                max-height: 100%;
            }
        }

        @media(min-width:1200px) {
            .b-cards .cpnt-card {
                max-height: 100%;
            }
        }

        .b-cards .cpnt-card .head-card {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: auto 1fr;
            grid-template-rows: auto;
        }

        .b-cards .cpnt-card .head-card .tags {
            color: rgba(77, 84, 31, 1);
            font-optical-sizing: auto;
            font-size: 18px;
            font-weight: bold;
            text-align: left;
            line-height: 1;
        }

        .b-cards .cpnt-card .summary-card {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto auto;
        }

        .b-cards .cpnt-card .canals-card {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        .b-cards .cpnt-card .footer-card {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            background-color: #fcfcfc;
        }

        .b-cards .cpnt-card .summary-card h3 {
            color: rgba(77, 84, 31, 1);
            font-optical-sizing: auto;
            font-size: 20px;
            font-weight: bold;
            text-align: left;
            line-height: 1.2;
            margin: 0px;
        }

        .b-cards .cpnt-card .summary-card p {
            color: #00000099;
            font-optical-sizing: auto;
            font-size: 16px;
            font-weight: normal;
            text-align: left;
            line-height: 1.2;
            margin: 0px;
            padding-top: 16px;
            padding-bottom: 16px;
        }

        .b-cards .cpnt-card .canals-card .list-canals {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr 1fr;
        }

        .b-cards .cpnt-card .summary-card h3 {
            color: rgba(77, 84, 31, 1);
            font-optical-sizing: auto;
            font-size: 20px;
            font-weight: bold;
            text-align: left;
            line-height: 1.2;
            margin: 0px;
        }

        .b-cards .cpnt-card .summary-card p {
            color: #00000099;
            font-optical-sizing: auto;
            font-size: 16px;
            font-weight: normal;
            text-align: left;
            line-height: 1.2;
            margin: 0px;
            padding-top: 16px;
        }

        .b-cards .cpnt-card .list-card {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
            padding-left: 32px;
            padding-right: 32px;
        }

        .b-cards .cpnt-card .list-card a {
            list-style: none;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 20px auto;
            grid-template-rows: auto;
            align-items: center;
        }

        .b-cards .cpnt-card .footer-card{
            display: flex;
            justify-content: start;
            align-items: center;
            margin-top: 8px;

        }

        .b-cards .cpnt-card .footer-card a {
            color: #ffffff;
            background: rgba(77, 84, 31, 1);
            font-optical-sizing: auto;
            font-size: 16px;
            font-weight: normal;
            text-align: center;
            line-height: 1;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 8px;
        }
        .b-cards .cpnt-card .footer-card a:hover {
            background: rgba(77, 84, 31, 0.8);
        }
        .b-cards .cpnt-card .footer-card a:active {
            background: rgba(77, 84, 31, 0.6);
        }
        .b-cards .cpnt-card .footer-card a:focus {
            background: rgba(77, 84, 31, 0.6);
        }
        .b-cards .cpnt-card .footer-card a:visited {
            background: rgba(77, 84, 31, 0.6);
        }

    </style>
    <div class="box b-cards">

        <div class="cpnt cpnt-card">
            <div class="head-card">
                <span class="tags">Trámite</span>
            </div>
            <div class="summary-card">
                <h3><a class="link-ppal" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/curso-sobre-normas-de-transito-sdm-37156-2">Curso Pedagógico por Infracción a las Normas de Tránsito</a></h3>
                <p class="p1">Promover en los asistentes la participación, reflexión y sensibilización frente a los cambios de comportamiento y hábitos en la vía. Agenda la asistencia al curso pedagógico, dando clic en agendar o llamando al (601) 3649400 opción 2.</p>
            </div>
            <div class="list-card">
                <a href="https://vus.circulemosdigital.com.co/#/login"><span><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/calendar_20.png"></span>Agenda la cita</a>
                <a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion"><span><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/posicion_20.png"></span>Puntos de atención (previo agendamiento)</a>
                <a href="tel:6013649400"><span><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/phone_20.png"></span>Llámanos</a>
                <a href="https://cls45-ws-secmovilidad.inconcertcc.com/CALLBACKSECMOV/"><span><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/call_20.png"></span>Te regresamos la llamada</a>
                <a href="https://chat1-cls45-dal.i6.inconcertcc.com/inconcert/apps/webdesigner/WCSecMovilidadV1?token=37CC9C9E2A638DC23750B4EC3F74D96E&notify=b8c4b55f-8a9e-e6bd-b364-6ab30e41be18&dev=false&type=popup"><span><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/chat_20.png"></span>Chat en línea</a>
                <a href="https://cls45-ws-secmovilidad.inconcertcc.com/VCSECMOV/"><span><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/lengua_20.png"></span>Videollamada en lengua de señas colombiana</a>
            </div>
            <div class="footer-card">
                <a class="link-ppal" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/curso-sobre-normas-de-transito-sdm-37156-2">Ir a trámite</a>
            </div>
        </div>

        <div class="cpnt cpnt-card">
            <div class="head-card">
                <span class="tags">Servicio</span>
            </div>
            <div class="summary-card">
                <h3><a class="link-ppal" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/centro-de-orientacion-para-victimas-de-siniestros-viales">Centro de orientación a víctimas de siniestros viales - ORVI</a></h3>
                <p class="p1">El Centro de orientación para víctimas de siniestros viales tiene como propósito informar y orientar a las víctimas y sus familiares sobre procedimientos a seguir luego de un siniestro vial.</p>
            </div>
            <div class="list-card">
                <a><span><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/link_20.png"></span>Ve a la página web</a>
                <a><span><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/phone_20.png"></span>Llámanos)</a>
                <a><span><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2023/link_20.png"></span>Escríbe por Whatsapp</a>
            </div>
            <div class="footer-card">
                <a class="link-ppal" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/curso-sobre-normas-de-transito-sdm-37156-2">Ir a trámite</a>
            </div>
        </div>
        <div class="cpnt cpnt-card">
            <div class="head-card">
                <span class="tags">Trámite</span>
            </div>
            <div class="summary-card">
                <h3><a class="link-ppal" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/curso-sobre-normas-de-transito-sdm-37156-2">Curso Pedagógico por Infracción a las Normas de Tránsito</a></h3>
                <p class="p1">Promover en los asistentes la participación, reflexión y sensibilización frente a los cambios de comportamiento y hábitos en la vía. Agenda la asistencia al curso pedagógico, dando clic en agendar o llamando al (601) 3649400 opción 2.</p>
            </div>
            <div class="list-card">
                <a><span><img src="/images/ts/20x20/link_20.png"></span>Agenda la cita</a>
                <a><span><img src="/images/ts/20x20/link_20.png"></span>Puntos de atención (previo agendamiento)</a>
                <a><span><img src="/images/ts/20x20/link_20.png"></span>Llámanos</a>
                <a><span><img src="/images/ts/20x20/link_20.png"></span>Te regresamos la llamada</a>
                <a><span><img src="/images/ts/20x20/link_20.png"></span>Chat en línea</a>
                <a><span><img src="/images/ts/20x20/link_20.png"></span>Videollamada en lengua de señas colombiana</a>
            </div>
            <div class="footer-card">
                <a class="link-ppal" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/curso-sobre-normas-de-transito-sdm-37156-2">Ir a trámite</a>
            </div>
        </div>

    </div>




</div>
<!-- Fin Set -->
