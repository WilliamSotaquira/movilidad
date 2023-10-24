@extends('welcome')
@section('title','semanaBici')
@section('contenido')

<!-- Set semanaBici -->
<div class="region region-content">



    <!-- Google fonts - Montserrat  -->
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>

    <div class="set-wrapper semanaBici">
        <!-- Component box title-center -->
        <div class="box-title-center">
            <picture class="logo logo-ppal">
                <source media="(min-width: 768px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-09-2023/recurso_1.png">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-09-2023/recurso_2.png" alt="logo xvi semana de la bici">
            </picture>

        </div>
        <style>
            .set-wrapper .box-title-center {
                grid-area: box-title-center;
                /* background-color: #0D005E; */
                margin-top: 32px;

            }

            .box-title-center .logo-ppal {
                grid-area: logo-ppal;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .box-title-center .logo img {
                width: 100%;
                padding: 2em 2em;
            }

            @media(max-width:767px) {
                .box-title-center .logo img {
                    width: 100%;
                    max-width: 350px;
                }
            }


            @media(min-width:768px) {
                .box-title-center .logo img {

                    padding: 2em 10em;
                }
            }
        </style>


        <!-- Sección box bloque-2 -->
        <div class="box box-bloque-2">
            <p class="paragraph ph-type-1 ph-id-1">
                Celebra la XVI Semana de la Bici cuidándote en la vía y disfrutando de todas las actividades que tenemos preparadas para ti. Consulta nuestra agenda y prográmate.
            </p>
        </div>
        <style>
            .set-wrapper .box-bloque-2 {
                grid-area: box-bloque-2;
                margin-top: 4em;
                padding-left: 1em;
                padding-right: 1em;
            }

            @media(min-width:768px) {
                .set-wrapper .box-bloque-2 {
                    grid-area: box-bloque-;
                    padding-left: 4em;
                    padding-right: 4em;
                }
            }

            .box-bloque-2 p {
                font-family: 'Montserrat', sans-serif;
                font-size: 18px;
                font-weight: 400;
                text-align: center;
                line-height: 1.4;
                color: #ffffff;
            }
        </style>

        <!-- Sección box bloque-1 -->
        <div class="box box-bloque-1">
            <div class="video video-ppal video-16by9">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width='100%' src='https://www.youtube.com/embed/-1AYEqXhPJA' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <style>
            .set-wrapper .box-bloque-1 {
                grid-area: box-bloque-1;
                margin-top: 4em;
            }

            @media(min-width:768px) {
                .set-wrapper .box-bloque-1 {
                    padding-left: 4em;
                    padding-right: 4em;
                }
            }
        </style>

        <!-- Sección box bloque-5 -->
        <div class="box box-bloque-5">
            <p class="paragraph ph-type-1 ph-id-1">
                La Semana de la Bici es un evento anual que te invita a rodar por toda la ciudad. Corre la voz y cuéntale a todas y todos que estamos de fiesta

            </p>
        </div>
        <style>
            .set-wrapper .box-bloque-5 {
                grid-area: box-bloque-5;
                margin-top: 4em;
                padding-left: 1em;
                padding-right: 1em;
            }

            @media(min-width:768px) {
                .set-wrapper .box-bloque-5 {
                    grid-area: box-bloque-5;
                    padding-left: 4em;
                    padding-right: 4em;
                }
            }

            .box-bloque-5 p {
                font-family: 'Montserrat', sans-serif;
                font-size: 18px;
                font-weight: 400;
                text-align: center;
                line-height: 1.4;
                color: #ffffff;
            }
        </style>




        <!-- Sección box bloque-3 -->
        <div class="box box-bloque-3">

            <h3 class="title title-type-2 title-id-2 button">No te pierdas nuestra agenda académica </h3>
            <!-- PDF 4:3 aspect ratio -->
            <div class='set-pdf'>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe title="PDF semana de la bici 2023" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/23.09.25-agenda_actividades_semana_de_la_bici_baja.pdf' width='640' height='480' allow='autoplay'></iframe>
                </div>
            </div>
            <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-09-2023/23.09.25-agenda_actividades_semana_de_la_bici_baja.pdf" download="">Descargue aquí la agenda académica</a>
        </div>
        <style>
            .set-wrapper .box-bloque-3 {
                grid-area: box-bloque-3;
                margin-bottom: 32px;
            }

            .box-bloque-3 .title-type-2 {

                /* display: inline-block; */
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                padding: 10px;
                border: none;
                font-family: 'Montserrat', sans-serif;
                font-size: 32px;
                font-weight: 300;
                text-transform: uppercase;


                color: rgba(255, 255, 255, 1);
                text-decoration: normal;
                text-align: center;
                -o-text-overflow: clip;
                text-overflow: clip;
                /* white-space: pre; */
                text-shadow: 0 0 10px rgba(255, 255, 255, 1), 0 0 18px rgba(255, 255, 255, 1), 0 0 30px rgba(255, 255, 255, 1), 0 0 40px #ff00de, 0 0 70px #ff00de, 0 0 80px #ff00de, 0 0 100px #ff00de;
                -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
                -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
                -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
                transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
            }

            @media(min-width:768px) {
                .box-bloque-3 .title-type-2 {
                    margin-top: 72px;
                    margin-bottom: 46px;
                }
            }

            .box-bloque-3 .title-type-2:hover {
                text-shadow: 0 0 10px rgba(255, 255, 255, 1), 0 0 20px rgba(255, 255, 255, 1), 0 0 30px rgba(255, 255, 255, 1), 0 0 40px #00ffff, 0 0 70px #00ffff, 0 0 80px #00ffff, 0 0 100px #00ffff;
            }

            .box.box-bloque-3 a {
                color: #fff;
                padding-top: 32px;
            }

            .field-name-changed-date {
                color: #fff;
            }
        </style>


    </div>
    <style>
        body>br {
            visibility: hidden !important;
            position: absolute !important;
        }

        .region.region-content {
            background-color: #0D005E !important;
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-09-2023/fondo.png');
            background-position: top center;
            background-size: cover;
            background-repeat: no-repeat;
            margin-bottom: 0px !important;
            padding: 0px !important;
        }

        @media(min-width:768px) {
            .region.region-content {
                padding: 20px !important;
            }
        }

        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }
    </style>

</div>
<!-- Fin Set -->
