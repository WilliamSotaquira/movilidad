@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid sisben'>
    <div class='box-wrp'>

        <!-- seccion Ppal Tabs  -->
        <div class="box-tabs">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#inicio" aria-controls="inicio" role="tab" data-toggle="tab"> INICIO</a>
                </li>
                <!-- <li role="presentation">
                        <a href="#preguntas" aria-controls="preguntas" role="tab" data-toggle="tab">PREGUNTAS
                            FRECUENTES</a>
                    </li> -->
                <li role="presentation">
                    <a href="#normatividad" aria-controls="normatividad" role="tab" data-toggle="tab">NORMATIVIDAD</a>
                </li>
            </ul>

            <!-- Tab panels -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="inicio">

                    <div class="box-inicio">

                        <div class="seccion1">
                            <div class='imagen'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-09-2022/recurso_1.png' alt='Accede al subsidio' title='Accede al subsidio'>
                            </div>
                            <div class="texto">
                                <div class="titulo">
                                    <h2>Accede al subsidio</h2>
                                    <h3> en las tarifas del Sistema Integrado de Transporte Público</h3>
                                </div>
                                <p>Sé parte del más de un millón de personas que se beneficiará de este incentivo en los pasajes y apoya a la movilidad sostenible en Bogotá.</p>
                            </div>
                        </div>
                        <style>
                            .box-inicio .seccion1 {
                                grid-area: seccion1;
                                display: grid;
                                grid-auto-flow: dense;
                                grid-template-columns: 1f;
                                grid-template-rows: auto;
                                grid-template-areas:
                                    'imagen'
                                    'texto';
                            }

                            .box-inicio .seccion1 .imagen {
                                grid-area: imagen;
                            }

                            .box-inicio .seccion1 img {
                                margin: auto;
                                padding: 16px;
                                max-width: 300px;
                            }

                            .box-inicio .seccion1 .texto {
                                grid-area: texto;
                                margin: auto;
                                padding: 16px;
                            }

                            .box-inicio .seccion1 .texto .titulo {
                                padding-top: 10px;
                                padding-bottom: 30px;
                            }

                            .box-inicio .texto h2 {
                                /* font-size: 1em; */
                                font-weight: 700;
                                text-align: center;
                                line-height: 1.2;
                                color: #315002;
                                margin: 0px;
                            }

                            .box-inicio .texto h3 {
                                /* font-size: 1em; */
                                font-weight: 700;
                                text-align: center;
                                line-height: 1.2;
                                color: #315002;
                                margin: 0px;
                            }

                            .btn-desliza {
                                text-decoration: none !important;
                                display: inline-block;
                                padding: 8px 30px;
                                border-radius: 25px;
                                border: solid 2px #315002;
                                /* max-width: 50%; */
                                background-color: rgba(255, 255, 255, 1);
                                color: #315002;
                                /* margin: 30px; */

                                font-size: 1.2em;
                                font-weight: 500;
                                text-align: left;
                                line-height: 1.4;
                                margin: 8px;

                                -webkit-box-shadow: -2px 5px 0px 0px rgba(0, 0, 0, 0.10);
                                box-shadow: -2px 5px 0px 0px rgba(0, 0, 0, 0.10);

                            }

                            .btn-desliza:hover {
                                background-color: #315002;
                                color: rgba(255, 255, 255, 1);
                            }
                        </style>

                        <div class="seccion2">
                            <ul class="nav nav-pills nav-justified box-seccion2">
                                <li class="btn-consulta">
                                    <a data-toggle="tab" href="#consulta">
                                        <div class="card-sisben zoom consulta">
                                            <div class='icono-numero'>
                                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_1.png' alt='icono numero uno' title='icono numero uno'>
                                            </div>
                                            <div class='imagen'>
                                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-09-2022/consulta_220916.png' alt='grafica con icono de buscador' title='grafica con icono de buscador'>
                                            </div>
                                            <div class="texto">
                                                <h3>CONSULTA</h3>
                                                <p>En Sisbén IV si perteneces a uno de los grupos beneficiados</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <div class="tab-content content-consulta">
                                    <div id="consulta" class="tab-pane fade">
                                        <div>
                                            <hr>
                                            <div class="seccion3">
                                                <div class='imagen-consulta'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_15.png' alt='Consulta tu grupo Sisbén' title='Consulta tu grupo Sisbén'>
                                                </div>
                                                <div class="texto-seccion2">
                                                    <div class="consulta-btn">
                                                        <h3>CONSULTA</h3>
                                                    </div>
                                                    <div class="parrafo">
                                                        <p>Si cuentas con clasificación Sisbén IV y a qué grupo perteneces, en la página
                                                            del Departamento Nacional de Planeación</p>
                                                    </div>
                                                    <div>
                                                        <a href="https://www.sisben.gov.co/Paginas/consulta-tu-grupo.aspx" target="_blank" rel="noopener noreferrer">
                                                            <div class='imagen'>
                                                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_8.png' alt='Botón que direcciona a la consulta de grupo Sisbén' title='Botón que direcciona a la consulta de grupo Sisbén'>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="text-center">
                                                        <a class="btn-desliza" href="#seccion4">Desliza<span class="glyphicon glyphicon-name"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <style>
                                                .seccion3 {
                                                    display: grid;
                                                    gap: 10px;
                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        'imagen-consulta'
                                                        'texto-sec2';
                                                }

                                                .seccion3 .imagen-consulta {
                                                    padding: 5%;
                                                    grid-area: imagen-consulta;
                                                }

                                                .seccion3 .texto-seccion2 {
                                                    grid-area: texto-sec2;
                                                    padding: 5%;
                                                    /* height: px; */
                                                    display: flex;
                                                    flex-direction: column;
                                                    justify-content: space-evenly;
                                                    align-items: center;
                                                }

                                                .seccion3 .texto-seccion2 .parrafo {
                                                    padding-top: 16px;
                                                    padding-bottom: 16px;
                                                }

                                                .consulta-btn {
                                                    background-color: #315002;
                                                    border: solid 2px rgba(255, 255, 255, 1);
                                                    border-radius: 15px;
                                                    width: 100%;
                                                    -webkit-box-shadow: -2px 5px 0px 0px rgba(0, 0, 0, 0.10);
                                                    box-shadow: -2px 5px 0px 0px rgba(0, 0, 0, 0.10);
                                                }

                                                .consulta-btn h3 {
                                                    font-size: 28px;
                                                    font-weight: 700;
                                                    text-align: center;
                                                    line-height: 1.2;
                                                    color: rgba(255, 255, 255, 1);
                                                    margin: 8px;
                                                    padding: 5px 16px;
                                                    /* margin-bottom: 30px; */
                                                }

                                                .consulta-btn:hover {
                                                    background-color: rgba(255, 255, 255, 1);
                                                    border: solid 2px #315002;
                                                }

                                                .consulta-btn:hover h3 {
                                                    color: #315002;
                                                }
                                            </style>
                                            <div class="seccion4" id="seccion4">
                                                <div class="titulo">
                                                    <h3>Entérate cómo podrías obtener tu subsidio en las tarifas del SITP</h3>
                                                </div>
                                                <div class="card-sisben zoom unoseis">
                                                    <div class='icono-numero'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_1.png' alt='icono numero uno' title='icono numero uno'>
                                                    </div>
                                                    <div class='imagen'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_11.png' alt='grafica con icono de buscador' title='grafica con icono de buscador'>
                                                    </div>
                                                    <div class="texto">
                                                        <h3>+16</h3>
                                                        <p>Debes <strong>ser mayor de 16 años y estar radicado en Bogotá.</strong></p>
                                                        <p>No es necesario que estés registrado en el Sisbén IV.</p>
                                                    </div>
                                                </div>
                                                <div class="card-sisben zoom listado">
                                                    <div class='icono-numero'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_3.png' alt='icono numero dos' title='icono numero dos'>
                                                    </div>
                                                    <div class='imagen'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_12.png' alt='grafico con icono de registro de formulario' title='grafico con icono de registro de formulario'>
                                                    </div>
                                                    <div class="texto">
                                                        <h3>Listado Censal</h3>
                                                        <p>Debes estar incluido en el <strong>listado censal realizado por el Resguardo
                                                                y/o Cabildo respectivo,</strong> remitido a la Secretaria Distrital de
                                                            Gobierno, y posteriormente al Ministerio del Interior</p>
                                                    </div>
                                                </div>
                                                <div class="card-sisben zoom tarjeta">
                                                    <div class='icono-numero'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_6.png' alt='icono numero tres' title='icono numero tres'>
                                                    </div>
                                                    <div class='imagen'>
                                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_13.png' alt='grafico con lector y tarjeta tu llave' title='grafico con lector y tarjeta tu llave'>
                                                    </div>
                                                    <div class="texto">
                                                        <h3>Tarjeta Tu Llave</h3>
                                                        <p>Si no tienes la tarjeta Tu Llave personalizada, solicítala para acceder con
                                                            ella al incentivo en los pasajes del SITP</p>
                                                    </div>
                                                </div>
                                                <style>
                                                    .seccion4 {
                                                        display: grid;
                                                        gap: 30px;
                                                        grid-auto-flow: dense;
                                                        grid-template-columns: 1fr;
                                                        grid-template-rows: auto;
                                                        grid-template-areas:
                                                            'titulo'
                                                            'unoseis'
                                                            'listado'
                                                            'tarjeta';
                                                    }

                                                    .unoseis {
                                                        grid-area: unoseis;
                                                    }

                                                    .seccion4 .titulo {
                                                        grid-area: titulo;
                                                    }

                                                    .seccion4 .titulo>h3 {
                                                        font-size: 28px;
                                                        font-weight: 700;
                                                        text-align: center;
                                                        line-height: 1.2;
                                                        color: #315002;
                                                        margin: 30px;
                                                        text-transform: uppercase;
                                                    }

                                                    .seccion4 .card-sisben .icono-numero img {
                                                        max-width: 80px;
                                                        margin: auto;
                                                    }

                                                    .seccion4 .card-sisben .imagen img {
                                                        max-width: 250px;
                                                        margin: auto;
                                                        border-radius: 25px;
                                                        border: solid 1px #c5c5c5;
                                                        margin-top: 55px;
                                                        -webkit-box-shadow: -2px 5px 0px 0px rgba(0, 0, 0, 0.10);
                                                        box-shadow: -2px 5px 0px 0px rgba(0, 0, 0, 0.10);
                                                    }

                                                    .seccion4 .card-sisben .texto {
                                                        text-align: center;
                                                    }
                                                </style>

                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                   .box-inicio .box-seccion2 .btnconsulta{
                                        grid-area: btn-consulta;
                                    }
                                   .box-inicio .box-seccion2 .content-consulta{
                                        grid-area: content-consulta;
                                    }
                                </style>

                                <li class="btn-solicita">
                                    <a data-toggle="tab" href="#solicita">
                                        <div class="card-sisben zoom solicita">
                                            <div class='icono-numero'>
                                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_3.png' alt='icono numero dos' title='icono numero dos'>
                                            </div>
                                            <div class='imagen'>
                                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-09-2022/solicita_220916.png' alt='grafico con icono de registro de formulario' title='grafico con icono de registro de formulario'>
                                            </div>
                                            <div class="texto">
                                                <h3>SOLICITA</h3>
                                                <p>Tu encuesta Sisbén IV si aún no estás registrado</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <div class="tab-content content-solicita">
                                    <div id="solicita" class="tab-pane fade">
                                        <div>
                                            <div class="seccion5">
                                                <div class='imagen-solicita'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_14.png' alt='Consulta tu grupo Sisbén' title='Consulta tu grupo Sisbén'>
                                                </div>
                                                <div class="texto-solicita">
                                                    <div class="solicita-btn">
                                                        <h3>SOLICITA</h3>
                                                    </div>
                                                    <div class="parrafo">
                                                        <p>Si no estás registrado, debes solicitar a la Secretaría Distrital de
                                                            Planeación la aplicación de la encuesta Sisbén IV en la Red CADE o en línea
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <a href="https://sisbensol.sdp.gov.co/" target="_blank" rel="noopener noreferrer">https://sisbensol.sdp.gov.co/</a>
                                                    </div>
                                                    <div class="text-center">
                                                        <a class="btn-desliza" href="#seccion6">Desliza<span class="glyphicon glyphicon-name"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <style>
                                                .seccion5 {
                                                    display: grid;
                                                    gap: 10px;
                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        'imagen-solicita'
                                                        'texto-solicita';
                                                }

                                                .seccion5 .imagen-solicita {
                                                    grid-area: imagen-solicita;
                                                    padding: 5%;
                                                    max-width: 80%;
                                                    margin: auto;
                                                }

                                                .seccion5 .texto-solicita {
                                                    grid-area: texto-solicita;
                                                    padding: 5%;
                                                    /* height: px; */
                                                    display: flex;
                                                    flex-direction: column;
                                                    justify-content: space-evenly;
                                                    align-items: center;
                                                }

                                                .seccion5 .texto-solicita .parrafo {
                                                    padding-top: 16px;
                                                    padding-bottom: 16px;
                                                }

                                                .solicita-btn {
                                                    width: 100%;
                                                    border-bottom: solid #BCCF14 2px;
                                                }

                                                .solicita-btn h3 {
                                                    font-size: 28px;
                                                    font-weight: 700;
                                                    text-align: center;
                                                    line-height: 1.2;
                                                    color: #315002;
                                                    margin: 8px;
                                                    padding: 5px 16px;
                                                    /* margin-bottom: 30px; */
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                   .box-inicio .box-seccion2 .btnconsulta{
                                        grid-area: btn-solicita;
                                    }
                                   .box-inicio .box-seccion2 .content-consulta{
                                        grid-area: content-solicita;
                                    }
                                </style>

                                <li class="btn-accede">
                                    <a data-toggle="tab" href="#accede">
                                        <div class="card-sisben zoom solicita">
                                            <div class='icono-numero'>
                                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_6.png' alt='icono numero tres' title='icono numero tres'>
                                            </div>
                                            <div class='imagen'>
                                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-09-2022/acccede_220916.png' alt='grafico con lector y tarjeta tu llave' title='grafico con lector y tarjeta tu llave'>
                                            </div>
                                            <div class="texto">
                                                <h3>ACCEDE</h3>
                                                <p>Con tu tarjeta Tu Llave personalizada, si eres beneficiario</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <div class="tab-content content-accede">
                                    <div id="accede" class="tab-pane fade">
                                        <div>
                                            <div class="seccion6" id="seccion6">
                                                <div class="texto-accede">
                                                    <div class="accede-btn">
                                                        <h3>ACCEDE</h3>
                                                    </div>
                                                    <div class="parrafo">
                                                        <p>Una vez haya sido asignado el subsidio a tu grupo correspondiente del Sisbén IV
                                                            mediante resolución de la Secretaría Distrital de Movilidad, podrás disfrutar
                                                            del descuento en tus pasajes usando tu tarjeta personalizada Tu Llave. Si aún no
                                                            la tienes, deberás esperar un mes después de la resolución para solicitarla y
                                                            acceder al beneficio.</p>
                                                    </div>
                                                    <div>
                                                        <p>Consulta si ya eres beneficiario en:</p>
                                                        <a href=" https://sisben.tullaveplus.gov.co/" target="_blank" rel="noopener noreferrer"> https://sisben.tullaveplus.gov.co/</a>
                                                        <p>También puedes ver las resoluciones en la sección normatividad de esta página</p>
                                                    </div>
                                                </div>
                                                <div class='imagen-accede'>
                                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_16.png' alt='Consulta tu grupo Sisbén' title='Consulta tu grupo Sisbén'>
                                                    <div class="text-center">
                                                        <a class="btn-desliza" href="#seccion4">Desliza<span class="glyphicon glyphicon-name"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <style>
                                                .seccion6 {
                                                    display: grid;
                                                    gap: 10px;
                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        'texto-accede'
                                                        'imagen-accede';
                                                }

                                                .seccion6 .imagen-accede {
                                                    grid-area: imagen-accede;
                                                    padding: 5%;
                                                    max-width: 80%;
                                                    margin: auto;
                                                }

                                                .seccion6 .texto-accede {
                                                    grid-area: texto-accede;
                                                    padding: 5%;
                                                    /* height: px; */
                                                    display: flex;
                                                    flex-direction: column;
                                                    justify-content: space-evenly;
                                                    align-items: center;
                                                }

                                                .seccion6 .texto-accede .parrafo {
                                                    padding-top: 16px;
                                                    padding-bottom: 16px;
                                                }

                                                .accede-btn {
                                                    width: 100%;
                                                    border-bottom: solid #BCCF14 2px;
                                                }

                                                .accede-btn h3 {
                                                    font-size: 28px;
                                                    font-weight: 700;
                                                    text-align: center;
                                                    line-height: 1.2;
                                                    color: #315002;
                                                    margin: 8px;
                                                    padding: 5px 16px;
                                                    /* margin-bottom: 30px; */
                                                }
                                            </style>
                                            <hr>
                                            <div class="seccion7">
                                                <div class="enCuenta">
                                                    <div>
                                                        <h3>TEN EN CUENTA QUE <span class="recurso17"></span></h3>

                                                        <p>Si actualmente tienes descuento en los pasajes del SITP por ser adulto mayor no
                                                            puedes acceder a otro subsidio al mismo tiempo.</p>
                                                        <p>Por tanto, si además estás en los grupos desde el A1 hasta el C4 en la
                                                            clasificación del Sisbén IV, y quieres optar por el subsidio en las tarifas del
                                                            SITP a estos grupos:</p>
                                                    </div>
                                                </div>
                                                <div class="numeros">
                                                    <div class="numero numero1">
                                                        <div class="img-numero">
                                                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_18.png' alt='numero 18' title='numero 18'>
                                                        </div>
                                                        <h3>ACÉRCATE</h3>
                                                        <p>A una caseta de personalizaciónde tarjeta Tu Llave.</p>
                                                    </div>
                                                    <div class="numero numero2">
                                                        <div class="img-numero">
                                                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_19.png' alt='numero 19' title='numero 19'>
                                                        </div>
                                                        <h3>SOLICITA</h3>
                                                        <p>Ser beneficiario del subsidio a los grupos priorizados del Sisbén IV, y anular el
                                                            subsidio de adulto mayor.</p>
                                                    </div>
                                                    <div class="numero numero3">
                                                        <div class="img-numero">
                                                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_20.png' alt='numero 20' title='numero 20'>
                                                        </div>
                                                        <h3>OBTÉN</h3>
                                                        <p>El nuevo beneficio después de 24 horas de haber hecho la solicitud.</p>
                                                    </div>
                                                    <div class="numero numero4">
                                                        <div class="img-numero">
                                                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_21.png' alt='numero 21' title='numero 21'>
                                                        </div>
                                                        <h3>PARA VOLVER AL BENEFICIO ANTERIOR</h3>
                                                        <p>Deberás esperar un mes para hacer la solicitud.</p>
                                                    </div>
                                                </div>

                                            </div>
                                            <style>
                                                .seccion7 {
                                                    display: grid;
                                                    gap: 10px;
                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        '';
                                                }

                                                .seccion7 .enCuenta {
                                                    position: relative;
                                                    margin: 16px;
                                                    display: flex;
                                                    flex-direction: column;
                                                    justify-content: space-evenly;
                                                    align-items: center;
                                                    background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_17.png');
                                                    background-size: 45%;
                                                    background-position: top right;
                                                    background-repeat: no-repeat;

                                                }

                                                .seccion7 .enCuenta h3 {
                                                    font-size: 28;
                                                    font-weight: 700;
                                                    text-align: left;
                                                    line-height: 1.2;
                                                    color: #315002;
                                                    border-bottom: #BCCF14 2px solid;
                                                    text-align: left;
                                                    padding: 10px 16px;
                                                    margin: 8px;
                                                    width: 60%;
                                                }


                                                .seccion7 .numeros {
                                                    display: grid;
                                                    gap: 10px;
                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        '';
                                                }

                                                .seccion7 .numero {
                                                    padding: 5%;
                                                    text-align: center;
                                                }

                                                .seccion7 .numeros .img-numero img {
                                                    padding: 5%;
                                                    width: 60%;
                                                    margin: auto;
                                                }

                                                .seccion7 .numeros h3 {
                                                    /* font-size: 1em; */
                                                    font-weight: 700;
                                                    text-align: center;
                                                    line-height: 1;
                                                    color: #315002;
                                                    margin: 8px;
                                                }

                                                .seccion7 .numeros p {
                                                    /* font-size: 1em; */
                                                    font-weight: 500;
                                                    text-align: center;
                                                    line-height: 1.3;
                                                    color: rgba(25, 25, 25, 1);
                                                    margin: 8px;
                                                }
                                            </style>


                                        </div>
                                    </div>
                                </div>
                                <style>
                                   .box-inicio .box-seccion2 .btnconsulta{
                                        grid-area: btn-accede;
                                    }
                                   .box-inicio .box-seccion2 .content-consulta{
                                        grid-area: content-accede;
                                    }
                                </style>
                            </ul>
                        </div>
                        <style>
                            .box-inicio .seccion2 .box-seccion2{
                                display: grid;
                                gap: 10px;
                                grid-auto-flow: dense;
                                grid-template-columns: 1fr;
                                grid-template-rows: auto;
                                grid-template-areas:
                                'btn-consulta'
                                'content-consulta'
                                'btn-solicita'
                                'content-solicita'
                                'btn-accede'
                                'content-accede';
                            }



                        </style>

                    </div>
                    <hr>
                    <style>
                        html {
                            scroll-behavior: smooth !important;
                        }

                        .box-inicio {
                            display: grid;
                            gap: 10px;
                            grid-auto-flow: dense;
                            grid-template-columns: 1fr;
                            grid-template-rows: auto;
                            grid-template-areas:
                                'seccion1';
                            |
                        }
                    </style>






                    <hr>
                    <!-- Set Seccion navbartab -->
                    <div class="box-navbartab-s4">







                    </div>

                    <style>
                        .box-navbartab-s4 {
                            display: grid;
                            gap: 10px;
                            grid-auto-flow: dense;
                            grid-template-columns: 1fr;
                            grid-template-rows: auto;

                        }

                        .box-navbartab-s4 .subsidioSitp {
                            display: grid;
                            gap: 30px;
                            grid-auto-flow: dense;
                            grid-template-columns: 1fr;
                            grid-template-rows: auto;
                            grid-template-areas:
                                'titulo '
                                'consulta'
                                'solicita'
                                'accede';
                        }

                        .box-navbartab-s4 .consulta {
                            grid-area: consulta;
                        }

                        .box-navbartab-s4 .titulo {
                            grid-area: titulo;
                        }

                        .box-navbartab-s4 .titulo>h3 {
                            font-size: 28px;
                            font-weight: 700;
                            text-align: center;
                            line-height: 1.2;
                            color: #315002;
                            margin: 30px;
                            text-transform: uppercase;
                        }

                        .card-sisben {
                            padding: 8%;
                        }

                        .box-navbartab-s4 .card-sisben .icono-numero img {
                            max-width: 80px;
                            margin: auto;
                        }

                        .box-navbartab-s4 .card-sisben .imagen img {
                            max-width: 250px;
                            margin: auto;
                            margin-top: 15px;
                            margin-bottom: 15px;
                        }

                        .box-navbartab-s4 .card-sisben .texto {
                            text-align: center;
                        }
                    </style>
                    <!-- Fin Set -->




                </div>
                <div role="tabpanel" class="tab-pane" id="preguntas">...</div>
                <div role="tabpanel" class="tab-pane" id="normatividad">...</div>
            </div>

        </div>
        <!-- Fin seccion Ppal Tabs  -->

    </div>
    <!-- End Set Wrapper -->

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

        .sisben {
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
            .sisben [class*='col-'] {
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
        @media(max-width:767px) {}

        @media(min-width:768px) {
            .box-tabpills {}

            .box-tabpills .box-inicio {
                padding: 30px;
                grid-template-columns: 1fr;
            }

            .seccion2 .subsidioSitp {
                /* gap: 30px;
                grid-template-columns: repeat(3, 1fr);
                grid-template-areas:
                    'titulo titulo titulo'
                    'consulta solicita accede'; */
            }

            .seccion3 {

                grid-template-columns: 1fr 1fr;
                grid-template-areas:
                    'imagen-consulta texto-sec2';
            }

            .seccion4 {
                gap: 30px;
                grid-template-columns: repeat(3, 1fr);
                grid-template-areas:
                    'titulo titulo titulo'
                    'unoseis listado tarjeta';
            }

            .seccion5 {
                grid-template-columns: 1fr 1fr;
                grid-template-areas:
                    'imagen-solicita texto-solicita';
            }

            .seccion6 {
                grid-template-columns: 1fr 1fr;
                grid-template-areas:
                    'texto-accede imagen-accede';
            }

            .seccion7 {
                grid-template-columns: 1fr 1fr;
            }

            .seccion7 .numeros {
                grid-template-columns: 1fr 1fr;
            }

        }

        @media(min-width:992px) {}

        @media(min-width:1200px) {}
    </style>
    <!-- End Styles -->

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
