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
                            <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse_queEs' aria-expanded='false' aria-controls='collapse_queEs'>
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
                                        color: rgba(1, 30, 65, 1);
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
                                        color: rgba(25, 25, 25, 1);
                                        padding: 16px 16px 0px 16px !important;
                                        margin: 0px;
                                    }
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
                                .box-wrp .box-collapseds .box-queEs {
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
                            </style>
                        </div>

                    </div>
                </div>

                <!-- collapse queBusco -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading_queBusco'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_bicicarga' href='#collapse_queBusco' aria-expanded='false' aria-controls='collapse_queBusco'>
                                ¿Qué busco?
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
                            background-color: rgba(1, 30, 65, 1) !important;

                        }

                        .box-queBusco h3 {
                            margin: 0px;
                            padding: 16px;
                            /* font-size: 18px; */
                            font-weight: 700;
                            text-align: center;
                            line-height: 1.2;
                            color: rgba(255, 255, 255, 1);
                        }

                        .box-queBusco p {
                            margin: 0px;
                            font-size: 15px;
                            font-weight: 500;
                            text-align: center;
                            line-height: 1.2;
                            color: rgba(255, 255, 255, 1);
                        }



                        .box-queBusco .card-atributo {
                            border-top: 1px rgba(255, 255, 255, 1) dashed;
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
                            color: rgba(255, 255, 255, 1);
                        }

                        .box-queBusco .card-atributo .texto ul>li {
                            padding-top: 8px;
                        }

                        .box-queBusco .card-atributo h4 {
                            font-size: 20px;
                            font-weight: 700;
                            text-align: center;
                            line-height: 1.2;
                            color: rgba(255, 255, 255, 1);
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
                    </style>
                </div>

                <!-- collapse como -->
                <div class='panel panel-primary'>
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
                                <div class="content2">
                                    <div>
                                        <h3>¿Cómo se desarrolló el piloto?</h3>
                                        <p>El piloto tuvo una duración de seis meses para validar dos modelos de operación: el
                                            primer modelo se trabajó con flota propia desde los centros de distribución de cada
                                            empresa, y el segundo con operación usando una plataforma colaborativa de cross
                                            docking (un espacio de recepción y almacenamiento temporal de mercancía).</p>
                                    </div>
                                    <div class='imagen'>
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-12-2020/micrositio-bicicarga.jpg' alt='imagen comparación de modelos' title='imagen comparación de modelos'>
                                    </div>
                                    <div>
                                        <h4>Modelo 1: Operación centralizada</h4>
                                        <p>Este involucró empresas con un centro de acopio ubicado en Bogotá, que se usó para
                                            distribuir su mercancía en un radio menor a 5 km con bicicletas o triciclos
                                            eléctricos propios. El piloto se desarrolló con tres empresas, dos del sector
                                            industrial de consumo masivo y un operador logístico.</p>
                                    </div>
                                    <div class='imagen'>
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-02-2022/mapa2.jpg' alt='Imagen Modelo 1: Operación centralizada' title='Imagen Modelo 1: Operación centralizada'>
                                    </div>
                                    <div>
                                        <h4>Modelo 2: Plataforma de cross docking colaborativa</h4>
                                        <p>Este involucró a empresas que hicieron uso de una plataforma colaborativa para
                                            distribuir sus mercancías partiendo de un único punto de acopio ubicado en una zona
                                            estratégica de la ciudad. En ella se recibieron los pedidos para distribuirlos en
                                            bicicletas o triciclos eléctricos a su destino final. La razón fundamental detrás de
                                            la ubicación del centro es que permitió que las entregas de última milla se hicieran
                                            en bicicleta, eliminando al menos una parte de los movimientos realizados en la zona
                                            por vehículos de carga convencionales.</p>
                                    </div>
                                    <div class='imagen'>
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-02-2022/mapa1.jpg' alt='Imagen Modelo 2: Plataforma de cross docking colaborativa' title='Imagen Modelo 2: Plataforma de cross docking colaborativa'>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        .box-como {
                            grid-area: como;
                        }

                        .box-wrp .box-como .content2 h3 {
                            /* font-size: 18px; */
                            font-weight: 700;
                            text-align: center;
                            line-height: 1.2;
                            color: rgba(0, 168, 78, 1);
                            padding: 32px 16px 0px 16px;
                        }

                        .box-wrp .box-como .content2 h4 {
                            font-size: 18px;
                            font-weight: 700;
                            text-align: left;
                            line-height: 1.2;
                            color: rgba(0, 168, 78, 1);
                            margin: 16px;
                        }

                        .box-wrp .box-como .content2 p {
                            font-size: 15px;
                            font-weight: 500;
                            text-align: justify;
                            line-height: 1.3;
                            color: rgba(25, 25, 25, 1);
                            padding: 15px;
                        }
                    </style>
                </div>

                <!-- collapse seMidio -->
                <div class='panel panel-primary'>
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
                                        background-color: rgba(0, 168, 78, 1);
                                    }

                                    .box-acordeon .content3 h3 {
                                        /* font-size: 18px; */
                                        font-weight: 700;
                                        text-align: center;
                                        line-height: 1.2;
                                        color: rgba(255, 255, 255, 1);
                                        padding: 16px;
                                        margin: 0px;
                                    }

                                    .box-acordeon .content3 h4 {
                                        font-size: 18px;
                                        font-weight: 700;
                                        text-align: left;
                                        line-height: 1.2;
                                        color: rgba(255, 255, 255, 1);
                                        margin: 16px;
                                    }

                                    .box-acordeon .content3 p {
                                        font-size: 15px;
                                        font-weight: 500;
                                        text-align: justify;
                                        line-height: 1.3;
                                        color: rgba(255, 255, 255, 1);
                                        padding: 0px 15px 15px 15px;
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
                                                <li>OTIF y Fill-Rate</li>
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
                                        color: rgba(0, 168, 78, 1);
                                        margin: 0px;

                                        padding: 16px 16px 0px 16px;
                                    }

                                    .box-acordeon .content4 .list-content4 {
                                        padding: 16px 16px 0px 16px;
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
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading_resultados'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_bicicarga' href='#collapse_resultados' aria-expanded='false' aria-controls='collapse_resultados'>
                                Resultados
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_resultados' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_resultados' aria-expanded='false'>
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
                                            </style>
                                        </div>
                                        <style>
                                            .box-eo .box-eo-head {
                                                grid-area: box-oe-head;
                                                display: grid;
                                                gap: 8px;
                                                grid-auto-flow: dense;
                                                grid-template-columns: 1fr;
                                                grid-template-rows: auto;
                                                grid-template-areas:
                                                    'box-title'
                                                    'box-img';
                                                padding-bottom: 16px;
                                                border-bottom: 1px dashed #ffffff;
                                            }
                                        </style>

                                        <div class="box-oe-1">

                                            <div class="box-eo-1-2">
                                                <h3 class="enfb1">Distancia recorrida:</h3>
                                            </div>
                                            <style>
                                                .box-eo .box-eo-1-2 {
                                                    grid-area: box-eo-1-2;
                                                    padding-top: 16px;
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
                                                </style>

                                                <!-- box seccion eo-1-1-2 -->
                                                <div class="box-eo-1-1-2">
                                                    <div>
                                                        <p><span class="enfv2">17.000 Km</span></p>
                                                    </div>
                                                </div>
                                                <style>
                                                    .box-eo-1-1-2 {
                                                        grid-area: box-eo-1-1-2;
                                                        /* height: px; */
                                                        display: flex;
                                                        flex-direction: column;
                                                        justify-content: center;
                                                        align-items: center;
                                                        padding: 8px;
                                                    }

                                                    .box-eo .box-eo-1-1-2 .enfv2 {
                                                        text-align: center;
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

                                                .box-eo .box-eo-1-3 .enfv2 {
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
                                            .box-oe-1 {
                                                grid-area: box-oe-1;
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
                                                border-bottom: 1px dashed #ffffff;
                                            }
                                        </style>

                                        <div class="box-eo-2">
                                            <div class="box-eo-2-2">
                                                <h3 class="enfb1">Pedidos entregados:</h3>
                                            </div>
                                            <style>
                                                .box-eo-2 .box-eo-2-2 {
                                                    grid-area: box-eo-2-2;
                                                    padding-top: 16px;
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
                                                </style>

                                                <!-- box seccion eo-2-1-2 -->
                                                <div class="box-eo-2-1-2">
                                                    <div>
                                                        <p><span class="enfv2">62.000</span></p>
                                                    </div>

                                                </div>
                                                <style>
                                                    .box-eo-2-1-2 {
                                                        grid-area: box-eo-2-1-2;
                                                        /* height: px; */
                                                        display: flex;
                                                        flex-direction: column;
                                                        justify-content: center;
                                                        align-items: center;
                                                        padding: 8px;
                                                    }

                                                    .box-eo-2-1-2 .enfv2 {
                                                        text-align: center;
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
                                                grid-area: box-oe-2;
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
                                                border-bottom: 1px dashed #ffffff;
                                            }
                                        </style>

                                        <div class="box-eo-3">
                                            <div class="box-eo-3-2">
                                                <h3 class="enfb1">Mercancia entregada:</h3>
                                            </div>
                                            <style>
                                                .box-eo-3 .box-eo-3-2 {
                                                    grid-area: box-eo-3-2;
                                                    padding-top: 16px;
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
                                                </style>
                                                <!-- box seccion eo-3-1-2 -->
                                                <div class="box-eo-3-1-2">
                                                    <p><span class="enfv2">93 Toneladas</span></p>
                                                </div>
                                                <style>
                                                    .box-eo-3-1-2 {
                                                        grid-area: box-eo-3-1-2;
                                                        /* height: px; */
                                                        display: flex;
                                                        flex-direction: column;
                                                        justify-content: center;
                                                        align-items: center;
                                                        padding: 8px;
                                                    }

                                                    .box-eo .box-eo-3-1-2 .enfv2 {
                                                        text-align: center;
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
                                                grid-area: box-oe-3;
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
                                                border-bottom: 1px dashed #ffffff;

                                            }
                                        </style>
                                    </div>
                                </div>
                                <style>
                                    .box-acordeon .box-eo {
                                        background-color: rgba(1, 30, 65, 1);
                                        padding: 16px;
                                        display: grid;
                                        gap: 8px;
                                        grid-auto-flow: dense;
                                        grid-template-columns: 1fr;
                                        grid-template-rows: auto;
                                        grid-template-areas:
                                            'box-oe-head'
                                            'box-oe-1'
                                            'box-oe-2'
                                            'box-oe-3';
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
                                            border-bottom: 1px dashed #ffffff;
                                        }
                                    </style>

                                    <div class="box-amb-1">

                                        <div class="box-amb-1-1">
                                            <h3 class="enfb1"><strong>CO<sub>2</sub></strong> reducido:</h3>
                                        </div>
                                        <style>
                                            .box-ambiental .box-amb-1-1 {
                                                grid-area: box-amb-1-1;
                                                padding-top: 16px;
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
                                            </style>

                                            <!-- box seccion amb-1-2-2 -->
                                            <div class="box-amb-1-2-2">
                                                <p><span class="enfa2">1.97 Ton CO<sub>2</sub></span></p>
                                            </div>
                                            <style>
                                                .box-amb-1-2-2 {
                                                    grid-area: box-amb-1-2-2;
                                                    /* height: px; */
                                                    display: flex;
                                                    flex-direction: column;
                                                    justify-content: center;
                                                    align-items: center;
                                                    padding: 8px;
                                                }

                                                .box-eo .box-amb-1-2-2 .enfa2 {
                                                    text-align: center;
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
                                            <p class="enfb2">La absorción del <span class=""><strong>CO<sub>2</sub></strong></span> de <span class="enfa2">98 árboles</span> <span class=""> al año</span> </p>
                                        </div>
                                        <style>
                                            .box-amb-1 .box-amb-1-3 {
                                                grid-area: box-amb-1-3;
                                                padding: 16px 0px;
                                            }

                                            .box-amb-1 .box-amb-1-3 .enfv2 {
                                                text-align: center;
                                            }

                                            /* .box-ambiental .box-amb-1-3 {
                                                grid-area: box-amb-1-3;
                                                padding-top: 32px;
                                                display: grid;
                                                gap: 8px;
                                                grid-auto-flow: dense;
                                                grid-template-columns: 1fr;
                                                grid-template-rows: auto;
                                                grid-template-areas:
                                                    'box-amb-1-3-1'
                                                    'box-amb-1-3-2'
                                                    'box-amb-1-3-3'
                                                    'box-amb-1-3-4';
                                            } */
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
                                            border-bottom: 1px dashed #ffffff;

                                        }
                                    </style>


                                    <!-- box seccion amb-2 -->
                                    <div class="box-amb-2">

                                        <!-- box seccion amb-2-1 -->
                                        <div class="box-amb-2-1">
                                            <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_56n.png' alt='icono relámpago' title='icono relámpago'>
                                        </div>
                                        <style>
                                            .box-amb-2-1 {
                                                grid-area: box-amb-2-1;
                                            }
                                        </style>
                                        <!-- box seccion amb-2-2 -->
                                        <div class="box-amb-2-2">
                                            <span class="enf2 bcb">Consumo energético:</span>
                                            <span class="enf3 bcn2">2.423 kWh</span>
                                        </div>
                                        <style>
                                            .box-amb-2-2 {
                                                grid-area: box-amb-2-2;
                                            }
                                        </style>

                                        <!-- box seccion amb-2-3 -->
                                        <div class="box-amb-2-3">
                                            <p><span class="enf1 bca">Equivale a:</span></p>
                                            <p>Consumo promedio mensual de <span class="enf2 bcn2">16 familias</span> conformadas por cuatro personas colombianas.</p>
                                        </div>
                                        <style>
                                            .box-amb-2-3 {
                                                grid-area: box-amb-2-3;
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
                                            background-color: #01a850;
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
                                        }
                                    </style>


                                </div>
                                <style>
                                    .box-resultados .box-ambiental {
                                        background-color: #01a850;
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
                            color: rgba(255, 255, 255, 1);
                        }

                        .box-resultados .enfb1 {
                            color: rgba(255, 255, 255, 1);
                            font-size: 24px;
                            font-weight: 700;
                            text-align: left;
                            line-height: 1;
                        }

                        .box-resultados .enfb2 {
                            color: rgba(255, 255, 255, 1);
                            font-size: 18px;
                            font-weight: 600;
                            text-align: left;
                            line-height: 1;
                        }

                        .box-resultados .enfv1 {
                            color: #01a850;
                            font-size: 24px;
                            font-weight: 500;
                            text-align: left;
                            line-height: 1.5;
                        }

                        .box-resultados .enfv2 {
                            color: #01a850;
                            font-size: 32px;
                            font-weight: 500;
                            text-align: left;
                            line-height: 1;
                        }

                        .box-resultados .enfa1 {
                            color: #011e41;
                            font-size: 24px;
                            font-weight: 500;
                            text-align: left;
                            line-height: 1.5;
                        }

                        .box-resultados .enfa2 {
                            color: #011e41;
                            font-size: 28px;
                            font-weight: 600;
                            text-align: left;
                            line-height: 1;
                        }
                    </style>
                </div>



            </div>
            <!-- /#fin _bicicarga -->

            <style>
                .box-wrp .box-acordeon {
                    grid-area: acordeon;
                    padding-top: 5px;
                }

                .box-acordeon .glyphicon-chevron-right::before {
                    color: rgba(25, 25, 25, 1) !important;
                }

                .box-acordeon .glyphicon-chevron-left::before {
                    color: rgba(25, 25, 25, 1) !important;
                }

                .box-acordeon .panel-heading {
                    border-color: #e5e5e5 !important;
                    background-color: #e5e5e5 !important;
                    background-image: none !important;
                }

                .box-acordeon .panel-heading .panel-title a {
                    text-decoration: none;
                    color: rgba(25, 25, 25, 1) !important;
                    font-size: 18px;
                    font-weight: 600;
                    letter-spacing: 1px;
                }

                .box-acordeon .panel-heading .panel-title a:after {
                    font-family: 'Glyphicons Halflings';
                    content: "\e080";
                    float: right;
                    color: rgba(25, 25, 25, 1);
                    font-size: 18px;
                }

                .box-acordeon .panel-heading .panel-title a.collapsed:after {
                    content: "\e114";
                }
            </style>
        </div>



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
                'acordeon';
        }
    </style>
    <!-- End Set Wrapper -->
</div>
<hr>

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
        color: rgba(25, 25, 25, 1);
        padding-right: 0px !important;
        padding-left: 0px !important;
    }

    .w-100 {
        width: 100%;
    }
</style>
<!-- End Styles -->
