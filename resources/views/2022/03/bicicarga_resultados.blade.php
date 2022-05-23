@extends('welcome')
@section('contenido')


<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid resultados_bc no-gutter'>
    <div class='encabezado'>
        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2021/bc-sf-recurso_51.png' alt='Encabezado BiciCarga' title='Encabezado BiciCarga'>
    </div>
    <div class="rpte1">

        <div class="box-bca">
            <img class='img-responsive w-100 img1' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-04-2022/bc_recurso_21_a.png' alt='imagen reporte de indicadores 11/20 - 03/21' title='imagen reporte de indicadores 11/20 - 03/21'>
        </div>
        <div class="box-bca">
            <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/reporte_final_indicadores_bicicarga.pdf">
                <img class='img-responsive w-100 img2' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-05-2021/bc-sf-recurso_5.png' alt='De clic aqu para descargar el informe en formato PDF' title='De clic aqu para descargar el informe en formato PDF'>
            </a>
        </div>
        <div class="box-bcv">
            <div class="box-text">
                <div class="box-title">
                    <h3 class=" title1 bcb">Generalidades del piloto BiciCarga <br> Modelo 1: Operación centralizada</h3>
                </div>
                <div class="box-paragraph ">
                    <p class="paragraph bcb">El modelo de operación centralizada permite que las empresas que cuentan con instalaciones dentro de la ciudad puedan migrar de un esquema de distribución con flota convencional a una de distribución con bicicletas eléctricas. A continuación se presenta la descripción general de las empresas participantes.</p>
                </div>
            </div>
            <div class="box-img">
                <!-- <img class='img-responsive w-100 ' src='' alt='' title=''> -->
                <div class='row'>
                    <!-- xs -->
                    <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-04-2022/bc-mn-recurso_23_a.png' alt='imagen comparativa que muestra como ejemplo dos empresas y sus esquemas de distribución' title='imagen comparativa que muestra como ejemplo dos empresas y sus esquemas de distribución'>
                    </div>
                    <!-- lg -->
                    <div class='col-sm-12 hidden-xs'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-04-2022/bc-sf-recurso_7_a.png' alt='imagen comparativa que muestra como ejemplo dos empresas y sus esquemas de distribución' title='imagen comparativa que muestra como ejemplo dos empresas y sus esquemas de distribución'>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-bcb">
            <div class="box-text">
                <div class="box-title">
                    <h3 class="title1 bcv">Características de los vehículos</h3>
                </div>
                <div class="img-crs">
                    <div class='row'>
                        <div class='col-xs-6'>
                            <h3 class="title2 bca text-center">Empresa 1</h3>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-04-2022/bicicleta_de_carga_delantera.png' alt='imagen de bicicleta de carga delantera' title='imagen de bicicleta de carga delantera'>
                        </div>
                        <div class='col-xs-6'>
                            <h3 class="title2 bca text-center">Empresa 2</h3>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-04-2022/triciclo_de_carga-furgon_trasero.png' alt='imagen de bicicleta de carga delantera' title='imagen de bicicleta de carga delantera'>

                        </div>
                    </div>
                    <div class="matriz">
                        <div class='row box-matriz'>
                            <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                                <span class="enf1 bca text-center"><strong># de vehículos</strong></span>
                            </div>
                            <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                                <p><span class="enf2 bcv">1</span></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 center-box'>
                                <p><span class="enf2 bcv">2</span></p>
                            </div>
                        </div>
                        <div class='row box-matriz'>
                            <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                                <span class="enf1 bca text-center"><strong>Consumo energético</strong></span>
                                <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/recurso1.png' alt='icono batería' title='icono batería'>
                            </div>
                            <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                                <p><span class="enf2 bcv">64 kWh / Mes</span></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 center-box'>
                                <p><span class="enf2 bcv">100 kWh / Mes</span></p>
                            </div>
                        </div>
                        <div class='row box-matriz'>
                            <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                                <span class="enf1 bca text-center"><strong>Autonomía</strong></span>
                                <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/recurso2.png' alt='icono ruta' title='icono ruta'>
                            </div>
                            <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                                <p><span class="enf2 bcv">40 Km</span></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 center-box'>
                                <p><span class="enf2 bcv">40 Km</span></p>
                            </div>
                        </div>
                        <div class='row box-matriz'>
                            <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                                <span class="enf1 bca text-center"><strong>Tipo de batería</strong></span>
                                <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/recurso3.png' alt='icono batería Litio' title='icono batería Litio'>
                            </div>
                            <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                                <p><span class="enf2 bcv">Litio</span></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 center-box'>
                                <p><span class="enf2 bcv">Litio</span></p>
                            </div>
                        </div>
                        <div class='row box-matriz'>
                            <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                                <span class="enf1 bca text-center"><strong>Tiempo de carga 100%</strong></span>
                                <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/recurso4.png' alt='icono tiempo de carga al 100 por ciento' title='icono tiempo de carga al 100 por ciento'>
                            </div>
                            <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                                <p><span class="enf2 bcv">6 Horas</span></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 center-box'>
                                <p><span class="enf2 bcv">6 - 8 Horas</span></p>
                            </div>
                        </div>
                        <div class='row box-matriz'>
                            <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                                <span class="enf1 bca text-center"><strong>Capacidad de carga por peso</strong></span>
                                <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/recurso5.png' alt='icono de Kilogramo' title='icono de Kilogramo'>
                            </div>
                            <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                                <p><span class="enf2 bcv">100 Kg</span></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 center-box'>
                                <p><span class="enf2 bcv">300 Kg</span></p>
                            </div>
                        </div>
                        <div class='row box-matriz'>
                            <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                                <span class="enf1 bca text-center"><strong>Capacidad de carga por volúmen</strong></span>
                                <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/recurso6.png' alt='icono de Kilogramo' title='icono de Kilogramo'>
                            </div>
                            <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                                <p><span class="enf2 bcv">0,7 m<sup>3</sup></span></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 center-box'>
                                <p><span class="enf2 bcv">1.3 m<sup>3</sup></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-bcv">
            <div class="box-text">
                <div class="box-title">
                    <h3 class="title1 bcb">Generalidades del piloto BiciCarga <br> Modelo 2: Plataforma de cross-docking o colaborativa</h3>
                </div>
                <div class="box-paragraph">
                    <p class="paragraph bcb">Se usa una plataforma colaborativa para distribuir las mercancías partiendo de un único punto de acopio ubicado en una zona estratégica de la ciudad. En ella se reciben los pedidos para distribuirlos en bicicletas o triciclos eléctricos a su destino final. La razón fundamental detrás de la ubicación dentro del centro es que permite las entregas de última milla se hagan en bicicleta, eliminado al menos una parte de los movimientos realizados en la zona por vehículos de carga convencionales.</p>
                </div>
            </div>
            <div class="box-img">
                <img class='img-responsive w-100 ' src='' alt='' title=''>
                <div class='row'>
                    <!-- xs -->
                    <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso17_0.png' alt='imagen comparativa que muestra como ejemplo dos empresas y sus esquemas de distribución' title='imagen comparativa que muestra como ejemplo dos empresas y sus esquemas de distribución'>
                    </div>
                    <!-- lg -->
                    <div class='col-sm-12 hidden-xs'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso16_0.png' alt='imagen comparativa que muestra como ejemplo dos empresas y sus esquemas de distribución' title='imagen comparativa que muestra como ejemplo dos empresas y sus esquemas de distribución'>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-bcb">
            <div class="box-text">
                <div class="box-title">
                    <h3 class="title1 bcv">Características de los vehículos</h3>
                </div>
                <div class="img-crs">
                    <div class='row'>
                        <div class='col-xs-6'>
                            <h3 class="title2 bca">Empresa 3</h3>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-04-2022/bicicleta_de_carga_delantera.png' alt='imagen de bicicleta de carga delantera' title='imagen de bicicleta de carga delantera'>
                        </div>
                        <div class='col-xs-6'>
                            <h3 class="title2 bca">Empresa 4</h3>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-04-2022/triciclo_de_carga-furgon_trasero.png' alt='imagen de bicicleta de carga delantera' title='imagen de bicicleta de carga delantera'>

                        </div>
                    </div>

                    <div class="matriz">
                        <div class='row box-matriz'>
                            <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                                <span class="enf1 bca text-center"><strong># de vehículos</strong></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                                <p><span class="enf2 bcv">2</span></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 center-box'>
                                <p><span class="enf2 bcv">3</span></p>
                            </div>
                        </div>
                        <div class='row box-matriz'>
                            <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                                <span class="enf1 bca text-center"><strong>Consumo energético</strong></p>
                                    <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/recurso1.png' alt='icono batería' title='icono batería'>
                            </div>
                            <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                                <p><span class="enf2 bcv">100 kWh / Mes</span></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 center-box'>
                                <p><span class="enf2 bcv">64 kWh / Mes</span></p>
                            </div>
                        </div>
                        <div class='row box-matriz'>
                            <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                                <span class="enf1 bca text-center"><strong>Autonomía</strong></p>
                                    <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/recurso2.png' alt='icono ruta' title='icono ruta'>
                            </div>
                            <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                                <p><span class="enf2 bcv">25 Km</span></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 center-box'>
                                <p><span class="enf2 bcv">30 Km</span></p>
                            </div>
                        </div>
                        <div class='row box-matriz'>
                            <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                                <span class="enf1 bca text-center"><strong>Tipo de batería</strong></p>
                                    <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/recurso3.png' alt='icono batería Litio' title='icono batería Litio'>
                            </div>
                            <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                                <p><span class="enf2 bcv">Litio</span></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 center-box'>
                                <p><span class="enf2 bcv">Litio</span></p>
                            </div>
                        </div>
                        <div class='row box-matriz'>
                            <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                                <span class="enf1 bca text-center"><strong>Tiempo de carga 100%</strong></p>
                                    <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/recurso4.png' alt='icono tiempo de carga al 100 por ciento' title='icono tiempo de carga al 100 por ciento'>
                            </div>
                            <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                                <p><span class="enf2 bcv">8 Horas</span></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 center-box'>
                                <p><span class="enf2 bcv">8 Horas</span></p>
                            </div>
                        </div>
                        <div class='row box-matriz'>
                            <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                                <span class="enf1 bca text-center"><strong>Capacidad de carga por peso</strong></p>
                                    <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/recurso5.png' alt='icono de Kilogramo' title='icono de Kilogramo'>
                            </div>
                            <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                                <p><span class="enf2 bcv">250 Kg</span></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 center-box'>
                                <p><span class="enf2 bcv">100 Kg</span></p>
                            </div>
                        </div>
                        <div class='row box-matriz'>
                            <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                                <span class="enf1 bca text-center"><strong>Capacidad de carga por volúmen</strong></p>
                                    <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-04-2022/recurso6.png' alt='icono de Kilogramo' title='icono de Kilogramo'>
                            </div>
                            <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                                <p><span class="enf2 bcv">1,152 m<sup>3</sup></span></p>
                            </div>
                            <div class='col-xs-6 col-sm-5 center-box'>
                                <p><span class="enf2 bcv">0.175 m<sup>3</sup></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-bca">
            <div class="box-text">
                <div class="box-title">
                    <h3 class="title1 bcb">Eficiencia Operacional <br><strong><span class="enfv2">Modelos 1 y 2</span></strong></h3>
                </div>
            </div>
            <div class="box-img">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_19_0.png' alt='imagen de vehículos eléctricos de BiciCarga' title='imagen de vehículos eléctricos de BiciCarga'>
            </div>
            <div class="box-eo">
                <div class='row'>
                    <div class='col-xs-5 col-sm-3 col-md-3 box-img-oe'>
                        <div>
                            <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_20_0.png' alt='icono ruta' title='icono ruta'>
                        </div>
                    </div>
                    <div class='col-xs-7 col-sm-3 col-md-3 box-paragraph-oe'>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                <p clas>Distancia recorrida:</p>
                            </div>
                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                <span class="enfb2">11.776</span> <span class="enfv2">Km</span>
                            </div>
                        </div>
                    </div>
                    <div class='col-xs-12 col-sm-6 col-md-6'>
                        <div class="box-txt-oe">
                            <p><span class="enfv1">Equivale a:</span></p>
                            <p>28 veces la distancia entre Bogotá y Medellín (418 Km)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-img">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_21_0.png' alt='imagen que describe la distancia equivalente' title='imagen que describe la distancia equivalente'>
            </div>
            <div class="box-eo">
                <div class='row'>
                    <div class='col-xs-5 col-sm-3 col-md-3 box-img-oe'>
                        <div>
                            <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_22_0.png' alt='icono cajas de empaque' title='icono cajas de empaque'>
                        </div>
                    </div>
                    <div class='col-xs-7 col-sm-3 col-md-3 box-paragraph-oe'>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                <p>Pedidos entregados:</p>
                            </div>
                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                <span class="enfb2">45.199</span>
                            </div>
                        </div>
                    </div>
                    <div class='col-xs-12 col-sm-6 col-md-6'>
                        <div class="box-txt-oe">
                            <p><span class="enfv1">Equivale a:</span></p>
                            <p>110 clientes recibiendo pedidos todos los días durante un año</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-img">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_23_0.png' alt='imagen motos y almacenamiento' title='imagen motos y almacenamiento'>
            </div>
            <div class="box-eo">
                <div class='row'>
                    <div class='col-xs-5 col-sm-3 col-md-3 box-img-oe'>
                        <div>
                            <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_24_0.png' alt='icono Kilogramo' title='icono Kilogramo'>
                        </div>
                    </div>
                    <div class='col-xs-7 col-sm-3 col-md-3 box-paragraph-oe'>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                <p>Mercancia entregada:</p>
                            </div>
                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                <span class="enfb2">59.424</span> <span class="enfv2">Kg</span>
                            </div>
                        </div>
                    </div>
                    <div class='col-xs-12 col-sm-6 col-md-6'>
                        <div class="box-txt-oe">
                            <p><span class="enfv1">Equivale a:</span></p>
                            <p>20 camiones de 3 toneladas cargados con bultos de cemento</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-img">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_38.png' alt='imagen que describe la distancia equivalente' title='imagen que describe la distancia equivalente'>
            </div>
            <br>
        </div>
        <div class="box-bcb">
            <div class="box-text">
                <div class="box-title">
                    <h3 class="title1 bca">Eficiencia operacional por empresa y tipo de vehículo</h3>
                </div>
                <div class="box-operacion">
                    <div class='row'>
                        <div class='col-xs-6 col-sm-6 col-md-6'>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="icono-op">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_26.png' alt='icono calendario' title='icono calendario'>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="title-icono">
                                        <p>Periodo del reporte</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='col-xs-6 col-sm-6 col-md-6'>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="icono-op">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_27.png' alt='icono cajas de empaque' title='icono cajas de empaque'>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="title-icono">
                                        <p>Pedidos entregados (#)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='col-xs-6 col-sm-6 col-md-6'>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="icono-op">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_28.png' alt='icono ruta' title='icono ruta'>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="title-icono">
                                        <p>Distancia total recorrida (Km)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='col-xs-6 col-sm-6 col-md-6'>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="icono-op">
                                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_29.png' alt='icono masa - kilogramo' title='icono masa - kilogramo'>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                    <div class="title-icono">
                                        <p>kilogramos entregados (Kg)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class='table table-bordered table-striped'>
                        <tr>
                            <th colspan="2"></th>
                            <th>
                                <div class="table-icon">
                                    <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_26.png' alt='icono calendario' title='icono calendario'>
                                </div>
                            </th>
                            <th>
                                <div class="table-icon">
                                    <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_28.png' alt='icono ruta' title='icono ruta'>
                                </div>
                            </th>
                            <th>
                                <div class="table-icon">
                                    <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_27.png' alt='icono cajas de empaque' title='icono cajas de empaque'>
                                </div>
                            </th>
                            <th>
                                <div class="table-icon">
                                    <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_29.png' alt='icono masa - kilogramo' title='icono masa - kilogramo'>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <span class="th1">Empresa 1</span>
                            </td>
                            <td><span class="th2">BiciCarga 1</span></td>
                            <td>Del 18/11/2020 al 27/06/2021 (8 meses)</td>
                            <td>3.628</td>
                            <td>1.272</td>
                            <td>33.508</td>
                        </tr>
                        <tr>
                            <td rowspan="2">
                                <span class="th1">Empresa 2</span>
                            </td>
                            <td>
                                <span class="th2">BiciCarga 2</span>
                            </td>
                            <td>Del 9/12/2020 al 27/12/2020 (1 mes)</td>
                            <td>304</td>
                            <td>92</td>
                            <td>331</td>
                        </tr>
                        <tr>
                            <td><span class="th2">BiciCarga 3</span></td>
                            <td>Del 9/12/2020 al 9/01/2021 - <br>Del 15/03/2021 al 09/06/2021 (5 meses)</td>
                            <td>1.043</td>
                            <td>599</td>
                            <td>2.587</td>
                        </tr>
                        <tr>
                            <td rowspan="2"><span class="th1">Empresa 3</span></td>
                            <td><span class="th2">BiciCarga 5</span></td>
                            <td>Del 15/02/2021 al 26/06/2021</td>
                            <td>1.732</td>
                            <td>5.740</td>
                            <td>9.540</td>
                        </tr>
                        <tr>
                            <td><span class="th2">BiciCarga 6</span></td>
                            <td>Del 15/02/2021 al 26/06/2021</td>
                            <td>1.489</td>
                            <td>5.338</td>
                            <td>9.051</td>
                        </tr>
                        <tr>
                            <td rowspan="3"><span class="th1">Empresa 4</span></td>
                            <td><span class="th2">BiciCarga 11</span></td>
                            <td>Del 10/02/2021 al 26/06/2021</td>
                            <td>1.071</td>
                            <td>12.356</td>
                            <td>1.705</td>
                        </tr>
                        <tr>
                            <td><span class="th2">BiciCarga 12</span></td>
                            <td>Del 10/02/2021 al 26/06/2021</td>
                            <td>1.520</td>
                            <td>9.979</td>
                            <td>1.537</td>
                        </tr>
                        <tr>
                            <td><span class="th2">BiciCarga 13</span></td>
                            <td>Del 29/03/2021 al 26/06/2021</td>
                            <td>988</td>
                            <td>9.821</td>
                            <td>1.165</td>
                        </tr>
                    </table>
                </div>

                <!-- 
        <div class='table-responsive'>
            <p class='text-center'></p>
            <table class='table table-bordered table-striped'>
                <tr>
                    <th rowspan="2"></th>
                    <th><span class="th1">Empresa 1</span></th>
                    <th colspan="2"><span class="th1">Empresa 2</span></th>
                    <th colspan="2"><span class="th1">Empresa 3</span></th>
                </tr>
                <tr>
                    <th><span class="th2">BiciCarga 1</span></th>
                    <th><span class="th2">BiciCarga 2</span></th>
                    <th><span class="th2">BiciCarga 3</span></th>
                    <th><span class="th2">BiciCarga 5</span></th>
                    <th><span class="th2">BiciCarga 6</span></th>
                </tr>
                <tr>
                    <td>
                        <div class="table-icon">
                            <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_26.png' alt='icono calendario' title='icono calendario'>
                        </div>
                    </td>
                    <td>Del 18/11/2020 al 27/06/2021 (8 meses)</td>
                    <td>Del 9/12/2020 al 27/12/2020 (1 mes)</td>
                    <td>Del 9/12/2020 al 9/01/2021 - <br>Del 15/03/2021 al 09/06/2021 (5 meses)</td>
                    <td>Del 15/02/2021 al 26/06/2021</td>
                    <td>Del 15/02/2021 al 28/06/2021</td>
                </tr>

                <tr>
                    <td>
                        <div class="table-icon">
                            <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_28.png' alt='icono ruta' title='icono ruta'>
                        </div>
                    </td>
                    <td>3.628</td>
                    <td>304</td>
                    <td>1.043</td>
                    <td>1.732</td>
                    <td>1.489</td>
                </tr>
                <tr>
                    <td>
                        <div class="table-icon">
                            <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_27.png' alt='icono cajas de empaque' title='icono cajas de empaque'>
                        </div>
                    </td>
                    <td>1.272</td>
                    <td>92</td>
                    <td>599</td>
                    <td>5.740</td>
                    <td>5.338</td>
                </tr>
                <tr>
                    <td>
                        <div class="table-icon">
                            <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2022/recurso_29.png' alt='icono masa - kilogramo' title='icono masa - kilogramo'>
                        </div>
                    </td>
                    <td>33.508</td>
                    <td>331</td>
                    <td>2.587</td>
                    <td>9.540</td>
                    <td>9.051</td>
                </tr>
            </table>
            <p class='text-center'></p>
        </div> -->

            </div>
        </div>
        <div class="box-bca">
            <div class="box-text">
                <div class="box-title">
                    <!-- <h3>Comparación entre motocicleta <span class="enfb1">BiciCarga</span> y de <span class="enfg1">domicilios de supermercado</span></h3> -->
                    <h3 class="title1 bcv">Comparación entre motocicleta de <br> <span class="enfg2">domicilios de supermercado</span> y <span class="enfb2">BiciCarga</span></h3>
                </div>
            </div>
            <div class="img-crs-2">
                <div class='row'>
                    <div class='col-xs-6'>
                        <div class="box-img-crs">
                            <div class="bic-title">
                                <h3>Motocicleta</h3>
                            </div>
                            <div class="bic-img">
                                <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_49.png' alt='imagen de motocicleta' title='imagen de motocicleta'>
                            </div>
                        </div>
                    </div>
                    <div class='col-xs-6'>
                        <div class="box-img-crs">
                            <div class="bic-title">
                                <h3>BiciCarga de Carga delantera</h3>
                            </div>
                            <div class="bic-img">
                                <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_50.png' alt='imagen de bicicleta de carga delantera' title='imagen de bicicleta de carga delantera'>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="matriz">

                    <div class='row box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><strong>Capacidad de carga</strong></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_42.png' alt='icono Masa Kg' title='icono Masa Kg'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enfg1">50 Kg</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enfv1">100 Kg</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><strong>Autonomía</strong></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_43.png' alt='icono Masa Kg' title='icono Masa Kg'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enfg1">N/A</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enfv1">40 Km</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><strong>Tipo de combustible</strong></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_46.png' alt='icono combustible' title='icono combustible'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enfg1">Gasolina corriente</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enfv1">Electro-asistido</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><strong>Recorrido diario</strong></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_45.png' alt='icono tiempo de carga al 100 por ciento' title='icono tiempo de carga al 100 por ciento'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enfg1">14,6 Km</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enfv1">19,7 Km</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><strong>Entregas / día</strong></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_52.png' alt='icono de entrega' title='icono de entrega'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enfg1">5</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enfv1">7</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><strong>Emisiones / mes</strong></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_47.png' alt='icono escape vehículo' title='icono escape vehículo'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enfg1">41 Kg CO<sub>2</sub></span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enfv1">0 Kg CO<sub>2</sub></span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><strong>Tiempo de operación</strong></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_48.png' alt='icono reloj' title='icono reloj'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enfg1">8 Horas</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enfv1">8 Horas</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-bcb">
            <div class="box-text">
                <div class="box-title">
                    <!-- <h3>Comparación entre motocicleta <span class="enfb1">BiciCarga</span> y de <span class="enfg1">domicilios de supermercado</span></h3> -->
                    <h3 class="title1 bcn">Comparación entre <br> <span class="enf2 bcg">furgón</span> y <span class="enf2 bca">BiciCarga</span></h3>
                </div>
            </div>
            <div class="img-crs-2">
                <div class='row'>
                    <div class='col-xs-6'>
                        <div class="box-img-crs">
                            <div class="bic-title">
                                <h3><span class="enf2 bca">Furgón</span></h3>
                            </div>
                            <div class="bic-img">
                                <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_1.png' alt='imagen de furgón' title='imagen de furgón'>
                            </div>
                        </div>
                    </div>
                    <div class='col-xs-6'>
                        <div class="box-img-crs">
                            <div class="bic-title">
                                <h3><span class="enf2 bca">Triciclo de carga - furgón trasero</span></h3>
                            </div>
                            <div class="bic-img">
                                <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_2.png' alt='imagen de bicicleta de carga furgón trasero' title='imagen de bicicleta de carga furgón trasero'>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="matriz">

                    <div class='row box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Capacidad de carga</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_625.png' alt='icono Masa Kg' title='icono Masa Kg'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enfg1">50 Kg</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enfv1">100 Kg</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Autonomía</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_725.png' alt='icono Masa Kg' title='icono Masa Kg'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enfg1">N/A</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enfv1">40 Km</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Tipo de combustible</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_825.png' alt='icono combustible' title='icono combustible'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enfg1">Gasolina corriente</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enfv1">Electro-asistido</span></p>
                        </div>
                    </div>
                    <!-- <div class='row  box-matriz-2'>
                <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                    <p><span class="enf1 text-center bcn">Recorrido diario</span></p>
                    <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_925.png' alt='icono tiempo de carga al 100 por ciento' title='icono tiempo de carga al 100 por ciento'>
                </div>
                <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                    <p><span class="enfg1">14,6 Km</span></p>
                </div>
                <div class='col-xs-6 col-sm-5 center-box'>
                    <p><span class="enfv1">19,7 Km</span></p>
                </div>
            </div> -->
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Entregas / día</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_1025.png' alt='icono de entrega' title='icono de entrega'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enfg1">5</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enfv1">7</span></p>
                        </div>
                    </div>
                    <!-- <div class='row  box-matriz-2'>
                <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                    <p><span class="enf1 text-center bcn">Emisiones / mes</span></p>
                    <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_1125.png' alt='icono escape vehículo' title='icono escape vehículo'>
                </div>
                <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                    <p><span class="enfg1">41 Kg CO<sub>2</sub></span></p>
                </div>
                <div class='col-xs-6 col-sm-5 center-box'>
                    <p><span class="enfv1">0 Kg CO<sub>2</sub></span></p>
                </div>
            </div> -->
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Tiempo de operación</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_1225.png' alt='icono reloj' title='icono reloj'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enfg1">8 Horas</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enfv1">8 Horas</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-bcv">
            <div class="box-text">
                <div class="box-title">
                    <!-- <h3>Comparación entre motocicleta <span class="enfb1">BiciCarga</span> y de <span class="enfg1">domicilios de supermercado</span></h3> -->
                    <h3 class="title1 bca">Comparación entre <br> <span class="enf2 bcn2">camión</span> y <span class="enf2 bca">BiciCarga</span></h3>
                </div>
            </div>
            <div class="img-crs-2">
                <div class='row'>
                    <div class='col-xs-6'>
                        <div class="box-img-crs">
                            <div class="bic-title">
                                <h3><span class="enf1 bcn2">Camión</span></h3>
                            </div>
                            <div class="bic-img">
                                <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_13n.png' alt='imagen de camión' title='imagen de camión'>
                            </div>
                        </div>
                    </div>
                    <div class='col-xs-6'>
                        <div class="box-img-crs">
                            <div class="bic-title">
                                <h3><span class="enf1 bca">Triciclo de carga - furgón trasero</span></h3>
                            </div>
                            <div class="bic-img">
                                <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_14n.png' alt='imagen de bicicleta de carga furgón trasero' title='imagen de bicicleta de carga furgón trasero'>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="matriz">

                    <div class='row box-matriz-3'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Capacidad de carga</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_625.png' alt='icono Masa Kg' title='icono Masa Kg'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enf1 bcn2">900 Kg</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enf1 bca">250 Kg</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Autonomía</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_725.png' alt='icono Masa Kg' title='icono Masa Kg'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enf1 bcn2">N/A</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enf1 bca">40 Km</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Tipo de combustible</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_825.png' alt='icono combustible' title='icono combustible'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enf1 bcn2">Gasolina corriente</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enf1 bca">Electro-asistido</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Recorrido diario</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_925.png' alt='icono tiempo de carga al 100 por ciento' title='icono tiempo de carga al 100 por ciento'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enf1 bcn2">47 Km / día</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enf1 bca">32,4 Km 7 día</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Entregas / día</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_1025.png' alt='icono de entrega' title='icono de entrega'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enf1 bcn2">11 por hora / 90 al día</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enf1 bca">20 por hora / 107 al día</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Emisiones / mes</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_1125.png' alt='icono escape vehículo' title='icono escape vehículo'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enf1 bcn2">297,2 Kg CO<sub>2</sub></span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enf1 bca">0 Kg CO<sub>2</sub></span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Tiempo de operación</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_1225.png' alt='icono reloj' title='icono reloj'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enf1 bcn2">8 Horas</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enf1 bca">5,4 Horas</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-bcb">
            <div class="box-text">
                <div class="box-title">
                    <!-- <h3>Comparación entre motocicleta <span class="enfb1">BiciCarga</span> y de <span class="enfg1">domicilios de supermercado</span></h3> -->
                    <h3 class="title1 bca">Comparación entre <span class="enf2 bcg">Motocicleta</span> y<br> <span class="enf2 bcv">BiciCarga</span> de empresa de mensajería</h3>
                </div>
            </div>
            <div class="img-crs-2">
                <div class='row'>
                    <div class='col-xs-6'>
                        <div class="box-img-crs">
                            <div class="bic-title">
                                <h3><span class="enf2 bcn">Motocicleta</span></h3>
                            </div>
                            <div class="bic-img">
                                <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_49.png' alt='imagen de furgón' title='imagen de furgón'>
                            </div>
                        </div>
                    </div>
                    <div class='col-xs-6'>
                        <div class="box-img-crs">
                            <div class="bic-title">
                                <h3><span class="enf2 bcn">Triciclo de carga delantera</span></h3>
                            </div>
                            <div class="bic-img">
                                <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_2.png' alt='imagen de bicicleta de carga furgón trasero' title='imagen de bicicleta de carga furgón trasero'>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="matriz">

                    <div class='row box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Capacidad de carga</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_625.png' alt='icono Masa Kg' title='icono Masa Kg'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enf2 bcg">40 Kg</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enfv1">100 Kg</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Autonomía</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_725.png' alt='icono Masa Kg' title='icono Masa Kg'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enf2 bcg">N/A</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enf2 bcv">40 Km</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Tipo de combustible</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_825.png' alt='icono combustible' title='icono combustible'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enf2 bcg">Gasolina corriente</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enf2 bcv">Electro-asistido</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Recorrido diario</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_925.png' alt='icono tiempo de carga al 100 por ciento' title='icono tiempo de carga al 100 por ciento'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enf2 bcg">60 Km</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enf2 bcv">39 Km</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Entregas / día</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_1025.png' alt='icono de entrega' title='icono de entrega'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enf2 bcg">31 por hora / 250 al día</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enf2 bcv">58 por hora / 352 al día</span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Emisiones / mes</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_1125.png' alt='icono escape vehículo' title='icono escape vehículo'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enf2 bcg">169,5 Kg CO<sub>2</sub></span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enf2 bcv">0 Kg CO<sub>2</sub></span></p>
                        </div>
                    </div>
                    <div class='row  box-matriz-2'>
                        <div class='col-xs-12 col-sm-2 col-sm-push-5 center-box'>
                            <p><span class="enf1 text-center bcn">Tiempo de operación</span></p>
                            <img class='img-responsive icono-matriz' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_1225.png' alt='icono reloj' title='icono reloj'>
                        </div>
                        <div class='col-xs-6 col-sm-5 col-sm-pull-2 center-box'>
                            <p><span class="enf2 bcg">8 Horas</span></p>
                        </div>
                        <div class='col-xs-6 col-sm-5 center-box'>
                            <p><span class="enf2 bcv">5,7 Horas</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-bcv">
            <div class="box-text">
                <div class="box-title">
                    <h3 class="title bcb">Impacto ambiental<br><strong><span class="enf2 bca">Modelos 1 y 2</span></strong></h3>
                </div>
            </div>
            <div class="box-img">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_53n.png' alt='imagen de vehículos eléctricos de BiciCarga' title='imagen de vehículos eléctricos de BiciCarga'>
            </div>
            <div class="box-eo">
                <div class='row'>
                    <div class='col-xs-5 col-sm-3 col-md-3 box-img-oe'>
                        <div>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_54n.png' alt='icono ruta' title='icono ruta'>
                        </div>
                    </div>
                    <div class='col-xs-7 col-sm-3 col-md-3 box-paragraph-oe'>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                <span class="enf2 bcb"><strong>CO<sub>2</sub></strong> reducido:</span>
                            </div>
                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                <span class="enf3 bcn2">1.97 Ton CO<sub>2</sub></span>
                            </div>
                        </div>
                    </div>
                    <div class='col-xs-12 col-sm-6 col-md-6'>
                        <div class="box-txt-oe">
                            <p><span class="enf1 bca">Equivale a:</span></p>
                            <p><span class="enf-normal bcb">La absorción del <strong>CO<sub>2</sub></strong> de </span> <span class="enf3 bcn2">98</span> <span class="enf-normal bcb">árboles al año</span> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-img">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_58n.png' alt='imagen que describe la distancia equivalente' title='imagen que describe la distancia equivalente'>
            </div>
            <div class="box-eo">
                <div class='row'>
                    <div class='col-xs-5 col-sm-3 col-md-3 box-img-oe'>
                        <div>
                            <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_56n.png' alt='icono relámpago' title='icono relámpago'>
                        </div>
                    </div>
                    <div class='col-xs-7 col-sm-3 col-md-3 box-paragraph-oe'>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                <span class="enf2 bcb">Consumo energético:</span>
                            </div>
                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                <span class="enf3 bcn2">2.423 kWh</span>
                            </div>
                        </div>
                    </div>
                    <div class='col-xs-12 col-sm-6 col-md-6'>
                        <div class="box-txt-oe">
                            <p><span class="enf1 bca">Equivale a:</span></p>
                            <p>Consumo promedio mensual de <span class="enf2 bcn2">16 familias</span> conformadas por cuatro personas colombianas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-img">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_57n.png' alt='imagen motos y almacenamiento' title='imagen motos y almacenamiento'>
            </div>
        </div>
        <div class="box-bcb">
            <div class="box-text">
                <div class="box-title">
                    <h3 class="title1 bca">Resumen de resultados</h3>
                </div>
            </div>
            <div class="table-responsive">
                <table class='table table-bordered table-striped'>
                    <tr>
                        <th rowspan="2"></th>
                        <th>Empresa 1</th>
                        <th>Empresa 2</th>
                        <th>Empresa 3</th>
                        <th>Empresa 4</th>
                    </tr>
                    <tr>
                        <td>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_16n.png' alt='comparación entre motocicleta y BiciCarga' title='comparación entre motocicleta y BiciCarga'>
                        </td>
                        <td>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_18n.png' alt='Comparación entre furgón y 2 BiciCarga' title='Comparación entre furgón y 2 BiciCarga'>
                        </td>
                        <td>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_18n.png' alt='Comparación entre furgón y 2 BiciCarga' title='Comparación entre furgón y 2 BiciCarga'>
                        </td>
                        <td>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-04-2022/recurso_19n.png' alt='Comparación entre 3 motocicletas y 3 BiciCarga' title='Comparación entre 3 motocicletas y 3 BiciCarga'>
                        </td>
                    </tr>
                    <tr>
                        <td>Numero de entregas</td>
                        <td>28% <span class="glyphicon glyphicon-arrow-up" style="color: rgba(0, 168, 78, 1);"></span></td>
                        <td>30% <span class="glyphicon glyphicon-arrow-down" style="color: rgba(0, 168, 78, 1);"></span></td>
                        <td>67% <span class="glyphicon glyphicon-arrow-up" style="color: rgba(0, 168, 78, 1);"></span></td>
                        <td>37% <span class="glyphicon glyphicon-arrow-up" style="color: rgba(0, 168, 78, 1);"></span></td>
                    </tr>
                    <tr>
                        <td>Distancia recorrida por día</td>
                        <td>32% <span class="glyphicon glyphicon-arrow-up" style="color: rgba(0, 168, 78, 1);"></span></td>
                        <td>-</td>
                        <td>31% <span class="glyphicon glyphicon-arrow-down" style="color: rgba(0, 168, 78, 1);"></span></td>
                        <td>35% <span class="glyphicon glyphicon-arrow-down" style="color: rgba(0, 168, 78, 1);"></span></td>
                    </tr>
                    <tr>
                        <td>Tiempo de distribución (horas)</td>
                        <td>0%</td>
                        <td>0%</td>
                        <td>33% <span class="glyphicon glyphicon-arrow-down" style="color: rgba(0, 168, 78, 1);"></span></td>
                        <td>29% <span class="glyphicon glyphicon-arrow-down" style="color: rgba(0, 168, 78, 1);"></span></td>
                    </tr>
                    <tr>
                        <td>Reducción de emisones (CO<sub>2</sub> Kg/mes )</td>
                        <td>52</td>
                        <td>113</td>
                        <td>162</td>
                        <td>96</td>
                    </tr>
                    <tr>
                        <td>Ahorro de combustible / mes</td>
                        <td>$51.300</td>
                        <td>$90.000</td>
                        <td>$175.000</td>
                        <td>$72.800</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    <div class="rpte2">
        <div class="box-text">
            <div class="box-title">
                <h3 class="title1 bca">¿Quieres conocer el informe preliminar de resultados de abril de 2021?</h3>
            </div>
        </div>
        <div class="box-rpte2">
            <a class="btn-bc" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-05-2021/resultados_bicicarga_v2.pdf">
            Descárgalo aquí
            </a>
        </div>
    </div>
    <style>
        .box-rpte2 {
            /* height: 100px; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* margin: 20px;}s */
        }


        .btn-bc {
            background-color: rgba(1, 30, 65, 1);
            padding: 15px 25px;
            height: 50px;
            margin: 25px;
            font-size: 14px;
            font-weight: 700;
            text-align: center;
            line-height: 1.4;
            text-decoration: none;
            color: rgba(255, 255, 255, 1);
        }

        .btn-bc:hover {
            background-color: rgba(0, 168, 78, 1);
            color: rgba(255, 255, 255, 1);
        }

        .btn-bc:hover {
            background-color: rgba(0, 168, 78, 1);
            color: rgba(255, 255, 255, 1);
        }

        .btn-bc:focus,
        .btn-bc:active {
            color: rgba(25, 25, 25, 1);
            background-color: rgba(157, 157, 156, 1);
        }
    </style>
    <hr>
</div>
<style>
    .encabezado {
        background-color: rgba(1, 30, 65, 1);
        border-radius: 2px;
        border-bottom: solid 10px rgba(0, 168, 78, 1);

    }

    .encabezado img {
        padding: 0% 5%;
    }

    .matriz p {
        margin: 8px;
        font-size: 14px;
        font-weight: normal;
        text-align: center;
        line-height: 1.2;
        color: rgba(1, 30, 65, 1);

        /* height: 60px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .matriz .icono-matriz {
        max-height: 20px;
        margin: auto;
    }

    .enfv1 {
        font-size: 1.1em;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: rgba(0, 168, 78, 1);
    }

    .enfv2 {
        font-size: 1.2em;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: rgba(0, 168, 78, 1);
    }


    .enfb1 {
        font-size: 1.1em;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: rgba(255, 255, 255, 1);
    }

    .enfb2 {
        font-size: 1.2em;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: rgba(255, 255, 255, 1);
    }

    .enfg1 {
        font-size: 1.1em;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: rgba(157, 157, 156, 1);
    }

    .enfg2 {
        font-size: 1.2em;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: rgba(157, 157, 156, 1);
    }

    .enfa1 {
        font-size: 1.1em;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: rgba(1, 30, 65, 1);
    }

    .enfa2 {
        font-size: 1.2em;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: rgba(1, 30, 65, 1);
    }

    .enfn1 {
        font-size: 1.1em;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: rgba(25, 25, 25, 1);
    }

    .enfn2 {
        font-size: 1.2em;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: tn;
    }

    .bcn {
        color: rgba(25, 25, 25, 1);
    }

    .bcn2 {
        color: rgba(69, 69, 69, 1);
    }

    .bca {
        color: rgba(1, 30, 65, 1);
    }

    .bcv {
        color: rgba(0, 168, 78, 1);
    }

    .bcg {
        color: rgba(157, 157, 156, 1);
    }

    .bcb {
        color: rgba(255, 255, 255, 1);
    }

    .enf-sub {
        font-size: 0.8em;
        font-weight: 700;
        line-height: 1.2;
    }

    .enf-normal {
        font-size: 1em;
        font-weight: 700;
        line-height: 1.4;
    }

    .enf1 {
        font-size: 1em;
        font-weight: 700;
        line-height: 1.2;
    }

    .enf2 {
        font-size: 1.1em;
        font-weight: 700;
        line-height: 1.2;
        color: tn;
    }

    .enf2 {
        font-size: 1.2em;
        font-weight: 700;
        line-height: 1.2;
        color: tn;
    }

    .enf3 {
        font-size: 1.4em;
        font-weight: 700;
        line-height: 1.2;
        color: tn;
    }

    .matriz .box-matriz {
        margin-top: 20px;
    }

    .matriz .center-box {
        /* height: 70px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .box-tabs {
        margin-top: 15px;
    }

    .box-tabs .nav-tabs.nav-justified>li>a {
        margin-right: 0;
        border-radius: 2px !important;
        background-color: rgba(0, 168, 78, 1);
        font-size: 14px;
        font-weight: 700;
        text-align: left;
        line-height: 1.1;
        color: rgba(25, 25, 25, 1);

    }

    .box-tabs .nav-tabs.nav-justified>li:hover>a {
        background-color: rgba(157, 157, 156, 1);
    }

    .box-tabs .nav-tabs>li.active>a,
    .box-tabs .nav-tabs>li.active>a:focus,
    .box-tabs .nav-tabs>li.active>a:hover {
        color: rgba(255, 255, 255, 1);
        cursor: default;
        background-color: rgba(1, 30, 65, 1);
        border: 1px solid #ddd;
        border-bottom-color: transparent
    }

    .rpte1 .box-bca {
        /* background-color: rgba(1, 30, 65, 1); */
        background-color: rgba(1, 30, 65, 1);
        padding-bottom: 20px;
    }

    .rpte1 .box-bcv {
        background-color: rgba(0, 168, 78, 1);
        padding-bottom: 20px;
    }

    .rpte1 .box-bcb {
        background-color: rgba(255, 255, 255, 1);
        padding-bottom: 20px;
    }

    .rpte1 .box-bca .img1 {
        padding: 5%;
    }

    .rpte1 .box-bca .img2 {
        padding-bottom: 15px;
    }

    .box-text {
        padding: 20px;
    }

    .resultados_bc .paragraph {
        font-size: 14px;
        font-weight: normal;
        line-height: 1.4;
    }

    .resultados_bc .title1 {
        font-size: 22px;
        font-weight: 700;
        line-height: 1.2;
    }

    .resultados_bc .title2 {
        font-size: 18px;
        font-weight: 700;
        line-height: 1.2;
    }



    .box-img {
        padding: 5%;
    }

    .img-crs h3 {
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        line-height: 1;
        color: rgba(1, 30, 65, 1);
    }

    .box-eo {
        padding: 20px;
    }

    .box-eo img {
        height: 50px;
        margin: 10px;

    }

    .box-paragraph-oe {
        height: 70px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .box-paragraph-oe p {
        font-size: 1.2em;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(255, 255, 255, 1);
    }

    .box-img-oe {
        height: 70px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: end;
    }

    .box-txt-oe {
        margin-top: 30px;
        padding: 10px;
        height: 70px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .box-txt-oe p {
        font-size: 1.2em;
        font-weight: 500;
        text-align: left;
        line-height: 1.4;
        color: rgba(255, 255, 255, 1);
        margin: 8px;
    }

    .box-operacion {
        margin-top: 40px;
    }

    .box-operacion .icono-op {
        height: 100px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .box-operacion .icono-op img {
        max-width: 60%;
    }

    .box-operacion .title-icono {
        height: 80px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .box-operacion .title-icono p {
        font-size: 1.1em;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: rgba(0, 168, 78, 1);
    }

    .box-text .table-responsive {
        margin-top: 40px;
    }

    .box-text table,
    th,
    td {
        border: 1px dashed rgba(1, 30, 65, 1) !important;
        font-size: 16px;
        font-weight: 500;
        text-align: center !important;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        vertical-align: middle !important;
        padding: 13px !important;
    }

    .box-text tr:hover {
        background-color: #c0e4e4;
    }

    .table .th1 {
        font-size: 18px;
        font-weight: 700;
        text-align: justify;
        line-height: 1.2;
        color: rgba(1, 30, 65, 1);
    }

    .table .th2 {
        font-size: 16px;
        font-weight: 700;
        text-align: justify;
        line-height: 1.2;
        color: rgba(0, 168, 78, 1);
    }

    .table .table-icon {
        padding: 10px 25px;
    }

    .table .table-icon img {
        max-width: 60px;
    }

    .matriz {
        padding-bottom: 30px;
    }

    .img-crs-2 .box-img-crs h3 {
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: rgba(255, 255, 255, 1);
        margin: 20px;
    }

    .img-crs-2 .bic-title {
        height: 80px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .img-crs-2 .bic-img {
        max-height: 140px;
        height: 120px;
        display: flex;
        flex-direction: column;
        justify-content: end;
        align-items: center;
        padding: 10px;

    }

    .img-crs-2 .bic-img img {
        max-height: 140px;
    }

    .box-matriz-2 p {
        font-size: 14px;
        font-weight: normal;
        text-align: center;
        line-height: 1.2;
        color: rgba(255, 255, 255, 1);
    }
</style>
<style>
    @media(max-width:767px) {}

    @media(min-width:768px) {
        div.box-bcv:nth-child(13)>div:nth-child(2) {
            padding: 0% 5%;
        }

        .box-tabs .nav-tabs.nav-justified>li>a {
            height: 54px;
        }

        .nav-tabs.nav-justified>li {

            border: solid 1px #fff;
        }

        .img-crs-2 .bic-img {
            max-height: 150px;
            height: 150px;

        }

        .box-img {
            padding: 0% 5%;
        }


    }

    @media(min-width:992px) {
        .box-tabs .nav-tabs.nav-justified>li>a {
            height: auto;
        }

        .resultados_bc .paragraph {
            font-size: 16px;
        }

    }

    @media(min-width:1200px) {}
</style>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .resultados_bc {
        font-size: 13px !important;
        line-height: 1.4 !important;
        max-width: 980px;
        font-family: 'Montserrat', sans-serif;
        font-size: 13px;
        font-weight: normal;
        text-align: justify;
        line-height: 1.3;
        color: rgba(25, 25, 25, 1);
    }

    /*
    .resultados_bc [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }
    */
    .no-gutter {
        margin-right: 0;
        margin-left: 0;
    }

    .no-gutter>[class*="col-"] {
        padding-right: 0;
        padding-left: 0;
    }

    .w-100 {
        width: 100%;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->