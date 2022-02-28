@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Sogar -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Sogar -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

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

                <div class='col-xs-6 col-sm-3 col-md-3'>

                    <a data-toggle="pill" href="#menu1">
                        <div class="boton btn1">
                            <div class="titulo-btn">
                                <p><span class="enfasis-v">Guía de Buenas Prácticas </span> de Gestión y Control de Tránsito y Transporte</p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class='col-xs-6 col-sm-3 col-md-3'>

                    <a data-toggle="pill" href="#menu2">
                        <div class="boton btn2">
                            <div class="titulo-btn">
                                <p><span class="enfasis-v">Guía para procedimientos</span> de control al tránsito y transporte de <span class="enfasis-v">motocicletas</span></p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class='col-xs-6 col-sm-3 col-md-3'>

                    <a data-toggle="pill" href="#menu3">
                        <div class="boton btn3">
                            <div class="titulo-btn">
                                <p><span class="enfasis-v">Guía para procedimientos</span> de control al tránsito y transporte de <span class="enfasis-v">Taxis</span></p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class='col-xs-6 col-sm-3 col-md-3'>

                    <a data-toggle="pill" href="#menu4">
                        <div class="boton btn4">
                            <div class="titulo-btn">
                                <p><span class="enfasis-v">Guía para procedimientos</span> de control al tránsito y transporte de <span class="enfasis-v">Ciclistas y Peatones</span></p>
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
                                        <p><strong>Capítulo 5. </strong>Buenas prácticas sobre los operativos de control en vía, con énfasis en  seguridad vial.</p>
                                    </li>
                                </ol>
                                <p>Puedes descargar el documento completo haciendo clic aquí.</p>
                            </div>

                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Menu 3</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <h3>Menu 4</h3>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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
            transition: 1s ease;
        }

        .s2 .boton .titulo-btn p {
            border-bottom: solid 2px #bed000;
            font-size: 15px !important;
            font-weight: 500 !important;
            font-family: 'Sora', sans-serif;
            padding-bottom: 10px;
            line-height: 1.2;
        }

        .s2 .btn1 {
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.8) 0%, rgba(250, 250, 250, 0)100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-02-2022/agente_gev.webp');
            background-size: cover;
            background-position: center;
        }

        .s2 .btn2 {
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.8) 0%, rgba(250, 250, 250, 0)100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-02-2022/motociclista_gev.webp');
            background-size: cover;
            background-position: center;
        }

        .s2 .btn3 {
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.8) 0%, rgba(250, 250, 250, 0)100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-02-2022/taxi_gev.webp');
            background-size: cover;
            background-position: center;
        }

        .s2 .btn4 {
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.8) 0%, rgba(250, 250, 250, 0)100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-02-2022/ciclista_gev.webp');
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
        .s2 .box-pane{
            margin: 30px;
            border-bottom: 15px solid #bed000;
        }
        .s2 .box-pane-titulo h3{
            font-family: 'Sora', sans-serif;
            color: #1f223e;
            text-align: center;
            padding: 15px;
            border-bottom: #1f223e solid 2px;
        }
        .s2 .box-pane-titulo{
            margin: 15px;
            
        }
        .s2 .box-pane-resumen{
            margin: 15px;
            font-family: 'Sora', sans-serif;
            font-size: 13px;
            line-height: 1.4;
            text-align: justify;
        }
        .box-pane-resumen ol>li{
            list-style: none;
            text-align: left;
        }
    </style>

</div>

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
        font-size: 13px !important;
        line-height: 1.4 !important;
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

    .s1 .logo {
        /* margin-bottom: 20px; */
    }

    .s1 .titulo h3 {
        font-family: 'Sora', sans-serif;
        color: #ffffff;
        text-align: center;
        padding: 4%;
        font-style: 24px;
        text-shadow: 1px 1px 1px #151515;
        margin: 0px;
    }

    .s1 .titulo .enfasis-v {
        color: #bed000;
        font-weight: 700;
        font-size: 26px;
    }

    .s1 .descripcion p {
        color: #ffffff;
        text-align: justify;
        font-family: 'Sora', sans-serif;
        font-style: 13px;
        line-height: 1.4 !important;
    }
</style>
<style>
    @media(max-width:767px){


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

    }
    @media(min-width:768px){}
    @media(min-width:992px){}
    @media(min-width:1200px){}
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->