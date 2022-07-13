@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid CLMinfantil'>
    <div class='box-wrp'>
        <div class='box-head'>
            <div class="logo">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/clm_ninos_logo_0.png' alt='' title=''>
            </div>
            <div class="titulo">
                <div>
                    <h3>Centros Locales de Movilidad</h3>
                </div>
            </div>
            <div class="recorte">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/clm_ninos_11_0.png' alt='' title=''>
            </div>
        </div>
        <style>
            .box-head {
                background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-12-2019/bg-clm.jpg');
                background-position: center;
                background-size: cover;


                display: grid;
                /* gap: 10px; */
                grid-auto-flow: dense;
                grid-template-columns: repeat(6, 1fr);
                /* grid-template-rows: 150px; */
                grid-template-areas:
                    'logo titulo titulo titulo titulo recorte';

                position: relative;

            }

            .box-head .logo {
                grid-area: logo;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin: auto;

            }

            .box-head .logo img {
                max-height: 80px;
                max-width: 200px;
                padding: 20px;
            }

            .box-head .titulo {
                grid-area: titulo;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .box-head .recorte {
                grid-area: recorte;
                /* max-width: 150px; */
                /* height: px; */
                display: flex;
                /* flex-direction: column; */
                justify-content: end;
                align-items: center;
            }

            .box-head .recorte img {
                /* max-height: 80px; */
                max-width: 120px;
                padding: 20px;
            }


            .box-head h3 {
                font-size: 34px;
                font-weight: 700;
                text-align: center;
                line-height: 1;
                word-spacing: 2;
                letter-spacing: 0.8;
                color: rgba(25, 25, 25, 1);
                margin: 20px;
            }
        </style>
        <div class="box-banner">
            <div>
                <h3>¿Sabes qué hacen los centros locales de movilidad?</h3>
            </div>
            <div>
                <h4><strong>¡Aquí te contamos!</strong></h4>
            </div>
        </div>
        <style>
            .box-banner {
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 8px;
                margin-top: 30px;
            }

            .box-banner h3 {
                /* font-size: 1em; */
                font-weight: 700;
                text-align: center;
                line-height: 1;
                color: rgba(25, 25, 25, 1);
                margin: 8px;
            }

            .box-banner h4 {
                /* font-size: 1em; */
                font-weight: 500;
                text-align: center;
                line-height: 1;
                color: rgba(25, 25, 25, 1);
                margin: 8px;
            }
        </style>
        <div class="box-s1">
            <div class="subbox-carousel">
                <!-- Carousel carousel -->
                <div id='carousel' class='carousel slide' data-ride='carousel'>
                    <!-- Indicators -->
                    <ol class='carousel-indicators'>
                        <li data-target='#carousel' data-slide-to='0' class='active'></li>
                        <li data-target='#carousel' data-slide-to='1'></li>
                        <li data-target='#carousel' data-slide-to='2'></li>
                        <li data-target='#carousel' data-slide-to='3'></li>
                        <li data-target='#carousel' data-slide-to='4'></li>
                        <li data-target='#carousel' data-slide-to='5'></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class='carousel-inner'>
                        <div class='item active'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/clm_ninos_1.png' alt='' title=''>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/clm_ninos_2.png' alt='' title=''>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/clm_ninos_4.png' alt='' title=''>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/clm_ninos_5.png' alt='' title=''>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/clm_ninos_6.png' alt='' title=''>
                        </div>
                        <div class='item'>
                            <img src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/clm_ninos_10.png' alt='' title=''>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class='left carousel-control' href='#carousel' data-slide='prev'>
                        <span class='glyphicon glyphicon-chevron-left'></span>
                        <span class='sr-only'>Anterior</span>
                    </a>
                    <a class='right carousel-control' href='#carousel' data-slide='next'>
                        <span class='glyphicon glyphicon-chevron-right'></span>
                        <span class='sr-only'>Siguinente</span>
                    </a>
                </div>
            </div>
            <div class="paragraph">
                <div>
                    <p>Si tienes preguntas o quieres informarte sobre temas de movilidad, acércate a los Centros Locales de Movilidad, allí un orientador(a) o un gestor(a) estarán listos para contarte lo que pasa en tu localidad y en la ciudad.</p>
                </div>
                <div class="pare zoom">
                </div>
                <div>
                    <p class="text-center"><strong>También ¡Te escuchamos!</strong></p>
                    <p>Tu participación es muy importante para conocer tus ideas, opiniones, aportes, sobre la movilidad en tu localidad para que entre todos y todas podamos mejorar.</p>
                </div>
            </div>

        </div>
        <style>
            .box-s1 {
                display: grid;
                gap: 16px;
                grid-auto-flow: dense;
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: auto;
                grid-template-areas:
                    'subbox paragraph';
            }

            .box-s1 .subbox-carousel {
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 16px;

            }

            .box-s1 .paragraph {
                margin: 16px;
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                /* padding: 10px 30px; */
            }

            .box-s1 .pare {
                height: 120px;
                width: 100%;
                background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/recurso_1_0.png');
                background-position: center;
                background-repeat: no-repeat;
                background-size: contain;
                margin-top: 16px;
                margin-bottom: 16px;
            }

            .box-s1 .paragraph .pare img {
                height: 120px;
            }
        </style>
        <div class="box-s2">
            <h4><strong>¿Te gustaría conocer más sobre la movilidad?</strong></h4>
            <p>Tenemos preparado para ti, actividades lúdicas en las que junto con tus compañeros(as), aprenderán sobre la movilidad en la ciudad. Acordaremos el tema, lugar, fecha y hora para que pasen un momento agradable mientras ponen en práctica lo aprendido.</p>
        </div>
        <style>
            .box-s2,
            .box-s3 {
                margin-top: 30px;
                padding: 0px 16px;
            }
        </style>
        <div class="box-s3">
            <h4><strong>¿Y que cosas puedes aprender?</strong></h4>
            <p>Puedes elegir cualquiera de los siguientes temas:</p>
        </div>
        <div class="box-s4">

            <div class="card-clm">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/clm_ninos_8.png' alt='' title=''>
                <div class="title">
                    <h4>Seguridad vial</h4>
                </div>
                <div class="overlay">
                    <div class="text">
                        <p>A través del juego conocerás como desplazarte en la vía de forma segura, evitar riesgos usando pasos seguros y los valores ciudadanos para tener una buena relación con los demás actores viales.</p>
                    </div>
                </div>
            </div>

            <div class="card-clm">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/clm_ninos_9_0.jpeg' alt='' title=''>
                <div class="title">
                    <h4>Movilidad accesible e incluyente</h4>
                </div>
                <div class="overlay">
                    <div class="text">
                        <p>Experimentarás con tus sentidos para entender las personas con discapacidad, sus principales dificultades al desplazarse en el espacio público y la manera en que todos y todas podemos ayudarnos.</p>
                    </div>
                </div>
            </div>

            <div class="card-clm">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/clm_ninos_7.png' alt='' title=''>
                <div class="title">
                    <h4>Movilidad Multimodal</h4>
                </div>
                <div class="overlay">
                    <div class="text">
                        <p>Con actividades dinámicas conocerás cuáles son los modos y medios de transporte y la importancia de tener hábitos amigables con el planeta al movernos por la ciudad.</p>
                    </div>
                </div>
            </div>

            <div class="card-clm">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/clm_ninos_3.png' alt='' title=''>
                <div class="title">
                    <h4>Movilidad sostenible</h4>
                </div>
                <div class="overlay">
                    <div class="text">
                        <p>Los cuentos, historias y juegos grupales son la herramienta para entender que la forma de desplazarnos en la ciudad afecta la calidad de vida y el medio ambiente, así conocerás las claves para proteger el planeta utilizando la bici o caminando.</p>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .box-s4 {
                display: grid;
                gap: 30px;
                grid-auto-flow: dense;
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
                grid-template-rows: auto;
                grid-template-areas:
                    '';
                padding: 30px;
            }

            .box-s4 .card-clm {
                position: relative;
                /* width: 50%; */
            }

            .box-s4 .image {
                display: block;
                width: 100%;
                height: auto;
            }

            .box-s4 .overlay {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
                opacity: 0;
                transition: .5s ease;
                background-color: #f8b133;
            }

            .box-s4 .card-clm {
                border: solid 1px #e5e5e5;
                border-radius: 5px;
            }

            .box-s4 .card-clm img {
                border-radius: 5px 5px 0px 0px;
            }

            .box-s4 .card-clm .title {
                height: 60px;
                border-radius: 0px 0px 5px 5px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: #f8b133;
                padding: 10px;
            }

            .box-s4 .card-clm h4 {
                text-align: center;
                font-weight: 700;
                font-size: 16px;
            }

            .box-s4 .card-clm:hover .overlay {
                opacity: 1;
                border-radius: 5px;
            }

            .box-s4 .text {
                color: rgba(25, 25, 25, 1);
                font-size: 15px;
                position: absolute;
                top: 50%;
                left: 0%;
                -webkit-transform: translate(-0%, -50%);
                -ms-transform: translate(-0%, -50%);
                transform: translate(-0%, -50%);
                text-align: center;
                padding: 10px;

            }
        </style>
        <div class="box-footer">
            <div class="paragraph">
                <h3><strong>¡Juega, aprende, diviértete y participa!</strong></h3>
                <p class="text-center">Los Centros Locales de Movilidad estamos más cerca de ti</p>
                <p class="text-center"><strong>¡Contáctanos!</strong></p>
                <p>Si te interesa participar en estas actividades te puedes contactar directamente con el Centro Local de Movilidad de tu localidad. Encuentra los datos de contacto pinchando en el siguiente link:</p>
                <a href="https://www.movilidadbogota.gov.co/web/centros-locales-de-movilidad" target="_blank" rel="noopener noreferrer">https://www.movilidadbogota.gov.co/web/centros-locales-de-movilidad</a>
            </div>
            <div class='imagen zoom'>
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/recurso_2_0.png' alt='' title=''>
            </div>
        </div>
        <style>
            .box-footer {
                padding: 0px 16px;
                display: grid;
                gap: 10px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-auto-rows: auto;
                grid-template-areas:
                'texto'
                'imagen';
            }

            .box-footer .paragraph {
                grid-area: texto;
            }

            .box-footer .paragraph h3{
                text-align: center;
                margin: 20px;
            }
            .box-footer .paragraph a{
                word-break: break-all;
            }

            .box-footer .imagen {
                grid-area: imagen;
                /* max-height: 150px; */
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .box-footer .imagen img{
                max-width: 150px;
            }
        </style>
            <hr>
        <div class="box-intereses">
            <h3><strong>También te puede interesar</strong></h3>
<div class="box-botones">
         <div class='imagen zoom'>
                <a href="https://www.movilidadbogota.gov.co/web/ruta-pila-0" target="_blank" rel="noopener noreferrer">
                    <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-10-2019/btn-ruta-pila.png' alt='' title=''>
                </a>
            </div>
            <div class='imagen zoom'>
                <a href="https://www.movilidadbogota.gov.co/web/al-colegio-en-bici" target="_blank" rel="noopener noreferrer">
                    <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-10-2019/btn-al-colegio-bici.png' alt='' title=''>
                </a>
            </div>
            <div class='imagen zoom'>
                <a href="https://www.movilidadbogota.gov.co/web/ciempies" target="_blank" rel="noopener noreferrer">
                    <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-10-2019/btn-ciempies.png' alt='' title=''>
                </a>
            </div>
            <div class='imagen zoom'>
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-10-2019/btn-moviparque.png" target="_blank" rel="noopener noreferrer">
                    <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-10-2019/btn-moviparque.png' alt='' title=''>
                </a>
            </div>
            <div class='imagen zoom'>
                <a href="https://www.movilidadbogota.gov.co/web/zonas-escolares" target="_blank" rel="noopener noreferrer">
                    <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-10-2019/btn-zonas-escolares.png' alt='' title=''>
                </a>
            </div>
            <div class='imagen zoom'>
                <a href="https://www.movilidadbogota.gov.co/web/ninos-primero" target="_blank" rel="noopener noreferrer">
                    <img class='' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-12-2019/btn-ninos-primero.png' alt='' title=''>
                </a>
            </div>
</div>
       
        </div>
        <style>
            .box-intereses{
               background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-10-2019/bg-header.jpg');             
               background-position: center;
               background-repeat: no-repeat;
               background-size: cover;
               padding: 16px 16px;
            }
            .box-intereses h3{
                /* text-align: center; */
            margin: 9px 20px 25px 20px ;
            }
            .box-botones{
                grid-auto-flow: dense;
                display: grid;
                gap: 10px;
                grid-auto-rows: auto;
                grid-template-columns: repeat(auto-fit, minmax(min(100%, 180px), 1fr));
             
            }
         
            .box-botones .imagen img{
                /* max-width: 15rem; */
                max-width: 100%;
            }
        </style>
    </div>
    <br>
</div>
<!-- End Set Wrapper -->

<!-- Styles -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .CLMinfantil {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        margin: 8px;
    }

    /*
    .CLMinfantil [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }
    */

    .w-100 {
        width: 100%;
    }

    .carousel-control .glyphicon-chevron-left,
    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-next,
    .carousel-control .icon-prev {
        color: rgba(102, 224, 38, 1) !important;
    }

    .carousel-indicators li {
        border: 1px solid rgba(102, 224, 38, 1) !important;
    }

    .carousel-indicators .active {
        background-color: rgba(102, 224, 38, 1) !important;
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

    }

    /* IE9 */
    @media(max-width:767px) {
        .box-head {

            grid-template-columns: repeat(3, 1fr);
            grid-template-areas:
                'logo  logo logo'
                'titulo titulo recorte';
        }


        .box-s1 {
            grid-template-columns: 1fr;
            grid-template-areas:
                'subbox'
                'paragraph';
        }
    }

    @media(min-width:768px) {
        .box-footer {
                grid-template-columns: repeat(3, 1fr);
                grid-template-areas:
                'texto texto imagen';
                padding: 0px 16px;
            }
     
    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- End Styles -->