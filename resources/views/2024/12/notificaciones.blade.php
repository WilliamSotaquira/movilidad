@extends('welcome')
@section('title','notificaciones')
@section('contenido')

<!-- Set notificaciones -->
<div class="set-wrapper notificaciones">

    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .cpnt-1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
            color: #3d4a1c;
        }

        .cpnt-1 .title-1 {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
    <div class="cpnt cpnt-1">
        <h3 class="title title-1">Notificaciones de comparendos electrónicos -F</h3>
    </div>

    <style>
        .cpnt-2 {
            color: #252525;
        }

        .cpnt-2 .paragraph {
            font-size: 16px;
            font-weight: normal;
            line-height: 1.2;
            text-align: justify;
        }
    </style>
    <div class="cpnt cpnt-2">
        <p class="paragraph ph-1">Señor ciudadano, si usted es propietario de un vehículo matriculado en la ciudad de Bogotá, le invitamos a realizar la actualización de la dirección de su sitio de residencia, radicando la solicitud en cualquiera de los puntos de atención SIM. Recuerde que usted pude ser objeto de la imposición de comparendos por medios tecnológicos, los cuales se envían a la dirección de su domicilio. </p>
    </div>


    <style>
        .cpnt-3 {
            color: #252525;
            display: flex;
            padding: 42px;
        }

        .cpnt-3 .box-btns {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .cpnt-3 .box-btns .wrapper-card {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
            border: 2px solid #BED000;
            border-radius: 10px;
            margin-bottom: 12px;
        }

        .cpnt-3 .box-btns .wrapper-card h4 {
            font-size: 16px;
            font-weight: bold;
            line-height: 1.2;
            text-align: center;
            margin-bottom: 12px;
            color: #3d4a1c;
        }

        .cpnt-3 .box-btns .wrapper-card .btn {
            background-color: #BED000;
            color: #252525;
            font-size: 16px;
            font-weight: bold;
            line-height: 1.2;
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .cpnt-3 .box-btns .wrapper-card .btn:hover {
            background-color: #3d4a1c;
            color: #BED000;
        }

        .cpnt-3 .box-image {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .cpnt-3 .box-image .imagen {
            max-width: 500px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cpnt-3 .box-image .imagen img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
        }
    </style>
    <div class="cpnt cpnt-3">
        <div class="box-btns">
            <div class="wrapper-card">
                <h4>Notificaciones anteriores al 8 de agosto de 2024</h4>
                <a class="btn" href="https://www.movilidadbogota.gov.co/web/comparendos_electronicos" target="_blank" rel="noopener noreferrer">Ingrese aquí</a>
            </div>
            <div class="wrapper-card">
                <h4>Notificaciones desde el 8 de agosto de 2024 hasta el 5 de noviembre de 2024</h4>
                <a class="btn" href="https://www.movilidadbogota.gov.co/web/notificaciones-de-comparendos-electronicos" target="_blank" rel="noopener noreferrer">Ingrese aquí</a>
            </div>
            <div class="wrapper-card">
                <h4>Notificaciones a partir del 5 de noviembre de 2024</h4>
                <a class="btn" href="https://webfenix.movilidadbogota.gov.co/#/notificacion-comparendos-electronicos" target="_blank" rel="noopener noreferrer">Ingrese aquí</a>
            </div>
        </div>
        <div class="box-image">
            <div class="imagen img-1">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-11-2024/recurso1_notifiaciones.png" alt="Señal de detección electronica" title="Señal de detección electronica">
            </div>
        </div>
    </div>
</div>
<!-- Fin Set -->


<script>
    alert("Redireccionando a la página de principal de la Secretaría de Movilidad de Bogotá");
    $(document).ready(function () {
    window.location.replace("https://www.movilidadbogota.gov.co/web/").delay(8000);
    });
</script>

