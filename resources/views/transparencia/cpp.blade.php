@extends('welcome')
@section('title','cpp')
@section('contenido')

<!-- Set cpp -->
<div class="set-wrapper cpp">

    <!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
    <div class="container-fluid seccion">
        <div class="s1">
            <div class="encabezado">
                <h3>Conoce, Propone y Prioriza</h3>
            </div>

            <div class="parrafos">
                <p>Bogotá es un gobierno de puertas abiertas comprometido con la transparencia y la lucha contra la corrupción. En el Distrito nos proponemos promover un camino hacia la integridad a partir de prácticas de gobierno abierto y de fomento de nuevos valores que transformen la relación entre la administración y la ciudadanía.</p>

                <p>Por eso, en esta página tendrás acceso a estrategias de transparencia, de participación y de colaboración, de manera que puedas conocer, proponer y priorizar soluciones a los retos de nuestra ciudad.</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div>
                        <!-- collapsecpp -->
                        <div aria-multiselectable="true" class="panel-group " id="accordioncpp" role="tablist ">
                            <!-- collapseconoce -->
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingconoce" role="tab">
                                    <h4 class="panel-title"><a aria-controls="collapseconoce" aria-expanded="true" data-parent="#accordioncpp" data-toggle="collapse" href="#collapseconoce" role="button">Conoce </a></h4>
                                </div>

                                <div aria-labelledby="headingconoce" class="panel-collapse collapse" id="collapseconoce" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="box-botones">
                                            <div>
                                                <p>Haz clic <a href="https://bogota.gov.co/">aquí</a> para conocer información clave sobre Bogotá y su gestión. Podrás encontrar recursos como las <a href="https://bogota.gov.co/">declaraciones de bienes y renta de nuestra Secretaria</a> y las declaraciones de conflictos de interés de nuestra secretaria.</p>
                                                <p>Los datos abiertos del Distrito, así como un visor del <a href="https://asivaelplan.sdp.gov.co/">avance de nuestro Plan de Desarrollo</a> ¡y más! Encuéntralo en el siguiente botón</p>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                    <div class="btn-cpp">
                                                        <p><a href="https://gobiernoabiertobogota.gov.co/transparencia">Gobierno Abierto "Transparencia"</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin conoce --><!-- collapsepropone -->

                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingpropone" role="tab">
                                    <h4 class="panel-title"><a aria-controls="collapsepropone" aria-expanded="true" data-parent="#accordioncpp" data-toggle="collapse" href="#collapsepropone" role="button">Propone </a></h4>
                                </div>

                                <div aria-labelledby="headingpropone" class="panel-collapse collapse" id="collapsepropone" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="box-botones">
                                            <div>
                                                <p>Haz clic <a href="https://bogota.gov.co/sdqs/">aquí</a> para enviarnos propuestas de mejora sobre nuestra gestión y nuestros trámites. Nos aseguraremos de discutir estas sugerencias en las sesiones de nuestro Comité Institucional de Gestión y Desempeño, y te daremos respuesta sobre su viabilidad.</p>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                    <div class="btn-cpp">
                                                        <p><a href="https://bogota.gov.co/sdqs/">Bogotá Te Escucha</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <p>Consulta aquí el cronograma de sesiones de nuestro Comité.</p>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                    <div class="btn-cpp">
                                                        <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-06-2023/comites_institucionales_2023.pdf">Cronograma del Comité de Gestión y Desempeño SDM</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <p>Cuando tus propuestas de mejora sean de competencia de más de una entidad, es posible que las discutamos también en los Comités Sectoriales e Intersectoriales que apliquen. En caso de que así sea, te avisaremos en la respuesta.</p>

                                                <p>¿No sabes cómo enviarnos sugerencias y propuestas de mejora? Consulta <a href="https://bogota.gov.co/sdqs/videos"> aquí un tutorial</a>.</p>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                    <div class="btn-cpp">
                                                        <p><a href="https://bogota.gov.co/sdqs/videos">Video tutorial de Bogotá Te Escucha</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <p>También puedes ingresar a LegalBog Participa <a href="https://legalbog.secretariajuridica.gov.co/regimen-legal-publico#/acto-admin-publico">aquí.</a> A través de LegalBog podrás <a href="https://www.secretariajuridica.gov.co/user/register?destination=/legalbog-participa-es-el-nuevo-portal-en-donde-se-alojaran-las-normas-del-distrito%23comment-form">registrarte</a> o <a href="https://www.secretariajuridica.gov.co/user/login?destination=/legalbog-participa-es-el-nuevo-portal-en-donde-se-alojaran-las-normas-del-distrito%23comment-form">ingresar</a> de forma anónima para conocer, comentar, sugerir y presentar propuestas alternativas frente a los proyectos de actos administrativos de contenido regulatorio que quieran expedir las diferentes entidades públicas del Distrito Capital y el (la) Alcalde(sa) Mayor.</p>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                    <div class="btn-cpp">
                                                        <p><a href="https://legalbog.secretariajuridica.gov.co/regimen-legal-publico#/acto-admin-publico">LegalBog</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="row">
                                                    <div class="col-xs-12">&nbsp;
                                                        <p>Igualmente, podrás encontrar las instrucciones de navegación de la plataforma de LegalBog <a href="https://youtu.be/YMngjPHJx2s">aquí</a></p>

                                                        <div class="video">
                                                            <div class="embed-responsive embed-responsive-16by9"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/YMngjPHJx2s" title="YouTube video player" width="100%"></iframe></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <p>Gracias a esta herramienta podremos medir la incidencia de la participación en la producción normativa del Distrito, identificando los comentarios que contribuyan a su mejoramiento, y promoviendo un impacto democrático y participativo en Bogotá en el marco del gobierno abierto.</p>

                                                <p>¡Todos tus comentarios serán revisados y respondidos por la entidad responsable del proyecto de acto administrativo!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin propone --><!-- collapseprioriza -->

                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingprioriza" role="tab">
                                    <h4 class="panel-title"><a aria-controls="collapseprioriza" aria-expanded="true" data-parent="#accordioncpp" data-toggle="collapse" href="#collapseprioriza" role="button">Prioriza </a></h4>
                                </div>

                                <div aria-labelledby="headingprioriza" class="panel-collapse collapse" id="collapseprioriza" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="box-botones">
                                            <div>
                                                <p>Haz clic <a href="https://gobiernoabiertobogota.gov.co/participacion">aquí</a> para hacer parte de todas las estrategias de participación que tenemos. Podrás proponer tus propias causas ciudadanas, votar en los procesos electorales de las instancias locales, y decidir en qué se deben invertir los recursos de tu localidad a través de los presupuestos participativos.</p>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                    <div class="btn-cpp">
                                                        <p><a href="https://gobiernoabiertobogota.gov.co/participacion">Gobierno Abierto "Participa"</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /#fin prioriza -->
                        </div>
                        <!-- /#fin cpp -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ --><!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
    <style type="text/css">
        .field-item.even h2 {
            visibility: hidden;
            margin-top: -50px;
        }

        .region-content {
            padding: 0px;
            overflow: hidden;
        }

        .seccion {
            font-size: 14px !important;
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

        .s1 .encabezado h3 {
            text-align: center;
            color: rgba(77, 84, 31, 1);
            margin: 0px;
            padding: 30px;
            border-bottom: solid 2px rgba(77, 84, 31, 1);
            font-weight: 700;
        }

        .s1 .parrafos {
            padding: 30px;
        }

        .s1 .parrafos p {
            text-align: justify;
        }

        .box-botones {
            padding: 8px;
        }

        .box-botones .btn-cpp a {
            text-decoration: none !important;
            color: rgba(255, 255, 255, 1);
            text-align: center;
            margin: 0px;
        }

        .btn-cpp {
            background: #A6B517;
            padding: 15px 30px;
            transition: 0, 5s ease;
            margin: 20px;
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            border-radius: 3px;

        }

        .btn-cpp:hover {
            background: rgba(77, 84, 31, 1);
            padding: 15px 30px;

        }

        .box-botones .btn-cpp p {
            font-size: 14px;
            margin: 0px !important;
            text-align: center;
            color: #151515;
            font-weight: 700;
            text-transform: uppercase;

        }

        .btn-cpp:hover p {
            color: #fff;

        }

        .s1 .video {
            padding: 5px;
            background-color: #252525;
            margin: 5%;
        }

        .s1 .panel-default>.panel-heading {
            /* color: #333; */
            /* background-color: #f5f5f5; */
            color: #fff !important;
            background-color: #4d541f !important;
        }
    </style>
    <!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

</div>
<!-- Fin Set -->
