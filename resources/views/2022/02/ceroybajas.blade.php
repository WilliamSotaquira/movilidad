@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid ceroybajas'>
    <div class='box-wrp'>
        <div class='row box-head'>
            <div class='col-xs-12 col-sm-6 col-sm-offset-6'>
                <div class="titulo-encabezado">
                    <div class="logo">
                        <div>
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/logo_mov_de_cero_y_bajas_emisiones_mayo_2020-03.png' alt='LogoCero y Bajas Emisiones' title='LogoCero y Bajas Emisiones'>
                        </div>
                    </div>
                    <div class="titulo">
                        <h4>Conoce la apuesta de Bogotá por la Movilidad Motorizada de Cero y Bajas Emisiones</h4>
                    </div>
                </div>
            </div>
            <style>
                .box-head {
                    background: #1c2046;
                    background: linear-gradient(45deg, rgba(0, 0, 0, 0.3)15%, rgba(0, 0, 0, 0.6) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-02-2022/cyb_img-principal_c.webp');
                    height: 430px;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center;
                }

                .box-head .titulo-encabezado {
                    padding: 20px;
                    height: 430px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;

                }

                .box-head .logo {
                    margin: 0px 30px;
                    padding: 20px;

                }

                .box-head .logo img {
                    border-radius: 50% 10% / 10% 50%;
                    -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                    box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                    max-width: 400px;
                    min-width: 150px;
                }

                .box-head .titulo {
                    padding: 15px;
                }

                .box-head .titulo h4 {
                    color: rgba(255, 255, 255, 1);
                    text-shadow: 2px 2px 4px #252525;
                    text-align: center;
                    font-weight: 700;
                    margin: 0px;
                }

                .box-head .parrafo {
                    padding: 10px 20px;
                }

                .box-head .parrafo p {
                    color: #fff;
                    text-align: center;
                    font-size: 16px;
                    text-shadow: 0px 0px 4px #252525;
                    margin: 0px;
                    font-weight: 700;
                }

                .box-head .txt1-cybe mark {
                    background-color: #1c2046;
                    font-weight: 700;
                    font-family: 'Montserrat', sans-serif;
                    line-height: 1.4;
                    color: #fff;
                    padding: 5px;
                }
            </style>

        </div>
        <div class="row botones-cybe">
            <div class="box-indicadores">

                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <div class="box-boton">
                        <div class="boton-cybe">
                            <div class="icono-boton">
                                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-09-2021/cero_bajas_boton_bus_electrico.png' alt='Icono Bus Eléctrico' title='Icono Bus Electrico'>
                                <div class="btn-titulo cybb">
                                    <p>Buses eléctricos del SITP</p>
                                </div>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h3>1.061</h3>
                                <p>Buses en operación</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <div class="box-boton">
                        <div class="boton-cybe">
                            <div class="icono-boton">
                                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-09-2021/cero_bajas_boton_flota.png' alt='Icono Flota Eléctrica' title='Icono Flota Electrica'>
                                <div class="btn-titulo cybb">
                                    <p>Flota oficial eléctrica</p>
                                </div>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h3>12</h3>
                                <p>Vehículos en operación</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <div class="box-boton">
                        <div class="boton-cybe">
                            <div class="icono-boton">
                                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-09-2021/cero_bajas_boton_taxis.png' alt='Icono Taxis Eléctrico' title='Icono Taxis Eléctrico'>
                                <div class="btn-titulo cybb">
                                    <p>Taxis eléctricos</p>
                                </div>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h3>39</h3>
                                <p>Taxis en operación</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <div class="box-boton">
                        <div class="boton-cybe">
                            <div class="icono-boton">
                                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-09-2021/cero_bajas_boton_moto.png' alt='Icono Motos Eléctricas' title='Icono Motos Eléctricas'>
                                <div class="btn-titulo cybb">
                                    <p>Motos eléctricas</p>
                                </div>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h3>425</h3>
                                <p>Motos registradas</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <div class="box-boton">
                        <div class="boton-cybe">
                            <div class="icono-boton">
                                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-09-2021/cero_bajas_boton_carro.png' alt='Icono Carro Eléctrico' title='Icono Carro Eléctrico'>

                                <div class="btn-titulo cybb">
                                    <p>Carros eléctricos</p>
                                </div>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h3>1.902</h3>
                                <p>Carros Registrados</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <div class="box-boton">
                        <div class="boton-cybe">
                            <div class="icono-boton">
                                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2021/cero_bajas_boton_hibrido.png' alt='Icono carro hibrido' title='Icono carro hibrido'>
                                <div class="btn-titulo cybb">
                                    <p>Carros híbridos</p>
                                </div>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h3>9.908</h3>
                                <p>Carros registrados</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <style>
            .botones-cybe {
                padding: 5px 10px;
                /* background-color: rgba(0, 0, 0, 0.1); */
                position: relative;
            }

            .box-head .botones-cybe {
                padding: 15px;
                position: relative;

            }

            .box-indicadores {
                background-color: rgba(0, 0, 0, 0.1);
                position: relative;

            }


            .box-boton {
                position: relative;
                cursor: pointer;

            }

            .box-boton .boton-cybe {
                position: relative;
                display: block;
                width: 100%;
                /* min-width: 120px; */
                height: auto;
                border: solid 5px rgba(102, 224, 38, 1);
                border-radius: 250px 250px 250px 250px;
                -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            }

            .box-boton .boton-cybe .icono-boton {
                background: linear-gradient(45deg, rgb(28, 32, 70, 1) 60%, rgba(255, 255, 255, 0.5) 300%);

                padding: 20px;
                /* margin: 10px; */
                border-radius: 250px;
            }

            .box-boton .boton-cybe .icono-boton img {
                max-width: 100px;
                min-width: 60px;
                margin: auto;
            }

            .box-boton .boton-cybe .btn-titulo {
                padding: 6px;
                height: 70px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .box-boton .btn-titulo p {
                color: rgba(255, 255, 255, 1) !important;
                font-weight: 700;
                text-align: center;
                margin: 0px;

            }



            .box-boton .overlay {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
                opacity: 0;
                transition: .3s ease;
                /* background: linear-gradient(45deg, rgba(102, 224, 38, 1) 50%, rgba(255, 255, 255, 1) 100%); */
                background: rgba(102, 224, 38, 1);
                border-radius: 250px;

            }

            .box-boton:hover .overlay {
                opacity: 1;
            }

            .box-boton .overlay .text {
                color: white;
                position: absolute;
                top: 50%;
                left: 50%;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                text-align: center;
            }

            .box-boton .overlay .text p,
            .box-boton .overlay .text h3 {
                font-weight: 700;
                text-align: center;
                line-height: 1.2;
                color: #252525;
                margin: 0px;
            }

            .box-video {
                padding:0px 0px 10px 0px;
            }
        </style>
    </div>
    <div class="row box-video">
        <div class='embed-responsive embed-responsive-16by9'>
        <iframe width="100%" height="" src="https://www.youtube.com/embed/y6p8cYbbZWI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="box-bottabs">
        <div class="botones-tab">
            <div class="row">

                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <a href="#menu1" aria-controls="clips" role="tab" data-toggle="tab">
                        <div class="btn-card cyb_titulo3 cybv zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h5>¿Por qué necesitamos una movilidad más limpia?</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <a href="#menu3" aria-controls="clips" role="tab" data-toggle="tab">
                        <div class="btn-card cyb_titulo3 cybv zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h5>¿Cuáles son las tecnologías de cero y bajas emisiones?</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <a href="#menu2" aria-controls="clips" role="tab" data-toggle="tab">
                        <div class="btn-card cyb_titulo3 cybv zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h5>¿Qué solución proponemos?</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <a href="#menu5" aria-controls="clips" role="tab" data-toggle="tab">
                        <div class="btn-card cyb_titulo3 cybv zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h5>¿Cómo lograr la transición? </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <a href="#menu4" aria-controls="clips" role="tab" data-toggle="tab">
                        <div class="btn-card cyb_titulo3 cybv zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h5>Verdades y mitos sobre estas tecnologías</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <a href="#menu6" aria-controls="clips" role="tab" data-toggle="tab">
                        <div class="btn-card cyb_titulo3 cybv zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h5>Consulta la normatividad aplicable a estas tecnologías</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .botones-tab [class*='col-'] {
            margin: 0px;
            padding: 0px;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
        }

        .box-bottabs .btn-card {
            background: rgba(28, 32, 70, 1);
            height: 130px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: 3s ease all;
        }

        .box-bottabs .btn-card:hover {
            background: linear-gradient(320deg, rgba(102, 224, 38, 1) 50%, rgba(250, 250, 250, 0.1)300%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .box-bottabs a {
            text-decoration: none !important;
        }

        .box-bottabs a:active .btn-card h5,
        .box-bottabs a:focus .btn-card h5 {
            color: rgba(28, 32, 70, 1);
        }

        .box-bottabs a:active .btn-card,
        .box-bottabs a:focus .btn-card {
            background: #fafafa;
        }

        .box-bottabs .btn-card .titulo h5 {
            text-align: center;
            color: rgba(102, 224, 38, 1);
            padding: 10px;
            font-size: 15px;
            font-weight: 700;
        }

        .box-bottabs .btn-card:hover .titulo h5 {
            text-align: center;
            color: #252525;
        }

        .tab-box .box-parrafos {
            background-color: #fafafa;
            padding: 2% 4%;
        }

        .tab-box .box-parrafos .imagen1 {
            background: #1c2046;
            background: linear-gradient(45deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-05-2022/contaminaciondelaire.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 0px;
            height: 450px;
            /* filter: grayscale(100%); */
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            margin: 8px;
        }

        .tab-box .box-parrafos .imagen2 {
            background: #1c2046;
            background: linear-gradient(45deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/cambioclimatico.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: -300px;
            height: 450px;
            /* filter: grayscale(100%); */
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            margin: 8px;
        }

        .tab-box .box-parrafos .parrafo-tab {
            padding: 30px 50px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .tab-box .box-parrafos .parrafo-tab h3 {
            font-size: 30px;
            font-weight: 700;
            text-align: center;
            border-top: solid 2px #1c2046;
            border-bottom: solid 2px #1c2046;
            margin: 0px;
            padding: 8px;
            color: rgba(25, 28, 58, 1);
        }

        .tab-box .box-parrafos .parrafo-tab h4 {
            font-size: 14px;
            /* font-weight: 700; */
            text-align: center;
        }

        .tab-box .box-parrafos .parrafo-tab p {
            font-size: 16px;
            font-weight: 500;
            text-align: justify;
        }

        .tab-box .box-parrafos .parrafo-tab div {
            padding: 5px;
        }

        .box-parrafos .parrafo-tab .enfasis {
            font-size: 1.1em;
            color: rgba(25, 28, 58, 1);
            text-transform: uppercase;
        }

        .tab-box .parrafo-box {
            height: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.5);
            margin: 15px auto;
        }

        .tab-box .parrafo-box h4 {
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
            font-weight: 700;
            text-align: center;
            line-height: 1;
            padding: 10px;
        }

        .tab-box .parrafo-box p {
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            text-align: center;
            line-height: 1.4;
            padding: 10px;
            font-size: 15px;
        }

        .tab-box ul>li {
            font-size: 15px;
            font-weight: 500;
            text-align: left;
            line-height: 1.2;
            color: rgba(25, 25, 25, 1);
            padding-bottom: 8px;
        }

        #myCarousel ul>li {
            font-size: 15px;
            font-weight: 500;
            text-align: left;
            line-height: 1.2;
            color: rgba(255, 255, 255, 1);
            padding-bottom: 8px;
        }
    </style>
    <div class=" row tab-box">

        <div class="tab-content">
            <div id="menu1" class="tab-pane fade">
                <div class="box-parrafos">
                    <div class='row'>
                        <div class='col-xs-12 col-sm-12 col-md-12'>
                            <div class="parrafo-tab">
                                <h3>¿Por qué necesitamos una movilidad más limpia?</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                <div class="parrafo-tab">
                                    <p>La movilidad motorizada en Bogotá, se basa en vehículos de combustión que utilizan combustibles fósiles (gasolina, diésel, GNV, etc), y es la principal responsable de esta problemática, generando:</p>
                                    <ul>
                                        <li><strong>40% de las emisiones básicas de material particulado (principal contaminante del aire en Bogotá).</strong></li>
                                        <li><strong>48% de los gases de efecto invernadero generado en la ciudad.</strong> </li>
                                    </ul>
                                    <p>Estos viajes también aportan a la congestión, la siniestralidad vial y los altos niveles de ruido, afectando la calidad de vida en la ciudad.</p>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-12 col-md-12 '>
                                <div class="imagen1" title="Vehículo expulsando hollín en exceso" alt="Vehículo expulsando hollín en exceso">
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class="parrafo-box">
                                            <div>
                                                <h4>Contaminación del aire</h4>
                                                <p>En Bogotá, en el año 2018 <strong>murieron más de 2.300 personas</strong> por enfermedades asociadas a la contaminación del aire (SDA, 2021).</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-12 col-md-12 '>
                                <div class="imagen2" title="Panorámica de Bogotá con alto nivel de contaminación en el aire" alt="Panorámica de Bogotá con alto nivel de contaminación en el aire">
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class="parrafo-box">
                                            <div>
                                                <h4>Cambio climático</h4>
                                                <p><strong>La ciudad genera el 5% de las emisiones de Gases de Efecto Invernadero del país</strong>, generando 11.421.724 toneladas de CO2 equivalente (t CO2e).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div id="menu2" class="tab-pane fade">
                <div class="box-parrafos">
                    <div class='row'>
                        <div class='col-xs-12 col-sm-12 col-md-12'>
                            <div class="parrafos-box">
                                <div class="parrafo-tab">
                                    <h3>¿Qué solución proponemos<span class="enfasis"></span>?</h3>
                                </div>
                                <div class="parrafo">
                                    <p>Una de las soluciones es la transición desde el uso de vehículos que utilizan combustibles fósiles, hacia vehículos cero emisiones.</p>
                                    <p>Por esto, <strong>Bogotá está formulando la Política Pública de Movilidad Motorizada de Cero y Bajas Emisiones 2023-2040</strong> será la hoja de ruta para consolidar esta movilidad como una alternativa eficiente, accesible y competitiva en la ciudad y sus municipios aledaños.</p>
                                    <p>Apuntándole a las siguientes metas:</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">

                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-02-2022/sitp_electrico.webp" alt="Bus Eléctrico de SITP">
                                        <div class="carousel-caption">
                                            <h3>Transporte público</h3>
                                            <ul>
                                                <li>SITP: Desde 2022 sólo se contratarán buses cero emisiones <span class="glyphicon glyphicon-arrow-right" style="color: rgba(102, 224, 38, 1);" aria-hidden="true"></span> 100% cero emisiones directas de PM a 2036</li>
                                                <li>Taxis: incentivos para la renovación desde 2025 <span class="glyphicon glyphicon-arrow-right" style="color: rgba(102, 224, 38, 1);" aria-hidden="true"></span> 100% eléctricos a 2036.</li>
                                            </ul>
                                            <!-- <p>...</p> -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-02-2022/camion_electrico.webp" alt="Bus Eléctrico de SITP">
                                        <div class="carousel-caption">
                                            <h3>Transporte de carga</h3>
                                            <ul>
                                                <li>Carga liviana y volquetas de 2 ejes <span class="glyphicon glyphicon-arrow-right" style="color: rgba(102, 224, 38, 1);" aria-hidden="true"></span> 100% de la flota será de cero y bajas emisiones a 2040.</li>
                                            </ul>
                                            <!-- <p>...</p> -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-02-2022/oficial.webp" alt="Bus Eléctrico de SITP">
                                        <div class="carousel-caption">
                                            <h3>Transporte oficial y escolar</h3>
                                            <ul>
                                                <li>Flota oficial: Renovación progresiva desde 2022 <span class="glyphicon glyphicon-arrow-right" style="color: rgba(102, 224, 38, 1);" aria-hidden="true"></span> 100% de la flota para transporte de pasajeros eléctrica a 2030.</li>
                                                <li>Flota escolar: Lineamientos y puntajes adicionales en licitaciones para flota eléctrica en las licitaciones desde 2025 <span class="glyphicon glyphicon-arrow-right" style="color: rgba(102, 224, 38, 1);" aria-hidden="true"></span> 100% eléctrica a 2040.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-02-2022/particular.webp" alt="Bus Eléctrico de SITP">
                                        <div class="carousel-caption">
                                            <h3>Particulares</h3>
                                            <ul>
                                                <li>Vehículos particulares: 100% de las ventas serán cero emisiones a 2040.</li>
                                                <li>Motocicletas: 100% de las ventas serán cero emisiones a 2040.</li>
                                            </ul>
                                        </div>
                                    </div>



                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Siguiente</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <style>
                        #menu2 .carousel-caption {
                            right: 10%;
                            left: 10%;
                            /* text-shadow: 0 1px 2px rgba(255, 255, 255, 0.5); */
                            background-color: rgba(0, 0, 0, 0.9);
                            padding: 15px;
                        }

                        #menu2 .carousel-caption h3 {
                            color: rgba(255, 255, 255, 1);
                            font-family: 'Montserrat', sans-serif;
                            font-size: 30px;
                            font-weight: 700;
                            text-align: center;
                            line-height: 1.4;
                        }

                        #menu2 .carousel-control {
                            color: rgba(102, 224, 38, 1) !important;
                            opacity: 1;
                        }

                        /* 
                ul {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                } */
                        .seccion ul>li {
                            padding-bottom: 8px;
                            font-size: 1em;
                            font-weight: normal;
                            text-align: justify;
                            line-height: 1.4;
                            color: rgba(25, 28, 58, 1);

                        }

                        .parrafos-box {
                            display: flex;
                            flex-direction: column;
                        }

                        .parrafos-box .titulo h3 {
                            font-size: 30px;
                            font-weight: 700;
                            text-align: center;
                            border-top: solid 2px #1c2046;
                            border-bottom: solid 2px #1c2046;
                            margin: 0px;
                            padding: 8px;
                            color: rgba(25, 28, 58, 1);
                        }

                        .parrafos-box h4 {
                            font-size: 13px;
                            /* font-weight: 700; */
                            text-align: start;
                        }

                        .parrafos-box .parrafo {
                            padding: 20px;
                            font-size: 15px;
                        }

                        .parrafos-box .parrafo p {
                            font-size: 15px;
                            font-weight: 500;
                            text-align: justify;
                            color: #151515;
                        }

                        @media(max-width:767px) {
                            .carousel-inner>.item {
                                position: relative;
                                height: 600px;
                            }

                            .carousel {
                                position: relative;
                                height: 600px;
                            }


                        }


                        @media screen and (min-width: 768px) {

                            .carousel-control .glyphicon-chevron-left,
                            .carousel-control .glyphicon-chevron-right,
                            .carousel-control .icon-next,
                            .carousel-control .icon-prev {

                                width: 50px !important;
                                height: 50px !important;
                                font-size: 50px !important;
                            }
                        }
                    </style>

                </div>
            </div>
            <div id="menu3" class="tab-pane menu3 fade">
                <div class="box-parrafos">
                    <div class="parrafo-tab">
                        <h3>Tecnologías de cero y bajas emisiones</h3>
                    </div>
                </div>
                <div class="tarjeta-1">
                    <div class="encabezado-tarjeta">
                        <h3>Cero emisiones directas</h3>
                    </div>
                    <br>
                    <div class="bloque">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 hidden-xs">
                                <div class="img-card img-card-1"></div>
                            </div>
                            <div class="col-xs-12 col-sm-5">
                                <div class="txt-tarjeta">
                                    <h4 class="media-heading">Vehículos eléctricos</h4>
                                    <p>Impulsados <strong>exclusivamente por uno o más motores eléctricos,</strong> que obtienen corriente de un sistema de almacenamiento de energía recargable, como baterías. </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-5">
                                <div class="txt-tarjeta">
                                    <h4 class="media-heading">Vehículos hidrógeno</h4>
                                    <p>Vehículos diseñados y construidos para operar con <strong>hidrógeno como fuente primaria de energía</strong> para propulsarse. </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7 hidden-xs">
                                <div class="img-card img-card-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="tarjeta-1">
                    <div class="encabezado-tarjeta">
                        <h3>Bajas emisiones</h3>
                    </div>
                    <br>
                    <div class="bloque">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 hidden-xs">
                                <div class="img-card img-card-3"></div>
                            </div>
                            <div class="col-xs-12 col-sm-5">
                                <div class="txt-tarjeta">
                                    <h4 class="media-heading">Híbridos enchufables</h4>
                                    <p>Cuentan con una batería eléctrica que se puede cargar conectándolo a la red, sin embargo, mantienen su motor de combustión y continúan utilizando combustibles fósiles.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-5">
                                <div class="txt-tarjeta">
                                    <h4 class="media-heading">Vehículos híbridos</h4>
                                    <p>Vehículos con un motor eléctrico que es un complemento del motor de combustión. <strong>El motor eléctrico se carga a partir del combustible fósil</strong> de su motor de combustión.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7 hidden-xs">
                                <div class="img-card img-card-4">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 hidden-xs">
                                <div class="img-card img-card-5"></div>
                            </div>
                            <div class="col-xs-12 col-sm-5">
                                <div class="txt-tarjeta">
                                    <h4 class="media-heading">Vehículos a Gas Natural Vehicular (GNV) dedicado</h4>
                                    <p>Vehículo de combustión <strong>diseñado y fabricado para funcionar exclusivamente con GNV.</strong> No se incluyen los que han sido modificados para que funcionen como vehículos a GNV.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .menu3 .encabezado-tarjeta {
                        background-color: #1c2046;
                        background: linear-gradient(320deg, rgba(102, 224, 38, 1) 50%, rgba(250, 250, 250, 0.1)300%);



                    }

                    .menu3 .encabezado-tarjeta h3 {
                        padding: 15px;
                        text-align: center;
                        color: #161040;
                        font-weight: 700;
                        margin: 0px;
                    }

                    .menu3 .img-card-1 {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/buseselectricostransmilenio.webp');
                    }

                    .menu3 .img-card-2 {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-09-2021/vehiculo_hidrogeno_0.png');
                    }

                    .menu3 .img-card-3 {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-09-2021/vehiculo_hibrido_ench_0.png');
                    }

                    .menu3 .img-card-4 {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-05-2022/hibrido_publico.webp');
                        background-position: left center !important;
                    }

                    .menu3 .img-card-5 {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/transmilenio-a-gas.webp');
                    }

                    .menu3 .img-card {
                        background-color: #151515;
                        height: 300px;
                        margin: 13px;
                        border-radius: 5px;
                        background-position: center;
                        background-size: cover;
                    }


                    .menu3 .txt-tarjeta {
                        /* height: 300px; */
                        display: flex;
                        justify-content: center;
                        flex-direction: column;
                        justify-content: space-evenly;
                        align-items: center;
                        background-color: #ffffffaa;
                        margin: 13px 0px;
                        padding: 15px;
                        border: solid 10px transparent;

                    }

                    .menu3 .txt-tarjeta h4 {
                        text-align: center;
                        font-weight: 700;
                        color: #161040;
                    }

                    .menu3 .txt-tarjeta p {
                        text-align: center;
                        color: #151515;
                    }
                </style>

                <div class='row'>
                    <div class='col-xs-12'>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class='table-imagen'>
                                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/estacion.png' alt='icono gasolinera' title='icono gasolinera'>
                                                <span class="text-table">VS</span>
                                                <img width="60px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/electrica.png' alt='icono estación eléctrica' title='icono estación eléctrica'>
                                            </div>
                                        </th>
                                        <th>
                                            <div class='table-imagen-v'>
                                                <img width="40px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/vehiculo.png' alt='icono vehículo vista frontal' title='icono vehículo vista frontal'>
                                                <span class="text-table">Vehículo Convencional</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div class='table-imagen-v'>
                                                <img width="40px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/vehiculo_a.png' alt='icono vehículo vista frontal' title='icono vehículo vista frontal'>
                                                <span class="text-table">Vehículo Híbridos</span>
                                            </div>

                                        </th>
                                        <th>
                                            <div class='table-imagen-v'>
                                                <img width="40px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/vehiculo_b.png' alt='icono vehículo vista frontal' title='icono vehículo vista frontal'>
                                                <span class="text-table">Vehículo Híbridos <br> <sub>Eléctrico Enchufable</sub></span>
                                            </div>
                                        </th>
                                        <th>
                                            <div class='table-imagen-v'>
                                                <img width="40px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/vehiculo_d.png' alt='icono vehículo vista frontal' title='icono vehículo vista frontal'>
                                                <span class="text-table">Vehículo Eléctrico <br> <sub>100%</sub></span>
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
                                                <img width="40px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/estacion_a.png' alt='icono gasolinera' title='icono gasolinera'>
                                                <span class="text-table2">Combustible Fósil, Biocombustible</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="40px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/estacion_b.png' alt='icono gasolinera' title='icono gasolinera'>
                                                <span class="text-table2">Combustible Fósil, Biocombustible</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <div>
                                                    <img width="40px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/estacion_c.png' alt='icono gasolinera' title='icono gasolinera'>
                                                    <span class="text-table">+</span>
                                                    <img width="40px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/electrica_c.png' alt='icono estación eléctrica' title='icono estación eléctrica'>
                                                </div>
                                                <span class="text-table2">Combustible Fósil, Biocombustible, Energía Eléctrica</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="40px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/electrica_b.png' alt='icono estación eléctrica' title='icono estación eléctrica'>
                                                <span class="text-table2">Energía Eléctrica</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table-imgen-v">
                                                <div>
                                                    <span class="title-table">Rendimiento*</span>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="30px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/galon_b.png' alt='icono galón' title='icono galón'>
                                                <span class="text-table2">38,8Km / Galón eq.</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="30px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/galon_c.png' alt='icono galón' title='icono galón'>
                                                <span class="text-table2">71,04Km / Galón eq.</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <div>
                                                    <img width="30px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/galon_d.png' alt='icono galón' title='icono galón'>
                                                    <span class="text-table">+</span>
                                                    <img width="20px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/bataria_b.png' alt='icono batería' title='icono batería'>
                                                </div>
                                                <span class="text-table2">115,5Km / Galón eq.</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="20px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/bateria_d.png' alt='icono batería' title='icono batería'>
                                                <span class="text-table2">168,5Km / Galón eq.</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table-imgen-v">
                                                <div>
                                                    <span class="title-table">Emisiones</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/humo.png' alt='icono humo' title='icono humo'>
                                                <span class="text-table2">19,6Kg CO2 / 100km</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/humo_a.png' alt='icono humo' title='icono humo'>
                                                <span class="text-table2">10,7Kg CO2 / 100km</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/humo_b.png' alt='icono humo' title='icono humo'>
                                                <span class="text-table2">5,7Kg CO2 / 100km</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/humo_d.png' alt='icono humo' title='icono humo'>
                                                <span class="text-table2"><strong>0Kg CO2 / 100km</strong></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><i>Comparación entre Tecnologías de Cero y Bajas Emisiones</i></p>
                            <p><i>* Comparación para un vehículo Sedan Promedio. Fuente: Alternative Fuels Data Center - National Renewable Energy Laboratory (NREL)</i></p>
                            <p><i>** Para los vehículos híbridos enchufables y los eléctricos el rendimiento se calcula en galones equivalentes de gasolina, asumiendo que un galón de gasolina es equivalente a 33,7 kWh de electricidad. Fuente: <a href="http://www.nrel.gov/docs/fy14osti/61108.pdf" target="_blank" rel="noopener noreferrer">https://www.nrel.gov/docs/fy14osti/61108.pdf</a></i></p>
                        </div>
                        <style>
                            .table {
                                margin-top: 30px;
                            }

                            .table img {
                                margin: 6px;

                            }

                            .table>tbody>tr>td,
                            .table>tbody>tr>th,
                            .table>tfoot>tr>td,
                            .table>tfoot>tr>th,
                            .table>thead>tr>td,
                            .table>thead>tr>th {
                                vertical-align: middle !important;
                                text-align: center !important;
                            }

                            th {
                                background-color: #e0e0e0 !important;
                            }

                            table,
                            th,
                            td {
                                border: 1.5px rgba(28, 32, 70, 1) dotted !important;
                            }

                            tr:hover {
                                background-color: #d5d5d5;
                            }

                            .table-imagen {
                                /* height: 100px; */
                                display: flex;
                                /* flex-direction: column; */
                                justify-content: center;
                                align-items: center;
                                padding: 15px;
                            }

                            .table-imagen-v {
                                /* height: 100px; */
                                display: flex;
                                flex-direction: column;
                                justify-content: space-evenly;
                                align-items: center;
                                padding: 15px;
                            }

                            .text-table {
                                font-size: 16px;
                                font-weight: 700;
                                text-align: center;
                                line-height: 1.2;
                                color: rgba(25, 25, 25, 1);
                                padding: 10px;

                            }

                            .text-table2 {
                                font-size: 15px;
                                font-weight: 500;
                                text-align: center;
                                line-height: 1.2;
                                color: rgba(25, 25, 25, 1);
                                padding: 10px;
                            }

                            .title-table {
                                font-size: 18px;
                                font-weight: 700;
                                text-align: center;
                                line-height: 1.2;
                                color: rgba(25, 25, 25, 1);
                            }

                            .mitos {
                                padding: 2% 4%;
                            }

                            .ceroybajas .panel-default>.panel-heading {
                                background-color: #e0e0e0 !important;
                            }


                            .mitos .panel .panel-heading h3 {
                                font-weight: 700;
                                text-align: initial;
                                line-height: 1.4;
                                color: rgba(25, 25, 25, 1);
                            }
                        </style>

                    </div>
                </div>
            </div>
            <div id="menu4" class="tab-pane fade">
                <div class="seccion-5">
                    <div class="box-parrafos">
                        <div class="parrafo-tab">
                            <h3>Derribando mitos</h3>
                        </div>


                        <div class="row mitos">
                            <div class='col-xs-12 col-sm-12'>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">¿Cargar un vehículo eléctrico toma más de una hora?</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>No siempre, utilizando un cargador rápido tardaría aproximadamente 30 minutos en cargar hasta en un 80% la batería del vehículo. Bogotá tendrá 20 puntos de recarga rápida de uso público en 2022 y seguirá aumentando esta infraestructura.</p>
                                        <p>Si se utiliza un cargador semi-rápido, tardaría entre 2 y 4 horas y con un cargador lento el tiempo sería mayor a 6 horas. Este tipo de cargadores son más adecuados para la recarga en el hogar.</p>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">¿Puede un vehículo eléctrico subir las mismas pendientes que los vehículos de combustión?</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Verdadero, la variable que indica el desempeño de los vehículos en pendientes es el torque y es similar para vehículos de combustión y eléctricos.</p>
                                        <p>A manera de ejemplo, de acuerdo con Transmilenio S.A., los buses padrones eléctricos adquiridos para la ciudad han demostrado su potencia al subir pendientes de incluso 20% sin dificultad a 20 km/h con capacidad de carga máxima (80 pasajeros). Adicionalmente, para un bus articulado eléctrico, la entidad ha realizado pruebas de arranque en pendientes del 8% al 14% con capacidad de carga máxima (160 pasajeros), las cuales han superado sin dificultad.</p>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">¿Con una carga completa, podría recorrer más de 100 km en un vehículo eléctrico de uso privado?</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Verdadero, A continuación se brindan algunos ejemplos de autonomías reportadas de vehículos eléctricos en el mercado colombiano:</p>
                                        <ul>
                                            <li>100 km: Vehículos biplaza como Renault Twizy y Oransh</li>
                                            <li>150 km: Vehículos biplaza como Zhidou D2S y Jiayuan</li>
                                        </ul>
                                        <p>Entre 300 y 400 km:</p>
                                        <ul>
                                            <li>Renault Zoe (300 km)</li>
                                            <li>BMW i3 (330 km)</li>
                                            <li>Nissan Leaf (350 km)</li>
                                            <li>BYD E2, E3 y Yuan (versiones de 300 km y de 400 km)</li>
                                        </ul>
                                        <p>Más de 400 km:</p>
                                        <ul>
                                            <li>Tesla Model 3</li>
                                            <li>Porsche Taycan</li>
                                        </ul>
                                        <p>Como referencia, un viaje ida y vuelta desde la Plaza Lourdes, hasta:</p>
                                        <ul>
                                            <li>Zipaquirá ≈ 100 km.</li>
                                            <li>Girardot ≈ 300 km.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Para vehículos con características similares, ¿los costos de adquisición de un vehículo eléctrico son más altos que los de un vehículo de combustión?</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Actualmente, el costo de adquisición de un vehículo eléctrico es más alto que el de un vehículo similar de combustión, pero los gastos asociados a la operación son significativamente menores. Adicionalmente, la reducción del costo de las baterías y los incentivos para facilitar la adquisición y uso, harán que los precios sean cada vez más competitivos.</p>
                                        <p>Un vehículo eléctrico de cuatro pasajeros puede costar entre 100 y 150 millones de pesos en promedio. A continuación se presentan algunos precios de referencia a julio de 2021:</p>
                                        <ul>
                                            <li>BYD E0: $83.900.000</li>
                                            <li>BYD E3: $106.900.000</li>
                                            <li>BYD Yuan: $114.900.000</li>
                                            <li>Renault Zoe Zen: $131.440.000</li>
                                            <li>Nissan Leaf: $143.990.000</li>
                                            <li>BMW i3: $172.900.000</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">¿Para vehículos con características similares, los costos de operación y mantenimiento de un vehículo de combustión son más altos que de un vehículo eléctrico?</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Verdadero, en promedio, los costos de operación y mantenimiento de los vehículos eléctricos son menores que los de los vehículos convencionales, esto se debe principalmente a que el costo de la energía es más barato que el costo de combustible y que los vehículos eléctricos tienen menos componentes susceptibles a mantenimiento. A manera de ejemplo, los costos operacionales de los taxis eléctricos del piloto de Bogotá fueron 25% menores en comparación a los taxis de combustión.</p>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">¿La vida útil de un vehículo eléctrico gama media puede durar en promedio más de 10 años?</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Verdadero. La vida útil depende del uso que se le dé al vehículo, se estima que un VE dura en promedio 160.000 kms que para el uso promedio de los vehículos particulares en Colombia representaría una vida útil de más de 10 años.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div id="menu5" class="tab-pane fade">
                <div class="box-parrafos">
                    <div class="parrafo-tab">
                        <h3>¿Cómo lograr la transición?</h3>
                    </div>


                    <!-- collapse_transicion -->
                    <div class='panel-group' id='accordion_transicion' role='tablist ' aria-multiselectable='true'>

                        <!-- collapse_incentivos -->
                        <div class='panel panel-default'>
                            <div class='panel-heading' role='tab' id='heading_incentivos'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion_transicion' href='#collapse_incentivos' aria-expanded='true' aria-controls='collapse_incentivos'>
                                        Con incentivos en toda la cadena de valor y desincentivos a los más contaminantes.

                                    </a>
                                </h4>
                            </div>
                            <div id='collapse_incentivos' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_incentivos'>
                                <div class='panel-body'>
                                    <div>
                                        <p>¡Conoce los incentivos que ya existen para estas tecnologías! </p>
                                        <br>
                                        <div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-hover table-condensed">
                                                            <tr>
                                                                <th class="th1" colspan="2">Instrumentos para la promoción de movilidad de Cero y Bajas Emisiones</th>
                                                                <th class="th1">Competencia</th>
                                                                <th class="th1">Gasolina</th>
                                                                <th class="th1">Eléctrico</th>
                                                                <th class="th1">Híbrido</th>
                                                            </tr>
                                                            <tr>
                                                                <th rowspan="2">Incentivos a la compra</th>
                                                                <td><strong>Aranceles</strong></td>
                                                                <td><strong>Nación:</strong><br>Decreto 2051 del 13 de noviembre de 2019</td>
                                                                <td>0% - 35%</td>
                                                                <td>0%</td>
                                                                <td>5%</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>IVA</strong></td>
                                                                <td><strong>Nación:</strong> <br>Ley 1819 del 2016</td>
                                                                <td>19%</td>
                                                                <td>5%</td>
                                                                <td>5%</td>
                                                            </tr>
                                                            <tr>
                                                                <th rowspan="3">Incentivos de uso y circulación</th>
                                                                <td rowspan="2"><strong>Impuesto Vehicular</strong></td>
                                                                <td><strong>Nación:</strong> <br>Ley 1964 de 2019</td>
                                                                <td>1,5% - 3,5%</td>
                                                                <td>1%</td>
                                                                <td>1,5% - 3,5%</td>

                                                            </tr>
                                                            <tr>
                                                                <td><strong>Distrito:</strong> <br> Acuerdo 780 de 2020</td>
                                                                <td>0%</td>
                                                                <td>
                                                                    <p>Nuevos:</p>
                                                                    <p>-60% por 5 años</p>
                                                                    <p>Taxis:</p>
                                                                    <p>-70% por 5 años</p>
                                                                </td>
                                                                <td>-40% por 5 años</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Pico y Placa</strong></td>
                                                                <td>
                                                                    <p><strong>Distrito:</strong> </p>
                                                                    <p>Decreto 575 de 2013</p>
                                                                    <p>Resolución 83464 de 2021</p>
                                                                </td>
                                                                <td>Aplica</td>
                                                                <td>No aplica</td>
                                                                <td>No aplica</td>
                                                            </tr>
                                                            <tr>
                                                                <th rowspan="4">Otros instrumentos de promoción</th>
                                                                <td><strong>Beneficios SOAT</strong></td>
                                                                <td><strong>Distrito:</strong> <br> Ley 1964 de 2019</td>
                                                                <td>0%</td>
                                                                <td>-10%</td>
                                                                <td>0%</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Infraestructura de recarga de acceso público</strong></td>
                                                                <td><strong>Distrito:</strong> <br> Decreto 552 de 2018</td>
                                                                <td>EDS</td>
                                                                <td>1 rápida y 56 semi</td>
                                                                <td>EDS + Eléctricas</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Beneficios técnico mecánica</strong></td>
                                                                <td><strong>Nación:</strong> <br> Ley 1964 de 2019</td>
                                                                <td>0%</td>
                                                                <td>-30%</td>
                                                                <td>0%</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Parqueaderos preferenciales</strong></td>
                                                                <td><strong>Distrito:</strong> <br> Circular No. 006 de 2020</td>
                                                                <td>No aplica</td>
                                                                <td>(En definición)</td>
                                                                <td>No aplica</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-12'>
                                                    <p><strong>Formularemos incentivos económicos y no económicos que promuevan el despliegue de estas tecnologías en todos los segmentos de transporte y la cadena de valor</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /#fin _incentivos -->

                        <!-- collapse_red -->
                        <div class='panel panel-default'>
                            <div class='panel-heading' role='tab' id='heading_red'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion_transicion' href='#collapse_red' aria-expanded='true' aria-controls='collapse_red'>
                                        Consolidando una red inteligente de infraestructura de recarga
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse_red' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_red'>
                                <div class='panel-body'>
                                    <div>

                                        <div class="seccion-6">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="txt-seccion-6">
                                                        <p><strong>Le apostamos a tener 20 puntos de carga rápida para uso público en la ciudad a 2022.</strong> Conoce la infraestructura que existe hoy.</p>
                                                    </div>
                                                    <div class='images-map'>
                                                        <div class="img-map">
                                                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/1200x680.png' alt='Mapa de infraestructura existente' title='Mapa de infraestructura existente'>
                                                        </div>
                                                        <div class="middle">
                                                            <a target="_blank" rel="noopener noreferrer" href="https://movilidadbogota.maps.arcgis.com/apps/dashboards/5d0b51d77c9247088b62d2d590e15e2d">
                                                                <div class="text-map">Conoce más detalles aquí</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="txt-seccion-6">
                                                        <p>Si tienes un vehículo eléctrico o una flota de vehículos eléctricos y consideras que no hay suficientes puntos de recarga en tu zona, envíanos un correo a <a href="mailto:movilidadecoeficiente@movilidadbogota.gov.co">movilidadecoeficiente@movilidadbogota.gov.co</a> y lo tendremos en cuenta para la expansión de la Red.</p>
                                                        <p>Igualmente, otros operadores han dispuesto estaciones de recarga de uso público en la ciudad, las cuales se pueden consultar <a href="https://www.electromaps.com/mapa?qsearch=bogota" target="_blank" rel="noopener noreferrer">aquí</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <style>
                                            .images-map {
                                                position: relative;
                                            }

                                            .img-map {
                                                opacity: 1;
                                                display: block;
                                                height: auto;
                                                transition: .5s ease;
                                                backface-visibility: hidden;
                                            }

                                            .middle {
                                                transition: .5s ease;
                                                opacity: 0;
                                                position: absolute;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                -ms-transform: translate(-50%, -50%);
                                                text-align: center;
                                            }

                                            .middle a {
                                                text-decoration: none !important;
                                                color: rgb(28, 32, 70, 1);
                                                text-align: center;
                                            }

                                            .images-map:hover .img-map {
                                                opacity: 0.3;
                                            }

                                            .images-map:hover .middle {
                                                opacity: 1;
                                            }

                                            .text-map {
                                                background-color: rgba(102, 224, 38, 1);
                                                color: rgba(28, 32, 70, 1);
                                                font-size: 16px;
                                                padding: 16px 32px;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /#fin _red -->

                        <!-- collapse_capacidades -->
                        <div class='panel panel-default'>
                            <div class='panel-heading' role='tab' id='heading_capacidades'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion_transicion' href='#collapse_capacidades' aria-expanded='true' aria-controls='collapse_capacidades'>
                                        Con un entorno de comunicación claro y desarrollo de nuevas capacidades técnicas
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse_capacidades' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_capacidades'>
                                <div class='panel-body'>
                                    <div>
                                        <div class="seccion-7">
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-12'>
                                                    <ol>

                                                        <p>
                                                            <li><strong>El SENA ha desarrollado los siguientes cursos complementarios sobre movilidad de cero y bajas emisiones.</strong>
                                                        </p>
                                                        <ul>
                                                            <li>Formación en Vehículos de propulsión eléctrica</li>
                                                            <li>Formación en Vehículos de propulsión Híbrida </li>
                                                            <li>Habilitación eléctrica para Vehículos eléctricos e Híbridos</li>
                                                            <li>Mantenimiento del sistema eléctrico de la motocicleta </li>
                                                            <li>Mantenimiento de Motocicletas de propulsión eléctrica </li>
                                                            <li>Mantenimiento de Patinetas y Bicicletas eléctricas </li>
                                                            <li>Conducción Eco-Eficiente en el transporte</li>
                                                            <p><a href="https://forms.gle/in7zmqVLyfmAaCeLA">Registrar tu interes de participar aquí</a></p><br>
                                                        </ul>
                                                        </li>

                                                        <p>
                                                            <li><strong>Conoce más sobre movilidad eléctrica con estas herramientas:</strong>
                                                        </p>
                                                        <ul>
                                                            <li>Documento de diagnóstico sobre la movilidad de cero y bajas emisiones:
                                                                <p><a href="https://drive.google.com/file/d/1TAxh1-NCWJj0WbGjsLPuZBZsJwDqLtIn/view?usp=sharing">https://drive.google.com/file/d/1TAxh1-NCWJj0WbGjsLPuZBZsJwDqLtIn/view?usp=sharing</a></p>
                                                            </li>
                                                            <li>Guía de Movilidad eléctrica para organizaciones (Próximamente)
                                                                <p><a href="/"></a></p>
                                                            </li>
                                                        </ul>
                                                        </li>
                                                        </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <style>
                                            .seccion-7 ol {
                                                list-style-type: none;
                                                margin: 0;
                                                padding: 0;
                                            }

                                            .seccion-7 ol>li {
                                                display: block;
                                            }

                                            .seccion-7 ol>li:before {
                                                /*Using a Bootstrap glyphicon as the bullet point*/
                                                content: "\e162";
                                                font-family: 'Glyphicons Halflings';
                                                font-size: 18px;
                                                float: left;
                                                margin-top: 0px;
                                                margin-left: -20px;
                                                color: rgba(102, 224, 38, 1);
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /#fin _capacidades -->

                        <!-- collapse_investigacion -->
                        <div class='panel panel-default'>
                            <div class='panel-heading' role='tab' id='heading_investigacion'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion_transicion' href='#collapse_investigacion' aria-expanded='true' aria-controls='collapse_investigacion'>
                                        Generando un ecosistema de investigación e innovación entre la academia, el sector privado y la sociedad civil
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse_investigacion' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_investigacion'>
                                <div class='panel-body'>
                                    <div>

                                        <div class="seccion-8">
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-12'>
                                                    <p><strong>No te quedes por fuera, únete y sé parte del cambio.</strong></p>
                                                    <p>Esta transición necesita del trabajo conjunto con el sector privado, académico y los actores de toda la cadena de valor para acelerar la transición. </p>
                                                </div>
                                            </div>
                                            <div class='row box-general'>
                                                <div class='col-xs-12 col-sm-3'>
                                                    <div class='img-general'>
                                                        <div>
                                                            <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-05-2022/unep50logo.png' alt='Logo ONU Programa para el emdio ambiente' title='Logo ONU Programa para el emdio ambiente'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='col-xs-12 col-sm-3'>
                                                    <div class='img-general'>
                                                        <div>
                                                            <img class='img-responsive img2' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-05-2022/b_move_to_zero-full_color.png' alt='Logo Move to Zero' title='Logo Move to Zero'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='col-xs-12 col-sm-6'>
                                                    <div class='img-general'>
                                                        <div>
                                                            <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/logo-sdm.png' alt='Logo Secretaría Distrital de Movilidad' title='Logo Secretaría Distrital de Movilidad'>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <style>
                                                .box-general {
                                                    padding: 30px;
                                                }

                                                .img-general {
                                                    height: 100px;
                                                    display: flex;
                                                    flex-direction: column;
                                                    justify-content: center;
                                                    align-items: center;
                                                }

                                                .img-general img {
                                                    max-height: 100px;
                                                }

                                                .img-general .img2 {
                                                    padding: 15px;
                                                }
                                            </style>


                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-12'>
                                                    <p>Nos unimos con el PNUMA para <strong>invitar a las organizaciones a que definan compromisos específicos por la movilidad eléctrica</strong> en alguno de los siguientes ejes:</p>
                                                </div>
                                            </div>

                                            <div class="row fila-s8">
                                                <div class='col-xs-2'>
                                                    <div class='imagen text-right'>
                                                        <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/path932.png' alt='icono barras' title='icono barras'>
                                                    </div>
                                                </div>
                                                <div class='col-xs-9'>
                                                    <p><strong>Generar mayor oferta vehicular de cero emisiones a precios competitivos</strong> para las diferentes tipologías vehiculares.</p>
                                                </div>
                                            </div>

                                            <div class="row fila-s8">
                                                <div class='col-xs-2'>
                                                    <div class='imagen text-right'>
                                                        <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/path931.png' alt='icono vehiculo tipo camioneta' title='icono vehiculo tipo camioneta'>
                                                    </div>
                                                </div>
                                                <div class='col-xs-9'>
                                                    <p><strong>Adquirir flotas motorizadas de cero emisiones</strong> por parte de las organizaciones empresariales.</p>
                                                </div>
                                            </div>

                                            <div class="row fila-s8">
                                                <div class='col-xs-2'>
                                                    <div class='imagen text-right'>
                                                        <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/path961.png' alt='icono herramieta para la carga de bateria' title='icono herramieta para la carga de bateria'>
                                                    </div>
                                                </div>
                                                <div class='col-xs-9'>
                                                    <p><strong>Instalar infraestructura de recarga pública y privada, gestionar espacios para la misma.</strong></p>
                                                </div>
                                            </div>

                                            <div class="row fila-s8">
                                                <div class='col-xs-2'>
                                                    <div class='imagen text-right'>
                                                        <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/path975.png' alt='icono bombilla con engranje' title='icono bombilla con engranje'>
                                                    </div>
                                                </div>
                                                <div class='col-xs-9'>
                                                    <p><strong>Impulsar la innovación, investigación, empleabilidad y desarrollo de capacidades técnicas </strong>en toda la cadena valor de la movilidad eléctrica con enfoque de género y diferencial.</p>
                                                </div>
                                            </div>
                                            <div class="row fila-s8">
                                                <div class='col-xs-2'>
                                                    <div class='imagen text-right'>
                                                        <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/path989.png' alt='icono vehiculo tipo camioneta' title='icono vehiculo tipo camioneta'>
                                                    </div>
                                                </div>
                                                <div class='col-xs-9'>
                                                    <p><strong>Promover mejores condiciones financieras y de seguros</strong> en toda la cadena valor y con efoque diferencial.</p>
                                                </div>
                                            </div>
                                            <style>
                                                .fila-s8 {
                                                    padding: 10px;
                                                }
                                            </style>

                                        </div>
                                        <br>
                                        <div class='row'>
                                            <div class='col-xs-12'>
                                                <p><strong>Si tu organización quiere hacer parte de esta transición y visibilizar sus esfuerzos a nivel internacional, solo debe diligenciar el siguiente formato: </strong><a href="https://docs.google.com/document/d/1XrmtuvMesZeVmXvxtOMzv0tU4fm_Zk9V/edit" target="_blank" rel="noopener noreferrer">https://docs.google.com/document/d/1XrmtvMesZeVmXvxtOMzv0tU4fm_Zk9V/edit</a></p>
                                                <p>Y enviarlo a los correos <a href="mailto:movilidadecoeficiente@movilidadbogota.gov.co">movilidadecoeficiente@movilidadbogota.gov.co</a> y <a href="mailto:german.diazrivas@un.org">german.diazrivas@un.org</a></p>
                                                <p>Ya son más de 30 organizaciones comprometidas que han generado más de 60 compromisos por la movilidad eléctrica. <a href="https://drive.google.com/file/d/1XbddBGDIDbzLrky8-6rQDE5W8lmrrHZr/view?usp=sharing">Conócelos haciendo clic aquí.</a></p>

                                            </div>
                                        </div>



                                        <div id="carousel_empresas" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel_empresas" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel_empresas" data-slide-to="1"></li>
                                                <li data-target="#carousel_empresas" data-slide-to="2"></li>
                                            </ol>

                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <div class='row logos'>
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_akt_electric_400.png" alt="">
                                                        </div>
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_akuai_400.png" alt="">
                                                        </div>
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_andemos_400.png" alt="">
                                                        </div>
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_enel_400.png" alt="">
                                                        </div>
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_colturex_400.png" alt="">
                                                        </div>
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_defencarga_400.png" alt="">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="item">
                                                    <div class="row logos">
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_uniandes_400.png" alt="">
                                                        </div>
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_evoelectric_400.png" alt="">
                                                        </div>
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_girozero_400.png" alt="">
                                                        </div>
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_heliox_400.png" alt="">
                                                        </div>
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_insepet_400.png" alt="">
                                                        </div>
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_navisaf_400.png" alt="">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row logos">
                                                        <div class='col-xs-12 col-sm-2 col-sm-offset-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_piot_400.png" alt="">
                                                        </div>
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_renting_400.png" alt="">
                                                        </div>
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_solistica_400.png" alt="">
                                                        </div>
                                                        <div class='col-xs-12 col-sm-2'>
                                                            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-05-2022/logo_tractec_400.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Left and right controls -->
                                            <a class="left carousel-control" href="#carousel_empresas" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <span class="sr-only">Anterior</span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel_empresas" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="sr-only">Siguiente</span>
                                            </a>
                                        </div>

                                        <style>
                                            #carousel_empresas {
                                                margin: 0px 50px;
                                            }

                                            #carousel_empresas .carousel-caption {
                                                right: 10%;
                                                left: 10%;
                                                /* text-shadow: 0 1px 2px rgba(255, 255, 255, 0.5); */
                                                background-color: rgba(0, 0, 0, 0.9);
                                                padding: 15px;
                                            }

                                            #carousel_empresas .carousel-caption h3 {
                                                color: rgba(255, 255, 255, 1);
                                                font-family: 'Montserrat', sans-serif;
                                                font-size: 30px;
                                                font-weight: 700;
                                                text-align: center;
                                                line-height: 1.4;
                                            }

                                            #carousel_empresas .carousel-control {
                                                color: rgb(28, 32, 70, 1) !important;
                                                opacity: 1;
                                                background-color: #00000000;
                                                filter: none;
                                                opacity: 1;
                                            }

                                            #carousel_empresas .logos {
                                                margin: 0px;
                                            }

                                            #carousel_empresas .logos img {
                                                margin: auto;
                                                max-height: 150px;
                                                min-width: 60px;
                                                width: auto;
                                            }

                                            #carousel_empresas .carousel-control .glyphicon-chevron-left,
                                            #carousel_empresas .carousel-control .glyphicon-chevron-right,
                                            #carousel_empresas .carousel-control .icon-next,
                                            #carousel_empresas .carousel-control .icon-prev {
                                                top: calc(50% - 20px) !important;
                                            }

                                            #carousel_empresas .carousel-control .glyphicon-chevron-right,
                                            #carousel_empresas .carousel-control .icon-next {
                                                right: 10% !important;
                                                margin-right: -10px;
                                            }

                                            #carousel_empresas .carousel-control .glyphicon-chevron-left,
                                            #carousel_empresas .carousel-control .icon-prev {
                                                left: 10% !important;
                                                margin-left: -10px;
                                            }

                                            @media(max-width:767px) {
                                                #carousel_empresas {
                                                    margin: 0px;
                                                }

                                                .carousel-inner>.item {
                                                    position: relative;
                                                    height: 400px;
                                                }

                                                #carousel_empresas {
                                                    position: relative;
                                                    height: auto;
                                                }


                                            }

                                            #carousel_empresas .carousel-control.right,
                                            #carousel_empresas .carousel-control.left {
                                                background-image: none !important;
                                                filter: none !important;
                                                background-repeat: repeat-x;
                                            }


                                            @media screen and (min-width: 768px) {

                                                #carousel_empresas .carousel-control .glyphicon-chevron-left,
                                                #carousel_empresas .carousel-control .glyphicon-chevron-right,
                                                #carousel_empresas .carousel-control .icon-next,
                                                #carousel_empresas .carousel-control .icon-prev {

                                                    width: 40px !important;
                                                    height: 40px !important;
                                                    font-size: 40px !important;
                                                }

                                                #carousel_empresas .carousel-control .glyphicon-chevron-right,
                                                #carousel_empresas .carousel-control .icon-next {
                                                    right: -40% !important;
                                                    margin-right: -10px;
                                                }

                                                #carousel_empresas .carousel-control .glyphicon-chevron-left,
                                                #carousel_empresas .carousel-control .icon-prev {
                                                    left: -40% !important;
                                                    margin-left: -10px;
                                                }
                                            }
                                        </style>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /#fin _investigacion -->

                    </div>
                    <!-- /#fin _transicion -->

                    <!-- <style>
                        #accordion_transicion .panel-title {
                            font-weight: 700;
                            text-align: initial;
                        }

                        #accordion_transicion .panel-body {
                            padding: 5%;
                        }
                    </style> -->

                    <br>
                </div>
            </div>
            <div id="menu6" class="tab-pane fade">
                <div class="box-parrafos">
                    <div class="seccion-3">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5">
                                <div class="encabezado-seccion-3">

                                    <div class="parrafo-tab">
                                        <h3>¿Qué normatividad existe?</h3>
                                    </div>
                                </div>
                                <div class="txt-seccion-3">
                                    <p>En temas de promoción y transición hacia la movilidad motorizada de cero y bajas emisiones, se cuenta con normatividad desde el ordenamiento jurídico internacional, nacional y distrital.</p>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-7">
                                <div class="collapse-normativa">
                                    <div class="d_acordion">

                                        <div class="panel-group" id="accordion_normativo" role="tablist" aria-multiselectable="true">

                                            <!-- collapse_1 -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading ph1" role="tab" id="heading_1">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion_normativo" href="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                                            Internacional
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_1">
                                                    <div class="panel-body pb1">
                                                        <ul>
                                                            <li class="li_1">Agenda 2030. <a href="https://www.un.org/sustainabledevelopment/es/development-agenda/" target="_blank" rel="noopener noreferrer">Ver Online</a></li>
                                                            <li class="li_1">Acuerdo de París <a href="https://unfccc.int/sites/default/files/spanish_paris_agreement.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Declaración de crecimiento verde <a href="https://www.oecd.org/greengrowth/49709364.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Convención Marco de las Naciones Unidas sobre el Cambio Climático <a href="https://unfccc.int/resource/docs/convkp/convsp.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /#collapse_1 -->

                                            <!-- collapse_2 -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading ph1" role="tab" id="heading_2">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion_normativo" href="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                                                            Nacional
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_2">
                                                    <div class="panel-body pb1">
                                                        <ul>
                                                            <li class="li_1">Ley 2099 de 2021 (Disposiciones para la transición energética) <a href="https://dapre.presidencia.gov.co/normativa/normativa/LEY%202099%20DEL%2010%20DE%20JULIO%20DE%202021.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Decreto 191 de 2021 (Estacionamientos preferenciales para Vehículos Eléctricos) <a href="https://dapre.presidencia.gov.co/normativa/normativa/DECRETO%20191%20DEL%2023%20DE%20FEBRERO%20DE%202021.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Resolución 40223 de 2021 (Estandarización de Conectores) <a href="https://www.minenergia.gov.co/documents/10180//23517//48995-40223.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Ley 1964 de 2019 (Promoción de vehículos eléctricos en Colombia)<a href="https://dapre.presidencia.gov.co/normativa/normativa/LEY%201964%20DEL%2011%20DE%20JULIO%20DE%202019.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Estrategia Nacional de Movilidad Eléctrica <a href="https://www1.upme.gov.co/DemandaEnergetica/ENME.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Plan Energético Nacional (2020-2050)<a href="https://www1.upme.gov.co/DemandayEficiencia/Documents/PEN_2020_2050/Plan_Energetico_Nacional_2020_2050.pdf" target="_blank" rel="noopener noreferrer">(.pdf), </a><a href="https://www1.upme.gov.co/DemandayEficiencia/Paginas/PEN.aspx" target="_blank" rel="noopener noreferrer">Enlace Documentos Relacionados.</a></li>
                                                            <li class="li_1">Política de Crecimiento Verde <a href="https://www.dnp.gov.co/Crecimiento-Verde/Documents/Pol%C3%ADtica CONPES 3934/CONPES 3934 - Pol%C3%ADtica de Crecimiento Verde.pdf" target="_blank" rel="noopener noreferrer">(.pdf), </a><a href="https://www.dnp.gov.co/Crecimiento-Verde/Paginas/Politica-crecimiento-verde.aspx" target="_blank" rel="noopener noreferrer">Enlace Documentos Relacionados.</a></li>
                                                            <li class="li_1">Contribución Determinada a nivel Nacional (NDC Colombia actualizada) <a href="https://www.minambiente.gov.co/wp-content/uploads/2021/10/informe-actualizacion-contribucion-determinada-Colombia-ndc-2020.pdf" target="_blank" rel="noopener noreferrer">(.pdf), </a><a href="https://www.minambiente.gov.co/index.php/ndc-actualizada" target="_blank" rel="noopener noreferrer">Enlace Documentos Relacionados.</a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /#collapse_2 -->

                                            <!-- collapse_3 -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading ph1" role="tab" id="heading_3">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion_normativo" href="#collapse_3" aria-expanded="true" aria-controls="collapse_3">
                                                            Distrital
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_3">
                                                    <div class="panel-body pb1">
                                                        <ul>
                                                            <li class="li_1">Acuerdo 811 de 2021 (Acciones para la descarbonización en Bogotá) <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=113880&dt=S" target="_blank" rel="noopener noreferrer">Ver Online</a></li>
                                                            <li class="li_1">Acuerdo 790 de 2020 (Declaratoria emergencia climática) <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=103745&dt=S" target="_blank" rel="noopener noreferrer">Ver Online, </a><a href="https://www.catorce6.com/images/legal/Acuerdo_790_de_2020_Alcaldia_Bogota.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Acuerdo 780 de 2020 (Incentivos para la reactivación económica) <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=100965&dt=S" target="_blank" rel="noopener noreferrer">Ver Online, </a><a href="https://www.shd.gov.co/shd/sites/default/files/files/impuestos/Acuerdo-780-de-2020.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Acuerdo 732 de 2018 (Medidas para la promoción de la movilidad eléctrica) <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=82132&dt=S" target="_blank" rel="noopener noreferrer">Ver Online, </a><a href="https://irp-cdn.multiscreensite.com/c480f174/files/uploaded/Bogota-Alcaldia-Acuerdo-2018-N0000732_20181228.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Acuerdo 689 de 2017 (Lineamientos para fortalecer la eco-conducción) <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=71613&dt=S" target="_blank" rel="noopener noreferrer">Ver Online, </a><a href="https://concejodebogota.gov.co/cbogota/site/artic/20170616/asocfile/20170616162503/acuerdo_no__689_de_2017.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Acuerdo 619 de 2015 (Lineamientos para estimular el uso de vehículos eléctricos) <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=63089" target="_blank" rel="noopener noreferrer">Ver Online </a></li>
                                                            <li class="li_1">Acuerdo 477 de 2013 (Plan de Ascenso Tecnológico para el SITP) <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=55072" target="_blank" rel="noopener noreferrer">Ver Online</a></li>
                                                            <li class="li_1">Acuerdo 472 de 2011 (Lineamientos Política conducción ecológica) <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=43825" target="_blank" rel="noopener noreferrer">Ver Online</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /#collapse_3 -->
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
</div>
<br>
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

    .ceroybajas {
        max-width: 980px;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        word-wrap: break-word;
    }

    .ceroybajas a {
        overflow: hidden !important;
        text-overflow: clip !important;
    }

    /*
    .ceroybajas [class*='col-'] {
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
    @media(max-width:767px) {}

    @media(min-width:768px) {
        .box-head {
            height: 650px;
        }

        .box-indicadores {
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            bottom: 10px;
            left: 0px;
            padding: 10px;
        }

        .tab-box .box-parrafos .imagen2 {
            background-position: 0px;
        }

        .menu3 .txt-tarjeta {
            height: 300px;
        }



    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>