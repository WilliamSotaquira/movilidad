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
        <div class='box-head'>

        </div>

        <div class="box-tabs">

            <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#inicio" aria-controls="inicio" role="tab" data-toggle="tab"> INICIO</a>
                    </li>
                    <li role="presentation">
                        <a href="#preguntas" aria-controls="preguntas" role="tab" data-toggle="tab">PREGUNTAS FRECUENTES</a>
                    </li>
                    <li role="presentation">
                        <a href="#normatividad" aria-controls="normatividad" role="tab" data-toggle="tab">NORMATIVIDAD</a>
                    </li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="inicio">
                        <div class="box-inicio">
                            <div class="seccion1">
                                <div class='imagen'>
                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/imagen1_sisten.png' alt='Accede al subsidio' title='Accede al subsidio'>
                                </div>
                                <div class="texto">
                                    <div class="titulo">
                                        <h2>Accede al subsidio</h2>
                                        <h3> en las tarifas del Sistema Integrado de Transporte P??blico</h3>
                                    </div>
                                    <p>S?? parte del m??s de un mill??n de personas que se beneficiar?? de este incentivo en los pasajes, y apoya a la movilidad sostenible en Bogot??.</p>
                                    <div class="text-center">
                                        <a class="btn-desliza" href="#subsidioSitp">Desliza<span class="glyphicon glyphicon-name"></span></a>
                                    </div>
                                </div>
                            </div>
                            <style>
                                html {
                                    scroll-behavior: smooth !important;
                                }

                                .box-inicio .seccion1 {
                                    display: flex;
                                    justify-content: space-evenly;
                                    align-items: center;
                                    height: 550px;
                                    /* padding: 0px 30px; */
                                }

                                .box-inicio .seccion1 img {
                                    margin: auto;
                                    height: 80%;
                                    padding: 16px;
                                }

                                .box-inicio .texto {
                                    margin: auto;
                                    padding: 16px;
                                }

                                .box-inicio .texto .titulo {
                                    padding-top: 30px;
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
                                <div class="subsidioSitp" id="subsidioSitp">
                                    <div class="titulo">
                                        <h3>Ent??rate c??mo podr??as obtener tu subsidio en las tarifas del SITP</h3>
                                    </div>
                                    <div class="card-sisben zoom consulta">
                                        <div class='icono-numero'>
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_1.png' alt='icono numero uno' title='icono numero uno'>
                                        </div>
                                        <div class='imagen'>
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_4.png' alt='grafica con icono de buscador' title='grafica con icono de buscador'>
                                        </div>
                                        <div class="texto">
                                            <h3>CONSULTA</h3>
                                            <p>En Sisb??n IV si perteneces a uno de los grupos beneficiados</p>
                                        </div>
                                    </div>
                                    <div class="card-sisben zoom solicita">
                                        <div class='icono-numero'>
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_3.png' alt='icono numero dos' title='icono numero dos'>
                                        </div>
                                        <div class='imagen'>
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_5.png' alt='grafico con icono de registro de formulario' title='grafico con icono de registro de formulario'>
                                        </div>
                                        <div class="texto">
                                            <h3>SOLICITA</h3>
                                            <p>Tu encuesta Sisb??n IV si a??n no est??s registrado</p>
                                        </div>
                                    </div>
                                    <div class="card-sisben zoom solicita">
                                        <div class='icono-numero'>
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_6.png' alt='icono numero tres' title='icono numero tres'>
                                        </div>
                                        <div class='imagen'>
                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_7.png' alt='grafico con lector y tarjeta tu llave' title='grafico con lector y tarjeta tu llave'>
                                        </div>
                                        <div class="texto">
                                            <h3>ACCEDE</h3>
                                            <p>Con tu tarjeta Tu Llave personalizada, si eres beneficiario</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <style>
                                .seccion2 .subsidioSitp {
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

                                .seccion2 .consulta {
                                    grid-area: consulta;
                                }

                                .seccion2 .titulo {
                                    grid-area: titulo;
                                }

                                .seccion2 .titulo>h3 {
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

                                .seccion2 .card-sisben .icono-numero img {
                                    max-width: 80px;
                                    margin: auto;
                                }

                                .seccion2 .card-sisben .imagen img {
                                    max-width: 250px;
                                    margin: auto;
                                    border-radius: 15px;
                                    border: solid 1px #c5c5c5;
                                    margin-top: 15px;
                                    -webkit-box-shadow: -2px 5px 0px 0px rgba(0, 0, 0, 0.10);
                                    box-shadow: -2px 5px 0px 0px rgba(0, 0, 0, 0.10);
                                }

                                .seccion2 .card-sisben .texto {
                                    text-align: center;
                                }
                            </style>
                            <hr>
                            <div class="seccion3">
                                <div class='imagen-consulta'>
                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_15.png' alt='Consulta tu grupo Sisb??n' title='Consulta tu grupo Sisb??n'>
                                </div>
                                <div class="texto-seccion2">
                                    <div class="consulta-btn">
                                        <h3>CONSULTA</h3>
                                    </div>
                                    <div class="parrafo">
                                        <p>Si cuentas con clasificaci??n Sisb??n IV y a qu?? grupo perteneces, en la p??gina del Departamento Nacional de Planeaci??n</p>
                                    </div>
                                    <div>
                                        <a href="https://www.sisben.gov.co/Paginas/consulta-tu-grupo.aspx" target="_blank" rel="noopener noreferrer">
                                            <div class='imagen'>
                                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_8.png' alt='Bot??n que direcciona a la consulta de grupo Sisb??n' title='Bot??n que direcciona a la consulta de grupo Sisb??n'>
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
                                    <h3>Ent??rate c??mo podr??as obtener tu subsidio en las tarifas del SITP</h3>
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
                                        <p>Debes <strong>ser mayor de 16 a??os y estar radicado en Bogot??.</strong></p>
                                        <p>No es necesario que est??s registrado en el Sisb??n IV.</p>
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
                                        <p>Debes estar incluido en el <strong>listado censal realizado por el Resguardo y/o Cabildo respectivo,</strong> remitido a la Secretaria Distrital de Gobierno, y posteriormente al Ministerio del Interior</p>
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
                                        <p>Si no tienes la tarjeta Tu Llave personalizada, solic??tala para acceder con ella al incentivo en los pasajes del SITP</p>
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
                            <div class="seccion5">
                                <div class='imagen-solicita'>
                                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_14.png' alt='Consulta tu grupo Sisb??n' title='Consulta tu grupo Sisb??n'>
                                </div>
                                <div class="texto-solicita">
                                    <div class="solicita-btn">
                                        <h3>SOLICITA</h3>
                                    </div>
                                    <div class="parrafo">
                                        <p>Si no est??s registrado, debes solicitar a la Secretar??a Distrital de Planeaci??n la aplicaci??n de la encuesta Sisb??n IV en la Red CADE o en l??nea</p>
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
                        <hr>
                        <div class="seccion6" id="seccion6">
                            <div class="texto-accede">
                                <div class="accede-btn">
                                    <h3>ACCEDE</h3>
                                </div>
                                <div class="parrafo">
                                    <p>Una vez haya sido asignado el subsidio a tu grupo correspondiente del Sisb??n IV mediante resoluci??n de la Secretar??a Distrital de Movilidad, podr??s disfrutar del descuento en tus pasajes usando tu tarjeta personalizada Tu Llave. Si a??n no la tienes, deber??s esperar un mes despu??s de la resoluci??n para solicitarla y acceder al beneficio.</p>
                                </div>
                                <div>
                                    <p>Consulta si ya eres beneficiario en:</p>
                                    <a href=" https://sisben.tullaveplus.gov.co/" target="_blank" rel="noopener noreferrer"> https://sisben.tullaveplus.gov.co/</a>
                                    <p>Tambi??n puedes ver las resoluciones en la secci??n normatividad de esta p??gina</p>
                                </div>
                            </div>
                            <div class='imagen-accede'>
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_16.png' alt='Consulta tu grupo Sisb??n' title='Consulta tu grupo Sisb??n'>
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

                                    <p>Si actualmente tienes descuento en los pasajes del SITP por ser adulto mayor no puedes acceder a otro subsidio al mismo tiempo.</p>
                                    <p>Por tanto, si adem??s est??s en los grupos desde el A1 hasta el C4 en la clasificaci??n del Sisb??n IV, y quieres optar por el subsidio en las tarifas del SITP a estos grupos:</p>
                                </div>
                            </div>
                            <div class="numeros">
                                <div class="numero numero1">
                                    <div class="img-numero">
                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_18.png' alt='numero 18' title='numero 18'>
                                    </div>
                                    <h3>AC??RCATE</h3>
                                    <p>A una caseta de personalizaci??nde tarjeta Tu Llave.</p>
                                </div>
                                <div class="numero numero2">
                                    <div class="img-numero">
                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_19.png' alt='numero 19' title='numero 19'>
                                    </div>
                                    <h3>SOLICITA</h3>
                                    <p>Ser beneficiario del subsidio a los grupos priorizados del Sisb??n IV, y anular el subsidio de adulto mayor.</p>
                                </div>
                                <div class="numero numero3">
                                    <div class="img-numero">
                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_20.png' alt='numero 20' title='numero 20'>
                                    </div>
                                    <h3>OBT??N</h3>
                                    <p>El nuevo beneficio despu??s de 24 horas de haber hecho la solicitud.</p>
                                </div>
                                <div class="numero numero4">
                                    <div class="img-numero">
                                        <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-07-2022/recurso_21.png' alt='numero 21' title='numero 21'>
                                    </div>
                                    <h3>PARA VOLVER AL BENEFICIO ANTERIOR</h3>
                                    <p>Deber??s esperar un mes para hacer la solicitud.</p>
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
                    <div role="tabpanel" class="tab-pane" id="preguntas">...</div>
                    <div role="tabpanel" class="tab-pane" id="normatividad">...</div>
                </div>
            </div>


        </div>

    </div>
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
            gap: 30px;
            grid-template-columns: repeat(3, 1fr);
            grid-template-areas:
                'titulo titulo titulo'
                'consulta solicita accede';
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