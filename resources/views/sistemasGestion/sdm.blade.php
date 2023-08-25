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
        <div class="encabezado">
            <div>
                <h3>Sistemas de Gestión de Secretaría Distrital de Movilidad</h3>
            </div>
        </div>
    </div>
    <div class="s2">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class='video_SGC'>
                    <video controls='' style='width: 100%;'>
                        <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-10-2022/sistemas_de_gestion.mp4' type='video/mp4'>
                </div>
                <div class="txt-description">
                    <div class="parrafos">
                        <p>En consistencia con el estándar del Modelo Integrado de Planeación y Gestión (MIPG), el Sistema Integrado de Gestión de la Secretaría de Movilidad está conformado por cinco sistemas que tienen como propósito la <strong>mejora continua y el fortalecimiento del desempeño institucional de la Entidad.</strong></p>
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
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-06-2022/propuesta_logo_sgc_op2_b.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 pl0">
                                    <div class="txt-boton btn1">
                                        <span>Sistema de Gestión de Calidad</span>
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
                                        <span>Sistema de Gestión Antisoborno</span>
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
                                        <span>Sistema de Gestión de Seguridad y Salud en el Trabajo</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="boton bs zoom">
                        <a href="https://www.movilidadbogota.gov.co/web/sistema_de_gestion_ambiental">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 pr0">
                                    <div class="img-boton">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_gestion_ambiental.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 pl0">
                                    <div class="txt-boton btn4">
                                        <span>Sistema de Gestión Ambiental</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="boton bs zoom">
                        <a href="https://www.movilidadbogota.gov.co/web/sistema_gestion_efr">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 pr0">
                                    <div class="img-boton">
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/micrositio_sys_efr.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 pl0">
                                    <div class="txt-boton btn5">
                                        <span>Empresa Familiarmente Responsable</span>
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
        max-width: 980px;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: normal;
        text-align: justify;
        line-height: 1.4;
        color: #252525s;

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
        text-align: center;

    }

    .s2 .parrafos {
        border: solid 1px #55555510;
        padding: 5vw;
        background-color: #f5f5f5;
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
    }



    .s2 .botones {
        padding: 0px;
    }



    .boton {
        border: solid 1px #fdfdfd;
        /* border-radius: 19px; */
        height: 400px;
        margin-bottom: 10px;
    }

    .boton a {
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
        padding: 20px;
        /* border-radius: 0px 0px 15px 15px; */

    }




    .btn1 {
        background-color: #6dcbd3;
        font-weight: 700;
        font-size: 1.2em;
        color: #252525;

    }



    .btn2 {
        background-color: #f3ac33;
        color: #252525;
        font-weight: 700;
        font-size: 1.2em;
    }


    .btn3 {
        background-color: #27A6CF;
        color: #252525;
        font-weight: 700;
        font-size: 1.2em;
    }


    .btn4 {
        background-color: #a7cd00;
        color: #252525;
        font-weight: 700;
        font-size: 1.2em;
    }


    .btn5 {
        background-color: #ff6600;
        color: #252525;
        font-weight: 700;
        font-size: 1.2em;
    }
</style>

<style>
    @media(max-width:767px) {}

    @media(min-width:768px) {

        .s2 .video_SGC{
            padding-top: 30px;
        }

        .s2 .txt-description {
            /* height: 850px; */
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.3em;
            padding: 30px 0px;

        }

        .boton .img-boton img {
            width: 100px;
        }

        .boton {
            height: 118px;
            /* border-radius: 16px; */
        }

        .boton .txt-boton {
            /* border-radius: 0px 15px 15px 0px; */
            height: 116px;
            justify-content: center;

        }

        .boton .img-boton {
            height: 118px;
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

        .s2 .parrafos {
            padding: 50px;
        }

    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
