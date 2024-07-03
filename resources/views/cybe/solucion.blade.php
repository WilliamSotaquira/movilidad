@extends('welcome')
@section('title','solucion')
@section('contenido')

<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/cybe.css') }}">

<style>
    #modal_formacion .modal-header,
    #modal_formacion .modal-footer {
        background-color: #f5f5f5;
    }

    #modal_formacion .modal-body {
        padding: 32px 64px;
    }

    #modal_formacion .modal-body .txt-modal {
        font-family: 'Montserrat', sans-serif;
        font-optical-sizing: auto;
        font-size: 16px;
        font-weight: normal;
        text-align: left;
        line-height: 1.5;
        color: #151515;
    }

    #modal_formacion .modal-body .txt-modal .descripcion-modal li {
        font-family: 'Montserrat', sans-serif;
        font-optical-sizing: auto;
        font-size: 16px;
        font-weight: normal;
        text-align: left;
        line-height: 1.2;
        color: #151515;
    }

    #modal_formacion .modal-body .txt-modal .descripcion-modal h3 {
        font-size: 24px;
        font-weight: 700;
        color: #1c2046;
        margin: 16px 0;
    }

    #modal_formacion .modal-body .txt-modal .descripcion-modal figure {
        max-width: 600px;
        margin: auto;
        padding: 1em 2em;
    }
</style>
<!-- Modal formacion-->
<div class=' modal fade' id='modal_formacion' tabindex='-1' role='dialog' aria-labelledby='modal_formacion_label'>
    <div class='modal-dialog modal-lg' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
            </div>
            <div class='modal-body'>
                <div class='row'>
                    <div class='col-xs-12'>
                        <div class='txt-modal'>
                            <div class='descripcion-modal'>
                                <h3>Nuevas capacidades - Formación en cero y bajas emisiones</h3>
                                <figure>
                                    <img class="img-responsive w-100" src="/images/cybe/solucion/solucion_4.png" alt="imagen cursos complementarios">
                                    <figcaption>
                                        <!-- <p>Foto: . (SDM).</p> -->
                                    </figcaption>
                                </figure>
                                <p>El SENA ha desarrollado los siguientes cursos complementarios sobre movilidad de cero y bajas emisiones. Te invitamos a participar <a href="https://forms.gle/3kJLjgRNumBh69vLA">aquí.</a></p>
                                <ul>
                                    <li>Conducción eco-eficiente en el transporte.</li>
                                    <li>Mantenimiento y ajuste técnico mecánico en bicicletas de gama baja.</li>
                                    <li>Técnico en control de movilidad, transporte y seguridad vial.</li>
                                    <li>Tecnólogo en gestión integral del transporte.</li>
                                    <li>Alistamiento de vehículos automotores de servicio público.</li>
                                    <li>Diagnóstico de los sistemas eléctricos y electrónicos de automotores.</li>
                                    <li>Técnico en mantenimiento eléctrico y electrónico en automotores.</li>
                                    <li>Formación en vehículos de propulsión eléctrica.</li>
                                    <li>Formación en vehículos de propulsión Híbrida.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='modal-footer'>
                <div class='row'>
                    <div class='col-xs-12 col-sm-6 text-center'>
                        <a href='https://docs.google.com/forms/d/e/1FAIpQLSccD9P4PGjYgDV7CwT_D26_R31p-cksycJVZG2OQTIEywivlQ/viewform' class='btn btn-primary' target='_blank' rel='noopener noreferrer'>Participar</a>
                    </div>
                    <div class='col-xs-12 col-sm-6 text-center'>
                        <button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Set solucion -->
<div class="set-wrapper solucion">

    <!-- bloque box header-->
    <div class="box box-header">
        <div class="cmpnt cmpnt-vacio">
        </div>
        <div class="cmpnt cmpnt-logo-ppal">
            <div class="logo logo-ppal">
                <img class="img-responsive w-100" src="/images/cybe/logo_cybe_v3.png" alt="logo Movilidad de Cero y Bajas Emisiones">
            </div>
            <p class="paragraph ph-type-ppal ph-id-1">Conoce la apuesta de Bogotá por la <strong>Movilidad Motorizada de
                    Cero y
                    Bajas Emisiones</strong></p>
        </div>
    </div>

    <!-- bloque navbar-->
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
                    <li><a href="http://sdm.wdo:8000/cybe/home">Inicio</a></li>
                    <li><a href="http://sdm.wdo:8000/cybe/cambio">¿Por qué?</a></li>
                    <li><a href="http://sdm.wdo:8000/cybe/solucion">¿Qué solución proponemos?</a></li>
                    <li><a href="http://sdm.wdo:8000/cybe/tecnologias">¿Cuáles son las tecnologías?</a></li>
                    <li><a href="http://sdm.wdo:8000/cybe/mitos">Verdades y mitos</a></li>
                    <li><a href="http://sdm.wdo:8000/cybe/recursos">Recursos</a></li>
                    <!-- <li><a href="http://sdm.wdo:8000/cybe/metas">¿Cómo lograr la transición?</a></li> -->
                </ul>

            </div>
        </div>
    </nav>


    <style>
        .set-wrapper.solucion {
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight: 500;
            text-align: left;
            line-height: 1.4;
            color: #00000099;
        }

        .box-title {
            margin: 32px 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #fff;
        }

        .solucion .box-title .title-ppal {
            font-size: 30px;
            font-weight: 700;
            color: #1c2046;
            margin: 32px;
            text-align: center;
        }

        .solucion .box-title .img-ppal {
            background-color: #252525;
            width: 100%;
            max-width: 940px;
            height: 25rem;
            background: url('/images/cybe/ppal_mitos.png') no-repeat center center;
            margin-top: 32px;
        }
    </style>

    <div class="box-title">
        <div class="cmpnt cmpnt-title-ppal">
            <h3 class="title-ppal center-text">¿Qué solución proponemos?</h3>
        </div>
        <div class="cmpnt cmpnt-description">
            <p>Los pilares de la movilidad sostenible que la ciudad se ha propuesto a trabajar son:</p>
        </div>

    </div>


    <!-- box b-1 -->
    <style>
        .set-wrapper .b-1 {
            grid-area: b-1;
            margin: 16px 0px;
        }

        @media(min-width:768px) {
            .set-wrapper .b-1 {
                grid-area: b-1;
                margin: 16px 0px;
                padding: 64px;
            }
        }
    </style>
    <div class="box b-1">
        <div class="cpnt cpnt-1">

            <div class="wrapper-pdi">
                <div class="container-fluid">
                    <div class="row botones">

                        <div class='col-xs-12 col-sm-4 col-md-4'>
                            <div class="btn-proceso btn1 zoom">
                                <div class="fondo-proceso">
                                    <div class="titulo">
                                        <h3>Evitar / Reducir</h3>
                                        <p>los viajes que no son necesarios y distancias de viaje. Aquí se ubican instrumentos como el <a href="https://www.sdp.gov.co/micrositios/pot/que-es">Plan de Ordenamiento Territorial - POT</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='col-xs-12 col-sm-4 col-md-4'>
                            <div class="btn-proceso btn2 zoom">
                                <div class="fondo-proceso">
                                    <div class="titulo">
                                        <h3>Cambiar</h3>
                                        <p>promover el cambio modal a modos de transporte sostenibles. Se incluye la <a href="https://www.movilidadbogota.gov.co/web/politicas_publicas_distritales">Política Pública de la Bicicleta para el D.C. 2021-2039. (CONPES D.C. 15 de 2021).</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='col-xs-12 col-sm-4 col-md-4'>
                            <div class="btn-proceso btn3 zoom">
                                <div class="fondo-proceso">
                                    <div class="titulo">
                                        <h3>Mejorar</h3>
                                        <p>emplear tecnologías vehiculares y comportamientos más limpios y eficientes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <style>
                            .wrapper-pdi .btn-proceso {
                                height: 450px;
                                display: flex;
                                flex-direction: column;
                                justify-content: end;
                                align-items: center;
                                border-radius: 5px;
                                -webkit-box-shadow: 0px 0px 19px 0px rgba(0, 0, 0, 0.3);
                                box-shadow: 0px 0px 19px 0px rgba(0, 0, 0, 0.3);
                                margin: 5%;
                                transition: 0.9s;
                                transition-timing-function: linear;

                            }


                            .zoom {
                                transition: 0.5s ease;
                                -moz-transition: 0.5s ease;
                                /* Firefox */
                                -webkit-transition: 0.5s ease;
                                /* Chrome - Safari */
                                -o-transition: 0.5s ease;
                                /* Opera */
                            }

                            .zoom:hover {
                                transform: scale(1.01);
                                -moz-transform: scale(1.01);
                                /* Firefox */
                                -webkit-transform: scale(1.01);
                                /* Chrome - Safari */
                                -o-transform: scale(1.01);
                                /* Opera */
                                -ms-transform: scale(1.01);

                            }

                            /* IE9 */
                            .wrapper-pdi .btn1 {
                                background: #1c2046;
                                background: linear-gradient(45deg, #1c2046 0%, rgba(255, 255, 255, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-02-2022/bogota-4463698_1280.webp');
                                background-size: cover;
                                background-position: 90% 0%;
                            }

                            .wrapper-pdi .btn2 {
                                background: #1c2046;
                                background: linear-gradient(45deg, #1c2046 0%, rgba(255, 255, 255, 0) 100%), url('/images/cybe/solucion/solucion_2.png');
                                background-size: cover;
                                background-position: 37% 10%;
                            }

                            .wrapper-pdi .btn3 {
                                background: #1c2046;
                                background: linear-gradient(45deg, #1c2046 0%, rgba(255, 255, 255, 0) 100%), url('/images/cybe/solucion/solucion_3.png');
                                background-size: cover;
                                background-position: 70% 0%;
                            }



                            .wrapper-pdi .titulo {
                                height: 150px;
                                display: flex;
                                flex-direction: column;
                                justify-content: end;
                                align-items: center;
                                padding: 5px;
                            }

                            .wrapper-pdi .btn-proceso {
                                transition: 0.3s;
                                transition-property: all;
                                transition-timing-function: linear;

                            }

                            .wrapper-pdi .btn-proceso h3 {
                                margin: 10px;
                                padding: 8px;
                                color: #fff;
                                border-bottom: solid 2px #66e026;
                                border-top: solid 2px #66e026;
                                text-transform: uppercase;
                                font-size: 18px;
                                font-weight: 700;
                                font-family: 'Sora', sans-serif;
                                transition: 0.3s;
                                transition-timing-function: linear;

                            }

                            .wrapper-pdi .btn-proceso p {
                                display: none;
                                padding: 1em;
                                color: #151515 !important;
                                text-align: center;

                            }

                            .wrapper-pdi .btn-proceso:hover {
                                background: linear-gradient(45deg, #66e026 30%, #66e02650 100%);
                                justify-content: center;
                                /* transition-timing-function: linear; */
                            }

                            .wrapper-pdi .btn-proceso:hover h3 {
                                color: #151515;
                                border-bottom: solid 2px #1c2046;
                                border-top: solid 2px #1c2046;
                            }

                            .wrapper-pdi .btn-proceso:hover p {
                                display: block;
                            }

                            .botones a {
                                text-decoration: none !important;
                            }
                        </style>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- box b-2 -->
    <style>
        .set-wrapper .b-2 {
            margin-top: 64px;
            grid-area: b-2;
            margin: 16px 0px;
            font-family: "Work Sans", sans-serif;
            font-size: 14px;
            font-weight: normal;
            text-align: left;
            color: #00000099;
        }

        .b-2 .paragraph {
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: 500;
            text-align: justify;
            line-height: 1.5;
            color: #00000099;
        }

        @media(min-width:768px) {
            .cpnt-collapse-objs {
                padding: 32px 10em;
            }

        }

        .b-2 .list-goals {
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        @media(min-width:768px) {
            .b-2 .list-goals {
                display: grid;
                grid-auto-flow: dense;
                grid-template-columns: 25% 75%;
                grid-template-rows: auto;
                align-items: center;
                justify-items: center;
            }
        }

        .b-2 .img-goal {
            padding: 16px;
            max-width: 160px;
        }

        .b-2 .text-goal {
            padding: 16px;
        }

        .b-2 .list-products {
            padding: 16px;
        }

        .b-2 .list-products dl {
            padding: 16px 16px 16px 42px !important;
            background-color: #fff;
        }

        @media(min-width:768px) {
            .b-2 .list-products dl {
                padding: 16px;
                background-color: #fff;
            }
        }

        .b-2 .list-products dt {
            margin-top: 16px;
            font-size: 1em;
            color: #151515;
        }

        .b-2 .list-products dd {
            margin-left: 16px;
        }

        .b-2 .glyphicon-chevron-right::before {
            color: #1c2046 !important;
        }

        .b-2 .glyphicon-chevron-left::before {
            color: #1c2046 !important;
        }

        .b-2 .panel-heading {
            border-color: #66e026 !important;
            background-color: #66e026 !important;
            background-image: none !important;
        }

        .b-2 .panel-heading .panel-title a {
            font-family: 'Montserrat', sans-serif;
            text-decoration: none;
            color: #151515 !important;
            font-size: 16px;
            font-weight: 600;
        }

        .b-2 .panel-heading .panel-title a:after {
            font-family: 'Glyphicons Halflings';
            content: "\e080";
            float: right;
            color: #1c2046;
            font-size: 18px;
        }

        .b-2 .panel-heading .panel-title a.collapsed:after {
            content: "\e114";
        }
    </style>
    <div class="box b-2">
        <div class="cpnt cpnt-1">
            <p class="paragraph ph-1">Aquí se encuentra la <a href="https://www.movilidadbogota.gov.co/web/politicas_publicas_distritales">Política Pública de Movilidad Motorizada de Cero y Bajas Emisiones 2023-2040 - PCBE</a> (CONPES 30 DE 2023), que se constituye como la hoja de ruta para consolidar esta movilidad, como una alternativa sostenible, accesible, competitiva y atractiva en Bogotá y la Región Metropolitana.</p>
            <p class="paragraph ph-1">Se estructuraron cuatro (4) objetivos que buscan facilitar la transición de los vehículos de combustión a tecnologías de cero y bajas emisiones en los diferentes segmentos del transporte:</p>
        </div>
        <div class="cpnt cpnt-collapse cpnt-collapse-objs">
            <!-- collapse-objs -->
            <div class='panel-group' id='accordion-objs' role='tablist ' aria-multiselectable='true'>

                <!-- collapse obj1 -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_obj1'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-objs' href='#collapse_obj1' aria-expanded='false' aria-controls='collapse_obj1'>
                                Objetivo 1
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_obj1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_obj1' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-obj1'>
                                <div class="list-goals">
                                    <div class="img-goal img-goal-1">
                                        <img class="img-responsive w-100" src="https://via.placeholder.com/100x100" alt="Icono: Promover" title="Icono: Promover">
                                    </div>
                                    <div class="text-goal text-goal-1">
                                        <p>Promover la <strong>transición de los modos de transporte carreteros</strong> motorizados hacia tecnologías de cero y bajas emisiones.</p>
                                        <p>Este objetivo contempla los cambios tecnológicos proyectados para las diferentes flotas de transporte terrestre que circulan en la ciudad. <a href="http://sdm.wdo:8000/cybe/metas">Conocer más.</a> </p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- collapse obj2 -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_obj2'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-objs' href='#collapse_obj2' aria-expanded='false' aria-controls='collapse_obj2'>
                                Objetivo 2
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_obj2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_obj2' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-obj2'>
                                <div class="list-goals">
                                    <div class="img-goal img-goal-2">
                                        <img class="img-responsive w-100" src="https://via.placeholder.com/100x100" alt="Icono: Promover" title="Icono: Promover">
                                    </div>
                                    <div class="text-goal text-goal-2">
                                        <p>Fortalecer procesos de gestión, innovación, desarrollo e investigación en la cadena de valor de tecnologías para movilidad motorizada de cero y bajas emisiones.</p>
                                    </div>
                                </div>
                                <div class="list-products">
                                    <dl>
                                        <dt>Resultados previstos</dt>
                                        <dd>Aumentar las capacidades para la <b>gestión de baterías</b> de los vehículos eléctricos</dd>
                                        <dt>Productos estratégicos</dt>
                                        <dd><b>Guía de manejo</b> de baterías</dd>
                                        <dd><b>Estrategia de promoción</b> de gestión adecuada de las baterías</dd>
                                        <dt>Entidad líder</dt>
                                        <dd>Secretaría de Ambiente</dd>
                                    </dl>
                                    <dl>
                                        <dt>Resultados previstos</dt>
                                        <dd>Organizaciones y actores vinculados a la <b>Red de Movilidad Eléctrica</b></dd>
                                        <dt>Productos estratégicos</dt>
                                        <dd><b>Compromisos</b> de actores vinculados a la red.</dd>
                                        <dd><b>Comisión</b> intersectorial de transición energética del transporte.</dd>
                                        <dd><b>Cooperación técnica</b> con los municipios de la región.</dd>
                                        <dd>Eventos de <b>intercambio de conocimiento</b>.</dd>
                                        <dd>Programa de <b>Reconocimiento</b> a los aliados por la Movilidad Eléctrica.</dd>
                                        <dt>Entidad líder</dt>
                                        <dd>Secretaría de Movilidad</dd>
                                    </dl>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- collapse obj3 -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading-obj3'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-objs' href='#collapse-obj3' aria-expanded='false' aria-controls='collapse-obj3'>
                                Objetivo 3
                            </a>
                        </h4>
                    </div>
                    <div id='collapse-obj3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-obj3' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='body-collapse-obj3'>
                                <div class='box-obj3'>
                                    <div class="list-goals">
                                        <div class="img-goal img-goal-2">
                                            <img class="img-responsive w-100" src="https://via.placeholder.com/100x100" alt="Icono: Promover" title="Icono: Promover">
                                        </div>
                                        <div class="text-goal text-goal-2">
                                            <p>Desarrollar un entorno de <b>comunicación, pedagogía y participación</b> alrededor de la movilidad de cero y bajas emisiones.</p>
                                        </div>
                                    </div>
                                    <div class="list-products">
                                        <dl>
                                            <dt>Resultados previstos</dt>
                                            <dd><b>Información a la ciudadanía</b> sobre tecnología de cero y bajas emisiones </dd>
                                            <dt>Productos estratégicos</dt>
                                            <dd><b>Estrategías de comunicación y cultura ciudadana</b> sobre tecnología de cero y bajas emisiones.</dd>
                                            <dd>Herramienta comparativa de alternativas de movilidad.</dd>
                                            <dd><b><a data-target="#modal_formacion" data-toggle="modal">Procesos de formación</a></b> para la ciudadanía.</dd>
                                            <dd>Formación y cualificación de mujeres.</dd>
                                            <dt>Entidad líder</dt>
                                            <dd>Secretaría de Ambiente</dd>
                                        </dl>
                                        <dl>
                                            <dt>Resultados previstos</dt>
                                            <dd>Aumento del conocimiento y aplicación de las prácticas de conducción sostenible</b></dd>
                                            <dt>Productos estratégicos</dt>
                                            <dd>Procesos de <b>aprendizaje de conducción sostenible.</b></dd>
                                            <dd>Estrategía distrital de <b>conducción sostenible</b> y buenas prácticas de Mantenimiento (ECoS).</dd>
                                            <dt>Entidad líder</dt>
                                            <dd>Secretaría de Ambiente</dd>
                                        </dl>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- collapse obj4 -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading-obj4'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-objs' href='#collapse-obj4' aria-expanded='false' aria-controls='collapse-obj4'>
                                Objetivo 4
                            </a>
                        </h4>
                    </div>
                    <div id='collapse-obj4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-obj4' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='body-collapse-obj4'>
                                <div class="list-goals">
                                    <div class="img-goal img-goal-2">
                                        <img class="img-responsive w-100" src="https://via.placeholder.com/100x100" alt="Icono: Promover" title="Icono: Promover">
                                    </div>
                                    <div class="text-goal text-goal-2">
                                        <p>Consolidar una <b>red de infraestructura de recarga</b> inteligente, accesible y competitiva en articulación con el sector privado.</p>
                                    </div>
                                </div>
                                <div class="list-products">
                                    <dl>
                                        <dt>Resultados previstos</dt>
                                        <dd>Atención del 100 % de la demanda de infraestructura de recarga de acceso público para vehículos.</dd>
                                        <dt>Productos estratégicos</dt>
                                        <dd>Consolidación de la <b><a href="">red de estaciones</a></b> de recarga en vía y fuera de vía.</dd>
                                        <dd>Beneficios tributarios para desarrollo de infraestructura de recarga en el distrito.</dd>
                                        <dd>Gestión para la eliminación del IVA al servicio de recarga para vehículos eléctricos.</dd>
                                        <dd>Reglamentación de interoperabilidad de la infraestructura de recarga.</dd>
                                        <dt>Entidad líder</dt>
                                        <dd>Secretaría de Movilidad</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /#fin -objs -->
            </div>
        </div>
    </div>
    <!-- Fin Set -->
