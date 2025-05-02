@extends('welcome')
@section('title','aliados')
@section('contenido')

<!-- Set aliados -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


<div class="set-wrapper aliados">

    <!-- bloque box header-->
    <style>
        .set-wrapper .box-header {
            background: #BED000FF;
            background-image: url("https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/17-07-2024/cybe_portada_2.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;

            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas: "box-header";
        }

        @media (min-width: 908px) {
            .set-wrapper .box-header {
                background-position: center -30em;
                grid-template-columns: 55% 45%;
                grid-template-areas: "vacio box-header";
            }
        }

        .box-header .cmpnt-logo-ppal {
            grid-area: box-header;
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box-header .cmpnt-logo-ppal .logo-ppal {
            width: 100%;
            max-width: 260px;
            margin: 0 auto;
            background-color: #BED000FF;
            padding: 32px;
            -webkit-box-shadow: 0px 0px 10px 3px #BED000FF25;
            box-shadow: 0px 0px 10px 3px #BED000FF25;
            margin-bottom: 12px;
        }

        .box-header .cmpnt-logo-ppal .paragraph {
            font-family: "Montserrat", sans-serif;
            font-size: 20px;
            font-weight: 400;
            text-align: left;
            line-height: 1.1;
            color: #fff;
            text-align: center;
            margin: 8px 14px;
            padding: 0;
            max-width: 400px;
        }

        /* Reglas Navbar */
        .set-wrapper .navbar {
            background: #BED000FF;
            border: none;
            border-radius: 0;
            font-family: "Montserrat", sans-serif !important;
            font-size: 14px !important;
            font-weight: 400;
            line-height: 1.1;
            color: #fff;
            text-align: center;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        @media (min-width: 768px) {
            .set-wrapper .navbar {
                display: flex;
                margin: auto;
                margin-bottom: 6px;
            }
        }

        .set-wrapper .navbar-nav>li {
            background: #BED000FF;
            color: #3d4a1c;
        }

        .set-wrapper .navbar-nav>li:hover {
            background: #828F26;
            color: #ffffff;
        }

        .set-wrapper .navbar-nav>li>a {
            color: #3d4a1c !important;
            /* padding: 14px 4px; */
            height: 100%;
        }

        .set-wrapper .navbar-nav>li:hover>a {
            color: #ffffff !important;
        }

        .set-wrapper .navbar-nav>li a.activado {
            background: rgba(77, 84, 31, 1) !important;
            color: #BED000FF !important;
        }

        @media (min-width: 768px) {
            .navbar-collapse.collapse {
                display: inline-block !important;
                width: auto !important;
            }
        }

        @media (min-width: 768px) {
            .navbar-nav {
                display: flex;
                flex-wrap: wrap;
                align-items: stretch;
                align-content: center;
                justify-content: center;
            }
        }
    </style>
    <div class="box box-header">
        <div class="cmpnt cmpnt-vacio">
        </div>
        <div class="cmpnt cmpnt-logo-ppal">
            <div class="logo logo-ppal">
                <a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/home">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-08-2024/logo_cbe_2024.png" alt="logo Movilidad de Cero y Bajas Emisiones">
                </a>
            </div>
            <p class="paragraph ph-type-ppal ph-id-1">Conoce la apuesta de Bogotá por la <strong>movilidad motorizada de cero y bajas emisiones</strong></p>
        </div>
    </div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a class="activado" href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/home">Inicio</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/por_que">¿Por qué?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/solucion">¿Qué solución <br> proponemos?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/metas">¿Cuáles son <br> nuestras metas?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/tecnologias">¿Cuáles son <br> las tecnologías?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/mitos">Verdades <br>y mitos</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/recursos">Recursos</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/aliados">Aliados</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .aliados .cpnt-1 {
            padding: 32px 0 0 0;
            font-family: 'Montserrat', sans-serif;
        }

        .aliados .cpnt-1 .resumen {
            display: flex;
            flex-wrap: wrap;
            align-content: space-around;
            align-items: center;
            justify-content: space-evenly;

        }

        .aliados .cpnt-1 .title-1 {

            font-size: 24px;
            font-weight: 700;
            color: #4d541f;
            text-align: center;
            margin-bottom: 32px;
            text-transform: uppercase;
        }

        .aliados .cpnt-1 .resumen img {
            padding: 16px;
            max-width: 230px;
        }

        .aliados .cpnt-1 .resumen .text {
            @media(min-width:768px) {
                width: 70%;
            }
        }
    </style>
    <div class="cpnt cpnt-1">
        <h3 class="title title-1">CONOCE A LOS PROTAGONISTAS DE LA MOVILIDAD SOSTENIBLE</h3>
        <div class="resumen">
            <div class="imagen img-1">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/26-12-2024/rcbe.png" alt="" title="">
            </div>
            <div class="text">
                <p class="paragraph ph-1">Celebramos a los <b>miembros</b> de la Red de Movilidad de Cero y Bajas Emisiones (RCBE), líderes en la transición hacia una <b>movilidad más sostenible y sustentable.</b> Aquí podrás conocer su sector y acceder a sus sitios web, facilitando conexiones estratégicas.</p>
                <p class="paragraph ph-1">Próximamente, este espacio reflejará sus avances en compromisos, innovación y transición tecnológica, inspirando a nuevos actores a sumarse.</p>
                <p class="paragraph ph-1">Si tu organización quiere ser parte de este movimiento transformador, <a href="https://forms.gle/19McR5Yo4C29hJMm7" target="_blank" rel="noopener noreferrer"><b>haz clic aquí</b></a> para unirte y contribuir al futuro de la movilidad sostenible de la región.</p>
                <p class="paragraph ph-1"><b>¡Forma parte del cambio y potencia tus resultados colaborando con otros actores clave!</b></p>
            </div>

        </div>
    </div>

    <style>
        .cpnt-2 {
            padding: 32px 0;
            font-family: 'Montserrat', sans-serif;
            text-align: center;
        }

        .cpnt-2 .set-controls form {
            display: flex;
            justify-content: space-around;
            margin-top: 32px;
            align-items: flex-end;
            align-content: stretch;
            flex-wrap: wrap;
            flex-direction: row;
            gap: 16px;
        }

        .cpnt-2 .set-controls form .filter-select {
            width: 300px;
            margin-bottom: 16px;
        }

        .cpnt-2 .set-controls form .filter-text {
            width: 300px;
            margin-bottom: 16px;
        }

        .cpnt-2 .set-controls form .filter-clear {
            margin-bottom: 16px;
        }

        .cpnt-2 .card-aliado {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            margin: 0px;
            padding: 8px;
            border: 1px solid rgb(250, 250, 250);
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            /* background-color:rgb(250, 250, 250); */
            font-family: 'Montserrat', sans-serif;
        }

        .cpnt-2 .card-aliado:hover {
            background-color: #BED000;
            justify-content: center;
        }
    </style>
    <div class="cpnt cpnt-2">

        <template>
            <div class="card-aliado">

                <div class="title">
                    <h4 class="title title-1">GRUPO EMPRESARIAL O&C SAS</h4>
                </div>
                <div class="imagen">
                    <img class="img-responsive w-100" src="" onerror="this.onerror=null;this.src='https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a000.png'" alt="Logo">
                </div>
                <div class="website">
                    <a href="https://oasisgroup.online/" target="_blank" rel="noopener noreferrer">Ir a sitio web</a>
                </div>

            </div>
        </template>

        <div class="set-controls">
            <form>
                <div class="filter-select">
                    <label for="category">Categoría</label>
                    <select class="form-control" id="category">
                        <option disabled>Seleccione una opción</option>
                        <option value="0">Todas</option>
                        <option value="1">Academia</option>
                        <option value="2">Asociaciones</option>
                        <option value="3">Comercialización de productos</option>
                        <option value="4">Distribución local (última milla)</option>
                        <option value="5">Edificación y/o Infraestructura</option>
                        <option value="6">Explotación de recursos</option>
                        <option value="7">Generación de energía</option>
                        <option value="8">Gestión y monitoreo ambiental</option>
                        <option value="9">Gobierno</option>
                        <option value="10">I+D+I</option>
                        <option value="11">Logística y transporte de carga</option>
                        <option value="12">ONG</option>
                        <option value="13">Postventa y servicio al cliente</option>
                        <option value="14">Producción / Fabricación de productos</option>
                        <option value="15">Sector asegurador</option>
                        <option value="16">Sector financiero</option>
                        <option value="17">Software para movilidad y recarga EV</option>
                        <option value="18">Transporte privado corporativo y/o individual</option>
                        <option value="19">Transporte público de pasajeros</option>
                        <option value="20">Venta final en puntos de comercio</option>
                        <option value="21">Servicios corporativos y de soporte organizacional</option>
                    </select>
                </div>

                <div class="filter-text"><label for="sentence">Buscar</label> <input class="form-control" id="sentence" placeholder="Buscar" type="text"></div>
                <div class="filter-clear"><button class="btn btn-filtro" onclick="limpiarFiltro()">Limpiar Filtro</button></div>

            </form>
        </div>

        <style>
            .cpnt-2 .set-cards {
                display: flex;
                justify-content: center;
                align-items: stretch;
                flex-wrap: wrap;
                margin-top: 32px;
                gap: 16px;

            }

            .set-cards .card-aliado {
                width: 280px;
                /* transition: ease-in-out 0.5s; */
            }

            .card-aliado .title-1 {
                text-align: center;
                color: #4d541f;
                font-size: 16px;
                font-weight: bold;
            }

            .card-aliado .imagen {
                width: 100%;
                border-radius: 4px;

            }

            .card-aliado .imagen img {
                width: 150px;
                height: 100px;
                object-fit: contain;
                margin: auto;
                border-radius: 4px;
            }

            .card-aliado .description {
                padding: 6px;
                visibility: hidden;
                position: absolute;

            }

            .card-aliado .description p {
                text-align: center;
                color: #252525;
                font-size: 14px;
                margin-bottom: 0;
            }

            .card-aliado .contact {
                padding: 6px;
                visibility: hidden;
                position: absolute;
            }

            .card-aliado .contact dl {
                text-align: center;
                color: #252525;
                font-size: 14px;
            }

            .card-aliado .contact dl dt {
                font-weight: bold;
            }

            .card-aliado .contact dl {
                margin-bottom: 6px;
            }

            .card-aliado .website {
                padding: 6px;
                visibility: visible;
                position: relative;
                /* visibility: hidden;
                position: absolute; */
            }

            .card-aliado .website a {
                text-align: center;
                color: #4d541f;
                font-size: 14px;
                font-weight: bold;
            }

            .card-aliado:hover .description,
            .card-aliado:hover .contact,
            .card-aliado:hover .website {
                visibility: visible;
                position: relative;
            }

            .card-aliado:hover {
                background-color: #BED000;
            }

            .card-aliado:hover .title-1 {
                color: #252525;
            }

            .card-aliado:hover .website a {
                color: #252525;
            }

            .card-aliado:hover .description p,
            .card-aliado:hover .contact dl {
                color: #252525;
            }

            .card-aliado:hover .website a {
                text-align: center;
                color: #252525;
                font-size: 14px;
                font-weight: bold;
            }

            .card-aliado:hover .imagen {
                background-color: #fff;
                /* padding: 16px; */

            }

            .cpnt-2 .page {
                display: none
            }

            .cpnt-2 .page.active {
                display: flex;
                justify-content: center;
                align-items: stretch;
                flex-wrap: wrap;
                margin-top: 32px;
                gap: 16px;
            }
        </style>

        <div class="set-cards">


        </div>

        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous" onclick="cargaPage(0)">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="#" onclick="cargaPage(0)">1</a></li>
                <li><a href="#" onclick="cargaPage(1)">2</a></li>
                <li><a href="#" onclick="cargaPage(2)">3</a></li>
                <li><a href="#" onclick="cargaPage(3)">4</a></li>
                <li><a href="#" onclick="cargaPage(4)">5</a></li>
                <li><a href="#" onclick="cargaPage(5)">6</a></li>
                <li>
                    <a href="#" aria-label="Next" onclick="cargaPage(5)">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>


    </div>


    <style>
        .aliados .cpnt-3 {
            padding: 32px 0;
            font-family: 'Montserrat', sans-serif;
        }

        .aliados .set-aids {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: stretch;
            gap: 32px;
        }

        .aliados .set-aids .card-aids {
            width: 350px;
        }
    </style>
    <div class="cpnt cpnt-3">
        <p class="paragraph ph-1">Como parte de la RCBE, deseamos brindarles como apoyos:</p>
        <div class="set-aids">
            <div class="card-aids"><b>Asesoría técnica especializada</b> para fortalecer prácticas de movilidad sostenible y adoptar tecnologías limpias, incluyendo infraestructura de soporte.</div>
            <div class="card-aids"><b>Espacios de intercambio de conocimiento</b> que conectan actores, impulsan proyectos piloto e iniciativas de I+D+I en la Región Metropolitana Bogotá-Cundinamarca.</div>
            <div class="card-aids"><b>Divulgación</b> de sus logros y avances en movilidad sostenible a través del micrositio de cero y bajas emisiones, resaltando su impacto en la transición energética.</div>
            <div class="card-aids"><b>Recepción de información</b> sobre eventos e innovaciones en transición tecnológica vehicular.</div>
            <div class="card-aids"><b>Reconocimientos</b> a organizaciones con acciones efectivas para fortalecer la movilidad de cero emisiones.</div>
            <div class="card-aids">Punto de contacto en la SDM, facilitando orientación y apoyo en temas de políticas de movilidad sostenible.</div>
        </div>
    </div>


</div>
<!-- Fin Set -->

<script>
    const aliados = [{
            "id": "a001",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a001.png",
            "name": "GRUPO EMPRESARIAL O&C SAS",
            "category": 5,
            "description": "Infraestructura para recarga de vehículos eléctricos de 2 y 4 ruedas",
            "website": "https://oasisgroup.online/"
        },
        {
            "id": "a002",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a002.png",
            "name": "RENTING COLOMBIA SAS (BANCOLOMBIA)",
            "category": 20,
            "description": "Alquiler de vehículos",
            "website": "https://www.rentingcolombia.com/"
        },
        {
            "id": "a003",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a003.png",
            "name": "DEFENCARGA",
            "category": 11,
            "description": "Logística, seguridad",
            "website": "https://www.defencarga.org.co/"
        },
        {
            "id": "a004",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a004.png",
            "name": "RENAULT SOFASA",
            "category": 14,
            "description": "Fabricantes y comercializadores de vehículos.\nAlquiler de vehículos eléctricos.",
            "website": "https://www.renault.com.co/"
        },
        {
            "id": "a005",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a005.png",
            "name": "X-CARGO",
            "category": 4,
            "description": "Distribución de ultima milla y mensajería",
            "website": "https://x-cargo.co/"
        },
        {
            "id": "a006",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a006.png",
            "name": "EVOLECTRIC INCORPORATED",
            "category": 4,
            "description": "Distribución y transición (retrofit) de flota a EV",
            "website": "https://evolectricnow.com/"
        },
        {
            "id": "a007",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a007.png",
            "name": "LOLA TE MUEVE SAS",
            "category": 4,
            "description": "Distribución de ultima milla, venta y alquiler de bicicletas eléctricas de carga y triciclos eléctricos de carga",
            "website": "https://lola.com.co/"
        },
        {
            "id": "a008",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a008.png",
            "name": "BANCO DAVIVIENDA SA",
            "category": 16,
            "description": "Banco, créditos",
            "website": "https://sostenibilidad.davivienda.com/ambiental.html"
        },
        {
            "id": "a009",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a009.png",
            "name": "INSEPET SAS",
            "category": 20,
            "description": "Estaciones de servicio de combustible",
            "website": "https://insepet.com/"
        },
        {
            "id": "a010",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a010.png",
            "name": "OPERACIONES NACIONALES DE MERCADEO - OPEN MARKET LTDA (SOLISTICA)",
            "category": 11,
            "description": "Gestión del transporte, Gestión de almacenamiento, Mantenimiento vehicular",
            "website": "https://solistica.com/"
        },
        {
            "id": "a011",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a011.png",
            "name": "ENEL CODENSA",
            "category": 7,
            "description": "Generación eléctrica y distribución de electricidad y gas ; Desarrollo de productos innovadores y soluciones digitales en sectores: ciudades, hogares, industrias y movilidad eléctrica",
            "website": "https://www.enelx.com/co/es/ciudades/movilidad-electrica/transporte-publico-electrico"
        },
        {
            "id": "a012",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a012.png",
            "name": "NAVISAF - GEOTAB INC",
            "category": 11,
            "description": "Recopilación de datos y analítca, logística, avisos de disponibilidad de flota, gestión del riesgo ; rastreo GPS de flota ; control de velocidad",
            "website": "https://navisaf.com/"
        },
        {
            "id": "a013",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a013.png",
            "name": "PIOT SAS",
            "category": 4,
            "description": "Mensajería y distribución de ultima milla",
            "website": "https://www.piot.com.co/"
        },
        {
            "id": "a014",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/02-05-2025/A014.jpg",
            "name": "MOTORES Y MÁQUINAS SA BIC (MOTORYSA BIC) [BYD]",
            "category": 3,
            "description": "Importación y dstribución de vehículos. Tienen una nueva línea de negocios relacionada a la infraestructura de recarga.",
            "website": "https://motorysa.com/desarrollo-sostenible"
        },
        {
            "id": "a015",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a015.png",
            "name": "HELIOX ENERGY",
            "category": 5,
            "description": "Soluciones de recarga rápida, al servicio de flotas de autobuses y camiones eléctricos, vehículos de pasajeros, marinos, portuarios y mineros, entre otros",
            "website": "https://es.heliox-energy.com/"
        },
        {
            "id": "a016",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a016.png",
            "name": "SEGUROS SURA COLOMBIA",
            "category": 15,
            "description": "Gestor de inversiones que busca la rentabilidad sostenible",
            "website": "https://www.gruposura.com/sostenibilidad/"
        },
        {
            "id": "a017",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a017.png",
            "name": "ALIADAS CARGO",
            "category": 11,
            "description": "Servicios de transporte de carga",
            "website": "https://aliadascargo.com/"
        },
        {
            "id": "a018",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a018.png",
            "name": "AKT MOTOS",
            "category": 20,
            "description": "Ensambley venta de motocicletas con materiales provenientes de China, Brasil, Japón, Tailandia, Taiwán y Colombia",
            "website": "https://www.aktmotos.com/"
        },
        {
            "id": "a019",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a019.png",
            "name": "AUTECO MOBILITY SAS",
            "category": 20,
            "description": "Ensambladora y venta de motocicletas",
            "website": "https://www.auteco.com.co/"
        },
        {
            "id": "a020",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a020.png",
            "name": "AKUAI ENERGY SAS BIC",
            "category": 5,
            "description": "Estructuración e implementación de proyectos de eficiencia energética, energías renovables y movilidad eléctrica. Venta e instalación de cargadores de vehículos eléctricos VE, acompañamiento en la solicitud de beneficios tributarios por VE",
            "website": "https://akuai.co/"
        },
        {
            "id": "a021",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a021.png",
            "name": "ABB COLOMBIA LTDA",
            "category": 3,
            "description": "Productos para la industria eléctrica, proveedor de variadores de velocidad y motores, sistemas de control industrial que permiten la automatización",
            "website": "https://new.abb.com/south-america/sobre-nosotros/quienes-somos/oficinas-sudamerica/colombia"
        },
        {
            "id": "a022",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a022.png",
            "name": "VEMO",
            "category": 5,
            "description": "Vehículos eléctricos; Infraestructura de recarga para empresas; Tecnología e inteligencia de datos para gestión de flotas",
            "website": "https://vemovilidad.com/"
        },
        {
            "id": "a023",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a023.png",
            "name": "AUTOMOTRIZ ESCANDINAVA SAS  (VOLVO)",
            "category": 20,
            "description": "Venta de vehículos",
            "website": "https://www.volvocars.com/co/"
        },
        {
            "id": "a024",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a024.png",
            "name": "NAVITRANS SAS",
            "category": 20,
            "description": "Venta de vehículos y ensamble local",
            "website": "https://www.navitrans.com.co/"
        },
        {
            "id": "a025",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a025.png",
            "name": "CIRCUTOR SA (FILIAL COLOMBIA)",
            "category": 3,
            "description": "Medida y control ; Metering ; Protección y control ; Compensación de energía reactiva y filtrado de armónicos ; Recarga inteligente para vehículos eléctricos ; Energías renovables ; Software ; IoT Industrial y Automatización",
            "website": "https://circutor.com/"
        },
        {
            "id": "a026",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a026.png",
            "name": "TRACTEC",
            "category": 14,
            "description": "Fabricante de toda clase de remolques y semirremolques para las diferentes industrias",
            "website": ""
        },
        {
            "id": "a027",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a027.png",
            "name": "ORGANIZACIÓN TERPEL SA",
            "category": 20,
            "description": "Estaciones de servicio de combustible (gasolineras) y de recarga eléctrica (electrolineras)",
            "website": "https://www.terpel.com/"
        },
        {
            "id": "a028",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a028.png",
            "name": "ASOCIACIÓN NACIONAL DE MOVILIDAD SOSTENIBLE - ANDEMOS",
            "category": 2,
            "description": "Agremiación con el objeto de defender la libertad de comercio, las buenas prácticas y los acuerdos comerciales para asegurar la competitividad del sector automotor afín a la movilidad sostenible​",
            "website": "https://www.andemos.org/inicio"
        },
        {
            "id": "a029",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a029.png",
            "name": "CITYBEST",
            "category": 18,
            "description": "Aplicación que proveerá viajes más ecoamigables, gracias a que la flota de automóviles serán carros que funcionan a gas, eléctricos e híbridos",
            "website": "https://www.instagram.com/citybestapp/"
        },
        {
            "id": "a030",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a030.png",
            "name": "DEEPSEA DEVELOPMENTS SAS",
            "category": 17,
            "description": "Internet de las cosas (IoT)",
            "website": "https://www.deepseadev.com/en/"
        },
        {
            "id": "a031",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/a031.png",
            "name": "EMASA COLOMBIA",
            "category": 5,
            "description": "Soluciones Electro Mecánicas ; Soporte para montaje e instalación ; Construcción, montaje y puesta en marcha de equipos ; Planificación de rutinas de mantenimiento ; Diseño final de soluciones ; Administración de la Garantía ; Análisis de factibilidad de la solución",
            "website": "https://emasa.com.co/"
        },
        {
            "id": "b001",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b001.png",
            "name": "ANAFALCO",
            "category": 2,
            "description": "Asociación Nacional de Fabricantes de Ladrillo y Materiales de Construcción",
            "website": "https://anafalco.com.co/"
        },
        {
            "id": "b002",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b002.png",
            "name": "SH'MA CAPITAL - FONDO SAMAN",
            "category": 16,
            "description": "Gestores financieros de activos no tradicionales",
            "website": "https://shmacapital.com/"
        },
        {
            "id": "b003",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b003.png",
            "name": "MASIVO CAPITAL SAS (EN REORGANIZACIÓN)",
            "category": 19,
            "description": "Transportadora de pasajeros en servicio público",
            "website": "https://masivocapital.co/"
        },
        {
            "id": "b004",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b004.png",
            "name": "BANCO DE BOGOTÁ",
            "category": 16,
            "description": "Pertenece al Grupo Aval, conglomerado financiero más grande de Colombia",
            "website": "https://www.bancodebogota.com/wps/portal/banco-de-bogota/bogota/empresas"
        },
        {
            "id": "b005",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b005.png",
            "name": "GRUPO ÉXITO",
            "category": 20,
            "description": "Organización de ventas en el sector retail. Presentes en Colombia con Grupo Éxito, en Uruguay con los Grupos Disco y Devoto y en Argentina con Libertad.",
            "website": "https://www.grupoexito.com.co/es"
        },
        {
            "id": "b006",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b006.png",
            "name": "TAXIS LIBRES",
            "category": 19,
            "description": "Servicio de transporte taxi",
            "website": "https://www.taxislibres.com.co/"
        },
        {
            "id": "b007",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b007.png",
            "name": "PROBOGOTÁ REGION",
            "category": 12,
            "description": "Fundación sin ánimo de lucro, privada e independiente que busca el bien común e incidir en la formulación de políticas públicas de largo plazo que contribuyan a hacer de Bogotá y la región un mejor lugar para vivir",
            "website": "https://www.probogota.org/"
        },
        {
            "id": "b008",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b008.png",
            "name": "ASAMBLEA NACIONAL DE TRANSPORTE",
            "category": 2,
            "description": "Transporte de carga",
            "website": "https://www.facebook.com/AsambleaNacionaldelTransporteFan/"
        },
        {
            "id": "b009",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b009.png",
            "name": "UNIVERSIDAD DE LA SALLE",
            "category": 1,
            "description": "Universidad Privada Bogotá",
            "website": "https://www.lasalle.edu.co/"
        },
        {
            "id": "b010",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b010.png",
            "name": "MALLPLAZA",
            "category": 20,
            "description": "Centro comercial",
            "website": "https://www.mallplaza.com/co"
        },
        {
            "id": "b011",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b011.png",
            "name": "GRUPO DE ENERGÍA DE BOGOTÁ (GEB)",
            "category": 7,
            "description": "Compañía colombiana de generación, transmisión y distribución de energía eléctrica, y transporte y distribución de gas natural.",
            "website": "https://www.grupoenergiabogota.com/"
        },
        {
            "id": "b012",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b012.png",
            "name": "ASOCIACIÓN NACIONAL DE INDUSTRIALES (ANDI)",
            "category": 2,
            "description": "La Asociación Nacional de Empresarios de Colombia (ANDI), es una agremiación sin ánimo de lucro, que tiene como objetivo difundir y propi​ciar los principios políticos, económicos y sociales de un sano sistema de libre empresa",
            "website": "https://www.andi.com.co/"
        },
        {
            "id": "b013",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b013.png",
            "name": "ASOCIACIÓN VOLQUETERA DE BOGOTÁ Y CUNDINAMARCA (ASOVOLBOCUN)",
            "category": 2,
            "description": "Asociación con el fin de apoyar, unir y ayudar a todos los conductores y dueños de volquetas, para hacer valer sus derechos con el servicio que prestan",
            "website": "https://www.facebook.com/Asovolbocun"
        },
        {
            "id": "b014",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b014.png",
            "name": "GENERAL MOTORS (GM) - COLMOTORES SA",
            "category": 14,
            "description": "Fabricante / Ensamblador de vehículos en Colombia hasta abril del 2024 cuando se liquida la empresa, ahora cambia a solamente comercializadora (posiblemente de Chevrolet)",
            "website": "http://www.chevrolet.com.co/"
        },
        {
            "id": "b015",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b015.png",
            "name": "CDA AUTOMAS LTDA",
            "category": 13,
            "description": "Inspección técnica vehicular",
            "website": "https://automas.com.co/"
        },
        {
            "id": "b016",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b016.png",
            "name": "AXXOM SAS",
            "category": 3,
            "description": "Empresa Colombo-Alemana especializada en la importación, distribución y comercialización de productos de Ingeniería Ambiental y de Seguridad Vial",
            "website": "https://axxom-sas.com/"
        },
        {
            "id": "b017",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b017.png",
            "name": "CETEC",
            "category": "",
            "description": "NO ENCUENTRO INFO",
            "website": "NO ENCUENTRO"
        },
        {
            "id": "b018",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b018.png",
            "name": "SOCIEDAD CONCESIONARIA OPERADORA AEROPORTUARIA INTERNACIONAL SA - OPAIN (AEROPUERTO INTERNACIONAL EL DORADO)",
            "category": 5,
            "description": "Aeropuerto internacional",
            "website": "https://www.opain.co/"
        },
        {
            "id": "b019",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b019.png",
            "name": "NGV POWERTRAIN SRL",
            "category": 14,
            "description": "Fabricantes de motores alimentados con gas natural (GNC, GNL), biocombustibles (biometano, bioetanol, etc.) y electro-combustibles (hidrógeno, e-metanol, etc.), incluidos los eléctricos e híbridos",
            "website": "https://ngvpowertrain.com/"
        },
        {
            "id": "b020",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b020.png",
            "name": "INDUSTRIA NACIONAL DE GASEOSAS SA (COCA-COLA FEMSA)",
            "category": 14,
            "description": "Fabricante de bebida gasesosa, líder embotellador y comercializador de bebidas multicategoría",
            "website": "https://coca-colafemsa.com/"
        },
        {
            "id": "b021",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b021.png",
            "name": "GRUPO LOGISTICO TCC",
            "category": 4,
            "description": "Soluciones de transporte para la cadena de abastecimiento de los clientes en diferentes sectores",
            "website": "https://tcc.com.co/"
        },
        {
            "id": "b022",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b022.png",
            "name": "PFIZER",
            "category": 14,
            "description": "Empresa farmacéutica",
            "website": "https://www.pfizer.com.co/"
        },
        {
            "id": "b023",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b023.png",
            "name": "COORDINADORA MERCANTIL",
            "category": 4,
            "description": "Mensajería y distribución de ultima milla",
            "website": "https://coordinadora.com/"
        },
        {
            "id": "b025",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b025.png",
            "name": "VOITH TURBO COLOMBIA SAS",
            "category": 14,
            "description": "La división Voith Turbo forma parte del Grupo Voith, se dedica al desarrollo de tecnología de control inteligente, sistemas y servicios personalizados para diversas industrias como petróleo y gas, energía, minería, ingeniería mecánica, tecnología naval, vehículos comerciales, automoción y ferrocarril",
            "website": "https://voith.com/corp-en/about-us/markets-locations/brazil/locations-in-south-america.html?152845%5B%5D=4&152877%5B%5D=2"
        },
        {
            "id": "b026",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b026.png",
            "name": "CÁMARA DE COMERCIO DE BOGOTÁ (CCB)",
            "category": 2,
            "description": "Fomentar el desarrollo económico y social a través de servicios de registro, formación, asesoría y programas de apoyo empresarial, además de promover la innovación y el emprendimiento. La CCB también lleva a cabo funciones de registro mercantil, conciliación y arbitraje.",
            "website": "https://www.ccb.org.co/"
        },
        {
            "id": "b027",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b027.png",
            "name": "UNIVERSIDAD DE LA SABANA",
            "category": 1,
            "description": "Universidad privada en Bogotá",
            "website": "https://www.unisabana.edu.co/"
        },
        {
            "id": "b029",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/b029.png",
            "name": "TEAM FOODS COLOMBIA SA (PARTE DEL CONGLOMERADO ALIANZA TEAM)",
            "category": 14,
            "description": "Soluciones de alimentación, principalmente fabricación de aceites y grasas de origen vegetal y animal",
            "website": "https://www.alianzateam.com/team-foods/"
        },
        {
            "id": "c002",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/c002.png",
            "name": "SAG SERVICIOS DE INGENIERÍA",
            "category": 20,
            "description": "Distribuidora de productos y prestadora de servicios de integración tecnológica, productos relacionados a la ITS, promoción del transporte activo y su impacto medible en no emisiones de GEI",
            "website": "https://sagingenieria.com/index.php/soluciones-movilidad-sostenible/"
        },
        {
            "id": "c003",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/c003.png",
            "name": "OPEX SAS",
            "category": 20,
            "description": "Implementación de tecnologías para el almacenamiento de energía en vehículos eléctricos. Suministro de generadores de hidrógeno y sistemas de repostaje de Hidrógeno (H2), Piloto de combustible híbrido Diésel-H2",
            "website": "https://www.opex.com.co/"
        },
        {
            "id": "c004",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/c004.png",
            "name": "SALITRE PLAZA CENTRO COMERCIAL P.H",
            "category": 20,
            "description": "Venta de servicios y Administración de propiedad horizontal",
            "website": "https://www.salitreplaza.com.co/"
        },
        {
            "id": "c005",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/02-05-2025/C005-2024_Derco-Colombia_-_CONTRASTE.jpg",
            "name": "DERCO COLOMBIA SAS",
            "category": 14,
            "description": "Importador de vehículos y comercialización",
            "website": "https://derco.com.co/"
        },
        {
            "id": "c006",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/02-05-2025/C006-2024_vehicentro-logo-blanco_-_CONTRASTE.jpg",
            "name": "VEHICENTRO COLOMBIA",
            "category": 14,
            "description": "Importación, ensamble y comercialización de vehiculos para trasnporte de carga",
            "website": "www.vehicentro.com"
        },
        {
            "id": "c007",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/c007.png",
            "name": "SOLUCIONES INMEDIATAS",
            "category": 21,
            "description": "Gestión del talento humano, temporal de empleabilidad",
            "website": "https://solucionesinmediatas.com.co"
        },
        {
            "id": "c008",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/02-05-2025/C008-2025_logo-vivir-3_-_CONTRASTE.jpg",
            "name": "MAZDA DE COLOMBIA SAS",
            "category": 14,
            "description": "Importador y comercializador al mayor de vehículos y repuestos",
            "website": "https://www.mazda.com.co"
        },
        {
            "id": "c009",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/c009.png",
            "name": "ASOCIACIÓN COLOMBIANA DE GLP GASNOVA",
            "category": 2,
            "description": "Promoción del crecimiento del mercado del gas licuado de petróleo (GLP) y de sus usos complementarios y conexos",
            "website": "www.gasnova.co"
        },
        {
            "id": "c010",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/c010.png",
            "name": "ENERGIA VECTORIAL SAS",
            "category": 14,
            "description": "Electrificacion de vehiculos de combustion",
            "website": "www.evectorial.com"
        },
        {
            "id": "c011",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/c011.png",
            "name": "ASTARA COLOMBIA",
            "category": 3,
            "description": "Venta y alquiler de vehículos",
            "website": "https://astara.com.co/"
        },
        {
            "id": "c012",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/c012.png",
            "name": "DIVEMOTOR COLOMBIA SA",
            "category": 3,
            "description": "Importación y distribución / comercialización de vehiculos",
            "website": "https://divemotor.com.co/"
        },
        {
            "id": "c013",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/c013.png",
            "name": "AUTOGERMANA SAS",
            "category": 14,
            "description": "Fabricantes de vehículos y motos",
            "website": "www.autogermana.com.co"
        },
        {
            "id": "c014",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/c014.png",
            "name": "FENALCO BOGOTÁ",
            "category": 2,
            "description": "Agremiaciones y cooperación, empleabilidad y desarrollo de capacidades técnicas",
            "website": "www.fenalcobogota.com.co"
        },
        {
            "id": "c015",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/c015.png",
            "name": "BIO D SA",
            "category": 14,
            "description": "Producción y comercialización de Biodiesel Sostenible y derivados oleoquímicos de alto valor agregado, destinados a las industrias de combustibles, cuidado personal y del hogar, tanto a nivel nacional como internacional",
            "website": "https://www.biod.com.co/"
        },
        {
            "id": "c016",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/c016.png",
            "name": "FEDERACION DE TRICIMOVILES ECOLOGICOS DE COLOMBIA (FECOTRICOL)",
            "category": 2,
            "description": "Gestor para la legalización de la prestación del servicio público de pasajeros en tricimóviles ; Servicio de transporte ecológico en tricimovilismo",
            "website": "https://fecotricol.blogspot.com/"
        },
        {
            "id": "c017",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/c017.png",
            "name": "SISTEMAS AMBIENTALES HUMANOS SAS",
            "category": 10,
            "description": "Servicios de consultoría Eficiencia energética y Fuentes No Convencionales de Energía Renovable (FNCER)",
            "website": "https://www.sah.com.co/"
        },
        {
            "id": "c018",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/c018.png",
            "name": "FUNDACIÓN GIMNASIO MODERNO",
            "category": 1,
            "description": "Servicios de educación preescolar, educación básica (primaria [1° a 5°] y secundaria [6° a 10°]), y educación media (10° a 11°)",
            "website": "https://gimnasiomoderno.edu.co/"
        },
        {
            "id": "c019",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/02-05-2025/C019.jpg",
            "name": "EOLO MOTORS SAS",
            "category": 14,
            "website": "https://eolomotors.com/",
        },
        {
            "id": "f001",
            "image": "https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/f001.png",
            "name": "EMPRESA DE RENOVACIÓN Y DESARROLLO URBANO DE BOGOTÁ (RENOBO, ANTES ERU)",
            "category": 9,
            "description": "Gestión y promoción de proyectos de renovación urbana en Bogotá DC",
            "website": "https://renobo.com.co/"
        }
    ]

    function limpiarFiltro() {
        document.getElementById('sentence').value = '';
        document.getElementById('category').value = 0;
        // filtrarAliados();
        cargaPage(0);

    }


    function filtrarAliados() {

        const category = document.getElementById('category').value;
        const sentence = document.getElementById('sentence').value;
        const cards = document.querySelector('.set-cards');
        cards.innerHTML = '';

        length = aliados.length;
        maxlength = 12;
        pages = parseInt(length / maxlength);




        aliados.forEach(aliado => {
            if (category == 0 || aliado.category == category) {
                if (sentence == '' || aliado.name.toLowerCase().includes(sentence.toLowerCase())) {
                    const template = document.querySelector('template');
                    const clone = template.content.cloneNode(true);
                    clone.querySelector('.title-1').textContent = aliado.name;
                    clone.querySelector('.imagen img').src = aliado.image;
                    // clone.querySelector('.description p').textContent = aliado.description;
                    // clone.querySelector('.contact dl dd').textContent = aliado.contact;
                    clone.querySelector('.website a').href = aliado.website;
                    // clone.querySelector('.website a').textContent = aliado.website;
                    cards.appendChild(clone);
                }
            }
        });

    }

    function cargaPage(page) {

        const category = document.getElementById('category').value;
        const sentence = document.getElementById('sentence').value;
        const cards = document.querySelector('.set-cards');
        cards.innerHTML = '';

        length = aliados.length;
        maxlength = 12;
        pages = parseInt(length / maxlength);

        for (let i = 0; i <= pages - 1; i++) {
            let single = document.createElement('div');
            single.classList.add('page');
            single.classList.add('page-' + i);
            cards.appendChild(single);
        }

        for (let j = 0; j < maxlength; j++) {
            let index = page * maxlength + j;
            if (index >= length) {
                break;
            }
            const aliado = aliados[index];
            if (category == 0 || aliado.category == category) {
                if (sentence == '' || aliado.name.toLowerCase().includes(sentence.toLowerCase())) {
                    const template = document.querySelector('template');
                    const clone = template.content.cloneNode(true);
                    clone.querySelector('.title-1').textContent = aliado.name;
                    clone.querySelector('.imagen img').src = 'https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/28-03-2025/' + aliado.id + '.png';
                    // clone.querySelector('.description p').textContent = aliado.description;
                    // clone.querySelector('.contact dl dd').textContent = aliado.contact;
                    clone.querySelector('.website a').href = aliado.website;
                    // clone.querySelector('.website a').textContent = aliado.website;
                    document.querySelector('.page-' + page).appendChild(clone);
                }
            }
        }

        document.querySelectorAll('.page').forEach((element, index) => {
            element.classList.remove('active');
            if (index == page) {
                element.classList.add('active');
            }
        });


    }



    document.getElementById('category').addEventListener('change', filtrarAliados);

    document.getElementById('sentence').addEventListener('input', filtrarAliados);

    cargaPage(0);
</script>

