@extends('welcome')
@section('title','patios')

@section('contenido')

<!-- Set patios -->
<div class="set-wrapper patios">

    <!-- Component box title-center -->
    <div class="box-title-center">
        <h2>Servicios de parqueaderos y grúas</h2>
    </div>
    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .set-wrapper .box-title-center {
            grid-area: box-title-center;
            border-bottom: 2px solid #4d541f;
            margin-bottom: 40px;
        }

        .box-title-center h2 {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            margin: 32px 16px 32px 16px;
            color: rgba(77, 84, 31, 1);
            text-transform: uppercase;
        }
    </style>

    <!-- Component box carousel -->
    <div class="box-carousel">

        <div class='row'>

            <!-- Carousel vertical medidas recursos: 340x300px -->
            <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                <div id="carousel-vertical" class="carousel slide" data-ride="carousel-vertical">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-vertical" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-vertical" data-slide-to="1"></li>

                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="https://via.placeholder.com/340x300/e5e5e5/252525?Text=Digital.com" alt="...">
                            <div class="carousel-caption">
                                <h3>...</h3>
                                <p>...</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://via.placeholder.com/340x300/e5e5e5/252525?Text=Digital.com" alt="...">
                            <div class="carousel-caption">
                                <h3>...</h3>
                                <p>...</p>
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-vertical" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-vertical" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- Carousel horizontal medidas recursos: 980x400px -->
            <div class='col-sm-12 hidden-xs'>
                <div id="carousel-horizontal" class="carousel slide" data-ride="carousel-horizontal">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-horizontal" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-horizontal" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="https://via.placeholder.com/980x400/e5e5e5/252525?Text=Digital.com" alt="...">
                            <div class="carousel-caption">
                                <h3>...</h3>
                                <p>...</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://via.placeholder.com/980x400/e5e5e5/252525?Text=Digital.com" alt="...">
                            <div class="carousel-caption">
                                <h3>...</h3>
                                <p>...</p>
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-horizontal" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-horizontal" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>

    </div>
    <style>
        .set-wrapper .box-carousel {
            grid-area: box-carousel;
            margin-bottom: 40px;
        }

        .box-carousel .item img {
            width: 100%;
        }

        .box-carousel .carousel-control.left,
        .box-carousel .carousel-control.right {
            background-image: none;
        }

        .box-carousel .carousel-control {
            color: #A6B517;
            opacity: 1;
        }

        .box-carousel .carousel-control:focus,
        .box-carousel .carousel-control:hover {
            color: #A6B517;
            opacity: 0.5;
        }

        .box-carousel .carousel-indicators li {
            background-color: #A6B517;
            border-color: rgba(77, 84, 31, 0.4);
        }

        .box-carousel .carousel-indicators .active {
            background-color: rgba(77, 84, 31, 1);
            border-color: rgba(77, 84, 31, 0.4);
        }
    </style>


    <!-- Sección box vertical-tabs -->
    <div class="box-vertical-tabs">

        <h2>Vertical Tabs</h2>
        <p>Click on the buttons inside the tabbed menu:</p>

        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'tab1')" id="defaultOpen">Liquidación de Servicios de Parqueadero y Grúas</button>
            <button class="tablinks" onclick="openCity(event, 'tab2')">Salida de Vehículos Inmovilizados por Siniestro Vial</button>
            <button class="tablinks" onclick="openCity(event, 'tab3')">Peritaje de Vehículos Inmovilizados en Patio Transitorio</button>
            <button class="tablinks" onclick="openCity(event, 'tab4')">Conoce donde quedan ubicados nuestros patios</button>
            <button class="tablinks" onclick="openCity(event, 'tab5')">Ruta de Inmovilización de un Vehículo por Infracción a Normas de Tránsito y Transporte, Pago y Salida del Patio</button>
            <button class="tablinks" onclick="openCity(event, 'tab6')">Tarifas de Subsanaciones</button>
        </div>

        <div id="tab1" class="tabcontent">
            <div class="card-head ch1">
                <h3>Liquidación de Servicios de Parqueaderos y Grúas</h3>
            </div>
            <div class="card-body">

                <!-- collapse-liquidacion -->
                <div class='panel-group' id='accordion-liquidacion' role='tablist ' aria-multiselectable='true'>

                    <!-- collapse antes-2018 -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading' role='tab' id='heading_antes-2018'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordion-liquidacion' href='#collapse_antes-2018' aria-expanded='false' aria-controls='collapse_antes-2018'>
                                    Vehículos inmovilizados antes del 1 de abril de 2018
                                </a>
                            </h4>
                        </div>
                        <div id='collapse_antes-2018' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_antes-2018' aria-expanded='false'>
                            <div class='panel-body'>
                                <div class='box-antes-2018'>
                                    <p>Si su vehículo fue inmovilizado por infringir las normas de tránsito y transporte en Bogotá antes del 1 de abril de 2018, puede realizar la consulta de la infracción y la fecha de inmovilización, ingresando la placa y/o los datos del conductor en el siguiente enlace:</p>
                                    <a href="http://" target="_blank" rel="noopener noreferrer">Consulta de vehículos inmovilizados</a>
                                    <p>Si desea realizar la liquidación por concepto del servicio de parqueadero y grúas, diríjase al Centro de Servicios ubicado en la Calle 13 # 37 -35. Tarifas aplicables por el servicio de parqueadero y grúa 2022 de Movilidad Calle 13</p>
                                </div>
                            </div>
                        </div>
                        <style>
                            .box-antes-2018 {
                                grid-area: antes-2018;
                            }
                        </style>
                    </div>

                    <!-- collapse desde-2018 -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading' role='tab' id='heading_desde-2018'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordion-liquidacion' href='#collapse_desde-2018' aria-expanded='false' aria-controls='collapse_desde-2018'>
                                    Vehículos inmovilizados a partir del 1 de abril de 2018
                                </a>
                            </h4>
                        </div>
                        <div id='collapse_desde-2018' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_desde-2018' aria-expanded='false'>
                            <div class='panel-body'>
                                <div class='box-desde-2018'>
                                    <p>Sí su vehículo fue inmovilizado a partir del 1 de abril de 2018 y desea consultar y/o liquidar el valor por concepto de parqueadero y grúa, haga clic en el siguiente botón:</p>
                                    <a href="http://" target="_blank" rel="noopener noreferrer">Consultar y/o liquidar</a>
                                    <p>Si desea realizar la liquidación por concepto del servicio de parqueadero y grúas, diríjase al Centro de Servicios ubicado en la Calle 13 # 37 -35. Tarifas aplicables por el servicio de parqueadero y grúa 2022 de Movilidad Calle 13</p>
                                </div>
                            </div>
                        </div>
                        <style>
                            .box-desde-2018 {
                                grid-area: desde-2018;
                            }
                        </style>
                    </div>

                    <!-- collapse tarifas -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading' role='tab' id='heading_tarifas'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordion-liquidacion' href='#collapse_tarifas' aria-expanded='false' aria-controls='collapse_tarifas'>
                                    Vehículos inmovilizados antes del 1 de abril de 2018
                                </a>
                            </h4>
                        </div>
                        <div id='collapse_tarifas' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_tarifas' aria-expanded='false'>
                            <div class='panel-body'>
                                <div class='box-tarifas'>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci incidunt ducimus dolore voluptatibus amet officiis, minima sequi placeat itaque illo. Nisi tenetur sunt unde ad veniam dolore modi. Natus, officia!</p>
                                    <div class="imagen img-tarifas">
                                        <img class="img-responsive w-100" src="https://via.placeholder.com/480x300" alt="" title="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .box-tarifas {
                                grid-area: tarifas;
                            }
                        </style>
                    </div>

                </div>
                <!-- /#fin -liquidacion -->
            </div>
        </div>
        <div id="tab2" class="tabcontent">
            <div class="card-head ch2">
                <h3>Salida de Vehículos Inmovilizados por Siniestro Vial</h3>
            </div>
            <div class="card-body">
                <p>Si su vehículo se encuentra inmovilizado en el Patio Transitorio por un siniestro vial, de la Secretaría de Movilidad, tenga en cuenta los siguientes requisitos:</p>
                <ol>
                    <li>Ningún trámite tiene costo</li>
                    <li>Debe contar con disponibilidad de 2 Horas como mínimo.</li>
                    <li><strong>Debe aportar los siguientes documentos:</strong>
                        <ul>
                            <li>Original del Oficio expedido por la Fiscalía General de la Nación, el cual será confirmado con la URI correspondiente.</li>
                            <li>Fotocopia del Documento de identidad del propietario o apoderado autorizado según oficio de la Fiscalía General de la Nación.</li>
                            <li>Fotocopia de la Tarjeta de propiedad del Vehículo, motocicleta, derivado o bicicleta.</li>
                            <li>Fotocopia del SOAT vigente correspondiente al vehículo o motocicleta inmovilizada.</li>
                            <li>Fotocopia de la revisión Tecno- mecánica vigente (En el caso que se requiera) de conformidad al Artículo 52 del Código Nacional de Tránsito.</li>
                            <li>Licencia de conducción vigente en caso de que el rodante pueda circular.</li>
                            <li>Fotocopia de la tarjeta de operación (servicio Público).</li>
                        </ul>
                    </li>
                    <li>Todo vehículo o motocicleta con SOAT, (revisión tecnomecánica o licencia de tránsito vencida) solo se autoriza salida en grúa</li>

                </ol>
            </div>
        </div>
        <div id="tab3" class="tabcontent">
            <div class="card-head ch3">
                <h3>Peritaje de Vehículos Inmovilizados en Patio Transitorio</h3>
            </div>
            <div class="card-body">
                <p>Si su vehículo se encuentra inmovilizado en el Patio Transitorio de la Secretaría de Movilidad y requiere adelantar el proceso de Experticio Técnico – Peritaje, tenga en cuenta los siguientes requisitos:</p>
                <ol>
                    <li>Ningún trámite tiene costo.</li>
                </ol>
            </div>
        </div>
        <div id="tab4" class="tabcontent">
            <div class="card-head ch4">
                <h3>Conoce donde quedan ubicados nuestros patios</h3>
            </div>
            <div class="card-body">
                <p>Paris is the capital of France.</p>
            </div>
        </div>
        <div id="tab5" class="tabcontent">
            <div class="card-head ch5">
                <h3>Ruta de Inmovilización de un Vehículo por Infracción a Normas de Tránsito y Transporte, Pago y Salida del Patio</h3>
            </div>
            <div class="card-body">
                <p>Paris is the capital of France.</p>
            </div>
        </div>
        <div id="tab6" class="tabcontent">
            <div class="card-head ch6">
                <h3>Tarifas de Subsanaciones</h3>
            </div>
            <div class="card-body">
                <p>Paris is the capital of France.</p>
            </div>
        </div>
    </div>
    <style>
        .set-wrapper .box-vertical-tabs {
            grid-area: box-vertical-tabs;
            box-sizing: border-box;
            margin-top: 32px;
        }

        /* Style the tab */
        .box-vertical-tabs .tab {
            float: left;
            /* border: 1px solid #ccc; */
            background-color: #ffffff;
            width: 100%;
            /* height: 300px; */
        }

        /* Style the buttons inside the tab */
        .box-vertical-tabs .tab button {
            display: block;
            background-color: rgba(25, 28, 58, 1);
            color: rgba(255, 255, 255, 1);
            padding: 12px;
            width: calc(100% - 32px);
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 16px;
            margin: 16px;
            border-radius: 4px;
            border: 1px solid rgba(25, 28, 58, 0.1);
            line-height: 1.1;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.08);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.08);

        }

        /* Change background color of buttons on hover */
        .box-vertical-tabs .tab button:hover {
            border: 1px solid rgba(25, 28, 58, 0.2);
            background-color: #f5f5f5;
        }

        /* Create an active/current "tab button" class */
        .box-vertical-tabs .tab button.active {
            background-color: rgba(102, 224, 38, 1);
            font-weight: 700;
            color: #252525;
        }

        /* Style the tab content */
        .box-vertical-tabs .tabcontent {
            float: left;
            /* padding: 32px; */
            width: calc(100% - 32px);
            border: 1px solid rgba(25, 28, 58, 0.2);
            height: auto;
            background: #f5f5f5;
            border-radius: 4px;
            margin: 16px;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.08);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.08);
        }


        .box-vertical-tabs .card-head {
            padding: 8px 16px;
            border-radius: 4px 4px 0 0;
        }

        .box-vertical-tabs .card-head h3 {
            font-size: 18px;
            font-weight: 700;
            text-align: left;
            line-height: 1.2;
            color: rgba(102, 224, 38, 1);
            margin: 0;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .box-vertical-tabs .ch1 {
            background: linear-gradient(70deg, rgba(25, 28, 58, 1), transparent), url('https://placeimg.com/980/480/tech');
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
        }

        .box-vertical-tabs .ch2 {
            background: linear-gradient(70deg, rgba(25, 28, 58, 1), transparent), url('https://placeimg.com/980/480/arch');
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
        }

        .box-vertical-tabs .ch3 {
            background: linear-gradient(70deg, rgba(25, 28, 58, 1), transparent), url('https://placeimg.com/980/480/tech');
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
        }

        .box-vertical-tabs .ch4 {
            background: linear-gradient(70deg, rgba(25, 28, 58, 1), transparent), url('https://placeimg.com/980/480/arch');
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
        }

        .box-vertical-tabs .ch5 {
            background: linear-gradient(70deg, rgba(25, 28, 58, 1), transparent), url('https://placeimg.com/980/480/tech');
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
        }

        .box-vertical-tabs .ch6 {
            background: linear-gradient(70deg, rgba(25, 28, 58, 1), transparent), url('https://placeimg.com/980/480/arch');
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
        }

        .box-vertical-tabs .card-body {
            padding: 16px;
            border-radius: 4px 4px 0 0;
            background-color: #f5f5f5;
        }

        .box-vertical-tabs .glyphicon-chevron-right::before {
            color: rgba(102, 224, 38, 1) !important;
        }

        .box-vertical-tabs .glyphicon-chevron-left::before {
            color: rgba(102, 224, 38, 1) !important;
        }

        .box-vertical-tabs .panel-heading {
            border-color: rgba(25, 28, 58, 1) !important;
            background-color: rgba(25, 28, 58, 1) !important;
            background-image: none !important;
        }

        .box-vertical-tabs .panel-heading .panel-title a {
            text-decoration: none;
            color: rgba(102, 224, 38, 1) !important;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .box-vertical-tabs .panel-heading .panel-title a:after {
            font-family: 'Glyphicons Halflings';
            content: "\e080";
            float: right;
            color: rgba(102, 224, 38, 1);
            font-size: 18px;
        }

        .box-vertical-tabs .panel-heading .panel-title a.collapsed:after {
            content: "\e114";
        }


        @media(min-width:768px) {
            .box-vertical-tabs .tab {
                width: 30%;
            }

            .box-vertical-tabs .tab button {
                margin: 0px 8px 12px 16px;
                width: calc(100% - 24px);

            }

            .box-vertical-tabs .tabcontent {
                width: calc(70% - 24px);
                margin: 0px 16px 16px 8px;
            }

        }
    </style>
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


</div>
<!-- Fin Set -->
