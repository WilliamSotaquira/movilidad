@extends('welcome')
@section('title','sir')
@section('contenido')

<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;family=Work+Sans:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


<!-- Set sir -->
<div class="set-wrapper sir" >

    <style>
        .sir {
            font-family: 'Montserrat', sans-serif;
            background-image: url(/img/sir/textura1.png), linear-gradient(to right top, #000914, #020f1c, #041325, #03172d, #011a36, #011a36, #011a36, #011a36, #03172d, #041325, #020f1c, #000914);
             /* background-image: url(/img/sir/textura1.png), linear-gradient(to right top, #00a2ff, #00a0ff, #009eff, #009cff, #009aff, #009aff, #009aff, #009aff, #009cff, #009eff, #00a0ff, #00a2ff); */
            background-size: contain, cover;

        }

        .cpnt-1 {
            /* background-color: #fff; */
            text-align: center;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'title title'
                'img text';
        }

        .cpnt-1 .title {
            font-size: 3em;
            margin-bottom: 54px;
            color: #151515;
            font-weight: bold;
            grid-area: title;
            padding: 16px;
            line-height: 1.3;
            border-bottom: #f0f0f0 2px solid;
            background-color: #ffd000ff;

        }

        .cpnt-1 .imagen {
            grid-area: img;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 300px;
            margin-bottom: 20px;
            margin: auto;
            padding: 32px 56px 0 56px;
            border-radius: 8px;
            background-color: #ffffff;

        }

        .cpnt-1 .text {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            grid-area: text;
        }

        .cpnt-1 .text p {
            margin: 0;
            padding: 32px;
            font-size: 20px;
            /* border: 2px solid #f80020ff; */
            padding: 24px;
            border-radius: 16px;
            margin: 32px;
            width: 450px;
            color: #f0f0f0;
        }
    </style>
    <div class="cpnt-1">
        <h1 class="title">Sistema Interoperable <br> de Recaudo de Bogotá (SIR)</h1>
        <div class="imagen img-1">
            <img class="img-responsive w-100" src="/img/sir/image1.png" alt="SIR" title="SIR">
        </div>
        <div class="text">
            <p class="description">El Sistema Interoperable de Recaudo (SIR) es el modelo tecnológico y operativo que integrará los pagos de todos los sistemas de transporte público de Bogotá, permitiendo la interoperabilidad entre medios de pago, la integración tarifaria y la adopción de estándares internacionales para un servicio más eficiente, moderno y transparente.</p>
        </div>
    </div>

    <style>
        .cpnt-2 {
            padding: 32px;
            background-color: transparent;
        }

        .cpnt-2 .btns {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 16px;
        }

        .cpnt-2 .btn {
            background-color: #f80020ff;
            color: white;
            padding: 40px 24px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.2em;
            border: 2px solid #f80020ff;
        }

        .cpnt-2 .btn:hover {
            background-color: #fff;
            color: #f80020ff;
            border: 2px solid #f80020ff;
        }
    </style>
    <div class="cpnt-2">

        <div class="btns">
            <a class="btn" href="#video">Video</a>
            <a class="btn" href="#preguntas-frecuentes">Preguntas Frecuentes</a>
            <a class="btn" href="#documentos">Documentos</a>
            <a class="btn" href="#galeria">Galería</a>
        </div>

    </div>

    <style>
        .cpnt-6 {
            padding: 32px;
            background-color: #ffffff;
        }

        .video {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .video iframe {
            width: 100%;
            height: 315px;
        }

        .video-1 {
            margin-bottom: 20px;
        }
    </style>
    <div class="cpnt-6" id="video">
        <div class="video video-1">
            <video controls style="width: 40%;">
                <source src="/img/sir/video.mp4" type="video/mp4" poster="" preload>
        </div>
    </div>

    <style>
        .cpnt-3 {
            padding: 32px;
            background-color: #f0f0f0;
        }

        .cpnt-3 .subtitle {
            font-size: 2em;
            margin-bottom: 32px;
            color: #f80020ff;
            text-align: center;
            font-weight: bold;

        }

        .cpnt-3 .paragraph {
            font-size: 1.2em;
            line-height: 1.6;
            color: #555;
            width: 80%;
            margin: 0 auto 32px auto;
        }

        .cpnt-3 .panel-group {
            margin: 0 auto;
            max-width: 800px;
        }

        .panel-group {
            margin-top: 20px;
        }

        .panel-heading {
            background-color: #f80020ff;
            color: white;
        }

        .panel-title a {
            color: white;
        }

        .cpnt-3 .glyphicon-chevron-right::before {
            color: #f80020ff !important;
        }

        .cpnt-3 .glyphicon-chevron-left::before {
            color: #f80020ff !important;
        }

        .cpnt-3 .panel-heading {
            border-color: #f80020ff !important;
            background-color: #ffd000ff !important;
            background-image: none !important;
        }

        .cpnt-3 .panel-heading .panel-title a {
            text-decoration: none;
            color: #151515 !important;
            font-size: 18px;
            font-weight: 600;
        }

        .cpnt-3 .panel-heading .panel-title a:after {
            font-family: 'Glyphicons Halflings';
            content: "\e080";
            float: right;
            color: #555;
            font-size: 18px;
        }

        .cpnt-3 .panel-heading .panel-title a.collapsed:after {
            content: "\e114";
        }
    </style>
    <div class="cpnt-3" id="preguntas-frecuentes">
        <h2 class="subtitle">Preguntas y Respuestas Frecuentes</h2>
        <p class="paragraph ph-1">En esta sección encontrarás información clara y sencilla sobre el Sistema Interoperable de Recaudo (SIR): cómo funciona, qué beneficios ofrece, cuándo entrará en operación y cómo impactará tu experiencia en el transporte público de Bogotá. Nuestro objetivo es resolver tus dudas y brindarte las herramientas necesarias para entender y aprovechar al máximo este nuevo sistema de pagos.</p>
        <!-- collapse_sir -->
        <div class='panel-group' id='accordion_sir' role='tablist ' aria-multiselectable='true'>

            <!-- collapse p1 -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading_p1'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_sir' href='#collapse_p1' aria-expanded='false' aria-controls='collapse_p1'>
                            ¿El SIR reemplazará el sistema de recaudo actual con la tarjeta tullave?
                        </a>
                    </h4>
                </div>
                <div id='collapse_p1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_p1' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-p1'>
                            <p class="paragraph ph-1">La estrategia de Desarrollo del Proyecto SIR garantiza una transición sin traumatismos, que permite operar de forma segura mientras se avanza en la transformación tecnológica del recaudo.</p>
                            <p class="paragraph ph-1">El SIR no reemplaza de forma abrupta al sistema actual, lo conecta manteniendo la operación y asegurando la interoperabilidad futura.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- collapse p2 -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading_p2'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_sir' href='#collapse_p2' aria-expanded='false' aria-controls='collapse_p2'>
                            ¿Qué es el Estándar de Interoperabilidad?
                        </a>
                    </h4>
                </div>
                <div id='collapse_p2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_p2' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-p2'>
                            <p class="paragraph ph-1">Documento normativo y técnico central del SIR que establece las reglas y protocolos para la integración operativa de múltiples actores, tecnologías y medios de pago dentro del ecosistema del SIR, garantizando una operación coherente, segura y trazable.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- collapse p3 -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading_p3'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_sir' href='#collapse_p3' aria-expanded='false' aria-controls='collapse_p3'>
                            ¿Qué es la Unidad de certificación y homologación?
                        </a>
                    </h4>
                </div>
                <div id='collapse_p3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_p3' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-p3'>
                            <p class="paragraph ph-1">Es el grupo encargado de verificar que todos los actores, tecnologías, plataformas y dispositivos que se integren al Sistema Interoperable de Recaudo (SIR) cumplan con el estándar de interoperabilidad.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- collapse p4 -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading_p4'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_sir' href='#collapse_p4' aria-expanded='false' aria-controls='collapse_p4'>
                            ¿ Qué es la Unidad de Seguridad?
                        </a>
                    </h4>
                </div>
                <div id='collapse_p4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_p4' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-p4'>
                            <p class="paragraph ph-1">Es el grupo encargado de mantener la resiliencia del ecosistema del SIR frente a riesgos tecnológicos, ciberataques, fraudes y fallos operativos, asegurando la confidencialidad, integridad, disponibilidad y trazabilidad de la información en todos los niveles del sistema, siguiendo el estándar de interoperabilidad.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        .cpnt-4 {
            padding: 32px;
            background-color: #fff;
        }

        .cpnt-4 .subtitle {
            font-size: 2em;
            margin-bottom: 16px;
            color: #f80020ff;
            text-align: center;
            font-weight: bold;
        }

        .cpnt-4 .paragraph {
            font-size: 1.2em;
            line-height: 1.6;
            color: #555;
            width: 80%;
            margin: 0 auto 32px auto;
        }

        .cpnt-4 ul {
            list-style-type: none;
            padding: 0;
            max-width: 600px;
            margin: 0 auto;
        }

        .cpnt-4 ul li {
            margin: 8px 0;
            font-size: 1.1em;
            color: #333;
            border-bottom: 1px solid #ddd;
            padding-bottom: 8px;
        }

        .cpnt-4 ul li a {
            color: #f80020ff;
            text-decoration: none;
        }

        .cpnt-4 ul li a:hover {
            text-decoration: underline;
        }


        .video {
            margin-top: 20px;
        }

        .video iframe {
            width: 100%;
            height: 315px;
        }
    </style>
    <div class="cpnt-4" id="documentos">
        <div class="div">
            <h2 class="subtitle">Documentos</h2>
            <p class="paragraph ph-1">En este espacio encontrarás los materiales oficiales del Sistema Interoperable de Recaudo (SIR), incluyendo memorias del evento de lanzamiento, presentaciones, estudios técnicos y documentos de referencia. Estos contenidos recogen los avances, retos y objetivos del SIR, así como la articulación entre la Secretaría Distrital de Movilidad, TRANSMILENIO S.A. y la Empresa Metro de Bogotá S.A. para implementar un sistema de pagos integrado, moderno y eficiente que transforme la movilidad de la ciudad.</p>
            <ul>
                <li><a href="">Documento 1. Esta es la descripcion del documento.</a></li>
                <li><a href="">Documento 2. Esta es la descripcion del documento.</a></li>
                <li><a href="">Documento 3. Esta es la descripcion del documento.</a></li>
                <li><a href="">Documento 4. Esta es la descripcion del documento</a></li>
            </ul>
        </div>
    </div>

    <style>
        .cpnt-5 {
            padding: 32px;
            background-color: #f0f0f0;
        }

        .cpnt-5 .subtitle {
            font-size: 2em;
            margin-bottom: 16px;
            color: #f80020ff;
            text-align: center;
            font-weight: bold;
        }

        .cpnt-5 .paragraph {
            font-size: 1.2em;
            line-height: 1.6;
            color: #555;
            width: 80%;
            margin: 0 auto 64px auto;


        }

        .cpnt-5 .collage {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 16px;
        }

        .collage {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;

            gap: 16px;
        }

        .collage-item {
            overflow: hidden;
            border-radius: 8px;
            flex: 1 1 calc(33.333% - 16px);
        }

        .collage-item img {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>
    <div class="cpnt-5" id="galeria">
        <h2 class="subtitle">Galería</h2>
        <p class="paragraph ph-1">Explora nuestra galería de imágenes del Sistema Interoperable de Recaudo (SIR). Aquí encontrarás fotografías del evento de lanzamiento, imágenes de los equipos de trabajo, y momentos destacados que reflejan el compromiso de la Secretaría Distrital de Movilidad, TRANSMILENIO S.A. y la Empresa Metro de Bogotá S.A.
            con la transformación de la movilidad en Bogotá. Estas imágenes capturan la esencia del SIR y su impacto en la modernización del sistema de transporte público de la ciudad.</p>
        <div class="collage">
            <div class="collage-item">
                <img src="/img/sir/sir1.jpg" alt="Imagen 1">
            </div>
            <div class="collage-item">
                <img src="/img/sir/sir2.jpg" alt="Imagen 2">
            </div>
            <div class="collage-item">
                <img src="/img/sir/sir3.jpg" alt="Imagen 3">
            </div>
            <div class="collage-item">
                <img src="/img/sir/sir4.jpg" alt="Imagen 4">
            </div>
            <div class="collage-item">
                <img src="/img/sir/sir5.jpg" alt="Imagen 5">
            </div>
        </div>

    </div>



</div>
<!-- Fin Set -->
