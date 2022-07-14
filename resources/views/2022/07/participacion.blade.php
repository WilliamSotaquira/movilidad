@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid participacion'>
    <div class='box-wrp'>
        <div class='box-head'>
            <h3 class="text-center"><strong>Participación Ciudadana</strong></h3>
        </div>
        <div class="box-definicion">
            <h4>De acuerdo a nuestro <strong><i>Plan Institucional de Participación</i></strong> nuestro objetivo es:</h4>
            <p>El objetivo general del presente PIP es <i>“Promover la incidencia de la participación ciudadana en las acciones, proyectos, programas, planes y políticas de la Secretaría Distrital de Movilidad, orientadas al desarrollo de iniciativas de movilidad segura, accesible, incluyente, sostenible y multimodal en el Distrito Capital.”</i></p>
        </div>
        <div class="box-estrategicos">
            <h4 class="text-center"><strong>Ejes Estratégicos del Plan Institucional de Participación</strong></h4>
            <br>
            <ul>
                <li>
                    <p><strong>EJE 1. GESTIÓN DEL CONOCIMIENTO</strong> Aportar herramientas y conocimientos a la ciudadanía, incentivando su participación de manera incidente, viable y efectiva en las políticas, programas y proyectos liderados por la Secretaría Distrital de Movilidad.</p>
                </li>
                <li>
                    <p><strong>EJE 2: MEDIACIÓN COMUNITARIA: GESTIÓN DE CONFLICTOS, RIESGOS SOCIALES Y HECHOS VICTIMIZANTES</strong> Gestionar los conflictos ocasionados por temas de movilidad, o que la afecten, así como los impactos negativos de la implementación, operaciones e infraestructura vial, y los hechos victimizantes de los siniestros viales identificados en el Distrito.</p>
                </li>
                <li>
                    <p><strong>EJE 3: GESTIÓN SOCIAL DE PROYECTOS</strong> Generar acciones que garanticen la inclusión de los procesos de gestión social en las fases de desarrollo del ciclo de programas y proyectos de tránsito, transporte y movilidad, operación e infraestructura vial del servicio de transporte público de pasajeros y transporte no motorizado a cargo de la SDM.</p>
                </li>
                <li>
                    <p><strong>EJE 4: RENDICIÓN DE CUENTAS</strong> Promover la transparencia de la gestión de la administración pública y lograr la adopción de los principios de Buen Gobierno, eficiencia, eficacia, transparencia y rendición de cuentas, en la cotidianidad de la gestión pública de la Secretaría Distrital de Movilidad.</p>
                </li>
                <li>
                    <p><strong>EJE 5: GESTIÓN SOCIAL DE LAS POLÍTICAS PÚBLICAS</strong> Incorporar los enfoques diferenciales, poblacionales, territoriales y de género en los procesos participativos, así como en los planes, programas y proyectos de la Secretaría Distrital de Movilidad, desde una perspectiva incluyente e intersectorial.</p>
                </li>
            </ul>
        </div>
        <div class="box-botones">
            <div class="pip">
                <div class='imagen'>
                    <a href="https://www.movilidadbogota.gov.co/web/transparencia/plan_institucional_de_participacion" target="_blank" rel="noopener noreferrer">
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-07-2022/pip_001.png' alt='Portada de el Plan Institucional de Participación' title='De clic aqui para ir al historico de Plan Institucional De Participación – PIP'>
                    </a>
                </div>
            </div>
            <div class="box-enlaces">
                <div class="enlaces">
                    <div>
                        <h3>Rendición de Cuentas Locales</h3>
                    </div>
                    <div>
                        <h3>Rendición de Cuentas Locales</h3>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Set Wrapper -->
        <style>
            .box-wrp {
                padding: 16px;
                display: grid;
                gap: 30px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    '';
            }

            .box-wrp ul>li {
                padding-top: 16px;
            }

            .box-botones {
                display: grid;
                /* gap: 10px; */
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'pip'
                    'enlaces';
            }

            .box-botones .pip {
                grid-area: pip;
            }

            .box-botones .box-enlaces {
                grid-area: enlaces;
            }

            .box-enlaces .enlaces {
                display: grid;
                gap: 16px;
                grid-auto-flow: dense;
                grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
                grid-template-rows: auto;
                grid-template-areas:
                    '';
            }
        </style>

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

            .participacion {
                max-width: 980px;
                word-wrap: break-word;
                font-family: 'Montserrat', sans-serif;
                font-size: 15px;
                font-weight: 500;
                text-align: justify;
                line-height: 1.4;
                color: rgba(25, 25, 25, 1);
                margin: 8px;
            }

            /*
    .participacion [class*='col-'] {
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

            @media(max-width:767px) {}

            @media(min-width:768px) {
                .box-botones {
                    grid-template-columns: 35% 65%;
                    grid-template-areas:
                        'pip enlaces';
                }
                .box-botones .pip{
                    padding: 20px;
                }
            }

            @media(min-width:992px) {}

            @media(min-width:1200px) {}
        </style>
        <!-- End Styles -->