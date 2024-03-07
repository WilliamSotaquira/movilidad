@extends('welcome')
@section('title','tecnologias')
@section('contenido')

<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>


<!-- Set tecnologias -->
<div class="set-wrapper tecnologias">

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
        @media(min-width:768px){
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
        @media(min-width:768px){
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
            <p class="paragraph ph-type-1 ph-id-t2">La movilidad motorizada en Bogotá, se basa en vehículos de combustión que utilizan combustibles fósiles (gasolina, diésel, GNV, etc), y es la principal responsable de esta problemática, generando:</p>
        </div>
        <div class="cmpnt-cifra cmpnt-cifra-1">
            <span>43%</span>
            <p>de las emisiones básicas de material particulado (principal contaminante del aire en Bogotá).</p>
        </div>
        <div class="cmpnt-cifra cmpnt-cifra-2">
            <span>48%</span>
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
                            <p>En Bogotá, en el año 2019 murieron más de 2.300 personas por enfermedades asociadas a la contaminación del aire (SDA, 2021). Foto: Bomberos de Bogotá</p>
                        </div>
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <img src="/images/cybe/contaminacion_2.png" class="img-responsive w-100" alt="Foto de cielo de Bogotá contaminado" title="Image: Foto de cielo de Bogotá contaminado">
                        <div class="enfasis">
                            <span class="enfasis-carousel">Contaminación del aire</span>
                            <p>En Bogotá, en el año 2019 murieron más de 2.300 personas por enfermedades asociadas a la contaminación del aire (SDA, 2021). Foto: Bomberos de Bogotá</p>
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


</div>
<!-- Fin Set -->
