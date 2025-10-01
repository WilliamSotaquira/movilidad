<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XIX Semana de la Seguridad Vial</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet"
        crossorigin="anonymous">

    <!-- css BDC -->
    <link rel="shortcut icon" href="https://www.movilidadbogota.gov.co/web/sites/default/files/logo_bogota_mesa_de_trabajo_1_copia.png" type="image/png">
    <link href="https://cdn.www.gov.co/layout/v4/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YM45VRL2EK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-YM45VRL2EK');
    </script>

</head>

<body>

    <style>
        html,
        body {
            width: 100vw;
            max-width: 100vw;
            overflow-x: hidden !important;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Work Sans', sans-serif;
        }

        p {
            font-size: 1.4rem;
            font-family: 'Work Sans', sans-serif;
            line-height: 1.4;
            font-weight: 400;
            text-align: justify;
        }

        .navbar {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            position: sticky !important;
            top: 0 !important;
            z-index: 1000 !important;
            background-color: #889F00 !important;
        }

        .navbar .navbar-brand {
            background-image: url("https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/boton.png");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            max-width: 80%;
            width: 400px;
            height: 70px;
            text-indent: -9999px;
            margin: auto;
        }

        .navbar .navbar-brand,
        .navbar .nav-link {
            color: #fff !important;
            font-weight: 600;
            transition: color 0.3s ease;

        }

        .navbar .nav-link:hover {
            color: rgba(25, 25, 25, 1) !important;
        }

        .navbar .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.1);
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }

        #navbarNav {
            justify-content: flex-end;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand nav-logo-anim" href="https://docs.google.com/forms/d/e/1FAIpQLSechst8n_RWawZgw1HYYfzPMH3djBDK_3ImiQuYOgBaQ2GcAw/viewform">Logo</a>
            <style>
                .nav-logo-anim {
                    transition: transform 0.3s cubic-bezier(.4, 2, .3, 1), box-shadow 0.3s;
                    box-shadow: 0 2px 8px rgba(136, 159, 0, 0.15);
                }

                .nav-logo-anim:hover,
                .nav-logo-anim:focus {
                    transform: scale(1.12) rotate(-2deg);
                    box-shadow: 0 8px 24px rgba(136, 159, 0, 0.25);
                    outline: none;
                }
            </style>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="   false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/#seminario">Seminario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/#agenda">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/#aliados">Aliados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <style>
        .cpnt-1 {
            width: 100%;
            height: 40rem;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/fondo.png') no-repeat center center fixed;
            background-size: cover;
        }

        .capa1 {
            position: relative;
            width: 100%;
            height: 40rem;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-ppal {
            position: absolute;
            left: 5%;
            bottom: 5%;
            width: 300px;
        }

        @media (min-width: 768px) {
            .logo-ppal {
                width: 500px;
            }
        }

        /* Ajuste responsive para móviles */
        @media (max-width: 576px) {

            .cpnt-1,
            .capa1 {
                height: 18rem;
                background-attachment: scroll !important;
                background-size: cover !important;
                background-position: center !important;
            }

            .logo-ppal {
                width: 180px;
            }
        }
    </style>
    <div class="cpnt-1">
        <div class="capa1">
            <div class="logo logo-ppal">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/logo.png" alt="logo Semana de la Seguridad Vial">
            </div>
        </div>
    </div>

    <style>
        .cpnt-2 {
            background-color: #ffffff;
        }

        .cpnt-2 h2 {
            color: #4d541f;
            font-weight: 600;
        }

        #contador {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        #contador .circle {
            background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/circulo.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            width: 120px;
            height: 120px;
            min-width: 120px;
            min-height: 120px;
            max-width: 120px;
            max-height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10px;
            box-sizing: border-box;
        }

        #contador h3 {
            margin: 0;
            line-height: 1;
            font-size: 2.5rem;
            font-weight: 600;
            color: #f8f9fa;
        }

        #contador p {
            font-size: 1.1rem;
            color: #f8f9fa;
            margin: 0;
        }

        /* Responsive: solo mostrar días, horas y minutos en móviles y tablets */
        @media (max-width: 768px) {
            #contador {
                gap: 0.5rem;
            }

            #contador .circle {
                width: 80px;
                height: 80px;
                min-width: 80px;
                min-height: 80px;
                max-width: 80px;
                max-height: 80px;
                padding: 5px;
            }

            #contador h3 {
                font-size: 1.3rem;
            }

            #contador p {
                font-size: 0.9rem;
            }

            /* Oculta el círculo de segundos en móviles y tablets */
            #contador .circle[data-type="segundos"] {
                display: none !important;
            }
        }
    </style>
    <!-- Contador -->
    <div class="cpnt-2">
        <div class="container my-5">
            <div class="row">
                <div class="col text-center">
                    <h2>Encontrémonos en</h2>
                </div>
            </div>
            <div class="row my-4">
                <div id="contador" aria-label="Contador regresivo al evento" role="group">
                    <div class="circle mx-1 text-center" aria-label="Días restantes" data-type="dias">
                        <h3 id="dias" aria-live="polite">00</h3>
                        <p>Días</p>
                    </div>
                    <div class="circle mx-1 text-center" aria-label="Horas restantes" data-type="horas">
                        <h3 id="horas" aria-live="polite">00</h3>
                        <p>Horas</p>
                    </div>
                    <div class="circle mx-1 text-center" aria-label="Minutos restantes" data-type="minutos">
                        <h3 id="minutos" aria-live="polite">00</h3>
                        <p>Minutos</p>
                    </div>
                    <div class="circle mx-1 text-center" aria-label="Segundos restantes" data-type="segundos">
                        <h3 id="segundos" aria-live="polite">00</h3>
                        <p>Segundos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Configura la fecha del evento
        const eventoFecha = new Date('2025-10-01T00:00:00'); // Fecha de inicio del evento
        const eventoFin = new Date('2025-10-05T00:00:00'); // Fecha de fin del evento (un día más)

        function actualizarContador() {
            const ahora = new Date();
            let diferencia = eventoFecha - ahora;
            let mensaje = '';

            if (ahora >= eventoFin) {
                document.getElementById('contador').innerHTML = '<h3>El evento ha finalizado!</h3>';
                clearInterval(intervalo);
                return;
            } else if (diferencia <= 0) {
                document.getElementById('contador').innerHTML = '<h3>¡El evento está en curso!</h3>';
                clearInterval(intervalo);
                return;
            }

            let dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
            const horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
            const segundos = Math.floor((diferencia % (1000 * 60)) / 1000);

            // Sumar 1 día si la diferencia es positiva para incluir el día de inicio
            if (diferencia > 0) {
                dias = dias + 1;
            }

            document.getElementById('dias').textContent = String(dias).padStart(2, '0');
            document.getElementById('horas').textContent = String(horas).padStart(2, '0');
            document.getElementById('minutos').textContent = String(minutos).padStart(2, '0');
            document.getElementById('segundos').textContent = String(segundos).padStart(2, '0');
        }

        // Actualiza el contador cada segundo
        const intervalo = setInterval(actualizarContador, 1000);
        actualizarContador(); // Llama inmediatamente para evitar el retraso inicial
    </script>

    <style>
        .cpnt-3 {
            background-color: #f8f9fa;
        }

        .cpnt-3 .title {
            background-color: #4d541f;
            padding: 16px;
        }

        .cpnt-3 .title h2 {
            color: #f8f9fa;
            margin: 0;
            font-weight: 600;
            text-align: center;
            font-size: 1.8rem;
        }

        .cpnt-3 h2,
        .cpnt-3 p {
            color: rgba(77, 84, 31, 1);
        }

        .texto p {
            font-size: 1.4rem;
        }

        /* Responsive <p> size for mobile and tablets */
        @media (max-width: 991px) {

            .cpnt-3 p,
            .cpnt-3 .container .texto .paragrafo p,
            .texto p {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 576px) {

            .cpnt-3 p,
            .cpnt-3 .container .texto .paragrafo p,
            .texto p {
                font-size: 0.95rem;
            }
        }

        .video-responsive {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background-color: #000;
        }

        .video-responsive video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .cpnt-3 .container .texto {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            gap: 20px;
        }

        @media (min-width: 768px) {
            .cpnt-3 .container .texto {
                flex-direction: row;
                text-align: left;
            }

            .cpnt-3 .container .texto .paragrafo {
                padding-left: 20px;
            }
        }

        .cpnt-3 .container .texto img {
            max-width: 100%;
            height: auto;
        }

        .cpnt-3 .container .texto .paragrafo {
            flex: 1;
        }

        .cpnt-3 .container .texto .paragrafo p {
            text-align: justify;
            color: #4d541f;
        }

        /* Responsive title size for mobile and tablets */
        @media (max-width: 991px) {
            .cpnt-3 .title h2 {
                font-size: 1.3rem;
                padding: 8px 4vw;
            }
        }

        @media (max-width: 576px) {
            .cpnt-3 .title h2 {
                font-size: 1rem;
                padding: 6px 2vw;
            }
        }
    </style>
    <div class="cpnt-3">
        <div class="title">
            <h2>¿Qué es la XIX Semana de Seguridad Vial?</h2>
        </div>
        <div class="container my-5">
            <div class="video-responsive my-4 text-center" style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FSSNQsios3E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
            </div>
            <div class="texto my-4">
                <div class="col col-md-6 text-center">
                    <img class="img-responsive w-50" src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/img1.png" alt="¿Qué es la XIX Semana de Seguridad Vial?">
                </div>
                <div class="col col-6-md-6 paragrafo">
                    <p>
                        La XIX Semana de la Seguridad Vial es un espacio de ciudad que reúne a expertos nacionales e internacionales, entidades distritales y ciudadanía, para el intercambio de conocimientos y buenas prácticas, el diálogo constructivo y la difusión de tendencias internacionales que aporten a la construcción de una movilidad segura y protectora de la vida.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .cpnt-4 {
            background-color: #ffffff;
            margin-bottom: 100px;
        }

        .cpnt-4 .title {
            padding: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            position: relative;
        }

        .cpnt-4 .title h2 {
            display: inline-block;
            color: #f8f9fa;
            background-color: #94b600ff;
            margin: 0;
            font-weight: 600;
            text-align: center;
            font-size: 1.8rem;
            padding: 16px 32px;
            border-radius: 15px;
            width: 100%;
            max-width: 700px;
            box-sizing: border-box;
        }

        .cpnt-4 h2,
        .cpnt-4 p {
            color: rgba(77, 84, 31, 1);
        }

        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background 0.3s ease;
            position: relative;
            background: #fff;
        }

        .card:hover {
            transform: translateY(-10px);
            background: #fff;
        }

        .card-img {
            height: 250px;
            object-fit: cover;
            display: block;
            width: 100%;
            position: relative;
            z-index: 1;
            border-radius: 15px 15px 0 0;
        }

        .card-img-gradient {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 70%;
            pointer-events: none;
            z-index: 2;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.4) 60%, rgba(0, 0, 0, 0) 100%);
            border-radius: 0 0 15px 15px;
        }

        .card-title-gradient {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            z-index: 3;
            color: #fff;
            font-size: 1.4rem;
            font-weight: 600;
            text-align: center;
            padding: 16px 0;
            pointer-events: none;
            background: transparent;
            margin: 0;
            border-radius: 0 0 15px 15px;
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.3s ease;
            background: rgba(255, 255, 255, 1);
            color: #4d541f;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 0;
            border-radius: 15px;
            text-align: center;
            z-index: 4;
        }

        .card:hover .card-img-overlay,
        .card:focus-within .card-img-overlay {
            opacity: 1;
            height: 100%;
            border-radius: 15px;
        }

        .card-title {
            font-size: 1.4rem;
            font-weight: 600;
            background: #4d541f;
            color: #fff;
            margin: 0;
            padding: 16px 0;
            border-radius: 15px 15px 0px 0px;
            text-align: center;
            width: 100%;
            align-self: stretch;
        }

        .card-text {
            font-size: 1.2rem;
            padding: 20px;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 210px;
            text-align: center !important;
            font-weight: 400;
            line-height: 1.4;
        }

        /* Mejoras de accesibilidad y lectura en dispositivos táctiles */
        @media (max-width: 991px) {

            .cpnt-4 .title h2 {
                font-size: 1.15rem;
                padding: 10px 5vw;
                max-width: 95vw;
            }

            .card-title-gradient,
            .card-title {
                font-size: 1.15rem;
                padding: 12px 0;
            }

            .card-text {
                font-size: 1.05rem;
                padding: 14px;
                height: 200px;
            }
        }

        @media (max-width: 576px) {

            .cpnt-4 .title h2 {
                font-size: 1.1rem;
                padding: 8px 2vw;
                max-width: 98vw;
            }

            .card-title-gradient,
            .card-title {
                font-size: 1.1rem;
                padding: 10px 0;
            }

            .card-text {
                font-size: 0.95rem;
                padding: 10px;
                height: 200px;
            }
        }
    </style>
    <div class="cpnt-4">
        <!-- tres imagenes (ejes) Overlay Slide in bottom -->
        <div class="title">
            <h2>Ejes que nos mueven</h2>
        </div>
        <div class="container my-5">
            <div class="row my-4">
                <div class="col-md-4 mb-4">
                    <div class="card bg-dark text-white position-relative" tabindex="0">
                        <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/eje1b.png" class="card-img" alt="Eje 1">
                        <div class="card-img-gradient"></div>
                        <div class="card-title-gradient">En la calle</div>
                        <div class="card-img-overlay">
                            <h5 class="card-title">En la calle</h5>
                            <p class="card-text">Intervenimos el espacio público con infraestructura segura y acciones pedagógicas para proteger la vida.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card bg-dark text-white position-relative" tabindex="0">
                        <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/eje2b.png" class="card-img" alt="Eje 2">
                        <div class="card-img-gradient"></div>
                        <div class="card-title-gradient">A toda hora</div>
                        <div class="card-img-overlay">
                            <h5 class="card-title">A toda hora</h5>
                            <p class="card-text">Con controles en vía y presencia institucional, de día y de noche, protegemos la vida. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card bg-dark text-white position-relative" tabindex="0">
                        <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/eje3b.png" class="card-img" alt="Eje 3">
                        <div class="card-img-gradient"></div>
                        <div class="card-title-gradient">Con la gente</div>
                        <div class="card-img-overlay">
                            <h5 class="card-title">Con la gente</h5>
                            <p class="card-text">Trabajamos por la gente y con ella, porque su voz es clave para construir una movilidad segura. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .cpnt-5 {
            background-color: #f8f9fa;
            background-image: url("https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/image1.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            min-height: 420px;
            background-attachment: fixed;
            display: flex;
            align-items: stretch;
        }

        .cpnt-5 .filter {
            background-color: rgba(0, 0, 0, 0.6);
            width: 100%;
            min-height: 420px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 32px 12px;
            box-sizing: border-box;
            flex-direction: column;
            gap: 20px;
            position: relative;
        }

        .cpnt-5 .seminario-title-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 0;
            z-index: 2;
            position: static;
            top: auto;
            left: auto;
            transform: none;
        }

        .cpnt-5 .seminario-title {
            background: #fff;
            border-radius: 40px;
            padding: 18px 40px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            color: #4d541f;
            font-weight: 700;
            font-size: 2.2rem;
            text-align: center;
            margin: 0 auto 18px auto;
            max-width: 700px;
            line-height: 1.2;
            letter-spacing: 0.02em;
        }

        .cpnt-5 h2,
        .cpnt-5 p {
            color: #f8f9fa;
            margin: 0 auto;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7);
        }

        .cpnt-5 p {
            font-size: 1.35rem;
            font-weight: 400;
            line-height: 1.6;
            letter-spacing: 0.01em;
            max-width: 700px;
            margin: 0 auto;
            padding: 12px 0;
        }

        @media (max-width: 991px) {
            .cpnt-5 {
                min-height: 340px;
            }

            .cpnt-5 .seminario-title {
                font-size: 1.5rem;
                padding: 12px 18px;
                max-width: 98vw;
            }

            .cpnt-5 p {
                font-size: 1.05rem;
                padding: 8px 0;
                max-width: 98vw;
            }
        }

        @media (max-width: 576px) {
            .cpnt-5 {
                min-height: 220px;
                background-attachment: scroll;
            }

            .cpnt-5 .seminario-title {
                font-size: 1.1rem;
                padding: 8px 8px;
                border-radius: 18px;
            }

            .cpnt-5 p {
                font-size: 0.95rem;
                padding: 4px 0;
            }
        }

        .cpnt-5 img {
            margin-top: 20px;
            max-width: 400px;
        }
    </style>
    <div class="cpnt-5" id="seminario">
        <div class="filter">
            <div class="seminario-title-container">
                <h2 class="seminario-title">XIX Seminario Internacional de Seguridad Vial</h2>
            </div>
            <div class="container my-5">
                <div class="row my-4 justify-content-center">
                    <div class="col-lg-8 col-md-10 col-12">
                        <p>
                            El XIX Seminario Internacional de Seguridad Vial es el principal encuentro académico de expertos nacionales e internacionales, instituciones y ciudadanía, enfocado en compartir conocimientos, experiencias y tendencias innovadoras que impulsan una movilidad segura y protectora de la vida en Bogotá y el mundo. ¡Sé parte de la transformación vial y contribuye al futuro de la seguridad vial!
                        </p>
                    </div>
                </div>
                <div class="row my-4 justify-content-center">
                    <div class="col text-center">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSechst8n_RWawZgw1HYYfzPMH3djBDK_3ImiQuYOgBaQ2GcAw/viewform" target="_blank" rel="noopener">
                            <img class="img-responsive w-100 seminario-btn-anim" src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/boton.png" alt="XIX Seminario Internacional de Seguridad Vial">
                            <style>
                                .seminario-btn-anim {
                                    transition: transform 0.5s cubic-bezier(.4, 2, .3, 1);
                                }

                                .seminario-btn-anim:hover,
                                .seminario-btn-anim:focus {
                                    transform: scale(1.08);
                                }
                            </style>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .cpnt-6 {
            position: relative;
            background-color: #ffffff;
            background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/image2.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            min-height: 40rem;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .cpnt-6::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            min-height: 60%;
            pointer-events: none;
            background: linear-gradient(to top,
                    #000000 0%,
                    rgba(0, 0, 0, 0.8) 40%,
                    rgba(0, 0, 0, 0.4) 70%,
                    rgba(0, 0, 0, 0) 100%);
            z-index: 1;
        }

        .cpnt-6 .title {
            background-color: #4d541f;
            padding: 1rem;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 2;
        }

        .cpnt-6 .title h2 {
            color: #f8f9fa;
            margin: 0;
            font-weight: 600;
            text-align: center;
            font-size: 2rem;
            letter-spacing: 0.01em;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
        }

        .cpnt-6 .texto {
            position: absolute;
            left: 50%;
            bottom: 10%;
            transform: translateX(-50%);
            background: none;
            padding: 0;
            border-radius: 0;
            box-shadow: none;
            max-width: 700px;
            width: 90vw;
            z-index: 2;
        }

        .cpnt-6 .texto p {
            font-size: 1.5rem;
            text-align: justify;
            margin: 0;
            color: #fff;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7);
            font-weight: 500;
            line-height: 1.5;
            letter-spacing: 0.01em;
        }

        @media (max-width: 991px) {
            .cpnt-6 {
                min-height: 30rem;
            }

            .cpnt-6 .title h2 {
                font-size: 1.4rem;
            }

            .cpnt-6 .texto {
                max-width: 95vw;
                bottom: 8%;
            }

            .cpnt-6 .texto p {
                font-size: 1.15rem;
            }
        }

        @media (max-width: 576px) {
            .cpnt-6 {
                min-height: 25rem;
            }

            .cpnt-6 .title h2 {
                font-size: 1.1rem;
            }

            .cpnt-6 .texto {
                font-size: 1rem;
                bottom: 5%;
            }

            .cpnt-6 .texto p {
                font-size: 0.95rem;
            }
        }

        /* Mejora legibilidad seminario-title y cpnt-5 p */
        .cpnt-5 .seminario-title {
            color: #4d541f;
            font-size: 2.2rem;
            font-weight: 700;
            text-align: center;
            background: #fff;
            border-radius: 40px;
            padding: 18px 40px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            line-height: 1.3;
            letter-spacing: 0.01em;
            text-shadow: none;
        }

        .cpnt-5 p {
            color: #fff;
            font-size: 1.35rem;
            font-weight: 500;
            line-height: 1.7;
            letter-spacing: 0.01em;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7);
            background: rgba(0, 0, 0, 0.25);
            border-radius: 12px;
            padding: 16px 8px;
        }

        @media (max-width: 991px) {
            .cpnt-5 .seminario-title {
                font-size: 1.5rem;
                padding: 12px 18px;
            }

            .cpnt-5 p {
                font-size: 1.05rem;
                padding: 10px 6px;
            }
        }

        @media (max-width: 576px) {
            .cpnt-5 .seminario-title {
                font-size: 1.1rem;
                padding: 8px 8px;
            }

            .cpnt-5 p {
                font-size: 0.95rem;
                padding: 6px 2px;
            }
        }
    </style>
    <div class="cpnt-6" aria-labelledby="quienes-title">
        <div class="title">
            <h2 id="quienes-title">¿Quiénes nos acompañan?</h2>
        </div>
        <div class="texto" role="region" aria-label="Participantes">
            <p>
                Si eres ciudadano, haces parte de un colectivo, junta de acción comunal, eres estudiante, funcionario o trabajador, en la semana encontrarás diferentes espacios para participar.
            </p>
        </div>
    </div>

    <style>
        .cpnt-7 {
            background-color: #ffffff;
        }

        .cpnt-7 .title {
            background-color: #4d541f;
            padding: 16px;
            margin-bottom: 20px;
        }

        .cpnt-7 .title h2 {
            color: #fff;
            margin: 0;
            font-weight: 600;
            text-align: center;
            font-size: 1.8rem;
        }

        @media (max-width: 991px) {
            .cpnt-7 .title h2 {
                font-size: 1.3rem;
                padding: 8px 4vw;
            }
        }

        @media (max-width: 576px) {
            .cpnt-7 .title h2 {
                font-size: 1.1rem;
                padding: 6px 2vw;
            }
        }

        .texto p {
            font-size: 1.4rem;
            text-align: center;
            color: #fff;
        }

        .texto h3,
        .texto .title-3 {
            color: #fff;
        }

        .texto {
            background-color: transparent;
            padding: 20px;
            border-radius: 10px;
            position: relative;
            z-index: 2;
        }

        .cpnt-7 img {
            max-width: 300px;
        }

        .set-tabs {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Nav-tabs full width and single row on tablets/desktop */
        .nav-tabs {
            display: flex;
            flex-wrap: nowrap;
            width: 100%;
            border-bottom: 1px solid #dee2e6;
            overflow-x: auto;
        }

        .nav-tabs .nav-item {
            flex: 1 1 0;
            text-align: center;
            min-width: 120px;
        }

        .nav-tabs .nav-link {
            width: 100%;
        }

        @media (max-width: 767.98px) {
            .nav-tabs {
                flex-wrap: wrap;
            }

            .nav-tabs .nav-item {
                min-width: 80px;
                flex-basis: 50%;
            }
        }

        @media (max-width: 576px) {
            .nav-tabs {
                flex-direction: row;
                flex-wrap: wrap;
            }

            .nav-tabs .nav-item {
                min-width: 100%;
                flex-basis: 100%;
            }
        }

        .actividad {
            position: relative;
        }

        .actividad .actividad-bg {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            text-align: center;
            position: relative;
            min-height: 400px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            overflow: hidden;
        }

        .actividad .actividad-bg::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 70%;
            pointer-events: none;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.7) 50%, rgba(0, 0, 0, 0.0) 100%);
            z-index: 1;
        }

        .actividad .texto {
            position: absolute;
            left: 50%;
            bottom: 30px;
            transform: translateX(-50%);
            z-index: 2;
            width: 90%;
            background: transparent;
            padding: 0;
        }

        .actividad .texto h3,
        .actividad .texto .title-3 {
            color: #fff;
            font-size: 1.8rem;
            margin: 0 0 10px 0;
            font-weight: 600;
        }

        @media (max-width: 576px) {
            .actividad .actividad-bg {
                min-height: 250px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .actividad .texto h3,
            .actividad .texto .title-3 {
                color: #fff;
                font-size: 1.1rem;
                margin: 0 0 10px 0;
                font-weight: 600;
            }

            .actividad .texto {
                bottom: 10px;
                font-size: 1rem;
            }
        }

        .actividad .actividad-desc {
            padding: 1.5rem;
            background: #e0e0e0ff;
            margin-top: 16px;
            margin-bottom: 16px;
        }

        @media(min-width:768px) {
            .actividad .actividad-desc {
                padding: 3rem 6rem;
                background: #e0e0e0ff;
                margin-top: 16px;
                margin-bottom: 16px;
            }
        }

        .actividad .actividad-desc p {
            margin: 0;
            color: #2d2d2d;
            text-align: justify;
            font-weight: 400;
            line-height: 1.5;
            font-size: 1.2rem;
        }

        @media (max-width: 991px) {
            .actividad .actividad-desc p {
                font-size: 0.9rem;
            }
        }

        .actividad .actividad-inv {
            padding: 20px 18px;
            background: #dde0c9ff;
            margin-top: 16px;
            margin-bottom: 16px;
            display: flex;
            gap: 20px;
            justify-content: flex-start;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            align-items: center;

        }

        @media(min-width:968px) {
            .actividad .actividad-inv {
                padding: 32px 64px;
                background: #dde0c9ff;
                margin-top: 16px;
                margin-bottom: 16px;
                flex-direction: row !important;
                flex-wrap: nowrap;
                align-items: stretch;
                justify-content: flex-start;
            }
        }

        @media(min-width:368px) {
            .actividad .actividad-inv {
                flex-direction: column-reverse;
            }
        }

        .actividad .actividad-inv .hora {
            min-width: 200px;
            max-width: 300px;
            text-align: center;
            align-self: stretch;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            border-right: none;
            border-top: 1.5px solid #606060;
            margin-left: 16px;

        }

        @media(min-width:968px) {
            .actividad .actividad-inv .hora {
                border-right: 2px solid #606060 !important;
                border-top: none !important;
                margin-left: 0;
                padding-right: 32px;
                align-items: center;
                justify-content: center;
            }
        }

        @media(min-width:368px) {
            .actividad .actividad-inv .hora {
                border-right: none;
                border-top: 1.5px solid #606060;
                margin-left: 0;
                padding-right: 0;
                align-items: center;
                justify-content: flex-start;
                padding-top: 16px;
            }
        }

        .actividad .actividad-inv .hora p {
            margin: 0 0 16px 0;
            font-size: 1.5rem;
            color: #4d541f;
            font-weight: 600;
            padding-top: 24px;
        }

        @media (max-width: 991px) {
            .actividad .actividad-inv .hora p {
                font-size: 1.2rem;
                margin: 0 0 12px 0;
                padding-top: 16px;
            }
        }

        @media (max-width: 576px) {
            .actividad .actividad-inv .hora p {
                font-size: 1rem;
                margin: 0 0 8px 0;
                padding-top: 8px;
            }
        }

        .actividad .actividad-inv .invitados {
            min-width: 300px;
            max-width: 750px;
            padding: 0;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            box-sizing: border-box;
            align-items: center;
            justify-content: center;

        }

        @media(min-width:768px) {
            .actividad .actividad-inv .invitados {
                min-width: 300px;
                max-width: 750px;
                align-items: center;
                justify-content: center;
                flex-wrap: nowrap;
            }
        }

        .actividad .actividad-inv .invitados h4 {
            margin: 0 0 16px 0;
            font-size: 2rem;
            color: #4d541f;
            font-weight: 600;
        }

        @media (max-width: 991px) {
            .actividad .actividad-inv .invitados h4 {
                font-size: 1.5rem;
                margin: 0 0 12px 0;
            }
        }

        @media (max-width: 576px) {
            .actividad .actividad-inv .invitados h4 {
                font-size: 1.2rem;
                margin: 16px 0 16px 0;
            }
        }

        .actividad .actividad-inv .invitados .bustos {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
            width: 100%;
            box-sizing: border-box;
            justify-content: flex-start;
        }

        .actividad .actividad-inv .invitados .bustos .busto {
            box-sizing: border-box;
            flex: 1 1 140px;
            max-width: 180px;
            min-width: 140px;
        }

        @media (min-width: 992px) {
            .actividad .actividad-inv .invitados .bustos .busto {
                flex: 0 0 20%;
                max-width: 20%;
                min-width: 140px;
            }
        }

        @media (max-width: 991.98px) {
            .actividad .actividad-inv .invitados .bustos .busto {
                flex: 0 0 48%;
                max-width: 48%;
                min-width: 140px;
            }
        }

        @media (max-width: 575.98px) {
            .actividad .actividad-inv .invitados .bustos .busto {
                flex: 0 0 100%;
                max-width: 100%;
                min-width: 140px;
            }
        }

        .actividad .actividad-inv .invitados .bustos .busto img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 8px;
            max-width: 100%;
        }

        .actividad .actividad-inv .invitados .bustos p {
            color: #606060;
            font-size: 1.2rem;
            font-weight: 400;
            text-align: left;
        }

        @media (max-width: 991px) {
            .actividad .actividad-inv .invitados .bustos p {
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .actividad .actividad-inv .invitados .bustos p {
                font-size: 0.9rem;
            }
        }

        .actividad .actividad-inv .invitados .bustos .busto {
            text-align: center;
            max-width: 140px;
        }

        .actividad .actividad-inv .invitados .bustos .busto img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 8px;
        }

        .actividad .actividad-inv .invitados .bustos .busto p {
            margin: 0;
            font-size: 1rem;
            color: #2d2d2d;
            font-weight: 400;
            line-height: 1;
            text-align: center;
        }

        .actividad-1 .actividad-inv .invitados .bustos .busto p strong {
            font-weight: 600;
        }

        .coffee-break {
            background: #e0e0e0ff;
            text-align: center;
            font-size: 1.2rem;
            color: #2d2d2d;
            margin-top: 20px;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 16px;
        }

        .coffee-break p {
            color: #606060ff;
            font-size: 2rem;
            font-weight: 600;
            padding: 16px 32px;
            margin: 0;
        }
    </style>
    <div class="cpnt-7" id="agenda">
        <div class="title">
            <h2>Agéndate entre el 1 y el 4 de octubre</h2>
        </div>
        <div class="container">
            <div class="set-tabs" role="tablist" aria-label="Agenda por días">
                <ul class="nav nav-tabs mb-2" id="ssvTabs" role="tablist">
                    <?php
                    $dias = [
                        ['num' => 0, 'dia' => 'Martes', 'fecha' => '30/09', 'label' => 'Martes 30 de Septiembre'],
                        ['num' => 1, 'dia' => 'Miércoles', 'fecha' => '01/10', 'label' => 'Miércoles 1 de Octubre'],
                        ['num' => 2, 'dia' => 'Jueves', 'fecha' => '02/10', 'label' => 'Jueves 2 de Octubre'],
                        ['num' => 3, 'dia' => 'Viernes', 'fecha' => '03/10', 'label' => 'Viernes 3 de Octubre'],
                        ['num' => 4, 'dia' => 'Sábado', 'fecha' => '04/10', 'label' => 'Sábado 4 de Octubre'],
                    ];
                    foreach ($dias as $i => $d): ?>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link<?= $i === 0 ? ' active' : '' ?>"
                                id="dia<?= $d['num'] ?>-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#dia<?= $d['num'] ?>"
                                type="button"
                                role="tab"
                                aria-controls="dia<?= $d['num'] ?>"
                                aria-selected="<?= $i === 0 ? 'true' : 'false' ?>"
                                aria-label="<?= $d['label'] ?>">
                                <?php if ($i === 0): ?>
                                    <span class="fw-bold">Lanzamiento</span>
                                    <span class="separador"> | </span>
                                    <span>30 de septiembre</span>
                                <?php else: ?>
                                    <span class="fw-bold">Día <?= $d['num'] ?></span>
                                    <span class="separador"> | </span>
                                    <span><?= $d['label'] ?></span>
                                <?php endif; ?>
                            </button>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="tab-content" id="ssvTabsContent">
                    <div class="tab-pane fade show active" id="dia0" role="tabpanel" aria-labelledby="dia0-tab">
                        <div class="actividades">
                            <div class="actividad" id="actividad-0">
                                <div class="actividad-bg" style="aspect-ratio: 16/9; width: 100%; max-width: 100%; height: auto; background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_0_bg.png'); background-size: cover; background-position: center; overflow: hidden;">
                                </div>
                                <style>
                                    #actividad-0 .actividad-bg::after {
                                        display: none !important;
                                    }
                                </style>
                                <div class="actividad-desc">
                                    <p class="paragraph ph-1">Evento de lanzamiento oficial de la XIX Semana de la Seguridad Vial y presentación, a través de una experiencia inmersiva, de la Campaña “El exceso de velocidad mata. Respeta el límite”, una apuesta por la corresponsabilidad en las vías, para una movilidad más segura, fundamentada en la legitimación de los controles en vía y de los agentes de tránsito, como una autoridad que hace presencia para cumplir con un propósito que a todos nos mueve en las vías: proteger la vida.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dia1" role="tabpanel" aria-labelledby="dia1-tab">
                        <div class="actividades">
                            <div class="actividad" id="actividad-1">
                                <div class="actividad-bg" style="aspect-ratio: 50/9; width: 100%; max-width: 100%; height: auto; background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_01_bg.png'); background-size: cover; background-position: center; overflow: hidden;">
                                    <div class="texto">
                                        <h3 class="title-3">XIX Seminario Internacional de Seguridad Vial</h3>
                                        <p class="ph-1">Lugar: Universidad Nacional de Colombia. Teatro de nuevos espacios para las Artes.</p>
                                    </div>
                                </div>
                                <div class="actividad-desc">
                                    <p class="paragraph ph-1">Evento abierto al público interesado, con una importante trayectoria en Latinoamérica como una plataforma para conocer las últimas tendencias, innovaciones y estrategias transformadoras en seguridad vial. En esta edición, el Seminario propiciará un espacio en el que se resalten los aprendizajes de implementar diferentes tipos de medidas, estrategias o proyectos que promuevan comportamientos y espacios más seguros tanto a nivel local como internacional para salvar vidas. </p>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>8:30 a.m.<br>a 9:30 a.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>El Sistema Seguro en acción: de la teoría a la práctica</h4>
                                        <div class="bustos">
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto2.png" alt="Busto 2">
                                                <p><strong>Rebecca Bavinger</strong><br>Dpto de Salud Pública Mundial Bloomberg Philanthropies</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto3.png" alt="Busto 3">
                                                <p><strong>Claudia Adriazola</strong><br>Directora adjunta WRI</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto4.png" alt="Busto 4">
                                                <p><strong>Marcin Flieger</strong><br>Gerente de Desarrollo de Capacidades de Policía Vial</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto5.png" alt="Busto 5">
                                                <p><strong>Victor Macedo</strong><br>Secretario Ejecutivo de Conservación y Servicio Público de Fortaleza</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto28b.png" alt="Busto 28">
                                                <p><strong>Patrick Magnusson</strong><br>Gerente de Proyectos en la Agencia Sueca de Transporte</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="coffee-break">
                                <p>Coffee Break</p>
                            </div>

                            <div class="actividad" id="actividad-2">
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>10:00 a.m.<br>a 11:00 a.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Decisiones basadas en datos. Direccionamiento estratégico para priorización de medidas</h4>
                                        <div class="bustos">
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto6.png" alt="Busto 6">
                                                <p><strong>Nathaly Patiño</strong><br>Dirtectora de Gestión de Tránsito y Control de Tránsito y Transporte, SDM</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto7.png" alt="Busto 7">
                                                <p><strong>Elizaveta Zeynalova</strong><br>Gerente Senior de Investigación, Vital Strategies</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto25.png" alt="Busto 25">
                                                <p><strong>Fabrizio Prati</strong><br>Director de Diseño de la Iniciativa Global de Ciudades de Diseño - GDCI, Organización líder en el diseño de calles seguras</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto9.png" alt="Busto 9">
                                                <p><strong>Andrés Vecino</strong><br>Profesor Asociado, Johns Hopkins</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto10.png" alt="Busto 10">
                                                <p><strong>Gustavo Orozco</strong><br>Secretario de Movilidad de Cali</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="actividad" id="actividad-3">
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>11:00 a.m.<br>a 12:30 m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Estrategias de cambios de comportamiento</h4>
                                        <div class="bustos">
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto12.png" alt="Busto 12">
                                                <p><strong>María Fernanda Cárdenas</strong><br>Líder técnica regional de comunicaciones, Vital Strategies</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto26.png" alt="Busto 26">
                                                <p><strong>Darío Rincón</strong><br>Director Técnico en Comportamiento de la Agencia Nacional de Seguridad Vial</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto27.png" alt="Busto 27">
                                                <p><strong>Juan Pablo Trujillo</strong><br>Director de la estrategia “Medellín es como vos” Secretaria de Cultura Ciudadana de Medellín</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto24.png" alt="Busto 24">
                                                <p><strong>Fernando Poo</strong><br>Doctor en Psicología, investigador adjunto en el CONICET y profesor titular en la Facultad de Psicología de la Universidad de Buenos Aires</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto21.png" alt="Busto 21">
                                                <p><strong>Ana María Cataño</strong><br>Jefe oficina asesora de comunicaciones, SDM</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="coffee-break">
                                <p>Almuerzo libre</p>
                            </div>
                            <div class="actividad" id="actividad-4">
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>2:00 p.m.<br>a 3:15 p.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Calles seguras para todos: Experiencias en infraestructura que salva vidas</h4>
                                        <div class="bustos">
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto16.png" alt="Busto 16">
                                                <p><strong>Antonio Henrique</strong><br>Gerente general de Movilidad Humana, Recife</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto17.png" alt="Busto 17">
                                                <p><strong>Mónica Rueda</strong><br>Directora de la Unidad de Mantenimiento Vial</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto31.png" alt="Busto 31">
                                                <p><strong>Lionel Faure</strong><br>Movilidad Activa y espacio público, Métropole-Grenoble-Alpes</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto20.png" alt="Busto 20">
                                                <p><strong>Juan Camilo Rodríguez</strong><br>Director de Ingeniería de Tránsito, SDM</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto29.png" alt="Busto 29">
                                                <p><strong>Pierre Soulard</strong><br>Director de Infraestructura y Gestión Operativa de la Movilidad · Área Metropolitana de Lyon</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto30.png" alt="Busto 30">
                                                <p><strong>Nicolás Correal</strong><br>Subsecretario de Política de la Movilidad, SDM</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto34.png" alt="Busto 30">
                                                <p><strong>Diego Caballero Cabral</strong><br>Coordinador de Seguridad Vial en Vía Sumapaz</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="coffee-break">
                                <p>Coffee Break</p>
                            </div>
                            <div class="actividad" id="actividad-5">
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>3:30 p.m.<br>a 5:00 p.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Voces que Guían: Encuentros que sanan</h4>
                                        <div class="bustos">
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto35.png" alt="Busto 35">
                                                <p><strong>Nury Alvarado Picas</strong><br>Funcionaria de la Comisión Nacional de Seguridad de Tránsito - Ministerio de Transporte y Telecomunicaciones de Chile</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto32.png" alt="Busto 32">
                                                <p><strong>Iván Darío Tarazona Manrique</strong><br>Decano de Derecho de la Universidad Santo Tomás</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto13a.png" alt="Busto 13a">
                                                <p><strong>Brayan Monroy</strong><br>Coordinador de formación: E-Masivo S.A.S.</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto15.png" alt="Busto 15">
                                                <p><strong>Mary Bottagisio</strong><br>Fundadora Liga Contra la Violencia Vial</p>
                                            </div>
                                            <div class="busto">
                                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/busto33.png" alt="Busto 33">
                                                <p><strong>Giovanny Andrés García Rodríguez</strong><br>Subsecretario de Servicios a la Ciudadanía, SDM</p>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="actividad" id="actividad-6">
                                    <div class="actividad-inv">
                                        <div class="hora">
                                            <p>5:00 p.m.<br>a 7:00 p.m.</p>
                                        </div>
                                        <div class="invitados">
                                            <h4>Espacio de cierre y networking - Lanzamiento global de la guía 'Diseño para velocidades seguras' de GDCI</h4>
                                            <div class="bustos">
                                                <p>GDCI hará la presentación global de su nueva guía ‘Diseñando para velocidades seguras’. Esta nueva publicación se suma a una serie de guías que esta organización ha venido desarrollando para apoyar a los gobiernos locales a implementar las mejores prácticas de diseño de vías para proteger la vida de los más vulnerables en el sistema de movilidad.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="actividad" id="actividad-6a">
                                    <div class="actividad-bg" style="aspect-ratio: 50/9; width: 100%; max-width: 100%; height: auto; background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_06a_bg.png'); background-size: cover; background-position: center; overflow: hidden;">
                                        <div class="texto">
                                            <h3 class="title-3">Tintatón por la Seguridad Vial</h3>
                                            <p class="ph-1">Lugar: Av. Guayacanes con Cra 70C</p>
                                        </div>
                                    </div>
                                    <div class="actividad-inv">
                                        <div class="hora">
                                            <p>6:00 p.m.<br>a 9:00 p.m.</p>
                                        </div>
                                        <div class="invitados">
                                            <h4>Tintatón por la Seguridad Vial</h4>
                                            <div class="bustos">
                                                <p>A través de un ambiente cercano y un 'tinto', esta actividad busca acercar a los motociclistas con la Secretaría Distrital de Movilidad, permitiendo un espacio de diálogo, en el que los usuarios de la vía expongan su vivencia diaria, mientras se les brindan mensajes clave de autocuidado, responsabilidad en la conducción y promoción de comportamientos seguros en las vías. El objetivo es contribuir a la reducción de la siniestralidad vial mediante el entendimiento mutuo, la escucha y el fortalecimiento de prácticas seguras.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="dia2" role="tabpanel" aria-labelledby="dia2-tab">
                        <div class="actividades">

                            <div class="actividad" id="actividad-9a">
                                <div class="actividad-bg" style="aspect-ratio: 50/9; width: 100%; max-width: 100%; height: auto; background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_09a_bg.png'); background-size: cover; background-position: center; overflow: hidden;">
                                    <div class="texto">
                                        <h3 class="title-3">Caravana Día Movilidad Sostenible</h3>
                                        <!-- <p class="ph-1">Lugar: Por conﬁrmar</p> -->
                                    </div>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>8:00 a.m.<br>a 10:00 a.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Caravana Día Movilidad Sostenible</h4>
                                        <div class="bustos">
                                            <p>Es una jornada que se realiza el primer jueves de cada mes para promover viajes al trabajo o al estudio a pie, en bicicleta y en transporte público, con el fin de reducir la congestión vehicular, el sedentarismo, las emisiones que contribuyen a agravar el calentamiento global y los costos representados en dinero, tiempo y salud, entre otros impactos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="actividad" id="actividad-7">
                                <div class="actividad-bg" style="aspect-ratio: 50/9; width: 100%; max-width: 100%; height: auto; background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_03_bg.png'); background-size: cover; background-position: center; overflow: hidden;">
                                    <div class="texto">
                                        <h3 class="title-3">Innovadores Escolares en Seguridad Vial</h3>
                                        <p class="ph-1">Lugar: Por conﬁrmar</p>
                                    </div>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>6:00 a.m.<br>a 12:00 m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Innovadores Escolares en Seguridad Vial</h4>
                                        <div class="bustos">
                                            <p>Evento en el marco del Acuerdo del Concejo 650 de 2016: Este acuerdo creó el programa ‘Innovadores Escolares en Seguridad Vial’ en Bogotá, cuyo objetivo es fomentar la educación vial en todas las etapas de la vida e involucrar activamente a la comunidad educativa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="actividad" id="actividad-8">
                                <div class="actividad-bg" style="aspect-ratio: 50/9; width: 100%; max-width: 100%; height: auto; background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_04_bg.png'); background-size: cover; background-position: center; overflow: hidden;">

                                    <div class="texto">
                                        <h3 class="title-3">Infraestructura que salva vidas </h3>
                                        <p class="ph-1">Lugar: Av. Boyacá </p>
                                    </div>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>10:00 p.m.<br>a 4:00 p.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Infraestructura que salva vidas </h4>
                                        <div class="bustos">
                                            <p>Socializar de manera participativa la implementación integral de medidas de gestión de la velocidad en la Av. Boyacá, especialmente los resaltos parabólicos, mediante un recorrido con ciudadanía al tramo intervenido y un ejercicio de aproximación a la medición de su impacto en la reducción de los excesos de velocidad.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="actividad" id="actividad-11">
                                <div class="actividad-bg" style="aspect-ratio: 50/9; width: 100%; max-width: 100%; height: auto; background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_02_bg.png'); background-size: cover; background-position: center; overflow: hidden;">
                                    <div class="texto">
                                        <h3 class="title-3">Tintatón por la Seguridad Vial</h3>
                                        <p class="ph-1">Lugar: Fundación Universitaria del Área Andina</p>
                                        <p class="ph-2">Carrera 14 No. 68 – 26</p>
                                    </div>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>6:00 p.m.<br>a 9:00 p.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Tintatón por la Seguridad Vial</h4>
                                        <div class="bustos">
                                            <p>A través de un ambiente cordial y un 'tinto', esta actividad busca acercar a los motociclistascon la Secretaría Distrital de Movilidad. Se creará un espacio de diálogo donde los usuarios dela vía podrán exponer su vivencia diaria, mientras se les brindan mensajes clave deautocuidado, responsabilidad en la conducción y promoción de comportamientos seguros en las vías. El objetivo es contribuir a la reducción de la siniestralidad vial mediante el entendimiento mutuo, la escucha y el fortalecimiento de prácticas seguras.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dia3" role="tabpanel" aria-labelledby="dia3-tab">
                        <div class="actividades">
                            <div class="actividad" id="actividad-12">
                                <div class="actividad-bg" style="aspect-ratio: 50/9; width: 100%; max-width: 100%; height: auto; background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_08_bg.png'); background-size: cover; background-position: center; overflow: hidden;">
                                    <div class="texto">
                                        <h3 class="title-3">Desafío local por la vida en las vías</h3>
                                        <p class="ph-1">Lugar: Por conﬁrmar</p>
                                    </div>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>7:00 a.m.<br>a 8:00 a.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Desafío local por la vida en las vías</h4>
                                        <div class="bustos">
                                            <p>Lanzamiento oficial del Desafío Local por la Vida en las Vías y socialización con las alcaldías locales, como una nueva iniciativa de la Secretaría Distrital de Movilidad que busca incentivar la implementación de acciones que fortalezcan la movilidad segura y accesible en las 20 localidades de Bogotá.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="actividad" id="actividad-13">
                                <div class="actividad-bg" style="aspect-ratio: 50/9; width: 100%; max-width: 100%; height: auto; background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_11_bg.png'); background-size: cover; background-position: center; overflow: hidden;">
                                    <div class="texto">
                                        <h3 class="title-3">Reconocimientos RSV 2025</h3>
                                        <p class="ph-1">Lugar: Universidad Javeriana, auditorio Carlos Corredor</p>
                                    </div>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>8:30 a.m.<br>a 12:00 m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Reconocimientos RSV 2025</h4>
                                        <div class="bustos">
                                            <p>Este año, la Semana de la Seguridad Vial reconocerá iniciativas postuladas que demostraron un compromiso excepcional durante el año para promover la seguridad vial con sus colaboradores y comunidades. Se otorgarán Sellos en Seguridad Vial en las categorías 'Salvavidas en Moto', ‘Planes Estratégicos de Seguridad Vial' y ‘Centros de enseñanza automovilística’ además de Reconocimientos en Buenas Prácticas (oro, plata y bronce) para micro, pequeñas, medianas y grandes empresas, premiando los tres primeros puestos. También se entregarán distinciones especiales a las empresas vinculadas al 'Plan Padrino 2025' y a colectivos ciudadanos que promuevan la movilidad peatonal y la movilidad segura en bicicleta y motocicleta.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="actividad" id="actividad-14">
                                <div class="actividad-bg" style="aspect-ratio: 50/9; width: 100%; max-width: 100%; height: auto; background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_12_bg.png'); background-size: cover; background-position: center; overflow: hidden;">
                                    <div class="texto">
                                        <h3 class="title-3">Movi-Innova 2025: Datathon</h3>
                                        <p class="ph-1">Lugar: Secretaría de movilidad, sede Chicó</p>
                                    </div>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>8:00 a.m.<br>a 5:00 p.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Movi-Innova 2025: Datathon</h4>
                                        <div class="bustos">
                                            <p>Este evento busca fomentar la innovación en movilidad a través de un hackathon donde equipos multidisciplinarios trabajarán en soluciones creativas para los desafíos de movilidad en Bogotá. Los participantes contarán con mentorías y recursos para desarrollar sus ideas y prototipos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="actividad" id="actividad-15">
                                <div class="actividad-bg" style="aspect-ratio: 50/9; width: 100%; max-width: 100%; height: auto; background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_09_bg.png'); background-size: cover; background-position: center; overflow: hidden;">
                                    <div class="texto">
                                        <h3 class="title-3">Taller Seguridad Vial y Género: La movilidad del cuidado, de la teoría a la práctica</h3>
                                        <p class="ph-1">Lugar: Universidad Javeriana, ediﬁcio Fernando Barón </p>
                                    </div>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>2:00 p.m.<br>a 5:00 p.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Taller Seguridad Vial y Género: La movilidad del cuidado, de la teoría a la práctica</h4>
                                        <div class="bustos">
                                            <p>Aplicar un lente de género e interseccional para diseñar e idear soluciones de seguridad vial que respondan a las diversas realidades y necesidades en el territorio. Este taller tendrá como insumo los resultados de la Estrategia de Movilidad del Cuidado en manzana del cuidado de Tunjuelito.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="actividad" id="actividad-16">
                                <div class="actividad-bg" style="aspect-ratio: 50/9; width: 100%; max-width: 100%; height: auto; background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_10_bg.png'); background-size: cover; background-position: center; overflow: hidden;">
                                    <div class="texto">
                                        <h3 class="title-3">Taller Técnico para la Actualización del Manual de Planeación de la Movilidad Urbana en Bogotá</h3>
                                        <p class="ph-1">Lugar: Universidad Javeriana, ediﬁcio Fernando Barón </p>
                                    </div>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>2:00 p.m.<br>a 5:00 p.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Taller Técnico para la Actualización del Manual de Planeación de la Movilidad Urbana en Bogotá</h4>
                                        <div class="bustos">
                                            <p>Generar un espacio de trabajo colaborativo y técnico con actores clave del ecosistema de movilidad de Bogotá, para analizar, discutir y enriquecer los contenidos temáticos propuestos en la actualización del Manual de Planeación y Diseño, alineado con los principios de movilidad sostenible, segura, equitativa y resiliente.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="actividad" id="actividad-17">
                                <div class="actividad-bg" style="aspect-ratio: 50/9; width: 100%; max-width: 100%; height: auto; background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_07_bg.png'); background-size: cover; background-position: center; overflow: hidden;">
                                    <div class="texto">
                                        <h3 class="title-3">Tintatón por la Seguridad Vial</h3>
                                        <p class="ph-1">Lugar: Av. Boyacá con Calle 53, costado oriental</p>
                                    </div>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>6:00 p.m.<br>a 9:00 p.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Tintatón por la Seguridad Vial</h4>
                                        <div class="bustos">
                                            <p>A través de un ambiente cordial y un 'tinto', esta actividad busca acercar a los motociclistas con la Secretaría Distrital de Movilidad. Se creará un espacio de diálogo donde los usuarios de la vía podrán exponer su vivencia diaria, mientras se les brindan mensajes clave de autocuidado, responsabilidad en la conducción y promoción de comportamientos seguros en las vías. El objetivo es contribuir a la reducción de la siniestralidad vial mediante el entendimiento mutuo, la escucha y el fortalecimiento de prácticas seguras.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="dia4" role="tabpanel" aria-labelledby="dia4-tab">
                        <div class="actividades">
                            <div class="actividad" id="actividad-19">
                                <div class="actividad-bg" style="aspect-ratio: 50/9; width: 100%; max-width: 100%; height: auto; background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_14_bg.png'); background-size: cover; background-position: center; overflow: hidden;">
                                    <div class="texto">
                                        <h3 class="title-3"> Entrega a la comunidad del Proyecto Estratégico Peatonal - Barrio Colombia</h3>
                                        <p class="ph-1">Lugar: Calle 71A con Carrera 20</p>
                                    </div>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>8:00 a.m.<br>a 11:00 a.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4> Entrega a la comunidad del Proyecto Estratégico Peatonal - Barrio Colombia</h4>
                                        <div class="bustos">
                                            <p> En Bogotá, nuestra prioridad en las vías siempre será proteger la vida de todas las personas que se mueven en las vías, priorizando a los más vulnerables como peatones y ciclistas. Por eso, desde la Secretaría Distrital de Movilidad, invitamos a la comunidad a participar en la entrega oficial del Proyecto Estratégico Peatonal – Barrio Colombia, una intervención urbanística que promueve la seguridad vial y la transformación de un espacio residual en un lugar seguro, accesible y sostenible para peatones y ciclistas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="actividad" id="actividad-18">
                                <div class="actividad-bg" style="background-image: url('https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/actividad_13_bg.png');">
                                    <div class="texto">
                                        <h3 class="title-3">Día del Motociclista</h3>
                                        <p class="ph-1">Lugar: Casa de la Cultura Ciudad Bolívar</p>
                                    </div>
                                </div>
                                <div class="actividad-desc">
                                    <div class="invitados">
                                        <div class="bustos">
                                            <p>Fomentar una cultura para la movilidad segura y convivencia responsable entre los motociclistas y hacía los demás usuarios de las vías. Este día busca ser un espacio de reconocimiento y aprendizaje donde los participantes puedan disfrutar de actividades recreativas, informativas y de sensibilización enfocadas en seguridad vial. En la jornada se realizará un curso teórico-práctico para motociclistas en la mañana, acompañado durante el día por una feria de servicios y el concurso “Reto Más Lento, Más Pro”, que premia el mayor dominio de la moto en una pista de habilidades. En la tarde se llevará a cabo un reconocimiento a clubes motociclistas comprometidos con la seguridad vial, quienes compartirán sus experiencias para inspirar mejores comportamientos en la vía. Finalmente, con este evento se espera dar cumplimiento al Acuerdo 550 de 2014 del Concejo de Bogotá mediante el cual se establece el día distrital de los motociclistas.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>7:30 a.m.<br>a 11:30 a.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Curso Teórico Práctico de Conducción para Motociclistas</h4>
                                        <div class="bustos">
                                            <p>Aprende técnicas de conducción, normatividad y seguridad vial.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center align-items-center">
                                                <a href="https://forms.gle/1japkZHtvoUK8fEZA" class="link-inscripcion d-inline-block" style="border:none;background:none;padding:0;">
                                                    <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/btn_ins_2.png" alt="Inscríbete aquí" class="img-responsive mx-auto d-block" style="max-width:220px;transition:transform 0.3s cubic-bezier(.4,2,.3,1);cursor:pointer;border:none;background:none;box-shadow:none;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        .link-inscripcion img {
                                            border: none !important;
                                            background: none !important;
                                            box-shadow: none !important;
                                            display: block;
                                            margin-left: auto;
                                            margin-right: auto;
                                        }

                                        .link-inscripcion img:hover,
                                        .link-inscripcion img:focus {
                                            transform: scale(1.08);
                                            box-shadow: 0 8px 24px rgba(148, 182, 0, 0.25);
                                            outline: none;
                                        }
                                    </style>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>10:00 a.m.<br>a 4:00 p.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Feria de Servicios para Motociclistas</h4>
                                        <div class="bustos">
                                            <p>Información sobre mantenimiento preventivo, diagnóstico de emisiones, orientación en trámites y mucho más.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>10:00 a.m.<br>a 4:00 p.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Reto &lsquo;Más lento, más pro&rsquo;</h4>
                                        <div class="bustos">
                                            <p>El concurso "Reto &lsquo;Más lento, más pro&rsquo;" es una competencia diseñada para evaluar y premiar las habilidades de control y equilibrio de los motociclistas en una pista de habilidades. Los participantes deberán completar un recorrido a baja velocidad, demostrando su destreza para maniobrar la moto sin perder el equilibrio ni tocar el suelo con los pies. El objetivo del concurso es fomentar la práctica de técnicas de conducción segura y promover la importancia del control del vehículo en situaciones de tráfico. Los ganadores serán reconocidos por su habilidad y se les otorgarán premios que incentiven su compromiso con la seguridad vial.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center align-items-center">
                                                <a href="https://forms.gle/bPhxWCXoFp44TGxD6" class="link-inscripcion">
                                                    <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/btn_ins_2.png" alt="Inscríbete aquí" class="img-responsive mx-auto d-block" style="max-width:220px;transition:transform 0.3s cubic-bezier(.4,2,.3,1);cursor:pointer;border:none;background:none;box-shadow:none;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="actividad-inv">
                                    <div class="hora">
                                        <p>2:00 p.m.<br>a 3:00 p.m.</p>
                                    </div>
                                    <div class="invitados">
                                        <h4>Reconocimiento a Clubes Motociclistas Comprometidos con la Seguridad Vial: Un homenaje a quienes están más comprometidos con la seguridad vial</h4>
                                        <div class="bustos">
                                            <p>Este reconocimiento tiene como objetivo destacar y celebrar el compromiso de los clubes motociclistas que han demostrado un liderazgo ejemplar en la promoción de la seguridad vial. Durante el evento, se reconocerán las iniciativas y acciones llevadas a cabo por estos clubes para fomentar prácticas seguras entre sus miembros y la comunidad en general. Los clubes serán invitados a compartir sus experiencias y estrategias exitosas, inspirando a otros a seguir su ejemplo. Este reconocimiento busca fortalecer la colaboración entre los motociclistas y las autoridades de tránsito para mejorar la seguridad en las vías.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .set-tabs .nav-tabs {
                display: flex;
                flex-wrap: nowrap;
                width: 100%;
                border-bottom: 1px solid #dee2e6;
                overflow-x: clip;
            }

            .set-tabs .nav-item {
                flex: 1 1 0;
                text-align: center;
                min-width: 120px;
            }

            .set-tabs .nav-link {
                width: 100%;
                padding: 0.75rem 0.25rem;
                font-size: 1rem;
                min-width: 80px;
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 4px;
                flex-wrap: wrap;
                justify-content: center;
            }

            @media (max-width: 767.98px) {
                .set-tabs .nav-tabs {
                    flex-wrap: wrap;
                }

                .set-tabs .nav-item {
                    min-width: 80px;
                    flex-basis: 50%;
                }
            }

            @media (max-width: 576px) {
                .set-tabs .nav-link {
                    font-size: 0.85rem;
                    padding: 0.5rem 0.1rem;
                }

                .set-tabs .nav-tabs {
                    flex-direction: row;
                    flex-wrap: wrap;
                }

                .set-tabs .nav-item {
                    min-width: 100%;
                    flex-basis: 100%;
                }
            }

            .set-tabs .nav-link .fw-bold {
                font-size: 1.3rem;
                color: #4d541f;
            }

            .set-tabs .nav-link .separador {
                color: #4d541f;
            }

            .set-tabs .nav-link span {
                font-size: 1rem;
                color: #4d541f;
            }

            .set-tabs .nav-link.active {
                background-color: #94b600ff !important;
                color: #fff !important;
                border-radius: 0;
            }

            .set-tabs .nav-link.active .fw-bold,
            .set-tabs .nav-link.active .separador,
            .set-tabs .nav-link.active span {
                color: #fff !important;
            }

            .tab-content .texto {
                border-radius: 10px;
                padding: 20px;
                margin-bottom: 10px;
                text-align: center;
            }

            .tab-content .texto h3 {
                font-size: 1.8rem;
                font-weight: 600;
                margin-bottom: 10px;
            }

            .tab-content .texto p {
                font-size: 1rem;
            }

            @media (max-width: 576px) {
                .tab-content .texto {
                    padding: 12px;
                }

                .tab-content .texto h3 {
                    font-size: 1rem;
                }

                .tab-content .texto p {
                    font-size: 0.9rem;
                }
            }
        </style>
    </div>


    <style>
        .cpnt-8 {
            background-color: #dfdfddff;
            padding: 50px 0 0 0;
        }

        .cpnt-8 .title-container {
            background-color: #4d541f;
            border-radius: 30px;
            padding: 24px 32px;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .cpnt-8 .title-container h2 {
            color: #f8f9fa;
            margin: auto;
            font-weight: 600;
            font-size: 1.8rem;
            text-align: center;
        }

        @media (min-width: 992px) {
            .cpnt-8 .title-container h2 {
                font-size: 2.4rem;
            }
        }

        @media (max-width: 576px) {
            .cpnt-8 .title-container {
                padding: 16px 24px;
            }

            .cpnt-8 .title-container h2 {
                font-size: 1.4rem;
            }
        }

        .cpnt-8 .desc {
            color: rgba(77, 84, 31, 1);
            font-size: 0.9rem;
            text-align: justify;
            margin-top: 16px;
            font-weight: 400;
            padding: 2rem;
        }

        @media(min-width:768px) {
            .cpnt-8 .desc {
                font-size: 1.4rem;
                padding: 0;
            }
        }

        @media (max-width: 991px) {
            .cpnt-8 .row.align-items-center {
                flex-direction: column;
            }

            .cpnt-8 .col-lg-6 {
                width: 100%;
                max-width: 100%;
            }

            .cpnt-8 .carousel {
                margin-top: 32px;
            }
        }

        .cpnt-8 .carousel-inner {
            max-height: 150px;
            margin: auto;
        }

        .cpnt-8 .carousel-item img {
            max-height: 150px;
            object-fit: contain;
            margin: auto;
            padding: 1.5rem;
        }

        .cpnt-8 .btn {
            background-color: #4d541f;
            color: #f8f9fa;
            border: none;
            padding: 12px 24px;
            font-size: 1.2rem;
            border-radius: 30px;
            transition: background-color 0.3s, color 0.3s;
        }

        .cpnt-8 .btn:hover {
            background-color: #94b600ff;
            color: #fff;
        }

        /* Mejoras de controles de carrusel */
        .carousel-control-custom {
            background: rgba(77, 84, 31, 0.8);
            border: none;
            border-radius: 50%;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
            transition: background 0.2s;
        }

        .carousel-control-custom:focus {
            outline: 2px solid #94b600ff;
            background: rgba(148, 182, 0, 0.9);
        }

        .carousel-control-custom:hover {
            background: #94b600ff;
        }

        .carousel-control-custom svg {
            width: 24px;
            height: 24px;
            fill: #fff;
        }

        .carousel-control-prev-custom {
            left: 10px;
        }

        .carousel-control-next-custom {
            right: 10px;
        }

        .carousel-control-pause-custom,
        .carousel-control-play-custom {
            position: static;
            display: inline-flex;
            margin-top: 16px;
            margin-bottom: 0;
            left: auto;
            right: auto;
            top: auto;
            bottom: auto;
            transform: none;
        }

        .carousel-control-pause-custom svg,
        .carousel-control-play-custom svg {
            width: 28px;
            height: 28px;
        }
    </style>
    <div class="cpnt-8" id="aliados">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <div class="title-container">
                        <h2>Nuestros aliados</h2>
                    </div>
                    <p class="desc">
                        Durante el desarrollo de la XIX Semana de la Seguridad Vial, contamos con el apoyo de diferentes empresas, organizaciones nacionales e internacionales que nos acompañan en los eventos y lanzamientos de la semana, y que velan por la seguridad vial. A todos, un agradecimiento especial.
                    </p>
                </div>
                <div class="col-lg-6 text-center position-relative">
                    <!-- carousel de logos -->
                    <div id="carouselLogos" class="carousel slide" data-bs-ride="carousel" aria-label="Carrusel de logos de aliados">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo01.png" class="d-block w-100" alt="Logo 1">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo02.png" class="d-block w-100" alt="Logo 2">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo03.png" class="d-block w-100" alt="Logo 3">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo04.png" class="d-block w-100" alt="Logo 4">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo05.png" class="d-block w-100" alt="Logo 5">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo06.png" class="d-block w-100" alt="Logo 6">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo07.png" class="d-block w-100" alt="Logo 7">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo08.png" class="d-block w-100" alt="Logo 8">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo09.png" class="d-block w-100" alt="Logo 9">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo10.png" class="d-block w-100" alt="Logo 10">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo11.png" class="d-block w-100" alt="Logo 11">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo12.png" class="d-block w-100" alt="Logo 12">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo13.png" class="d-block w-100" alt="Logo 13">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo14.png" class="d-block w-100" alt="Logo 14">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo15.png" class="d-block w-100" alt="Logo 15">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo16.png" class="d-block w-100" alt="Logo 16">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo17.png" class="d-block w-100" alt="Logo 17">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo18.png" class="d-block w-100" alt="Logo 18">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo19.png" class="d-block w-100" alt="Logo 19">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo20.png" class="d-block w-100" alt="Logo 20">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo21.png" class="d-block w-100" alt="Logo 21">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo22.png" class="d-block w-100" alt="Logo 22">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.movilidadbogota.gov.co/semana_seguridad_vial_2025/ssvLogo23.png" class="d-block w-100" alt="Logo 23">
                            </div>
                        </div>
                        <!-- Controles personalizados con accesibilidad -->
                        <button class="carousel-control-custom carousel-control-prev-custom" type="button" data-bs-target="#carouselLogos" data-bs-slide="prev" aria-label="Anterior" tabindex="0">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                            </svg>
                        </button>
                        <button class="carousel-control-custom carousel-control-next-custom" type="button" data-bs-target="#carouselLogos" data-bs-slide="next" aria-label="Siguiente" tabindex="0">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z" />
                            </svg>
                        </button>
                        <div class="w-100 d-flex justify-content-center align-items-center mt-2 mb-2">
                            <button id="carouselPauseBtn" class="carousel-control-custom carousel-control-pause-custom" type="button" aria-label="Pausar carrusel" tabindex="0">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <rect x="6" y="5" width="4" height="14" />
                                    <rect x="14" y="5" width="4" height="14" />
                                </svg>
                            </button>
                            <button id="carouselPlayBtn" class="carousel-control-custom carousel-control-play-custom d-none" type="button" aria-label="Reanudar carrusel" tabindex="0">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <polygon points="5,3 19,12 5,21" />
                                </svg>
                            </button>
                        </div>
                        <button id="carouselPlayBtn" class="carousel-control-custom carousel-control-play-custom d-none" type="button" aria-label="Reanudar carrusel" tabindex="0">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <polygon points="5,3 19,12 5,21" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="d-flex justify-content-center my-4">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdZYC6SO__aKEDf6znxGDq2SZVS0p8dgElJt-X1EdTeO9lZbw/viewform" target="_blank" rel="noopener" class="btn btn-lg btn-info">Vincúlate</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Usabilidad: controles accesibles y pausa/reanudar sofisticado
        document.addEventListener('DOMContentLoaded', function() {
            var carousel = document.getElementById('carouselLogos');
            var pauseBtn = document.getElementById('carouselPauseBtn');
            var playBtn = document.getElementById('carouselPlayBtn');
            var isPaused = false;

            // Asegura que Bootstrap esté cargado y la instancia se cree correctamente
            var bsCarousel = null;
            if (carousel) {
                bsCarousel = bootstrap.Carousel.getOrCreateInstance(carousel, {
                    interval: 2500,
                    ride: 'carousel',
                    pause: false
                });
            }

            // Pausar el carrusel
            pauseBtn.addEventListener('click', function() {
                if (bsCarousel) {
                    bsCarousel.pause();
                    isPaused = true;
                    pauseBtn.classList.add('d-none');
                    playBtn.classList.remove('d-none');
                    pauseBtn.setAttribute('aria-pressed', 'true');
                    playBtn.setAttribute('aria-pressed', 'false');
                }
            });

            // Reanudar el carrusel
            playBtn.addEventListener('click', function() {
                if (bsCarousel) {
                    bsCarousel.cycle();
                    isPaused = false;
                    playBtn.classList.add('d-none');
                    pauseBtn.classList.remove('d-none');
                    playBtn.setAttribute('aria-pressed', 'true');
                    pauseBtn.setAttribute('aria-pressed', 'false');
                }
            });

            // Teclado: controles accesibles
            [pauseBtn, playBtn].forEach(function(btn) {
                btn.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        btn.click();
                    }
                });
            });

            // Pausa automática al enfocar el carrusel (mejora de usabilidad)
            carousel.addEventListener('focusin', function() {
                if (bsCarousel && !isPaused) {
                    bsCarousel.pause();
                    isPaused = true;
                    pauseBtn.classList.add('d-none');
                    playBtn.classList.remove('d-none');
                }
            });

            // Reanuda al perder foco si estaba pausado por focus
            carousel.addEventListener('focusout', function() {
                if (bsCarousel && isPaused) {
                    bsCarousel.cycle();
                    isPaused = false;
                    playBtn.classList.add('d-none');
                    pauseBtn.classList.remove('d-none');
                }
            });

            // Tooltip para controles (opcional, mejora UX)
            [pauseBtn, playBtn].forEach(function(btn) {
                btn.title = btn.getAttribute('aria-label');
            });
        });
    </script>
    <style>
        footer {
            background-color: #4d541f;
            color: #f8f9fa !important;
            padding: 20px 0;
        }

        footer a {
            color: #f8f9fa;
            text-decoration: none;
            transition: transform 0.2s, filter 0.2s;
            display: inline-block;
            margin: 0 18px;
            /* Aumenta la distancia entre los logos */
        }

        footer a:hover img {
            transform: scale(1.2);
            filter: brightness(0) sepia(1) hue-rotate(60deg) saturate(5) invert(0.2);
        }

        footer img {
            filter: brightness(0) invert(1);
            transition: transform 0.2s, filter 0.2s;
        }

        footer p {
            margin: 0;
            font-size: 1rem;
            font-weight: 400;
            text-align: center;
            color: #f8f9fa !important;

        }
    </style>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <a href="https://www.facebook.com/secretariamovilidadbogota" class="mx-2" aria-label="Facebook">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" alt="Facebook" width="30">
                        </a>
                        <a href="https://twitter.com/SectorMovilidad" class="mx-2" aria-label="Twitter">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/twitter.svg" alt="Twitter" width="30">
                        </a>
                        <a href="https://www.instagram.com/sectormovilidad/" class="mx-2" aria-label="Instagram">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram" width="30">
                        </a>
                        <a href="https://www.youtube.com/user/secretariamovilidad?feature=guide" class="mx-2" aria-label="YouTube">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/youtube.svg" alt="YouTube" width="30">
                        </a>
                    </div>
                </div>
                <div class="col text-center">
                    <p>&copy; 2025 Secretaría Distrital de Movilidad - Bogotá, D.C. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.www.gov.co/layout/v4/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
