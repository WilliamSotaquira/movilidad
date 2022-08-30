<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Entorno de desarrollo</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
</head>

<body>

  <!-- AQUI - Incluimos el JS de jQuery primero -->
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!-- Fin JS -->

  <!--Contenido-->
  <!-- Set Wrapper -->
<div class='container-fluid zpp'>
    <div class='box-wrp'>
        <!-- encabezado  -->
        <div class='box-head'>
            <div class="logo">
                <img class='img-responsive img-banner' src='http://zonadeparqueopago.gov.co/Recursos/Ultima_Version/logo_26102021_0.png' alt='Encabezado Zonas de Parqueo Pago' title='Encabezado Zonas de Parqueo Pago'>
            </div>
            <div class="titulo">
                <div class="encabezado-texto">
                    <h1>Las <span class="txt-enf-v1"><strong>Zonas de Parqueo Pago</strong></span> son áreas de la ciudad en las que la <span class="txt-enf-v1"><strong>Alcaldía Mayor de Bogotá</strong></span> permite el estacionamiento de vehículos en vía a cambio de un pago por el uso de estos espacios.</h1>
                </div>
            </div>
            <!-- <div class='row encabezado'>
                <div class='col-xs-12 col-sm-6'>
                    <div class="encabezado-img">
                        <img class='img-responsive img-banner' src='http://zonadeparqueopago.gov.co/Recursos/Ultima_Version/logo_26102021_0.png' alt='Encabezado Zonas de Parqueo Pago' title='Encabezado Zonas de Parqueo Pago'>
                    </div>
                </div>
                <div class='col-xm-12 col-sm-6'>
                    <div class="encabezado-texto">
                        <div>
                            <p class="lead text-overflow">Las <span class="txt-enf-v1"><strong>Zonas de Parqueo Pago</strong></span> son áreas de la ciudad en las que la <span class="txt-enf-v1"><strong>Alcaldía Mayor de Bogotá</strong></span> permite el estacionamiento de vehículos en vía a cambio de un pago por el uso de estos espacios.</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <br>
        </div>
        <!-- Fin encabezado  -->
        <style>
            .box-head {
                background-color: rgba(25, 28, 58, 1);
                display: grid;
                /* gap: 10px; */
                /* grid-auto-flow: dense */
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'logo titulo';
                margin-bottom: 30px;
            }

            .box-head .logo {
                grid-area: logo;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .box-head .logo img {
                /* grid-area: logo; */
                max-width: 300px;
            }

            .box-head .titulo {
                grid-area: titulo;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 30px;
            }

            .box-head .titulo .encabezado-texto {
                border-top: 3px solid rgba(102, 224, 38, 1);
                border-bottom: 3px solid rgba(102, 224, 38, 1);
            }

            .box-head .titulo h1 {
                font-size: 1.5em;
                font-weight: 300;
                text-align: center;
                line-height: 1.2;
                color: rgba(255, 255, 255, 1);
            }
        </style>
        <hr>
        <div class="row acordeon">
            <div class="titulo">
                <h3>Preguntas Frecuentes</h3>
            </div>
            <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 zpp-acordeon">

                <!-- collapsepreguntas -->
                <div class='panel-group' id='accordionpreguntas' role='tablist' aria-multiselectable='true'>

                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='headingpreguntas'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordionpreguntas' href='#collapsepreguntas' aria-expanded='true' aria-controls='collapsepreguntas'>
                                    1. ¿Qué son las Zonas de Parqueo Pago? </a>
                            </h4>
                        </div>
                        <div id='collapsepreguntas' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingpreguntas'>
                            <div class='panel-body'>
                                <p>Son áreas de la ciudad en las cuales la Alcaldía Mayor de Bogotá permite el estacionamiento de vehículos en vía a cambio de un pago por el uso de estos espacios.</p>
                                <p>Las Zonas de Parqueo Pago permiten que el espacio público tenga un uso adecuado y eficiente, organizan la movilidad, reducen la congestión vehicular y generan recursos públicos para fortalecer el Sistema Integrado de Transporte Público de la ciudad.</p>

                            </div>
                        </div>
                    </div>



                    <!-- collapsep2 -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='headingp2'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordionpreguntas' href='#collapsep2' aria-expanded='true' aria-controls='collapsep2'>
                                    2. ¿Cómo se identifican las Zonas de Parqueo Pago?
                                </a>
                            </h4>
                        </div>
                        <div id='collapsep2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingp2'>
                            <div class='panel-body'>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="img-fondo-1">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <div class="img-fondo-2">

                                        </div>
                                    </div>
                                </div>
                                <p>Por su demarcación en el piso y la señalización, así:</p>
                                <ul>
                                    <li>El recuadro, cupo o cajón de estacionamiento está demarcado con pintura blanca.</li>
                                    <li>Las señales de tránsito informativas indican el horario y la tarifa del servicio.</li>
                                    <p>Adicionalmente, las zonas de parqueo pago cuentan con demarcación distintiva en el piso para:</p>
                                    <ul>
                                        <li>Vehículos de personas con discapacidad (con igual tarifa que los automóviles).</li>
                                        <li>Vehículos eléctricos (sin costo durante la primera hora y luego de ese lapso de tiempo aplica la misma tarifa que para automóviles).</li>
                                        <li>Vehículos para cargue y descargue de mercancías (las actividades de cargue y descargue de mercancías no tendrán costo si se realizan en las áreas autorizadas. Si se usan las Zonas de Parqueo Pago, la tarifa será la misma que la de los automóviles, multiplicada por cada espacio, cupo o cajón de estacionamiento que ocupe el vehículo).</li>
                                        <li>Estacionamiento de motocicletas (aplican las tarifas para este tipo de vehículos).</li>
                                        <li>Estacionamiento de bicicletas (sin costo).</li>
                                    </ul>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <!-- /#fin p2 -->

                    <!-- collapsep3 -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='headingp3'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordionpreguntas' href='#collapsep3' aria-expanded='true' aria-controls='collapsep3'>
                                    3. ¿Cómo se seleccionan las Zonas de Parqueo Pago?
                                </a>
                            </h4>
                        </div>
                        <div id='collapsep3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingp3'>
                            <div class='panel-body'>
                                <p>La zonificación y priorización se hace con una metodología que contempla criterios de demanda de estacionamiento, uso del suelo, seguridad ciudadana y seguridad vial, así como registros históricos de invasión del espacio público por parqueo en vía.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /#fin p3 -->

                    <!-- collapsep4 -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='headingp4'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordionpreguntas' href='#collapsep4' aria-expanded='true' aria-controls='collapsep4'>
                                    4. ¿En qué lugares se pueden implementar las Zonas de Parqueo Pago?
                                </a>
                            </h4>
                        </div>
                        <div id='collapsep4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingp4'>
                            <div class='panel-body'>
                                <p>En vías locales e intermedias y en las bahías expresamente autorizadas por la Secretaría Distrital de Movilidad.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /#fin p4 -->

                    <!-- collapsep5 -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='headingp5'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordionpreguntas' href='#collapsep5' aria-expanded='true' aria-controls='collapsep5'>
                                    5. ¿En dónde no se pueden implementar las Zonas de Parqueo Pago?
                                </a>
                            </h4>
                        </div>
                        <div id='collapsep5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingp5'>
                            <div class='panel-body'>
                                <ul>
                                    <li>Vías principales, para no generar congestión vehicular.</li>
                                    <li>Donde estén ubicados paraderos del SITP.</li>
                                    <li>Vías de doble sentido con un solo carril por sentido.</li>
                                    <li>Vías con aproximación a intersecciones semaforizadas.</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /#fin p5 -->

                    <!-- collapsep6 -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='headingp6'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordionpreguntas' href='#collapsep6' aria-expanded='true' aria-controls='collapsep6'>
                                    6. ¿En qué áreas de la ciudad operan las Zonas de Parqueo Pago?
                                </a>
                            </h4>
                        </div>
                        <div id='collapsep6' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingp6'>
                            <div class='panel-body'>
                                <p>Actualmente las Zonas de Parqueo Pago operan:</p>
                                <ul>
                                    <li>Desde la calle 127 hasta la calle 100 entre Carrera 5ª y Autopista Norte.</li>
                                    <li>Desde la calle 100 hasta la calle 72 entre Carrera 7ª y Autopista Norte.</li>
                                    <li>Desde la calle 72 hasta la calle 45 entre la Carrera 2ª y la Av. Caracas.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /#fin p6 -->

                    <!-- collapsep7 -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='headingp7'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordionpreguntas' href='#collapsep7' aria-expanded='true' aria-controls='collapsep7'>
                                    7. ¿Cómo se pueden ubicar las Zonas de Parqueo Pago?
                                </a>
                            </h4>
                        </div>
                        <div id='collapsep7' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingp7'>
                            <div class='panel-body'>
                                <div class='row'>
                                    <!-- xs -->
                                    <div class='col-xs-10 col-xs-offset-1'>
                                        <img class='img-responsive w-100 ' src='http://zonadeparqueopago.gov.co/Recursos/zonas.jpg' alt='Zonas de Parqueo Mapa' title='Zonas de Parqueo Mapa'>
                                    </div>
                                </div>
                                <br>
                                <p>Los ciudadanos podrán consultar los mapas georreferenciados de las Zonas de Parqueo Pago a través de la APP móvil que próximamente estará disponible Play Store (Android) y App Store (iOS).*Esquema Área de Implementación 1 </p>
                            </div>
                        </div>
                    </div>
                    <!-- /#fin p7 -->

                    <!-- collapsep8 -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='headingp8'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordionpreguntas' href='#collapsep8' aria-expanded='true' aria-controls='collapsep8'>
                                    8. ¿Las Zonas de Parqueo Pago cuentan con personal en vía?
                                </a>
                            </h4>
                        </div>
                        <div id='collapsep8' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingp8'>
                            <div class='panel-body'>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="img-fondo-3">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="img-fondo-4">

                                        </div>
                                    </div>
                                </div>
                                <p>Sí. Las Zonas de Parqueo Pago cuentan con facilitadores que apoyan la operación en vía y que están debidamente identificados y dotados con gorra y chaqueta de color azul con los logos de la Zona de Parqueo Pago, la Terminal de Transporte de Bogotá y la Alcaldía Mayor de Bogotá.</p>
                                <p>Canales:</p>
                                <ul>
                                    <li>Teléfono de contacto ZPP: <a href="tel:+6019193333">(+57)(601) 919-3333</a></li>
                                    <li>Correo electrónico: <a href="mailto:zonadeparqueopago@terminaldetransporte.gov.co">zonadeparqueopago@terminaldetransporte.gov.co</a></li>
                                    <li>Página web: <a href="http://www.zonadeparqueopago.gov.co" target="_blank" rel="noopener noreferrer">www.zonadeparqueopago.gov.co</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /#fin p8 -->

                    <!-- collapsep9 -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='headingp9'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordionpreguntas' href='#collapsep9' aria-expanded='true' aria-controls='collapsep9'>
                                    9. ¿Cuáles son los canales de atención al usuario?
                                </a>
                            </h4>
                        </div>
                        <div id='collapsep9' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingp9'>
                            <div class='panel-body'>
                                <p>Además del canal presencial con los facilitadores, se han dispuesto dos (2) canales de atención a los usuarios:</p>
                                <ul>
                                    <li><strong>Teléfono de contacto ZPP: </strong> <a href="tel:+576019193333">(+57)(601) 919-3333</a></li>
                                    <li><strong>Correo electrónico: </strong><a href="mailto:zonadeparqueopago@terminaldetransporte.gov.co">zonadeparqueopago@terminaldetransporte.gov.co</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /#fin p9 -->

                    <!-- collapsep10 -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='headingp10'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordionpreguntas' href='#collapsep10' aria-expanded='true' aria-controls='collapsep10'>
                                    10. ¿En qué horarios funcionan las Zonas de Parqueo Pago?
                                </a>
                            </h4>
                        </div>
                        <div id='collapsep10' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingp10'>
                            <div class='panel-body'>
                                <dl>
                                    <dt>Lunes a viernes:</dt>
                                    <dd>8:30 a.m. – 10:00 p.m.</dd>
                                </dl>
                                <dl>
                                    <dt>Sábados:</dt>
                                    <dd>10:00 a.m. – 10:00 p. m.</dd>
                                </dl>
                                <dl>
                                    <dt>*En algunas calles el horario cambia y se rige de acuerdo con la información contenida en la señal de tránsito.</dt>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <!-- /#fin p10 -->

                    <!-- collapsep11 -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='headingp11'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordionpreguntas' href='#collapsep11' aria-expanded='true' aria-controls='collapsep11'>
                                    11. ¿Qué pasa si el usuario no paga por estacionar en las Zonas de Parqueo Pago?
                                </a>
                            </h4>
                        </div>
                        <div id='collapsep11' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingp11'>
                            <div class='panel-body'>
                                <p>El usuario debe pagar anticipadamente por fracciones de 30 minutos. Si no lo hace o no renueva el tiempo pagado inicialmente, se inmovilizará el vehículo con la instalación de un cepo. <strong>El valor del retiro del cepo es de $90.000 para automóviles y $63.000 para motos.</strong></p>
                            </div>
                        </div>
                    </div>
                    <!-- /#fin p11 -->

                </div>
                <!-- /#fin preguntas -->


            </div>
        </div>

        <!--Boton de descarga APK-->
        <hr>
        <div class="titulo">
            <h3>Descargue la aplicación para su dispositivo móvil</h3>
        </div>
        <div class="box-botones">
            <div class="boton-app zoom boton-android">
                <a href="https://t.co/5zf0gqda7b" class="btn btn-zpp" target="_blank" rel="noopener noreferrer"><img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/botonesPaginaZPP-05.png' alt='Descargar App Android' title='Descargar App Android'></a>
            </div>
            <div class="boton-app zoom boton-ios">
                <a href="https://t.co/CHZpHq2kho" class="btn btn-zpp" target="_blank" rel="noopener noreferrer"><img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/botonesPaginaZPP-04.png' alt='Descargar App iOS' title='Descargar App iOS'></a>
            </div>
        </div>
        <style>
            .box-botones {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: auto;
                grid-gap: 6px;
                justify-items: center;
                align-items: center;
                justify-content: space-around;
            }

            .box-botones .boton-app {
                margin: 30px;
                max-width: 200px;
            }

            .box-botones .btn-zpp {
                background-color: rgba(25, 28, 58, 1);
                color: rgba(255, 255, 255, 1);
            }

            .box-botones .btn-zpp:hover {
                background-color: rgba(15, 18, 28, 1);
                color: rgba(255, 255, 255, 1);
            }

            .box-botones .btn-zpp:focus,
            .box-botones .btn-zpp:active {
                background-color: rgba(102, 224, 38, 1);
                color: rgba(25, 28, 58, 1);
            }
        </style>
        <!--#Fin de boton de descarga APK-->

        <hr>
        <div class='row'>
            <div class='col-xs-12 text-center'>
                <div class="msg-2">
                    <p>Para mayor información, escríbenos al correo:</p>
                    <p><mark><a href="mailto:zonadeparqueopago@terminaldetransporte.gov.co"><strong>zonadeparqueopago@terminaldetransporte.gov.co</strong></a></mark></p>
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

    .zpp {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
    }

    /*
    .zpp [class*='col-'] {
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
</style>
<!-- End Styles -->

<style>
    .seccion .no-padding {
        padding: 0px !important;
    }

    /* encabezado */
    /* .encabezado {
        background-color: #191C3A; 
        border-bottom: solid 10px #66e026;
    }

    .encabezado .encabezado-img {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0px;
    }

    .encabezado .encabezado-img img {
        width: 70%;
        margin: auto;
    }

    .encabezado .encabezado-texto {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 90%;
        height: 200px;
        margin: auto;
    }

    .encabezado .encabezado-texto p {
        padding: 3%;
        font-weight: normal;
        text-align: center;
        line-height: 1.2;
        color: rgba(255, 255, 255, 1);
        border-top: solid 3px #66e026;
        border-bottom: solid 3px #66e026;
    }

} */
    .txt-enf-v1 {
        color: #66e026;
        font-size: 1.1em;
    }

    /* fin encabezado */

    /* navtabs */

    .box-txt {
        padding: 15px;
    }

    .box-txt h4 {
        font-weight: 700;
        text-align: left;
        line-height: 1.2;
        color: #191C3A;
    }

    .box-txt .parrafos p {
        font-weight: 500;
        text-align: left;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
    }

    .zpp-tabs {
        width: 100%;
        text-align: center;
        font-size: 1.5em;
        padding-bottom: 4px;
    }


    .nav>li>a {
        padding: 5px !important;
    }

    .nav-tabs>li>a {
        background-color: #191C3A !important;
        color: #66e026 !important;
        margin-right: 0px !important;
        border-radius: 2px !important;
        font-weight: 700;
    }

    .nav-tabs>li>a:hover {
        background-color: #111326 !important;
        color: #fff !important;
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        color: rgba(25, 25, 25, 1) !important;
        cursor: default;
        background-color: #66e026 !important;
        border-bottom-color: transparent;
    }

    .nav-tabs .field-item.even .zpp-tabs:hover {
        background-color: #66e026 !important;

    }

    @media(max-width:767px) {
        .nav-tabs>li>a {
            font-size: calc(0.5em + 1vw);
        }
    }

    @media(min-width:768px) {
        .nav-tabs>li>a {
            font-size: calc(0.5em + 1vw);
        }
    }

    @media(min-width:992px) {
        .nav-tabs>li>a {
            font-size: 0.8em;
        }

    }

    /* fin navtabs */


    .tab-content {
        margin-top: 10px;
    }

    /* .tab-content .col-xs-12,
    .tab-content .col-sm-6 {
        padding-left: 0px;
        padding-right: 0px;
    } */

    #como .imagen {
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-10-2021/2021-10-26_piezas-web-zonas-de-parqueo-montaje_4.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: top center;
        border-top: solid 5px #191C3A;
        border-bottom: solid 10px #191C3A;
    }

    #pago .imagen {
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-10-2021/cuadrada_3_zonas_parqueo.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: top center;
        border-top: solid 5px #191C3A;
        border-bottom: solid 10px #191C3A;
    }

    .texto {
        height: 400px !important;
        border-top: solid 5px #66e026;
        border-bottom: solid 10px #66e026;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-10-2021/2021-10-25_piezas-web-zonas-de-parqueo-textura-900-x-900-100_0.png');
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: #191C3A;
        padding: 2%;
        text-align: center;
        color: #fff;


    }

    .box-img-mapa {
        width: 100%;
        padding: 15px;
    }

    .box-img-mapa h4 {
        font-weight: 700;
        text-align: left;
        line-height: 1.2;
        color: #191C3A;
    }

    .pills {
        /* margin-top: 2rem;
        margin-left: 3rem;
        margin-right: 3rem;
        margin-bottom: 2rem; */
    }

    .thumbnail {
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        margin: 0px 5px 15px 5px;

    }

    .thumbnail .box-img-thumb {
        padding: 15px;
        background-color: #66e026;
    }

    .thumbnail .box-img-thumb img {
        width: 60%;
        margin: auto;
    }

    .imagen {
        height: 400px;
        background-color: #66e026;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .thumbnail .caption {
        text-align: center;
        /* height: 260px; */
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding: 0px !important;
    }

    .caption h4 {
        color: #66e026;
        font-weight: 700;
        padding: 5px;
        background-color: #191C3A;
        margin: 0px;
    }

    .caption h4 small {
        color: #fff;
        font-weight: 700;
        font-size: 0.9em;
        text-align: center;
        line-height: 1.2;
        margin: 0px;

    }

    .caption .caption-parrafos {
        padding: 5px;
    }

    .caption .caption-parrafos p {
        color: rgba(25, 25, 25, 1);
        /* height: 30px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-top: 8px;
        margin-bottom: 8px;
        font-weight: 500;
    }

    #accordionTarifas .panel-default>.panel-heading {
        color: #191C3A;
        background-color: #f5f5f5;
        border-color: #ddd;
        border-radius: 0px !important;
    }

    #accordionTarifas .panel-heading {
        padding: 6px 15px !important;
    }

    .msg-1 {
        color: rgba(255, 255, 255, 1);
        background-color: #191C3A;
        padding: 20px;
        font-weight: 500;
        text-align: center;
        line-height: 1.2;
    }


    .acordeon .zpp-acordeon {
        padding-left: 0px;
        padding-right: 0px;
    }

    .msg-2 {
        font-size: calc(1rem + 0.6vw);
        color: #191C3A;
        padding: 10px;
        word-break: break-all;
    }

    mark {
        background-color: #66e026 !important;
        color: black;
    }

    .msg-2 mark a {
        color: #191C3A;
    }


    .zpp-acordeon .panel-heading {
        /* background-color: #191C3A !important;
        border: solid 2px #191C3A !important; */
    }

    .zpp-acordeon .panel-heading .panel-title {
        color: #191C3A;
        text-align: left;
        padding-left: 8px;
    }

    .zpp-acordeon .panel-heading .panel-title a {
        text-decoration: none;
        /* font-size: calc(1rem + 0.5vw); */
        font-weight: 500;
    }

    .zpp-acordeon .panel-collapse .panel-body {
        /* background-color: #f5f5f5; */
    }

    .titulo {
        /* margin-bottom: 30px; */
    }

    .titulo h3 {
        font-weight: 700;
        text-transform: uppercase;
        color: #191C3A;
        /* text-shadow: 2px 2px 5px #4e4e4e; */
        text-align: center;
        margin: 25px;
    }

    .titulo-2 {
        margin-top: 30px;
        margin-bottom: 15px;
        border-top: solid 3px #191C3A;
        border-bottom: solid 5px #66e026;
        background-color: #191C3A;
    }

    .titulo-2 h3 {
        font-size: calc(1rem + 0.8vw);
        font-weight: 700;
        text-transform: uppercase;
        color: #fff;
        text-shadow: 2px 2px 5px #4e4e4e;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 15px;
    }



    .mapa .col-xs-12,
    .mapa .col-sm-12 {
        padding-left: 0px;
        padding-right: 0px;
    }

    .panel .panel-body .img-fondo-1 {
        height: 16vw;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-10-2021/zpp-img-1.jpg');
        background-size: cover;
        background-position: right;
        margin-bottom: 15px;
    }

    .panel .panel-body .img-fondo-2 {
        height: 16vw;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-10-2021/zpp-img-2.jpg');
        background-size: cover;
        background-position: center;
        margin-bottom: 15px;
    }

    .panel .panel-body .img-fondo-3 {
        height: 26vw;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-10-2021/personal_en_via_1.jpg');
        background-size: cover;
        background-position: center;
        margin-bottom: 15px;
    }

    .panel .panel-body .img-fondo-4 {
        height: 26vw;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-10-2021/personal_en_via_2.jpg');
        background-size: cover;
        background-position: center;
        margin-bottom: 15px;
    }


    #accordion_normatividad .collapse a {
        color: #191C3A;
        text-decoration: none;
    }

    #accordion_normatividad .collapse a:hover {
        color: #191C3A;
        font-weight: 900;
        text-decoration: underline #191C3A;
    }

    /* Media rules */
    @media(max-width:767px) {
        /* #como .imagen {
            height: 160px;
        } */

        /* #como .texto {
            height: 610px;
        } */

        #pago .imagen {
            height: 73vw;
        }

        #pago .texto {
            height: 610px;
        }

        /* .pills {
            margin: 0% 15%;
        } */

        .pills .thumbnail {
            padding: 0px;
        }

        .pills .thumbnail>img {
            padding: 5px;
        }

        .caption p {
            margin-bottom: 5px;
        }

    }

    @media(min-width:768px) {

        .encabezado .encabezado-img {
            padding: 30px;
            height: 468px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .encabezado .encabezado-img img {
            /* width: 100%; */

        }

        .encabezado .encabezado-texto {
            height: 468px;
        }

        .encabezado .encabezado-texto p {
            font-size: 1.2em;
        }

        /* #como .texto {
            height: 400px !important;
        } */


        #pago .texto {
            height: 400px !important;
        }

        .texto .parrafo {
            font-size: 1.2em;
            margin: 8px;
        }

        .msg-1 {
            height: 363px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: calc(0.55em + 1vw);
            /* margin: 5px; */
        }

        .mapa {
            background-color: #191C3A;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 363px;
        }

        .mapa img {
            max-height: 363px;
            width: 100%;
            margin: auto;
        }
    }

    @media(min-width:992px) {
        .encabezado .encabezado-texto p {
            font-size: 1.3em;
        }

        .msg-1 {
            font-size: 1.3em;
            margin: auto;
        }
    }

    @media(min-width:1200px) {
        .encabezado .encabezado-texto p {
            font-size: 1.5em;
        }
    }

    /* Fin media rules */
</style>
  <!--Fin Contenido-->

  <!---------------------------------------------------------------------------------------------------------- Fin contenido drupal --------------------------------------------------------------------------------------------->
</body>

</html>

