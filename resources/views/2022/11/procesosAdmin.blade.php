@extends('welcome')
@section('contenido')

<!-- procesosAdministrativos -->

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

    .procesosAdministrativos {
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

    .zoom {
        transition: 0.07s ease;
        -moz-transition: 0.07s ease;
        /* Firefox */
        -webkit-transition: 0.07s ease;
        /* Chrome - Safari */
        -o-transition: 0.07s ease;
        /* Opera */
        -ms-transition: 0.07s ease;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .zoom:hover {
        transform: scale(1.01);
        -moz-transform: scale(1.01);
        /* Firefox */
        -webkit-transform: scale(1.01);
        /* Chrome - Safari */
        -o-transform: scale(1.01);
        /* Opera */
        -ms-transform: scale(1.01);

        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
    }

    /* IE9 */
</style>
<!-- End Styles -->

<!-- Set Wrapper -->
<div class='container-fluid procesosAdministrativos'>
    <div class='box-wrp'>

        <!-- Sección head -->
        <div class='box-head'>
            <h3>Dirección de investigaciones Administrativas al Tránsito y Transporte</h3>
            <hr>
            <p>Encuentre aquí las resoluciones que resuelven los recursos de apelación contra las decisiones de fallo proferidas en 1a instancia por la Subdirección de Contravenciones y la Subdirección de Control e Investigaciones al Transporte Público; y los actos administrativos que declaran administrativamente el abandono de los vehículos en el marco de la Ley 1730 de 2014.</p>
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

            <a class="boton zoom" href="https://www.movilidadbogota.gov.co/web/apelacion_de_procesos_contravencionales" target="_blank" rel="noopener noreferrer">
                <div class="titulo">
                    <h4>Recursos de apelación</h4>
                </div>
                <div class="descripcion">
                    <div>
                        <p>Encuentre aquí los actos administrativos que resuelven los recursos de apelación de procesos administrativos de tránsito y transporte.</p>
                    </div>
                </div>
            </a>
            <a class="boton zoom featured" href="https://www.movilidadbogota.gov.co/web/apelacion-investigaciones-al-transporte-publico" target="_blank" rel="noopener noreferrer">
                <div class="titulo">
                    <h4>Declaratoria de abandono y obligación de pago servicio de patios y grúas</h4>
                </div>
                <div class="descripcion">
                    <p>Encuentre aquí los actos administrativos que declaran administrativamente el abandono de los vehículos en el marco de la Ley 1730 de 2014, y los constitutivos del título ejecutivo derivado del servicio público de grúa y patios por la permanencia de los vehículos en los patios (Resolución No. 345 de 2010).</p>
                </div>
            </a>

            <a class="boton zoom" href="https://www.movilidadbogota.gov.co/web/patios_y_gruas" target="_blank" rel="noopener noreferrer">
                <div class="titulo">
                    <h4>Respuesta Derechos de Petición</h4>
                </div>
                <div class="descripcion">
                    <p>Responder los derechos de petición incoados en virtud del Artículo 23 de la Constitución Política y Articulos 13 y ss de la Ley 1437 DE 2011.</p>
                </div>
            </a>

            <a class="boton zoom" href="https://www.movilidadbogota.gov.co/web/patios_y_gruas" target="_blank" rel="noopener noreferrer">
                <div class="titulo">
                    <h4>Declaratorias de Abandono</h4>
                </div>
                <div class="descripcion">
                    <p>Encuentra aquí los actos administrativos que declaran el abandono e imponen la obligación de grúa y patios, a los propietarios de los vehículos que se encuentran inmovilizados en los patios oficiales de la Secretaría Distrital de Movilidad.</p>
                </div>
            </a>

            <a class="boton zoom" href="#" target="_blank" rel="noopener noreferrer">
                <div class="titulo">
                    <h4>Edictos</h4>
                </div>
                <div class="descripcion">
                    <p>Encuentra aquí las publicaciones en prensa nacional de los vehículos que no cuentan con un propietario determinado y a los cuales se les declaró el abandono mediante acto administrativo.</p>
                </div>
            </a>
            <!--
            <a class="boton" href="" target="_blank" rel="noopener noreferrer">
                <div class="titulo">
                    <h4></h4>
                </div>
                <div class="descripcion">
                    <p></p>
                </div> -->
            </a>

            <style>
                .boton {
                    border: solid 1px var(--color-gris);
                    border-radius: 4px;
                    background-color: var(--color-gris-claro);
                }

                .box-botones .boton .titulo {
                    background-color: var(--color-primario);
                    height: 50px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    border-radius: 4px 4px 0px 0px;
                }

                .box-botones .boton h4 {
                    font-size: 16px;
                    font-weight: 600;
                    text-align: center;
                    line-height: 1;
                    color: var(--color-blanco);
                    padding: 8px 16px;
                    margin: 0px;
                }

                .descripcion {
                    padding: 16px;
                    background-color: var(--color-gris-claro);

                    /* max-height: 200px;
                    height: 180px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center; */
                }

                .descripcion p {
                    margin: 0px;
                    font-size: 15px;
                    font-weight: 500;
                    text-align: left;
                    line-height: 1.3;
                    color: var(--color-negro);

                }

                @media(min-width:768px) {
                    .featured {
                        grid-column: span 2;
                    }
                }

                @media(min-width:992px) {}
            </style>

        </div>
        <style>
            .box-wrp .box-botones {
                grid-area: box-botones;
                display: grid;
                gap: 20px;
                grid-auto-flow: dense;
                grid-template-columns: repeat(auto-fill, minmax(min(100%, 300px), 1fr));
                grid-template-rows: auto;

            }

            .box-botones a {
                text-decoration: none !important;
                display: grid;
                justify-content: space-around;
            }
        </style>

    </div>
    <style>
        .box-wrp {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'box-head'
                'box-botones';
        }
    </style>
</div>
<br>
<!-- End Set Wrapper -->
