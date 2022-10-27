@extends('welcome')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class="encabezado">
            <div class='row'>
                <div class="col-xs-12 col-sm-4 pr0">
                    <!-- <div class="col-sm-4 hidden-xs"> -->
                    <div class="logo">
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_seguridad_y_salud_0.png' alt='Encabezado - Sistema de Gestión de la Seguridad y Salud en el Trabajo – SGSST' title='Encabezado - Sistema de Gestión de la Seguridad y Salud en el Trabajo – SGSST'>
                    </div>
                </div>
                <div class='col-xs-12 col-sm-8 pl0'>
                    <div class="txt-encabezado">
                        <div class="parrafo-encabezado">
                            <h3>Sistema de Gestión de la Seguridad y Salud en el Trabajo – <strong>SGSST</strong></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s2">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <hr>
                <div class="parrafo">
                    <h3>¿QUÉ ES SEGURIDAD Y SALUD EN EL TRABAJO?</h3>
                    <p>La Seguridad y Salud en el Trabajo (SST) es la disciplina que trata de la prevención de las lesiones y enfermedades causadas por las condiciones de trabajo, y de la protección y promoción de la salud de los trabajadores. Tiene por objeto mejorar las condiciones y el medio ambiente de trabajo, así como la salud en el trabajo, que conlleva la promoción y el mantenimiento del bienestar físico, mental y social de los trabajadores en todas las ocupaciones.</p>
                </div>
                <div class="parrafo">
                    <h3>¿Qué es el SGSST?</h3>
                    <p>El sistema de Gestión de la Seguridad y Salud en el Trabajo SGSST consiste en el desarrollo de un proceso lógico y por etapas, <strong>basado en la mejora continua</strong> y que incluye la política, la organización, la planificación, la aplicación, la evaluación, la auditoría y las acciones de mejora <strong>con el objetivo de anticipar, reconocer, evaluar y controlar los riesgos que puedan afectar la seguridad y la salud en el trabajo.</strong></p>
                </div>
                <hr>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="tab-box">

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="tp_uno">
                            <div class="pane-box">
                                <video controls='' style='width: 100%;'>
                                    <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-12-2021/braile_alta_v2.mp4' type='video/mp4'>
                                </video>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tp_dos">
                            <div class="pane-box">
                                <video controls='' style='width: 100%;'>
                                    <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-12-2021/dia_de_la_emergencia_-_2021.mp4' type='video/mp4'>
                                </video>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tp_tres">
                            <div class="pane-box">
                                <video controls='' style='width: 100%;'>
                                    <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-12-2021/video_vacunacion.mp4' type='video/mp4'>
                                </video>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade in active" id="tp_cuatro">
                            <div class="pane-box">
                                <video controls='' style='width: 100%;'>
                                    <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-10-2022/subtitulado_sst.mp4' type='video/mp4'>
                                </video>
                            </div>
                        </div>
                    </div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tp_cuatro" aria-controls="tp_cuatro" role="tab" data-toggle="tab">¿Cuál es la labor del equipo de SST?</a></li>
                        <li role="presentation"><a href="#tp_uno" aria-controls="tp_uno" role="tab" data-toggle="tab">Señalética en Braille </a></li>
                        <li role="presentation"><a href="#tp_dos" aria-controls="tp_dos" role="tab" data-toggle="tab">Día de la emergencia</a></li>
                        <li role="presentation"><a href="#tp_tres" aria-controls="tp_tres" role="tab" data-toggle="tab">Importancia de vacunarse</a></li>
                    </ul>

                </div>

                <hr>
            </div>
        </div>
    </div>

    <div class="s3">
        <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#politica" aria-controls="politica" role="tab" data-toggle="tab">
                        <div class="sgsst-boton">
                            <div class="sgsst-icono hidden-xs zoom">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_politica_0.png" alt="Política">
                            </div>
                            <div class="sgsst-titulo">
                                <h4>Política</h4>
                            </div>
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#objetivos" aria-controls="objetivos" role="tab" data-toggle="tab">
                        <div class="sgsst-boton">
                            <div class="sgsst-icono hidden-xs zoom">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_objetivo_0.png" alt="Objetivos">
                            </div>
                            <div class="sgsst-titulo">
                                <h4>Objetivos</h4>
                            </div>
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#alcance" aria-controls="alcance" role="tab" data-toggle="tab">
                        <div class="sgsst-boton">
                            <div class="sgsst-icono hidden-xs zoom">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_alcance_0.png" alt="Alcance">
                            </div>
                            <div class="sgsst-titulo">
                                <h4>Alcance</h4>
                            </div>
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#beneficios" aria-controls="beneficios" role="tab" data-toggle="tab">
                        <div class="sgsst-boton">
                            <div class="sgsst-icono hidden-xs zoom">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_beneficio_0.png" alt="Beneficios">
                            </div>
                            <div class="sgsst-titulo">
                                <h4>Beneficios</h4>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="politica">
                    <div class="box-tab">
                        <h4>Política de Seguridad y Salud en el Trabajo de la SDM</h4>
                        <div class="box-tab-img">
                            <div class="row">
                                <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-12-2021/_jrg0650.webp" alt="">
                                </div>
                            </div>
                            <div class="box-tab-i">
                                <i>Foto: Secretaría Distrital de Movilidad</i>
                            </div>
                        </div>
                        <p>De acuerdo con el Decreto 672 de 2018, la Secretaría Distrital de Movilidad tiene por objeto “Orientar y liderar la formulación de las políticas del Sistema de Movilidad para atender los requerimientos de desplazamiento de pasajeros y de carga en la zona urbana, tanto vehicular como peatonal y de su expansión en el área rural del Distrito Capital en el marco de la interconexión del Distrito Capital con la red de ciudades de la región central, con el país y con el exterior”.</p>
                        <p>Desde esta perspectiva y en armonía con el plan estratégico, la Secretaría Distrital de Movilidad se compromete a proporcionar lugares de trabajo seguros y saludables, a proteger la seguridad y salud de todos sus colaboradores(as), independiente de su forma de contratación o vinculación, incluyendo a los contratistas y empresas tercerizadas, en sus diferentes sedes, a eliminar los peligros y reducir los riesgos para la Seguridad y Salud en el Trabajo mediante la implementación y la mejora continua del Sistema de Gestión de la Seguridad y Salud en el Trabajo.</p>
                        <p>La alta dirección de la SDM, lidera y respalda la implementación del Sistema de Gestión de Seguridad y Salud en el Trabajo, mediante la asignación de los recursos necesarios para la prevención de lesiones y deterioro de la salud mediante la identificación de los peligros, evaluación y valoración de riesgos, estableciendo los respectivos controles, dando cumplimiento a la normatividad vigente aplicable en materia de riesgos laborales y otros requisitos y mediante la consulta y la participación de los trabajadores, y sus representantes.</p>
                        <p>La presente política se mantendrá documentada, será revisada y actualizada si es necesario con una frecuencia mínima anual o cuando las condiciones organizacionales o legislativas lo ameriten, será socializada y estará disponible a todos sus grupos de interés a través de los mecanismos de comunicación que tiene la entidad.</p>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="objetivos">
                    <div class="box-tab">
                        <h4>Objetivos SGSST</h4>
                        <div class="box-tab-img">
                            <div class="row">
                                <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-12-2021/_jrg7869.webp" alt="">
                                </div>
                            </div>
                            <div class="box-tab-i">
                                <i>Foto: Secretaría Distrital de Movilidad</i>
                            </div>
                        </div>
                        <ol>
                            <li>Identificar continua y sistemáticamente los peligros, evaluar, valorar los riesgos en SST y determinar los controles operacionales para su eliminación o mitigación.</li>
                            <li>Prevenir lesiones y deterioro de la salud relacionados con el trabajo a los (as) colaboradores (as) proporcionando lugares de trabajo seguros y saludables, favoreciendo en todo momento su consulta y participación y la de sus representantes.</li>
                            <li>Cumplir la normatividad nacional vigente en materia de riesgos laborales y de otra índole, teniendo en cuenta los requisitos aplicables a la Secretaría.</li>
                            <li>Definir e implementar planes y estrategias para el mejoramiento continuo de las condiciones de salud y seguridad en el trabajo.</li>
                        </ol>

                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="alcance">
                    <div class="box-tab">
                        <h4>Alcance del Sistema de Gestión SST</h4>
                        <div class="box-tab-img">
                            <div class="row">
                                <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-12-2021/jr1_4421.webp" alt="">
                                </div>
                            </div>
                            <div class="box-tab-i">
                                <i>Foto: Secretaría Distrital de Movilidad</i>
                            </div>
                        </div>
                        <p>El Sistema Gestión de la Seguridad y Salud en el Trabajo SG - SST, aplica a todas las actividades de la Secretaría Distrital de Movilidad, todas sus sedes y centros de trabajo y todos sus trabajadores, independiente de su forma de, contratación o vinculación, incluyendo los contratistas y subcontratistas y las partes interesadas. De igual manera, cobija al personal que desarrolle Teletrabajo y Trabajo remoto.</p>
                        <br>
                        <h4>Alcance de la Certificación de la Norma ISO 45001:2018</h4>
                        <p>El alcance para el Sistema de Gestión SST bajo la norma ISO 45001:2018 aplica a los procesos administrativos y operativos de las sedes Calle 13 y Paloquemao.</p>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="beneficios">
                    <div class="box-tab">
                        <h4>Beneficios SGSST</h4>
                        <div class="box-tab-img">
                            <div class="row">
                                <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-12-2021/_jrg2184.webp" alt="">
                                </div>
                            </div>
                            <div class="box-tab-i">
                                <i>Foto: Secretaría Distrital de Movilidad</i>
                            </div>
                        </div>
                        <ul>
                            <li>Proteger a los colaboradores(as) de accidentes y enfermedades laborales.</li>
                            <li>Ayudar a la Entidad a proporcionar un ambiente de trabajo seguro, tanto para colaboradores, como para visitantes y ciudadanos, a través del control de factores que puedan causar lesiones y/o enfermedades.</li>
                            <li>Promueve la participación de los colaboradores a la hora de identificar los peligros, eliminar o reducir los riesgos mediante la aplicación de controles integrados al Sistema de gestión.</li>
                            <li>Disminución del ausentismo laboral.</li>
                            <li>Mejoras en la productividad.</li>
                            <li>Promoción de estilo y hábitos de vida saludable.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <hr>
    <div class="s4">
        <div class="row">

            <div class="recuadro col-xs-6 col-sm-3 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-12-2021/sgsst1.webp" alt="Rendición de cuentas SGSST">
                <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/rendicion_de_cuentas_interna_sdm" target="_blank" rel="noopener noreferrer" tabindex="1">Rendición de cuentas SGSST</a></h3>
            </div>
            <div class="recuadro col-xs-6 col-sm-3 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-12-2021/sgsst2.webp" alt="Matriz de identificación de peligros, evaluación y valoración de riesgos">
                <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-12-2021/pa02-pr14-f01_matriz_de_identificacion_de_peligros_sdm_-_julio-2021.pdf" target="_blank" rel="noopener noreferrer" tabindex="2">Matriz de identificación de peligros, evaluación y valoración de riesgos</a></h3>
            </div>
            <div class="recuadro col-xs-6 col-sm-3 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-12-2021/sgsst3.webp" alt="Reglamento de higiene y seguridad industrial">
                <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-12-2021/pa02-rg01_reglamento_de_higiene_y_seguridad_industrial_version_1.0_de_01-09-2021.pdf" target="_blank" rel="noopener noreferrer" tabindex="3">Reglamento de higiene y seguridad industrial</a></h3>
            </div>
            <div class="recuadro col-xs-6 col-sm-3 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-12-2021/sgsst4.webp" alt="Protocolos de Bioseguridad">
                <h3 class="titulo"><a aria-controls="collapseAP" aria-expanded="false" data-toggle="collapse" href="#collapseAP" role="button" tabindex="4">Protocolos de Bioseguridad</a></h3>
            </div>
        </div>
    </div>
    <hr>
    <div class="s5">
        <!-- Seccion  Audiencia pública-->

        <div class="collapse" id="collapseAP">
            <div class="well well-docs">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <!-- Accordion -->
                        <div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">
                            <div class="panel panel-default">
                                <!-- <div class="panel-heading  p-dc" id="headingAP" role="tab">
                                                    <h4 class="panel-title"><a aria-controls="collapseAP" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseAP" role="button">Audiencia pública</a></h4>
                                                </div> -->
                                <div aria-labelledby="headingAP" class="panel-collapse collapse in" id="collapseAP" role="tabpanel">
                                    <div class="panel-body">
                                        <ol class="ol-docs" type="i">

                                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-12-2021/resolucion_sdm_53233_de_14-06-2021.pdf" target="_blank" rel="noopener noreferrer">RESOLUCIÓN SDM 53233 DE 14-06-2021 (Por la cual se adopta el nuevo Protocolo de Bioseguridad para la Prevención, Control y Reporte por Exposición al CONVID-19)</a></li>
                                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-12-2021/anexo_1._protocolo_especifico_de_autocuidado_sdm_version_1.0_de_21-06-2021.pdf" target="_blank" rel="noopener noreferrer">ANEXO 1. Protocolo especifico de autocuidado SDM </a></li>
                                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-12-2021/anexo_2._protocolo_limpiezadesinfeccion_y_manejo_de_residuos_sdm_version_1.0_de_21-06-2021.pdf" target="_blank" rel="noopener noreferrer">ANEXO 2. Protocolo limpieza, desinfección y manejo de residuos SDM </a></li>
                                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-12-2021/anexo_3._ingreso_a_la_entidad_salida_y_regreso_a_casa_sdm_version_1.0_de_21-06-2021.pdf" target="_blank" rel="noopener noreferrer">ANEXO 3. Ingreso a la entidad, salida y regreso a casa SDM </a></li>
                                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-12-2021/anexo_4._protocolo_medidas_de_prevencion_para_el_trabajo_en_campo_sdm_version_1.0_de_21-06-2021.pdf" target="_blank" rel="noopener noreferrer">ANEXO 4. Protocolo medidas de prevención para el trabajo en campo SDM </a></li>
                                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-12-2021/anexo_5._protocolo_reporte_de_casos_relacionados_a_enfermedad_respiratoria_aguda_era_sdm_version_1.0_de_21-06-2021.pdf" target="_blank" rel="noopener noreferrer">ANEXO 5. Protocolo reporte de casos relacionados a enfermedad respiratoria aguda ERA SDM </a></li>

                                        </ol>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- End Accordion -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Seccion  -->
    </div>


</div>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type='text/css'>
    .field-name-title h2 {
        visibility: hidden;
        /* margin-top: -180px; */
        height: 0px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .seccion {
        max-width: 940px;
        font-family: 'Sora', sans-serif;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_textura_azul_0.png');
        font-size: 14px;
    }

    .seccion .s1,
    .seccion .s2,
    .seccion .s3,
    .seccion .s4 {
        font-size: 13px !important;

    }

    /* .seccion [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        vertical-align: baseline;
    } */

    .w-100 {
        width: 100%;
    }

    .s1 .encabezado .logo {
        height: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .s1 .encabezado .logo img {
        width: 230px;
        padding: 8px;

    }

    .s1 .encabezado .txt-encabezado {
        height: 150px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        text-align: center;
        background-color: #A25FA4;
        border-top: solid 4px #27A6CF;
        border-bottom: solid 10px #27A6CF;
    }

    .s1 .encabezado .parrafo-encabezado {
        background-color: #27A6CF;
        width: 80%;
        padding: 8px;
    }

    .s1 .parrafo-encabezado h3 {
        font-size: 1.4rem;
        font-weight: 700;
        color: #fff;
    }


    .s2 .parrafo {
        padding: 10px 20px;
    }

    .s2 .parrafo h3 {
        text-align: center;
        font-weight: 700;
        font-size: 1.2rem;
        padding: 8px;
    }

    .s2 .parrafo p {
        text-align: justify;
        line-height: 1.2;
        font-size: 1rem;
    }

    .s2 .img-s2 {
        padding: 25px;
    }
</style>
<style>
    .nav-tabs {
        width: 100%;
    }

    .s3 .nav-tabs>li {
        width: 50%;
    }

    .sgsst-boton {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        /* padding: 15px; */
    }

    .sgsst-boton .sgsst-titulo h4 {
        border-bottom: solid 3px transparent;
        font-size: 1.1rem;
        color: #0066cd;

    }

    .sgsst-boton:hover .sgsst-titulo h4 {
        color: #27A6CF;
        border-bottom: solid 3px #27A6CF;

    }

    .sgsst-icono {
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .sgsst-icono img {
        /* padding: 1em; */
        width: 65px;
    }

    .sgsst-titulo {
        text-align: center;
        font-family: 'Sora', sans-serif;
        height: 50px;
        /* margin: 10px; */
        display: flex;
        align-items: center;
        word-break: break-word;
        justify-content: center;
    }

    .sgsst-titulo h4 {
        text-align: center;
        padding-bottom: 5px;
    }

    .s3 .nav>li>a {
        padding: 0px;
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        background-color: #f5f5f5 !important;
    }

    .nav-tabs>li>a {
        border-radius: 4px 4px 4px 4px;
    }

    .s3 .box-tab {
        background-color: #f5f5f5;
        padding: 5vw;
    }

    .s3 .box-tab h4 {
        font-size: 1.2rem;
        text-align: center;
        border-bottom: solid 2px #35353550;
    }

    .s3 .box-tab p {
        text-align: justify;
    }

    .box-tab-img {
        padding: 30px;
    }

    .box-tab-i {
        text-align: center;
        margin: 8px;
        font-size: 1rem;
    }

    .box-tab ol>li,
    .box-tab ul>li {
        margin-bottom: 10px;
    }
</style>

<style>
    .recuadro {
        position: relative;
        min-height: 50px;
        background-color: #A25FA4;
        background-clip: content-box;
        color: #fff;
        margin-bottom: 15px;

    }

    .recuadro:hover {
        position: relative;
        margin-bottom: 15px;
        min-height: 50px;
        background-color: #27A6CF;
        background-clip: content-box;
        color: #fff;
    }

    .recuadro img {
        width: 100%;
        vertical-align: middle;
        border-style: none;
        box-shadow: 0px 0px 16px #00000050;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .titulo {
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        align-items: end;
        justify-content: center;
        padding: 15px;
        right: 10px;
        left: 10px;
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .recuadro:hover .titulo {
        background-color: #27A6CF;
        margin: 0px 15px;
        right: 0px;
        left: 0px;
        justify-content: center;
        align-items: center;
    }



    .recuadro h3 {
        font-family: 'Sora', sans-serif;
        font-weight: 500;
        color: #0066cd;
    }

    .recuadro a {
        font-weight: 700;
        color: #fff;
        font-size: 1.1rem;
        text-align: center;
        line-height: 1;
        background-color: #A25FA4;
        padding: 5px;
    }

    .recuadro a:focus {
        color: #fff;
    }

    .recuadro:hover a {
        font-weight: 700;
        color: #fff;
        /* font-size: 12px; */
        text-align: center;
        line-height: 1;
        background-color: #27A6CF;
        padding: 9px 15px;
        text-decoration: none;
    }
</style>
<style>
    .tab-box {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .tab-box .nav-tabs>li {
        width:25%;
        background-color: #27A6CF;
    }

    .tab-box .nav-tabs>li a {
        color: #252525;
        font-size: 1.1rem;

    }

    .tab-box .nav-tabs>li>a {
        text-align: center;
        border-radius: 0px !important;
    }

    .tab-box .nav-tabs {
        border-bottom: none;
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        cursor: pointer;
    }


    .tab-box .nav-tabs>li.active>a {
        background-color: #A25FA4 !important;
        color: #151515 !important;
        font-weight: 700;
    }


    .tab-box .nav>li:hover>a {
        background-color: #fff !important;
        color
    }
    .ol-docs li{
        padding-bottom: 10px;
    }
    .ol-docs li a{
        color: #252525;
        text-decoration: none
    }
    .ol-docs li a:hover{
        color: #A25FA4;
    }
</style>
<style>
    @media(max-width:767px) {}

    @media(min-width:768px) {

        .seccion .s1,
        .seccion .s2,
        .seccion .s3,
        .seccion .s4 {
            /* font-size: 14px; */
        }

        .pr0 {
            padding-right: 0px !important;
        }

        .pl0 {
            padding-left: 0px !important;

        }

        .s1 .encabezado .logo {
            height: 150px;
        }

        .s1 .encabezado .logo img {
            width: 150px;
        }

        .parrafo-encabezado h3 {
            /* font-size: 2em; */
        }

        .s2 .img-s2 {
            height: 450px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .s3 .nav-tabs>li {
            width: 25%;
        }

        .sgsst-icono {
            padding: 10px;
        }

        .s3 .box-tab h4 {
            /* font-size: 1.5em; */
            padding-bottom: 12px;
        }


        .s1 .parrafo-encabezado h3 {
            font-size: 1.8rem;
        }

        .s2 .parrafo h3 {
            font-size: 1.4rem;
        }

        .s2 .parrafo p {
            line-height: 1.4;
            font-size: 1.2rem;
        }


        .seccion .s1,
        .seccion .s2,
        .seccion .s3,
        .seccion .s4 {
            font-size: 15px !important;
        }


        .sgsst-boton .sgsst-titulo h4 {
            font-size: 1.4rem;
        }

        .s3 .box-tab h4 {
            font-size: 1.6rem;
        }

        .recuadro a {
            font-size: 1.3rem;
            line-height: 1.3;
            font-family: sora;
        }


        .tab-box {
            height: 550px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }


        .s3 .box-tab {
            padding: 3vw 5vw;
        }



    }

    @media(min-width:992px) {


        .tab-box {
            height: 450px;
        }

    }

    @media(min-width:1200px) {}
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
