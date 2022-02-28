@extends('welcome')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class="encabezado">
            <div>
                <h3>Sistemas de Gestión SDM</h3>
            </div>
        </div>
    </div>
    <div class="s2">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="txt-description">
                    <div class="parrafos">
                        <p>El SIG de la Secretaría de Movilidad, está conformado por cinco sistemas de gestión que tienen como propósito la mejora continua y el fortalecimiento del desempeño institucional de la Entidad, permitiendo asegurar una excelente gestión en temas como: Seguridad y Salud en el Trabajo, Gestión Ambiental, Gestión Antisoborno, Gestión de Calidad y Gestión de bienestar institucional,  esto en el marco del  cumplimiento de los requisitos establecidos para cada sistema en la normas ISO y bajo el estándar del Modelo Integrado de Planeación y Gestión (MIPG)".</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
                <div class="botones">

                    <div class="boton bs zoom">
                        <a href="https://www.movilidadbogota.gov.co/web/sistema_de_gestion_de_calidad">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 pr0">
                                    <div class="img-boton">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_mipg.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 pl0">
                                    <div class="txt-boton btn1">
                                        <div class="txt-enfasis">
                                            <span>Sistema de Gestión de Calidad</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="boton bs zoom">
                        <a href="https://www.movilidadbogota.gov.co/web/canal-denuncias-antisoborno">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 pr0">
                                    <div class="img-boton">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_no_al_soborno.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 pl0">
                                    <div class="txt-boton btn2">
                                        <div class="txt-enfasis">
                                            <span>Sistema de Gestión Antisoborno</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="boton bs zoom">
                        <a href="https://www.movilidadbogota.gov.co/web/SGSST">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 pr0">
                                    <div class="img-boton">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-12-2021/micrositio_sys_seguridad_y_salud.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 pl0">
                                    <div class="txt-boton btn3">
                                        <div class="txt-enfasis">
                                            <span>Sistema de Gestión de Seguridad y Salud en el Trabajo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="boton bs zoom">
                        <a href="">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 pr0">
                                    <div class="img-boton">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_gestion_ambiental.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 pl0">
                                    <div class="txt-boton btn4">
                                        <div class="txt-enfasis">
                                            <span>Sistema de Gestión Ambiental</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="boton bs zoom">
                        <a href="">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 pr0">
                                    <div class="img-boton">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_efr.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 pl0">
                                    <div class="txt-boton btn5">
                                        <div class="txt-enfasis">
                                            <span>Empresa Familiarmente Responsable</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
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
        font-size: 13px !important;
        line-height: 1 !important;
        max-width: 940px;
        font-family: 'Sora', sans-serif;

    }

    /* .seccion [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    } */

    .bs {
        -webkit-box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.16);
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

    .w-100 {
        width: 100%;
    }

    .s1 .encabezado {
        text-align: center;
        padding: 10px;
        border-bottom: solid 3px #4D541F;
    }

    .s1 .encabezado h3 {
        text-transform: uppercase;
        color: #4D541F;
        font-size: 1.8em;
        font-weight: 500;
    }

    .s2 .txt-description {
        padding: 3vw 0vw;
        text-align: justify;

    }

    .s2 .parrafos {
        border: solid 1px #55555510;
        padding: 5vw;
        background-color: #f5f5f5;
        border-radius: 24px;
    }

    .s2 .txt-description .parrafos p {
        color: #252525;
        line-height: 1.8;
font-weight: 300;
text-align: center;
font-size: 0.9em;

    }

    .s2 .botones {
        padding: 10px;
    }

    .boton {
        border: solid 1px #5D5D5D;
        border-radius: 19px;
        height: 400px;
        margin-bottom: 30px;
    }

    .boton a{
        color: #fff;
    }

    .boton .img-boton {
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 198px;
    }

    .boton .img-boton img {
        width: 160px;
    }

    .boton .txt-boton {
        height: 200px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 0px 0px 15px 15px;

    }

    .txt-enfasis {
        width: 80%;
        /* border: solid 1px #252525; */
        border-radius: 6px;

    }


    .btn1 {
        background-color: #6dcbd3;
        font-weight: 700;
        font-size: 1.2em;
    }

    .btn1 .txt-enfasis {
        background-color: #155179;
        padding: 15px;
    }

    .btn2 {
        background-color: #f3ac33;
        color: #fff;
        font-weight: 700;
        font-size: 1.2em;
    }

    .btn2 .txt-enfasis {
        background-color: #de1b19;
        padding: 15px;

    }

    .btn3 {
        background-color: #27A6CF;
        color: #fff;
        font-weight: 700;
        font-size: 1.2em;
    }

    .btn3 .txt-enfasis {
        background-color: #A25FA4;
        padding: 15px;
    }

    .btn4 {
        background-color: #a7cd00;
        color: #fff;
        font-weight: 700;
        font-size: 1.2em;
    }

    .btn4 .txt-enfasis {
        background-color: #4d4d4d;
        padding: 15px;
    }

    .btn5 {
        background-color: #dc6600;
        color: #fff;
        font-weight: 700;
        font-size: 1.2em;
    }

    .btn5 .txt-enfasis {
        background-color: #6d645e;
        padding: 15px;

    }
</style>
<style>
    @media(max-width:767px) {}

    @media(min-width:768px) {

        .s2 .txt-description {
            height: 850px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.3em;
        padding: 3rem;

        }

        .boton .img-boton img {
            width: 100px;
        }

        .boton {
            height: 130px;
            border-radius: 16px;
        }

        .boton .txt-boton {
            border-radius: 0px 15px 15px 0px;
            height: 128px;
            justify-content: center;

        }

        .boton .img-boton {
            height: 130px;
        }

        .pr0 {
            padding-right: 0px !important;
        }

        .pl0 {
            padding-left: 0px !important;

        }

        .s2 .botones {
            margin-top: 30px;
        }
        .s2 .parrafos{
        padding: 50px;
        }

    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->