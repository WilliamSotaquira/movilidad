@extends('welcome')
@section('contenido')

<!-- invetigacionesTP -->

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

    .invetigacionesTP {
        max-width: 980px;
        margin: auto;
        word-break: break-word;
        word-wrap: break-word;
    }

    .w-100 {
        width: 100%;
    }
</style>
<!-- End Styles -->

<!-- Set Wrapper -->
<div class='container-fluid invetigacionesTP'>
    <div class='box-wrp'>

        <!-- Sección head -->
        <div class='box-head'>
            <h3>Dirección de Control e Investigaciones al Transporte Público</h3>
            <hr>
            <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim nobis labore minus omnis? Minus laudantium saepe quisquam quibusdam. Maxime modi voluptatibus ipsum magnam tenetur alias sapiente necessitatibus minus beatae accusantium!</p> -->
        </div>
        <style>
            .box-wrp .box-head {
                grid-area: box-head;
            }

            .box-head h3 {
                /* font-size: 15px; */
                font-weight: 500;
                text-align: center;
                line-height: 1.5;
                color: var(--color-negro);
            }

            .box-head p {
                padding: 8px 16px 32px 16px;
                font-size: 16px;
                font-weight: 500;
                text-align: left;
                line-height: 1.5;
                color: var(--color-negro);
            }
        </style>

        <!-- Sección botones  -->
        <div class="box-botones">
            <div class="box-boton">
                <div class="boton">
                    <a href="https://www.movilidadbogota.gov.co/web/procesos-infracciones-transporte-publico-individual" target="_blank" rel="noopener noreferrer">Procesos por Infracciones a las normas de transporte público de pasajeros</a>
                </div>
                <div class="descripcion">
                    <p>Encuentre aquí las resoluciones de fallo de investigaciones administrativas proferidas en <strong>Primera Instancia</strong> contra las empresas de transporte público de pasajeros.</p>
                </div>
            </div>
            <div class="box-boton">
                <div class="boton">
                    <a href="https://www.movilidadbogota.gov.co/web/derechos-de-peticion-investigaciones-transporte-publico" target="_blank" rel="noopener noreferrer">Derechos de petición</a>
                </div>
                <div class="descripcion">
                    <p>Encuentre aquí las respuestas dadas por la Subdirección a los derechos de petición incoados en virtud del Artículo 23 de la Constitución Política de Colombia, y artículos concordantes del Código de procedimiento administrativo y de lo contencioso administrativo.</p>
                </div>
            </div>
            <style>
                .box-botones .box-boton {
                    display: grid;
                    gap: 8px;
                    grid-auto-flow: dense;
                    grid-template-columns: 1fr;
                    grid-template-rows: auto;
                    grid-template-areas:
                        'descripcion'
                        'boton';
                        padding-bottom: 8px;
                        border-bottom: dashed 1px var(--color-gris);
                }

                .box-boton .boton {
                    grid-area: boton;
                    text-align: center;
                    display: grid;

                }

                .boton a {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    background-color: var(--color-primario);
                    color: var(--color-blanco);
                    margin: 0px 16px;
                    padding: 8px;
                    border-radius: 4px;
                    font-weight: 600;
                    -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                    box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                }

                .boton:hover a {
                    background-color: var(--color-secundario);
                    color: var(--color-negro);
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }

                .boton a:focus {
                    color: var(--color-gris);
                    background-color: var(--color-primario);
                }

                .box-boton .descripcion {
                    grid-area: descripcion;
                    /* height: px; */
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    padding: 0px 16px;
                }

                .box-boton .descripcion p {
                    text-align: center;
                }

                @media(min-width:768px) {
                    .box-botones .box-boton {
                        grid-template-columns: 30% 70%;
                    }

                    .box-botones .box-boton {
                        grid-template-areas:
                            'boton descripcion';
                    }

                    .box-boton .descripcion p {
                        text-align: left;
                    }
                }

                @media(min-width:992px) {}
            </style>
        </div>
        <style>
            .box-wrp .box-botones {
                grid-area: box-botones;
                display: grid;
                gap: 16px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;

            }
        </style>

    </div>
</div>
<br>
<!-- End Set Wrapper -->
