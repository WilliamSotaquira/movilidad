@extends('welcome')
@section('title','siservipum')
@section('contenido')

<!-- Set siservipum -->

<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>

<style>
    .set-wrapper.siservipum {
        font-size: 16px;
        font-weight: 500;
        text-align: left;
        line-height: 1.5;
        color: #091B23;
        font-family: 'Montserrat', sans-serif;

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
<div class="set-wrapper siservipum">

    <!-- box b-1 -->
    <style>
        .set-wrapper .b-1 {
            grid-area: b-1;
            margin: 16px 0px;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            justify-content: center;
            justify-items: center;
            align-items: center;
        }

        @media(min-width:768px) {
            .set-wrapper .b-1 {
                grid-template-columns: 30% 70%;
                grid-template-rows: auto;
            }
        }

        .b-1 .cpnt-1 .logo img {
            max-width: 180px;
            margin: auto;
        }

        .b-1 .cpnt-2 .titulo-ppal h1 {
            text-align: center;
            margin: 0px;
            text-transform: uppercase;
            font-weight: 700;
            color: #091B23;
        }
    </style>
    <div class="box b-1">
        <div class="cpnt cpnt-1">
            <div class="logo">
                <img src="/images/siservipum/logo_siservipum.png" alt="logo siservipum">
            </div>
        </div>
        <div class="cpnt cpnt-2">
            <div class="titulo-ppal">
                <h1>sindicato&nbsp;de&nbsp;servidores publicos de la secretaria&nbsp;distrital&nbsp;de&nbsp;movilidad - siservipum</h1>
            </div>
        </div>
    </div>

    <!-- box b-2 -->
    <style>
        .set-wrapper .b-2 {
            grid-area: b-2;
            margin: 16px 0px;
        }

        .b-2 .cpnt-1 .video-1 {
            width: 100%;
            max-width: 900px;
            height: auto;
            padding: 32px;
            margin: auto;
        }
    </style>
    <div class="box b-2">
        <div class="cpnt cpnt-1">
            <div class="video video-1">
                <video controls style="width: 100%;">
                    <source src="/videos/siservipum/siservipum.mp4" type="video/mp4" poster="" preload>
                </video>
            </div>
        </div>
    </div>

    <!-- box b-3 -->
    <style>
        .set-wrapper .b-3 {
            grid-area: b-3;
            margin: 16px 0px;
        }

        .b-3 .cpnt-1 .paragraph {
            text-align: justify;
            margin: 0px;
            padding: 8px;
            color: #091B23;
            font-size: 18px;
        }
    </style>
    <div class="box b-3">
        <div class="cpnt cpnt-1">
            <p class="paragraph ph-type-1"><strong>SISERVIPUM</strong> se define como una organización unitaria, pluralista, democrática y participativa, que tiene como propósito fundamental la reivindicación y promoción de los derechos humanos, laborales y sociales de los trabajadores de la Secretaría Distrital de Movilidad, así como el mejoramiento de su calidad de vida y de sus condiciones de trabajo que implica el pleno ejercicio de las libertades políticas sindicales y ciudadanas.</p>
        </div>
    </div>

    <!-- box b-4 -->
    <style>
        .set-wrapper .b-4 {
            grid-area: b-4;
            margin: 16px 0px;
        }
        .b-4 .cpnt-1 .title {
            text-align: center;
            margin: 0px;
            padding: 8px;
            color: #091B23;
            font-size: 28px;
            font-weight: 700;
        }
        .b-4 .cpnt-2 .botones {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            justify-content: center;
            justify-items: center;
            align-items: center;
        }
        @media(min-width:768px) {
            .b-4 .cpnt-2 .botones {
                grid-template-columns: repeat(5, 1fr);
        padding: 32px;
            }
        }
        .b-4 .cpnt-2 .boton {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            justify-content: center;
            justify-items: center;
            align-items: center;
            padding: 8px;
            border-radius: 8px;
        }
        .b-4 .cpnt-2 .boton img {
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
        .b-4 .cpnt-2 .boton span {
            text-align: center;
            margin: 0px;
            padding: 8px;
            color: #595A5C;
            font-size: 20px;
            font-weight: 700;
        }
    </style>
    <div class="box b-4">
        <div class="cpnt cpnt-1">
            <div class="title">
                <h2 class="title title-type-2">Son valores de la organización sindical</h2>
            </div>
        </div>
        <div class="cpnt cpnt-2">
            <div class="botones">
                <div class="boton zoom">
                    <img src="/images/siservipum/solidaridad.png" alt="valores siservipum - Solidaridad">
                    <span>Solidaridad</span>
                </div>
                <div class="boton zoom">
                    <img src="/images/siservipum/compromiso.png" alt="valores siservipum - Compromiso">
                    <span>Compromiso</span>
                </div>
                <div class="boton zoom">
                    <img src="/images/siservipum/respeto.png" alt="valores siservipum - Respeto">
                    <span>Respeto</span>
                </div>
                <div class="boton zoom">
                    <img src="/images/siservipum/honestidad.png" alt="valores siservipum - Honestidad">
                    <span>Honestidad</span>
                </div>
                <div class="boton zoom">
                    <img src="/images/siservipum/transparencia.png" alt="valores siservipum - Transparencia">
                    <span>Transparencia</span>
                </div>
            </div>
        </div>
    </div>

    <!-- box b-5 -->
    <style>
        .set-wrapper .b-5{
            grid-area: b-5;
            margin: 16px 0px;
        }
        .b-5 .cpnt-1 .cards {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            justify-content: center;
            justify-items: stretch;
            align-items: stretch;
        }
        @media(min-width:768px){
            .b-5 .cpnt-1 .cards {
                grid-template-columns: repeat(2, 1fr);
                gap: 16px;
            }
        }
        .b-5 .cpnt-1 .card {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            justify-content: center;
            justify-items: stretch;
            align-items: start;
            padding: 16px;
            border-radius: 8px;
            background-color: #F2F2F2;
            border: solid 1px #595A5C50;
        }
        .b-5 .cpnt-1 .card h3 {
            margin: 0px;
            padding: 8px 0;
            color: #091B23;
            font-size: 20px;
            font-weight: 700;
        }
        .b-5 .cpnt-1 .card p {
            text-align: left;
            margin: 0px;
            padding: 8px 0;
            color: #091B23;
            font-size: 16px;
        }
    </style>
    <div class="box b-5">
        <div class="cpnt cpnt-1">
            <div class="cards">
                <div class="card">
                    <h3>Estatutos</h3>
                    <p>Definición tanto de dinámicas de funcionamiento como de los métodos de participación y decisión al interior de la organización sindical. Toda Organización sindical tiene el derecho de realizar libremente sus estatutos y reglamentos administrativos.</p>
                    <a href="">Acceder al documento</a>
                </div>
                <div class="card">
                    <h3>Informe de gestión</h3>
                    <p>Definición tanto de dinámicas de funcionamiento como de los métodos de participación y decisión al interior de la organización sindical. Toda Organización sindical tiene el derecho de realizar libremente sus estatutos y reglamentos administrativos.</p>
                    <a href="">Acceder al documento</a>
                </div>
                <div class="card">
                    <h3>Informe de gestión</h3>
                    <p>Documento que compila información frente a las acciones adelantadas por el Sindicato, donde se exponen los logros, metas, procesos y dificultades de la gestión en cada una de las vigencias.  </p>
                    <a href="">Acceder al documento</a>
                </div>
                <div class="card">
                    <h3>Acuerdo Laborales/Seguimientos</h3>
                    <p>Documento donde se evidencia la acción legalmente vinculante entre la Secretaría de Movilidad y las organizaciones sindicales de la SDM, utilizado para definir una relación laboral.</p>
                    <a href="">Acceder al documento</a>
                </div>
                <div class="card">
                    <h3>Sindicalismo </h3>
                    <p>Resumen de la historia del sindicalismo en Colombia. </p>
                    <a href="">Acceder al documento</a>
                </div>
                <div class="card">
                    <h3>Eventos realizados</h3>
                    <p>Evidencias de la participación de la Organización Sindical en varios eventos a nivel nacional y distrital, cuyo objetivo es defender intereses comunes de los trabajadores.</p>
                    <a href="">Acceder al documento</a>
                </div>
                <div class="card">
                    <h3>Piezas de Comunicación</h3>
                    <p>Medio gráfico, por el cual el Sindicato de Siservipum se comunica con sus afiliados y con los colaboradores de la Secretaría de Movilidad. Los contenidos de las piezas de comunicación so de interés colectivo.</p>
                    <a href="">Acceder al documento</a>
                </div>
                <div class="card">
                    <h3>Información federación/min trabajo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore expedita distinctio tempora repellat sapiente esse doloribus voluptate incidunt dolorem laudantium quos quibusdam enim perferendis, ullam dicta molestiae odio et recusandae.</p>
                    <a href="">Acceder al documento</a>
                </div>
                <div class="card">
                    <h3>Información federación/min trabajo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore expedita distinctio tempora repellat sapiente esse doloribus voluptate incidunt dolorem laudantium quos quibusdam enim perferendis, ullam dicta molestiae odio et recusandae.</p>
                    <a href="">Acceder al documento</a>
                </div>
                <div class="card">
                    <h3>Miembros de la Junta Directiva</h3>
                    <p>La Junta Directiva es el organismo de dirección permanente que estará compuesta por un número no mayor de once (11) miembros con derecho a voz y a voto y tres (3) suplentes, elegidos por los afiliados y afiliadas en Asamblea General, para un periodo de dos (2) años.</p>
                    <a href="">Acceder al documento</a>
                </div>
            </div>
        </div>
    </div>

    <!-- box b-6 -->
    <style>
        .set-wrapper .b-6{
            grid-area: b-6;
            margin: 16px 0px;
        }
        .b-6 .cpnt-1 .banner-contacto {
            margin-top: 32px;
            padding: 32px;
            border-radius: 8px;
            background-color: #EFAD5F;
            border: solid 1px #595A5C50;
            text-align: center;
        }
        .b-6 .cpnt-1 .banner-contacto h2 {
            margin: 0px;
            padding: 8px 0;
            color: #091B23;
            font-size: 28px;
            font-weight: 700;
        }

    </style>
    <div class="box b-6">
        <div class="cpnt cpnt-1">
            <div class="banner-contacto">
                <h2 class="title title-type-2">Contáctenos</h2>
                <a href="siservipum@movilidadbogota.gov.co">siservipum@movilidadbogota.gov.co</a>
            </div>
        </div>
    </div>

</div>
<!-- Fin Set -->
