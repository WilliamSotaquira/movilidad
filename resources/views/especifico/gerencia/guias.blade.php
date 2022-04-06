@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class="encabezado">
            <div class="row">
                <div class='col-xs-12 col-sm-6 col-md-6'>
                    <div class="titulo-enc">
                        <div class="logo">
                            <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-11-2021/texturas_y_logo_logo_600x600.png' alt='Logo Gerencia en Vía' title='Logo Gerencia en Vía'>
                        </div>
                        <div class="titulo">
                            <h3>Guías de <span class="enfasis-v">Gestión y Control</span> de Tránsito y Transporte</h3>
                        </div>
                        <div class="descripcion">
                            <p>Son un compendio de documentos elaborados por el equipo técnico de la Subdirección de Control de Tránsito y Transporte de la Secretaría Distrital de Movilidad, que establecen lineamientos y recomendaciones para la planificación, desarrollo de los controles operativos en vía y el uso de medios técnicos y tecnológicos de acuerdo con la normatividad nacional y distrital vigente en materia de tránsito, transporte, movilidad y seguridad vial.</p>
                        </div>
                    </div>
                </div>
                <div class='col-xs-12 col-sm-6 col-md-6'>
                    <div class="img-encabezado">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s2">
        <div class="botones">
            <div class="row">


                <div class='col-xs-12 col-sm-3 col-md-3'>

                    <a data-toggle="pill" href="#menu1">
                        <div class="boton btn1">
                            <div class="titulo-btn">
                                <p><span class="enfasis-v">Guía de Buenas Prácticas </span> de Gestión y Control de Tránsito y Transporte</p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class='col-xs-12 col-sm-3 col-md-3'>

                    <a data-toggle="pill" href="#menu2">
                        <div class="boton btn2">
                            <div class="titulo-btn">
                                <p><span class="enfasis-v">Guía para procedimientos</span> de control al tránsito y transporte de <span class="enfasis-v">motocicletas</span></p>
                                <p><strong>Guía en revisión</strong></p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class='col-xs-12 col-sm-3 col-md-3'>

                    <a data-toggle="pill" href="#menu3">
                        <div class="boton btn3">
                            <div class="titulo-btn">
                                <p><span class="enfasis-v">Guía para procedimientos</span> de control al tránsito y transporte de <span class="enfasis-v">Taxis</span></p>
                                <p><strong>Guía en revisión</strong></p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class='col-xs-12 col-sm-3 col-md-3'>

                    <a data-toggle="pill" href="#menu4">
                        <div class="boton btn4">
                            <div class="titulo-btn">
                                <p><span class="enfasis-v">Guía para procedimientos</span> de control al tránsito y transporte de <span class="enfasis-v">Ciclistas y Peatones</span></p>
                                <p><strong>Guía en revisión</strong></p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="tab-content">
                <div id="menu1" class="tab-pane fade">
                    <div class="box-pane">
                        <div class="box-pane-titulo">
                            <h3>Guía de Buenas Prácticas de Gestión y Control de Tránsito y Transporte</h3>
                        </div>
                        <div class="box-pane-resumen">
                            <p>Es un documento técnico que describe las diferentes actividades adelantadas desde la SDM para la gestión y el control del tránsito y transporte en la ciudad, su importancia y los procesos en los cuales participan los agentes civiles.</p>
                            <p>Está compuesta por 5 capítulos:</p>
                            <ol>
                                <li>
                                    <p><strong>Capítulo 1.</strong> Normatividad que regula y establece las disposiciones y el ámbito de actuación aplicable a los planes operativos de control.</p>
                                </li>
                                <li>
                                    <p><strong>Capítulo 2.</strong>Controles operativos estructurados a partir de cinco enfoques: Seguridad vial, Gestión vehicular, Ambiente y Carga, Ruta Pila y Transporte Especial e Ilegalidad en Servicios de Transporte (Transporte Público Colectivo, Transporte público individual Taxis y Bicitaxis).</p>
                                </li>
                                <li>
                                    <p><strong>Capítulo 3.</strong> Evaluación de operativos verificados en vía y con herramientas tecnológicas.</p>
                                </li>
                                <li>
                                    <p><strong>Capítulo 4. </strong>Medios técnicos y tecnológicos enfocados al control al tránsito.</p>
                                </li>
                                <li>
                                    <p><strong>Capítulo 5. </strong>Buenas prácticas sobre los operativos de control en vía, con énfasis en seguridad vial.</p>
                                </li>
                            </ol>
                            <p>Puedes descargar el documento completo haciendo <a href="http://"><i>clic aquí.</i></a></p>
                        </div>

                    </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <div class="box-pane">
                        <div class="box-pane-titulo">
                            <h3>Guía en revisión</h3>
                        </div>
                    </div>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <div class="box-pane">
                        <div class="box-pane-titulo">
                            <h3>Guía en revisión</h3>
                        </div>
                    </div>
                </div>
                <div id="menu4" class="tab-pane fade">
                    <div class="box-pane">
                        <div class="box-pane-titulo">
                            <h3>Guía en revisión</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <style>
        .s2 a {
            text-decoration: none !important;
            color: #ffffff;
        }

        .s2 a:focus {
            color: #bed000;
        }

        .s2 a:hover {
            text-decoration: none !important;
            color: #bed000;
        }

        .s2 .botones {
            background-color: #bed000;
            padding: 30px;
        }

        .s2 .boton {
            background-color: #929292;
            height: 300px;
            margin: 10px;
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: end;
            border-radius: 3px;
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            /* transition: 1s ease; */
        }

        .s2 .boton .titulo-btn p {
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight: normal;
            text-align: initial;
            line-height: 1.2;
            color: rgba(255, 255, 255, 1);
            border-bottom: solid 2px #bed000;
            padding-bottom: 10px;
        }

        .s2 .btn1 {
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.8) 0%, rgba(250, 250, 250, 0)100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-02-2022/agente_gev.webp');
            background-size: cover;
            background-position: center;
        }

        .s2 .btn2 {
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.8) 0%, rgba(250, 250, 250, 0)100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-02-2022/motociclista_gev.webp');
            filter: grayscale(100%);
            background-size: cover;
            background-position: center;
        }

        .s2 .btn3 {
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.8) 0%, rgba(250, 250, 250, 0)100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-02-2022/taxi_gev.webp');
            filter: grayscale(100%);
            background-size: cover;
            background-position: center;
        }

        .s2 .btn4 {
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.8) 0%, rgba(250, 250, 250, 0)100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-02-2022/ciclista_gev.webp');
            filter: grayscale(100%);
            background-size: cover;
            background-position: center;
        }

        .s2 .boton:hover {
            background: rgba(31, 34, 62, 1) !important;
            justify-content: center;
        }

        .s2 .botones .enfasis-v {
            color: #bed000;
            font-weight: 700;
            font-size: 15px;
        }

        .s2 .box-pane {
            border-bottom: 15px solid #bed000;
        }

        .s2 .box-pane-titulo h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
            font-weight: 700;
            text-align: center;
            line-height: 1;
            color: rgba(31, 34, 62, 1);
            padding: 40px;
            border-bottom: #1f223e solid 2px;
        }

        .s2 .box-pane-titulo {
            margin: 15px;

        }

        .s2 .box-pane-resumen {
            padding: 40px;
            margin: 15px;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: normal;
            text-align: justify;
            line-height: 1.4;
            color: rgba(31, 34, 62, 1);

        }

        .s2 .box-pane-resumen a {
            font-size: 14px;
            font-weight: 700;
            text-align: justify;
            line-height: 1.4;
            color: rgba(31, 34, 62, 1);
        }

        .box-pane-resumen ol>li {
            list-style: none outside;
            text-align: left;
            padding: 8px;
            list-style: square outside;
        }

        .s2 .tab-content {
            background-color: #f5f5f5;
            margin: 15px;
        }
    </style>
    <div class="s3">
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <div class="box-pane">
                    <div class="box-pane-titulo">
                        <h3>Galería</h3>
                        <p>Para dar a conocer la Guía de Buenas Prácticas de Gestión y Control de Tránsito y Transporte, la Secretaría Distrital de Movilidad cuenta con una galería itinerante de 14 pósters informativos que puedes ver a continuación:</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">

                    <div class="box-btns">
                        <div class='row'>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <div class="card-btn">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/01_plan_operativo_gestion_vehicular_v6_001.webp" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/01_plan_operativo_gestion_vehicular_v6_001.webp' alt='Captura de guia' title='Captura de guia'>
                                    </a>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <div class="card-btn">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/02_evaluacion_de_los_operativos_mediante_herramientas_tecnologicas_v3_001.webp" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/02_evaluacion_de_los_operativos_mediante_herramientas_tecnologicas_v3_001.webp' alt='Captura guía' title='Captura guía'>
                                    </a>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <div class="card-btn">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/03_evaluacion_de_los_operativos_verificados_en_via_v3_001.webp" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/03_evaluacion_de_los_operativos_verificados_en_via_v3_001.webp' alt='Captura guía' title='Captura guía'>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="item">

                    <div class="box-btns">
                        <div class='row'>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <div class="card-btn">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/04_plan_operativo_control_al_transporte_publico_colectivo_v3_001.webp" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/04_plan_operativo_control_al_transporte_publico_colectivo_v3_001.webp' alt='Captura de guia' title='Captura de guia'>
                                    </a>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <div class="card-btn">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/05_plan_operativo_seguridad_vial_v2_001.webp" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/05_plan_operativo_seguridad_vial_v2_001.webp' alt='Captura de guia' title='Captura de guia'>
                                    </a>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <div class="card-btn">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/06_plan_operativo_control_a_bicitaxis_v1_001.webp" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/06_plan_operativo_control_a_bicitaxis_v1_001.webp' alt='Captura de guia' title='Captura de guia'>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="item">

                    <div class="box-btns">
                        <div class='row'>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <div class="card-btn">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/07_plan_operativo_control_al_transporte_publico_indivitual_taxis_v4_001.webp" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/07_plan_operativo_control_al_transporte_publico_indivitual_taxis_v4_001.webp' alt='Captura de guia' title='Captura de guia'>
                                    </a>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <div class="card-btn">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/08_plan_operativo_control_ruta_pila_y_transporte_especial_v4_001.webp" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/08_plan_operativo_control_ruta_pila_y_transporte_especial_v4_001.webp' alt='Captura de guia' title='Captura de guia'>
                                    </a>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <div class="card-btn">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/09_plan_operativo_control_ambiental_a_vehiculos_v3_001.webp" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/09_plan_operativo_control_ambiental_a_vehiculos_v3_001.webp' alt='Captura de guia' title='Captura de guia'>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="item">

                    <div class="box-btns">
                        <div class='row'>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <div class="card-btn">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/10_plan_operativo_control_a_vehiculos_de_carga_v3_001.webp" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/10_plan_operativo_control_a_vehiculos_de_carga_v3_001.webp' alt='Captura de guia' title='Captura de guia'>
                                    </a>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <div class="card-btn">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/11_investigacion_analisis_de_la_velocidad_v4_001.webp" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/11_investigacion_analisis_de_la_velocidad_v4_001.webp' alt='Captura de guia' title='Captura de guia'>
                                    </a>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <div class="card-btn">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/12_medios_tecnicos_y_tecnologicos_-_dispositivos_de_apoyo_en_via_v2_001.webp" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/12_medios_tecnicos_y_tecnologicos_-_dispositivos_de_apoyo_en_via_v2_001.webp' alt='Captura de guia' title='Captura de guia'>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="item">

                    <div class="box-btns">
                        <div class='row'>

                            <div class='col-xs-12 col-sm-4 col-sm-offset-2'>
                                <div class="card-btn">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/13_medios_tecnicos_y_tecnologicos_camaras_del_centro_de_gestion_v2_001.webp" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/13_medios_tecnicos_y_tecnologicos_camaras_del_centro_de_gestion_v2_001.webp' alt='Captura de guia' title='Captura de guia'>
                                    </a>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <div class="card-btn">
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/14_medios_tecnicos_y_tecnologicos_-_camaras_salvavidas_v3_001.webp" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/14_medios_tecnicos_y_tecnologicos_-_camaras_salvavidas_v3_001.webp' alt='Captura de guia' title='Captura de guia'>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <style>
        .s3 .box-pane {
            /* border-bottom: 15px solid #bed000; */
        }

        .s3 .box-pane-titulo h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
            font-weight: 700;
            text-align: initial;
            line-height: 1;
            color: rgba(31, 34, 62, 1);
            padding: 30px 0px 15px 0px;
            /* border-bottom: #1f223e solid 2px; */
        }

        .s3 .box-pane p {
            padding-bottom: 40px;
        }

        .s3 .box-pane-titulo {
            margin: 15px;

        }

        .s3 .box-pane-resumen {
            padding: 40px;
            margin: 15px;
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight: normal;
            text-align: justify;
            line-height: 1.4;
            color: rgba(31, 34, 62, 1);

        }

        .s3 .box-pane-resumen a {
            font-size: 14px;
            font-weight: 700;
            text-align: justify;
            line-height: 1.4;
            color: rgba(31, 34, 62, 1);
        }

        .box-pane-resumen ol>li {
            list-style: none outside;
            text-align: left;
            padding: 8px;
            list-style: square outside;
        }

        .s3 .tab-content {
            background-color: #f5f5f5;
            margin: 15px;
        }

        .s3 .box-btns {
            padding: 0px 50px !important;
        }

        .card-btn {
            background-color: #1f223e;
            /* height: 250px; */
            margin: 15px;
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);

        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next,
        .carousel-control .icon-prev {
            color: rgba(190, 208, 0, 1);
        }

        .carousel-control {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 0% !important;
            font-size: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0);
            background-color: rgba(255, 255, 255, 0) !important;
            filter: none !important;
            opacity: 1 !important;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%) !important;
        }


        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next,
        .carousel-control .icon-prev {

            width: 50px !important;
            height: 50px !important;
            margin-top: -20px !important;
            font-size: 50px !important;
        }

        .carousel-indicators li {
            background-color: rgba(190, 208, 0, 1) !important;
            border: 1px solid rgba(190, 208, 0, 1) !important;
        }

        .carousel-indicators {
            bottom: -45px !important;
        }

        .carousel-indicators .active {
            width: 14px !important;
            height: 14px !important;
            margin: 0px !important;
            background-color: rgba(31, 34, 62, 1) !important;
            border: 1px solid rgba(31, 34, 62, 1) !important;

        }
    </style>
    <div class="footer-box">
        <div class='row'>
            <div class='col-xs-12 col-sm-3 col-md-3'>
                <div class="box-icon">
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/correo-electronico-vacio.png' alt='icono email' title='icono email'>
                </div>
            </div>
            <div class='col-xs-12 col-sm-9 col-md-9'>
                <div class="box-parrafo">
                    <div>Si quieres más información, comunícate al correo <a href="mailto:controltransitoytransporte@movilidadbogota.gov.co">controltransitoytransporte@movilidadbogota.gov.co</a></div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .footer-box {
            background-color: rgba(31, 34, 62, 1);
            margin-top: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer-box .box-icon {
            padding: 25px;
            height: 100px;
            display: flex;
            justify-content: end;
            align-items: center;


        }

        .footer-box .box-icon img {
            width: 50px;
        }

        .footer-box .box-parrafo {
            padding: 15px;
            height: 100px;
            display: flex;
            justify-content: start;
            align-items: center;

            margin: 0px;
            font-size: 16px;
            font-weight: normal;
            text-align: left;
            line-height: 1.4;
            color: rgba(255, 255, 255, 1);
        }

        .footer-box a {
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            line-height: 1.4;
            color: rgba(190, 208, 0, 1);
        }

        .footer-box a:hover {
            color: rgba(190, 180, 0, 1);
            text-decoration: none;

        }

        .footer-box .box-icon {
            height: 70px;
            justify-content: center;
        }
    </style>
</div>
<br>

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
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: normal;
        text-align: justify;
        line-height: 1.4;
        color: rgba(31, 34, 62, 1);
        max-width: 940px;
    }

    /*
    .seccion [class*='col-'] {
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
</style>
<style>
    /* .s1 {
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);

    } */

    .s1 .encabezado {
        background-color: #1f223e;
    }

    .s1 .img-encabezado {
        height: 400px;
        background: linear-gradient(230deg, rgba(0, 0, 0, 0.7)0%, rgba(250, 250, 250, 0)50%, rgba(31, 34, 62, 0.7)100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-02-2022/encabezado_guias_gev.webp');
        background-size: cover;
        background-position: center;
    }

    .s1 .titulo-enc {
        padding: 30px;
        height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    .s1 .titulo h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 24px;
        font-weight: normal;
        text-align: center;
        line-height: 1.4;
        color: #ffffff;
        padding: 4%;
        text-shadow: 1px 1px 1px #151515;
        margin: 0px;
    }

    .s1 .titulo .enfasis-v {
        color: #bed000;
        font-weight: 700;
        font-size: 26px;
    }

    .s1 .descripcion p {
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: normal;
        text-align: center;
        line-height: 1.4;
        color: rgba(255, 255, 255, 1);
    }
</style>
<style>
    @media(max-width:767px) {


        .s2 .botones {
            /* padding: 30px; */
            padding: 10px;
        }

        .s2 .boton {
            /* height: 300px; */
            height: 220px;
        }

        .s2 .boton .titulo-btn p {
            /* font-size: 15px !important; */
            font-size: 13px !important;
        }

        .s2 .botones .enfasis-v {
            /* font-size: 15px; */
            font-size: 13px;
        }

        .s1 .titulo-enc {
            padding: 10px;
            height: 520px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .seccion {
            padding-right: 0px !important;
            padding-left: 0px !important;
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .s2 .btn1 {
            background-position: top;
        }

        .s2 .btn2 {
            background-position: top;
        }

        .s2 .btn3 {
            background-position: top;
        }

        .s2 .btn4 {
            background-position: top;
        }

        .s2 .box-pane-titulo h3 {
            font-size: 20px;
            padding: 20px;
        }

        .s2 .box-pane-resumen {
            padding: 0px;
        }

        .s3 .box-pane-titulo h3 {
            font-size: 20px;
            padding: 15px 0px 15px 0px;
        }

        .footer-box .box-parrafo {
            justify-content: center;
            text-align: center;
            word-break: break-word !important;
            overflow: hidden;
            text-overflow: clip;
            height: 120px;
        }

        .s1 .titulo h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        line-height: 1;
        padding: 3%;
    }



    }

    @media(min-width:768px) {

        .footer-box .box-icon {
            height: 100px;
            justify-content: right;
        }

        .s1 .titulo-enc {
            height: 500px;
        }

        .s1 .img-encabezado {
            height: 500px;
        }

        .s2 .boton {
            padding: 5px;
        }

        .s2 .botones .enfasis-v {
            font-size: 14px;
        }

        .s2 .boton .titulo-btn p {
            font-size: 14px;
        }

    }

    @media(min-width:992px) {


        .s2 .boton {
            padding: 10px;
        }

        .s1 .titulo-enc {
            height: 440px;
        }

        .s1 .img-encabezado {
            height: 440px;
        }

    }

    @media(min-width:1200px) {}
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->