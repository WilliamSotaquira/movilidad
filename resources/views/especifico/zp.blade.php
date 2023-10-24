@extends('welcome')
@section('title','zp')
@section('contenido')

<!-- Set zp -->
<div class="set-wrapper zp">





    <div class="card-ts">
        <div class="details">
            <span class="category">[field_category]</span>
            <h3>[title]</h3>
            <p>[field_description]</p>
        </div>
        <div>
            [field_contact]
        </div>
    </div>


    <style>
        .card-ts {
            padding: 18px;
            border: solid 1.3px #00000015;
            border-radius: 8px;
            -webkit-box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;

            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            margin-bottom: 24px;
        }

        .card-ts .category {
            background: rgba(25, 28, 58, 1);
            padding: 4px 8px;
            border-radius: 6px;
            color: #e5e5e5;
            font-size: 10px;
            font-weight: 500;
            text-align: center;
            line-height: 1.2;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            line-clamp: 1;
            overflow: hidden;
            text-transform: uppercase;

        }

        .card-ts .category a {
            color: #ffffff;
        }

        .card-ts .details h3 {
            font-size: 18px;
            font-weight: bold;
            text-align: left;
            line-height: 1.3;
            color: color;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            overflow: hidden;
            margin: 0px;
            margin-top: 16px;
            margin-bottom: 16px;

        }
        @media(min-width:768px){
        .card-ts {
            grid-template-columns: 65% 25%;
        }

        }
    </style>



</div>
<!-- Fin Set -->


1 | <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/"><span class="icono"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/link_20.png" alt="icono link"></span> Solicítalo</a>
2 | <a href="https://goo.gl/maps/HZtRnz1zADb64a1y6"><span class="icono"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/posicion_20.png" alt="icono posición"></span> Presencial Sede Calle 13 (Personas con discapacidad)</a>
3 | <a href="https://goo.gl/maps/G3w4osY6PFcf39Y67"><span class="icono"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/posicion_20.png" alt="icono posición"></span> Presencial Sede Paloquemao (Personas con discapacidad)</a>
4 | <a href="tel:+6013649400"><span class="icono"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/phone_20.png" alt="icono telefono"></span> Llámanos</a>
5 | <a href="https://cls45-ws-secmovilidad.inconcertcc.com/CALLBACKSECMOV/"><span class="icono"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/call_20.png" alt="icono llamada"></span> Te regresamos la llamada</a>
6 | <a href="https://chat1-cls45-dal.i6.inconcertcc.com/inconcert/apps/webdesigner/WCSecMovilidadV1?token=37CC9C9E2A638DC23750B4EC3F74D96E&notify=b8c4b55f-8a9e-e6bd-b364-6ab30e41be18&dev=false&type=popup"><span class="icono"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/chat_20.png" alt="icono chat"></span> Chat en línea</a>
7 | <a href="https://cls45-ws-secmovilidad.inconcertcc.com/VCSECMOV/"><span class="icono"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/lengua_20.png" alt="icono lenguaje de señas"></span> Videollamada en lengua de señas colombiana</a>
8 | <a href="https://vus.circulemosdigital.com.co/#/login"><span class="icono"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/calendar_20.png" alt="icono calendario"></span> Agenda la cita</a>
9 | <a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion"><span class="icono"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/posicion_20.png" alt="icono posición"></span> Puntos de atención (previo agendamiento)</a>
10 | <a href="https://goo.gl/maps/HZtRnz1zADb64a1y6"><span class="icono"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/posicion_20.png" alt="icono posición"></span> Presencial Sede Calle 13 (Previo agendamiento)</a>
11 | <a href="https://goo.gl/maps/G3w4osY6PFcf39Y67"><span class="icono"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/posicion_20.png" alt="icono posición"></span> Presencial Sede Paloquemao (Previo agendamiento)</a>
12 | <a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php"><span class="icono"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/email_20.png" alt="icono correo"></span> Radicar correo</a>




<style>
    a span.icono {
        margin-right: 8px;
    }

    a span.icono-position::before {
        content: "";
        display: block;
        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/posicion.png');
        background-repeat: no-repeat;
        background-size: contain;
        width: 20px;
        height: 20px;
        float: left;
        margin: 0 6px 0 0;
    }
</style>


@extends('welcome')
@section('title','ts')
@section('contenido')

<style>
    .field-item.even .centertil {
        visibility: hidden;
        margin-top: -50px;
    }

    .box-header-ts .title-ts {
        grid-area: title-ts;
    }

    .title-ts h3 {
        font-size: 1.5em;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: #191c3d;
        margin-bottom: 32px;
    }

    .box-header-ts .paragraph-ppal {
        grid-area: paragraph-ppal;
    }

    .box-header-ts .icons {
        grid-area: icons;
        display: grid;
        gap: 8px;
        grid-auto-flow: dense;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: auto;
        margin-left: 1.5em;
        margin-right: 1.5em;
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
        border: solid 1px #33333390;
        border-radius: 8px;
        max-width: 200px;
        margin: auto;
    }

    .box-header-ts .icons .icon img {
        border-radius: 8px;
        display: inline-block;
        margin-bottom: 6px;
    }

    @media(min-width:768px) {
        .set-wrapper .box-header-ts {
            grid-template-columns: 70% 30%;
            grid-template-areas:
                'title-ts title-ts'
                'paragraph-ppal icons';
        }

        .box-header-ts .icons {
            margin-left: 0em;
            margin-right: 0em;
        }
    }

    .card-ts {
        padding: 24px;
        border: solid 1.3px #00000015;
        border-radius: 8px;
        -webkit-box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;

        display: grid;
        gap: 8px;
        grid-auto-flow: dense;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        margin-bottom: 24px;
    }
    @media(min-width:768px){
        .card-ts {
            grid-template-columns: 65% 35%;
        }

        }

    .card-ts .category {
        background: rgba(25, 28, 58, 1);
        padding: 4px 8px;
        border-radius: 6px;
        color: #e5e5e5;
        font-size: 10px;
        font-weight: 500;
        text-align: center;
        line-height: 1.2;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        line-clamp: 1;
        overflow: hidden;
        text-transform: uppercase;

    }

    .card-ts .category a {
        color: #b7d000;
    }


    .card-ts .details h3 {
        font-size: 18px;
        font-weight: bold;
        text-align: left;
        line-height: 1.3;
        color: #191c3d;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        line-clamp: 3;
        overflow: hidden;
        margin: 0px;
        margin-top: 16px;
        margin-bottom: 16px;

    }

    a span.icono {
        margin-right: 8px;
    }

    .card-ts>div>a {
        display: flex;
        margin-bottom: 6px;
    }
</style>
<!-- Set ts -->
<div class="set-wrapper ts">

    <!-- Sección box header-ts -->
    <div class="box box-header-ts">
        <div class="title-ts">
            <h3 class="title title-type-ppal title-id-1">
                Trámites, servicios, consultas y otros procedimientos
            </h3>
        </div>
        <div class="paragraph-ppal">
            <p>Para conocer los trámites, servicios, PQRSD y otros procedimientos administrativos (OPA) de la Secretaría Distrital de Movilidad, puedes consultarlos en la Guía de trámites y servicios de Bogotá o en el Portafolio de trámites de la secretaría, también puedes buscarlos en la lista que se encuentra a continuación. Al lado derecho encontrarás otros sitios de tu interés.</p>
        </div>
        <div class="icons">
            <a href="https://www.movilidadbogota.gov.co/web/portafolio_tramites_y_servicios">
                <div class="icon ico-1">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/portafolio-imaghen.png">
                </div>
            </a>

            <a href="https://www.ventanillamovilidad.com.co/">
                <div class="icon ico-2">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/logo-para-web-ventanilla.png">
                </div>
            </a>

            <a href="https://bogota.gov.co/servicios/entidad/secretaria-distrital-de-movilidad-sdm">
                <div class="icon ico-3">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/guia-tramites-bogota.png">
                </div>
            </a>

            <a href="https://www.gov.co/">
                <div class="icon ico-4">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/gov-co-logo.png">
                </div>
            </a>

            <a href="https://www.funcionpublica.gov.co/web/suit">
                <div class="icon ico-5">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-10-2023/logo-suit.png">
                </div>
            </a>


        </div>

    </div>



</div>
<hr>
<!-- Fin Set -->
