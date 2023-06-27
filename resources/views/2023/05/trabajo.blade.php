@extends('welcome')
@section('title','trabajo')
@section('contenido')

<!-- Set trabajo -->
<div class="set-wrapper trabajo">

    <!-- Sección box title-ppal -->
    <div class="box-title-ppal">
        <div class="imagen img-logo">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/image_trabajo_980x256_logo.webp" alt="Logo Trabajo Inteligente" title="Logo Trabajo Inteligente">
        </div>
    </div>
    <style>
        .set-wrapper .box-title-ppal {
            grid-area: box-title-ppal;
            padding: 3em 4em 0em 4em;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box-title-ppal .imagen {
            max-width: 500px;
            height: 150px;
        }

        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }
    </style>


    <hr>
    <!-- Sección box carousel -->
    <div class="box-carousel-ppal">

        <!-- carousel xs -->
        <div class="carousel-xs">
            <div id="carrusel_avisos_xs" class="carousel slide" data-ride="carousel" data-interval="12000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carrusel_avisos_xs" title="imagen 1" data-slide-to="0" class="active"></li>
                    <li data-target="#carrusel_avisos_xs" title="imagen 2" data-slide-to="1"></li>
                    <li data-target="#carrusel_avisos_xs" title="imagen 3" data-slide-to="2"></li>
                    <li data-target="#carrusel_avisos_xs" title="imagen 4" data-slide-to="3"></li>
                    <li data-target="#carrusel_avisos_xs" title="imagen 5" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner zoom">

                    <div class="item active">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/image_trabajo_980x654_001.webp" alt="Fotografía entorno trabajo inteligente" title="Fotografía entorno trabajo inteligente">
                    </div>

                    <div class="item">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/image_trabajo_980x654_002.webp" alt="Fotografía entorno trabajo inteligente" title="Fotografía entorno trabajo inteligente">
                    </div>

                    <div class="item">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/image_trabajo_980x654_003.webp" alt="Fotografía entorno trabajo inteligente" title="Fotografía entorno trabajo inteligente">
                    </div>
                    <div class="item">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-06-2023/image_trabajo_980x654_006.webp" alt="Fotografía entorno trabajo inteligente" title="Fotografía entorno trabajo inteligente">
                    </div>
                    <div class="item">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-06-2023/image_trabajo_980x654_007.webp" alt="Fotografía entorno trabajo inteligente" title="Fotografía entorno trabajo inteligente">
                    </div>


                </div>

                <!-- Controls -->
                <a class="left carousel-control zoom" href="#carrusel_avisos_xs" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" title="Anterior"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control zoom" href="#carrusel_avisos_xs" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" title="Siguiente"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- carousel lg -->
        <div class="carousel-lg">
            <div id="carrusel_avisos_lg" class="carousel slide" data-ride="carousel" data-interval="10000">
                <!-- Indicators -->
                <ol class="carousel-indicators zoom">
                    <li data-target="#carrusel_avisos_lg" title="imagen 1" data-slide-to="0" class="active"></li>
                    <li data-target="#carrusel_avisos_lg" title="imagen 2" data-slide-to="1"></li>
                    <li data-target="#carrusel_avisos_lg" title="imagen 3" data-slide-to="2"></li>
                    <li data-target="#carrusel_avisos_lg" title="imagen 4" data-slide-to="3"></li>
                    <li data-target="#carrusel_avisos_lg" title="imagen 5" data-slide-to="4"></li>
                    <li data-target="#carrusel_avisos_lg" title="imagen 6" data-slide-to="5"></li>
                    <li data-target="#carrusel_avisos_lg" title="imagen 7" data-slide-to="6"></li>
                    <li data-target="#carrusel_avisos_lg" title="imagen 8" data-slide-to="7"></li>
                    <li data-target="#carrusel_avisos_lg" title="imagen 9" data-slide-to="8"></li>
                </ol>


                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/image_trabajo_980x400_003.webp" alt="Fotografía entorno trabajo inteligente" title="Fotografía entorno trabajo inteligente">
                    </div>

                    <div class="item">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/image_trabajo_980x400_001.webp" alt="Fotografía entorno trabajo inteligente" title="Fotografía entorno trabajo inteligente">
                    </div>

                    <div class="item">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/image_trabajo_980x400_002.webp" alt="Fotografía entorno trabajo inteligente" title="Fotografía entorno trabajo inteligente">
                    </div>

                    <div class="item">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/image_trabajo_980x400_004.webp" alt="Fotografía entorno trabajo inteligente" title="Fotografía entorno trabajo inteligente">
                    </div>

                    <div class="item">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/image_trabajo_980x400_005.webp" alt="Fotografía entorno trabajo inteligente" title="Fotografía entorno trabajo inteligente">
                    </div>

                    <div class="item">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/image_trabajo_980x400_006.webp" alt="Fotografía entorno trabajo inteligente" title="Fotografía entorno trabajo inteligente">
                    </div>

                    <div class="item">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/image_trabajo_980x400_007.webp" alt="Fotografía entorno trabajo inteligente" title="Fotografía entorno trabajo inteligente">
                    </div>
                    <div class="item">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-06-2023/image_trabajo_980x400_008.webp" alt="Fotografía entorno trabajo inteligente" title="Fotografía entorno trabajo inteligente">
                    </div>
                    <div class="item">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-06-2023/image_trabajo_980x400_009.webp" alt="Fotografía entorno trabajo inteligente" title="Fotografía entorno trabajo inteligente">
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control zoom" href="#carrusel_avisos_lg" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" ar aria-hidden="true" title="Anterior"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control zoom" href="#carrusel_avisos_lg" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" title="Siguiente"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
    <style>
        .set-wrapper .box-carousel-ppal {
            grid-area: box-carousel;
        }

        :root {
            --color-primario: #4c531e;
            --color-secundario: #879225;
            --color-terciario: #bed000;
            --color-gris: #e5e5e5;
            --color-blanco: #ffffff;
            --color-negro: #191919;
            --color-fondo: #333333;
        }

        .region-content {
            padding: 0px;
        }

        .box-carousel-ppal {
            max-width: 980px;
            word-wrap: break-word;
            margin: auto;
            z-index: 0;
            position: relative;

        }

        .w-100 {
            width: 100%;
        }

        .box-carousel-ppal .carousel-control {
            color: var(--color-terciario) !important;
            opacity: 1 !important;
        }

        .box-carousel-ppal .carousel-control.right,
        .carousel-control.left {
            width: 15% !important;
            border-radius: 7px !important;
        }

        .box-carousel-ppal .carousel-control.left {
            background-image: none !important;
            filter: none !important;
            background-repeat: repeat-x;
        }

        .box-carousel-ppal .carousel-control:focus.left,
        .box-carousel-ppal .carousel-control:hover.left {
            background-repeat: repeat-x;
            background-image: -moz-linear-gradient(left, #4C531E65 0%, #FFFFFF00 100%) !important;
            background-image: -webkit-linear-gradient(left, #4C531E65 0%, #FFFFFF00 100%) !important;
            background-image: linear-gradient(to right, #4C531E65 0%, #FFFFFF00 100%) !important;
        }

        .box-carousel-ppal .carousel-control .glyphicon-chevron-left,
        .box-carousel-ppal .carousel-control .icon-prev {
            left: 25% !important;
        }

        .box-carousel-ppal .carousel-control.right {
            background-image: none !important;
            filter: none !important;
            background-repeat: repeat-x;
        }

        .box-carousel-ppal .carousel-control:focus.right,
        .box-carousel-ppal .carousel-control:hover.right {
            background-repeat: repeat-x;
            background-image: -moz-linear-gradient(left, #FFFFFF00 0%, #4C531E65 100%) !important;
            background-image: -webkit-linear-gradient(left, #FFFFFF00 0%, #4C531E65 100%) !important;
            background-image: linear-gradient(to right, #FFFFFF00 0%, #4C531E65 100%) !important;
        }

        .box-carousel-ppal .carousel-control .glyphicon-chevron-right,
        .box-carousel-ppal .carousel-control .icon-prev {
            right: 25% !important;
        }

        .box-carousel-ppal .carousel-control:focus,
        .box-carousel-ppal .carousel-control:hover {
            color: var(--color-primario) !important;
            background: #FFFFFF00;


        }

        .box-carousel-ppal .carousel-control .glyphicon-chevron-left,
        .box-carousel-ppal .carousel-control .glyphicon-chevron-right,
        .box-carousel-ppal .carousel-control .icon-prev {
            color: var(--color-terciario);
            background-color: #4c531e;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-top: -10px;
            font-size: 32px;
        }

        .box-carousel-ppal .carousel-control .glyphicon-chevron-left:hover,
        .box-carousel-ppal .carousel-control .glyphicon-chevron-right:hover,
        .box-carousel-ppal .carousel-control .icon-prev:hover,
        .box-carousel-ppal .carousel-control .glyphicon-chevron-left:focus,
        .box-carousel-ppal .carousel-control .glyphicon-chevron-right:focus,
        .box-carousel-ppal .carousel-control .icon-prev:focus {
            color: var(--color-gris);
            background-color: #333333;


        }

        /* bootstrap.min.css | https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css */

        .box-carousel-ppal .carousel-indicators {
            bottom: 0px !important;
            position: absolute;
            bottom: 10px;
            left: calc(50% - 3.2em);
            z-index: 15;
            width: auto;
            padding-left: 0;
            margin-left: 0%;
            text-align: center;
            list-style: none;
            padding: 0 8px;
            background: var(--color-fondo);
            border-radius: 15px;

        }

        .box-carousel-ppal .carousel-indicators li {
            background-color: var(--color-terciario) !important;
            border: 1px solid var(--color-terciario) !important;
        }

        .box-carousel-ppal .carousel-indicators li:hover {
            background-color: var(--color-blanco) !important;
            border: 1px solid var(--color-terciario) !important;
        }

        .box-carousel-ppal .carousel-indicators .active {
            background-color: var(--color-negro) !important;
        }



        .box-carousel-ppal .carousel-inner .item img {
            max-height: 400px;
            object-fit: cover;
            object-position: center;
            margin: auto;
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
            transform: scale(1.1);
            -moz-transform: scale(1.1);
            /* Firefox */
            -webkit-transform: scale(1.1);
            /* Chrome - Safari */
            -o-transform: scale(1.1);
            /* Opera */
            -ms-transform: scale(1.1);
            /* IE9 */
        }

        @media(max-width:768px) {
            .box-carousel-ppal .carousel-lg {
                position: absolute;
                visibility: hidden;
            }

        }

        @media(min-width:769px) {
            .box-carousel-ppal .carousel-xs {
                position: absolute;
                visibility: hidden;
            }
        }
    </style>
    <hr>

    <!-- Sección box paragraph -->
    <div class="box-paragraph">
        <div class="title title-h3">
            <h3>¿En qué consiste el proyecto?</h3>
            <h4>¡Qué queremos!</h4>
        </div>
        <div class="paragraph ph-1">
            <p>Que la <strong>Secretaría de Movilidad</strong> adopte un modelo de trabajo innovador que beneficie a sus funcionarios, mediante alternativas de jornadas laborales dinámicas, una infraestructura tecnológica adecuada que permita promover altos estándares de productividad, así como la adecuada administración de espacios.</p>
        </div>
    </div>
    <style>
        .set-wrapper .box-paragraph {
            grid-area: box-paragraph;
            margin-top: 40px;
            padding: 0 2em;
        }
    </style>

    <!-- Componente box youtube-paragraph -->
    <div class="box-img-paragraph">
        <div class="imagen img-1">
            <img class="img-responsive w-100 bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-06-2023/image_trabajo_980x654_005.webp" alt="Fotografía de equipo en sala de trabajo inteligente" title="Fotografía de equipo en sala de trabajo inteligente">
        </div>
        <div class="paragraph ph-youtube-paragraph">
            <p><span class="enfasis">Trabajo Inteligente</span> es un modelo de trabajo innovador que beneficie a sus funcionarios, mediante alternativas de jornadas laborales dinámicas, una infraestructura tecnológica adecuada que permita promover altos estándares de productividad, así como la adecuada administración de espacios.</p>
            <p>La Secretaría Distrital de Movilidad mediante la Resolución Número 80010 de 2021 adoptó el modelo de <span class="enfasis">Trabajo Inteligente</span>. Dicho modelo innovador beneficia a sus funcionarios de planta, mediante jornadas laborales dinámicas y mixtas, una infraestructura tecnológica adecuada que promueve altos estándares de productividad, así como una adecuada administración de espacios que fomenta el equilibrio entre la vida laboral, personal y familiar.</p>
        </div>

    </div>
    <style>
        .set-wrapper .box-img-paragraph {
            grid-area: box-img-paragraph;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            justify-content: center;
            align-items: center;
        }

        .box-img-paragraph .video-ppal {
            max-height: 500px;
            overflow: hidden;
        }

        .box-img-paragraph .video-ppal iframe {
            max-height: 500px;
            object-fit: cover;
            object-position: center
        }

        .box-img-paragraph .ph-youtube-paragraph {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box-img-paragraph .ph-youtube-paragraph p {
            font-size: 16px;
            line-height: 1.5;
            text-align: left
        }

        /*
        */
        @media(min-width:768px) {
            .set-wrapper .box-img-paragraph {
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;
            }

            .box-img-paragraph .video-ppal {
                /* max-height: 300px; */
                /* overflow: hidden; */
            }

            .box-img-paragraph .video-ppal img {
                height: 300px;
                object-fit: cover;
                object-position: center
            }

            .box-img-paragraph .ph-youtube-paragraph {
                padding: 3rem;
            }

        }
    </style>

    <!-- Component box title-left -->
    <div class="box-title-left title title-h3">
        <h3>Beneficios</h3>
    </div>
    <style>
        .set-wrapper .box-title-left {
            grid-area: box-title-left;
            padding: 2em 0 0 2em;
        }
    </style>

    <!-- Sección box bar-icons -->
    <div class="box-bar-icons">
        <div class="icon zoom">
            <a target="_blank" rel="noopener noreferrer" title="">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/idea.png" alt="icono de " width="80px">
                <p>Movilidad inteligente</p>
            </a>
        </div>
        <div class="icon zoom">
            <a target="_blank" rel="noopener noreferrer" title="">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/equilibrio.png" alt="icono de " width="80px">
                <p>Calidad de vida</p>
            </a>
        </div>
        <div class="icon zoom">
            <a target="_blank" rel="noopener noreferrer" title="">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/escritorio-de-oficina.png" alt="icono de " width="80px">
                <p>Optimización de espacios</p>
            </a>
        </div>
        <div class="icon zoom">
            <a target="_blank" rel="noopener noreferrer" title="">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/productividad.png" alt="icono de " width="80px">
                <p>Productividad</p>
            </a>
        </div>
        <div class="icon zoom">
            <a target="_blank" rel="noopener noreferrer" title="">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2023/ausencia.png" alt="icono de " width="80px">
                <p>Reducción del ausentismo</p>
            </a>
        </div>
    </div>
    <style>
        .set-wrapper .box-bar-icons {
            grid-area: box-bar-icons;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        .box-bar-icons .icon a {
            padding: 8px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-decoration: none;
        }

        .box-bar-icons .icon a img {
            width: 130px;
            height: 130px;
            object-fit: cover;
            /* border-radius: 50%; */
            /* border: 2px solid rgba(77, 84, 31, 0.5); */
        }

        .box-bar-icons .icon a p {
            margin-top: 24px;
            font-size: 1em;
            font-weight: 600;
            color: #252525;
            line-height: 1;
            text-align: center;
        }


        @media(min-width:768px) {
            .set-wrapper .box-bar-icons {
                padding: 32px;
                grid-template-columns: repeat(5, 20%);
            }
        }
    </style>

    <!-- Sección box vertical-tabs -->
    <div class="box-vertical-tabs">

        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'tab1')" id="defaultOpen">Explicación de zonas</button>
            <button class="tablinks" onclick="openCity(event, 'tab2')">Últimas implementaciones</button>
            <button class="tablinks" onclick="openCity(event, 'tab3')">Primeras implementaciones</button>
            <button class="tablinks" onclick="openCity(event, 'tab4')">Recomendaciones en las salas </button>
        </div>

        <div id="tab1" class="tabcontent">
            <h3>Explicación de zonas</h3>
            <div class="video video-1 video-16by9">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://drive.google.com/file/d/1ZBBIpObEsWhqFLGwFJPVp84V5yTK9nF6/preview" width="640" height="480" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
        <div id="tab2" class="tabcontent">
            <h3>Últimas implementaciones</h3>
            <div class="video video-2 video-16by9">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://drive.google.com/file/d/1rY6QbGzUSxvFJ9K6_r8hcpZZL2qKBf2J/preview" width="640" height="480" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
        <div id="tab3" class="tabcontent">
            <h3>Primeras implementaciones</h3>
            <div class="video video-3 video-16by9">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://drive.google.com/file/d/15BvMGmftsUI8tbAtiChG0FUqG8Yl_uo1/preview" width="640" height="480" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
        <div id="tab4" class="tabcontent">
            <h3>Recomendaciones en las salas </h3>
            <div class="video video-3 video-16by9">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://drive.google.com/file/d/1iPMAaMxfiye-2GDioROl07pXGzIukX_F/preview" width="640" height="480" allow="autoplay"></iframe>
                </div>
            </div>
        </div>

    </div>
    <style>
        .set-wrapper .box-vertical-tabs {
            grid-area: box-vertical-tabs;
            box-sizing: border-box;
            margin-top: 32px;
            display: flow-root;

        }

        /* Style the tab */
        .box-vertical-tabs .tab {
            float: left;
            /* border: 1px solid #ccc; */
            background-color: #ffffff;
            width: 100%;
            /* height: 300px; */
        }

        /* Style the buttons inside the tab */
        .box-vertical-tabs .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: calc(100% - 32px);
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
            margin: 16px;
            border-radius: 4px;
            border: 1px solid rgba(25, 28, 58, 0.1);

        }

        /* Change background color of buttons on hover */
        .box-vertical-tabs .tab button:hover {
            border: 1px solid rgba(25, 28, 58, 0.2);
            background-color: #f5f5f5;
        }

        /* Create an active/current "tab button" class */
        .box-vertical-tabs .tab button.active {
            background-color: rgba(25, 28, 58, 1);
            color: #65df25;
        }

        /* Style the tab content */
        .box-vertical-tabs .tabcontent {
            float: left;
            padding: 32px;
            width: calc(100% - 32px);
            border: 1px solid rgba(25, 28, 58, 0.2);
            height: auto;
            background: #252525;
            border-radius: 4px;
            margin: 16px;
        }

        .box-vertical-tabs h3 {
            margin: 0px;
            padding-bottom: 16px;
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            line-height: 1.5;
            color: #fff;

        }

        @media(min-width:768px) {
            .box-vertical-tabs .tab {
                width: 25%;
            }

            .box-vertical-tabs .tab button {
                margin: 0px 8px 16px 16px;
                width: calc(100% - 24px);

            }

            .box-vertical-tabs .tabcontent {
                width: calc(75% - 24px);
                margin: 0px 16px 16px 8px;
            }

        }
    </style>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");

            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    <!-- Sección box paragraph -->
    <!-- <div class="box-paragraph">

        <div class="paragraph ph-1">
            <p>Que el Sector Movilidad adopte un modelo de trabajo innovador que beneficie a sus funcionarios, mediante alternativas de jornadas laborales dinámicas, una infraestructura tecnológica adecuada que permita promover altos estándares de productividad, así como la adecuada administración de espacios.</p>
            <p>El proyecto de Trabajo Inteligente se encuentra integrado por los siguientes componentes:</p>
            <ul>
                <li>Talento Humano</li>
                <li>Gestión Administrativa</li>
                <li>Infraestructura Tecnológica</li>
            </ul>
            <p>La adopción del modelo de trabajo Inteligente ha permitido actualizaciones a la infraestructura tanto física como tecnológica con que cuenta la Entidad, una nueva forma de administración de los espacios y recursos de manera eficiente, con el fin de fortalecer el bienestar de los funcionarios, creando ambientes óptimos para el desarrollo de sus funciones y a su vez, promoviendo altos estándares de productividad.</p>
        </div>
    </div>
    <style>
        .set-wrapper .box-paragraph {
            grid-area: box-paragraph;
            margin-top: 40px;
            padding: 0 32px;
        }
    </style> -->

    <!-- Sección box counter -->
    <div class="box-counter">

        <div class="title title-h3">
            <h3>Cifras destacadas</h3>
        </div>
        <br>

        <div class="row-cards">
            <div class="column">
                <div class="card">
                    <p><i class="fa fa-user"></i></p>
                    <h3>11</h3>
                    <p>espacios colaborativos</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <p><i class="fa fa-check"></i></p>
                    <h3>846</h3>
                    <p>casilleros disponibles para uso</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <p><i class="fa fa-smile-o"></i></p>
                    <h3>10</h3>
                    <p>espacios de trabajo colaborativos</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <p><i class="fa fa-coffee"></i></p>
                    <h3>95</h3>
                    <p>reservas diarias de espacios en promedio </p>
                </div>
            </div>
        </div>

    </div>
    <style>
        .set-wrapper .box-counter {
            grid-area: box-counter;
            box-sizing: border-box;
            margin-top: 40px;
            padding: 32px;
        }

        /* Float four columns side by side */
        .box-counter .column {
            float: left;
            padding: 0 12px;
        }

        .box-counter .row-cards {
            margin: 0 -5px;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;

        }

        @media(min-width:768px){
        .box-counter .row-cards {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: auto;
            grid-template-areas:
            '';
        }
        }

        /* Clear floats after the columns */
        .box-counter .row:after {
            content: "";
            display: table;
            clear: both;
        }


        /* Style the counter cards */
        .box-counter .card {
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f5f5f5;
            color: #252525;
            border-radius: 8px;
        }

        .box-counter .fa {
            font-size: 50px;
        }

        .box-counter .card h3 {
            font-weight: 700;
            font-size: 40px;
            color: #1f2246;
        }

        .box-counter .card p:last-of-type {
            font-size: 16px;
            font-weight: 400;
            text-align: center;
            line-height: 1;
            color: #1f2246;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            line-clamp: 3;
            overflow: hidden;
            font-family: system-ui;

        }

        @media(min-width:768px) {
            .box-counter .column {
                display: block;
                margin-bottom: 10px;
            }

            .box-counter .card p:last-of-type {
                height: 35px;
            }

        }

        @media(min-width:992px) {
            .box-counter .column {
                display: block;
                margin-bottom: 10px;
            }

        }
    </style>


    <!-- Sección box collapse -->
    <div class="box-recursos">

        <div class="title title-h3">
            <h3>Recursos</h3>
        </div>

        <div class="recursos">

            <div class="media">
                <div class="media-left">
                    <a href="https://aranda.movilidadbogota.gov.co/USDKV8/index.aspx#!/login/">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-11-2020/aranda-claro.png" alt="icono de documento pdf" width="50px">
                    </a>
                </div>
                <div class="media-body">
                    <a href="https://aranda.movilidadbogota.gov.co/USDKV8/index.aspx#!/login/">
                        <h4 class="media-heading">Aplicativo Aranda</h4>
                    </a>
                    <a href="https://aranda.movilidadbogota.gov.co/USDKV8/index.aspx#!/login/">https://aranda.movilidadbogota.gov.co/</a>
                </div>
            </div>

            <div class="media">
                <div class="media-left">
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-06-2023/instructivo_usuario_aranda_-_proyecto_servicios_administrativos_1.pdf">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="50px">
                    </a>
                </div>
                <div class="media-body">
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-06-2023/instructivo_usuario_aranda_-_proyecto_servicios_administrativos_1.pdf">
                        <h4 class="media-heading">Instructivo para creación de casos en el módulo Administrativo Aranda</h4>
                    </a>
                </div>
            </div>

            <div class="media">
                <div class="media-left">
                    <a href="https://www.movilidadbogota.gov.co/web/reserva_de_espacios">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-09-2021/2021-09-23_botones-pagina-trabajo-inteligente_300-x-300_1_1.png" alt="icono de documento pdf" width="50px">
                    </a>
                </div>
                <div class="media-body">
                    <a href="https://www.movilidadbogota.gov.co/web/reserva_de_espacios">
                        <h4 class="media-heading">Reserva de espacios</h4>
                    </a>
                    <a href="https://www.movilidadbogota.gov.co/web/reserva_de_espacios">https://www.movilidadbogota.gov.co/web/reserva_de_espacios</a>
                </div>
            </div>

            <div class="media">
                <div class="media-left">
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-06-2023/reglamento_v_2.0.pdf">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="50px">
                    </a>
                </div>
                <div class="media-body">
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-06-2023/reglamento_v_2.0.pdf">
                        <h4 class="media-heading">Reglamento de puestos de trabajo</h4>
                    </a>
                    <p>Versión 2 </p>
                </div>
            </div>
            <!-- <div class="media">
                <div class="media-left">
                    <a href="">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                    </a>
                </div>
                <div class="media-body">
                    <a href="" target="_blank" rel="noopener noreferrer" download="" title="Ir a descarga de ">
                        <h4 class="media-heading">Manual para la gestión del carnet digital</h4>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed ab, minima iusto recusandae illum voluptates labore. Nulla soluta libero quod error illo sequi atque, corporis amet autem quia nobis tenetur!</p>
                </div>
            </div> -->
            <!-- <div class="media">
                <div class="media-left">
                    <a href="" target="_blank" rel="noopener noreferrer" download="" title="">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                    </a>
                </div>
                <div class="media-body">
                    <a href="" target="_blank" rel="noopener noreferrer" download="" title="Ir a descarga de ">
                        <h4 class="media-heading">Instructivo para creación de casos en el módulo Administrativo Aranda</h4>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed ab, minima iusto recusandae illum voluptates labore. Nulla soluta libero quod error illo sequi atque, corporis amet autem quia nobis tenetur!</p>
                </div>
            </div> -->
            <!-- <div class="media">
                <div class="media-left">
                    <a href="" target="_blank" rel="noopener noreferrer" download="" title="">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                    </a>
                </div>
                <div class="media-body">
                    <a href="" target="_blank" rel="noopener noreferrer" download="" title="Ir a descarga de ">
                        <h4 class="media-heading">Manual para la reserva de espacios colaborativos</h4>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed ab, minima iusto recusandae illum voluptates labore. Nulla soluta libero quod error illo sequi atque, corporis amet autem quia nobis tenetur!</p>
                </div>
            </div> -->
        </div>

        <style>
            .box-recursos {
                padding: 0 2em;
            }

            .recursos {
                padding: 2em;
            }

            .media {
                margin-bottom: 16px;
                padding: 6px;
                border-radius: 4px;
            }
            .media:hover{
                background-color: #f5f5f5;
            }

        </style>


    </div>

</div>

<style>
    .set-wrapper {
        font-size: 16px;
        font-weight: 500;
        text-align: left;
        line-height: 1.4;
        color: var(#252525);
    }

    .set-wrapper .title {
        margin-top: 16px;
    }

    .set-wrapper .title h3 {
        padding: 0px 0px 16px 0px;
        margin: 0px;
        font-weight: 700;
        color: #1f2246;
    }

    .set-wrapper .title h4 {
        padding: 0px 0px 12px 0px;
        margin: 0px;
        color: #1f2246;
    }

    .set-wrapper .paragraph {
        margin-top: 16px;
    }

    .set-wrapper .paragraph::before {
        content: "";
        display: block;
        width: 80px;
        height: 3px;
        background: #65df25;
        margin-bottom: 24px;
    }

    .enfasis {
        /* color: #1f2246; */
        font-weight: 700;
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
        transform: scale(1.15);
        -moz-transform: scale(1.15);
        /* Firefox */
        -webkit-transform: scale(1.15);
        /* Chrome - Safari */
        -o-transform: scale(1.15);
        /* Opera */
        -ms-transform: scale(1.15);
        /* IE9 */
    }

    .bs {
        -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.05);
        box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.05);
    }
</style>
<!-- Fin Set -->
