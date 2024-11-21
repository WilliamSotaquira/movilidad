@extends('welcome')
@section('title','recursos')
@section('contenido')

<link rel="stylesheet" href="{{ asset('css/cybe.css') }}">


<!-- Set recursos -->
<style>
    .cpnt-recursos .title-type-ppal {
        font-size: 32px;
        color: #252525;
        text-align: center;
        margin-bottom: 32px;
        color: #4d541f;
        font-family: 'Montserrat', sans-serif;
        text-transform: uppercase;
        font-weight: light;
    }

    .cpnt-recursos .img-r1 {
        margin-bottom: 32px;
        padding: 32px;
        max-width: 800px;
        margin: auto;

    }

    .cpnt-recursos .title-type-2 {
        font-size: 20px;
        color: #4d541f;
        text-align: left;
        font-weight: 500;
        margin-bottom: 32px;
        display: inline-block;
        border-bottom: solid 2px #4d541f;
        width: 100%;
        padding-bottom: 12px;
    }

    .cpnt-recursos .ph-type-1 {
        font-size: 16px;
        color: #252525;
        text-align: left;
        margin-bottom: 24px;
    }

    .cpnt-recursos ul li {
        font-size: 16px;
        color: #252525;
        text-align: left;
        margin-bottom: 6px;
    }

    .cpnt-recursos {
        font-family: 'Montserrat', sans-serif;
    }
</style>
<div class="set-wrapper recursos">


    <!-- bloque box header-->
    <style>
        .set-wrapper .box-header {
            background: #BED000FF;
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/cybe_portada_2.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;

            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas: "box-header";
        }

        @media (min-width: 908px) {
            .set-wrapper .box-header {
                background-position: center -30em;
                grid-template-columns: 55% 45%;
                grid-template-areas: "vacio box-header";
            }
        }

        .box-header .cmpnt-logo-ppal {
            grid-area: box-header;
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box-header .cmpnt-logo-ppal .logo-ppal {
            width: 100%;
            max-width: 260px;
            margin: 0 auto;
            background-color: #BED000FF;
            padding: 32px;
            -webkit-box-shadow: 0px 0px 10px 3px #BED000FF25;
            box-shadow: 0px 0px 10px 3px #BED000FF25;
            margin-bottom: 12px;
        }

        .box-header .cmpnt-logo-ppal .paragraph {
            font-family: "Montserrat", sans-serif;
            font-size: 20px;
            font-weight: 400;
            text-align: left;
            line-height: 1.1;
            color: #fff;
            text-align: center;
            margin: 8px 14px;
            padding: 0;
            max-width: 400px;
        }

        /* Reglas Navbar */
        .set-wrapper .navbar {
            background: #BED000FF;
            border: none;
            border-radius: 0;
            font-family: "Montserrat", sans-serif !important;
            font-size: 14px !important;
            font-weight: 400;
            line-height: 1.1;
            color: #fff;
            text-align: center;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        @media (min-width: 768px) {
            .set-wrapper .navbar {
                display: flex;
                margin: auto;
                margin-bottom: 6px;
            }
        }

        .set-wrapper .navbar-nav>li {
            background: #BED000FF;
            color: #3d4a1c;
        }

        .set-wrapper .navbar-nav>li:hover {
            background: #828F26;
            color: #ffffff;
        }

        .set-wrapper .navbar-nav>li>a {
            color: #3d4a1c !important;
            padding: 14px 4px;
        }

        .set-wrapper .navbar-nav>li:hover>a {
            color: #ffffff !important;
        }

        .set-wrapper .navbar-nav>li a.activado {
            background: rgba(77, 84, 31, 1) !important;
            color: #BED000FF !important;
        }

        @media (min-width: 768px) {
            .navbar-collapse.collapse {
                display: inline-block !important;
                width: auto !important;
            }
        }

        .cpnt-aniversario dl {
            margin-left: 32px;
            font-weight: normal;
            font-size: 16px;
            margin-bottom: 16px;
            color: #252525;

        }
    </style>
    <div class="box box-header">
        <div class="cmpnt cmpnt-vacio">
        </div>
        <div class="cmpnt cmpnt-logo-ppal">
            <div class="logo logo-ppal">
                <a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/home">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-08-2024/logo_cbe_2024.png" alt="logo Movilidad de Cero y Bajas Emisiones">
                </a>
            </div>
            <p class="paragraph ph-type-ppal ph-id-1">Conoce la apuesta de Bogotá por la <strong>movilidad motorizada de cero y bajas emisiones</strong></p>
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
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/home">Inicio</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/por_que">¿Por qué?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/solucion">¿Qué solución proponemos?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/metas">¿Cuáles son nuestras metas?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/tecnologias">¿Cuáles son las tecnologías?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/mitos">Verdades y mitos</a></li>
                    <li><a class="activado" href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/recursos">Recursos</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="cpnt-recursos cpnt-recursos-header">
        <h2 class="title title-type-ppal title-id-1">Recursos</h2>
        <p class="paragraph ph-type-1">La movilidad sostenible es un pilar fundamental para el desarrollo de ciudades más habitables y eficientes. En este espacio web, encontrarás información detallada sobre las últimas tendencias y avances en estrategias de movilidad sostenible, como la transición energética, la digitalización del transporte y la promoción de medios de transporte de bajas emisiones. Además, podrás explorar iniciativas globales y locales que buscan mejorar la calidad de vida y reducir el impacto ambiental, contribuyendo así a un futuro más verde y conectado.</p>
    </div>

    <div class="set-collapsed">

        <!-- collapse group recursos -->
        <div class='panel-group' id='accordion-recursos' role='tablist ' aria-multiselectable='true'>

            <!-- collapse aniversario -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading-aniversario'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion-recursos' href='#collapse-aniversario' aria-expanded='false' aria-controls='collapse-aniversario'>
                            Primer aniversario de la Política Pública de Movilidad Motorizada de Cero y Bajas Emisiones
                        </a>
                    </h4>
                </div>
                <div id='collapse-aniversario' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-aniversario' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='body-collapse-aniversario'>
                            <div class="cpnt-recursos cpnt-aniversario">
                                <h3 class="title title-type-2 title-id-1-1" id="electrificacion_rutas">Primer aniversario de la Política Pública de Movilidad Motorizada de Cero y Bajas Emisiones</h3>
                                <p class="paragraph ph-type-1 ph-id-r1">La Política Pública de Movilidad Motorizada de Cero y Bajas Emisiones celebró su primer año con logros importantes en sostenibilidad, y apuntando a una movilidad más limpia y amigable con el medio ambiente en Bogotá.</p>
                                <p class="paragraph ph-type-1 ph-id-r1">Los resultados obtenidos y las experiencias que expertos compartieron durante el evento, se pueden consultar a continuación:</p>

                                <div>
                                    <dl>
                                        <dt><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/07-11-2024/1.1_sdm_-_rafael_chaparro.pdf" target="_blank" rel="noopener noreferrer">Avances en la gestión y resultados de la Política Pública de Movilidad Motorizada de Cero y Bajas Emisiones.</a></dt>
                                        <dd>Secretaría Distrital de Movilidad - Rafael Chaparro</dd>
                                    </dl>
                                    <dl>
                                        <dt><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/07-11-2024/2.1_pnuma_-_luis_quirama.pdf" target="_blank" rel="noopener noreferrer">Avances en la digitalización para la optimización de la infraestructura eléctrica soporte de los vehículos eléctricos y vehículos híbridos enchufables.</a></dt>
                                        <dd>PNUMA - Luis Quirama</dd>
                                    </dl>
                                    <dl>
                                        <dt><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/07-11-2024/2.2_sdm_-_luis_castro.pdf" target="_blank" rel="noopener noreferrer">Acceso a estaciones de recarga en Bogotá, reduciendo la ansiedad por la autonomía de los vehículos eléctricos y la descongestión de las estaciones privadas.</a></dt>
                                        <dd>Secretaría Distrital de Movilidad - Luis Castro</dd>
                                    </dl>
                                    <dl>
                                        <dt><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/07-11-2024/2.3_opex_-_alejandro_rendon.pdf" target="_blank" rel="noopener noreferrer">Uso de hidrógeno como alternativa sostenible para flotas comerciales.</a></dt>
                                        <dd>OPEX - Alejandro Rendón</dd>
                                    </dl>
                                    <dl>
                                        <dt><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/07-11-2024/2.4_magment_-_ignacio_alvarez.pdf" target="_blank" rel="noopener noreferrer">Innovaciones en tecnología de carga inalámbrica para vehículos, mediante la integración en la infraestructura vial existente.</a></dt>
                                        <dd>MAGMENT - Ignacio Álvarez</dd>
                                    </dl>
                                    <dl>
                                        <dt><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/07-11-2024/3.1_lola_te_mueve_-_diana_gomez.pdf" target="_blank" rel="noopener noreferrer">Soluciones de movilidad urbana sostenible para la logística de última milla, con un caso de éxito y potencial de expansión.</a></dt>
                                        <dd>LOLA TE MUEVE - Diana Gómez</dd>
                                    </dl>
                                    <dl>
                                        <dt><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/07-11-2024/3.2_giz_-_adriana_neira_-_cartilla.pdf" target="_blank" rel="noopener noreferrer">Avances y resultados de la electrificación de autobuses escolares, contribuyendo a la movilidad sostenible en el sector educativo y a la salud de las y los estudiantes.</a></dt>
                                        <dd>GIZ - Adriana Neira</dd>
                                    </dl>
                                    <dl>
                                        <dt><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/07-11-2024/3.3_akuai_energy_-_jorge_avella.pdf" target="_blank" rel="noopener noreferrer">Análisis y asesoramiento económico de la transición a vehículos eléctricos, orientando de manera profesional y especializada sobre los incentivos fiscales disponibles y puntos de equilibrio de la inversión.</a></dt>
                                        <dd>AKUAI ENERGY - Jorge Avella</dd>
                                    </dl>
                                    <dl>
                                        <dt><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/07-11-2024/3.4_eolo_motors_-_nelson_roldan.pdf" target="_blank" rel="noopener noreferrer">Desafíos regulatorios en la implementación de nuevas tecnologías locales para el transporte, fabricación vehicular nacional y propuestas para superar barreras legislativas.</a></dt>
                                        <dd>EOLO MOTORS - Nelson Roldán</dd>
                                    </dl>
                                    <dl>
                                        <dt><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/07-11-2024/4.1_sda_-_sergio_pena.pdf" target="_blank" rel="noopener noreferrer">Clasificación y estándares para vehículos según sus emisiones, generando estrategias para la adopción de vehículos más limpios.</a></dt>
                                        <dd>Secretaría Distrital de Ambiente - Sergio Peña</dd>
                                    </dl>
                                    <dl>
                                        <dt><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/07-11-2024/4.2_sdm_-_rafael_chaparro.pdf" target="_blank" rel="noopener noreferrer">Retos enfrentados en la implementación de la Política Pública de Movilidad Motorizada de Cero y Bajas Emisiones, necesidades de soporte y colaboración para lograr objetivos futuros.</a></dt>
                                        <dd>Secretaría Distrital de Movilidad - Rafael Chaparro</dd>
                                    </dl>
                                    <dl>
                                        <dt><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/07-11-2024/4.3_gesoltec_-_camilo_bernal.pdf" target="_blank" rel="noopener noreferrer">Problemas en la actual normativa de medición de emisiones y propuestas para mejorar la precisión y confiabilidad en la medición.</a></dt>
                                        <dd>GESOLTEC - Camilo Bernal</dd>
                                    </dl>
                                    <dl>
                                        <dt><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/07-11-2024/4.4_u.ean_-_leidy_zapata_luz_gervara.pdf" target="_blank" rel="noopener noreferrer">Importancia del análisis de ciclo de vida en la movilidad sostenible, con enfoques para maximizar la circularidad en la industria automotriz.</a></dt>
                                        <dd>Universidad EAN - Leidy Zapata & Luz Gervara</dd>
                                    </dl>
                                </div>

                                <p class="paragraph ph-1"><i>Esta información es exclusivamente para consulta, este contenido está protegido y no puede ser reproducido, distribuido ni utilizado en ninguna forma sin la autorización expresa y escrita de los autores. Cualquier uso no autorizado de este material está prohibido y puede acarrear consecuencias legales.</i></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- collapse rutas -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading-rutas'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion-recursos' href='#collapse-rutas' aria-expanded='false' aria-controls='collapse-rutas'>
                            Proyecto de electrificación de rutas escolares
                        </a>
                    </h4>
                </div>
                <div id='collapse-rutas' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-rutas' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='body-collapse-rutas'>
                            <div class="cpnt-recursos cpnt-recursos-escolares" class="escolares">
                                <h3 class="title title-type-2 title-id-1-1" id="electrificacion_rutas">Proyecto de electrificación de rutas escolares</h3>
                                <div class="imagen img-r1">
                                    <figure>
                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/escolares1.png" alt="imagen ">

                                    </figure>
                                </div>
                                <p class="paragraph ph-type-1 ph-id-r1">Con el apoyo de la Cooperación internacional City Climate Finance Gap Fund (Gap Fund) se están llevando a cabo estudios para iniciar la hoja de ruta hacia la electrificación de la flota escolar de la ciudad.</p>
                                <p class="paragraph ph-type-1 ph-id-r2">En la primera fase se realizó la <strong>"Previabilidad del ascenso tecnológico de la flota escolar para la ciudad de Bogotá"</strong> cuyo alcance fue, conceptualizar un proyecto piloto y opciones de escalabilidad para la electrificación de la flota escolar de Bogotá, tanto para colegios públicos como privados.</p>
                                <p class="paragraph ph-type-1 ph-id-r2">Producto de esta consultoría, se realizaron tres entregas documentadas, cuyos temas centrales son los siguientes:</p>
                                <ul>
                                    <li><a href="https://drive.google.com/file/d/1wACsUJNVVXEBptSFcZkLPOkibQS9M0eL/view?usp=sharing">Estudio de la flota actual de buses escolares que operan en Bogotá (pdf).</a> Desarrollar una comprensión integral del estado actual de operación de las flotas de buses escolares de Bogotá.</li>
                                    <li><a href="https://drive.google.com/file/d/1nYZ1x3R4ZGecoqpAQU-tHTue-d0mT52N/view?usp=sharing">Actores claves, modelos de negocio posibles y estructuras de financiación para la electrificación de la flota (pdf).</a> Identificar las partes interesadas, los posibles modelos de negocio y las estructuras de financiación para la electrificación.</li>
                                    <li><a href="https://drive.google.com/file/d/1CTm5SAh0QvWCB69rpBlD5HdLN0BLziuV/view?usp=sharing">Hoja de ruta con acciones prioritarias para la fase piloto y la fase de escalabilidad (.pdf).</a> Diseñar una hoja de ruta con acciones prioritarias para la fase piloto del proceso de electrificación.</li>
                                </ul>
                                <p class="paragraph ph-type-1 ph-id-r2">A lo largo del año 2024, estamos llevando a cabo una segunda fase en la que recopilamos más información sobre la operación del servicio, y próximamente presentaremos los beneficios de la adopción de estas nuevas tecnologías.</p>
                                <p class="paragraph ph-type-1 ph-id-r2">Como parte de esta segunda fase, hemos desarrollado una estrategia de comunicación que nos permitirá difundir los resultados de los estudios realizados y promover el uso de la movilidad eléctrica en el transporte escolar. A continuación, puedes descargar nuestro material:</p>
                                <ul>
                                    <li>
                                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/12-09-2024/transporte_escolar_electrico.pdf">Transporte Escolar Eléctrico (pdf).</a> Datos claves para que todos podamos conocer los beneficios para nuestra salud con la transición hacia vehículos eléctricos en el transporte escolar.
                                    </li>
                                    <li>
                                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/12-09-2024/cartilla_proxima_parada_cero_emisiones.pdf">Cartilla Próxima Parada Cero Emisiones (pdf).</a> Esta cartilla guía a los más pequeños a conocer los beneficios del transporte eléctrico escolar y cuidar nuestro planeta.
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- collapse infraestructura -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading-infraestructura'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion-recursos' href='#collapse-infraestructura' aria-expanded='false' aria-controls='collapse-infraestructura'>
                            Infraestructura de recarga
                        </a>
                    </h4>
                </div>
                <div id='collapse-infraestructura' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-infraestructura' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='body-collapse-infraestructura'>
                            <div class="cpnt-recursos cpnt-recursos-recarga" class="recarga">
                                <h3 class="title title-type-2 title-id-1-2">Infraestructura de recarga</h3>
                                <div class="imagen img-r1">
                                    <figure>
                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/recarga3.png" alt="imagen ">

                                    </figure>
                                </div>
                                <p class="paragraph ph-type-1 ph-id-r3">Lograr la provisión de energía para los vehículos eléctricos requiere del trabajo conjunto entre la Nación, el Distrito y el sector privado; aquí algunos documentos que permiten conocer más sobre el desarrollo de la red de infraestructura:</p>
                                <ul>
                                    <li><a href="https://drive.google.com/file/d/1XCkyWl6vuVDAt-ljLtTMW_9PKY38YUSp/view?usp=sharing">Guía de provisión de energía para vehículos eléctricos en Colombia modelos de negocio (pdf)</a> - Desarrollado por Transconsult a partir de cooperación técnica con GIZ, se analizaron diferentes esquemas y modelos de negocio para la proveeduría de energía para vehículos eléctricos en Colombia.</li>
                                    <li><a href="https://drive.google.com/file/d/1qj2ZJ6cDpNh1_fu-ruF7KP8c-3HWmuxy/view?usp=sharing">Asesoría Bogotá modelos de negocio para recarga de vehículos eléctricos (pdf)</a> - Desarrollado por Transconsult a partir de cooperación técnica con GIZ, se analizó el marco normativo, contractual y técnico para el desarrollo del modelo de negocio de recarga de vehículos eléctricos en el mediano plazo con enfoque en la flota de taxis.</li>
                                    <li><a href="https://drive.google.com/file/d/1fu-fP37qFmr6J2IHI3kCD4WoPQnBEFEL/view?usp=sharing">Lineamientos para la implementación de la estrategia de despliegue de infraestructura (segunda etapa) (pdf)</a> - En asistencia técnica con Asociación Sustentar - LEDS LAC, se revisaron las mejores prácticas internacionales, los incentivos, costos y se desarrolló la guía de despliegue de infraestructura de recarga para vehículos eléctricos. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- collapse logistica -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading-logistica'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion-recursos' href='#collapse-logistica' aria-expanded='false' aria-controls='collapse-logistica'>
                            Logística baja en carbono
                        </a>
                    </h4>
                </div>
                <div id='collapse-logistica' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-logistica' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='body-collapse-logistica'>
                            <div class="cpnt-recursos cpnt-recursos-logistica" class="logistica">
                                <h3 class="title title-type-2 title-id-1-3" id="logistica">Logística baja en carbono</h3>
                                <div class="imagen img-r1">
                                    <figure>
                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/logistica1.png" alt="imagen ">

                                    </figure>
                                </div>
                                <p class="paragraph ph-type-1 ph-id-r7"><a href="https://drive.google.com/file/d/1gIUY-Gp-pqO3qZt94p8L-RCLOlWMH2fT/view?usp=sharing">Plan de acción de logística urbana baja en carbono (pdf)</a> - En asistencia técnica con ICLEI - Gobiernos Locales por la Sustentabilidad, orienta el camino para que Bogotá reduzca las emisiones de gases de efecto invernadero (GEI) en el sector de logística urbana.</p>
                                <p class="paragraph ph-type-1 ph-id-r8"><a href="https://www.movilidadbogota.gov.co/web/galeria/bicicarga">Piloto de Bicicarga (enlace)</a> - Micrositio del Piloto de bicicarga implementado por la Secretaría de Movilidad, que promueve alternativas de distribución final de carga en la ciudad, mediante el uso de bicicletas eléctricas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- collapse transporte -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading-transporte'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion-recursos' href='#collapse-transporte' aria-expanded='false' aria-controls='collapse-transporte'>
                            Impactos del transporte
                        </a>
                    </h4>
                </div>
                <div id='collapse-transporte' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-transporte' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='body-collapse-transporte'>
                            <div class="cpnt-recursos cpnt-recursos-logistica" class="logistica">
                                <h3 class="title title-type-2 title-id-1-4">Impactos del transporte</h3>
                                <div class="imagen img-r1">
                                    <figure>
                                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/impacto3.png" alt="imagen ">

                                    </figure>
                                </div>
                                <p class="paragraph ph-type-1 ph-id-r9"><a href="https://drive.google.com/file/d/1EBK3puRKK9GbJ8LqBi8aIUuE6NfEsYAu/view?usp=sharing">Desarrollo de herramientas para la evaluación integrada de impactos en salud del transporte en América Latina (pdf)</a> - Desarrollado por el Banco Mundial, evalúa de manera integral los impactos en salud del transporte bajo escenarios que incentivan el uso de la bicicleta, en ciudades de países de ingresos bajos y medios.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <style>
        .cpnt-recursos-documentos {
            display: grid;
            gap: 16px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            align-items: start;
        }

        @media(min-width:768px) {
            .cpnt-recursos-documentos {
                grid-template-columns: 35% auto;
            }
        }

        .cpnt-recursos-collapse {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        @media(min-width:768px) {
            .cpnt-recursos-collapse {
                padding-top: 90px;
            }
        }

        .cpnt-recursos .panel-body ul>li {
            text-align: justify;
        }
    </style>
    <div class="cpnt-recursos cpnt-recursos-documentos">
        <div class="cpnt-recursos-documentos-title">
            <h3 class="title title-type-2 title-id-1-4">Documentos de interés</h3>
            <p class="paragraph ph-type-1 ph-id-r9">En temas de promoción y transición hacia la movilidad motorizada de cero y bajas emisiones, se cuenta con lineamientos en los niveles internacional, nacional y distrital.</p>
        </div>
        <div class="cpnt-recursos cpnt-recursos-collapse">
            <!-- collapse-documents -->
            <div class='panel-group' id='accordion-documents' role='tablist ' aria-multiselectable='true'>

                <!-- collapse internacional -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading_internacional'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-documents' href='#collapse_internacional' aria-expanded='false' aria-controls='collapse_internacional'>
                                Internacional
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_internacional' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_internacional' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-internacional'>
                                <ul>
                                    <li><b>Agenda 2030.</b> Objetivos de desarrollo sostenible. <a href="https://www.un.org/sustainabledevelopment/es/development-agenda/">Ver en línea</a></li>
                                    <li><b>Acuerdo de París.</b> Naciones Unidas 2015<a href="https://unfccc.int/sites/default/files/spanish_paris_agreement.pdf">(.pdf)</a></li>
                                    <li><b>Declaración de crecimiento verde.</b> Organización para la Cooperación y el Desarrollo Económicos (OCDE)<a href="https://www.oecd.org/greengrowth/49709364.pdf">(.pdf)</a></li>
                                    <li><b>Convención Marco de las Naciones Unidas sobre el Cambio Climático.</b> Naciones Unidas. 1992<a href="https://unfccc.int/resource/docs/convkp/convsp.pdf">(.pdf)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- collapse nacional -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading_nacional'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-documents' href='#collapse_nacional' aria-expanded='false' aria-controls='collapse_nacional'>
                                Nacional
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_nacional' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_nacional' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-nacional'>
                                <ul>
                                    <li><b>Ley 2169 de 2021.</b> Por medio de la cual se impulsa el desarrollo bajo en carbono del país mediante el establecimiento de metas y medidas mínimas en materia de carbono neutralidad y resiliencia climática y se dictan otras disposiciones.<a href="http://www.secretariasenado.gov.co/senado/basedoc/ley_2169_2021.html#:~:text=Leyes%20desde%201992%20%2D%20Vigencia%20expresa%20y%20control%20de%20constitucionalidad%20%5BLEY_2169_2021%5D&text=Por%20medio%20de%20la%20cual,y%20se%20dictan%20otras%20disposiciones">(Ver en línea)</a></li>
                                    <li><b>Ley 2099 de 2021.</b> Por medio de la cual se dictan disposiciones para la transición energética, la dinamización del mercado energético, la reactivación económica del país y se dictan otras disposiciones. Congreso de la República 10 de julio de 2021<a href="https://dapre.presidencia.gov.co/normativa/normativa/LEY%202099%20DEL%2010%20DE%20JULIO%20DE%202021.pdf">(.pdf)</a></li>
                                    <li><b>Decreto 191 de 2021.</b> Por el cual se adiciona la parte 6 del libro 2 del Decreto 1079 de 2015, Único Reglamentario del Sector Transporte en lo relacionado con la identificación de parqueaderos preferenciales para vehículos eléctricos<a href="https://dapre.presidencia.gov.co/normativa/normativa/DECRETO%20191%20DEL%2023%20DE%20FEBRERO%20DE%202021.pdf">(.pdf)</a></li>
                                    <li><b>Resolución 40223 de 2021.</b> Por la cual se establecen las condiciones mínimas de estandarización y de mercado para la implementación de infraestructura de carga para vehículos eléctricos e híbridos enchufables<a href="https://gestornormativo.creg.gov.co/gestor/entorno/docs/resolucion_minminas_40223_2021.htm#:~:text=Por%20la%20cual%20se%20establecen,veh%C3%ADculos%20el%C3%A9ctricos%20e%20h%C3%ADbridos%20enchufables">(.pdf)</a></li>
                                    <li><b>Resolución 40177 de 2020.</b> Por la cual se definen los energéticos de bajas o cero emisiones teniendo como criterio fundamental su contenido de componentes nocivos para la salud y el medio ambiente y se adoptan otras disposiciones<a href="https://gestornormativo.creg.gov.co/gestor/entorno/docs/resolucion_minminas_40223_2021.htm#:~:text=Por%20la%20cual%20se%20establecen,veh%C3%ADculos%20el%C3%A9ctricos%20e%20h%C3%ADbridos%20enchufables">(.pdf)</a></li>
                                    <li><b>Ley 1964 de 2019.</b> Por medio de la cual se promueve el uso de vehículos eléctricos en Colombia y se dictan otras disposiciones<a href="https://dapre.presidencia.gov.co/normativa/normativa/LEY%201964%20DEL%2011%20DE%20JULIO%20DE%202019.pdf">(.pdf)</a></li>
                                    <li><b>Estrategia Nacional de Movilidad Eléctrica. </b><a href="https://www1.upme.gov.co/DemandaEnergetica/ENME.pdf">(.pdf)</a></li>
                                    <li><b>Plan Energético Nacional (2020-2050). </b><a href="https://www1.upme.gov.co/DemandayEficiencia/Documents/PEN_2020_2050/Plan_Energetico_Nacional_2020_2050.pdf">(.pdf)</a>,<a href="https://www1.upme.gov.co/DemandayEficiencia/Paginas/PEN.aspx">Enlace Documentos Relacionados.</a></li>
                                    <li><b>CONPES 3934 de 2018.</b> Política de Crecimiento Verde<a href="https://colaboracion.dnp.gov.co/CDT/Conpes/Econ%C3%B3micos/3934.pdf">(.pdf)</a></li>
                                    <li>Contribución Determinada a nivel Nacional (NDC Colombia actualizada) <a href="https://www.minambiente.gov.co/cambio-climatico-y-gestion-del-riesgo/actualizacion-de-la-contribucion-determinada-a-nivel-nacional-ndc/">(.pdf)</a></li>
                                    <li><b>Ley 2294 de 2023.</b> Por la cual se expide el Plan Nacional de Desarrollo (PND) 2022 - 2026 Colombia potencia mundial de la vida.<a href="https://colaboracion.dnp.gov.co/CDT/portalDNP/PND-2023/Ley_2294_del_19_de_mayo_de_2023.pdf">(.pdf)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- collapse distrital -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading_distrital'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-documents' href='#collapse_distrital' aria-expanded='false' aria-controls='collapse_distrital'>
                                Distrital
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_distrital' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_distrital' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-distrital'>
                                <ul>
                                    <li><b>Plan Distrital de Desarrollo 2024 - 2027 Bogotá Camina Segura </b><a href="https://www.sdp.gov.co/gestion-a-la-inversion/programacion-y-seguimiento-a-la-inversion/planes-de-desarrollo-distrital">enlace</a></li>
                                    <li><b>Resolución 149772 de 2023.</b> Por la cual se adopta el protocolo general para el aprovechamiento económico del espacio público para la actividad de recarga de vehículos eléctricos y se establecen otras disposiciones.<a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?dt=S&i=143481"></a></li>
                                    <li><b>CONPES DISTRITAL 31 DE 2023.</b> Política Pública de Acción Climática 2023-2050<a href="https://www.sdp.gov.co/gestion-socioeconomica/conpes-dc/politicas-publicas">(Documentos disponibles)</a></li>
                                    <li><b>CONPES DISTRITAL 30 DE 2023.</b> Política Pública de Movilidad Motorizada de Cero y bajas Emisiones<a href="https://www.movilidadbogota.gov.co/web/politicas_publicas_distritales">(Documentos disponibles)</a></li>
                                    <li><b>Decreto 203 del 31 de mayo de 2023.</b> Por medio del cual se establecen lineamientos para la constitución, administración y funcionamiento del Fondo Distrital para la Promoción del Ascenso Tecnológico de volquetas y del parque automotor que preste el servicio de transporte de carga de que trata el artículo 32 de la Ley 2169 de 2021, y se dictan otras disposiciones.<a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=142660&dt=S">(Ver en línea)</a></li>
                                    <li><b>Resolución 218 del 13 de agosto de 2021.</b> Por medio de la cual se incluye la actividad denominada recarga de vehículos eléctricos dentro del listado de actividades de aprovechamiento económico de espacio público en los términos del Decreto 552 de 2018.<a href="https://www.dadep.gov.co/sites/default/files/comision-intersectorial-del-espacio-publico-ciep/2022-09/resolucion-218-de-2021.pdf">(.pdf)</a></li>
                                    <li><b>Resolución No. 149772 del 23 de junio de 2023.</b> Por la cual se adopta el protocolo general para el aprovechamiento económico del espacio público para la actividad de recarga de vehículos eléctricos y se establecen otras disposiciones.<a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=143481">(Ver en línea)</a></li>
                                    <li><b>Acuerdo 811 de 2021.</b> Acciones para la descarbonización en Bogotá.<a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=113880&dt=S">(Ver en línea)</a></li>
                                    <li><b>Acuerdo 790 de 2020.</b> Declaratoria de emergencia climática.<a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=103745&dt=S">(Ver en línea)</a></li>
                                    <li><b>Acuerdo 780 de 2020.</b> Incentivos para la reactivación económica.<a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=100965">(Ver en línea)</a></li>
                                    <li><b>Acuerdo 732 de 2018.</b> Medidas para la promoción de la movilidad eléctrica.<a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=82132&dt=S">(Ver en línea)</a></li>
                                    <li><b>Acuerdo 689 de 2017.</b> Lineamientos para fortalecer la eco-conducción.<a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=71613&dt=S">(Ver en línea)</a></li>
                                    <li><b>Acuerdo 619 de 2015.</b> Lineamientos para estimular el uso de vehículos eléctricos.<a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=63089">(Ver en línea)</a></li>
                                    <li><b>Acuerdo 477 de 2013.</b> Plan de Ascenso Tecnológico para el SITP.<a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=55072">(Ver en línea)</a></li>
                                    <li><b>Acuerdo 472 de 2011.</b> Lineamientos Política conducción ecológica.<a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=43825">(Ver en línea)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /#fin -documents -->
        </div>

    </div>



</div>
<!-- Fin Set -->
