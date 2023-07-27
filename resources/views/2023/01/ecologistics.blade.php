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
            max-width: 400px;
            margin: auto;
            padding: 1.5em 2em;
        }
    </style>

    <!-- Component box carousel ecologistics-ppal-->
    <div class="box-carousel box-carousel-ecologistics-ppal">

        <div id="carousel-ecologistics-ppal" class="carousel slide" data-ride="carousel-ecologistics-ppal">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-ecologistics-ppal" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-ecologistics-ppal" data-slide-to="1"></li>
                <li data-target="#carousel-ecologistics-ppal" data-slide-to="2"></li>
                <li data-target="#carousel-ecologistics-ppal" data-slide-to="3"></li>
                <li data-target="#carousel-ecologistics-ppal" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <picture>
                        <source media="(min-width: 992px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_001_992x400.png">
                        <source media="(min-width: 768px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_002_768x400.png">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_003_340x260.png" alt="Fotografía de vehículos de carga eléctricos">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source media="(min-width: 992px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_004_992x400.png">
                        <source media="(min-width: 768px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_005_768x400.png">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_006_340x260.png" alt="Fotografía de vehículos de carga eléctricos">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source media="(min-width: 992px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_007_992x400.png">
                        <source media="(min-width: 768px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_008_768x400.png">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_009_340x260.png" alt="Fotografía de vehículos de carga eléctricos">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source media="(min-width: 992px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_010_992x400.png">
                        <source media="(min-width: 768px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_011_768x400.png">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_012_340x260.png" alt="Fotografía de vehículos de carga eléctricos">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source media="(min-width: 992px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_013_992x400.png">
                        <source media="(min-width: 768px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_014_768x400.png">
                        <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_015_340x260.png" alt="Fotografía de vehículos de carga eléctricos">
                    </picture>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-ecologistics-ppal" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-ecologistics-ppal" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <style>
        .set-wrapper .box-carousel-ecologistics-ppal {
            grid-area: box-carousel-ecologistics-ppal;
            margin-bottom: 48px;
        }

        .box-carousel .item img {
            width: 100%;
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
            color: #ffe145;
            opacity: 0.5;
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
    </style>

    <!-- Component box title-paragraph -->
    <div class="box-title-paragraph paragraph">
        <h3>¿Qué es el proyecto EcoLogistics?</h3>
        <p>El proyecto EcoLogistics impulsa el transporte de carga bajo en carbono para ciudades sustentables. Esta iniciativa apoya ciudades en Argentina, India y Colombia para desarrollar e implementar planes sustentables de transporte de carga urbana con la creación de capacidades en actores claves.</p>
        <p>Es financiado por la Iniciativa Internacional del Clima (IKI), del Ministerio Federal de Medio Ambiente, Protección de la Naturaleza y Seguridad Nuclear de Alemania (BMU) y ejecutado por ICLEI - Gobiernos Locales por la Sustentabilidad, con apoyo técnico de Despacio, Zaragoza Logistics Center (ZLC) y Smart Freight Centre (SFC).</p>
        <h3>Plan de Acción de Logística Urbana Baja en Carbono (LCAP-UF)</h3>
        <p>La publicación demuestra cómo Bogotá puede reducir sus emisiones de gases de efecto invernadero (GEI) en el sector de logística urbana. Este Plan contempla el sector de transporte de carretera, objeto de diagnóstico realizado por el equipo de Despacio e ICLEI, con apoyo de la administración pública de Bogotá y la Red de Logística Urbana (RLU), llevando en cuenta las tipologías vehiculares más comunes y utilizadas en las entregas de última milla.</p>
    </div>
    <style>
        .set-wrapper .box-title-paragraph {
            grid-area: box-title-paragraph;
            margin-bottom: 48px;
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
        .paragraph h3{
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

    <!-- Component box title-left -->
    <div class="box-title-left paragraph">
        <h3>¿Qué busca?</h3>
    </div>
    <style>
        .set-wrapper .box-title-left {
            grid-area: box-title-left;
            padding-top: 18px;
            margin-top: 32px;
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
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-07-2023/ecologistics_imagen_016_1200x750.png" alt="Imagen de vehículo de carga" title="Imagen de vehículo de carga">
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
            margin-bottom: 48px;
        }

        .box-img-paragraph .img-contenedor {
            max-height: 400px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* margin: auto; */
        }

        .box-img-paragraph .img-contenedor img {
            height: 200px;
            object-fit: cover;
            object-position: center
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
            padding-top: 32px;
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

        @media(min-width:768px) {
            .set-wrapper .box-img-paragraph {
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;
            }

            .box-img-paragraph .img-contenedor {
                max-height: 300px;
                overflow: hidden;
            }

            .box-img-paragraph .img-contenedor img {
                height: 300px;
                object-fit: cover;
                object-position: center
            }


        }
    </style>

    <!-- Sección box bar-icons -->

    <!-- Sección box desarrollo -->
    <div class="box-desarrollo">
        <div class="paragraph ph-3">
            <h3>¿Cómo se desarrolla?</h3>
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


    <!-- Sección box img-full -->
    <div class="box-img-full">
        <div class="imagen img-full_one">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2023/ecologistics_230621_1200x750_04.png" alt="" title="">
        </div>
    </div>
    <style>
        .set-wrapper .box-img-full {
            grid-area: box-img-full;
        }

        .box-img-full img {
            border: solid 1px #f5f5f5;
            max-width: 800px;
            margin: 3em;
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
<!-- Fin Set -->
<p>&nbsp;</p>
