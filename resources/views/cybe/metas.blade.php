@extends('welcome')
@section('title', 'objetivos')
@section('contenido')

<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


<style>
    /* Reglas de la sección de objetivos */
    .obj {
        font-family: "montserrat", sans-serif;
        font-size: 15px;
        color: #151515;
    }

    .obj .b1 {
        display: grid;
        grid-auto-flow: dense;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        grid-template-areas: "selector";
        margin-bottom: 32px;
    }

    @media (min-width: 768px) {
        .obj .b1 {
            grid-template-columns: 40% 60%;
            grid-template-areas: "selector fondo";
        }
    }

    .obj .b1 .cpt1 {
        background: #BED000;
        height: 300px;
        padding: 32px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        grid-area: selector;
    }

    .obj .b1 .cpt2 {
        grid-area: fondo;
        display: none;
    }

    @media (min-width: 768px) {
        .obj .b1 .cpt1 {
            height: 600px;
        }

        .obj .b1 .cpt2 {
            height: 600px;
            background: url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/portada_selector.png") no-repeat left center;
            /* background: linear-gradient(
                45deg,
                #BED000 0%,
                rgba(255, 255, 255, 0) 250%
            ),
            url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/portada_selector.png"); */
            background-size: cover;
            display: block !important;
        }
    }

    .obj .b1 .cpt1 .cpt1 p {
        font-size: 18px;
        color: #151515;
        text-align: center;
    }

    .obj .b1.active {
        grid-template-columns: 1fr;
        height: 200px;
    }

    .obj .b1.active .cpt1 {
        height: 200px;
        background: linear-gradient(45deg, #BED000 0%, rgba(255, 255, 255, 0) 250%),
            url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/portada_selector.png");
        background-position: 15% 55%;
        background-size: cover;
        height: 200px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .obj .b1.active .cpt2 {
        display: none !important;
    }

    #select-obj {
        margin: 32px 0;
        cursor: pointer;
    }

    @media (min-width: 768px) {
        #select-obj {
            width: 80%;
        }
    }

    .span-col-2 {
        grid-column: span 2;
        height: 150px;
    }

    .obj .b1 .cpt1-short {
        height: 160px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 32px;
        background: linear-gradient(transparent, rgba(77, 84, 31, 1)) no-repeat 0 0 / contain,
            url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/portada_selector.png") no-repeat left center;
        background-size: cover;
    }

    .relevant-text {
        color: #BED000;
        font-size: 18px;
        font-weight: 600;
        text-align: right;
        padding: 32px;
    }

    .hide {
        display: none;
    }

    .nav-justified>li>a {
        background-color: #f1f1f1 !important;
        margin: 2px;
        font-family: "Work Sans", sans-serif;
        font-size: 16px;
        color: #151515;
    }

    .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover {
        background-color: rgba(77, 84, 31, 1) !important;
        font-family: "Work Sans", sans-serif;
        font-size: 16px;
    }

    .b2 {
        display: grid;
        grid-auto-flow: dense;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
    }

    @media (min-width: 768px) {
        .b2 {
            padding: 32px;
        }
    }

    .b2 .pills {
        display: none;
    }

    .visible {
        display: block !important;
    }

    .b2 .cpt1 {
        align-items: center;
        text-align: center;
        padding: 32px;
    }

    .b2 .cpnt-head {
        margin-top: 16px;
        background: rgba(77, 84, 31, 1);
        background: linear-gradient(45deg, rgba(77, 84, 31, 1) 0%, rgba(255, 255, 255, 0) 200%),
            url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/panoramica_2.png");
        border-top: solid 3px #26e02f;
        border-bottom: solid 10px #BED000;
        background-position: 15% 30%;
        background-size: cover;
        margin-bottom: 16px;
    }

    .b2 .cpnt-head-moto {
        background: linear-gradient(45deg, rgba(77, 84, 31, 1) 0%, rgba(255, 255, 255, 0) 200%),
            url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/panoramica_2.png");
        border-top: solid 3px #26e02f;
        border-bottom: solid 10px #BED000;
        background-position: 15% 30%;
        background-size: cover;
    }

    .b2 .cpnt-head-vehiculo {
        background: linear-gradient(45deg, rgba(77, 84, 31, 1) 0%, rgba(255, 255, 255, 0) 200%),
            url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/panoramica_3.png");
        border-top: solid 3px #26e02f;
        border-bottom: solid 10px #BED000;
        background-position: 15% 70%;
        background-size: cover;
    }

    .b2 .cpnt-head-carga {
        background: linear-gradient(45deg, rgba(77, 84, 31, 1) 0%, rgba(255, 255, 255, 0) 200%),
            url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/carga_panoramica.png");
        border-top: solid 3px #26e02f;
        border-bottom: solid 10px #BED000;
        background-position: 15% 70%;
        background-size: cover;
    }

    .b2 .cpnt-head-escolar {
        background: linear-gradient(45deg, rgba(77, 84, 31, 1) 0%, rgba(255, 255, 255, 0) 200%),
            url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/escolar_panoramica.png");
        border-top: solid 3px #26e02f;
        border-bottom: solid 10px #BED000;
        background-position: 15% 70%;
        background-size: cover;
    }

    .b2 .cpnt-head-oficial {
        background: linear-gradient(45deg, rgba(77, 84, 31, 1) 0%, rgba(255, 255, 255, 0) 200%),
            url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/oficial_panoramica.png");
        border-top: solid 3px #26e02f;
        border-bottom: solid 10px #BED000;
        background-position: 15% 70%;
        background-size: cover;
    }

    .b2 .cpnt-head-publico {
        background: linear-gradient(45deg, rgba(77, 84, 31, 1) 0%, rgba(255, 255, 255, 0) 200%),
            url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/publico_panoramica.png");
        border-top: solid 3px #26e02f;
        border-bottom: solid 10px #BED000;
        background-position: 15% 70%;
        background-size: cover;
    }

    .b2 .cpnt-head-taxi {
        background: linear-gradient(45deg, rgba(77, 84, 31, 1) 0%, rgba(255, 255, 255, 0) 200%),
            url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/taxi_panoramica.png");
        border-top: solid 3px #26e02f;
        border-bottom: solid 10px #BED000;
        background-position: 15% 70%;
        background-size: cover;
    }

    .b2 .cpnt-head h3 {
        color: #BED000;
    }

    .b2 .cpnt-head p {
        color: #f1f1f1;
        padding-left: 32px;
        padding-right: 32px;
        padding-bottom: 32px;
    }

    .b2 .title-type-1 {
        font-family: "Montserrat", sans-serif;
        font-size: 32px;
        color: rgba(77, 84, 31, 1);
        text-align: center;
        margin: 32px 0 4px 0;
    }

    .b2 .title-type-2 {
        font-family: "Montserrat", sans-serif;
        font-size: 24px;
        color: rgba(77, 84, 31, 1);
        text-align: center;
        margin: 32px 0 32px 0;
        padding-bottom: 8px;
    }

    .b2 .title-type-3 {
        font-family: "Work Sans", sans-serif;
        font-size: 18px;
        color: rgba(77, 84, 31, 1);
        text-align: left;
        margin: 32px 0 32px 0;
        padding-bottom: 8px;
        border-bottom: solid 1px rgba(77, 84, 31, 1)75;
    }

    .b2 .paragraph {
        font-family: "Montserrat", sans-serif;
        font-size: 14px;
        font-weight: normal;
        text-align: left;
    }

    .b2 .ph-1 {
        font-family: "Montserrat", sans-serif;
        font-size: 16px;
        font-weight: normal;
        text-align: left;
    }

    .b2 .ph-summary {
        font-family: "Montserrat", sans-serif;
    }

    .tab-pane .cpt-2 {
        display: grid;
        gap: 8px;
        grid-auto-flow: dense;
        grid-template-rows: auto;
    }

    .cpnt-items {
        display: grid;
        gap: 8px;
        grid-auto-flow: dense;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        justify-items: stretch;
        grid-auto-flow: dense;
        justify-content: space-around;
    }

    @media (min-width: 768px) {
        .cpnt-items {
            grid-template-columns: repeat(auto-fit, minmax(min(100%, 225px), 1fr));
            margin-left: 32px;
            margin-right: 32px;
            margin-top: 32px;
        }
    }

    .item-metas {
        display: flex;
        font-size: 14px;
        font-weight: normal;
        text-align: center;
        margin: 0;
        padding: 12px;

        justify-content: center;
        align-items: center;
        align-content: center;
    }

    .item-metas svg {
        width: 100%;
        max-width: 100px;
    }

    .item-metas .ph-1 {
        font-size: 16px;
        font-weight: normal;
        text-align: center;
        margin: 0;
        padding: 12px;
        max-width: 350px;
    }

    .cpnt-collapse h4 {
        font-weight: bold;
        color: rgba(77, 84, 31, 1);
    }

    .cpnt-collapse .panel-body {
        background: #f1f1f1;
    }

    .cpnt-collapse p,
    .cpnt-collapse li {
        color: #444444;
        padding-bottom: 16px;
        font-style: italic;
    }

    .items-incentivo {
        display: grid;
        grid-auto-flow: dense;
    }

    @media (max-width: 767px) {
        .items-incentivo {
            gap: 8px;
            grid-template-columns: repeat(auto-fill, minmax(min(100%, 200px), 1fr));
            grid-template-rows: auto;
        }
    }

    @media (min-width: 768px) {
        .items-incentivo {
            gap: 16px;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
        }
    }

    @media (min-width: 992px) {
        .items-incentivo {
            grid-template-columns: repeat(3, 1fr);
            row-gap: 32px;
            column-gap: 32px;
            margin: 32px;
        }
    }

    .card-incentivo {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        text-align: center;
        padding: 16px;
        background: #f1f1f1;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        background: linear-gradient(rgba(230, 230, 230, 0.932));
    }

    .card-incentivo .tipo-incentivo {
        font-family: "Montserrat", sans-serif;
        font-size: 18px;
        font-weight: normal;
        text-align: center;
        line-height: 1.2;
        color: rgba(77, 84, 31, 1);
    }

    .card-incentivo .valor-incentivo {
        font-family: "Work Sans", sans-serif;
        font-optical-sizing: auto;
        font-size: 24px;
        font-weight: normal;
        text-align: center;
        line-height: 1.2;
        color: rgba(77, 84, 31, 1);
    }

    .card-incentivo .resumen-incentivo {
        font-family: "Montserrat", sans-serif;
        font-size: 14px;
        font-weight: normal;
        text-align: center;
        line-height: 1.2;
        color: rgba(77, 84, 31, 1);
    }

    .card-incentivo .enlace-incentivo {
        font-family: "Montserrat", sans-serif;
        font-size: 12px;
        font-weight: normal;
        text-align: center;
        line-height: 1.2;
        color: #252525;
    }

    @media (min-width: 768px) {
        .cpnt-incentivos {
            padding: 32px;
        }
    }

    .cpnt-incentivos .glyphicon-chevron-right::before {
        color: #252525 !important;
    }

    .cpnt-incentivos .glyphicon-chevron-left::before {
        color: #252525 !important;
    }

    .cpnt-incentivos .panel-heading {
        border-color: #BED000 !important;
        background-image: linear-gradient(to right, #26e02f, #BED000) !important;
    }

    .cpnt-incentivos .panel-heading .panel-title a {
        font-family: "Work Sans", sans-serif;
        text-decoration: none;
        color: #252525 !important;
        font-size: 16px;
        font-weight: normal;
    }

    .cpnt-incentivos .panel-heading .panel-title a:after {
        font-family: "Glyphicons Halflings";
        content: "\e080";
        float: right;
        color: #252525;
        font-size: 18px;
    }

    .cpnt-incentivos .panel-heading .panel-title a.collapsed:after {
        content: "\e114";
    }

    .cpnt-incentivos .panel-body {
        /* background-color: #252525; */
        background-image: linear-gradient(to right, #151515, rgba(77, 84, 31, 1));
    }

    @media (min-width: 768px) {
        .cpnt-incentivos .panel-body {
            padding: 32px 84px;
        }
    }

    .b2 .group-data .ph-1 {
        padding-bottom: 32px;
        text-align: justify;
    }

    .b2 .group-data img {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px,
            rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
    }

    @media (min-width: 768px) {
        .b2 .group-data {
            padding: 32px;
        }

        .b2 .group-data figure {
            /* padding: 32px; */
            max-width: 700px;
            margin: auto;
        }
    }

    .b2 .group-data ul {
        padding-bottom: 32px;
    }

    .b2 .group-data ul li {
        padding-bottom: 8px;
        font-family: "Montserrat", sans-serif;
        font-size: 16px;
        font-weight: normal;
    }

    .b2 .group-data .embed-container {
        width: 940px;
        margin: auto;
    }
</style>

<!-- Set objetivos -->
<div class="set-wrapper objetivos obj">


    <!-- bloque box header-->
    <style>
        .set-wrapper .box-header {
            background: #BED000FF;
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/cybe_portada_2.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;

            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas: "box-header";
        }

        .cpnt-collapse .panel-title>a {
            display: inline-block;
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

        @media (min-width: 908px) {
            .set-wrapper .box-header {
                background-position: center -30em;
                grid-template-columns: 55% 45%;
                grid-template-areas: "vacio box-header";
            }
        }

        .box-header .cmpnt-logo-ppal {
            grid-area: box-header;
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box-header .cmpnt-logo-ppal .logo-ppal {
            width: 100%;
            max-width: 260px;
            margin: 0 auto;
            background-color: #BED000FF;
            padding: 32px;
            -webkit-box-shadow: 0px 0px 10px 3px #BED000FF25;
            box-shadow: 0px 0px 10px 3px #BED000FF25;
            margin-bottom: 12px;
        }

        .box-header .cmpnt-logo-ppal .paragraph {
            font-family: "Montserrat", sans-serif;
            font-size: 20px;
            font-weight: 400;
            text-align: left;
            line-height: 1.1;
            color: #fff;
            text-align: center;
            margin: 8px 14px;
            padding: 0;
            max-width: 400px;
        }

        /* Reglas Navbar */
        .set-wrapper .navbar {
            background: #BED000FF;
            border: none;
            border-radius: 0;
            font-family: "Montserrat", sans-serif !important;
            font-size: 14px !important;
            font-weight: 400;
            line-height: 1.1;
            color: #fff;
            text-align: center;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        @media (min-width: 768px) {
            .set-wrapper .navbar {
                display: flex;
                margin: auto;
                margin-bottom: 6px;
            }
        }

        .set-wrapper .navbar-nav>li {
            background: #BED000FF;
            color: #3d4a1c;
        }

        .set-wrapper .navbar-nav>li:hover {
            background: #828F26;
            color: #ffffff;
        }

        .set-wrapper .navbar-nav>li>a {
            color: #3d4a1c !important;
            padding: 14px 4px;
        }

        .set-wrapper .navbar-nav>li:hover>a {
            color: #ffffff !important;
        }

        .set-wrapper .navbar-nav>li a.activado {
            background: rgba(77, 84, 31, 1) !important;
            color: #BED000FF !important;
        }

        @media (min-width: 768px) {
            .navbar-collapse.collapse {
                display: inline-block !important;
                width: auto !important;
            }
        }
        .enlace-metas{
            color: #BED000;
            font-weight: bold;
        }
        .enlace-metas:hover{
            color: #fff;
        }

    </style>
    <div class="box box-header">
        <div class="cmpnt cmpnt-vacio">
        </div>
        <div class="cmpnt cmpnt-logo-ppal">
            <div class="logo logo-ppal">
                <a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/home">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-08-2024/logo_cbe_2024.png" alt="logo Movilidad de Cero y Bajas Emisiones">
                </a>
            </div>
            <p class="paragraph ph-type-ppal ph-id-1">Conoce la apuesta de Bogotá por la <strong>movilidad motorizada de cero y bajas emisiones</strong></p>
        </div>
    </div>
    <!-- bloque navbar-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/home">Inicio</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/por_que">¿Por qué?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/solucion">¿Qué solución proponemos?</a></li>
                    <li><a class="activado" href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/metas">¿Cuáles son nuestras metas?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/tecnologias">¿Cuáles son las tecnologías?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/mitos">Verdades y mitos</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/recursos">Recursos</a></li>
                </ul>

            </div>
        </div>
    </nav>


    <div class="box b1">
        <div class="cpt1">
            <p>Para conocer más información de las metas, puedes seleccionar por modo de transporte:</p>
            <select name="select-obj" id="select-obj" class="form-control" required="required">
                <option>Vehículos particulares y motocicletas</option>
                <option>Transporte de carga</option>
                <option>Transporte escolar</option>
                <option>Flota oficial</option>
                <option>Transporte público</option>
                <option>Taxis</option>
                <option selected disabled>Seleccione una opción</option>
            </select>
        </div>
        <div class="cpt2"></div>
    </div>

    <div class="box b2">

        <!-- Bloque de información relacionada al segmento Vehiculos -->
        <div class="pills pills-0 pills-vehiculo">

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-vehiculo-1">Metas</a></li>
                <li><a data-toggle="pill" href="#tab-vehiculo-2">Incentivos</a></li>
                <li><a data-toggle="pill" href="#tab-vehiculo-3">Productos clave</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab-vehiculo-1" class="tab-pane fade in active">

                    <div class="cpnt cpnt-head cpnt-head-vehiculo cpnt-head-vehiculo-metas">
                        <h3 class="title title-type-2">Metas para la transición de vehículos particulares y motocicletas</h3>
                        <p class="paragraph ph-1">Estas metas aceleran el proceso de transición a vehículos y motocicletas de cero emisiones y ayudan a mitigar la contaminación ambiental y los efectos en la salud pública provocados por la exposición a concentración de material particulado.</p>
                    </div>

                    <div class="cpnt cpnt-collapse  cpnt-collapse-vehiculos">

                        <!-- collapse vehiculos -->
                        <div class=''>
                            <div class='panel-heading' role='tab' id='heading_vehiculos'>
                                <h4 class='panel-title'>
                                    Vehiculos particulares (segmentos M1 y N1)
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-sg1-v' href='#collapse_vehiculos' aria-expanded='false' aria-controls='collapse_vehiculos'>
                                        <span class="icon ico1 zoom">
                                            <img width="20px" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/10-09-2024/informacion.png">
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse_vehiculos' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_vehiculos' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='box-vehiculos'>
                                        <p>De acuerdo con la Resolución 20223040037985 del 1 de julio de 2022 “Por medio de la cual se establecen equivalencias para la clasificación de los vehículos contenida en la Resolución Consolidada UNECE/TRANS/WP.29/78 Rev.6 (...)”, los segmento de vehículos incluidos acá son:</p>
                                        <ul>
                                            <li>M1: vehículos utilizados para el transporte de pasajeros, hasta de ocho asientos además del asiento del conductor. (Automóvil, camioneta, campero).</li>
                                            <li>N1: vehículos para el transporte de mercancías y cuya masa máxima no exceda 3.5 toneladas. (Camioneta)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="cpnt cpnt-items cpnt-items-vehiculo">

                        <div class="item-metas item-metas-vehiculos">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/web/sites/default/files/cybe/17-07-2024/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="rgba(77, 84, 31, 1)" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">1</text>
                            </svg>
                            <p class="paragraph ph-1">A partir de 2032, sólo se registrarán en Bogotá vehículos particulares de cero y bajas emisiones.</p>
                        </div>

                        <div class="item-metas item-metas-vehiculos">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/web/sites/default/files/cybe/17-07-2024/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="rgba(77, 84, 31, 1)" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">2</text>
                            </svg>
                            <p class="paragraph ph-1">A partir de 2040, sólo se registrarán en Bogotá vehículos de cero emisiones.</p>
                        </div>

                    </div>

                    <div class="cpnt cpnt-collapse  cpnt-collapse-motos">

                        <!-- collapse vehiculos -->
                        <div class=''>
                            <div class='panel-heading' role='tab' id='heading_vehiculos'>
                                <h4 class='panel-title'>
                                    Motocicletas (segmentos L1 - L7)
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-sg1-m' href='#collapse_motos' aria-expanded='false' aria-controls='collapse_motos'>
                                        <span class="icon ico1 zoom">
                                            <img width="20px" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/10-09-2024/informacion.png">
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse_motos' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_vehiculos' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='box-vehiculos'>
                                        <p>De acuerdo con la Resolución 20223040037985 del 1 de julio de 2022 “Por medio de la cual se establecen equivalencias para la clasificación de los vehículos contenida en la Resolución Consolidada UNECE/TRANS/WP.29/78 Rev.6 (...)”, los segmento de vehículos incluidos acá son:</p>
                                        <ul>
                                            <li>L1: vehículo de dos ruedas, cuya cilindrada de motor, en caso de un motor térmico no exceda los 50 cm3, y cualquiera que sea el medio de propulsión con una velocidad máxima de diseño inferior a los 50 km/h. (Motocicleta, motociclo, ciclomotor o moped, triciclo con pedaleo asistido).</li>
                                            <li>L2: vehículo de tres ruedas, de cualquier disposición de rueda, cuya cilindrada de motor en caso de un motor térmico no exceda los 50 cm3, y cualquiera que sea el medio de propulsión con una velocidad máxima de diseño inferior a los 50 km/h. (Motocicleta, tricimoto).</li>
                                            <li>L3: vehículo de dos ruedas, cuya cilindrada de motor, en caso de un motor térmico que excede 50 cm3, o cualquiera que sea el medio de propulsión con una velocidad máxima de diseño superior a 50 km/h. (Motocicleta).</li>
                                            <li>L4: vehículo de tres ruedas dispuestas asimétricamente en relación con el plano medio longitudinal cuya cilindrada de motor o cualquiera que sea el medio de propulsión con una velocidad máxima de diseño superior a 50 km/h. (Mototriciclo).</li>
                                            <li>L5: vehículo de tres ruedas dispuestas simétricamente en relación con el plano medio longitudinal cuya cilindrada de motor o cualquiera que sea el medio de propulsión con una velocidad máxima de diseño superior a 50 km/h. (Motocarro).</li>
                                            <li>L6: vehículo de cuatro ruedas cuya masa en vacío no supere los 350 kg, sin incluir la masa de las baterías en el caso de los vehículos eléctricos, cuya velocidad máxima de diseño no sea mayor de 45 km/h, y cuya cilindrada del motor no exceda 50 cm3 para motores de encendido por chispa, o cuya potencia de salida neta máxima sea inferior a 4 kW en el caso de motores de combustión interna. Para motores eléctricos, son todos aquellos cuya potencia nominal continua máxima no supere los 4 kW. (Cuatrimoto).</li>
                                            <li>L7: vehículo de cuatro ruedas, distinto del clasificado en la categoría L6, cuya masa en vacío no supere los 400 kg (550 kg para vehículos destinados a transportar mercancía), sin incluir la masa de baterías en el caso de los vehículos eléctricos, y cuya potencia nominal continua no exceda los 15 kW. (Cuatrimoto, cuadriciclo).</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="cpnt cpnt-items cpnt-items-moto">
                        <div class="item-metas item-metas-motos">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/web/sites/default/files/cybe/17-07-2024/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="rgba(77, 84, 31, 1)" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">3</text>
                            </svg>
                            <p class="paragraph ph-1">A partir de 2032, sólo se registrarán en Bogotá motocicletas de cero emisiones.</p>
                        </div>
                    </div>

                </div>
                <div id="tab-vehiculo-2" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-vehiculo cpnt-head-vehiculo-incentivos">
                        <h3 class="title title-type-2">Incentivos para vehículos particulares</h3>
                        <p class="paragraph ph-1">Cada producto incluye las acciones esperadas que convierten una insumos y gestiones en bienes, servicios para lograr la transición de cada uno de estos modos de transporte. </p>
                    </div>

                    <div class="cpnt cpnt-incentivos">

                        <!-- collapse_incevehiculo -->
                        <div class='panel-group' id='accordion_incevehiculo' role='tablist ' aria-multiselectable='true'>

                            <!-- collapse elecvehiculo -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_elecvehiculo'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_incevehiculo' href='#collapse_elecvehiculo' aria-expanded='false' aria-controls='collapse_elecvehiculo'>
                                            Eléctrico
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_elecvehiculo' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_elecvehiculo' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-elecvehiculo'>

                                            <div class="items-incentivo">

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">0%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Gravamen arancelario del cero por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">maximo del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">-60%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de restricción de pico y placa en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 003 de 2023</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio para estacionamiento</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">hora gratis de parqueo en vía en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Zona de parqueo pago</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">SOAT</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">10%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Revisión técnico mecánica</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">30%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- collapse hibrivehiculo -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_hibrivehiculo'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_incevehiculo' href='#collapse_hibrivehiculo' aria-expanded='false' aria-controls='collapse_hibrivehiculo'>
                                            Hibrido
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_hibrivehiculo' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_hibrivehiculo' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-hibrivehiculo'>

                                            <div class="items-incentivo">


                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Gravamen arancelario del cinco por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>-40%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>de restricción de pico y placa en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 003 de 2023</a>
                                                    </span>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /#fin _incevehiculo -->

                    </div>
                </div>
                <div id="tab-vehiculo-3" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-vehiculo cpnt-head-vehiculo-clave">
                        <h3 class="title title-type-2">Productos claves para lograr la transición de los vehículos particulares y motocicletas hacia las cero emisiones:</h3>
                        <p class="paragraph ph-1">Cada producto incluye las acciones esperadas que convierten una insumos y gestiones en bienes, servicios para lograr la transición de cada uno de estos modos de transporte. </p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <h4 class="title title-type-3">Esquemas de gestión de la demanda</h4>
                            <p class="paragraph ph-1">Con el fin de promover el uso responsable de los vehículos particulares, se generan facilidades para la circulación, en particular de los vehículos de cero y bajas emisiones sobre los más contaminantes. Actualmente, la ciudad ya cuenta con estrategias en esta línea como el pico y placa, y el pico y placa solidario. Acciones a cargo de la Secretaría Distrital de Movilidad.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/picoplaca.png" alt="imagen ">
                                <figcaption>
                                    <p>Foto: Secretaría Distrital de Movilidad</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Zonas de restricción de circulación.</h4>
                            <p class="paragraph ph-1">Para promover la aceleración de los procesos de renovación de los vehículos que circulan en la ciudad y mejorar las tecnologías, se podrán incluir zonas delimitadas de la ciudad, en las cuales el acceso esté diferenciado por el nivel de contaminación y emisión de los vehículos que deseen ingresar. Acciones a cargo de la Secretaría Distrital de Movilidad.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/vehiculo_2.png" alt="imagen ">
                                <figcaption>
                                    <p>Foto: Secretaría Distrital de Movilidad</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Plazas de parqueo preferencial para cero emisiones.</h4>
                            <p class="paragraph ph-1">Se busca aumentar la oferta de estacionamientos para vehículos eléctricos (Ley 1964 de 2019 artículo 7), generando la reglamentación para exigir que los estacionamientos de la ciudad, registrados en el Registro Distrital de Estacionamientos, cuenten con estos espacios, reglamentación que está a cargo de las secretarías distritales de Movilidad y de Gobierno.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/16-08-2024/estacioncarga2.png" alt="imagen ">
                                <figcaption>
                                    <p>Foto: Secretaría Distrital de Movilidad</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bloque de información relacionada al segmento carga  -->
        <div class="pills pills-1 pills-carga">

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-carga-1">Metas</a></li>
                <li><a data-toggle="pill" href="#tab-carga-2">Incentivos</a></li>
                <li><a data-toggle="pill" href="#tab-carga-3">Productos clave</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab-carga-1" class="tab-pane fade in active">

                    <div class="cpnt cpnt-head cpnt-head-carga cpnt-head-carga-metas">
                        <h3 class="title title-type-2">Metas para la transición de los vehículos de transporte de carga</h3>
                        <p class="paragraph ph-1">Para estas flotas se prevé un cambio hacia tecnologías de cero o bajas emisiones, que contribuyan a la reducción de las emisiones de gases efecto invernadero y de contaminantes atmosféricos y al mismo tiempo se de la inclusión de tecnologías que respondan a las necesidades del sector. </p>
                    </div>
                    <div class="cpnt cpnt-collapse cpnt-collapse-carga">

                        <!-- collapse collapse_carga -->
                        <div class=''>
                            <div class='panel-heading' role='tab' id='heading_collapse_carga'>
                                <h4 class='panel-title'>
                                    Vehículos de transporte de carga (segmentos N2 y N3)
                                    <a role='button' data-toggle='collapse' data-parent='#accordion_collapse_carga' href='#collapse_collapse_carga' aria-expanded='false' aria-controls='collapse_collapse_carga'>
                                        <span class="icon ico1 zoom">
                                            <img width="20px" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/10-09-2024/informacion.png">
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse_collapse_carga' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_collapse_carga' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='box-collapse_carga'>
                                        <p>De acuerdo con la Resolución 20223040037985 del 1 de julio de 2022 “Por medio de la cual se establecen equivalencias para la clasificación de los vehículos contenida en la Resolución Consolidada UNECE/TRANS/WP.29/78 Rev.6 (...)”, los segmento de vehículos incluidos acá son:</p>
                                        <ul>
                                            <li>N2: vehículos utilizados para el transporte de mercancías, con una masa superior a 3.5 toneladas y hasta 12 toneladas. (Camioneta, camión, volqueta).</li>
                                            <li>N3: vehículos para el transporte de mercancías y cuya masa máxima sea superior a 12 toneladas. (Camión, tractocamión,volqueta)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="cpnt cpnt-items cpnt-items-carga">

                        <div class="item-metas item-metas-cargas">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/web/sites/default/files/cybe/17-07-2024/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="rgba(77, 84, 31, 1)" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">1</text>
                            </svg>
                            <p class="paragraph ph-1">A partir de 2035, el registro de vehículos de carga será únicamente de cero emisiones, de conformidad con la Ley 1972 de 2019.</p>
                        </div>

                    </div>
                </div>
                <div id="tab-carga-2" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-carga cpnt-head-carga-incentivos">
                        <h3 class="title title-type-2">Incentivos para vehículos de transporte de carga</h3>
                        <p class="paragraph ph-1">Cada producto incluye las acciones esperadas que convierten una insumos y gestiones en bienes, servicios para lograr la transición de cada uno de estos modos de transporte.</p>
                    </div>

                    <div class="cpnt cpnt-incentivos">

                        <!-- collapse_incecarga -->
                        <div class='panel-group' id='accordion_incecarga' role='tablist ' aria-multiselectable='true'>

                            <!-- collapse eleccarga -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_eleccarga'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_incecarga' href='#collapse_eleccarga' aria-expanded='false' aria-controls='collapse_eleccarga'>
                                            Eléctrico
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_eleccarga' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_eleccarga' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-eleccarga'>

                                            <div class="items-incentivo">

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">0%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Gravamen arancelario del cero por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">maximo del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">-60%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de restricción de pico y placa en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 840 de 2019 modificado por el Decreto Distrital 077 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio para estacionamiento</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">hora gratis de parqueo en vía en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Zona de parqueo pago - 2021</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">SOAT</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">10%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019 - Ley 2128 de 2021</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Revisión técnico mecánica</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">30%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a><br><a href="">Ley 2128 de 2021</a>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- collapse hibricarga -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_hibricarga'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_incecarga' href='#collapse_hibricarga' aria-expanded='false' aria-controls='collapse_hibricarga'>
                                            Hibrido
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_hibricarga' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_hibricarga' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-hibricarga'>

                                            <div class="items-incentivo">


                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Gravamen arancelario del cinco por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>-40%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- collapse gas -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_gas'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_incecarga' href='#collapse_gas' aria-expanded='false' aria-controls='collapse_gas'>
                                            Gas natural dedicados
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_gas' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_gas' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-gas'>

                                            <div class="items-incentivo">


                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Gravamen arancelario del cinco por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>Exento</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>del pago</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">aquellos que han sido diseñados y fabricados para operar exclusivamente con gas natural vehicular</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 840 de 2019 modificado por el Decreto Distrital 077 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">SOAT</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">10%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019 - Ley 2128 de 2021</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Revisión técnico mecánica</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">Exento</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">por 10 años</p>
                                                        <p class="ph-summary">Descuento del 30%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a><br>
                                                        <a href="">Ley 2128 de 2021</a>
                                                    </span>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /#fin _incecarga -->

                    </div>
                </div>
                <div id="tab-carga-3" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-carga cpnt-head-carga-clave">
                        <h3 class="title title-type-2">Productos clave</h3>
                        <p class="paragraph ph-1">Cada producto incluye las acciones esperadas que convierten una insumos y gestiones en bienes, servicios para lograr la transición de cada uno de estos modos de transporte.</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <h4 class="title title-type-3">Pirámide de tecnologías de cero y bajas emisiones para Bogotá región.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Ambiente. Ante un escenario de tecnologías cambiantes y la adopción recurrente de estándares cada vez más exigentes, se evidencia la necesidad de establecer una homogenización conceptual que permita definir cuáles son las tecnologías, combustibles y/o estándares para que un vehículo pueda ser categorizado como de cero o de bajas emisiones, de acuerdo a su tipología vehicular.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/carga_2.png" alt="imagen ">
                                <figcaption>
                                    <p>Fuente: Secretaría de Movilidad.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Fondo Distrital para la Promoción del Ascenso Tecnológico <i>(Decreto Distrital 203 de 2023).</i></h4>
                            <p class="paragraph ph-1"> A cargo de la Secretaría de Ambiente. Se generarán incentivos para reducir los gases de efecto invernadero y de contaminantes atmosféricos del transporte urbano de carga de Bogotá.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/carga_1.png" alt="imagen ">
                                <figcaption>
                                    <p>Foto: Secretaría Distrital de Movilidad</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Etiquetado Ambiental Vehícular <i>(Resolución 01545 de 2023).</i></h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Ambiente. Es una herramienta eficaz para la evaluación y categorización de los vehículos, según su impacto ambiental en la calidad del aire y en las emisiones de gases de efecto invernadero - GEI, para ser utilizado dentro de la gestión de los programas y proyectos de reducción de emisiones contaminantes de la ciudad, así como herramientas de gestión de la movilidad, gestión de medidas de restricción y en la promoción de tecnologías de bajas y de cero emisiones. Es de carácter voluntario.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/carga_3.png" alt="imagen ">
                                <figcaption>
                                    <p>Fuente: Secretaría de Ambiente (2023)</p>
                                </figcaption>
                            </figure>
                            <i></i>
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Proyectos de ciclologística.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad, que ha adelantado una serie de pilotos con apoyo de organismos multilaterales para probar tecnologías y modelos de operación con bicicletas de carga electroasistidas y motocarros eléctricos, encontrando que los resultados obtenidos son el camino para la escabilidad de este modelo en el transporte de carga de último kilómetro con vehículos cero emisiones, pues facilitan la entrega de mercancía de forma rápida y eficiente.</p>
                            <p class="paragraph ph-1">Las tipologías vehiculares empleadas en estos proyectos, deberán ser cero emisiones y estar en línea con la normativa que el Gobierno Nacional expida al respecto, entre ellas, la Resolución 160 de 2017.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/carga_4.png" alt="imagen ">
                                <figcaption>
                                    <p>Foto: Secretaría Distrital de Movilidad 2020</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Restricciones de circulación con criterios ambientales.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Son esquemas de restricción a la circulación de vehículos de carga, ya sea en corredores o zonas específicas que estén alineadas con el desarrollo de proyectos de mediana y gran escala proyectados para la ciudad; aportan a la organización y racionalización del tránsito del transporte de carga, y promueven la mejora en la calidad del aire de la ciudad.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/carga_5.png" alt="imagen ">
                                <figcaption>
                                    <p>Foto: Secretaría Distrital de Movilidad</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bloque de información relacionada al segmento escolar     -->
        <div class="pills pills-2 pills-escolar">

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-escolar-1">Metas</a></li>
                <li><a data-toggle="pill" href="#tab-escolar-2">Incentivos</a></li>
                <li><a data-toggle="pill" href="#tab-escolar-3">Productos clave</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab-escolar-1" class="tab-pane fade in active">

                    <div class="cpnt cpnt-head cpnt-head-escolar cpnt-head-escolar-metas">
                        <h3 class="title title-type-2">Metas para la transición de vehículos de transporte escolar</h3>
                        <p class="paragraph ph-1">Se buscará la promoción de las tecnologías de cero emisiones para los vehículos que prestan servicio de transporte escolar, particularmente en las instituciones educativas públicas. Esto permitirá reflejar una mejora en las condiciones ambientales de la ciudad y reducirá las repercusiones en salud de miles de niños y niñas que diariamente se ven expuestos a la contaminación del aire en microambientes de transporte motorizado. Más información <a class="enlace-metas" href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/recursos#electrificacion_rutas">aquí</a></p>
                    </div>
                    <div class="cpnt cpnt-collapse cpnt-collapse-escolar">

                        <!-- collapse metas_escolar -->
                        <div class=''>
                            <div class='panel-heading' role='tab' id='heading_metas_escolar'>
                                <h4 class='panel-title'>
                                    Transporte escolar (segmentos M1 a M3)
                                    <a role='button' data-toggle='collapse' data-parent='#accordion_metas_escolar' href='#collapse_metas_escolar' aria-expanded='false' aria-controls='collapse_metas_escolar'>
                                        <span class="icon ico1 zoom">
                                            <img width="20px" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/10-09-2024/informacion.png">
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse_metas_escolar' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_metas_escolar' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='box-metas_escolar'>
                                        <p>De acuerdo con la Resolución 20223040037985 del 1 de julio de 2022 “Por medio de la cual se establecen equivalencias para la clasificación de los vehículos contenida en la Resolución Consolidada UNECE/TRANS/WP.29/78 Rev.6 (...)”, los segmento de vehículos incluidos acá son:</p>
                                        <ul>
                                            <li>M1: vehículos utilizados para el transporte de pasajeros, hasta con ocho asientos además del asiento del conductor. (Automóvil, camioneta, campero).</li>
                                            <li>M2: vehículos utilizados para el transporte de pasajeros, que comprenden más de ocho asientos además del asiento del conductor y que tienen una masa máxima que no excede las 5 toneladas. (Camioneta, camioneta cerrada de servicio mixto, campero, microbús, microbús de servicio mixto, buseta, buseta de servicio mixto).</li>
                                            <li>M3: vehículos utilizados para el transporte de pasajeros, que comprende más de ocho asientos además del asiento del conductor, y que tiene una masa máxima que excede las 5 toneladas. (microbús, microbús de servicio mixto, buseta, buseta de servicio mixto).</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="cpnt cpnt-items cpnt-items-escolar">

                        <div class="item-metas item-metas-escolars">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/web/sites/default/files/cybe/17-07-2024/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="rgba(77, 84, 31, 1)" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">1</text>
                            </svg>
                            <p class="paragraph ph-1">El registro de estos vehículos será de cero y bajas emisiones para 2026.</p>
                        </div>
                        <div class="item-metas item-metas-escolars">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/web/sites/default/files/cybe/17-07-2024/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="rgba(77, 84, 31, 1)" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">2</text>
                            </svg>
                            <p class="paragraph ph-1">A 2032 el 100% de buses escolares nuevos que se registren serán solo de Cero Emisiones.</p>
                        </div>

                    </div>
                </div>
                <div id="tab-escolar-2" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-escolar cpnt-head-escolar-incentivos">
                        <h3 class="title title-type-2">Incentivos para vehículos de transporte escolar</h3>
                        <p class="paragraph ph-1">A cargo de la Secretaría de Educación. Se incorporarán incentivos en los procesos de contratación que adelante la Secretaría de Educación del Distrito.</p>
                    </div>

                    <div class="cpnt cpnt-incentivos">

                        <!-- collapse_inceescolar -->
                        <div class='panel-group' id='accordion_inceescolar' role='tablist ' aria-multiselectable='true'>

                            <!-- collapse elecescolar -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_elecescolar'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_inceescolar' href='#collapse_elecescolar' aria-expanded='false' aria-controls='collapse_elecescolar'>
                                            Eléctrico
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_elecescolar' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_elecescolar' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-elecescolar'>

                                            <div class="items-incentivo">

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">0%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Gravamen arancelario del cero por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">maximo del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">-60%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">SOAT</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">10%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Revisión técnico mecánica</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">30%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- /#fin _inceescolar -->

                    </div>
                </div>
                <style>
                    #tab-escolar-3 .video-1{
                        padding: 16px 64px;
                    }
                </style>
                <div id="tab-escolar-3" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-escolar cpnt-head-escolar-clave">
                        <h3 class="title title-type-2">Productos clave</h3>
                        <p class="paragraph ph-1">Cada producto incluye las acciones esperadas que convierten una insumos y gestiones en bienes, servicios para lograr la transición de cada uno de estos modos de transporte.</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <h4 class="title title-type-3">Estrategia de conocimiento en la movilidad escolar eléctrica.</h4>
                            <p class="paragraph ph-1">A cargo de las Secretarías de Movilidad y Ambiente. Se llevarán a cabo mediciones, estudios y sensibilización de las rutas escolares, los cuales permitirán recopilar insumos técnicos, operacionales y ambientales que permitirán fomentar el cambio a vehículos eléctricos en el sector escolar.</p>
                            <div class="video video-1">
                                <video controls style="width: 100%;" poster="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/12-09-2024/portada_video.jpg">
                                    <source src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/12-09-2024/rutas_electricasalta.mp4" type="video/mp4"  preload>
                                </video>
                            </div>
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Incentivos para vehículos cero y bajas emisiones en el transporte escolar.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Educación. Se incorporarán incentivos en los procesos de contratación que adelante la Secretaría de Educación del Distrito.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/escolar_2.png" alt="imagen ">
                                <figcaption>
                                    <p>Foto: Secretaría Distrital de Movilidad 2022</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bloque de información relacionada al segmento oficial     -->
        <div class="pills pills-3 pills-oficial">

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-oficial-1">Metas</a></li>
                <li><a data-toggle="pill" href="#tab-oficial-2">Incentivos</a></li>
                <li><a data-toggle="pill" href="#tab-oficial-3">Productos clave</a></li>
                <li><a data-toggle="pill" href="#tab-oficial-4">Recomendaciones</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab-oficial-1" class="tab-pane fade in active">

                    <div class="cpnt cpnt-head cpnt-head-oficial cpnt-head-oficial-metas">
                        <h3 class="title title-type-2">Metas para la transición de la flota oficial</h3>
                        <p class="paragraph ph-1">Esta meta es de carácter estratégico para dinamizar el mercado de los vehículos de cero emisiones e impulsar el cambio de los demás segmentos de flota contemplados en esta política.</p>
                    </div>
                    <div class="cpnt cpnt-collapse cpnt-collapse-oficial">

                        <!-- collapse metas_oficial -->
                        <div class=''>
                            <div class='panel-heading' role='tab' id='heading_metas_oficial'>
                                <h4 class='panel-title'>
                                    Flota oficial (segmentos M1 y N1)
                                    <a role='button' data-toggle='collapse' data-parent='#accordion_metas_oficial' href='#collapse_metas_oficial' aria-expanded='false' aria-controls='collapse_metas_oficial'>
                                        <span class="icon ico1 zoom">
                                            <img width="20px" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/10-09-2024/informacion.png">
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse_metas_oficial' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_metas_oficial' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='box-metas_oficial'>
                                        <p>De acuerdo con la Resolución 20223040037985 del 1 de julio de 2022 “Por medio de la cual se establecen equivalencias para la clasificación de los vehículos contenida en la Resolución Consolidada UNECE/TRANS/WP.29/78 Rev.6 (...)”, los segmento de vehículos incluidos acá son:</p>
                                        <ul>
                                            <li>M1: vehículos utilizados para el transporte de pasajeros, hasta de ocho asientos además del asiento del conductor. (Automóvil, camioneta, campero).</li>
                                            <li>N1: vehículos para el transporte de mercancías y cuya masa máxima no exceda 3.5 toneladas. (Camioneta)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="cpnt cpnt-items cpnt-items-oficial">

                        <div class="item-metas item-metas-oficials">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/web/sites/default/files/cybe/17-07-2024/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="rgba(77, 84, 31, 1)" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">1</text>
                            </svg>
                            <p class="paragraph ph-1">A partir de 2023, el registro de vehículos oficiales (automóviles, camperos y camionetas) será exclusivamente de cero y bajas emisiones. </p>
                        </div>
                        <div class="item-metas item-metas-oficials">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/web/sites/default/files/cybe/17-07-2024/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="rgba(77, 84, 31, 1)" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">2</text>
                            </svg>
                            <p class="paragraph ph-1">Para 2028 el 100% de la flota oficial propia o contratada de uso de las entidades distritales para transporte de pasajeros de tipología automóvil, campero y/o camioneta, será cero emisiones.</p>
                        </div>

                    </div>
                </div>
                <div id="tab-oficial-2" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-oficial cpnt-head-oficial-incentivos">
                        <h3 class="title title-type-2">Incentivos para vehículos de la flota oficial</h3>
                        <p class="paragraph ph-1">Cada producto incluye las acciones esperadas que convierten una insumos y gestiones en bienes, servicios para lograr la transición de cada uno de estos modos de transporte.</p>
                    </div>

                    <div class="cpnt cpnt-incentivos">

                        <!-- collapse_inceoficial -->
                        <div class='panel-group' id='accordion_inceoficial' role='tablist ' aria-multiselectable='true'>

                            <!-- collapse elecoficial -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_elecoficial'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_inceoficial' href='#collapse_elecoficial' aria-expanded='false' aria-controls='collapse_elecoficial'>
                                            Eléctrico
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_elecoficial' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_elecoficial' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-elecoficial'>

                                            <div class="items-incentivo">

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">0%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Gravamen arancelario del cero por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">maximo del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">-60%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>


                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de restricción de pico y placa en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 248 de 2016</a><br>
                                                        <a href="">Decreto 003 de 2023</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio para estacionamiento</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">hora gratis de parqueo en vía en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Zona de parqueo pago</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">SOAT</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">10%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Revisión técnico mecánica</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">30%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- collapse hibrioficial -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_hibrioficial'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_inceoficial' href='#collapse_hibrioficial' aria-expanded='false' aria-controls='collapse_hibrioficial'>
                                            Hibrido
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_hibrioficial' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_hibrioficial' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-hibrioficial'>

                                            <div class="items-incentivo">


                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Gravamen arancelario del cinco por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>


                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>-40%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p>Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p>Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p>de restricción de pico y placa en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 003 de 2023</a>
                                                    </span>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <!-- /#fin _inceoficial -->

                    </div>
                </div>
                <div id="tab-oficial-3" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-oficial cpnt-head-oficial-clave">
                        <h3 class="title title-type-2">Productos clave</h3>
                        <p class="paragraph ph-1">Cada producto incluye las acciones esperadas que convierten una insumos y gestiones en bienes, servicios para lograr la transición de cada uno de estos modos de transporte.</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <h4 class="title title-type-3">Actividades de promoción para la operación de vehículos de cero emisiones en las entidades del Distrito.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Consiste en acompañar técnicamente a las personas líderes de los procesos de compra y contratación de las entidades de estas flotas, con el objetivo de facilitar la transición y romper los mitos o el desconocimiento que hay alrededor de estas tecnologías.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/oficial_1.png" alt="imagen ">
                                <figcaption>
                                    <p>Foto: Secretaría Distrital de Movilidad</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Fomento de la flota oficial especializada de cero y bajas emisiones.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Se llevarán a cabo estudios técnicos que faciliten la adquisición de estas tecnologías y permitan entender el potencial de ascenso tecnológico de los vehículos que tienen funciones especializadas como los camiones de bomberos, las ambulancias, la recolección de basuras, entre otros.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/oficial_2.png" alt="imagen ">
                                <figcaption>
                                    <p>Foto: Secretaría Distrital de Movilidad</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div id="tab-oficial-4" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-oficial cpnt-head-oficial-clave">
                        <h3 class="title title-type-2">Recomendaciones para la transición en el sector público</h3>
                        <p class="paragraph ph-1">Aquí se encuentran algunas de las acciones que pueden fomentar las Entidades para la transformación hacia una movilidad más eficiente.</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <p class="paragraph ph-1">Optimizar del uso de Ios vehículos, mediante Ia implementación de medidas como:</p>
                            <ul>
                                <li>Promocionar la economía colaborativa (carro compartido).</li>
                                <li>Aumentar la ocupación vehicular.</li>
                                <li>Evaluar el tamaño actual de Ia flota vehicular con el fin de evitar que esta crezca innecesariamente.</li>
                                <li>Reducir el tamaño de los vehículos buscando que consuman menos combustible.</li>
                                <li>Reducir los tiempos muertos y de parqueo.</li>
                                <li>Evitar congestionar las vías aledañas.</li>
                            </ul>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/oficial_3.png" alt="imagen ">
                                <figcaption>
                                    <p>Fuente: Secretaría Distrital de Movilidad.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="group-data">
                            <p class="paragraph ph-1">Acciones con los funcionarios y colaboradores de las entidades:</p>
                            <ul>
                                <li>Establecer al interior de las entidades campañas para promover Ia conducción eficiente, Ia educación vial y Ia conducción segura de la bicicleta en los servidores públicos.</li>
                                <li>Disponer de canales o mecanismos de retroalimentación, mediante buzones de propuestas, ejercicios de co-creación y concursos de ideas para incentivar el uso de tecnologías limpias.</li>
                                <li>Incentivar el uso de medios alternativos como la bicicleta, patineta, caminata y otras alternativas de movilidad sostenible entre sus colaboradores y directivos, en articulación con el Plan Integral de Movilidad Sostenible de la entidad.</li>
                            </ul>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/oficial_4.png" alt="imagen ">
                                <figcaption>
                                    <p>Fuente: Secretaría Distrital de Movilidad.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="group-data">
                            <p class="paragraph ph-1">Y para impulsar el reemplazo tecnológico de vehículos oficiales a través de los procesos de contratación o adquisición:</p>
                            <ul>
                                <li>Vincular al sector privado en la generación de incentivos a las entidades y a los colaboradores (tasas diferenciales, seguros, mayor oferta, etc).</li>
                                <li>Explorar y promover esquemas de compra conjunta para aprovechar economías de escala.</li>
                                <li>Divulgar las mejores prácticas y resultados obtenidos por entidades que iniciaron la transición hacia tecnologías vehiculares de cero emisiones.</li>
                                <li>Promover la instalación de cargadores de vehículos eléctricos en entidades distritales.</li>
                                <li>Adelantar procesos de selección destinados a la adquisición o contratación en cualquier modalidad de vehículos de uso de las entidades que incentiven el uso de tecnologías de bajas y cero emisiones.</li>
                            </ul>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/oficial_5.png" alt="imagen ">
                                <figcaption>
                                    <p>Fuente: Secretaría Distrital de Movilidad.</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bloque de información relacionada al segmento publico     -->
        <div class="pills pills-4 pills-publico">

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-publico-1">Metas</a></li>
                <li><a data-toggle="pill" href="#tab-publico-3">Productos clave</a></li>
                <li><a data-toggle="pill" href="#tab-publico-4">Rutas Eléctricas</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab-publico-1" class="tab-pane fade in active">

                    <div class="cpnt cpnt-head cpnt-head-publico cpnt-head-publico-metas">
                        <h3 class="title title-type-2">Metas para la transición del transporte público</h3>
                        <p class="paragraph ph-1">Los vehículos del sistema integrado de transporte público - SITP, ya empezaron su transición hacia la movilidad de cero y bajas emisiones. De los 10.984 vehículos que conforman la flota, 1.485 son eléctricos, que corresponde al 13,5 % de la flota (Fuente: Transmilenio octubre de 2023).</p>
                    </div>

                    <div class="cpnt cpnt-collapse cpnt-collapse-publico">

                        <!-- collapse metas_publico -->
                        <div class=''>
                            <div class='panel-heading' role='tab' id='heading_metas_publico'>
                                <h4 class='panel-title'>
                                    Transporte público (segmentos M2 y M3)
                                    <a role='button' data-toggle='collapse' data-parent='#accordion_metas_publico' href='#collapse_metas_publico' aria-expanded='false' aria-controls='collapse_metas_publico'>
                                        <span class="icon ico1 zoom">
                                            <img width="20px" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/10-09-2024/informacion.png">
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse_metas_publico' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_metas_publico' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='box-metas_publico'>
                                        <p>De acuerdo con la Resolución 20223040037985 del 1 de julio de 2022 “Por medio de la cual se establecen equivalencias para la clasificación de los vehículos contenida en la Resolución Consolidada UNECE/TRANS/WP.29/78 Rev.6 (...)”, los segmento de vehículos incluidos acá son:</p>
                                        <ul>
                                            <li>M2: vehículos utilizados para el transporte de pasajeros, que comprenden más de ocho asientos además del asiento del conductor y que tienen una masa máxima que no excede las 5 toneladas. (Camioneta, camioneta cerrada de servicio mixto, campero, microbús, microbús de servicio mixto, buseta, buseta de servicio mixto).</li>
                                            <li>M3: vehículos utilizados para el transporte de pasajeros, que comprende más de ocho asientos además del asiento del conductor, y que tiene una masa máxima que excede las 5 toneladas. (microbús, microbús de servicio mixto, buseta, buseta de servicio mixto).</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="cpnt cpnt-items cpnt-items-publico">

                        <div class="item-metas item-metas-publicos">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/web/sites/default/files/cybe/17-07-2024/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="rgba(77, 84, 31, 1)" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">1</text>
                            </svg>
                            <p class="paragraph ph-1">En 2023, todos los buses nuevos contratados del SITP serán 100 % cero emisiones.</p>
                        </div>
                        <div class="item-metas item-metas-publicos">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/web/sites/default/files/cybe/17-07-2024/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="rgba(77, 84, 31, 1)" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">2</text>
                            </svg>
                            <p class="paragraph ph-1">A 2039, toda la flota del SITP será cero emisiones.</p>
                        </div>

                    </div>
                </div>

                <div id="tab-publico-3" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-publico cpnt-head-publico-clave">
                        <h3 class="title title-type-2">Productos clave para lograr la transición del Sistema Integrado de Transporte Público</h3>
                        <p class="paragraph ph-1">Cada producto incluye las acciones esperadas que convierten una insumos y gestiones en bienes, servicios para lograr la transición de cada uno de estos modos de transporte.</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <h4 class="title title-type-3">Reposición y renovación por flota de cero emisiones.</h4>
                            <p class="paragraph ph-1">A cargo de Transmilenio. Se buscará que dentro de los nuevos contratos para la vinculación de la flota del sistema sean vehículos de tecnologías de cero emisiones.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/publico_2.png" alt="imagen ">
                                <figcaption>
                                    <p>Fuente: Transmilenio</p>
                                </figcaption>
                            </figure>
                        </div>

                    </div>
                </div>

                <div id="tab-publico-4" class="tab-pane fade">
                    <div class="cpnt cpnt-head cpnt-head-publico cpnt-head-publico-clave">
                        <h3 class="title title-type-2">Rutas eléctricas</h3>
                        <p class="paragraph ph-1">Bogotá cuenta con 1.485 buses eléctricos en el sistema integrado de transporte público - SITP con tecnología eléctrica, siendo una de las flotas más grandes de la región. Estas son las rutas de transporte público de cero emisiones que ya circulan en la ciudad.</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <div class="embed-container">
                                <iframe width="940px" height="620px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Información eléctrica del sistema" src="https://movilidadbogota.maps.arcgis.com/apps/instant/interactivelegend/index.html?appid=b6bdb3be323f48acaf9486e6b3b9b573"></iframe>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Bloque de información relacionada al segmento taxi     -->
        <div class="pills pills-5 pills-taxi">

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-taxi-1">Metas</a></li>
                <li><a data-toggle="pill" href="#tab-taxi-2">Incentivos</a></li>
                <li><a data-toggle="pill" href="#tab-taxi-3">Productos clave</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab-taxi-1" class="tab-pane fade in active">

                    <div class="cpnt cpnt-head cpnt-head-taxi cpnt-head-taxi-metas">
                        <h3 class="title title-type-2">Metas para la transición de la flota de taxis</h3>
                        <p class="paragraph ph-1">El servicio de taxi presenta unas características de operación exigentes, que fácilmente sobrepasan los 200 kilómetros de rodamiento diario por vehículo, por lo cual, la implementación de tecnologías de motorización de cero emisiones, es muy apropiada dada su alta exigencia y los nuevos desarrollos en este campo.</p>
                    </div>

                    <div class="cpnt cpnt-collapse cpnt-collapse-taxis">
                        <!-- collapse metas_taxi -->
                        <div class=''>
                            <div class='panel-heading' role='tab' id='heading_metas_taxi'>
                                <h4 class='panel-title'>
                                    Flota de taxis (segmentos M1 y N1)
                                    <a role='button' data-toggle='collapse' data-parent='#accordion_metas_taxi' href='#collapse_metas_taxi' aria-expanded='false' aria-controls='collapse_metas_taxi'>
                                        <span class="icon ico1 zoom">
                                            <img width="20px" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/10-09-2024/informacion.png">
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse_metas_taxi' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_metas_taxi' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='box-metas_taxi'>
                                        <p>De acuerdo con la Resolución 20223040037985 del 1 de julio de 2022 “Por medio de la cual se establecen equivalencias para la clasificación de los vehículos contenida en la Resolución Consolidada UNECE/TRANS/WP.29/78 Rev.6 (...)”, los segmento de vehículos incluidos acá son:</p>
                                        <ul>
                                            <li>M1: vehículos utilizados para el transporte de pasajeros, hasta de ocho asientos además del asiento del conductor. (Automóvil, camioneta, campero).</li>
                                            <li>N1: vehículos para el transporte de mercancías y cuya masa máxima no exceda 3.5 toneladas. (Camioneta)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cpnt cpnt-items cpnt-items-taxi">

                        <div class="item-metas item-metas-taxis">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/web/sites/default/files/cybe/17-07-2024/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="rgba(77, 84, 31, 1)" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">1</text>
                            </svg>
                            <p class="paragraph ph-1">A partir de 2026, el registro de taxis será exclusivamente de cero emisiones. </p>
                        </div>

                        <div class="item-metas item-metas-taxis">
                            <svg version="1.1" baseProfile="full" width="100" height="100" xmlns="/web/sites/default/files/cybe/17-07-2024/Bi1CircleFill.svg">
                                <circle cx="50" cy="50" r="40" fill="rgba(77, 84, 31, 1)" />
                                <text fill="#f5f5f5" font-size="45" font-family="Verdana" x="36" y="68">2</text>
                            </svg>
                            <p class="paragraph ph-1">Para el año 2035, únicamente circularán en la ciudad taxis de cero emisiones.</p>
                        </div>

                    </div>
                </div>

                <div id="tab-taxi-2" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-taxi cpnt-head-taxi-incentivos">
                        <h3 class="title title-type-2">Incentivos para taxis</h3>
                        <p class="paragraph ph-1">Cada producto incluye las acciones esperadas que convierten una insumos y gestiones en bienes, servicios para lograr la transición de cada uno de estos modos de transporte.</p>
                    </div>

                    <div class="cpnt cpnt-items cpnt-incentivos">

                        <!-- collapse_incetaxi -->
                        <div class='panel-group' id='accordion_incetaxi' role='tablist ' aria-multiselectable='true'>

                            <!-- collapse electaxi -->
                            <div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading_electaxi'>
                                    <h4 class='panel-title'>
                                        <a role='button' data-toggle='collapse' data-parent='#accordion_incetaxi' href='#collapse_electaxi' aria-expanded='false' aria-controls='collapse_electaxi'>
                                            Eléctrico
                                        </a>
                                    </h4>
                                </div>
                                <div id='collapse_electaxi' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_electaxi' aria-expanded='false'>
                                    <div class='panel-body'>
                                        <div class='box-electaxi'>

                                            <div class="items-incentivo">

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en Arancel</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">0%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Gravamen arancelario del cero por ciento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 2051 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">IVA</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">5%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">Aplicación de tarifa del 5%</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1819 de 2016</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">maximo del valor comercial</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Descuento en el impuesto vehicular</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">-70%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">en Bogotá por 5 años</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Acuerdo 780 de 2020</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio en circulación</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">Exceptuados</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de restricción de pico y placa en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Decreto 660 de 2001</a><br>
                                                        <a href="">Decreto 475 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio de excepción</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">No paga</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">por acceso al circuito de terminal de transporte salitre</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Distrito</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Beneficio para estacionamiento</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">1</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">hora gratis de parqueo en vía en Bogotá</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Zona de parqueo pago</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">SOAT</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">10%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                                <div class="card-incentivo">
                                                    <span class="tipo-incentivo">
                                                        <p class="ph-summary">Revisión técnico mecánica</p>
                                                    </span>
                                                    <span class="valor-incentivo">
                                                        <p class="ph-summary">30%</p>
                                                    </span>
                                                    <span class="resumen-incentivo">
                                                        <p class="ph-summary">de descuento</p>
                                                    </span>
                                                    <span class="enlace-incentivo">
                                                        <a href="">Ley 1964 de 2019</a>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="tab-taxi-3" class="tab-pane fade">

                    <div class="cpnt cpnt-head cpnt-head-taxi cpnt-head-taxi-clave">
                        <h3 class="title title-type-2">Productos clave</h3>
                        <p class="paragraph ph-1">Cada producto incluye las acciones esperadas que convierten una insumos y gestiones en bienes, servicios para lograr la transición de cada uno de estos modos de transporte.</p>
                    </div>
                    <div class="cpnt cpnt-body">
                        <div class="group-data">
                            <h4 class="title title-type-3">Desincentivos tributarios para los taxis más antiguos.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Se busca generar acciones para motivar el cambio de esta flota hacia tecnologías cero emisiones, que apunten a la mejora del servicio.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/taxi_1.png" alt="imagen ">
                                <figcaption>
                                    <p>Foto: Secretaría Distrital de Movilidad 2023</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Fondo de renovación de taxis por tecnologías cero emisiones.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Se implementarán acciones que faciliten el acceso a financiamiento de esta población objetivo.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/taxi_2.png" alt="imagen ">
                                <figcaption>
                                    <p>Foto: Secretaría Distrital de Movilidad 2023</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Restricciones de circulación con criterios ambientales.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Se pondrán en marcha acciones sobre la circulación de los taxis, en especial para los más contaminantes; al mismo tiempo que se constituyan como incentivos diferenciales para los vehículos taxis de tecnologías cero emisiones. Las restricciones en circulación deberán apuntar a la meta de circulación de vehículos taxi de cero emisiones en 2035.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/taxi_3.png" alt="imagen ">
                                <figcaption>
                                    <p>Foto: Secretaría Distrital de Movilidad 2023</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="group-data">
                            <h4 class="title title-type-3">Zonas amarillas preferenciales para taxis cero emisiones.</h4>
                            <p class="paragraph ph-1">A cargo de la Secretaría de Movilidad. Se localizarán lugares exclusivos para la recarga de los vehículos taxis, que también funcionarán como espacios de parqueo.</p>
                            <figure>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/taxi_4.png" alt="imagen ">
                                <figcaption>
                                    <p>Foto: Secretaría Distrital de Movilidad 2023</p>
                                </figcaption>
                            </figure>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<!-- Fin Set -->

<script>
    const datos = 0;

    document.getElementById('select-obj').addEventListener('change', function() {
        id = document.getElementById('select-obj').selectedIndex;
        cargarDatos(id);

    });

    function cargarDatos(id) {


        let validacion = document.querySelector('.visible');
        if (validacion) {
            validacion.classList.remove('visible');
        }

        let he = document.querySelector('.obj .b1');
        he.classList.add('active');
        let bx;
        bx = document.querySelector(`.pills-${id}`);
        bx.classList.add('visible');

        datos = "";

    }
</script>
