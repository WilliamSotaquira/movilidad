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
            background-image: url('https://www.movilidadbogota.gov.co/sir/sir1-b.jpg');
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
            width: 100%;
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
            position: relative;
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
            background-image: url('https://www.movilidadbogota.gov.co/sir/sir-spn1.png');
            width: 30px;
            height: 30px;
            display: inline-block;
            background-size: cover;
            margin-right: 10px;
        }

        .list .spn-2 {
            background-image: url('https://www.movilidadbogota.gov.co/sir/sir-spn2.png');
            width: 30px;
            height: 30px;
            display: inline-block;
            background-size: cover;
            margin-right: 10px;
        }

        .list .spn-3 {
            background-image: url('https://www.movilidadbogota.gov.co/sir/sir-spn3.png');
            width: 30px;
            height: 30px;
            display: inline-block;
            background-size: cover;
            margin-right: 10px;
        }

        .list .spn-4 {
            background-image: url('https://www.movilidadbogota.gov.co/sir/sir-spn4.png');
            width: 30px;
            height: 30px;
            display: inline-block;
            background-size: cover;
            margin-right: 10px;
        }

        .list .spn-5 {
            background-image: url('https://www.movilidadbogota.gov.co/sir/sir-spn5.png');
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
            top: -10PX;
            left: -5%;
            width: 100%;
            height: 45px;
            background-image: url('https://www.movilidadbogota.gov.co/sir/vr1.svg');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: left;
            z-index: 1;

        }

        .cpnt-1 .vector-2 {
            position: absolute;
            bottom: -10px;
            left: -15px;
            width: 100%;
            height: 45px;
            background-image: url('https://www.movilidadbogota.gov.co/sir/vr2.png');
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>
    <div class="cpnt-1">
        <div class="wrapper">

            <div class="title">
                <h1>Sistema Interoperable de Recaudo de Bogotá (SIR)</h1>
            </div>
            <div class="list">
                <span class="vector vector-1"></span>
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
                <span class="vector vector-2"></span>
            </div>


        </div>
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
            text-align: left;
            display: flex;
            align-items: flex-start;
            margin: 0 auto;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: space-between;
            justify-content: center;
        }

        .cpnt-3 .imagen {
            position: absolute;
            bottom: 0;
            left: 0;
            max-width: 400px;
            margin: 0 auto;
        }

        .cpnt-3 .imagen img {
            visibility: hidden;
            position: absolute;
            display: none;
        }

        @media(min-width:768px) {
            .cpnt-3 .imagen img {
                position: relative;
                visibility: visible;
                width: 460px;
                height: auto;
                display: block;
                border-radius: 10px;
            }

        }

        .cpnt-3 .texto {
            position: relative;
            max-width: 600px;
            width: 100%;
            padding: 40px;
            text-wrap: balance;

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

        .cpnt-3 .texto ul {
            list-style-type: disc;
            padding-left: 20px;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .cpnt-3 .texto ul li {
            font-size: 1.1em;
            color: #151515;
            margin-bottom: 10px;
        }

        .cpnt-3 .vector-3 {
            position: absolute;
            top: 5%;
            right: 0%;
            width: 100%;
            height: 45px;
            background-image: url('https://www.movilidadbogota.gov.co/sir/vr3.png');
            background-size: contain;
            background-repeat: no-repeat;
        }

        .cpnt-3 .vector-4 {
            position: absolute;
            bottom: 3%;
            left: 0%;
            width: 100%;
            height: 51px;
            background-image: url('https://www.movilidadbogota.gov.co/sir/vr4.png');
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>

    <div class="cpnt-3" id="presentacion">
        <div class="wrapper">
            <div class="texto">
                <span class="vector vector-3"></span>
                <h2 class="title title-1">¿Qué es?</h2>
                <p class="paragraph ph-1">Infraestructura digital con reglas de integración, de negocio y de gobierno. Se articula con la visión estratégica de la ciudad que permiten:</p>
                <ul>
                    <li>Integración de medios de pago homologados y de recaudo, a través de múltiples actores dentro del ecosistema.</li>
                    <li>Múltiples proveedores, ya que es basado en estándares abiertos.</li>
                    <li>Interoperabilidad del medio de pago y tarifaria entre diferentes medios de transporte público distrital y regional y servicios conexos de movilidad.</li>
                </ul>
            </div>
            <div class="imagen img-1">
                <img class="img-responsive w-100" src="/img/sir/sir_img_2.png" alt="" title="">
            </div>

            <div class="texto">

                <h2 class="title title-2">Qué no es el SIR?</h2>
                <ul>
                    <li>No es la actualización de la actual tarjeta tullave.</li>
                    <li>No es la operación logística del recaudo en efectivo.</li>
                    <li>No genera automáticamente la integración tarifaria de los modos que se integren en el SIR.</li>
                    <li>No es el suministro de dispositivos de validación y de acceso.</li>
                    <li>No es el suministro de la red de recarga.</li>
                    <li>No es la emisión de medios de pago.</li>
                    <li>No es la definición de política tarifaria o de distribución de ingresos.</li>
                    <li>No es un software o proveedor específico.</li>
                    <li>No es un sistema centralizado exclusivo.</li>
                    <li>No es una inversión aislada en tecnología.</li>
                </ul>

                <p>Con la entrada en operación de la primera línea del Metro de Bogotá (L1MB) se requiere la integración del medio de pago entre el actual sistema de transporte y el sistema metro, para lograr este fin se requiere articular la operación del actual subsistema de recaudo del SIRCI (contrato vigente hasta sep-28) con la entrada en operación del SIR, que permitirá la interoperabilidad tecnológica y financiera del recaudo entre los sistemas de transporte y sus operadores.</p>
                <span class="vector vector-4"></span>
            </div>
        </div>
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

        .cpnt-4 .video {
            width: 80%;
            max-width: 1200px;
            margin: 40px auto;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        .cpnt-4 .infografia {
            position: relative;
            max-width: 1200px;
            width: 100%;
            padding: 20px;
            text-align: center;
            margin: 0 auto;
        }

        .cpnt-4 .infografia h2 {
            font-size: 2.5em;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .cpnt-4 .infografia p {
            font-size: 1.1em;
            color: #ffffff;
            text-align: justify;
            margin-bottom: 20px;
        }

        .cpnt-4 .infografia img {
            background-color: #ffffff;
            max-width: 1100px;
            width: 100%;
            margin: 0 auto;
            text-align: center;
            border-radius: 10px;
            padding: 20px;
        }



        .cpnt-4 .texto {
            position: relative;
            max-width: 1200px;
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
            flex-direction: row;
            justify-content: center;
            gap: 10px;
            padding: 20px;
            flex-wrap: wrap;
        }

        .cpnt-4 .items .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 1.1em;
            background-color: #FFC107;
            color: #000000;
            margin-bottom: 10px;
            padding: 12px;
            width: 350px;
            max-width: 400px;
            flex-wrap: wrap;
            align-content: center;
            justify-content: space-evenly;
        }

        .cpnt-4 .items .card h4 {
            font-size: 1.2em;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .cpnt-4 .items .card p {
            font-size: 1em;
            margin: 0;
            text-align: justify;
        }

        .cpnt-4 .icon_obj {
            display: inline-block;
            width: 80px;
            height: 80px;
            margin-right: 10px;
            vertical-align: middle;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .cpnt-4 .icon_a {
            background-image: url('/img/sir/icono_a.png');
        }

        .cpnt-4 .icon_b {
            background-image: url('/img/sir/icono_b.png');
        }

        .cpnt-4 .icon_c {
            background-image: url('/img/sir/icono_c.png');
        }

        .cpnt-4 .icon_d {
            background-image: url('/img/sir/icono_d.png');
        }

        .cpnt-4 .icon_e {
            background-image: url('/img/sir/icono_e.png');
        }

        .cpnt-4 .icon_f {
            background-image: url('/img/sir/icono_f.png');
        }

        .cpnt-4 .vector-5 {
            position: absolute;
            top: 35px;
            left: 0;
            width: 100%;
            height: 40px;
            background-image: url('https://www.movilidadbogota.gov.co/sir/vr5.png');
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>
    <div class="cpnt-4">
        <div class="wrapper">
            <div class="video video-1">
                <video controls style="width: 100%;">
                    <source src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-09-2025/video_sir.mp4" type="video/mp4" poster="" preload>
            </div>
            <div class="infografia">
                <h2 class="title title-1">Visión del SIR</h2>
                <picture>
                    <source media="(min-width: 465px)" srcset="/img/sir/infografia_lg.png">
                    <source media="(max-width: 464px)" srcset="/img/sir/infografia_xs.png">
                    <img src="/img/sir/infografia_xs.png" class="img-responsive w-100" alt="Infografia" title="Image: Infografia">
                    </p>
                </picture>
                <p class="paragraph ph-1">Consolidar una plataforma abierta, segura y flexible que integre los medios de pago y sistemas de recaudo del transporte público de Bogotá y la región, habilitando una movilidad inteligente, interoperable y centrada en el usuario.

            </div>
            <div class="texto">
                <span class="vector vector-5"></span>
                <h2 class="title title-1">Objetivos</h2>
                <div class="items">
                    <div class="card">
                        <span class="icon_obj icon_a"></span>
                        <h4>Integrar múltiples medios de pago</h4>
                        <p>Pagos con tarjeta de ciudad abierta, tarjetas del sistema bancario, QR, dispositivos móviles(NFC), billeteras y tarjetas “tullave” (Transitorio), como mínimo.</p>
                    </div>
                    <div class="card">
                        <span class="icon_obj icon_b"></span>
                        <h4>Incrementar beneficios para el sistema</h4>
                        <p>Evita duplicidades tecnológicas, aprovechamiento de datos, desarrollo de negocios colaterales, no tarifarios y captura de valor, mayor información para planificación del sistema.</p>
                    </div>
                    <div class="card">
                        <span class="icon_obj icon_c"></span>
                        <h4>Facilitar información para planeación y estrategias integrales</h4>
                        <p>Centraliza información de los ingresos y costos del sistema, que permitan el diseño e implementación de estrategias integrales en el transporte público.</p>
                    </div>
                    <div class="card">
                        <span class="icon_obj icon_d"></span>
                        <h4>Proveer facilidades para los usuarios</h4>
                        <p>Habilita servicios adicionales como planificación de viajes, aprovechamiento de datos, facilidades de acceso, mayor información del servicio.</p>
                    </div>
                    <div class="card">
                        <span class="icon_obj icon_e"></span>
                        <h4>Consolidar la red de transporte con servicios conexos y transporte regional</h4>
                    </div>
                    <div class="card">
                        <span class="icon_obj icon_f"></span>
                        <h4>Desarrollar soluciones integradas con propósito público</h4>
                        <p>Uso de los datos del sistema para generar valor social y eficiencia en movilidad. Fidelización y beneficios.</p>
                    </div>

                </div>

            </div>
        </div>
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
            position: relative;
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
            position: relative;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 16px;
            z-index: 1;
            margin-bottom: 32px;

        }

        .cpnt-2 .card {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            width: 300px;
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
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            justify-content: space-between;

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
            top: 34%;
            left: 0%;
            width: 100%;
            height: 40px;
            background-image: url('https://www.movilidadbogota.gov.co/sir/vr6.png');
            background-size: contain;
            background-repeat: no-repeat;
        }

        .cpnt-2 .vector-7 {
            position: absolute;
            top: 30%;
            left: -30%;
            width: 100%;
            height: 45px;
            background-image: url('https://www.movilidadbogota.gov.co/sir/vr7.png');
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>
    <div class="cpnt-2" id="noticias">
        <div class="wrapper">
            <div class="texto">
                <span class="vector vector-6"></span>
                <h2 class="title title-1">Noticias</h2>
                <p class="paragraph ph-1">Esta sección cuenta con un espacio para compartir noticias asociadas al SIR, como eventos, fechas clave y demás temas de interés.</p>
            </div>
            <div class="cards">
                <span class="vector vector-7"></span>
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
            position: relative;
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
            top: 14%;
            right: 3%;
            width: 150%;
            height: 45px;
            background-image: url('https://www.movilidadbogota.gov.co/sir/vr8.png');
            background-size: contain;
            background-position: right;
            background-repeat: no-repeat;
        }

        @media(min-width:768px) {
            .cpnt-5 .vector-8 {
                top: 9%;
            }
        }
    </style>
    <div class="cpnt-5" id="preguntas">
        <div class="wrapper">

            <div class="texto">
                <span class="vector vector-8"></span>
                <h2 class="title title-1">Preguntas Frecuentes</h2>
                <p class="paragraph ph-1">Esta sección cuenta con las respuestas a las preguntas más comunes sobre el Sistema Interoperabilidad de Recaudo (SIR) y el proceso contractual. </p>
                <p class="paragraph ph-2">Si la duda del usuario no aparece en el listado, puede formular una nueva consulta a través del siguiente formulario.</p>
                <img class="img-responsive w-100" src="/img/sir/formulario_tp.png" alt="QR Sir" title="">
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
                                <p class="text-one-accordion-govco">El SIR busca integrar el sistema de recaudo actual y complementarlo. La tarjeta Tullave seguirá operando como medio de pago dentro del ecosistema, en tanto se avanza en un proceso de transición gradual hacia un modelo interoperable que permita incorporar nuevos medios de pago y tecnologías, garantizando siempre continuidad para los usuarios y estabilidad en la operación</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-accordion-govco">
                        <h2 class="accordion-header" id="accordionPanels-2">
                            <button class="button-accordion-govco collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPanels-collapse2" aria-expanded="false" aria-controls="accordionPanels-collapse2">
                                <span class="text-button-accordion-govco">¿Qué es el Sistema Interoperable de Recaudo (SIR) y por qué es importante para la ciudad?</span>
                            </button>
                        </h2>
                        <div id="accordionPanels-collapse2" class="accordion-collapse collapse" aria-labelledby="accordionPanels-2" data-bs-parent="#accordionQuestion">
                            <div class="body-accordion-govco">
                                <span class="title-two-accordion-govco">Respuesta:</span>
                                <p class="text-one-accordion-govco">El SIR es una nueva infraestructura tecnológica que permite unificar la forma de pagar en los distintos medios de transporte de Bogotá y la región, e incorporar nuevos medios de pago como las tarjetas bancarias y billeteras electrónicas, pagos con dispositivos móviles y QR.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-accordion-govco">
                        <h2 class="accordion-header" id="accordionPanels-3">
                            <button class="button-accordion-govco collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPanels-collapse3" aria-expanded="false" aria-controls="accordionPanels-collapse3">
                                <span class="text-button-accordion-govco">¿Por qué es importante el Sistema Interoperable de Recaudo (SIR) para la ciudad?</span>
                            </button>
                        </h2>
                        <div id="accordionPanels-collapse3" class="accordion-collapse collapse" aria-labelledby="accordionPanels-3" data-bs-parent="#accordionQuestion">
                            <div class="body-accordion-govco">
                                <span class="title-two-accordion-govco">Respuesta:</span>
                                <p class="text-one-accordion-govco">Su importancia radica en que permitirá que los ciudadanos usen un mismo sistema de pago para acceder al Metro, TransMilenio, SITP, Regiotram, transporte regional y servicios de movilidad como bicicletas públicas o estacionamientos. Esto significa viajes más fáciles, mayor eficiencia y la base para una movilidad más moderna e inteligente.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-accordion-govco">
                        <h2 class="accordion-header" id="accordionPanels-4">
                            <button class="button-accordion-govco collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPanels-collapse4" aria-expanded="false" aria-controls="accordionPanels-collapse4">
                                <span class="text-button-accordion-govco">¿Qué beneficios tendrá el SIR para los usuarios del transporte público y de movilidad?</span>
                            </button>
                        </h2>
                        <div id="accordionPanels-collapse4" class="accordion-collapse collapse" aria-labelledby="accordionPanels-4" data-bs-parent="#accordionQuestion">
                            <div class="body-accordion-govco">
                                <span class="title-two-accordion-govco">Respuesta:</span>
                                <p class="text-one-accordion-govco">Con el SIR, los usuarios tendrán más comodidad y opciones: podrán pagar con una tarjeta, con el celular o con billeteras digitales, en distintos modos de transporte. Se reducirán los tiempos de acceso, ya que no será necesario comprar o recargar diferentes tarjetas. Los usuarios podrán viajar en diferentes modos de transporte con su medio de pago de preferencia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-accordion-govco">
                        <h2 class="accordion-header" id="accordionPanels-5">
                            <button class="button-accordion-govco collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPanels-collapse5" aria-expanded="false" aria-controls="accordionPanels-collapse5">
                                <span class="text-button-accordion-govco">¿Cómo se relaciona el SIR con la entrada en operación de la primera línea del Metro de Bogotá?</span>
                            </button>
                        </h2>
                        <div id="accordionPanels-collapse5" class="accordion-collapse collapse" aria-labelledby="accordionPanels-5" data-bs-parent="#accordionQuestion">
                            <div class="body-accordion-govco">
                                <span class="title-two-accordion-govco">Respuesta:</span>
                                <p class="text-one-accordion-govco">La llegada del Metro es uno de los hitos más importantes en la historia de la ciudad y requiere de un sistema de pago que lo integre con el actual sistema de transporte público. El SIR permitirá que el Metro no funcione como un sistema aislado, sino como parte de un ecosistema en el que los ciudadanos puedan usar un mismo medio de pago para entrar al Metro, a un bus zonal o a un tren regional, sin complicaciones ni duplicidad de sistemas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-accordion-govco">
                        <h2 class="accordion-header" id="accordionPanels-6">
                            <button class="button-accordion-govco collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPanels-collapse6" aria-expanded="false" aria-controls="accordionPanels-collapse6">
                                <span class="text-button-accordion-govco">¿El SIR implicará un aumento en la tarifa para los usuarios?</span>
                            </button>
                        </h2>
                        <div id="accordionPanels-collapse6" class="accordion-collapse collapse" aria-labelledby="accordionPanels-6" data-bs-parent="#accordionQuestion">
                            <div class="body-accordion-govco">
                                <span class="title-two-accordion-govco">Respuesta:</span>
                                <p class="text-one-accordion-govco">La implementación del SIR no significa un aumento directo en el valor de la tarifa que paga el ciudadano. Por el contrario, se busca que el sistema mejore la eficiencia y reduzca costos operativos, lo cual permitirá que los recursos se usen de manera más efectiva. El objetivo principal es mejorar la experiencia del usuario, sin que eso represente un mayor costo en su bolsillo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-accordion-govco">
                        <h2 class="accordion-header" id="accordionPanels-7">
                            <button class="button-accordion-govco collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPanels-collapse7" aria-expanded="false" aria-controls="accordionPanels-collapse7">
                                <span class="text-button-accordion-govco">¿Qué experiencias internacionales respaldan el SIR?</span>
                            </button>
                        </h2>
                        <div id="accordionPanels-collapse7" class="accordion-collapse collapse" aria-labelledby="accordionPanels-7" data-bs-parent="#accordionQuestion">
                            <div class="body-accordion-govco">
                                <span class="title-two-accordion-govco">Respuesta:</span>
                                <p class="text-one-accordion-govco">Ciudades como Londres, Santiago de Chile, Singapur y Nueva York ya cuentan con sistemas interoperables de pago en transporte. Estos modelos han demostrado que unificar los sistemas de pago mejora la experiencia del usuario, reduce los costos de operación y facilita la incorporación de nuevas tecnologías. Bogotá, al implementar el SIR, se suma a este grupo de ciudades que avanzan hacia una movilidad más eficiente, moderna e inclusiva.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
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

        .cpnt-6 .documentos {
            max-width: 600px;
            width: 100%;
            text-align: left;
            padding: 20px;
        }

        .cpnt-6 a {
            display: block;
            font-size: 1em;
            color: #151515;
            margin-bottom: 10px;
            word-wrap: break-word;
            text-decoration: none;
            transition: color 0.3s ease;
            line-height: 1.4em;
            padding: 8px;
            border-radius: 5px;

        }

        .cpnt-6 a:hover {
            background-color: #FFC107;
            color: #000000;
            text-decoration: underline;
        }

        .cpnt-6 .vector-9 {
            position: absolute;
            visibility: hidden;
        }
    </style>
    <div class="cpnt-6" id="documentos">
        <div class="wrapper">
            <div class="texto">
                <span class="vector vector-9"></span>
                <h2 class="title title-1">Documentos</h2>
                <p class="paragraph ph-1">En esta sección se encuentran los documentos relacionados con el SIR, guías técnicas y otros recursos relevantes.</p>
            </div>
            <div class="documentos">
                <ul>
                    <li><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=140681" target="_blank" rel="noopener noreferrer">DECRETO 168 DE 2023 - "Por medio del cual se crea el Sistema Interoperable de Recaudo para el Distrito Capital y se dictan otras disposiciones"</a></li>
                    <li><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?dt=S&i=187213" target="_blank" rel="noopener noreferrer">DECRETO 338 DE 2025 - "Por medio del cual se modifica el artículo 10 del Decreto Distrital 168 de 2023 (Por medio del cual se crea el Sistema Interoperable de Recaudo para el Distrito Capital y se dictan otras disposiciones)"</a></li>
                    <li><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=119658" target="_blank" rel="noopener noreferrer">Resolución 20213040060975 de 2021 Ministerio de Transporte - "Por la cual se reglamentan las especificaciones de las condiciones técnicas, operativas, de seguridad y de interoperabilidad de los Sistemas de Recaudo Centralizado de los Sistemas de Transporte Público que sean cofinanciados con recursos de la Nación."</a></li>
                    <li><a href="/img/sir/sesion_1.pptx" target="_blank" rel="noopener noreferrer">Presentación: Sesion 1. Visión y Gobernanza (.pptx)</a></li>
                    <li><a href="/img/sir/sesion_2.pptx" target="_blank" rel="noopener noreferrer">Presentación: Sesion 2. Estandar interoperabilidad y unidades (.pptx)</a></li>
                    <li><a href="/img/sir/sesion_3.pptx" target="_blank" rel="noopener noreferrer">Presentación: Sesion 3. Sistema central y sus interfaces (.pptx)</a></li>
                    <li><a href="/img/sir/sesion_4.pptx" target="_blank" rel="noopener noreferrer">Presentación: Sesion 4. Camara de compensacion y sus interfaces (.pptx)</a></li>
                </ul>
            </div>

        </div>
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
            position: relative;
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

        .cpnt-7 .govco-landmark:before,
        .cpnt-7 .govco-envelope:before,
        .cpnt-7 .govco-map-marker-alt:before {
            color: #FFC107;
            font-family: "govco-font";
            font-style: normal;
            font-weight: normal;
            display: inline-block;
            text-decoration: inherit;
            width: 1em;
            margin-right: 0.2em;
            text-align: center;
            /* opacity: .8; */
            font-variant: normal;
            text-transform: none;
            line-height: 1em;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .cpnt-7 .imagen {
            max-width: 500px;
            width: 100%;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
        }

        .cpnt-7 .logo-movilidad {
            margin-top: 20px;
        }

        .cpnt-7 .logo-movilidad .imagen {
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
            text-align: center;
            padding: 32px;
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
            top: 14%;
            right: 50%;
            width: 108%;
            height: 41px;
            background-image: url('https://www.movilidadbogota.gov.co/sir/vr10.png');
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>
    <div class="cpnt-7" id="contacto">
        <div class="wrapper">
            <div class="texto">
                <span class="vector vector-10"></span>
                <h2 class="title title-1">Contacto</h2>
                <p class="paragraph ph-1">Si tienes preguntas o necesitas más información sobre el SIR, puedes contactarnos a través de los siguientes canales:</p>
                <ul>
                    <li><span class="govco-landmark"></span><b> Secretaría Distrital de Movilidad</b> <br>Subdirección de Transporte Público <br>Interoperabilidad</li>
                    <li><a href="mailto:interoperabilidad@movilidadbogota.gov.co"><span class="govco-envelope"></span> interoperabilidad@movilidadbogota.gov.co</a></li>
                    <li><a href=""><span class="govco-map-marker-alt"></span> Calle 13 # 37 - 35 Piso 2, Bogotá D.C., Colombia</a></li>
                </ul>
                <div class="logo-movilidad">
                    <div class="imagen img-2">
                        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/logo-sdm.png" alt="Logo SDM">
                    </div>
                </div>
            </div>
            <div class="imagen img-1">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/sir/sir_img_3.png" alt="" title="">
            </div>
        </div>
    </div>


    <!-- utils.js BDC -->
    <script src="https://cdn.www.gov.co/layout/v4/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>
