@extends('welcome')
@section('title','tecnologias')
@section('contenido')

<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>

<link rel="stylesheet" href="{{ asset('css/cybe.css') }}">


<!-- Set tecnologias -->
<div class="set-wrapper tecnologias">

    <!-- bloque box header-->
    <div class="box box-header">
        <div class="cmpnt cmpnt-vacio">
        </div>
        <div class="cmpnt cmpnt-logo-ppal">
            <div class="logo logo-ppal">
                <img class="img-responsive w-100" src="/images/cybe/logo_cybe_v3.png" alt="logo Movilidad de Cero y Bajas Emisiones">
            </div>
            <p class="paragraph ph-type-ppal ph-id-1">Conoce la apuesta de Bogotá por la <strong>Movilidad Motorizada de
                    Cero y
                    Bajas Emisiones</strong></p>
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
                    <li><a href="http://sdm.wdo:8000/cybe/home">Inicio</a></li>
                    <li><a href="http://sdm.wdo:8000/cybe/cambio">¿Por qué?</a></li>
                    <li><a href="http://sdm.wdo:8000/cybe/solucion">¿Qué solución proponemos?</a></li>
                    <li><a href="http://sdm.wdo:8000/cybe/tecnologias">¿Cuáles son las tecnologías?</a></li>
                    <li><a href="http://sdm.wdo:8000/cybe/mitos">Verdades y mitos</a></li>
                    <li><a href="http://sdm.wdo:8000/cybe/recursos">Recursos</a></li>
                    <!-- <li><a href="http://sdm.wdo:8000/cybe/metas">¿Cómo lograr la transición?</a></li> -->
                </ul>

            </div>
        </div>
    </nav>


    <!-- bloque box intro-tech-->
    <style>
        .set-wrapper .box-intro-tech {
            grid-area: box-intro-tech;
            background-color: #66e026;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'titulo'
                'cifra1'
                'cifra2';
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        @media(min-width:768px) {
            .set-wrapper .box-intro-tech {
                grid-template-columns: 40% 30% 30%;
                grid-template-rows: auto;
                grid-template-areas:
                    'titulo titulo titulo'
                    'parrafo cifra1 cifra2';
                padding: 1.5rem 1.5rem 1.5rem 1.5rem;
                background-color: #1c2046;
            }
        }

        .set-wrapper .box-intro-tech .cmpnt-title {
            grid-area: titulo;
            padding: 3em;
        }

        .box-intro-tech .cmpnt-title .title {
            font-family: 'Montserrat', sans-serif;
            color: #1c2046;
            font-size: 24px;
            font-weight: 700;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .box-intro-tech .cmpnt-title .title-type-tech-1 {
            color: #1c2046;
        }

        @media(min-width:768px) {
            .box-intro-tech .cmpnt-title .title-type-tech-1 {
                color: #ffffff;
                font-weight: 500;
                font-family: 'Montserrat', sans-serif;

            }
        }

        .set-wrapper .box-intro-tech .cmpnt-cifras {
            padding: 1.5rem 1.5rem 1.5rem 1.5rem;
        }

        .box-intro-tech .cmpnt-cifras .paragraph {
            grid-area: parrafo;
            font-family: 'Montserrat', sans-serif;
            color: #1c2046;
            font-size: 16px;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            text-align: center;
            font-weight: 400;
        }

        @media(min-width:768px) {
            .box-intro-tech .cmpnt-cifras .paragraph {
                font-weight: 500;
                color: #ffffff;
            }
        }

        .set-wrapper .box-intro-tech .cmpnt-cifra {
            padding: 1.5rem 1.5rem 1.5rem 1.5rem;
        }

        .box-intro-tech .cmpnt-cifra span {
            font-family: 'Montserrat', sans-serif;
            color: #1c2046;
            font-size: 48px;
            font-weight: 700;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        @media(min-width:768px) {
            .box-intro-tech .cmpnt-cifra span {
                color: #66e026;
            }
        }

        .box-intro-tech .cmpnt-cifra p {
            font-family: 'Montserrat', sans-serif;
            color: #1c2046;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.2;
            margin: 0;
            padding: 0;
            text-align: center;
            margin: 0 2em;
        }

        @media(min-width:768px) {
            .box-intro-tech .cmpnt-cifra p {
                color: #ffffff;
            }
        }

        .box-intro-tech .cmpnt-cifra-1 {
            grid-area: cifra1;
        }

        .box-intro-tech .cmpnt-cifra-2 {
            grid-area: cifra2;
        }
    </style>

    <div class="box box-intro-tech">
        <div class="cmpnt cmpnt-title">
            <h3 class="title title-type-tech-1 title-id-1">¿Por qué necesitamos una movilidad limpia?</h3>
        </div>
        <div class="cmpnt cmpnt-cifras">
            <p class="paragraph ph-type-1 ph-id-t2">La movilidad motorizada en Bogotá, se basa en vehículos de combustión (gasolina, diésel, GNV, etc), que terminan generando:</p>
        </div>
        <div class="cmpnt-cifra cmpnt-cifra-1">
            <span>22%</span>
            <p>de las emisiones básicas de material particulado PM2.5. Fuente: Inventario de emisiones. Secretaría de Ambiente 2021.</p>
        </div>
        <div class="cmpnt-cifra cmpnt-cifra-2">
            <span>40%</span>
            <p>de los gases de efecto invernadero generado en la sociedad.</p>
        </div>
    </div>


    <!-- Component Box Carousel tech-->
    <style>
        .set-wrapper .box-carousel-tech {
            grid-area: box-carousel-tech;
            margin-bottom: 48px;
            font-size: 16px;
        }

        .carousel-inner figure img {
            object-fit: cover;
            width: 100% !important;
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

        .box-carousel-tech .item {
            position: relative;
        }

        .box-carousel-tech .item .enfasis .enfasis-carousel {
            font-family: 'Montserrat', sans-serif;
            color: #ffe145;
            font-size: 24px;
            font-weight: 700;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .box-carousel-tech .item .enfasis {
            position: relative;
            bottom: 0px;
            left: 0px;
            right: 0px;
            background: #25252590;
            color: #ffffff;
            padding: 1em;
            margin-bottom: 40px;
        }

        @media(min-width:768px) {
            .box-carousel-tech .item .enfasis {
                position: absolute;
                bottom: 30px;
                left: 30px;
                width: 400px;
                background: #25252590;
                color: #ffffff;
                padding: 1em;
                border-radius: 6px;
            }

        }
    </style>

    <div class="box-carousel box-carousel-tech">

        <div id="carousel-tech" class="carousel slide" data-ride="carousel-tech">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-tech" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-tech" data-slide-to="1"></li>
                <li data-target="#carousel-tech" data-slide-to="2"></li>
                <li data-target="#carousel-tech" data-slide-to="3"></li>
                <li data-target="#carousel-tech" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <picture>
                        <img src="/images/cybe/contaminacion.png" class="img-responsive w-100" alt="Foto de cielo de Bogotá contaminado" title="Image: Foto de cielo de Bogotá contaminado">
                        <div class="enfasis">
                            <span class="enfasis-carousel">Contaminación del aire</span>
                            <p>En Bogotá, en el año 2019 murieron más de 2.300 personas por enfermedades asociadas a la contaminación del aire. Fuente: Secretaría Distrital de Ambiente, 2021.  Foto: Bomberos de Bogotá</p>
                        </div>
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <img src="/images/cybe/contaminacion_2.png" class="img-responsive w-100" alt="Foto de cielo de Bogotá contaminado" title="Image: Foto de cielo de Bogotá contaminado">
                        <div class="enfasis">
                            <span class="enfasis-carousel">Contaminación del aire</span>
                            <p>En Bogotá, en el año 2019 murieron más de 2.300 personas por enfermedades asociadas a la contaminación del aire. Fuente: Secretaría Distrital de Ambiente, 2021.  Foto: Bomberos de Bogotá</p>
                        </div>
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <img src="/images/cybe/incendio.png" class="img-responsive w-100" alt="Foto de cielo de Bogotá contaminado" title="Image: Foto de cielo de Bogotá contaminado">
                        <div class="enfasis">
                            <span class="enfasis-carousel">Cambio climático</span>
                            <p>La ciudad genera el 4.42% de las emisiones de Gases de Efecto Invernadero del país, generando 13.419,6 Kilo toneladas de CO2 equivalente (t CO2e). Fuente: Inventario departamental de gases efecto invernadero y carbono negro - 2018. Gobierno de Colombia. Foto: Bomberos de Bogotá</p>
                        </div>
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <img src="/images/cybe/incendio_2.png" class="img-responsive w-100" alt="Foto de cielo de Bogotá contaminado" title="Image: Foto de cielo de Bogotá contaminado">
                        <div class="enfasis">
                            <span class="enfasis-carousel">Cambio climático</span>
                            <p>La ciudad genera el 4.42% de las emisiones de Gases de Efecto Invernadero del país, generando 13.419,6 Kilo toneladas de CO2 equivalente (t CO2e). Fuente: Inventario departamental de gases efecto invernadero y carbono negro - 2018. Gobierno de Colombia. Foto: Bomberos de Bogotá</p>
                        </div>
                    </picture>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-tech" role="button" data-slide="prev" title="Anterior">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-tech" role="button" data-slide="next" title="Siguiente">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <!-- box b-n -->
    <style>
        .set-wrapper .b-n{
            grid-area: b-n;
            margin: 16px 0px;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: normal;
            text-align: left;
        }
    </style>
    <div class="box b-n">
        <div class="cpnt cpnt-paragraph">
            <p>Puedes consultar más información sobre cifras de contaminación en la ciudad, en <a href="https://experience.arcgis.com/experience/52ee7be2e8274fb89b85d092eb602925/page/INICIO/?data_id=dataSource_7-181acb8c00c-layer-20%3A11&draft=true&views=NI%C3%91AS-Y-NI%C3%91OS-PRIMERO%2CACB-2022">Recorre Bogotá en Mapas, sección Ambiente</a></p>
        </div>
    </div>


</div>
<!-- Fin Set -->
