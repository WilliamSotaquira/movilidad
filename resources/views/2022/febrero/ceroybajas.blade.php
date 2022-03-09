@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->



<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class='row encabezado'>
            <div class='col-xs-12 col-sm-6 col-md-6'>

            </div>
            <div class='col-xs-12 col-sm-6 col-md-6'>
                <div class="titulo-encabezado">
                    <div class="logo">
                        <div>
                            <img class='img-responsive w-80 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-02-2022/logo_mov_de_cero_y_bajas_emisiones_mayo_2020-03.png' alt='LogoCero y Bajas Emisiones' title='LogoCero y Bajas Emisiones'>
                        </div>
                    </div>
                    <div class="titulo">
                        <h3>Apostemosle a la Movilidad Motorizada Cero Emisiones</h3>
                    </div>
                    <div class="parrafo">
                        <p>Bogotá está formulando la <span class="enfasis1">Política de Movilidad</span> Motorizada de <span class="enfasis1">Cero y Bajas Emisiones 2022-2036</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class='row'>
            <div class="botones-cybe">

                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <div class="boton-cybe">
                        <div class="oculto">
                            <div>
                                <h4>483</h4>
                            </div>
                            <div>
                                <p> (en operación)</p>
                            </div>
                        </div>
                        <div class="boton">
                            <div class="icono-boton">
                                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-09-2021/cero_bajas_boton_bus_electrico.png' alt='Icono Bus Eléctrico' title='Icono Bus Electrico'>
                            </div>
                            <div class="txt1-cybe">
                                <p>Buses eléctricos del SITP</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <div class="boton-cybe">
                        <div class="oculto">
                            <div>
                                <h4>6</h4>
                            </div>
                            <div>
                                <p></p>
                            </div>
                        </div>
                        <div class="boton">
                            <div class="icono-boton">
                                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-09-2021/cero_bajas_boton_flota.png' alt='Icono Flota Eléctrica' title='Icono Flota Electrica'>
                            </div>
                            <div class="txt1-cybe">
                                <p>Flota oficial eléctrica</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <div class="boton-cybe">
                        <div class="oculto">
                            <div>
                                <h4>39</h4>
                            </div>
                            <div>
                                <p> (en operación)</p>
                            </div>
                        </div>
                        <div class="boton">
                            <div class="icono-boton">
                                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-09-2021/cero_bajas_boton_taxis.png' alt='Icono Taxis Eléctrico' title='Icono Taxis Eléctrico'>
                            </div>
                            <div class="txt1-cybe">
                                <p>Taxis eléctricos </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <div class="boton-cybe">
                        <div class="oculto">
                            <div>
                                <h4>366</h4>
                            </div>
                            <div>
                                <p> (Registradas)</p>
                            </div>
                        </div>
                        <div class="boton">
                            <div class="icono-boton">
                                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-09-2021/cero_bajas_boton_moto.png' alt='Icono Motos Eléctricas' title='Icono Motos Eléctricas'>
                            </div>
                            <div class="txt1-cybe">
                                <p>Motos eléctricas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <div class="boton-cybe">
                        <div class="oculto">
                            <div>
                                <h4>1.477</h4>
                            </div>
                            <div>
                                <p> (Registrados)</p>
                            </div>
                        </div>
                        <div class="boton">
                            <div class="icono-boton">
                                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-09-2021/cero_bajas_boton_carro.png' alt='Icono Carro Eléctrico' title='Icono Carro Eléctrico'>
                            </div>
                            <div class="txt1-cybe">
                                <p>Carros eléctricos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <div class="boton-cybe">
                        <div class="oculto">
                            <div>
                                <h4>4.880</h4>
                            </div>
                            <div>
                                <p> (Registrados)</p>
                            </div>
                        </div>
                        <div class="boton">
                            <div class="icono-boton">
                                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2021/cero_bajas_boton_hibrido.png' alt='Icono carro hibrido' title='Icono carro hibrido'>
                            </div>
                            <div class="txt1-cybe">
                                <p>Carros híbridos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .boton-cybe {
                        /* height: 300px; */
                        display: flex;
                        justify-content: center;
                    }

                    .boton-cybe .boton {
                        background: linear-gradient(45deg, rgba(102, 224, 38, 1) 50%, rgba(255, 255, 255, 1) 100%);
                        border-radius: 250px 250px 250px 250px;
                        padding-top: 3px;
                        position: relative;
                        z-index: 10;
                        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                        cursor: pointer;
                        max-width: 150px;
                    }

                    .boton-cybe .boton .icono-boton {
                        background: #1c2046;
                        padding: 15px;
                        margin: 5px;
                        border-radius: 250px;
                    }

                    .boton-cybe .boton .txt1-cybe {
                        padding: 6px;
                        height: 70px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .boton-cybe .txt1-cybe p {
                        color: #1c2046 !important;
                        font-weight: 700;
                        text-align: center;

                    }

                    .oculto {
                        height: 125px;
                        visibility: hidden;
                        background-color: #fff;
                        position: absolute;
                        margin: auto;
                        display: flex;
                        flex-direction: column;
                        justify-content: start;
                        align-items: center;
                        padding: 9px;
                        top: -70px;
                        border-radius: 250px 250px 0px 0px;
                        transition: 0.5s ease;
                        width: 80%;
                        max-width: 150px;

                    }

                    .oculto div h4,
                    .oculto div p {
                        color: #1c2046;
                    }

                    .oculto div p {
                        font-size: 10px;
                    }

                    .boton-cybe:hover .oculto {
                        visibility: inherit;
                        max-width: 150px;

                    }
                </style>

            </div>

        </div>
        <style>
            .s1 .encabezado {
                background: #1c2046;
                background: linear-gradient(320deg, rgba(0, 0, 0, 0.7) 0%, rgba(250, 250, 250, 0)120%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-02-2022/cyb_img-principal_c.webp');
                height: 720px;
                background-repeat: no-repeat;
                background-size: contain;
                background-position: 0px 0px;
            }

            .s1 .titulo-encabezado {
                padding: 20px;

            }

            .s1 .logo {
                margin: 0px 30px;
                padding: 10px 40px;

            }

            .s1 .logo img {
                border-radius: 50% 10% / 10% 50%;
                -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            }

            .s1 .titulo {
                padding: 15px;
            }

            .s1 .titulo h3 {
                color: #66e026;
                text-shadow: 2px 2px 4px #252525;
                text-align: center;
                font-weight: 900;
                font-size: 28px;
                margin: 0px;
            }

            .s1 .parrafo {
                padding: 10px 20px;
            }

            .s1 .parrafo p {
                color: #fff;
                text-align: center;
                font-size: 16px;
                text-shadow: 0px 0px 4px #252525;
                margin: 0px;
                font-weight: 700;
            }

            .s1 .botones-cybe {
                height: 250px;
                padding: 30px;
                margin-top: -260px;
            }



            .s1 .txt1-cybe mark {
                background-color: #1c2046;
                font-weight: 700;
                font-family: 'Montserrat', sans-serif;
                line-height: 1.4;
                color: #fff;
                padding: 5px;
            }
        </style>
    </div>
    <hr>
    <div class="s2">
        <div class="row">

            <div class="botones-ppal">

                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <a href="#menu1" aria-controls="clips" role="tab" data-toggle="tab">
                        <div class="btn-card btn1 zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h3>¿Por qué necesitamos una movilidad más limpia?</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <a href="#menu2" aria-controls="clips" role="tab" data-toggle="tab">
                        <div class="btn-card btn1 zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h3>¿Qué solución proponemos?*</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <a href="#menu3" aria-controls="clips" role="tab" data-toggle="tab">
                        <div class="btn-card btn1 zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h3>¿Cuáles son las tecnologías de cero y bajas emisiones?</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <a href="#menu4" aria-controls="clips" role="tab" data-toggle="tab">
                        <div class="btn-card btn1 zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h3>Verdades y mitos sobre estas tecnologías</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <a href="#menu5" aria-controls="clips" role="tab" data-toggle="tab">
                        <div class="btn-card btn1 zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h3>¿Cómo lograr la transición? </h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class='col-xs-6 col-sm-2 col-md-2'>
                    <a href="#menu6" aria-controls="clips" role="tab" data-toggle="tab">
                        <div class="btn-card btn1 zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h3>Consulta la normatividad aplicable a estas tecnologías</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
            <style>
                .s2 .botones-ppal a {
                    text-decoration: none !important;
                }

                .s2 .btn-card {
                    background: linear-gradient(320deg, rgba(28, 32, 70, 1) 50%, rgba(250, 250, 250, 0.1)300%);
                    height: 130px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    transition: 3s ease all;
                    margin: 5px;

                }

                .s2 .btn-card .titulo h3 {
                    font-size: 14px;
                    text-align: center;
                    color: #66e026;
                    margin: 5px;
                    /* border-bottom: 2px solid #66e026;
                    padding-bottom: 5px; */
                }

                .s2 .btn-card:hover {
                    background: linear-gradient(320deg, rgba(102, 224, 38, 1) 50%, rgba(250, 250, 250, 0.1)300%);
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;

                }

                .s2 .btn-card:hover .titulo h3 {
                    text-align: center;
                    color: #252525;
                }

                .tab-box .box-parrafos {
                    background-color: #fafafa;
                    padding: 2% 4%;
                }

                .tab-box .box-parrafos .imagen1 {
                    background: #1c2046;
                    background: linear-gradient(45deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-02-2022/cyb_image1.webp');
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
                    background: linear-gradient(45deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-02-2022/aguacero.webp');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: 0px;
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
                    /* font-weight: 700; */
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
                    background-color: rgba(255, 255, 255, 0.9);
                    margin: 30px;
                    padding: 20px;
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
                    font-weight: 400;
                    text-align: justify;
                    line-height: 1.4;
                    padding: 10px;
                }
            </style>
        </div>
    </div>
    <hr>
    <div class="tab-box">

        <div class="tab-content">
            <div id="menu1" class="tab-pane fade">
                <div class="box-parrafos">
                    <div class='row'>
                        <div class='col-xs-12 col-sm-12 col-md-12'>
                            <div class="parrafo-tab">
                                <h3>¿Por qué necesitamos una <br><span class="enfasis">movilidad más limpia</span>?</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                <div class="parrafo-tab">
                                    <p>La movilidad motorizada en Bogotá, se basa en vehículos de combustión que utilizan combustibles fósiles (gasolina, diésel, GNV, etc), y es la principal responsable de esta problemática, generando:</p>
                                    <ul>
                                        <li>40% de las emisiones básicas de material particulado (principal contaminante del aire en Bogotá).</li>
                                        <li>48% de los gases de efecto invernadero generado en la ciudad. </li>
                                    </ul>
                                    <p>Estos viajes, también aportan a la congestión, la siniestralidad vial y los altos niveles de ruido, afectando la calidad de vida en la ciudad.</p>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-12 col-md-12 '>
                                <div class="imagen1" title="Foto de Av Suba a la altura de la Calle 127 con alto trafico de fondo" alt="Foto de Av Suba a la altura de la Calle 127 con alto trafico de fondo">
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class="parrafo-box">
                                            <div>
                                                <h4>Contaminación del aire</h4>
                                                <p>En Bogotá, cada año mueren más de 2300 personas por enfermedades asociadas a la contaminación del aire (SDA, 2021).</p>
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
                                <div class="imagen2">
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class="parrafo-box">
                                            <div>
                                                <h4>Cambio climático</h4>
                                                <p>La ciudad genera el 5% de las emisiones de Gases de Efecto Invernadero del país, generando 11.421.724 toneladas de CO2 equivalente (t CO2e).</p>
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
                                    <h3>¿Qué solución proponemos?</h3>
                                </div>
                                <div class="parrafo">
                                    <p>Una de las soluciones es la transición desde el uso de vehículos que utilizan combustibles fósiles, hacia vehículos cero emisiones.</p>
                                    <p>Por esto, Bogotá está formulando la Política de Movilidad Motorizada de Cero y Bajas Emisiones 2022-2036 → será la hoja de ruta para consolidar esta movilidad como una alternativa eficiente, accesible y competitiva en la ciudad y sus municipios aledaños.</p>
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
                                                <li>SITP: Desde 2022 sólo se contratarán buses eléctricos → 100% eléctricos a 2036.</li>
                                                <li>Taxis: incentivos para la renovación desde 2025 → 100% eléctricos a 2036.</li>
                                            </ul>
                                            <!-- <p>...</p> -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-02-2022/camion_electrico.webp" alt="Bus Eléctrico de SITP">
                                        <div class="carousel-caption">
                                            <h3>Transporte de carga</h3>
                                            <ul>
                                                <li>Carga liviana y volquetas de 2 ejes → 100% de la flota será de cero y bajas emisiones a 2040.</li>
                                            </ul>
                                            <!-- <p>...</p> -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-02-2022/oficial.webp" alt="Bus Eléctrico de SITP">
                                        <div class="carousel-caption">
                                            <h3>Transporte especial</h3>
                                            <ul>
                                                <li>Flota oficial: Renovación progresiva desde 2022 → 100% de la flota para transporte de pasajeros eléctrica a 2030.</li>
                                                <li>Flota escolar: Lineamientos y puntajes adicionales en licitaciones para flota eléctrica en las licitaciones desde 2025 → 100% eléctrica a 2040.</li>
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
                            /* right: 20%; */
                            /* left: 20%; */
                            right: 10%;
                            left: 10%;
                        }

                        #menu2 .carousel-caption {
                            /* text-shadow: 0 1px 2px rgba(255, 255, 255, 0.8); */
                            text-shadow: 0 1px 2px rgba(255, 255, 255, 0.8);
                            background-color: rgba(255, 255, 255, 0.9);
                        }

                        #menu2 .carousel-caption h3 {
                            color: rgba(25, 28, 58, 1);
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

                        ul {
                            list-style-type: none;
                            margin: 0;
                            padding: 0;
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
                            font-size: 14px;
                            /* font-weight: 700; */
                            text-align: justify;
                            color: #151515;
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
                        <h3>Cero Emisiones Directas</h3>
                    </div>
                    <div class="bloque">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 hidden-xs">
                                <div class="img-card img-card-1"></div>
                            </div>
                            <div class="col-xs-12 col-sm-5">
                                <div class="txt-tarjeta">
                                    <h4 class="media-heading">Vehículos eléctricos</h4>
                                    <p>Impulsados exclusivamente por uno o más motores eléctricos, que obtienen corriente de un sistema de almacenamiento de energía recargable, como baterías. </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-5">
                                <div class="txt-tarjeta">
                                    <h4 class="media-heading">Vehículos hidrógeno</h4>
                                    <p>Vehículos diseñados y construidos para operar con hidrógeno como fuente primaria de energía para propulsarse. </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7 hidden-xs">
                                <div class="img-card img-card-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tarjeta-1">
                    <div class="encabezado-tarjeta">
                        <h3>Bajas emisiones</h3>
                    </div>
                    <div class="bloque">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 hidden-xs">
                                <div class="img-card img-card-3"></div>
                            </div>
                            <div class="col-xs-12 col-sm-5">
                                <div class="txt-tarjeta">
                                    <h4 class="media-heading">Híbridos enchufables</h4>
                                    <p>Cuentan con una batería eléctrica que se puede cargar conectándolo a la red, sin embargo mantienen su motor de combustión y continúan utilizando combustibles fósiles.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-5">
                                <div class="txt-tarjeta">
                                    <h4 class="media-heading">Vehículos híbridos</h4>
                                    <p>Vehículos con un motor eléctrico que es un complemento del motor de combustión. El motor eléctrico se carga a partir del combustible fósil de su motor de combustión.</p>
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
                                    <p>Vehículo de combustión diseñado y fabricado para funcionar exclusivamente con GNV. No se incluyen los que han sido modificados para que funcionen como vehículos a GNV.</p>
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
                        background: linear-gradient(45deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-09-2021/1522879816_436323_1522880165_noticia_normal.jpg');
                    }

                    .menu3 .img-card-2 {
                        background: linear-gradient(45deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-09-2021/vehiculo_hidrogeno_0.png');
                    }

                    .menu3 .img-card-3 {
                        background: linear-gradient(45deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-09-2021/vehiculo_hibrido_ench_0.png');
                    }

                    .menu3 .img-card-4 {
                        background: linear-gradient(45deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-09-2021/cars-6044335_1280.jpg');
                    }

                    .menu3 .img-card-5 {
                        background: linear-gradient(45deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2021/bus_cerobajas_a.png');
                    }

                    .menu3 .img-card {
                        background-color: #151515;
                        height: 300px;
                        margin: 13px;
                        border: solid 10px #1c2046;
                        border-radius: 3px;
                        background-position: center;
                        background-size: cover;
                    }


                    .menu3 .txt-tarjeta {
                        height: 300px;
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
                        color: #151515;
                    }

                    .menu3 .txt-tarjeta p {
                        text-align: justify;
                        color: #151515;
                    }
                </style>

                <div class='row'>
                    <div class='col-xs-12'>


                        <div class='row'>
                            <div class='col-sm-12'>
                                <div class="cb-tbl_comparacion">
                                    <img class='img-responsive w-100 bs' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-10-2021/cb_tabla_comparacion.png' alt='Comparacion entre Tecnologías de Cero y Bajas Emisiones' title='Comparacion entre Tecnologías de Cero y Bajas Emisiones'>
                                    <p class="text-center"><i>Comparacion entre Tecnologías de Cero y Bajas Emisiones</i></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="menu4" class="tab-pane fade">
                <div class="seccion-5">
                    <div class="box-parrafos">
                        <div class="parrafo-tab">
                            <h3>Derribando mitos</h3>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-xs-12 col-sm-6">
                            <!-- collapseP1 -->
                            <div class='panel-group' id='accordion_p1' role='tablist' aria-multiselectable='true'>


                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='headingP7'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_p1' href='#collapseP7' aria-expanded='true' aria-controls='collapseP7'>
                                                ¿Cargar un vehículo eléctrico toma más de una hora?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseP7' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingP7'>
                                        <div class='panel-body'>
                                            <p>No siempre, utilizando un cargador rápido tardaría aproximadamente 30 minutos en cargar hasta en un 80% la batería del vehículo. Bogotá tendrá 20 puntos de recarga rápida de uso público en 2022 y seguirá aumentando esta infraestructura.</p>
                                            <p>Si se utiliza un cargador semi-rápido, tardaría entre 2 y 4 horas y con un cargador lento el tiempo sería mayor a 6 horas. Este tipo de cargadores son más adecuados para la recarga en el hogar.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='headingP2'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_p1' href='#collapseP2' aria-expanded='true' aria-controls='collapseP2'>
                                                ¿Puede un vehículo eléctrico subir las mismas pendientes que los vehículos de combustión?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseP2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingP2'>
                                        <div class='panel-body'>
                                            <p>Verdadero, la variable que indica el desempeño de los vehículos en pendientes es el torque y es similar para vehículos de combustión y eléctricos.</p>
                                            <p>A manera de ejemplo, de acuerdo con Transmilenio S.A., los buses padrones eléctricos adquiridos para la ciudad han demostrado su potencia al subir pendientes de incluso 20% sin dificultad a 20 km/h con capacidad de carga máxima (80 pasajeros). Adicionalmente, para un bus articulado eléctrico, la entidad ha realizado pruebas de arranque en pendientes del 8% al 14% con capacidad de carga máxima (160 pasajeros), las cuales han superado sin dificultad.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='headingP3'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_p1' href='#collapseP3' aria-expanded='true' aria-controls='collapseP3'>
                                                ¿Con una carga completa, podría recorrer más de 100 km en un vehículo eléctrico de uso privado?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseP3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingP3'>
                                        <div class='panel-body'>
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
                                </div>


                            </div>
                            <!-- /#fin P1 -->

                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <!-- collapseP5 -->
                            <div class='panel-group' id='accordion_p2' role='tablist ' aria-multiselectable='true'>

                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='headingP5'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_p2' href='#collapseP5 ' aria-expanded='true' aria-controls='collapseP5 '>
                                                Para vehículos con características similares, ¿los costos de adquisición de un vehículo eléctrico son más altos que los de un vehículo de combustión?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseP5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingP5'>
                                        <div class='panel-body'>
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
                                </div>

                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='headingP6'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_p2' href='#collapseP6' aria-expanded='true' aria-controls='collapseP6'>
                                                ¿Para vehículos con características similares, los costos de operación y mantenimiento de un vehículo de combustión son más altos que de un vehículo eléctrico?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseP6' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingP6'>
                                        <div class='panel-body'>
                                            <p>Verdadero, en promedio, los costos de operación y mantenimiento de los vehículos eléctricos son menores que los de los vehículos convencionales, esto se debe principalmente a que el costo de la energía es más barato que el costo de combustible y que los vehículos eléctricos tienen menos componentes susceptibles a mantenimiento. A manera de ejemplo, los costos operacionales de los taxis eléctricos del piloto de Bogotá fueron 25% menores en comparación a los taxis de combustión.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class='panel panel-default'>
                                    <div class='panel-heading' role='tab' id='headingP8'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion_p2' href='#collapseP8' aria-expanded='true' aria-controls='collapseP8'>
                                                ¿La vida útil de un vehículo eléctrico gama media puede durar en promedio más de 10 años?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapseP8' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingP8'>
                                        <div class='panel-body'>
                                            <p>Verdadero. La vida útil depende del uso que se le dé al vehículo, se estima que un VE dura en promedio 160.000 kms que para el uso promedio de los vehículos particulares en Colombia representaría una vida útil de más de 10 años.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /#fin P8 -->


                        </div>

                    </div>
                    <hr>

                </div>
            </div>
            <div id="menu5" class="tab-pane fade">
                <div class="box-parrafos">
                    <div class="parrafo-tab">
                        <h3>¿Cómo lograr la transición?</h3>
                    </div>
                    <div>
                        <h4>Con incentivos en toda la cadena de valor y desincentivos a los más contaminantes.</h4>
                        <p>¡Conoce los incentivos que ya existen para estas tecnologías! </p>
                        <br>
                        <div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-condensed">
                                            <tr>
                                                <th class="th1" colspan="2">INSTRUMENTOS PARA LA PROMOCIÓN DE MOVILIDAD DE CERO Y BAJAS EMISIONES</th>
                                                <th class="th1">COMPETENCIA</th>
                                                <th class="th1">GASOLINA</th>
                                                <th class="th1">ELÉCTRICO</th>
                                                <th class="th1">HÍBRIDO</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">INCENTIVOS A LA COMPRA</th>
                                                <td><strong>Aranceles</strong></td>
                                                <td><strong>Nación:</strong><br>Decreto 2051 del 13 de noviembre de 2019</td>
                                                <td>0% - 35%</td>
                                                <td>0</td>
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
                                                <th rowspan="2">INCENTIVOS DE USO Y CIRCULACIÓN</th>
                                                <td rowspan="2"><strong>Impuesto Vehícular</strong></td>
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
                                                <th rowspan="5">OTROS INSTRUMENTOS DE PROMOCIÓN</th>
                                                <td><strong>Pico y Placa Solidario</strong></td>
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
                        </div>
                    </div>
                    <div>
                        <h4>Consolidando una red inteligente de infraestructura de recarga.</h4>
                        <p>Conoce la infraestructura que existe hoy.</p>
                        <br>
                        <div class="seccion-6">
                            <div class="row">
                                <div class="col-xs-12">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-10-2021/mapa-puntos-de-recarga_3.png" alt="mapa puntos de servicio" usemap="#imgmap202110417359">
                                    <div class="txt-seccion-6">
                                        <p>Igualmente, otros operadores han dispuesto estaciones de recarga de uso público en la ciudad, las cuales se pueden consultar <a href="https://www.electromaps.com/mapa?qsearch=bogota" target="_blank" rel="noopener noreferrer">aquí</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <!-- collapseUbicaciones -->
                                    <div class='panel-group' id='accordion_ubicaciones' role='tablist ' aria-multiselectable='true'>
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='headingUbicaciones'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion_ubicaciones' href='#collapseUbicaciones' aria-expanded='true' aria-controls='collapseUbicaciones'>
                                                        Clic aqui para ver la dirección de las ubicaciones
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapseUbicaciones' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingUbicaciones'>
                                                <div class='panel-body'>
                                                    <div class="baldosas">
                                                        <div class='row'>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>1. Salitre</h4>
                                                                    <p>Calle 63 # 68 - 99 Parqueadero Bolera El Salitre </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>2. Tercer Milenio</h4>
                                                                    <p>Calle 6 # 11 - 14 Subterraneo Parque Tercer Milenio</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>3. Calle 77</h4>
                                                                    <p>Calle 77 # 16 - 31 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>4. Unicentro 1</h4>
                                                                    <p>Cra 15 # 124 - 30 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>5. Unicentro 2 <br> (En proceso)</h4>
                                                                    <p>Cra 15 # 124 - 30 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>6. CC El Retiro</h4>
                                                                    <p>Calle 81-82 # 11 - 94 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>7. Autogermana</h4>
                                                                    <p>Calle 127B # 7 - 15 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>8. Gimnasio Stark</h4>
                                                                    <p>Calle 127A # 7 - 12 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>9. Parqueadero Lugano Galerias</h4>
                                                                    <p>Calle 53 # 25 - 30 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>10. Parqueadero Lugano</h4>
                                                                    <p>AK 15 # 102 - </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>11. Plaza de las Americas</h4>
                                                                    <p>Carrera 71D # 6 - 94 sur </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>12. Plaza de las Americas</h4>
                                                                    <p>Carrera 71D # 6 - 94 sur </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>13. Concesionario Jaguar Land Rover Morato</h4>
                                                                    <p>Carrera 70 # 99A - 00</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>13. Concesionario Dinissan Morato</h4>
                                                                    <p>Carrera 70 # 101 - 22</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>14. Peláez Hermanos</h4>
                                                                    <p>Calle 126 # 7 - 25</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>14. Peláez Hermanos 1</h4>
                                                                    <p>Calle 126 # 7 - 25</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="baldosa">
                                                                    <h4>15. Peláez Hermanos 2</h4>
                                                                    <p>Carrera 32 # 17 - 09</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#fin Ubicaciones -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu6" class="tab-pane fade">
                <div class="box-parrafos">
                    <div class="seccion-3">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5">
                                <div class="encabezado-seccion-3">
                                    <h4>¿QUÉ NORMATIVIDAD EXISTE?</h4>
                                </div>
                                <div class="txt-seccion-3">
                                    <p>En temas de promoción y transición hacia la movilidad motorizada de cero y bajas emisiones, se cuenta con normatividad desde el ordenamiento jurídico internacional, nacional y distrital.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7">
                                <div class="collapse-normativa">
                                    <div class="d_acordion">

                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                            <!-- collapse_1 -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading ph1" role="tab" id="heading_1">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                                            INTERNACIONAL
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_1">
                                                    <div class="panel-body pb1">
                                                        <ul>
                                                            <li class="li_1">Agenda 2030. <a href="https://www.un.org/ga/search/view_doc.asp?symbol=A/RES/70/1&Lang=S" target="_blank" rel="noopener noreferrer">Ver Online, </a><a href="https://www.un.org/sustainabledevelopment/es/development-agenda/" target="_blank" rel="noopener noreferrer">Documentos Adicionales Online.</a></li>
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
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                                                            NACIONAL
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_2">
                                                    <div class="panel-body pb1">
                                                        <ul>
                                                            <li class="li_1">Ley 2099 de 2021 (Disposiciones para la transición energética) <a href="https://dapre.presidencia.gov.co/normativa/normativa/LEY 2099 DEL 10 DE JULIO DE 2021.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Decreto 191 de 2021 (Estacionamientos preferenciales para Vehículos Eléctricos) <a href="https://dapre.presidencia.gov.co/normativa/normativa/DECRETO%20191%20DEL%2023%20DE%20FEBRERO%20DE%202021.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Resolución 40223 de 2021 (Estandarización de Conectores) <a href="https://www.minenergia.gov.co/documents/10180//23517//48995-40223.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Ley 1964 de 2019 (Promoción de vehículos eléctricos en Colombia)<a href="https://dapre.presidencia.gov.co/normativa/normativa/LEY 1964 DEL 11 DE JULIO DE 2019.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Estrategia Nacional de Movilidad Eléctrica <a href="https://www1.upme.gov.co/DemandaEnergetica/ENME.pdf" target="_blank" rel="noopener noreferrer">(.pdf)</a></li>
                                                            <li class="li_1">Plan Energético Nacional (2020-2050)<a href="https://www1.upme.gov.co/DemandayEficiencia/Documents/PEN_2020_2050/Plan_Energetico_Nacional_2020_2050.pdf" target="_blank" rel="noopener noreferrer">(.pdf), </a><a href="https://www1.upme.gov.co/DemandayEficiencia/Paginas/PEN.aspx" target="_blank" rel="noopener noreferrer">Enlace Documentos Relacionados.</a></li>
                                                            <li class="li_1">Política de Crecimiento Verde <a href="https://www.dnp.gov.co/Crecimiento-Verde/Documents/Pol%C3%ADtica CONPES 3934/CONPES 3934 - Pol%C3%ADtica de Crecimiento Verde.pdf" target="_blank" rel="noopener noreferrer">(.pdf), </a><a href="https://www.dnp.gov.co/Crecimiento-Verde/Paginas/Politica-crecimiento-verde.aspx" target="_blank" rel="noopener noreferrer">Enlace Documentos Relacionados.</a></li>
                                                            <li class="li_1">Contribución Determinada a nivel Nacional (NDC Colombia actualizada) <a href="https://www.minambiente.gov.co/images/cambioclimatico/pdf/NDC_Colombia/informe_NDC_de_Colombia_2020_Versi%C3%B3n_Final.pdf" target="_blank" rel="noopener noreferrer">(.pdf), </a><a href="https://www.minambiente.gov.co/index.php/ndc-actualizada" target="_blank" rel="noopener noreferrer">Enlace Documentos Relacionados.</a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /#collapse_2 -->

                                            <!-- collapse_3 -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading ph1" role="tab" id="heading_3">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_3" aria-expanded="true" aria-controls="collapse_3">
                                                            DISTRITAL
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

    .seccion {
        font-size: 15px !important;
        line-height: 1.5 !important;
        max-width: 940px;
        font-family: 'Montserrat', sans-serif;
    }


    .s2 .botones-ppal [class*='col-'] {
        margin: 0px !important;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }


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
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style>
    .box-parrafos .seccion-5 .encabezado-seccion-5 {
        padding: 15px;
        text-align: center;
        background-color: #66e026;

    }

    .box-parrafos .seccion-5 .encabezado-seccion-5 h4 {
        margin: 0px;
        padding: 15px;
        text-align: center;
        border-top: solid 3px #363636;
        border-bottom: solid 3px #363636;
        font-family: 'Montserrat', sans-serif;
        font-size: calc(1em + 1vw);
        font-weight: 600;
        text-transform: uppercase;
        color: #191C3A;
        background-color: #66e026;

    }
</style>

<style>
    .seccion>.seccion-4 {
        margin: 0px;
        background-color: #161040;
    }

    .seccion>.seccion-4 .encabezado-seccion-4 {
        padding-top: 35px;
        padding-left: 35px;
        padding-right: 35px;
        padding-bottom: 20px;
    }

    .seccion>.seccion-4 .encabezado-seccion-4 h4 {
        margin: 0px;
        padding: 15px;
        text-align: center;
        border-top: solid 3px #fff;
        border-bottom: solid 3px #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: calc(1em + 1vw);
        font-weight: 600;
        text-transform: uppercase;
        color: #31CE39;
    }

    .seccion>.seccion-4 .txt-seccion-4 {
        padding: 25px;
        color: #1A1A1A;
        font-family: 'Montserrat', sans-serif;
        /* font-size: calc(0.6em + 1vw); */
        font-weight: 500;
    }

    .seccion .tarjeta-1 {
        background-color: #1A1A1A;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2021/estaciones_carga.jpg');
        background-position: center;
        background-size: cover;

    }

    .seccion .tarjeta-2 {
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-09-2021/cerobajas_a.jpg');
        background-color: #1A1A1A;
        background-position: center;
        background-size: cover;

    }

    .seccion .tarjeta .transparencia {
        background-color: #1A1A1Acc;
    }

    .seccion .tarjeta .encabezado-tarjeta {
        text-align: center;
        color: #fff;
    }

    .seccion .tarjeta .encabezado-tarjeta h3 {
        /* background-color: #31CE39; */
        color: #66e026;
        padding: 15px;
        font-weight: 700;
        font-size: ;
        text-shadow: -3px 3px 0 #1A1A1A;
        text-transform: uppercase;

        /* -webkit-box-shadow: 5px 5px 15px  #66e026;
        box-shadow: 5px 5px 15px #66e026; */
    }

    .seccion .tarjeta .img-tarjeta {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .seccion .tarjeta .img-tarjeta img,
    .seccion .tarjeta .img-tarjeta a>img {
        margin: 20px;
        width: 60%;
    }


    .seccion .tarjeta .txt-tarjeta {
        background-color: rgba(255, 255, 255, 0.3);
        font-family: sans-serif;
        text-align: center;
        line-height: 1;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);

        display: flex;
        flex-direction: column;
        align-items: center;
        vertical-align: middle;
        margin: 15px;
        border-radius: 0px;

    }

    .seccion .tarjeta .txt-tarjeta h4 {
        font-size: calc(0.2vw + 1rem);
        color: #fff;
        padding: 15px;
        font-weight: 700;
        text-shadow: -3px 3px 0px #363636;
    }

    .seccion .tarjeta .txt-tarjeta p {
        font-size: calc(0.0vw + 1rem);
        color: #fff;
        padding: 15px;
        font-weight: 500;
    }

    .seccion>.seccion-5 .encabezado-seccion-5 {
        padding: 15px;
        text-align: center;
        background-color: #66e026;

    }

    .seccion>.seccion-5 .encabezado-seccion-5 h4 {
        margin: 0px;
        padding: 15px;
        text-align: center;
        border-top: solid 3px #363636;
        border-bottom: solid 3px #363636;
        font-family: 'Montserrat', sans-serif;
        font-size: calc(1em + 1vw);
        font-weight: 600;
        text-transform: uppercase;
        color: #191C3A;
        background-color: #66e026;

    }

    #accordion_p2 .panel,
    #accordion_p1 .panel {
        /* display: table; */
        padding: 10px;
        background-color: #191C3A;
        border-radius: 15px;
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);

    }


    #accordion_p2 .panel-heading,
    #accordion_p1 .panel-heading {

        background-color: #191C3A;
        /* height: 100px; */
        color: #66e026;
        border: solid 2px #fff;
        border-style: dashed solid;
        padding: 10px auto;
        text-align: center;
        border-radius: 10px;
        margin: auto;
    }

    #accordion_p2 .panel-heading a,
    #accordion_p1 .panel-heading a {

        text-decoration: none;
    }

    #accordion_p2 .panel-heading:hover,
    #accordion_p1 .panel-heading:hover {

        background-color: #363636;
        /* height: 100px; */
        color: #fff;
        /* border: solid 2px #fff;
        border-style: dashed solid;
        padding: 10px auto;
        text-align: center;
        border-radius: 10px;
        margin: auto; */
    }

    #accordion_p2 .panel-body,
    #accordion_p1 .panel-body {
        margin-top: 10px;
        padding: 15px;
        background-color: #f2f2f2;
        border-radius: 10px;
        color: #363636;
        /* font-weight: 600; */
        text-align: justify;

    }

    .cb-tbl_comparacion {
        margin: 5%;
    }

    .cb-tbl_comparacion img {
        border: solid 5px #363636cc;
        margin-bottom: 8px;

    }

    .cb-tbl_comparacion p {
        color: #252525;
        margin-bottom: 8px;

    }
</style>
<style>
    .table th {
        background-color: #191C3A;
        color: #fff;
        vertical-align: middle !important;
        padding: 10px;
        text-align: center;
        font-size: 14px;


    }

    .table th:hover {
        background-color: #66e026;
        color: #363636;

    }

    .th1 {
        background-color: #191C3A !important;
        color: #fff !important;
        padding: 10px !important;
    }

    .th1:hover {
        background-color: #1A1A1A !important;
        color: #fff !important;
        padding: 10px !important;
    }

    .table td {
        padding: 10px !important;
        vertical-align: middle !important;
        font-size: 14px;
    }
</style>
<style>
    .seccion .seccion-6 {
        background-color: #363636;
        color: #66e026;
    }

    .seccion .seccion-6 .encabezado-seccion-6 {
        padding: 15px;
        text-align: center;
    }

    .seccion>.seccion-6 .encabezado-seccion-6 h4 {
        margin: 0px;
        padding: 15px;
        text-align: center;
        border-top: solid 3px #66e026;
        border-bottom: solid 3px #66e026;
        font-family: 'Montserrat', sans-serif;
        font-size: calc(1em + 1vw);
        font-weight: 600;
        text-transform: uppercase;
        color: #66e026;
    }

    .seccion .seccion-6 .txt-seccion-6 {
        padding: 15px;
    }

    .seccion .seccion-6 .txt-seccion-6 h4 {
        color: #fff;
        padding: 15px;
        font-weight: 700;
    }

    .seccion .seccion-6 .txt-seccion-6 p {
        color: #fff;
        padding: 0px 15px;
        font-weight: 500;
    }

    .seccion .seccion-6 .txt-seccion-6 a {
        color: #66e026;
    }
</style>
<style>
    .baldosas {
        /* border-top: solid 3px #66e026; */
        /* border-bottom: solid 3px #66e026; */
    }

    .baldosa {
        display: flex;
        flex-direction: column;
        justify-content: start;
        padding: 10px;
        border: solid 2px #363636;
        height: 120px;
        border-radius: 5px;
    }

    .baldosa:hover {
        border: solid 2px #66e026;
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
    }

    .baldosa:hover,
    .baldosa h4:hover,
    .baldosa p:hover {
        background-color: #191C3A;
        color: #fff;
    }

    .baldosa .baldosa h4 {
        font-size: calc(1rem + 1.2vw);
    }

    .baldosa .baldosa p {
        font-size: calc(1rem + 1vw);
        text-align: justify;
    }

    #accordion_ubicaciones>.panel {
        background-color: #363636;
        border-radius: 0px;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    #accordion_ubicaciones .panel-default {
        border-color: #66e026;
    }

    #accordion_ubicaciones .panel-default>.panel-heading {
        background-color: #66e026;
        border-color: #66e026 !important;
        border-radius: 0px;
        text-align: center;
    }

    #accordion_ubicaciones .panel-default>.panel-heading h4 {
        color: #161040;
        font-weight: bold;

    }

    #accordion_ubicaciones .panel-default>.panel-heading a {
        text-decoration: none;

    }
</style>