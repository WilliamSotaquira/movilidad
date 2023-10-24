@extends('welcome')
@section('title','diaSinCarro')
@section('contenido')

<!-- Set diaSinCarro -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<div class="set-wrapper diaSinCarro">

    <!-- Sección box header -->
    <div class="box-header">
        <div class="img img-1">
            <picture>
                <source media="(min-width: 768px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/path205.png">
                <img class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/path17315.png" alt="Logo - día sin carro y sin moto septiembre 2023">
            </picture>
        </div>
        <div class="imagen img-sub">
            <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/text9.png" alt="Movilizate de forma sostenoble" title="">
        </div>
    </div>
    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .set-wrapper .box-header {
            grid-area: box-header;
            background: rgb(5, 42, 10);
            /* background: linear-gradient(180deg, rgba(5, 42, 10, 1) 0%, rgba(67, 148, 3, 1) 100%); */
            background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/_jrg0152_002.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center bottom;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            margin-bottom: 4em;
        }

        @media(min-width:768px) {
            .set-wrapper .box-header {
                grid-template-columns: 1fr 1fr;
                height: 320px;
            }
        }

        .img-1 {
            display: flex;
            justify-content: center;
        }

        .box-header .img-1 img {
            max-height: 340px;
        }

        @media(min-width:768px) {
            .box-header .img-1 {
                height: 320px;
                flex-direction: column;
            }

            .box-header .img-1 img {
                max-height: 260px;
            }
        }

        .box-header .img-sub {
            /* padding: 6em; */
            height: 320px;
            max-width: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: auto;
        }
    </style>

    <!-- Sección box bloque-1 -->
    <div class="box box-bloque-1">
        <h3 class="title title-type-1 title-id-1">¿Por qué en septiembre se realiza el Día sin Carro y sin Moto?</h3>
        <p class="paragraph ph-type-1 ph-id-1">En el marco del Día Mundial sin Automóvil (septiembre 22), fecha en la que se promueve la movilidad sostenible y la reducción de la contaminación generada por los vehículos de motor de combustión interna.</p>
        <p class="paragraph ph-type-1 ph-id-2">Bogotá se une una vez más a esta iniciativa, realizando la jornada del Día sin Carro y sin Moto el 21 de septiembre, de 5:00 a.m. a 9:00 p.m.</p>
        <p class="paragraph ph-type-1 ph-id-3">Se invita a la ciudadanía a desplazarse a pie, en bici, patineta o transporte público, medios de transporte sostenibles porque ayudan a:</p>
        <ul>
            <li>Disminuir la huella de carbono que producen los combustibles fósiles.</li>
            <li>Mejorar la calidad del aire.</li>
            <li>Reducir el tráfico vehicular y acortar los tiempos de viaje.</li>
            <li>Crear una transformación cultural hacia la movilidad sostenible.</li>
        </ul>
    </div>
    <style>
        .set-wrapper .box-bloque-1 {
            grid-area: box-bloque-1;
        }
    </style>

    <!-- Sección box bloque-2 -->
    <div class="box box-bloque-2">
        <div class="imagen img-2">
            <picture>
                <source media="(min-width: 768px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/recurso_dscsm_sep_2023_003.png">
                <img class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/recurso_dscsm_sep_2023_001.png" alt="Foto: Biciusuarios, de fondo buses duales de Transmilenio">
            </picture>
        </div>
        <div>
            <h3 class="title title-type-1 title-id-2">¿Quiénes pueden circular?</h3>
            <ul>
                <li>Transporte público</li>
                <li>Transporte para personas con discapacidad</li>
                <li>Vehículos eléctricos o cero emisiones, incluyendo motocicletas</li>
                <li>Rutas escolares</li>
                <li>Motocicletas de vigilancia y seguridad privada</li>
                <li>Vehículos de emergencia</li>
                <li>Vehículos con capacidad de más de 10 pasajeros</li>
                <li>Servicio públicos domiciliarios</li>
                <li>Motocicletas vinculadas a empresas, plataformas tecnológicas y/o establecimientos de comercio, que prestan el servicio de mensajería y/o domicilio</li>
                <li>Transporte de valores</li>
                <li>Carrozas fúnebres</li>
                <li>Destinado al control de tráfico</li>
                <li>Caravana presidencial</li>
                <li>Vehículos Militares, de Policía Nacional, de Organismos de Seguridad del Estado y CTI seccional Bogotá</li>
                <li>Vehículos para el servicio diplomático o consular</li>
                <li>Vehículos asignados por la Unidad Nacional de Protección</li>
                <li>Vehículos destinados para el control operacional y mantenimiento del SITP</li>
                <li>Control de emisiones</li>
            </ul>
        </div>


    </div>
    <style>
        .set-wrapper .box-bloque-2 {
            grid-area: box-bloque-2;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            background-color: #f3f3f3cc;

        }

        .box-bloque-2 .img-2 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box-bloque-2 .img-2 img {
            padding: 2em;
            max-width: 400px;
            max-height: 640px;
            width: 100%;
            text-align: center;

        }

        @media(min-width:768px) {
            .set-wrapper .box-bloque-2 {
                grid-template-columns: 1fr 1fr;
            }

            .box-bloque-2 .img-2 {}
        }
    </style>

    <!-- Sección box bloque-3 -->
    <div class="box box-bloque-3">
        <div>
            <h3 class="title title-type-1 title-id-3">¿Quiénes no pueden circular?</h3>
            <ul>
                <li>Carros y motos</li>
                <li>Taxis con pico y placa (placas terminadas en 9 y 0)</li>
                <li>Vehículos híbridos</li>
                <li>Vehículos dedicados a gas</li>
                <li>Vehículos blindados que no son de la UNP</li>
                <li>Vehículos de carga con restricciones establecidas (<a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=88592&dt=S">Decretos 840 de 2019</a> y <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=91002&dt=S">077 de 2020</a> )</li>
                <li>Vehículos con permiso de pico y placa solidario </li>
                <li>Vehículos de medios de comunicación con placa amarilla</li>
            </ul>
        </div>
        <div>
            <div class="imagen img-3">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/recurso_dscsm_sep_2023_002.png" alt="Vehículo, taxi y motocicleta circulando por avenida" title="">
            </div>
        </div>

    </div>
    <style>
        .set-wrapper .box-bloque-3 {
            grid-area: box-bloque-3;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        .box-bloque-3 .img-3 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box-bloque-3 .img-3 img {
            padding: 2em;
            max-width: 400px;
            width: 100%;

        }

        @media(min-width:768px) {
            .set-wrapper .box-bloque-3 {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>

    <!-- Sección box bloque-4 -->
    <div class="box box-bloque-4">
        <div class="b4-title">
            <h3 class="title title-type-1 title-id-4">¿Cómo movilizarse?</h3>
        </div>

        <div class="item item-1">
            <div class="imagen icono img-icon-1">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/path34529.png" alt="icono de peatón cruzando por la cebra">
            </div>
            <dl>
                <dt>A pie</dt>
                <dd>
                    <ul>
                        <li>9.603 kms de andenes, de los cuales 3.350 km son de la red peatonal que facilitan la conexión y articulación de los sistemas de movilidad</li>
                    </ul>

                </dd>
            </dl>
        </div>


        <div class="item item-2">
            <div class="imagen icono img-icon-2">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/path34521.png" alt="icono de bicicleta">
            </div>
            <dl>
                <dt>En bici</dt>
                <dd>
                    <ul>
                        <li>3.300 bicicletas del Sistema de Bicicletas Compartidas:
                            <br><span>1.500 mecánicas</span><br><span>1.500 de pedaleo asistido</span><br><span>150 manocletas</span><br><span>150 con cajón</span><br><span>Sillas para niños: 150</span>
                        </li>
                        <li>630 kms de red de cicloruta</li>
                        <li>101.1 kms de ciclovía complementaria</li>
                        <li>65.776 cupos de cicloparqueaderos</li>
                    </ul>
                </dd>
            </dl>
        </div>
        <div class="item item-3">
            <div class="imagen icono img-icon-3">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/path34525.png" alt="icono de bus">
            </div>
            <dl>
                <dt>En transporte público</dt>
                <dd>
                    <ul>
                        <li>100 % de la flota del Sistema Integrado de Transporte Público (Transmilenio, SITP, TransMiCable)</li>
                        <li>Transporte intermunicipal</li>
                        <li>39.249 taxis</li>
                    </ul>
                </dd>
            </dl>
        </div>
    </div>
    <style>
        .set-wrapper .box-bloque-4 {
            grid-area: box-bloque-4;
        }

        .box-bloque-4 .b4-title {
            padding-bottom: 32px;
        }

        .box-bloque-4 .item-1,
        .box-bloque-4 .item-3 {
            background-color: #f3f3f3cc;
        }

        .box-bloque-4 .item {
            display: grid;
            gap: 16px;
            grid-auto-flow: dense;
            grid-template-rows: auto;
            grid-template-columns: 1fr;
            justify-content: center;
            align-items: center;
            padding: 16px;


        }

        .box-bloque-4 .item .icono {
            /* height: px; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        @media(min-width:768px) {
            .box-bloque-4 .item {
                grid-template-columns: 12% 88%;
                padding: 16px 0 16px 32px;
            }

            .box-bloque-4 .item .icono {
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

        }

        .box-bloque-4 .icono img {
            width: 100px;
        }
    </style>


    <!-- Sección box bloque-5 -->
    <div class="box box-bloque-5">
        <div class="b5-title">
            <h3 class="title title-type-1 title-id-4">Recursos</h3>
        </div>
        <div>
            <div class="item item-1">
                <div class="imagen icono img-icon-1">
                    <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                </div>
                <dl>
                    <dt>
                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-09-2023/decreto_423_de_2023.pdf">Decreto 493 de 2023</a>
                    </dt>
                    <dd>
                        <p>"Por medio del cual se establecen medidas para la circulación de vehículos automotores y motocicletas el día 21 de septiembre de 2023, en la ciudad de Bogotá D.C."</p>
                        <ul>
                    </dd>
                </dl>
            </div>
            <div class="item item-2">
                <div class="imagen icono img-icon-2">
                    <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-09-2023/url.png" alt="icono de enlace url" width="48px">
                </div>
                <dl>
                    <dt>
                        <a href="https://www.movilidadbogota.gov.co/web/noticia/bogotanos_se_movilizaran_de_forma_sostenible_en_el_dia_sin_carro_y_sin_moto">Noticia: Bogotanos se movilizarán de forma sostenible en el Día sin Carro y sin Moto</a>
                    </dt>
                    <dd>
                        <p>Bogotá, 15 de septiembre de 2023. El próximo 21 de septiembre, en el marco del Día Mundial sin Automóvil, Bogotá vivirá una nueva jornada del Día sin Carro y sin Moto, de 5:00 a. m. a 9:00 p. m.</p>
                        <ul>
                    </dd>
                </dl>
            </div>

        </div>
    </div>
    <style>
        .set-wrapper .box-bloque-5 {
            grid-area: box-bloque-5;
        }


        .box-bloque-5 .b5-title {
            padding-bottom: 32px;
        }
/*
        .box-bloque-5 .item-1,
        .box-bloque-5 .item-3 {
            background-color: #f3f3f3cc;
        } */

        .box-bloque-5 .item {
            display: grid;
            gap: 16px;
            grid-auto-flow: dense;
            grid-template-rows: auto;
            grid-template-columns: 1fr;
            justify-content: center;
            align-items: center;
            padding: 16px;


        }

        .box-bloque-5 .item .icono {
            /* height: px; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        @media(min-width:768px) {
            .box-bloque-5 .item {
                grid-template-columns: 12% 88%;
                padding: 16px 0 16px 32px;
            }

            .box-bloque-5 .item .icono {
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

        }

        .box-bloque-5 .icono img {
            width: 40px;
        }
    </style>


</div>
<!-- Fin Set -->
<style>
    .region.region-content {
        padding: 0px !important;
    }

    @media(min-width:768px) {
        .region.region-content {
            padding: 20px !important;
        }
    }

    @media (min-width: 1200px) {

        .node.node-article.container {
            max-width: 1140px !important;
            width: 100% !important;
        }

        .col-start-2 {
            grid-column-start: 2;
        }
    }

    .set-wrapper {
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        font-weight: 500;
        text-align: left;
        line-height: 1.4;
        color: #000000bf;
    }

    .set-wrapper .box {

        margin-bottom: 32px;
        padding: 0em 2em;
    }

    .box .title-type-1 {
        font-size: 22px;
        font-weight: 700;
        text-align: left;
        line-height: 1.2;
        color: #333333ff;
        padding-bottom: 8px;
        border-bottom: solid 2px #439403;
    }

    .box .title-type-1::before {
        content: "🌳";
        margin-right: 8px;
    }


    .box .ph-type-1 {
        font-size: 14px;
        font-weight: 500;
        text-align: left;
        line-height: 1.4;
        color: #000000bf;
    }

    .box dl {
        padding: 0;
    }

    @media(min-width:768px) {
        .box dl {
            padding: 0 2em 0;

        }
    }

    .box dt {
        font-size: 1em;
        font-weight: bold;
        text-align: left;
        line-height: 1.4;
        color: #333333ff;
    }

    .box ul>li {
        padding-bottom: 6px;
    }

    .box ul>li span {
        padding: 12px 1em 0px 1em;

    }
</style>
