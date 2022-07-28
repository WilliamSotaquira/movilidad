@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid bloomberg'>
    <div class='box-wrp'>
        <div class='box-head'>
            <div class='row'>
                <!-- xs -->
                <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                    <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2022/banners_banner2_320x300.png' alt='encabezado campaña de velocidad' title='encabezado campaña de velocidad'>
                </div>
                <!-- lg -->
                <div class='col-sm-12 hidden-xs'>
                    <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2022/banners_banner1_980x250.png' alt='encabezado campaña de velocidad' title='encabezado campaña de velocidad'>
                </div>
            </div>
        </div>
        <div class="box-video">
            <div class='video'>
                <div class='embed-responsive embed-responsive-16by9'>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/z_SvGBzfQpQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <style>
            .box-video {
                background-color: rgba(25, 25, 25, 1);

            }

            .box-video .video {
                width: 100%;
                margin: auto;
                padding: 15px 15px 0px 15px;
            }
        </style>
        <div class="box-parrafos">
            <p>La campaña de seguridad vial ‘Tus acciones salvan vidas, no excedas los límites de velocidad’, busca generar conciencia sobre las graves consecuencias de conducir por encima de los límites de velocidad establecidos.</p>
            <p>La campaña ilustra cómo el exceso de velocidad aumenta el riesgo de que ocurra un siniestro vial, y las consecuencias del mismo. Muestra el recorrido y desenlace de dos motociclistas que conducen en condiciones idénticas, con las mismas motos y las mismas habilidades de conducción, lo único que los diferencia es la velocidad a la que viajan en un corredor con límite de 50 km/h.</p>
            <p>Al momento de enfrentarse a un evento inesperado en la vía, el conductor que viaja a la velocidad establecida logra sortear la situación y llega a casa sano y salvo. Por el contrario, el motociclista que excede la velocidad no puede reaccionar a tiempo, choca con un separador y pierde la vida.</p>
            <p>Esta producción está dirigida principalmente a los usuarios de moto (conductor + acompañante), los cuales representan la mayor cantidad de muertes por siniestros viales. En los últimos 5 años, 874 motociclistas han fallecido en las vías de Bogotá.</p>

        </div>
        <div class="box-pieza">
            <div class='imagen'>
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2022/pieza3_pieza1_tw.png" target="_blank" rel="noopener noreferrer">
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2022/pieza3_pieza1_tw.png' alt='Cifras de actores viales fallecidos en Bogotá a corte de 30 de junio' title='Cifras de actores viales fallecidos en Bogotá a corte del 30 de junio'>
                </a>
            </div>
        </div>
        <style>
            .box-parrafos {
                background: rgb(25, 25, 25);
                background: -moz-linear-gradient(180deg, rgba(25, 25, 25, 1) 0%, rgba(25, 28, 58, 1) 100%, rgba(0, 0, 0, 1) 100%);
                background: -webkit-linear-gradient(180deg, rgba(25, 25, 25, 1) 0%, rgba(25, 28, 58, 1) 100%, rgba(0, 0, 0, 1) 100%);
                background: linear-gradient(180deg, rgba(25, 25, 25, 1) 0%, rgba(25, 28, 58, 1) 100%, rgba(0, 0, 0, 1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#191919", endColorstr="#000000", GradientType=1);
                padding: 45px 25px;
            }

            .box-parrafos p {
                /* font-size: 1em; */
                font-weight: 500;
                text-align: justify;
                line-height: 1.5;
                color: rgba(255, 255, 255, 1);
                margin: 8px;
            }
        </style>
        <div class="box-parrafos-2">
            <ul>
                <li><strong>¿Por qué está dirigido a los motociclistas?:</strong> En 2021, 4 de cada 10 víctimas fatales en siniestros de tránsito eran usuarios de motocicleta (188). De acuerdo con cifras preliminares, entre enero y junio de este año fallecieron 112 motociclistas en las vías.</li>
                <li><strong>¿Por qué hombres jóvenes?:</strong> En 2021, 8 de cada 10 motociclistas fallecidos eran hombres. El 70% de ellos tenían entre 19 y 33 años. </li>
                <li><strong>¿Por qué un choque contra objeto fijo?:</strong> El 30% de los motociclistas que perdieron la vida el año pasado tuvieron un siniestro contra un objeto fijo o auto volcamiento.</li>
                <li><strong>¿Por qué en horario nocturno?:</strong> 6 de cada 10 motociclistas fallecidos en 2021 perdieron la vida entre las 6:00 p.m. y 6:00 a.m. </li>
                <li><strong>¿Por qué el exceso de velocidad como principal factor de riesgo?:</strong> De acuerdo con un estudio de 2021 de la Universidad Johns Hopkins,  aliado de la Iniciativa Bloomberg para la Seguridad Vial Mundial (BIGRS), el 42% de los motociclistas exceden el límite de velocidad en Bogotá. </li>
            </ul>
            <p>La Secretaría de Movilidad hace un llamado a todos los conductores a no exceder los límites de velocidad y a cuidar la vida en la vía.</p>
        </div>
        <style>
            .box-parrafos-2 {
                background: rgb(25, 28, 58);
                background: -moz-linear-gradient(180deg, rgba(25, 28, 58, 1) 0%, rgba(25, 25, 25, 1) 100%);
                background: -webkit-linear-gradient(180deg, rgba(25, 28, 58, 1) 0%, rgba(25, 25, 25, 1) 100%);
                background: linear-gradient(180deg, rgba(25, 28, 58, 1) 0%, rgba(25, 25, 25, 1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#191c3a", endColorstr="#191919", GradientType=1);
                padding: 45px 25px;

            }
            .box-parrafos-2 ul li {
                margin: 8px;
                /* font-size: 1em; */
                font-weight: 500;
                text-align: justify;
                line-height: 1.5;
                color: rgba(255, 255, 255, 1);
                margin: 8px;
            }
            .box-parrafos-2 p {
                /* font-size: 1em; */
                font-weight: 500;
                text-align: justify;
                line-height: 1.5;
                color: rgba(255, 255, 255, 1);
                margin: 20px 8px;
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

    .bloomberg {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.5;
        color: rgba(25, 25, 25, 1);
        margin: 8px;
    }

    /*
    .bloomberg [class*='col-'] {
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
        .box-video .video {
                width: 75%;
                margin: auto;
                padding: 30px 30px 0px 30px;
            }
    }
    @media(min-width:992px){}
    @media(min-width:1200px){}
</style>
<!-- End Styles -->