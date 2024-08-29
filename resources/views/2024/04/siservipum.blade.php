@extends('welcome')
@section('title','siservipum')
@section('contenido')

<!-- Set siservipum -->

<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>

<!-- Set siservipum --><!-- Google fonts - Montserrat  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<style>
    .set-wrapper.siservipum {
        font-size: 16px;
        font-weight: 500;
        text-align: left;
        line-height: 1.5;
        color: #091B23;
        font-family: 'Montserrat', sans-serif;
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
        /* IE9 */
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
<div class="set-wrapper siservipum">
    <!-- box b-1 -->
    <style>
        .set-wrapper .b-1 {
            grid-area: b-1;
            margin: 16px 0px;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            justify-content: center;
            justify-items: center;
            align-items: center;
        }

        @media(min-width:768px) {
            .set-wrapper .b-1 {
                grid-template-columns: 30% 70%;
                grid-template-rows: auto;
            }
        }

        .b-1 .cpnt-1 .logo img {
            max-width: 180px;
            margin: auto;
        }

        .b-1 .cpnt-2 .titulo-ppal h2 {
            text-align: center;
            margin: 0px;
            text-transform: uppercase;
            font-weight: 700;
            color: #091B23;
            font-size: 18px;
        }

        @media(min-width:768px) {
            .b-1 .cpnt-2 .titulo-ppal h2 {
                font-size: 2rem;
            }
        }
    </style>
    <div class="box b-1">
        <div class="cpnt cpnt-1">
            <div class="logo">
                <img src="https://www.movilidadbogota.gov.co/intranet/sites/default/files/2024-05-29/logo_siservipum_150_0.png" alt="logo siservipum" width="150" height="150">
            </div>
        </div>
        <div class="cpnt cpnt-2">
            <div class="titulo-ppal">
                <h2>
                    sindicato&nbsp;de&nbsp;servidores públicos de la secretaría&nbsp;distrital&nbsp;de&nbsp;movilidad - siservipum
                </h2>
            </div>
        </div>
    </div>
    <!-- box b-2 -->
    <style>
        .set-wrapper .b-2 {
            grid-area: b-2;
            margin: 16px 0px;
        }

        .b-2 .cpnt-1 .video-1 {
            width: 100%;
            max-width: 900px;
            height: auto;
            padding: 32px;
            margin: auto;
        }
    </style>
    <div class="box b-2">
        <div class="cpnt cpnt-1">
            <div class="video video-1">
                <video style="width:100%;" controls="">
                    <source src="https://www.movilidadbogota.gov.co/intranet/sites/default/files/2024-05-29/siservipum.mp4" type="video/mp4" poster="" preload="">
                </video>
            </div>
        </div>
    </div>
    <!-- box b-3 -->
    <style>
        .set-wrapper .b-3 {
            grid-area: b-3;
            margin: 16px 0px;
        }

        .b-3 .cpnt-1 .paragraph {
            text-align: justify;
            margin: 0px;
            padding: 8px;
            color: #091B23;
            font-size: 18px;
        }
    </style>
    <div class="box b-3">
        <div class="cpnt cpnt-1">
            <p class="paragraph ph-type-1">
                <strong>SISERVIPUM</strong> se define como una organización unitaria, pluralista, democrática y participativa, que tiene como propósito fundamental la reivindicación y promoción de los derechos humanos, laborales y sociales de los trabajadores de la Secretaría Distrital de Movilidad, así como el mejoramiento de su calidad de vida y de sus condiciones de trabajo que implica el pleno ejercicio de las libertades políticas sindicales y ciudadanas.
            </p>
        </div>
    </div>
    <!-- box b-4 -->
    <style>
        .set-wrapper .b-4 {
            grid-area: b-4;
            margin: 16px 0px;
        }

        .b-4 .cpnt-1 .title {
            text-align: center;
            margin: 0px;
            padding: 8px;
            color: #091B23;
            font-size: 28px;
            font-weight: 700;
        }

        .b-4 .cpnt-2 .botones {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            justify-content: center;
            justify-items: center;
            align-items: center;
        }

        @media(min-width:768px) {
            .b-4 .cpnt-2 .botones {
                grid-template-columns: repeat(5, 1fr);
                padding: 32px;
            }
        }

        .b-4 .cpnt-2 .boton {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            justify-content: center;
            justify-items: center;
            align-items: center;
            padding: 8px;
            border-radius: 8px;
        }

        .b-4 .cpnt-2 .boton img {
            width: 120px;
            height: 120px;
            object-fit: cover;
        }

        .b-4 .cpnt-2 .boton span {
            text-align: center;
            margin: 0px;
            padding: 8px;
            color: #595A5C;
            font-size: 20px;
            font-weight: 700;
        }
    </style>
    <div class="box b-4">
        <div class="cpnt cpnt-1">
            <div class="title">
                <h2 class="title title-type-2">
                    Son valores de la organización sindical
                </h2>
            </div>
        </div>
        <div class="cpnt cpnt-2">
            <div class="botones">
                <div class="boton zoom">
                    <img src="https://www.movilidadbogota.gov.co/intranet/sites/default/files/2024-05-29/solidaridad.png" alt="valores siservipum - Solidaridad" width="112" height="112"> <span>Solidaridad</span>
                </div>
                <div class="boton zoom">
                    <img src="https://www.movilidadbogota.gov.co/intranet/sites/default/files/2024-05-29/compromiso.png" alt="valores siservipum - Compromiso" width="112" height="112"> <span>Compromiso</span>
                </div>
                <div class="boton zoom">
                    <img src="https://www.movilidadbogota.gov.co/intranet/sites/default/files/2024-05-29/respeto.png" alt="valores siservipum - Respeto" width="112" height="112"> <span>Respeto</span>
                </div>
                <div class="boton zoom">
                    <img src="https://www.movilidadbogota.gov.co/intranet/sites/default/files/2024-05-29/honestidad.png" alt="valores siservipum - Honestidad" width="112" height="112"> <span>Honestidad</span>
                </div>
                <div class="boton zoom">
                    <img src="https://www.movilidadbogota.gov.co/intranet/sites/default/files/2024-05-29/transparencia.png" alt="valores siservipum - Transparencia" width="112" height="112"> <span>Transparencia</span>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Fin Set -->
