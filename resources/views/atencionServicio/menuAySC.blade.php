@extends('welcome')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class="encabezado">
            <h3>
                Atención y Servicio a la Ciudadanía
            </h3>
        </div>
    </div>
    <div class="s2">
        <div class='row'>
            <div class='col-xs-12 col-sm-8 col-sm-offset-2'>
                <div class='text-center'>
                    <video controls=''>
                        <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-08-2021/video_menu_transparencia.mp4' type='video/mp4'>
                </div>
            </div>
        </div>
    </div>
    <div class="s3">
        <p>La Secretaría Distrital de Movilidad como líder del sector, formula políticas e implementa estrategias de movilidad multimodal, incluyente y sostenible que contribuyen a la equidad y mejoran la calidad de vida de la ciudadanía y la seguridad de los actores viales, potenciando la productividad, la competitividad y la integración de Bogotá y la región, con una gestión íntegra y transparente.</p>
    </div>
    <div class="s4">
        <div class="row">

            <div class="recuadro col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-11-2021/tramitesservicios.webp" alt=""> 
                <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/entorno2" target="_blank" rel="noopener noreferrer" tabindex="1">Trámites y servicios</a></h3>
            </div>
            <div class="recuadro col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-11-2021/puntoscanales.webp" alt="">
                <h3 class="titulo"><a href="http://" target="_blank" rel="noopener noreferrer" tabindex="2">Puntos y canales de atención a la ciudadanía</a></h3>
            </div>
            <div class="recuadro col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/pqrsd.webp" alt="">
                <h3 class="titulo"><a href="http://" target="_blank" rel="noopener noreferrer" tabindex="3">Peticiones, quejas, reclamos y denuncias</a></h3>
            </div>
            <div class="recuadro col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-11-2021/informacion_publica.webp" alt="">
                <h3 class="titulo"><a href="http://" target="_blank" rel="noopener noreferrer" tabindex="4">Consultas en línea</a></h3>
            </div>

            <div class="recuadro col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/preguntasfrecuentes.webp" alt="">
                <h3 class="titulo"><a href="http://" target="_blank" rel="noopener noreferrer" tabindex="5">Preguntas frecuentes</a></h3>
            </div>
            <div class="recuadro col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/declaratoriapatios.webp" alt="">
                <h3 class="titulo"><a href="http://" target="_blank" rel="noopener noreferrer" tabindex="6">Vehículos en declaratoria de abandono <br> Ley 1730 de 2014</a></h3>
            </div>
            <div class="recuadro col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/manualserviciociudadania.webp" alt="">
                <h3 class="titulo"><a href="http://" target="_blank" rel="noopener noreferrer" tabindex="7">Defensor del Ciudadano</a></h3>
            </div>
            <div class="recuadro col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/cartacompromiso.webp" alt="">
                <h3 class="titulo"><a href="http://" target="_blank" rel="noopener noreferrer" tabindex="8">Carta de Compromiso al Ciudadano</a></h3>
            </div>

            <div class="recuadro col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-12-2021/cartacompromiso_a.webp" alt="">

                <h3 class="titulo"><a href="http://" target="_blank" rel="noopener noreferrer" tabindex="9">Manual de Servicio a la ciudadanía</a></h3>
            </div>
            <div class="recuadro col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/anticorrupcion.webp" alt="">
                <h3 class="titulo"><a href="http://" target="_blank" rel="noopener noreferrer" tabindex="10">Canal de denuncias de Actos de Corrupción</a></h3>
            </div>
            <div class="recuadro col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/informacionpublica.webp" alt="">
                <h3 class="titulo"><a href="http://" target="_blank" rel="noopener noreferrer" tabindex="11">Información pública</a></h3>
            </div>
            <div class="recuadro col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/sim_0.webp" alt="">
                <h3 class="titulo"><a href="http://" target="_blank" rel="noopener noreferrer" tabindex="12">Ventanilla Única de Servicios</a></h3>
            </div>

        </div>
    </div>
    <hr>
    <div class="s5">
        <div class="row">
            <div class="col-xs-12">
                <a href="https://www.gov.co/home/">
                    <div class="logo">
                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/gov.co-footer.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <hr>
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
    }

    /* .seccion [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    } */

    .w-100 {
        width: 100%;
    }

    .s1 .encabezado {
        text-align: center;
    }

    .s1 .encabezado h3 {
        padding-bottom: 25px;
        padding-top: 25px;
        border-bottom: solid 3px #191C3A;
        text-transform: uppercase;
        font-weight: 700;
    }

    .s2 video {
        width: 100%;
        margin: auto;
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .s3 {
        padding: 3%;
    }

    .s3 p {
        overflow: auto;
        text-align: center;
        border-top: solid 10px #66e026;
        border-bottom: solid 3px #66e026;
        padding: 15px;
        color: #191C3A;
        font-size: 16px;
        text-align: justify;
    }

    .s5 .logo {
        padding: 30px;
        background-color: #3366cc;
        height: 80px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        justify-items: center;
        margin: auto;
    }
    .s5 .logo img{
        width: 120px;
        margin: auto;
    }

    .s5 .parrafo-logo {
        padding: 4%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        justify-items: center;
        color: #191C3A;

    }
</style>
<style>
    @media(max-width:767px){}
    @media(min-width:768px){

    }
    @media(min-width:992px){}
    @media(min-width:1200px){}
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style>
    .recuadro {
        position: relative;
        min-height: 50px;
        background-color: #191C3A;
        background-clip: content-box;
        color: #fff;
        margin-bottom: 15px;
    }

    .recuadro:hover {
        position: relative;
        margin-bottom: 15px;
        min-height: 50px;
        background-color: #0066cd;
        background-clip: content-box;
        color: #fff;
    }

    .recuadro img {
        width: 100%;
        vertical-align: middle;
        border-style: none;
        box-shadow: 0px 0px 16px #00000050;
        }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .titulo {
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        align-items: end;
        justify-content: center;
        padding: 15px;
        right: 10px;
        left: 10px;
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .recuadro:hover .titulo {
        background-color: #191C3A;
        margin: 0px 15px;
        right: 0px;
        left: 0px;
        justify-content: center;
        align-items: center;
    }

    }

    .recuadro h3 {
        font-family: Montserrat;
        font-weight: 500;
        color: #0066cd;
    }

    .recuadro a {
        font-weight: 700;
        color: #fff;
        font-size: 16px;
        text-align: center;
        line-height: 1;
        background-color: #191C3ADE;
        padding: 5px;
    }

    .recuadro a:focus {
        color: #66e026;
    }

    .recuadro:hover a {
        font-weight: 700;
        color: #66e026;
        font-size: 16px;
        text-align: center;
        line-height: 1;
        background-color: #191C3A;
        padding: 9px 15px;
        text-decoration: none;
    }
</style>