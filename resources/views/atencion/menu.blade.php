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
            <h3>
                Atención y Servicio a la Ciudadanía
            </h3>
        </div>
    </div>
    <div class="s2">
        <div class='row'>
            <div class='col-xs-12 col-sm-10 col-sm-offset-1'>
                <div class='embed-responsive embed-responsive-16by9 video-tys'>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pQ15Y1mH29M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- <div class='row'>
            <div class='col-xs-12 col-sm-8 col-sm-offset-2'>
                <div class='text-center'>
                    <video controls='' id="video-tys">
                        <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-08-2021/video_menu_transparencia.mp4' type='video/mp4'>
                </div>
            </div>
        </div> -->
    </div>

    <div class="s3">
        <p>La Secretaría Distrital de Movilidad como líder del sector, formula políticas e implementa estrategias de movilidad multimodal, incluyente y sostenible que contribuyen a la equidad y mejoran la calidad de vida de la ciudadanía y la seguridad de los actores viales, potenciando la productividad, la competitividad y la integración de Bogotá y la región, con una gestión íntegra y transparente.</p>
    </div>
    <div class="s4">
        <div class="row">

            <div class="recuadro zoom col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-11-2021/tramitesservicios.webp" alt="">
                <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/tramites_y_servicios" target="_blank" rel="noopener noreferrer" tabindex="1">Trámites y servicios</a></h3>
            </div>
            <div class="recuadro zoom col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-11-2021/puntoscanales.webp" alt="">
                <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion" target="_blank" rel="noopener noreferrer" tabindex="2">Puntos y canales de atención a la ciudadanía</a></h3>
            </div>
            <div class="recuadro zoom col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/pqrsd.webp" alt="">
                <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/sdqs" target="_blank" rel="noopener noreferrer" tabindex="3">Peticiones, quejas, reclamos y denuncias</a></h3>
            </div>
            <div class="recuadro zoom col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-11-2021/informacion_publica.webp" alt="">
                <h3 class="titulo"><a href="" target="_blank" rel="noopener noreferrer" tabindex="4">Consultas en línea</a></h3>
            </div>

            <div class="recuadro zoom col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/preguntasfrecuentes.webp" alt="">
                <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/preguntas_frecuentes" target="_blank" rel="noopener noreferrer" tabindex="5">Preguntas frecuentes</a></h3>
            </div>
            <div class="recuadro zoom col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/declaratoriapatios.webp" alt="">
                <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/ley-1730-de-2014" target="_blank" rel="noopener noreferrer" tabindex="6">Vehículos en declaratoria de abandono <br> Ley 1730 de 2014</a></h3>
            </div>
            <div class="recuadro zoom col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/manualserviciociudadania.webp" alt="">
                <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/defensorciudadano" target="_blank" rel="noopener noreferrer" tabindex="7">Defensor del Ciudadano</a></h3>
            </div>
            <div class="recuadro zoom col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/cartacompromiso.webp" alt="">
                <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/trato-digno" target="_blank" rel="noopener noreferrer" tabindex="8">Carta de Compromiso al Ciudadano</a></h3>
            </div>

            <div class="recuadro zoom col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-12-2021/cartacompromiso_a.webp" alt="">
                <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-01-2021/pm04-m01-manual-de-servicio-a-la-ciudadania-v5.0-24122020.pdf" target="_blank" rel="noopener noreferrer" tabindex="9">Manual de Servicio a la ciudadanía</a></h3>
            </div>
            <div class="recuadro zoom col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/anticorrupcion.webp" alt="">
                <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/canal_anticorrupcion" target="_blank" rel="noopener noreferrer" tabindex="10">Canal de denuncias de Actos de Corrupción</a></h3>
            </div>
            <div class="recuadro zoom col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/informacionpublica.webp" alt="">
                <h3 class="titulo"><a href="https://www.movilidadbogota.gov.co/web/informacion-publica" target="_blank" rel="noopener noreferrer" tabindex="11">Información pública</a></h3>
            </div>
            <div class="recuadro zoom col-xs-6 col-sm-4 col-md-3">
                <img class="img-fluid" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2021/sim_0.webp" alt="">
                <h3 class="titulo"><a href="https://www.ventanillamovilidad.com.co/" target="_blank" rel="noopener noreferrer" tabindex="12">Ventanilla Única de Servicios</a></h3>
            </div>

        </div>
    </div>
    <hr>
    <div class="mujer">
        <a href="http://rutadeatencion.sdmujer.gov.co/index.html">
            <div class='row'>
                <div class='col-xs-12 col-sm-6 col-md-6'>
                    <div class="img-mujer">
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-03-2022/ruta_de_atencion_a_mujeres_victimas_de_violencias_y_en_riesgo_de_feminicidio.webp' alt='Logo Ruta de Atención a mujeres victimas de violencia y en riesgo de feminicidio' title='Logo Ruta de Atención a mujeres victimas de violencia y en riesgo de feminicidio'>
                    </div>
                    <div class="clic-icon">
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-03-2022/clic.png' alt='Clic aquí par ir a la Ruta Única de Atención a mujeres víctimas de violencias' title='Clic aquí par ir a la Ruta Única de Atención a mujeres víctimas de violencias'>
                    </div>
                </div>
                <div class='col-xs-12 col-sm-6 col-md-6'>
                    <div class="parrafo">
                        <p>Bogotá cuenta con la Ruta Única de Atención a mujeres víctimas de violencias, a través de la cual las mujeres víctimas y la ciudadanía en general, pueden informarse sobre a dónde acudir en casos de violencias de género, cómo y dónde solicitar orientación, atención en salud, medidas de protección o cómo acceder efectivamente a la justicia.</p>
                        <p><small>(Acuerdo 676 de 2017 del Concejo de Bogotá)</small></p>
                    </div>
                </div>
            </div>
        </a>
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
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        max-width: 980px;
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
        border-bottom: solid 3px #151515;
        text-transform: uppercase;
        font-weight: 700;
        color: #151515;
    }

    .s2 {
        /* width: 100%;
        margin: auto; */
        padding-top: 40px;
        padding-bottom: 60px;
    }

    .video-tys {
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
    }


    .s3 {
        padding: 0px 25px;
    }

    .s3 p {
        overflow: auto;
        text-align: center;
        /* border-top: solid 10px #66e026;
        border-bottom: solid 3px #66e026; */
        padding: 0px 55px 60px 55px;
        color: #151515;
        font-size: 18px;
        text-align: justify;
        font-weight: normal;
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

    .s5 .logo img {
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

    .mujer:hover .img-mujer {
        background-color: #ff4a9b;
    }

    .mujer a {
        color: #151515;
        text-decoration: none;
    }

    .mujer a {
        color: #000;
        text-decoration: none;
    }

    .mujer .img-mujer {
        height: 280px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        justify-items: center;
        background-color: #ac4a9b;
        padding: 15px;
    }

    .mujer p {
        padding: 25px;
        font-size: 16px;
        font-weight: normal;
        text-align: justify;
        line-height: 1.4;
        color: #000;

    }

    .clic-icon {
        position: absolute;
        margin-top: -70px;
        right: 50px;
    }

    .mujer .clic-icon img {
        
        width: 50px;
        transition: 0.5s ease;
        -moz-transition: 0.5s ease;
        /* Firefox */
        -webkit-transition: 0.5s ease;
        /* Chrome - Safari */
        -o-transition: 0.5s ease;
        /* Opera */
        -ms-transition: 0.5s ease;
    }

    .mujer:hover .clic-icon img {
        transform: scale(1.5);
        -moz-transform: scale(1.5);
        /* Firefox */
        -webkit-transform: scale(1.5);
        /* Chrome - Safari */
        -o-transform: scale(1.5);
        /* Opera */
        -ms-transform: scale(1.5);

    }

    /* IE9 */
</style>
<style>
    @media(max-width:767px) {}

    @media(min-width:768px) {}

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
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
        background-color: rgba(255, 255, 255, 0.8);
        margin: 0px 10px;
        right: 0px;
        left: 0px;
        justify-content: center;
        align-items: center;
    }

    .recuadro h3 {
        font-family: Montserrat;
        font-weight: 500;
        color: #0066cd;
    }

    .recuadro a {
        font-weight: 700;
        color: #151515;
        font-size: 16px;
        text-align: center;
        line-height: 1.2;
        padding: 10px;
        background-color: rgba(102, 224, 38, 1);
        text-decoration: none !important;
    }

    .recuadro a:focus {
        background-color: rgba(25, 28, 58, 1);
        color: rgba(102, 224, 38, 1);
    }

    .recuadro:hover a {
        font-weight: 700;
        color: #252525;
        font-size: 16px;
        text-align: center;
        line-height: 1;
        background-color: transparent;
        padding: 9px 15px;
        text-decoration: none;
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
        /* IE9 */
    }
</style>