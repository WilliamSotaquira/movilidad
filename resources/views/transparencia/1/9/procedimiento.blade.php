@extends('welcome')
@section('title','procedimiento')
@section('contenido')

<!-- Set procedimiento -->
<div class="set-wrapper procedimiento">

<style>
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
    .procedimiento .cpnt-1{
        margin-top: 32px;
    }
</style>
<div class="cpnt cpnt-1">
     <p class="paragraph ph1"><strong>Conoce cómo construimos una movilidad segura, sostenible, inclusiva y accesible.</strong> Explora nuestro mapa de procesos y descubre cómo funciona la Secretaría Distrital de Movilidad. Consulta todos los documentos públicos relacionados con la toma de decisiones de manera fácil y rápida, sin necesidad de iniciar sesión.</p>
</div>

<style>
    .procedimiento .cpnt-2{
        position: relative;
        padding: 32px 150px;
    }
    .cpnt-2 .logo-1{
        position: absolute;
        top: 16px;
        left: 16px;
    }
    .cpnt-2 .img-1{
        border: solid 2px #f5f5f5;
        border-radius: 8px;
        -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.05);
        box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.05);
        margin: auto;
    }
    .cpnt-2 .img-1 img{
        margin: auto;
    }

</style>
<div class="cpnt cpnt-2">
    <div class="logo logo-1 zoom">
        <a href="https://daruma.movilidadbogota.gov.co/app.php/staff/">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/botones_daruma_cuadrado_1.png.webp" alt="logo Daruma">
        </a>
    </div>
    <div class="imagen img-1 zoom">
        <a href="https://daruma.movilidadbogota.gov.co/app.php/staff/ ">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/mapa-de-procesos-2019-v3.jpg" alt="Diagrama: Mapa de procesos SDM" title="Diagrama: Mapa de procesos SDM">
        </a>
    </div>
</div>
</div>
<!-- Fin Set -->
