@extends('welcome')
@section('title','mujeres')
@section('contenido')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Set mujeres -->
<style>
    .field-item.even .centertil {
        visibility: hidden;
        margin-top: -50px;
    }
</style>

<div class="set-wrapper mujeres">

    <style>
        .mujeres .cpnt-1 {
            border-radius: 16px;
            position: relative;
            padding: 32px;
        }

        .mujeres .cpnt-1 .item img {
            border-radius: 16px;
        }

        .cpnt-1 a {
            display: inline-block;
            position: absolute;
            background-color: #bed000;
            color: #4d541f;
            padding: 12px;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 700;
            top: calc(50% - 25px);
            right: calc(50% - 74px);
        }
    </style>

    <div class="cpnt cpnt-1">
        <div class="item active">
            <picture>
                <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-03-2025/banner_landing1_obgem_mar2025.jpg">
                <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-03-2025/banner_landing2_obgem_mar2025.jpg" class="img-responsive w-100" alt="Concurso mujeres en ruta 2025" title="Image: Concurso mujeres en ruta 2025">
            </picture>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLScWCgzWQAGubD_yGG_sccbaX1sXXyzXRAc0aGum7caJPP-qZw/viewform" target="_blank" rel="noopener noreferrer" class="btn-mujeres">Postúlate aquí</a>
        </div>
    </div>

    <style>
        .mujeres .cpnt-2 {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
            margin-top: 32px;

        }

        .cpnt-2 .video-1 {
            max-width: 450px;
        }

        .cpnt-2 .texto {
            width: 450px;
            padding: 16px;
        }

        .cpnt-2 .texto span {
            color: #bed000;
            font-size: 14px;
            font-weight: 700;
            /* text-transform: uppercase; */
            background-color: #4d541f;
            border-radius: 25pt;
            padding: 6px 12px;
        }

        .cpnt-2 .texto h3 {
            font-size: 24 px;
            font-weight: 700;
            color: #4d541f;
        }

        .cpnt-2 .texto .paragraph {
            font-size: 14px;
            color: #252525;
            line-height: 1.7;
            text-align: justify;

        }
    </style>
    <div class="cpnt cpnt-2">
        <div class="video video-1">
            <video controls style="width: 100%;">
                <source src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-03-2025/mujeres_en_ruta.mp4" type="video/mp4" poster="" preload>
        </div>
        <div class="texto">
            <span>Concurso</span>
            <h3>Mujeres en Ruta</h3>
            <p class="paragraph ph-1">La <b>Secretaría Distrital de Movilidad de Bogotá</b>, en el marco de la iniciativa del Observatorio Latinoamericano de Género y Movilidad <b>(OBGEM)</b>, desea reconocer y visibilizar a las mujeres, empresas y organizaciones que promueven la equidad de género en el sector del transporte y movilidad. </p>
            <p class="paragraph ph-1">A través de esta iniciativa, se busca fomentar la igualdad de género, inspirar a más mujeres a asumir roles de liderazgo y promover buenas prácticas organizacionales con perspectiva de género, contribuyendo así a un entorno más equitativo e inclusivo.</p>
        </div>
    </div>

    <style>
        .mujeres .cpnt-3 {
            margin-top: 64px;
        }

        .cpnt-3 .texto h3 {
            font-size: 26px;
            font-weight: 700;
            color: #4d541f;
            text-align: center;
            padding-bottom: 32px;
        }

        .cpnt-3 .iconos {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: stretch;
            align-content: space-evenly;
        }

        .cpnt-3 .iconos .card-icono {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 200px;
            margin-bottom: 32px;
        }

        .cpnt-3 .iconos .card-icono i {
            margin-bottom: 8px;
        }

        .cpnt-3 .iconos .card-icono .icono-texto {
            font-size: 16px;
            font-weight: 700;
            color: #4d541f;
        }

        .cpnt-3 .iconos .card-icono .fecha {
            font-size: 14px;
            color: #252525;
            line-height: 1.7;
            text-align: center;
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
    <div class="cpnt cpnt-3">
        <div class="texto">
            <h3>Fechas clave</h3>
        </div>
        <div class="iconos">
            <div class="card-icono zoom"><i class="fa fa-pencil-square fa-3x" aria-hidden="true" style="color: #f13d7e;"></i><span class="icono-texto">Inicio de postulaciones</span><span class="fecha"> 26 de Marzo 2025</span></div>
            <div class="card-icono zoom"><i class="fa fa-window-close fa-3x" aria-hidden="true" style="color: #8664a5;"></i><span class="icono-texto">Cierre de postulaciones</span><span class="fecha"> 23 de Mayo 2025 </span></div>
            <div class="card-icono zoom"><i class="fa fa-check-square fa-3x" aria-hidden="true" style="color: #60bcf1;"></i><span class="icono-texto">Evaluación</span><span class="fecha"> 24 de Mayo al 29 de <br>junio de 2025</span></div>
            <div class="card-icono zoom"><i class="fa fa-bullhorn fa-3x" aria-hidden="true" style="color: #8664a5;"></i><span class="icono-texto">Anuncio de los ganadores</span><span class="fecha"> 30 de junio de 2025</span></div>
            <div class="card-icono zoom"><i class="fa fa-certificate fa-3x" aria-hidden="true" style="color: #f13d7e;"></i><span class="icono-texto"> Entrega de reconocimientos</span><span class="fecha"> Por definir</span></div>
        </div>
    </div>


    <style>
        .mujeres .cpnt-4 {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: stretch;
            align-content: space-evenly;
            margin-top: 64px;
            background-color: #e7e7e7;
            padding-bottom: 32px;
        }

        .cpnt-4 .title {
            width: 100%;
            text-align: center;
        }

        .cpnt-4 .title-1 {
            font-size: 26px;
            font-weight: 700;
            color: #4d541f;
            padding-top: 32px;
            padding-bottom: 32px;
        }


        .cpnt-4 .colapsable-1 {
            width: 430px;
            background-color: #fff;
            padding: 16px;
            border-radius: 8px;
        }

        .cpnt-4 .colapsable-2 {
            width: 430px;
            background-color: #fff;
            padding: 16px;
            border-radius: 8px;
        }

        .cpnt-4 .texto h3 {
            font-size: 20px;
            font-weight: 700;
            color: #4d541f;
            text-align: center;
            padding-bottom: 32px;
        }

        .cpnt-4 .iconos {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: stretch;
            align-content: space-around;
        }

        .cpnt-4 .iconos .card-icono {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
            width: 190px;
            margin-bottom: 32px;
        }


        .cpnt-4 .iconos .card-icono i {
            margin-bottom: 8px;
            height: 60px;
        }

        .cpnt-4 .iconos .card-icono .icono-texto {
            font-size: 16px;
            font-weight: 700;
            color: #4d541f;
        }

        .cpnt-4 .iconos .card-icono .descripcion {
            font-size: 14px;
            color: #252525;
            line-height: 1.7;
            text-align: center;
        }

        .cpnt-4 .boton {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cpnt-4 .btn-post {
            display: inline-block;
            background-color: #bed000;
            color: #4d541f;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 700;
            margin: auto;
        }
    </style>
    <div class="cpnt cpnt-4">
        <h3 class="title title-1">
            Categorías
        </h3>
        <div class="colapsable-1">
            <div class="texto">
                <h3>Prácticas organizacionales con perspectiva de género</h3>
            </div>
            <div class="iconos">
                <div class="card-icono zoom">
                    <i class="fa fa-building fa-3x" aria-hidden="true" style="color: #bed000;"></i>
                    <span class="icono-texto">Empresas</span>
                    <span class="descripcion">Empresas operadoras del Sistema Integrado de Transporte Público.</span>
                </div>
                <div class="card-icono zoom">
                    <i class="fa fa-sitemap fa-3x" aria-hidden="true" style="color: #bed000;"></i>
                    <span class="icono-texto">Organizaciones</span>
                    <span class="descripcion">Organizaciones de la sociedad civil y academia con enfoque en movilidad.</span>
                </div>
            </div>

            <!-- collapse group perspectiva -->
            <div class='panel-group' id='accordion-perspectiva' role='tablist ' aria-multiselectable='true'>

                <!-- collapse requisitos -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading-requisitos-1'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-perspectiva' href='#collapse-requisitos-1' aria-expanded='false' aria-controls='collapse-requisitos-1'>
                                Requisitos
                            </a>
                        </h4>
                    </div>
                    <div id='collapse-requisitos-1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-requisitos-1' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='body-collapse-requisitos-1'>
                                <p class="paragraph ph-1">Requisitos:</p>
                                <ol>
                                    <li>Presentar un proyecto alineado con los propósitos del concurso.</li>
                                    <li>Demostrar impacto en la igualdad de género en la movilidad.</li>
                                    <li>Empresas y organizaciones deben estar legalmente constituidas y en funcionamiento.</li>
                                    <li>Proyectos deben haber iniciado desde el 1 de marzo de 2022 hasta la fecha de postulación.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- collapse criterios-1 -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading-criterios-1'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-perspectiva' href='#collapse-criterios-1' aria-expanded='false' aria-controls='collapse-criterios-1'>
                                Criterios de postulación
                            </a>
                        </h4>
                    </div>
                    <div id='collapse-criterios-1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-criterios-1' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='body-collapse-criterios-1'>
                                <p class="paragraph ph-1">CRITERIOS DE POSTULACIÓN</p>
                                <ul>
                                    <li>Impacto del proyecto</li>
                                    <li>Coherencia con la problemática</li>
                                    <li>Sostenibilidad y replicabilidad</li>
                                    <li>Evidencias de implementación</li>
                                    <li>Innovación y originalidad</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- collapse documentos-1 -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading-documentos-1'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-perspectiva' href='#collapse-documentos-1' aria-expanded='false' aria-controls='collapse-documentos-1'>
                                Documentos solicitados
                            </a>
                        </h4>
                    </div>
                    <div id='collapse-documentos-1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-documentos-1' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='body-collapse-documentos-1'>
                                <ul>
                                    <li>Documento que acredite la identidad de la organización o empresa postulante.</li>
                                    <li>Carta de autorización del representante legal (para empresas).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="boton">
                <a class="btn-post" href="https://docs.google.com/forms/d/e/1FAIpQLScWCgzWQAGubD_yGG_sccbaX1sXXyzXRAc0aGum7caJPP-qZw/viewform" target="_blank" rel="noopener noreferrer">Postúlate</a>
            </div>
        </div>

        <div class="colapsable-2">
            <div class="texto">
                <h3>Mujeres referentes <br>de la movilidad</h3>
            </div>
            <div class="iconos">
                <div class="card-icono zoom">
                    <i class="fa fa-user-md fa-3x" aria-hidden="true" style="color: #bed000;"></i>
                    <span class="icono-texto">Trabajadoras</span>
                    <span class="descripcion"> Mujeres trabajadoras del sector transporte (empresas, concesionarios, operadores).</span>
                </div>
                <div class="card-icono zoom">
                    <i class="fa fa-users fa-3x" aria-hidden="true" style="color: #bed000;"></i>
                    <span class="icono-texto">Líderes</span>
                    <span class="descripcion"> Mujeres líderes en movilidad y género (organizaciones sociales y academia). </span>
                </div>
            </div>

            <!-- collapse group referente -->
            <div class='panel-group' id='accordion-referente' role='tablist ' aria-multiselectable='true'>

                <!-- collapse requisitos -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading-requisitos-2'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-referente' href='#collapse-requisitos-2' aria-expanded='false' aria-controls='collapse-requisitos-2'>
                                Requisitos
                            </a>
                        </h4>
                    </div>
                    <div id='collapse-requisitos-2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-requisitos-2' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='body-collapse-requisitos-2'>
                                <p class="paragraph ph-1">Requisitos Mujeres trabajadoras:</p>
                                <ol>
                                    <li>La postulación debe ser presentada por la organización en la que trabaja la candidata.</li>
                                    <li>Deben ser mujeres trabajadoras en empresas de transporte.</li>
                                    <li>Su trabajo debe ser un referente en movilidad y equidad de género.</li>
                                </ol>

                                <p class="paragraph ph-1">Requisitos Mujeres líderes en movilidad:</p>
                                <ol>
                                    <li>La postulación puede ser presentada por cualquier persona con la aprobación de la postulada.</li>
                                    <li>Su trabajo y trayectoria debe ser un referente en movilidad y equidad de género.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- collapse criterios-2 -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading-criterios-2'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-referente' href='#collapse-criterios-2' aria-expanded='false' aria-controls='collapse-criterios-2'>
                                Criterios de postulación
                            </a>
                        </h4>
                    </div>
                    <div id='collapse-criterios-2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-criterios-2' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='body-collapse-criterios-2'>
                                <p class="paragraph ph-1">CRITERIOS DE POSTULACIÓN</p>
                                <ul>
                                    <li>Impacto de su trabajo</li>
                                    <li>Liderazgo en equidad de género</li>
                                    <li>Referencias y reconocimientos</li>
                                    <li>Relato inspirador</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- collapse documentos-2 -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading-documentos-2'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion-referente' href='#collapse-documentos-2' aria-expanded='false' aria-controls='collapse-documentos-2'>
                                Documentos solicitados
                            </a>
                        </h4>
                    </div>
                    <div id='collapse-documentos-2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-documentos-2' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='body-collapse-documentos-2'>
                                <ul>
                                    <li>Carta de consentimiento de la mujer postulada (para categorías individuales).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <div class="boton">
                <a class="btn-post" href="https://docs.google.com/forms/d/e/1FAIpQLScWCgzWQAGubD_yGG_sccbaX1sXXyzXRAc0aGum7caJPP-qZw/viewform" target="_blank" rel="noopener noreferrer">Postúlate</a>
            </div>

        </div>
    </div>

    <style>
        .cpnt-5 {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
            align-content: flex-start;
            margin-bottom: 64px;
        }

        .cpnt-5 .title {
            width: 100%;
            text-align: center;
        }

        .cpnt-5 .title-1 {
            font-size: 26px;
            font-weight: 700;
            color: #4d541f;
            padding-top: 32px;
            padding-bottom: 32px;
        }

        .cpnt-5 .text {
            width: 450px;
            padding: 16px;
        }

        .cpnt-5 .text h3 {
            font-size: 20px;
            font-weight: 700;
            color: #4d541f;
            text-align: center;
            padding-bottom: 32px;
        }

        .cpnt-5 .text .paragraph {
            font-size: 14px;
            color: #252525;
            line-height: 1.7;
            text-align: justify;
        }

        .cpnt-5 .imagen {
            padding: 16px;
        }
    </style>
    <div class="cpnt cpnt-5">
        <h3 class="title title-1">
            Resultados, premiación y reconocimiento
        </h3>
        <div class="text">
            <h3>Resultados y premiación</h3>
            <p class="paragraph ph-1">Las organizaciones y personas ganadoras serán informadas a través de correo electrónico, dirigido a las representantes de cada postulación y a las respectivos ganadoras. Se realizará una publicación en la página web de la Secretaría Distrital de Movilidad y en redes sociales.</p>
            <h3>Reconocimiento</h3>
            <p class="paragraph ph-1">Las organizaciones y personas recibirán un reconocimiento y se publicará una nota en la página web y las redes sociales de la Secretaría Distrital de Movilidad, sobre los proyectos premiados, así como sobre la labor de las referentes ganadoras del concurso. También podrán participar en el concurso internacional “Mujeres en Ruta Internacional”, organizado por el OBGEM.</p>
            Consulta aquí el <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-04-2025/bases_mujeres_obgem_mar2025-3.pdf" target="_blank" rel="noopener noreferrer">Reglamento del concurso.</a>
        </div>
        <div class="imagen img-1">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-03-2025/202510696-1m2d-r.png" alt="Convocatoria" title="Convocatoria">
        </div>
    </div>
</div>
<!-- Fin Set -->
