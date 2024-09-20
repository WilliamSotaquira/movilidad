@extends('welcome')
@section('title','mitos')
@section('contenido')

<link rel="stylesheet" href="{{ asset('css/cybe.css') }}">

<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>

<!-- Set mitos -->
<div class="set-wrapper mitos">

    <!-- bloque box header-->
    <style>
        .set-wrapper .box-header {
            background: #BED000FF;
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/cybe_portada_2.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;

            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas: "box-header";
        }

        @media (min-width: 908px) {
            .set-wrapper .box-header {
                background-position: center -30em;
                grid-template-columns: 55% 45%;
                grid-template-areas: "vacio box-header";
            }
        }

        .box-header .cmpnt-logo-ppal {
            grid-area: box-header;
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box-header .cmpnt-logo-ppal .logo-ppal {
            width: 100%;
            max-width: 260px;
            margin: 0 auto;
            background-color: #BED000FF;
            padding: 32px;
            -webkit-box-shadow: 0px 0px 10px 3px #BED000FF25;
            box-shadow: 0px 0px 10px 3px #BED000FF25;
            margin-bottom: 12px;
        }

        .box-header .cmpnt-logo-ppal .paragraph {
            font-family: "Montserrat", sans-serif;
            font-size: 20px;
            font-weight: 400;
            text-align: left;
            line-height: 1.1;
            color: #fff;
            text-align: center;
            margin: 8px 14px;
            padding: 0;
            max-width: 400px;
        }

        /* Reglas Navbar */
        .set-wrapper .navbar {
            background: #BED000FF;
            border: none;
            border-radius: 0;
            font-family: "Montserrat", sans-serif !important;
            font-size: 14px !important;
            font-weight: 400;
            line-height: 1.1;
            color: #fff;
            text-align: center;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        @media (min-width: 768px) {
            .set-wrapper .navbar {
                display: flex;
                margin: auto;
                margin-bottom: 6px;
            }
        }

        .set-wrapper .navbar-nav>li {
            background: #BED000FF;
            color: #3d4a1c;
        }

        .set-wrapper .navbar-nav>li:hover {
            background: #828F26;
            color: #ffffff;
        }

        .set-wrapper .navbar-nav>li>a {
            color: #3d4a1c !important;
            padding: 14px 4px;
        }

        .set-wrapper .navbar-nav>li:hover>a {
            color: #ffffff !important;
        }

        .set-wrapper .navbar-nav>li a.activado {
            background: rgba(77, 84, 31, 1) !important;
            color: #BED000FF !important;
        }

        @media (min-width: 768px) {
            .navbar-collapse.collapse {
                display: inline-block !important;
                width: auto !important;
            }
        }
    </style>
    <div class="box box-header">
        <div class="cmpnt cmpnt-vacio">
        </div>
        <div class="cmpnt cmpnt-logo-ppal">
            <div class="logo logo-ppal">
                <a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/home">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-08-2024/logo_cbe_2024.png" alt="logo Movilidad de Cero y Bajas Emisiones">
                </a>
            </div>
            <p class="paragraph ph-type-ppal ph-id-1">Conoce la apuesta de Bogotá por la <strong>movilidad motorizada de cero y bajas emisiones</strong></p>
        </div>
    </div>
    <!-- bloque navbar-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/home">Inicio</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/por_que">¿Por qué?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/solucion">¿Qué solución proponemos?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/metas">¿Cuáles son nuestras metas?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/tecnologias">¿Cuáles son las tecnologías?</a></li>
                    <li><a class="activado" href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/mitos">Verdades y mitos</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/recursos">Recursos</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <style>
        .set-wrapper.mitos {
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight: 500;
            text-align: left;
            line-height: 1.4;
            color: #252525;
        }

        .box-title {
            margin: 32px 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #ffffff;
        }

        .mitos .box-title .title-ppal {
            font-size: 30px;
            font-weight: 700;
            color: #4d541f;
            margin: 32px;
            text-align: center;
        }

        .mitos .box-title .img-ppal {
            background-color: #252525;
            width: 100%;
            max-width: 940px;
            height: 25rem;
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/ppal_mitos.png') no-repeat center center;
            margin-top: 32px;
        }
    </style>
    <div class="box-title">
        <div class="cmpnt cmpnt-title-ppal">
            <h3 class="title-ppal center-text">Verdades y mitos de las tecnologías de cero y bajas emisiones.</h3>
        </div>
        <div class="cmpnt cmpnt-description">
            <p>La transición hacia la movilidad sostenible genera algunas dudas, presentamos datos sobre algunos vehículos eléctricos para conocer más.</p>
        </div>
        <div class="imagen img-ppal">
        </div>
    </div>

    <style>
        .box-body {
            margin: 32px 0;
            padding: 32px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #fff;
        }

        .box-body .glyphicon-chevron-right::before {
            color: #4d541f !important;
        }

        .box-body .glyphicon-chevron-left::before {
            color: #4d541f !important;
        }

        .box-body .panel-heading {
            border-color: #D6DE80 !important;
            background-color: #D6DE80 !important;
            background-image: none !important;
        }

        .box-body .panel-heading .panel-title a {
            text-decoration: none;
            color: #252525 !important;
            padding-right: 40px;
            font-size: 15px;
            font-weight: 600;
            /* letter-spacing: 1px; */
        }

        .box-body .panel-heading .panel-title a:after {
            font-family: 'Glyphicons Halflings';
            content: "\e080";
            float: right;
            color: #4d541f;
            font-size: 18px;
        }

        .box-body .panel-heading .panel-title a.collapsed:after {
            content: "\e114";
        }
        .box-body .panel-body{
            background: #f5f5f5;
        }
    </style>
    <div class="box-body">
        <!-- collapse_mitos -->
        <div class='panel-group' id='accordion_mitos' role='tablist ' aria-multiselectable='true'>

            <!-- collapse a -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading_a'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_mitos' href='#collapse_a' aria-expanded='false' aria-controls='collapse_a'>
                            ¿Cargar un vehículo eléctrico toma más de una hora?
                        </a>
                    </h4>
                </div>
                <div id='collapse_a' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_a' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-a'>
                            <p>No siempre, utilizando un cargador rápido tardaría aproximadamente 30 minutos en cargar hasta en un 80 % la batería del vehículo.  Bogotá cuenta con cargadores rápidos de uso público, para conocer los puntos ingresar <a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/infraestructura_de_recarga_electrica_en_bogota">aquí.</a></p>
                            <p>Si se utiliza un cargador semi-rápido, tardaría entre 2 y 4 horas, mientras que con un cargador lento el tiempo sería mayor a 6 horas. Este tipo de cargadores son más adecuados para la recarga en el hogar.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- collapse b -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading_b'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_mitos' href='#collapse_b' aria-expanded='false' aria-controls='collapse_b'>
                            ¿Puede un vehículo eléctrico subir las mismas pendientes que los vehículos de combustión?
                        </a>
                    </h4>
                </div>
                <div id='collapse_b' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_b' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-b'>
                            <p>Verdadero, la variable que indica el desempeño de los vehículos en pendientes es el torque y es similar en vehículos de combustión y eléctricos.</p>
                            <p>A manera de ejemplo, de acuerdo con Transmilenio S.A., los buses padrones eléctricos adquiridos para la ciudad han demostrado su potencia al subir pendientes de incluso 20 % sin dificultad a 20 km/h con capacidad de carga máxima (80 pasajeros). Adicionalmente, para un bus articulado eléctrico, la entidad ha realizado pruebas de arranque en pendientes del 8 % al 14 % con capacidad de carga máxima (160 pasajeros), las cuales han superado sin dificultad.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- collapse c -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading_c'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_mitos' href='#collapse_c' aria-expanded='false' aria-controls='collapse_c'>
                            ¿Con una carga completa, podría recorrer más de 100 km en un vehículo eléctrico de uso privado?
                        </a>
                    </h4>
                </div>
                <div id='collapse_c' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_c' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-c'>
                            <p>Verdadero, a continuación se brindan algunos ejemplos de autonomías reportadas de vehículos eléctricos en el mercado colombiano:</p>
                            <ul>
                                <li>100 km: vehículos biplaza como Renault Twizy y Oransh</li>
                                <li>150 km: vehículos biplaza como Zhidou D2S y Jiayuan</li>
                                <li>Otros vehiculos
                                    <ul>
                                        <li>200 km: Renault MASTER E-TECH</li>
                                    </ul>
                                </li>
                                <li>Entre 300 y 400 km:
                                    <ul>
                                        <li>Renault Zoe (300 km)</li>
                                        <li>Nissan Leaf (350 km)</li>
                                        <li>BYD i Dolphin (400 km)</li>
                                    </ul>
                                </li>
                                <li>400 Km en adelante
                                    <ul>
                                        <li>Chevrolet Bolt</li>
                                        <li>Kia Niro EV</li>
                                        <li>BMW iX3 M SPORT</li>
                                        <li>Porsche Taycan</li>
                                        <li>BYD Yuan Plus EV</li>
                                        <li>Tesla Model 3</li>
                                    </ul>
                                </li>
                            </ul>
                            <p>Como referencia, un viaje ida y vuelta desde la Plaza Lourdes - Chapinero, hasta:</p>
                            <ul>
                                <li>Zipaquirá ≈ 100 km.</li>
                                <li>Girardot ≈ 300 km.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- collapse d -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading_d'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_mitos' href='#collapse_d' aria-expanded='false' aria-controls='collapse_d'>
                            ¿Para vehículos con características similares, los costos de operación y mantenimiento de un vehículo de combustión son más altos que de un vehículo eléctrico?
                        </a>
                    </h4>
                </div>
                <div id='collapse_d' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_d' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-d'>
                            <p>Verdadero, en promedio los costos de operación y mantenimiento de un vehículo de combustión son más altos que los de un vehículo eléctrico. Esto se debe principalmente a que el costo del combustible es más alto respecto al costo de la energía adicionalmente, los vehículos eléctricos tienen menos componentes susceptibles a mantenimiento.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- collapse e -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading_e'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_mitos' href='#collapse_e' aria-expanded='false' aria-controls='collapse_e'>
                            ¿La vida útil de un vehículo eléctrico gama media puede durar en promedio más de 10 años?
                        </a>
                    </h4>
                </div>
                <div id='collapse_e' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_e' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-e'>
                            <p>Verdadero. La vida útil depende del uso que se le dé al vehículo y en particular la batería, se estima que la batería dura en promedio en perfectas condiciones sobre los 160.000 km que, para el uso promedio de los vehículos particulares en Colombia, representaría una vida útil de más de 10 años.</p>
                            <p>Los fabricantes de vehículos recomiendan para prolongar la vida útil de las baterías de los vehículos eléctricos evitar temperaturas extremas, sobrecargar y descargar en exceso y limitar la carga rápida.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /#fin _mitos -->
    </div>

</div>
<!-- Fin Set -->

<script src="/js/cybe.js"></script>
