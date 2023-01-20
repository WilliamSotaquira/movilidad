@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>


    <div class="s3">
        <div class="titulo">
            <h3>Paso a paso para obtener el permiso de circulación para vehículos eléctricos o híbridos en Bogotá</h3>
        </div>
        <div class="detalle">
            <ol>
                <li>Haga clic en el botón verde "Registro de vehículos exceptuados para tres o más personas, eléctricos e híbridos".</li>
                <li>Haga clic en el botón azul "Tenga en cuenta" en la parte de arriba a la derecha del formulario y verifique que cumple con los requisitos mínimos.</li>
                <li>Diligencie todos los campos del formulario y haga clic en el botón "Registra información".</li>
                <li>Luego, debe verificar en la página de SIMUR <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/consultarPlaca/" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/consultarPlaca/</a> que el permiso esté vigente, introduciendo el número de placa del carro.</li>
                <li>Con esto, queda listo su permiso. Si Agentes Civiles de Tránsito o la Policía de Tránsito detienen el vehículo, consultarán la base de datos y verán que el permiso está vigente.</li>
                <li>Recuerde que esta excepción no requiere renovación.</li>
            </ol>
            <div class='row'>
                <div class='col-xs-12 col-sm-12 col-md-12'>
                    <hr>
                    <div class="text-center">
                        <a class="btn btn-primary" href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/login/" target="_blank">Registro de permiso de circulación para eléctricos e híbridos </a>
                    </div>
                    <hr>
                </div>
            </div>
            <p><strong>Gracias por hacer de Bogotá una ciudad con movilidad sostenible.</strong></p>
        </div>
    </div>

</div>
<br>

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

    .seccion [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }

    .w-100 {
        width: 100%;
    }

    .titulo h3 {
        color: #4D541F;
        padding-bottom: 8px;
        border-bottom: solid 2px #4D541F;
        margin-top: 35px;
        margin-bottom: 25px;
        font-weight: 700;
    }

    .detalle ol li {
        margin-bottom: 10px;
        margin-top: 10px;
        line-height: 1.3;

    }

    .detalle p {
        margin-bottom: 10px;
        margin-top: 10px;
        text-align: justify;
        line-height: 1.3;
        rgba(25, 28, 58, 1)
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
