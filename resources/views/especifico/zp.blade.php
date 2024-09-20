@extends('welcome')
@section('title','zp')
@section('contenido')

<!-- Set zp -->
<div class="set-wrapper zp">


</div>
<!-- Fin Set -->
    <div class="event event$1">
        <div class="title-event">
            <h3>$3</h3>
        </div>
        <div class="description-event">
            <p class="paragraph ph1">$4</p>
        </div>
        <div class="info-event">
            ${5:<p class="paragraph ph-date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></p>}<p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>$6</p>
            <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>$7</p>
        </div>
        <div class="contact-event">
            <p class="paragraph ph1">Programación completa en:</p>
            <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>$8</p>
        </div>
        <div class="contact-organizer">
            <p class="paragraph ph1">Organiza:</p>
            <p class="paragraph ph2">$2</p>
        </div>
    </div>


    <script>
        alert("Abrir la agenda general de la XVIII Semana de la Seguridad Vial");
        $(document).ready(function () {
        window.location.replace("").delay(5000);
        });
    </script>
