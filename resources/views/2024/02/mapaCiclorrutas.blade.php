@extends('welcome')
@section('title','mapaCiclorrutas')
@section('contenido')

<!-- Ruta de edición: "https://www.movilidadbogota.gov.co/web/muevete-en-bici-por-bogota" -->

<!-- Set mapaCiclorrutas -->
<div class="set-wrapper mapaCiclorrutas">

    <div class="row">
        <br>
        <p>Actualmente Bogotá cuenta con 630 kilómetros de carriles para ciclistas, que facilitan la movilidad en bici y que también permiten la conectividad con el Sistema de Transporte Público de la ciudad, promoviendo así una movilidad más sostenible, asequible y segura. </p>
        <br>

    </div>
    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-12-2023/red_de_ciclorrutas_bogota_30062023_001.png">
        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-12-2023/red_de_ciclorrutas_bogota_30062023_001.png" alt="imagen con mapa de ciclorrutas en Bogotá">
    </a>

    <div class="row">
        <br>
        <p>Recuerda que puedes planear tu ruta en bici, ver los cicloparqueaderos disponibles y ver los eventos del tráfico en <a href="https://mapas.bogota.gov.co">mapas.bogota.gov.co</a></p>
        <br>

    </div>

    <iframe frameborder="0" height="800" src="https://mapas.bogota.gov.co/" width="100%"></iframe>
    <br>
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-sm-offset-4">
            <div class="btn-mapa"><a download="" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-02-2024/red_de_ciclorrutas_bogota_30062023_2.pdf" rel="noopener noreferrer" target="_blank">Descargue aquí el mapa</a></div>
        </div>
    </div>
    <style type="text/css">
        .btn-mapa {
            background-color: #4D541F;
            padding: 6px 12px;
            text-align: center;
            border: solid 3px green;
            border-radius: 6px;
        }

        .btn-mapa:hover {
            background-color: #828F26;
            color: #151515;
        }

        .btn-mapa:hover a {
            color: #151515;
            text-decoration: none;
        }

        .btn-mapa a {
            color: #fff;
            font-size: 1.2em;
            font-weight: 700;

        }
    </style>
</div>

<!-- Fin Set -->


