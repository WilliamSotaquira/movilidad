@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->

<div class='container-fluid construyendo'>
    <div class='box-head'>
        <div class='box-logo'>
            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-04-2022/bogotaestamosconstruyendo-03.png' alt='Logo Bogotá esta mejorando' title='Logo Bogotá esta mejorando'>
        </div>
        <div class="box-video">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/-X-zxETwiUM?cc_load_policy=1&hl=es&modestbranding=1&color=white&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="box-descripcion">
            <p>La ciudad viene trabajando en un ambicioso plan que no solo busca recuperar la malla vial, ponerse al día en obras e infraestructura sino también invitar a los ciudadanos y actores viales a incorporar comportamientos que le permitan a la ciudad reducir la congestión y mejorar la calidad del aire.</p>
        </div>

    </div>
    <style>
        .box-head {
            display: grid;
            /* gap: 16px; */
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, auto);


            grid-template-areas: "box-logo box-logo"
                "box-video box-descripcion";
            background-color: rgba(228, 238, 187, 1);

        }

        .box-logo {
            grid-area: box-logo;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .box-logo img {
            max-width: 80%;
        }

        .box-video {
            grid-area: box-video;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;

            height: 278px;
        }

        .box-descripcion {
            grid-area: box-descripcion;
            padding: 20px 40px;

            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .box-descripcion p {
            font-size: 1.1em;
            font-weight: 500;
            text-align: justify;
            line-height: 1.5;
            color: rgba(25, 25, 25, 1);
        }

        @media(max-width:767px) {
            .box-head {
                grid-template-areas: "box-logo box-logo"
                    "box-video box-video"
                    "box-descripcion box-descripcion";
            }
        }

        @media(min-width:768px) {}

        @media(min-width:992px) {}

        @media(min-width:1200px) {}
    </style>


  

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

    .construyendo {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: initial;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
    }

    /*
    .construyendo [class*='col-'] {
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
</style>
<!-- End Styles -->