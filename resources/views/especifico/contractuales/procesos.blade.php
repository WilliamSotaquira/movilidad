@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Sogar -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Sogar -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion body-pdi'>
    <div class="header-pdi">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 visible-xs-12 visible-xs-block"><img alt="Proyectos de inversión: Conoce y realiza seguimiento a los proyectos de la Secretaria de Movilidad. Brindamos información para el seguimiento y consulta de toda la ciudadanía." class="img-pdi img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2021/bannerppal_2.png" srcset="" title="Proyectos de inversión: Conoce y realiza seguimiento a los proyectos de la Secretaria de Movilidad. Brindamos información para el seguimiento y consulta de toda la ciudadanía."></div>
                <div class="col-sm-12 hidden-xs"><img alt="Proyectos de inversión: Conoce y realiza seguimiento a los proyectos de la Secretaria de Movilidad. Brindamos información para el seguimiento y consulta de toda la ciudadanía." class="img-pdi img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-10-2021/copia_de_ponle_ojo_pieza_2_1_0.jpg" srcset="" style="width: 100%;" title="Proyectos de inversión: Conoce y realiza seguimiento a los proyectos de la Secretaria de Movilidad. Brindamos información para el seguimiento y consulta de toda la ciudadanía."></div>
            </div>
        </div>
    </div>
    <div class="wrapper-pdi">
        <div class="container-fluid">
            <div class="row botones">

                <div class='col-xs-12 col-sm-4 col-md-4'>
                    <a href="https://www.movilidadbogota.gov.co/web/semaforizacion">
                        <div class="btn-proceso btn1 zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h3>Semaforización</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class='col-xs-12 col-sm-4 col-md-4'>
                    <a href="https://www.movilidadbogota.gov.co/web/centro_de_operaciones_de_seguridad">
                        <div class="btn-proceso btn4 zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h3>Monitoreo de la Seguridad Informática - SOC</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class='col-xs-12 col-sm-4 col-md-4'>
                    <a href="https://www.movilidadbogota.gov.co/web/operador_tecnologico">
                        <div class="btn-proceso btn5 zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h3>Gestión, Administración y Operación de la Plataforma TIC</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class='col-xs-12 col-sm-4 col-md-4'>
                    <a href="">
                        <div class="btn-proceso btn6 zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h3>Ejecución de acciones para mejorar las Condiciones de Tránsito</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class='col-xs-12 col-sm-4 col-md-4'>
                    <a href="">
                        <div class="btn-proceso btn2 zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h3>Concesión de Grúa y Parqueo</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class='col-xs-12 col-sm-4 col-md-4'>
                    <a href="">
                        <div class="btn-proceso btn3 zoom">
                            <div class="fondo-proceso">
                                <div class="titulo">
                                    <h3>Solución tecnológica para la gestión en vía de la Autoridad de Tránsito</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <style>
                    .wrapper-pdi .btn-proceso {
                        height: 450px;
                        display: flex;
                        flex-direction: column;
                        justify-content: end;
                        align-items: center;
                        border-radius: 5px;
                        -webkit-box-shadow: 0px 0px 19px 0px rgba(0, 0, 0, 0.3);
                        box-shadow: 0px 0px 19px 0px rgba(0, 0, 0, 0.3);
                        margin: 5%;
                        transition: 0.8s;
                        transition-timing-function: linear;

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
                        transform: scale(1.01);
                        -moz-transform: scale(1.01);
                        /* Firefox */
                        -webkit-transform: scale(1.01);
                        /* Chrome - Safari */
                        -o-transform: scale(1.01);
                        /* Opera */
                        -ms-transform: scale(1.01);

                    }

                    /* IE9 */
                    .wrapper-pdi .btn1 {
                        background: rgb(40, 40, 92);
                        background: linear-gradient(45deg, rgba(40, 40, 92, 1) 0%, rgba(255, 255, 255, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-01-2022/contractual_1.png');
                        background-size: cover;
                        background-position: 90% 0%;
                    }

                    .wrapper-pdi .btn2 {
                        background: rgb(40, 40, 92);
                        background: linear-gradient(45deg, rgba(40, 40, 92, 1) 0%, rgba(255, 255, 255, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-01-2022/parqueo1.webp');
                        background-size: cover;
                        background-position: 25% 10%;
                    }

                    .wrapper-pdi .btn3 {
                        background: rgb(40, 40, 92);
                        background: linear-gradient(45deg, rgba(40, 40, 92, 1) 0%, rgba(255, 255, 255, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-01-2022/agentes_1.webp');
                        background-size: cover;
                        background-position: 31% 0%;
                    }

                    .wrapper-pdi .btn4 {
                        background: rgb(40, 40, 92);
                        background: linear-gradient(45deg, rgba(40, 40, 92, 1) 0%, rgba(255, 255, 255, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2022/soc_1.webp');
                        background-size: cover;
                        background-position: 45% 0%;
                    }

                    .wrapper-pdi .btn5 {
                        background: rgb(40, 40, 92);
                        background: linear-gradient(45deg, rgba(40, 40, 92, 1) 0%, rgba(255, 255, 255, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2022/operador1.webp');
                        background-size: cover;
                        background-position: 15% 0%;
                    }

                    .wrapper-pdi .btn6 {
                        background: rgb(40, 40, 92);
                        background: linear-gradient(45deg, rgba(40, 40, 92, 1) 0%, rgba(255, 255, 255, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2022/condiciones.webp');
                        background-size: cover;
                        background-position: 15% 0%;
                    }


                    .wrapper-pdi .titulo {
                        height: 150px;
                        display: flex;
                        flex-direction: column;
                        justify-content: end;
                        align-items: center;
                        padding: 5px;
                    }

                    .wrapper-pdi .btn-proceso h3 {
                        margin: 10px;
                        padding: 8px;
                        color: #fff;
                        border-bottom: solid 2px #f5ae33;
                        border-top: solid 2px #f5ae33;
                        text-transform: uppercase;
                        font-size: 18px;
                        font-weight: 700;
                        font-family: 'Sora', sans-serif;
                        transition: 0.3s;
                        transition-timing-function: linear;

                    }

                    .wrapper-pdi .btn-proceso:hover {
                        background: linear-gradient(45deg, rgba(243, 174, 54, 1) 30%, rgba(243, 174, 54, 0.4) 100%);
                        justify-content: center;
                    }

                    .wrapper-pdi .btn-proceso:hover h3 {
                        color: #151515;
                        border-bottom: solid 2px #06125A;
                        border-top: solid 2px #06125A;
                    }

                    .botones a {
                        text-decoration: none !important;
                    }
                </style>
                <!-- <div class="col-xs-12 col-sm-4 col-pdi">
                    <div class="thumbnail zoom"><a class="a-pdi" href="https://www.movilidadbogota.gov.co/web/semaforizacion"><img alt="Proyecto de semaforización" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2021/1_ponle_ojo_pieza_3semaforizacion.png" title="Proyecto de semaforización"> </a>
                        <div class="caption">
                            <p class="p-card"><a class="a-pdi" href="https://www.movilidadbogota.gov.co/web/semaforizacion">Semaforización</a></p>
                        </div> <a class="a-pdi" href="https://www.movilidadbogota.gov.co/web/semaforizacion"> </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-pdi">
                    <div class="thumbnail zoom"><a class="a-pdi" href="#"><img alt="Proyecto de concesión grúa y parqueo" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2021/2_ponle_ojo_pieza_4grua.png" title="Proyecto de concesión grúa y parqueo"> </a>
                        <div class="caption">
                            <p class="p-card"><a class="a-pdi" href="#">CONCESIÓN DE GRÚA Y PARQUEO </a></p>
                        </div> <a class="a-pdi" href="#"> </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-pdi">
                    <div class="thumbnail zoom"><a class="a-pdi" href="#"><img alt="Proyecto de solución tecnológica para la gestión en vía de la autoridad de tránsito" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2021/3_ponle_ojo_pieza_5tecnologia.png" title="Proyecto de solución tecnológica para la gestión en vía de la autoridad de tránsito"> </a>
                        <div class="caption">
                            <p class="p-card"><a class="a-pdi" href="#">SOLUCIÓN TECNOLÓGICA PARA LA GESTIÓN EN VÍA DE LA AUTORIDAD DE TRÁNSITO</a></p>
                        </div> <a class="a-pdi" href="#"> </a>
                    </div>
                </div> -->
                <!-- <div class="col-xs-12 col-sm-4 col-pdi">
                    <div class="thumbnail zoom"><a class="a-pdi" href="#"><img alt="Proyecto de ejecución de acciones para mejorar las condiciones de tránsito" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2021/4_ponle_ojo_pieza_6acciones.png" title="Proyecto de ejecución de acciones para mejorar las condiciones de tránsito"> </a>
                        <div class="caption">
                            <p class="p-card"><a class="a-pdi" href="#">EJECUCIÓN DE ACCIONES PARA MEJORAR LAS CONDICIONES DE TRÁNSITO</a></p>
                        </div> <a class="a-pdi" href="#"> </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-pdi">
                    <div class="thumbnail zoom"><a class="a-pdi" href="#"><img alt="Proyecto de monitoreo de la seguridad informática - SOC" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2021/5_ponle_ojo_pieza_7monitoreo.png" title="Proyecto de monitoreo de la seguridad informática - SOC"> </a>
                        <div class="caption">
                            <p class="p-card"><a class="a-pdi" href="#">MONITOREO DE LA SEGURIDAD INFORMÁTICA - SOC</a></p>
                        </div> <a class="a-pdi" href="#"> </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-pdi">
                    <div class="thumbnail zoom"><a class="a-pdi" href="#"><img alt="Proyecto de gestión, administración y operación de la plataforma TIC" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2021/6_ponle_ojo_pieza_8gestion.png" title="Proyecto de gestión, administración y operación de la plataforma TIC"> </a>
                        <div class="caption">
                            <p class="p-card"><a class="a-pdi" href="#">GESTIÓN, ADMINISTRACIÓN Y OPERACIÓN DE LA PLATAFORMA TIC</a></p>
                        </div> <a class="a-pdi" href="#"> </a>
                    </div>
                </div> -->
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
        font-size: 16px !important;
        line-height: 1 !important;
        max-width: 940px;
    }

    .seccion [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }

    .w-100 {
        width: 100%;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->







<style type="text/css">
    .body-pdi {
        margin: 0%;
        padding: 0%;
        /* background: rgb(164, 162, 162); */
    }

    .container-fluid {
        padding: 0px;
    }

    .header-pdi {
        width: 100%;
        min-width: 100%;
        margin-top: -15px;
    }

    .img-pdi {
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
    }

    .col-pdi {
        padding: 0rem 1rem 1rem 1rem;
    }

    .thumbnail {
        /* padding: 0rem !important; */
        border-radius: 5px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);

    }

    .thumbnail a img {
        padding: 0rem !important;
        border-radius: 5px 5px 0px 0px;
    }

    .a-pdi {
        /* display: flex; */
        align-items: center;
        color: #ffffffff;
        font-size: 1rem;
        font-weight: 500;
        margin: auto;
        /* text-align: center; */
    }

    .a-pdi:hover {
        text-decoration: none;
        color: #f5ae33ff;
    }

    .a-pdi:focus {
        text-decoration: none;
        color: #f5ae33;
    }

    .caption {
        display: flex;
        align-items: center;
        /* text-align: center; */
    }

    .caption p {
        font-size: 0.8rem !important;
        word-wrap: break-word;
        margin: 1rem;
        text-align: center;
        font-weight: 800;
        color: #06125A !important;
        width: 100%;
    }



    .wrapper-pdi {
        padding: 30px;
    }

    .wrapper-pdi .thumbnail {
        background-color: #061259;
        border-radius: 6px;
    }

    .wrapper-pdi .p-card {
        text-align: center;
        color: #06125A !important;
        text-transform: uppercase;
    }

    .wrapper-pdi .p-card p,
    .wrapper-pdi .p-card a {
        font-weight: 700;
        font-size: calc(1rem + 1vw);
    }

    .wrapper-pdi .p-card {
        border-top: solid 1px #f5ae33;
        border-bottom: solid 1px #f5ae33;
        padding: 5px;
    }



    /*------------------------------------------------------------------------------------------------------ Fin Contenido editable --------------------------------------------------------------------------------- */
</style>
<style>
    @media(max-width:767px) {}

    @media(min-width:768px) {
        .thumbnail .caption {
            height: 200px;
        }


        .wrapper-pdi .thumbnail {
            margin: 15px;
        }

        .wrapper-pdi .p-card p,
        .wrapper-pdi .p-card a {
            font-size: 2rem;
        }

        .wrapper-pdi {
            padding: 20px 82px;
        }

        .img-pdi {
            width: 80% !important;
            margin: auto;
        }


        .wrapper-pdi .btn-proceso {
            height: 360px;
        }



    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
