@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid sinCarro'>
    <div class='box-wrp'>
        <div class='box-head'>
            <div class='logo'>
                <div class='row'>
                <!-- xs -->
                    <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-09-2022/dscsm_recurso_9.png' alt='logo Día sin carro y sin moto en Bogotá - 2022' title='logo Día sin carro y sin moto en Bogotá - 2022'>
                        </div>
                        <!-- lg -->
                        <div class='col-sm-12 hidden-xs'>
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-09-2022/dscsm_recurso_10.png' alt='logo Día sin carro y sin moto en Bogotá - 2022' title='logo Día sin carro y sin moto en Bogotá - 2022'>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .box-wrp .box-head {
                /* height: 200px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 2%;
            }
        </style>

        <hr>
        <div class="box-info">
            <div class='imagen'>
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/dscsm_recurso_12.png' alt='infografía' title='infografía'>
            </div>
        </div>
        <hr>
        <div class="box-botones">
            <a class="btn btn-dscsm" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-09-2022/bp_-_dia_sin_carro_ni_moto_-_version_2.docx" download>Más información</a>
            <a class="btn btn-dscsm" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2022/dscsm_recurso_12.png" download>Descargar infografía</a>
        </div>
        <style>
            .box-wrp .box-botones {
                display: grid;
                gap: 10px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
            }

            .box-wrp .box-botones a{
                display: inline-block;
                background-color: rgba(25, 28, 58, 1) !important;
                color: rgba(255, 255, 255, 1);
                font-size: 16px;
                font-weight: 500;
                text-align: center;
                line-height: 1.2;
                padding: 15px 30px;
            }

            .box-wrp .box-botones a:hover{
                background-color: rgba(190, 208, 0, 1) !important;
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
        margin-top: -40px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .sinCarro {
        max-width: 980px;
        margin: auto;
        word-break: break-all;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.3;
        color: rgba(25, 25, 25, 1);
    }

    /*
    .sinCarro [class*='col-'] {
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
    @media(max-width:767px){}
    @media(min-width:768px){

        .box-wrp .box-botones {
                display: grid;
                gap: 30px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;
                padding: 30px;
            }
    }
    @media(min-width:992px){}
    @media(min-width:1200px){}
</style>
<!-- End Styles -->
