@extends('welcome')
@section('title','movilidadDatos')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Set movilidadDatos -->
<div class="set-wrapper movilidadDatos">
    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .movilidadDatos .cpnt-1 {
            margin: 0 auto;
        }

        .movilidadDatos .cpnt-1 .headerDatos {
            background-color: #becf0fff;
            padding: 16px;

            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .headerDatos .title {
            padding: 16px;
        }

        @media(min-width:768px) {
            .headerDatos .title {
                padding: 24px;
            }
        }

        .headerDatos .title h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: calc(24px + 1.5vw);
            font-weight: 800;
            text-align: left;
            line-height: 1.2;
            color: #4c551eff;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            line-clamp: 3;
            overflow: hidden;
            white-space: wordwrap;
        }

        @media(min-width:768px) {
            .headerDatos .title h3 {
                font-size: 52px;
            }
        }

        @media(min-width:768px) {
            .headerDatos .title h3 {
                font-size: 52px;
            }

        }

        @media(min-width:992px) {
            .headerDatos .title h3 {
                font-size: 52px;
            }
        }

        @media(min-width:1200px) {
            .headerDatos .title h3 {
                font-size: 56px;
            }
        }

        .headerDatos .logos {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 16px;
        }

        @media(min-width:768px) {
            .headerDatos .logos {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                gap: 32px;
            }
        }

        .headerDatos .logo img {
            width: 100%;
            min-width: 60px;
        }
        @media(min-width:768px){
            .headerDatos .logo img{
                min-width: 100px;
            }
        }
    </style>
    <div class="cpnt cpnt-1">
        <div class="headerDatos">
            <div class="title">
                <h3>La Movilidad en&nbsp;Datos</h3>
            </div>
            <div class="logos">
                <div class="logo logo-1">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2024/bitmap_image1-8.png" alt="logo datos 1">
                </div>
                <div class="logo logo-2">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2024/bitmap_image1-8-8.png" alt="logo datos 2">
                </div>
            </div>
        </div>
    </div>

    <style>
        .movilidadDatos .cpnt-2 {
            margin: 0 auto;
            padding: 30px;
        }

        .cpnt-2 .paragraph {
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 16px;
            font-weight: normal;
            text-align: justify;
            line-height: 1.5;
        }
    </style>
    <div class="cpnt cpnt-2">
        <p class="paragraph ph1">La Secretaría Distrital de Movilidad, los invita a consultar a continuación la información sobre: la Encuesta de Movilidad; que muestra cómo se movilizan las personas en la ciudad, la Encuesta de Percepción del Riesgo Vial; que reúne las creencias, percepciones, comportamientos y conocimientos de la ciudadanía sobre la seguridad vial, y el Anuario de Siniestralidad Vial de Bogotá; que es una publicación anual que ofrece un análisis estadístico exhaustivo de los siniestros de tránsito en la ciudad.</p>
    </div>

    <style>
        .movilidadDatos .cpnt-3 {
            margin: 0 auto;
            padding: 0px 64px 32px 64px;
        }

        .cpnt-3 ul {
            padding: 0;
        }

        .cpnt-3 ul li {
            font-family: 'Montserrat', sans-serif;
            font-optical-sizing: auto;
            font-size: 16px;
            font-weight: normal;
            text-align: left;
            line-height: 1.5;
            margin-bottom: 8px;
        }

        .cpnt-3 ul li a {
            color: #0072bc;
            text-decoration: none;
        }

        .cpnt-3 ul li a:hover {
            text-decoration: underline;
        }
    </style>
    <div class="cpnt cpnt-3">
        <ul>
            <li><a href="https://observatorio.movilidadbogota.gov.co/resultados-encuestas-de-movilidad">Encuesta de Movilidad</a></li>
            <li><a href="https://observatorio.movilidadbogota.gov.co/informes-tecnicos-y-consultorias">Encuesta de Percepción del Riesgo Vial</a></li>
            <li><a href="https://observatorio.movilidadbogota.gov.co/anuarios-de-siniestralidad">Anuario de Siniestralidad Vial</a></li>
        </ul>
    </div>
</div>
<!-- Fin Set -->


<script>
    $(document).ready(function () {
    window.location.replace("https://www.movilidadbogota.gov.co/web/la_movilidad_en_datos");
    });
</script>
