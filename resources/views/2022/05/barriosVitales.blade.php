@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- Set Wrapper -->
<div class='container-fluid barriosVitales'>
    <div class='box-head'>
        <div class='row'>
            <div class='col-xs-12 col-sm-5 col-sm-offset-7'>
                <div class='box-logo box-a'>
                    <div class='logo'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-04-2022/logo_barrios_vitales.png' alt='logo Barrios Vitales' title='logo Barrios Vitales'>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='box-wrp'>
        <div class="box-back">
            <div class='video_fondo'>
                <video autoplay muted loop width="100%">
                    <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-04-2022/reel_barrios_vitales.mp4' type='video/mp4'>
            </div>
        </div>
    </div>
    <style>
        .box-back .video-fondo video {
            position: absolute;
        }

        .box-head {
            position: relative;
            /* top: -150px; */

        }

        .box-logo {
            padding: 10px;
        }

        .box-logo .logo img {
            max-height: 130px;
            width: auto;
            margin: auto;
        }
    </style>
    <div class='box-s1'>
        <div class='box-text'>
            <div class='title3 title-bv bva'>
                <h3><strong>¿Qué es Barrios Vitales?</strong></h3>
                <div class='barras'>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-5'>
                            <div class="barra left bva">
                            </div>
                            <div class="barra right bvv">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-paragraph">
                <p>Es un proyecto que busca beneficiar principalmente a los peatones, redistribuyendo el espacio público que anteriormente estaba dedicado a la circulación de vehículos, a través de intervenciones de urbanismo táctico y de infraestructura.</p>
                <p>A través de la estrategia Barrios Vitales se generan nuevas áreas de espacio público para facilitar el encuentro y la permanencia entre vecinos y visitantes del sector, mejorando la seguridad vial y las condiciones ambientales de la zona. También se promueven los medios de transporte sostenible y la dinamización del sector comercial, cultural y de servicios en los barrios.</p>
                <p>Este proyecto reorganiza el espacio público permitiendo que haya zonas dedicadas a peatones, circulación vehicular, zonas de estacionamiento y zonas de carga y descarga, entre otros.</p>
                <p>San Felipe es el primer barrio en el que se implementaron las intervenciones definitivas de urbanismo táctico de Barrios Vitales. Sin embargo, la Secretaría Distrital de Movilidad lidera actualmente el proceso en otros 4 barrios:</p>
            </div>
            <div class="box-items">
                <div class='row'>
                    <div class='col-xs-12 col-sm-6'>
                        <ul>
                            <a target="_blank" rel="noopener noreferrer">
                                <li>
                                    El Porvenir (Bosa)
                                </li>
                            </a>
                            <a target="_blank" rel="noopener noreferrer">
                                <li>
                                    San Blas - 20 de Julio (San Cristóbal)
                                </li>
                            </a>
                        </ul>
                    </div>
                    <div class='col-xs-12 col-sm-6'>
                        <ul>
                            <a target="_blank" rel="noopener noreferrer">
                                <li>
                                    Las Cruces - San Bernardo (Santa fe)
                                </li>
                            </a>
                            <a target="_blank" rel="noopener noreferrer">
                                <li>
                                    San Carlos (Tunjuelito)
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Sección box mapa -->
            <div class="box-mapa">
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-06-2023/mapa_barrios_vitales.jpg" target="_blank" rel="noopener noreferrer">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-06-2023/mapa_barrios_vitales.jpg" alt="logo mapa-bv">
                </a>
            </div>
            <style>
                .barriosVitales .box-mapa {
                    grid-area: box-mapa;
                    margin-top: 40px
                }

                .box-mapa img {
                    max-width: 940px;
                    margin: auto;
                }
            </style>
        </div>
    </div>
    <style>
        .box-items ul {
            list-style: none;
            padding: 0;
            margin: 0px;
            text-align: left;
        }

        .box-items ul li {
            list-style-position: inherit;

        }

        .box-items li:before {
            position: relative;
            top: 1px;
            display: inline-block;
            font-family: 'Glyphicons Halflings';
            font-style: normal;
            font-weight: normal;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            padding: 6px 15px;
            content: "\e080";
            color: rgb(28, 32, 70);
            list-style-position: inherit;
        }

        .box-items ul a {
            font-weight: 500;
            text-align: left;
            line-height: 1.4;
            color: rgba(25, 25, 25, 1);
            text-decoration: none;
        }

        .box-items ul a:hover {
            color: rgba(77, 84, 31, 1);
            font-weight: 600;
        }
    </style>
    <div class='box-video'>
        <div class='box-text'>
            <div class='title3 title-bv bva'>
                <h3><strong>San Felipe es el primer Barrio Vital</strong></h3>
                <div class='barras'>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-5'>
                            <div class="barra left bva">
                            </div>
                            <div class="barra right bvv">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='video'>
            <div class='embed-responsive embed-responsive-16by9'>
                <iframe width="100%" height="560px" src="https://www.youtube.com/embed/wqVG13WKfb8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="box-mapa">
        <div class='box-text'>
            <div class='title3 title-bv bva'>
                <h3><strong>Intervenciones en el barrio San Felipe</strong></h3>
                <div class='barras'>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-5'>
                            <div class="barra left bva">
                            </div>
                            <div class="barra right bvv">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='box-img'>
            <div class='imagen'>
                <div class='row'>
                    <!-- xs -->
                    <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2022/logo_mapa_xs.png" target="_blank" rel="noopener noreferrer">
                            <img class='img-responsive w-100 img-mapa' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2022/logo_mapa_xs.png' alt='Mapa de intervenciones realizadas en San Felipe' title='Mapa de intervenciones realizadas en San Felipe'>
                        </a>
                    </div>
                    <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2022/logo_convenciones_xs.png" target="_blank" rel="noopener noreferrer">
                            <img class='img-responsive w-100 img-mapa' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2022/logo_convenciones_xs.png' alt='Mapa de intervenciones realizadas en San Felipe' title='Mapa de intervenciones realizadas en San Felipe'>
                        </a>
                    </div>
                    <!-- lg -->
                    <div class='col-sm-12 hidden-xs'>
                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2022/mapa_bv_220512.png" target="_blank" rel="noopener noreferrer">
                            <img class='img-responsive w-100 img-mapa' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2022/mapa_bv_220512.png' alt='Mapa de intervenciones realizadas en San Felipe' title='Mapa de intervenciones realizadas en San Felipe'>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='box-tabs'>

        <div class='box-text'>
            <div class='title3 title-bv bva'>
                <h3><strong>¿Cuáles son los nuevos espacios de San Felipe?</strong></h3>
                <div class='barras'>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-5'>
                            <div class="barra left bva">
                            </div>
                            <div class="barra right bvv">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='tab-content'>
            <ul class='nav nav-tabs nav-justified'>
                <li class='active'><a data-toggle='tab' href='#menu1'>Zonas peatonales</a></li>
                <li><a data-toggle='tab' href='#menu2'>Estacionamiento temporal</a></li>
                <li><a data-toggle='tab' href='#menu3'>Carga y descarga</a></li>
                <li><a data-toggle='tab' href='#menu4'>Uso flexible</a></li>
            </ul>
            <div id='menu1' class='tab-pane fade in active'>
                <div class='box-tab'>
                    <div>
                        <!-- Container for the image gallery -->
                        <div class="container-bv">

                            <!-- Full-width images with number text -->
                            <div class="slides slide1">
                                <div class="numbertext">1 / 3</div>
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2022/img1_a.webp?w=1600&h=1200" style="width:100%">
                            </div>

                            <div class="slides slide1">
                                <div class="numbertext">2 / 3</div>
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2022/img1_b.webp?w=1600&h=1200" style="width:100%">
                            </div>

                            <div class="slides slide1">
                                <div class="numbertext">3 / 3</div>
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2022/img1_c_0.webp" style="width:100%">
                            </div>


                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                            <!-- Image text -->
                            <div class="caption-container-bv">
                                <p id="caption1"></p>
                            </div>

                        </div>
                        <!-- Thumbnail images -->
                        <div class="">
                            <div class="column-box">
                                <img class="demo demo1 cursor" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2022/img1_a.webp?w=1600&h=1200" style="width:100%" onclick="currentSlide(1)" alt="<strong>Zonas peatonales:</strong> las identificas por los colores naranja, amarillo y verde, y se caracterizan por ser zonas seguras para caminar, llevar de manera cómoda los coches o transitar en silla de ruedas de manera más confortable. Además, encuentras nuevas plantas y bancas que propician el encuentro y el disfrute de tu barrio con tus vecinos.">
                            </div>
                            <div class="column-box">
                                <img class="demo demo1 cursor" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2022/img1_b.webp?w=1600&h=1200" style="width:100%" onclick="currentSlide(2)" alt="<strong>Zonas peatonales:</strong> las identificas por los colores naranja, amarillo y verde, y se caracterizan por ser zonas seguras para caminar, llevar de manera cómoda los coches o transitar en silla de ruedas de manera más confortable. Además, encuentras nuevas plantas y bancas que propician el encuentro y el disfrute de tu barrio con tus vecinos.">
                            </div>
                            <div class="column-box">
                                <img class="demo demo1 cursor" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2022/img1_c_0.webp" style="width:100%" onclick="currentSlide(3)" alt="<strong>Zonas peatonales:</strong> las identificas por los colores naranja, amarillo y verde, y se caracterizan por ser zonas seguras para caminar, llevar de manera cómoda los coches o transitar en silla de ruedas de manera más confortable. Además, encuentras nuevas plantas y bancas que propician el encuentro y el disfrute de tu barrio con tus vecinos.">
                            </div>

                        </div>
                    </div>
                </div>

                <style>
                    .tab-pane {
                        position: relative;
                    }

                    .box-descripcion {
                        position: relative;
                        background-color: rgb(28, 32, 70);
                    }

                    .box-descripcion P {
                        color: rgb(255, 255, 255);
                        padding: 15px;
                        font-weight: normal;
                        text-align: justify;
                        line-height: 1.2;
                    }
                </style>
            </div>
            <div id='menu2' class='tab-pane fade'>
                <div class='box-tab'>

                    <div>
                        <!-- Container for the image gallery -->
                        <div class="container-bv">

                            <!-- Full-width images with number text -->
                            <div class="slides slide2">
                                <div class="numbertext">1 / 3</div>
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img2_a.webp?w=1600&h=1200" style="width:100%">
                            </div>

                            <div class="slides slide2">
                                <div class="numbertext">2 / 3</div>
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img2_b_0.webp?w=1600&h=1200" style="width:100%">
                            </div>

                            <div class="slides slide2">
                                <div class="numbertext">3 / 3</div>
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img2_a.webp?w=1600&h=1200" style="width:100%">
                            </div>


                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides2(1)">&#10095;</a>

                            <!-- Image text -->
                            <div class="caption-container-bv">
                                <p id="caption2"></p>
                            </div>

                        </div>
                        <!-- Thumbnail images -->
                        <div class="">
                            <div class="column-box">
                                <img class="demo demo2 cursor" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img2_a.webp?w=1600&h=1200" style="width:100%" onclick="currentSlide2(1)" alt="<strong>Zona de estacionamiento temporal:</strong> las identificas porque están demarcadas con una franja blanca y el símbolo (P de parqueadero). En estas zonas está autorizado el estacionamiento por algunos minutos para quienes deben hacer diligencias cortas. Próximamente, serán adecuadas nuevas zonas de estacionamiento en vía a través del proyecto liderado por la Terminal de Transporte.">
                            </div>
                            <div class="column-box">
                                <img class="demo demo2 cursor" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img2_b_0.webp?w=1600&h=1200" style="width:100%" onclick="currentSlide2(2)" alt="<strong>Zona de estacionamiento temporal:</strong> las identificas porque están demarcadas con una franja blanca y el símbolo (P de parqueadero). En estas zonas está autorizado el estacionamiento por algunos minutos para quienes deben hacer diligencias cortas. Próximamente, serán adecuadas nuevas zonas de estacionamiento en vía a través del proyecto liderado por la Terminal de Transporte.">
                            </div>
                            <div class="column-box">
                                <img class="demo demo2 cursor" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img2_a.webp?w=1600&h=1200" style="width:100%" onclick="currentSlide2(3)" alt="<strong>Zona de estacionamiento temporal:</strong> las identificas porque están demarcadas con una franja blanca y el símbolo (P de parqueadero). En estas zonas está autorizado el estacionamiento por algunos minutos para quienes deben hacer diligencias cortas. Próximamente, serán adecuadas nuevas zonas de estacionamiento en vía a través del proyecto liderado por la Terminal de Transporte.">
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <div id='menu3' class='tab-pane fade'>
                <div class='box-tab'>
                    <div>
                        <!-- Container for the image gallery -->
                        <div class="container-bv">

                            <!-- Full-width images with number text -->
                            <div class="slides slide3">
                                <div class="numbertext">1 / 3</div>
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img3_a_0.webp?w=1600&h=1200" style="width:100%">
                            </div>

                            <div class="slides slide3">
                                <div class="numbertext">2 / 3</div>
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img3_b_0.webp?w=1600&h=1200" style="width:100%">
                            </div>

                            <div class="slides slide3">
                                <div class="numbertext">3 / 3</div>
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img3_c_0.webp?w=1600&h=1200" style="width:100%">
                            </div>


                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides3(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides3(1)">&#10095;</a>

                            <!-- Image text -->
                            <div class="caption-container-bv">
                                <p id="caption3"></p>
                            </div>

                        </div>
                        <!-- Thumbnail images -->
                        <div class="">
                            <div class="column-box">
                                <img class="demo demo3 cursor" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img3_a_0.webp?w=1600&h=1200" style="width:100%" onclick="currentSlide3(1)" alt="<strong>Zona de carga y descarga:</strong> las identificas por estar demarcadas con un recuadro naranja. Están destinadas a facilitar las actividades de aprovisionamiento y traslado de mercancías de bodegas y establecimientos que existen en San Felipe. El uso de estas zonas es temporal, con el fin de que todos los comercios puedan beneficiarse de ellas.">
                            </div>
                            <div class="column-box">
                                <img class="demo demo3 cursor" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img3_b_0.webp?w=1600&h=1200" style="width:100%" onclick="currentSlide3(2)" alt="<strong>Zona de carga y descarga:</strong> las identificas por estar demarcadas con un recuadro naranja. Están destinadas a facilitar las actividades de aprovisionamiento y traslado de mercancías de bodegas y establecimientos que existen en San Felipe. El uso de estas zonas es temporal, con el fin de que todos los comercios puedan beneficiarse de ellas.">
                            </div>
                            <div class="column-box">
                                <img class="demo demo3 cursor" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img3_c_0.webp?w=1600&h=1200" style="width:100%" onclick="currentSlide3(3)" alt="<strong>Zona de carga y descarga:</strong> las identificas por estar demarcadas con un recuadro naranja. Están destinadas a facilitar las actividades de aprovisionamiento y traslado de mercancías de bodegas y establecimientos que existen en San Felipe. El uso de estas zonas es temporal, con el fin de que todos los comercios puedan beneficiarse de ellas.">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div id='menu4' class='tab-pane fade'>
                <div class='box-tab'>
                    <div>
                        <!-- Container for the image gallery -->
                        <div class="container-bv">

                            <!-- Full-width images with number text -->
                            <div class="slides slide4">
                                <div class="numbertext">1 / 3</div>
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img4_a.webp" style="width:100%">
                            </div>

                            <div class="slides slide4">
                                <div class="numbertext">2 / 3</div>
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img4_b.webp" style="width:100%">
                            </div>

                            <div class="slides slide4">
                                <div class="numbertext">3 / 3</div>
                                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img4_c.webp" style="width:100%">
                            </div>


                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides4(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides4(1)">&#10095;</a>

                            <!-- Image text -->
                            <div class="caption-container-bv">
                                <p id="caption4"></p>
                            </div>

                        </div>
                        <!-- Thumbnail images -->
                        <div class="">
                            <div class="column-box">
                                <img class="demo demo4 cursor" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img4_a.webp" style="width:100%" onclick="currentSlide4(1)" alt="<strong>Zona de uso flexible: </strong> están pintadas con círculos azules y además de indicar los accesos a los predios, permiten la circulación de peatones, haciendo las veces de extensión del andén.">
                            </div>
                            <div class="column-box">
                                <img class="demo demo4 cursor" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img4_b.webp" style="width:100%" onclick="currentSlide4(2)" alt="<strong>Zona de uso flexible: </strong> están pintadas con círculos azules y además de indicar los accesos a los predios, permiten la circulación de peatones, haciendo las veces de extensión del andén.">
                            </div>
                            <div class="column-box">
                                <img class="demo demo4 cursor" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-05-2022/img4_c.webp" style="width:100%" onclick="currentSlide4(3)" alt="<strong>Zona de uso flexible: </strong> están pintadas con círculos azules y además de indicar los accesos a los predios, permiten la circulación de peatones, haciendo las veces de extensión del andén.">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="box-videos">
        <div class="row box-wrapper-mov">
            <div class='col-xs-12 col-sm-6'>
                <div class='box-video'>
                    <div class='embed-responsive embed-responsive-16by9'>
                        <iframe width="100%" height="" src="https://www.youtube.com/embed/IMAEW49Y6-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class='col-xs-12 col-sm-6'>
                <div class="box-det_video">
                    <div>
                        <h3>Conoce más sobre Barrios Vitales</h3>
                    </div>
                    <div class="paragraph-video">
                        <p>Este proyecto busca mejorar la calidad de vida de los ciudadanos ofreciendo nuevos espacios para facilitar el encuentro y la permanencia entre vecinos y visitantes de los barrios.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row box-wrapper-mov">
            <div class='col-xs-12 col-sm-6'>
                <div class='box-video'>
                    <div class='embed-responsive embed-responsive-16by9'>
                        <iframe width="100%" height="" src="https://www.youtube.com/embed/fvehlDEnkYU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class='col-xs-12 col-sm-6'>
                <div class="box-det_video">
                    <div>
                        <h3>La comunidad opina sobre Barrios Vitales</h3>
                    </div>
                    <div class="paragraph-video">
                        <p>Las zonas intervenidas con urbanismo táctico, facilitan la permanencia y el encuentro seguro entre vecinos y visitantes de los sectores.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row box-wrapper-mov">
            <div class='col-xs-12 col-sm-6'>
                <div class='box-video'>
                    <div class='embed-responsive embed-responsive-16by9'>
                        <iframe width="100%" height="" src="https://www.youtube.com/embed/nfE8RJcIOI8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class='col-xs-12 col-sm-6'>
                <div class="box-det_video">
                    <div>
                        <h3>Las Cruces será un Barrio Vital</h3>
                    </div>
                    <div class="paragraph-video">
                        <p>Así se vivió la primera intervención piloto realizada en el barrio Las Cruces</p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .box-videos .box-video {
                /* height: 300px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                padding: 10px;
                /* align-items: center; */
            }

            .box-videos .box-det_video {
                /* height: 300px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin: auto;
                padding: 10px;
            }

            .box-wrapper-mov {
                margin: 15px !important;
                background-color: #f5f5f5;
            }
        </style>
    </div>
    <style>
        .box-det_video h3 {
            margin: 10px;
            font-weight: 700;
            text-align: center;
            line-height: 1.2;
            color: rgb(28, 32, 70);
        }

        .paragraph-video {
            background-color: #f5f5f5;
        }

        .box-det_video p {
            font-weight: 500;
            text-align: center;
            line-height: 1.2;
            color: rgba(25, 25, 25, 1);
        }
    </style>
    <div class="b-colaboradores">
        <div class='box-text'>
            <div class="box-title">
                <div class='title3 title-bv bva'>
                    <h3><strong>Colaboradores</strong></h3>
                    <div class='barras'>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-5'>
                                <div class="barra left bva">
                                </div>
                                <div class="barra right bvv">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-paragraph">
                <p>Barrios Vitales es posible gracias a la articulación de la Secretaría Distrital de Movilidad y sus entidades adscritas (IDU y UMV), con los sectores:</p>
                <ul>
                    <li>Secretaría Distrital de Gobierno y Alcaldías Locales.</li>
                    <li>Secretaría Distrital de Seguridad, Convivencia y Justicia.</li>
                    <li>Instituto Distrital para la Participación y Acción Comunal.</li>
                    <li>Secretaría Distrital de Cultura: Instituto Distrital de Patrimonio Cultural, Instituto Distrital de las Artes y Fundación Gilberto Alzate Avendaño.</li>
                    <li>Secretaría Distrital de Desarrollo Económico.</li>
                    <li>Instituto Distrital de Turismo.</li>
                    <li>Secretaría Distrital de Hábitat.
                        <ul>
                            <li>Unidad Administrativa Especial de Servicios Públicos.</li>
                        </ul>
                    </li>
                    <li>Secretaría Distrital de la Mujer.</li>
                    <li>Secretaría Distrital de Ambiente.
                        <ul>
                            <li>Jardín Botánico e Instituto Distrital de Protección y Bienestar Animal.</li>
                        </ul>
                    </li>
                </ul>
                <p>Además, cuenta con el apoyo y consultoría de varias organizaciones internacionales que promueven el desarrollo urbano y social:</p>
                <ul>
                    <li>Banco Mundial</li>
                    <li>Bloomberg Philanthropies</li>
                    <li>Nacto</li>
                    <li>Agencia de Ecología Urbana de Barcelona</li>
                    <li>La Embajada Británica (a través del UK-Pact)</li>
                </ul>
            </div>
            <div class="box-logos">

                <div class='row'>
                    <div class='col-xs-12 col-sm-3'>
                        <div class="imagen">
                            <img class="img-responsive" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2022/logo_bv_c.png' alt='Logo banco mundial' title='Logo banco mundial'>
                        </div>
                    </div>
                    <div class='col-xs-12 col-sm-3'>
                        <div class="imagen">
                            <img class="img-responsive" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2022/logo_bv_a.png' alt='logo Bloomberg Philanthropies' title='logo Bloomberg Philanthropies'>
                        </div>
                    </div>
                    <div class='col-xs-12 col-sm-3'>
                        <div class='imagen'>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2022/logo_bv_b.png' alt='Logo NACTO' title='Logo NACTO'>
                        </div>
                    </div>
                    <div class='col-xs-12 col-sm-3'>
                        <div class='imagen'>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-05-2022/logo_bv_d.png' alt='Logo World Resources Institute | Ross Center' title='Logo World Resources Institute | Ross Center'>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="box-botones">
        <div class='box-text'>
            <div class='title3 title-bv bva'>
                <h3><strong>Recursos</strong></h3>
                <div class='barras'>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-5'>
                            <div class="barra left bva">
                            </div>
                            <div class="barra right bvv">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-12 col-sm-3'>
                <a href="https://drive.google.com/file/d/1tJ9Xn-EXfcZd3azit0Y7iKO5f2u7MeLD/view?usp=sharing" target="_blank" rel="noopener noreferrer">
                    <div class="btn-tab">
                        Documento técnico San Felipe
                    </div>
                </a>
            </div>
            <div class='col-xs-12 col-sm-3'>
                <a href="https://drive.google.com/file/d/17hFmrpD7McOmf9txhx-r_HrhCpVnwCun/view?usp=sharing" target="_blank" rel="noopener noreferrer">
                    <div class="btn-tab">
                        Informe técnico San Felipe
                    </div>
                </a>
            </div>
            <div class='col-xs-12 col-sm-3'>
                <a href="https://drive.google.com/file/d/1tJ9Xn-EXfcZd3azit0Y7iKO5f2u7MeLD/view" target="_blank" rel="noopener noreferrer">
                    <div class="btn-tab">
                        Documento Técnico de Soporte
                    </div>
                </a>
            </div>
            <div class='col-xs-12 col-sm-3'>
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-06-2023/dts_16_11_22_bv_el_porvenir_bosa_signed.pdf" target="_blank" rel="noopener noreferrer">
                    <div class="btn-tab">
                        Documento técnico El Porvenir
                    </div>
                </a>
            </div>
            <div class='col-xs-12 col-sm-3'>
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-06-2023/dts_dpm-et-004-2022_barriovital_lascruces_sanbernardo_vf_firmado.pdf" target="_blank" rel="noopener noreferrer">
                    <div class="btn-tab">
                        Documento técnico Las Cruces - San Bernardo
                    </div>
                </a>
            </div>
            <div class='col-xs-12 col-sm-3'>
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-06-2023/11_04_2023_dts_barrio_vital_san_carlos_firmado.pdf" target="_blank" rel="noopener noreferrer">
                    <div class="btn-tab">
                        Documento técnico San Carlos
                    </div>
                </a>
            </div>
            <div class='col-xs-12 col-sm-3'>
                <a href="" id="btn-preguntas">
                    <div class="btn-tab">
                        Preguntas frecuentes
                    </div>
                </a>
            </div>
        </div>

    </div>
    <div class="box-preguntas" id="preguntas">
        <div class='box-text'>
            <div class="box-title">
                <div class='title3 title-bv bva'>
                    <h3><strong>Preguntas frecuentes</strong></h3>
                    <div class='barras'>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-5'>
                                <div class="barra left bva">
                                </div>
                                <div class="barra right bvv">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-paragraph">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">¿Por qué San Felipe es el primer Barrio Vital?</h3>
                    </div>
                    <div class="panel-body">
                        <p>El barrio San Felipe tiene una vocación cultural y artística, lo cual propicia el interés de la ciudadanía por recorrerlo caminando o en bicicleta, por lo que surge la necesidad de brindar espacios seguros para hacerlo.</p>
                        <p>Muy cerca de San Felipe se implementarán proyectos de transporte y urbanismo como la primera y segunda línea del Metro y la Ciclo Alameda Medio Milenio (la primera autopista para bicicletas de Bogotá que conectará el sector del Tunal con el norte de Bogotá), lo que atraerá más visitantes al barrio y potenciará el sector cultural y comercial.</p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">¿Qué beneficios tiene el proyecto para los habitantes de San Felipe?</h3>
                    </div>
                    <div class="panel-body">
                        <p>En San Felipe se generaron:</p>
                        <ul>
                            <li>1745 m2 de espacio exclusivo para peatones.</li>
                            <li>0.91 Km de calles para la micromovilidad, calles seguras para caminar y andar en bicicleta.</li>
                            <li>30 intersecciones seguras para peatones.</li>
                            <li>5 zonas de carga y descarga.</li>
                            <li>18 cupos de estacionamiento en vía.</li>
                            <li>Se realizaron 23 actividades de participación con la comunidad, las cuales contaron con 970 participantes, el 49% mujeres.</li>
                            <li>Se entregaron 225 materas apadrinadas por la comunidad.</li>
                            <li>El proyecto Barrios Vitales en San Felipe no plantea ciclorrutas nuevas. Sin embargo, en la ciclorruta actual de la Carrera 20C y calle 76 se realiza una actualización de señalización y demarcación en los tramos requeridos.</li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">¿Estas intervenciones afectan el comercio de mi barrio?</h3>
                    </div>
                    <div class="panel-body">
                        <p>Como ahora tendremos un tráfico más calmado y con mayor espacio para los peatones, los ciudadanos podrán tomarse el tiempo de conocer la oferta comercial, gastronómica y artística del barrio, lo que dinamizará estos sectores.</p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">¿El proyecto Barrios Vitales prohíbe el estacionamiento en las vías de mi barrio?</h3>
                    </div>
                    <div class="panel-body">
                        <p>No, los vehículos pueden estacionar temporalmente en la vía en las zonas asignadas para tal fin. Este proyecto también será un piloto de la estrategia de Estacionamiento en Vía que busca generar más cupos en el futuro.</p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">¿Por qué son necesarios los cambios que hacen en los barrios?</h3>
                    </div>
                    <div class="panel-body">
                        <p>San Felipe era utilizado como atajo por un alto número de vehículos, que no viajan desde o hacia el barrio y que transitaban a altas velocidades, poniendo en riesgo la vida de los residentes y visitantes.</p>
                        <p>Con las intervenciones realizadas por Barrios Vitales los peatones tienen más zonas seguras para caminar, se garantiza el acceso vehicular al barrio y a todos los predios y se evita la circulación vehicular en velocidades peligrosas para los actores viales más vulnerables.</p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">¿Cuál es el proceso para que un barrio se convierta en un Barrio Vital?</h3>
                    </div>
                    <div class="panel-body">
                        <p>El proceso inicia con un análisis técnico y social que determina el potencial de una zona para albergar estrategias de mejoramiento de espacio público, redireccionamiento de flujos vehiculares y trabajo de diseño y apropiación de la comunidad.</p>
                        <p>Luego se diseña la estrategia de urbanismo táctico (que hoy se implementa en San Felipe) y se inicia una etapa de seguimiento y sostenibilidad donde se le hace seguimiento al proyecto.</p>
                        <p>Finalmente, se busca que esto alimente el proceso de diseño del Barrio Vital en una etapa definitiva de Obra Civil (Infraestructura) donde las medidas de urbanismo táctico se consolidan a través de un proyecto donde, por ejemplo, se re-construyen ciertas vías con mejores condiciones urbanas y se generan nuevas zonas verdes.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="box-footer">
        <div class="contacto">
            <div class='box-text'>
                <div class='title3 title-bv bva'>
                    <h3><strong>Contacto</strong></h3>
                    <div class='barras'>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-5'>
                                <div class="barra left bva">
                                </div>
                                <div class="barra right bvv">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="paragraph">
                <p>E-mail: <a href="mailto:barriosvitales@movilidadbogota.gov.co">barriosvitales@movilidadbogota.gov.co</a></p>

            </div>
        </div>
    </div>

    <style>
        .box-botones a {
            text-decoration: none !important;
            color: rgba(255, 255, 255, 1);
            background-color: rgb(28, 32, 70) !important;
        }

        .box-botones a .btn-tab:hover {
            color: rgb(102, 224, 38);
        }

        .box-botones a .btn-tab {
            background-color: rgb(28, 32, 70) !important;
            padding: 30px;
            min-height: 60px;
            text-align: center;
            color: rgba(255, 255, 255, 1) !important;
            font-weight: 700;
            margin: auto;
            line-height: 1.2;
            margin-bottom: 16px;
        }

        .box-botones a:hover .btn-tab,
        .box-botones a:focus .btn-tab {
            background-color: rgb(102, 224, 38);
            color: rgba(25, 25, 25, 1);
        }

        .box-botones a .btn-tab:hover {
            background-color: rgb(102, 224, 38) !important;
            color: rgb(28, 32, 70) !important;
        }
    </style>
</div>
<br>
<br>

<!-- End Set Wrapper -->

<!-- Styles -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .barriosVitales {
        max-width: 980px;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.5;
        color: rgba(25, 25, 25, 1);
    }

    .barriosVitales a {

        word-wrap: break-word;
        overflow: hidden !important;
        text-overflow: clip !important;
    }

    /*
    .barriosVitales [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }
    */

    .w-100 {
        width: 100%;
    }

    .box-wrapper {
        margin: 0px !important;
        padding: 0px !important;
    }

    .bva {
        color: rgb(28, 32, 70);
    }

    .bvv {
        color: rgb(102, 224, 38);
    }

    .bvb {
        color: rgb(255, 255, 255);
    }

    .bvg {
        color: rgb(213, 213, 213);
    }

    .box-a {
        background-color: rgba(28, 32, 70);
    }

    .box-v {
        background-color: rgb(102, 224, 38);
    }

    .box-b {
        background-color: rgb(255, 255, 255);
    }

    .box-g {
        background-color: rgb(213, 213, 213);
    }

    .title-bv {
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
    }

    .box-text {
        padding-top: 15px;
        padding-bottom: 8px;
    }

    .box-text .title3 {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .box-paragraph {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .barras {
        padding: 0px;
        margin: 0px;
        position: relative;
    }

    .barra {
        position: absolute;
        border-bottom: solid 3px;
    }

    .left {
        left: 0;
        width: 50%;
    }

    .right {
        width: 50%;
        right: 0px;
    }

    .box-tabs {
        /* margin-bottom: 250px; */
        margin-bottom: 60px;
    }



    .nav-tabs.nav-justified>li>a {
        border-radius: 0px !important;
        background: rgb(28, 32, 70);
        color: rgb(102, 224, 38);
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        cursor: cell;
        background-color: rgb(102, 224, 38) !important;
        color: rgba(25, 25, 25, 1) !important;
        border: 1px solid #ddd;
        border-bottom-color: transparent
    }


    .nav>li>a:focus,
    .nav>li>a:hover {
        background-color: rgb(17, 20, 43) !important;
        color: rgba(255, 255, 255, 1);
    }

    .b-paragraph ul li {
        text-align: left;
        padding: 6px;
    }

    .box-videos {
        padding-top: 20px;
    }
</style>
<!-- End Styles -->
<style>
    @media(max-width:767px) {}

    @media(min-width:768px) {
        .box-head {
            position: absolute;
            margin-right: 30px;
            margin-top: 7px;
        }

        .box-logo {
            padding: 40px;
            height: 512px;
            display: flex;
            flex-direction: column-box;
            justify-content: center;
            align-items: center;
        }

        .box-logo .logo img {
            max-height: 100%;
            width: auto;
            margin: auto;
        }

        .title-bv {
            text-align: left;
        }

        .box-s1 {
            padding: 30px;
        }

        .nav-tabs.nav-justified>li>a {
            height: 80px;

        }

        .box-botones a .btn-tab {
            height: 110px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .paragraph-video {
            padding: 10px;
            min-height: 160px;
            display: flex;
            flex-direction: column-box;
            justify-content: center;
            align-items: center;

        }

        .box-tabs {
            margin-bottom: 250px;
        }


    }

    @media(min-width:992px) {
        .nav-tabs.nav-justified>li>a {
            height: 60px;
            display: flex;
            flex-direction: column-box;
            justify-content: center;
            align-items: center;

        }
    }

    @media(min-width:1200px) {}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.js" integrity="sha512-MHsjLsEcZhZUApST3ylHfvHPfgmLr6PQVfoU6ls2U2NwR0gByVL9AFnphNmOOwcS2pd40nqpGBF1Us4WWCnRcw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {

        $("#preguntas").hide();

        $("#btn").click(function() {
            $("p").hide();
            alert("Desde");
        });
        $("#btn-preguntas").click(function() {
            $("#preguntas").show();
            event.preventDefault();
            s
        });
    });
</script>

<style>
    .menu1 {
        box-sizing: border-box;
    }

    /* Position the image container-bv (needed to position the left and right arrows) */
    .container-bv {
        position: relative;
    }

    /* Hide the images by default */
    .slides {
        display: none;
    }

    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* Container for image text */
    .caption-container-bv {
        text-align: center;
        background-color: #222;
        padding: 16px 16px;
        color: white;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Six columns side by side */
    .column-box {
        float: left;
        width: 33.33334%;
    }

    /* Add a transparency effect for thumnbail images */
    .demo {
        opacity: 0.4;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }
</style>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("slide1");
        let dots = document.getElementsByClassName("demo1");
        let captionText = document.getElementById("caption1");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
<script>
    let slideIndex2 = 1;
    showSlides2(slideIndex2);

    // Next/previous controls
    function plusSlides2(n) {
        showSlides2(slideIndex2 += n);
    }

    // Thumbnail image controls
    function currentSlide2(n) {
        showSlides2(slideIndex2 = n);
    }

    function showSlides2(n) {
        let i;
        let slides = document.getElementsByClassName("slide2");
        let dots = document.getElementsByClassName("demo2");
        let captionText = document.getElementById("caption2");
        if (n > slides.length) {
            slideIndex2 = 1
        }
        if (n < 1) {
            slideIndex2 = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex2 - 1].style.display = "block";
        dots[slideIndex2 - 1].className += " active";
        captionText.innerHTML = dots[slideIndex2 - 1].alt;
    }
</script>
<script>
    let slideIndex3 = 1;
    showSlides3(slideIndex3);

    // Next/previous controls
    function plusSlides3(n) {
        showSlides3(slideIndex3 += n);
    }

    // Thumbnail image controls
    function currentSlide3(n) {
        showSlides3(slideIndex3 = n);
    }

    function showSlides3(n) {
        let i;
        let slides = document.getElementsByClassName("slide3");
        let dots = document.getElementsByClassName("demo3");
        let captionText = document.getElementById("caption3");
        if (n > slides.length) {
            slideIndex3 = 1
        }
        if (n < 1) {
            slideIndex3 = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex3 - 1].style.display = "block";
        dots[slideIndex3 - 1].className += " active";
        captionText.innerHTML = dots[slideIndex3 - 1].alt;
    }
</script>
<script>
    let slideIndex4 = 1;
    showSlides4(slideIndex4);

    // Next/previous controls
    function plusSlides4(n) {
        showSlides4(slideIndex4 += n);
    }

    // Thumbnail image controls
    function currentSlide4(n) {
        showSlides4(slideIndex4 = n);
    }

    function showSlides4(n) {
        let i;
        let slides = document.getElementsByClassName("slide4");
        let dots = document.getElementsByClassName("demo4");
        let captionText = document.getElementById("caption4");
        if (n > slides.length) {
            slideIndex4 = 1
        }
        if (n < 1) {
            slideIndex4 = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex4 - 1].style.display = "block";
        dots[slideIndex4 - 1].className += " active";
        captionText.innerHTML = dots[slideIndex4 - 1].alt;
    }
</script>
