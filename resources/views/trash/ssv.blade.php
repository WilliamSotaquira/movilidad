@extends('welcome')
@section('title','ssv')
@section('contenido')

<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;family=Work+Sans:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- Set ssv -->
<div class="set-wrapper ssv">
    <style>
        .ssv {
            padding: 16px;
            font-family: 'Montserrat', sans-serif;
            color: #333;
        }

        .ssv h3 {
            font-family: 'Work Sans', sans-serif;
            color: #E3072D;
            margin-bottom: 32px;
            margin-top: 40px;
            font-weight: 700;
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

        .cpnt-1 {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 32px;

            background-image: url('/img/ssv/ssv_p4.jpg');
            background-size: cover;
            background-position: -285px;

            box-shadow: -16px -1px 38px 3px rgba(0, 0, 0, 0.20);
            -webkit-box-shadow: -16px -1px 38px 3px rgba(0, 0, 0, 0.20);
            -moz-box-shadow: -16px -1px 38px 3px rgba(0, 0, 0, 0.20);

        }

        .wrap {
            width: 100%;
            background: #f9b431;
            /* background: linear-gradient(270deg, rgba(227, 7, 45, 1) 0%, rgba(237, 221, 83, 0) 100%); */
            background: linear-gradient(270deg, rgba(249, 180, 49, 1) 0%, rgba(237, 221, 83, 0) 100%);
            padding: 16px;
            display: flex;
            justify-content: center;
            align-items: center;

            box-shadow: -16px -1px 38px 3px rgba(0, 0, 0, 0.20);
            -webkit-box-shadow: -16px -1px 38px 3px rgba(0, 0, 0, 0.20);
            -moz-box-shadow: -16px -1px 38px 3px rgba(0, 0, 0, 0.20);

        }

        .void {
            width: 100%;
        }

        .cpnt-1 .mensaje {
            position: absolute;
            bottom: 50px;
            left: 50px;

            text-align: center;
            color: #E3072D;
            font-size: 24px;
            font-weight: bold;
            margin-top: 16px;
            background-color: #fff;
            padding: 16px;
            border-radius: 8px;
            font-family: 'Work Sans', sans-serif;
        }

        .cpnt-1 .mensaje h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
            margin-top: 0px;
        }

        .cpnt-1 .mensaje h3 {
            font-size: 20px;
            margin-bottom: 0;
            margin-top: 0px;
        }

        .cpnt-1 .logo {
            width: 280px;
            max-width: 300px;
            margin: 32px;
        }

        .drop {
            filter: drop-shadow(5px 5px 10px black);
        }
    </style>
    <div class="cpnt-1">
        <div class="void">
            <div class="mensaje drop">
                <h1>Inicia en <span id="contador"></span></h1>
                <h3><span id="reloj"></span> hrs</h3>
            </div>
        </div>
        <div class="wrap">
            <div class="logo logo-1">
                <img class="img-responsive w-100 drop" src="/img/ssv/logo-ssv-3.png" alt="logo ">
            </div>
        </div>
    </div>


    <style>
        .cpnt-2 {
            display: flex;
            align-items: center;
            margin-top: 32px;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: flex-end;

            background-image: url('/img/ssv/velocidad.jpg');
            background-size: cover;
            background-position: center;
        }

        .cpnt-2 .imagen {
            width: 30%;
            max-width: 400px;
            min-width: 320px;
            height: auto;
            margin-right: 16px;
            position: relative;
        }

        /* .cpnt-2 .imagen img {
            width: 100%;
            height: auto;
        } */

        .cpnt-2 .text {
            background-color: #ffffff90;
            width: 70%;
            max-width: 600px;
            min-width: 320px;
            padding: 32px;

        }

        .title {
            text-align: center;
            margin-bottom: 18px;
            font-size: 24px;
            font-weight: 500;
        }

        .paragraph {
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            text-align: justify;
        }

        .sticker {
            shape-outside: url('/');
            shape-image-threshold: 60%;
            shape-margin: 2rem;
            margin-left: -2rem;
            float: left;
        }
    </style>
    <div class="cpnt-2">
        <div class="imagen img-1">
            <!-- <img class="img-responsive w-100" src="/img/ssv/velocidad.jpg" alt="" title=""> -->
        </div>
        <div class="text ">
            <h3 class="title title-1">¿Qué es la XIX Semana de la Seguridad Vial?</h3>
            <p class="paragraph ph-1">La XIX Semana de la Seguridad Vial es un espacio de ciudad que reúne a expertos, tomadores de decisiones y ciudadanía, para el intercambio de conocimientos y buenas prácticas, el diálogo constructivo y la difusión de tendencias internacionales que aporten a la construcción de una movilidad segura y protectora de la vida.</p>
            <h3 class="title title-2">La seguridad vial es popular</h3>
            <p class="paragraph ph-2">En la edición de 2025, la semana se desarrolla bajo el lema “La seguridad vial es popular” como un recordatorio de que todos, desde los diferentes roles que desempeñamos a diario en las vías, compartimos el mismo propósito: proteger la vida. Esto implica que, para que Bogotá se mueva segura, todos debemos asumir no solo el derecho a movernos, sino el compromiso de actuar y decidir con responsabilidad en la movilidad.</p>
        </div>
    </div>

    <div class="cpnt-3">
    </div>

    <style>
        .cpnt-4 {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 32px;
        }

        .cpnt-4 .title {
            text-align: center;
            margin-bottom: 16px;

        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            width: 250px;
            margin: 16px;
            text-align: center;

        }

        .card img {
            width: 100%;
            height: auto;
            max-width: 200px;
            margin-bottom: 8px;
            border-radius: 16px;

            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
        }

        .card h4 {
            font-size: 18px;
            margin-bottom: 8px;
            color: #E3072D;
        }

        .card p {
            font-size: 14px;
            color: #555;

            margin-bottom: 0;
        }

        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
    </style>
    <div class="cpnt-4">
        <h3 class="title title-type-1 title-id-1">Ejes de la Semana de la Seguridad Vial</h3>

        <div class="cards">
            <div class="card card-type-1 card-id-1">
                <img src="/img/ssv/calle_1.jpg" alt="Icono Educación" class="card-img-top">
                <h4 class="card-title">En la calle</h4>
                <p class="card-text">Intervenimos el espacio público con infraestructura segura y acciones pedagógicas para proteger la vida.</p>
            </div>
            <div class="card card-type-1 card-id-2">
                <img src="/img/ssv/hora_1.jpg" alt="Icono Educación" class="card-img-top">
                <h4 class="card-title">A toda hora</h4>
                <p class="card-text">Con controles en vía y presencia institucional, de día y de noche, protegemos la vida.</p>
            </div>
            <div class="card card-type-1 card-id-3">
                <img src="/img/ssv/gente_1.jpg" alt="Icono Educación" class="card-img-top">
                <h4 class="card-title">Con la gente</h4>
                <p class="card-text">Trabajamos por la gente y con ella, porque su voz es clave para construir una movilidad segura.</p>
            </div>

        </div>

    </div>

</div>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Oct 01, 2025 00:00:01").getTime();

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
