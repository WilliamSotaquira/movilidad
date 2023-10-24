@extends('welcome')
@section('title','informacion')
@section('contenido')

<!-- Set informacion -->
<div class="set-wrapper informacion">

    <!-- Component box title-center -->
    <div class="box-title-center">
        <h2>Sistema de Gestión de Seguridad de la Información</h2>
    </div>
    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .set-wrapper .box-title-center {
            grid-area: box-title-center;
            height: px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box-title-center h2 {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            color: rgba(77, 84, 31, 1);
        }
    </style>



    <!-- Sección box encabezado -->
    <div class="box box-encabezado">
        <div class="logo logo-ppal">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-08-2023/sgsi_icono_001_800x400.png" alt="logo SGSI">
        </div>
    </div>
    <style>
        .set-wrapper .box-encabezado {
            grid-area: box-encabezado;
        }

        .logo-ppal img {
            width: 400px;
            margin: auto;
            padding-left: 2em;
            padding-right: 2em;
        }

        @media(min-width:768px) {
            .logo-ppal img {
                width: 400px;
                margin: auto;
                padding-left: 1em;
                padding-right: 1em;
            }
        }
    </style>


    <!-- Sección box txt-1 -->
    <div class="box box-txt-1">
        <h3 class="title title-type-1 title-id-1">¿Qué es el SGSI?</h3>
        <p class="paragraph ph-type-1 ph-id-1">Es un enfoque sistemático para establecer, implementar, operar, monitorear, revisar, mantener y mejorar la seguridad de la información de una organización y lograr sus objetivos y/o servicios.</p>
    </div>
    <style>
        .set-wrapper .box-txt-1 {
            grid-area: box-txt-1;
        }
    </style>


    <!-- Sección box img-1 -->
    <div class="box box-img-1">
        <div class="video video-1 video-16by9">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width='100%' src='https://www.youtube.com/embed/IHy93gDeafE' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <style>
        .set-wrapper .box-img-1 {
            grid-area: box-img-1;
        }

        .box-img-1 img {
            width: fit-content;
        }
    </style>

    <!-- Sección box txt-2 -->
    <div class="box box-txt-2">
        <h3 class="title title-type-1 title-id-2">Objetivo general</h3>
        <p class="paragraph ph-type-1 ph-id-2">Proteger y salvaguardar la confidencialidad, integridad y disponibilidad de los activos de información de la Secretaría Distrital de Movilidad, teniendo en cuenta los procesos, la operación, los objetivos de negocio y los requisitos legales vigentes en la Entidad.</p>
    </div>
    <style>
        .set-wrapper .box-txt-2 {
            grid-area: box-txt-2;
        }
    </style>


    <!-- Sección box img-2 -->
    <div class="box box-img-2">
        <figure>
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-08-2023/sgsi_img_004_1080x1080.png" alt="imagen persona consultando su dispositivo movil">
        </figure>
    </div>
    <style>
        .set-wrapper .box-img-2 {
            grid-area: box-img-2;
            /* height: px; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box-img-2 img {
            width: fit-content;
        }
    </style>



    <!-- Sección box txt-3 -->
    <div class="box box-txt-3">
        <h3 class="title title-type-1 title-id-3">Objetivos específicos</h3>
        <ul>
            <li>Gestionar los activos de información, salvaguardandolos ante cualquier incidente que pueda provocar su destrucción, divulgación, indisponibilidad o uso no compartido.</li>
            <li>Gestionar los riesgos de seguridad de la información aplicando los controles necesarios para cada situación, garantizando la sostenibilidad de las operaciones.</li>
            <li>Fortalecer la cultura de seguridad de la información, brindando concientización y sensibilización permanente a cada colaborador, para enfrentar proactiva y reactivamente las amenazas a las que se exponen en el manejo diario de la información propia y de terceros.</li>
            <li>Establecer mecanismos que permitan mantener la seguridad de la información durante una interrupción de la infraestructura tecnológica que soporta la operación de los servicios ofrecidos por la Entidad.</li>
            <li>Gestionar los eventos e incidentes de seguridad de la información, fortaleciendo la capacidad de la Secretaría Distrital de Movilidad para hacer frente a las amenazas y ataques informáticos</li>

        </ul>

    </div>
    <style>
        .set-wrapper .box-txt-3 {
            grid-area: box-txt-3;
        }
        .box-txt-3 li{
            padding-top: 12px;
        }
    </style>

    <!-- Sección box bar-icons -->
    <div class="box-bar-icons">
        <h3 class="title title-type-1 title-id-4">El SGSI nos permite:</h3>
        <div class="icons">
            <div class="icon zoom">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-08-2023/riesgos.png" alt="icono de " width="80px">
                <p>Analizar los riesgos, identificar las amenazas, vulnerabilidades e impactos sobre los activos de información de la Secretaría Distrital de Movilidad.</p>
            </div>
            <div class="icon zoom">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-08-2023/bajo-rendimiento.png" alt="icono de " width="80px">
                <p>Reducir los riesgos que pueden producir pérdidas o afectar la integridad, confidencialidad y disponibilidad de nuestra información.</p>
            </div>
            <div class="icon zoom">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-08-2023/reloj-de-24-horas.png" alt="icono de " width="80px">
                <p>Garantizar la continuidad del servicio tras un incidente de seguridad de seguridad de la información de alto impacto.</p>
            </div>
        </div>
    </div>
    <style>
        .set-wrapper .box-bar-icons {
            grid-area: box-bar-icons;
        }

        .set-wrapper .box-bar-icons .icons {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        .icons .icon {
            padding: 8px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .icons .icon img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            /* border-radius: 50%; */
            /* border: 2px solid rgba(77, 84, 31, 0.5); */
        }

        .icons .icon p {
            margin-top: 12px;
            font-size: .9em;
            font-weight: 600;
            color: #404040;
            text-align: center;
        }


        @media(min-width:768px) {
            .set-wrapper .box-bar-icons .icons {
                padding: 32px;
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>


    <!-- Component Box Carousel SGSI-->
    <div class="box box-carousel box-carousel-SGSI">

        <div id="carousel-SGSI" class="carousel slide" data-ride="carousel-SGSI">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-SGSI" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-SGSI" data-slide-to="1"></li>
                <li data-target="#carousel-SGSI" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <figure>
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-08-2023/sgsi_tip_001_1200x1200.png" alt="imagen tip">
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-08-2023/sgsi_tip_002_1200x1200.png" alt="imagen tip">
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-08-2023/sgsi_tip_003_1054x1600.png" alt="imagen tip">
                    </figure>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-SGSI" role="button" data-slide="prev" title="Anterior">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-SGSI" role="button" data-slide="next" title="Siguiente">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <style>
        .set-wrapper .box-carousel-SGSI {
            grid-area: box-carousel-SGSI;
            margin-bottom: 48px;
            font-size: 16px;
        }

        .box-carousel-SGSI .item figure {
            /* height: px; */
            background-color: #c5c5c5;
            padding: 1em;

            display: flex;
            /* flex-direction: column; */
            justify-content: center;
            align-items: center;
        }

        .carousel-inner figure img {
            object-fit: cover;
            /* width: 100% !important; */
            height: 100%;
            /* height: 16.25em; */
        }

        @media(max-width:767px) {
            .carousel-inner figure img {
                height: 16.25em;
            }
        }

        @media(min-width:768px) {
            .carousel-inner figure img {
                height: 25em;
            }
        }

        @media(min-width:992px) {
            .carousel-inner figure img {
                height: 28em;
            }
        }

        .box-carousel .carousel-control.left,
        .box-carousel .carousel-control.right {
            background-image: none;
        }

        .box-carousel .carousel-control {
            color: #ffe145;
            opacity: 1;
        }

        .box-carousel .carousel-control:focus,
        .box-carousel .carousel-control:hover {
            color: #404040;
            opacity: 0.7;
        }

        .box-carousel .carousel-indicators {
            bottom: 0px !important;
            position: absolute;
            bottom: 8px;
            left: calc(50% - 70px);
            z-index: 15;
            width: 140px;
            padding-left: 0;
            margin-left: 0%;
            text-align: center;
            list-style: none;
            padding: 0 8px;
            background: #fafafa99;
            border-radius: 15px;
            /* border: solid 1px #40404080; */
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
        }

        .box-carousel .carousel-indicators li {
            background-color: #404040;
            border-color: #40404050;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
        }

        .box-carousel .carousel-indicators .active {
            background-color: #ffe145;
            border-color: #A6B517;
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next,
        .carousel-control .icon-prev {
            padding: 2px;
            display: inline-block;
            width: 1.4em !important;
            height: 1.4em !important;
            background: #fafafa99;
            border-radius: 50%;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
        }
    </style>


</div>
<!-- Fin Set -->
<style>
    .set-wrapper.informacion {
        display: grid;
        gap: 8px;
        grid-auto-flow: dense;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        grid-template-areas:
            'box-title-center'
            'box-encabezado'
            'box-txt-1'
            'box-img-1'
            'box-txt-2'
            'box-img-2'
            'box-txt-3'
            'box-bar-icons'
            'box-carousel-SGSI';

        font-size: 16px;
        font-weight: normal;
        text-align: left;
        line-height: 1.4;
    }

    .set-wrapper .box {
        padding: 1em;
    }

    .set-wrapper .title.title-type-1 {
        color: #4c531f;
        font-weight: 600;
        padding-bottom: 4px;
        display: inline-block;
        border-bottom: solid 2px #a9b918;
        margin: .5em 0;
        font-size: 1.3em;
    }

    .set-wrapper .box-img-1 img,
    .set-wrapper .box-img-2 img {
        border-radius: 0.33em;
    }

    @media(min-width:768px) {
        .set-wrapper.informacion {
            gap: 4px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'box-title-center box-encabezado'
                'box-txt-1 box-txt-1'
                'box-img-1 box-img-1'
                'box-txt-2 box-txt-2'
                'box-img-2 box-txt-3'
                'box-bar-icons box-bar-icons'
                'box-carousel-SGSI box-carousel-SGSI';
        }
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
