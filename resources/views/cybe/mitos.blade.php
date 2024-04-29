@extends('welcome')
@section('title','mitos')
@section('contenido')
<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>

<!-- Set mitos -->
<div class="set-wrapper mitos">
    <style>
        .set-wrapper.mitos {
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight: 500;
            text-align: left;
            line-height: 1.4;
            color: #00000099;
        }

        .box-title {
            margin: 32px 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #fff;
        }

        .mitos .box-title .title-ppal {
            font-size: 30px;
            font-weight: 700;
            color: #1c2046;
            margin: 32px;
            text-align: center;
        }

        .mitos .box-title .img-ppal {
            background-color: #252525;
            width: 100%;
            max-width: 940px;
            height: 25rem;
            background: url('/images/cybe/ppal_mitos.png') no-repeat center center;
            margin-top: 32px;
        }

    </style>
    <div class="box-title">
        <div class="cmpnt cmpnt-title-ppal">
            <h3 class="title-ppal center-text">Verdades y mitos sobre estas tecnologías</h3>
        </div>
        <div class="cmpnt cmpnt-description">
            <p>La transición hacia la movilidad sostenible genera algunas dudas, aquí se encuentran algunos datos sobre los vehículos eléctricos para conocer.</p>
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
            color: #1c2046 !important;
        }

        .box-body .glyphicon-chevron-left::before {
            color: #1c2046 !important;
        }

        .box-body .panel-heading {
            border-color: #e5e5e5 !important;
            background-color: #e5e5e5 !important;
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
            color: #1c2046;
            font-size: 18px;
        }

        .box-body .panel-heading .panel-title a.collapsed:after {
            content: "\e114";
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
                            <p>No siempre, utilizando un cargador rápido tardaría aproximadamente 30 minutos en cargar hasta en un 80 % la batería del vehículo. Bogotá ya cuenta con cargadores rápidos de uso público, puedes conocerlos <a href="">acá</a></p>
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
                            <p>Verdadero, en promedio, los costos de operación y mantenimiento de los vehículos eléctricos son menores que los de los vehículos convencionales, esto se debe principalmente a que el costo de la energía es más barato que el costo del combustible y que los vehículos eléctricos tienen menos componentes susceptibles a mantenimiento.</p>
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
