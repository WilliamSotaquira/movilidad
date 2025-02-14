@extends('welcome')
@section('title','temporizador')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Set temporizador -->
<div class="set-wrapper avisos temporizador">

    <style>
        .avisos .cpnt-1 {
            position: relative;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
            justify-content: space-between;
            align-items: center;
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-12-2024/cuentaregresiva_01.png');
            background-size: cover;

            @media(min-width:768px){
                flex-direction: row;
            }
        }

        .cpnt-1 .img-1 {
            background-color: #4d541f;
            padding: 16px;
        }

        .cpnt-1 .img-1 img {
            max-width: 200px;
        }

        .cpnt-1 .img-2 {}

        .cpnt-1 .img-2 img {
            display: none;
            visibility: hidden;

            @media(min-width:1026px) {
                position: absolute;
                display: block;
                visibility: visible;
                width: 230px;
                left: 530px;
                bottom: 0;
            }
        }

        .cpnt-1 .cuentaRegresiva {
            display: flex;
            flex-wrap: nowrap;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: 'Montserrat', sans-serif;
            max-width: 400px;

            @media(min-width:768px) {
                margin-right: 150px;

            }


        }

        .cpnt-1 .cuentaRegresiva h4 {
            color: #4d541f;
            font-size: 24px;
            font-weight: 700;
            padding: 4px;
            margin: 0px;
        }

        .cpnt-1 .contador {
            display: flex;
            flex-wrap: nowrap;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            font-family: 'Montserrat', sans-serif;
            max-width: 400px;
            margin: 4px;
        }

        .cpnt-1 .contador .dice {
            display: flex;
            flex-wrap: nowrap;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: 'Montserrat', sans-serif;
            background-color: #BED000;
            width: 70px;
            height: 70px;
            margin: 6px;
            padding: 6px;
            border-radius: 8px;

        }

        .cpnt-1 .contador .dice span {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            font-weight: 700;
        }

        .cpnt-1 .contador .dice p {
            color: #4d541f;
            font-size: 12px;
            font-weight: 700;
            padding: 4px;
            margin: 0px;
        }
    </style>
    <div class="cpnt cpnt-1">
        <div class="imagen img-1">
            <picture>
                <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-12-2024/cuentaregresiva_08.png">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-12-2024/cuentaregresiva_09.png" class="img-responsive w-100" alt="Recurso Ultimos Días de descuento" title="Image: Recurso Ultimos Días de descuento">
            </picture>
        </div>

        <div class="cuentaRegresiva">
            <h4>¡Quedan!</h4>
            <div class="contador">
                <div class="dice">
                    <span id="days"></span>
                    <p>días</p>
                </div>
                <div class="dice">
                    <span id="hours"></span>
                    <p>horas</p>
                </div>
                <div class="dice">
                    <span id="minutes"></span>
                    <p>minutos</p>
                </div>
                <div class="dice">
                    <span id="seconds"></span>
                    <p>segundos</p>
                </div>
            </div>
        </div>
        <div class="imagen img-2">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-12-2024/cuentaregresiva_03.png" alt="recurso ¡Ultimos Días!" title="recurso ¡Ultimos Días!">
        </div>
        <style>
            .cpnt-1 .texto {
                display: flex;
                flex-wrap: nowrap;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                font-family: 'Montserrat', sans-serif;
                max-width: 330px;
                margin: 4px;
                text-align: center;
                @media(min-width:768px){
                    text-align: left;
                }
            }

            .texto p {
                color: #4d541f;
                font-size: 1.5em;
                font-weight: 700;
                padding: 4px;
                margin: 0px;
            }

            .texto p>span {
                background-color: #BED000;
                color: #4d541f;
                font-size: 20px;
                font-weight: 800;
                padding: 8px;
                margin: 4px;
            }

            .texto .enfasis-text {
                color: #4d541f;
                background-color: #BED000;
                border-radius: 8px;
                font-size: 1.5em;
                font-weight: 800;
                padding: 8px;
                margin: 4px;
            }

            .texto small {
                color: #4d541f;
                font-size: 0.8em;
                font-weight: 500;
                padding: 4px;
                margin: 0px;
            }

            .texto small b {
                color: #4d541f;
                font-weight: 800;
                padding: 4px;
                margin: 0px;
            }
        </style>
        <div class="texto">
            <p>Pagando antes del <span>13 de diciembre de 2024</span> el valor total de tu comparendo.</p>
            <a href="https://www.movilidadbogota.gov.co/web/consulta_de_comparendos" class="enfasis-text">Consulta y paga aquí</a>
            <small>*Aplica para obligaciones anteriores al <b>30 de junio de 2022.</b></small>
        </div>

    </div>
    <script>
        //===
        // VARIABLES
        //===
        const DATE_TARGET = new Date('12/13/2024 10:30 AM');
        // DOM for render
        const SPAN_DAYS = document.querySelector('span#days');
        const SPAN_HOURS = document.querySelector('span#hours');
        const SPAN_MINUTES = document.querySelector('span#minutes');
        const SPAN_SECONDS = document.querySelector('span#seconds');
        // Milliseconds for the calculations
        const MILLISECONDS_OF_A_SECOND = 1000;
        const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
        const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
        const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24

        //===
        // FUNCTIONS
        //===

        /**
         * Method that updates the countdown and the sample
         */
        function updateCountdown() {
            // Calcs
            const NOW = new Date()
            const DURATION = DATE_TARGET - NOW;
            const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
            const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
            const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
            const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
            // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)

            // Render
            SPAN_DAYS.textContent = REMAINING_DAYS;
            SPAN_HOURS.textContent = REMAINING_HOURS;
            SPAN_MINUTES.textContent = REMAINING_MINUTES;
            SPAN_SECONDS.textContent = REMAINING_SECONDS;
        }

        //===
        // INIT
        //===
        updateCountdown();
        // Refresh every second
        setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
    </script>

</div>
<!-- Fin Set -->
