@extends('welcome')
@section('title', 'blade')
@section('contenido')

    <!-- Google fonts - Montserrat  -->
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link
        href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'
        rel='stylesheet'>

    <!-- Set blade -->
    <div class="set-wrapper blade">

        <!-- bloque box header-->
        <style>
            .set-wrapper .box-header {
                background: #66e026;
                background-image: url('/images/cybe/cybe_portada_2.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;

                display: grid;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas: "box-header";
            }

            @media(min-width: 908px) {
                .set-wrapper .box-header {
                    background-position: center -30em;
                    grid-template-columns: 55% 45%;
                    grid-template-areas: "vacio box-header";
                }
            }

            .box-header .cmpnt-logo-ppal {
                grid-area: box-header;
                /* margin: 2em 1em 0 1em; */
                height: 250px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .box-header .cmpnt-logo-ppal .logo-ppal {
                width: 100%;
                max-width: 200px;
                margin: 0 auto;
            }

            .box-header .cmpnt-logo-ppal .paragraph {
                font-family: 'Montserrat', sans-serif;
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
        </style>

        <div class="box box-header">
            <div class="cmpnt cmpnt-vacio">
            </div>
            <div class="cmpnt cmpnt-logo-ppal">
                <div class="logo logo-ppal">
                    <img class="img-responsive w-100" src="/images/cybe/logo_cybe_v3.png"
                        alt="logo Movilidad de Cero y Bajas Emisiones">
                </div>
                <p class="paragraph ph-type-ppal ph-id-1">Conoce la apuesta de Bogotá por la <strong>Movilidad Motorizada de
                        Cero y
                        Bajas Emisiones</strong></p>
            </div>
        </div>


        <style>
            .set-wrapper .navbar {
                background-color: #66e026;
                border: none;
                border-radius: 0;
                font-size: 16px;
                font-weight: 400;
                line-height: 1.1;
                color: #fff;
                text-align: center;
                margin: 0;
                padding: 0;
            }
        </style>
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">¿Por qué?</a></li>
                        <li><a href="#">¿Cuáles son las tecnologías?</a></li>
                        <li><a href="#">¿Qué solución proponemos?</a></li>
                        <li><a href="#">¿Cómo lograr la transición?</a></li>
                        <li><a href="#">Verdades y mitos</a></li>
                        <li><a href="#">Normativa aplicable</a></li>
                    </ul>

                </div>
            </div>
        </nav>

        <!-- bloque box video-->
        <style>
            .set-wrapper .box-video {
                grid-area: box-video;
                background-color: #1c2046;
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
                font-size: 40px;
                font-weight: 600;
                text-align: center;
                line-height: 1;
                color: #66e026;
                margin: 0;
                padding: 0;
                text-transform: uppercase;
                letter-spacing: 2;
            }

            .box-video .cmpnt-texto .title-type-enfasis-2 {
                font-family: 'Montserrat', sans-serif;
                font-size: 40px;
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
        <div class="box box-video">
            <div class="cmpnt cmpnt-video">
                <div class="video video-ppal video-16by9">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width='100%' src='https://www.youtube.com/embed/i3Wx02KJX4Q' title='YouTube video player'
                            frameborder='0'
                            allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="cmpnt cmpnt-texto">
                <h3 class="title title-type-enfasis-1 title-id-1">Movilidad</h3>
                <h3 class="title title-type-enfasis-2 title-id-2">Sostenible</h3>
                <p class="paragraph ph-type-video ph-id-2">
                    La política Pública de Movilidad Motorizada de Cero y Bajas Emisiones es una hoja de ruta al 2040, para
                    facilitar la transición hacia una movilidad más sostebible en la ciudad y la Región Metropolitana.
                    Invitamos al sector privado, al sector público y a la ciudadanía a sumarse a esta apuesta.
                </p>
            </div>
        </div>



        {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
        {{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> --}}
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->


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
                    width: 70%;
                    margin: auto;
                }
            }

            .MultiCarousel .MultiCarousel-inner {
                transition: 1s ease all;
                float: left;
            }

            .MultiCarousel .MultiCarousel-inner .item {
                float: left;
            }

            .MultiCarousel .MultiCarousel-inner .item>div {
                text-align: center;
                padding: 10px;
                margin: 10px;
                background: #1c2046;
                color: #fff;
                /* border: solid 2px #66e026; */
                border-radius: 6px;
                border: 5px solid transparent;
                border-image: linear-gradient(45deg, #66e026 0%, #1c2046 100%) 1;
            }

            .MultiCarousel-inner .pad15 .lead {
                margin: 8px;
                line-height: 1;
                font-size: 18px;
                min-height: 36px;
            }

            .MultiCarousel-inner .pad15 .value {
                font-size: 28px;
                font-weight: 600;
                margin: 8px;
                line-height: 1;
                color: #66e026
            }

            .MultiCarousel-inner .pad15 img {
                width: 140px;
            }

            .MultiCarousel-inner .pad15 .details {
                margin: 4px;
                line-height: 1;
                font-size: 12px;
                font-weight: 500;
            }


            .MultiCarousel .leftLst,
            .MultiCarousel .rightLst {
                position: absolute;
                border-radius: 50%;
                top: calc(50% - 20px);
                background: #1c2046;
            }

            .MultiCarousel .leftLst {
                left: 0;
                background: #1c2046;
            }

            .MultiCarousel .rightLst {
                right: 0;
                background: #1c2046;
            }

            .MultiCarousel .leftLst.over,
            .MultiCarousel .rightLst.over {
                pointer-events: none;
                background: #66e026;
            }
        </style>

        <div class="box-carousel">
            <h3 class="title title-type-3 title-id-4">Cifras</h3>
            <div class="row">
                <div class="MultiCarousel" data-items="1,3,3,4" data-slide="1" id="MultiCarousel" data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <div class="item">
                            <div class="pad15">
                                <p class="lead">Buses eléctricos
                                    del SIPT</p>
                                <p class="value">1.485</p>
                                <img src="/images/cybe/icons/bus_electrico.jpg" alt="Icono de bus electrico">
                                <p class="details">En operación</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <p class="lead">Flota oficial eléctrica</p>
                                <p class="value">12</p>
                                <img src="/images/cybe/icons/flota_oficial.jpg" alt="Icono de Flota oficial eléctrica">
                                <p class="details">En operación</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <p class="lead">Taxis eléctricos</p>
                                <p class="value">39</p>
                                <img src="/images/cybe/icons/taxi.jpg" alt="Icono de taxi">
                                <p class="details">En operación</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <p class="lead">Motos eléctricas</p>
                                <p class="value">410</p>
                                <img src="/images/cybe/icons/moto_electrica.jpg" alt="Icono de moto eléctrica">
                                <p class="details">En operación</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <p class="lead">Carros eléctricos</p>
                                <p class="value">5.583</p>
                                <img src="/images/cybe/icons/carro_electrico.jpg" alt="Icono de carro eléctrico">
                                <p class="details">En operación</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <p class="lead">Carros híbridos</p>
                                <p class="value">3.0014</p>
                                <img src="/images/cybe/icons/carro_electrico.jpg" alt="Icono de carro eléctrico">
                                <p class="details">En operación</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary leftLst">&#60;</button>
                            <button class="btn btn-primary rightLst">&#62;</button>
                </div>
            </div>


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
                background: #66e026;
            }

            .box-noticias .title-type-3 {
                font-family: 'Montserrat', sans-serif;
                font-size: 40px;
                font-weight: 600;
                text-align: center;
                line-height: 1;
                color: #1c2046;
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
                background-color: #1c2046;
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
                    height: 340px;
                    margin: 3em;
                    padding: 0;
                    background-color: #1c2046;
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
                height: 340px;
                object-fit: cover;
                object-position: 0 0;
                border-radius: 6px 6px 0 0;
            }
            @media(min-width:768px){
                .box-noticias .cmpnt-cards .n-card .imagen img {
                    height: 100%;
                    object-fit: cover;
                    object-position: -300px 0;
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
            @media(min-width:768px){
                .box-noticias .cmpnt-cards .n-card .resumen {
                    margin: 0;
                    padding: 16px;
                    height: 340px;
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
                color: #4d4d4d;
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
                color: #1c1c1c;
                margin: 0;
                padding: 0;
                text-align: left;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 8;
                line-clamp: 8;
                overflow: hidden;
                padding-top: 8px;
                border-top: 3px solid #66e026;
                margin-top: 8px;
            }
        </style>
        <div class="box box-noticias">
            <h3 class="title title-type-3 title-id-6">Noticias</h3>
            <div class="cmpnt cmpnt-cards">
                <div class="n-card card-1">
                    <div class="imagen">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/28-12-2023/2023-12-28_11-03.png"
                            alt="Imagen de noticia">
                    </div>
                    <div class="resumen">
                        <h4 class="title title-type-enfasis-1 title-id-7">Bogotá estrena primera red de cargadores públicos
                            para carros eléctricos</h4>
                        <p class="paragraph ph-type-noticia ph-id-8">Bogotá, 28 de diciembre de 2023 (@SectorMovilidad).
                            Con una inversión que supera los 6.000 millones de pesos, la Secretaría Distrital de Movilidad,
                            La Rolita y Enel Colombia (a través de su línea Enel X) presentaron hoy la primera red de
                            cargadores públicos para vehículos eléctricos, que estará compuesta por 15 electrolineras
                            distribuidas en seis zonas estratégicas de la ciudad.</p>
                    </div>
                </div>
                <div class="n-card card-2">
                    <div class="imagen">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/29-01-2024/obfuscated.png"
                            alt="Imagen de noticia">
                    </div>
                    <div class="resumen">
                        <h4 class="title title-type-enfasis-1 title-id-7">Se estima que dejen de circular más de 1.850.000
                            vehículos particulares y 430.000 motos</h4>
                        <p class="paragraph ph-type-noticia ph-id-8">Bogotá, 29 de enero de 2024 (@SectorMovilidad). La
                            nueva jornada del Día sin Carro y sin Moto en Bogotá se realizará el próximo jueves, 01 de
                            febrero, de 5:00 a.m. a 9:00 p.m., con el propósito de generar hábitos en la ciudadanía
                            encaminados a la movilidad sostenible.</p>
                    </div>
                </div>
            </div>
        </div>

            <!-- Sección box aliados -->
    <div class="box box-aliados">
        <h3 class="title title-type-3 title-id-n3">
            Aliados
        </h3>
        <p>Nos unimos con el Programa de las Naciones Unidas para el Medio Ambiente (PNUMA) para invitar a las <strong>organizaciones a que definan compromisos específicos por la movilidad eléctrica.</strong></p>
        <div class="set-logos-aliados">
            <div class="logo-aliado img-logo-aliados-1">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-05-2022/unep50logo.png" alt="Logo ONU" title="Logo ONU">
            </div>
            <div class="logo-aliado img-logo-aliados-2">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-05-2022/b_move_to_zero-full_color.png" alt="Logo Move to Zero" title="Logo Move to Zero">
            </div>
        </div>
        <p>Ya son más de 30 organizaciones comprometidas que han generado más de 60 compromisos por la movilidad eléctrica.</p>
        <div>
            <div id="carousel_empresas_b" class="carousel carousel_empresas slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="item active">
                        <div class='row logos'>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_akt_electric_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_akuai_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_andemos_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_enel_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_colturex_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_defencarga_400.png" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="row logos">
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_uniandes_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_evoelectric_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_girozero_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_heliox_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_insepet_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_navisaf_400.png" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="row logos">
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_piot_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_renting_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_solistica_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_tractec_400.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2023/icono_deepsea_230628_120x120.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2023/icono_navitrans_230628_120x123.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row logos">
                            <div class='col-xs-12 col-sm-2 col-sm-offset-5'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2023/icono_motorysa-byd_230628_120x120.png" alt="">
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
            }

            .box-aliados .title-type-3 {
                text-align: center;
                color: rgba(77, 84, 31, 1);
                font-weight: 700;
            }

            .box-aliados .set-logos-aliados {
                display: grid;
                gap: 8px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                padding-top: 32px;
                padding-bottom: 32px;
            }

            .set-logos-aliados .logo-aliado img {
                max-width: 200px;
                margin: auto;
            }

            @media(min-width:768px) {
                .box-aliados .set-logos-aliados {
                    grid-template-columns: 1fr 1fr;
                    padding-left: 8em;
                    padding-right: 8em;

                }
            }
        </style>

        <div class="contacto-cbe">
            <h4>¿Quieres saber más? Contáctanos a <a href="mailto:movilidadecoeficiente@movilidadbogota.gov.co">movilidadecoeficiente@movilidadbogota.gov.co</a></h4>
        </div>
        <style>
            .contacto-cbe {
                padding: 40px 25px;
                text-align: center;
                background-color: #66e026;
                /* color: #66e026; */
                margin-top: 10px;
                margin-right: -15px;
                margin-left: -15px;
            }

            .contacto-cbe h4 {
                font-weight: 700;

            }
        </style>
    </div>
    <br>



    </div>
    <!-- Fin Set -->
