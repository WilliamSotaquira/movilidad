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
            padding: 14px 4px;
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
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/solucion">¿Qué solución proponemos?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/metas">¿Cuáles son nuestras metas?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/tecnologias">¿Cuáles son las tecnologías?</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/mitos">Verdades y mitos</a></li>
                    <li><a href="https://www.movilidadbogota.gov.co/web/cero_y_bajas_emisiones/recursos">Recursos</a></li>
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
            padding: 32px 0;
            font-family: 'Montserrat', sans-serif;
        }

        .aliados .cpnt-1 .resumen {
            display: flex;
            flex-wrap: nowrap;
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

        .aliados .cpnt-1 .resumen img{
            padding: 16px;
            max-width: 230px;
        }

        .aliados .cpnt-1 .resumen .text{
            @media(min-width:768px){
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
                <p class="paragraph ph-1">Destacamos con alegría a los miembros de la Red de Movilidad de Cero y Bajas Emisiones (RCBE), quienes lideran el cambio hacia un transporte más limpio y sostenible. Aquí podrás explorar su sector y acceder directamente a sus sitios web, fomentando conexiones y oportunidades de colaboración.</p>
                <p class="paragraph ph-1">Próximamente, este espacio incluirá actualizaciones sobre sus avances en compromisos por las cero y bajas emisiones, transiciones tecnológicas y acciones innovadoras en la cadena de valor. Esta visibilidad no solo promueve sus logros y les permite compartirlos con sus propias redes sociales y laborales, sino que también inspira a nuevos actores a sumarse a esta red empresarial promovida por la Secretaría Distrital de Movilidad (SDM) y la Política Pública de Movilidad Motorizada de Cero y Bajas Emisiones (PCBE).</p>
                <p class="paragraph ph-1">Si tu organización quiere ser parte de este movimiento transformador, <a href="https://forms.gle/19McR5Yo4C29hJMm7" target="_blank" rel="noopener noreferrer"><b>haz clic aquí</b></a> para unirte y contribuir al futuro de la movilidad sostenible de la región.</p>
                <p class="paragraph ph-1"><b>¡Forma parte del cambio y potencia tus resultados colaborando con otros actores clave!</b></p>
            </div>

        </div>
    </div>

    <style>
        .cpnt-2 {
            padding: 32px 0;
            font-family: 'Montserrat', sans-serif;
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
            margin: auto;
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
                    <img class="img-responsive w-100" src="" onerror="this.onerror=null;this.src='https://placehold.co/150x100?text=Logo+aliado'" alt="Logo">
                </div>
                <div class="description">
                    <p class="paragraph ph-1">Estaciones de carga y parqueaderos de bicicletas</p>
                </div>
                <div class="contact">
                    <dl>
                        <dt>Contacto</dt>
                        <dd>Calle 14 # 43e-25 Manila, Medellin</dd>
                        <dd>Carrera 37 # 8a-130 Via Primavera, Medellín, Antioquia</dd>
                    </dl>
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
                visibility: hidden;
                position: absolute;
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
                padding: 16px;

            }
        </style>

        <div class="set-cards">

        </div>

    </div>

</div>
<!-- Fin Set -->

<script>
    const aliados = [{
            "id": "a001",
            "name": "GRUPO EMPRESARIAL O&C SAS",
            "category": 5,
            "description": "Estaciones de carga y parqueaderos de bicicletas",
            "contact": "Calle 14 # 43e-25 Manila, Medellin ; Carrera 37 # 8a-130 Via Primavera, Medellín, Antioquia",
            "website": "https://oasisgroup.online/"
        },
        {

            "id": "a002",
            "name": "RENTING COLOMBIA SAS",
            "category": 20,
            "description": "Alquiler de vehículos",
            "contact": "Carrera 52 # 14-30, Medellín, Antioquia",
            "website": "https://www.rentingcolombia.com/"
        },
        {
            "id": "a003",
            "name": "DEFENCARGA",
            "category": 11,
            "description": "Logística, seguridad",
            "contact": "Calle 32 # 80a - 94, Medellín",
            "website": "https://www.defencarga.org.co/"
        },
        {
            "id": "a004",
            "name": "RENAULT SOFASA",
            "category": 14,
            "description": "Fabricantes y comercializadores de vehículos.\nAlquiler de vehículos eléctricos.",
            "contact": "",
            "website": "https://www.renault.com.co/"
        },
        {
            "id": "a005",
            "name": "X-CARGO",
            "category": 4,
            "description": "Distribución de ultima milla y mensajería",
            "contact": "Carrera 28b # 78-77 Bogotá; Carrera 51 Calle 6 Sur-22 Medellín ; Carrera 20 # 61–07/09 piso 3 Bucaramanga ; Calle 71 # 27–85 Barranquilla",
            "website": "https://x-cargo.co/"
        },
        {
            "id": "a006",
            "name": "EVOLECTRIC INCORPORATED",
            "category": 4,
            "description": "Distribución y transición (retrofit) de flota a EV",
            "contact": "2121 E Paulhan St., Rancho Dominguez, CA 90220 ; 2330 E Artesia Blvd., Long Beach, CA 90805 ; Avenida Calle 26 # 92-32 Bogotá, Colombia",
            "website": "https://evolectricnow.com/"
        },
        {
            "id": "a007",
            "name": "LOLA TE MUEVE SAS",
            "category": 4,
            "description": "Distribución de ultima milla, venta y alquiler de bicicletas eléctricas de carga y triciclos eléctricos de carga",
            "contact": "Carrera 44 # 17 sur - 70, apto 903, Medellín",
            "website": "https://lola.com.co/"
        },
        {
            "id": "a008",
            "name": "BANCO DAVIVIENDA SA",
            "category": 16,
            "description": "Banco, créditos",
            "contact": "Oficina Corporativa y Empresarial C.C.I. Carrera 13 # 26-15, Bogotá ; Oficina Corporativa y Empresarial Zona Industrial Calle 13 # 65-21 Local 32 CC. Zona IN, Bogotá ; Oficina Corporativa y Empresarial Barranquilla Calle 82 # 55-55 Oficina 201 ; Oficina Corporativa y Empresarial Cali Carrera  4 # 12 -41 Local 115 ; Oficina Corporativa y Empresarial Medellín Carrera 43a # 1 s - 192 Piso 2",
            "website": "https://sostenibilidad.davivienda.com/ambiental.html"
        },
        {
            "id": "a009",
            "name": "INSEPET SAS",
            "category": 20,
            "description": "Estaciones de servicio de combustible",
            "contact": "Carrera 90 # 17b-81 Bodega 20, Bogotá",
            "website": "https://insepet.com/"
        },
        {
            "id": "a010",
            "name": "OPERACIONES NACIONALES DE MERCADEO LTDA (SOLISTICA)",
            "category": 11,
            "description": "Gestión del transporte, Gestión de almacenamiento, Mantenimiento vehicular",
            "contact": "Ave. Gral. Anaya 601 Pte. , Col. Bella Vista, C.P. 64410 , Monterrey, N.L. México ; SÃO PAULO Av. Antônio Frederico Ozanan, 6200 – Vila Rio Branco, Jundiaí – SP, 13215-276, Brasil ; Solistica Carrera 69 # 21 – 23, Zona Industrial, Montevideo, Bogotá, Colombia ; EUA 6999 Mcpherson Road Suite 105 of 12, Laredo, TX 78041, Estados Unidos ; Km 178 CA2 San Sebastián – Retalhuleu, Guatemala ; Tumba Muerto, Zona Industrial San Cristobal, Panamá",
            "website": "https://solistica.com/"
        },
        {
            "id": "a011",
            "name": "ENEL CODENSA",
            "category": 7,
            "description": "Generación eléctrica y distribución de electricidad y gas ; Desarrollo de productos innovadores y soluciones digitales en sectores: ciudades, hogares, industrias y movilidad eléctrica",
            "contact": "Carrera 13a No 93 66 piso 4 Bogotá - Cundinamarca",
            "website": "https://www.enelx.com/co/es/ciudades/movilidad-electrica/transporte-publico-electrico"
        },
        {
            "id": "a012",
            "name": "NAVISAF - GEOTAB INC",
            "category": 11,
            "description": "Recopilación de datos y analítca, logística, avisos de disponibilidad de flota, gestión del riesgo ; rastreo GPS de flota ; control de velocidad",
            "contact": "Avenida 7 Norte # 26n – 35, Santiago de Cali, Valle del Cauca, Colombia",
            "website": "https://navisaf.com/"
        },
        {
            "id": "a013",
            "name": "PIOT SAS",
            "category": 4,
            "description": "Mensajería y distribución de ultima milla",
            "contact": "Transversal 22a # 61b-04 piso 1, Bogotá, Colombia",
            "website": "https://www.piot.com.co/"
        },
        {
            "id": "a014",
            "name": "MOTORYSA BIC",
            "category": 3,
            "description": "Importación y dstribución de vehículos",
            "contact": "",
            "website": "https://motorysa.com/desarrollo-sostenible"
        },
        {
            "id": "a015",
            "name": "HELIOX ENERGY",
            "category": 5,
            "description": "Soluciones de carga rápida, al servicio de flotas de autobuses y camiones eléctricos, vehículos de pasajeros, marinos, portuarios y mineros, entre otros",
            "contact": "De Run 4315, 5503 LP Veldhoven, Países Bajos ; 165 Ottley Drive NE Suite 205, Atlanta, GA 30324, USA ; Florianstraße 15-21, 44139, Dortmund, Alemania",
            "website": "https://es.heliox-energy.com/"
        },
        {
            "id": "a016",
            "name": "SEGUROS SURA COLOMBIA",
            "category": 15,
            "description": "Gestor de inversiones que busca la rentabilidad sostenible",
            "contact": "Carrera 43a #5a-113, Medellín, Antioquia, Colombia",
            "website": "https://www.gruposura.com/sostenibilidad/"
        },
        {
            "id": "a017",
            "name": "ALIADAS CARGO",
            "category": 11,
            "description": "Servicios de transporte de carga",
            "contact": "Calle 21a #70-11 Bogotá, Colombia",
            "website": "https://aliadascargo.com/"
        },
        {
            "id": "a018",
            "name": "AKT MOTOS",
            "category": 20,
            "description": "Ensambley venta de motocicletas con materiales provenientes de China, Brasil, Japón, Tailandia, Taiwán y Colombia",
            "contact": "",
            "website": "https://www.aktmotos.com/"
        },
        {
            "id": "a019",
            "name": "AUTECO MOBILITY SAS",
            "category": 20,
            "description": "Ensambladora y venta de motocicletas",
            "contact": "",
            "website": "https://www.auteco.com.co/"
        },
        {
            "id": "a020",
            "name": "AKUAI ENERGY SAS BIC",
            "category": 5,
            "description": "Instalar cargadores para vehículos eléctricos e híbridos enchufables en tu hogar o tu empresa ; Implementar proyectos de movilidad eléctrica ; Estructurar proyectos de eficiencia energética para acceder a beneficios tributarios",
            "contact": "",
            "website": "https://akuai.co/"
        },
        {
            "id": "a021",
            "name": "ABB COLOMBIA LTDA",
            "category": 3,
            "description": "Productos para la industria eléctrica, proveedor de variadores de velocidad y motores, sistemas de control industrial que permiten la automatización",
            "contact": "",
            "website": "https://new.abb.com/south-america/sobre-nosotros/quienes-somos/oficinas-sudamerica/colombia"
        },
        {
            "id": "a022",
            "name": "VEMO",
            "category": 5,
            "description": "Vehículos eléctricos; Infraestructura de recarga para empresas; Tecnología e inteligencia de datos para gestión de flotas",
            "contact": "México",
            "website": "https://vemovilidad.com/"
        },
        {
            "id": "a023",
            "name": "AUTOMOTRIZ ESCANDINAVA SAS  (VOLVO)",
            "category": 20,
            "description": "Venta de vehículos",
            "contact": "",
            "website": "https://www.volvocars.com/co/"
        },
        {
            "id": "a024",
            "name": "NAVITRANS SAS",
            "category": 20,
            "description": "Venta de vehículos y ensamble local",
            "contact": "",
            "website": "https://www.navitrans.com.co/"
        },
        {
            "id": "a025",
            "name": "CIRCUTOR SA (FILIAL COLOMBIA)",
            "category": 3,
            "description": "Medida y control ; Metering ; Protección y control ; Compensación de energía reactiva y filtrado de armónicos ; Recarga inteligente para vehículos eléctricos ; Energías renovables ; Software ; IoT Industrial y Automatización",
            "contact": "Vial Sant Jordi s/n – 08232, Viladecavalls, Barcelona (España)",
            "website": "https://circutor.com/"
        },
        {
            "id": "a026",
            "name": "TRACTEC",
            "category": 14,
            "description": "Fabricante de toda clase de remolques y semirremolques para las diferentes industrias",
            "contact": "Kilómetro 1 vía Paipa, Paipa - Boyacá, Colombia",
            "website": ""
        },
        {
            "id": "a027",
            "name": "ORGANIZACIÓN TERPEL SA",
            "category": 20,
            "description": "Estaciones de servicio de combustible (gasolineras)",
            "contact": "Carrera 7 # 75-51, Bogotá - Colombia",
            "website": "https://www.terpel.com/nueva-movilidad-y-energias"
        },
        {
            "id": "a028",
            "name": "ASOCIACIÓN NACIONAL DE MOVILIDAD SOSTENIBLE - ANDEMOS",
            "category": 2,
            "description": "Agremiación con el objeto de defender la libertad de comercio, las buenas prácticas y los acuerdos comerciales para asegurar la competitividad del sector automotor afín a la movilidad sostenible​",
            "contact": "Carrera 7 # 127 B - 31, Piso 2, Bogotá - Colombia",
            "website": "https://www.andemos.org/inicio"
        },
        {
            "id": "a029",
            "name": "CITYBEST",
            "category": 18,
            "description": "Aplicación que proveerá viajes más ecoamigables, gracias a que la flota de automóviles serán carros que funcionan a gas, eléctricos e híbridos",
            "contact": "Calle 118 # 19-52, Bogotá, Colombia",
            "website": "https://www.instagram.com/citybestapp/"
        },
        {
            "id": "a030",
            "name": "DEEPSEA DEVELOPMENTS SAS",
            "category": 17,
            "description": "Internet de las cosas (IoT)",
            "contact": "974 Commercial Street, Suite 108, Palo Alto, CA 94303, USA\n\nAvenida 5 norte #37A-74, Cali, Valle del cauca 760003, CO",
            "website": "https://www.deepseadev.com/en/"
        },
        {
            "id": "a031",
            "name": "EMASA COLOMBIA",
            "category": 5,
            "description": "Soluciones Electro Mecánicas ; Soporte para montaje e instalación ; Construcción, montaje y puesta en marcha de equipos ; Planificación de rutinas de mantenimiento ; Diseño final de soluciones ; Administración de la Garantía ; Análisis de factibilidad de la solución",
            "contact": "Sede administrativa, Carrera 12 # 30A Ibagué, Tolima, Colombia ; Sede sur, Carrera 7 # 16-48/54, Girardot, Cundinamarca, Colombia",
            "website": "https://emasa.com.co/"
        },
        {
            "id": "b001",
            "name": "ANAFALCO",
            "category": 2,
            "description": "Asociación Nacional de Fabricantes de Ladrillo y Materiales de Construcción",
            "contact": "Km 3 Vía Mochuelo, Ciudad Bolívar, Bogotá",
            "website": "https://anafalco.com.co/"
        },
        {
            "id": "b002",
            "name": "SH'MA CAPITAL - FONDO SAMAN",
            "category": 16,
            "description": "Gestores financieros de activos no tradicionales",
            "contact": "Carrera 7 # 71-52, Torre A Of. 804, Bogotá, Colombia",
            "website": "https://shmacapital.com/"
        },
        {
            "id": "b003",
            "name": "MASIVO CAPITAL",
            "category": 19,
            "description": "Transportadora de pasajeros en servicio público",
            "contact": "Calle 24a # 59-42, Torre 3 Argos Oficina 504, Bogotá Colombia",
            "website": "https://masivocapital.co/"
        },
        {
            "id": "b004",
            "name": "BANCO DE BOGOTÁ",
            "category": 16,
            "description": "Pertenece al Grupo Aval, conglomerado financiero más grande de Colombia",
            "contact": "",
            "website": "https://www.bancodebogota.com/wps/portal/banco-de-bogota/bogota/empresas"
        },
        {
            "id": "b005",
            "name": "GRUPO ÉXITO",
            "category": 20,
            "description": "Organización de ventas en el sector retail. Presentes en Colombia con Grupo Éxito, en Uruguay con los Grupos Disco y Devoto y en Argentina con Libertad.",
            "contact": "Sede principal Antioquia, Carrera 48 # 32 B Sur - 139, Avenida Las Vegas, Envigado ; Sede administrativa Bogotá Carrera 59 A # 79 - 30 Éxito Calle 80 ; Fundacion Éxito Carrera 48 # 32b sur 139, Envigado - Antioquia",
            "website": "https://www.grupoexito.com.co/es"
        },
        {
            "id": "b006",
            "name": "TAXIS LIBRES",
            "category": 19,
            "description": "Servicio de transporte taxi",
            "contact": "Avenida de las Américas # 50-15, Centro Comercial Carrera, Bogotá",
            "website": "https://www.taxislibres.com.co/"
        },
        {
            "id": "b007",
            "name": "PROBOGOTÁ REGION",
            "category": 12,
            "description": "Fundación sin ánimo de lucro, privada e independiente que busca el bien común e incidir en la formulación de políticas públicas de largo plazo que contribuyan a hacer de Bogotá y la región un mejor lugar para vivir",
            "contact": "Carrera 9 # 77-67 Oficina 904, Bogotá DC",
            "website": "https://www.probogota.org/"
        },
        {
            "id": "b008",
            "name": "ASAMBLEA NACIONAL DE TRANSPORTE",
            "category": 2,
            "description": "Transporte de carga",
            "contact": "",
            "website": "https://www.facebook.com/AsambleaNacionaldelTransporteFan/"
        },
        {
            "id": "b009",
            "name": "UNIVERSIDAD DE LA SALLE",
            "category": 1,
            "description": "Universidad Privada Bogotá",
            "contact": "Carrera 2 # 10-70, Bogotá",
            "website": "https://www.lasalle.edu.co/"
        },
        {
            "id": "b010",
            "name": "MALLPLAZA",
            "category": 20,
            "description": "Centro comercial",
            "contact": "Avenida Carrera 30 # 19, Los Mártires, Bogotá, Colombia",
            "website": "https://www.mallplaza.com/co"
        },
        {
            "id": "b011",
            "name": "GRUPO DE ENERGIA DE BOGOTÁ",
            "category": 7,
            "description": "Compañía colombiana de generación, transmisión y distribución de energía eléctrica, y transporte y distribución de gas natural.",
            "contact": "Transmisión Of. Principal Carrera 9 # 73-44 Piso 6, Bogotá",
            "website": "https://www.grupoenergiabogota.com/"
        },
        {
            "id": "b012",
            "name": "ASOCIACIÓN NACIONAL DE INDUSTRIALES (ANDI)",
            "category": 2,
            "description": "La Asociación Nacional de Empresarios de Colombia (ANDI), es una agremiación sin ánimo de lucro, que tiene como objetivo difundir y propi​ciar los principios políticos, económicos y sociales de un sano sistema de libre empresa",
            "contact": "Calle 73 # 8 – 13 Piso 7 Torre A. Bogotá DC",
            "website": "https://www.andi.com.co/"
        },
        {
            "id": "b013",
            "name": "ASOCIACIÓN VOLQUETERA DE BOGOTÁ Y CUNDINAMARCA (ASOVOLBOCUN)",
            "category": 2,
            "description": "Asociación con el fin de apoyar, unir y ayudar a todos los conductores y dueños de volquetas, para hacer valer sus derechos con el servicio que prestan",
            "contact": "Carrera 72b # 55-53, Bogotá DC, Colombia",
            "website": "https://www.facebook.com/Asovolbocun"
        },
        {
            "id": "b014",
            "name": "GENERAL MOTORS SA - GM COLMOTORES",
            "category": 14,
            "description": "Fabricante / Ensamblador de vehículos en Colombia hasta abril del 2024 cuando se liquida la empresa, ahora cambia a solamente comercializadora (posiblemente de Chevrolet)",
            "contact": "Calle 56 A sur # 36 A - 09, Bogotá DC",
            "website": "http://www.chevrolet.com.co/"
        },
        {
            "id": "b015",
            "name": "CDA AUTOMAS LTDA",
            "category": 13,
            "description": "Inspección técnica vehicular",
            "contact": "Carrera 46 # 134-45, Bogotá DC",
            "website": "https://automas.com.co/"
        },
        {
            "id": "b016",
            "name": "AXXOM SAS",
            "category": 3,
            "description": "Empresa Colombo-Alemana especializada en la importación, distribución y comercialización de productos de Ingeniería Ambiental y de Seguridad Vial",
            "contact": "",
            "website": "https://axxom-sas.com/"
        },
        {
            "id": "b017",
            "name": "CETEC",
            "category": "#N/A",
            "description": "NO ENCUENTRO INFO",
            "contact": "",
            "website": "NO ENCUENTRO"
        },
        {
            "id": "b018",
            "name": "SOCIEDAD CONCESIONARIA OPERADORA AEROPORTUARIA INTERNACIONAL SA - OPAIN (AEROPUERTO INTERNACIONAL EL DORADO)",
            "category": 5,
            "description": "Aeropuerto internacional",
            "contact": "Avenida El Dorado # 103-09, Bogotá",
            "website": "https://www.opain.co/"
        },
        {
            "id": "b019",
            "name": "NGV POWERTRAIN SRL -ITALIA",
            "category": 14,
            "description": "Fabricantes de motores alimentados con gas natural (GNC, GNL), biocombustibles (biometano, bioetanol, etc.) y electro-combustibles (hidrógeno, e-metanol, etc.), incluidos los eléctricos e híbridos",
            "contact": "Via Roald Amundsen, 1, 42122, Reggio Emilia, RE, IT",
            "website": "https://ngvpowertrain.com/"
        },
        {
            "id": "b020",
            "name": "COCA-COLA FEMSA",
            "category": 14,
            "description": "Fabricante de bebida gasesosa, líder embotellador y comercializador de bebidas multicategoría",
            "contact": "Mario Pani #100 Col. Santa Fe Cuajimalpa, Deleg.  Cuajimalpa, CP. 05348, México D.F.",
            "website": "https://coca-colafemsa.com/"
        },
        {
            "id": "b021",
            "name": "GRUPO LOGISTICO TCC",
            "category": 4,
            "description": "Soluciones de transporte para la cadena de abastecimiento de los clientes en diferentes sectores",
            "contact": "Carrera 64 # 67B - 35, Medellín, Colombia",
            "website": "https://tcc.com.co/"
        },
        {
            "id": "b022",
            "name": "PFIZER",
            "category": 14,
            "description": "Empresa farmacéutica",
            "contact": "Avenida Suba # 95-66",
            "website": "https://www.pfizer.com.co/"
        },
        {
            "id": "b023",
            "name": "COORDINADORA MERCANTIL",
            "category": 4,
            "description": "Mensajería y distribución de ultima milla",
            "contact": "Calle 13 # 68 D - 31, Bogotá DC",
            "website": "https://coordinadora.com/"
        },
        {
            "id": "b024",
            "name": "CHEVRON",
            "category": 6,
            "description": "Producción de crudo pesado, recuperación mejorada de petróleo, operaciones en aguas profundas, desarrollo de gas natural y proyectos de petróleo y gas de esquisto",
            "contact": "5001 Executive Pkwy, Suite 200, San Ramon, CA 94583 USA",
            "website": "https://www.chevron.com/worldwide/colombia"
        },
        {
            "id": "b025",
            "name": "VOITH TURBO COLOMBIA SAS",
            "category": 14,
            "description": "La división Voith Turbo forma parte del Grupo Voith, se dedica al desarrollo de tecnología de control inteligente, sistemas y servicios personalizados para diversas industrias como petróleo y gas, energía, minería, ingeniería mecánica, tecnología naval, vehículos comerciales, automoción y ferrocarril",
            "contact": "Calle 17 # 69-26 Centro Empresarial Montevideo, Bogotá DC",
            "website": "https://voith.com/corp-en/about-us/markets-locations/brazil/locations-in-south-america.html?152845%5B%5D=4&152877%5B%5D=2"
        },
        {
            "id": "b026",
            "name": "CÁMARA DE COMERCIO DE BOGOTÁ (CCB)",
            "category": 2,
            "description": "Fomentar el desarrollo económico y social a través de servicios de registro, formación, asesoría y programas de apoyo empresarial, además de promover la innovación y el emprendimiento. La CCB también lleva a cabo funciones de registro mercantil, conciliación y arbitraje.",
            "contact": "Avenida El Dorado # 68 D – 35, Bogotá, Colombia",
            "website": "https://www.ccb.org.co/"
        },
        {
            "id": "b027",
            "name": "UNIVERSIDAD DE LA SABANA",
            "category": 1,
            "description": "Universidad privada en Bogotá",
            "contact": "Campus del Puente del Común, Km. 7, Autopista Norte de Bogotá. Chía, Cundinamarca, Colombia",
            "website": "https://www.unisabana.edu.co/"
        },
        {
            "id": "b028",
            "name": "BIOMAX",
            "category": 20,
            "description": "Estaciones de servicio de combustible (gasolineras)",
            "contact": "Carrera 14 # 99-33, piso 9, Bogotá DC",
            "website": "https://www.biomax.co/"
        },
        {
            "id": "b029",
            "name": "TEAM FOODS COLOMBIA SA (PARTE DEL CONGLOMERADO ALIANZA TEAM)",
            "category": 14,
            "description": "Soluciones de alimentación, principalmente fabricación de aceites y grasas de origen vegetal y animal",
            "contact": "Calle 45 A Sur # 56-21, Bogotá DC",
            "website": "https://www.alianzateam.com/team-foods/"
        },
        {
            "id": "a007",
            "name": "LOLA TE MUEVE SAS",
            "category": 4,
            "description": "Distribución de ultima milla, venta y alquiler de bicicletas eléctricas de carga y triciclos eléctricos de carga",
            "contact": "Carrera 44 # 17 sur - 70, apto 903, Medellín",
            "website": "https://lola.com.co/"
        },
        {
            "id": "c001",
            "name": "SAG SERVICIOS DE INGENIERÍA",
            "category": 20,
            "description": "Distribuidora de productos y prestadora de servicios de integración tecnológica, una de sus líneas son productos relacionados a la ITS y medición de GEI",
            "contact": "Calle 127 # 14-54, oficina 703, Bogotá DC",
            "website": "http://sagingenieria.com/"
        },
        {
            "id": "c002",
            "name": "VOLTOP SAS",
            "category": 5,
            "description": "Generación de la cadena más grande de electrolineras y flota de EV para uso corporativo",
            "contact": "Carrera 15 # 80-90 piso 4, Bogotá",
            "website": "https://voltop.co/"
        },
        {
            "id": "c003",
            "name": "BATX",
            "category": 8,
            "description": "Reutilización de baterías de iones de litio recuperadas para darles un nuevo ciclo de vida en almacenamiento y respaldo energético",
            "contact": "",
            "website": "https://batx.co/"
        },
        {
            "id": "c004",
            "name": "SEGUROS BOLIVAR",
            "category": 15,
            "description": "Seguros",
            "contact": "",
            "website": "https://www.segurosbolivar.com/informes-de-sostenibilidad"
        },
        {
            "id": "c005",
            "name": "CENTRO COMERCIAL FLORMORADO",
            "category": 20,
            "description": "Centro comercial",
            "contact": "Carrera 7 # 116-50",
            "website": "https://flormorado.com/proyectos/realizados/oficinas-y-comercio/"
        },
        {
            "id": "c006",
            "name": "CODELCO - CORPORACIÓN NACIONAL DEL COBRE DE CHILE",
            "category": 6,
            "description": "Minería de cobre y uso de maquinaria amarilla, tienen buses de apsajeros dentro de la mina que fueron retrofiteados",
            "contact": "Alameda Libertador Bernardo O'Higgins 1449, Torre 2, piso 9, Santiago Downtown, Santiago, Chile",
            "website": "https://www.codelco.com/"
        },
        {
            "id": "c007",
            "name": "CALAC+ (PROGRAMA CLIIMA Y AIRE LIMPIO EN CIUDADES DE AMÉRICA LATINA)",
            "category": 12,
            "description": "Capactaciones y experiencias de éxito con reducción de emisiones. Financiación de Suiza",
            "contact": "",
            "website": "https://programacalac.com/"
        },
        {
            "id": "c008",
            "name": "GESOLTEC",
            "category": 8,
            "description": "Laboratorio de medición de factores ambientales, espacio de pruebas de nuevas tecnologías sostenibles, puente de conocimiento y networking con organizaciones extranjeras",
            "contact": "Calle 174a # 47-32, Bogotá DC",
            "website": "https://www.gesoltec.com/"
        },
        {
            "id": "c009",
            "name": "EOLO MOTORS",
            "category": 14,
            "description": "Fabricante de vehículo eléctrico local en Colombia, y comercialización de distintos tipos de vehículos eléctricos",
            "contact": "",
            "website": "https://eolomotors.com/"
        },
        {
            "id": "c010",
            "name": "GRUPO FAMILIA",
            "category": 14,
            "description": "Soluciones de cuidado, higiene y aseo",
            "contact": "Km 7.5 Vía Cajicá - Zipaquirá ; Calle 29 Norte #  6a-40, Edificio Carvajal piso 2, Cali ; Planta Carrera 50 # 8 sur – 117, Medellín ; Sede Central Km 5 Av. Las Palmas / Carrera 28 # 17-452, Edificio Cortezza, Medellín",
            "website": "https://www.grupofamilia.com/"
        },
        {
            "id": "c011",
            "name": "OPEX SAS",
            "category": 20,
            "description": "Implementación de tecnologías para el almacenamiento de energía en vehículos eléctricos. Suministro de generadores de hidrógeno y sistemas de repostaje de Hidrógeno (H2)",
            "contact": "Calle 9b Sur # 25-138, El Poblado, Medellín, Antioquia",
            "website": "https://www.opex.com.co/"
        },
        {
            "id": "c012",
            "name": "MAGMENT",
            "category": 5,
            "description": "Infraestructura de carga inductiva inalámbrica en vías",
            "contact": "Raiffeisenallee, 82041 Oberhaching, Alemania ; 5835 Osceola Ct, Bethesda, MD 20816, EE.UU.",
            "website": "https://www.magment.co/"
        },
        {
            "id": "c013",
            "name": "LIZARD MOTORS",
            "category": 14,
            "description": "Fabricante de vehículo eléctrico local en Colombia, y comercialización de distintos tipos de vehículos eléctricos",
            "contact": "",
            "website": "https://www.facebook.com/Lizardfuturo?mibextid=ZbWKwL"
        },
        {
            "id": "c014",
            "name": "SEGUROS MUNDIAL",
            "category": 15,
            "description": "Seguros",
            "contact": "",
            "website": "https://www.segurosmundial.com.co/"
        },
        {
            "id": "d001",
            "name": "PROGRAMA DE LAS NACIONES UNIDAS PARA EL MEDIO AMBIENTE (PNUMA / UNEP)",
            "category": 9,
            "description": "Responsable de coordinar las respuestas a los problemas ambientales dentro del sistema de las Naciones Unidas",
            "contact": "",
            "website": "https://www.unep.org/es"
        },
        {
            "id": "d002",
            "name": "GRUPO DE INVESTIGACIÓN EN MOVILIDAD SOSTENIBLE (GIMS) - UNIVERSIDAD NACIONAL DE COLOMBIA (UNAL)",
            "category": 10,
            "description": "Grupo de investigación registrado en CvLAC.",
            "contact": "",
            "website": "NO ENCUENTRO"
        },
        {
            "id": "d003",
            "name": "PROGRAMA DE INVESTIGACIÓN EN TRANSPORTE, MOVILIDAD Y TERRITORIO (PIT) - UNIVERSIDAD NACIONAL DE COLOMBIA (UNAL)",
            "category": 10,
            "description": "Grupo de investigación registrado en CvLAC.",
            "contact": "",
            "website": "https://ingenieria.bogota.unal.edu.co/pit/"
        },
        {
            "id": "d004",
            "name": "PABLO HERNÁNDEZ ARANGO",
            "category": 10,
            "description": "Gremio Doctoral Colombiano\nIngeniero Químico, PhD",
            "contact": "",
            "website": "PERSONA NATURAL"
        },
        {
            "id": "d005",
            "name": "LABORATORIO DE INNOVACIÓN PÚBLICA DE BOGOTÁ (IBOLAB)",
            "category": 9,
            "description": "Apoyo transvers a la innovación del estado",
            "contact": "Carrera 8 # 10-65, Palacio Municipal Tercer Piso, Bogotá",
            "website": "https://ibo.bogota.gov.co/"
        },
        {
            "id": "d006",
            "name": "UNIVERSIDAD ESCUELA DE ADMINSTRACIÓN DE NEGOCIOS (EAN)",
            "category": 1,
            "description": "Universidad privada",
            "contact": "Ean Legacy: Carrera 11 No. 78-47 Bogotá DC ; Fundadores: Calle 79 # 11 - 45 Bogotá DC ; Av. Chile: Calle 71 # 9 - 84 Bogotá DC",
            "website": "https://universidadean.edu.co/"
        },
        {
            "id": "d007",
            "name": "SOCIEDAD ALEMANA DE COOPERACIÓN INTERNACIONAL (GIZ, DEUTSCHE GESELLSCHAFT FÜR INTERNATIONALE ZUSAMMENARBEIT)",
            "category": 1,
            "description": "Empresa federal alemana (agencia del gobierno, entidad pública) que se dedica a la cooperación internacional para el desarrollo sostenible",
            "contact": "Calle 125 No.19-24, oficina 501 Bogotá ; Calle 125 No.19-24, oficina 702 Bogotá – Colombia ; Friedrich-Ebert-Allee 32 + 36 53113 Bonn ; Dag-Hammarskjöld-Weg 1-5 65760 Eschborn",
            "website": "https://www.giz.de/en/worldwide/29848.html"
        },
        {
            "id": "d008",
            "name": "INSTITUTO DE RECURSOS MUNDIALES (WRI, WORLD RESOURCES INSTITUTE)",
            "category": 12,
            "description": "Organización internacional sin fines de lucro que se dedica a encontrar soluciones prácticas a desafíos ambientales",
            "contact": "Calle 81 #11 - 08, Edificio 81-11, 5° Piso Bogotá. DC ; Belisario Domínguez #8 P.A., Col. Villa Coyoacán, México, D.F. 04000",
            "website": "https://es.wri.org/wri-colombia"
        },
        {
            "id": "d009",
            "name": "PROYECTO GIROZERO - UNIVERSIDAD DE LOS ANDES (UNIANDES)",
            "category": 1,
            "description": "Universidad privada",
            "contact": "Carrera 1 # 18a - 12 Bogotá DC",
            "website": "https://girozero.uniandes.edu.co/"
        },
        {
            "id": "d010",
            "name": "GRUPO DE INVESTIGACIÓN GENERGÉTICA - UNIVERSIDAD TECNOLÓGICA DE PEREIRA (UTP)",
            "category": 1,
            "description": "Universidad pública",
            "contact": "Carrera 27 # 10-02, Barrio Alamos, Pereira, Risaralda, Colombia",
            "website": "https://www.utp.edu.co/"
        },
        {
            "id": "e001",
            "name": "SECRETARÍA DE MOVILIDAD DE LA ALCALDÍA DE SOACHA",
            "category": 9,
            "description": "Formula, dirige y regula políticas de movilidad y el tránsito en Soacha",
            "contact": "Calle 13 # 7-30 Soacha - Cundinamarca",
            "website": "https://www.alcaldiasoacha.gov.co/SecretariayDependencias/Paginas/Movilidad.aspx"
        },
        {
            "id": "e002",
            "name": "SECRETARÍA DE TRÁNSITO Y TRANSPORTE DE LA ALCALDÍA DE FACATATIVÁ",
            "category": 9,
            "description": "Formula, dirige y regula políticas de movilidad y el tránsito en Facatativá",
            "contact": "Carrera 3 # 5-68 Parque Principal, Facatativá-Cundinamarca",
            "website": "https://www.facatativa-cundinamarca.gov.co/tema/secretaria-de-transito-y-transporte"
        },
        {
            "id": "e003",
            "name": "REGIÓN METROPOLITANA BOGOTÁ-CUNDINAMARCA (RMBC)",
            "category": 9,
            "description": "Facilita la coordinación entre Bogotá y Cundinamarca en temas de planeación, movilidad y medio ambiente, promoviendo políticas y proyectos de desarrollo regional",
            "contact": "Avenida Calle 26 #57-83, Edificio CEMSA Torre 8 / Piso 15, Bogotá DC",
            "website": "https://www.regionmetropolitana.gov.co/"
        },
        {
            "id": "e004",
            "name": "SECRETARÍA DISTRITAL DE AMBIENTE (SDA)",
            "category": 9,
            "description": "Formula, dirige y regula políticas ambientales en Bogotá DC",
            "contact": "Avenida Caracas # 54 - 38 Bogotá DC",
            "website": "https://www.ambientebogota.gov.co/"
        },
        {
            "id": "e005",
            "name": "JARDÍN BOTÁNICO DE BOGOTÁ (JBB)",
            "category": 9,
            "description": "Promoción y conservación de la biodiversidad y la educación ambiental en Bogotá DC, gestionando proyectos de investigación y desarrollo en flora y ecosistemas urbanos",
            "contact": "Avenida Calle 63 # 68-95 Bogotá, Colombia",
            "website": "https://jbb.gov.co/"
        },
        {
            "id": "e006",
            "name": "SECRETARÍA DISTRITAL DE PLANEACIÓN (SDP)",
            "category": 9,
            "description": "Formula, dirige y regula políticas de planificación y desarrollo de Bogotá DC, en temas de uso del suelo, crecimiento urbano y sostenibilidad",
            "contact": "Carrera 30 # 25-90, pisos 5 - 8 -13, Bogotá DC",
            "website": "https://www.sdp.gov.co/"
        },
        {
            "id": "e007",
            "name": "OPERADORA DISTRITAL DE TRANSPORTE (ODT)",
            "category": 9,
            "description": "Opera parte del sistema de transporte público terrestre colectivo en Bogotá DC",
            "contact": "Calle 59a sur # 76a-82, Bogotá DC",
            "website": "https://www.odt.gov.co/"
        },
        {
            "id": "e008",
            "name": "EMPRESA DE TRANSPORTE DEL TERCER MILENIO - TRANSMILENIO (TM)",
            "category": 9,
            "description": "Gestiona, administra y concesiona la operación del sistema de transporte terrestre colectivo SITP y TransMilenio en Bogotá, así como de los sitemas de cable",
            "contact": "Av. Eldorado # 69-76, Edificio Elemento, Torre 1, Piso 2, Bogotá DC",
            "website": "https://www.transmilenio.gov.co/"
        },
        {
            "id": "e009",
            "name": "UNIDAD ADMINISTRATIVA ESPECIAL DE REHABILITACIÓN Y MANTENIMIENTO VIAL (UAERMV)",
            "category": 9,
            "description": "Encargada de la rehabilitación y mantenimiento de la infraestructura vial en Bogotá DC",
            "contact": "Calle 22d # 120-40, Predio La Elvira, Bogotá DC",
            "website": "https://www.umv.gov.co/portal/"
        },
        {
            "id": "e010",
            "name": "INSTITUTO DE DESARROLLO URBANO (IDU)",
            "category": 9,
            "description": "Responsable del diseño, construcción y mantenimiento de la infraestructura de transporte urbano en Bogotá DC, contemplando vías, puentes y espacio público",
            "contact": "Calle 22 # 6-27, Bogotá DC",
            "website": "https://www.idu.gov.co/"
        },
        {
            "id": "e011",
            "name": "TERMINAL DE TRANSPORTE",
            "category": 9,
            "description": "Administra y opera las terminales de transporte intermunicipal de Bogotá DC, facilitando la conexión entre la ciudad y otras regiones",
            "contact": "Terminal Salitre (Central), Diagonal 23 # 69-11, Bogotá DC ; Terminal Satélite del Sur, Calle 57q #75f-82, Bogotá DC ; Terminal Satélite del Norte Calle 192 # 19-43, Bogotá DC",
            "website": "https://www.terminaldetransporte.gov.co/"
        },
        {
            "id": "e012",
            "name": "METRO DE BOGOTÁ (METRO)",
            "category": 9,
            "description": "Gestiona el desarrollo, construcción y futura operación del sistema de metro en Bogotá DC",
            "contact": "Carrera 9 # 76-49 Pisos 3-4, Bogotá DC",
            "website": "https://www.metrodebogota.gov.co/"
        },
        {
            "id": "e013",
            "name": "MINISTERIO DE TRANSPORTE (MINTRANSPORTE)",
            "category": 9,
            "description": "Formula, dirige y regula políticas para el sector transporte a nivel nacional en Colombia",
            "contact": "Calle 24 # 60-50, Piso 9 Centro Comercial Gran Estación II, Bogotá DC, Colombia",
            "website": "https://mintransporte.gov.co/"
        },
        {
            "id": "e014",
            "name": "MINISTERIO DE MINAS Y ENERGÍA (MINMINAS)",
            "category": 9,
            "description": "Formula, dirige y regula políticas para el sector de energía y minería a nivel nacional en Colombia, incluyendo el impulso de energías limpias",
            "contact": "Calle 43 # 57-31, Centro Administrativo Nacional (CAN), Bogotá DC, Colombia",
            "website": "https://www.minenergia.gov.co/es/"
        },
        {
            "id": "e015",
            "name": "UNIDAD DE PLANEACIÓN MINERO ENERGÉTICA (UPME)",
            "category": 9,
            "description": "Realiza la planificación energética en Colombia, evaluando necesidades energéticas y promoviendo proyectos de energía renovable y sostenibilidad en transporte.",
            "contact": "Sede principal Edificio Arrecife Av.Calle 26 # 69d-91, Torre 1, Piso 9, Bogotá DC  ; Sede Edificio Elemento Calle 26 # 69-76, Torre 1, Piso 14, Bogotá DC",
            "website": "https://www1.upme.gov.co/"
        },
        {
            "id": "e016",
            "name": "RED DE SEGURIDAD VIAL (RSV) - SDM",
            "category": 9,
            "description": "Red empresarial, parte de la Secretaría Distrital de Movilidad (SDM)",
            "contact": "Calle 13 # 37-35, Bogotá DC",
            "website": "https://redempresarial.movilidadbogota.gov.co/"
        },
        {
            "id": "e017",
            "name": "RED MUÉVETE MEJOR (RMM) - SDM",
            "category": 9,
            "description": "Red empresarial, parte de la Secretaría Distrital de Movilidad (SDM)",
            "contact": "Calle 13 # 37-35, Bogotá DC",
            "website": "https://www.movilidadbogota.gov.co/web/noticia/la_red_muevete_mejor_reconoce_el_apoyo_a_la_movilidad_sostenible_en_bogota"
        },
        {
            "id": "e018",
            "name": "RED LOGÍSTICA URBANA (RLU) - SDM",
            "category": 9,
            "description": "Red empresarial, parte de la Secretaría Distrital de Movilidad (SDM)",
            "contact": "Calle 13 # 37-35, Bogotá DC",
            "website": "https://www.movilidadbogota.gov.co/web/red_de_logistica_urbana_rlu"
        }
    ]

    function limpiarFiltro() {
        document.getElementById('category').value = 0;
        document.getElementById('sentence').value = '';
    }

    function filtrarAliados() {
        const category = document.getElementById('category').value;
        const sentence = document.getElementById('sentence').value;
        const cards = document.querySelector('.set-cards');
        cards.innerHTML = '';
        aliados.forEach(aliado => {
            if (category == 0 || aliado.category == category) {
                if (sentence == '' || aliado.name.toLowerCase().includes(sentence.toLowerCase())) {
                    const template = document.querySelector('template');
                    const clone = template.content.cloneNode(true);
                    clone.querySelector('.title-1').textContent = aliado.name;
                    clone.querySelector('.imagen img').src = 'https://www.movilidadbogota.gov.co/web/sites/default/files/cybe/26-12-2024/' + aliado.id + '.png';
                    clone.querySelector('.description p').textContent = aliado.description;
                    clone.querySelector('.contact dl dd').textContent = aliado.contact;
                    clone.querySelector('.website a').href = aliado.website;
                    // clone.querySelector('.website a').textContent = aliado.website;
                    cards.appendChild(clone);
                }
            }
        });
    }

    document.getElementById('category').addEventListener('change', filtrarAliados);

    document.getElementById('sentence').addEventListener('input', filtrarAliados);

    filtrarAliados();
</script>
