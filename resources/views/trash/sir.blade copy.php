<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Interoperable de Recaudo de Bogotá (SIR)</title>

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
        body {
            background-color: #f8f9fa;
            font-family: "Work Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: normal;
            font-size: 1em;
            font-style: normal;
            margin: 0px;
        }


        .cpnt-1 {
            width: 100%;
            margin: 0 auto;
            height: 675px;
            background: rgba(200, 230, 201, 0);
            background-image: url('/img/sir/sir1-b.jpg');
            background-size: cover;
            background-position: center;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            position: relative;
        }

        .cpnt-1 .wrapper {
            height: 675px;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.55);
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }

        .title {
            max-width: 600px;
            width: 50%;
            padding: 20px 0;
            text-align: left;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-weight: 600;

        }

        .title h1 {
            font-size: 4em;
            color: #ffffff;
            text-shadow: 2px 2px 4px #000000;
        }

        .list {
            max-width: 600px;
            width: 40%;
            padding: 20px;
            text-align: left;
        }

        .list ul {
            list-style-type: none;
            padding: 0;
        }

        .list ul li {
            margin-bottom: 10px;
        }

        .list ul li a {
            text-decoration: none;
            font-size: 1.5em;
            color: #ffffff;
            text-shadow: 1px 1px 2px #000000;
            transition: color 0.3s ease;
            position: relative;
        }

        .list ul li a:hover {
            color: #FFC107;
        }

        .list .spn-1 {
            background-image: url('/img/sir/sir-spn1.png');
            width: 30px;
            height: 30px;
            display: inline-block;
            background-size: cover;
            margin-right: 10px;
        }

        .list .spn-2 {
            background-image: url('/img/sir/sir-spn2.png');
            width: 30px;
            height: 30px;
            display: inline-block;
            background-size: cover;
            margin-right: 10px;
        }

        .list .spn-3 {
            background-image: url('/img/sir/sir-spn3.png');
            width: 30px;
            height: 30px;
            display: inline-block;
            background-size: cover;
            margin-right: 10px;
        }

        .list .spn-4 {
            background-image: url('/img/sir/sir-spn4.png');
            width: 30px;
            height: 30px;
            display: inline-block;
            background-size: cover;
            margin-right: 10px;
        }

        .list .spn-5 {
            background-image: url('/img/sir/sir-spn5.png');
            width: 30px;
            height: 30px;
            display: inline-block;
            background-size: cover;
            margin-right: 10px;
        }


        @media (max-width: 768px) {
            .title h1 {
                font-size: 2.5em;
            }

            .list ul li a {
                font-size: 1.2em;
            }

            .title,
            .list {
                width: 90%;
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            .title h1 {
                font-size: 2em;
            }

            .list ul li a {
                font-size: 1em;
            }

            .title,
            .list {
                width: 100%;
                padding: 16px;
            }
        }

        @media (min-width: 769px) and (max-width: 1024px) {
            .title h1 {
                font-size: 3em;
            }

            .list ul li a {
                font-size: 1.3em;
            }

            .title,
            .list {
                width: 60%;
                padding: 15px;
            }

        }

        .cpnt-1 .vector-1 {
            position: absolute;
            top: 42%;
            right: 12%;
            width: 260px;
            height: 60px;
            background-image: url('/img/sir/vr1.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .cpnt-1 .vector-2 {
            position: absolute;
            top: 85%;
            right: 5%;
            width: 260px;
            height: 60px;
            background-image: url('/img/sir/vr2.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media(min-width:375px) {
            .cpnt-1 .vector-1 {
                position: absolute;
                top: 42%;
                right: 12%;
                width: 310px;
                height: 60px;
                background-image: url('/img/sir/vr1.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-1 .vector-2 {
                position: absolute;
                top: 85%;
                right: 5%;
                width: 310px;
                height: 60px;
                background-image: url('/img/sir/vr2.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:425px) {
            .cpnt-1 .vector-1 {
                position: absolute;
                top: 43%;
                right: 4%;
                width: 390px;
                height: 60px;
                background-image: url('/img/sir/vr1.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-1 .vector-2 {
                position: absolute;
                top: 85%;
                right: 5%;
                width: 390px;
                height: 60px;
                background-image: url('/img/sir/vr2.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:768px) {
            .cpnt-1 .vector-1 {
                position: absolute;
                top: 46%;
                right: 25%;
                width: 530px;
                height: 60px;
                background-image: url('/img/sir/vr1.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-1 .vector-2 {
                position: absolute;
                top: 86%;
                right: 8%;
                width: 470px;
                height: 60px;
                background-image: url('/img/sir/vr2.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:1024px) {
            .cpnt-1 .vector-1 {
                position: absolute;
                top: 50%;
                right: 36%;
                width: 530px;
                height: 60px;
                background-image: url('/img/sir/vr1.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-1 .vector-2 {
                position: absolute;
                top: 89%;
                right: 16%;
                width: 470px;
                height: 60px;
                background-image: url('/img/sir/vr2.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width: 1440px) {
            .cpnt-1 .vector-1 {
                position: absolute;
                top: 24%;
                right: 13%;
                width: 530px;
                height: 60px;
                background-image: url('/img/sir/vr1.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-1 .vector-2 {
                position: absolute;
                top: 72%;
                right: 6%;
                width: 470px;
                height: 60px;
                background-image: url('/img/sir/vr2.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width: 1910px) {
            .cpnt-1 .vector-1 {
                position: absolute;
                top: 24%;
                right: 21%;
                width: 530px;
                height: 60px;
                background-image: url('/img/sir/vr1.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-1 .vector-2 {
                position: absolute;
                top: 72%;
                right: 13%;
                width: 470px;
                height: 60px;
                background-image: url('/img/sir/vr2.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width: 2560px) {
            .cpnt-1 .vector-1 {
                position: absolute;
                top: 24%;
                right: 24%;
                width: 530px;
                height: 60px;
                background-image: url('/img/sir/vr1.svg');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-1 .vector-2 {
                position: absolute;
                top: 72%;
                right: 18%;
                width: 470px;
                height: 60px;
                background-image: url('/img/sir/vr2.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }
    </style>
    <div class="cpnt-1">
        <div class="wrapper">

            <div class="title">
                <h1>Sistema Interoperable de Recaudo de Bogotá (SIR)</h1>
            </div>
            <div class="list">
                <ul>
                    <li>
                        <a href="#presentacion"><span class="spn-1"></span>Presentación del SIR</a>
                    </li>
                    <li>
                        <a href="#noticias"><span class="spn-4"></span>Noticias</a>
                    </li>
                    <li>
                        <a href="#documentos"><span class="spn-2"></span>Documentos</a>
                    </li>
                    <li>
                        <a href="#preguntas"><span class="spn-3"></span>Preguntas frecuentes</a>
                    </li>
                    <li>
                        <a href="#contacto"><span class="spn-5"></span>Contacto</a>
                    </li>
                </ul>
            </div>


        </div>
        <span class="vector vector-1"></span>
        <span class="vector vector-2"></span>
    </div>

    <style>
        .cpnt-3 {
            position: relative;
            width: 100%;
            margin: 0 auto;
            background-color: #FFFFFF;

        }

        .cpnt-3 .wrapper {
            position: relative;
            max-width: 1200px;
            width: 100%;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
            align-items: flex-end;
            margin: 0 auto;
        }

        .cpnt-3 .imagen {
            bottom: 0;
            left: 0;
            max-width: 400px;
            margin: 0 auto;
        }

        .cpnt-3 .imagen img {
            width: 460px;
            height: auto;
            display: block;
            border-radius: 10px;
        }

        .cpnt-3 .texto {
            max-width: 600px;
            width: 100%;
            padding: 40px;

        }

        .cpnt-3 .title h1 {
            font-size: 2.5em;
            color: #333333;
            margin-bottom: 20px;
        }

        .cpnt-3 .texto p {
            font-size: 1.1em;
            color: #151515;
            text-align: justify;
        }

        .cpnt-3 .vector-3 {
            position: absolute;
            top: 27%;
            right: 16%;
            width: 260px;
            height: 45px;
            background-image: url('/img/sir/vr3.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .cpnt-3 .vector-4 {
            position: absolute;
            top: 91%;
            left: 9%;
            width: 260px;
            height: 44px;
            background-image: url('/img/sir/vr4.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media(min-width:375px) {
            .cpnt-3 .vector-3 {
                position: absolute;
                top: 32%;
                right: 10%;
                width: 310px;
                height: 45px;
                background-image: url('/img/sir/vr3.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-3 .vector-4 {
                position: absolute;
                top: 93%;
                left: 8%;
                width: 310px;
                height: 44px;
                background-image: url('/img/sir/vr4.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:425px) {
            .cpnt-3 .vector-3 {
                position: absolute;
                top: 35%;
                right: 4%;
                width: 390px;
                height: 45px;
                background-image: url('/img/sir/vr3.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-3 .vector-4 {
                position: absolute;
                top: 93%;
                left: 4%;
                width: 390px;
                height: 44px;
                background-image: url('/img/sir/vr4.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }


        @media(min-width:768px) {
            .cpnt-3 .wrapper {
                position: relative;
                max-width: 1200px;
                width: 100%;
                text-align: center;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: flex-end;
                margin: 0 auto;
            }

            .cpnt-3 .vector-3 {
                position: absolute;
                top: 41%;
                right: 23%;
                width: 535px;
                height: 45px;
                background-image: url('/img/sir/vr3.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-3 .vector-4 {
                position: absolute;
                top: 93%;
                left: 4%;
                width: 390px;
                height: 44px;
                background-image: url('/img/sir/vr4.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:1024px) {
            .cpnt-3 .vector-3 {
                position: absolute;
                top: 6%;
                right: 8%;
                width: 535px;
                height: 45px;
                background-image: url('/img/sir/vr3.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-3 .vector-4 {
                position: absolute;
                top: 87%;
                left: 43%;
                width: 560px;
                height: 48px;
                background-image: url('/img/sir/vr4.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:1440px) {
            .cpnt-3 .vector-3 {
                position: absolute;
                top: 6%;
                right: 18%;
                width: 480px;
                height: 45px;
                background-image: url('/img/sir/vr3.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-3 .vector-4 {
                position: absolute;
                top: 85%;
                left: 49%;
                width: 680px;
                height: 58px;
                background-image: url('/img/sir/vr4.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:1910px) {
            .cpnt-3 .vector-3 {
                position: absolute;
                top: 6%;
                right: 25%;
                width: 480px;
                height: 45px;
                background-image: url('/img/sir/vr3.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-3 .vector-4 {
                position: absolute;
                top: 85%;
                left: 49%;
                width: 680px;
                height: 58px;
                background-image: url('/img/sir/vr4.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:2560px) {
            .cpnt-3 .vector-3 {
                position: absolute;
                top: 6%;
                right: 35%;
                width: 480px;
                height: 45px;
                background-image: url('/img/sir/vr3.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-3 .vector-4 {
                position: absolute;
                top: 85%;
                left: 49%;
                width: 680px;
                height: 58px;
                background-image: url('/img/sir/vr4.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }
    </style>

    <div class="cpnt-3" id="presentacion">
        <div class="wrapper">
            <div class="imagen img-1">
                <img class="img-responsive w-100" src="/img/sir/sir_img_2.png" alt="" title="">
            </div>

            <div class="texto">
                <h2 class="title title-1">¿Qué es?</h2>
                <p class="paragraph ph-1">Es el modelo tecnológico y operativo que integrará los pagos de todos los sistemas de transporte público de Bogotá, permitiendo la interoperabilidad entre medios de pago, la integración tarifaria y la adopción de estándares internacionales para un servicio más eficiente, moderno y transparente.</p>

                <h2 class="title title-2">Visión</h2>
                <p class="paragraph ph-2">Consolidar una plataforma abierta, segura y flexible que integre los medios de pago y sistemas de recaudo del transporte público de Bogotá y la región, promoviendo una movilidad inteligente, interoperable y centrada en el usuario.</p>
            </div>
        </div>
        <span class="vector vector-3"></span>
        <span class="vector vector-4"></span>
    </div>

    <style>
        .cpnt-4 {
            position: relative;
            width: 100%;
            margin: 0 auto;
            background-color: #3C3C3B;
        }

        .cpnt-4 .wrapper {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            align-content: flex-start;
        }

        .cpnt-4 .texto {
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
            text-align: center;
        }

        .cpnt-4 .texto h2 {
            font-size: 2em;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .cpnt-4 .items {
            display: flex;
            flex-direction: column;
            align-items: stretch;
            justify-content: center;
            gap: 10px;
            padding: 20px;
        }

        .cpnt-4 .items div {
            display: table;
            font-size: 1.1em;
            background-color: #FFC107;
            color: #000000;
            margin-bottom: 10px;
            padding: 12px;
        }

        .cpnt-4 .video {
            width: 100%;
            max-width: 600px;
            margin: 40px auto;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        .cpnt-4 .vector-5 {
            position: absolute;
            top: 3%;
            left: 3%;
            width: 260px;
            height: 38px;
            background-image: url('/img/sir/vr5.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media(min-width:1200px) {
            .cpnt-4 .vector-5 {
                position: absolute;
                top: 3%;
                left: 3%;
                width: 512px;
                height: 38px;
                background-image: url('/img/sir/vr5.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            @media(min-width:768px) {

                .cpnt-4 .vector-5 {
                    position: absolute;
                    top: 15%;
                    left: -3%;
                    width: 728px;
                    height: 54px;
                    background-image: url('/img/sir/vr5.png');
                    background-size: cover;
                    background-repeat: no-repeat;
                }
            }
        }
    </style>
    <div class="cpnt-4">
        <div class="wrapper">
            <div class="video video-1">
                <video controls style="width: 100%;">
                    <source src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-08-2025/VIDEO_SIR-Sub_ingles.mp4" type="video/mp4" poster="" preload>
            </div>
            <div class="texto">
                <h2 class="title title-1">Objetivos</h2>
                <div class="items">
                    <div>Integrar múltiples medios de pago</div>
                    <div>Incrementar beneficios para el sistema</div>
                    <div>Facilitar información para planeación</div>
                    <div>Proveer facilidades para los usuarios</div>
            </div>

        </div>
    </div>
    <span class="vector vector-5"></span>
    </div>


    <style>
        .cpnt-2 {
            position: relative;
            width: 100%;
            margin: 0 auto;
            background-color: #FFC107;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cpnt-2 .wrapper {
            max-width: 1200px;
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
            align-content: flex-start;
            /* padding: 52px; */
            gap: 40px;
        }

        .cpnt-2 .texto {
            text-align: center;
            padding: 20px;
            max-width: 500px;
            width: 100%;
            margin: 0 auto;
        }

        .cpnt-2 .texto h2 {
            font-size: 2.5em;
            color: #333333;
            margin-bottom: 20px;
        }

        .cpnt-2 .texto p {
            font-size: 1.1em;
            color: #151515;
            text-align: justify;
            margin-bottom: 20px;
        }

        .cpnt-2 .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 16px;
            z-index: 1;
        }

        .cpnt-2 .card {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            width: 260px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .cpnt-2 .card:hover {
            transform: translateY(-5px);
        }

        .cpnt-2 .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .cpnt-2 .card-body {
            padding: 20px;
        }

        .cpnt-2 .card-title {
            font-size: 1.2em;
            color: #333333;
            margin-bottom: 10px;
        }

        .cpnt-2 .card-text {
            font-size: 0.9em;
            color: #666666;
            margin-bottom: 15px;
        }

        .cpnt-2 .btn {
            background-color: #F80020;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .cpnt-2 .btn:hover {
            background-color: #C70000;
        }

        @media (max-width: 768px) {

            .cpnt-2 .wrapper {
                max-width: 1200px;
                width: 100%;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: space-around;
                flex-wrap: wrap;
                align-content: flex-start;
                gap: 0px;
            }

            .cpnt-2 .texto h2 {
                font-size: 2em;
            }

            .cpnt-2 .texto p {
                font-size: 1em;
            }

            .cpnt-2 .cards {
                flex-direction: column;
                align-items: center;
                padding: 32px;

            }

            .cpnt-2 .card {
                width: 80%;
            }
        }

        @media (max-width: 480px) {
            .cpnt-2 .texto h2 {
                font-size: 1.5em;
            }

            .cpnt-2 .texto p {
                font-size: 0.9em;
            }

            .cpnt-2 .cards {
                flex-direction: column;
                align-items: center;
            }

            .cpnt-2 .card {
                width: 100%;
            }

        }

        .cpnt-2 .vector-6 {
            position: absolute;
            top: 18%;
            right: 78%;
            width: 260px;
            height: 20px;
            background-image: url('/img/sir/vr6.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .cpnt-2 .vector-7 {
            position: absolute;
            top: 65%;
            right: 0%;
            width: 260px;
            height: 85px;
            background-image: url('/img/sir/vr7.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media(min-width:1440px) {
            .cpnt-2 .vector-6 {
                position: absolute;
                top: 18%;
                right: 78%;
                width: 510px;
                height: 20px;
                background-image: url('/img/sir/vr6.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .cpnt-2 .vector-7 {
                position: absolute;
                top: 65%;
                right: 0%;
                width: 567px;
                height: 85px;
                background-image: url('/img/sir/vr7.png');
                background-size: cover;
                background-repeat: no-repeat;
            }

        }
    </style>
    <div class="cpnt-2" id="noticias">
        <div class="wrapper">
            <div class="texto">
                <h2 class="title title-1">Noticias</h2>
                <p class="paragraph ph-1">Esta sección cuenta con un espacio para compartir noticias asociadas al SIR, como eventos, fechas clave y demás de interés.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <img class="card-img-top" src="https://www.elespectador.com/resizer/v2/KQNBY5JFWJAQHGDQ42PYFR665Q.JPG?auth=3b3f5b8b081f4ce95af1d63d282a2198ea56c2bf0b62825b1237e5498270c39c&width=920&height=613&smart=true&quality=60" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Bogotá avanza en la modernización de sistema de pagos para el transporte público</h5>
                        <p class="card-text">El Distrito busca implementar un sistema interoperable para que los pasajeros puedan movilizarse con una solo tarjeta y cualquier medio de pago. </p>
                        <a href="https://www.elespectador.com/bogota/bogota-avanza-en-la-modernizacion-de-sistema-de-pagos-para-el-transporte-publico/" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://imagenes.noticiasrcn.com/cms/2025/07/12182510/Bogota-contara-con-nuevo-sistema-de-pago-interoperable-en-el-sistema-de-transporte-publico.webp?w=960" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Bogotá contará con nuevo sistema de pago interoperable en el sistema de transporte público</h5>
                        <p class="card-text">La ciudad implementará un modelo de recaudo integrado que permitirá pagar con diversos medios en TransMilenio y el Metro cuando entre en operación.</p>
                        <a href="https://www.noticiasrcn.com/colombia/bogota-tendra-nuevo-sistema-de-pago-en-el-sistema-de-transporte-publico-911718" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/11-07-2025/1_1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Bogotá avanza en un nuevo sistema de pago para el transporte : integrado y abierto</h5>
                        <p class="card-text">Bogotá trabaja para implementar el nuevo Sistema Interoperable de Recaudo para el transporte público. Foto: Oficina de Comunicaciones Secretaría de Movilidad.</p>
                        <a href="https://www.movilidadbogota.gov.co/web/noticia/bogota_avanza_en_un_nuevo_sistema_de_pago_para_el_transporte_integrado_y_abierto" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
        <span class="vector vector-6"></span>
        <span class="vector vector-7"></span>
    </div>

    <style>
        .cpnt-5 {
            position: relative;
            width: 100%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 40px 0;
        }

        .cpnt-5 .wrapper {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: flex-start;
            flex-wrap: wrap;
            align-content: flex-start;

        }

        .cpnt-5 .texto {
            max-width: 600px;
            width: 100%;
            text-align: center;
            margin: 0 auto;
            padding: 20px;
        }

        .cpnt-5 .texto h2 {
            font-size: 2.5em;
            color: #333333;
            margin-bottom: 20px;
        }

        .cpnt-5 .texto p {
            font-size: 1.1em;
            color: #666666;
            text-align: justify;

        }

        .cpnt-5 img {
            max-width: 250px;
            width: 100%;
            margin: 0 auto;
            text-align: center;
            padding: 40px;
        }

        .cpnt-5 a {
            display: block;
            font-size: 0.8em;
            color: #004884;
            text-decoration: none;
            margin-top: 20px;
            word-wrap: break-word;
        }

        .cpnt-5 a:hover {
            color: #F80020;
            text-decoration: underline;
        }

        .cpnt-5 .questions {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }


        .cpnt-5 .vector-8 {
            position: absolute;
            top: 9%;
            left: 10%;
            width: 260px;
            height: 35px;
            background-image: url('/img/sir/vr8.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media(min-width:375px) {
            .cpnt-5 .vector-8 {
                position: absolute;
                top: 11%;
                left: 5%;
                width: 340px;
                height: 35px;
                background-image: url('/img/sir/vr8.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:425px) {
            .cpnt-5 .vector-8 {
                position: absolute;
                top: 11%;
                left: 4%;
                width: 390px;
                height: 35px;
                background-image: url('/img/sir/vr8.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:1024px) {
            .cpnt-5 .vector-8 {
                position: absolute;
                top: 12%;
                left: 0%;
                width: 650px;
                height: 41px;
                background-image: url('/img/sir/vr8.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:1440px) {
            .cpnt-5 .vector-8 {
                position: absolute;
                top: 20%;
                left: 0%;
                width: 550px;
                height: 35px;
                background-image: url('/img/sir/vr8.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:1910px) {
            .cpnt-5 .vector-8 {
                position: absolute;
                top: 20%;
                left: 0%;
                width: 690px;
                height: 44px;
                background-image: url('/img/sir/vr8.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:2560px) {
            .cpnt-5 .vector-8 {
                position: absolute;


            }
        }
    </style>
    <div class="cpnt-5" id="preguntas">
        <div class="wrapper">

            <div class="texto">
                <h2 class="title title-1">Preguntas Frecuentes</h2>
                <p class="paragraph ph-1">Esta sección cuenta con las respuestas a las preguntas más comunes sobre el SIR y el proceso contractual. Las preguntas deberán ser agrupadas por tema para facilitar su lectura.</p>
                <p class="paragraph ph-2">Si la duda del usuario no aparece en el listado, puede formular una nueva consulta a través de un formulario disponible embebido en la página o accesible mediante Link o QR.</p>
                <img class="img-responsive w-100" src="/img/sir/qr.png" alt="" title="">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScBDZ1ZgXwp2xJIDwYlK5j5_xxP0f-vqkf-HnzSUN7kpVtVSQ/viewform?pli=1">docs.google.com/forms/d/e/1FAIpQLScBDZ1ZgXwp2xJIDwYlK5j5_xxP0f-vqkf-HnzSUN7kpVtVSQ/viewform?pli=1</a>
            </div>

            <div class="questions">

                <style>
                    /* Fuente iconografica */
                    @font-face {
                        font-family: "govco-font";
                        src: url("../assets/icons/fonts/govco-font-icons.ttf") format("truetype");
                        font-weight: normal;
                        font-style: normal;
                    }

                    /* Montserrat-SemiBold */
                    @font-face {
                        font-family: 'Montserrat-SemiBold';
                        src: url('../assets/fonts/Montserrat/Montserrat-SemiBold.ttf');
                    }

                    /* Montserrat-Bold */
                    @font-face {
                        font-family: 'Montserrat-Bold';
                        src: url('../assets/fonts/Montserrat/Montserrat-Bold.ttf');
                    }

                    /* WorkSans-Regular */
                    @font-face {
                        font-family: 'WorkSans-Regular';
                        src: url('../assets/fonts/Work_Sans/static/WorkSans-Regular.ttf');
                    }

                    html {
                        font-size: 100%;
                        /* 100% = 16px */
                    }

                    .accordion-govco .accordion-header {
                        line-height: 0;
                        margin: 0;
                    }

                    .accordion-govco .button-accordion-govco {
                        width: 100%;
                        text-align: left;
                        background-color: #ffffff;
                        border: 0;
                        min-height: 4.375rem;
                        padding: 0 1.5rem;
                        border-bottom: 0.125rem solid #3C3C3B30;
                        display: flex;
                        align-items: center;
                    }

                    .accordion-govco .button-accordion-govco:focus {
                        background-color: #ffffff;
                    }

                    .accordion-govco .text-button-accordion-govco {
                        font-family: Montserrat-SemiBold;
                        color: #333333;
                        font-size: 18px;
                        line-height: 1.4rem;
                    }

                    .accordion-govco .button-accordion-govco::after {
                        font-family: "govco-font";
                        line-height: 0;
                        font-size: 26px;
                        color: #F80020;
                        margin-left: auto;
                    }

                    .accordion-govco .button-accordion-govco::after {
                        content: "\e813";
                    }

                    .accordion-govco .button-accordion-govco.collapsed::after {
                        content: "\e814";
                    }

                    .accordion-govco .item-accordion-govco {
                        background-color: #ffffff;
                    }

                    .accordion-govco .body-accordion-govco {
                        padding: 1.875rem 1.5rem 1.875rem 1.5rem;
                        background-color: #F6F8F9;
                    }

                    .accordion-govco .title-one-accordion-govco {
                        color: #FFC107;
                        font-size: 18px;
                        font-family: Montserrat-SemiBold;
                        display: block;
                    }

                    .accordion-govco .title-two-accordion-govco {
                        color: #333333;
                        font-size: 16px;
                        font-family: Montserrat-Bold;
                        margin-left: 0.875rem;
                        margin-top: 1.875rem;
                        display: block;
                    }

                    .accordion-govco .text-one-accordion-govco {
                        color: #000000;
                        font-size: 16px;
                        font-family: WorkSans-Regular;
                        margin-left: 0.875rem;
                        margin-top: 0.938rem;
                        margin-bottom: 0;
                        display: block;
                        line-height: 1.5rem;
                    }

                    .accordion-govco .button-accordion-govco:disabled {
                        background-color: #737373;
                    }

                    .accordion-govco .button-accordion-govco:focus-visible {
                        outline: 0.125rem solid black;
                    }

                    .accordion-govco .button-accordion-govco:disabled .text-button-accordion-govco {
                        color: #FFFFFF;
                    }

                    .accordion-govco .button-accordion-govco:disabled::after {
                        color: #FFFFFF;
                    }

                    .accordion-govco .button-accordion-govco:disabled>* {
                        pointer-events: none;
                        color: #FFFFFF;
                    }
                </style>

                <div class="accordion-govco" id="accordionQuestion">
                    <div class="item-accordion-govco">
                        <h2 class="accordion-header" id="accordionPanels-1">
                            <button class="button-accordion-govco" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPanels-collapse1" aria-expanded="true" aria-controls="accordionPanels-collapse1">
                                <span class="text-button-accordion-govco">¿El SIR reemplazará el sistema de recaudo actual con la tarjeta tullave?</span>
                            </button>
                        </h2>
                        <div id="accordionPanels-collapse1" class="accordion-collapse collapse show" aria-labelledby="accordionPanels-1" data-bs-parent="#accordionQuestion">
                            <div class="body-accordion-govco">
                                <span class="title-two-accordion-govco">Respuesta:</span>
                                <p class="text-one-accordion-govco">ELa estrategia de Desarrollo del Proyecto SIR garantiza una transición sin traumatismos, que permite operar de forma segura mientras se avanza en la transformación tecnológica del recaudo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-accordion-govco">
                        <h2 class="accordion-header" id="accordionPanels-2">
                            <button class="button-accordion-govco collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPanels-collapse2" aria-expanded="false" aria-controls="accordionPanels-collapse2">
                                <span class="text-button-accordion-govco">¿Qué es el Estándar de Interoperabilidad?</span>
                            </button>
                        </h2>
                        <div id="accordionPanels-collapse2" class="accordion-collapse collapse" aria-labelledby="accordionPanels-2" data-bs-parent="#accordionQuestion">
                            <div class="body-accordion-govco">
                                <span class="title-two-accordion-govco">Respuesta:</span>
                                <p class="text-one-accordion-govco">Documento normativo y técnico central del SIR que establece las reglas y protocolos para la integración operativa de múltiples actores, tecnologías y medios de pago dentro del ecosistema del SIR, garantizando una operación coherente, segura y trazable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-accordion-govco">
                        <h2 class="accordion-header" id="accordionPanels-3">
                            <button class="button-accordion-govco collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPanels-collapse3" aria-expanded="false" aria-controls="accordionPanels-collapse3">
                                <span class="text-button-accordion-govco">¿Qué es la Unidad de certificación y homologación?</span>
                            </button>
                        </h2>
                        <div id="accordionPanels-collapse3" class="accordion-collapse collapse" aria-labelledby="accordionPanels-3" data-bs-parent="#accordionQuestion">
                            <div class="body-accordion-govco">
                                <span class="title-two-accordion-govco">Respuesta:</span>
                                <p class="text-one-accordion-govco">Es el grupo encargado de verificar que todos los actores, tecnologías, plataformas y dispositivos que se integren al Sistema Interoperable de Recaudo (SIR) cumplan con el estándar de interoperabilidad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-accordion-govco">
                        <h2 class="accordion-header" id="accordionPanels-4">
                            <button class="button-accordion-govco collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPanels-collapse4" aria-expanded="false" aria-controls="accordionPanels-collapse4">
                                <span class="text-button-accordion-govco">¿Qué es la Unidad de Seguridad?</span>
                            </button>
                        </h2>
                        <div id="accordionPanels-collapse4" class="accordion-collapse collapse" aria-labelledby="accordionPanels-4" data-bs-parent="#accordionQuestion">
                            <div class="body-accordion-govco">
                                <span class="title-two-accordion-govco">Respuesta:</span>
                                <p class="text-one-accordion-govco">Es el grupo encargado de mantener la resiliencia del ecosistema del SIR frente a riesgos tecnológicos, ciberataques, fraudes y fallos operativos, asegurando la confidencialidad, integridad, disponibilidad y trazabilidad de la información en todos los niveles del sistema, siguiendo el estándar de interoperabilidad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <span class="vector vector-8"></span>
    </div>

    <style>
        .cpnt-6 {
            position: relative;
            width: 100%;
            margin: 0 auto;
            background-color: #F6F8F9;
            padding: 40px 0;
        }

        .cpnt-6 .wrapper {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            display: flex;
            flex-direction: row;
            align-items: center;
            flex-wrap: wrap;
            align-content: center;
            justify-content: space-evenly;
        }

        .cpnt-6 .texto {
            max-width: 500px;
            width: 100%;
            text-align: center;
            padding: 20px;
        }

        .cpnt-6 h2 {
            font-size: 2.5em;
            color: #333333;
            margin-bottom: 20px;
        }

        .cpnt-6 p {
            font-size: 1.1em;
            color: #333333;
            text-align: justify;
            margin-bottom: 20px;
        }

        .cpnt-6 a {
            display: inline-block;
            font-size: 1.2em;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #FFC107;
            color: #151515;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
            margin: 16px;
            z-index: 1;
        }

        .cpnt-6 a:hover {
            background-color: #d7a200;
            color: #000000;
        }

        .cpnt-6 .vector-9 {
            position: absolute;
            visibility: hidden;
        }

        @media(min-width:375px) {

            .cpnt-6 .vector-9 {
                position: absolute;
                top: 66%;
                right: 9%;
                width: 310px;
                height: 156px;
                background-image: url('/img/sir/vr9.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:425px) {

            .cpnt-6 .vector-9 {
                position: absolute;
                top: 64%;
                right: 1%;
                width: 390px;
                height: 156px;
                background-image: url('/img/sir/vr9.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:768px) {
            .cpnt-6 .vector-9 {
                position: absolute;
                top: 61%;
                right: 8%;
                width: 681px;
                height: 156px;
                background-image: url('/img/sir/vr9.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:1024px) {
            .cpnt-6 .texto {
                z-index: 1;
            }

            .cpnt-6 .vector-9 {
                position: absolute;
                top: 25%;
                right: -9%;
                width: 681px;
                height: 156px;
                background-image: url('/img/sir/vr9.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:1440px) {
            .cpnt-6 .vector-9 {
                position: absolute;
                top: 26%;
                right: 5%;
                width: 690px;
                height: 162px;
                background-image: url('/img/sir/vr9.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:1910px) {
            .cpnt-6 .vector-9 {
                position: absolute;
                top: 26%;
                right: 17%;
                width: 690px;
                height: 162px;
                background-image: url('/img/sir/vr9.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:2560px) {
            .cpnt-6 .vector-9 {
                position: absolute;
                top: 26%;
                right: 26%;
                width: 690px;
                height: 162px;
                background-image: url('/img/sir/vr9.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }
    </style>
    <div class="cpnt-6" id="documentos">
        <div class="wrapper">
            <div class="texto">
                <h2 class="title title-1">Documentos</h2>
                <p class="paragraph ph-1">En esta sección se encuentran los documentos relacionados con el SIR, incluyendo el Estándar de Interoperabilidad, guías técnicas y otros recursos relevantes.</p>
            </div>
            <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-08-2025/drive-download-20250822T143758Z-1-001.zip" download="">Descargar aquí los recursos</a>
        </div>
        <span class="vector vector-9"></span>
    </div>

    <style>
        .cpnt-7 {
            position: relative;
            width: 100%;
            margin: 0 auto;
            background-color: #FFFFFF;
        }

        .cpnt-7 .wrapper {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            display: flex;
            flex-direction: row;
            align-items: flex-end;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .cpnt-7 .texto {
            max-width: 600px;
            width: 100%;
            text-align: left;
            padding: 20px;
        }

        .cpnt-7 h2 {
            font-size: 2.5em;
            color: #333333;
            margin-bottom: 20px;
        }

        .cpnt-7 p {
            font-size: 1.1em;
            color: #333333;
            margin-bottom: 20px;
        }

        .cpnt-7 ul {
            list-style-type: none;
            padding-left: 0;
        }

        .cpnt-7 ul li {
            margin-bottom: 10px;
        }

        .cpnt-7 ul li a {
            text-decoration: none;
            color: #151515;
            word-wrap: break-word;
        }

        .cpnt-7 ul li a:hover {
            text-decoration: underline;
        }

        .cpnt-7 .imagen img {
            max-width: 600px;
            width: 100%;
            height: auto;
            display: block;
            border-radius: 10px;
        }

        .cpnt-7 .vector-10 {
            position: absolute;
            top: 7%;
            left: 0%;
            width: 260px;
            height: 41px;
            background-image: url('/img/sir/vr10.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media(min-width:375px) {
            .cpnt-7 .vector-10 {
                position: absolute;
                top: 9%;
                left: 4%;
                width: 340px;
                height: 41px;
                background-image: url('/img/sir/vr10.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:425px) {
            .cpnt-7 .vector-10 {
                position: absolute;
                top: 9%;
                left: 4%;
                width: 390px;
                height: 41px;
                background-image: url('/img/sir/vr10.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:768px) {
            .cpnt-7 .wrapper {
                max-width: 1200px;
                width: 100%;
                margin: 0 auto;
                display: flex;
                flex-direction: row;
                align-items: flex-end;
                justify-content: center;
                flex-wrap: wrap;
            }

            .cpnt-7 .vector-10 {
                position: absolute;
                top: 7%;
                left: 4%;
                width: 650px;
                height: 41px;
                background-image: url('/img/sir/vr10.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:1024px) {
            .cpnt-7 .vector-10 {
                position: absolute;
                top: 7%;
                left: 0;
                width: 650px;
                height: 41px;
                background-image: url(/img/sir/vr10.png);
                background-size: cover;
                background-repeat: no-repeat;
            }
        }

        @media(min-width:1440px) {
            .cpnt-7 .vector-10 {
                position: absolute;
                top: 15%;
                left: 0%;
                width: 650px;
                height: 41px;
                background-image: url('/img/sir/vr10.png');
                background-size: cover;
                background-repeat: no-repeat;
            }
        }
    </style>
    <div class="cpnt-7" id="contacto">
        <div class="wrapper">
            <div class="texto">
                <h2 class="title title-1">Contacto</h2>
                <p class="paragraph ph-1">Si tienes preguntas o necesitas más información sobre el SIR, puedes contactarnos a través de los siguientes canales:</p>
                <ul>
                    <li><a href="https://www.movilidadbogota.gov.co/web/sir/contacto"><span class="spn-1"></span><b>Secretaría Distrital de Movilidad</b> <br>Subdirección de Transporte Público <br>Interoperabilidad</a></li>
                    <li><a href="mailto:interoperabilidad@movilidadbogota.gov.co"><span class="spn-2"></span>interoperabilidad@movilidadbogota.gov.co</a></li>
                    <li><a href=""><span class="spn-3"></span>Calle 13 # 37 - 35 Piso 2</a></li>
                </ul>
            </div>
            <div class="imagen img-1">
                <img class="img-responsive w-100" src="/img/sir/sir_img_3.png" alt="" title="">
            </div>
        </div>
        <span class="vector vector-10"></span>
    </div>











    <!-- utils.js BDC -->
    <script src="https://cdn.www.gov.co/layout/v4/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>
