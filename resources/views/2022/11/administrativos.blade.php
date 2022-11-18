@extends('welcome')
@section('contenido')

<!-- administrativo -->

<!-- Styles -->
<style type='text/css'>
    :root {
        --color-primario: #4c531e;
        --color-secundario: #879225;
        --color-terciario: #bed000;
        --color-gris: #e5e5e5;
        --color-gris-claro: #f5f5f5;
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

    .administrativo {
        max-width: 980px;
        margin: auto;
        word-break: break-word;
        word-wrap: break-word;
        font-size: 15px;
        font-weight: 500;
        text-align: left;
        line-height: 1.5;
        color: var(--color-negro);
    }

    .w-100 {
        width: 100%;
    }
</style>
<!-- End Styles -->

<!-- Set Wrapper -->
<div class='container-fluid administrativo'>
    <div class='box-wrp'>

        <!-- Sección head -->
        <div class='box-head'>
            <h3>Notificación, citación y comunicación de Actos Administrativos</h3>
            <hr>
            <p>La Subsecretaría de Política Sectorial hace público el aviso de notificación derecho de petición radicado 21268 de 2015 <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/sdm-sps-27490_27339_0.pdf" target="_blank" rel="noopener noreferrer"><b>Ver SDM SPS 27490</b></a></p>
        </div>
        <style>
            .box-head {
                grid-area: box-head;
            }

            .box-head h3 {
                /* font-size: 15px; */
                font-weight: 700;
                text-align: center;
                line-height: 1.5;
                color: var(--color-primario);
            }

            .box-head p {
                padding: 16px;
            }
        </style>

        <!-- Sección cards  -->
        <div class="box-cards">

            <div class="card">
                <div class="descripcion">
                    <h4>Dirección de Investigaciones Administrativas al Tránsito y Transporte</h4>
                    <p>La Dirección es la segunda instancia en los procesos relacionados con las investigaciones administrativas al transporte público y los procesos contravencionales por infracción a las normas de tránsito. A la vez se encarga de expedir los actos administrativos de declaratoria de abandono de los vehículos abandonados en los patios oficiales de la Secretaría Distrital de Movilidad, en el marco de la Ley 1730 de 2014, y los constitutivos del título ejecutivo derivado del servicio público de grúa y patios por la permanencia de los vehículos en los patios (Resolución No 345 de 2010).</p>
                </div>
                <div class="opciones">
                    <div class="boton">
                        <a href="https://www.movilidadbogota.gov.co/web/direccion_de_procesos_administrativos" target="_blank" rel="noopener noreferrer">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="descripcion">
                    <h4>Dirección Atención al Ciudadano</h4>
                    <p>Dirección se encarga de definir los lineamientos y orientaciones para la atención a la ciudadanía, asume integralmente la gerencia, control, supervisión y administración de los puntos y canales de atención al ciudadano. Así mismo, lidera la ejecución y evaluación de resultados de los cursos pedagógicos por infracciones de tránsito.</p>
                </div>
                <div class="opciones">
                    <div class="boton">
                        <a href="https://www.movilidadbogota.gov.co/web/direccion_atencion_al_ciudadano" target="_blank" rel="noopener noreferrer">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="descripcion">
                    <h4>Subdirección de Contravenciones</h4>
                    <p>Es la dependencia encargada de adelantar el proceso contravencional por infracción a las normas de tránsito.</p>
                </div>
                <div class="opciones">
                    <div class="boton">
                        <a href="https://www.movilidadbogota.gov.co/web/subdireccion_de_contravenciones" target="_blank" rel="noopener noreferrer">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="descripcion">
                    <h4>Dirección de Gestión de Cobro</h4>
                    <p>Es la dirección encargada de adelantar el cobro de las multas de transito y de transporte, mediante procesos de cobro persuasivo y de cobro coactivo como la emisión de mandamientos de pago</p>
                </div>
                <div class="opciones">
                    <div class="boton">
                        <a href="https://www.movilidadbogota.gov.co/web/direccion_de_gestion_de_cobro" target="_blank" rel="noopener noreferrer">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="descripcion">
                    <h4>Subdirección de Control e Investigaciones al Transporte Público</h4>
                    <p>Es la dependencia encargada de adelantar en primera instancia los trámites de desvinculación administrativa y los procesos por violación a las normas de transporte público.</p>
                </div>
                <div class="opciones">
                    <div class="boton">
                        <a href="https://www.movilidadbogota.gov.co/web/investigaciones_de_transporte_publico" target="_blank" rel="noopener noreferrer">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="descripcion">
                    <h4>Seguridad Vial y Comportamiento de Transito</h4>
                    <p>Es la dirección encargada de elaborar estudios y recomendaciones para fijar las políticas en materia de ordenamiento del tránsito y seguridad víal en la ciudad.</p>
                </div>
                <div class="opciones">
                    <div class="boton">
                        <a href="https://www.movilidadbogota.gov.co/web/seguridad_vial_y_comportamiento_de_transito" target="_blank" rel="noopener noreferrer">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="descripcion">
                    <h4>Dirección Asuntos Legales</h4>
                    <p>Dirección encargada de adelantar la representación judicial y extrajudicial de la Entidad, así como de Coordinar y responder por los procesos de selección contractual, celebración, ejecución y liquidación de contratos y convenios interadministrativos y de cooperación de la Secretaría.</p>
                </div>
                <div class="opciones">
                    <div class="boton">
                        <a href="https://www.movilidadbogota.gov.co/web/direccion_asuntos_legales" target="_blank" rel="noopener noreferrer">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="descripcion">
                    <h4>Estudios Sectoriales y de Servicio</h4>
                    <p>Dirección encargada de elaborar los estudios, conceptos e informes del sector, con el fin de armonizar los planes, programas y proyectos del sector Movilidad.</p>
                </div>
                <div class="opciones">
                    <div class="boton">
                        <a href="https://www.movilidadbogota.gov.co/web/estudios_sectoriales_y_servicio" target="_blank" rel="noopener noreferrer">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="descripcion">
                    <h4>Dirección de Transporte e Infraestructura</h4>
                    <p>La DTI adelanta las acciones requeridas en el ámbito del transporte, formula y elabora estudios, conceptos, planes, programas, proyectos, estrategias, regulaciones y lineamientos en materia de transporte público, privado y no motorizado, y su infraestructura, en concordancia con el Plan Maestro de Movilidad, el Plan de Ordenamiento Territorial, el Plan de Desarrollo Distrital y la normatividad vigente con el fin de apoyar la formulación y promoción de políticas del sector.</p>
                </div>
                <div class="opciones">
                    <div class="boton">
                        <a href="https://www.movilidadbogota.gov.co/web/DTI" target="_blank" rel="noopener noreferrer">Ver más</a>
                    </div>
                </div>
            </div>

            <style>
                .card {
                    display: grid;
                    row-gap: 16px;
                    grid-auto-flow: dense;
                    grid-template-columns: 1fr;
                    grid-template-rows: auto;
                    grid-template-areas:
                        'descripcion'
                        'opciones';
                    background-color: var(--color-gris-claro);
                    padding: 16px;
                    border-radius: 5px;
                    border: solid 1px var(--color-gris);
                }


                .card .descripcion {
                    grid-area: descripcion;
                }

                .card .descripcion h4 {
                    margin: 0px;
                    padding: 8px 0px 8px 0px;
                    /* font-size: 15px; */
                    font-weight: 700;
                    text-align: left;
                    line-height: 1.5;
                    color: var(--color-primario);
                }

                .card .descripcion p {
                    margin: 0px;
                    line-height: 1.3;
                }

                .card .opciones {
                    grid-area: opciones;
                }

                .card .boton {
                    text-align: center;
                    background-color: var(--color-primario);
                    padding: 8px 16px;
                    border-radius: 4px;
                    max-width: 200px;
                    margin: auto;
                }

                .card .boton a {
                    display: inline;
                    color: var(--color-blanco);
                    font-size: 15px;
                    font-weight: 700;
                    text-align: center;
                    line-height: 1.5;
                }

                .card .boton:hover {
                    background-color: var(--color-terciario);
                    -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0);
                    box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0);
                }

                .card .boton:hover a {
                    color: var(--color-negro);
                }

                .card .boton:focus-within,
                .card .boton:visited a:visited {
                    background-color: var(--color-secundario);
                    -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0);
                    box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0);
                    color: var(--color-fondo);
                }

                @media(min-width:768px) {}

                @media(min-width:992px) {
                    .box-cards .card {
                        grid-template-columns: 75% 25%;
                        grid-template-areas:
                            'descripcion opciones';
                    }

                    .card .opciones {
                        /* height: px; */
                        display: flex;
                        /* flex-direction: column; */
                        justify-content: center;
                        align-items: center;
                        width: auto;

                    }
                }
            </style>

        </div>
        <style>
            .box-wrp .box-cards {
                grid-area: box-cards;
                display: grid;
                gap: 16px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
            }
        </style>


    </div>
    <style>
        .box-wrp {
            display: grid;
            row-gap: 16px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'box-head'
                'box-cards';
            margin-bottom: 24px;
        }
    </style>
</div>
<!-- End Set Wrapper -->
