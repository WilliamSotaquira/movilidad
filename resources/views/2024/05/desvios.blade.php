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

        .b3 .img-maps {
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

        @media(min-width:768px) {
            .b3 .cpnt-video {
                margin: 32px 84px;
            }
        }
    </style>
    <div class="box b3">
        <div class="cpnt cpnt-2">

            <!-- collapse-desvios -->
            <div class='panel-group' id='accordion_desvios' role='tablist ' aria-multiselectable='true'>

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
                            <div class='box-1'>
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

                <!-- collapse 2 -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_2'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_desvios' href='#collapse_2' aria-expanded='false' aria-controls='collapse_2'>
                                Entre calles 26 y 32
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_2' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_2' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-2'>
                                <div class="cpnt cpnt-1">
                                    <p class="paragraph">Conoce el cierre de los carriles para vehículos particulares en la Av. Caracas entre las calles 26 y 32 así como los desvíos para movilizarte.</p>
                                </div>
                                <div class="cpnt cpnt-video">
                                    <div class="video video-1 video-16by9">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe width='100%' src='https://www.youtube.com/embed/Z4fnx52C-kE?si=2EKyHsfTM2KQWmDe' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="cpnt cpnt-2">
                                    <div class="sub">
                                        <span>
                                            <h4>Desvíos norte – sur</h4>
                                        </span>
                                    </div>
                                </div>

                                <div class="cpnt cpnt-3">
                                    <p class="paragraph ph-id-4">Los usuarios que circulan por la Av. Caracas hacia el sur pueden tomar la calle 33A al occidente, girar hacia el sur por la carrera 15 hasta la calle 32 y continuar por: </p>
                                </div>
                                <div class="cpnt cpnt-4">
                                    <div class="imagen img-mapa img-mapa-1">
                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-05-2024/recurso_20.png" alt="mapa desvio norte - sur" title="mapa desvio norte - sur">
                                    </div>
                                </div>
                                <div class="cpnt cpnt-5">
                                    <div class="item">
                                        <span class="arrow arr-1"></span>
                                        <p class="paragraph"> Opción 1: La carrera 19B hacia el sur. Girar hacia la izquierda para tomar la Av. Calle 24 hasta la carrera 15 al sur y tomar calle 23 para volver a la Av. Caracas.</p>
                                    </div>
                                    <div class="item">
                                        <span class="arrow arr-2"></span>
                                        <p class="paragraph"> Opción 2: La calle 26 hasta la Av. Caracas hacia el sur.</p>
                                    </div>
                                </div>

                            </div>
                            <!-- box b-3 -->
                            <style>
                                .set-wrapper .b-3 {
                                    grid-area: b-3;
                                    margin: 16px 0px;
                                }
                            </style>
                            <div class="box b-3">
                                <div class="cpnt cpnt-1">
                                </div>
                                <div class="cpnt cpnt-2">
                                    <div class="sub">
                                        <span>
                                            <h4>Desvíos sur – norte</h4>
                                        </span>
                                    </div>
                                </div>
                                <div class="cpnt cpnt-3">
                                    <p class="paragraph ph-id-4">Los usuarios que circulan por la Av. Caracas hacia el norte pueden tomar: </p>
                                </div>
                                <div class="cpnt cpnt-4">
                                    <div class="imagen img-mapa img-mapa-1">
                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-05-2024/recurso_21.png" alt="mapa desvio sur - norte" title="mapa desvio sur - norte">
                                    </div>
                                </div>
                                <div class="cpnt cpnt-5">
                                    <div class="item">
                                        <span class="arrow arr-3"></span>
                                        <p class="paragraph"> Opción 1: La calle 24 al oriente, girar a la izquierda en la Carrera Décima y la Carrera Séptima.</p>
                                    </div>
                                    <div class="item">
                                        <span class="arrow arr-4"></span>
                                        <p class="paragraph"> Opción 2: La Calle 26 al oriente y girar a la izquierda para tomar la Carrera Séptima al norte. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- box b-4 -->
                            <style>
                                .set-wrapper .b-4 {
                                    grid-area: b-4;
                                    margin: 16px 0px;
                                }
                            </style>
                            <div class="box b-4">
                                <div class="cpnt cpnt-1">
                                </div>
                                <div class="cpnt cpnt-2">
                                    <div class="sub">
                                        <span>
                                            <h4>Desvío oriente a norte y sur</h4>
                                        </span>
                                    </div>
                                </div>
                                <div class="cpnt cpnt-3">
                                    <p class="paragraph ph-id-4">Los usuarios que circulan por la Av. Caracas hacia el norte pueden tomar: </p>
                                </div>
                                <div class="cpnt cpnt-4">
                                    <div class="imagen img-mapa img-mapa-1">
                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-05-2024/recurso_22.png" alt="mapa desvio orienta a norte - sur" title="mapa desvio orienta a norte - sur">
                                    </div>
                                </div>
                                <div class="cpnt cpnt-5">
                                    <div class="item">
                                        <span class="arrow arr-5"></span>
                                        <p class="paragraph"> Los usuarios que vienen del oriente por la Calle 26 y se dirigen hacia el norte, pueden tomar la carrera 15 hasta la calle 30, girar a la derecha hasta la carrera 16 y seguir hacia el norte hasta la calle 34. </p>
                                    </div>
                                    <div class="item">
                                        <span class="arrow arr-6"></span>
                                        <p class="paragraph"> Quienes circulan en sentido oriente-occidente por la calle 26 y se dirigen hacia el sur, pueden girar a la derecha por la carrera 20A y subir por la carrera 28 hasta la calle 32 y seguir por la carrera 19B al sur hasta la calle 24, girar hasta la carrera 15 al sur y tomar calle 23 para volver a la Av. Caracas.</p>
                                    </div>
                                </div>
                                <div class="cpnt cpnt-6">
                                    <p class="paragraph">*Estos carriles mixtos en la Av. Caracas solo quedarán habilitados para la circulación del Sistema troncal de TransMilenio.</p>
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
