@extends('welcome')
@section('title','tecnologias')
@section('contenido')

<link rel="stylesheet" href="{{ asset('css/cybe.css') }}">

<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>

<!-- Set tecnologias -->
<div class="set-wrapper tecnologias">

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
                    <li><a class="activado" href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/tecnologias">¿Cuáles son las tecnologías?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/mitos">Verdades y mitos</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/recursos">Recursos</a></li>
                </ul>

            </div>
        </div>
    </nav>



    <!-- box b1 -->
    <style>
        .set-wrapper .b1 {
            grid-area: b1;
            margin-top: 32px;
        }


        @media(min-width:768px) {
            .b1 .cpnt-1 {
                margin: 64px 128px;
            }
        }

        .b1 .cpnt-1 .title {
            font-family: 'Montserrat', sans-serif;
            font-size: 2em;
            font-weight: 600;
            margin: 16px;
            text-align: center;
            color: rgba(77, 84, 31, 1);
        }

        .b1 .cpnt-botones {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            margin: 32px;
        }

        @media(min-width:768px) {
            .b1 .cpnt-botones {
                grid-template-columns: repeat(3, 1fr);
                margin: 0 128px;
            }
        }

        .b1 .cpnt-botones .btn {
            font-family: 'Montserrat', sans-serif;
            font-size: 1em;
            font-weight: 600;
            padding: 8px 16px;
            border: solid 1px rgba(77, 84, 31, 1);
            border-radius: 8px;
            background-color: rgba(77, 84, 31, 1);
            color: white;
            cursor: pointer;
        }

        .b1 .cpnt-botones .btn.active {
            background-color: white;
            color: rgba(77, 84, 31, 1);
        }

        .b1 .cpnt-botones .btn:hover {
            background-color: #BED000FF;
            color: rgba(77, 84, 31, 1);
        }

        .b1 .cpnt-botones .btn:hover.active {
            background-color: white;
            color: rgba(77, 84, 31, 1);
        }

        .b1 .cpnt-botones .btn:active {
            background-color: #BED000FF;
            color: rgba(77, 84, 31, 1);
        }

        .b1 .cpnt-botones .btn:active.active {
            background-color: white;
            color: rgba(77, 84, 31, 1);
        }

        .b1 .cpnt-botones .btn:focus {
            background-color: #BED000FF;
            color: rgba(77, 84, 31, 1);
        }

        .b1 .cpnt-cards {
            margin-top: 64px;
            margin-bottom: 32px;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: repeat(auto-fill, minmax(min(100%, 300px), 1fr));
            grid-template-rows: auto;
            align-content: stretch;
            justify-content: space-evenly;
            align-items: stretch;
            justify-items: stretch;
        }


        .b1 .cpnt-cards .cero {
            display: none;
        }

        .b1 .cpnt-cards .bajas {
            display: none;
        }

        .b1 .cpnt-cards .content {
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            height: 100%;
            justify-items: center;

            background-color: #fbfbfb;
            border: solid 1px #e5e5e5;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);

        }

        .b1 .cpnt-cards .content img {
            border-radius: 6px 6px 0 0;
            display: block;
            width: 100%;
            height: 15em;
            object-fit: cover;
            resize: both;
        }

        .b1 .cpnt-cards .content h4 {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: 600;
            margin: 12px 12px 4px 12px;
            display: -webkit-box;
            text-align: center;
        }

        .b1 .cpnt-cards .content p {
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            margin: 12px;
            padding: 4px 12px;
            text-align: justify;

            font-optical-sizing: auto;
            font-weight: normal;
            line-height: 1.2;

        }

        @media(min-width:768px) {
            .b1 .cpnt-cards .content p {
                min-height: 10em;
            }
        }
    </style>
    <div class="box b1">

        <div class="cpnt cpnt-1">
            <h3 class="title title-1">¿Cuáles son las tecnologías de cero y bajas emisiones?</h3>
        </div>
        <div class="cpnt cpnt-botones" id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all')"> Mostrar todos</button>
            <button class="btn" onclick="filterSelection('cero')"> Cero emisiones directas</button>
            <button class="btn" onclick="filterSelection('bajas')"> Bajas emisiones</button>
        </div>

        <div class="cpnt cpnt-cards">

            <div class="column cero">
                <div class="content">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/tecnologias_1.png" alt="Mountains" style="width:100%">
                    <h4>Vehículos eléctricos</h4>
                    <p>Impulsados exclusivamente por uno o más motores eléctricos, que obtienen corriente de un sistema de almacenamiento de energía recargable, como baterías.</p>
                </div>
            </div>
            <div class="column cero">
                <div class="content">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/tecnologias_2.png" alt="Lights" style="width:100%">
                    <h4>Vehículos hidrógeno</h4>
                    <p>Vehículos diseñados y construidos para operar con hidrógeno como fuente primaria de energía para propulsarse.</p>
                </div>
            </div>
            <div class="column bajas">
                <div class="content">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/tecnologias_3.png" alt="Fuente: grupo Absa. Disponible en: https://grupoabsa.es/tienda-2/diferencia-entre-coche-hibrido-y-enchufable/" style="width:100%">
                    <h4>Híbridos enchufables</h4>
                    <p>Cuentan con una batería eléctrica que se puede cargar conectándolo a la red, sin embargo, mantienen su motor de combustión y continúan utilizando combustibles fósiles.</p>
                </div>
            </div>
            <div class="column bajas">
                <div class="content">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/tecnologias_4.png" alt="Nature" style="width:100%">
                    <h4>Vehículos híbridos</h4>
                    <p>Vehículos con un motor eléctrico, como complemento del motor de combustión. El motor eléctrico se carga a partir del combustible fósil de su motor de combustión.</p>
                </div>
            </div>
            <div class="column bajas">
                <div class="content">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/tecnologias_5.png" alt="Nature" style="width:100%">
                    <h4>Vehículos a Gas Natural Vehicular (GNV) dedicado</h4>
                    <p>Vehículo de combustión diseñado y fabricado desde el inicio para funcionar exclusivamente con GNV. No se incluyen los vehículos modificados posteriormente.</p>
                </div>
            </div>
            <div class="column bajas double">
                <div class="content">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/tecnologias_6.png" alt="Nature" style="width:100%">
                    <h4>Diésel Euro VI (Ley 1972 de 2019)</h4>
                    <p>Euro VI corresponde al estándar más reciente de la norma europea para los límites aceptables de emisiones de gases y material particulado. Se estima que un bus diésel Euro VI reduciría las emisiones de material particulado en al menos 95 % frente a un bus Euro V (Transmilenio S.A, 2020).</p>
                </div>
            </div>

        </div>
    </div>

    <hr>
    <!-- box b2 -->
    <style>
        .set-wrapper .b2 {
            grid-area: b2;
            margin-top: 42px
        }

        .b2 .cpnt-1 {}

        .b2 .cpnt-1 .title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5em;
            font-weight: 600;
            margin: 16px;
            text-align: center;
            color: rgba(77, 84, 31, 1);
        }

        .b2 .table {
            margin-top: 30px;
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 1em;
            font-weight: normal;
            text-align: left;
            line-height: 1.5;
        }

        @media(min-width:768px) {
            .b2 .table {
                padding: 30px 128px;
            }
        }

        .b2 .table img {
            margin: 0px;

        }

        .b2 .table>tbody>tr>td,
        .b2 .table>tbody>tr>th,
        .b2 .table>tfoot>tr>td,
        .b2 .table>tfoot>tr>th,
        .b2 .table>thead>tr>td,
        .b2 .table>thead>tr>th {
            vertical-align: middle !important;
            text-align: center !important;
        }

        .b2 th {
            background-color: #E3E8AD !important;
        }

        .b2 table,
        .b2 th,
        .b2 td {
            border: 1.5px rgba(77, 84, 31, 1) dotted !important;
        }

        .b2 tr:hover {
            background-color: #d5d5d5;
        }

        .b2 .table-imagen {
            /* height: 100px; */
            display: flex;
            /* flex-direction: column; */
            justify-content: center;
            align-items: center;
            padding: 15px;
        }

        .b2 .table-imagen-v {
            /* height: 100px; */
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            padding: 10px;
        }

        .b2 .text-table {
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            line-height: 1.2;
            color: rgba(25, 25, 25, 1);
            padding: 10px;
            background: #E3E8AD; #4d541f

        }

        .b2 .text-table2 {
            font-size: 15px;
            font-weight: 500;
            text-align: center;
            line-height: 1.2;
            color: rgba(25, 25, 25, 1);
            padding: 4px;
        }

        .b2 .title-table {
            font-size: 18px;
            font-weight: 700;
            text-align: center;
            line-height: 1.2;
            color: rgba(25, 25, 25, 1);
        }
    </style>
    <div class="box b2">
        <div class="cpnt cpnt-1">
            <h3 class="title title-1">Comparación de Tecnologías de Cero y Bajas Emisiones para un vehículo liviano</h3>
        </div>
        <div class="cpnt cpnt-2 table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            <div class='table-imagen'>
                                <img width="70px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/estacion_gas.png' alt='icono gasolinera' title='icono gasolinera'>
                                <span class="text-table">VS</span>
                                <img width="70px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/estacion_electrica.png' alt='icono estación eléctrica' title='icono estación eléctrica'>
                            </div>
                        </th>
                        <th>
                            <div class='table-imagen-v'>
                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/vehiculo.png' alt='icono vehículo vista lateral' title='icono vehículo vista lateral'>
                                <span class="text-table">Vehículo convencional</span>
                            </div>
                        </th>
                        <th>
                            <div class='table-imagen-v'>
                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/hibrido.png' alt='icono vehículo vista frontal' title='icono vehículo vista frontal'>
                                <span class="text-table">Vehículo híbrido</span>
                            </div>

                        </th>
                        <th>
                            <div class='table-imagen-v'>
                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/hibrido.png' alt='icono vehículo vista frontal' title='icono vehículo vista frontal'>
                                <span class="text-table">Vehículo híbrido <br> <sub>eléctrico enchufable</sub></span>
                            </div>
                        </th>
                        <th>
                            <div class='table-imagen-v'>
                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/electrico.png' alt='icono vehículo vista frontal' title='icono vehículo vista frontal'>
                                <span class="text-table">Vehículo eléctrico <br> <sub>100%</sub></span>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="table-imgen-v">
                                <div>
                                    <span class="title-table">Fuentes de energía</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class='table-imagen-v'>
                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/estacion_gas.png' alt='icono gasolinera' title='icono gasolinera'>
                                <span class="text-table2">Gasolina, biocombustible</span>
                            </div>
                        </td>
                        <td>
                            <div class='table-imagen-v'>
                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/estacion_gas.png' alt='icono gasolinera' title='icono gasolinera'>
                                <span class="text-table2">Gasolina, biocombustible</span>
                            </div>
                        </td>
                        <td>
                            <div class='table-imagen-v'>
                                <div>
                                    <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/estacion_gas.png' alt='icono gasolinera' title='icono gasolinera'>
                                    <span class="text-table">+</span>
                                    <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/estacion_electrica.png' alt='icono estación eléctrica' title='icono estación eléctrica'>
                                </div>
                                <span class="text-table2">Gasolina, biocombustible, energía eléctrica</span>
                            </div>
                        </td>
                        <td>
                            <div class='table-imagen-v'>
                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/estacion_electrica.png' alt='icono estación eléctrica' title='icono estación eléctrica'>
                                <span class="text-table2">Energía eléctrica</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-imgen-v">
                                <div>
                                    <span class="title-table">Rendimiento*<br><sub>(Km / Galón eq)</sub></span>

                                </div>
                            </div>
                        </td>
                        <td>
                            <div class='table-imagen-v'>
                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/galon_combustible.png' alt='icono galón' title='icono galón'>
                                <span class="text-table2">34,9</span>
                            </div>
                        </td>
                        <td>
                            <div class='table-imagen-v'>
                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/galon_combustible.png' alt='icono galón' title='icono galón'>
                                <span class="text-table2">63,4</span>
                            </div>
                        </td>
                        <td>
                            <div class='table-imagen-v'>
                                <div>
                                    <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/galon_combustible.png' alt='icono galón' title='icono galón'>
                                    <span class="text-table">+</span>
                                    <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/bateria.png' alt='icono batería' title='icono batería'>
                                </div>
                                <span class="text-table2">119,2</span>
                            </div>
                        </td>
                        <td>
                            <div class='table-imagen-v'>
                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/bateria.png' alt='icono batería' title='icono batería'>
                                <span class="text-table2">97,1</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-imgen-v">
                                <div>
                                    <span class="title-table">Emisiones CO<sub>2</sub> <br><sub>(Kg CO2 / 100km)</sub></span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class='table-imagen-v'>
                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/contaminante.png' alt='icono humo' title='icono humo'>
                                <span class="text-table2">21,9</span>
                            </div>
                        </td>
                        <td>
                            <div class='table-imagen-v'>
                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/contaminante.png' alt='icono humo' title='icono humo'>
                                <span class="text-table2">12,0</span>
                            </div>
                        </td>
                        <td>
                            <div class='table-imagen-v'>
                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/contaminante.png' alt='icono humo' title='icono humo'>
                                <span class="text-table2">5,1</span>
                            </div>
                        </td>
                        <td>
                            <div class='table-imagen-v'>
                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/21-08-2024/ecologico.png' alt='icono humo' title='icono humo'>
                                <span class="text-table2"><strong>0,0</strong></span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p><i>Comparación entre Tecnologías de Cero y Bajas Emisiones</i></p>
            <p><i>* Comparación para un vehículo Sedan Promedio. Fuente: Alternative Fuels Data Center - National Renewable Energy Laboratory (NREL)</i></p>
            <p><i>** Para los vehículos híbridos enchufables y los eléctricos el rendimiento se calcula en galones equivalentes de gasolina, asumiendo que un galón de gasolina es equivalente a 33,7 kWh de electricidad. Fuente: <a href="https://www.nrel.gov/docs/fy14osti/61108.pdf">https://www.nrel.gov/docs/fy14osti/61108.pdf</a></i></p>
        </div>
    </div>





</div>
<!-- Fin Set -->

<script>
    filterSelection("all") // Execute the function and show all columns
    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    // Show filtered elements
    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    // Hide elements that are not selected
    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
