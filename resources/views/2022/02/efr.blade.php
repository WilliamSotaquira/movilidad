@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class="encabezado">
        <div class='row'>
            <div class='col-xs-12 col-sm-6 col-md-6 '>
                <div class="icono-box">
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/logo_efr-01.png' alt='logo Empresa Familiarmente Responsable' title='logo Empresa Familiarmente Responsable'>
                </div>

            </div>
        </div>
    </div>
    <style>
        .encabezado {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/familia.webp');
            background-size: cover;
            position: relative;
            height: 300px;
            background-position: center;
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);

        }

        .encabezado .icono-box {
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* padding: 30px; */
        }

        .encabezado .icono-box img {
            /* max-width: 250px; */
        }

        .encabezado .titulo {
            background-color: #ff6600;
            font-family: 'Montserrat', sans-serif;
            font-size: 35px;
            font-weight: 500;
            text-align: center;
            line-height: 1.1;
            color: white;
            margin: 30px;
            padding: 10px;
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        }

        .encabezado .enfasis-enc {
            /* color: #ff6600; */
            color: #bccd41;
            font-weight: 700;
            font-size: 1.1em;
        }
    </style>
    <div class='s1'>
        <div class="box-parrafo">
            <div class="titulo">
                <h3>¿Qué es <span class="enfasis2">efr?</span></h3>
            </div>
            <div class="parrafos">
                <p>Empresa Familiarmente Responsable <strong>EFR</strong>, es una norma Internacional certificable que forma parte de la Responsabilidad Social Empresarial. Es un modelo de gestión orientado a la conciliación o equilibrio de la vida personal, familiar y laboral, basado en la mejora continua y orientado a la obtención de resultados.</p>
            </div>
        </div>
    </div>
    <div class="box-videos">
        <div class="box-tabs">

            <div role="tabpanel">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="menu1">
                        <video id="video" controls='' style='width: 100%;' poster="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-03-2022/poster_efr.png">
                            <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-03-2022/programa_efr.mp4' type='video/mp4'>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="menu2">
                        <div class='video'>
                            <video controls='' style='width: 100%;' poster="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/sxcv-imagen_221018_ca.jpg">
                                <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/vacacionesmodivertidas.mp4' type='video/mp4'>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="menu3">
                        <div class='video'>
                            <video controls='' style='width: 100%;' poster="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/sxcv-imagen_221018_c7.jpg">
                                <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-10-2022/olimpiadas.mp4' type='video/mp4'>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="menu4">
                        <div class='video'>
                            <video controls='' style='width: 100%;' poster="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/sxcv-imagen_221018_c9.jpg">
                                <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/efralta.mp4' type='video/mp4'>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="menu5">
                        <div class='video'>
                            <video controls='' style='width: 100%;' poster="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/sxcv-imagen_221018_c8.png">
                                <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/firmaefr.mp4' type='video/mp4'>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Nav tabs -->
            <ul class="nav nav-pills nav-justified" role="tablist">
                <li role="presentation" class="active">
                    <a href="#menu5" aria-controls="tab" role="tab" data-toggle="tab">Firma <br>compromiso</a>
                </li>
                <li role="presentation">
                    <a href="#menu1" aria-controls="tab" role="tab" data-toggle="tab">Medidas <br>e.f.r.</a>
                </li>
                <li role="presentation">
                    <a href="#menu4" aria-controls="tab" role="tab" data-toggle="tab">Feria <br>e.f.r.</a>
                </li>
                <li role="presentation">
                    <a href="#menu3" aria-controls="tab" role="tab" data-toggle="tab">1ª Olimpiadas <br>Deportivas</a>
                </li>
                <li role="presentation">
                    <a href="#menu2" aria-controls="tab" role="tab" data-toggle="tab">Vacaciones <br>Movidivertidas</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="s2">
        <div class="box-parrafo">
            <div class="titulo">
                <h3>¿Quien es <span class="enfasis2">fundación más familia?</span></h3>
            </div>
            <div class="parrafos">
                <div class="row">
                    <div class='col-xs-12 col-sm-8 col-md-8'>
                        <p>Es una entidad privada, sin ánimo de lucro, aconfesional e independiente, que se constituye en el 2003, para la <strong>protección, defensa y promoción de las familias,</strong> y en especial de aquellas con dependencias (menores, mayores, personas con discapacidad, etc.), en su seno.</p>
                    </div>
                    <div class='col-xs-12 col-sm-4 col-md-4'>
                        <div class="img1">
                            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/logo-headerv2.webp' alt='Logo Más Familia' title='Logo Más Familia'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s3">
        <div class="box-parrafo">
            <div class="titulo">
                <h3>Propósito <span class="enfasis2">efr</span></h3>
            </div>
            <div class="parrafos">
                <p>La Secretaría Distrital de Movilidad encuentra en el Sistema de Gestión <span class="enfasis2">efr</span> la alternativa para afrontar una nueva forma de dirección y gestión de las personas, con nuevos métodos y herramientas para cimentar un equipo <strong>comprometido, productivo, eficiente y de la misma manera feliz, en entornos flexibles y armónicos.</strong></p>
                <p>Alcanzando así un mayor equilibrio entre <strong>la vida personal, laboral y familiar</strong> que parte de la responsabilidad y el compromiso bidireccional <span class="enfasis2">Entidad - Persona</span></p>
            </div>
            <div class="img1">
                <br>
                <div class="row">
                    <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-8'>
                        <img id="img-efr" class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/proposito_efr.webp' alt='imagen estándar es de calidad efr' title='imagen estandar  es de calidad efr'>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='box-pdf'>
        <div class="titulo">
            <h3>Compromiso de la dirección con el Sistema de Gestión <span class="enfasis2">efr</span></h3>
        </div>
        <div class='imagen'>
            <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-11-2022/efr_landing.png" target="_blank" rel="noopener noreferrer">
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-11-2022/efr_landing.png' alt='documento compromiso EFR' title='documento compromiso EF'>
            </a>
        </div>
        <br>
        <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/compromiso_por_la_direccion_2022.pdf" target="_blank" rel="noopener noreferrer" download>De clic aquí y descargue aquí el documento .pdf "Compromiso de la Dirección con el Sistema de Gestión - efr"</a></p>
    </div>
    <style>
        .box-pdf {
            padding-top: 32px;
        }

        .box-pdf .pdf {
            padding: 0px 32px;
        }
        .box-pdf .imagen{
            max-width: 80%;
            width: 80%;
            margin: auto;
        }
    </style>

    <div class="box-perfiles">
        <div class="titulo">
            <h3>Lideres <span class="enfasis2">efr</span></h3>
        </div>
        <div class="perfiles">
            <div class="perfil zoom">
                <div class="foto">
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/paula-tatiana-arenas.png' alt='Foto Paula Tatiana Arenas' title='Foto Paula Tatiana Arenas'>
                </div>
                <div class="nombre">
                    <h3>Paula Tatiana Arenas</h3>
                    <h4><strong>Responsable de la Dirección</strong> - Subsecretaria de Gestión Corporativa</h4>
                </div>
            </div>
            <div class="perfil zoom">
                <div class="foto">
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/paola_adriana_corona_miranda_0.png' alt='Foto Paola Adriana Corona Miranda' title='Foto Paola Adriana Corona Miranda'>
                </div>
                <div class="nombre">
                    <h3>Paola Adriana Corona Miranda</h3>
                    <h4><strong>Manager efr</strong> - Directora Administrativa y Financiera</h4>
                </div>
            </div>
            <div class="perfil zoom">
                <div class="foto">
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/vianneydelsocorroceledonaponte_0.png' alt='Foto Vianney Celedón' title='Foto Vianney Celedón'>
                </div>
                <div class="nombre">
                    <h3>Vianney Celedón</h3>
                    <h4><strong>Coodinador efr</strong> - Directora de Talento Humano</h4>
                </div>
            </div>
        </div>
        <div class="titulo">
            <h3>Equipo <span class="enfasis2">Técnico</span></h3>
        </div>
        <div class="perfiles">
            <div class="perfil zoom">
                <div class="foto">
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/sandra_vargas.png' alt='Foto Sandra Vargas' title='Foto Sandra Vargas'>
                </div>
                <div class="nombre">
                    <h3>Sandra Vargas Jurado</h3>
                    <h4>Subdirectora Administrativa</h4>
                </div>
            </div>
            <div class="perfil zoom">
                <div class="foto">
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/maria_claudia_gomez.png' alt='Foto María Claudia Gómez Salazar' title='Foto María Claudia Gómez Salazar'>
                </div>
                <div class="nombre">
                    <h3>María Claudia Gómez Salazar</h3>
                    <h4>Profesional Dirección de Talento Humano</h4>
                </div>
            </div>
            <div class="perfil zoom">
                <div class="foto">
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/claudia_gonzalez.png' alt='Foto Claudia Marcela González Sánchez' title='Foto Claudia Marcela González Sánchez'>
                </div>
                <div class="nombre">
                    <h3>Claudia Marcela González</h3>
                    <h4>Profesional Oficina Asesora de Comunicaciones y Cultura para la Movilidad</h4>
                </div>
            </div>
            <div class="perfil zoom">
                <div class="foto">
                    <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/andres_felipe_castro.png' alt='Foto Andrés Felipe Castro' title='Foto Andrés Felipe Castro'>
                </div>
                <div class="nombre">
                    <h3>Andrés Felipe Castro</h3>
                    <h4>Profesional Oficina Asesora de Planeación Institucional</h4>
                </div>
            </div>
        </div>
    </div>
    <style>
        .box-perfiles {
            padding-top: 32px;
        }

        .box-perfiles .perfiles {
            display: grid;
            gap: 10px;
            grid-auto-flow: dense;
            grid-template-columns: repeat(auto-fill, minmax(min(100%, 200px), 1fr));
            grid-template-rows: auto;
            grid-template-areas:
                '';
            margin: auto;
        }

        .box-perfiles .perfiles .perfil .foto img {
            border-radius: 50%;
            padding: 16px 30px;
        }

        .perfil h3 {
            font-size: 18px;
            font-weight: 700;
            text-align: center;
            line-height: 1;
            color: #ff6600;
            margin: 8px;
        }

        .perfil h4 {
            font-size: 15px;
            font-weight: 500;
            text-align: center;
            line-height: 1.3;
            color: rgba(25, 25, 25, 1);
            margin: 4px;
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
    </style>
    <hr>
    <div class="s4">
        <div class="box-parrafo">
            <div class='row'>
                <!-- <div class='col-xs-12 col-sm-8 col-md-8'>
                    <div class="btn-efr">
                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-11-2020/5._cartilla_de_medidas_efr.pdf">
                            <div class="titulo">
                                <div>
                                    Medidas <strong>efr</strong>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> -->
                <div class='col-xs-12 col-sm-4 col-md-4'>
                    <div class="btn-efr">
                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-11-2020/6._diangostico_efr_.pdf">
                            <div class="titulo">
                                <div>
                                    Resultados de Diagnóstico del <strong>Sistema de Gestión efr</strong>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-xs-12 col-sm-8 col-md-8'>
                    <div class="btn-efr">
                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-11-2020/7._indicadores.pdf">
                            <div class="titulo">
                                <div>
                                    Sistemas de Gestión <strong>efr - Indicadores</strong>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-xs-12 col-sm-4 col-md-4'>
                    <div class="btn-efr">
                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/19-11-2020/objetivos-de-mejora-efr.pdf">
                            <div class="titulo">
                                <div>
                                    Objetivos de <strong>Mejora efr</strong>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-xs-12 col-sm-4 col-md-4'>
                    <div class="btn-efr">
                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/ppt_cartilla_efr.2.pdf">
                            <div class="titulo">
                                <div>
                                    Cartilla <strong>efr</strong>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-xs-12 col-sm-4 col-md-4'>
                    <div class="btn-efr">
                        <a href="https://intranetmovilidad.movilidadbogota.gov.co/intranet/sites/default/files/2020-08-31/mailing_efr_mesa-de-trabajo-1-copia.jpg">
                            <div class="titulo">
                                <div>
                                    Dirección y orientación estratégica <strong>efr</strong>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-efr">
        <div class='row'>
            <div class='col-xs-12 col-sm-5 col-md-5'>
                <div class="titulo">
                    <h3>
                        Canales de comunicación <span class="enfasis3"> <br>efr</span>
                    </h3>
                </div>
            </div>
            <div class='col-xs-12 col-sm-7 col-md-7'>
                <div class="resumen">
                    <dl>
                        <dt>Fundación Más Familia:</dt>
                        <dd> <a href="https://www.masfamilia.org/canal/">https://www.masfamilia.org/canal/</a></dd>
                    </dl>

                    <dl>
                        <dt>Correo electrónico:</dt>
                        <dd><a href="mailto:tufelicidadnosmueve@movilidadbogota.gov.co">tufelicidadnosmueve@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <style>
        #video,
        #img-efr {
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        }

        .box-videos {
            margin: 20px;
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        }

        .box-videos .nav-pills>li.active>a,
        .nav-pills>li.active>a:focus,
        .nav-pills>li.active>a:hover {
            background-color: #ff6600 !important;
            color: #fff;
        }

        .box-videos .nav-justified>li>a {
            color: #333333;
        }

        .footer-efr {
            /* height: 200px; */
            padding: 30px;
            /* background-color: #ff6600; */
            background: linear-gradient(135deg, #ff6600 0%, #000000 200%);

        }

        .footer-efr .titulo {
            height: 140px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            padding: 8px;
        }

        .footer-efr .resumen dt {
            margin: 0px;
            color: #333333;
        }

        .footer-efr .resumen dl {
            margin: 5px;

        }

        .footer-efr .titulo h3 {
            color: #ff6600;
            font-size: 22px;
            font-weight: 700;
            text-align: center;
            margin: 0px;
        }

        .footer-efr .resumen {
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            font-size: 16px;
            font-weight: 500;
        }

        .footer-efr .resumen a {
            color: rgba(255, 255, 255, 1);
        }

        .box-parrafo {
            padding: 8px 0px 0px 0px !important;

        }


        .seccion .titulo h3 {
            text-align: left;
            font-weight: 700;
            color: #ff6600;
            margin-bottom: 25px;
        }

        .s2 .img1 {
            display: flex;
            justify-content: center;
        }

        .s2 .box-parrafo .parrafos img {
            max-width: 300px;
            text-align: center;
            margin: 15px;
        }

        .enfasis2 {
            color: #ff6600;
            font-size: 1.2em;
            font-weight: 700;
        }

        .enfasis3 {
            color: #ff6600;
            font-size: 1.4em;
            font-weight: 700;
        }

        .s4 {
            padding: 30px;
        }

        .btn-efr {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(45deg, #999999 0%, #00000080 150%);
            padding: 15px;
            margin: 10px;
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        }

        .btn-efr a {
            text-decoration: none !important;
        }

        .btn-efr:hover {
            background: linear-gradient(135deg, #ff6600 0%, #000000 200%);

        }


        .s4 .box-parrafo [class*='col-'] {
            margin: 0px;
            padding: 0px;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
        }


        .btn-efr .titulo {
            text-align: center;
            font-size: 20px;
            font-weight: 700px;
            padding: 20px;
            margin: 0px;
            line-height: 1.1;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #000;

        }

        .btn-efr:hover .titulo {
            color: #fff;
        }

        .btn-efr .icono {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/11-03-2022/hacer-clic2.webp');
            height: 50px;
            width: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: right;
        }

        .btn-efr:hover .icono {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/hacer-clic.png');
        }
    </style>
</div>

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .seccion {
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        max-width: 980px;
        word-break: break-word !important;
    }

    /*
   .seccion [class*='col-'] {
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

    @media(max-width:767px) {

        .box-parrafo {}
    }

    @media(min-width:768px) {
        .box-parrafo {
            padding: 30px 35px 0px 30px;
        }
    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
