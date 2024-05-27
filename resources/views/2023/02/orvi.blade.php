@extends('welcome')
@section('title','ORVI')

@section('contenido')

<!-- Set orvi -->
<div class="set-wrapper orvi container">

    <!-- Sección box logo-full -->
    <div class="box-logo-full">
        <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-05-2024/logoorvi.png" alt="logo ORVI">
    </div>
    <style>
        .set-wrapper .box-logo-full {
            grid-area: box-logo-full;
            margin-bottom: 40px;
            padding: 32px;
        }

        .box-logo-full img {
            width: 500px;
            margin: auto;
        }

        @media(min-width:768px) {
            .set-wrapper .box-logo-full {
                grid-area: box-logo-full;
                margin-bottom: 40px;
                padding: 84px;
            }

        }
    </style>

    <!-- Componente box youtube-paragraph -->
    <div class="box-youtube-paragraph">
        <div class='video video-ppal video-4by3'>
            <div class='embed-responsive embed-responsive-4by3'>
                <iframe width='100%' src='https://www.youtube.com/embed/VsJyXZ8zpHY' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
            </div>
        </div>
        <div class="paragraph ph-youtube-paragraph">
            <h3>¿Qué es ORVI?</h3>
            <p><strong>Bogotá D.C. se convirtió en la primera ciudad de Colombia y la segunda en América Latina,</strong> en contar con un <strong>Centro de Orientación para Víctimas por Siniestros Viales.</strong> En ORVI, informamos y orientamos de manera gratuita a las víctimas por siniestros viales y sus familiares, acerca de los procesos que pueden seguir en materia social, jurídica, psicológica y de formación tras un incidente de tránsito.</p>
            <p>En el centro disponemos de medios presenciales y virtuales para que las víctimas de siniestros viales y/o sus familiares puedan acceder al servicio.</p>
        </div>
    </div>
    <style>
        .set-wrapper .box-youtube-paragraph {

            grid-area: box-youtube-paragraph;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
        }

        .box-youtube-paragraph .video-ppal {
            max-height: 500px;
            overflow: hidden;
        }

        .box-youtube-paragraph .video-ppal iframe {
            max-height: 500px;
            object-fit: cover;
            object-position: center
        }

        .box-youtube-paragraph .ph-youtube-paragraph {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* align-items: center; */
        }

        .box-youtube-paragraph .ph-youtube-paragraph h3 {
            font-size: 24px;
            font-weight: 700;
            line-height: 1.5;
            text-align: left;
            color: #1C1D3C;
        }

        .box-youtube-paragraph .ph-youtube-paragraph p {
            font-size: 16px;
            line-height: 1.5;
            text-align: left
        }


        @media(min-width:768px) {
            .set-wrapper .box-youtube-paragraph {
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;
            }

            .box-youtube-paragraph .video-ppal {
                /* max-height: 300px; */
                /* overflow: hidden; */
            }

            .box-youtube-paragraph .video-ppal img {
                height: 300px;
                object-fit: cover;
                object-position: center
            }

            .box-youtube-paragraph .ph-youtube-paragraph {
                padding: 1em 3em;
            }

        }
    </style>

    <!-- Sección box icons-featured -->
    <div class="box-icons-featured">

        <div class="set-icons">

            <div class="card-icon">
                <div class="imagen img-card">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-02-2023/asistencia-social.png" alt="icono de asistencia social" title="icono de asistencia social">
                </div>
                <div class="title-card">
                    <h3>¿A quién ayudamos?</h3>
                </div>
                <div class="sumary-card">
                    <p>A toda persona que haya sufrido daño o afectación como consecuencia directa de un siniestro vial.</p>
                </div>
            </div>
            <div class="card-icon">
                <div class="imagen img-card">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-02-2023/apreton-de-manos.png" alt="icono de apretón de manos" title="icono de apretón de manos">
                </div>
                <div class="title-card">
                    <h3>¿Qué hacemos?</h3>
                </div>
                <div class="sumary-card">
                    <p>Ofrecemos herramientas para adaptarse adecuadamente a las nuevas condiciones de vida.</p>
                </div>
            </div>
            <div class="card-icon">
                <div class="imagen img-card">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-02-2023/ok.png" alt="icono gesto OK" title="icono gesto OK">
                </div>
                <div class="title-card">
                    <h3>¿Qué garantizamos?</h3>
                </div>
                <div class="sumary-card">
                    <p>Un trato con enfoque de derecho, diferencial y de género para todas las personas.</p>
                </div>
            </div>

        </div>
        <div class="summary">
            <p>La implementación y operación del Centro <strong>ORVI</strong> se enmarca en el Plan Distrital de Seguridad Vial 2017-2026 (Decreto 813 de 2017) y del Plan Distrital de Desarrollo 2020 – 2024 Un nuevo contrato social y ambiental para el siglo XXI (Acuerdo 761 de 2020).</p>
        </div>


    </div>
    <style>
        .set-wrapper .box-icons-featured {
            grid-area: box-icons-featured;
            margin-bottom: 40px;
        }

        .box-icons-featured .set-icons {
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;

            background-color: #1C1D3C;

            border-radius: 8px 8px 0 0;
        }

        .box-icons-featured .set-icons img {
            max-width: 80px;
            margin: 2em auto 1em auto;
            /* object-fit: cover; */
            /* object-position: center */
        }

        .card-icon .title-card {
            height: 60px;
            padding: 0 1em 0 1em;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box-icons-featured .set-icons h3 {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            overflow: hidden;
            text-align: center;
            margin: 0px;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
        }

        .box-icons-featured .set-icons p {

            text-align: center;
            padding: 0 1em 1em 1em;
            font-size: 16px;
            line-height: 1.3;
            color: rgba(255, 255, 255, 1)
        }

        .box-icons-featured .summary {
            padding: 2em 2em;
            text-align: center;
            background-color: #BED000;
            border-radius: 0 0 8px 8px;

        }

        .box-icons-featured .summary p {
            font-size: 16px;
            line-height: 1.3;
            color: #151515;
            margin: 0px;
        }

        @media(min-width:768px) {
            .box-icons-featured .set-icons {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>

    <!-- Sección box paragraph-full-buttons-2 -->
    <div class="box-paragraph-full-buttons-2">
        <div class="paragraph ph-full">
            <h2>¿Eres víctima de un siniestro vial?</h2>
            <p>Te acompañamos y orientamos como víctima directa, a tu cónyuge y/o familiar en primer y segundo grado de consanguinidad (padre, madre, hermana, hermano, hijo e hija natural o civil).</p>
        </div>
        <div class="buttons">
            <a class="link-clic" href="https://vus.circulemosdigital.com.co/#/login" target="_blank" rel="noopener noreferrer"><span class="icon-clic"></span>Solicita tu cita de atención</a>
            <a class="link-wa" href="https://wa.link/iq4xn4" target="_blank" rel="noopener noreferrer"><span class="icon-wa"></span>Chatea con nosotros</a>

        </div>

    </div>
    <style>
        .set-wrapper .box-paragraph-full-buttons-2 {
            grid-area: box-paragraph-full-buttons-2;
            margin-bottom: 60px;
        }

        .box-paragraph-full-buttons-2 .paragraph {
            padding: 1em;
            text-align: center;
        }

        .paragraph h2 {
            font-size: 32px;
            font-weight: 700;
            text-align: center;
            line-height: 1.3;
            color: #1C1D3C;
        }

        .paragraph p {
            font-size: 16px;
            text-align: left;
            line-height: 1.5;
            color: #151515;
        }


        .box-paragraph-full-buttons-2 .buttons {
            padding: 1em;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            justify-items: center;
        }

        .buttons a {
            padding: 0.6em 2em;

            background-color: #1C1D3C;
            color: #bed000;
            border-radius: 8px;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            margin: 0px;
            letter-spacing: 0.6;
        }

        .buttons .link-wa {
            padding: 1.6em 2em 1.6em 3em;
        }

        .buttons .link-clic {
            padding: 1.6em 2em 1.6em 3em;
        }

        .buttons .icon-wa::before {
            content: "";
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-02-2023/whatsapp.png');
            width: 24px;
            height: 24px;
            position: absolute;
            margin-left: -30px;
            background-size: contain;
        }

        .buttons .icon-clic::before {
            content: "";
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-03-2023/cursor_2.png');
            width: 24px;
            height: 24px;
            position: absolute;
            margin-left: -30px;
        }

        .buttons a:hover .icon-clic::before {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-03-2023/cursor_1.png');
        }

        .buttons a:hover {
            background-color: #bed000;
            color: #1C1D3C;
        }

        .buttons a:active,
        .buttons a:focus {
            background-color: #454545;
            color: #e5e5e5;
        }

        @media(min-width:768px) {
            .box-paragraph-full-buttons-2 .buttons {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>

    <!-- Sección box img-collapse -->
    <div class="box-img-collapse">

        <div class="imagen img-collapse">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-03-2023/orvi_2.png" alt="Imagen de personas conversando" title="Imagen de personas conversando">
        </div>

        <div class="set-collapse">
            <h3>Enfoques de Orientación</h3>
            <p></p>
            <!-- collapse-grupo -->
            <div class='panel-group' id='accordion-grupo' role='tablist ' aria-multiselectable='true'>

                <!-- collapse uno -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading_uno'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-grupo' href='#collapse_uno' aria-expanded='false' aria-controls='collapse_uno'>
                                ORIENTACIÓN SOCIAL
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_uno' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_uno' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-uno'>
                                <div class="imagen img-1">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-03-2023/orvi_3.png" alt="foto" title="foto">
                                </div>
                                <h3>Orientación Social:</h3>
                                <p>En la orientación social evaluamos las condiciones sociales que hayan sido afectadas por consecuencia del siniestro vial. Esto nos permite informarte acerca de los programas sociales vigentes ofrecidos por el Distrito, en los que de manera voluntaria podrás inscribirte de acuerdo a tus intereses, necesidades y condiciones de cada programa, obteniendo herramientas para adaptarte a tus nuevas condiciones de vida.</p>
                                <p>La orientación social tiene un número de citas máximo por persona o por grupo familiar de: 3.</p>
                            </div>
                        </div>
                    </div>
                    <style>
                        .box-uno {
                            grid-area: uno;
                        }
                    </style>
                </div>

                <!-- collapse dos -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading_dos'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-grupo' href='#collapse_dos' aria-expanded='false' aria-controls='collapse_dos'>
                                ORIENTACIÓN JURÍDICA
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_dos' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_dos' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-dos'>
                                <div class="imagen img-dos">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-03-2023/orvi_6.png" alt="imagen" title="imagen">

                                    <h3>Orientación Jurídica:</h3>
                                    <p>En la orientación jurídica te informamos y orientamos en la preparación de documentos y procedimientos previos de cualquier trámite que requieras como víctima, relacionado con la ocurrencia de un siniestro vial y las reclamaciones a que haya lugar, de carácter civil, penal, laboral, administrativo, reclamación de pólizas de seguro o cualquier otro tipo de instancia. Ofrecemos la información necesaria para el inicio, trámite y posible consecución de los diferentes procesos a que exista lugar. Lo anterior con miras a garantizar que tú como víctima o tus beneficiarios cuenten con información oportuna, eficiente e idónea. Esta actividad se desarrolla a nivel de orientación y <strong>en ningún momento ejercemos una representación judicial.</strong></p>
                                    <p>La orientación jurídica tiene un número de citas máximo por persona o por grupo familiar de: 5.</p>
                                    <br>
                                    <p><strong>Términos para acceder a la Orientación Jurídica:</strong></p>
                                    <p>La orientación debe cumplir estándares de oportunidad. Para lograr esto el orientador jurídico verifica que las acciones, reclamaciones y/o trámites a gestionar, sean oportunos en cuanto a sus términos legales de caducidad y prescripción. Las consultas legales que estén caducadas o prescritas, no serán atendidas por los orientadores.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        .box-dos {
                            grid-area: dos;
                        }
                    </style>
                </div>

                <!-- collapse tres -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading_tres'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-grupo' href='#collapse_tres' aria-expanded='false' aria-controls='collapse_tres'>
                                ORIENTACIÓN PSICOLÓGICA
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_tres' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_tres' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-tres'>
                                <div class="imagen img-tres">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-03-2023/orvi_5.png" alt="imagen dos" title="imagen dos">

                                </div>
                                <h3>Orientación Psicológica:</h3>
                                <p>Realizamos orientación psicológica primaria, con el fin de valorar el daño/afectación asociados al siniestro vial, para brindarte recomendaciones con relación a las posibles afectaciones psicológicas y un posible tratamiento a seguir.</p>
                                <p>Aunque <strong>en ORVI no brindemos un tratamiento psicológico,</strong> el/la profesional podrá recomendar realizarlo por medio del régimen de salud o el servicio de salud especializado de tu preferencia.</p>
                                <p>Hacemos orientación enfocada en primeros auxilios psicológicos cuando haya lugar, con el fin de apoyar el restablecimiento y la funcionalidad a nivel conductual, emocional y cognitiva.</p>
                                <i>La orientación psicológica tiene un número de citas máximo por persona de: 5 (también podrán plantearse otras modalidades de atención: grupal o familiar y lo recomendado por el profesional de orientación psicológica).</i>
                            </div>
                        </div>
                    </div>
                    <style>
                        .box-tres {
                            grid-area: tres;
                        }
                    </style>
                </div>

                <!-- collapse cuatro -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading_cuatro'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-grupo' href='#collapse_cuatro' aria-expanded='false' aria-controls='collapse_cuatro'>
                                ¿QUIÉN PUEDE ACCEDER?
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_cuatro' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_cuatro' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-cuatro'>
                                <div class="imagen img-cuatro">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-03-2023/orvi_4.png" alt="imagen" title="imagen">
                                </div>
                                <br>
                                <p><strong>En ORVI</strong> enfocamos la atención en la víctima directa, cónyuge o compañero (a) permanente, familiares en primer y segundo grado de consanguinidad (hijos/hijas, padres/madres, hermanos/hermanas). Los menores de edad deben estar acompañados de sus padres, madres o acudientes legalmente designados.</p>
                            </div>
                        </div>
                    </div>
                    <style>
                        .box-cuatro {
                            grid-area: cuatro;
                        }
                    </style>
                </div>

                <!-- collapse cinco -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading_cinco'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-grupo' href='#collapse_cinco' aria-expanded='false' aria-controls='collapse_cinco'>
                                TEN EN CUENTA
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_cinco' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_cinco' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-cinco'>
                                <div class="imagen img-cinco">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-03-2023/orvi_1.png" alt="imagen" title="imagen">
                                </div>
                                <br>
                                <ul>
                                    <li>Ofrecemos orientación a las víctimas de siniestros viales desde el 2014 y que hayan sido registradas por medio del <strong>IPAT (Informe Policial de Accidentes de Tránsito)</strong> o cuya ocurrencia pueda ser comprobada.</li>
                                    <li><strong>En ORVI no actuamos como un ente de reacción inmediata</strong> al siniestro de tránsito, ni como un mecanismo de atención primaria en salud. <strong>En caso de emergencia, llama al 123.</strong></li>
                                    <li><strong>En ORVI</strong> prestamos nuestros servicios a los residentes y víctimas de siniestros viales en la <strong>ciudad de Bogotá</strong>, teniendo en cuenta el ámbito territorial de los trámites, con el fin de que estos puedan llegar a ser eficientes y efectivos.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <style>
                        .box-cinco {
                            grid-area: cinco;
                        }
                    </style>
                </div>

            </div>
            <!-- /#fin -grupo -->
        </div>
    </div>
    <style>
        .set-wrapper .box-img-collapse {
            grid-area: box-img-collapse;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'img-collapse'
                'collapse';
            margin-bottom: 80px;
        }

        .box-img-collapse .img-collapse {
            grid-area: img-collapse;
        }

        .box-img-collapse .img-collapse img {
            grid-area: img-collapse;
            height: 100%;
            max-height: 600px;
            object-fit: cover;
            object-position: center,
        }

        .box-img-collapse .set-collapse {
            grid-area: collapse;
            padding: 0;
        }

        .box-img-collapse .set-collapse h3 {
            margin-bottom: 16px;
            font-size: 32px;
            font-weight: 700;
            line-height: 1.5;
            text-align: center;
            color: #1C1D3C;
        }

        @media(min-width:768px) {
            .set-wrapper .box-img-collapse {
                grid-template-columns: 1fr 1fr;
                grid-template-areas:
                    'img-collapse collapse';
            }

            .box-img-collapse .set-collapse {
                padding: 0 1em;
            }
        }

        .box-img-collapse .glyphicon-chevron-right::before {
            color: #1C1D3C !important;
        }

        .box-img-collapse .glyphicon-chevron-left::before {
            color: #1C1D3C !important;
        }

        .box-img-collapse .panel-primary {
            border-color: #c5c5c5 !important;
        }

        .box-img-collapse .panel-heading {
            border-color: #e5e5e5 !important;
            background-color: #e5e5e5 !important;
            background-image: none !important;
        }

        .box-img-collapse .panel-heading .panel-title a {
            text-decoration: none;
            color: #454545 !important;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.6px;
        }

        .box-img-collapse .panel-heading .panel-title a:after {
            font-family: 'Glyphicons Halflings';
            content: "\e080";
            float: right;
            color: #1C1D3C;
            font-size: 14px;
        }

        .box-img-collapse .panel-heading .panel-title a.collapsed:after {
            content: "\e114";
        }

        .box-img-collapse .panel-primary>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #c5c5c5;
        }
    </style>

    <!-- Component box title-center -->
    <div class="box-title-center">
        <h3>Paso a paso</h3>
    </div>
    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .set-wrapper .box-title-center {
            grid-area: box-title-center;
        }

        .box-title-center h3 {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            color: rgba(77, 84, 31, 1);
        }
    </style>

    <!-- Sección box step-by-step -->
    <div class="box-step-by-step">

        <div class="card-step card-step-1">
            <div>
                <div class="bg-circle">
                    <span class="step-number">1</span>
                </div>
                <h4>Agenda</h4>
            </div>

            <div class="overlay">
                <p>Agenda tu cita de atención haciendo clic aquí</p>
                <span class="btn-step-1">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSc8B8JF8rKSgLddeq9w61IaY_3hwXHbkcoD_LVad_A5ytk6xg/viewform" target="_blank" rel="noopener noreferrer">Agenda aquí</a>
                </span>
            </div>
        </div>

        <div class="card-step  card-step-2">
            <div>
                <div class="bg-circle">
                    <span class="step-number">2</span>
                </div>
                <h4>Acogida</h4>
            </div>
            <div class="overlay">
                <p>Evaluamos tus necesidades y te guiamos en la orientación que necesites en material Social, Psicológica o Jurídica.</p>
            </div>
        </div>

        <div class="card-step  card-step-3">
            <div>
                <div class="bg-circle">
                    <span class="step-number">3</span>
                </div>
                <h4>Orientación</h4>
            </div>
            <div class="overlay">
                <p>Profesionales de los diferentes enfoques te acompañarán en el proceso.</p>
            </div>
        </div>

        <div class="card-step card-step-4">
            <div>
                <div class="bg-circle">
                    <span class="step-number">4</span>
                </div>
                <h4>Cierre</h4>
            </div>
            <div class="overlay">
                <p>Culminamos el proceso de orientación en cada uno de los enfoques sugeridos.</p>
            </div>
        </div>


        <div class="card-step  card-step-5">
            <div>
                <div class="bg-circle">
                    <span class="step-number">5</span>
                </div>
                <h4>Seguimiento</h4>
            </div>
            <div class="overlay">
                <p>Hacemos seguimiento sobre los avances de tu proceso de orientación</p>
            </div>
        </div>


        <style>
            .box-step-by-step .bg-circle {
                display: block;
                /* width: 100%; */
                /* height: auto; */
            }

            .box-step-by-step .overlay {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
                opacity: 0;
                transition: .5s ease;
                background-color: #1C1D3C;
                border-radius: 15px;
                padding: 12px;

                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

            }

            .box-step-by-step .card-step:hover .overlay {
                opacity: 1;
            }

            .box-step-by-step .card-step {
                position: relative;
            }

            .box-step-by-step .text {
                color: white;
                font-size: 20px;
                position: absolute;
                top: 50%;
                left: 50%;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                text-align: center;
            }
        </style>


    </div>
    <style>
        .set-wrapper .box-step-by-step {
            grid-area: box-step-by-step;
            margin-top: 40px;
            margin-bottom: 40px;
            display: grid;
            gap: 16px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
        }

        .box-step-by-step .card-step {
            padding: 0.8em;
            text-align: center;
            background: #bed000;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }

        .box-step-by-step .card-step:hover {
            background-color: #1C1D3C;
        }

        .box-step-by-step .card-step:hover .bg-circle {
            background-color: #bed000;
        }

        .box-step-by-step .card-step:hover .bg-circle {
            background-color: #bed000;
        }

        .box-step-by-step .card-step .bg-circle {
            background-color: #1C1D3C;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            margin: 2em 1em 1em 1em;
        }

        .box-step-by-step .card-step .bg-circle .step-number {
            color: #ffffff;
            font-size: 40px;
            font-weight: 700;
            text-align: center;
            position: relative;
            top: calc(50% - 20px);
            line-height: 1;
        }

        .card-step h4 {
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            line-height: 1.3;
            color: #252525;
            padding-top: 16px;
        }

        .box-step-by-step .card-step:hover h4,
        .box-step-by-step .card-step:hover p {
            color: #ffffff;
        }

        .card-step p {
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            line-height: 1.1;
            color: #252525;
            margin: 0px;
        }

        .box-step-by-step .card-step-1>.overlay {
            display: grid;
        }

        .box-step-by-step .card-step-1 .btn-step-1 {
            position: absolute;
            visibility: hidden;
        }

        .box-step-by-step .card-step-1 .btn-step-1 a {
            padding-right: 26px;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            line-height: 1;
            color: #252525;
        }

        .box-step-by-step .card-step-1:hover .btn-step-1 {
            position: relative;
            visibility: visible;
            background-color: #bed000;
            padding: 8px 4px;
            border-radius: 40px;
            bottom: -30px;
            margin-top: -36px;
        }

        .box-step-by-step .card-step-1 .btn-step-1::after {
            content: '';
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-02-2023/next.png');
            width: 24px;
            height: 24px;
            position: absolute;
            margin-left: -23px;
            bottom: 4px;
        }

        @media(min-width:768px) {
            .set-wrapper .box-step-by-step {
                gap: 32px;
                grid-template-columns: repeat(5, 1fr);
            }
        }
    </style>

    <!-- Component box title-center -->
    <div class="box-title-center">
        <h3>Oferta formativa</h3>
    </div>
    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .set-wrapper .box-title-center {
            grid-area: box-title-center;
            margin-top: 72px;
            margin-bottom: 32px;
        }

        .box-title-center h3 {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            color: #1C1D3C;
        }
    </style>

    <!-- Sección box slider-cards-hz -->
    <div class="box-slider-cards-hz">

        <template>
            <div class="summary-card">
                <div class="img-card">
                    <img src="https://proyectos.camilogarzon.digital/wp-content/uploads/2023/02/pexels-cottonbro-studio-8465067.jpg" alt="...">
                    <span class="tag">Charla</span>
                </div>
                <div class="text-summary">
                    <h4>¿QUÉ ES ORVI?: RUTA DE ATENCIÓN</h4>
                    <p>Te orientamos e informamos sobre los procesos necesarios para solicitar los servicios de ORVI.</p>
                </div>
                <div class="link-summary">
                    <a href="" target="_blank" rel="noopener noreferrer">Regístrate aquí</a>
                </div>
            </div>
        </template>

        <h3>Charlas y talleres</h3>

        <div class="set-cards-sliders">

        </div>

        <!-- Controls -->
        <a class="left slider-control" role="button" onClick="controlLeft()">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right slider-control" role="button" onClick="controlRight()">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <style>
            .box-slider-cards-hz {
                position: relative;
            }

            .box-slider-cards-hz .slider-control .glyphicon-chevron-right,
            .box-slider-cards-hz .slider-control .glyphicon-chevron-left {
                background: #bed000;
                border-radius: 50%;
                width: 40px;
                height: 40px;
                top: 10px;
                padding: 1px 4px;
                border: #bed000 solid 2px;
                -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.50);
                box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.50);
            }

            .box-slider-cards-hz .slider-control:hover .glyphicon-chevron-right,
            .box-slider-cards-hz .slider-control:hover .glyphicon-chevron-left {
                background: #fff;

            }



            .box-slider-cards-hz .left {
                position: absolute;
                font-size: 30px;
                color: #fff;
                top: calc(50% - 15px);
                left: 20px;
                text-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.50);
                ;



            }

            .box-slider-cards-hz .right {
                position: absolute;
                font-size: 30px;
                color: #fff;
                top: calc(50% - 15px);
                right: 20px;
                text-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.50);
                ;


            }

            .box-slider-cards-hz>a .glyphicon-chevron-right:hover,
            .box-slider-cards-hz>a .glyphicon-chevron-left:hover {

                color: #1C1D3C !important;
            }
        </style>
    </div>
    <script>
        const cards_sliders = [{
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2023/recurso_orvi_007.png",
                "alt": "Persona recibe información por parte de funcionario de la SDM",
                "title": "¿Qué es ORVI?",
                "summary": "Orientamos e informamos sobre los servicios gratuitos ofrecidos.",
                "type": "Charla",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",

            },
            {
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2023/recurso_orvi_012.png",
                "alt": "Personas reciben charla en grupo",
                "title": "Educación para la seguridad vial",
                "summary": "Ofrecemos conceptos básicos sobre los factores de riesgo que pueden ocasionar un siniestro vial.",
                "type": "Charla",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-05-2024/convivencia_vial.png",
                "alt": "Grupo de personas reciben orientación",
                "title": "Convivencia vial",
                "summary": "Abordamos aspectos generales de movilidad agresiva, su vinculación con las dinámicas del tránsito, los medios de transporte y actores viales.",
                "type": "Charla",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2023/recurso_orvi_005.png",
                "alt": "Conductores de SITP reciben capacitación",
                "title": "Cultura vial para una movilidad segura",
                "summary": "Reflexionamos sobre las acciones armoniosas, respetuosas y empáticas en la vía.",
                "type": "Charla",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "title": "Sesgos en la conducción",
                "summary": "Estudiamos sesgos cognitivos en la conducción.",
                "type": "Charla",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2023/recurso_orvi_003.png",
                "alt": "Funcionario de la SDM brinda información a ciclista urbano",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "title": "Emociones y conducción",
                "summary": "Reflexionamos sobre las emociones y cómo gestionarlas para evitar riesgos en la vía.",
                "type": "Charla",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-05-2024/emociones.png",
                "alt": "Persona conduciendo vehículo",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "title": "Tecnologías y comunicaciones en la seguridad vial",
                "summary": "Exploramos las herramientas tecnológicas al conducir y su aporte en la prevención de siniestros viales.",
                "type": "Charla",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2023/recurso_orvi_002.png",
                "alt": "Ciclista urbano recibe información por parte de funcionario de la SDM",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "title": "Seguridad vial para niños, niñas y adolescentes",
                "summary": "Ofrecemos herramientas teóricas y metodológicas en contextos escolares o familiares.",
                "type": "Charla",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2023/recurso_orvi_008.png",
                "alt": "Grupo dialogando en aula",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "title": "Acciones penales y civiles tras un siniestro vial",
                "summary": "Analizamos los procedimientos legales que se pueden emprender.",
                "type": "Charla",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-04-2023/recurso_orvi_021.png",
                "alt": "Personas conversando en una sala.",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "title": "Responsabilidad civil extracontractual",
                "summary": "Analizamos los procedimientos y criterios en indemnizaciones por los daños causados.",
                "type": "Charla",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-05-2024/resposabilidad_civil.png",
                "alt": "Mujer conduciendo vehículo",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "title": "SOAT",
                "summary": "Descubrimos su alcance, cobertura, características y riesgos.",
                "type": "Charla",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-05-2024/soat.png",
                "alt": "Mujer junto a vehículo con evidente frustración",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "title": "Atención a víctimas de siniestros viales",
                "summary": "Informamos las acciones emprendidas en la atención a víctimas viales.",
                "type": "Charla",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2023/recurso_orvi_009.png",
                "alt": "Grupo de conductores del SITP reciben charla de funcionario de la SDM",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "title": "Políticas empresariales de atención a víctimas",
                "summary": "Establecemos pautas, acciones y estrategias sobre los niveles de atención a las víctimas en las políticas de seguridad vial.",
                "type": "Charla",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2023/recurso_orvi_004.png",
                "alt": "Grupo de personas reciben charla de funcionario de la SDM",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "title": "Primer respondiente",
                "summary": "Estudiamos las acciones de primeros auxilios para atender un evento vial con lesionados.",
                "type": "Taller",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2023/recurso_orvi_018.png",
                "alt": "Grupo de personas reciben charla de funcionario de la SDM",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "title": "Primeros auxilios psicológicos",
                "summary": "Establecemos pautas para la disminución del impacto emocional y social luego de un siniestro vial.",
                "type": "Taller",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-05-2024/auxilios.png",
                "alt": "Mujer charlando con otra persona",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "title": "Esterotipos de género en la movilidad",
                "summary": "Analizamos las experiencias de movilidad y reconocemos las necesidades en el espacio público.",
                "type": "Taller",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2023/recurso_orvi_019.png",
                "alt": "Mujer al volante de autobús",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "title": "Factores de riesgo en la siniestralidad vial",
                "summary": "Identificamos los factores de riesgo relacionados con los roles viales.",
                "type": "Taller",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2023/recurso_orvi_001.png",
                "alt": "Ciclista urbano recibe información de fincionario de la SDM",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },
            {
                "title": "¿Cómo comunicar la mala noticia?",
                "summary": "Ofrecemos herramientas para comunicar un hecho negativo.",
                "type": "Taller",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-05-2024/comunicar.png",
                "alt": "Mujer usa sus manos para cubrir su frente",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },

            {
                "title": "¿Cómo proceder ante un siniestro vial simple?",
                "summary": "Revisamos los aspectos que podrían incidir en la reclamación de un siniestro vial con daños materiales.",
                "type": "Taller",
                "img": "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2023/recurso_orvi_006.png",
                "alt": "Funcionario de la SDM brinda taller a conductores del SITP",
                "url": "https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform",
            },

        ];

        document.addEventListener("DOMContentLoaded", function(event) {
            enlist();


        });

        function enlist() {

            const template = document.querySelector("template");
            const box = document.querySelector(".set-cards-sliders");





            for (let index = 0; index < cards_sliders.length; index++) {

                let title = cards_sliders[index].title;
                let alt = cards_sliders[index].alt;
                let img = cards_sliders[index].img;
                let summary = cards_sliders[index].summary;
                let type = cards_sliders[index].type;
                let url = cards_sliders[index].url;

                const textData = template.content.cloneNode(true);

                textData.querySelector("img").src = cards_sliders[index].img;
                textData.querySelector("img").alt = cards_sliders[index].alt;
                textData.querySelector("h4").textContent = cards_sliders[index].title;
                textData.querySelector(".tag").textContent = cards_sliders[index].type;
                textData.querySelector("p").textContent = cards_sliders[index].summary;
                textData.querySelector("a").href = cards_sliders[index].url;
                box.appendChild(textData);


            }

            // cards_sliders.forEach((element, index) => console.log(`El titulo es ${cards_sliders[index].title} y su index ${index}`));

        }

        function controlLeft() {
            document.querySelector(".set-cards-sliders").scrollLeft -= 272;
        }

        function controlRight() {
            document.querySelector(".set-cards-sliders").scrollLeft += 272;
        }
    </script>
    <style>
        .set-wrapper .box-slider-cards-hz {
            grid-area: box-slider-cards-hz;
            background-color: #1C1D3C;
            position: relative;
            margin-bottom: 40px;
            border-radius: 8px;
        }

        .box-slider-cards-hz .set-cards-sliders {

            display: grid;
            gap: 32px;
            grid-auto-flow: column;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            padding: 16px 16px 40px 16px;
            overflow-x: hidden;
            scroll-behavior: smooth;
            border-radius: 8px;

        }


        .set-wrapper .box-slider-cards-hz>h3 {
            padding: 32px 32px 0 32px;
            font-size: 24px;
            font-weight: 700;
            text-align: left;
            line-height: 1.3;
            color: #fff;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            overflow: hidden;

        }



        .set-cards-sliders .summary-card {
            background-color: #f5f5f5;
            border-radius: 8px;
            max-width: 240px;
            -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.50);
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.50);
            /* height: px; */
            display: flex;
            flex-direction: column;
            /* justify-content: space-around; */
            align-items: center;

        }

        .set-cards-sliders .summary-card img {
            padding: 1em 1em 4px 1em;
            max-width: 232px;
        }

        .set-cards-sliders .summary-card .img-card {
            position: relative;
        }

        .set-cards-sliders .summary-card .img-card .tag {
            background-color: #bed000;
            border-radius: 25px;
            position: absolute;
            padding: 4px 16px;
            font-size: 16px;
            font-weight: 700;
            text-align: left;
            line-height: 1.5;
            color: #fff;
            left: 8px;
            top: 8px;
            -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.50);
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.50);
            text-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.50);
            ;

        }

        .set-cards-sliders .text-summary {
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            line-height: 1.3;
            color: #252525;
            margin: 0 12px 0 12px;
        }

        .set-cards-sliders .text-summary h4 {
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            line-height: 1.3;
            color: #252525;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            line-clamp: 3;
            overflow: hidden;
        }

        .set-cards-sliders .text-summary p {
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            line-height: 1.3;
            color: #252525;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 8;
            line-clamp: 8;
            overflow: hidden;
        }

        .set-cards-sliders .link-summary {
            padding: 0px 16px 16px 16px;
            text-align: center;
        }

        .set-cards-sliders .link-summary::before {
            content: '';
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-02-2023/enlace_icon.png');
            background-size: cover;
            width: 16px;
            height: 16px;
            display: inline-block;

        }

        .set-cards-sliders .link-summary a {
            margin: 0px;
        }


        @media(min-width:768px) {
            .set-wrapper .set-cards-sliders {
                grid-template-columns: 1fr 1fr 1fr;
            }

            .box-slider-cards-hz .set-cards-sliders {
                border-left: solid #1C1D3C 60px;
                border-right: solid #1C1D3C 60px;
            }
        }
    </style>

    <!-- Sección box footer -->
    <div class="box-footer">
        <div class="imagen img-logo-sdm">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/logo-footer.png" alt="Logo Secretaria Distrital de Movilidad" title="Logo Secretaria Distrital de Movilidad">
        </div>
        <div class="contacto">
            <h3>Contacto</h3>
            <div class="list">
                <dl>
                    <dt>
                        Dirección:
                    </dt>
                    <dd>
                        Centro Comercial Mallplaza NQS - <strong>Av Cra 30 # 19 Piso 4</strong>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        Celular y WhatsApp de orientación:
                    </dt>
                    <dd>
                        <a href="tel:+3058703478">305 870 3478</a>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        Correo electrónico 1:
                    </dt>
                    <dd>
                        <a href="mailto:orvi@movilidadbogota.gov.co">orvi@movilidadbogota.gov.co</a>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        Correo electrónico 2:
                    </dt>
                    <dd>
                        <a href="mailto:formacionorvi@movilidadbogota.gov.co">formacionorvi@movilidadbogota.gov.co</a>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <style>
        .set-wrapper .box-footer {
            grid-area: box-footer;
            background: #bed000;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            border-radius: 8px;
            color: #252525;
            margin-bottom: 30px;

        }

        .set-wrapper .box-footer a {
            font-weight: 700;
            color: #252525;
            font-weight: 500;
            text-align: left;
            line-height: 1.5;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            overflow: hidden;
            word-wrap: break-word;
        }

        .box-footer .img-logo-sdm {
            padding: 3em;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }


        .box-footer .contacto .list {
            padding: 1em;
        }

        .box-footer .contacto h3 {
            font-size: 24px;
            font-weight: 700;
            text-align: center;
            line-height: 1.3;
            color: #1a1a1a;
            padding-bottom: 8px;
            border-bottom: solid 2px #1a1a1a;

        }

        .box-footer .contacto dl {
            margin-bottom: 14px;
        }

        .box-footer .contacto dd {
            margin-left: 8px;
        }

        .box-footer .contacto dt {
            font-size: 18px;
            font-weight: 700;
            text-align: left;
            line-height: 1.3;
            color: #1a1a1a;

        }

        @media(min-width:768px) {
            .set-wrapper .box-footer {
                grid-template-columns: 1fr 1fr;
                padding: 1em;

            }

        }
    </style>
</div>

<style>
    .set-wrapper {
        max-width: 1200px;
        margin: auto;
    }
</style>
<!-- Fin Set -->
