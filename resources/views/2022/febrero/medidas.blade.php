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
        <div class="encabezado">
            <div class="row">
                <div class="titulo-enc">
                    <div class='col-xs-12 col-sm-12'>
                        <h3><strong>Abecé de las medidas voluntarias de movilidad</strong><span class="lte"> por la</span></h3>
                    </div>
                    <div class='col-xs-12 col-sm-8 col-sm-offset-4'>
                        <div class="titulo">
                            Alerta Ambiental Fase 1 en Bogotá
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="s2">
        <div class="preguntas">
            <dl>
                <dt>
                    <div class="numero">
                        <div>1.</div>
                    </div>¿Por qué se declaró la Alerta Ambiental en Bogotá?
                </dt>
                <dd>La Alerta Ambiental se declaró debido a las condiciones meteorológicas presentadas en los últimos días, donde se observan fuertes inversiones térmicas, baja dispersión de contaminantes e incendios locales y regionales en el sur del Meta y norte del Guaviare.</dd>
            </dl>
            <dl>
                <dt>
                    <div class="numero">
                        <div>2.</div>
                    </div>¿La Alerta Ambiental es para toda la ciudad o solo para algunas zonas de esta?
                </dt>
                <dd>Es para toda la ciudad.</dd>
            </dl>
            <dl>
                <dt>
                    <div class="numero">
                        <div>3.</div>
                    </div>¿Qué significa la Fase 1 de la Alerta Ambiental?
                </dt>
                <dd>En esta Fase 1 el estado de la calidad del aire se considera regular, por lo cual las personas de los grupos vulnerables pueden presentar enfermedades respiratorias o cardiovasculares o complicación de las mismas. También podría presentarse un incremento de ocurrencia de síntomas respiratorios tales como irritación de mucosas, dolor de cabeza, malestar general y tos.</dd>
            </dl>
            <dl>
                <dt>
                    <div class="numero">
                        <div>4.</div>
                    </div>¿Cuántas Alertas Ambientales se han declarado en Bogotá?
                </dt>
                <dd>Antes de esta se han declarado <a href="https://drive.google.com/file/d/1G7J26U1_SaP2WOdn_bbs8HnicMS3F9g5/view?usp=sharing">7 Alertas Ambientales</a> en Bogotá entre 2018 y 2020:
                    <p><br></p>
                    <ul><strong>En 2018:</strong>
                        <li>Alerta Amarilla nivel ciudad del 23 al 29 de marzo.</li>
                    </ul>
                    <ul><strong>En 2019:</strong>
                        <li>Alerta Amarilla en Kennedy, Bosa y Tunjuelito, del 14 al 15 de febrero</li>
                        <li>La anterior alerta se extendió y se declaró Alerta Amarilla a nivel ciudad y Naranja en parte de Kennedy, Tunjuelito, Ciudad Bolívar, Puente Aranda y Bosa, del 15 al 19 de febrero</li>
                        <li>Alerta Amarilla a nivel ciudad y Naranja en el suroccidente, del 7 al 10 de marzo</li>
                        <li>Alerta Amarilla a nivel ciudad y Naranja al suroccidente. del 28 de marzo al 1ro de abril</li>
                    </ul>
                    <ul><strong>En 2020:</strong>
                        <li>Alerta amarilla al suroccidente, del 6 al 17 de febrero</li>
                        <li>Alerta amarilla a nivel ciudad, del 5 de marzo al 2 de abril</li>
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt>
                    <div class="numero">
                        <div>5.</div>
                    </div>¿Desde cuándo y por cuánto tiempo estará la ciudad en Alerta Ambiental?
                </dt>
                <dd>Las medidas de la Administración Distrital por la Alerta Ambiental Fase 1 inician el lunes 7 de febrero de 2022 y estarán vigentes hasta el momento en que las condiciones se normalicen y la Secretaría Distrital de Ambiente (SDA) levante el Estado de Alerta.</dd>
            </dl>
            <dl>
                <dt>
                    <div class="numero">
                        <div>6.</div>
                    </div>¿Qué se necesita para que las condiciones se normalicen?
                </dt>
                <dd>Se necesita la colaboración y el apoyo de toda la ciudadanía. Este es un tema que nos afecta a todos y la calidad del aire nos compete a todos.</dd>
            </dl>
            <dl>
                <dt>
                    <div class="numero">
                        <div>7.</div>
                    </div>¿Qué pasará con la movilidad en la ciudad durante la Alerta Ambiental?
                </dt>
                <dd>Se espera la adopción de medidas voluntarias por parte del sector empresarial, industrial y comercial, las empresas contratistas de obra pública del Distrito, los centros comerciales y grandes superficies, las empresas y la ciudadanía en general para que la movilidad contribuya con la solución a la Alerta Ambiental Fase 1.</dd>
            </dl>
            <dl>
                <dt>
                    <div class="numero">
                        <div>8.</div>
                    </div>¿Cuáles son las medidas voluntarias que pueden adoptar los sectores económicos, empresariales y los ciudadanos para contribuir con la superación de la Alerta Ambiental?
                </dt>
                <dd>
                    <ol style="list-style-type: none;">
                        <li><strong>Para el sector empresarial, industrial y comercial</strong>
                            <ul>
                                <li>Recibir y despachar sus mercancías entre las 10 de la noche y las 6 de la mañana para disminuir la circulación de vehículos de carga en horarios diurnos y optimizar los recorridos.</li>
                                <li>Las actividades de logística que se lleven a cabo en la noche deberán contar con protocolos de mitigación de ruido.</li>
                            </ul>
                        </li>
                        <li><strong> Para las empresas contratistas del Distrito</strong>
                            <ul>
                                <li>En la medida de sus posibilidades, transportar en horario nocturno los materiales requeridos para el desarrollo de sus actividades.</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Para los Centros Comerciales y Grandes Superficies</strong>
                            <ul>
                                <li>Abastecer las mercancías en horario nocturno exclusivamente como aporte a la disminución de la contaminación generada por los camiones.</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Para los Gremios, Transportadores de Carga y conductores de vehículos particulares</strong>
                            <ul>
                                <li>Usar la vía Mondoñedo - Chía para evitar ingresar a la ciudad mientras dure la emergencia ambiental. Se recomienda usar la ruta del relleno sanitario de Mondoñedo para pasar por Funza, Mosquera, Cota y Chía y tomar las vías que llevan a Tunja o Zipaquirá y viceversa.</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Para las empresas y organizaciones</strong>
                            <ul>
                                <li>Implementar modelos de teletrabajo, en la medida de sus posibilidades, para evitar desplazamientos frecuentes en vehículos particulares.</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Para la ciudadanía en general</strong>
                            <ul>
                                <li>Desplazarse en transporte público o bicicleta o utilizar el vehículo particular con más de tres ocupantes en caso de ser necesario.</li>
                                <li>Ser tolerante con la distribución nocturna de mercancías para lograr el objetivo de mejorar rápidamente la calidad del aire de la ciudad.</li>
                            </ul>
                        </li>
                    </ol>
                </dd>
            </dl>
            <style>
                .s2 .numero {
                    color: #fe9c00;
                    height: 30px;
                    width: 30px;
                    background-color: #082609;
                    margin: 5px;
                    display: inline-flex;
                    justify-content: center;
                    align-items: center;
                    margin-right: 8px;
                    top: -50%;
                    left: -50%;

                }
            </style>
            <div class="row">
                <div class='col-xs-12 col-sm-12 col-md-12'>
                    <p><strong>Oficina Asesora de Comunicaciones y Cultura para la Movilidad</strong></p>
                    <p><strong>Secretaría Distrital de Movilida</strong></p>
                </div>
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
        font-size: 13px !important;
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

    .s1 .encabezado {
        background-color: rgba(254, 191, 5, 1);
    }

    .s1 .titulo-enc {
        background-color: rgba(254, 191, 5, 1);
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-left: 10px solid #fe9c00;

    }

    .s1 .titulo {
        margin: 0px;
        padding: 10px;
        text-align: center;
        font-family: 'Sora', sans-serif;
        background-color: #082609 !important;
        font-weight: 900;
        color: rgba(254, 191, 5, 1);
        text-transform: uppercase;
        font-size: 36px;
        line-height: 1;

    }

    .s1 .titulo-enc h3 {
        font-family: 'Sora', sans-serif;
        font-size: 26px;
        color: #082609;
        padding: 0px;
        margin: 10px;
        text-align: initial;
    }

    .s1 [class*='col-'] {
        padding: 0px;
    }

    .s1 .lte {
        font-weight: 300;
        font-size: 20px;
    }

    .s2 .preguntas {
        padding: 30px;
        font-size: 14px;
        font-family: 'Sora', sans-serif;
        text-align: initial;
    }

    .s2 .preguntas dt {
        /* padding-bottom: 8px; */
        margin-bottom: 15px;
        border-bottom: #fe9c00 solid 2px;
    }

    .s2 .preguntas dd {
        padding: 10px;
    }

    .s2 .preguntas ol>li>ul {
        padding-bottom: 12px;
        padding-top: 8px;
    }

    .s2 .preguntas ol>li,
    .s2 .preguntas ul>li {
        padding: 4px;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->