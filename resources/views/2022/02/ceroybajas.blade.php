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
                    background: linear-gradient(45deg, rgba(0, 0, 0, 0.3)15%, rgba(0, 0, 0, 0.6) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-07-2023/recurso_cybe_1366x1024_009.png');
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
                                <h3>1.485</h3>
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
                                <h3>401</h3>
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
                                <h3>5.583</h3>
                                <p>Carros Registrados </p><small class="text-black">*Automóviles RDA</small>
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
                                <h3>30.014</h3>
                                <p>Carros registrados</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <i>Fuente: Registro Distrital Automotor - RDA. *Cifras preliminares a 31 de diciembre de 2023.</i>
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

            .text-black {
                color: #252525;

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
                padding: 0px 0px 10px 0px;
            }
        </style>
    </div>
    <div class="row box-video">

        <div class='set-noticias'>

            <!-- Sección box video -->
            <div class="box-video">
                <div class='video video-ppal video-4by3'>
                    <div class='embed-responsive embed-responsive-4by3'>
                        <iframe width='100%' src='https://www.youtube.com/embed/i3Wx02KJX4Q' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <style>
                .set-noticias .box-video {
                    grid-area: box-video;
                    display: grid;
                    align-content: center;
                    padding: 8px;
                }
            </style>


            <!-- Sección box noticias -->
            <div class="box-noticias">

                <div class="title title-h2">
                    <h3>Noticias</h3>
                </div>
                <style>
                    .box-noticias .title-h2 {
                        /* grid-area: cpte-titulo; */
                    }

                    .box-noticias .title-h2 h3 {
                        font-size: 22px;
                        font-weight: 700;
                        color: rgba(77, 84, 31, 1);
                        text-transform: uppercase;
                        margin-top: 8px;
                        margin-bottom: 16px;
                        padding-bottom: 8px;
                        border-bottom: solid 1px rgba(77, 84, 31, 1);
                    }
                </style>

                <div class="box-noticia ">
                    <i>Miércoles, Enero 31, 2024 - 07:58</i>
                    <h3>Se estima que dejen de circular más de 1.850.000 vehículos particulares y 430.000 motos</h3>
                    <strong><a href="https://www.movilidadbogota.gov.co/web/noticia/se_estima_que_dejen_de_circular_mas_de_1850000_vehiculos_particulares_y_430000_motos" target="_blank" rel="noopener noreferrer">Ver más</a></strong>
                </div>

                <div class="box-noticia ">
                    <i>Sábado, Enero 27, 2024 - 16:28</i>
                    <h3>Abecé restricciones y razones de alerta fase 1 por calidad del aire</h3>
                    <strong><a href="https://www.movilidadbogota.gov.co/web/noticia/abece_restricciones_y_razones_de_alerta_fase_1_por_calidad_del_aire" target="_blank" rel="noopener noreferrer">Ver más</a></strong>
                </div>

                <div class="box-noticia ">
                    <i>Sábado, Diciembre 30, 2023 - 11:33</i>
                    <h3>En Bogotá y la Región se realizan más de 10 millones de viajes diarios en medios sosteniblesá</h3>
                    <strong><a href="https://www.movilidadbogota.gov.co/web/noticia/en_bogota_y_la_region_se_realizan_mas_de_10_millones_de_viajes_diarios_en_medios_sostenibles" target="_blank" rel="noopener noreferrer">Ver más</a></strong>
                </div>





                <style>
                    .box-noticias .box-noticia {
                        /* grid-area: box-noticia; */
                        padding: 8px;
                        border-radius: 4px;
                        border: solid 2px transparent;

                    }


                    .box-noticia h3 {
                        display: -webkit-box;
                        -webkit-box-orient: vertical;
                        -webkit-line-clamp: 3;
                        line-clamp: 3;
                        overflow: hidden;

                        font-family: 'Montserrat', sans-serif;
                        font-size: 18px;
                        font-weight: 600;
                        text-align: left;
                        line-height: 1.2;
                        /* text-transform: uppercase; */
                        color: #252525;
                    }

                    .box-noticia p {
                        display: -webkit-box;
                        -webkit-box-orient: vertical;
                        -webkit-line-clamp: 2;
                        line-clamp: 2;
                        overflow: hidden;
                    }
                </style>
            </div>
            <style>
                .set-noticias .box-noticias {
                    grid-area: box-noticias;
                    padding: 2em;
                    display: grid;
                    gap: 4px;
                    grid-auto-flow: dense;
                    grid-template-columns: 1fr;
                    grid-template-rows: auto;
                }

                .box-noticia h3 {
                    margin: 0px;
                }

                .box-noticia p {
                    margin: 0px;
                }
            </style>


        </div>
        <style>
            .set-noticias {
                display: grid;
                gap: 8px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'box-video'
                    'box-noticias';
            }

            @media(min-width:768px) {
                .set-noticias {
                    grid-template-columns: 1fr 1fr;
                    grid-template-areas:
                        'box-video box-noticias';

                }
            }

        </style>
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
            color: #66e026;
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
    <div class="row tab-box">

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
                                        <li><strong>43% de las emisiones básicas de material particulado (principal contaminante del aire en Bogotá).</strong></li>
                                        <li><strong>48% de los gases de efecto invernadero generado en la ciudad.</strong></li>
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
                                                <p>En Bogotá, en el año 2019 <strong>murieron más de 2.300 personas</strong> por enfermedades asociadas a la contaminación del aire (SDA, 2021).</p>
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
                                                <p><strong>La ciudad genera el 4.42% de las emisiones de Gases de Efecto Invernadero del país,</strong> generando 13.419,6 Kilo toneladas de CO2 equivalente (t CO2e). Fuente: Inventario departamental de gases efecto invernadero y carbono negro - 2018. Gobierno de Colombia.</p>
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
                                    <p>Por esto, Bogotá cuenta con la <strong>Política Pública de Movilidad Motorizada de Cero y Bajas Emisiones 2023-2040,</strong> que se constituye como la hoja de ruta para consolidar esta movilidad, como una alternativa sostenible, accesible, competitiva y atractiva en Bogotá y la Región Metropolitana.</p>
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
                                    <li data-target="#myCarousel" data-slide-to="4"></li>
                                    <li data-target="#myCarousel" data-slide-to="5"></li>
                                    <li data-target="#myCarousel" data-slide-to="6"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-07-2023/recurso_cybe_1366x1024_010.png" alt="Bus Eléctrico de SITP">
                                        <div class="carousel-caption">
                                            <h3>Transporte público</h3>
                                            <ul>
                                                <li>Desde 2023, el 100 % de buses del SITP que se registren serán de cero emisiones, a 2040, circularán exclusivamente buses cero emisiones.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-02-2022/camion_electrico.webp" alt="Bus Eléctrico de SITP">
                                        <div class="carousel-caption">
                                            <h3>Transporte de carga urbana</h3>
                                            <ul>
                                                <li>en 2035, el 100 % de la flota de transporte de carga que se registre será de cero y bajas emisiones.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-02-2022/oficial.webp" alt="Bus Eléctrico de SITP">
                                        <div class="carousel-caption">
                                            <h3>Automóviles oficiales</h3>
                                            <ul>
                                                <li>A 2028, el 100 % de los automóviles y camionetas de uso oficial del Distrito, que se registren serán de cero emisiones.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-02-2022/particular.webp" alt="Bus Eléctrico de SITP">
                                        <div class="carousel-caption">
                                            <h3>Vehículos particulares</h3>
                                            <ul>
                                                <li>A 2032, el 100 % del registro de automóviles particulares será de tecnología de cero y bajas emisiones y, a 2040, el total del registro será solo de cero emisiones.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-07-2023/recurso_cybe_1366x1024_008.png" alt="Taxista en vía de Bogotá">
                                        <div class="carousel-caption">
                                            <h3>Taxis</h3>
                                            <ul>
                                                <li>A 2026, el 100 % de los taxis que se registren serán de cero emisiones</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-07-2023/recurso_cybe_3936x2624_002.jpg" alt="Motociclista en vía de Bogotá">
                                        <div class="carousel-caption">
                                            <h3>Motocicletas</h3>
                                            <ul>
                                                <li>A 2032, el 100 % del registro de motocicletas será de cero emisiones.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-07-2023/recurso_cybe_1366x1024_007.png" alt="Motociclista en vía de Bogotá">
                                        <div class="carousel-caption">
                                            <h3>Transporte escolar</h3>
                                            <ul>
                                                <li>Se espera que a partir de 2026, el registro de este tipo de vehículos sea exclusivo para modelos de cero y bajas emisiones, mientras que, para el año 2035, la apuesta se concentra en que la circulación de vehículos escolares sea mayoritariamente de cero emisiones.</li>
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
                            /* visibility: hidden; */
                            right: 10%;
                            left: 10%;
                            /* text-shadow: 0 1px 2px rgba(255, 255, 255, 0.5); */
                            background-color: rgba(0, 0, 0, 0.85);
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
                        <div class="row">
                            <div class="col-xs-12 col-sm-5">
                                <div class="txt-tarjeta">
                                    <h4 class="media-heading">Diésel Euro VI</h4>
                                    <p>Euro VI corresponde al estándar más reciente y limpio de la norma europea que regula los límites aceptables para las emisiones de gases y material particulado de los vehículos de combustión, este estándar se adoptó en Colombia por medio de la Ley 1972 de 2019. Se estima que un bus diésel Euro VI reduciría las emisiones de material particulado en al menos 95% si se compara con un bus Euro V (<a href="https://www.transmilenio.gov.co/publicaciones/151941/abce-de-los-nuevos-buses-euro-vi/" target="_blank" rel="noopener noreferrer">Transmilenio S.A</a>, 2020).</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7 hidden-xs">
                                <div class="img-card img-card-6">
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
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-07-2023/recurso_cybe_1366x1024_001.jpg');
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

                    .menu3 .img-card-6 {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-10-2022/euroiv.png');
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
                    <div class="box-parrafos">
                        <div class="parrafo-tab">
                            <h3>Comparación de Tecnologías de Cero y Bajas Emisiones para un vehículo liviano</h3>
                        </div>
                    </div>
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
                                                <span class="text-table2">Gasolina, Biocombustible</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="40px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/estacion_b.png' alt='icono gasolinera' title='icono gasolinera'>
                                                <span class="text-table2">Gasolina, Biocombustible</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <div>
                                                    <img width="40px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/estacion_c.png' alt='icono gasolinera' title='icono gasolinera'>
                                                    <span class="text-table">+</span>
                                                    <img width="40px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/electrica_c.png' alt='icono estación eléctrica' title='icono estación eléctrica'>
                                                </div>
                                                <span class="text-table2">Gasolina, Biocombustible, Energía Eléctrica</span>
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
                                                    <span class="title-table">Rendimiento*<br><sub>(Km / Galón eq)</sub></span>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="30px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/galon_b.png' alt='icono galón' title='icono galón'>
                                                <span class="text-table2">34,9</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="30px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/galon_c.png' alt='icono galón' title='icono galón'>
                                                <span class="text-table2">63,4</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <div>
                                                    <img width="30px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/galon_d.png' alt='icono galón' title='icono galón'>
                                                    <span class="text-table">+</span>
                                                    <img width="20px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/bataria_b.png' alt='icono batería' title='icono batería'>
                                                </div>
                                                <span class="text-table2">119,2</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="20px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/bateria_d.png' alt='icono batería' title='icono batería'>
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
                                                <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/humo.png' alt='icono humo' title='icono humo'>
                                                <span class="text-table2">21,9</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/humo_a.png' alt='icono humo' title='icono humo'>
                                                <span class="text-table2">12,0</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/humo_b.png' alt='icono humo' title='icono humo'>
                                                <span class="text-table2">5,1</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='table-imagen-v'>
                                                <img width="50px" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-05-2022/humo_d.png' alt='icono humo' title='icono humo'>
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
                                        <p>No siempre, utilizando un cargador rápido tardaría aproximadamente 30 minutos en cargar hasta en un 80% la batería del vehículo. Bogotá tendrá 10 cargadores rápidos de uso público adicionales en 2023 y 5 más en 2024 y seguirá aumentando esta infraestructura.</p>
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
                                            <li>BMW 118i Sport Line (330 km)</li>
                                            <li>Nissan Leaf (350 km)</li>
                                            <li>BYD i Dolphin (400 km)</li>
                                        </ul>
                                        <p>400 Km en adelante:</p>
                                        <ul>
                                            <li>Porsche Taycan</li>
                                            <li>BYD Yuan Plus EV</li>
                                            <li>Tesla Model 3</li>
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
                                        <h3 class="panel-title">¿Para vehículos con características similares, los costos de operación y mantenimiento de un vehículo de combustión son más altos que de un vehículo eléctrico?</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Verdadero, en promedio, los costos de operación y mantenimiento de los vehículos eléctricos son menores que los de los vehículos convencionales, esto se debe principalmente a que el costo de la energía es más barato que el costo de combustible y que los vehículos eléctricos tienen menos componentes susceptibles a mantenimiento. A manera de ejemplo, los costos operacionales de los taxis eléctricos del piloto de Bogotá fueron 8% menores en comparación a los taxis de combustión.</p>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">¿La vida útil de un vehículo eléctrico gama media puede durar en promedio más de 10 años?</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Verdadero. La vida útil depende del uso que se le dé al vehículo, se estima que un vehículo eléctrico dura en promedio 160.000 kms que para el uso promedio de los vehículos particulares en Colombia representaría una vida útil de más de 10 años.</p>
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

                    <div class="box-transicion">

                        <div class="btn-transicion zoom">
                            <a data-toggle="tab" href="#incentivos">
                                <div class='imagen'>
                                    <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2022/economicos.png' alt='' title=''>
                                </div>
                                <div class="titulo">
                                    <h3>
                                        Con incentivos económicos y no económicos ¡Conoce los beneficios!
                                    </h3>
                                </div>
                            </a>
                        </div>

                        <div class="btn-transicion zoom">
                            <a data-toggle="tab" href="#infraestructura">
                                <div class='imagen'>
                                    <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2022/cartel-de-la-calle.png' alt='' title=''>
                                </div>
                                <div class="titulo">
                                    <h3>
                                        Con infraestructura de recarga ¡Conoce dónde recargar!
                                    </h3>
                                </div>
                            </a>
                        </div>

                        <div class="btn-transicion zoom">
                            <a data-toggle="tab" href="#informacion">
                                <div class='imagen'>
                                    <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2022/informacion_b.png' alt='' title=''>
                                </div>
                                <div class="titulo">
                                    <h3>
                                        Con más información y nuevas capacidades ¡Conoce estos recursos!
                                    </h3>
                                </div>
                            </a>
                        </div>

                        <div class="btn-transicion zoom">
                            <a data-toggle="tab" href="#alianzas">
                                <div class='imagen'>
                                    <img class='img-responsive' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2022/apoyar.png' alt='' title=''>
                                </div>
                                <div class="titulo">
                                    <h3>
                                        Con alianzas y acciones de tod@s ¡Únete aquí!
                                    </h3>
                                </div>
                            </a>
                        </div>



                    </div>

                    <div class="tab-content">

                        <div id="incentivos" class="tab-pane fade">

                            <!-- Sección box table-incentivos -->
                            <div class="box-table-incentivos">
                                <br>
                                <div class="parrafo-tab">
                                    <h3 class="text-center">¡Conoce los incentivos que ya existen para estas tecnologías! </h3>
                                </div>
                                <br>
                                <div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover table-condensed">
                                                    <tr>
                                                        <th class="th1" rowspan="2">Instrumentos</th>
                                                        <th class="th1" rowspan="2">Competencia</th>
                                                        <th class="th1" rowspan="2" style="width: 20%;">Incentivo</th>
                                                        <th class="th1" colspan="3">Tipo de Vehículo</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="th1" style="width: 15%;">Combustión</th>
                                                        <th class="th1" style="width: 15%;">Híbrido</th>
                                                        <th class="th1" style="width: 15%;">Eléctrico</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">Incentivos a la compra</th>
                                                        <td><strong>Nación</strong><br>Decreto 2051 de 2019</td>
                                                        <td><strong>Aranceles</strong></td>
                                                        <td>35%</td>
                                                        <td>5%</td>
                                                        <td>0%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Nación</strong><br>Ley 1819 del 2016</td>
                                                        <td><strong>IVA</strong></td>
                                                        <td>19%</td>
                                                        <td>5%</td>
                                                        <td>5%</td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="7">Incentivos de uso y circulación</th>
                                                        <td><strong>Nación</strong> <br>Ley 1964 de 2019</td>
                                                        <td><strong>Impuesto Vehicular</strong></td>
                                                        <td>3,50%</td>
                                                        <td>3,50%</td>
                                                        <td>1%</td>

                                                    </tr>
                                                    <tr>
                                                        <td><strong>Distrito</strong> <br> Acuerdo 780 de 2020</td>
                                                        <td><strong>Descuento en impuesto vehicular en Bogotá por 5 años</strong></td>
                                                        <td>0%</td>
                                                        <td>-40%</td>
                                                        <td>-60%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Distrito</strong> <br> Acuerdo 780 de 2020</td>
                                                        <td><strong>Descuento en impuesto vehicular en Bogotá para taxis por 5 años</strong></td>
                                                        <td>0%</td>
                                                        <td>0%</td>
                                                        <td>-70%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Distrito</strong> <br> Decreto 003 de 2023</td>
                                                        <td><strong>Restricciones de circulación para vehículos particulares en Bogotá</strong></td>
                                                        <td>L-V<br>6:00-21:00<br>(Rotación placas 5 dígitos)</td>
                                                        <td>Exceptuados</td>
                                                        <td>Exceptuados</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Distrito</strong> <br> Decretos 660 de 2001 y 475 de 2019</td>
                                                        <td><strong>Restricciones de circulación para taxis en Bogotá</strong></td>
                                                        <td>L-S<br>5:30-21:00<br>(Rotación placas 2 dígitos)</td>
                                                        <td>L-S<br>5:30-21:00<br>(Rotación placas 2 dígitos)</td>
                                                        <td>Exceptuados</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Distrito Zona de parqueo pago</strong></td>
                                                        <td><strong>Beneficio en estacionamiento en vía</strong></td>
                                                        <td>N/A</td>
                                                        <td>N/A</td>
                                                        <td>Gratis 1ra hora</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Distrito</strong></td>
                                                        <td><strong>Pago de taxi por acceso a circuito de terminal de transporte salitre</strong></td>
                                                        <td>$COP 500</td>
                                                        <td>$COP 500</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2"><strong>Otros instrumentos de promoción</strong></th>
                                                        <td><strong>Nación</strong><br>Ley 1964 de 2019</td>
                                                        <td><strong>Descuento en SOAT</strong></td>
                                                        <td>0%</td>
                                                        <td>0%</td>
                                                        <td>-10%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Nación</strong><br>Ley 1964 de 2019</td>
                                                        <td><strong>Descuento en revisión técnico mecánica</strong></td>
                                                        <td>0%</td>
                                                        <td>0%</td>
                                                        <td>-30%</td>
                                                    </tr>


                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-12'>
                                            <p><strong>Formularemos incentivos económicos y no económicos que promuevan el despliegue de estas tecnologías en todos los segmentos de transporte y la cadena de valor.</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <style>
                                #incentivos .box-table-incentivos {
                                    grid-area: box-table-incentivos;
                                }
                            </style>

                        </div>

                        <div id="infraestructura" class="tab-pane fade">
                            <div>
                                <br>
                                <div class="parrafo-tab">
                                    <h3 class="text-center">Con infraestructura de recarga ¡Conoce dónde recargar!</h3>
                                </div>
                                <br>

                                <div class="seccion-6">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="txt-seccion-6">
                                                <p>Bogotá cuenta con más de 70 cargadores de uso público, de los cuales 5 son de carga rápida.</p>
                                            </div>
                                            <br>
                                            <!-- Sección box tabs -->
                                            <div class="box-tabs">

                                                <div class="nav-sdm-std">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-pills" role="tablist">
                                                        <li role="presentation"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Información eléctrica del sistema</a></li>
                                                        <li role="presentation" class="active"><a href="#electrolineras" aria-controls="electrolineras" role="tab" data-toggle="tab">Electrolineras</a></li>
                                                    </ul>

                                                    <!-- Tab panes -->
                                                    <div class="tab-content ">
                                                        <div role="tabpanel" class="tab-pane fade in active" id="info">
                                                            <div class="embed-container"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Información eléctrica del sistema" src="https://movilidadbogota.maps.arcgis.com/apps/instant/interactivelegend/index.html?appid=b6bdb3be323f48acaf9486e6b3b9b573"></iframe></div>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane fade" id="electrolineras">
                                                            <div class="embed-container"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Información eléctrica del sistema" src="https://arcg.is/WmXy00"></iframe></div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="txt-seccion-6">
                                                    <p>Si tienes un vehículo eléctrico o una flota de vehículos eléctricos y consideras que no hay suficientes puntos de recarga en tu zona, envíanos un correo a <a href="mailto:movilidadecoeficiente@movilidadbogota.gov.co">movilidadecoeficiente@movilidadbogota.gov.co</a> y lo tendremos en cuenta para la expansión de la Red.</p>
                                                </div>



                                            </div>
                                            <style>
                                                .set-wrapper .box-tabs {
                                                    grid-area: box-tabs;
                                                    /* padding: 1em; */
                                                    margin-top: 40px;
                                                    /* background-color: red; */
                                                }

                                                .box-tabs .nav::before {
                                                    display: block;
                                                    content: normal;
                                                }

                                                .box-tabs .nav-sdm-std {
                                                    background-color: #fff;
                                                    display: grid;
                                                    border-radius: 3px;
                                                    /* gap: 8px; */
                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr;
                                                    grid-template-rows: auto;
                                                    grid-template-areas:
                                                        'content'
                                                        'pills';

                                                    -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
                                                    box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);

                                                }

                                                .nav-sdm-std .nav-pills {
                                                    grid-area: pills;
                                                    display: grid;
                                                    gap: 8px;
                                                    grid-auto-flow: dense;
                                                    grid-template-columns: 1fr 1fr;
                                                    grid-template-rows: auto;
                                                    padding: 0.5em;

                                                }

                                                @media(min-width:768px) {
                                                    .nav-sdm-std .nav-pills {
                                                        grid-template-columns: repeat(2, 1fr);
                                                    }

                                                    .box-tabs .nav-sdm-std {
                                                        grid-template-columns: 1fr;
                                                        grid-template-areas:
                                                            'pills'
                                                            'content';
                                                    }

                                                }

                                                .nav-sdm-std .nav-pills li {
                                                    display: flex;
                                                    flex-direction: column;
                                                    justify-content: center;
                                                }

                                                .nav-sdm-std .nav-pills>li+li {
                                                    margin-left: 0;
                                                }

                                                .nav-sdm-std .nav-pills li a {
                                                    background-color: rgba(77, 84, 31, 1);
                                                    color: rgba(255, 255, 255, 1);
                                                    border: solid 1px rgba(35, 35, 35, 0.31);
                                                    border-radius: 3px;
                                                    height: 100%;
                                                    display: flex;
                                                    flex-direction: column;
                                                    justify-content: center;
                                                    /* align-items: center; */

                                                }

                                                .nav-sdm-std .nav-pills>li.active>a,
                                                .nav-sdm-std .nav-pills>li.active>a:focus,
                                                .nav-sdm-std .nav-pills>li.active>a:hover {
                                                    background-color: #363636 !important;
                                                    color: #fff;
                                                }

                                                .nav-sdm-std .nav>li>a:focus,
                                                .nav-sdm-std .nav>li>a:hover {
                                                    background-color: #A6B517 !important;
                                                    color: #232323;
                                                }

                                                .nav-sdm-std .tab-content {
                                                    grid-area: content;
                                                    padding: 0.5em;
                                                    margin: auto;
                                                }

                                                .nav-sdm-std .tab-pane {
                                                    color: #232323;
                                                }

                                                .nav-sdm-std .embed-container iframe {
                                                    width: 20rem;
                                                    height: 30vh;
                                                }

                                                @media(min-width:768px) {
                                                    .nav-sdm-std .embed-container iframe {
                                                        width: 80rem;
                                                        height: 50vh;
                                                    }
                                                }
                                            </style>


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

                        <div id="informacion" class="tab-pane fade">
                            <div>
                                <br>
                                <div class="parrafo-tab">
                                    <h3 class="text-center">Con más información y nuevas capacidades ¡Conoce estos recursos! </h3>
                                </div>
                                <br>
                                <div class="seccion-7">
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-12'>
                                            <ol>
                                                <p>
                                                    <li><strong>El SENA ha desarrollado los siguientes cursos complementarios sobre movilidad de cero y bajas emisiones.</strong>
                                                </p>
                                                <ul>
                                                    <li>Conducción eco-eficiente en el transporte.</li>
                                                    <li>Mantenimiento y ajuste técnico mecánico en bicicletas de gama baja.</li>
                                                    <li>Técnico en control de movilidad, transporte y seguridad vial.</li>
                                                    <li>Tecnólogo en gestión integral del transporte.</li>
                                                    <li>Alistamiento de vehículos automotores de servicio público.</li>
                                                    <li>Diagnóstico de los sistemas eléctricos y electrónicos de automotores.</li>
                                                    <li>Técnico en mantenimiento eléctrico y electrónico en automotores.</li>
                                                    <li>Formación en Vehículos de propulsión eléctrica.</li>
                                                    <li>Formación en Vehículos de propulsión Híbrida.</li>
                                                    <br>
                                                    <p><a href="https://forms.gle/in7zmqVLyfmAaCeLA">Registrar tu interes de participar aquí</a></p>
                                                    <br>
                                                </ul>
                                                </li>

                                                <p>
                                                    <li><strong>Conoce más sobre movilidad eléctrica con estas herramientas:</strong>
                                                </p>
                                                <ul>
                                                    <li><a href="https://drive.google.com/file/d/1TAxh1-NCWJj0WbGjsLPuZBZsJwDqLtIn/view?usp=sharing">Documento de diagnóstico sobre la movilidad de cero y bajas emisiones</a></li>
                                                    <li><a href="https://www.google.com/url?q=https://drive.google.com/file/d/1mIZIR-qn6Ds7oYS_TGC6GdxRuMWGSzOI/view?usp%3Ddrive_link&sa=D&source=docs&ust=1689627120003900&usg=AOvVaw1G9mX6QqjfxrxKJJ2dWNOe">Documento CONPES D.C. 30 Consejo Distrital de Política Económica y Social del Distrito Capital. <strong>Política Pública de Movilidad Motorizada de Cero y Bajas Emisiones 2023 - 2040.</strong></a></li>
                                                    <li><a href="https://www.google.com/url?q=https://docs.google.com/spreadsheets/d/1EMjaKODWoelDBRMGaT5SsG_AU16q7KAg/edit?usp%3Ddrive_link%26ouid%3D108378662830851171002%26rtpof%3Dtrue%26sd%3Dtrue&sa=D&source=docs&ust=1689627120008407&usg=AOvVaw2bYKcBN4v4QaS31ftLLav0" download>Plan de Acción - Política Pública de Movilidad Motorizada de Cero y Bajas Emisiones 2023 - 2040</a></li>
                                                </ul>
                                                </li>
                                                </ul>

                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .seccion-7 {
                                        margin-left: 16px;
                                    }

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
                                        font-family: 'Glyphicons Halflings', sans-serif;
                                        font-size: 18px;
                                        float: left;
                                        margin-top: 0px;
                                        margin-left: -20px;
                                        color: rgba(102, 224, 38, 1);
                                    }
                                </style>
                            </div>
                        </div>

                        <div id="alianzas" class="tab-pane fade">
                            <div>
                                <br>
                                <div class="parrafo-tab">
                                    <h3 class="text-center">Con alianzas y acciones de tod@s ¡Únete aquí! </h3>
                                </div>
                                <br>

                                <div class="seccion-8">
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-12'>
                                            <p><strong>No te quedes por fuera, únete y sé parte del cambio.</strong></p>
                                            <p>Esta transición necesita del trabajo conjunto con el sector privado, académico y los actores de toda la cadena de valor para acelerar la transición. Anímate a participar, estos son los ejes para definir diferentes compromisos por la movilidad eléctrica:</p>
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
                                        <p>Si tu organización quiere hacer parte de esta transición y visibilizar los esfuerzos a nivel internacional, solo debe diligenciar este <a href="https://docs.google.com/document/d/1XrmtuvMesZeVmXvxtOMzv0tU4fm_Zk9V/edit"><strong>formato.</strong></a></p>
                                        <p>Y enviarlo a los correos <a href="mailto:movilidadecoeficiente@movilidadbogota.gov.co">movilidadecoeficiente@movilidadbogota.gov.co</a> y <a href="mailto:german.diazrivas@un.org">german.diazrivas@un.org</a></p>

                                    </div>
                                </div>

                                <style>
                                    .carousel_empresas {
                                        margin: 0px 50px;
                                    }

                                    .carousel_empresas .carousel-caption {
                                        right: 10%;
                                        left: 10%;
                                        /* text-shadow: 0 1px 2px rgba(255, 255, 255, 0.5); */
                                        background-color: rgba(0, 0, 0, 0.9);
                                        padding: 15px;
                                    }

                                    .carousel_empresas .carousel-caption h3 {
                                        color: rgba(255, 255, 255, 1);
                                        font-family: 'Montserrat', sans-serif;
                                        font-size: 30px;
                                        font-weight: 700;
                                        text-align: center;
                                        line-height: 1.4;
                                    }

                                    .carousel_empresas .carousel-control {
                                        color: rgb(28, 32, 70, 1) !important;
                                        opacity: 1;
                                        background-color: #00000000;
                                        filter: none;
                                    }

                                    .carousel_empresas .logos {
                                        margin: 0px;
                                    }

                                    .carousel_empresas .logos img {
                                        margin: auto;
                                        max-height: 150px;
                                        min-width: 60px;
                                        width: auto;
                                    }

                                    .carousel_empresas .carousel-control .glyphicon-chevron-left,
                                    .carousel_empresas .carousel-control .glyphicon-chevron-right,
                                    .carousel_empresas .carousel-control .icon-next,
                                    .carousel_empresas .carousel-control .icon-prev {
                                        top: calc(50% - 20px) !important;
                                    }

                                    .carousel_empresas .carousel-control .glyphicon-chevron-right,
                                    .carousel_empresas .carousel-control .icon-next {
                                        right: 10% !important;
                                        margin-right: -10px;
                                    }

                                    .carousel_empresas .carousel-control .glyphicon-chevron-left,
                                    .carousel_empresas .carousel-control .icon-prev {
                                        left: 10% !important;
                                        margin-left: -10px;
                                    }

                                    @media(max-width:767px) {
                                        .carousel_empresas {
                                            margin: 0px;
                                            position: relative;
                                            height: auto;
                                        }

                                        .carousel-inner>.item {
                                            position: relative;
                                            height: 400px;
                                        }

                                    }

                                    .carousel_empresas .carousel-control.right,
                                    .carousel_empresas .carousel-control.left {
                                        background-image: none !important;
                                        filter: none !important;
                                        background-repeat: repeat-x;
                                    }


                                    @media screen and (min-width: 768px) {

                                        .carousel_empresas .carousel-control .glyphicon-chevron-left,
                                        .carousel_empresas .carousel-control .glyphicon-chevron-right,
                                        .carousel_empresas .carousel-control .icon-next,
                                        .carousel_empresas .carousel-control .icon-prev {

                                            width: 40px !important;
                                            height: 40px !important;
                                            font-size: 40px !important;
                                        }

                                        .carousel_empresas .carousel-control .glyphicon-chevron-right,
                                        .carousel_empresas .carousel-control .icon-next {
                                            right: 0.4em !important;
                                            margin-right: -10px;
                                        }

                                        .carousel_empresas .carousel-control .glyphicon-chevron-left,
                                        .carousel_empresas .carousel-control .icon-prev {
                                            left: 0.4em !important;
                                            margin-left: -10px;
                                        }
                                    }
                                </style>


                            </div>
                        </div>
                    </div>

                    <style>
                        #alianzas,
                        #informacion,
                        #infraestructura,
                        #incentivos {
                            background: #f5f5f5 !important;
                            padding: 16px;
                        }

                        .box-transicion {
                            display: grid;
                            gap: 15px;
                            grid-auto-flow: dense;
                            grid-template-columns: 1fr;
                            grid-template-rows: auto;
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

                        .box-transicion a {
                            text-decoration: none !important;
                        }


                        .btn-transicion .imagen img {
                            max-width: 120px;
                            margin: auto;
                            padding: 15px;
                        }

                        .btn-transicion .titulo {
                            padding: 0px 15px 10px 15px;
                        }

                        .btn-transicion .titulo h3 {
                            font-size: 18px;
                            font-weight: 700;
                            text-align: center;
                            line-height: 1.2;
                            color: #191c3a;
                            margin: 8px;
                        }

                        .btn-transicion:hover {
                            background-color: #d5d5d5;
                        }

                        .btn-transicion:hover a,
                        .btn-transicion:focus a,
                        .btn-transicion:visited a {
                            background-color: #191c3a !important;
                            color: #66e026;
                        }



                        @media(min-width:768px) {
                            .box-transicion {
                                grid-template-columns: repeat(2, 1fr);
                            }
                        }
                    </style>

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
                                                            <li class="li_1"><strong>Agenda 2030.</strong><i> Objetivos de desarrollo sostenible</i><a href="https://www.un.org/sustainabledevelopment/es/development-agenda/" target="_blank" rel="noopener noreferrer"> Ver en línea</a></li>
                                                            <li class="li_1"><strong>Acuerdo de París.</strong><i> Naciones Unidas 2015</i><a href="https://unfccc.int/sites/default/files/spanish_paris_agreement.pdf" target="_blank" rel="noopener noreferrer"> (.pdf)</a></li>
                                                            <li class="li_1"><strong>Declaración de crecimiento verde.</strong><i> Organización para la Cooperación y el Desarrollo Económicos (OCDE)</i><a href="https://www.oecd.org/greengrowth/49709364.pdf" target="_blank" rel="noopener noreferrer"> (.pdf)</a></li>
                                                            <li class="li_1"><strong>Convención Marco de las Naciones Unidas sobre el Cambio Climático.</strong><i> Naciones Unidas. 1992</i><a href="https://unfccc.int/resource/docs/convkp/convsp.pdf" target="_blank" rel="noopener noreferrer"> (.pdf)</a></li>
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
                                                            <li class="li_1"><strong>Ley 2099 de 2021.</strong><i> (Disposiciones para la transición energética). Por medio de la cual se dictan disposiciones para la transición energética, la dinamización del mercado energético, la reactivación económica del país y se dictan otras disposiciones . Congreso de la República 10 de julio de 2021.</i><a href="https://dapre.presidencia.gov.co/normativa/normativa/LEY%202099%20DEL%2010%20DE%20JULIO%20DE%202021.pdf" target="_blank" rel="noopener noreferrer"> (.pdf)</a></li>
                                                            <li class="li_1"><strong>Decreto 191 de 2021.</strong><i> (Estacionamientos preferenciales para Vehículos Eléctricos). Por el cual se adiciona la parte 6 del libro 2 del Decreto 1079 de 2015, Único Reglamentario del Sector Transporte en lo relacionado con la identificación de parqueaderos preferenciales para vehículos eléctricos.</i><a href="https://dapre.presidencia.gov.co/normativa/normativa/DECRETO%20191%20DEL%2023%20DE%20FEBRERO%20DE%202021.pdf" target="_blank" rel="noopener noreferrer"> (.pdf)</a></li>
                                                            <li class="li_1"><strong>Resolución 40223 de 2021.</strong><i> (Estandarización de Conectores)</i><a href="https://gestornormativo.creg.gov.co/gestor/entorno/docs/resolucion_minminas_40223_2021.htm#:~:text=Por%20la%20cual%20se%20establecen,veh%C3%ADculos%20el%C3%A9ctricos%20e%20h%C3%ADbridos%20enchufables" target="_blank" rel="noopener noreferrer"> (.pdf)</a></li>
                                                            <li class="li_1"><strong>Ley 1964 de 2019.</strong><i> (Promoción de vehículos eléctricos en Colombia)</i><a href="https://dapre.presidencia.gov.co/normativa/normativa/LEY%201964%20DEL%2011%20DE%20JULIO%20DE%202019.pdf" target="_blank" rel="noopener noreferrer"> (.pdf)</a></li>
                                                            <li class="li_1"><strong>Estrategia Nacional de Movilidad Eléctrica</strong><a href="https://www1.upme.gov.co/DemandaEnergetica/ENME.pdf" target="_blank" rel="noopener noreferrer"> (.pdf)</a></li>
                                                            <li class="li_1"><strong>Plan Energético Nacional (2020-2050)</strong><a href="https://www1.upme.gov.co/DemandayEficiencia/Documents/PEN_2020_2050/Plan_Energetico_Nacional_2020_2050.pdf" target="_blank" rel="noopener noreferrer"> (.pdf),</a><a href="https://www1.upme.gov.co/DemandayEficiencia/Paginas/PEN.aspx" target="_blank" rel="noopener noreferrer"> Enlace Documentos Relacionados.</a></li>
                                                            <li class="li_1"><strong>Política de Crecimiento Verde</strong><a href="https://www.dnp.gov.co/Crecimiento-Verde/Documents/Pol%C3%ADtica CONPES 3934/CONPES 3934 - Pol%C3%ADtica de Crecimiento Verde.pdf" target="_blank" rel="noopener noreferrer"> (.pdf),</a><a href="https://www.dnp.gov.co/Crecimiento-Verde/Paginas/Politica-crecimiento-verde.aspx" target="_blank" rel="noopener noreferrer"> Enlace Documentos Relacionados.</a></li>
                                                            <li class="li_1"><strong>Contribución Determinada a nivel Nacional.</strong><i> (NDC Colombia actualizada)</i><a href="https://www.minambiente.gov.co/cambio-climatico-y-gestion-del-riesgo/actualizacion-de-la-contribucion-determinada-a-nivel-nacional-ndc/" target="_blank" rel="noopener noreferrer"> (.pdf),</a><a href="https://www.minambiente.gov.co/index.php/ndc-actualizada" target="_blank" rel="noopener noreferrer"> Enlace Documentos Relacionados.</a></li>
                                                            <li class="li_1"><strong>Ley 2294 de 2023.</strong><i> Por el cual se expide el Plan Nacional de Desarrollo 2022 - 2026 Colombia potencia mundial de la vida.</i><a href="https://colaboracion.dnp.gov.co/CDT/portalDNP/PND-2023/Ley_2294_del_19_de_mayo_de_2023.pdf"> (.pdf)</a></li>
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
                                                <div id="collapse_3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_3">
                                                    <div class="panel-body pb1">
                                                        <ul>
                                                            <li class="li_1"><strong>Decreto 203 del 31 de mayo de 2023.</strong><i> Por medio del cual se establecen lineamientos para la constitución, administración y funcionamiento del Fondo Distrital para la Promoción del Ascenso Tecnológico de volquetas y del parque automotor que preste el servicio de transporte de carga de que trata el artículo 32 de la Ley 2169 de 2021, y se dictan otras disposiciones. </i><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=142660&dt=S">ver en línea</a></li>
                                                            <li class="li_1"><strong>Resolución 218 del 13 de agosto de 2021.</strong><i> Resolución Nº 218 del 13 agosto de 2021. Por medio de la cual se incluye la actividad denominada recarga de vehículos eléctricos dentro del listado de actividades de aprovechamiento económico de espacio público en los términos del Decreto 552 de 2018. </i><a href="https://www.dadep.gov.co/sites/default/files/comision-intersectorial-del-espacio-publico-ciep/2022-09/resolucion-218-de-2021.pdf">(.pdf)</a></li>
                                                            <li class="li_1"><strong>Resolución No. 149772 del 23 de junio de 2023.</strong><i> Por la cual se adopta el protocolo general para el aprovechamiento económico del espacio público para la actividad de recarga de vehículos eléctricos y se establecen otras disposiciones. </i><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=143481">ver en línea</a></li>
                                                            <li class="li_1"><strong>Acuerdo 811 de 2021.</strong><i> Acciones para la descarbonización en Bogotá. </i><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=113880&dt=S" target="_blank" rel="noopener noreferrer">ver en línea</a></li>
                                                            <li class="li_1"><strong>Acuerdo 790 de 2020.</strong><i> Declaratoria emergencia climática. </i><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=103745&dt=S" target="_blank" rel="noopener noreferrer">ver en línea,</a><a href="https://www.catorce6.com/images/legal/Acuerdo_790_de_2020_Alcaldia_Bogota.pdf" target="_blank" rel="noopener noreferrer"> (.pdf)</a></li>
                                                            <li class="li_1"><strong>Acuerdo 780 de 2020.</strong><i> Incentivos para la reactivación económica. </i><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=100965&dt=S" target="_blank" rel="noopener noreferrer">ver en línea,</a><a href="https://www.shd.gov.co/shd/sites/default/files/files/impuestos/Acuerdo-780-de-2020.pdf" target="_blank" rel="noopener noreferrer"> (.pdf)</a></li>
                                                            <li class="li_1"><strong>Acuerdo 732 de 2018.</strong><i> Medidas para la promoción de la movilidad eléctrica. </i><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=82132&dt=S" target="_blank" rel="noopener noreferrer">ver en línea,</a><a href="https://irp-cdn.multiscreensite.com/c480f174/files/uploaded/Bogota-Alcaldia-Acuerdo-2018-N0000732_20181228.pdf" target="_blank" rel="noopener noreferrer"> (.pdf)</a></li>
                                                            <li class="li_1"><strong>Acuerdo 689 de 2017.</strong><i> Lineamientos para fortalecer la eco-conducción. </i><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=71613&dt=S" target="_blank" rel="noopener noreferrer">ver en línea,</a><a href="https://concejodebogota.gov.co/cbogota/site/artic/20170616/asocfile/20170616162503/acuerdo_no__689_de_2017.pdf" target="_blank" rel="noopener noreferrer"> (.pdf)</a></li>
                                                            <li class="li_1"><strong>Acuerdo 619 de 2015.</strong><i> Lineamientos para estimular el uso de vehículos eléctricos. </i><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=63089" target="_blank" rel="noopener noreferrer">ver en línea</a></li>
                                                            <li class="li_1"><strong>Acuerdo 477 de 2013.</strong><i> Plan de Ascenso Tecnológico para el SITP. </i><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=55072" target="_blank" rel="noopener noreferrer">ver en línea</a></li>
                                                            <li class="li_1"><strong>Acuerdo 472 de 2011.</strong><i> Lineamientos Política conducción ecológica. </i><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=43825" target="_blank" rel="noopener noreferrer">ver en línea</a></li>
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

    <!-- Sección box aliados -->
    <div class="box box-aliados">
        <h3 class="title title-type-3 title-id-n3">
            Aliados
        </h3>
        <p>Nos unimos con el Programa de las Naciones Unidas para el Medio Ambiente (PNUMA) para invitar a las <strong>organizaciones a que definan compromisos específicos por la movilidad eléctrica.</strong></p>
        <div class="set-logos-aliados">
            <div class="logo-aliado img-logo-aliados-1">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-05-2022/unep50logo.png" alt="Logo ONU" title="Logo ONU">
            </div>
            <div class="logo-aliado img-logo-aliados-2">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-05-2022/b_move_to_zero-full_color.png" alt="Logo Move to Zero" title="Logo Move to Zero">
            </div>
        </div>
        <p>Ya son más de 30 organizaciones comprometidas que han generado más de 60 compromisos por la movilidad eléctrica.</p>
        <div>
            <div id="carousel_empresas_b" class="carousel carousel_empresas slide" data-ride="carousel">

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
                            <div class='col-xs-12 col-sm-2'>
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
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2023/icono_deepsea_230628_120x120.png" alt="">
                            </div>
                            <div class='col-xs-12 col-sm-2'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2023/icono_navitrans_230628_120x123.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row logos">
                            <div class='col-xs-12 col-sm-2 col-sm-offset-5'>
                                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-06-2023/icono_motorysa-byd_230628_120x120.png" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#carousel_empresas_b" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#carousel_empresas_b" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>

            </div>

        </div>
        <style>
            .ceroybajas .box-aliados {
                grid-area: box-aliados;
                margin-top: 4em;
            }

            .box-aliados .title-type-3 {
                text-align: center;
                color: rgba(77, 84, 31, 1);
                font-weight: 700;
            }

            .box-aliados .set-logos-aliados {
                display: grid;
                gap: 8px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                padding-top: 32px;
                padding-bottom: 32px;
            }

            .set-logos-aliados .logo-aliado img {
                max-width: 200px;
                margin: auto;
            }

            @media(min-width:768px) {
                .box-aliados .set-logos-aliados {
                    grid-template-columns: 1fr 1fr;
                    padding-left: 8em;
                    padding-right: 8em;

                }
            }
        </style>

        <div class="contacto-cbe">
            <h4>¿Quieres saber más? Contáctanos a traves del <a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php">Formulario radicación de correspondencia</a></h4>
        </div>
        <style>
            .contacto-cbe {
                padding: 40px 25px;
                text-align: center;
                background-color: #66e026;
                /* color: #66e026; */
                margin-top: 10px;
                margin-right: -15px;
                margin-left: -15px;
            }

            .contacto-cbe h4 {
                font-weight: 700;

            }
        </style>
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

        .w-100 {
            width: 100%;
        }
    </style>
    <!-- End Styles -->
    <style>
        @media(min-width:768px) {
            .box-head {
                height: 650px;
            }

            .box-indicadores {
                background-color: rgba(0, 0, 0, 0.5);
                position: absolute;
                bottom: 30px;
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
    </style>
