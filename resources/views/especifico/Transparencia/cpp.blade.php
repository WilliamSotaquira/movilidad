@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class="encabezado">
            <h3>Conoce, Propone y Prioriza</h3>
        </div>
        <div class="parrafos">
            <p>Bogotá es un gobierno de puertas abiertas comprometido con la transparencia y la lucha contra la corrupción. En el Distrito nos proponemos promover un camino hacia la integridad a partir de prácticas de gobierno abierto y de fomento de nuevos valores que transformen la relación entre la administración y la ciudadanía.</p>
            <p>Por eso, en esta página tendrás acceso a estrategias de transparencia, de participación y de colaboración, de manera que puedas conocer, proponer y priorizar soluciones a los retos de nuestra ciudad.</p>
        </div>
        <div class= 'row' > 
            <div class='col-xs-12 col-sm-10 col-sm-offset-1'>
            <div>
            <!-- collapsecpp -->
            <div class='panel-group ' id='accordioncpp' role='tablist ' aria-multiselectable='true'>

                <!-- collapseconoce -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='headingconoce'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordioncpp' href='#collapseconoce' aria-expanded='true' aria-controls='collapseconoce'>
                                Conoce
                            </a>
                        </h4>
                    </div>
                    <div id='collapseconoce' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingconoce'>
                        <div class='panel-body'>
                            <div class="box-botones">
                                <div>
                                    <p>Haz clic <a href="https://gobiernoabiertobogota.gov.co/#/transparencia">aquí</a> para conocer información clave sobre Bogotá y su gestión. Podrás encontrar recursos como las declaraciones de bienes y renta de nuestro secretario/a y subsecretario/a, las declaraciones de conflictos de interés de nuestro secretario/a y subsecretario/a; los datos abiertos del Distrito, así como un visor del avance de nuestro Plan de Desarrollo ¡y más! </p>
                                </div>
                                <div class="row">
                                    <div class='col-xs-12 col-sm-6 col-sm-offset-3'>
                                        <a href="https://gobiernoabiertobogota.gov.co/#/transparencia">
                                            <div class="btn-cpp">
                                                <p>Gobierno Abierto "Transparencia"</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /#fin conoce -->

                <!-- collapsepropone -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='headingpropone'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordioncpp' href='#collapsepropone' aria-expanded='true' aria-controls='collapsepropone'>
                                Propone
                            </a>
                        </h4>
                    </div>
                    <div id='collapsepropone' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingpropone'>
                        <div class='panel-body'>
                            <div class="box-botones">
                                <div>
                                    <p>Haz clic <a href="https://bogota.gov.co/sdqs/">aquí</a> para enviarnos propuestas de mejora sobre nuestra gestión y nuestros trámites. Nos aseguraremos de discutir estas sugerencias en las sesiones de nuestro Comité Institucional de Gestión y Desempeño, y te daremos respuesta sobre su viabilidad.</p>
                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-sm-offset-3'>
                                        <a href="https://bogota.gov.co/sdqs/">
                                            <div class="btn-cpp">
                                                <p>Bogotá Te Escucha</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <p>Consulta aquí el cronograma de sesiones de nuestro Comité.</p>
                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-sm-offset-3'>
                                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-03-2022/comites_2022_-_20221500001403.pdf">
                                            <div class="btn-cpp">
                                                <p>Cronograma del Comité de Gestión y Desempeño SDM</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <p>Cuando tus propuestas de mejora sean de competencia de más de una entidad, es posible que las discutamos también en los Comités Sectoriales e Intersectoriales que apliquen. En caso de que así sea, te avisaremos en la respuesta.</p>
                                    <p>¿No sabes cómo enviarnos sugerencias y propuestas de mejora? Consulta <a href="https://bogota.gov.co/sdqs/videos"> aquí un tutorial</a>.</p>
                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-sm-offset-3'>
                                        <a href="https://bogota.gov.co/sdqs/videos">
                                            <div class="btn-cpp">
                                                <p>Video tutorial de Bogotá Te Escucha</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <p>También puedes ingresar a LegalBog Participa <a href="https://legalbog.secretariajuridica.gov.co/regimen-legal-publico#/acto-admin-publico">aquí</a>. A través de LegalBog podrás <a href="https://www.secretariajuridica.gov.co/user/register?destination=/legalbog-participa-es-el-nuevo-portal-en-donde-se-alojaran-las-normas-del-distrito%23comment-form">registrarte</a> o <a href="https://www.secretariajuridica.gov.co/user/login?destination=/legalbog-participa-es-el-nuevo-portal-en-donde-se-alojaran-las-normas-del-distrito%23comment-form">ingresar</a> de forma anónima para conocer, comentar, sugerir y presentar propuestas alternativas frente a los proyectos de actos administrativos de contenido regulatorio que quieran expedir las diferentes entidades públicas del Distrito Capital y el (la) Alcalde(sa) Mayor.</p>
                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-sm-offset-3'>
                                        <a href="https://legalbog.secretariajuridica.gov.co/regimen-legal-publico#/acto-admin-publico">
                                            <div class="btn-cpp">
                                                <p>LegalBog</p>
                                            </div>
                                        </a>
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
                <!-- /#fin propone -->

                <!-- collapseprioriza -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='headingprioriza'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordioncpp' href='#collapseprioriza' aria-expanded='true' aria-controls='collapseprioriza'>
                                Prioriza
                            </a>
                        </h4>
                    </div>
                    <div id='collapseprioriza' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingprioriza'>
                        <div class='panel-body'>
                            <div class="box-botones">
                                <div>
                                    <p>Haz clic <a href="https://gobiernoabiertobogota.gov.co/#/participacion">aquí</a> para hacer parte de todas las estrategias de participación que tenemos. Podrás proponer tus propias causas ciudadanas, votar en los procesos electorales de las instancias locales, y decidir en qué se deben invertir los recursos de tu localidad a través de los presupuestos participativos.</p>
                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-sm-offset-3'>
                                        <a href="https://gobiernoabiertobogota.gov.co/#/participacion">
                                            <div class="btn-cpp">
                                                <p>Gobierno Abierto "Participa"</p>
                                            </div>
                                        </a>
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

    .s1 h3 {
        text-align: center;
        color: rgba(77, 84, 31, 1);
        margin: 0px;
        padding: 30px;
        border-bottom: solid 2px rgba(77, 84, 31, 1);
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


.s1 .panel-default > .panel-heading {
  /* color: #333; */
  /* background-color: #f5f5f5; */
  color: #fff !important;
  background-color: #4d541f !important;
}

</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->