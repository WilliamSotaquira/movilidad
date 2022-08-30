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
            <div class="logo">
                <img class='img-responsive img-banner' src='http://zonadeparqueopago.gov.co/Recursos/Ultima_Version/logo_26102021_0.png' alt='Encabezado Zonas de Parqueo Pago' title='Encabezado Zonas de Parqueo Pago'>
            </div>
            <div class="titulo">
                <div class="encabezado-texto">
                    <h1>Las <span class="txt-enf-v1"><strong>Zonas de Parqueo Pago</strong></span> son áreas de la ciudad en las que la <span class="txt-enf-v1"><strong>Alcaldía Mayor de Bogotá</strong></span> permite el estacionamiento de vehículos en vía a cambio de un pago por el uso de estos espacios.</h1>
                </div>
            </div>
            <!-- <div class='row encabezado'>
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
            </div> -->
            <br>
        </div>
        <!-- Fin encabezado  -->
        <style>
            .box-head {
                background-color: rgba(25, 28, 58, 1);
                display: grid;
                /* gap: 10px; */
                /* grid-auto-flow: dense */
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'logo titulo';
                margin-bottom: 30px;
            }

            .box-head .logo {
                grid-area: logo;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .box-head .logo img {
                /* grid-area: logo; */
                max-width: 300px;
            }

            .box-head .titulo {
                grid-area: titulo;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 30px;
            }

            .box-head .titulo .encabezado-texto {
                border-top: 3px solid rgba(102, 224, 38, 1);
                border-bottom: 3px solid rgba(102, 224, 38, 1);
            }

            .box-head .titulo h1 {
                font-size: 1.5em;
                font-weight: 300;
                text-align: center;
                line-height: 1.2;
                color: rgba(255, 255, 255, 1);
            }
        </style>
        <hr>
        <div class="row acordeon">
            <div class="titulo">
                <h3>Normatividad Vigente Zonas de Parqueo Pago</h3>
            </div>
            <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 zpp-acordeon">
                <!-- collapse_normatividad -->
                <div class='panel-group ' id='accordion_normatividad' role='tablist ' aria-multiselectable='true'>
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='heading_normatividad'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordion_normatividad' href='#collapse_normatividad' aria-expanded='true' aria-controls='collapse_normatividad'>
                                    Documentos
                                </a>
                            </h4>
                        </div>
                        <div id='collapse_normatividad' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_normatividad'>
                            <div class='panel-body'>
                                <ul>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2021/20171228_-_acuerdo_695_de_2017_autoriza_cobro_tasa_por_derecho_de_estacionamiento.pdf" target="_blank" rel="noopener noreferrer">20171228 - Acuerdo 695 DE 2017 autoriza cobro tasa por derecho de estacionamiento</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2021/20180615_-_decreto_distrital_325_de_2018_elimina_poliza_rce.pdf" target="_blank" rel="noopener noreferrer">20180615 - Decreto Distrital 325 de 2018 (elimina póliza RCE)</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2021/20190828_-_decreto_519_de_2019.pdf" target="_blank" rel="noopener noreferrer">20190828 - Decreto 519 de 2019</a></li>
                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-10-2021/20211012_-_decreto_379_de_2021_-_modificatorio_decreto_519_de_2019_eev.pdf" target="_blank" rel="noopener noreferrer">20211012 - Decreto 379 de 2021 - Modificatorio Decreto 519 de 2019 EEV</a></li>
                                    <li><a href="http://zonadeparqueopago.gov.co/Recursos/Documentos/20220405-Zonas_de_Parqueo_Pago-ZPP-Contrato_Usuario-Operador_v4.pdf" target="_blank" rel="noopener noreferrer">20220404 - Contrato Usuario Operador</a></li>
                                    <li><a href="http://zonadeparqueopago.gov.co/Recursos/Documentos/20211029-Resolución_SDM_108551_tarifas_EEV.pdf" target="_blank" rel="noopener noreferrer">20211029 - Resolución SDM 108551 tarifas EEV</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#fin _normatividad -->
            </div>
        </div>

        <!--Boton de descarga APK-->
        <hr>
        <div class="titulo">
            <h3>Descargue la aplicación para su dispositivo móvil</h3>
        </div>
        <div class="box-botones">
            <div class="boton-app zoom boton-android">
                <a href="https://t.co/5zf0gqda7b" class="btn btn-zpp" target="_blank" rel="noopener noreferrer"><img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/botonesPaginaZPP-05.png' alt='Descargar App Android' title='Descargar App Android'></a>
            </div>
            <div class="boton-app zoom boton-ios">
                <a href="https://t.co/CHZpHq2kho" class="btn btn-zpp" target="_blank" rel="noopener noreferrer"><img class='img-responsive w-100' src='http://zonadeparqueopago.gov.co/Recursos/botonesPaginaZPP-04.png' alt='Descargar App iOS' title='Descargar App iOS'></a>
            </div>
        </div>
        <style>
            .box-botones {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: auto;
                grid-gap: 6px;
                justify-items: center;
                align-items: center;
                justify-content: space-around;
            }

            .box-botones .boton-app {
                margin: 30px;
                max-width: 200px;
            }

            .box-botones .btn-zpp {
                background-color: rgba(25, 28, 58, 1);
                color: rgba(255, 255, 255, 1);
            }

            .box-botones .btn-zpp:hover {
                background-color: rgba(15, 18, 28, 1);
                color: rgba(255, 255, 255, 1);
            }

            .box-botones .btn-zpp:focus,
            .box-botones .btn-zpp:active {
                background-color: rgba(102, 224, 38, 1);
                color: rgba(25, 28, 58, 1);
            }
        </style>
        <hr>
        <!--#Fin de boton de descarga APK-->

  
        <div class='row'>
            <div class='col-xs-12 text-center'>
                <div class="msg-2">
                    <p>Para mayor información, escríbenos al correo:</p>
                    <p><mark><a href="mailto:zonadeparqueopago@terminaldetransporte.gov.co"><strong>zonadeparqueopago@terminaldetransporte.gov.co</strong></a></mark></p>
                </div>
            </div>
        </div>
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
        font-weight: 500;
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
    .seccion .no-padding {
        padding: 0px !important;
    }

    /* encabezado */
    /* .encabezado {
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

} */
    .txt-enf-v1 {
        color: #66e026;
        font-size: 1.1em;
    }

    /* fin encabezado */

    /* navtabs */

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

    /* fin navtabs */


    .tab-content {
        margin-top: 10px;
    }

    /* .tab-content .col-xs-12,
    .tab-content .col-sm-6 {
        padding-left: 0px;
        padding-right: 0px;
    } */

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

    #accordionTarifas .panel-heading {
        padding: 6px 15px !important;
    }

    .msg-1 {
        color: rgba(255, 255, 255, 1);
        background-color: #191C3A;
        padding: 20px;
        font-weight: 500;
        text-align: center;
        line-height: 1.2;
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
        /* background-color: #191C3A !important;
        border: solid 2px #191C3A !important; */
    }

    .zpp-acordeon .panel-heading .panel-title {
        color: #191C3A;
        text-align: left;
        padding-left: 8px;
    }

    .zpp-acordeon .panel-heading .panel-title a {
        text-decoration: none;
        /* font-size: calc(1rem + 0.5vw); */
        font-weight: 500;
    }

    .zpp-acordeon .panel-collapse .panel-body {
        /* background-color: #f5f5f5; */
    }

    .titulo {
        /* margin-bottom: 30px; */
    }

    .titulo h3 {
        font-weight: 700;
        text-transform: uppercase;
        color: #191C3A;
        /* text-shadow: 2px 2px 5px #4e4e4e; */
        text-align: center;
        margin: 25px;
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

    /* Media rules */
    @media(max-width:767px) {
        /* #como .imagen {
            height: 160px;
        } */

        /* #como .texto {
            height: 610px;
        } */

        #pago .imagen {
            height: 73vw;
        }

        #pago .texto {
            height: 610px;
        }

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
            /* width: 100%; */

        }

        .encabezado .encabezado-texto {
            height: 468px;
        }

        .encabezado .encabezado-texto p {
            font-size: 1.2em;
        }

        /* #como .texto {
            height: 400px !important;
        } */


        #pago .texto {
            height: 400px !important;
        }

        .texto .parrafo {
            font-size: 1.2em;
            margin: 8px;
        }

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
        .encabezado .encabezado-texto p {
            font-size: 1.3em;
        }

        .msg-1 {
            font-size: 1.3em;
            margin: auto;
        }
    }

    @media(min-width:1200px) {
        .encabezado .encabezado-texto p {
            font-size: 1.5em;
        }
    }

    /* Fin media rules */
</style>