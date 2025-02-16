@extends('welcome')
@section('title','tecnologias')
@section('contenido')

<link rel="stylesheet" href="{{ asset('css/cybe.css') }}">

<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>

<!-- Set tecnologias -->
<div class="set-wrapper tecnologias">

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
                    <li><a class="activado" href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/por_que">¿Por qué?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/solucion">¿Qué solución proponemos?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/metas">¿Cuáles son nuestras metas?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/tecnologias">¿Cuáles son las tecnologías?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/mitos">Verdades y mitos</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/recursos">Recursos</a></li>
                </ul>

            </div>
        </div>
    </nav>



    <!-- bloque box video-->
    <style>
        .set-wrapper .box-video {
            grid-area: box-video;
            background-color: rgba(77, 84, 31, 1);
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'texto'
                'video';
        }

        @media(min-width:768px) {
            .set-wrapper .box-video {
                grid-template-columns: 60% 40%;
                grid-template-areas:
                    'video texto';
            }
        }

        .box-video .cmpnt-video {
            padding: 1em;
            grid-area: video;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        @media(min-width:768px) {
            .box-video .cmpnt-video {
                padding: 4em;
            }

        }

        .box-video .cmpnt-video .video {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden;
            background-color: #000;
            border-radius: 4px;
            box-shadow: 0 0 8px 0 rgba(0, 0, 0, .2);
        }

        .box-video .cmpnt-texto {
            padding: 4em 2em 1em 2em;
            grid-area: texto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        @media(min-width:768px) {
            .box-video .cmpnt-texto {
                padding: 4em 4em 4em 0;
            }
        }

        .box-video .cmpnt-texto .title-type-enfasis-1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 38px;
            font-weight: 600;
            text-align: center;
            line-height: 1;
            color: #BED000;
            margin: 0;
            padding: 0;
            text-transform: uppercase;
            letter-spacing: 2;
        }

        .box-video .cmpnt-texto .title-type-enfasis-2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 38px;
            font-weight: 300;
            text-align: center;
            line-height: 1;
            color: #fff;
            margin: 0;
            margin-top: -6px;
            padding: 0;
            text-transform: uppercase;
        }

        .box-video .cmpnt-texto .paragraph {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: 300;
            text-align: center;
            line-height: 1.1;
            color: #fff;
            margin: 24px 14px;
            padding: 0;
            max-width: 400px;
        }

        @media(min-width:768px) {
            .box-video .cmpnt-texto .paragraph {
                text-align: left;
            }
        }
    </style>
    <!-- bloque box intro-tech-->
    <style>
        .set-wrapper .box-intro-tech {
            grid-area: box-intro-tech;
            background-color: rgba(77, 84, 31, 1);
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'titulo'
                'cifra1'
                'cifra2'
                'parrafo';
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        @media(min-width:768px) {
            .set-wrapper .box-intro-tech {
                grid-template-columns: 60% 40%;
                grid-template-rows: auto;
                grid-template-areas:
                    'titulo titulo'
                    'parrafo parrafo';
                padding: 3rem;
                background-color: rgba(77, 84, 31, 1);
            }
        }


        .set-wrapper .box-intro-tech .cmpnt-title {
            grid-area: titulo;
            padding: 32px 16px 8px 16px;
        }

        .box-intro-tech .cmpnt-title .title {
            font-family: 'Montserrat', sans-serif;
            color: #ffffff;
            font-size: 24px;
            font-weight: 700;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .box-intro-tech .cmpnt-title .title-type-tech-1 {
            color: #ffffff;
        }

        @media(min-width:768px) {
            .box-intro-tech .cmpnt-title .title-type-tech-1 {
                color: #ffffff;
                font-weight: 500;
                font-family: 'Montserrat', sans-serif;

            }
        }

        .set-wrapper .box-intro-tech .cmpnt-cifras {
            grid-area: parrafo;
            padding: 1.5rem 1.5rem 1.5rem 1.5rem;
        }

        .box-intro-tech .cmpnt-cifras .paragraph {
            grid-area: parrafo;
            font-family: 'Montserrat', sans-serif;
            color: #ffffff;
            font-size: 14px;
            line-height: 1.5;
            margin: 8px;
            padding: 0;
            text-align: justify;
            font-weight: normal;
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
            color: #BED000FF;
            font-size: 48px;
            font-weight: 700;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        @media(min-width:768px) {
            .box-intro-tech .cmpnt-cifra span {
                color: #BED000FF;
            }
        }

        .box-intro-tech .cmpnt-cifra p {
            font-family: 'Montserrat', sans-serif;
            color: #E3E8AD;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.2;
            margin: 8;
            padding: 0;
            text-align: center;
            margin: 0 2em;
        }

        @media(min-width:768px) {
            .box-intro-tech .cmpnt-cifra p {
                color: #ffffff;
            }
        }
    </style>

    <div class="box box-intro-tech">
        <div class="cmpnt cmpnt-title">
            <h3 class="title title-type-tech-1 title-id-1">¿Por qué necesitamos una movilidad limpia?</h3>
        </div>
        <div class="cmpnt cmpnt-cifras">
            <p class="paragraph ph1">Según la Organización Mundial de la Salud (OMS), en el mundo, cerca de <strong>7 millones</strong> de personas mueren cada año por exposición al aire contaminado. En Bogotá más de <strong>2.000 muertes al año</strong> son atribuidas a esta misma causa.</p>
            <p class="paragraph ph2">En Bogotá, el <b>65% de los viajes</b> se realizan en medios de transporte motorizados que utilizan <b>combustibles como gasolina, diésel y gas natural vehicular.</b> Estos vehículos son responsables de la emisión de contaminantes locales, como el material particulado que contribuye a la contaminación del aire, así como de gases de efecto invernadero que aceleran el cambio climático.</p>
            <p class="paragraph ph3">Ante esta realidad, es fundamental adoptar estrategias de <b>movilidad multimodal, inclusiva y sostenible</b> que mejoren la calidad de vida de los ciudadanos y reduzcan el impacto ambiental. Apostar por soluciones que integren <b>diversos modos de transporte</b> contribuye a un futuro más limpio y saludable para Bogotá.</p>
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
            color: #BED000;
            opacity: 1;
            width: 10%;
        }

        .box-carousel .carousel-control:focus,
        .box-carousel .carousel-control:hover {
            color: #4d541f;
            opacity: 0.9;
        }

        .box-carousel .carousel-indicators {
            bottom: 0px !important;
            position: absolute;
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
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
        }

        .box-carousel .carousel-indicators li {
            background-color: #4d541f;
            border-color: #4d541f;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
        }

        .box-carousel .carousel-indicators .active {
            background-color: #BED000;
            border-color: #BED000;
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

        .box-carousel-control .item {
            max-height: 600px;
        }

        .box-carousel-control .item .enfasis .enfasis-carousel {
            font-family: 'Montserrat', sans-serif;
            color: #BED000;
            font-size: 24px;
            font-weight: 700;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .box-carousel-control .item .enfasis {
            position: relative;
            bottom: 0px;
            left: 0px;
            right: 0px;
            background: #4d541f;
            color: #ffffff;
            padding: 1em;
            margin-bottom: 40px;
        }

        @media(min-width:768px) {
            .box-carousel-control .item .enfasis {
                /* position: absolute; */
                bottom: 250px;
                left: 120px;
                width: 400px;
                background: #4d541f90;
                color: #ffffff;
                padding: 16px;
                border-radius: 6px;
            }

            .box-carousel-control .carousel-indicators{
                bottom: 40px !important;
            }

        }
    </style>

    <div class="box-carousel box-carousel-tech">

        <!-- Component Box Carousel control-->
        <div class="box-carousel box-carousel-control">

            <div id="carousel-control" class="carousel slide" data-ride="carousel-control">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-control" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-control" data-slide-to="1"></li>
                    <li data-target="#carousel-control" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/incendio.png" class="img-responsive w-100" alt="Foto de cielo de Bogotá contaminado" title="Image: Foto de cielo de Bogotá contaminado">
                        <div class="enfasis">
                            <span class="enfasis-carousel">Cambio climático</span>
                            <p>40 % de las emisiones efecto invernadero son debido al sector transporte en Bogotá. Fuente: Inventario de Emisiones de la Secretaría de Ambiente - 2022.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/09-09-2024/contaminacion3_a.png" class="img-responsive w-100" alt="Foto de cielo de Bogotá contaminado" title="Image: Foto de cielo de Bogotá contaminado">
                        <div class="enfasis">
                            <span class="enfasis-carousel">Contaminación del aire</span>
                            <p>En Bogotá se emiten al año 4628 t de material particulado PM 2.5 al año, de las cuales el 31 % son debido a la combustión de vehículos en Bogotá. Fuente: Inventario de Emisiones de la Secretaría de Ambiente - 2022.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/contaminacion_2.png" class="img-responsive w-100" alt="Foto de cielo de Bogotá contaminado" title="Image: Foto de cielo de Bogotá contaminado">
                        <div class="enfasis">
                            <span class="enfasis-carousel">Contaminación del aire</span>
                            <p>22% de las emisiones básicas de material particulado PM2.5. son producidas por fuentes asociadas al transporte. Fuente: Inventario de emisiones. Secretaría de Ambiente 2021.</p>
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-control" role="button" data-slide="prev" title="Anterior">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-control" role="button" data-slide="next" title="Siguiente">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <style>
                .set-wrapper .box-carousel-control {
                    grid-area: box-carousel-control;
                    margin-bottom: 48px;
                    font-size: 16px;
                }
            </style>




        </div>

    </div>
    <!-- box b-n -->
    <style>
        .set-wrapper .b-n {
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
