@extends('welcome')
@section('title','desvios')
@section('contenido')

<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>


<!-- Set desvios -->
<div class="set-wrapper desvios">
    <!-- box b1 -->
    <style>
        .set-wrapper .b1 {
            grid-area: b1;
            margin: 16px 0px;
        }

        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }
    </style>
    <div class="box b1">
        <div class="cpnt cpnt-head">
            <picture>
                <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-05-2024/banner_950x300.png">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-05-2024/banner_340x300.png" class="img-responsive w-100" alt="ancabezado banner desvios por obras del metro" title="Image: ancabezado banner desvios por obras del metro">
            </picture>
        </div>
    </div>
    <!-- box b2 -->
    <style>
        .set-wrapper .b2 {
            grid-area: b2;
            margin: 16px 0px;
            padding: 56px 84px 0 84px;
        }

        .b2 .cpnt-1 .paragraph {
            font-size: 16px;
            font-weight: normal;
            text-align: center;
            line-height: 1.5;
            color: #252525;
            font-family: 'Montserrat', sans-serif;
        }
    </style>
    <div class="box b2">
        <div class="cpnt cpnt-1">
            <p class="paragraph ph-type-1 ph-id-1">
                Teniendo en cuenta los diferentes cierres que se adelantan en la Avenida Caracas para darle paso a la construcción de la Primera Línea del Metro de Bogotá, a continuación se encuentran las opciones de desvíos para movilizarse por esta zona de la ciudad:
            </p>
        </div>
    </div>
    <!-- box b3 -->
    <style>
        .set-wrapper .b3 {
            grid-area: b3;
            margin: 16px 0px;
            padding: 42px;
        }

        .b3 .glyphicon-chevron-right::before {
            color: #af1405 !important;
        }

        .b3 .glyphicon-chevron-left::before {
            color: #af1405 !important;
        }

        .b3 .panel-heading {
            border-color: #ffcb00 !important;
            background-color: #ffcb00 !important;
            background-image: none !important;
        }

        .b3 .panel-heading .panel-title a {
            text-decoration: none;
            color: #252525 !important;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .b3 .panel-heading .panel-title a:after {
            font-family: 'Glyphicons Halflings';
            content: "\e080";
            float: right;
            color: #af1405;
            font-size: 18px;
        }

        .b3 .panel-heading .panel-title a.collapsed:after {
            content: "\e114";
        }

        .desvios .img-maps {
            margin: 24px;
            padding: 12px;
            max-width: 700px;
            margin: auto;
        }

        .b3 .paragraph {
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: normal;
            text-align: left;
            line-height: 1.5;
            color: #252525;
        }

        .set-wrapper .sub {
            height: 30px;
            width: 300px;
            background-color: #ffcb00;
            border-radius: 0 14px 14px 0;
            margin-left: -15px;
            margin-top: 32px;
            margin-bottom: 16px;
        }

        .sub span {
            display: block;
            margin: 0px;
            padding: 7px 16px;


        }

        .sub span h4 {
            margin: 0px;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 700;
            text-align: left;
            line-height: 1.2;
            color: #252525;

        }

        .b3 .img-mapa {
            max-width: 850px;
            margin: auto;
            padding: 32px;
        }

        .set-wrapper .item {
            padding-left: 46px;

        }

        .b3 .arrow {
            display: inline-block;
            position: absolute;
            margin-left: -30px;
            margin-top: -7px;
            bottom: -30px;

        }

        .b3 .arr-1 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-05-2024/recurso_8.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: relative;
            width: 24px;
            height: 24px;
            object-fit: contain;
            object-position: center;

        }

        .b3 .arr-2 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-05-2024/recurso_9.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: relative;
            width: 24px;
            height: 24px;
            object-fit: contain;
            object-position: center;

        }

        .b3 .arr-3 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-05-2024/recurso_10.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: relative;
            width: 24px;
            height: 24px;
            object-fit: contain;
            object-position: center;

        }

        .b3 .arr-4 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-05-2024/recurso_11.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: relative;
            width: 24px;
            height: 24px;
            object-fit: contain;
            object-position: center;

        }

        .b3 .arr-5 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-05-2024/recurso_12.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: relative;
            width: 24px;
            height: 24px;
            object-fit: contain;
            object-position: center;

        }

        .b3 .arr-6 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-05-2024/recurso_13.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: relative;
            width: 24px;
            height: 24px;
            object-fit: contain;
            object-position: center;

        }

        .b3 .arr-7 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2024/arrow2.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: relative;
            width: 24px;
            height: 24px;
            object-fit: contain;
            object-position: center;

        }

        .b3 .arr-8 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2024/arrow4.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: relative;
            width: 24px;
            height: 24px;
            object-fit: contain;
            object-position: center;

        }

        .b3 .arr-9 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2024/arrow5.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: relative;
            width: 24px;
            height: 24px;
            object-fit: contain;
            object-position: center;

        }

        .b3 .arr-10 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2024/arrow6.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: relative;
            width: 24px;
            height: 24px;
            object-fit: contain;
            object-position: center;

        }

        .b3 .arr-11 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2024/arrow7.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: relative;
            width: 24px;
            height: 24px;
            object-fit: contain;
            object-position: center;

        }

        @media(min-width:768px) {
            .b3 .video-1 {
                margin: 32px 84px;
            }
        }
    </style>
    <div class="box b3">
        <div class="cpnt cpnt-2">

            <!-- collapse-desvios -->
            <div class='panel-group' id='accordion_desvios' role='tablist ' aria-multiselectable='true'>

                <!-- collapse_3 -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_3'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_desvios' href='#collapse_3' aria-expanded='false' aria-controls='collapse_3'>
                                Entre calles 57 y 67
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_3' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_3' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='body-collapse_3'>
                                <div class="imagen img-maps">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2024/p1_cierre_av_caracas_63_-_mapas_d_norte-sur_1.jpg" alt="desvios norte-sur" title="desvios norte-sur">
                                </div>
                                <div class="imagen img-maps">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2024/p5_cierre_av_caracas_63_-_mapas_d_oriente-occidente_1.jpg" alt="desvio norte-sur" title="desvio norte-sur">
                                </div>
                                <div class="imagen img-maps">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2024/p6_cierre_av_caracas_63_-_mapas_d_todos_1.jpg" alt="desvio norte-sur" title="desvio norte-sur">
                                </div>
                                <div class="imagen img-maps">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2024/p2_cierre_av_caracas_63_-_mapas_d_sur-norte_1.jpg" alt="desvio sur norte" title="desvio sur norte">
                                </div>
                                <div class="imagen img-maps">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2024/p3_cierre_av_caracas_63_-_mapas_d_oriente-norte_1.jpg" alt="desvio oriente-norte" title="desvio oriente-norte">
                                </div>
                                <div class="imagen img-maps">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2024/p4_cierre_av_caracas_63_-_mapas_d_occidente-norte_2.jpg" alt="desvio occidente-norte" title="desvio occidente-norte">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- collapse 3 -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading-3'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_desvios' href='#collapse-3' aria-expanded='false' aria-controls='collapse-3'>
                                Entre calles 45 y 53
                            </a>
                        </h4>
                    </div>
                    <div id='collapse-3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-3' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='body-collapse-3'>

                                <p class="paragraph ph1">Por las obras de la Primera Línea del Metro de Bogotá, a partir del próximo 05 de julio, los carriles para vehículos particulares de la Avenida Caracas, entre calles 45 y 53, estarán cerrados.</p>
                                <p class="paragraph ph1">Ten en cuenta los siguientes desvíos para que te puedas movilizar por esta zona de la ciudad:</p>
                                <div class="sub">
                                    <span>
                                        <h4>Desvíos norte – sur</h4>
                                    </span>
                                </div>
                                <div class="item">
                                    <span class="arrow arr-2"></span>
                                    <p class="paragraph ph1">Si vas por la Av. Caracas hacia el sur, tomar la diagonal 54 hacia el occiden- te hasta la carrera 15, girar a la izquierda hasta la calle 44, y seguir hasta llegar nuevamente a la Av. Caracas.</p>
                                </div>
                                <div class="sub">
                                    <span>
                                        <h4>Desvíos sur – norte</h4>
                                    </span>
                                </div>
                                <div class="item">
                                    <span class="arrow arr-5"></span>
                                    <p class="paragraph ph1">Si vas por la Av. Caracas hacia el norte, puedes tomar la diagonal 40 A y continuar por la Carrera Séptima.</p>
                                </div>
                                <div class="item">
                                    <span class="arrow arr-7"></span>
                                    <p class="paragraph ph1">También puedes tomar la Av. Calle 45 hacia el oriente hasta la carrera sexta, girar a la izquierda y seguir hasta la calle 46, nuevamente girar a la izquierda hasta la carrera novena y luego tomar la calle 54 al occidente, tomar las carreras décima y octava hasta la calle 57 al occidente hasta la Av. Caracas.</p>
                                </div>
                                <div class="imagen img-mapa img-mapa-1">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2024/mapa1_160624.png" alt="mapa desvios sur - norte" title="mapa desvios sur - norte">
                                </div>
                                <div class="sub">
                                    <span>
                                        <h4>Desvío oriente – norte</h4>
                                    </span>
                                </div>
                                <div class="item">
                                    <span class="arrow arr-8"></span>
                                    <p class="paragraph ph1">También puedes tomar la Av. Calle 45 hacia el oriente hasta la carrera sexta, girar a la izquierda y seguir hasta la calle 46, nuevamente girar a la izquierda hasta la carrera novena y luego tomar la calle 54 al occidente, tomar las carreras décima y octava hasta la calle 57 al occidente hasta la Av. Caracas.</p>
                                </div>
                                <div class="sub">
                                    <span>
                                        <h4>Desvío oriente – sur</h4>
                                    </span>
                                </div>
                                <div class="item">
                                    <span class="arrow arr-9"></span>
                                    <p class="paragraph ph1">Si vas por la calle 45, seguir hasta la carrera 15 A Bis girar a la derecha y continuar hasta la calle 46, luego girar hacia la derecha y en la carrera 15 girar nuevamente a la derecha hasta la calle 44, girar a la izquierda y por esta seguir hacia el oriente hasta la Av. Caracas.</p>
                                </div>
                                <div class="imagen img-mapa img-mapa-1">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2024/mapa2_160624.png" alt="mapa desvios oriente - sur" title="mapa desvios oriente - sur">
                                </div>
                                <div class="sub">
                                    <span>
                                        <h4>Desvío occidente - norte</h4>
                                    </span>
                                </div>
                                <div class="item">
                                    <span class="arrow arr-10"></span>
                                    <p class="paragraph ph1">Si vas por la calle 53, seguir hasta la Carrera Séptima y luego girar a la izquierda para seguir hacia el norte.</p>
                                </div>
                                <div class="sub">
                                    <span>
                                        <h4>Desvío oriente - sur</h4>
                                    </span>
                                </div>
                                <div class="item">
                                    <span class="arrow arr-11"></span>
                                    <p class="paragraph ph1">Si vas por la calle 53, tomar la carrera 16 hacia el norte hasta la calle 54 A, girar a la derecha y seguir hasta la carrera 15, girar a la derecha hasta la calle 44, girar a la izquierda y seguir hasta llegar nuevamente a la Av. Caracas al sur.</p>
                                </div>
                                <div class="imagen img-mapa img-mapa-1">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-06-2024/mapa3_160624.png" alt="mapa desvios oriente - sur" title="mapa desvios oriente - sur">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- collapse 2 -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_2'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_desvios' href='#collapse_2' aria-expanded='false' aria-controls='collapse_2'>
                                Entre calles 26 y 32
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_2' aria-expanded='false'>
                        <div class='panel-body'>

                            <p class="paragraph">Conoce el cierre de los carriles para vehículos particulares en la Av. Caracas entre las calles 26 y 32 así como los desvíos para movilizarte.</p>
                            <div class="video video-1 video-16by9">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width='100%' src='https://www.youtube.com/embed/Z4fnx52C-kE?si=2EKyHsfTM2KQWmDe' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="sub">
                                <span>
                                    <h4>Desvíos norte – sur</h4>
                                </span>
                            </div>

                            <p class="paragraph ph-id-4">Los usuarios que circulan por la Av. Caracas hacia el sur pueden tomar la calle 33A al occidente, girar hacia el sur por la carrera 15 hasta la calle 32 y continuar por: </p>
                            <div class="imagen img-mapa img-mapa-1">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-05-2024/recurso_20.png" alt="mapa desvio norte - sur" title="mapa desvio norte - sur">
                            </div>
                            <div class="item">
                                <span class="arrow arr-1"></span>
                                <p class="paragraph"> Opción 1: La carrera 19B hacia el sur. Girar hacia la izquierda para tomar la Av. Calle 24 hasta la carrera 15 al sur y tomar calle 23 para volver a la Av. Caracas.</p>
                                <div class="item">
                                    <span class="arrow arr-2"></span>
                                    <p class="paragraph"> Opción 2: La calle 26 hasta la Av. Caracas hacia el sur.</p>
                                </div>
                            </div>
                            <div class="sub">
                                <span>
                                    <h4>Desvíos sur – norte</h4>
                                </span>
                            </div>


                            <p class="paragraph ph-id-4">Los usuarios que circulan por la Av. Caracas hacia el norte pueden tomar: </p>
                            <div class="imagen img-mapa img-mapa-1">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-05-2024/recurso_21.png" alt="mapa desvio sur - norte" title="mapa desvio sur - norte">
                            </div>
                            <div class="item">
                                <span class="arrow arr-3"></span>
                                <p class="paragraph"> Opción 1: La calle 24 al oriente, girar a la izquierda en la Carrera Décima y la Carrera Séptima.</p>
                            </div>
                            <div class="item">
                                <span class="arrow arr-4"></span>
                                <p class="paragraph"> Opción 2: La Calle 26 al oriente y girar a la izquierda para tomar la Carrera Séptima al norte. </p>
                            </div>


                            <div class="sub">
                                <span>
                                    <h4>Desvío oriente a norte y sur</h4>
                                </span>
                            </div>
                            <p class="paragraph ph-id-4">Los usuarios que circulan por la Av. Caracas hacia el norte pueden tomar: </p>
                            <div class="imagen img-mapa img-mapa-1">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-05-2024/recurso_22.png" alt="mapa desvio orienta a norte - sur" title="mapa desvio orienta a norte - sur">
                            </div>
                            <div class="item">
                                <span class="arrow arr-5"></span>
                                <p class="paragraph"> Los usuarios que vienen del oriente por la Calle 26 y se dirigen hacia el norte, pueden tomar la carrera 15 hasta la calle 30, girar a la derecha hasta la carrera 16 y seguir hacia el norte hasta la calle 34. </p>
                            </div>
                            <div class="item">
                                <span class="arrow arr-6"></span>
                                <p class="paragraph"> Quienes circulan en sentido oriente-occidente por la calle 26 y se dirigen hacia el sur, pueden girar a la derecha por la carrera 20A y subir por la carrera 28 hasta la calle 32 y seguir por la carrera 19B al sur hasta la calle 24, girar hasta la carrera 15 al sur y tomar calle 23 para volver a la Av. Caracas.</p>
                            </div>
                            <p class="paragraph">*Estos carriles mixtos en la Av. Caracas solo quedarán habilitados para la circulación del Sistema troncal de TransMilenio.</p>
                        </div>
                    </div>
                </div>

                <!-- collapse 1 -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_1'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_desvios' href='#collapse_1' aria-expanded='false' aria-controls='collapse_1'>
                                Entre calles 69 y 77
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_1' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='g1'>
                                <div class="img-maps">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2024/mapa1.png">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2024/mapa1.png" class="img-responsive w-100" alt="Mapa 1 cierres entre calles 69 y 77" title="Image: Mapa 1 cierres entre calles 69 y 77">
                                    </a>
                                </div>
                                <div class="img-maps">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2024/mapa2.png">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-05-2024/mapa2.png" class="img-responsive w-100" alt="Mapa 2 cierres entre calles 69 y 77" title="Image: Mapa 1 cierres entre calles 69 y 77">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /#fin -desvios -->

        </div>
    </div>

</div>
<!-- Fin Set -->
