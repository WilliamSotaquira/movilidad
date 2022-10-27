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
                        <p>Es una herramienta o metodología que desarrolla una estructura organizativa, responsabilidades, practicas, procedimientos, procesos y recursos para determinar y alcanzar la política del Sistema de Gestión Ambiental.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='box-politicas'>
        <div class='video_ambiental'>
            <video controls='' style='width: 100%;'>
                <source src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-10-2022/ambiental_subtitulado.mp4' type='video/mp4'>
        </div>
        <style>
            .video_ambiental {
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin: auto;
                padding: 5% 5% 0%  5%;
            }
        </style>
        <div class="box-parrafos">
            <div class="titulo">
                <h3>Política del Sistema de Gestión Ambiental</h3>
            </div>
            <div class="parrafo">
                <p>La Secretaria Distrital de Movilidad consciente de la responsabilidad en la preservación del ambiente, está comprometida con la mejora continua de las condiciones ambientales de la entidad, por lo tanto, ejecuta estrategias que fomentan la cultura ambiental y fortalecen las buenas prácticas ambientales institucionales de acuerdo con la legislación ambiental vigente.</p>
                <p>En el marco de la presente política ambiental, la Secretaría Distrital de Movilidad se compromete a:</p>
            </div>
        </div>
    </div>

    <div class='s1'>
        <div class='row box-compromisos'>
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <div class="titulo">
                    <h4>Compromisos de la Política</h4>
                </div>
            </div>

            <div class='col-xs-12 col-sm-3 col-md-3'>
                <div class="compromisos">
                    <span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>
                    <p>Cumplir con los requisitos legales ambientales y otros aplicables a la entidad.</p>
                </div>
            </div>
            <div class='col-xs-12 col-sm-3 col-md-3'>
                <div class="compromisos">
                    <span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>
                    <p>Establecer estrategias enfocadas a garantizar el uso racional de los recursos, la protección del medio ambiente, la prevención de la contaminación, y la mitigación de los impactos ambientales negativos derivados de sus actividades, reduciendo de esta forma las afectaciones al medio ambiente.</p>
                </div>
            </div>
            <div class='col-xs-12 col-sm-3 col-md-3'>
                <div class="compromisos">
                    <span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>
                    <p>Realizar seguimientos permanentes al desempeño del SGA, que permitan su implementación, control y mejora continua.</p>
                </div>
            </div>
            <div class='col-xs-12 col-sm-3 col-md-3'>
                <div class="compromisos">
                    <span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>
                    <p>Implementar mecanismos al interior de la entidad que permitan fortalecer en los colaboradores y partes interesadas, el consumo responsable de los recursos naturales.</p>
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

        .s1 .compromisos p {
            font-weight: normal;
            /* text-align: justify; */
            line-height: 1.4;
        }

        .s1 .glyphicon {
            padding: 5px 8px;

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
                        <p>Promover e implementar estrategias y actividades encaminadas a mejorar el desempeño ambiental de la entidad mediante la prevención, control, mitigación y/o compensación de los impactos ambientales generados por las actividades institucionales, en las diferentes sedes de la Secretaría Distrital de Movilidad.</p>
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
                                    <li>Garantizar el uso racional y eficiente de energía en las diferentes sedes de la SDM.</li>
                                    <li>Garantizar el uso racional y eficiente del recurso hídrico en las diferentes sedes de la SDM.</li>
                                    <li>Promover la gestión integral de los residuos generados en la SDM.</li>
                                    <li>Fortalecer la aplicación de criterios ambientales en la adquisición de bienes y servicios contratados por la entidad en el desarrollo de sus actividades.</li>
                                    <li>Promover acciones que contribuyan a la adaptación y mitigación al cambio climático y mejora de la calidad del paisaje de la sede principal de la SDM.</li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12'>
                <div class="box-parrafos">
                    <div class="titulo">
                        <h3>Programas Ambientales</h3>
                    </div>
                </div>
            </div>
            <div class='col-xs-6 col-xs-offset-3'>
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-03-2022/programasambientales.webp' alt='Esquema Programas Ambientales' title='Esquema Programas Ambientales'>
            </div>
        </div>
    </div>
    <style>
        .s2 .box-parrafos .img2 {
            background: #151515;
            background: linear-gradient(45deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%), url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-02-2022/bogota-4463698_1280.webp');
            height: 350px;
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
                        <p>El alcance para la implementación del Sistema de Gestión Ambiental bajo la norma ISO 14001 versión 2015, aplica para las actividades y servicios desarrollados en los procesos de las sedes Calle 13, Paloquemao, Almacén y Bodega Villa Alsacia, dando cumplimiento a los requisitos legales y otros requisitos aplicables, mitigando los impactos ambientales asociados e influyendo en la mejora del desempeño ambiental y cumplimiento misional de la entidad.</p>
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
                <div class='col-xs-12 col-sm-8 col-md-8'>
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
    <div class="box-equipoAmbiental">
        <h4 class="text-center"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-10-2022/equipo_sga.pdf" target="_blank" rel="noopener noreferrer">Haz clic aquí y conoce al equipo del Sistema de Gestión Ambiental </a></h4>
        <p class="text-center">Es el encargado de ejecutar estrategias que fomentan la cultura ambiental en la SDM.</p>
    </div>
    <style>
        .box-equipoAmbiental{
            padding: 5% 5% 0% 5%;
        }
    </style>
    <div class="s5">
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12 '>

                <div class="box-parrafos">
                    <div class="titulo">
                        <h3>Resolución número 107311 de 2021</h3>
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
    <br>
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
            bottom: 648px;
            z-index: 0;
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
        z-index: 0;
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
        z-index: -1;
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

    .seccion li {
        padding-bottom: 8px;
        /* text-align: justify; */
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

        .arbol2 .img-arbol2 {
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

    @media(min-width:768px) {}

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
