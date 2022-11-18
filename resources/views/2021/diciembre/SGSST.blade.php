@extends('welcome')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


<!-- Modal demo -->
<div class='modal fade' id='modalIvonVeloza' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-body'>
                <div class='foto'>
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/ivon_veloza.png' alt='Foto: demo' title='Foto: demo'>
                </div>
                <div class='texto'>
                    <h3>Ivon Veloza</h3>
                    <p>Ingeniera industrial, especialista en seguridad y prevención de riesgos profesionales, es la responsable del SG-SST, realiza la consolidación y análisis de indicadores del SGSST, planes de mejoramiento, gestión de los riesgos e informes a la alta dirección.</p>
                </div>
                <div class='sub-close'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal ZulmaPenha -->
<div class='modal fade' id='modalZulmaPenha' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-body'>
                <div class='foto'>
                    <div class='imagen'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/zulma_tatiana_pena.png' alt='Foto: ZulmaPenha' title='Foto: ZulmaPenha'>
                    </div>
                </div>
                <div class='texto'>
                    <h3>ZulmaPenha</h3>
                    <!-- <h4></h4> -->
                    <p>Profesional en seguridad y salud en el trabajo, apoya los temas relacionados a higiene y seguridad industrial, planes para la prevención y control de emergencias y el equipo de la Brigada de Emergencias.</p>
                </div>
                <div class='sub-close'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal JulioCastillo -->
<div class='modal fade' id='modalJulioCastillo' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-body'>
                <div class='foto'>
                    <div class='imagen'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/julio_cesar_castillo.png' alt='Foto: JulioCastillo' title='Foto: JulioCastillo'>
                    </div>
                </div>
                <div class='texto'>
                    <h3>Julio Cesar Castillo</h3>
                    <p>Ingeniero de producción industrial, especialista en seguridad, salud e higiene en el trabajo y en el equipo apoya los temas relacionados a la identificación de peligros, valoración de riesgos e implementación de controles, seguimiento a criterios de SST a contratistas y terceros.</p>
                </div>
                <div class='sub-close'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Valentina Corredor -->
<div class='modal fade' id='modalValentinaCorredor' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-body'>
                <div class='foto'>
                    <div class='imagen'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/valentina_corredor.png' alt='Foto: Valentina Corredor' title='Foto: Valentina Corredor'>
                    </div>
                </div>
                <div class='texto'>
                    <h3>Valentina Corredor</h3>
                    <p>Tecnóloga en seguridad y salud en el trabajo, apoya el programa de medicina preventiva e investigaciones de incidentes y accidentes de trabajo.</p>
                </div>
                <div class='sub-close'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Diana Herrera -->
<div class='modal fade' id='modalDianaHerrera' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-body'>
                <div class='foto'>
                    <div class='imagen'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/diana_herrera.png' alt='Foto: Diana Herrera' title='Foto: Diana Herrera'>
                    </div>
                </div>
                <div class='texto'>
                    <h3>Diana Herrera</h3>
                    <p>Técnica en administración de recursos humanos, apoya los temas relacionados a capacitación, asesores de la ARL e intermediarios y las actividades que se requieran para el cumplimiento de los objetivos del sistema.</p>
                </div>
                <div class='sub-close'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Emilse Payanene -->
<div class='modal fade' id='modalEmilsePayanene' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-body'>
                <div class='foto'>
                    <div class='imagen'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/emilse_payanene.png' alt='Foto: Emilse Payanene' title='Foto: Emilse Payanene'>
                    </div>
                </div>
                <div class='texto'>
                    <h3>Emilse Payanene</h3>
                    <p>Auxiliar de enfermería, apoya los temas relacionados a gestión documental, atención al punto de primeros auxilios de acuerdo a necesidad y las labores operativas que requiera el equipo.</p>
                </div>
                <div class='sub-close'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Fabiola Fandiño -->
<div class='modal fade' id='modalFabiolaFandinho' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-body'>
                <div class='foto'>
                    <div class='imagen'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/fabiola_fandino.png' alt='Foto: Fabiola Fandiño' title='Foto: Fabiola Fandiño'>
                    </div>
                </div>
                <div class='texto'>
                    <h3>Fabiola Fandiño</h3>
                    <p>Auxiliar de enfermería, en el equipo realiza la atención a los puntos de primeros auxilios, apoyo labores enfocadas al programa de medicina preventiva e inspecciones de seguridad.</p>
                </div>
                <div class='sub-close'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Jessica Mora -->
<div class='modal fade' id='modalJessicaMora' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-body'>
                <div class='foto'>
                    <div class='imagen'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/jessica_mora.png' alt='Foto: Jessica Mora' title='Foto: Jessica Mora'>
                    </div>
                </div>
                <div class='texto'>
                    <h3>Jessica Mora</h3>
                    <p>Auxiliar de enfermería, en el equipo realiza la atención a los puntos de primeros auxilios, apoyo labores enfocadas al programa de medicina preventiva e inspecciones de seguridad.</p>
                </div>
                <div class='sub-close'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Astrid Fuentes -->
<div class='modal fade' id='modalAstridFuentes' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-body'>
                <div class='foto'>
                    <div class='imagen'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/astrid_fuentes.png' alt='Foto: Astrid Fuentes' title='Foto: Astrid Fuentes'>
                    </div>
                </div>
                <div class='texto'>
                    <h3>Astrid Fuentes</h3>
                    <p>Técnico en auxiliar de enfermería, realiza la atención a los puntos de primeros auxilios, apoyo labores enfocadas al programa de medicina preventiva e inspecciones de seguridad.</p>
                </div>
                <div class='sub-close'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Juan Harvey Gómez -->
<div class='modal fade' id='modalJuanGomez' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-body'>
                <div class='foto'>
                    <div class='imagen'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/juan_harvey_gomez.png' alt='Foto: Juan Harvey Gómez' title='Foto: Juan Harvey Gómez'>
                    </div>
                </div>
                <div class='texto'>
                    <h3>Juan Harvey Gómez</h3>
                    <p>Psicólogo, especialista en gerencia en salud ocupacional, asesor de <strong>ARL Positiva</strong> y en el equipo apoya los temas relacionados con las estrategias para la intervención y promoción del riesgo psicosocial.</p>
                </div>
                <div class='sub-close'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Daires Guerrero -->
<div class='modal fade' id='modalDairesGuerrero' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-body'>
                <div class='foto'>
                    <div class='imagen'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/daires_guerrero.png' alt='Foto: Daires Guerrero' title='Foto: Daires Guerrero'>
                    </div>
                </div>
                <div class='texto'>
                    <h3>Daires Guerrero</h3>
                    <p>Fisioterapeuta, especialista en seguridad y salud en el trabajo, asesor de la <strong>ARL Positiva</strong> y apoya los temas relacionados con el desarrollo del sistema de vigilancia epidemiológica en desórdenes músculo esqueléticos, en la prevención y promoción del riesgo biomecánico.</p>
                </div>
                <div class='sub-close'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Sergio Rodríguez -->
<div class='modal fade' id='modalSergioRodriguez' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-body'>
                <div class='foto'>
                    <div class='imagen'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/sergio_rodriguez.png' alt='Foto: Sergio Rodríguez' title='Foto: Sergio Rodríguez'>
                    </div>
                </div>
                <div class='texto'>
                    <h3>Sergio Rodríguez</h3>
                    <p>Médico especialista en seguridad y salud en el trabajo, asesor de la ARL Positiva y en el equipo apoya los temas relacionados a seguimientos a condiciones de salud, estructuración de programas de salud laboral y actividades de promoción y prevención.</p>
                </div>
                <div class='sub-close'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Liliana León -->
<div class='modal fade' id='modalLilianaLeon' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-body'>
                <div class='foto'>
                    <div class='imagen'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/liliana_leon.png' alt='Foto: Liliana León' title='Foto: Liliana León'>
                    </div>
                </div>
                <div class='texto'>
                    <h3>Liliana León</h3>
                    <p>Ingeniera industrial, especialista en seguridad y salud en el trabajo, asesor de ARL Positiva y en el equipo apoya los temas relacionados a prevención de riesgos y criterios frente a la ISO 45001.</p>
                </div>
                <div class='sub-close'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-body {
        background-color: #0066cd;
        border-radius: 4px;
    }

    .box-modal {
        display: grid;
        gap: 8px;
        grid-auto-flow: dense;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        grid-template-areas:
            'foto'
            'texto'
            'sub-close';
    }

    @media(min-width:768px) {
        .box-modal {
            grid-template-columns: 35% 65%;
            grid-template-rows: auto;
            grid-template-areas:
                'foto texto'
                'foto sub-close';
        }
    }

    .foto {
        grid-area: foto;
        max-width: 300px;
        padding: 8px;
        margin: auto;
    }

    .foto img {
        border-radius: 4px;
    }

    .texto {
        grid-area: texto;
    }

    .texto h3 {
        font-size: 28px;
        font-weight: 700;
        text-align: center;
        line-height: 1.5;
        color: #fff;
        margin: 0px;
        /* padding: 32px 16px 0px 16px ; */
        -webkit-text-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        text-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
    }

    .texto p {
        margin: 16px 16px 16px 16px;
        padding: 16px;
        font-size: 16px 0px;
        font-weight: 500;
        text-align: center;
        line-height: 1.3;
        color: #fff;
        border-top: 1px solid #c5c5c5;
        border-bottom: 1px solid #c5c5c5;
    }

    .sub-close {
        grid-area: sub-close;
        text-align: center;
        margin-bottom: 16px;
        max-width: 30%;
        margin: auto;
    }

    .sub-close button {
        background-color: #fff;
        color: #252525;
        font-weight: 600;
    }

    .sub-close button:hover {
        background-color: #27A6CF;
        color: #f5f5f5;
    }
</style>

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
                        <li role="presentation" class="active"><a href="#tp_cuatro" aria-controls="tp_cuatro" role="tab" data-toggle="tab">Conoce al equipo SST</a></li>
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
                            <div class="sgsst-icono hidden-xs">
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
                            <div class="sgsst-icono hidden-xs">
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
                            <div class="sgsst-icono hidden-xs">
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
                            <div class="sgsst-icono hidden-xs">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_beneficio_0.png" alt="Beneficios">
                            </div>
                            <div class="sgsst-titulo">
                                <h4>Beneficios</h4>
                            </div>
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#equipo" aria-controls="equipo" role="tab" data-toggle="tab">
                        <div class="sgsst-boton">
                            <div class="sgsst-icono hidden-xs">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/sst_equipo.png" alt="Equipo SG-SST">
                            </div>
                            <div class="sgsst-titulo">
                                <h4>Conoce al equipo SST</h4>
                            </div>
                        </div>
                    </a>
                </li>

                <li role="presentation">
                    <a href="https://www.huelladeconfianza.com/certificado/f8b3vjdr-ce-elg1-3ngy-62d1ce5be7840/" target="_blank" rel="noopener noreferrer">
                        <div class="sgsst-boton">
                            <div class="sgsst-icono hidden-xs">
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/sst_certificacion_icontec.png" alt="Certificacion">
                            </div>
                            <div class="sgsst-titulo">
                                <h4>Certificación Icontec</h4>
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
                <div role="tabpanel" class="tab-pane fade" id="equipo">
                    <div class="box-tab">
                        <h4>Conoce al Equipo de Seguridad y Salud en el Trabajo</h4>
                        <p>Es el equipo que se encarga de cuidarnos, previniendo lesiones y manteniendo el bienestar físico, mental y social de todos los colaboradores.</p>
                        <div class="box-equipo">

                            <a data-toggle="modal" data-target="#modalIvonVeloza">
                                <div class="card-profile">
                                    <div class="foto-perfil ">
                                        <img class='img-responsive w-100 zoom' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/ivon_veloza.png' alt='Ivon Veloza' title='Ivon Veloza'>
                                    </div>
                                    <h4>Ivon Veloza</h4>
                                </div>
                            </a>

                            <a data-toggle="modal" data-target="#modalZulmaPenha">
                                <div class="card-profile">
                                    <div class="foto-perfil ">
                                        <img class='img-responsive w-100 zoom' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/zulma_tatiana_pena.png' alt='Zulma Tatiana Peña' title='Zulma Tatiana Peña'>
                                    </div>
                                    <h4>Zulma Tatiana Peña</h4>
                                </div>
                            </a>

                            <a data-toggle="modal" data-target="#modalJulioCastillo">
                                <div class="card-profile">
                                    <div class="foto-perfil ">
                                        <img class='img-responsive w-100 zoom' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/julio_cesar_castillo.png' alt='Julio Cesar Castillo' title='Julio Cesar Castillo'>
                                    </div>
                                    <h4>Julio Cesar Castillo</h4>
                                </div>
                            </a>

                            <a data-toggle="modal" data-target="#modalValentinaCorredor">
                                <div class="card-profile">
                                    <div class="foto-perfil ">
                                        <img class='img-responsive w-100 zoom' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/valentina_corredor.png' alt='Valentina Corredor' title='Valentina Corredor'>
                                    </div>
                                    <h4>Valentina Corredor</h4>
                                </div>
                            </a>

                            <a data-toggle="modal" data-target="#modalDianaHerrera">
                                <div class="card-profile">
                                    <div class="foto-perfil ">
                                        <img class='img-responsive w-100 zoom' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/diana_herrera.png' alt='Diana Herrera' title='Diana Herrera'>
                                    </div>
                                    <h4>Diana Herrera</h4>
                                </div>
                            </a>

                            <a data-toggle="modal" data-target="#modalEmilsePayanene">
                                <div class="card-profile">
                                    <div class="foto-perfil ">
                                        <img class='img-responsive w-100 zoom' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/emilse_payanene.png' alt='Emilse Payanene' title='Emilse Payanene'>
                                    </div>
                                    <h4>Emilse Payanene</h4>
                                </div>
                            </a>

                            <a data-toggle="modal" data-target="#modalFabiolaFandinho">
                                <div class="card-profile">
                                    <div class="foto-perfil ">
                                        <img class='img-responsive w-100 zoom' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/fabiola_fandino.png' alt='Fabiola Fandiño' title='Fabiola Fandiño'>
                                    </div>
                                    <h4>Fabiola Fandiño</h4>
                                </div>
                            </a>

                            <a data-toggle="modal" data-target="#modalJessicaMora">
                                <div class="card-profile">
                                    <div class="foto-perfil ">
                                        <img class='img-responsive w-100 zoom' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/jessica_mora.png' alt='Jessica Mora' title='Jessica Mora'>
                                    </div>
                                    <h4>Jessica Mora</h4>
                                </div>
                            </a>

                            <a data-toggle="modal" data-target="#modalAstridFuentes">
                                <div class="card-profile">
                                    <div class="foto-perfil ">
                                        <img class='img-responsive w-100 zoom' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/astrid_fuentes.png' alt='Astrid Fuentes' title='Astrid Fuentes'>
                                    </div>
                                    <h4>Astrid Fuentes</h4>
                                </div>
                            </a>

                            <a data-toggle="modal" data-target="#modalJuanGomez">
                                <div class="card-profile">
                                    <div class="foto-perfil">
                                        <img class='img-responsive w-100 zoom' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/juan_harvey_gomez.png' alt='Juan Harvey Gómez' title='Juan Harvey Gómez'>
                                    </div>
                                    <h4>Juan Harvey Gómez</h4>
                                </div>
                            </a>

                            <a data-toggle="modal" data-target="#modalDairesGuerrero">
                                <div class="card-profile">
                                    <div class="foto-perfil">
                                        <img class='img-responsive w-100 zoom' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/daires_guerrero.png' alt='Daires Guerrero' title='Daires Guerrero'>
                                    </div>
                                    <h4>Daires Guerrero</h4>
                                </div>
                            </a>

                            <a data-toggle="modal" data-target="#modalSergioRodriguez">
                                <div class="card-profile">
                                    <div class="foto-perfil">
                                        <img class='img-responsive w-100 zoom' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/sergio_rodriguez.png' alt='Sergio Rodríguez' title='Sergio Rodríguez'>
                                    </div>
                                    <h4>Sergio Rodríguez</h4>
                                </div>
                            </a>

                            <a data-toggle="modal" data-target="#modalLilianaLeon">
                                <div class="card-profile">
                                    <div class="foto-perfil">
                                        <img class='img-responsive w-100 zoom' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/liliana_leon.png' alt='Liliana León' title='Liliana León'>
                                    </div>
                                    <h4>Liliana León</h4>
                                </div>
                            </a>

                            <style>
                                .card-profile {
                                    display: grid;
                                    /* gap: 8px; */
                                    grid-auto-flow: dense;
                                    grid-template-columns: 1fr;
                                    grid-template-rows: auto;
                                    padding: 8px;
                                }

                                .card-profile .foto-perfil {
                                    /* margin: 16px 32px; */
                                    max-width: 250px;
                                    /* margin: auto; */
                                }

                                .card-profile .foto-perfil img {
                                    border-radius: 4px;
                                }

                                .card-profile h4 {
                                    margin: 0px;
                                    /* border-bottom: none !important; */
                                    padding-bottom: 0px;
                                    margin: 8px;
                                    transition: all ease-in 0.3s;
                                }

                                .card-profile:hover h4 {
                                    padding-top: 8px;
                                    border-bottom: solid 3px #0066cd !important;
                                    margin-bottom: -1px !important;
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
                                    -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                                    box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                                    transform: scale(1.05);
                                    -moz-transform: scale(1.05);
                                    /* Firefox */
                                    -webkit-transform: scale(1.05);
                                    /* Chrome - Safari */
                                    -o-transform: scale(1.05);
                                    /* Opera */
                                    -ms-transform: scale(1.05);

                                }

                                /* IE9 */

                                @media(min-width:768px) {
                                    .card-profile {
                                        grid-template-columns: 1fr;
                                    }
                                }

                                @media(min-width:992px) {}
                            </style>

                        </div>
                        <style>
                            .box-equipo {
                                display: grid;
                                gap: 32px;
                                grid-auto-flow: dense;
                                grid-template-columns: repeat(2, 1fr);
                                grid-template-rows: auto;
                            }

                            @media(min-width:768px) {
                                .box-equipo {
                                    grid-template-columns: repeat(4, 1fr);
                                    grid-template-rows: auto;
                                }
                            }

                            @media(min-width:992px) {}
                        </style>
                        <div class="contacto">
                            <p class="">Para comunicarte con ellos puedes escribir al correo <a href="mailto:sst@movilidadbogota.gov.co">sst@movilidadbogota.gov.co</a></p>
                        </div>
                        <style>
                            .box-tab .contacto p {
                                text-align: left !important;
                                word-break: break-word;
                                word-wrap: break-word;
                            }
                        </style>

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
        font-size: 14px !important;

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
        /* font-size: 1rem; */
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
        width: 25%;
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

    .ol-docs li {
        padding-bottom: 10px;
    }

    .ol-docs li a {
        color: #252525;
        text-decoration: none
    }

    .ol-docs li a:hover {
        color: #A25FA4;
    }
</style>
<style>
    @media(max-width:767px) {
        .tab-box .nav-tabs>li {
            width: 100%;
            background-color: #27A6CF;
        }
    }

    @media(min-width:768px) {


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
            /* width: 25%; */
            width: 16.66667%;

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
            font-size: 14px;
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
