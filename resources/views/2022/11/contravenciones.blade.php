@extends('welcome')
@section('contenido')

<!-- contravenciones -->

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

    .contravenciones {
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
<div class='container-fluid contravenciones'>
    <div class='box-wrp'>

        <!-- Sección head -->
        <div class='box-head'>
            <h3>Subdirección de Contravenciones</h3>
            <hr>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptates eum aut officiis eligendi? Nisi, exercitationem iste sit vel accusamus culpa, unde iusto dolore, quibusdam odit possimus. Ipsam, totam nostrum!</p> -->
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

            <a class="boton" href="https://www.movilidadbogota.gov.co/web/derechos_de_peticion" target="_blank" rel="noopener noreferrer">
                <div class="titulo">
                    <h4>Derechos de Petición</h4>
                </div>
                <div class="descripcion">
                    <div>
                        <p>Encuentre aquí las respuestas a los derechos de petición que no pudieron comunicarse a los peticionarios por inconsistencias en la dirección de correspondencia o correo electrónico suministrados.</p>
                    </div>
                </div>
            </a>

            <a class="boton featured" href="https://www.movilidadbogota.gov.co/web/audiencias_automaticas_embriaguez" target="_blank" rel="noopener noreferrer">
                <div class="titulo">
                    <h4>Audiencias Automáticas de Embriaguez</h4>
                </div>
                <div class="descripcion">
                    <p>Encuentre aquí las resoluciones automáticas de embriaguez que sancionan a aquellos conductores que infringieron lo estipulado en la Ley 1696 de 2013 y que no se hicieron presentes dentro del término legal establecido, para adelantar la correspondiente audiencia pública, en atención a lo estipulado en el artículo 136 del C.N.T.T.</p>
                </div>
            </a>

            <a class="boton" href="https://www.movilidadbogota.gov.co/web/sites/default/files/contravenciones4.png" target="_blank" rel="noopener noreferrer">
                <div class="titulo">
                    <h4>Revocatorias</h4>
                </div>
                <div class="descripcion">
                    <p>Encuentre aquí las resoluciones que fallan las solicitudes de revocación directa de oficio o solicitud de parte, en virtud de lo establecido en el Artículo 69 del Código Contencioso Administrativo y del Artículo 93 del Código de Procedimiento Administrativo y de lo Contencioso Administrativo</p>
                </div>
            </a>

            <a class="boton" href="https://www.movilidadbogota.gov.co/web/reincidencias" target="_blank" rel="noopener noreferrer">
                <div class="titulo">
                    <h4>Reincidencias</h4>
                </div>
                <div class="descripcion">
                    <p>Encuentre aquí las resoluciones que sancionan a aquellos conductores en virtud del Artículo 124, concordante con el Artículo 26 del Código Nacional de Tránsito y sus modificaciones.</p>
                </div>
            </a>

            <a class="boton" href="https://www.movilidadbogota.gov.co/web/subsanaciones" target="_blank" rel="noopener noreferrer">
                <div class="titulo">
                    <h4>Subsanaciones</h4>
                </div>
                <div class="descripcion">
                    <p>Grupo funcional encargado de conocer sobre las investigaciones administrativas que surgen en virtud del Artículo 125 Parágrafo 3º del Código Nacional de Transito y sus modificatorios.</p>
                </div>
            </a>

            <a class="boton" href="https://www.movilidadbogota.gov.co/web/comparendos_electronicos" target="_blank" rel="noopener noreferrer">
                <div class="titulo">
                    <h4>Notificaciones de comparendos electrónicos</h4>
                </div>
                <div class="descripcion">
                    <p>Recuerde que usted pude ser objeto de la imposición de comparendos por medios tecnológicos, los cuales se envían a la dirección de su domicilio. </p>
                </div>
            </a>

            <a class="boton" href="https://www.movilidadbogota.gov.co/web/resoluciones-d12" target="_blank" rel="noopener noreferrer">
                <div class="titulo">
                    <h4>Resoluciones D-12</h4>
                </div>
                <div class="descripcion">
                    <p>Grupo funcional encargado de conocer sobre las solicitudes de revocación directa de oficio o a solicitud de parte, en virtud de lo establecido en el Artículo 69 del Código Contencioso Administrativo y del Artículo 93 del Código de Procedimiento Administrativo y de lo Contencioso Administrativo.</p>
                </div>
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
                grid-template-columns: repeat(auto-fill, minmax(min(100%, 250px), 1fr));
                grid-template-rows: auto;

            }

            .box-botones a {
                text-decoration: none !important;
                display: grid;
                justify-content: space-around;
            }
        </style>


    </div>
</div>
<br>
<!-- End Set Wrapper -->
