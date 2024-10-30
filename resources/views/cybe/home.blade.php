@extends('welcome')
@section('title', 'home')
@section('contenido')

<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


<!-- Set home -->
<style>
    #lectura .region-content {
        padding: 0px;
    }

    @media(min-width:768px) {
        #lectura .region-content {
            padding: 20px;
        }
    }

    .home .navbar-header .navbar-toggle {
        margin-right: 0px;
    }

    @media(min-width:768px) {
        .home .navbar-header .navbar-toggle {
            margin-right: 15px;
        }
    }
</style>
<div class="set-wrapper home">

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
                    <li><a class="activado" href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/home">Inicio</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/por_que">¿Por qué?</a></li>
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
            background-color: #3d4a1c;
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

        .box-video .cmpnt-texto .title-1 {
            margin: 16px;
        }

        .box-video .cmpnt-texto .title-type-enfasis-1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 38px;
            font-weight: 600;
            text-align: center;
            line-height: 1;
            color: #BED000FF;
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
            line-height: 1.2;
            color: #fff;
            margin: 8px;
            padding: 0;
            max-width: 400px;

        }

        @media(min-width:768px) {
            .box-video .cmpnt-texto .paragraph {
                text-align: justify;
                font-size: 16px;
                font-family: 'Montserrat', sans-serif;
                font-weight: 300;
            }
        }
    </style>

    <div class="box box-video">
        <div class="cmpnt cmpnt-video">
            <div class="video video-ppal video-16by9">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width='100%' src='https://www.youtube.com/embed/1kWS0SpyyXc?si=80VhL6jugcJKSR82' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="cmpnt cmpnt-texto">
            <div class="title-1">
                <h3 class="title title-type-enfasis-1 title-id-1">Movilidad</h3>
                <h3 class="title title-type-enfasis-2 title-id-2">Sostenible</h3>
            </div>
            <p class="paragraph ph-type-video ph-id-2">
                La política Pública de Movilidad Motorizada de Cero y Bajas Emisiones es una hoja de ruta al 2040, para
                facilitar la transición hacia una movilidad más sostebible en la Región Metropolitana Bogotá - Cundinamarca.
            </p>
            <p class="paragraph ph2">Invitamos al sector privado, al sector público y a la ciudadanía a sumarse a esta apuesta.</p>
            <a href="http://" target="_blank" rel="noopener noreferrer"></a>
        </div>
    </div>
    <style>
        .box-carousel .title-type-3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 40px;
            font-weight: 600;
            text-align: center;
            line-height: 1;
            color: #4d4d4d;
            margin: 32px 0;
            padding: 0;
            text-transform: uppercase;
            letter-spacing: 2;
        }

        .MultiCarousel {
            float: left;
            overflow: hidden;
            padding: 15px;
            width: 100%;
            position: relative;
        }

        @media(min-width:768px) {
            .MultiCarousel {
                float: none;
                width: 88%;
                margin: auto;
            }
        }

        .MultiCarousel .MultiCarousel-inner {
            display: flex;
            transition: 1s ease all;
            float: left;
            gap: 35px;
        }

        .MultiCarousel .MultiCarousel-inner .item {
            float: left;
            border-radius: 8px !important;
        }

        .MultiCarousel .MultiCarousel-inner .item>div {
            text-align: center;
            padding: 8px;
            background: #BED000FF;
            color: #fff;
            border-radius: 6px;
        }

        .MultiCarousel-inner .pad15 .lead {
            font-size: 16px;
            font-family: "Work Sans", sans-serif;
            font-weight: 600;
            margin: 8px;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 30px;

            line-height: 1;
            min-height: 36px;
            color: #3d4a1c;
        }

        .MultiCarousel-inner .pad15 .value {
            font-size: 28px;
            font-weight: 700;
            margin: 0px;
            line-height: 1;
            color: #3d4a1c;
        }

        .MultiCarousel-inner .pad15 img {
            max-height: 90px;
            padding: 2px;
        }

        .MultiCarousel-inner .pad15 .details {
            margin: 4px;
            line-height: 1;
            font-size: 12px;
            font-weight: 500;
            font-family: 'Montserrat', sans-serif;
            color: #252525;
        }


        .MultiCarousel .leftLst,
        .MultiCarousel .rightLst {
            position: absolute;
            border-radius: 50%;
            top: calc(50% - 20px);
            background: #3d4a1c;
            width: 32px;
        }

        .MultiCarousel .leftLst {
            left: 0;
            background: #3d4a1c;
        }

        .MultiCarousel .rightLst {
            right: 0;
            background: #3d4a1c;
        }

        .MultiCarousel .leftLst.over,
        .MultiCarousel .rightLst.over {
            pointer-events: none;
            background: #a7b61aff;
        }

        .box-carousel i {
            display: block;
            text-align: center !important;
            justify-content: center;
        }
    </style>

    <div class="box-carousel">
        <h3 class="title title-type-3 title-id-4">Cifras</h3>
        <div class="row">
            <div class="MultiCarousel" data-items="1,3,3,5" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item">
                        <div class="pad15">
                            <p class="lead">Buses eléctricos SITP</p>
                            <p class="value">1.485</p>
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/icono_bus.png" alt="Icono de bus electrico">
                            <p class="details">En operación</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <p class="lead">Carros eléctricos</p>
                            <p class="value">7.132</p>
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/icono_electrico.png" alt="Icono de carro eléctrico">
                            <p class="details">Registrados</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <p class="lead">Carros híbridos</p>
                            <p class="value">40.699</p>
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/icono_hibrido.png" alt="Icono de carro híbrido">
                            <p class="details">Registrados</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <p class="lead">Motos eléctricas</p>
                            <p class="value">442</p>
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/icono_moto.png" alt="Icono de moto eléctrica">
                            <p class="details">Registradas</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <p class="lead">Camiones cero y bajas emisiones</p>
                            <p class="value">471</p>
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/icono_carga.png" alt="Icono de carga eléctrico">
                            <p class="details">Registrados</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <p class="lead">Taxis eléctricos</p>
                            <p class="value">39</p>
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/icono_taxi.png" alt="Icono de taxi">
                            <p class="details">En operación</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <p class="lead">Flota oficial eléctrica</p>
                            <p class="value">19</p>
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/icono_oficial.png" alt="Icono de Flota oficial eléctrica">
                            <p class="details">En operación</p>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary leftLst">&#60;</button>
                <button class="btn btn-primary rightLst">&#62;</button>
            </div>
        </div>
        <i>Fuente: Registro Distrital Automotor - RDA. *Cifras a 30 de septiembre de 2024</i>


    </div>
    <script>
        $(document).ready(function() {
            var itemsMainDiv = ('.MultiCarousel');
            var itemsDiv = ('.MultiCarousel-inner');
            var itemWidth = "";

            $('.leftLst, .rightLst').click(function() {
                var condition = $(this).hasClass("leftLst");
                if (condition)
                    click(0, this);
                else
                    click(1, this)
            });

            ResCarouselSize();

            $(window).resize(function() {
                ResCarouselSize();
            });

            //this function define the size of the items
            function ResCarouselSize() {
                var incno = 0;
                var dataItems = ("data-items");
                var itemClass = ('.item');
                var id = 0;
                var btnParentSb = '';
                var itemsSplit = '';
                var sampwidth = $(itemsMainDiv).width();
                var bodyWidth = $('body').width();
                $(itemsDiv).each(function() {
                    id = id + 1;
                    var itemNumbers = $(this).find(itemClass).length;
                    btnParentSb = $(this).parent().attr(dataItems);
                    itemsSplit = btnParentSb.split(',');
                    $(this).parent().attr("id", "MultiCarousel" + id);


                    if (bodyWidth >= 1200) {
                        incno = itemsSplit[3];
                        itemWidth = sampwidth / incno;
                    } else if (bodyWidth >= 992) {
                        incno = itemsSplit[2];
                        itemWidth = sampwidth / incno;
                    } else if (bodyWidth >= 768) {
                        incno = itemsSplit[1];
                        itemWidth = sampwidth / incno;
                    } else {
                        incno = itemsSplit[0];
                        itemWidth = sampwidth / incno;
                    }
                    $(this).css({
                        'transform': 'translateX(0px)',
                        'width': itemWidth * itemNumbers
                    });
                    $(this).find(itemClass).each(function() {
                        $(this).outerWidth(itemWidth);
                    });

                    $(".leftLst").addClass("over");
                    $(".rightLst").removeClass("over");

                });
            }


            //this function used to move the items
            function ResCarousel(e, el, s) {
                var leftBtn = ('.leftLst');
                var rightBtn = ('.rightLst');
                var translateXval = '';
                var divStyle = $(el + ' ' + itemsDiv).css('transform');
                var values = divStyle.match(/-?[\d\.]+/g);
                var xds = Math.abs(values[4]);
                if (e == 0) {
                    translateXval = parseInt(xds) - parseInt(itemWidth * s);
                    $(el + ' ' + rightBtn).removeClass("over");

                    if (translateXval <= itemWidth / 2) {
                        translateXval = 0;
                        $(el + ' ' + leftBtn).addClass("over");
                    }
                } else if (e == 1) {
                    var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                    translateXval = parseInt(xds) + parseInt(itemWidth * s);
                    $(el + ' ' + leftBtn).removeClass("over");

                    if (translateXval >= itemsCondition - itemWidth / 2) {
                        translateXval = itemsCondition;
                        $(el + ' ' + rightBtn).addClass("over");
                    }
                }
                $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
            }

            //It is used to get some elements from btn
            function click(ell, ee) {
                var Parent = "#" + $(ee).parent().attr("id");
                var slide = $(Parent).attr("data-slide");
                ResCarousel(ell, Parent, slide);
            }

        });
    </script>


    <!-- bloque box noticias-->
    <style>
        .set-wrapper .box-noticias {
            grid-area: box-noticias;
            margin: 2em 0 0 0;
            background: rgba(255, 255, 255, 1);
        }

        .box-noticias .title-type-3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 40px;
            font-weight: 600;
            text-align: center;
            line-height: 1;
            color: #3d4a1c;
            margin: 32px 0;
            padding: 32px 0 0 0;
            text-transform: uppercase;
            letter-spacing: 2;
        }

        .box-noticias .cmpnt-cards {
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;

        }

        @media(min-width:768px) {
            .box-noticias .cmpnt-cards {
                display: grid;
                grid-auto-flow: dense;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;
            }
        }

        .box-noticias .cmpnt-cards .n-card {
            display: grid;
            margin: 1em;
            padding: 1em;
            background-color: #3d4a1c;
            color: #fff;
            border-radius: 4px;
            box-shadow: 0 0 8px 0 rgba(0, 0, 0, .2);
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;

        }

        @media(min-width:768px) {
            .box-noticias .cmpnt-cards .n-card {
                display: grid;
                height: 250px;
                margin: 3em;
                padding: 0;
                background-color: #3d4a1c;
                color: #fff;
                border-radius: 6px;
                box-shadow: 0 0 8px 0 rgba(0, 0, 0, .2);
                grid-auto-flow: dense;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;
            }
        }

        .box-noticias .cmpnt-cards .n-card .imagen {
            margin: 0;
            padding: 0;
            overflow: hidden;
            border-radius: 4px;
        }

        .box-noticias .cmpnt-cards .n-card .imagen img {
            aspect-ratio: 16/9;
            width: 100%;
            object-fit: cover;
            object-position: 0 0;
            border-radius: 6px 6px 0 0;
        }

        @media(min-width:768px) {
            .box-noticias .cmpnt-cards .n-card .imagen img {
                height: 100%;
                object-fit: cover;
                object-position: center center;
                border-radius: 6px 0 0 6px;
            }
        }

        .box-noticias .cmpnt-cards .n-card .resumen {
            margin: 0;
            padding: 16px;
            height: 100%;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            background: #fff;
            border-radius: 0 0 6px 6px;
        }

        @media(min-width:768px) {
            .box-noticias .cmpnt-cards .n-card .resumen {
                margin: 0;
                padding: 16px;
                height: 250px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                border-radius: 0 6px 6px 0;
            }
        }

        .box-noticias .cmpnt-cards .n-card .resumen .title-type-enfasis-1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: 500;
            line-height: 1.2;
            color: #252525;
            margin: 0;
            padding: 0;
            min-height: 87px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            line-clamp: 4;
            overflow: hidden;
        }

        .box-noticias .cmpnt-cards .n-card .resumen .paragraph {
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.2;
            color: #00000099;
            margin: 0;
            padding: 0;
            text-align: left;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 6;
            line-clamp: 6;
            overflow: hidden;
            padding-top: 8px;
            border-top: 3px solid #BED000FF;
            margin-top: 8px;
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
    <div class="box box-noticias">
        <h3 class="title title-type-3 title-id-6">Noticias</h3>
        <div class="cmpnt cmpnt-cards">

            <div class="n-card card-2 zoom">
                <div class="imagen">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/27-09-2024/1_2.jpg" alt="Foto recurso de la noticia">
                </div>
                <div class="resumen">
                    <a href="https://www.movilidadbogota.gov.co/web/noticia/el_distrito_premio_a_las_organizaciones_publicas_y_privadas_que_incentivan_la_movilidad">
                        <h4 class="title title-type-enfasis-1 title-id-7">El Distrito premió a las organizaciones públicas y privadas que incentivan la movilidad sostenible</h4>
                    </a>
                    <p class="paragraph ph-type-noticia ph-id-8">Bogotá, 26 de septiembre de 2024. @Sectormovilidad.- En el marco de la XVII Semana de la Bici, la Secretaría Distrital de Movilidad, celebró este jueves dos importantes reconocimientos: los Premios Al Trabajo en Bici y la II Bienal de Estacionamientos de Micromovilidad.</p>
                </div>
            </div>

            <div class="n-card card-1 zoom">
                <div class="imagen">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/26-09-2024/1_1.jpg" alt="Foto recurso de la noticia">
                </div>
                <div class="resumen">
                    <a href="https://www.movilidadbogota.gov.co/web/noticia/san_felipe_y_bosa_el_porvenir_barrios_vitales_que_avanzan_seguros_y_sostenibles">
                        <h4 class="title title-type-enfasis-1 title-id-7">San Felipe y Bosa El Porvenir: Barrios vitales que avanzan seguros y sostenibles</h4>
                    </a>
                    <p class="paragraph ph-type-noticia ph-id-8">Bogotá, 25 de septiembre de 2024 (@SectorMovilidad). Este miércoles se conmemora el aniversario de los Barrios Vitales San Felipe y Bosa El Porvenir, como parte de una estrategia integral que beneficia a cerca de 95,000 personas en sectores estratégicos de la ciudad, incluyendo San Cristóbal y Las Cruces, destacando su impacto en la vida de los ciudadanos.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Sección box aliados -->
    <div class="box box-aliados">
        <style>
            .cpnt-slider #carousel_empresas_b {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }

            #carousel_empresas_b .carousel-inner figure img {
                object-fit: cover;
                width: 100% !important;
                /* height: 16.25em; */
            }

            @media(max-width:767px) {
                #carousel_empresas_b .carousel-inner figure img {
                    height: 16.25em;
                }
            }

            @media(min-width:768px) {
                #carousel_empresas_b .carousel-inner figure img {
                    height: 25em;
                }
            }

            @media(min-width:992px) {
                #carousel_empresas_b .carousel-inner figure img {
                    height: 28em;
                }
            }

            #carousel_empresas_b .carousel-control.left {
                background-image: -webkit-linear-gradient(right, rgba(0, 0, 0, .0001) 0, rgba(190, 208, 0, 0.5) 100%);
                background-image: -o-linear-gradient(right, rgba(0, 0, 0, .0001) 0, rgba(190, 208, 0, 0.5) 100%);
                background-image: -webkit-gradient(linear, right top, left top, from(rgba(0, 0, 0, .0001)), to(rgba(190, 208, 0, 0.5)));
                background-image: linear-gradient(to left, rgba(0, 0, 0, .0001) 0, rgba(190, 208, 0, 0.5) 100%);
                background-repeat: repeat-x !important;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#BED000', GradientType=1);
            }

            #carousel_empresas_b .carousel-control.right {
                background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(190, 208, 0, 0.5) 100%);
                background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(190, 208, 0, 0.5) 100%);
                background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(190, 208, 0, 0.5)));
                background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0, rgba(190, 208, 0, 0.5) 100%);
                background-repeat: repeat-x !important;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#BED000', GradientType=1);

            }

            #carousel_empresas_b .carousel-control {
                color: #BED000;
                opacity: 1;
            }

            #carousel_empresas_b .carousel-control:focus,
            #carousel_empresas_b .carousel-control:hover {
                color: #BED000;
                opacity: 0.7;
            }



            #carousel_empresas_b .carousel-indicators li {
                background-color: #404040;
                border-color: #40404050;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
            }

            #carousel_empresas_b .carousel-indicators .active {
                background-color: #ffe145;
                border-color: #A6B517;
            }
        </style>

        <div class="cpnt cpnt-aliados-title">
            <h3 class="title title-type-3 title-id-n3">
                Aliados
            </h3>
        </div>
        <div class="cpnt cpnt-aliados-summary">
            <p>Nos unimos con el Programa de las Naciones Unidas para el Medio Ambiente (PNUMA) para invitar a las <strong>organizaciones a que definan compromisos específicos por la movilidad eléctrica.</strong></p>
            <p>A 2023, son más de 50 organizaciones comprometidas que han generado más de 100 compromisos por la movilidad eléctrica.</p>
        </div>
        <div class="cpnt cpnt-logos-aliados">
            <div class="logo-aliado img-logo-aliados-1">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-08-2024/onu_pnuma.jpg" alt="Logo ONU" title="Logo ONU">
            </div>
        </div>
        <div class="cpnt cpnt-slider">
            <div id="carousel_empresas_b" class="carousel carousel_empresas slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="item active">

                        <div class='logos'>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_akt_electric_400.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_akuai_400.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_andemos_400.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-08-2024/enel_x_400.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_colturex_400.png" alt="">
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="logos">
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_defencarga_400.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_uniandes_400.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_evoelectric_400.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_girozero_400.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_heliox_400.png" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="logos">
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_insepet_400.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_navisaf_400.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_piot_400.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_renting_400.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_solistica_400.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="logos">
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_tractec_400.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2023/icono_deepsea_230628_120x120.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2023/icono_navitrans_230628_120x123.png" alt="">
                            </div>
                            <div class='logo'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2023/icono_motorysa-byd_230628_120x120.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#carousel_empresas_b" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#carousel_empresas_b" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>

        </div>

    </div>
    <style>
        .set-wrapper .box-aliados {
            grid-area: box-aliados;
            margin-top: 4em;
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight: 500;
            text-align: left;
            line-height: 1.5;
            color: #252525;
            padding-top: 32px;
            padding-bottom: 32px;
        }

        .cpnt-aliados-title .title-type-3 {
            text-align: center;
            text-transform: uppercase;
            font-size: 40px;
            color: #3d4a1c;
            font-weight: 700;
            margin-bottom: 32px;
        }

        @media(min-width:768px) {
            .cpnt-aliados-title {
                grid-column: span 2;

            }
        }

        .logos-aliados img {
            max-width: 250px;
            margin: auto;
        }

        @media(min-width:768px) {
            .box-aliados .box-aliados {
                grid-template-columns: 1fr 1fr;
                padding-left: 8em;
                padding-right: 8em;

            }
        }

        .box-aliados .cpnt-aliados-summary {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 32px;
        }

        .box-aliados .cpnt-aliados-summary p {
            margin: 8;
            padding: 0;
            text-align: justify;
        }

        .box-aliados .cpnt-logos-aliados {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .cpnt-logos-aliados img {
            max-width: 250px;
            margin: 2rem;
            padding: 32px;
        }

        .cpnt-slider .logos {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: normal;
            align-content: normal;
        }

        .cpnt-slider .logos {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: normal;
            align-content: normal;
            column-gap: 16px;
        }

        .cpnt-slider .logos .logo {
            max-width: 120px;
            width: 120px;

            @media(min-width:768px){
             max-width: 160px;
             width: 160px;

         }

        }

        .cpnt-paragraph {
            margin-bottom: 32px;
        }

        @media(min-width:768px) {
            .cpnt-slider {
                grid-column: span 2;
                margin-top: 32px;
            }
        }
    </style>


</div>
<br>



</div>
<!-- Fin Set -->
