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
            background: no-repeat rgba(31, 34, 62, 1) url('/images/agente/img-enc-agentes-1.webp');
            background-size: cover;

        }

        .encabezado .triangulo {
            width: 0;
            height: 0;
            border-left: 30px solid rgba(31, 34, 62, 1);
            border-top: 30px solid transparent;
            border-bottom: 30px solid transparent;
            position: absolute;
            right: -30px;
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
    <div class="s1">
        <div class="row atc_enc_res">
            <div class="col-xs-12 col-sm-5">
                <div class="res_txt">
                    <p class="parrafo">Los <strong>Agentes de tránsito civiles son empleados públicos investidos de autoridad como Agentes de Tránsito y Transporte,</strong> vinculados directamente a la Secretaría Distrital de Movilidad. Ellos velarán por el orden del flujo vehicular y peatonal en las vías públicas mediante funciones preventivas, de asistencia técnica, regulación y control de las normas de tránsito.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-7">
                <div class="res_video">
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/VKaHaeY1n0w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s2">
        <div class="tabs">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a class="parrafo" href="#funciones" aria-controls="funciones" role="tab" data-toggle="tab">
                        <div class="btn-nav">
                            <div class="img-nav">
                                <img class='img-responsive w-100 ' height="50px" src='/images/agente/Icono_Pregunta1.svg' alt='Icono funciones Agentes Civiles de Tránsito' title='Icono funciones Agentes Civiles de Tránsito'>
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
                                <img class='img-responsive w-100 ' height="50px" src='/images/agente/Icono_Pregunta1.svg' alt='Icono funciones Agentes Civiles de Tránsito' title='Icono funciones Agentes Civiles de Tránsito'>
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
                                <img class='img-responsive w-100 ' height="50px" src='/images/agente/Icono_Pregunta1.svg' alt='Icono funciones Agentes Civiles de Tránsito' title='Icono funciones Agentes Civiles de Tránsito'>
                            </div>
                            <div>
                                ¿Cómo se realizará el control de los Agentes de Tránsito Civiles?
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <style>
                .nav-tabs>li.active>a,
                .nav-tabs>li.active>a:focus,
                .nav-tabs>li.active>a:hover {
                    height: 160px !important;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }

                .nav-tabs {
                    height: 160px;
                }

                .nav .parrafo {
                    height: 250px;
                }

                .img-nav {
                    height: 90px;
                }

                .img-nav img {
                    height: 70px;
                }

                @media (min-width: 768px) {
                    .s2 .nav-tabs>li a {
                        height: 160px !important;
                    }

                    .s2 .nav-tabs>li {
                        height: 160px !important;
                    }

                    .s2 .nav-tabs>li a:visited  {
                        background-color: #929292;
                    }

   
                }
            </style>

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
                        <div class="col-xs-12">
                            <div class="tt-footer-izq"></div>
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
                        <div class="col-xs-12">
                            <div class="tt-footer-der"></div>
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
                                <!-- <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-11-2021/ima_4_micrsitio_agentes_civiles.png" alt=""> -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                            <div class="img-tabpanes ">
                                <div class="img3"></div>
                                <!-- <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-11-2021/ima_3_micrsitio_agentes_civiles.png" alt=""> -->
                            </div>
                            <div class="img-footer">
                                <p class="parrafo"><span class="enf">La segunda vía</span> de control serán las cámaras corporales que <strong>grabarán en audio y video la interacción entre el Agente y los ciudadanos.</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .s2 .nav-tabs>li {
            background-color: #1f223e;
            width: 100%;

        }

        .nav>li>a:focus,
        .nav>li>a:hover {
            text-decoration: none;
            /* background-color: #bed000 !important;
            border-bottom: solid 6px #929292 !important; */
            background-color: #2a2e4b !important;
            border-bottom: solid 6px #bed000 !important;
        }



        .s2 .nav-tabs>li.active {
            background-color: #1f223e;

        }

        .s2 .nav-tabs>li a {
            color: #ffffff;
            margin-right: 0px;
            line-height: 1.4;
            border: none;
            border-radius: 0px;
            font-weight: 700;
            border-bottom: solid 6px #1f223e;
            text-align: center;
        }

        .s2 .nav-tabs>li a:hover {
            /* color: #1f223e; */
            color: rgba(255, 255, 255, 1);
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            color: rgba(31, 34, 62, 1) !important;
            background-color: rgba(190, 208, 0, 1) !important;
            cursor: default;
            border: 1px solid #d5d5d5 !important;
            border-bottom: solid 6px #d5d5d5 !important;
            border-bottom-color: transparent;

            /* background-color: #1f223e !important; */
        }



        .s2 .img-tabpanes {
            padding-left: 15px;
            padding-right: 15px;
            margin-top: 30px;
        }

        .s2 .text-tabpanes .tt-titulo {
            padding: 2vw 4vw;
        }


        .s2 .text-tabpanes .tt-descripcion {
            padding: 4vw;

        }

        .s2 .tt-descripcion ul {
            list-style: none;
            padding-inline-start: 20px;
            /* Remove default bullets */
        }

        .s2 .tt-descripcion ul li {
            padding-top: 10px;
            padding-left: 5px;
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

        .tt-footer-izq {
            margin: 15px;
            /* background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-11-2021/textura_verde_ac.png'); */
            background: linear-gradient(to left, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1))70%, url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-11-2021/textura_verde_lg.png');
            /* background-size: 20px; */
            height: 100px;
            width: 100%;
        }

        .tt-footer-der {
            margin: 15px;
            /* background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-11-2021/textura_verde_ac.png'); */
            background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1))70%, url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-11-2021/textura_verde_lg.png');
            /* background-size: 20px; */
            height: 100px;
            width: 100%;
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
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-12-2021/img2.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top right;
            height: 350px;
        }

        .img4 {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-12-2021/img4.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top right;
            height: 197px;


        }

        .res_video {
            margin-bottom: 15px;
        }
    </style>
</div>


<style>
    .s1 {
        margin: 30px;
    }

    .atc_enc_res .res_txt {
        height: 365px;
        padding: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        justify-items: center;
        text-align: initial;
    }

    .atc_enc_res .res_txt p {
        text-align: left;
        color: #1f223e;
        font-size: 15px;
    }

    .res_video {
        height: 300px;
        display: flex;
        justify-content: center;
        justify-items: center;
        flex-direction: column;
        padding: 10px;
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
        line-height: 1.4;
    }


    .w-100 {
        width: 100%;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<style>
    @media(min-width:768px) {
        .hard-floor {
            font-size: 13px !important;
        }

        .res_video {
            height: 350px;
            display: flex;
            justify-content: center;
            justify-items: center;
            flex-direction: column;
            padding: 10px;
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
            height: 360px;
        }

        .img4 {
            height: 320px;
        }

    }

    @media(min-width:992px) {

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
        }

        .img4 {
            height: 370px;
        }

    }
</style>