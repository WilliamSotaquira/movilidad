@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Sogar -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Sogar -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class="enc-fondo">
            <div class='row'>
                <div class='col-xs-12 col-sm-6 col-md-6'>
                    <div class='enc-logo'>
                        <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/05-01-2022/bem_marca_obras_y_mov_sostenible.png' alt='Logo Bogotá está mejorando con nuevas obras y movilidad sostenible' title='Logo Bogotá está mejorando con nuevas obras y movilidad sostenible'>
                    </div>
                    <div class="enc-titulo">
                        <p><span class="enc-enfasis">BOLETÍN</span> MARTES 4 DE ENERO DE 2022</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="s2">
        <div class='row'>
            <div class='col-xs-12 col-sm-8 col-md-8'>
                <div class="titulo">
                    <h3><span class="txt-naranja">Mantenimientos al </span> <span class="txt-rojo">espacio público en la Calle 63 y en Avenida Villas</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-xs-12 col-sm-6 col-md-6'>
                <p>Para generar mejores condiciones de movilidad peatonal, el IDU inició esta semana varios trabajos de mantenimiento del espacio público, entre los que se destacan dos para tener en cuenta por parte de la ciudadanía: en la Calle 63, entre carreras 24 y 28, y en la Avenida Villas, entre las calles 129 y 134.</p>
                <p>Entre el 1 de enero y el 14 de febrero de 2022 y en horario de 24 horas, se cierra totalmente el andén costado sur, para rehabilitación del espacio público, así mismo el carril sur de la calzada sur para implementación de sendero peatonal en la Avenida Calle 63, entre Carrera 24 y Carrera 27.</p>
                <p>También se presenta cierre total del andén costado norte y del carril norte de la calzada norte para implementación de sendero peatonal en la Avenida Calle 63, entre Carrera 28 y Carrera 27.</p>
                <p>Se debe tener en cuenta también el cierre de carril occidental en la Avenida Calle 63 por Carrera 26 A (20 metros al sur), para actividades de cargue y descargue durante las 24 horas; así como el carril occidental en la Avenida Calle 63 por Carrera 27B, (20 metros al norte).</p>

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

    /* 
    .seccion [class*='col-'] {
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

    .txt-naranja {
        color: #f4b300;
    }

    .txt-rojo {
        color: #c91719;
    }

    .s1 {
        font-family: 'Sora', sans-serif;
    }

    .s1 .enc-logo {
        margin: 30px;
    }

    .s1 .enc-fondo {
        /* background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/05-01-2022/portada_0.webp'); */
        background: linear-gradient(45deg, black, #ffffff11), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/05-01-2022/portada_0.webp');
        background-position: center;
        background-size: cover;
    }

    .s1 .enc-titulo {
        color: #fff;
        text-align: center;
        border: solid 2px #f4b300;
        margin: 2vw 5vw;
        padding: 4vw;
    }

    .s1 .enc-titulo p {
        margin: 0px;
    }

    .s1 .enc-titulo .enc-enfasis {
        font-weight: 700;
    }

    .titulo {
        margin: 20px;
        border: solid 2px #f4b300;
        padding: 10px;
    }

    .titulo h3 {
        text-align: justifys;
        font-weight: 900;
        font-family: 'Sora', sans-serif;
        margin: 0px;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->