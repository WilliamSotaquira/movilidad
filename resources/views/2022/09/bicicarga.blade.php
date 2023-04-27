@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<div class='container-fluid bicicarga'>
    <!-- Set Wrapper -->
    <div class='box-wrp'>

        <!-- Sección Encabezado  -->
        <div class='box-head'>
            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/18-10-2022/header_v2.png' alt='encabezado bicicarga' title='encabezado bicicarga'>
            <style>
                .box-wrp .box-head {
                    grid-area: encabezado;
                    background-color: var(--color-primario);
                }
            </style>
        </div>

        <!-- Seccción Video Principal -->
        <div class="box-video">
            <div class='embed-responsive embed-responsive-16by9'>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Xa-xEiPbB64" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <style>
                .box-wrp .box-video {
                    grid-area: video;
                }
            </style>
        </div>

        <!-- Sección Acordeón  -->
        <div class='box-acordeon'>

            <!-- collapse_bicicarga -->
            <div class='panel-group' id='accordion_bicicarga' role='tablist ' aria-multiselectable='false'>

                <!-- collapse_queEs -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_queEs'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_bicicarga' href='#collapse_queEs' aria-expanded='false' aria-controls='collapse_queEs'>
                                ¿Qué es BiciCarga?
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_queEs' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_queEs' aria-expanded="false">

                        <div class='panel-body'>
                            <div class="box-queEs">
                                <!-- box seccion queEs-titulo -->
                                <div class="box-queEs-titulo">
                                    <h3>BiciCarga ¿Qué es?</h3>
                                </div>
                                <style>
                                    .box-queEs-titulo {
                                        grid-area: box-queEs-titulo;
                                    }

                                    .box-queEs-titulo h3 {
                                        font-weight: 700;
                                        text-align: center;
                                        line-height: 1.2;
                                        color: var(--color-bc-azul);
                                        padding: 32px 16px 0px 16px !important;
                                    }
                                </style>
                                <!-- box seccion queEs-definicion -->
                                <div class="box-queEs-definicion">
                                    <p>Bogotá a través de la Secretaría Distrital de Movilidad implementó un piloto que buscó promover
                                        alternativas para resolver las necesidades actuales de la distribución final de carga en la
                                        ciudad, mediante el uso de bicicletas eléctricas que facilitaron la entrega de mercancía de
                                        forma rápida y eficiente. A través de este piloto se pretendió reducir los problemas de
                                        movilidad, contaminación e ineficiencias operacionales en la distribución.</p>
                                </div>
                                <style>
                                    .box-queEs-definicion {
                                        grid-area: box-queEs-definicion;
                                    }

                                    .box-queEs-definicion p {
                                        font-size: 15px;
                                        font-weight: 500;
                                        text-align: justify;
                                        line-height: 1.3;
                                        color: var(--color-bc-text);
                                        padding: 16px 16px 0px 16px;
                                        margin: 0px;
                                    }

                                    @media(min-width:768px) {
                                        .box-queEs-definicion {
                                            padding: 0px 48px 32px 0px;
                                        }

                                        .box-queEs-definicion p {
                                            padding: 0px 16px 0px 16px !important;
                                        }

                                        .box-queEs-titulo h3 {
                                            padding: 32px 64px 0px 16px !important;
                                        }

                                    }

                                    @media(min-width:992px) {}

                                    @media(min-width:1200px) {}
                                </style>

                                <!-- box seccion queEs-imagen -->
                                <div class="box-queEs-imagen">
                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/que-es.png' alt='Imagen de bicicleta de carga' title='Imagen de bicicleta de carga'>
                                </div>
                                <style>
                                    .box-queEs-imagen {
                                        grid-area: box-queEs-imagen;
                                        padding: 16px 32px;
                                        max-width: 500px;
                                        margin: auto;
                                    }
                                </style>

                            </div>
                            <style>
                                .box-wrp .box-acordeon .box-queEs {
                                    display: grid;
                                    gap: 10px;
                                    grid-auto-flow: dense;
                                    grid-template-columns: 1fr;
                                    grid-template-rows: auto;
                                    grid-template-areas:
                                        'box-queEs-titulo'
                                        'box-queEs-definicion'
                                        'box-queEs-imagen';
                                }


                                @media(min-width:768px) {
                                    .box-wrp .box-acordeon .box-queEs {
                                        grid-template-columns: 1fr 1fr;
                                        gap: 0px;
                                        grid-template-areas:
                                            'box-queEs-imagen box-queEs-titulo'
                                            'box-queEs-imagen box-queEs-definicion';
                                    }

                                    .box-queEs-definicion {
                                        /* height: px; */
                                        display: flex;
                                        flex-direction: column;
                                        justify-content: center;
                                        align-items: center;
                                        padding: 32px 48px 32px 0px;
                                    }

                                    .box-queEs-imagen {
                                        padding: 16px 0px 16px 32px;
                                        /* padding: 16px 32px; */
                                        /* max-width: 500px; */
                                        max-width: 350px !important;
                                        padding: 0px 0px 0px 32px;
                                    }

                                    .box-queEs-definicion p {
                                        line-height: 1.5;
                                    }
                                }
                            </style>
                        </div>

                    </div>
                </div>

                <!-- collapse queBusco -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_queBusco'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_bicicarga' href='#collapse_queBusco' aria-expanded='false' aria-controls='collapse_queBusco'>
                                ¿Qué buscó?
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_queBusco' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_queBusco' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-queBusco'>
                                <div>
                                    <h3>¿Qué buscó BiciCarga Fase 1?</h3>
                                    <p>(atributos del proyecto)</p>
                                </div>
                                <br>
                                <div class="card-atributo">
                                    <div class='imagen'>
                                        <h4>En política</h4>
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/icon-politica.png' alt='Icono Entidad de Gobierno' title='Icono Entidad de Gobierno'>
                                    </div>
                                    <div class="texto">
                                        <ul>
                                            <li>Hacer recomendaciones para la formulación de marcos regulatorios y política
                                                pública que apoyen el mayor uso de bicicletas de carga eléctrica
                                                (incentivos, habilitación de zonas, marco legal habilitador)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-atributo">
                                    <div class='imagen'>
                                        <h4>En acciones</h4>
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/icon-acciones.png' alt='Icono acciones' title='Icono acciones'>
                                    </div>
                                    <div class="texto">
                                        <ul>
                                            <li>Definir aquellas acciones que permitan la conformación de una red de valor
                                                alrededor de la ciclo logística y así fomentar la implementación de
                                                movilidad de cero y bajas emisiones.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-atributo">
                                    <div class='imagen'>
                                        <h4>En economía</h4>
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/icon-economia.png' alt='Icono En economía' title='Icono En economía'>
                                    </div>
                                    <div class="texto">
                                        <ul>
                                            <li>Promover la consecución de recursos del sector privado para apoyar
                                                soluciones innovadoras para el movimiento del mercado.</li>
                                            <li>Crear oportunidades de diversificación y masificación de aplicaciones.</li>
                                            <li>Cuantificar el impacto sobre oportunidades para la generación de empleo.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-atributo">
                                    <div class='imagen'>
                                        <h4>En conocimiento</h4>
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/icon-conocimiento.png' alt='Icono En conocimiento' title='Icono En conocimiento'>
                                    </div>
                                    <div class="texto">
                                        <ul>
                                            <li>Fortalecer el conocimiento de la implementación de bicicletas de carga para
                                                distribución de última milla.</li>
                                            <li>Cuantificar los beneficios ambientales, económicos e impactos potenciales de
                                                adoptar un modelo de distribución basado en el uso de bicicletas/triciclos
                                                eléctricos de carga.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        .box-queBusco {
                            grid-area: queBusco;
                            background-color: var(--color-bc-azul);

                        }

                        .box-queBusco h3 {
                            margin: 0px;
                            padding: 16px;
                            /* font-size: 18px; */
                            font-weight: 700;
                            text-align: center;
                            line-height: 1.2;
                            color: var(--color-bc-blanco);
                        }

                        .box-queBusco p {
                            margin: 0px;
                            font-size: 15px;
                            font-weight: 500;
                            text-align: center;
                            line-height: 1.2;
                            color: var(--color-bc-blanco);
                        }



                        .box-queBusco .card-atributo {
                            border-top: 1px var(--color-bc-blanco) dashed;
                            /* height: px; */
                            display: grid;
                            gap: 10px;
                            grid-auto-flow: dense;
                            grid-template-columns: 1fr;
                            grid-template-rows: auto;
                        }

                        .box-queBusco .card-atributo .texto {

                            /* height: px; */
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            padding: 0px 16px 16px 16px;
                            font-size: 15px;
                            font-weight: 500;
                            text-align: left;
                            line-height: 1.3;
                            color: var(--color-bc-blanco);
                        }

                        .box-queBusco .card-atributo .texto ul>li {
                            padding-top: 8px;
                        }

                        .box-queBusco .card-atributo h4 {
                            font-size: 20px;
                            font-weight: 700;
                            text-align: center;
                            line-height: 1.2;
                            color: var(--color-bc-blanco);
                            padding: 16px 16px 0px 16px;
                            margin: 0px;
                        }

                        .box-queBusco .card-atributo .imagen img {
                            max-width: 120px;
                            margin: auto;
                            padding-top: 8px;
                        }

                        .box-acordeon .panel-body {
                            padding: 0px !important;
                        }

                        @media(min-width:768px) {

                            /* En línea #7 | http://localhost:8000/2022/09/bicicarga#collapse_queEs */

                            .box-queBusco .card-atributo {
                                /* grid-template-columns: 1fr; */
                                grid-template-columns: 33% auto;
                            }

                            .box-queBusco .card-atributo .imagen img {
                                /* max-width: 120px; */
                                max-width: 99px;
                                padding-top: 16px;
                                padding-bottom: 16px;
                            }

                        }
                    </style>
                </div>

                <!-- collapse como -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_como'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_bicicarga' href='#collapse_como' aria-expanded='false' aria-controls='collapse_como'>
                                ¿Cómo se desarrolló?
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_como' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_como' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-como'>

                                <div class="title title-h3">
                                    <h3>¿Cómo se desarrolló el piloto?</h3>
                                </div>
                                <div class="paragraph ph-1">
                                    <p>El piloto se desarrolló en <strong>dos fases</strong>:</p>
                                </div>
                                <div class='imagen'>
                                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-12-2020/micrositio-bicicarga.jpg" target="_blank" rel="noopener noreferrer">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-12-2020/micrositio-bicicarga.jpg' alt='imagen comparación de modelos' title='imagen comparación de modelos'>
                                    </a>
                                </div>

                                <div class="box-collapse">

                                    <!-- collapse_fases -->
                                    <div class='panel-group' id='accordion_fases' role='tablist ' aria-multiselectable='true'>

                                        <!-- collapse fase1 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_fase1'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_fases' href='#collapse_fase1' aria-expanded='false' aria-controls='collapse_fase1'>
                                                        Fase 1
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_fase1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_fase1' aria-expanded='false'>
                                                <div class='panel-body'>
                                                    <div class='box-fase1'>

                                                        <div class="paragraph ph-1">
                                                            <p><strong>Fase 1:</strong> Empezó en diciembre de 2020 hasta mayo 2021 con la participación de cuatro empresas en la que se desarrollaron los dos modelos de operación.</p>
                                                        </div>
                                                        <div class="modelo1">
                                                            <div class="title title-h4">
                                                                <h4>Modelo 1: Operación centralizada</h4>
                                                            </div>
                                                            <div class="paragraph ph-1">
                                                                <p>Este involucró empresas con un centro de acopio ubicado en Bogotá, que se usó para distribuir su mercancía en un radio menor a 5 km con bicicletas o triciclos eléctricos propios. El piloto se desarrolló con tres empresas, dos del sector industrial de consumo masivo y un operador logístico.</p>
                                                            </div>
                                                            <div class='imagen'>
                                                                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-02-2022/mapa2.jpg" target="_blank" rel="noopener noreferrer">
                                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-02-2022/mapa2.jpg' alt='Imagen Modelo 1: Operación centralizada' title='Imagen Modelo 1: Operación centralizada'>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="modelo2">
                                                            <div class="title title-h4">
                                                                <h4>Modelo 2: Plataforma de cross docking colaborativa</h4>
                                                            </div>
                                                            <div class="paragraph ph-1">
                                                                <p>Este involucró a empresas que hicieron uso de una plataforma colaborativa para distribuir sus mercancías partiendo de un único punto de acopio ubicado en una zona estratégica de la ciudad. En ella se recibían los pedidos para distribuirlos en bicicletas o triciclos eléctricos a su destino final. La razón fundamental detrás de la ubicación del centro es que permitió que las entregas de última milla se hicieran en bicicleta, eliminando al menos una parte de los movimientos realizados en la zona por vehículos de carga convencionales.</p>
                                                            </div>
                                                            <div class='imagen'>
                                                                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-02-2022/mapa1.jpg" target="_blank" rel="noopener noreferrer">
                                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-02-2022/mapa1.jpg' alt='Imagen Modelo 2: Plataforma de cross docking colaborativa' title='Imagen Modelo 2: Plataforma de cross docking colaborativa'>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <style>
                                                .box-fase1 {
                                                    grid-area: fase1;
                                                }
                                            </style>
                                        </div>

                                        <!-- collapse fase2 -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='heading_fase2'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_fases' href='#collapse_fase2' aria-expanded='false' aria-controls='collapse_fase2'>
                                                        Fase 2
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapse_fase2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_fase2' aria-expanded='false'>
                                                <div class='panel-body'>
                                                    <div class='box-fase2'>

                                                        <div class="paragraph ph-1">
                                                            <p><strong>Fase 2:</strong> Ejecutada entre diciembre de 2021 y mayo de 2022, únicamente bajo el segundo modelo de operación y en el que participaron dos empresas. Esta última fase adicionalmente tuvo como factor agregado la recarga de las bicicletas mediante paneles solares.</p>
                                                        </div>
                                                        <div class="modelo2">
                                                            <div class="title title-h4">
                                                                <h4>Modelo 2: Plataforma de cross docking colaborativa</h4>
                                                            </div>
                                                            <div class="paragraph ph-1">
                                                                <p>Este involucró a empresas que hicieron uso de una plataforma colaborativa para distribuir sus mercancías partiendo de un único punto de acopio ubicado en una zona estratégica de la ciudad. En ella se recibieron los pedidos para distribuirlos en bicicletas o triciclos eléctricos a su destino final. La razón fundamental detrás de la ubicación del centro es que permitió que las entregas de última milla se hicieran en bicicleta, eliminando al menos una parte de los movimientos realizados en la zona por vehículos de carga convencionales.</p>
                                                            </div>
                                                            <div class='imagen'>
                                                                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-02-2022/mapa1.jpg" target="_blank" rel="noopener noreferrer">
                                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-02-2022/mapa1.jpg' alt='Imagen Modelo 2: Plataforma de cross docking colaborativa' title='Imagen Modelo 2: Plataforma de cross docking colaborativa'>
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <style>
                                                .box-fase2 {
                                                    grid-area: fase2;
                                                }
                                            </style>
                                        </div>

                                    </div>
                                    <!-- /#fin _fases -->

                                </div>
                                <style>
                                    .box-como .box-collapse {
                                        grid-area: cpte-collapse;
                                    }
                                </style>

                                <div class="">

                                </div>
                            </div>
                            <style>
                                .box-acordeon .box-como {
                                    grid-area: box-como;
                                    padding: 8px;
                                }

                                .box-wrp .box-como .title-h3 h3 {
                                    /* font-size: 18px; */
                                    font-weight: 700;
                                    text-align: center;
                                    line-height: 1.2;
                                    color: var(--color-bc-verde);
                                    padding: 32px 16px 0px 16px;
                                }

                                .box-wrp .box-como .title-h4 h4 {
                                    font-size: 18px;
                                    font-weight: 700;
                                    text-align: left;
                                    line-height: 1.2;
                                    color: var(--color-bc-verde);
                                    margin: 16px;
                                }

                                .box-wrp .box-como p {
                                    font-size: 15px;
                                    font-weight: 500;
                                    text-align: justify;
                                    line-height: 1.3;
                                    color: var(--color-bc-text);
                                    padding: 16px;
                                    margin: 0px;
                                }
                            </style>
                        </div>
                    </div>
                </div>

                <!-- collapse seMidio -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_seMidio'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_bicicarga' href='#collapse_seMidio' aria-expanded='false' aria-controls='collapse_seMidio'>
                                ¿Qué se midió?
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_seMidio' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_seMidio' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-seMidio'>

                                <div class="content3">
                                    <div>
                                        <h3>¿Qué se midió?</h3>
                                        <p>Durante los seis meses del piloto se midieron indicadores de operación logística,
                                            variables ambientales, sociales y de costos, que al final permitieron tener claridad
                                            sobre los impactos y requerimientos para que este modelo de distribución permanezca
                                            de manera sostenible en un entorno local y regional.</p>
                                    </div>

                                </div>
                                <style>
                                    .box-acordeon .content3 {
                                        background-color: var(--color-bc-verde);
                                    }

                                    .box-acordeon .content3 h3 {
                                        /* font-size: 18px; */
                                        font-weight: 700;
                                        text-align: center;
                                        line-height: 1.2;
                                        color: var(--color-bc-blanco);
                                        padding: 16px;
                                        margin: 0px;
                                    }

                                    .box-acordeon .content3 h4 {
                                        font-size: 18px;
                                        font-weight: 700;
                                        text-align: left;
                                        line-height: 1.2;
                                        color: var(--color-bc-blanco);
                                        margin: 16px;
                                    }

                                    .box-acordeon .content3 p {
                                        font-size: 15px;
                                        font-weight: 500;
                                        text-align: justify;
                                        line-height: 1.3;
                                        color: var(--color-bc-blanco);
                                        padding: 0px 15px 15px 15px;
                                    }

                                    @media(min-width:768px) {
                                        .box-acordeon .content3 p {
                                            padding: 0px 96px 32px 96px;
                                        }
                                    }
                                </style>
                                <div class="content4">
                                    <div class="btn-content4">
                                        <div class='icono'>
                                            <img class='img-responsive w-100' width="150px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/icon-movilidad.png' alt='IconoEficiencia Operacional' title='IconoEficiencia Operacional'>
                                        </div>
                                        <h4>Eficiencia Operacional</h4>
                                        <div class="list-content4">
                                            <ul>
                                                <li>Kg, m3 entregados</li>
                                                <li>% devoluciones</li>
                                                <li>Índice de satisfacción cliente</li>
                                                <li>Utilización, autonomía y fallas de los vehículos</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btn-content4">
                                        <div class='icono'>
                                            <img class='img-responsive w-100' width="150px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/icon-costos.png' alt='Icono Costos' title='Icono Costos'>
                                        </div>
                                        <h4>Costos</h4>
                                        <div class="list-content4">
                                            <ul>
                                                <li>% variación del costo de la operación y de transporte de los productos</li>
                                                <li>Costos de personal</li>
                                                <li>% variación costo consumo energía y mantenimiento de vehículos</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btn-content4">
                                        <div class='icono'>
                                            <img class='img-responsive w-100' width="150px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/icon-impacto.png' alt='Icono Impacto Ambiental' title='Icono Impacto Ambiental'>
                                        </div>
                                        <h4>Impacto Ambiental</h4>
                                        <div class="list-content4">
                                            <ul>
                                                <li>Emisiones equivalentes de CO2</li>
                                                <li>Consumo energético</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btn-content4">
                                        <div class='icono'>
                                            <img class='img-responsive w-100' width="150px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/icon-almacenamiento.png' alt='Icono Impacto Social' title='Icono Impacto Social'>
                                        </div>
                                        <h4>Impacto Social</h4>
                                        <div class="list-content4">
                                            <ul>
                                                <li>Aforo vehicular en zonas de operación e infraestructura</li>
                                                <li>Nivel de aceptación del modelo por parte de grupos de interés y conductores
                                                </li>
                                                <li>Salud ocupacional de los conductores</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .box-acordeon .content4 {
                                        display: grid;
                                        gap: 10px;
                                        grid-auto-flow: dense;
                                        grid-template-columns: 1fr;
                                        grid-template-rows: auto;
                                    }

                                    .box-acordeon .content4 .icono img {
                                        max-width: 100px;
                                        margin: auto;
                                        padding: 2%;
                                    }

                                    .box-acordeon .content4 h4 {
                                        font-size: 18px;
                                        font-weight: 700;
                                        text-align: center;
                                        line-height: 1.2;
                                        color: var(--color-bc-verde);
                                        margin: 0px;

                                        padding: 16px 16px 0px 16px;
                                    }

                                    .box-acordeon .content4 .list-content4 {
                                        padding: 16px 16px 0px 16px;
                                    }

                                    .box-acordeon .content4 .list-content4 ul>li {
                                        text-align: left;
                                        padding-bottom: 8px;
                                    }

                                    @media(min-width:768px) {
                                        .box-acordeon .content4 {
                                            display: grid;
                                            gap: 20px;
                                            grid-auto-flow: dense;
                                            grid-template-columns: 1fr 1fr;
                                            grid-template-rows: auto;
                                        }
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <style>
                        .box-seMidio {
                            grid-area: seMidio;
                        }
                    </style>
                </div>

                <!-- collapse resultados -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_resultados'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_bicicarga' href='#collapse_resultados' aria-expanded='false' aria-controls='collapse_resultados'>
                                Resultados
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_resultados' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_resultados' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-resultados'>

                                <div class="box-eficiencia">

                                    <div class="box-eo">

                                        <div class="box-eo-head">
                                            <div class="box-title">
                                                <h3 class="title2">Eficiencia Operacional <br><strong><span class="enfv1">Modelos 1 y 2</span></strong></h3>
                                            </div>
                                            <style>
                                                .box-eo-head .box-title {
                                                    grid-area: box-title;
                                                    padding: 16px 0px 0px 0px;
                                                }

                                                .box-eo-head .box-title h3 {
                                                    font-weight: 500;
                                                    text-align: left;
                                                    line-height: 1;
                                                }

                                                .box-eo-head .box-title .enfv1 {
                                                    line-height: 1;
                                                    font-weight: 700;
                                                }
                                            </style>

                                            <div class="box-img">
                                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_19_0.png' alt='imagen de vehículos eléctricos de BiciCarga' title='imagen de vehículos eléctricos de BiciCarga'>
                                            </div>
                                            <style>
                                                .box-eo-head .box-img {
                                                    grid-area: box-img;
                                                    padding-top: 8px;
                                                }

                                                @media(min-width:768px) {
                                                    .box-eo-head .box-img {
                                                        max-width: 490px;
                                                        margin: auto;
                                                    }
                                                }
                                            </style>
                                        </div>
                                        <style>
                                            .box-eo .box-eo-head {
                                                grid-area: box-eo-head;
                                                display: grid;
                                                gap: 8px;
                                                grid-auto-flow: dense;
                                                grid-template-columns: 1fr;
                                                grid-template-rows: auto;
                                                grid-template-areas:
                                                    'box-title'
                                                    'box-img';
                                                padding-bottom: 16px;
                                                border-bottom: 1px dashed var(--color-bc-blanco);
                                            }
                                        </style>

                                        <div class="box-eo-1">

                                            <div class="box-eo-1-2">
                                                <h3 class="enfb1">Distancia recorrida:</h3>
                                                <p><span class="enfv2">17.000 Km</span></p>

                                            </div>
                                            <style>
                                                .box-eo .box-eo-1-2 {
                                                    grid-area: box-eo-1-2;
                                                    padding: 16px 0px 0px 0px;
                                                }

                                                .box-eo .box-eo-1-2 p {
                                                    padding-top: 16px;
                                                    /* text-align: left; */
                                                }

                                                @media(min-width:768px) {
                                                    .box-eo .box-eo-1-2 {
                                                        padding: 16px 0px 8px 0px;
                                                    }
                                                }
                                            </style>

                                            <div class='box-eo-1-1'>

                                                <!-- box seccion box-eo-1-1-1 -->
                                                <div class="box-eo-1-1-1">
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_20_0.png' alt='icono ruta' title='icono ruta'>
                                                </div>
                                                <style>
                                                    .box-eo-1-1-1 {
                                                        grid-area: box-eo-1-1-1;
                                                        /* height: px; */
                                                        display: flex;
                                                        flex-direction: column;
                                                        justify-content: center;
                                                        align-items: center;
                                                    }

                                                    .box-eo-1-1-1 img {
                                                        /* padding: 16px; */
                                                        max-width: 120px;
                                                        margin: auto;
                                                    }

                                                    @media(min-width:768px) {
                                                        .box-eo-1-1-1 img {
                                                            margin-bottom: 0px;
                                                        }
                                                    }
                                                </style>

                                            </div>
                                            <style>
                                                .box-eo .box-eo-1-1 {
                                                    grid-area: box-eo-1-1;
                                                    display: grid;
                                                    gap: 8px;
                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        'box-eo-1-1-2'
                                                        'box-eo-1-1-1';
                                                    padding: 0px 16px;
                                                }
                                            </style>


                                            <div class="box-eo-1-3">
                                                <h3 class="enfb1">Equivale a:</h3>
                                                <p class="enfb2"><span class="enfv2">30 veces </span> la distancia entre Bogotá y Medellín (418 Km).</p>
                                            </div>
                                            <style>
                                                .box-eo .box-eo-1-3 {
                                                    grid-area: box-eo-1-3;
                                                    padding: 16px 0px;
                                                }

                                                .box-eo .box-eo-1-3 p {
                                                    text-align: center;
                                                }
                                            </style>
                                            <div class="box-eo-1-4 box-img">
                                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/26-10-2022/recurso_2.png' alt='imagen que describe la distancia equivalente' title='imagen que describe la distancia equivalente'>
                                            </div>
                                            <style>
                                                .box-eo .box-eo-1-4 {
                                                    grid-area: box-eo-1-4;
                                                }
                                            </style>
                                        </div>
                                        <style>
                                            .box-eo-1 {
                                                grid-area: box-eo-1;
                                                display: grid;
                                                gap: 8px;

                                                grid-auto-flow: dense;
                                                grid-template-columns: 1fr;
                                                grid-template-rows: auto;
                                                grid-template-areas:
                                                    'box-eo-1-2'
                                                    'box-eo-1-1'
                                                    'box-eo-1-3'
                                                    'box-eo-1-4';
                                                padding: 16px 0px;
                                                border-bottom: 1px dashed var(--color-bc-blanco);

                                            }

                                            @media(min-width:768px) {
                                                .box-eo-1 {
                                                    grid-area: box-eo-1;
                                                    display: grid;
                                                    gap: 8px;

                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        'box-eo-1-2 box-eo-1-3'
                                                        'box-eo-1-1 box-eo-1-4';
                                                    padding: 16px 0px;
                                                    border-bottom: 1px dashed var(--color-bc-blanco);
                                                }

                                                .box-eo .box-eo-1-1 {
                                                    grid-area: box-eo-1-1;
                                                    display: grid;
                                                    gap: 8px;
                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        'box-eo-1-1-1 box-eo-1-1-2 ';
                                                    padding: 0px 16px;
                                                }
                                            }

                                            @media(min-width:992px) {
                                                .box-eo-1 {
                                                    padding: 16px 96px;
                                                }

                                            }
                                        </style>

                                        <div class="box-eo-2">
                                            <div class="box-eo-2-2">
                                                <h3 class="enfb1">Pedidos entregados:</h3>
                                                <p><span class="enfv2">62.000</span></p>
                                            </div>
                                            <style>
                                                .box-eo-2 .box-eo-2-2 {
                                                    grid-area: box-eo-2-2;
                                                    padding: 16px 0px 0px 0px;
                                                }

                                                .box-eo .box-eo-2-2 p {
                                                    padding-top: 16px;
                                                    /* text-align: left; */
                                                }

                                                @media(min-width:768px) {
                                                    .box-eo .box-eo-1-2 {
                                                        padding: 16px 0px 8px 0px;
                                                    }
                                                }
                                            </style>

                                            <div class="box-eo-2-1">

                                                <!-- box seccion eo-2-1-1 -->
                                                <div class="box-eo-2-1-1">
                                                    <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_22_0.png' alt='icono cajas de empaque' title='icono cajas de empaque'>
                                                </div>
                                                <style>
                                                    .box-eo-2-1-1 {
                                                        grid-area: box-eo-2-1-1;
                                                        /* height: px; */
                                                        display: flex;
                                                        flex-direction: column;
                                                        justify-content: center;
                                                        align-items: center;
                                                    }

                                                    .box-eo-2-1-1 img {
                                                        max-width: 120px;
                                                        margin: auto;
                                                    }

                                                    @media(min-width:768px) {
                                                        .box-eo-1-1-1 img {
                                                            margin-bottom: 0px;
                                                        }
                                                    }
                                                </style>

                                            </div>
                                            <style>
                                                .box-eo-2 .box-eo-2-1 {
                                                    grid-area: box-eo-2-1;
                                                    display: grid;
                                                    gap: 8px;
                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        'box-eo-2-1-2'
                                                        'box-eo-2-1-1';
                                                    padding: 0px 16px;

                                                }
                                            </style>

                                            <div class="box-eo-2-3">
                                                <h3 class="enfb1">Equivale a:</h3>
                                                <p class="enfb2"><span class="enfv2">160 clientes</span> recibiendo pedidos todos los días durante un año.</p>
                                            </div>
                                            <style>
                                                .box-eo-2 .box-eo-2-3 {
                                                    grid-area: box-eo-2-3;
                                                    padding: 16px 0px;
                                                }

                                                .box-eo .box-eo-2-3 .enfv2 {
                                                    text-align: center;
                                                }
                                            </style>

                                            <div class="box-eo-2-4 box-img">
                                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_23_0.png' alt='imagen motos y almacenamiento' title='imagen motos y almacenamiento'>
                                            </div>
                                            <style>
                                                .box-eo-2 .box-eo-2-4 {
                                                    grid-area: box-eo-2-4;
                                                }
                                            </style>

                                        </div>
                                        <style>
                                            .box-eo-2 {
                                                grid-area: box-eo-2;
                                                display: grid;
                                                gap: 8px;
                                                grid-auto-flow: dense;
                                                grid-template-columns: 1fr;
                                                grid-template-rows: auto;
                                                grid-template-areas:
                                                    'box-eo-2-2'
                                                    'box-eo-2-1'
                                                    'box-eo-2-3'
                                                    'box-eo-2-4';
                                                padding: 16px 0px;
                                                border-bottom: 1px dashed var(--color-bc-blanco);
                                            }

                                            @media(min-width:768px) {
                                                .box-eo-2 {
                                                    grid-area: box-eo-2;
                                                    display: grid;
                                                    gap: 8px;

                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        'box-eo-2-2 box-eo-2-3'
                                                        'box-eo-2-1 box-eo-2-4';
                                                    padding: 16px 0px;
                                                    border-bottom: 1px dashed var(--color-bc-blanco);
                                                }

                                                .box-eo .box-eo-2-1 {
                                                    grid-area: box-eo-2-1;
                                                    display: grid;
                                                    gap: 8px;
                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        'box-eo-2-1-1 box-eo-2-1-2 ';
                                                    padding: 0px 16px;
                                                }
                                            }

                                            @media(min-width:992px) {
                                                .box-eo-2 {
                                                    padding: 16px 96px;
                                                }

                                            }
                                        </style>

                                        <div class="box-eo-3">
                                            <div class="box-eo-3-2">
                                                <h3 class="enfb1">Mercancia entregada:</h3>
                                                <p><span class="enfv2">93 Toneladas</span></p>
                                            </div>
                                            <style>
                                                .box-eo-3 .box-eo-3-2 {
                                                    grid-area: box-eo-3-2;
                                                    padding-top: 16px;
                                                }

                                                .box-eo .box-eo-3-2 p {
                                                    padding-top: 16px;
                                                    /* text-align: left; */
                                                }

                                                @media(min-width:768px) {
                                                    .box-eo .box-eo-3-2 {
                                                        padding: 16px 0px 8px 0px;
                                                    }
                                                }
                                            </style>
                                            <div class="box-eo-3-1">

                                                <!-- box seccion eo-3-1-1 -->
                                                <div class="box-eo-3-1-1">
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/25-10-2022/tonelada.png' alt='icono Tonelada' title='icono Tonelada'>
                                                </div>
                                                <style>
                                                    .box-eo-3-1-1 {
                                                        grid-area: box-eo-3-1-1;
                                                        /* height: px; */
                                                        display: flex;
                                                        flex-direction: column;
                                                        justify-content: center;
                                                        align-items: center;
                                                    }

                                                    .box-eo-3-1-1 img {
                                                        /* padding: 16px; */
                                                        max-width: 120px;
                                                        margin: auto;
                                                    }

                                                    @media(min-width:768px) {
                                                        .box-eo-3-1-1 img {
                                                            margin-bottom: 0px;
                                                        }
                                                    }
                                                </style>

                                            </div>

                                            <style>
                                                .box-eo-3 .box-eo-3-1 {
                                                    grid-area: box-eo-3-1;
                                                    display: grid;
                                                    gap: 8px;
                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        'box-eo-3-1-2'
                                                        'box-eo-3-1-1';
                                                    padding: 0px 16px;
                                                }
                                            </style>

                                            <div class="box-eo-3-3">
                                                <h3 class="enfb1">Equivale a:</h3>
                                                <p class="enfb2"><span class="enfv2">36 camiones</span> de 3 toneladas cargados con bultos de cemento</p>
                                            </div>
                                            <style>
                                                .box-eo-3 .box-eo-3-3 {
                                                    grid-area: box-eo-3-3;
                                                    padding: 16px 0px;
                                                }

                                                .box-eo .box-eo-3-3 .enfv2 {
                                                    text-align: center;
                                                }
                                            </style>
                                            <div class="box-eo-3-4 box-img">
                                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_38.png' alt='imagen que describe la distancia equivalente' title='imagen que describe la distancia equivalente'>
                                            </div>
                                            <style>
                                                .box-eo-3 .box-eo-3-4 {
                                                    grid-area: box-eo-3-4;
                                                }
                                            </style>
                                        </div>
                                        <style>
                                            .box-acordeon .box-eo-3 {
                                                grid-area: box-eo-3;
                                                display: grid;
                                                gap: 8px;
                                                grid-auto-flow: dense;
                                                grid-template-columns: 1fr;
                                                grid-template-rows: auto;
                                                grid-template-areas:
                                                    'box-eo-3-2'
                                                    'box-eo-3-1'
                                                    'box-eo-3-3'
                                                    'box-eo-3-4';
                                                padding: 16px 0px;
                                                border-bottom: 1px dashed var(--color-bc-blanco);

                                            }

                                            @media(min-width:768px) {
                                                .box-acordeon .box-eo-3 {
                                                    grid-area: box-eo-3;
                                                    display: grid;
                                                    gap: 8px;
                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        'box-eo-3-2 box-eo-3-3'
                                                        'box-eo-3-1 box-eo-3-4';
                                                    padding: 16px 0px;
                                                    border-bottom: 1px dashed var(--color-bc-blanco);
                                                }

                                                .box-eo .box-eo-3-1 {
                                                    grid-area: box-eo-3-1;
                                                    display: grid;
                                                    gap: 8px;
                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        'box-eo-3-1-1 box-eo-3-1-2 ';
                                                    padding: 0px 16px;
                                                }
                                            }

                                            @media(min-width:992px) {
                                                .box-eo-3 {
                                                    padding: 16px 96px !important;
                                                }
                                            }
                                        </style>
                                    </div>
                                </div>
                                <style>
                                    .box-acordeon .box-eo {
                                        background-color: var(--color-bc-azul);
                                        padding: 16px;
                                        display: grid;
                                        gap: 8px;
                                        grid-auto-flow: dense;
                                        grid-template-columns: 1fr;
                                        grid-template-rows: auto;
                                        grid-template-areas:
                                            'box-eo-head'
                                            'box-eo-1'
                                            'box-eo-2'
                                            'box-eo-3';
                                    }
                                </style>

                                <div class="box-ambiental">

                                    <!-- box seccion amb-head -->
                                    <div class="box-amb-head">

                                        <!-- box seccion title -->
                                        <div class="box-title">
                                            <h3 class="title2">Impacto ambiental<br><strong><span class="enfa2">Modelos 1 y 2</span></strong></h3>
                                        </div>
                                        <style>
                                            .box-amb-head .box-title {
                                                grid-area: box-title;
                                                padding: 16px 0px 0px 0px;
                                            }

                                            .box-amb-head .box-title h3 {
                                                font-weight: 500;
                                                text-align: left;
                                                line-height: 1;
                                            }

                                            .box-amb-head .box-title .enfv1 {
                                                line-height: 1;
                                                font-weight: 700;
                                            }
                                        </style>

                                        <!-- box seccion image -->
                                        <div class="box-image">
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_53n.png' alt='imagen de vehículos eléctricos de BiciCarga' title='imagen de vehículos eléctricos de BiciCarga'>

                                        </div>
                                        <style>
                                            .box-image {
                                                grid-area: box-image;
                                                padding-top: 8px;
                                            }

                                            @media(min-width:768px) {
                                                .box-amb-head .box-image {
                                                    max-width: 490px;
                                                    margin: auto;
                                                }
                                            }
                                        </style>
                                    </div>
                                    <style>
                                        .box-amb-head {
                                            grid-area: box-amb-head;
                                            display: grid;
                                            gap: 8px;
                                            grid-auto-flow: dense;
                                            grid-template-columns: 1fr;
                                            grid-template-rows: auto;
                                            grid-template-areas:
                                                'box-title'
                                                'box-image';
                                            padding-bottom: 16px;
                                            border-bottom: 1px dashed var(--color-bc-blanco);
                                        }
                                    </style>

                                    <div class="box-amb-1">

                                        <div class="box-amb-1-1">
                                            <h3 class="enfb1"><strong>CO<sub>2</sub></strong> reducido:</h3>
                                            <p><span class="enfa2">3.47 Ton CO<sub>2</sub></span></p>
                                        </div>
                                        <style>
                                            .box-ambiental .box-amb-1-1 {
                                                grid-area: box-amb-1-1;
                                                padding: 16px 0px 0px 0px;
                                            }

                                            .box-ambiental .box-amb-1-1 p {
                                                padding-top: 16px;
                                                /* text-align: left; */
                                            }

                                            @media(min-width:768px) {
                                                .box-ambiental .box-amb-1-1 {
                                                    padding: 16px 0px 8px 0px;
                                                }
                                            }
                                        </style>

                                        <div class="box-amb-1-2">

                                            <!-- box seccion box-amb-1-2-1 -->
                                            <div class="box-amb-1-2-1">
                                                <img class='w-100 img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_54n.png' alt='icono ruta' title='icono ruta'>
                                            </div>
                                            <style>
                                                .box-amb-1-2-1 {
                                                    grid-area: box-amb-1-2-1;
                                                    /* height: px; */
                                                    display: flex;
                                                    flex-direction: column;
                                                    justify-content: center;
                                                    align-items: center;
                                                }

                                                .box-amb-1-2-1 img {
                                                    /* padding: 16px; */
                                                    max-width: 150px;
                                                    margin: auto;
                                                }

                                                @media(min-width:768px) {
                                                    .box-amb-1-2-1 img {
                                                        margin-bottom: 0px;
                                                    }
                                                }
                                            </style>

                                        </div>
                                        <style>
                                            .box-ambiental .box-amb-1-2 {
                                                grid-area: box-amb-1-2;
                                                display: grid;
                                                gap: 8px;
                                                grid-auto-flow: dense;
                                                grid-template-columns: 1fr;
                                                grid-template-rows: auto;
                                                grid-template-areas:
                                                    'box-amb-1-2-2'
                                                    'box-amb-1-2-1';
                                                padding: 0px 16px;
                                            }
                                        </style>

                                        <div class="box-amb-1-3">
                                            <h3 class="enfb1">Equivale a:</h3>
                                            <p class="enfb2">La absorción del <span class=""><strong>CO<sub>2</sub></strong></span> de <span class="enfa2">167 árboles</span> <span class=""> al año</span> </p>
                                        </div>
                                        <style>
                                            .box-amb-1 .box-amb-1-3 {
                                                grid-area: box-amb-1-3;
                                                padding: 16px 0px;
                                            }

                                            .box-amb-1 .box-amb-1-3 .enfv2 {
                                                text-align: center;
                                            }
                                        </style>

                                        <!-- box seccion amb-1-4 -->
                                        <div class="box-amb-1-4 box-img">
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_58n.png' alt='imagen que describe la distancia equivalente' title='imagen que describe la distancia equivalente'>
                                        </div>
                                        <style>
                                            .box-amb-1-4 {
                                                grid-area: box-amb-1-4;
                                            }
                                        </style>

                                    </div>
                                    <style>
                                        .box-amb-1 {
                                            grid-area: box-amb-1;
                                            display: grid;
                                            gap: 8px;
                                            grid-auto-flow: dense;
                                            grid-template-columns: 1fr;
                                            grid-template-rows: auto;
                                            grid-template-areas:
                                                'box-amb-1-1'
                                                'box-amb-1-2'
                                                'box-amb-1-3'
                                                'box-amb-1-4';
                                            padding: 16px 0px;
                                            border-bottom: 1px dashed var(--color-bc-blanco);

                                        }

                                        @media(min-width:768px) {
                                            .box-amb-1 {
                                                grid-area: box-amb-1;
                                                display: grid;
                                                gap: 8px;

                                                grid-auto-flow: dense;
                                                grid-template-columns: 1fr 1fr;
                                                grid-template-rows: auto;
                                                grid-template-areas:
                                                    'box-amb-1-1 box-amb-1-3'
                                                    'box-amb-1-2 box-amb-1-4';
                                                padding: 16px 0px;
                                                border-bottom: 1px dashed var(--color-bc-blanco);
                                            }

                                            .box-ambiental .box-amb-1-2 {
                                                grid-area: box-amb-1-2;
                                                display: grid;
                                                gap: 8px;
                                                grid-auto-flow: dense;
                                                grid-template-columns: 1fr;
                                                grid-template-rows: auto;
                                                grid-template-areas:
                                                    'box-amb-1-2-1 box-amb-1-2-2 ';
                                                padding: 0px 16px;
                                            }
                                        }

                                        @media(min-width:992px) {
                                            .box-amb-1 {
                                                padding: 16px 96px;
                                            }

                                        }
                                    </style>


                                    <!-- box seccion amb-2 -->
                                    <div class="box-amb-2">

                                        <!-- box seccion amb-2-1 -->
                                        <div class="box-amb-2-1">
                                            <span class="enfb1">Consumo energético:</span>
                                            <p><span class="enfa2">2.423 kWh</span></p>
                                        </div>
                                        <style>
                                            .box-amb-2-1 {
                                                grid-area: box-amb-2-1;
                                                padding-top: 16px;
                                            }

                                            .box-ambiental .box-amb-2-1 p {
                                                padding-top: 16px;
                                                /* text-align: left; */
                                            }

                                            @media(min-width:768px) {
                                                .box-ambiental .box-amb-2-1 {
                                                    padding: 16px 0px 8px 0px;
                                                }
                                            }
                                        </style>
                                        <!-- box seccion amb-2-2 -->
                                        <div class="box-amb-2-2">

                                            <!-- box seccion amb-2-2-1 -->
                                            <div class="box-amb-2-2-1">
                                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_56n.png' alt='icono relámpago' title='icono relámpago'>
                                            </div>
                                            <style>
                                                .box-amb-2-2-1 {
                                                    grid-area: box-amb-2-2-1;
                                                    /* height: px; */
                                                    display: flex;
                                                    flex-direction: column;
                                                    justify-content: center;
                                                    align-items: center;
                                                }

                                                .box-amb-2-2-1 img {
                                                    /* padding: 16px; */
                                                    max-width: 70px;
                                                    margin: auto;
                                                }

                                                @media(min-width:768px) {
                                                    .box-amb-2-2-1 img {
                                                        margin-bottom: 0px;
                                                    }
                                                }
                                            </style>


                                        </div>
                                        <style>
                                            .box-amb-2-2 {
                                                grid-area: box-amb-2-2;
                                                display: grid;
                                                gap: 8px;
                                                grid-auto-flow: dense;
                                                grid-template-columns: 1fr;
                                                grid-template-rows: auto;
                                                grid-template-areas:
                                                    'box-amb-2-2-2'
                                                    'box-amb-2-2-1';
                                                padding: 0px 16px;
                                            }
                                        </style>

                                        <!-- box seccion amb-2-3 -->
                                        <div class="box-amb-2-3">
                                            <h3 class="enfb1">Equivale a:</h3>
                                            <p class="enfb2">Consumo promedio mensual de <strong class="str-bca">16 familias</strong> conformadas por 4 personas.</p>
                                        </div>
                                        <style>
                                            .box-amb-2-3 {
                                                grid-area: box-amb-2-3;
                                                padding: 16px 0px;

                                            }

                                            .box-amb-2 .box-amb-2-3 .str-bca {
                                                text-align: center;
                                                color: var(--color-bc-azul);
                                                font-size: 1.2em;
                                            }
                                        </style>

                                        <!-- box seccion amb-2-4 -->
                                        <div class="box-amb-2-4">
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_57n.png' alt='imagen motos y almacenamiento' title='imagen motos y almacenamiento'>
                                        </div>
                                        <style>
                                            .box-amb-2-4 {
                                                grid-area: box-amb-2-4;

                                            }
                                        </style>

                                    </div>
                                    <style>
                                        .box-amb-2 {
                                            background-color: var(--color-bc-verde);
                                            grid-area: box-amb-2;
                                            display: grid;
                                            gap: 8px;
                                            grid-auto-flow: dense;
                                            grid-template-columns: 1fr;
                                            grid-template-rows: auto;
                                            grid-template-areas:
                                                'box-amb-2-1'
                                                'box-amb-2-2'
                                                'box-amb-2-3'
                                                'box-amb-2-4';
                                            padding: 16px 0px;
                                            border-bottom: 1px dashed var(--color-bc-blanco);
                                        }

                                        @media(min-width:768px) {
                                            .box-amb-2 {
                                                grid-area: box-amb-2;
                                                display: grid;
                                                gap: 8px;

                                                grid-auto-flow: dense;
                                                grid-template-columns: 1fr 1fr;
                                                grid-template-rows: auto;
                                                grid-template-areas:
                                                    'box-amb-2-1 box-amb-2-3'
                                                    'box-amb-2-2 box-amb-2-4';
                                                padding: 16px 0px;
                                                border-bottom: 1px dashed var(--color-bc-blanco);
                                            }

                                            .box-ambiental .box-amb-2-2 {
                                                grid-area: box-amb-2-2;
                                                display: grid;
                                                gap: 8px;
                                                grid-auto-flow: dense;
                                                grid-template-columns: 1fr;
                                                grid-template-rows: auto;
                                                grid-template-areas:
                                                    'box-amb-2-2-1 box-amb-2-2-2';
                                                padding: 0px 16px;
                                            }
                                        }

                                        @media(min-width:992px) {
                                            .box-amb-2 {
                                                padding: 16px 96px;
                                            }

                                        }
                                    </style>
                                </div>
                                <style>
                                    .box-resultados .box-ambiental {
                                        background-color: var(--color-bc-verde);
                                        padding: 16px;
                                        display: grid;
                                        gap: 8px;
                                        grid-auto-flow: dense;
                                        grid-template-columns: 1fr;
                                        grid-template-rows: auto;
                                        grid-template-areas:
                                            'box-amb-head'
                                            'box-amb-1'
                                            'box-amb-2';
                                    }
                                </style>

                                <!-- Sección box social -->
                                <div class="box-social">
                                    <div class="cards">
                                        <div class="card card1">
                                            <div class="icon ico-mensajero">
                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/01-12-2022/mensajero_a.png ">
                                                <hr class="line-card">
                                                </hr>
                                            </div>
                                            <div class="paragraph ph-card">
                                                <p>Más oportunidades de empleo formal y mejor calidad de vida de los conductores.</p>
                                            </div>
                                        </div>
                                        <div class="card card2">
                                            <div class="icon ico-mensajero">
                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/01-12-2022/cronometro_a.png">
                                                <hr class="line-card">
                                                </hr>
                                            </div>
                                            <div class="paragraph ph-card">
                                                <p>Menor tiempo de entrega.</p>
                                            </div>
                                        </div>
                                        <div class="card card3">
                                            <div class="icon ico-mensajero">
                                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/01-12-2022/co2_a.png">
                                                <hr class="line-card">
                                                </hr>
                                            </div>
                                            <div class="paragraph ph-card">
                                                <p>Menos emisiones de gases contaminantes, reducción de ruido y aire de calidad.</p>
                                            </div>
                                        </div>
                                        <style>
                                            .cards .card1 {
                                                grid-area: card1;
                                            }

                                            .cards .card2 {
                                                grid-area: card2;
                                            }

                                            .cards .card3 {
                                                grid-area: card3;
                                            }

                                            .cards .card {
                                                /* height: px; */

                                            }

                                            .box-social .card {
                                                /* padding: 16px; */
                                                border: solid 1px transparent;
                                                transition: all ease-in 0.5s;

                                            }

                                            .box-social .card:hover {
                                                -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.05);
                                                box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.05);
                                                border: solid 1px var(--color-bc-gris);
                                                border-radius: 15px;
                                            }

                                            .box-social .card .icon img {
                                                max-width: 150px;
                                                margin: auto;
                                                padding: 30px;
                                                transition: all ease-in 0.4s;
                                            }

                                            .box-social .card:hover .icon img {
                                                /* max-width: 160px; */
                                                padding: 10px;
                                            }

                                            .box-social .card .ph-card {
                                                height: 100px;
                                                display: flex;
                                                flex-direction: column;
                                                justify-content: center;
                                                align-items: center;
                                            }

                                            .box-social .card .line-card {
                                                max-width: 80%;
                                                margin: 0 auto;
                                                border-top: 2px solid var(--color-bc-verde);
                                            }

                                            .box-social .card .ph-card p {
                                                padding: 16px;
                                                font-size: 16px;
                                                font-weight: 500;
                                                text-align: center;
                                                line-height: 1.2;
                                                color: var(--color-bc-gris-str);
                                            }
                                        </style>
                                    </div>
                                    <style>
                                        .box-social .cards {
                                            grid-area: cpte-cards;
                                            display: grid;
                                            gap: 8px;
                                            grid-auto-flow: dense;
                                            grid-template-columns: repeat(3, 1fr);
                                            grid-template-rows: auto;
                                            grid-template-areas:
                                                'card1 card2 card3';
                                            padding: 16px;
                                        }
                                    </style>

                                    <!-- Sección box lista -->
                                    <div class="cpte-lista">
                                        <p>Impactos en la percepción de clientes o receptores finales de carga</p>
                                        <ul>
                                            <li>El <strong>80%</strong> dijeron sentirse satisfechos o muy satisfechos al saber que la mercancía que iban a recibir es transportada en triciclos eléctricos.</li>
                                            <li><strong>88%</strong> consideraron que recibían los productos en muy buen estado.</li>
                                            <li>El <strong>76%</strong> de los clientes afirma que el uso de las bicicletas de carga genera un impacto positivo en la disminución de la contaminación de la ciudad.</li>
                                        </ul>
                                        <p>Impactos en la percepción de transeúntes:</p>
                                        <ul>
                                            <li>El <strong>82%</strong> considera que tiene un beneficio con el cuidado del medio ambiente.</li>
                                            <li>El <strong>70%</strong> considera que aporta a la disminución de ruido.</li>

                                        </ul>
                                    </div>
                                    <style>
                                        .box-social .cpte-lista {
                                            grid-area: cpte-lista;
                                            padding: 24px;
                                        }

                                        .box-social .cpte-lista p {
                                            font-size: 15px;
                                            font-weight: 500;
                                            text-align: left;
                                            line-height: 1.5;
                                            color: var(--color-bc-gris-str);
                                            margin: 0px;
                                            padding: 8px;
                                        }
                                    </style>
                                </div>
                                <style>
                                    .box-resultados .box-social {
                                        grid-area: box-social;
                                    }
                                </style>


                            </div>
                        </div>
                    </div>
                    <style>
                        .box-resultados {
                            grid-area: resultados;
                        }

                        .box-resultados h1,
                        .box-resultados h2,
                        .box-resultados h3,
                        .box-resultados h4,
                        .box-resultados p {
                            margin: 0px !important;
                            text-align: center;
                            line-height: 1.5;
                        }

                        .box-resultados .imagen-logo {
                            text-align: center;
                            margin: auto;
                        }

                        .box-resultados .imagen-logo img {
                            max-width: 170px;
                            width: 70%;
                            margin: auto;
                            display: block;

                        }


                        .box-resultados .title2,
                        h3 {
                            margin: 0px !important;
                            /* font-size: 15px; */
                            font-weight: 500;
                            text-align: left;
                            line-height: 1.5;
                            color: var(--color-bc-blanco);
                        }

                        .box-resultados .enfb1 {
                            color: var(--color-bc-blanco);
                            font-size: 24px;
                            font-weight: 700;
                            text-align: left;
                            line-height: 1;
                        }

                        .box-resultados .enfb2 {
                            color: var(--color-bc-blanco);
                            font-size: 18px;
                            font-weight: 600;
                            text-align: left;
                            line-height: 1;
                        }

                        .box-resultados .enfv1 {
                            color: var(--color-bc-verde);
                            font-size: 24px;
                            font-weight: 500;
                            text-align: left;
                            line-height: 1.5;
                        }

                        .box-resultados .enfv2 {
                            color: var(--color-bc-verde);
                            font-size: 32px;
                            font-weight: 500;
                            text-align: left;
                            line-height: 1;
                        }

                        .box-resultados .enfa1 {
                            color: var(--color-bc-azul);
                            font-size: 24px;
                            font-weight: 500;
                            text-align: left;
                            line-height: 1.5;
                        }

                        .box-resultados .enfa2 {
                            color: var(--color-bc-azul);
                            font-size: 28px;
                            font-weight: 600;
                            text-align: left;
                            line-height: 1;
                        }
                    </style>
                </div>

                <!-- collapse reconocimientos -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_reconocimientos'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_bicicarga' href='#collapse_reconocimientos' aria-expanded='false' aria-controls='collapse_reconocimientos'>
                                Reconocimientos
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_reconocimientos' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_reconocimientos' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-reconocimientos'>


                                <!-- Sección box paragraph -->
                                <div class="box-paragraph">
                                    <h3>STATE-OF-THE-ART PARTNERSHIP AWARDS <br>(Premios de Asociación de Vanguardia)</h3>
                                    <p>P4G (Pioneering Green Partnerships Investing in Impact) en el 2022 impulsó el concurso llamado “PREMIOS DE ASOCIACION DE VANGUARDIA”, con el cual se buscaban los proyectos más innovadores del mundo, que brindaran crecimiento sostenible medible y un efecto positivo frente a acciones climáticas.</p>
                                    <div class="imagen img-reco-goals">
                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/30-03-2023/sota6.png" alt="cinco áreas clave de los ODS" title="cinco áreas clave de los ODS">
                                        <small>Cinco áreas clave de los ODS. Fuente: P4G Partnering for Green Growth and the Global Goals 2030</small>

                                    </div>
                                    <p>Soluciones emprendedoras capaces de generar un gran impacto en cada una de las cinco áreas clave de los Objetivos de Desarrollo Sostenible (ODS) como: comida y agricultura, saneamiento y agua limpia, energía asequible y limpia, producción y consumo responsable y ciudades y comunidades sostenibles.</p>
                                    <p>Es en este último, en el que el piloto de Bicicarga fue premiado, al implementar soluciones para entregas de última milla con triciclos de carga eléctrica (alimentada por energía solar), proporcionando información y datos financieros para evaluar la energía con gestión inteligente, la ubicación y despliegue adecuado para operaciones de carga urbana, reduciendo el mayor costo en la logística de última milla. Este piloto fue ganador en su categoría por apuntarle a la descarbonización en la última milla en el sector de carga causante del 48 % de emisiones de gases de efecto invernadero.</p>
                                    <div class="imagen img-reco-cat">
                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/30-03-2023/sota7.png" alt="Imagen de las categorias galardonadas por P4G Partnering" title="Imagen de las categorias galardonadas por P4G Partnering">
                                        <small>Bicicarga ganador. Fuente: P4G Partnering for Green Growth and the Global Goals 2030</small>
                                    </div>
                                    <p>De clic para conocer más sobre esta y demás categorías en el siguiente enlace:</p>
                                    <a href="https://p4gpartnerships.org/state-art-partnership-awards">STATE-OF-THE-ART PARTNERSHIP AWARDS</a>
                                    <br>
                                </div>

                                <style>
                                    .box-wrp .box-paragraph {
                                        grid-area: box-paragraph;
                                        margin-top: 16px;
                                        padding: 0 32px;
                                    }

                                    .box-paragraph h3 {
                                        color: var(--color-bc-azul);
                                        font-size: 24px;
                                        font-weight: 700;
                                        text-align: center;
                                        line-height: 1.3;
                                        padding-bottom: 16px;

                                    }
                                    .box-paragraph .img-reco-goals{
                                        padding: 2em;
                                    }
                                    .box-paragraph .img-reco-cat{
                                        padding: 2em 4em;
                                        max-width: 750px;
                                    }
                                    .box-paragraph .imagen{
                                        /* height: px; */
                                        display: flex;
                                        flex-direction: column;
                                        justify-content: center;
                                        align-items: center;

                                    }
                                </style>


                            </div>
                        </div>
                    </div>
                    <style>
                        .box-reconocimientos {
                            grid-area: reconocimientos;
                            padding: 1em;
                        }
                    </style>
                </div>

            </div>
            <!-- /#fin _bicicarga -->

            <style>
                .box-wrp .panel-group {
                    margin-bottom: 0px !important;
                }

                .box-wrp .box-acordeon {
                    grid-area: acordeon;
                    padding: 8px 0px;

                }

                .box-acordeon .glyphicon-chevron-right::before {
                    color: var(--color-bc-text) !important;
                }

                .box-acordeon .glyphicon-chevron-left::before {
                    color: var(--color-bc-text) !important;
                }

                .box-acordeon .panel-heading {
                    border-color: var(--color-bc-gris) !important;
                    background-color: var(--color-bc-gris) !important;
                    background-image: none !important;
                }

                .box-acordeon .panel-heading .panel-title a {
                    text-decoration: none;
                    color: var(--color-bc-text) !important;
                    font-size: 18px;
                    font-weight: 600;
                    letter-spacing: 1px;
                }

                .box-acordeon .panel-heading .panel-title a:after {
                    font-family: 'Glyphicons Halflings';
                    content: "\e080";
                    float: right;
                    color: var(--color-bc-text);
                    font-size: 18px;
                }

                .box-acordeon .panel-heading .panel-title a.collapsed:after {
                    content: "\e114";
                }


                .box-acordeon .panel-heading:focus-within {
                    border-color: var(--color-bc-azul) !important;
                    background-color: var(--color-bc-azul) !important;
                    background-image: none !important;
                }

                .box-acordeon .panel-heading:focus-within .panel-title a {
                    color: var(--color-bc-blanco) !important;
                }

                .box-acordeon .panel-heading:focus-within .panel-title a:after {
                    color: var(--color-bc-verde);
                }

                .box-acordeon .panel-heading:hover {
                    border-color: var(--color-bc-blanco) !important;
                    background-color: var(--color-bc-blanco) !important;
                    background-image: none !important;
                }

                .box-acordeon .panel-heading:hover .panel-title a {
                    color: var(--color-bc-text) !important;
                }

                .box-acordeon .panel-heading:hover .panel-title a:after {
                    color: var(--color-bc-verde);
                }



                @media(min-width:768px) {
                    .box-wrp .box-acordeon {
                        padding: 32px;
                    }
                }
            </style>
        </div>

        <div class="box-descargable">
            <div class="descripcion">
                <p>Descargue aquí el <span class="enfasis">REPORTE FINAL DE INDICADORES PILOTO BICICARGA</span></p>
            </div>
            <div class="boton">
                <a class="zoom" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/06-09-2022/2022-09-05_reporteindicadores_bicicarga-v5.pdf" target="_blank" rel="noopener noreferrer" download>Descargar resultados</a>
            </div>
            <style>
                .box-descargable .descripcion {
                    grid-area: cpte-descripcion;
                    background: var(--color-bc-verde);
                    padding: 16px;
                }

                .box-descargable .descripcion p {
                    font-size: 24px;
                    font-weight: 700;
                    text-align: center;
                    line-height: 1.5;
                    color: var(--color-bc-text);
                    margin: 0px;
                }

                .box-descargable .descripcion .enfasis {
                    font-size: 28px;
                    font-weight: 700;
                    text-align: center;
                    line-height: 1.5;
                    color: var(--color-bc-blanco);
                }

                .box-descargable .boton {
                    grid-area: cpte-descargable-boton;
                    /* height: px; */
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }
            </style>
        </div>
        <style>
            .box-descargable {
                background: #F5F5F5;
                grid-area: descargable;
                margin-top: 16px;
                margin-bottom: 16px;
                padding-top: 16px;
                padding-bottom: 16px;
                margin: auto;
                text-align: center;
                border-top: solid 1px var(--color-bc-gris);
                border-bottom: solid 1px var(--color-bc-gris);

                display: grid;
                gap: 8px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'cpte-descripcion'
                    'cpte-descargable-boton';
            }


            .box-descargable a:hover {
                background-color: var(--color-bc-gris);
                color: var(--color-bc-text);
                border: var(--color-bc-verde) 2px solid;
                font-weight: 600;
                text-decoration: none !important;
                -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            }

            .box-descargable a:focus,
            .box-descargable::before {
                color: var(--color-bc-verde);
                font-weight: 600;

            }

            .box-descargable a {
                display: inline-block;
                background-color: var(--color-bc-azul);
                border: var(--color-bc-azul) 2px solid;
                color: var(--color-bc-blanco);
                padding: 8px 16px;
                border-radius: 4px;
                text-decoration: none !important;
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

            }

            @media(min-width:768px) {
                .box-descargable {

                    gap: 8px;
                    grid-template-columns: 70% 30%;
                    grid-template-areas:
                        'cpte-descripcion cpte-descargable-boton';
                }
            }

            @media(min-width:992px) {}

            /* IE9 */
        </style>

        <div class="box-empresas">
            <h3>Empresas que participaron en BiciCarga</h3>
            <p>El piloto contó con la participación de empresas de los sectores de alimentos, paquetería y consumo masivo que implementaron un esquema de distribución con bicicletas/triciclos eléctricos de carga, el cual permitió la conformación de una red de valor en ciclo logística para Bogotá y que puede ser replicado y escalado en otras ciudades del país.</p>
        </div>
        <style type="text/css">
            .box-wrp .box-empresas {
                /* margin-top: 30px; */
                grid-area: empresas;
                background-color: var(--color-bc-azul);

            }

            .box-wrp .box-empresas h3 {
                /* font-size: 18px; */
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: var(--color-bc-blanco);
                padding: 16px;
            }

            .box-wrp .box-empresas p {
                grid-area: resultados;
                padding: 0px 15px 15px 15px;
                font-size: 15px;
                font-weight: 500;
                text-align: justify;
                line-height: 1.3;
                color: var(--color-bc-blanco);
            }
        </style>

        <!-- Carousel carousel -->
        <div class="box-carousel-empresas">
            <div class="carousel slide" data-ride="carousel" id="carousel">
                <!-- Indicators -->
                <!-- <ol class='carousel-indicators'>
                        <li data-target='#carousel' data-slide-to='0' class='active'></li>
                        <li data-target='#carousel' data-slide-to='1'></li>
                        <li data-target='#carousel' data-slide-to='2'></li>
                        <li data-target='#carousel' data-slide-to='3'></li>
                        <li data-target='#carousel' data-slide-to='4'></li>
                        <li data-target='#carousel' data-slide-to='5'></li>
                        <li data-target='#carousel' data-slide-to='6'></li>
                        <li data-target='#carousel' data-slide-to='7'></li>
                        <li data-target='#carousel' data-slide-to='8'></li>
                    </ol> -->
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active"><img alt="logo la colmena" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/lacolmena.webp">
                        <p><small>Generadores</small></p>
                    </div>

                    <div class="item"><img alt="logo comercial nutresa" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/nutresa.webp">
                        <p><small>Generadores</small></p>
                    </div>

                    <div class="item"><img alt="logo cvas" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/cvas.webp">
                        <p><small>Operadores</small></p>
                    </div>

                    <div class="item"><img alt="logo quick" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/quick.webp">
                        <p><small>Operadores</small></p>
                    </div>

                    <div class="item"><img alt="logo servientrega" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/servientrega.webp">
                        <p><small>Operadores</small></p>
                    </div>

                    <div class="item"><img alt="logo pargal" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/pargal.webp">
                        <p><small>Proveedores</small></p>
                    </div>

                    <div class="item"><img alt="logo ecotriciclos" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/ecotriciclos.webp">
                        <p><small>Proveedores</small></p>
                    </div>

                    <div class="item"><img alt="logo cityparking" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/cityparking.webp">
                        <p><small>Proveedores</small></p>
                    </div>

                    <div class="item"><img alt="logo lola" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/lola.webp">
                        <p><small>Proveedores</small></p>
                    </div>
                </div>
                <!-- Left and right controls --><a class="left carousel-control" data-slide="prev" href="#carousel"><span class="sr-only">Anterior</span> </a> <a class="right carousel-control" data-slide="next" href="#carousel"> <span class="sr-only">Siguinente</span> </a>
            </div>
        </div>
        <style type="text/css">
            .box-wrp .nav>li>a:focus,
            .box-wrp .nav>li>a:hover {
                /* background-color: var(--color-bc-gris); */
                background-color: var(--color-bc-verde);
                color: var(--color-bc-blanco);
            }

            .box-wrp .nav-justified>li {
                background: var(--color-bc-gris) !important;
            }

            .box-wrp .nav-pills>li.active>a,
            .box-wrp .nav-pills>li.active>a:focus,
            .box-wrp .nav-pills>li.active>a:hover {
                color: var(--color-bc-blanco);
                background-color: var(--color-bc-azul);
            }

            .box-wrp .carousel-control.left {
                background-image: none !important;
            }

            .box-wrp .carousel-control.right {
                background-image: none !important;

            }

            .box-wrp .glyphicon-chevron-right::before {
                color: var(--color-bc-verde) !important;
            }

            .box-wrp .glyphicon-chevron-left::before {
                color: var(--color-bc-verde) !important;
            }


            .box-wrp .box-carousel-empresas {
                grid-area: carousel-empresas;
            }

            .box-carousel-empresas .item img {
                padding: 16px;
                max-width: 250px !important;
                margin: auto;
            }

            .box-carousel-empresas .item p {
                text-align: center;
            }

            .box-wrp .box-carousel-empresas {
                padding: 2%;
            }

            .box-wrp .box-carousel-empresas {
                position: relative;
            }

            .box-wrp .carousel {
                position: relative;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 100%;
            }

            .box-carousel-empresas .item img {
                /* max-width: 250px !important; */
                max-width: 350px !important;
            }

            @media(min-width:768px) {
                .box-wrp .carousel {
                    position: absolute;
                }
            }
        </style>

        <div class="box-socios">
            <h3>Socios del proyecto</h3>

            <p>Conoce al equipo multidisciplinario que trabajó para implementar un piloto de distribución de última milla con bicicletas eléctricas de carga.</p>
        </div>
        <style type="text/css">
            .box-wrp .box-socios {
                grid-area: socios;
                /* background-color: var(--color-bc-verde) */
            }

            .box-wrp .box-socios h3 {
                /* font-size: 18px; */
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: var(--color-bc-azul);
                padding: 16px;
            }

            .box-wrp .box-socios p {
                padding: 0px 15px 15px 15px;
                font-size: 15px;
                font-weight: 500;
                text-align: justify;
                line-height: 1.3;
                color: var(--color-bc-text);
            }
        </style>

        <div class="box-socios-btn">
            <div class="btn-socio"><img alt="Avatar" class="image" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/logo-bogota.png">
                <div class="overlay">
                    <div class="text">La <strong>Secretaría Distrital de Movilidad</strong> cumple el rol de ser el ente articulador del piloto, el formulador de política pública y de recomendaciones a la norma para apoyar la ampliación y la adopción acelerada de las bicicletas de carga eléctricas para el movimiento de mercancías en Bogotá.</div>
                </div>
            </div>

            <div class="btn-socio"><img alt="Avatar" class="image" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/logo-logyca.png">
                <div class="overlay">
                    <div class="text">LOGYCA, en alianza con el MIT FaROL LAB, fueron los expertos técnicos del proyecto, quienes adelantaron el diseño metodológico y de estrategias para el análisis de la información.</div>
                </div>
            </div>

            <div class="btn-socio"><img alt="Avatar" class="image" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-06-2021/despacio_logo.png">
                <div class="overlay">
                    <div class="text">Despacio fue el socio técnico responsable de la implementación y recolección de la información del proyecto, así como del montaje y funcionamiento del modelo colaborativo que se realizó mediante la plataforma de cross-docking de BiciCarga.</div>
                </div>
            </div>

            <div class="btn-socio"><img alt="Avatar" class="image" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/logo-banco-mundial.png">
                <div class="overlay">
                    <div class="text">El Banco Mundial y la Corporación Financiera Internacional participan activamente en el sector del transporte urbano de Bogotá, brindando la asistencia financiera y técnica para contribuir con la escalabilidad del proyecto.</div>
                </div>
            </div>
        </div>
        <style type="text/css">
            .box-socios-btn {
                grid-area: boton-socios;
                display: grid;
                gap: 15px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                padding: 30px;
            }

            .btn-socio {
                position: relative;
                height: 250px;
                /* width: 50%; */
                padding: 14px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .btn-socio .image {
                display: block;
                width: 100%;
                height: auto;
            }

            .btn-socio .overlay {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
                opacity: 0;
                transition: .5s ease;
                background-color: var(--color-bc-verde);
            }

            .btn-socio:hover .overlay {
                opacity: 1;
            }

            .btn-socio .text {
                max-height: 250px;
                color: white;
                font-size: 14px;
                position: absolute;
                top: 23%;
                left: 15%;
                -webkit-transform: translate(-10%, -15%);
                -ms-transform: translate(-10%, -15%);
                transform: translate(-10%, -15%);
                text-align: center;
            }

            @media(max-width:767px) {

                .btn-socio {
                    position: relative;
                    height: 250px;
                    /* width: 50%; */
                    padding: 14px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    max-width: 250px;
                    margin: auto;
                }

                .btn-socio .image {
                    max-width: 200px;
                }

            }

            @media(min-width:768px) {
                .box-socios-btn {
                    grid-template-columns: 1fr 1fr;
                    padding: 32px 64px;
                }
            }

            @media(min-width:992px) {
                .box-socios-btn {
                    grid-template-columns: 1fr 1fr 1fr 1fr;
                    padding: 0px;
                }
            }

            @media(min-width:1200px) {}
        </style>

    </div>
    <style>
        .box-wrp {
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'encabezado'
                'video'
                'acordeon'
                'descargable'
                'empresas'
                'carousel-empresas'
                'socios'
                'boton-socios';
        }

        @media(min-width:768px) {
            .box-wrp {
                row-gap: 24px;
                grid-template-columns: 1fr 1fr;
                grid-template-areas:
                    'encabezado video'
                    /* 'video video' */
                    'acordeon acordeon'
                    'descargable descargable'
                    'empresas carousel-empresas'
                    'socios socios'
                    'boton-socios boton-socios';
            }
        }
    </style>
    <!-- End Set Wrapper -->
</div>
<hr>

<!-- Styles -->
<style type='text/css'>
    :root {
        --color-bc-azul: #011e40;
        --color-bc-verde: rgba(0, 168, 78, 1);
        --color-bc-blanco: rgba(255, 255, 255, 1);
        --color-bc-gris: #e5e5e5;
        --color-bc-gris-str: #353535;
        --color-bc-text: rgba(25, 25, 25, 1);
    }



    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .bicicarga {
        max-width: 980px;
        margin: auto;
        word-break: break-word;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.3;
        color: var(--color-bc-text);
        padding-right: 0px !important;
        padding-left: 0px !important;
    }

    .w-100 {
        width: 100%;
    }
</style>
<!-- End Styles -->
