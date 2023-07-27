@extends('welcome')
@section('contenido')

<!-- calidad -->
<!-- Styles -->
<style type='text/css'>
    :root {
        --color-primario: #4c531e;
        --color-secundario: #879225;
        --color-terciario: #bed000;
        --color-gris: #e5e5e5;
        --color-blanco: #ffffff;
        --color-negro: #191919;
        --color-fondo: #333333;
    }

    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .w-100 {
        width: 100%;
    }

    .calidad {
        max-width: 980px;
        margin: auto;
        padding-bottom: 20px;
        word-break: break-word;
        word-wrap: break-word;
    }
</style>
<!-- End Styles -->

<!-- Set Wrapper -->
<div class='container-fluid calidad'>
    <div class='set-wrapper'>

        <style type="text/css">
            .h2,
            h2 {
                font-size: 30px;
                text-align: center;
                color: #6dcbd3 !important;
                font-weight: 600;
                max-width: 700px;
                margin: 0 auto;
                padding-bottom: 50px;
            }

            .panel-sgc,
            .panel-heading-sgc {
                border-color: #6dcbd3 !important;
            }

            .panel-heading-sgc {
                background-color: #6dcbd3 !important;
            }

            .panel-politica,
            .panel-heading-politica {
                border-color: #fecd64 !important;
            }

            .panel-heading-politica {
                background-color: #fecd64 !important;
            }

            .panel-objetivos,
            .panel-heading-objetivos {
                border-color: #f67839 !important;
            }

            .panel-heading-objetivos {
                background-color: #f67839 !important;
            }

            .panel-certificacion,
            .panel-heading-certificacion {
                border-color: #8e183e !important;
            }

            .panel-heading-certificacion {
                background-color: #8e183e !important;
            }

            .panel-beneficios,
            .panel-heading-beneficios {
                border-color: #155179 !important;
            }

            .panel-heading-beneficios {
                background-color: #155179 !important;
            }

            .sistema:focus {
                outline: none;
            }
        </style>
        <div class="imagen img-float">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-06-2023/calidad_230629_1165x189_002.png" alt="Logo del sistema de gestión de calidad" title="Logo del sistema de gestión de calidad">
        </div>
        <style>
            .img-float {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 2em 0em;
            }

            .img-float img {
                max-width: 600px;
            }
            @media(min-width:768px){
                .img-float{
                    margin: calc(32px +  1em);

                }
            }
        </style>
        <div class="row">
            <div class="col-sm-6">
                <p class="text-center"><img alt="" border="0" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2020/sistema-gestion-calidad_1.png" usemap="#Map"><map id="Map" name="Map"><area class="sistema" coords="14,134,120,180,211,114,192,1" data-parent="#accordion-SGC" data-toggle="collapse" href="#SGC" shape="poly"> <area class="sistema" coords="231,5,222,113,313,180,417,134" data-parent="#accordion-SGC" data-toggle="collapse" href="#Politica-Calidad" shape="poly"> <area class="sistema" coords="316,194,284,296,357,388,430,163" data-parent="#accordion-SGC" data-toggle="collapse" href="#Objetivos-SGC" shape="poly"> <area class="sistema" coords="161,307,273,306,332,409,97,403" data-parent="#accordion-SGC" data-toggle="collapse" href="#Certificacion-SGC" shape="poly"> <area class="sistema" coords="114,191,149,290,75,382,5,165" data-parent="#accordion-SGC" data-toggle="collapse" href="#Beneficios-SGC" shape="poly"></map></p>
            </div>

            <div class="col-sm-6">
                <div class="panel-group" id="accordion-SGC" style="">
                    <div class="panel panel-primary panel-sgc">
                        <div class="panel-heading panel-heading-sgc">
                            <h4 class="panel-title"><a aria-expanded="true" class="collapsed" data-parent="#accordion-SGC" data-toggle="collapse" href="#SGC">Sistema de Gestión de Calidad de la SDM</a></h4>
                        </div>

                        <div aria-expanded="true" class="panel-collapse collapse in" id="SGC" style="">
                            <div class="panel-body">
                                <p>Es una herramienta que le permite a la SDM gestionar los procesos y recursos requeridos para lograr los resultados deseados, el cumplimiento de sus objetivos y satisfacer las necesidades y expectativas de los usuarios o ciudadanos en el marco del mejoramiento continuo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary panel-politica">
                        <div class="panel-heading panel-heading-politica">
                            <h4 class="panel-title"><a aria-expanded="false" data-parent="#accordion-SGC" data-toggle="collapse" href="#Politica-Calidad">Política de Calidad</a></h4>
                        </div>

                        <div aria-expanded="false" class="panel-collapse collapse" id="Politica-Calidad" style="">
                            <div class="panel-body">
                                <p>Teniendo en cuenta el contexto organizacional de la Secretaría Distrital de Movilidad, la plataforma estratégica, la gestión de riesgos y oportunidades, así como los principios de gestión de la calidad, la siguiente es la política de la calidad de la Entidad, la cual proporciona el marco de referencia para el establecimiento de los objetivos de la calidad:</p>

                                <p><i>“La Secretaría Distrital de Movilidad orienta y lidera la formulación de las políticas y estrategias de movilidad, presta servicios y trámites eficientes, oportunos y de calidad, responde a los requisitos aplicables y gestiona la mejora continua, con el fin de aumentar la satisfacción de los ciudadanos”.</i></p>

                                <p>La política de la calidad está disponible para las partes interesadas pertinentes y se comunica a través de la página web de la entidad, la intranet, reuniones de información y sensibilización por procesos y generales.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary panel-objetivos">
                        <div class="panel-heading panel-heading-objetivos">
                            <h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-SGC" data-toggle="collapse" href="#Objetivos-SGC">Objetivos del Sistema de Gestión de la Calidad </a></h4>
                        </div>

                        <div aria-expanded="false" class="panel-collapse collapse" id="Objetivos-SGC" style="height: 0px;">
                            <div class="panel-body">
                                <ul>
                                    <li>Fortalecer la prestación de los servicios de la Secretaría Distrital de Movilidad que responda a la gestión de riesgos y oportunidades, la mejora continua, los recursos y los requisitos aplicables, con el fin de dar cumplimiento a la planeación estratégica y aumentar la satisfacción de los usuarios.</li>
                                    <li>Prestar trámites y servicios eficientes, oportunos y de calidad, con una gestión ambiental adecuada, soportados en tecnologías de la información y las comunicaciones.</li>
                                </ul>

                                <p>La SDM realiza la planificación, el seguimiento y medición de sus objetivos de la calidad a través de los Planes Operativos Anuales (POA).</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary panel-certificacion">
                        <div class="panel-heading panel-heading-certificacion">
                            <h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-SGC" data-toggle="collapse" href="#Certificacion-SGC">Certificación Sistema de Gestión de la Calidad</a></h4>
                        </div>

                        <div aria-expanded="false" class="panel-collapse collapse" id="Certificacion-SGC" style="height: 0px;">
                            <div class="panel-body">
                                <p>"El alcance para el Sistema de Gestión de la Calidad bajo la norma NTC ISO 9001:2015 es para el Diseño y prestación del servicios de cursos pedagógicos por infracción a las normas de tránsito, en las sedes Calle 13, 20 de julio, Américas, Suba, Fontibón y Paloquemao".</p>
                                <!-- <p><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2020/icontec-iso-9001.png" alt=""></p> -->

                                <p><img alt="" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2020/logo-gcc-iso-9001_0.jpg"></p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary panel-beneficios">
                        <div class="panel-heading panel-heading-beneficios">
                            <h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-SGC" data-toggle="collapse" href="#Beneficios-SGC">Beneficios del Sistema de Gestión de la Calidad de la SDM</a></h4>
                        </div>

                        <div aria-expanded="false" class="panel-collapse collapse" id="Beneficios-SGC" style="height: 0px;">
                            <div class="panel-body">
                                <ul>
                                    <li>Incrementa la satisfacción de los usuarios o ciudadanos</li>
                                    <li>Mejora la calidad de nuestros servicios</li>
                                    <li>Genera mayor eficiencia en nuestros procesos</li>
                                    <li>Mejora nuestro sistema de trabajo</li>
                                    <li>Incrementa la satisfacción y motivación de todos los que conforman la entidad</li>
                                    <li>Simplifica la interacción y comunicación entre las distintas dependencias de la entidad</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

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
                background-color: #4d541f;
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
                background-color: #4d541f;
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
                font-size: 15px;

            }

            .recuadro a {
                font-weight: 600;
                color: #4d541f;
                font-size: 1.1rem;
                text-align: center;
                line-height: 1.2;
                background-color: #f5f5f5;
                padding: 5px;
                font-size: 15px;

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
                background-color: #4d541f;
                padding: 9px 15px;
                text-decoration: none;
            }
        </style>
        <div class="s4">
            <div class="row">

                <div class="recuadro col-xs-6 col-sm-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-10-2022/btn1.png" alt="¿Cuáles son los beneficios de tener un SGC?">
                    <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-10-2022/solicitud_nuevas_piezas_sgc_pieza1-mailing.png" target="_blank" rel="noopener noreferrer" tabindex="1">¿Cuáles son los beneficios de tener un SGC?</a></h3>
                </div>
                <div class="recuadro col-xs-6 col-sm-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-10-2022/btn2.png" alt="¿Cómo puedo aportar al SGC?">
                    <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-10-2022/solicitud_nuevas_piezas_sgc_pieza2_mailing.png" target="_blank" rel="noopener noreferrer" tabindex="2">¿Cómo puedo aportar al SGC?</a></h3>
                </div>
                <div class="recuadro col-xs-6 col-sm-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-10-2022/btn3.png" alt="Impacto de no cumplir con los lineamientos del SGC">
                    <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-10-2022/03solicitud_nuevas_piezas_sgc_pieza3-mailing.png" target="_blank" rel="noopener noreferrer" tabindex="3">Impacto de no cumplir con los lineamientos del SGC</a></h3>
                </div>
                <div class="recuadro col-xs-6 col-sm-3">
                    <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-06-2023/calidad_230629_900x600_001.png" alt="Calidad es">
                    <h3 class="titulo"><a href="https://youtu.be/9gbqhfhQ2jo" target="_blank" rel="noopener noreferrer" tabindex="3">Calidad es</a></h3>
                </div>

            </div>
        </div>

    </div>

</div>
<br>
<!-- End Set Wrapper -->
<!-- End calidad  -->
