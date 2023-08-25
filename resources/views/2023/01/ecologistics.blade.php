@extends('welcome')
@section('title','ecologistics')

@section('contenido')

<!-- Set ecologistics -->
<div class="set-wrapper ecologistics">

    <!-- Component title-center -->
    <div class="box-title-center">
        <div class="logo logo-ppal">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2023/sxcv-imagen_230621_wi.png" alt="logo EcoLogistics ">
        </div>
    </div>
    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .set-wrapper .box-title-center {
            grid-area: box-title-center;
            border-bottom: solid 2px #404040;
            padding-bottom: 16px;
            margin-bottom: 24px;
        }

        .box-title-center img {
            width: 400px;
            margin: auto;
            padding: 1.5em 2em;
        }
    </style>

    <!-- Component Box Carousel ppal-->
    <div class="box-carousel box-carousel-ppal">

        <div id="carousel-ppal" class="carousel slide" data-ride="carousel-ppal">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-ppal" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-ppal" data-slide-to="1"></li>
                <li data-target="#carousel-ppal" data-slide-to="2"></li>
                <li data-target="#carousel-ppal" data-slide-to="3"></li>
                <li data-target="#carousel-ppal" data-slide-to="4"></li>
                <li data-target="#carousel-ppal" data-slide-to="5"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <figure>
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-08-2023/ecologistics_img_001_992x500.jpg" alt="imagen vehículo de carga">
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-08-2023/ecologistics_img_002_992x500.jpg" alt="imagen vehículo de carga">
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-08-2023/ecologistics_img_003_992x500.jpg" alt="imagen vehículo de carga">
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-08-2023/ecologistics_img_004_992x500.png" alt="imagen vehículo de carga">
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-08-2023/ecologistics_img_008_992x500.png" alt="imagen vehículo de carga">
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-08-2023/ecologistics_img_009_992x500.png" alt="imagen vehículo de carga">
                    </figure>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-ppal" role="button" data-slide="prev" title="Anterior">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-ppal" role="button" data-slide="next" title="Siguiente">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <style>
        .set-wrapper .box-carousel-ppal {
            grid-area: box-carousel-ppal;
            margin-bottom: 48px;
            font-size: 16px;
        }

        .carousel-inner figure img {
            object-fit: cover;
            width: 100% !important;
            /* height: 16.25em; */
        }

        @media(max-width:767px) {
            .carousel-inner figure img {
                height: 16.25em;
            }
        }

        @media(min-width:768px) {
            .carousel-inner figure img {
                height: 25em;
            }
        }

        @media(min-width:992px) {
            .carousel-inner figure img {
                height: 28em;
            }
        }

        .box-carousel .carousel-control.left,
        .box-carousel .carousel-control.right {
            background-image: none;
        }

        .box-carousel .carousel-control {
            color: #ffe145;
            opacity: 1;
        }

        .box-carousel .carousel-control:focus,
        .box-carousel .carousel-control:hover {
            color: #404040;
            opacity: 0.7;
        }

        .box-carousel .carousel-indicators {
            bottom: 0px !important;
            position: absolute;
            bottom: 8px;
            left: calc(50% - 70px);
            z-index: 15;
            width: 140px;
            padding-left: 0;
            margin-left: 0%;
            text-align: center;
            list-style: none;
            padding: 0 8px;
            background: #fafafa99;
            border-radius: 15px;
            /* border: solid 1px #40404080; */
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
        }

        .box-carousel .carousel-indicators li {
            background-color: #404040;
            border-color: #40404050;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
        }

        .box-carousel .carousel-indicators .active {
            background-color: #ffe145;
            border-color: #A6B517;
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next,
        .carousel-control .icon-prev {
            padding: 2px;
            display: inline-block;
            width: 1.4em !important;
            height: 1.4em !important;
            background: #fafafa99;
            border-radius: 50%;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
        }
    </style>



    <!-- Sección box collapsed -->
    <div class="box-collapsed">
        <!-- collapse_ecologistics -->
        <div class='panel-group' id='accordion_ecologistics' role='tablist ' aria-multiselectable='true'>

            <!-- collapse que -->
            <div class='panel panel-primary'>
                <div class='panel-heading' role='tab' id='heading_que'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_ecologistics' href='#collapse_que' aria-expanded='false' aria-controls='collapse_que'>
                            ¿Qué es?
                        </a>
                    </h4>
                </div>
                <div id='collapse_que' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_que' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-que'>
                            <!-- Component box title-paragraph -->
                            <div class="box-title-paragraph paragraph">
                                <h3>¿Qué es?</h3>
                                <p>El proyecto EcoLogistics impulsa el transporte de carga bajo en carbono para ciudades sustentables. Esta iniciativa apoya ciudades en Argentina, India y Colombia para desarrollar e implementar planes sustentables de transporte de carga urbana con la creación de capacidades en actores claves.</p>
                                <p>Es financiado por la Iniciativa Internacional del Clima (IKI), del Ministerio Federal de Medio Ambiente, Protección de la Naturaleza y Seguridad Nuclear de Alemania (BMU) y ejecutado por ICLEI - Gobiernos Locales por la Sustentabilidad, con apoyo técnico de Despacio, Zaragoza Logistics Center (ZLC) y Smart Freight Centre (SFC).</p>
                            </div>
                            <style>
                                .set-wrapper .box-title-paragraph {
                                    grid-area: box-title-paragraph;
                                    /* margin-bottom: 48px; */
                                }

                                .box-title-paragraph h3 {
                                    color: #404040;
                                    margin: 32px 16px 8px 16px;
                                    /* text-transform: uppercase; */
                                    font-size: 24px;
                                    font-weight: 700;
                                }

                                .box-title-paragraph h3,
                                .box-title-left h3,
                                .paragraph h3 {
                                    border-bottom: #ffe04b solid 2px;
                                }

                                .box-title-paragraph h4 {
                                    color: #252525;
                                    margin: 16px 16px 16px 16px;
                                    /* text-transform: uppercase; */
                                    font-size: 16px;
                                    font-weight: 700;
                                }

                                .box-title-paragraph p {
                                    margin: 8px 16px 8px 16px;
                                    font-size: 16px;
                                    font-weight: normal;
                                    text-align: left;
                                    line-height: 1.5;
                                    color: #252525;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <style>
                    .box-que {
                        grid-area: que;
                    }
                </style>
            </div>

            <!-- collapse plan -->
            <div class='panel panel-primary'>
                <div class='panel-heading' role='tab' id='heading_plan'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_ecologistics' href='#collapse_plan' aria-expanded='false' aria-controls='collapse_plan'>
                            Plan de Acción de Logística Urbana Baja en Carbono
                        </a>
                    </h4>
                </div>
                <div id='collapse_plan' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_plan' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-plan'>
                            <div class="box-title-paragraph paragraph">
                                <h3>Plan de Acción de Logística Urbana Baja en Carbono</h3>
                                <p>La publicación demuestra cómo Bogotá puede reducir sus emisiones de gases de efecto invernadero (GEI) en el sector de logística urbana. Este Plan contempla el sector de transporte de carretera, objeto de diagnóstico realizado por el equipo de Despacio e ICLEI, con apoyo de la administración pública de Bogotá y la Red de Logística Urbana (RLU), llevando en cuenta las tipologías vehiculares más comunes y utilizadas en las entregas de última milla.</p>
                            </div>
                            <style>
                                .set-wrapper .box-title-paragraph {
                                    grid-area: box-title-paragraph;
                                    /* margin-bottom: 48px; */
                                }

                                .box-title-paragraph h3 {
                                    color: #404040;
                                    margin: 32px 16px 8px 16px;
                                    /* text-transform: uppercase; */
                                    font-size: 24px;
                                    font-weight: 700;
                                }

                                .box-title-paragraph h3,
                                .box-title-left h3,
                                .paragraph h3 {
                                    border-bottom: #ffe04b solid 2px;
                                }

                                .box-title-paragraph h4 {
                                    color: #252525;
                                    margin: 16px 16px 16px 16px;
                                    /* text-transform: uppercase; */
                                    font-size: 16px;
                                    font-weight: 700;
                                }

                                .box-title-paragraph p {
                                    margin: 8px 16px 8px 16px;
                                    font-size: 16px;
                                    font-weight: normal;
                                    text-align: left;
                                    line-height: 1.5;
                                    color: #252525;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <style>
                    .box-plan {
                        grid-area: plan;
                    }
                </style>
            </div>

            <!-- collapse busca -->
            <div class='panel panel-primary'>
                <div class='panel-heading' role='tab' id='heading_busca'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_ecologistics' href='#collapse_busca' aria-expanded='false' aria-controls='collapse_busca'>
                            ¿Qué busca?
                        </a>
                    </h4>
                </div>
                <div id='collapse_busca' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_busca' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-busca'>
                            <!-- Component box title-left -->
                            <div class="box-title-left paragraph">
                                <h3>¿Qué busca?</h3>
                            </div>
                            <style>
                                .set-wrapper .box-title-left {
                                    grid-area: box-title-left;
                                    padding-top: 18px;
                                    /* margin-top: 32px; */
                                }

                                .box-title-left h3 {
                                    color: #404040;
                                    margin: 32px 16px 8px 16px;
                                    font-size: 24px;
                                    font-weight: 700;
                                    margin-top: 32px;
                                    margin-bottom: 24px;
                                }
                            </style>



                            <!-- Componente box img-paragraph -->
                            <div class="box-img-paragraph">
                                <div class="imagen img-contenedor">
                                    <figure>
                                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-08-2023/ecologistics_img_005_992x500.png" alt="imagen vista aérea de la ciudad">
                                        <figcaption>
                                            <p>Figura 1. Vista aérea de la ciudad.</p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="paragraph ph-img-paragraph">
                                    <p>El proyecto busca promover políticas y prácticas de logística baja en carbono (EcoLogística) que contribuyan a la mitigación del cambio climático y que cumplan con las metas de la NDC del país. , iIgualmente, se trabaja para destacar la logística urbana como un área prioritaria para los gobiernos locales, regionales y nacionales para combatir el cambio climático; fortalecer la capacidad institucional a través de la participación de diversas partes interesadas y promover un enfoque de gobernanza multinivel para la política de transporte urbano de mercancías.</p>
                                </div>

                            </div>
                            <style>
                                .set-wrapper .box-img-paragraph {
                                    grid-area: box-img-paragraph;
                                    display: grid;
                                    gap: 8px;
                                    grid-auto-flow: dense;
                                    grid-template-columns: 1fr;
                                    grid-template-rows: auto;
                                    justify-content: center;
                                    align-items: center;
                                    /* margin-bottom: 48px; */
                                }




                                .box-img-paragraph .ph-img-paragraph {
                                    padding: 1rem;
                                    display: flex;
                                    flex-direction: column;
                                    justify-content: center;
                                    align-items: center;
                                }

                                .box-img-paragraph .ph-img-paragraph p {
                                    font-size: 16px;
                                    line-height: 1.5;
                                    text-align: justify padding: 32px;
                                }

                                .paragraph h3 {
                                    color: #404040;
                                    margin: 32px 16px 8px 16px;
                                    /* text-transform: uppercase; */
                                    font-size: 24px;
                                    font-weight: 700;
                                    margin: 0px;
                                    /* padding-top: 32px; */
                                    padding-bottom: 16px;

                                }

                                .paragraph h3::after {
                                    display: block;
                                    border-bottom: solid 2px #ffe145;

                                }

                                .paragraph p {
                                    font-size: 16px;
                                    font-weight: 500;
                                    text-align: left;
                                    line-height: 1.5;
                                    color: #252525;
                                    margin: 0px;
                                    padding-top: 8px;
                                    padding-bottom: 8px;
                                }

                                .box-img-paragraph figure img {
                                    margin-top: 10px;
                                    /* height: 100%; */
                                    width: 100%;
                                    object-fit: cover;
                                }

                                .box-img-paragraph figure figcaption {
                                    display: inline-block;
                                }

                                .box-img-paragraph figure p {
                                    text-align: center;
                                }



                                @media(min-width:768px) {
                                    .set-wrapper .box-img-paragraph {
                                        grid-template-columns: 1fr 1fr;
                                        grid-template-rows: auto;
                                    }




                                }
                            </style>
                        </div>
                    </div>
                </div>
                <style>
                    .box-busca {
                        grid-area: busca;
                    }
                </style>
            </div>

            <!-- collapse como -->
            <div class='panel panel-primary'>
                <div class='panel-heading' role='tab' id='heading_como'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_ecologistics' href='#collapse_como' aria-expanded='false' aria-controls='collapse_como'>
                            ¿Qué contempla?
                        </a>
                    </h4>
                </div>
                <div id='collapse_como' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_como' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-como'>

                            <!-- Sección box desarrollo -->
                            <div class="box-desarrollo">
                                <div class="paragraph ph-3">
                                    <h3>¿Qué contempla?</h3>
                                    <p>El LCAP-UF está estructurado bajo cuatro ejes estratégicos:</p>
                                </div>
                                <div class="box-bar-icons">
                                    <div class="icon zoom">
                                        <a>
                                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2023/reutilizar.png" alt="icono de " width="80px">
                                            <p>Cambio tecnológico</p>
                                        </a>
                                    </div>
                                    <div class="icon zoom">
                                        <a>
                                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2023/enviado.png" alt="icono de " width="80px">
                                            <p>Acciones para la definición de la visión para el tránsito de la carga urbana</p>
                                        </a>
                                    </div>
                                    <div class="icon zoom">
                                        <a>
                                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2023/rompecabezas.png" alt="icono de " width="80px">
                                            <p>Comunicación, pedagogía y corresponsabilidad</p>
                                        </a>
                                    </div>
                                    <div class="icon zoom">
                                        <a>
                                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2023/tres-vias.png" alt="icono de " width="80px">
                                            <p>Infraestructura</p>
                                        </a>
                                    </div>

                                </div>
                                <div class="paragraph ph-4">
                                    <p>Estos ejes cuentan con metas, acciones e indicadores que se articulan con la normatividad vigente y presentan las condiciones necesarias para que las acciones puedan ser implementadas en el corto, mediano y largo plazo. Con estas definiciones, es posible planificar una logística urbana eficiente y baja en carbono, involucrando las principales partes interesadas y contribuyendo con las metas nacionales de disminución de emisiones de GEI, especialmente la NDC y el Acuerdo de París.</p>
                                </div>
                                <style>
                                    .set-wrapper .box-bar-icons {
                                        grid-area: box-bar-icons;
                                        display: grid;
                                        gap: 8px;
                                        grid-auto-flow: dense;
                                        grid-template-columns: 1fr;
                                        grid-template-rows: auto;
                                        margin-bottom: 18px;
                                    }

                                    .box-bar-icons .icon a {
                                        padding: 8px;
                                        display: flex;
                                        flex-direction: column;
                                        justify-content: center;
                                        align-items: center;
                                    }

                                    .box-bar-icons .icon a img {
                                        width: 80px;
                                        height: 80px;
                                        object-fit: cover;
                                        border-radius: 50%;
                                        border: 2px solid #40404080;
                                    }

                                    .box-bar-icons .icon a p {
                                        margin-top: 12px;
                                        font-size: 16px;
                                        font-weight: 600;
                                        color: #404040;
                                        text-align: center;
                                    }


                                    @media(min-width:768px) {
                                        .set-wrapper .box-bar-icons {
                                            padding: 32px 32px 0 32px;
                                            grid-template-columns: repeat(4, 1fr);
                                        }
                                    }
                                </style>

                            </div>
                            <style>
                                .set-wrapper .box-desarrollo {
                                    grid-area: box-desarrollo;
                                    padding-left: 1rem;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <style>
                    .box-como {
                        grid-area: como;
                    }
                </style>
            </div>

            <!-- collapse desmostrativo -->
            <div class='panel panel-primary'>
                <div class='panel-heading' role='tab' id='heading_desmostrativo'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_ecologistics' href='#collapse_desmostrativo' aria-expanded='false' aria-controls='collapse_desmostrativo'>
                            Proyecto demostrativo
                        </a>
                    </h4>
                </div>
                <div id='collapse_desmostrativo' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_desmostrativo' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-desmostrativo'>
                            <!-- Sección box demostracion -->
                            <div class="box-demostracion">
                                <div class="paragraph ph-5">
                                    <h3>Proyecto demostrativo: Evaluación de alternativas de desconsolidación utilizando vehículos de cero emisiones para la distribución de última milla de paquetes en tres zonas de Bogotá</h3>
                                    <p>Este piloto surgió como parte del proyecto Ecologistics, en el que Bogotá ganó una financiación por parte de la Iniciativa Internacional del Clima (IKI), del Ministerio Federal de Medio Ambiente, Protección de la Naturaleza y Seguridad Nuclear de Alemania (BMU), para implementar este proyecto demostrativo, que tuvo como objetivo principal la innovación en modelos de distribución de última milla para reducir el impacto ambiental e identificar oportunidades para mejorar la eficiencia logística.</p>
                                </div>
                            </div>
                            <style>
                                .set-wrapper .box-demostracion {
                                    grid-area: box-demostracion;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <style>
                    .box-desmostrativo {
                        grid-area: desmostrativo;
                    }
                </style>
            </div>

            <!-- collapse piloto -->
            <div class='panel panel-primary'>
                <div class='panel-heading' role='tab' id='heading_piloto'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_ecologistics' href='#collapse_piloto' aria-expanded='false' aria-controls='collapse_piloto'>
                            ¿Qué buscó resolver el piloto?
                        </a>
                    </h4>
                </div>
                <div id='collapse_piloto' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_piloto' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-piloto'>
                            <!-- Sección box piloto -->
                            <div class="box-piloto">
                                <div class="paragraph ph-6">
                                    <h3>¿Qué buscó resolver el piloto?</h3>
                                    <p>Buscó la viabilidad en términos económicos, ambientales, operacionales y sociales de la distribución de última milla, usando diferentes tipologías de vehículos, mercancías y modelos operativos.</p>
                                </div>
                            </div>
                            <style>
                                .set-wrapper .box-piloto {
                                    grid-area: box-piloto;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <style>
                    .box-piloto {
                        grid-area: piloto;
                    }
                </style>
            </div>

            <!-- collapse desarrollo -->
            <div class='panel panel-primary'>
                <div class='panel-heading' role='tab' id='heading_desarrollo'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_ecologistics' href='#collapse_desarrollo' aria-expanded='false' aria-controls='collapse_desarrollo'>
                            ¿Cómo se desarrolló?
                        </a>
                    </h4>
                </div>
                <div id='collapse_desarrollo' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_desarrollo' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-desarrollo'>

                            <!-- Sección box img-full -->
                            <div class="box-img-full">
                                <figure>
                                    <img class="w-100 img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-08-2023/ecologistics_img_006_992x500.png" alt="imagen panorámica aérea de la ciudad">
                                    <figcaption>
                                        <p>Figura 2. Vista panorámica de la ciudad.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <style>
                                .set-wrapper .box-img-full {
                                    grid-area: box-img-full;
                                    padding: 3em;
                                }

                                .box-img-full img {
                                    border: solid 1px #f5f5f5;
                                    /* margin: 3em; */
                                    border-radius: 4px;
                                }
                            </style>

                            <!-- Sección box desarrollo -->
                            <div class="box-desarrollo">
                                <div class="paragraph ph-7">
                                    <h3>¿Cómo se desarrolló?</h3>
                                    <p>Se desarrolló mediante cuatro modelos de operación, reemplazando vehículos convencionales de combustión interna por, motocarros eléctricos, vans eléctricas y triciclos electro asistidos. Con la participación de siete empresas, un generador de carga, dos operadores logísticos, una empresa de mensajería, una empresa de renta de vehículos y dos operadores logísticos.</p>
                                    <p>Resultados:</p>
                                    <ul>
                                        <li>Reducción de emisiones de GEI</li>
                                        <li>Reducción en la contaminación del aire</li>
                                        <li>Disminución en la congestión y la inseguridad vial</li>
                                        <li>Mejora en la eficiencia logística</li>
                                        <li>Ahorro de 1.25 toneladas de CO2 equivalente, evitando la circulación de 5 vehículos de combustión interna y reduciendo la emisión de material particulado.</li>
                                    </ul>
                                    <p>A partir de los resultados, se han desarrollado dos módulos que facilitan la toma de decisiones en la electrificación de la última milla, en función de:</p>
                                    <ul>
                                        <li>Infraestructura disponible</li>
                                        <li>Costo energético y ambiental</li>
                                    </ul>
                                    <p>Estos módulos y mas información pueden ser consultados: <a href="https://oscarng.shinyapps.io/ICLEI_beta/">Herramienta para la electrificación del transporte de carga en la última milla</a></p>
                                </div>
                            </div>
                            <style>
                                .set-wrapper .box-desarrollo {
                                    grid-area: box-desarrollo;
                                }

                                .box-desarrollo ul>li {
                                    font-size: 16px;
                                    font-weight: 500;
                                    text-align: left;
                                    line-height: 1.3;
                                    color: #252525;
                                }
                            </style>

                        </div>
                    </div>
                </div>
                <style>
                    .box-desarrollo {
                        grid-area: desarrollo;
                    }
                </style>
            </div>

            <!-- collapse recursos -->
            <div class='panel panel-primary'>
                <div class='panel-heading' role='tab' id='heading_recursos'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_ecologistics' href='#collapse_recursos' aria-expanded='false' aria-controls='collapse_recursos'>
                            Recursos
                        </a>
                    </h4>
                </div>
                <div id='collapse_recursos' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_recursos' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-recursos'>
                            <!-- Sección box recursos -->
                            <div class="box-recursos">
                                <div class="paragraph ph-8">
                                    <h3>Recursos</h3>
                                    <p>De click sobre los documentos para visualizarlos y descargarlos.</p>
                                </div>
                                <p>&nbsp;</p>
                                <div>

                                    <div class="media">
                                        <div class="media-left">
                                            <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2023/lcap-bogota-final_.pdf" target="_blank" rel="noopener noreferrer" download="" title="Plan de Acción de Logística Urbana Baja en Carbono">
                                                <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2023/lcap-bogota-final_.pdf" target="_blank" rel="noopener noreferrer" download="" title="Ir a descarga de Plan de Acción de Logística Urbana Baja en Carbono">
                                                <h4 class="media-heading">Plan de Acción de Logística Urbana Baja en Carbono</h4>
                                            </a>
                                            <p>"Plan de Acción de Logística Urbana Baja en Carbono (LCAPUF, por su sigla en inglés) es un documento que demuestra cómo la ciudad de Bogotá puede reducir sus emisiones de Gases de Efecto Invernadero (GEI) en la logística urbana, un subsector del sector de transporte."</p>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <div class="media-left">
                                            <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-08-2023/analisis_de_resultados.pdf" target="_blank" rel="noopener noreferrer" download="" title="Plan de Acción de Logística Urbana Baja en Carbono">
                                                <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-08-2023/analisis_de_resultados.pdf" target="_blank" rel="noopener noreferrer" download="" title="Ir a descarga de Plan de Acción de Logística Urbana Baja en Carbono">
                                                <h4 class="media-heading">Entregable Fase III</h4>
                                            </a>
                                            <p>“Evaluación de alternativas de transporte de carga en vehículos de cero emisiones en la distribución de última milla de paquetes en zonas priorizadas de Bogotá D.C”</p>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <style>
                                .set-wrapper .box-recursos {
                                    grid-area: box-recursos;
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
                        </div>
                    </div>
                </div>
                <style>
                    .box-recursos {
                        grid-area: recursos;
                    }
                </style>
            </div>

        </div>
        <!-- /#fin _ecologistics -->
    </div>
    <style>
        .set-wrapper .box-collapsed {
            grid-area: box-collapsed;
        }
    </style>






    <!-- Sección box bar-icons -->











</div>
<!-- Fin Set -->
<p>&nbsp;</p>

<style>
    .box-collapsed .glyphicon-chevron-right::before {
        color: #3f3f3f !important;
    }

    .box-collapsed .glyphicon-chevron-left::before {
        color: #3f3f3f !important;
    }

    .box-collapsed .panel-heading {
        border-color: #3f3f3f !important;
        background-color: #3f3f3f !important;
        background-image: none !important;
    }

    .box-collapsed .panel-heading .panel-title a {
        text-decoration: none;
        color: #ffe04b !important;
        font-size: 16px;
        font-weight: 600;
        /* letter-spacing: 1px; */
    }

    .box-collapsed .panel-heading .panel-title a:after {
        font-family: 'Glyphicons Halflings';
        content: "\e080";
        float: right;
        color: #ffe04b;
        font-size: 18px;
    }

    .box-collapsed .panel-heading .panel-title a.collapsed:after {
        content: "\e114";
    }

    .box-collapsed .panel-primary {
        border-color: #3f3f3f !important;
    }
</style>
