@extends('welcome')
@section('title','sb')
@section('contenido')


<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;family=Work+Sans:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


<!-- Set sb -->
<div class="set-wrapper sb">
    <style>
        .sb {
            background-color: #f0f0f0;
            padding: 20px;
            font-family: 'Montserrat', sans-serif;
        }

        .cpnt-1 {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: stretch;
            margin-top: 32px;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            height: 250px;
            background-color: #000000;

            background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.72) 100%), url('/img/sdb/sdb_p1.jpg');

        }

        .cpnt-1 .imagen {
            width: 220px;
            max-width: 300px;
            margin: 0 auto;
        }


        .cpnt-1 .img-1 {
            height: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .cpnt-1 .img-2{

            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
        }

        .cpnt-1 .img-2 img {
            width: 100%;
            height: auto;
            max-width: 200px;
            margin: 0 auto;
            display: block;
        }

        .cpnt-1 .mensaje {
            text-align: center;
            color: #000000;
            background-color: #f9b431;


            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: 700;
            padding: 16px;
            border-radius: 20px;
        }

        .cpnt-1 .mensaje h1 {
            font-size: 24px;
            font-weight: 700;
            margin: 0;
        }
        .cpnt-1 .mensaje h3 {
            font-size: 20px;
            font-weight: 700;
            margin: 10px 0 0;
        }
    </style>

    <div class="cpnt-1">

        <div class="imagen img-2">
            <div class="mensaje">
                <h1>Inicia en <span id="contador"></span></h1>
                <h3><span id="reloj"></span> hrs</h3>
            </div>
        </div>
        <div class="imagen img-1">
            <img class="img-responsive w-100" src="/img/sdb/logo_sb_blanco.png" alt="Logo de la Semana de la Bici 2025" title="Logo de la Semana de la Bici 2025">
        </div>

    </div>
    <style>
        .cpnt-2 {
            display: flex;
            align-items: center;
            margin-top: 32px;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }

        .video {
            width: 470px;
            max-width: 600px;
            min-width: 200px;
            padding: 16px;
        }

        .text-1 {
            text-align: center;
            margin-top: 16px;
            width: 470px;
            padding: 16px;
        }

        .text-1 .paragraph {
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            text-align: justify;
        }
    </style>
    <div class="cpnt-2">
        <div class="video video-1">
            <video controls style="width: 100%;">
                <source src="" type="video/mp4" poster="" preload>
        </div>
        <div class="text-1">
            <p class="paragraph ph-1">La bicicleta nos conecta con Bogotá y, por eso, tiene un espacio especial cada año, donde exaltamos su importancia en nuestra vida diaria.</p>
            <p class="paragraph ph-1">Llega la Semana de la Bicicleta en su edición número 18, celebra con nosotros y disfruta más de 45 actividades gratuitas en toda la ciudad.</p>
            <p class="paragraph ph-1">No te pierdas nuestra agenda académica, participa en los bicirecorridos, sé testigo de nuestros avances en cicloinfraestructura y sigue nuestras jornadas de sensibilización, entre otras actividades.</p>
            <p class="paragraph ph-1 text-center"><b>¿Estás listo?</b></p>
            <p class="paragraph ph-1">Vive la fiesta de la bici más grande de nuestra ciudad del 22 al 28 de septiembre.</p>

        </div>
    </div>

    <style>
        .cpnt-3 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 32px;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 16px;
            padding: 16px;
            width: 300px;
            text-align: center;
        }

        .icon-card img {
            width: 120px;
            height: auto;
        }

        .title-card {
            font-size: 20px;
            margin-top: 24px;
        }

        .text-card {
            margin-top: 16px;
        }

        .title-card,
        .paragraph {
            text-align: center;
        }

        .title-card {
            font-weight: bold;
        }

        .paragraph.ph-type-1 {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
            margin-top: 8px;
        }


        .icon-card {
            margin-bottom: 16px;
        }

        .icon-card img {
            width: 100px;
            height: auto;
            border-radius: 50%;
        }




        .paragraph {
            font-size: 16px;
            color: #555;
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
    </style>
    <div class="cpnt-3">
        <div class="cards">
            <div class="card zoom">
                <div class="icon-card">
                    <img src="/img/sdb/sdb_eje_1.png" alt="Icono eje integración" title="Icono eje integración">
                </div>
                <div class="text-card">
                    <h3 class="title-card">Integración urbana y regional a través de la bicicleta</h3>
                    <p class="paragraph ph-type-1 ph-id-1">La bicicleta tiene la capacidad de conectarnos fuera de Bogotá. Más de 400 000 viajes en bicicleta se realizan diariamente desde y hacia municipios cercanos, ya sea por trabajo, recreación o estudio.</p>
                </div>
            </div>
            <div class="card zoom">
                <div class="icon-card">
                    <img src="/img/sdb/sdb_eje_2.png" alt="Icono eje seguridad" title="Icono eje seguridad">
                </div>
                <div class="text-card">
                    <h3 class="title-card">Seguridad, educación y cuidado vial: bases para fortalecer la cultura ciudadana</h3>
                    <p class="paragraph ph-type-1 ph-id-1">La seguridad vial es un asunto de corresponsabilidad, el autocuidado es esencial para preservar el bienestar de los y las ciclistas.</p>
                </div>
            </div>
            <div class="card zoom">
                <div class="icon-card">
                    <img src="/img/sdb/sdb_eje_3.png" alt="Icono eje cultura" title="Icono eje cultura">
                </div>
                <div class="text-card">
                    <h3 class="title-card">Cultura, salud, recreación y deporte: pilares de una ciudad más amable e incluyente</h3>
                    <p class="paragraph ph-type-1 ph-id-1">La bicicleta es más que un medio de transporte, es un vehículo que nos aporta salud y recreación al mismo tiempo. La bicicleta es de todos y todas y su uso también es Patrimonio Inmaterial de la Ciudad.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Sep 22, 2025 00:00:01").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="contador"
        document.getElementById("contador").innerHTML = +" " + days + " días";

        // Display the result in the element with id="reloj"
        document.getElementById("reloj").innerHTML = hours + ":" + minutes + ":" + seconds + " ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("contador").innerHTML = "Plazo Finalizado";
            // document.getElementById("reloj").innerHTML = "";
        }
    }, 1000);
</script>
<!-- Fin Set -->
