@extends('welcome')
@section('title','pdd')
@section('contenido')

<!-- Set pdd -->
<div class="set-wrapper pdd">

<style>
    .field-item.even .centertil {
        visibility: hidden;
        margin-top: -50px;
    }
    .pdd .b1 {
            margin-bottom: 32px;
            text-align: center;
        }

        .pdd .b1 h3 {
            font-size: 32px;
            font-weight: 700;
            text-align: center;
            line-height: 1.2;
            color: rgba(77, 84, 31, 1);
            padding: 16px;
        }

        .pdd .b1 p {
            font-size: 16px;
            font-weight: normal;
            text-align: center;
            line-height: 1.5;
            color: #252525;
        }
    </style>
    <div class="box b1 box-title">
        <h3>Pégate al plan</h3>
        <p>Participa con tus propuestas para la construcción del <strong>Plan de Desarrollo de Bogotá</strong></p>
    </div>
    <style>
        .pdd .b2 {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            margin-bottom: 32px;
            align-items: center;
    justify-items: center;
        }

        .pdd .b2 .b2-card {
            border-radius: 12px;

        }

        .pdd .b2 .b2-card img {
            border-radius: 6px;
        }

        @media(min-width:768px) {
            .pdd .b2 {
                grid-template-columns: repeat(2, 1fr);
                row-gap: 32px;
                column-gap: 24px;
                padding: 16px;
            }
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

        .border {
            border: solid #feb61b 6px;
            background: #feb61b;

            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
        }
    </style>
    <div class="box b2">
        <a href="http://meet.google.com/fvg-ohkk-rkp">
            <div class="b2-card border zoom">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/mini_socializacion_pdd_v2_pieza_1_.png" alt="socialización pdd taxis" class="img-responsive w 100">
            </div>
        </a>
        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/socializacion_pdd_v2_pieza_4.png"><div class="b2-card"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/mini_socializacion_pdd_v2_pieza_4.png" alt="socialización pdd motociclistas y ciclistas" class="img-responsive w 100"></div></a>
        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/socializacion_pdd_v2_pieza_2_.png"><div class="b2-card"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/mini_socializacion_pdd_v2_pieza_2_.png" alt="socialización pdd academia" class="img-responsive w 100"></div></a>
        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/socializacion_pdd_v2_pieza_3.png"><div class="b2-card"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/mini_socializacion_pdd_v2_pieza_3.png" alt="socialización pdd transmicable" class="img-responsive w 100"></div></a>
        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/socializacion_pdd_v2_pieza_6.png"><div class="b2-card"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/mini_socializacion_pdd_v2_pieza_6.png" alt="socialización pdd movilidad activa" class="img-responsive w 100"></div></a>
        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/socializacion_pdd_v2_pieza_7.png"><div class="b2-card"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/mini_socializacion_pdd_v2_pieza_7.png" alt="socialización pdd metro" class="img-responsive w 100"></div></a>
        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/socializacion_pdd_v2_pieza_5.png"><div class="b2-card"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/mini_socializacion_pdd_v2_pieza_5.png" alt="socialización pdd empresarios y transporte" class="img-responsive w 100"></div></a>
        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/socializacion_pdd_v2_pieza_8.png"><div class="b2-card"><img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-03-2024/mini_socializacion_pdd_v2_pieza_8.png" alt="socialización pdd clm" class="img-responsive w 100"></div></a>
    </div>

</div>
<!-- Fin Set -->
