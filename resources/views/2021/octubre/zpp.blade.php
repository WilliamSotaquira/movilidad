@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
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
            <br>
        </div>
        <!-- Fin encabezado  -->
        <!-- Sección Bloque de Mantenimiento  -->
        <div class="box-avisos">

            <hr>
            <div class="row">
                <!-- banner-xs  -->
                <div class="col-xs-12 visible-xs-12 visible-xs-block">
                    <img alt="Aviso Mantenimiento Sistema Contravencional" class="img-responsive bs zoom w-100 img-rounded" src="ftp://zonadeparqueopag@zonadeparqueopago.gov.co/public_html/Recursos/aviso-mantenimiento_220827_xs.jpeg" title="Aviso Mantenimiento Sistema Contravencional">
                </div>
                <!-- Fin banner-xs  -->

                <!-- banner-lg  -->
                <div class="col-sm-12 hidden-xs">
                    <img alt="Aviso Mantenimiento Sistema Contravencional" class="img-responsive bs zoom w-100 img-rounded" src="ftp://zonadeparqueopag@zonadeparqueopago.gov.co/public_html/Recursos/aviso-mantenimiento_220827_lg.jpeg" title="Aviso Mantenimiento Sistema Contravencional">
                </div>
                <!-- Fin banner-lg  -->
            </div>
            <hr>

        </div>
        <!-- Fin Sección Bloque de Mantenimiento  -->
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

        <!-- Nav-tabs  -->
        <div class="row carrusel">
            <div class="col-xs-12">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs  nav-justified" role="tablist">
                    <li class="zpp-tabs" role="presentation" class="active"><a href="#como" aria-controls="como" role="tab" data-toggle="tab">¿Cómo las <br>identifico?</a></li>
                    <li class="zpp-tabs" role="presentation"><a href="#pago" aria-controls="pago" role="tab" data-toggle="tab">¿Cómo <br>pago?</a></li>
                    <li class="zpp-tabs" role="presentation"><a href="#zonas" aria-controls="zonas" role="tab" data-toggle="tab">¿En qué zonas <br>funcionan?</a></li>
                    <li class="zpp-tabs" role="presentation"><a href="#tarifas" aria-controls="tarifas" role="tab" data-toggle="tab">¿Cuáles son<br> las tarifas?</a></li>
                </ul>

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade in active" id="como">
                        <div class="como">
                            <div class="imagen">
                            </div>
                            <div class="texto">
                                <p class="parrafo">Las <span class="txt-enf-v1"><strong>Zonas de Parqueo Pago</strong></span> cuentan con señalización que incluye el ícono de parqueo e información sobre el horario horario y tarifa del servicio.</p>
                                <p class="parrafo">Cada cupo de estacionamiento está demarcado con un recuadro blanco.</p>
                                <p class="parrafo">Los cupos de estacionamiento para personas con discapacidad, zonas amarillas, vehículos eléctricos, cargue y descargue y bicicletas tienen demarcación distintiva.</p>
                            </div>
                        </div>
                    </div>
                    <style>
                        #como {
                            position: relative;
                        }

                        .como {
                            display: grid;
                            /* gap: 10px; */
                            grid-auto-flow: dense;
                            grid-template-columns: 1fr 1fr;
                            grid-template-rows: auto;
                            grid-template-areas:
                                'imagen texto';
                        }

                        .como .imagen {
                            grid-area: imagen;
                        }

                        .como .texto {
                            grid-area: texto;
                        }
                    </style>


                    <div role="tabpanel" class="tab-pane" id="pago">
                        <div class="pago">
                            <div class="imagen">
                            </div>
                            <div class="texto">
                                <p class="parrafo">Es muy sencillo. Debes descargar en tu celular la <span class="txt-enf-v1"><strong>App Zona de Parqueo Pago - Ciudadano</strong></span> y registrarte. Una vez estaciones en el cupo demarcado que encuentres disponible, pagas anticipadamente fracciones de 30 minutos. El pago lo puedes hacer a través de la App o en efectivo con el facilitador que está a cargo de los cupos de parqueo.</p>
                            </div>
                        </div>
                    </div>
                    <style>
                        #pago {
                            display: relative;
                        }

                        .pago {
                            display: grid;
                            /* gap: 10px; */
                            grid-auto-flow: dense;
                            grid-template-columns: 1fr 1fr;
                            grid-template-rows: auto;
                            grid-template-areas:
                                'imagen texto';
                        }

                        #pago .imagen {
                            grid-area: imagen;

                        }

                        #pago .texto {
                            grid-area: texto;
                        }
                    </style>

                    <!-- Inicio tarifas -->
                    <div role="tabpanel" class="tab-pane" id="tarifas">

                        <div class='box-tarifas'>
                            <div class='box-coll'>
                                <!-- collapseTarifas -->
                                <div class='panel-group' id='accordionTarifas' role='tablist ' aria-multiselectable='true'>

                                    <!-- collapseArea1 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingArea1'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordionTarifas' href='#collapseArea1' aria-expanded='true' aria-controls='collapseArea1'>
                                                    ÁREA 1
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseArea1' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='headingArea1'>
                                            <div class='panel-body'>
                                                <div class="row">
                                                    <div class='col-xs-12 col-sm-6'>
                                                        <div class='box-img-mapa'>
                                                            <h4>Mapa ÁREA 1</h4>
                                                            <img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/A1.jpg' alt='Mapa Area 1' title='Mapa Area 1'>
                                                        </div>
                                                        <div class="box-txt">
                                                            <h4>Horario ÁREA 1</h4>
                                                            <div class="parrafos">
                                                                <p>Lunes a Viernes: 8:30 a.m. - 10:00 p.m.</p>
                                                                <p>Sabados: 10:00 a.m. - 10:00 p.m.</p>
                                                                <i><strong>*O el horario que indique la señal. </strong></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class='col-xs-12 col-sm-3'>
                                                        <div class="pills">
                                                            <div class="thumbnail">
                                                                <div class="box-img-thumb">
                                                                    <img class="img-responsive w-100" src="http://zonadeparqueopago.gov.co/Recursos/iconos_1_zonas_parqueo_autos.png" alt="Icono de automovil">
                                                                </div>
                                                                <div class="caption">
                                                                    <h4>Tarifa
                                                                        <p>Fracción de 30 minutos </p>
                                                                    </h4>
                                                                    <h4><small>El pago es por anticipado</small></h4>
                                                                    <div class="caption-parrafos">
                                                                        <p>Hasta 2 horas: $3.000</p>
                                                                        <p>Más de 2 horas: $4.600</p>
                                                                    </div>
                                                                    <h4>Valor retiro cepo</h4>
                                                                    <div class="caption-parrafos">
                                                                        <p><strong>$90.000</strong></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-3'>
                                                        <div class="pills">
                                                            <div class="thumbnail">
                                                                <div class="box-img-thumb">
                                                                    <img class="img-responsive w-100" src="http://zonadeparqueopago.gov.co/Recursos/iconos_2_zonas_parqueo_mtos.png" alt="Icono de motocicleta">
                                                                </div>
                                                                <div class="caption">

                                                                    <h4>Tarifa <p>Fracción de 30 minutos </p>
                                                                    </h4>
                                                                    <h4><small>El pago es por anticipado</small></h4>
                                                                    <div class="caption-parrafos">
                                                                        <p>Hasta 2 horas: $2.100</p>
                                                                        <p>Más de 2 horas: $3.200</p>
                                                                    </div>
                                                                    <h4>Valor retiro cepo</h4>
                                                                    <div class="caption-parrafos">
                                                                        <p><strong>$63.000</strong></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin Area1 -->

                                    <!-- collapseArea2 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingArea2'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordionTarifas' href='#collapseArea2' aria-expanded='true' aria-controls='collapseArea2'>
                                                    ÁREA 2
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseArea2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingArea2'>
                                            <div class='panel-body'>
                                                <div class='row'>
                                                    <div class='col-xs-12 col-sm-6'>
                                                        <div class='box-img-mapa'>
                                                            <h4>Mapa ÁREA 2</h4>
                                                            <img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/A2.jpg' alt='Mapa Area 2' title='Mapa Area 2'>
                                                        </div>
                                                        <div class="box-txt">
                                                            <h4>Horario ÁREA 2</h4>
                                                            <div class="parrafos">
                                                                <p>Lunes a Viernes: 8:30 a.m. - 10:00 p.m.</p>
                                                                <p>Sabados: 10:00 a.m. - 10:00 p.m.</p>
                                                                <i><strong>*O el horario que indique la señal. </strong></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-3'>
                                                        <div class="pills">
                                                            <div class="thumbnail">
                                                                <div class="box-img-thumb">
                                                                    <img class="img-responsive w-100" src="http://zonadeparqueopago.gov.co/Recursos/iconos_1_zonas_parqueo_autos.png" alt="Icono de automovil">
                                                                </div>
                                                                <div class="caption">
                                                                    <h4>Tarifa
                                                                        <p>Fracción de 30 minutos</p>
                                                                    </h4>
                                                                    <h4><small>El pago es por anticipado</small></h4>
                                                                    <div class="caption-parrafos">
                                                                        <p>Hasta 2 horas: $2.600</p>
                                                                        <p>Más de 2 horas: $4.000</p>
                                                                    </div>
                                                                    <h4>Valor retiro cepo</h4>
                                                                    <div class="caption-parrafos">
                                                                        <p><strong>$90.000</strong></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-3'>
                                                        <div class="pills">
                                                            <div class="thumbnail">
                                                                <div class="box-img-thumb">
                                                                    <img class="img-responsive w-100" src="http://zonadeparqueopago.gov.co/Recursos/iconos_2_zonas_parqueo_mtos.png" alt="icono de motocicleta">
                                                                </div>
                                                                <div class="caption">
                                                                    <h4>Tarifa <p>Fracción de 30 minutos </p>
                                                                    </h4>
                                                                    <h4><small>El pago es por anticipado</small></h4>
                                                                    <div class="caption-parrafos">
                                                                        <p>Hasta 2 horas: $1.800</p>
                                                                        <p>Más de 2 horas: $2.800</p>
                                                                    </div>
                                                                    <h4>Valor retiro cepo</h4>
                                                                    <div class="caption-parrafos">
                                                                        <p><strong>$63.000</strong></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin Area2 -->

                                    <!-- collapseArea3 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingArea3'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordionTarifas' href='#collapseArea3' aria-expanded='true' aria-controls='collapseArea3'>
                                                    ÁREA 3
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseArea3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingArea3'>
                                            <div class='panel-body'>
                                                <div class='row'>
                                                    <div class='col-xs-12 col-sm-6'>
                                                        <div class='box-img-mapa'>
                                                            <h4>Mapa ÁREA 3</h4>
                                                            <img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/Ai3.JPG' alt='Mapa Área 3' title='Mapa Area 3'>
                                                        </div>
                                                        <div class="box-txt">
                                                            <h4>Horario ÁREA 3</h4>
                                                            <div class="parrafos">
                                                                <p>Lunes a Viernes: 8:30 a.m. - 10:00 p.m.</p>
                                                                <p>Sabados: 10:00 a.m. - 10:00 p.m.</p>
                                                                <i><strong>*O el horario que indique la señal. </strong></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-3'>
                                                        <div class="pills">
                                                            <div class="thumbnail">
                                                                <div class="box-img-thumb">
                                                                    <img class="img-responsive w-100" src="http://zonadeparqueopago.gov.co/Recursos/iconos_1_zonas_parqueo_autos.png" alt="Icono de automovil">
                                                                </div>
                                                                <div class="caption">
                                                                    <h4>Tarifa
                                                                        <p>Fracción de 30 minutos</p>
                                                                    </h4>
                                                                    <h4><small>El pago es por anticipado</small></h4>
                                                                    <div class="caption-parrafos">
                                                                        <p>Hasta 2 horas: $2.800</p>
                                                                        <p>Más de 2 horas: $4.300</p>
                                                                    </div>
                                                                    <h4>Valor retiro cepo</h4>
                                                                    <div class="caption-parrafos">
                                                                        <p><strong>$90.000</strong></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-3'>
                                                        <div class="pills">
                                                            <div class="thumbnail">
                                                                <div class="box-img-thumb">
                                                                    <img class="img-responsive w-100" src="http://zonadeparqueopago.gov.co/Recursos/iconos_2_zonas_parqueo_mtos.png" alt="icono de motocicleta">
                                                                </div>
                                                                <div class="caption">
                                                                    <h4>Tarifa <p>Fracción de 30 minutos </p>
                                                                    </h4>
                                                                    <h4><small>El pago es por anticipado</small></h4>
                                                                    <div class="caption-parrafos">
                                                                        <p>Hasta 2 horas: $2.000</p>
                                                                        <p>Más de 2 horas: $3.000</p>
                                                                    </div>
                                                                    <h4>Valor retiro cepo</h4>
                                                                    <div class="caption-parrafos">
                                                                        <p><strong>$63.000</strong></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin Area3 -->

                                    <!-- collapseArea4 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingArea4'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordionTarifas' href='#collapseArea4' aria-expanded='true' aria-controls='collapseArea4'>
                                                    ÁREA 4
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseArea4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingArea4'>
                                            <div class='panel-body'>
                                                <div class='row'>
                                                    <div class='col-xs-12 col-sm-6'>
                                                        <div class='box-img-mapa'>
                                                            <h4>Mapa ÁREA 4</h4>
                                                            <img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/A4.jpg' alt='Mapa Área 4' title='Mapa Area 4'>
                                                        </div>
                                                        <div class="box-txt">
                                                            <h4>Horario ÁREA 4</h4>
                                                            <div class="parrafos">
                                                                <p>Lunes a Viernes: 8:30 a.m. - 10:00 p.m.</p>
                                                                <p>Sabados: 10:00 a.m. - 10:00 p.m.</p>
                                                                <i><strong>*O el horario que indique la señal. </strong></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-3'>
                                                        <div class="pills">
                                                            <div class="thumbnail">
                                                                <div class="box-img-thumb">
                                                                    <img class="img-responsive w-100" src="http://zonadeparqueopago.gov.co/Recursos/iconos_1_zonas_parqueo_autos.png" alt="Icono de automovil">
                                                                </div>
                                                                <div class="caption">
                                                                    <h4>Tarifa
                                                                        <p>Fracción de 30 minutos</p>
                                                                    </h4>
                                                                    <h4><small>El pago es por anticipado</small></h4>
                                                                    <div class="caption-parrafos">
                                                                        <p>Hasta 2 horas: $3.100</p>
                                                                        <p>Más de 2 horas: $4.700</p>
                                                                    </div>
                                                                    <h4>Valor retiro cepo</h4>
                                                                    <div class="caption-parrafos">
                                                                        <p><strong>$90.000</strong></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-3'>
                                                        <div class="pills">
                                                            <div class="thumbnail">
                                                                <div class="box-img-thumb">
                                                                    <img class="img-responsive w-100" src="http://zonadeparqueopago.gov.co/Recursos/iconos_2_zonas_parqueo_mtos.png" alt="icono de motocicleta">
                                                                </div>
                                                                <div class="caption">
                                                                    <h4>Tarifa <p>Fracción de 30 minutos </p>
                                                                    </h4>
                                                                    <h4><small>El pago es por anticipado</small></h4>
                                                                    <div class="caption-parrafos">
                                                                        <p>Hasta 2 horas: $2.200</p>
                                                                        <p>Más de 2 horas: $3.300</p>
                                                                    </div>
                                                                    <h4>Valor retiro cepo</h4>
                                                                    <div class="caption-parrafos">
                                                                        <p><strong>$63.000</strong></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin Area4 -->

                                    <!-- collapseArea5 -->
                                    <div class='panel panel-default'>
                                        <div class='panel-heading' role='tab' id='headingArea5'>
                                            <h4 class='panel-title'>
                                                <a role='button' data-toggle='collapse' data-parent='#accordionTarifas' href='#collapseArea5' aria-expanded='true' aria-controls='collapseArea5'>
                                                    ÁREA 5 - Localidad de Barrios Unidos
                                                </a>
                                            </h4>
                                        </div>
                                        <div id='collapseArea5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingArea5'>
                                            <div class='panel-body'>
                                                <div class='row'>
                                                    <div class='col-xs-12 col-sm-6'>
                                                        <div class='box-img-mapa'>
                                                            <h4>Mapa ÁREA 5</h4>
                                                            <img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/Ai5.jpg' alt='Mapa Área 4' title='Mapa Area 4'>
                                                            <br>
                                                            <p>Desde la Calle 80 a la Calle 72 entre la Av. Caracas y el Río Salitre (Transversal 56A).</p>
                                                        </div>
                                                        <div class="box-txt">
                                                            <h4>Horario ÁREA 5</h4>
                                                            <div class="parrafos">
                                                                <p>Lunes a Viernes: 8:30 a.m. - 10:00 p.m.</p>
                                                                <p>Sabados: 10:00 a.m. - 10:00 p.m.</p>
                                                                <i><strong>*O el horario que indique la señal. </strong></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-3'>
                                                        <div class="pills">
                                                            <div class="thumbnail">
                                                                <div class="box-img-thumb">
                                                                    <img class="img-responsive w-100" src="http://zonadeparqueopago.gov.co/Recursos/iconos_1_zonas_parqueo_autos.png" alt="Icono de automovil">
                                                                </div>
                                                                <div class="caption">
                                                                    <h4>Tarifa
                                                                        <p>Fracción de 10 minutos</p>
                                                                    </h4>
                                                                    <h4><small>El pago es por anticipado</small></h4>
                                                                    <div class="caption-parrafos">
                                                                        <p>Hasta 2 horas: $1.100</p>
                                                                        <p>Más de 2 horas: $1.700</p>
                                                                    </div>
                                                                    <h4>Valor retiro cepo</h4>
                                                                    <div class="caption-parrafos">
                                                                        <p><strong>$90.000*</strong></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-3'>
                                                        <div class="pills">
                                                            <div class="thumbnail">
                                                                <div class="box-img-thumb">
                                                                    <img class="img-responsive w-100" src="http://zonadeparqueopago.gov.co/Recursos/iconos_2_zonas_parqueo_mtos.png" alt="icono de motocicleta">
                                                                </div>
                                                                <div class="caption">
                                                                    <h4>Tarifa <p>Fracción de 10 minutos </p>
                                                                    </h4>
                                                                    <h4><small>El pago es por anticipado</small></h4>
                                                                    <div class="caption-parrafos">
                                                                        <p>Hasta 2 horas: $800</p>
                                                                        <p>Más de 2 horas: $1.200</p>
                                                                    </div>
                                                                    <h4>Valor retiro cepo</h4>
                                                                    <div class="caption-parrafos">
                                                                        <p><strong>$63.000*</strong></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin Area5 -->

                                </div>

                            </div>
                        </div>
                        <!-- /#fin Tarifas -->
                    </div>
                    <!-- Termina tarifas -->

                    <div role="tabpanel" class="tab-pane " id="zonas">
                        <div class='zonas'>
                            <div class="msg-1">
                                <p><span class="txt-enf-v1">Estas zonas son operadas por la Terminal de Transporte de Bogotá y sus dos primeras áreas de implementación están ubicadas en el sector de Chicó Norte, localidad de Chapinero, desde la calle 72 a la calle 100 entre la carrera 7 y la Autopista Norte.</span></p>
                            </div>
                            <div class="mapa">
                                <a href="http://zonadeparqueopago.gov.co/Recursos/zonas.jpg" target="_blank" rel="noopener noreferrer">
                                    <img class='img-responsive w-100 img-mapa' src='http://zonadeparqueopago.gov.co/Recursos/zonas.jpg' alt='mapa de las zonas de parqueo pago' title='mapa de las zonas de parqueo pago'>
                                </a>
                            </div>
                        </div>
                    </div>

                    <style>
                        #zonas {
                            display: relative;
                        }

                        .zonas {
                            display: grid;
                            /* gap: 10px; */
                            grid-auto-flow: dense;
                            grid-template-columns: 1fr 1fr 1fr;
                            grid-template-rows: auto;
                            grid-template-areas:
                                'texto imagen imagen';
                        }

                        #zonas .mapa {
                            grid-area: imagen;
                            padding: 15px;
                        }

                        #zonas .msg-1 {
                            grid-area: texto;
                        }

                        @media(max-width:767px) {
                            .box-head {
                                grid-template-columns: 1fr;
                                grid-template-areas:
                                    'logo'
                                    'titulo';
                            }

                            .como,
                            .pago,
                            .zonas {
                                grid-template-columns: 1fr;
                                grid-template-areas:
                                    'texto'
                                    'imagen';
                            }
                        }

                        @media(min-width:768px) {}

                        @media(min-width:992px) {}

                        @media(min-width:1200px) {}
                    </style>
                </div>
            </div>
        </div>
        <!-- Fin Nav-tabs  -->

        <hr>
        <div class="box-cards">
            <a href="https://zonadeparqueopago.gov.co/normatividad.php" target="_blank" rel="noopener noreferrer">
                <div class="card-zpp zoom">
                    <div class='card-logo'>
                        <img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/Normativa.png' alt='logo normatividad' title='logo normatividad'>
                    </div>
                    <div class="card-texto">
                        <h3>Normatividad</h3>
                    </div>
                </div>

            </a>
            <a href="https://bogota.gov.co/sdqs/crear-peticion" target="_blank" rel="noopener noreferrer">
                <div class="card-zpp zoom">
                    <div class='card-logo'>
                        <img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/PQRS.png' alt='logo PQRS' title='logo PQRS'>
                    </div>
                    <div class="card-texto">
                        <h3>PQRSD</h3>
                    </div>
                </div>
            </a>

            <a href="https://zonadeparqueopago.gov.co/preguntas.php" target="_blank" rel="noopener noreferrer">
                <div class="card-zpp zoom">
                    <div class='card-logo'>
                        <img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/preguntasFrecuentes.png' alt='logo Preguntas Frecuentes' title='logo Preguntas Frecuentes'>
                    </div>
                    <div class="card-texto">
                        <h3>Preguntas Frecuentes</h3>
                    </div>
                </div>
            </a>
        </div>
        <style>
            .box-cards {
                display: grid;
                gap: 30px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas: '';
                padding: 5%;
            }


            .box-cards a {
                text-decoration: none !important;
            }

            .box-cards .card-zpp {
                margin: 30px;
            }

            .box-cards .card-texto {
                height: 40px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .box-cards .card-texto h3 {
                display: inline-block;
                font-size: 18px;
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: rgba(25, 28, 58, 1);
                margin: 8px;

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
        </style>


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
                grid-template-columns: 1fr;
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
        <hr>
        <!--#Fin de boton de descarga APK-->


        <div class='row'>
            <div class='col-xs-12 text-center'>
                <div class="msg-2">
                    <p>Para mayor información, escríbenos al correo:</p>
                    <p><mark><a href="mailto:zonadeparqueopago@terminaldetransporte.gov.co"><strong>zonadeparqueopago@terminaldetransporte.gov.co</strong></a></mark></p>
                </div>
            </div>
        </div>
        <hr>
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
        background-image: url('http://zonadeparqueopago.gov.co/Recursos/Imagen01.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: top center;
        border-top: solid 5px #191C3A;
        border-bottom: solid 10px #191C3A;
    }

    #pago .imagen {
        background-image: url('http://zonadeparqueopago.gov.co/Recursos/Imagen02.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: top center;
        border-top: solid 5px #191C3A;
        border-bottom: solid 10px #191C3A;
        /* height: 400px; */

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

        .box-cards {
            grid-template-columns: 1fr 1fr 1fr;

        }

        .box-botones {
            grid-template-columns: repeat(2, 1fr);
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