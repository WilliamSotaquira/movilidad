@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid comparendos'>
    <div class='box-wrp'>
        <div class='box-head'>
            <div class='logo'>
                <!-- <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/07-03-2022/comparendos_20220307_sm.jpg' alt='logo' title='logo'> -->
            </div>
            <div class="titulo">
                <div>
                    <h1>Consulta y pagos de comparendos</h1>
                    <p>Con su <strong>número de cédula</strong> y <strong>la placa del vehículo</strong> consulte los comparendos vigentes</p>
                    <p>También encontrará la información sobre los descuentos a los que puede acceder </p>
                </div>
            </div>
        </div>

        <style>
            .box-wrp {}

            .box-head {
                /* grid-area: logo; */
                display: grid;
                grid-auto-flow: dense;
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
                grid-template-rows: auto;
                grid-template-areas:
                    'logo titulo';
                border-bottom: solid 5px rgba(102, 224, 38, 1);
            }

            .box-head .logo {
                padding: 10px;
                background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/14-06-2022/paginaweb.png');
                background-size: cover;
                background-position: center;
                grid-area: logo;
                /* height: 180px; */
            }

            .box-head .titulo {
                padding: 20px;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: rgba(25, 28, 58, 1);
                grid-area: titulo;
            }

            .box-head .titulo h1 {
                /* font-size: 1em; */
                font-weight: 700;
                text-align: center;
                line-height: 1;
                color: rgba(102, 224, 38, 1);
                margin: 20px 10px;
            }

            .box-head .titulo p {
                font-size: 1.2em;
                font-weight: 500;
                text-align: left;
                line-height: 1.4;
                color: rgba(255, 255, 255, 1);
                margin: 5px;
            }
        </style>
        <div class="box-sliders">
            <div class='row'>
                <!-- xs -->
                <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                    <!-- Carousel carousel_comparendos_xs -->
                    <div class='box-carousel'>
                        <div id='carousel_comparendos_xs' class='carousel slide' data-ride='carousel' data-interval="12000">
                            <!-- Indicators -->
                            <ol class='carousel-indicators'>
                                <li data-target='#carousel_comparendos_xs' data-slide-to='0' class='active'></li>
                                <li data-target='#carousel_comparendos_xs' data-slide-to='1'></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class='carousel-inner'>
                                <div class='item active'>
                                    <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/16-06-2022/gif_1_800_x_800.gif' alt='' title=''>
                                </div>
                                <div class='item'>
                                    <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/16-06-2022/gif_2_800_x_800.gif' alt='' title=''>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class='left carousel-control' href='#carousel_comparendos_xs' data-slide='prev'>
                                <span class='glyphicon glyphicon-chevron-left'></span>
                                <span class='sr-only'>Anterior</span>
                            </a>
                            <a class='right carousel-control' href='#carousel_comparendos_xs' data-slide='next'>
                                <span class='glyphicon glyphicon-chevron-right'></span>
                                <span class='sr-only'>Siguiente</span>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- lg -->
                <div class='col-sm-12 hidden-xs'>
                    <!-- Carousel carousel_comparendos_lg -->
                    <div class='box-carousel'>
                        <div id='carousel_comparendos_lg' class='carousel slide' data-ride='carousel' data-interval="12000">
                            <!-- Indicators -->
                            <ol class='carousel-indicators'>
                                <li data-target='#carousel_comparendos_lg' data-slide-to='0' class='active'></li>
                                <li data-target='#carousel_comparendos_lg' data-slide-to='1'></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class='carousel-inner'>
                                <div class='item active'>
                                    <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/16-06-2022/gif_1_940_x_450.gif' alt='' title=''>
                                </div>
                                <div class='item'>
                                    <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/16-06-2022/gif_2_940_x_450_1.gif' alt='' title=''>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class='left carousel-control' href='#carousel_comparendos_lg' data-slide='prev'>
                                <span class='glyphicon glyphicon-chevron-left'></span>
                                <span class='sr-only'>Anterior</span>
                            </a>
                            <a class='right carousel-control' href='#carousel_comparendos_lg' data-slide='next'>
                                <span class='glyphicon glyphicon-chevron-right'></span>
                                <span class='sr-only'>Siguiente</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <style>
            .box-sliders {
                margin-top: 30px;
            }
        </style>
        <hr>
        <div class="box-mensaje">
            <div class="label">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/15-06-2022/icono-vehiculos_comparendos.png' alt='' title=''>
            </div>
            <div class="mensaje">
                <h3>Ahora <strong>desde la comodidad de tu casa</strong> podrás consultar el <strong>pago de comparendos, acuerdos de pago, embargos y prescripciones</strong></h3>
            </div>
            <div class="box-boton">
                <a href="https://consultas.transitobogota.gov.co:8010/publico/index3.php" class="btn btn-nm btn-lg btn-block" target="_blank" rel="noopener noreferrer">Consulte aquí <strong>comparendos, acuerdos de pago, embargos y prescripciones</strong></a>
            </div>
        </div>
        <hr>
        <style>
            .box-mensaje {
                /* height: 160px; */
                width: 100%;
                border: 3px solid rgba(102, 224, 38, 1);
                position: relative;
                border-radius: 8px;
                margin-bottom: 30px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-top: 30px;
            }

            .box-mensaje .label {
                position: absolute;
                top: -15px;
                left: calc(50% - 100px);
                height: 30px;
                width: 200px;
                background-color: #fff;

                text-align: center;
            }

            .box-mensaje .label img {
                padding: 0px 15%;
            }

            .mensaje {
                padding: 30px 30px;
            }

            .mensaje h3 {
                /* font-size: 1em; */
                font-weight: 400;
                text-align: center;
                line-height: 1.5;
                color: rgba(25, 28, 58, 1);
                margin: 8px;
            }

            .box-boton {
                padding-bottom: 25px;
            }
        </style>
        <div class="box-infografia">
            <div class='imagen'>
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/15-06-2022/infografiamorosostransito_2022_.jpg" target="_blank" rel="noopener noreferrer">
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/15-06-2022/infografiamorosostransito_2022_.jpg' alt='' title=''>
                </a>
            </div>
        </div>
        <hr>
        <div class="box-acuerdo">
            <div class='imagen'>
                <!-- <img class='img-responsive w-100' src='' alt='funcionario de la Secretaría Distrital de Movilidad realizando acuerdo de pago con ciudadanos' title='funcionario de la Secretaría Distrital de Movilidad realizando acuerdo de pago con ciudadanos'> -->
            </div>
            <div class="texto">
                <div>
                    <h4>Haz ya tu <strong>acuerdo de pago</strong> y ponte al día con Bogotá</h4>
                </div>
                <a href="https://www.movilidadbogota.gov.co/web/atencion/acuerdos_de_pago" class="btn btn-lg btn-block btn-nm" target="_blank" rel="noopener noreferrer">Clic aquí para hacer tu <strong>acuerdo de pago</strong></a>
            </div>
        </div>
        <style>
            .box-acuerdo {
                display: grid;
                /* gap: 10px; */
                grid-auto-flow: dense;
                grid-template-rows: auto;
                grid-template-areas:
                    'imagen texto';
            }


            .box-acuerdo .imagen {
                grid-area: imagen;
                background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/15-06-2022/acuerdo_pago.png');
                background-size: cover;
                background-position: center;
                min-height: 300px;
            }

            .box-acuerdo .texto {
                grid-area: texto;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 30px;
            }

            .box-acuerdo .texto h4 {
                font-size: 2em;
                font-weight: 400;
                text-align: center;
                line-height: 1.4;
                color: rgba(25, 28, 58, 1);
            }

            .box-acuerdo .texto p {
                font-size: 1em;
                font-weight: 500;
                text-align: center;
                line-height: 1.4;
                color: rgba(25, 28, 58, 1);
            }
        </style>
        <div class="box-normativo">
            <p>Según el artículo 2 del Código Nacional de Tránsito, el comparendo es una orden formal de notificación para que el presunto contraventor o implicado se presente ante la autoridad de tránsito por la comisión de una infracción. Aquí podrá consultar con su número de cedula y placa del vehículo los comparendos que tenga pendientes, acuerdos de pago, embargos y prescripción.</p>
        </div>
        <div class="box-boton">
            <a href="https://consultas.transitobogota.gov.co:8010/publico/index3.php" class="btn btn-lg btn-nm" target="_blank" rel="noopener noreferrer">Consulte aquí <strong>comparendos, acuerdos de pago, embargos y prescripciones</strong></a>
        </div>
        <hr>
        <style>
            .box-normativo {
                padding: 30px;
            }

            .box-normativo p {
                /* font-size: 1em; */
                font-weight: 400;
                text-align: justify;
                line-height: 1.5;
                color: rgba(25, 25, 25, 1);
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

    .comparendos {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.3;
        color: rgba(25, 25, 25, 1);
    }

    /*
    .comparendos [class*='col-'] {
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

    .box-boton {
        text-align: center;
        padding: 15px;
    }

    .btn-nm {
        background-color: rgba(102, 224, 38, 1) !important;
        /* font-size: 1em; */
        font-weight: 500 !important;
        text-align: center;
        line-height: 1;
        color: rgba(25, 25, 25, 1);
        white-space: normal !important;
        word-wrap: break-word !important;
        max-width: 100%;
    }

    .btn-nm:hover {
        background-color: rgba(62, 194, 8, 1) !important;
        color: rgba(5, 5, 5, 1) !important;

    }

    /* .btn-nm:visited, */
    .btn-nm:active,
    .btn-nm:focus {
        background-color: rgba(25, 28, 58, 1) !important;
        color: rgba(255, 255, 255, 1) !important;

    }

    @media(max-width:767px) {
        .box-head {
            grid-template-areas:
                'titulo'
                'logo';
        }

        .box-head .logo {
            height: 200px;
        }

        .box-head .titulo p {
            text-align: center;
            font-size: 1em;
        }

        .box-acuerdo {
            /* grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); */
            grid-template-areas:
                'imagen imagen'
                'texto texto';
        }

    }


    @media(min-width:768px) {
        .box-acuerdo {
            grid-template-columns: repeat(auto-fill, minmax(310px, 1fr));
            grid-template-areas:
                'imagen texto';
        }

    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- End Styles -->