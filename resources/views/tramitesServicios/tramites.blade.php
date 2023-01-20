@extends('welcome')
@section('contenido')

<!-- tramites -->

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

        --color-vus-ppal: #20223E;
        --color-vus-scnd: #BED000;
        --color-vus-terc: #F9FDFF;
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

    .tramites {
        max-width: 980px;
        margin: auto;
        padding-bottom: 20px;
        word-break: break-word;
        word-wrap: break-word;
        font-size: 16px;
    }

    .tramites a {
        text-decoration: underline !important;
    }
</style>
<!-- End Styles -->

<!-- Set Wrapper -->
<div class='container-fluid tramites'>
    <div class='set-wrapper'>


        <!-- Sección box head -->
        <div class="box-head">
            <div class="title title-ppal title-h2">
                <h3>Tramites</h3>
            </div>
            <hr>
            <div class="paragraph ph-ppal">
                <p>Conozca los horarios y puntos de atención que la Secretaría Distrital de Movilidad tiene disponibles para los ciudadanos y partes interesadas que requieran realizar alguno de los trámites y servicios que presta la Entidad.</p>
            </div>
        </div>
        <style>
            .set-wrapper .box-head {
                grid-area: box-head;
                padding-bottom: 24px;
            }

            .box-head .title-ppal h3 {
                text-align: center;
                font-weight: 500;
                font-size: 2em;
                color: var(--color-primario);
            }

            .box-head .ph-ppal p {
                font-size: 16px;
                font-family: sans-serif;
                text-align: center;
                margin-top: 16px;
                margin-bottom: 16px;
            }
        </style>

        <!-- Sección box body -->
        <div class="box-body">

            <!-- Cursos Pedagógicos -->
            <div class="card-large">
                <div class="card-l-image">
                    <a href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/curso-sobre-normas-de-transito-sdm-37156-2">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-01-2023/recurso_2.png" alt="Icono Silueta de persona enseñando">
                    </a>
                </div>
                <div class="card-l-body">
                    <h4 class="media-heading">Cursos Pedagógicos por Infracción a las Normas de Tránsito</h4>
                    <p>Promover en los asistentes la participación, reflexión y sensibilización frente a los cambios de comportamiento y hábitos en la vía.</p>
                </div>
                <div class="card-l-link">
                    <a class="link" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/curso-sobre-normas-de-transito-sdm-37156-2" target="_blank" rel="noopener noreferrer">Ir a Cursos Pedagógicos por <br>Infracción a las Normas de Tránsito</a>
                </div>
            </div>

            <!-- Orden de Entrega de Vehículo Inmovilizado -->
            <div class="card-large">
                <div class="card-l-image">
                    <a href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/orden-de-entrega-de-vehiculo-inmovilizado-sdm-37092">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-01-2023/recurso_3_0.png" alt="Icono una mano haciendo entrega de llaves a otra">
                    </a>
                </div>
                <div class="card-l-body">
                    <h4 class="media-heading">Orden de Entrega de Vehículo Inmovilizado</h4>
                    <p>Retirar el vehículo del parqueadero de patios, que por infracciones de tránsito fue inmovilizado.</p>
                </div>
                <div class="card-l-link">
                    <a class="link" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/orden-de-entrega-de-vehiculo-inmovilizado-sdm-37092" target="_blank" rel="noopener noreferrer">Ir a salida de patios</a>
                </div>
            </div>

            <!-- Excepción Pico y Placa -->
            <div class="card-large">
                <div class="card-l-image">
                    <a href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/inscripcion-o-autorizacion-para-la-circulacion-vial-sdm">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-01-2023/recurso_4_0.png" alt="Icono placa de vehículo">
                    </a>
                </div>
                <div class="card-l-body">
                    <h4 class="media-heading">Inscripción o autorización para la circulación vial (exepciones pico y placa)</h4>
                    <p>Condiciones para el registro de los vehículos exceptuados para la circulación vial.</p>
                </div>
                <div class="card-l-link">
                    <a class="link" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/inscripcion-o-autorizacion-para-la-circulacion-vial-sdm" target="_blank" rel="noopener noreferrer">Ir a inscripción o autorización para la circulación vial</a>
                </div>
            </div>

            <!-- Facilidades de pago para los deudores de obligaciones no tributarias -->
            <div class="card-large">
                <div class="card-l-image">
                    <a href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/facilidades-de-pago-para-los-deudores-de-obligaciones-no-tributarias-sdm-37027" target="_blank" rel="noopener noreferrer">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-01-2023/recurso_5_0.png" alt="Icono calculadora, lápiz y papel">
                    </a>
                </div>
                <div class="card-l-body">
                    <h4 class="media-heading">Facilidades de pago para los deudores de obligaciones no tributarias</h4>
                    <p>Obtener por el deudor o por un tercero a su nombre, facilidades para el pago de las obligaciones no tributarias.</p>
                </div>
                <div class="card-l-link">
                    <a class="link" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/facilidades-de-pago-para-los-deudores-de-obligaciones-no-tributarias-sdm-37027" target="_blank" rel="noopener noreferrer">Ir a Facilidades de pago para los deudores de obligaciones no tributarias</a>
                </div>
            </div>

            <!-- Devolución y/o compensación de pagos en exceso y de lo no debido por conceptos tributarios y/o no tributario -->
            <div class="card-large">
                <div class="card-l-image">
                    <a href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/devolucion-yo-compensacion-de-pagos-en-exceso-y-de-lo-no-debido-por-conceptos-no-tributarios-sdm" target="_blank" rel="noopener noreferrer">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-01-2023/recurso_6_0.png" alt="Icono manos intercambiando dinero">
                    </a>
                </div>
                <div class="card-l-body">
                    <h4 class="media-heading">Devolución y/o compensación de pagos en exceso y de lo no debido por conceptos tributarios y/o no tributario</h4>
                    <p>Obtener la devolución y/o compensación de pagos en exceso o lo no debido, si ha cancelado sumas mayores por concepto de obligaciones no tributarias o ha efectuado pagos sin que exista causa legal para hacer exigible su cumplimiento.</p>
                </div>
                <div class="card-l-link">
                    <a class="link" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/devolucion-yo-compensacion-de-pagos-en-exceso-y-de-lo-no-debido-por-conceptos-no-tributarios-sdm" target="_blank" rel="noopener noreferrer">Ir a Devolución y/o compensación de pagos en exceso y de lo no debido por conceptos tributarios y/o no tributario</a>
                </div>
            </div>

            <!-- Plan de manejo de tránsito - PMT -->
            <div class="card-large">
                <div class="card-l-image">
                    <a href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/plan-de-manejo-de-transito-sdm" target="_blank" rel="noopener noreferrer">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-01-2023/recurso_7_0.png" alt="Icono valla de control de tránsito">
                    </a>
                </div>
                <div class="card-l-body">
                    <h4 class="media-heading">Plan de manejo de tránsito - PMT</h4>
                    <p>Mitigar el impacto generado por afectación del espacio público (rural o urbano) en Bogotá y zonas aledañas; que modifique la movilidad y seguridad vial, con el propósito de brindar un ambiente seguro, ordenado, ágil y cómodo a los peatones, ciclistas, pasajeros, conductores, personal de obra, asistentes a eventos y vecinos del lugar, en cumplimiento de la normatividad vigente.</p>
                </div>
                <div class="card-l-link">
                    <a class="link" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/plan-de-manejo-de-transito-sdm" target="_blank" rel="noopener noreferrer">Ir a Plan de manejo de tránsito - PMT</a>
                </div>
            </div>

            <!-- Suministro de copias de accidentes de tránsito -->
            <div class="card-large">
                <div class="card-l-image">
                    <a href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/Entrega-de-las-copias-de-informes-policiales-de-accidente-de-transito-sdm-43014-opa" target="_blank" rel="noopener noreferrer">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-01-2023/recurso_12.png" alt="Icono mano sujetando documento">
                    </a>
                </div>
                <div class="card-l-body">
                    <h4 class="media-heading">Suministro de copias de accidentes de tránsito</h4>
                    <p>Obtener el informe de accidente en un plano descriptivo de los por menores de un accidente de tránsito bien sea simple, con lesiones o muertos, realizado en el sitio de los hechos por el agente de policía, con el fin de atender los requerimientos de personas naturales y/o jurídicas que son radicadas en la entidad.</p>
                </div>
                <div class="card-l-link">
                    <a class="link" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/Entrega-de-las-copias-de-informes-policiales-de-accidente-de-transito-sdm-43014-opa" target="_blank" rel="noopener noreferrer">Ir a Suministro de copias de accidentes de tránsito</a>
                </div>
            </div>

            <!-- Revisión y aprobación de estudios de tránsito -->
            <div class="card-large">
                <div class="card-l-image">
                    <a href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/revision-y-aprobacion-de-estudios-de-transito-sdm" target="_blank" rel="noopener noreferrer">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-01-2023/recurso_8_0.png" alt="Icono diagrama de barras bajo la lupa">
                    </a>
                </div>
                <div class="card-l-body">
                    <h4 class="media-heading">Revisión y aprobación de estudios de tránsito</h4>
                    <p>Obtener el concepto de viabilidad del Estudio de Tránsito por parte de la Secretaría Distrital de Movilidad, para ejecutar el proyecto urbanístico aprobado en la Licencia de Construcción o para dar continuidad al trámite del instrumento de gestión que curse ante la Secretaría Distrital de Planeación.</p>
                </div>
                <div class="card-l-link">
                    <a class="link" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/revision-y-aprobacion-de-estudios-de-transito-sdm" target="_blank" rel="noopener noreferrer">Ir a Revisión y aprobación de estudios de tránsito</a>
                </div>
            </div>

            <!-- Permiso de circulación para carga extrapesada y/o extradimensionada e indivisible -->
            <div class="card-large">
                <div class="card-l-image">
                    <a href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/permiso-de-circulacion-para-carga-extrapesada-yo-extradimensionada-sdm" target="_blank" rel="noopener noreferrer">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-01-2023/recurso_9_0.png" alt="Icono vehículo de carga">
                    </a>
                </div>
                <div class="card-l-body">
                    <h4 class="media-heading">Permiso de circulación para carga extrapesada y/o extradimensionada e indivisible</h4>
                    <p>Autorización para movilizar por la red vial, maquinaria o carga con dimensiones extremas de longitud, anchura y altura o que exceda la carrocería, los límites de peso y que por sus características no pueda ser fraccionada o desarmada.</p>
                </div>
                <div class="card-l-link">
                    <a class="link" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/permiso-de-circulacion-para-carga-extrapesada-yo-extradimensionada-sdm" target="_blank" rel="noopener noreferrer">Ir a permiso de circulación para carga extrapesada y/o extradimensionada e indivisible</a>
                </div>
            </div>

            <!-- Registro ruta escolar -->
            <div class="card-large">
                <div class="card-l-image">
                    <a href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/registro-de-ruta-de-transporte-escolar-sdm" target="_blank" rel="noopener noreferrer">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-01-2023/recurso_10_0.png" alt="Icono bus">
                    </a>
                </div>
                <div class="card-l-body">
                    <h4 class="media-heading">Registro ruta escolar</h4>
                    <p>Permitir que los establecimientos educativos (públicos y/o privados) ubicados dentro del perímetro capital, presenten el informe anual de transporte escolar, con el objetivo de adelantar acciones de control de tipo administrativo y operativo sobre vehículos de servicio público especial, que presenten transporte escolar.</p>
                </div>
                <div class="card-l-link">
                    <a class="link" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/registro-de-ruta-de-transporte-escolar-sdm" target="_blank" rel="noopener noreferrer">Ir a Registro ruta escolar</a>
                </div>
            </div>

            <!-- Emisión concepto a técnicas de señalización -->
            <div class="card-large">
                <div class="card-l-image">
                    <a href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/emision-de-concepto-propuestas-tecnicas-de-disenos-de-senalizacion" target="_blank" rel="noopener noreferrer">
                        <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-01-2023/recurso_11_0.png" alt="Icono velocidad máxima 30km/h">
                    </a>
                </div>
                <div class="card-l-body">
                    <h4 class="media-heading">Emisión concepto a técnicas de señalización</h4>
                    <p>Efectuar el trámite de emisión de conceptos a propuestas de proyectos de diseños de señalización, frente a las solicitudes presentadas ante la Secretaría Distrital de Movilidad.</p>
                </div>
                <div class="card-l-link">
                    <a class="link" href="https://bogota.gov.co/servicios/guia-de-tramites-y-servicios/emision-de-concepto-propuestas-tecnicas-de-disenos-de-senalizacion" target="_blank" rel="noopener noreferrer">Ir a Emisión concepto a técnicas de señalización</a>
                </div>
            </div>

        </div>
        <style>
            .box-body {
                display: grid;
                row-gap: 16px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
            }

            .box-body .card-large {
                display: grid;
                gap: 8px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                border-bottom: solid 1px var(--color-primario);
                grid-template-areas:
                    'body'
                    'link';
            }

            .card-large .card-l-image {
                position: absolute;
                visibility: hidden;
            }

            .card-l-image img {
                max-width: 80px;
            }

            .card-large .card-l-body {
                grid-area: body;
                padding: 8px 8px 0 8px;
            }

            .card-large .card-l-body h4 {
                font-size: 20px;
                text-align: left;
                line-height: 1.2;
                color: var(--color-vus-ppal);
                font-weight: 700;
                margin-bottom: 8px;

            }

            .card-large .card-l-body p {
                margin-bottom: 0px;
            }

            .card-large .card-l-link {
                grid-area: link;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: start;
                text-overflow: ellipsis;
                margin: 8px;
                margin-bottom: 16px;

            }

            .link::before {
                content: '\e144';
                font-family: 'Glyphicons Halflings';
                display: inline-block;
                width: 15px;
                height: 15px;
                margin-right: 10px;
            }

            @media(min-width:768px) {

                .box-body .card-large {
                    padding: 8px;
                    display: grid;
                    gap: 16px;
                    grid-auto-flow: dense;
                    grid-template-columns: 10% 55% 35%;
                    grid-template-rows: auto;
                    border-bottom: solid 1px var(--color-primario);
                    grid-template-areas:
                        'image body link';
                }

                .card-large .card-l-image {
                    position: relative;
                    visibility: visible;
                    grid-area: image;
                    padding: 16px;
                    /* height: px; */
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }

                .card-large .card-l-body p {
                    margin-bottom: 32px;
                }
            }
        </style>




    </div>
</div>
<br>

<!-- End Set Wrapper -->
<!-- End tramites  -->
