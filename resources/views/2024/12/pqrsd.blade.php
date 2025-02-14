@extends('welcome')
@section('title','pqrsd')
@section('contenido')


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Set pqrsd -->
<style>
    .region .field-items .even h2{
        visibility: hidden;
        margin-top: -50px;
    }

    .pqrsd {
        font-family: 'Montserrat', sans-serif;
        font-weight: normal;
        color: #252525;
        margin: 4px 0;
        margin-bottom: 32px;
    }

    .pqrsd .glyphicon-chevron-right::before {
        color: #fff !important;
    }

    .pqrsd .glyphicon-chevron-left::before {
        color: #fff !important;
    }

    .pqrsd .panel-heading {
        border-color: #4d541f !important;
        background-color: #4d541f !important;
        background-image: none !important;
    }

    .pqrsd .panel-heading .panel-title a {
        text-decoration: none;
        color: #fff !important;
        font-size: 16px;
        font-weight: 600;
    }

    .pqrsd .panel-heading .panel-title a:after {
        font-family: 'Glyphicons Halflings';
        content: "\e080";
        float: right;
        color: #fff;
        font-size: 16px;
    }

    .pqrsd .panel-heading .panel-title a.collapsed:after {
        content: "\e114";
    }

    .pqrsd .btn-pqrsd {
        background-color: #BED000;
        color: #fff;
        border: 1px solid #BED000;
        border-radius: 25pt;
        padding: 8px 16px;
        font-weight: bold;
        text-transform: uppercase;
        text-decoration: none;
    }
</style>
<div class="set-wrapper pqrsd">
    <style>
        .pqrsd .cpnt-1 {
            display: flex;
            margin-bottom: 32px;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;

            @media(min-width:768px) {
                flex-wrap: nowrap;
            }
        }

        .cpnt-1 .title {
            width: 100%;

            @media(min-width:768px) {
                width: 70%;
            }

        }

        .title .title-1 {
            margin: 32px auto;
            text-align: center;
            color: #4d541f;
            font-size: 34px;
            font-weight: bold;
        }

        .title .ph-1 {
            text-align: justify;
            font-size: 16px;
        }

        .cpnt-1 .image {
            width: 100%;
            max-width: 350px;

            @media(min-width:768px) {
                width: 30%;

                & .cpnt-1 .image img {
                    max-width: 130px;
                }
            }
        }
    </style>
    <div class="cpnt cpnt-1">
        <div class="title">
            <h3 class="title title-1">Peticiones, Quejas, Reclamos, Solicitudes y Denuncias (PQRSD)</h3>
            <p class="paragraph ph-1">Les damos la bienvenida al portal de PQRSD de la Secretaría Distrital de Movilidad.</p>
            <p class="paragraph ph-1">A través de este espacio, la ciudadanía podrá radicar de manera respetuosa sus <b>peticiones, quejas reclamos, solicitudes y denuncias,</b> de competencia de la entidad; así como, hacer seguimiento de las mismas.</p>

        </div>
        <div class="image">
            <div class="imagen img-1">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/imagen-inicio.png" alt="Imagen de encabezado" title="Imagen de encabezado">
            </div>
        </div>
    </div>

    <style>
        .pqrsd .cpnt-2 {
            background-color: #f3f6db;
        }

        .cpnt-2 .box-pills-hz {
            padding: auto;

            @media(min-width:768px) {
                padding: 32px;
            }
        }

        .cpnt-2 .box-pills-hz .nav>li>a {
            background-color: #fff;
            color: #4d541f;
            margin: 16px;
            border-radius: 25pt;
            padding: 16px;
            font-weight: bold;

        }

        .cpnt-2 .box-pills-hz .nav>li>a:hover {
            background-color: #BED000;
            color: #252525;
        }

        .cpnt-2 .box-pills-hz .nav>li.active>a {
            background-color: #4d541f;
            color: #fff;
        }

        .cpnt-2 .box-pills-hz .nav>li>a>i {
            margin-right: 8px;
        }

        .cpnt-2 .box-pills-hz .tab-content {
            background-color: #fff;
            margin: 10px;
            padding: 16px;
            border-radius: 25pt;
        }

        .tab-content .title-1 {
            font-weight: bold;
            font-size: clamp(1rem, 3vw + 2rem, 2.5rem);
            margin: 0px;
            padding: 32px;
            color: #4d541f;
            text-align: center;
        }



        .tab-content .fa-stack {
            color: #4d541f !important;
            text-align: center;
        }
    </style>
    <div class="cpnt cpnt-2">

        <div class="box-pills-hz">

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#peticion">
                        <i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>Tipos de petición</a></li>
                <li><a data-toggle="pill" href="#radicacion"><i class="fa fa-envelope-open fa-lg" aria-hidden="true"></i>Radicación</a></li>
                <li><a data-toggle="pill" href="#seguimiento"><i class="fa fa-check-circle fa-lg" aria-hidden="true"></i>Seguimiento</a></li>
                <li><a data-toggle="pill" href="#normativa"><i class="fa fa-list-alt fa-lg" aria-hidden="true"></i>Normativa</a></li>
            </ul>

            <div class="tab-content">
                <div id="peticion" class="tab-pane fade in active">

                    <h3 class="title title-1">
                        Conoce los tipos de petición que puedes radicar
                    </h3>

                    <!-- collapse group peticion -->
                    <div class='panel-group' id='accordion-peticion' role='tablist ' aria-multiselectable='true'>

                        <!-- collapse p1 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-p1'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-peticion' href='#collapse-p1' aria-expanded='false' aria-controls='collapse-p1'>
                                        <i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Derecho de petición de interés general
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-p1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-p1' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-p1'>
                                        <p class="paragraph ph-1">Solicitud que una persona o una comunidad presenta ante las autoridades, para que se preste un servicio o se cumpla una función propia de la entidad, con el fin de resolver necesidades de tipo comunitario.</p>
                                        <p><b>Se resuelve en 15 días hábiles</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse p2 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-p2'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-peticion' href='#collapse-p2' aria-expanded='false' aria-controls='collapse-p2'>
                                        <i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Derecho de petición de interés particular
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-p2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-p2' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-p2'>
                                        <p class="paragraph ph-1">Solicitud que una persona hace ante una autoridad, con el fin que le resuelva determinado interrogante, inquietud o situación jurídica que solo interesa a él, a ella y/o a su entorno.</p>
                                        <p class="paragraph ph-1"><b>Se resuelve en 15 días hábiles</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse p3 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-p3'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-peticion' href='#collapse-p3' aria-expanded='false' aria-controls='collapse-p3'>
                                        <i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Queja
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-p3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-p3' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-p3'>
                                        <p class="paragraph ph-1">Manifestación de protesta, censura, descontento o inconformidad, que formula una persona en relación con una conducta, que considera irregular de una o varios servidores públicos, en el desarrollo de sus funciones.</p>
                                        <p class="paragraph ph-1"><b>Se resuelve en 15 días hábiles</b></p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse p4 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-p4'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-peticion' href='#collapse-p4' aria-expanded='false' aria-controls='collapse-p4'>
                                        <i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Reclamo
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-p4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-p4' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-p4'>
                                        <p class="paragraph ph-1">Manifestación de inconformidad referente a la prestación indebida de un servicio o la falta de atención de una solicitud.</p>
                                        <p class="paragraph ph-1"><b>Se resuelve en 15 días hábiles</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse p5 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-p5'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-peticion' href='#collapse-p5' aria-expanded='false' aria-controls='collapse-p5'>
                                        <i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Sugerencia
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-p5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-p5' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-p5'>
                                        <p class="paragraph ph-1">Manifestación de una idea, opinión, aporte o propuesta para mejorar el servicio o la gestión de la entidad.</p>
                                        <p class="paragraph ph-1"></p><b>Se resuelve en 15 días hábiles</b>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse 6 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-6'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-peticion' href='#collapse-6' aria-expanded='false' aria-controls='collapse-6'>
                                        <i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Denuncia por posibles actos de corrupción
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-6' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-6' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-6'>
                                        <p class="paragraph ph-1">Es la puesta en conocimiento de un presunta conducta irregular por parte de un servidor publico.</p>
                                        <p class="paragraph ph-1"><b>Se resuelve en 15 días hábiles</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse p7 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-p7'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-peticion' href='#collapse-p7' aria-expanded='false' aria-controls='collapse-p7'>
                                        <i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Felicitación
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-p7' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-p7' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-p7'>
                                        <p class="paragraph ph-1">Manifestación de una persona en la que expresa la satisfacción con motivo de algún suceso favorable para él, con relación a la prestación del servicio por parte de una entidad pública.</p>
                                        <p class="paragraph ph-1"><b>Se resuelve en 15 días hábiles</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse p8 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-p8'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-peticion' href='#collapse-p8' aria-expanded='false' aria-controls='collapse-p8'>
                                        <i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Solicitud de acceso a la información
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-p8' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-p8' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-p8'>
                                        <p class="paragraph ph-1">Solicitud para tener acceso a la información sobre las funciones de la entidad y sus distintas dependencias.</p>
                                        <p class="paragraph ph-1"><b>Se resuelve en 10 días hábiles</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse p9 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-p9'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-peticion' href='#collapse-p9' aria-expanded='false' aria-controls='collapse-p9'>
                                        <i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Solicitud de copias
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-p9' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-p9' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-p9'>
                                        <p class="paragraph ph-1">Reproducción y entrega de documentos que no tengan el carácter de reservado al interior.</p>
                                        <p class="paragraph ph-1"><b>Se resuelve en 10 días hábiles</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse p10 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-p10'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-peticion' href='#collapse-p10' aria-expanded='false' aria-controls='collapse-p10'>
                                        <i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> Consulta
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-p10' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-p10' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-p10'>
                                        <p class="paragraph ph-1">Solicitud de orientación a las autoridades en relación con las materias a su cargo, cuya respuesta no tiene efectos jurídicos directos sobre el asunto que trata, por lo tanto, no es de obligatorio cumplimiento.</p>
                                        <p class="paragraph ph-1"><b>Se resuelve en 30 días hábiles</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div id="radicacion" class="tab-pane fade">
                    <h3 class="title title-1">
                        Radica tu petición por cualquiera de nuestros canales
                    </h3>
                    <!-- collapse group radicacion -->
                    <div class='panel-group' id='accordion-radicacion' role='tablist ' aria-multiselectable='true'>

                        <!-- collapse r1 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-r1'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-radicacion' href='#collapse-r1' aria-expanded='false' aria-controls='collapse-r1'>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> Canal presencial
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-r1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-r1' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-r1'>

                                        <dl>
                                            <dt>
                                                <span class="fa-stack">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="fa fa-map-marker fa-stack-1x fa-inverse" aria-hidden="true"></i>
                                                </span>
                                                Centro de Servicios de Movilidad Calle 13
                                            </dt>
                                            <dd>
                                                <span class="fa-stack">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="fa fa-university fa-stack-1x fa-inverse" aria-hidden="true"></i>
                                                </span>
                                                Departamento: Cundinamarca. Ciudad: Bogotá – Colombia. <a href="https://maps.app.goo.gl/J2d3fCj7bnqW698N7" target="_blank" rel="noopener noreferrer">Calle 13 No. 37 – 35</a>
                                            </dd>
                                            <dd>
                                                <span class="fa-stack">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="fa fa-calendar-check-o fa-stack-1x fa-inverse" aria-hidden="true"></i>
                                                </span>
                                                *Radicación Presencial: Lunes a Viernes: 7:00 a.m. a 5:00 p.m. <a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php" target="_blank" rel="noopener noreferrer">Formulario Radicación de correspondencia</a>
                                            </dd>
                                        </dl>

                                        <dl>
                                            <dt>
                                                <span class="fa-stack">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="fa fa-map-marker fa-stack-1x fa-inverse" aria-hidden="true"></i>
                                                </span>
                                                Centro de Servicios de Movilidad Paloquemao
                                            </dt>
                                            <dd>
                                                <span class="fa-stack">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="fa fa-university fa-stack-1x fa-inverse" aria-hidden="true"></i>
                                                </span>
                                                Departamento: Cundinamarca. Ciudad: Bogotá – Colombia. <a href="https://maps.app.goo.gl/QGREmLiRJoTGMMPx6" target="_blank" rel="noopener noreferrer">Cra 28 A N° 17 A 20</a>
                                            </dd>
                                            <dd>
                                                <span class="fa-stack">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="fa fa-calendar-check-o fa-stack-1x fa-inverse" aria-hidden="true"></i>
                                                </span>
                                                *Radicación Presencial: Lunes a Viernes: 7:00 a.m. a 5:00 p.m. <a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php" target="_blank" rel="noopener noreferrer">Formulario Radicación de correspondencia</a>
                                            </dd>
                                        </dl>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse r2 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-r2'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-radicacion' href='#collapse-r2' aria-expanded='false' aria-controls='collapse-r2'>
                                        <i class="fa fa-desktop" aria-hidden="true"></i>&nbsp;Canal virtual
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-r2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-r2' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-r2'>

                                        <style>
                                            .cards>.card {
                                                background: #ecececff;
                                                border-radius: 8pt;
                                                padding: 8px;

                                                display: flex;
                                                flex-wrap: wrap;

                                                justify-content: flex-start;
                                                align-items: start;
                                                align-items: center;
                                                flex-direction: column;

                                                @media(min-width:768px) {
                                                    flex-direction: row;
                                                }



                                            }

                                            .tab-content .panel-body .card:nth-child(2n+1) {
                                                background: #fff;
                                            }

                                            .card .card-image img {}


                                            .card .card-title {
                                                width: 100%;
                                            }

                                            .card .card-title .title-2 {
                                                font-weight: bold;
                                                font-size: clamp(1rem, 3vw + 2rem, 2rem);
                                                margin: 0px;
                                                padding: 8px;
                                                color: #4d541f;
                                            }

                                            .card .card-image {
                                                width: 25%;
                                            }

                                            .card .card-image img {
                                                max-width: 150px;
                                                width: 100%;
                                                margin: auto;
                                                padding: 8px;
                                            }

                                            .card .card-description {
                                                width: 100%;

                                                @media(min-width:768px) {
                                                    width: 50%;
                                                }
                                            }

                                            .card .card-action {
                                                padding: 24px;
                                            }
                                        </style>

                                        <div class="cards">

                                            <div class="card">
                                                <div class="card-title">
                                                    <h4 class="title title-2">Formulario para radicación de correspondencia</h4>
                                                </div>
                                                <div class="card-image">
                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/logo-sdm2.png" alt="Logo" title="">
                                                </div>
                                                <div class="card-description">
                                                    <p class="paragraph ph-1">La Secretaría de Movilidad, pone a disposición de la ciudadanía este formulario web como canal, para radicar PQRSDF.</p>
                                                </div>
                                                <div class="card-action">
                                                    <a class="btn btn-pqrsd" href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php" target="_blank" rel="noopener noreferrer">Ir</a>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-title">
                                                    <h4 class="title title-2">Bogotá te escucha</h4>
                                                </div>
                                                <div class="card-image">
                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/bogota-te-escucha.png" alt="Logo" title="">
                                                </div>
                                                <div class="card-description">
                                                    <p class="paragraph ph-1">Radica tu PQRSDF directamente en la plataforma.</p>
                                                </div>
                                                <div class="card-action">
                                                    <a class="btn btn-pqrsd" href="https://bogota.gov.co/sdqs/crear-peticion" target="_blank" rel="noopener noreferrer">Ir</a>
                                                </div>
                                            </div>

                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse r3 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-r3'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-radicacion' href='#collapse-r3' aria-expanded='false' aria-controls='collapse-r3'>
                                        <i class="fa fa-phone" aria-hidden="true"></i> Canal telefónico
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-r3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-r3' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-r3'>

                                        <div class="cards">
                                            <div class="card">
                                                <div class="card-title">
                                                    <h4 class="title title-2">Linea de atención</h4>
                                                </div>
                                                <div class="card-image">

                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/img_20230831_114714-300x225.jpg" alt="Logo" title="">
                                                </div>
                                                <div class="card-description">
                                                    <a href="tel:+6013649400">Desde fijo o celular: <br>364 9400 opción 2</a></p>
                                                    <p class="paragraph ph-1">Horario de atención: <br> 7:00 a.m. a 5:00 p.m
                                                </div>
                                                <div class="card-action">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="seguimiento" class="tab-pane fade">
                    <h3 class="title title-1">
                        Consulta el estado de tu petición
                    </h3>
                    <!-- collapse group seguimiento -->
                    <div class='panel-group' id='accordion-seguimiento' role='tablist ' aria-multiselectable='true'>

                        <!-- collapse s1 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-s1'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-seguimiento' href='#collapse-s1' aria-expanded='false' aria-controls='collapse-s1'>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Radicado correspondencia SDM
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-s1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-s1' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-s1'>

                                        <div class="cards">
                                            <div class="card">
                                                <div class="card-title">
                                                </div>
                                                <div class="card-image">

                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/orfeo-150x150.png" alt="Logo" title="">
                                                </div>
                                                <div class="card-description">
                                                    <p class="paragraph ph-1">Consulta aquí si radicaste por medio del formulario de correspondencia o a través de la ventanilla de correspondencia presencial.</p>
                                                </div>
                                                <div class="card-action">
                                                    <a class="btn btn-pqrsd" href="https://gestiondocumental.movilidadbogota.gov.co/orfeo-api/" target="_blank" rel="noopener noreferrer">Ir</a>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse s2 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-s2'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-seguimiento' href='#collapse-s2' aria-expanded='false' aria-controls='collapse-s2'>
                                        <i class="fa fa-check-circle" aria-hidden="true"></i> Radicado Bogotá te escucha
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-s2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-s2' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-s2'>

                                        <div class="cards">
                                            <div class="card">
                                                <div class="card-title">
                                                </div>
                                                <div class="card-image">

                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/bogota-te-escucha.png" alt="Logo" title="">
                                                </div>
                                                <div class="card-description">
                                                    <p class="paragraph ph-1">Podrás consultar las peticiones con tu usuario, siguiendo las diferentes opciones. </p>
                                                </div>
                                                <div class="card-action">
                                                    <a class="btn btn-pqrsd" href="https://bogota.gov.co/sdqs/consultar-peticion" target="_blank" rel="noopener noreferrer">Ir</a>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse s3 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-s3'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-seguimiento' href='#collapse-s3' aria-expanded='false' aria-controls='collapse-s3'>
                                        <i class="fa fa-user-secret" aria-hidden="true"></i> Petición anónima
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-s3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-s3' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-s3'>
                                        <div class="cards">
                                            <div class="card">
                                                <div class="card-title">
                                                </div>
                                                <div class="card-image">
                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/logo-sdm2.png" alt="Logo" title="">
                                                </div>
                                                <div class="card-description">
                                                    <p class="paragraph ph-1">Consulta la respuesta si radicaste como peticionario anónimo.</p>
                                                </div>
                                                <div class="card-action">
                                                    <a class="btn btn-pqrsd" href="https://www.movilidadbogota.gov.co/web/derechos-anonimos" target="_blank" rel="noopener noreferrer">Ir</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse s4 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-s4'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-seguimiento' href='#collapse-s4' aria-expanded='false' aria-controls='collapse-s4'>
                                        <i class="fa fa-window-maximize" aria-hidden="true"></i> Notificación por aviso web
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-s4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-s4' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-s4'>
                                        <div class="cards">
                                            <div class="card">
                                                <div class="card-title">
                                                </div>
                                                <div class="card-image">
                                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/logo-sdm2.png" alt="Logo" title="">
                                                </div>
                                                <div class="card-description">
                                                    <p class="paragraph ph-1">Consulta aquí las respuestas a las solicitudes publicadas por aviso web.</p>
                                                </div>
                                                <div class="card-action">
                                                    <a class="btn btn-pqrsd" href="https://www.movilidadbogota.gov.co/web/respuestas-a-oficio-sin-notificar" target="_blank" rel="noopener noreferrer">Ir</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                <div id="normativa" class="tab-pane fade">
                    <h3 class="title title-1">

                    </h3>

                    <!-- collapse group normativa -->
                    <div class='panel-group' id='accordion-normativa' role='tablist ' aria-multiselectable='true'>

                        <!-- collapse n1 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-n1'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-normativa' href='#collapse-n1' aria-expanded='false' aria-controls='collapse-n1'>
                                        <i class="fa fa-list" aria-hidden="true"></i> Leyes
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-n1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-n1' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-n1'>
                                        <ul>
                                            <li><a href="http://www.secretariasenado.gov.co/senado/basedoc/ley_1755_2015.html#:~:text=Leyes%20desde%201992%20%2D%20Vigencia%20expresa%20y%20control%20de%20constitucionalidad%20%5BLEY_1755_2015%5D&text=Por%20medio%20de%20la%20cual,y%20de%20lo%20Contencioso%20Administrativo.">Ley 1755 de 2015</a><br><i>"Por medio de la cual se regula el Derecho Fundamental de Petición y se sustituye un título del Código de Procedimiento Administrativo y de lo Contencioso Administrativo"</i></li>
                                            <li><a href="http://www.secretariasenado.gov.co/senado/basedoc/ley_1437_2011.html">Ley 1437 DE 2011</a><br><i>"Por la cual se expide el Código de Procedimiento Administrativo y de lo Contencioso Administrativo"</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse n2 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-n2'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-normativa' href='#collapse-n2' aria-expanded='false' aria-controls='collapse-n2'>
                                        <i class="fa fa-list" aria-hidden="true"></i> Decretos
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-n2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-n2' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-n2'>
                                        <ul>
                                            <li><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?dt=S&i=40685">Decreto Distrital 371 de 2010</a><br><i>"Por el cual se establecen lineamientos para preservar y fortalecer la transparencia y para la prevención de la corrupción en las Entidades y Organismos del Distrito Capital"</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse n3 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-n3'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-normativa' href='#collapse-n3' aria-expanded='false' aria-controls='collapse-n3'>
                                        <i class="fa fa-list" aria-hidden="true"></i> Directivas
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-n3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-n3' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-n3'>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse n4 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-n4'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-normativa' href='#collapse-n4' aria-expanded='false' aria-controls='collapse-n4'>
                                        <i class="fa fa-list" aria-hidden="true"></i> Circulares
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-n4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-n4' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-n4'></div>
                                </div>
                            </div>
                        </div>

                        <!-- collapse n5 -->
                        <div class='panel panel-primary'>
                            <div class='panel-heading' role='tab' id='heading-n5'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordion-normativa' href='#collapse-n5' aria-expanded='false' aria-controls='collapse-n5'>
                                        <i class="fa fa-list" aria-hidden="true"></i> Reglamentos y Protocolos
                                    </a>
                                </h4>
                            </div>
                            <div id='collapse-n5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-n5' aria-expanded='false'>
                                <div class='panel-body'>
                                    <div class='body-collapse-n5'>
                                        <ul>
                                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/04-12-2023/pm04-rg01_reglamento_interno_para_la_gestion_de_pqrsd_v.3.0_24-11-2023_2.pdf">Reglamento Interno de Gestión PQRSD</a><br><i>REGLAMENTO INTERNO PARA LA GESTIÓN DE PETICIONES,
                                                    QUEJAS, RECLAMOS, SUGERENCIAS Y DENUNCIAS</i></li>
                                            <li><a href="">Protocolo de Denuncias por Actos de Corrupción</a><br><i></i></li>
                                        </ul>
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
        .pqrsd .cpnt-3 {
            padding: 16px;
            background-color: #4d541f;
            display: flex;
            flex-direction: column;

            @media(min-width:768px) {
                flex-direction: row;
            }
        }

        .cpnt-3 .imagen {
            width: 100%;
            max-width: 300px;
            margin: auto;
            padding: 16px;

            @media(min-width:768px) {
                width: 30%;
            }
        }



        .cpnt-3 .lista {
            padding: 16px;
            width: 100%;

            @media(min-width:768px) {
                width: 70%;
            }
        }

        .cpnt-3 .lista h4 {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }


        .cpnt-3 .item-conoce {
            display: block;
            border-bottom: 7px double #BED000;
        }

        .cpnt-3 .item-conoce-content {
            display: flex;
            flex-wrap: nowrap;
            margin: 8px 0;
            padding: 8px;
            border-radius: 8px;
        }

        .cpnt-3 .item-conoce-title {
            width: 75%;
            color: #fff;
            font-size: 18px;
        }
    </style>
    <div class="cpnt cpnt-3">
        <div class="imagen img-1">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/imagen-final.png" alt="" title="">
        </div>
        <div class="lista">
            <h4 class="title title-1">Conoce</h4>
            <div class="items-conoce">
                <div class="item-conoce">
                    <div class="item-conoce-content">
                        <div class="item-conoce-title">Informes de PQRSD</div>
                        <div class="item-conoce-link"><a class="btn-pqrsd" href="https://www.movilidadbogota.gov.co/web/informacion_pqrs" target="_blank" rel="noopener noreferrer">Ir</a></div>
                    </div>
                </div>
                <div class="item-conoce">
                    <div class="item-conoce-content">
                        <div class="item-conoce-title">Carta de Compromiso a la Ciudadanía</div>
                        <div class="item-conoce-link"><a class="btn-pqrsd" href="https://www.movilidadbogota.gov.co/web/carta_de_compromiso_a_la_ciudadania" target="_blank" rel="noopener noreferrer">Ir</a></div>
                    </div>
                </div>
                <div class="item-conoce">
                    <div class="item-conoce-content">
                        <div class="item-conoce-title">Preguntas Frecuentes</div>
                        <div class="item-conoce-link"><a class="btn-pqrsd" href="https://www.movilidadbogota.gov.co/web/preguntas_frecuentes" target="_blank" rel="noopener noreferrer">Ir</a></div>
                    </div>
                </div>
                <div class="item-conoce">
                    <div class="item-conoce-content">
                        <div class="item-conoce-title">Defensora de la ciudadanía</div>
                        <div class="item-conoce-link"><a class="btn-pqrsd" href="https://www.movilidadbogota.gov.co/web/defensorciudadano" target="_blank" rel="noopener noreferrer">Ir</a></div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>
<!-- Fin Set -->

