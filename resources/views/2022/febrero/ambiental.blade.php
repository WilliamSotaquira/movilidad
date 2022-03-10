@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Sogar -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Sogar -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>

    <div class="encabezado">
        <div class='row'>
            <div class='col-xs-12 col-sm-6 col-md-6'>
                <span class="imagen-descripcion"> Área verde de Faldas del Cerro de Guadalupe con avenida circunvalar, Bogotá. FOTO: César David Martínez. </span>
            </div>
            <div class='col-xs-12 col-sm-6 col-md-6'>
                <div class="box-encabezado">
                    <div class="logo">
                        <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/logo_sga_a.png' alt='Logo Sistema de Gestión Ambiental' title='Logo Sistema de Gestión Ambiental'>
                    </div>
                    <div class="titulo">
                    </div>
                    <div class="parrafo">
                        <p>Es una herramienta o metodología que desarrolla una estructura organizativa, responsabilidades, practicas, procedimientos, procesos y recursos para determinar y alcanzar la política del SGA.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='s1'>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <div class="box-parrafos">
                    <div class="titulo">
                        <h3>Política del SGA</h3>
                    </div>
                    <div class="parrafo">
                        <p>La Secretaría Distrital de Movilidad está comprometida con la mejora continua de las condiciones ambientales de Bogotá, por ello, lidera y ejecuta directrices para la prevención y mitigación de los impactos ambientales negativos, mediante programas y estrategias de fomento a la movilidad sostenible, de acuerdo con la legislación ambiental vigente.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class='row box-compromisos'>
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <div class="titulo">
                    <h4>Compromisos de la Política</h4>
                </div>
            </div>

            <div class='col-xs-12 col-sm-3 col-md-3'>
                <div class="compromisos">
                    <span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>
                    <p>Cumplir con los requerimientos legales Ambientales y otros aplicables a las actividades de la Secretaria Distrital de Movilidad que permitan dar cumplimiento a la misión institucional.</p>
                </div>
            </div>
            <div class='col-xs-12 col-sm-3 col-md-3'>
                <div class="compromisos">
                    <span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>
                    <p>Establecer estrategias enfocadas a tomar medidas educativas, de inversión que sean sostenibles, con el fin de garantizar el uso eficiente de los recursos naturales, la protección ambiental y la prevención de la contaminación.</p>
                </div>
            </div>
            <div class='col-xs-12 col-sm-3 col-md-3'>
                <div class="compromisos">
                    <span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>
                    <p>Hacer seguimientos permanentes al desempeño del Sistema de Gestión Ambiental para su mejora continua.</p>
                </div>
            </div>
            <div class='col-xs-12 col-sm-3 col-md-3'>
                <div class="compromisos">
                    <span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>
                    <p>Implementar mecanismos al interior de la entidad que permitan fortalecer la responsabilidad de los colaboradores y partes interesadas en el consumo responsable y las buenas prácticas ambientales establecidas en los diferentes programas.</p>
                </div>
            </div>
        </div>
        <div class="hoja">
            <div class="img-hoja">
                <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/hoja1_0.webp' alt='Imagen de hoja de arbol' title='Imagen de hoja de arbol'>
            </div>
        </div>
    </div>
    <style>
        .s1 .box-compromisos {
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 0.6) 50%, rgba(255, 255, 255, 0.8) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/texturas-naturales.webp');
            background-size: cover;
            margin: 0px;
            padding: 10px;
            color: #151515;
        }

        .s1 .titulo h4 {
            margin: 0px;
            text-align: center;
            padding: 30px;
        }

        .s1 .hoja {
            height: 60px;
            display: flex;
            justify-content: center;
        }

        .s1 .hoja .img-hoja {
            right: calc(50% - 75px);
            /* position: absolute; */
            width: 180px;
            margin-top: -50px;
            padding: 5px;

        }

        .s1 .compromisos {
            display: flex;
        }

        .s1 .glyphicon {
            padding: 3px 5px;

        }
    </style>
    <div class="s2">
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <div class="box-parrafos">
                    <div class="titulo">
                        <h3>Objetivos Ambientales</h3>
                    </div>
                    <div class="parrafo">
                        <p>Identificar y controlar los aspectos e impactos ambientales que se derivan de las actividades institucionales, así como la ejecución de políticas y lineamientos que permitan el cumplimiento de los objetivos definidos que impacten positivamente a los funcionarios de la entidad, ciudadanía y partes interesadas.</p>
                    </div>
                    <div>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-6 col-md-6'>
                                <div class="img2">

                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-6 col-md-6'>
                                <p><strong>Objetivos Específicos</strong></p>
                                <ul>
                                    <li>Definir un plan de acción que dé cumplimiento a las diferentes políticas, lineamientos y estrategias institucionales en materia ambiental.</li>
                                    <li>Ejecutar las diferentes actividades de los programas de Gestión Ambiental, definidas en el plan de acción acorde a la normatividad vigente.</li>
                                    <li>Realizar seguimientos al cumplimiento de las diferentes actividades del plan de acción a través del equipo técnico de Gestión Ambiental, informes de seguimiento a la Secretaría Distrital de Ambiente, auditorías internas y externas y mecanismo de autocontrol.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <style>
        .s2 .box-parrafos .img2 {
            background: #151515;
            background: linear-gradient(45deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-02-2022/bogota-4463698_1280.webp');
            height: 300px;
            background-size: cover;
            background-position: center;
            padding: 15px;
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);

        }
    </style>

    <div class="s3">
        <div class="box-parrafos">
            <div class='row'>
                <div class='col-xs-12 col-sm-8 col-sm-offset-4 col-md-8'>
                    <div class="titulo">
                        <h3>Alcance</h3>
                    </div>
                    <div class="parrafo">
                        <p>La determinación del alcance para la implementación del Sistema de Gestión Ambiental bajo la norma ISO 14001 versión 2015, surge a partir del diagnóstico ambiental realizado en todas sus sedes, la valoración de sus condiciones físicas y ambientales y del control que la entidad puede ejercer sobre las mismas. En tal sentido, se establece el alcance para la Sede Administrativa Calle 13, Sede Paloquemao, Almacén y Bodega Villa Alsacia</p>
                    </div>
                    <div class="img3" alt="Imagen diagrama ciclo de PHVA" title="Imagen diagrama ciclo de PHVA">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .s3 {
            z-index: 100;
        }

        .s3 .box-parrafos .img3 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-02-2022/ciclo_phva.webp');
            background-size: contain;
            background-repeat: no-repeat;
            height: 300px;
            background-position: center;

        }
    </style>
    <div class="s4 ">
        <div class="box-parrafos img4">
            <div class='row'>
                <div class='col-xs-12 col-sm-6 col-md-6'>
                    <div class="parrafo-izq">
                        <div class="titulo">
                            <h3>Beneficios</h3>
                        </div>
                        <div class="parrafos">
                            <ul>
                                <li>Facilita el cumplimiento de la legislación vigente y la política ambiental de la organización.</li>
                                <li>Se anticipa a los problemas ambientales que nos podamos encontrar, previniendo que aparezcan estos.</li>
                                <li>Ayuda a la organización a disminuir la contaminación emitida por esta.</li>
                                <li>Realizar registros que avalen el comportamiento ambiental de la organización.</li>
                                <li>Aumenta la confianza de las partes interesadas, como pueden ser, accionistas, inversores, trabajadores, proveedores, etc.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='col-xs-12 col-sm-6 col-md-6'>
                </div>
            </div>
        </div>
    </div>
    <style>
        .s4 {
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        }

        .s4 .img4 {
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/mejora-ambiental.webp');
            background-size: cover;
            background-repeat: no-repeat;
            /* height: 300; */
            background-position: center;
        }

        .s4 .parrafo-izq {
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 1) 100%);
            padding: 10px;
        }

        .s4 .box-parrafos {
            color: #fff;
        }
    </style>
    <div class="s5">
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12 '>

                <div class="box-parrafos">
                    <div class="titulo">
                        <h3>Resolución Número 107311 de 2021</h3>
                    </div>
                    <div class="parrafo">
                        <p>“Por medio de la cual se asignan los Roles y Responsabilidades del Sistema de Gestión Ambiental a todos los niveles de la Secretaría Distrital de Movilidad y se dictan otras disposiciones”</p>
                    </div>
                </div>
            </div>
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <div class="box-btn">
                    <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-02-2022/resolucion_107311_de_2021.pdf" target="_blank" rel="noopener noreferrer">
                        <div class="btn">
                            <p>Descargar Versión PDF</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="hoja2">
        <div class="img-hoja2">
            <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/hoja2.webp' alt='Imagen de hoja de arbol' title='Imagen de hoja de arbol'>
        </div>
    </div>
    <style>
        .img-hoja2 {
            position: relative;
        }

        .img-hoja2 img {
            width: 250px;
            position: absolute;
            top: -290px;
            left: 725px;
        }
    </style>
    <style>
        .s5 .box-btn {
            /* height: 250px; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .s5 .box-btn a {
            color: #151515;
            text-decoration: none;
        }

        .s5 .btn {
            background-color: #a8ce05;
            padding: 10px 20px;
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            transition: 0.5s ease;
        }

        .s5 .btn p {
            margin: 0;
            color: #151515;
            font-weight: 700;
        }

        .s5 .btn:hover {
            background-color: #929292;

        }

        .s5 .btn:hover p,
        .s5 .btn:hover a {
            color: #000;

        }
    </style>
    <div class="arbol2">
        <div class="img-arbol2">
            <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/arbol2.webp' alt='recorte de una hoja' title='recorte de una hoja'>
        </div>
    </div>
    <style>
        .arbol2 .img-arbol2 {
            position: relative;
        }

        .arbol2 .img-arbol2 img {
            position: absolute;
            width: 500px;
            right: 560px;
            bottom: 640px;
            z-index: -1;
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
        position: relative;
        font-size: 13px !important;
        line-height: 1.4 !important;
        max-width: 940px;
        font-family: 'Sora', sans-serif;
        z-index: 100;
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
</style>
<style>
    .encabezado {
        position: relative;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 1) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-03-2022/guadalupe_sga_0.webp');
    }

    .encabezado .imagen-descripcion {
        position: absolute;
        padding: 10px;
        background: #0009;
        color: #fff;
        top: 387px;
        font-size: 11px;
    }

    .encabezado .box-encabezado {
        padding: 5%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    .encabezado .box-encabezado .logo img {
        height: 200px;
        width: auto;
        margin: 20px;

    }

    .encabezado .box-encabezado .parrafo p {
        font-family: 'Sora', sans-serif;
        font-size: 16px;
        font-weight: 500;
        text-align: center;
        border-top: solid 2px #929292;
        border-bottom: solid 2px #929292;
        padding: 10px;
        line-height: 1.5;
        color: #fff;
        text-shadow: 1px 1px 1px #929292;

    }

    .seccion .box-parrafos {
        padding: 5% 10% 2% 10%;
    }

    .seccion .box-parrafos .titulo {
        padding: 15px;

    }

    .seccion .box-parrafos .titulo h3 {
        text-align: center;
        margin: 0px;
        padding: 10px;
        border-bottom: solid 2px #a8ce05;
    }

    .seccion .box-parrafos .parrafo {
        padding: 20px;
    }

    .seccion .box-parrafos .parrafo p {
        text-align: justify;
    }

    @media(max-width:767px) {

        .encabezado .imagen-descripcion {
        position: relative;
        padding: 2px;
        font-size: 11px;
        top: 0px;
    }

        .s2 .box-parrafos .img2 {
            margin-bottom: 25px;
        }

        .img-hoja2 img {
            position: absolute;
            visibility: hidden;

        }

        .seccion .box-parrafos {
            padding: 0%;
        }
        .arbol2 .img-arbol2  {
            position: relative;
            height: 400px;
            width: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .arbol2 .img-arbol2 img {
            position: relative;
            right: 0px;
            bottom: 0px;
        }
    }

    @media(min-width:768px) {


    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->