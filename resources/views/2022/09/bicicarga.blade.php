@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid bicicarga'>
    <div class='box-wrp'>

        <div class='box-head'>
            <div class='imagen'>
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/header.jpg' alt='encabezado bicicarga' title='encabezado bicicarga'>
            </div>
        </div>
        <style>
            .box-wrp .box-head {
                grid-area: encabezado;
            }
        </style>

        <div class="box-video">
            <div class='video'>
                <div class='embed-responsive embed-responsive-16by9'>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Xa-xEiPbB64" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <style>
            .box-wrp .box-video {
                grid-area: video;
            }
        </style>

        <div class="box-definicion">
            <h3>BiciCarga ¿Qué es?</h3>
            <p>Bogotá a través de la Secretaría Distrital de Movilidad implementó un piloto que buscó promover
                alternativas para resolver las necesidades actuales de la distribución final de carga en la
                ciudad, mediante el uso de bicicletas eléctricas que facilitaron la entrega de mercancía de
                forma rápida y eficiente. A través de este piloto se pretendió reducir los problemas de
                movilidad, contaminación e ineficiencias operacionales en la distribución.</p>
        </div>
        <style>
            .box-wrp .box-definicion {
                grid-area: definicion;
            }

            .box-wrp .box-definicion h3 {
                /* font-size: 18px; */
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: rgba(0, 168, 78, 1);
                margin: 16px;
            }

            .box-wrp .box-definicion p {
                font-size: 15px;
                font-weight: 500;
                text-align: justify;
                line-height: 1.3;
                color: rgba(25, 25, 25, 1);
                padding: 15px;
            }
        </style>

        <div class="box-imgDefinicion">
            <div class='imagen'>
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/que-es.png' alt='Imagen de bicicleta de carga' title='Imagen de bicicleta de carga'>
            </div>
        </div>
        <style>
            .box-wrp .box-imgDefinicion {
                grid-area: imgDefincion;
            }
        </style>

        <div class="box-resultados">
            <div class="box-resultadosTexto">
                <h3>Resultados</h3>
                <p>En cualquier lugar en el que vivas, existe la probabilidad de ver que las bicicletas de carga
                    lleguen al barrio como una opción de transporte sostenible, conveniente e inclusivo. Entérate de
                    los resultados de las dos Fases del piloto BiciCarga sobre ciclologística en Bogotá.</p>
                <a class="btn-resultado" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/06-09-2022/2022-09-05_reporteindicadores_bicicarga-v5.pdf" download>
                    <div class="btn-resultados">
                        Descargue aquí
                    </div>
                </a>
            </div>
            <div class="box-resultadosLogo">
                <div class='imagen'>
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-05-2021/resultados.png' alt='Logo Tablero con resultados' title='Logo Tablero con resultados'>
                </div>
            </div>
        </div>
        <style>
            .box-wrp .box-resultados {
                grid-area: resultados;
                background-color: rgba(0, 168, 78, 1);
                display: grid;
                gap: 10px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'resultadosTexto'
                    'resultadosLogo';

            }

            .box-wrp .box-resultados .box-resultadosTexto {
                grid-area: resultadosTexto;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .box-wrp .box-resultados h3 {
                /* font-size: 18px; */
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: rgba(255, 255, 255, 1);
                padding: 16px;
            }

            .box-wrp .box-resultados p {
                padding: 0px 15px 15px 15px;
                font-size: 15px;
                font-weight: 500;
                text-align: justify;
                line-height: 1.3;
                color: rgba(255, 255, 255, 1);
            }

            .box-wrp .box-resultados .box-resultadosTexto .btn-resultado {
                padding: 0px 15px 15px 15px;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: #0d1d41;

            }

            .box-wrp .box-resultados .box-resultadosTexto .btn-resultados {
                background-color: rgba(255, 255, 255, 1) !important;
                padding: 8px 16px;
            }

            .box-wrp .box-resultados .box-resultadosTexto .btn-resultado:hover .btn-resultados {
                background-color: rgba(1, 30, 65, 1) !important;
                padding: 8px 16px;
            }
            .box-wrp .box-resultados .box-resultadosTexto .btn-resultado:hover {
                color: rgba(255, 255, 255, 1) !important;
            }


            .box-wrp .box-resultados .box-resultadosLogo {
                grid-area: resultadosLogo;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

            }

            .box-wrp .box-resultadosLogo img {
                max-width: 150px;
                margin: auto;
                padding: 16px;
            }
        </style>

        <div class="box-collapsable">

            <ul class="nav nav-pills nav-justified">
                <li>
                    <a data-toggle="tab" href="#fase1">
                        <div class="btn-fase">
                            <p>Fase</p>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/27-09-2022/numero-1.png' alt='Fase 1' title='Fase 1'>
                            </div>
                        </div>
                    </a>
                </li>

                <li><a data-toggle="tab" href="#fase2">
                        <div class="btn-fase">
                            <p>Fase</p>
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/27-09-2022/numero-2.png' alt='Fase 2' title='Fase 2'>
                            </div>
                        </div>
                    </a></li>
            </ul>
            <style>
                .btn-fase {
                    /* height: px; */
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    padding: 16px;
                }

                .btn-fase img {
                    max-width: 100px;
                }

                .btn-fase p {
                    font-size: 18px;
                    font-weight: 700;
                    text-align: center;
                    line-height: 1.2;
                    color: rgba(0, 168, 78, 1);
                }

                li a:hover .btn-fase p {
                    color: rgba(255, 255, 255, 1);
                }
            </style>

            <div class="tab-content">
                <div id="fase1" class="tab-pane fade">
                    <div class="box-fase1">
                        <div class="content1">
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
                        <style>
                            .box-fase1 .content1 {
                                background-color: rgba(1, 30, 65, 1);
                            }

                            .box-fase1 .content1 h3 {
                                margin: 0px;
                                padding: 16px;
                                /* font-size: 18px; */
                                font-weight: 700;
                                text-align: center;
                                line-height: 1.2;
                                color: rgba(255, 255, 255, 1);
                            }

                            .box-fase1 .content1 p {
                                margin: 0px;
                                font-size: 15px;
                                font-weight: 500;
                                text-align: center;
                                line-height: 1.2;
                                color: rgba(255, 255, 255, 1);
                            }



                            .box-fase1 .card-atributo {
                                border-top: 2px rgba(255, 255, 255, 1) dotted;
                                /* height: px; */
                                display: grid;
                                gap: 10px;
                                grid-auto-flow: dense;
                                grid-template-columns: 1fr;
                                grid-template-rows: auto;
                            }

                            .box-fase1 .card-atributo .texto {

                                /* height: px; */
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                align-items: center;
                                padding: 16px;

                            }

                            .box-fase1 .card-atributo h4 {
                                font-size: 20px;
                                font-weight: 700;
                                text-align: center;
                                line-height: 1.2;
                                color: rgba(255, 255, 255, 1);
                                padding: 8px;
                            }

                            .box-fase1 .card-atributo .imagen img {
                                max-width: 120px;
                                margin: auto;
                                padding-bottom: 8px;
                            }

                            .box-fase1 .card-atributo .texto {
                                font-size: 15px;
                                font-weight: 500;
                                text-align: left;
                                line-height: 1.3;
                                color: rgba(255, 255, 255, 1);
                            }
                        </style>
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
                        <style>
                            .box-wrp .box-fase1 .content2 h3 {
                                /* font-size: 18px; */
                                font-weight: 700;
                                text-align: center;
                                line-height: 1.2;
                                color: rgba(0, 168, 78, 1);
                                margin: 16px;
                            }

                            .box-wrp .box-fase1 .content2 h4 {
                                font-size: 18px;
                                font-weight: 700;
                                text-align: left;
                                line-height: 1.2;
                                color: rgba(0, 168, 78, 1);
                                margin: 16px;
                            }

                            .box-wrp .box-fase1 .content2 p {
                                font-size: 15px;
                                font-weight: 500;
                                text-align: justify;
                                line-height: 1.3;
                                color: rgba(25, 25, 25, 1);
                                padding: 15px;
                            }
                        </style>
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
                            .box-wrp .box-fase1 .content3 {
                                background-color: rgba(0, 168, 78, 1);
                            }

                            .box-wrp .box-fase1 .content3 h3 {
                                /* font-size: 18px; */
                                font-weight: 700;
                                text-align: center;
                                line-height: 1.2;
                                color: rgba(255, 255, 255, 1);
                                padding: 16px;
                                margin: 0px;
                            }

                            .box-wrp .box-fase1 .content3 h4 {
                                font-size: 18px;
                                font-weight: 700;
                                text-align: left;
                                line-height: 1.2;
                                color: rgba(255, 255, 255, 1);
                                margin: 16px;
                            }

                            .box-wrp .box-fase1 .content3 p {
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
                            .box-fase1 .content4 {
                                display: grid;
                                gap: 10px;
                                grid-auto-flow: dense;
                                grid-template-columns: 1fr;
                                grid-template-rows: auto;
                            }

                            .box-fase1 .content4 .icono img {
                                max-width: 100px;
                                margin: auto;
                                padding: 2%;
                            }

                            .box-fase1 .content4 h4 {
                                font-size: 18px;
                                font-weight: 700;
                                text-align: center;
                                line-height: 1.2;
                                color: rgba(0, 168, 78, 1);
                            }

                            .box-fase1 .content4 .list-content4 {
                                padding: 16px;
                            }
                        </style>

                    </div>
                </div>
                <div id="fase2" class="tab-pane fade">
                    <div class="box-fase2">
                        <div class="content1">
                            <h3>BiciCarga Fase 2</h3>
                            <p>BiciCarga Fase 2 se centró en la implementación de una operación de distribución de
                                mercancías de última milla, último kilómetro o a nivel de barrio, a través de bicicletas
                                o triciclos de carga eléctrica de cero emisiones con paneles solares como fuente de
                                energía.</p>
                            <p>Durante 5 meses, BiciCarga proporcionó asistencia técnica para su implementación,
                                monitoreo y formulación de recomendaciones para la adopción por parte de empresas
                                privadas y promoción desde la formulación de política pública de las autoridades.</p>
                            <p>En esta segunda fase, BiciCarga buscó:</p>
                            <ul>
                                <li>Impulsar la masificación de un modelo colaborativo de logística sostenible y
                                    renovable basado en la ciclo logística para la distribución de mercancía de carga
                                    seca y fría en su fase de última milla o a nivel de barrio en Colombia.</li>
                                <li>Informar al gobierno local sobre las barreras sociales, económicas, operativas y de
                                    infraestructura de energía no convencional renovable para promover un servicio
                                    sostenible de entrega de mercancía de última milla o a nivel de barrio en Bogotá.
                                </li>
                                <li>Asesorar y apoyar al gobierno local en la construcción de un caso para acelerar la
                                    adopción de la política de micromovilidad de carga.</li>
                            </ul>
                        </div>
                        <style>
                            .box-fase2 .content1 {
                                background-color: rgba(1, 30, 65, 1);
                            }

                            .box-wrp .box-fase2 .content1 h3 {
                                /* font-size: 18px; */
                                font-weight: 700;
                                text-align: center;
                                line-height: 1.2;
                                color: rgba(255, 255, 255, 1);
                                padding: 16px;
                                margin: 0px;
                            }

                            .box-wrp .box-fase2 .content1 p {
                                font-size: 15px;
                                font-weight: 500;
                                text-align: justify;
                                line-height: 1.3;
                                color: rgba(255, 255, 255, 1);
                                padding: 0px 15px 15px 15px;
                            }

                            .box-wrp .box-fase2 .content1 ul>li {
                                /* font-size: 18px; */
                                font-weight: 500;
                                text-align: left;
                                line-height: 1.3;
                                color: rgba(255, 255, 255, 1);
                                padding: 16px;
                            }
                        </style>
                    </div>
                </div>
            </div>

        </div>
        <style>
            .box-wrp .box-collapsable {
                grid-area: collapsable;
            }
        </style>

        <div class="box-empresas">
            <h3>Empresas que participaron en BiciCarga</h3>
            <p>El piloto contó con la participación de empresas de los sectores de alimentos, paquetería y consumo
                masivo que implementaron un esquema de distribución con bicicletas/triciclos eléctricos de carga, el
                cual permitió la conformación de una red de valor en ciclo logística para Bogotá y que puede ser
                replicado y escalado en otras ciudades del país.</p>
        </div>
        <style>
            .box-wrp .box-empresas {
                margin-top: 30px;
                grid-area: empresas;
                background-color: #0d1d41;

            }

            .box-wrp .box-empresas h3 {
                /* font-size: 18px; */
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: rgba(255, 255, 255, 1);
                padding: 16px;
            }

            .box-wrp .box-empresas p {
                grid-area: resultados;
                padding: 0px 15px 15px 15px;
                font-size: 15px;
                font-weight: 500;
                text-align: justify;
                line-height: 1.3;
                color: rgba(255, 255, 255, 1);
            }
        </style>

        <!-- Carousel carousel -->
        <div class='box-carousel-empresas'>
            <div id='carousel' class='carousel slide' data-ride='carousel'>

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
                <div class='carousel-inner'>
                    <div class='item active'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/lacolmena.webp' alt='logo la colmena'>
                        <p><small>Generadores</small></p>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/nutresa.webp' alt='logo comercial nutresa'>
                        <p><small>Generadores</small></p>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/cvas.webp' alt='logo cvas'>
                        <p><small>Operadores</small></p>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/quick.webp' alt='logo quick'>
                        <p><small>Operadores</small></p>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/servientrega.webp' alt='logo servientrega'>
                        <p><small>Operadores</small></p>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/pargal.webp' alt='logo pargal'>
                        <p><small>Proveedores</small></p>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/ecotriciclos.webp' alt='logo ecotriciclos'>
                        <p><small>Proveedores</small></p>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/cityparking.webp' alt='logo cityparking'>
                        <p><small>Proveedores</small></p>
                    </div>
                    <div class='item'>
                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Galeria/10-03-2022/lola.webp' alt='logo lola'>
                        <p><small>Proveedores</small></p>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class='left carousel-control' href='#carousel' data-slide='prev'>
                    <span class='glyphicon glyphicon-chevron-left'></span>
                    <span class='sr-only'>Anterior</span>
                </a>
                <a class='right carousel-control' href='#carousel' data-slide='next'>
                    <span class='glyphicon glyphicon-chevron-right'></span>
                    <span class='sr-only'>Siguinente</span>
                </a>
            </div>
        </div>
        <style>
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
        </style>

        <div class="box-socios">
            <h3>Socios del proyecto</h3>
            <p>Conoce al equipo multidisciplinario que trabajó para implementar un piloto de distribución de última milla con bicicletas eléctricas de carga.</p>
        </div>
        <style>
            .box-wrp .box-socios {
                grid-area: socios;
                /* background-color: rgba(0, 168, 78, 1) */
            }

            .box-wrp .box-socios h3 {
                /* font-size: 18px; */
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: rgba(1, 30, 65, 1);
                padding: 16px;
            }

            .box-wrp .box-socios p {
                padding: 0px 15px 15px 15px;
                font-size: 15px;
                font-weight: 500;
                text-align: justify;
                line-height: 1.3;
                color: rgba(25, 25, 25, 1);
            }
        </style>

        <div class="box-socios-btn">
            <div class="btn-socio">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/logo-bogota.png" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">La <strong>Secretaría Distrital de Movilidad</strong> cumple el rol de ser el ente articulador del piloto, el formulador de política pública y de recomendaciones a la norma para apoyar la ampliación y la adopción acelerada de las bicicletas de carga eléctricas para el movimiento de mercancías en Bogotá.</div>
                </div>
            </div>
            <div class="btn-socio">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/logo-logyca.png" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">LOGYCA, en alianza con el MIT FaROL LAB, fueron los expertos técnicos del proyecto, quienes adelantaron el diseño metodológico y de estrategias para el análisis de la información.</div>
                </div>
            </div>
            <div class="btn-socio">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-06-2021/despacio_logo.png" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">Despacio fue el socio técnico responsable de la implementación y recolección de la información del proyecto, así como del montaje y funcionamiento del modelo colaborativo que se realizó mediante la plataforma de cross-docking de BiciCarga.</div>
                </div>
            </div>
            <div class="btn-socio">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-11-2020/logo-banco-mundial.png" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">El Banco Mundial y la Corporación Financiera Internacional participan activamente en el sector del transporte urbano de Bogotá, brindando la asistencia financiera y técnica para contribuir con la escalabilidad del proyecto.</div>
                </div>
            </div>

        </div>
        <style>
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
                background-color: rgba(0, 168, 78, 1);
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
        </style>


    </div>
</div>
<!-- End Set Wrapper -->
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

    .box-wrp {
        display: grid;
        gap: 10px;
        grid-auto-flow: dense;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        grid-template-areas:
            'encabezado'
            'video'
            'definicion'
            'imgDefincion'
            'resultados'
            'collapsable'
            'empresas'
            'carousel-empresas'
            'socios'
            'boton-socios';
    }

    .box-wrp .nav>li>a:focus,
    .box-wrp .nav>li>a:hover {
        /* background-color: #eee; */
        background-color: #00a84e;
        color: rgba(255, 255, 255, 1);
    }

    .box-wrp .nav-justified>li {
        background: #e5e5e5 !important;
    }

    .box-wrp .nav-pills>li.active>a,
    .box-wrp .nav-pills>li.active>a:focus,
    .box-wrp .nav-pills>li.active>a:hover {
        color: #fff;
        background-color: #011e41;
    }




    .box-wrp .carousel-control.left {
        background-image: none !important;
    }

    .box-wrp .carousel-control.right {
        background-image: none !important;

    }

    .box-wrp .glyphicon-chevron-right::before {
        color: #00a84e !important;
    }

    .box-wrp .glyphicon-chevron-left::before {
        color: #00a84e !important;
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
    }

    @media(min-width:768px) {
        .box-wrp {
            display: grid;
            gap: 10px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
            grid-template-areas:

                'encabezado encabezado'
                'video video'
                'definicion imgDefincion'
                'resultados resultados'
                'collapsable collapsable'
                'empresas carousel-empresas'
                'socios socios'
                'boton-socios boton-socios';


        }

        .box-wrp .box-video {
            padding: 5%;
        }

        .box-wrp .box-resultados {
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-areas: 'resultadosLogo resultadosTexto resultadosTexto';

        }

        .box-imgDefinicion>div:nth-child(1)>img:nth-child(1) {
            max-width: 350px;
            margin: auto;
        }

        .box-wrp .box-definicion {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 2%;
        }

        .box-wrp .box-carousel-empresas {
            padding: 2%;
        }

        .box-wrp .box-carousel-empresas {
            position: relative;
        }

        .box-wrp .carousel {
            /* position: relative; */
            position: absolute;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
        }

        .box-carousel-empresas .item img {
            /* max-width: 250px !important; */
            max-width: 350px !important;
        }


        .box-fase1 .card-atributo {
            grid-template-columns: 30% 69%;
        }

        .box-fase1 .card-atributo .imagen img {
            max-width: 80px;
            padding-bottom: 20px;
        }

        .box-fase1 .content1 {
            background-color: rgba(1, 30, 65, 1);
            padding: 30px;
        }

        .box-fase1 .content2 {
            padding: 30px;
        }

        .box-fase1 .content3 {
            padding: 30px;
        }

        .box-fase1 .content4 {
            display: grid;
            gap: 10px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
            padding: 30px;
        }

        .box-fase2 .content1 {
            background-color: rgba(1, 30, 65, 1);
            padding: 30px;
        }

        .box-socios-btn {
            grid-template-columns: 1fr 1fr;
            padding: 30px;
        }

        .btn-socio .image {
            max-width: 200px;
        }

        .box-wrp .box-socios {
            grid-area: socios;
            /* background-color: rgba(0, 168, 78, 1) */
            padding: 30px;
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
<!-- End Styles -->
