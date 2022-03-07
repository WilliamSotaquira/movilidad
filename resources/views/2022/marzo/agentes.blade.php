@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='encabezado'>
        <div class='row'>
            <div class='col-xs-12 col-sm-6 col-md-6'>
                <div class="titulo">
                    <h3><span class="txt-enf-enc1">Agentes de</span><br> Tránsito Civiles</h3>
                    <span class="triangulo"></span>
                </div>
                <div class="franja1">
                    <p>Llegamos para cuidarte</p>
                </div>
            </div>
            <div class='col-xs-12 col-sm-6 col-md-6 img-encabezado'>
            </div>
        </div>
    </div>
    <div class="s1">
        <div class="row atc_enc_res">
            <div class="col-xs-12 col-sm-5">
                <div class="res_txt">
                    <p class="parrafo">Los <strong>Agentes de tránsito civiles son empleados públicos investidos de autoridad como Agentes de Tránsito y Transporte,</strong> vinculados directamente a la Secretaría Distrital de Movilidad. Ellos velarán por el orden del flujo vehicular y peatonal en las vías públicas mediante funciones preventivas, de asistencia técnica, regulación y control de las normas de tránsito.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-7">
                <div class="res_video">
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/VKaHaeY1n0w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Estilo se la seccion de encabezado */
    .seccion {
        padding: 0px !important;
    }

    .encabezado {
        background: rgba(31, 34, 62, 1);
    }
    .encabezado .fila {
        margin: 0px;
    }

    .encabezado .titulo {
        position: relative;
        margin: 0px;
    }

    .encabezado .titulo h3 {
        color: rgba(255, 255, 255, 1);
        margin: 0px;
        font-family: 'Montserrat', sans-serif;
        font-size: 30px;
        font-weight: 900;
        text-align: center;
        line-height: 1;
        text-transform: uppercase;
        padding: 35px;
    }

    .encabezado .titulo .txt-enf-enc1 {
        font-size: 42px;
    }

    .encabezado .franja1 {
        background: rgba(190, 208, 0, 1);
        margin: 15px;
    }

    .encabezado .franja1 p {
        text-align: center;
        padding: 5px;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        text-transform: uppercase;
        font-size: 20px;
        margin: 0px;
        letter-spacing: 1.2;
    }

    .encabezado .img-encabezado {
        height: 200px;
        background: no-repeat rgba(31, 34, 62, 1) url('/images/agente/img-enc-agentes-1.webp');
        background-size: cover;

    }

    .triangulo {
        width: 0;
        height: 0;
        border-left: 30px solid rgba(31, 34, 62, 1);
        border-top: 30px solid transparent;
        border-bottom: 30px solid transparent;
        position: absolute;
        right: -30px;
        top: calc(50% - 10px);
        z-index: 10;
    }
</style>
<style>
    .s1 {
        margin: 30px;
    }

    .s1 .atc_enc_res {
        /* padding-left: 15px !important;
            padding-right: 15px !important; */
    }

    .atc_enc_res .res_txt {
        height: 300px;
        padding: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        justify-items: center;
        text-align: initial;
    }

    .atc_enc_res .res_txt p {
        text-align: justify;
        color: #1f223e;
        font-size: 15px;
    }

    .res_video {
        height: 300px;
        display: flex;
        justify-content: center;
        justify-items: center;
        flex-direction: column;
        padding: 10px;
    }

    @media(max-width:767px) {}

    @media(min-width:768px) {}

    @media(min-width:992px) {}

    @media(min-width:1200px) {
        .s1 .atc_enc_res .res_txt {
            padding: 2vw;
        }

    }
</style>
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
        max-width: 940px;
        font-family: 'Montserrat', sans-serif;
        font-size: 13px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
    }


    .w-100 {
        width: 100%;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->