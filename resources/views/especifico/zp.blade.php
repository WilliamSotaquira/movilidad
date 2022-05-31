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
            <div class='row encabezado'>
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
            </div>
            <br>
        </div>
        <!-- Fin encabezado  -->
        <style>
            .encabezado {
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

            .txt-enf-v1 {
                color: #66e026;
                font-size: 1.1em;
            }
        </style>
        <!-- Nav-tabs  -->
        <div class="row carrusel">
            <div class="col-xs-12 no-padding">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="zpp-tabs" role="presentation" class="active"><a href="#como" aria-controls="como" role="tab" data-toggle="tab">¿Cómo las identifico?</a></li>
                    <li class="zpp-tabs" role="presentation"><a href="#pago" aria-controls="pago" role="tab" data-toggle="tab">¿Cómo pago?</a></li>
                    <li class="zpp-tabs" role="presentation"><a href="#tarifas" aria-controls="tarifas" role="tab" data-toggle="tab">¿Cuáles son las tarifas?</a></li>
                    <li class="zpp-tabs" role="presentation"><a href="#zonas" aria-controls="zonas" role="tab" data-toggle="tab">¿En qué zonas funcionan?</a></li>
                </ul>

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade in active" id="como">
                        <div class="col-xs-12 col-sm-6 no-padding">
                            <div class="imagen">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 no-padding">
                            <div class="texto">
                                <p class="parrafo">Puedes identificar las <span class="resaltar"><strong>Zonas de Parqueo Pago</strong></span> a través del recuadro blanco en el piso y la señal de tránsito que incluye información sobre horarios y tarifas del servicio.</p>
                                <p class="parrafo">Los cupos de estacionamiento para personas con discapacidad, zonas amarillas, vehículos eléctricos, cargue y descargue y bicicletas cuentan con demarcación distintiva.</p>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="pago">
                        <div class="col-xs-12 col-sm-6 no-padding">
                            <div class="imagen">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 no-padding">
                            <div class="texto">
                                <p class="parrafo">Es muy sencillo, en efectivo con el facilitador que está a cargo de los cupos de parqueo o a través de la <span class="resaltar"><strong>App Zona de Parqueo Pago - Ciudadano</strong></span> que debes descargar en tu celular. El pago se realiza de manera anticipada y por fracciones de 30 minutos.</p>
                            </div>
                        </div>
                    </div>

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
                                        <div id='collapseArea1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingArea1'>
                                            <div class='panel-body'>
                                                <div class="row">
                                                    <div class='col-xs-12 col-sm-6'>
                                                        <div class='box-img-mapa'>
                                                            <h4>Mapa ÁREA 1</h4>
                                                            <img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/Ultima_Version/2021-10-25_piezas-web-zonas-de-parqueo-mapa_3_0.png' alt='Mapa Area 1' title='Mapa Area 1'>
                                                        </div>
                                                        <div class="box-txt">
                                                            <h4>Horario ÁREA 1</h4>
                                                            <div class="parrafos">
                                                                <p>Lunes a Viernes: 8:30 a.m. - 10:00 p.m.</p>
                                                                <p>Sabados: 10:00 a.m. - 10:00 p.m.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <style>
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
                                                    </style>
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
                                                            <img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/Ultima_Version/2021-10-25_piezas-web-zonas-de-parqueo-mapa_3_0.png' alt='Mapa Area 2' title='Mapa Area 2'>
                                                        </div>
                                                        <div class="box-txt">
                                                            <h4>Horario ÁREA 2</h4>
                                                            <div class="parrafos">
                                                                <p>Lunes a Viernes: 8:30 a.m. - 10:00 p.m.</p>
                                                                <p>Sabados: 10:00 a.m. - 10:00 p.m.</p>
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
                                                            <img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/Ultima_Version/2021-10-25_piezas-web-zonas-de-parqueo-mapa_3_0.png' alt='Mapa Área 3' title='Mapa Area 3'>
                                                        </div>
                                                        <div class="box-txt">
                                                            <h4>Horario ÁREA 3</h4>
                                                            <div class="parrafos">
                                                                <p>Lunes a Viernes: 8:30 a.m. - 10:00 p.m.</p>
                                                                <p>Sabados: 10:00 a.m. - 10:00 p.m.</p>
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
                                                            <img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/Ultima_Version/2021-10-25_piezas-web-zonas-de-parqueo-mapa_3_0.png' alt='Mapa Área 4' title='Mapa Area 4'>
                                                        </div>
                                                        <div class="box-txt">
                                                            <h4>Horario ÁREA 4</h4>
                                                            <div class="parrafos">
                                                                <p>Lunes a Viernes: 8:30 a.m. - 10:00 p.m.</p>
                                                                <p>Sabados: 10:00 a.m. - 10:00 p.m.</p>
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
                                </div>
                                <!-- /#fin Area4 -->

                            </div>
                            <!-- /#fin Tarifas -->
                        </div>
                    </div>

                </div>

                <!-- Termina tarifas -->

                <div role="tabpanel" class="tab-pane " id="zonas">
                    <div class='row'>
                        <div class="col-xs-12 col-sm-4">
                            <div class="msg-1">
                                <p>Estas zonas son operadas por la Terminal de Transporte de Bogotá y sus dos primeras áreas de implementación están ubicadas en el sector de Chicó Norte, localidad de Chapinero, desde la calle 72 a la calle 100 entre la carrera 7 y la Autopista Norte.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <div class="mapa">
                                <a href="http://zonadeparqueopago.gov.co/Recursos/Ultima_Version/2021-10-25_piezas-web-zonas-de-parqueo-mapa_3_0.png" target="_blank" rel="noopener noreferrer">
                                    <img class='img-responsive w-100 img-mapa' src='http://zonadeparqueopago.gov.co/Recursos/Ultima_Version/2021-10-25_piezas-web-zonas-de-parqueo-mapa_3_0.png' alt='mapa de las zonas de parqueo pago' title='mapa de las zonas de parqueo pago'>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Nav-tabs  -->
    <style>
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
    </style>

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
        font-weight: normal;
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
            width: 100%;
        }

        .encabezado .encabezado-texto {
            height: 468px;
        }

        .encabezado .encabezado-texto p {
            font-size: 1.2em;
        }
    }

    @media(min-width:992px) {
        .encabezado .encabezado-texto p {
            font-size: 1.3em;
        }
    }

    @media(min-width:1200px) {
        .encabezado .encabezado-texto p {
            font-size: 1.5em;
        }
    }




    @media(min-width:1200px) {}

    .seccion .no-padding {
        padding: 0px !important;
    }

    .tab-content {
        margin-top: 10px;
    }

    .tab-content .col-xs-12,
    .tab-content .col-sm-6 {
        padding-left: 0px;
        padding-right: 0px;
    }

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



    @media(max-width:767px) {
        #como .imagen {
            height: 160px;
        }

        #como .texto {
            height: 610px;
        }



        #pago .imagen {
            height: 73vw;

        }

        #pago .texto {
            height: 610px;
        }


    }

    @media(min-width:768px) {
        #como .texto {
            height: 400px !important;
        }


        #pago .texto {
            height: 400px !important;
        }

        #pago .texto .parrafo {
            font-size: 1.2em;
            margin: 8px;
        }
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

    #accordionTarifas .panel-heading{
        padding: 6px 15px !important;
    }

    @media(max-width:767px) {
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

    /* @media(min-width:768px) {
        .pills {
            margin: 0px 30px;
        }
    }
 */

    .msg-1 {
        color: rgba(255, 255, 255, 1);
        background-color: #191C3A;
        padding: 20px;
        font-weight: 500;
        text-align: center;
        line-height: 1.2;
    }



    @media(max-width:767px) {
        .msg-1 {
            /* font-size: calc(0.55em + 1vw); */
        }
    }

    @media(min-width:768px) {
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
        .msg-1 {
            font-size: 1.3em;
            margin: auto;
        }
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
        background-color: #191C3A !important;
        border: solid 2px #191C3A !important;
    }

    .zpp-acordeon .panel-heading .panel-title {
        color: #66e026;
        text-align: left;
        padding-left: 15px;
    }

    .zpp-acordeon .panel-heading .panel-title a {
        text-decoration: none;
        font-size: calc(1rem + 0.5vw);
        font-weight: 600;
    }

    .zpp-acordeon .panel-collapse .panel-body {
        background-color: #f5f5f5;
    }

    .titulo {
        margin-top: 30px;
        margin-bottom: 15px;
        border-top: solid 3px #191C3A;
        border-bottom: solid 3px #191C3A;
        background-color: #66e026;

    }

    .titulo h3 {
        font-size: calc(1rem + 0.8vw);
        font-weight: 700;
        text-transform: uppercase;
        color: #191C3A;
        text-shadow: 2px 2px 5px #4e4e4e;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 15px;
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
</style>