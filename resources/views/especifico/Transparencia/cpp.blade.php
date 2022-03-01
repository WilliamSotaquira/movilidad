@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class="encabezado">
            <h3>Conoce, Propone y Prioriza</h3>
        </div>
        <div class="parrafos">
            <p>Bogotá es un gobernó de puertas abiertas comprometido con la transparencia y la lucha contra la corrupción. En el Distrito proponemos promover un camino hacia la integridad a partir de prácticas de gobierno abierto y de fomento de nuevos valores que transformen la relación entre la administración y la ciudadanía.</p>
            <p>Por eso, en esta página tendrás acceso a estrategias de transparencia, de participación y de colaboración, de manera que puedas conocer, proponer y priorizar soluciones a los retos de nuestra ciudad.</p>
        </div>
        <div class='row box-botones'>

            <div class='col-xs-12 col-sm-4 col-sm-offset-4'>
                <a href="https://www.movilidadbogota.gov.co/web/transparencia/conoce">
                    <div class="btn-cpp">
                        <p>Conoce</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row box-botones">
            <div class='col-xs-12 col-sm-4 col-sm-offset-4'>
                <a href="https://www.movilidadbogota.gov.co/web/transparencia/propone">
                    <div class="btn-cpp">
                        <p>Propone</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row box-botones">

            <div class='col-xs-12 col-sm-4 col-sm-offset-4'>
                <a href="https://www.movilidadbogota.gov.co/web/transparencia/prioriza">
                    <div class="btn-cpp">
                        <p>Prioriza</p>
                    </div>
                </a>
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
        font-size: 14px !important;
        line-height: 1.4 !important;
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
    }
    */

    .w-100 {
        width: 100%;
    }

    .s1 h3 {
        text-align: center;
        color: rgba(77, 84, 31, 1);
        margin: 0px;
        padding: 30px;
        border-bottom: solid 2px rgba(77, 84, 31, 1);
    }

    .s1 .parrafos {
        padding: 30px;
    }
    .s1 .parrafos p{
        text-align: justify;
    }

    .box-botones{
        padding: 8px;
    }

    .box-botones a {
        text-decoration: none !important;
        color: rgba(255, 255, 255, 1);
        text-align: center;
        margin: 0px;
    }

    .btn-cpp {
        background: rgba(77, 84, 31, 1);
        padding: 15px 30px;
        transition: 0, 5s ease;

    }

    .btn-cpp:hover {
        background: #A6B517;
        padding: 15px 30px;

    }

    .box-botones .btn-cpp p {
        font-size: 14px;
        margin: 0px !important;
        text-align: center;
        color: #fff;
        font-weight: 700;
        text-transform: uppercase;

    }

    .btn-cpp:hover p {
        color: #151515;

    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->