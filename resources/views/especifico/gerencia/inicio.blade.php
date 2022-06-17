@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class="encabezado">
        <div class='row'>
            <div class='col-xs-12 col-sm-6'>
                <div class="logo" title="Logo Gerencia en Vía" alt="Logo Gerencia en Vía">
                    <span class="triangulo"></span>
                    <!-- <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-11-2021/texturas_y_logo_logo_600x600.png' alt='Encabezado - Gerencia en Vía' title='Encabezado - Gerencia en Vía'> -->
                    <!-- <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/banner_principal.svg' alt='Encabezado - Gerencia en Vía' title='Encabezado - Gerencia en Vía'> -->
                </div>
                <style>
                    .encabezado {
                        background: rgba(31, 34, 62, 1);
                    }

                    .encabezado [class*='row-'] {
                        margin: 0px;
                        padding: 0px;
                        border: 0;
                        outline: 0;
                        font-size: 100%;
                        vertical-align: baseline;
                    }

                    .encabezado .logo {
                        background: rgba(31, 34, 62, 1);
                        background: linear-gradient(45deg, rgba(31, 34, 62, 0) 0%, rgba(190, 208, 0, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/banner_principal.svg');
                        background-size: contain;
                        height: 110px;
                        max-height: 180px;
                        background-position: center;
                        background-repeat: no-repeat;
                        display: flex;
                        justify-content: center;
                        position: relative;
                    }

                    .triangulo {
                        width: 0;
                        height: 0;
                        border-left: 30px solid rgba(31, 34, 62, 1);
                        border-top: 30px solid transparent;
                        border-bottom: 30px solid transparent;
                        position: absolute;
                        right: -60px;
                        top: calc(50% - 20px);
                    }
                </style>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="img-equipo">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="img-carousel" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-01-2022/gev_imgb_1.webp" alt="Equipo de Gerencia en Vía" title="Equipo de Gerencia en Vía">
                            </div>
                            <div class="item">
                                <img class="img-carousel" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-01-2022/gev_imgb_2.webp" alt="Equipo de Gerencia en Vía" title="Equipo de Gerencia en Vía">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <style>

            </style>
        </div>
    </div>

    <div class="s1">
        <p class="s1-p">Somos un grupo estratégico interdisciplinario de la Secretaría Distrital de Movilidad orientado a <span class="enf-1">solucionar, planear, gestionar y optimizar la movilidad en </span> <span class="enf-2"> todas las localidades de Bogotá.</span></p>
    </div>
    <style>
        .s1 {
            background: rgba(255, 255, 255, 1);
            background: linear-gradient(45deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/fondo_seccion_2.svg');
            background-size: cover;
        }

        .s1 .s1-p {
            color: rgba(31, 34, 62, 1);
            font-weight: 500;
            text-align: center;
            font-size: 16px;
            line-height: 1.4;
            padding: 15px;
        }


        .s1 .s1-p .enf-1 {
            font-size: 1.1em;
            font-weight: 700;
            color: #1f223e;
        }

        .s1 .s1-p .enf-2 {
            font-size: 1.1em;
            font-weight: 700;
            color: #bed000;

        }


        .s2 .nav .gerencia-boton .icono1 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/icono_gestion_azul.svg') no-repeat center;

        }

        .s2 .nav li.active .gerencia-boton .icono1,
        .s2 .nav .gerencia-boton:hover .icono1 {
            background: rgba(255, 255, 255, 0) url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/icono_gestion_verde.svg') no-repeat center !important;
        }

        .s2 .nav .gerencia-boton .icono2 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/icono_control_azul.svg') no-repeat center;
        }

        .s2 .nav li.active .gerencia-boton .icono2,
        .s2 .nav .gerencia-boton:hover .icono2 {
            background: rgba(255, 255, 255, 0) url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/icono_control_verde.svg') no-repeat center !important;
        }

        .s2 .nav .gerencia-boton .icono3 {
            background: rgba(255, 255, 255, 0) url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/icono_senalizacion_azul.svg') no-repeat center;
        }

        .s2 .nav li.active .gerencia-boton .icono3,
        .s2 .nav .gerencia-boton:hover .icono3 {
            background: rgba(255, 255, 255, 0) url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/icono_senalizacion_verde.svg') no-repeat center !important;
        }

        .s2 .nav .gerencia-boton .icono4 {
            background: rgba(255, 255, 255, 0) url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/icono_semaforizacion_azul.svg') no-repeat center;
        }

        .s2 .nav li.active .gerencia-boton .icono4,
        .s2 .nav .gerencia-boton:hover .icono4 {
            background: rgba(255, 255, 255, 0) url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/icono_semaforizacion_verde.svg') no-repeat center !important;
        }

        .s2 .nav .gerencia-boton .icono5 {
            background: rgba(255, 255, 255, 0) url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/icono_pmts_azul.svg') no-repeat center;
        }

        .s2 .nav li.active .gerencia-boton .icono5,
        .s2 .nav .gerencia-boton:hover .icono5 {
            background: rgba(255, 255, 255, 0) url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/icono_pmts_verde.svg') no-repeat center !important;
        }

        .s2 .nav .gerencia-boton .icono6 {
            background: rgba(255, 255, 255, 0) url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/icono_agentes_de_transito_azul.svg') no-repeat center;
        }

        .s2 .nav li.active .gerencia-boton .icono6,
        .s2 .nav .gerencia-boton:hover .icono6 {
            background: rgba(255, 255, 255, 0) url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-03-2022/icono_agentes_de_transito_verde.svg') no-repeat center !important;
        }

        .s2 .nav li:visited .gerencia-boton {
            background-color: #bed000;
        }

        .s2 .gerencia-titulo {
            margin-top: 15px;
            height: auto;
        }

        .s2 .nav-tabs .gerencia-boton {
            margin: 15px;
        }
    </style>
    <div class="s2">
        <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="active">
                    <a href="#gestion" aria-controls="gestion" role="tab" data-toggle="tab">
                        <div class="gerencia-boton">
                            <div class="gerencia-icono icono1">
                            </div>
                            <div class="gerencia-titulo">
                                <h4>Gestión en Vía</h4>
                            </div>
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#controlTransito" aria-controls="controlTransito" role="tab" data-toggle="tab">
                        <div class="gerencia-boton">
                            <div class="gerencia-icono icono2">
                            </div>
                            <div class="gerencia-titulo">
                                <h4>Control de Tránsito</h4>
                            </div>
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#senalizacion" aria-controls="senalizacion" role="tab" data-toggle="tab">
                        <div class="gerencia-boton">
                            <div class="gerencia-icono icono3">
                            </div>
                            <div class="gerencia-titulo">
                                <h4>Señalización</h4>
                            </div>
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#semaforizacion" aria-controls="semaforizacion" role="tab" data-toggle="tab">
                        <div class="gerencia-boton">
                            <div class="gerencia-icono icono4">
                            </div>
                            <div class="gerencia-titulo">
                                <h4>Semaforización</h4>
                            </div>
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#pmts" aria-controls="pmts" role="tab" data-toggle="tab">
                        <div class="gerencia-boton">
                            <div class="gerencia-icono icono5">
                            </div>
                            <div class="gerencia-titulo">
                                <h4>Planes de Manejo de Tránsito PMT</h4>
                            </div>
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#agentes" aria-controls="agentes" role="tab" data-toggle="tab">
                        <div class="gerencia-boton">
                            <div class="gerencia-icono icono6">
                            </div>
                            <div class="gerencia-titulo">
                                <h4>Agentes de Tránsito Civiles</h4>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="gestion">
                    <div class="well">
                        <div class="descripcion">
                            <h3>Gestión en Vía</h3>
                            <p>Dirige la ejecución de acciones en vía para mejorar las condiciones de tránsito, mitigar el riesgo en vía de los diferentes actores y promover estrategias de seguridad vial.</p>
                            <ul>
                                <li>
                                    <h4>Grupo Guía</h4>
                                    <p>Es el personal operativo en vía que apoya la gestión del tránsito en las diferentes localidades y principales corredores de la ciudad con personal motorizado, en bicicleta y a pie.</p>
                                </li>
                                <li>
                                    <h4>Centro de Gestión de Tránsito (CGT)</h4>
                                    <p>Encargado del monitoreo del tránsito y la movilidad en Bogotá. A través de más de 200 cámaras recolecta información relacionada con: velocidades, aforos vehiculares y de bicicletas y siniestralidad. Asigna personal y recursos disponibles para la atención de incidentes y gestiona las solicitudes de la ciudadanía en tiempo real.</p>

                                <li>
                                    <h4>Gerentes</h4>
                                    <p>El grupo de gerencias es un equipo profesional multidisciplinario que, ayudado por tecnologías de información y medios digitales, más su experticia y disciplina, gestionan para la ciudad mejores condiciones de movilidad y seguridad vial, con intervenciones de bajo costo y alto impacto.</p>
                                </li>
                                <li>
                                    <h4>Agentes De Tránsito Civiles</h4>
                                    <p>Grupo de empleados públicos investidos de autoridad como Agentes de Tránsito y Transporte vinculados a la entidad. Velan por el orden del flujo vehicular y peatonal en las vías públicas, mediante funciones preventivas, de asistencia técnica, de vigilancia, regulación y control de las normas de tránsito y transporte, enfatizando en la seguridad vial.</p>
                                    <p>Conoce más <a href="">aquí</a></p>
                                </li>
                                <li>
                                    <h4><a href="https://www.movilidadbogota.gov.co/web/ninos-primero" target="_blank" rel="noopener noreferrer">NIÑAS Y NIÑOS PRIMERO</a></h4>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-btn"></div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="controlTransito">
                    <div class="well">
                        <div class="descripcion">
                            <h3>Control de Tránsito</h3>
                            <p>Ejecuta estrategias y acciones de regulación y control del tránsito y del transporte con la finalidad de mejorar las condiciones de movilidad de los diferentes actores viales, y vigila el cumplimiento de la normatividad de tránsito y transporte en la ciudad.</p>
                            <p>Actualmente se cuenta con más de 1.000 uniformados de la Policía de Tránsito que a su vez ayudan con el control y operatividad en vía.</p>
                            <p>Esta subdirección tiene una iniciativa llamada <a href="https://www.movilidadbogota.gov.co/web/guias_de_gestion_y_control_de_transito_y_transporte">“Guías de Control y Gestión de Tránsito y Transporte”</a>. Se trata de una serie de documentos y material de apoyo que brinda herramientas y recomendaciones para mejorar las condiciones de movilidad de los diferentes actores viales.</p>
                            <p>La primera guía en publicarse es la <a href="https://www.movilidadbogota.gov.co/web/guias_de_gestion_y_control_de_transito_y_transporte">“Guía de Buenas prácticas de Gestión y Control de Tránsito y Transporte”</a>, en donde se sintetiza la información de:</p>
                            <ul>
                                <li>
                                    <p>Planes operativos: objetivos, alcance, criterios de priorización, programación, ejecución y seguimiento.</p>
                                </li>
                                <li>
                                    <p>Evaluación de operativos en vía apoyados con herramientas tecnológicas.</p>
                                </li>
                                <li>
                                    <p>Medios Técnicos y Tecnológicos.</p>
                                </li>
                                <li>
                                    <p>Buenas prácticas en los operativos de control en vía, haciendo especial énfasis en la seguridad vial.</p>
                                </li>
                            </ul>

                        </div>
                        <div class="footer-btn"></div>

                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="senalizacion">
                    <div class="well">
                        <div class="descripcion">
                            <h3>Señalización</h3>
                            <p>Ejecuta políticas, planes, programas y proyectos relacionados con elementos y dispositivos de regulación del tránsito que ayudan a informar y reorganizar el espacio para que los actores viales se muevan de forma segura.</p>
                            <p>Si necesitas informarnos de la necesidad de señalización en tu sector, puedes <a href="">contactarte</a> directamente con nosotros.</p>
                        </div>
                        <div class="footer-btn"></div>

                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="semaforizacion">
                    <div class="well">
                        <div class="descripcion">
                            <h3>Semaforización</h3>
                            <p>Adelanta el seguimiento y evaluación a la implementación de semaforización, aplicación de regulación semafórica y control del Sistema Semafórico Inteligente para la regulación del tránsito.</p>
                            <h4>Sistema de Semáforos Inteligente</h4>
                            <p>Sistema de manejo centralizado, moderno y con protocolos de comunicación abiertos que sirve para las mediciones directas del tránsito, buscando la optimización de los semáforos por medio de video detección en tiempo real.</p>

                        </div>
                        <div class="footer-btn"></div>

                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="pmts">
                    <div class="well">
                        <div class="descripcion">
                            <h3>Planes de Manejo de Tránsito (PMT)</h3>
                            <p>Equipo encargado de atender las solicitudes de Planes de Manejo de Tránsito (PMT) por la ejecución de intervenciones, obras o eventos en la ciudad de Bogotá D.C., para minimizar o mitigar su impacto en la movilidad.</p>
                            <p>La publicación de la autorización o no de los PMT por obras se realiza en los sitios web de la Entidad (<a href="https://www.movilidadbogota.gov.co/web/pmt">https://www.movilidadbogota.gov.co/web/pmt</a> o <a href="https://www.simur.gov.co/pmt">https://www.simur.gov.co/pmt</a>) y la respuesta a los PMT por eventos se da en las plataformas (SUGA y SUMA) o mediante respuesta remitida al contratista o peticionario. Así mismo, se realizan semanalmente la georreferenciación de los PMT autorizados, los cuales pueden ser consultados en el siguiente link:<br> <a href="http://movilidadbogota.maps.arcgis.com/apps/webappviewer/index.html?id=219e91e4397f4f8d99c4c1aaa66ba2c4">http://movilidadbogota.maps.arcgis.com/apps/webappviewer/index.html?id=219e91e4397f4f8d99c4c1aaa66ba2c4</a></p>
                            <p>Adicionalmente la Subdirección de Planes de Manejo de Tránsito (SPMT) efectúa el seguimiento de los PMT para comprobar la correcta implementación de los mismos, y verificar que para éstos, se promueva de manera segura la configuración de infraestructura destinada a peatones y ciclistas; así como las condiciones seguras de operación sobre el corredor y área de influencia de la obra y/o intervención.</p>
                        </div>
                        <div class="footer-btn"></div>

                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="agentes">
                    <div class="well">
                        <div class="descripcion">
                            <h3>Agentes de Tránsito Civiles</h3>
                            <p>Grupo de empleados públicos investidos de autoridad como Agentes de Tránsito y Transporte vinculados a la entidad. Velan por el orden del flujo vehicular y peatonal en las vías públicas, mediante funciones preventivas, de asistencia técnica, de vigilancia, regulación y control de las normas de tránsito y transporte, enfatizando en la seguridad vial.</p>
                            <p>Conoce más <a href="https://www.movilidadbogota.gov.co/web/agentesdetransitociviles">aquí</a></p>
                        </div>
                        <div class="footer-btn"></div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="bloque2">
        <div class="noticias">
            <div class="row">
                <div class="col-xs-12">
                    <div class="titulo-noticias">
                        <h3>noticias</h3>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <div class="thumbnail">
                        <div class="img-thumbnail">
                            <img class="img-responsive w-100" src="https://lh6.googleusercontent.com/YrKm_1qGJNws8JuQJot4X0340xrWAM3SxZHM-ljj7yBR_ddXIPkCjswazkEN4Svw2zP28C1Bn4mvy43yzUdxd8IPMFgRA5TdVlVy6EizC9KjruKUOhYLo0BzmQFgSL9xuhU9JUrkNy_igIa7vw" alt="...">
                        </div>
                        <div class="caption">
                            <div class="enc-caption">
                                <h3>Más de 100 mil vehículos se han beneficiado con el contraflujo de la Av. de Las Américas</h3>
                            </div>
                            <div class="parrafo-caption">
                                <p>Bogotá, 8 de junio de 2022 (@SectorMovilidad). En los últimos dos meses los conductores que a diario utilizan la Av. de Las Américas han notado como los tiempos de viaje han mejorado gracias a la habilitación de un carril adicional en la calzada norte entre las 5:30 a.m. y las 9:00 a.m. El contraflujo ha permitido aliviar la movilidad, descongestionar la vía y optimizar los tiempos de desplazamiento de los ciudadanos.</p>
                            </div>
                            <div class="footer-thumb"><a href="https://www.movilidadbogota.gov.co/web/noticia/mas_de_100_mil_vehiculos_se_han_beneficiado_con_el_contraflujo_de_la_av_de_las_americas" class="btn-cerrar" role="button">Ver Más</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <div class="thumbnail">
                        <div class="img-thumbnail">
                            <img class="img-responsive w-100" src="https://lh6.googleusercontent.com/CnIit7b08SjlvUlNan0do1DUVmbgHi8YLTJt0jxf3_6oCia0Rik2VrQVU92k3nd51XJOL_1rhYG_JjuHa0rPl4whSwb4pKkjXve8CL4vi79W41P_qkqRhotBzlp0Ebl21FyDAFA=s0" alt="...">
                        </div>
                        <div class="caption">
                            <div class="enc-caption">
                                <h3>Cerca del 50% de las señales de tránsito elevadas de Bogotá han sido actualizadas</h3>
                            </div>
                            <div class="parrafo-caption">
                                <p>Bogotá, 29 de septiembre de 2021 (@SectorMovilidad). En lo que va corrido del año, la Secretaría Distrital de Movilidad (SDM) ha actualizado cerca del 50% de las señales elevadas. <br> intervenciones que comenzaron en julio del 2020 y que se extenderán hasta diciembre de este año, tienen el objetivo de modernizar los tableros con información actual de sentidos viales y rutas de acceso a cada zona de la capital.</p>
                            </div>
                            <div class="footer-thumb"><a href="https://www.movilidadbogota.gov.co/web/noticia/cerca_del_50_de_las_senales_de_transito_elevadas_de_bogota_han_sido_actualizadas" class="btn-cerrar" role="button">Ver Más</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <div class="thumbnail">
                        <div class="img-thumbnail">
                            <img class="img-responsive w-100" src="https://lh6.googleusercontent.com/70w_R3UnypBR2ffQBA1kh_6g6iPS8xziGUC7F72Lh5fg0EAwm8XvztBi4vye_aqjcEeoXleMXdWmkwv-Vgi5KaXyzbr4JvldlP-_8aK5VPbAHffGdGU5fFzNBDuDxe7iQIScaEE=s0" alt="...">
                        </div>
                        <div class="caption">
                            <div class="enc-caption">
                                <h3>El 32% de los vehículos que transitan por Bogotá no tienen la Revisión Técnico-Mecánica</h3>
                            </div>
                            <div class="parrafo-caption">
                                <p>Bogotá, 6 de octubre de 2021 (@SectorMovilidad). La Secretaria Distrital de Movilidad hace un llamado a la ciudadanía para ponerse al día con el SOAT y la Revisión Técnico Mecánica, por esto, se lanza la campaña ”Juntos podemos salvar vidas, ponte al día” que busca sensibilizar a los conductores sobre la importancia de estar con la documentación vigente.</p>
                            </div>
                            <div class="footer-thumb"><a href="https://www.movilidadbogota.gov.co/web/noticia/el_32_de_los_vehiculos_que_transitan_por_bogota_no_tienen_la_revision_tecnico_mecanica" class="btn-cerrar" role="button">Ver Más</a></div>
                        </div>
                    </div>
                </div>

          

            </div>
        </div>
    </div>
    <div class='row videos'>
        <div class="col-xs-12">
            <div class=" logo-GeV1min">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-02-2022/logo_gev_1min.png" alt="Gerencia en Vía en 1 minuto">
            </div>
        </div>
        <div class='col-xs-12 col-sm-12 col-md-12'>
            <div class="videos-box">

                <div class="tab-content">
                    <div id="menu1" class="tab-pane fade  in active">
                        <div class="video">
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">

                                <iframe width="560" height="315" src="https://www.youtube.com/embed/iA-fP8eZu3Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div id="menu2" class="tab-pane fade">
                        <div class="video">
                            <!-- 16:9 aspect ratio -->

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/392OssQQ0IQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="box-botones">
                <ul class="nav nav-pills nav-justified">
                    <li class="active"><a data-toggle="pill" href="#menu1">Ver video: Revisión Técnico Mecánica</a></li>
                    <li><a data-toggle="pill" href="#menu2">Ver video: Señales Elevadas</a></li>
                </ul>
            </div>

        </div>
        <style>
            .noticias {
                margin-bottom: 20px;
            }

            .videos-box {
                padding: 0px 15px;
            }

            .box-botones {
                padding: 15px;
            }



            .nav-pills>li>a {
                background-color: rgba(255, 255, 255, 1) !important;
                color: rgba(31, 34, 62, 1) !important;
                font-size: 14px !important;
                border-radius: 0px !important;
                padding: 10px;
            }

            .nav-pills>li.active>a,
            .nav-pills>li.active>a:focus,
            .nav-pills>li.active>a:hover {
                background-color: rgba(190, 208, 0, 1) !important;
                color: rgba(31, 34, 62, 1) !important;
            }


            .logo-GeV1min {
                padding: 30px 30px 15px 30px;

            }

            .logo-GeV1min img {
                max-width: 300px;
                margin: auto;

            }
        </style>
    </div>
    <br>
    <div class="bloque3">
        <div class="row">
            <div class="col-xs-12">
                <div class="titulo-mapa">
                    <h3 class="text-center">Mapa</h3>
                </div>
            </div>
            <div class="col-xs-12">
                <iframe name="iframe-field_basico_iframe-70" id="iframe-field_basico_iframe-70" title="Mapa de Georeferencia" allow="accelerometer;autoplay;camera;encrypted-media;geolocation;gyroscope;microphone;payment;picture-in-picture" src="https://sig.simur.gov.co/VisorSIGSIMUR/" width="100%" height="500">
                    El navegador usado no soporta esta tecnología, puede seguir navegando sin inconveniente<a href="https://sig.simur.gov.co/VisorSIGSIMUR/"></a>
                </iframe>
            </div>
            <!-- <div class="col-xs-12">
                <p>Conoce los cierres de la ciudad en <a href="http://"> (LINK)</a></p>
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-11-2021/mapa-14-corredores-ajustado-v2.jpg" alt="Mapa">
            </div> -->
        </div>
    </div>
    <hr class="hr-v">
    <div class="bloque4">
        <div class="row rb4">
            <div class="col-xs-12 col-sm-8">
                <div class="footer-text">
                    <h3>Contáctanos</h3>
                    <br>
                    <dl>
                        <dt>
                            Registra tus Peticiones Quejas Reclamos y Sugerencias aquí:
                        </dt>
                        <dd>
                            <a href="http://www.movilidadbogota.gov.co/web/sdqs" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/sdqs</a>
                        </dd>
                        <br>
                        <dt>
                            Puntos de atención:
                        </dt>
                        <dd>
                            <a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion">https://www.movilidadbogota.gov.co/web/puntos_de_atencion</a>
                        </dd>
                        <br>
                        <dt>
                            Centro de Contacto de Movilidad:
                        </dt>
                        <dd>
                            <a href="tel:+6013649400"> (601) 364 -9400 opción 2</a>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="footer-img">
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-02-2022/logo_gev.png' alt='' title=''>
                </div>
            </div>
        </div>
        <style>
            .bloque4 {
                background: rgba(31, 34, 62, 1);
            }

            .bloque4 [class*='col-'] {
                margin: 0px;
                padding: 0px;
                border: 0;
                outline: 0;
                font-size: 100%;
                vertical-align: baseline;
            }

            .bloque4 .footer-text dl {
                padding-left: 10px;

            }

            .bloque4 .footer-text {
                color: #fff;
                padding: 20px 30px;
                background-color: #1f223e;
                background-repeat: no-repeat;
                background-position-x: right;
                background-position-y: 100px;
                background-size: contain;
                height: 240px;

            }

            .bloque4 .footer-text a {
                color: #fff;
                text-decoration: none;
                font-weight: 500;
            }

            .bloque4 .footer-text a:hover {
                color: #bed000;
                text-decoration: none;
            }

            .bloque4 .footer-img {
                background-color: #1f223e;
                height: 240px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 30px;
            }
        </style>


    </div>
</div>
<br>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- CSS -->
<style>
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
        line-height: 1 !important;
        max-width: 940px !important;

    }

    .seccion .glyphicon {
        color: rgba(190, 208, 0, 1);
    }

    .encabezado .tx1 {
        display: block;
        z-index: 1;
        position: absolute;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-02-2022/textura1-gev.png');
        background-repeat: no-repeat;
        background-size: 20%;
        top: -153;
        height: 40px;
    }


    .encabezado .carousel-control {
        opacity: 1 !important;
    }

    .bloque2 .thumbnail .caption h3 {
        font-size: 18px;
    }
</style>

<!-- Fin CSS -->


<!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type='text/css'>
    .seccion a {
        /* color: #bed000 !important; */
        font-weight: 700;

    }

    .w-100 {
        width: 100%;
    }

    .seccion {
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.7;
    }

    .i-carousel {
        background-color: #191C3A65;
        padding: 5px;
    }

    .s1 {
        padding: 1% 4% 0% 4%;
        font-size: 12px;
    }


    .seccion .bloque1 {
        padding: 10px 20px;
    }

    .seccion .bloque1 a {
        text-decoration: none;
        color: #1f223e;

    }

    .nav-tabs {
        width: 100%;
    }

    .s2 {
        background-color: #fff;
    }

    .s2 .nav-tabs li {
        width: 50%;
    }

    .s2 .nav>li>a {
        padding: 0px;
    }


    .s2 .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        border-bottom-color: #ddd !important;
        background-color: #f6f6f6 !important;
    }


    .videos {
        background-color: #1f223e;
    }

    .noticias .titulo-noticias {
        padding: 3%;
        background-color: #fff;

    }

    .noticias .titulo-noticias h3 {
        text-align: center;
        text-transform: uppercase;
        font-size: 20px;
        font-weight: 700;
        color: #1f223e;
    }

    .titulo-mapa h3 {
        text-align: center;
        text-transform: uppercase;
        font-size: 20px;
        font-weight: 700;
        color: #1f223e;
        margin: 0px;
        padding: 30px;
    }



    .gerencia-boton .gerencia-titulo h4 {
        border-bottom: solid 3px transparent;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: 700;
        text-align: center;
        line-height: 1.2 !important;
        margin: 5px;

    }

    .gerencia-boton:hover .gerencia-titulo h4 {
        color: #1f223e;
        border-bottom: solid 3px #1f223e;

    }

    .gerencia-titulo {
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        height: 50px;
        display: flex;
        align-items: center;
        word-break: break-word;
        justify-content: center;
    }

    .gerencia-titulo h4 {
        text-align: center;
        padding-bottom: 5px;
    }

    .collapse {
        transition: all 500ms ease-out;
    }

    .collapse .well {
        min-height: 20px;
        padding: 0px !important;
        margin: 10px !important;
        background-color: #fafafa;
        border: 1px solid #1f223e;
        border-radius: 4px;
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.08);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.08);
    }

    .descripcion h3 {
        font-size: 20px;
        font-weight: 700;
        text-align: center;
        line-height: 1.5;
        margin: 25px;
        text-transform: uppercase;
        color: rgba(31, 34, 62, 1);
    }

    .descripcion p {
        line-height: 1.4;
        text-align: justify;
    }

    .descripcion a {
        font-weight: bold;
    }

    .descripcion a:hover {
        color: #000;
        text-decoration: underline;
    }

    .descripcion h4 {
        font-weight: bold;
        text-transform: uppercase;
        /* font-size: calc(1vw + 0.15em); */
        color: #1f223e;
    }

    .footer-btn {
        text-align: center;
        border-top: solid 3px #bed000;
        padding-top: 20px;
    }

    .btn-cerrar {
        background-color: #1f223e;
        padding: 8px 30px;
        color: #bed000;
        border: solid 3px #1f223e;
        width: 120px;
        font-weight: 700;
        text-transform: uppercase;
        text-decoration: none !important;

    }

    .btn-cerrar:hover {
        background-color: #bed000;
        font-weight: 700;
        color: #1f223e;
        border: solid 3px #bed000;
    }

    .btn-cerrar:focus {
        color: rgba(255, 255, 255, 1);
    }

    .bloque2 .thumbnail {
        display: block;
        padding: 0px;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        /* border-radius: 4px; */
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out;
        text-align: center;
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.08);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.08);
        margin-left: 10px;
        margin-right: 10px;


    }


    .bloque2 .thumbnail .caption h3 {
        color: #1f223e;
        padding-bottom: 8px;

    }

    .bloque2 .thumbnail .caption p {
        color: #1f223e;
        padding-bottom: 8px;
    }

    .bloque2 .thumbnail .img-thumbnail {
        width: 100%;
        height: 210px;
        display: flex;
        padding: 0px;
    }

    .bloque2 .thumbnail .footer-thumb {
        padding: 15px;
        border-top: solid 3px #bed000;
        padding-top: 20px;

    }

    .bloque2 .thumbnail .footer-thumb a:focus {
        color: rgba(255, 255, 255, 1);

    }

    .bloque4 .footer {
        background-color: #1f223e;
        border-top: solid 10px #bed000;
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
        transform: scale(1.05);
        -moz-transform: scale(1.05);
        /* Firefox */
        -webkit-transform: scale(1.05);
        /* Chrome - Safari */
        -o-transform: scale(1.05);
        /* Opera */
        -ms-transform: scale(1.05);

    }


    .caption .parrafo-caption {
        display: flex;
        align-items: stretch;
        padding: 15px;
        justify-content: center;
        vertical-align: center;
        width: 100%;
        overflow: hidden;
        text-overflow: " ver más.";
        word-wrap: break-word;
        background-repeat: no-repeat;
        background-size: 200px;
        background-position: left top;
        text-align: justify;
        align-items: center;
    }

    .caption .parrafo-caption p {
        text-align: justify;
        padding: 0px !important;
        margin: 0px;

    }

    .caption .enc-caption {
        height: 150px;
        display: flex;
        justify-items: center;
        justify-content: center;
        flex-direction: column;
        border-bottom: solid 3px #bed000;
    }

    .s2 ol,
    .s2 ul {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .seccion .descripcion h4 {
        font-size: 16px;
    }

    .seccion .descripcion p {
        line-height: 1.7;
        font-size: 14px;
    }

    .seccion .descripcion a {
        color: #1f223e;
        font-weight: 700;
        word-wrap: break-word;
    }

    .seccion .descripcion a:hover {
        background-color: #bed000;

    }

    .gerencia-titulo {
        height: 40px;

    }

    .gerencia-titulo h4 {
        font-size: 14px;
        color: #1c2046;
        padding-bottom: 10px;
    }

    .seccion h4 {
        color: #1c2046;
    }

    .footer-text>h3:nth-child(1) {
        color: #bed000;
    }

    .rb4 {
        border-top: solid 4px #bed000;
        border-bottom: solid 10px #bed000;
    }

    .bloque4 .footer-text {
        word-break: break-word;
    }
</style>


<style>
    @media(max-width:767px) {

        .bloque2 .thumbnail .caption h3 {
            font-size: 18px;
            font-weight: 700;
        }

        .seccion {
            padding-right: 0px !important;
            padding-left: 0px !important;
        }

        .s1 .s1-p {
            font-size: 14px;
            line-height: 1.2;
        }


        .descripcion h3 {
            font-size: 18px;
            line-height: 1;
            margin: 20px;
        }

        .seccion .descripcion p {
            font-size: 14px;
            font-weight: normal;
            text-align: justify;
            line-height: 1.2;
            color: rgba(31, 34, 62, 1);
        }

        .s2 .descripcion ul>li {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .s2 .nav-tabs .gerencia-boton {
            padding: 10px;
        }

        .s2 .nav .gerencia-icono {
            height: 180px;
        }

        .caption .parrafo-caption {
            padding: 15px;
        }

        .bloque2 .thumbnail .caption p {
            font-size: 14px;
            font-weight: normal;
            text-align: justify;
            line-height: 1.2;
            color: rgba(31, 34, 62, 1);
        }

    }

    @media(min-width:768px) {


        .caption .parrafo-caption {
            height: 340px;
            align-items: top;
        }

        .bloque4 .footer-text {
            height: 270px;
            text-shadow: 2px #fff;
        }

        .bloque4 .footer-img {
            height: 270px;
        }

        .encabezado .logo {
            height: 151px;
        }

        .s1 {
            height: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .s1 .s1-p {
            padding: 40px 120px;
            font-size: 20px;

        }

        .s2 .nav .gerencia-icono {
            height: 100px;
        }

        .gerencia-boton .gerencia-titulo h4 {
            font-size: 16px;
        }

        .descripcion {
            padding: 20px;
        }

        .seccion .video {
            padding: 15px;
        }

        .box-botones ul>li {
            padding: 15px;
        }

        .s2 .nav-tabs li {
            width: 33.33%;
        }

        .bloque2 .thumbnail .img-thumbnail {
            height: 145px;
        }

        .caption .parrafo-caption {
            height: 400px;
        }

    }

    @media(min-width:992px) {

        .s2 .nav .gerencia-icono {
            height: 140px;
        }

        .bloque2 .thumbnail .img-thumbnail {
            height: 190px;
        }

        .caption .parrafo-caption {
            height: 320px;
        }

        .encabezado .logo {
            height: 180px;
        }

    }

    @media(min-width:1200px) {}
</style>