@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='encabezado'>
        <div class='row'>
            <div class='col-xs-12 col-sm-6 col-md-6'>
                <div class="titulo">
                    <h3><span class="txt-enf-enc1">Agentes de</span><br> Tránsito Civiles</h3>
                    <span class="triangulo"></span>
                </div>
                <div class="franja1">
                    <p>Llegamos para cuidarte</p>
                </div>
            </div>
            <div class='col-xs-12 col-sm-6 col-md-6 img-encabezado'>
            </div>
        </div>
    </div>
    <style>
        /* Estilo se la seccion de encabezado */
        .seccion {
            padding: 0px !important;
        }

        .encabezado {
            background: rgba(31, 34, 62, 1);
            margin: 0px;
            padding: 0px;
        }

        .encabezado .row {
            margin: 0px;
            padding: 0px;
        }

        .encabezado [class*='col-'] {
            margin: 0px;
            padding: 0px;
        }

        .encabezado .titulo {
            position: relative;
            margin: 0px;
        }

        .encabezado .titulo h3 {
            color: rgba(255, 255, 255, 1);
            margin: 0px;
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
            font-weight: 900;
            text-align: center;
            line-height: 1;
            text-transform: uppercase;
            padding: 35px;
        }

        .encabezado .titulo .txt-enf-enc1 {
            font-size: 42px;
        }

        .encabezado .franja1 {
            background: rgba(190, 208, 0, 1);
        }

        .encabezado .franja1 p {
            text-align: center;
            padding: 5px;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 20px;
            margin: 0px;
            letter-spacing: 1.2;
        }

        .encabezado .img-encabezado {
            height: 200px;
            background: no-repeat rgba(31, 34, 62, 1) url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2022/img-enc-agentes-1.webp');
            background-size: cover;

        }

        .encabezado .triangulo {
            width: 0;
            height: 0;
            border-left: 30px solid rgba(31, 34, 62, 1);
            border-top: 30px solid transparent;
            border-bottom: 30px solid transparent;
            position: absolute;
            right: -28px;
            top: calc(50% - 10px);
            z-index: 10;
        }

        @media(max-width:767px) {
            .encabezado .triangulo {
                visibility: hidden;
                right: 0px;
            }
        }
    </style>
    <div class="gridDescripcion">
        <div class="textoDescripcion">
            <p>Los <strong>Agentes de Tránsito Civiles son empleados públicos investidos de autoridad como Agentes de Tránsito y Transporte</strong>, vinculados directamente y vigilados de manera estricta por la Secretaría Distrital de Movilidad. Ellos velarán por el orden del flujo vehicular y peatonal en las vías públicas mediante funciones preventivas, de asistencia técnica, regulación y control de las normas de tránsito.</p>
        </div>
        <div class="videoDescripcion">
            <div class='video'>
                <div class='embed-responsive embed-responsive-4by3'>
                    <iframe width='100%' src="https://www.youtube.com/embed/Q8SU2pkA8zA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="parrafoVideo">
                    <p>Su apoyo es fundamental en la planeación, gestión, administración y logística de los temas de tránsito en la ciudad. ¡Conócelos y acata con respeto sus indicaciones!</p>
                </div>
            </div>
        </div>
        <div class="videoExperiencia">
            <div class='video'>
                <div class='embed-responsive embed-responsive-4by3'>
                    <iframe width='100%' src="https://www.youtube.com/embed/4bs70TOlECU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="parrafoVideo">
                    <p>Carlos Balaguera es uno de los Agentes de Tránsito Civiles que a diario trabaja por mejorar la movilidad de la ciudad. En este vídeo te contamos su historia y cómo su gestión en vía es tan importante para todos los ciudadanos.</p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .gridDescripcion {
            padding: 30px;

            display: grid;
            gap: 30px;
            grid-auto-flow: dense;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: auto;
            grid-template-areas:
                'texto texto'
                'video1 video2';
        }

        .textoDescripcion {
            grid-area: texto;
        }

        .textoDescripcion p {
            font-size: 16px;
            font-weight: 500;
            text-align: left;
            line-height: 1.5;
            color: rgba(25, 28, 58, 1);
        }

        .videoDescripcion {
            grid-area: video1;
        }

        .videoExperiencia {
            grid-area: video2;
        }

        .video p {
            font-size: 15px;
            font-weight: 500;
            text-align: justify;
            line-height: 1.5;
            color: rgba(25, 28, 58, 1);
            padding: 10px;
        }

        @media(max-width:767px) {
            .gridDescripcion {
                grid-template-columns: 1fr;
                grid-template-areas:
                    'texto'
                    'video1'
                    'video2';
                padding: 10px;
            }
        }
    </style>
    <!-- <div class="s1">
        <div class="row atc_enc_res">
            <div class="col-xs-12 col-sm-5">
                <div class="res_txt">
                    <div>
                        <p class="parrafo">Los <strong>Agentes de Tránsito Civiles son empleados públicos investidos de autoridad como Agentes de Tránsito y Transporte,</strong> vinculados directamente y vigilados de manera estricta por la Secretaría Distrital de Movilidad. Ellos velarán por el orden del flujo vehicular y peatonal en las vías públicas mediante funciones preventivas, de asistencia técnica, regulación y control de las normas de tránsito.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-7">
                <div class="res_video">
                    
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/VKaHaeY1n0w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="pilares">
        <div class="nav-box">
            <div class="titulo-nav">
                <h3>Su labor sefundamenta en 3 pilares:</h3>
            </div>
            <ul class="nav nav-pills nav-justified">
                <li class="active">
                    <a data-toggle="pill" href="#tab1">
                        <div class="icono-box">
                            <div class="icono icono1">
                            </div>
                        </div>
                    </a>
                </li>
                <li><a data-toggle="pill" href="#tab2">
                        <div class="icono-box">
                            <div class="icono icono2">
                            </div>
                        </div>
                    </a></li>
                <li><a data-toggle="pill" href="#tab3">
                        <div class="icono-box">
                            <div class="icono icono3">
                            </div>
                        </div>
                    </a></li>
            </ul>

            <div class="tab-content">
                <div id="tab1" class="tab-pane fade in active">
                    <div class="box-parrafos">
                        <h3>Confianza y transparencia</h3>
                        <p>Los Agentes de tránsito civiles siguen los lineamientos de las <strong>“Guías de Gestión y Control de Tránsito y Transporte”</strong> que contienen las recomendaciones para la planificación, desarrollo de los controles operativos en vía y el uso de medios técnicos y tecnológicos de acuerdo con la normatividad nacional y distrital vigente en materia de tránsito, transporte, movilidad y seguridad vial, las cuales estarán disponibles para que la ciudadanía las consulte. Además, se establecerá el uso de BodyCams como herramienta que dará transparencia a los procesos.</p>
                    </div>
                </div>
                <div id="tab2" class="tab-pane fade">
                    <div class="box-parrafos">
                        <h3>Control y seguimiento</h3>
                        <p>La labor de los agentes de tránsito civiles está supervisada de manera estricta por la Secretaría Distrital de Movilidad. Los agentes se rigen bajo el <strong>Sistema de Gestión Antisoborno</strong> al igual que de un <strong>Comité de Ética</strong> que vinculará a los bogotanos en el control de su gestión.</p>
                    </div>
                </div>
                <div id="tab3" class="tab-pane fade">
                    <div class="box-parrafos">
                        <h3>Capacitación</h3>
                        <p>Los agentes civiles pasan por una formación rigurosa, especializada y planificada. Además, de forma recurrente, recibirán por parte de la SDM cursos de actualización normas y procedimientos de tránsito y transporte, seguridad vial y policía judicial, relaciones humanas, éticas y morales.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .pilares {
            border: solid 1px #d1d1d1;
            margin-bottom: 35px;
        }

        .pilares .nav-box .titulo-nav {
            background-color: rgba(190, 208, 0, 1);
            height: 100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: center;
            border: #d1d1d1 solid 1px;

        }

        .pilares .nav-box .titulo-nav h3 {
            font-size: 20px;
            font-weight: 700;
            text-align: center;
            line-height: 1;
            color: #ffffff;
            text-transform: uppercase;
            margin: 0px;

        }

        .pilares .icono-box {
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: center;

        }

        .pilares .icono {
            height: 130px;
        }

        .pilares .icono1 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2022/icono1.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        .pilares .nav-pills>li>a {
            border-radius: 0px;
            border-left: #d1d1d1 solid 1px;
            border-right: #d1d1d1 solid 1px;
            border-right: #d1d1d1 solid 1px;

        }

        .pilares .nav-pills>li.active>a .icono1,
        .pilares .nav-pills>li.active>a:focus .icono1 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2022/icono1_verde.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;

        }

        .pilares .icono2 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2022/icono2.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        .pilares .nav-pills>li.active>a .icono2,
        .pilares .nav-pills>li.active>a:focus .icono2 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2022/icono2_verde.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;

        }

        .pilares .icono3 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2022/icono3.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        .pilares .nav-pills>li.active>a .icono3,
        .pilares .nav-pills>li.active>a:focus .icono3 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2022/icono3_verde.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;

        }

        .pilares .nav-pills>li.active>a,
        .pilares .nav-pills>li.active>a:focus,
        .pilares .nav-pills>li.active>a:hover {
            background-color: #f6f6f6;
        }

        .pilares .tab-pane {
            background-color: #f6f6f6;
            border-left: #d1d1d1 solid 1px;
            border-right: #d1d1d1 solid 1px;
            border-top: #d1d1d1 solid 1px;
        }

        .pilares .box-parrafos {
            padding: 10px;

        }

        .pilares .box-parrafos h3 {
            font-size: 20px;
            font-weight: 700;
            text-align: center;
            line-height: 1;
            color: rgba(31, 34, 62, 1);
            padding-bottom: 10px;
            border-bottom: solid 2px rgba(190, 208, 0, 1);
            margin-bottom: 20px;
        }

        .pilares .box-parrafos p {
            font-size: 16px;
            font-weight: normal;
            text-align: center;
            line-height: 1.8;
            color: rgba(31, 34, 62, 1);
            padding: 5%;
        }

        .pilares .tab-content {
            /* border: solid 1px #929292; */
        }
    </style>
    <div class="s2">
        <div class="tabs">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a class="parrafo" href="#funciones" aria-controls="funciones" role="tab" data-toggle="tab">
                        <div class="btn-nav">
                            <div class="img-nav">
                                <img class='img-responsive' height="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2022/icono_pregunta1.png' alt='Icono funciones Agentes Civiles de Tránsito' title='Icono funciones Agentes Civiles de Tránsito'>
                            </div>
                            <div>
                                ¿Cuáles serán las funciones de los Agentes Civiles de Tránsito?
                            </div>
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a class="parrafo" href="#agentes" aria-controls="agentes" role="tab" data-toggle="tab">
                        <div class="btn-nav">
                            <div class="img-nav">
                                <img class='img-responsive' height="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2022/icono_pregunta2.png' alt='Icono funciones Agentes Civiles de Tránsito' title='Icono funciones Agentes Civiles de Tránsito'>
                            </div>
                            <div>
                                ¿Cómo identificar a los Agentes Civiles de Tránsito?
                            </div>
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a class="parrafo" href="#controles" aria-controls="controles" role="tab" data-toggle="tab">
                        <div class="btn-nav">
                            <div class="img-nav">
                                <img class='img-responsive' height="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2022/icono_pregunta3.png' alt='Icono funciones Agentes Civiles de Tránsito' title='Icono funciones Agentes Civiles de Tránsito'>
                            </div>
                            <div>
                                ¿Cómo se realizará el control de los Agentes de Tránsito Civiles?
                            </div>
                        </div>
                    </a>
                </li>
            </ul>


            <!-- Tab panes -->
            <div class="tab-content">

                <div role="tabpanel" class="tab-pane fade in active" id="funciones">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="img-tabpanes-lg">
                                <div class="img1"></div>
                                <!-- <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-11-2021/ima_1_micrsitio_agentes_civiles.png" alt=""> -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="text-tabpanes">
                                <div class="tt-titulo">
                                    <h3 class="titulo2">¿Cuáles serán las funciones de los Agentes Civiles de Tránsito?</h3>
                                </div>
                                <div class="tt-descripcion">
                                    <p class="parrafo"><strong>Los agentes de tránsito civiles trabajaran de la mano con la policía de tránsito, tendrán las mismas funciones y realizaran las mismas tareas como lo son:</strong>
                                    <ul>
                                        <li>Facilitar la movilidad.</li>
                                        <li>Requerir a conductores documentación en vía.</li>
                                        <li>Imponer Comparendos e Informes al Transporte.</li>
                                        <li>Inmovilizar los vehículos automotores (con grúa o cepo) cuando las normas lo determinen.</li>
                                        <li>Ejercer funciones de policía judicial en siniestros con lesionados o víctimas fatales.</li>
                                        <li>Informar todo tipo de siniestros y casos de tránsito, realizando el respectivo informe.</li>
                                        <li>Ejecutar controles de velocidad, operativos de embriaguez, de invasión del espacio público entre otros.</li>
                                        <!-- <li>Realizar la grabación de todos los procedimientos mediante la cámara corporal (bodycam).</li> -->
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="agentes">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="img-tabpanes">
                                <div class="img2">

                                </div>
                                <!-- <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-11-2021/ima_2_collage_micrsitio_agentes_civiles.png" alt=""> -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="text-tabpanes">
                                <div class="tt-titulo">
                                    <h3 class="titulo2">¿Cómo identificar a los Agentes Civiles de Tránsito?</h3>
                                </div>
                                <div class="tt-descripcion">
                                    <p class="parrafo">Todo integrante del cuerpo de agentes de tránsito civiles, <strong>llevará en la parte de la espalda de la camiseta, el chaleco y la chaqueta, el número consecutivo que lo identificará, en un tamaño visible y en material reflectivo; igualmente, estará ubicado en su casco.</strong> También una placa metálica con el número consecutivo estará visible con el número de distinción.</p>
                                    <p class="parrafo">La gorra, que conservará el mismo color azul turquí tendrá los distintivos según la jerarquía, por ejemplo: <strong>El comandante:</strong> Tendrá tres estrellas de 5 puntas en medio de palmas de laurel por su parte <strong>el subcomandante,</strong> tendrá dos estrellas, <strong>el técnico operativo una estrella,</strong> de 5 puntas en medio de un corchete angular y <strong>los agentes</strong> llevaran en su gorra línea inclinada y las letras TT que significan tránsito y transporte.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="controles">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-push-6">
                            <div class="text-tabpanes">
                                <div class="tt-titulo">
                                    <h3 class="titulo2">¿Cómo se realizará el control de los Agentes de Tránsito Civiles?</h3>
                                </div>
                                <div class="tt-descripcion">
                                    <p class="parrafo">El control a los Agentes de Tránsito se realizará en <strong>-dos vías,</strong></p>
                                    <p class="parrafo"><span class="enf">la primera,</span> es que al ser funcionarios públicos estarán cobijados bajo las políticas y lineamientos de Antisoborno y Código de Integridad se les realizará seguimiento en la comisión de ética y la comisión de tránsito y serán probados con sistemas de polígrafo desde su selección y durante la ejecución de sus funciones.</p>
                                </div>
                            </div>
                            <div class="img-tabpanes hidden-xs">
                                <div class="img4"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                            <div class="img-tabpanes">
                                <div class="img3"></div>
                            </div>
                            <div class="img-tabpanes">

                                <div class="text-tabpanes">
                                    <div class="tt-descripcion">
                                        <p class="parrafo"><span class="enf">La segunda vía</span> de control serán las cámaras corporales que <strong>grabarán en audio y video la interacción entre el Agente y los ciudadanos.</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .s2 .nav-tabs>li.active>a,
        .s2 .nav-tabs>li.active>a:focus,
        .s2 .nav-tabs>li.active>a:hover {
            height: 160px !important;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #2A2F4C !important;
        }

        .s2 .nav-tabs {
            height: 160px;
        }

        .s2 .nav .parrafo {
            /* height: 250px; */
        }

        .s2 .img-nav {
            height: 90px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: center;
        }

        .s2 .img-nav img {
            width: 70px;
            margin: auto;
        }

        @media (min-width: 768px) {
            .s2 .nav-tabs>li a {
                height: 160px !important;
            }

            .s2 .nav-tabs>li {
                height: 160px !important;
            }

            .s2 .nav-tabs>li a:visited {
                background-color: #929292;
            }


        }
    </style>
    <style>
        .s2 .nav-tabs>li {
            background-color: #1f223e;
            width: 100%;

        }

        .s2 .nav>li>a:focus,
        .s2 .nav>li>a:hover {
            text-decoration: none;
            background-color: #2a2e4b !important;
            border-bottom: solid 6px #bed000 !important;
        }



        .s2 .nav-tabs>li.active {
            background-color: #1f223e;

        }

        .s2 .nav-tabs>li a {
            margin-right: 0px;
            border: none;
            border-radius: 0px;
            border-bottom: solid 6px #1f223e;

            font-size: 16px;
            font-weight: 700;
            text-align: center;
            line-height: 1.1;
            color: rgba(255, 255, 255, 1);
        }

        .s2 .nav-tabs>li a:hover {
            /* color: #1f223e; */
            color: rgba(255, 255, 255, 1);
        }

        .s2 .nav-tabs>li.active>a,
        .s2 .nav-tabs>li.active>a:focus,
        .s2 .nav-tabs>li.active>a:hover {
            color: rgba(31, 34, 62, 1) !important;
            background-color: rgba(190, 208, 0, 1) !important;
            cursor: default;
            border: 1px solid #d5d5d5 !important;
            border-bottom: solid 6px #d5d5d5 !important;
            border-bottom-color: transparent;
            /* background-color: #1f223e !important; */
        }

        .s2 .tab-content {
            padding: 25px;
        }

        .s2 .img-tabpanes {
            padding-left: 15px;
            padding-right: 15px;
            margin-top: 30px;
        }

        .s2 .text-tabpanes .tt-titulo {
            padding: 2vw 4vw;
        }

        .s2 .text-tabpanes .tt-titulo h3 {
            font-size: 24px;
            font-weight: 700;
            text-align: center;
            line-height: 1.2;
            color: rgba(31, 34, 62, 1);
            margin: 0px;
            padding: 15px;
            border-bottom: 2px solid rgba(190, 208, 0, 1);
        }


        .s2 .text-tabpanes .tt-descripcion {
            padding: 4vw;

        }

        .s2 .text-tabpanes .tt-descripcion p {
            font-size: 14px;
            font-weight: normal;
            text-align: justify;
            line-height: 1.5;
            color: rgba(31, 34, 62, 1);

        }

        .s2 .tt-descripcion ul {
            list-style: none;
            padding-inline-start: 20px;
            /* Remove default bullets */
        }

        .s2 .tt-descripcion ul li {
            padding-top: 10px;
            padding-left: 5px;
            font-size: 14px;
            font-weight: normal;
            text-align: justify;
            line-height: 1.5;
            color: rgba(31, 34, 62, 1);
        }

        .s2 .tt-descripcion ul li::before {
            content: "\2022";
            /* Add content: \2022 is the CSS Code/unicode for a bullet */
            color: #bed000;
            /* Change the color */
            font-weight: bold;
            /* If you want it to be bold */
            display: inline-block;
            /* Needed to add space between the bullet and the text */
            width: 1em;
            /* Also needed for space (tweak if needed) */
            margin-left: -1em;
            /* Also needed for space (tweak if needed) */
        }


        .img-footer {
            padding: 4vw;
        }

        .img1 {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-12-2021/_jrg9884.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top center;
            height: 600px;
            margin: 15px;

        }

        .img2 {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-12-2021/_jrg9896.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top center;
            height: 350px;


        }

        .img3 {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2022/agentes_3-1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top right;
            height: 350px;
            background-position: -120px 0px;


        }

        .img4 {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-12-2021/img4.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top right;
            height: 197px;

        }
    </style>
    <div class="s3">
        <div class="normativo">
            <div class='row'>
                <div class='col-xs-4 col-sm-5 col-md-5'>
                    <div class="line-box">
                        <div>
                            <hr class="hr-middle">
                        </div>
                    </div>
                </div>
                <div class='col-xs-4 col-sm-2 col-md-2'>
                    <div class="img-box">
                        <div>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-03-2022/iconomarconormativo.png' alt='icono normatividad' title='icono normatividad'>
                        </div>
                    </div>
                </div>
                <div class='col-xs-4 col-sm-5 col-md-5'>
                    <div class="line-box">
                        <div>
                            <hr class="hr-middle">
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-xs-12 col-sm-12 col-md-12'>
                    <div class="parrafo-box">
                        <h3>Marco Normativo</h3>
                        <p>Si desea conocer la normatividad vigente que rige la actividad de los agentes de tránsito civiles, puede descargar el documento completo haciendo <a href="http://">clic aquí</a>.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-xs-12 col-sm-12 col-md-12'>
                    <div class="line-box">
                        <div>
                            <hr class="hr-middle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .s3 {
            margin-top: 30px;
        }

        .s3 .line-box {
            height: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: center;

        }

        .s3 .line-box .hr-middle {
            border-top: solid 5px rgba(190, 208, 0, 1);
        }

        .s3 .img-box {
            height: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: center;
        }

        .s3 .normativo img {
            padding: 10%;
            width: 100px;
            margin: auto;
        }

        .s3 .parrafo-box {
            padding: 0px 10% 15px 10%;
        }

        .s3 .parrafo-box h3 {
            font-size: 28px;
            font-weight: 700;
            text-align: center;
            line-height: 1.4;
            color: rgba(31, 34, 62, 1);
            text-transform: uppercase;
            margin: 15px;
        }

        .s3 .parrafo-box p {
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            line-height: 1.5;
            color: rgba(31, 34, 62, 1);
        }
    </style>
</div>


<style>
    .s1 {
        margin: 20px 10px;
    }

    .atc_enc_res .res_txt {
        height: 400px;
        padding: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        justify-items: center;
        text-align: initial;
    }

    .atc_enc_res .res_txt p {
        font-size: 16px;
        font-weight: normal;
        text-align: left;
        line-height: 1.5;
        color: rgba(31, 34, 62, 1);
    }

    .res_video {
        height: auto;

        display: flex;
        justify-content: center;
        justify-items: center;
        flex-direction: column;
        padding: 10px;
        margin-bottom: 15px;
    }


    @media(max-width:767px) {}

    @media(min-width:768px) {}

    @media(min-width:992px) {}

    @media(min-width:1200px) {
        .s1 .atc_enc_res .res_txt {
            padding: 2vw;
        }

    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .seccion {
        max-width: 940px;
        font-family: 'Montserrat', sans-serif;
        font-size: 13px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.5;
    }


    .w-100 {
        width: 100%;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<style>
    @media(min-width:768px) {


        .s1 {
            margin: 20px 10px !important;
        }

        .hard-floor {
            font-size: 13px !important;
        }

        .res_video {
            height: 380px;
            display: flex;
            justify-content: center;
            justify-items: center;
            flex-direction: column;
            padding: 10px;
        }

        .pilares .box-parrafos {
            padding: 5% 15%;
        }

        .s2 .nav-tabs>li {
            background-color: #1f223e;
            width: 33.333%;
            height: 80px;
        }

        .s2 .nav-tabs>li a {
            height: 80px;
        }

        .s2 .img-tabpanes-lg {
            padding-left: 15px;
            padding-right: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: center;
            height: 630px;
        }

        #agentes>div:nth-child(1)>div:nth-child(1)>div:nth-child(1)>img:nth-child(1) {
            max-height: 520px;
            width: auto;
            text-align: center;
            margin: auto;
        }

        .s2 .text-tabpanes .tt-descripcion {
            padding: 1vw 4vw;

        }

        /* En línea #11 | https://www.movilidadbogota.gov.co/web/agentesdetransitociviles */

        .img1 {
            margin: 15px;
        }

        .img2 {
            height: 440px;
        }

        .img3 {
            height: 575px;
            background-position: -350px 0px;
        }

        .img4 {
            height: 320px;
        }

        .pilares .nav-box .titulo-nav {
            height: 60px;
        }


    }

    @media(min-width:992px) {

        .s1 {
            margin: 0px 30px;
        }

        .s2 .img-tabpanes-lg {
            padding-left: 15px;
            padding-right: 15px;
            display: inline;
            /* flex-direction: column; */
            /* justify-content: center; */
            justify-items: center;
            height: 460px;
            text-align: center;
            margin: auto;
        }

        /* En línea #11 | https://www.movilidadbogota.gov.co/web/agentesdetransitociviles */

        .img1 {
            height: 460px;
            margin: 15px;
        }

        .img2 {
            height: 390px;
        }

        .img3 {
            height: 360px;
            background-position: -130px 0px;

        }

        .img4 {
            height: 370px;
        }

    }

    @media(min-width:1200px) {
        .hard-floor {
            font-size: 16px !important;
        }


        .s1 .atc_enc {
            padding: 1.2vw;
        }

        .atc_enc_res .res_txt {
            padding: 2vw;
        }

        .s2 .text-tabpanes .tt-titulo {
            padding: 0vw 2vw;
        }

        .s2 .text-tabpanes .tt-descripcion {
            padding: 1vw 2vw;
        }


        .img1 {
            height: 510px;
            margin: 15px;
        }

        .img2 {
            height: 460px;
        }

        .img3 {
            height: 450px;
            background-position: -210px 0px;
        }

        .img4 {
            height: 370px;
        }

    }
</style>