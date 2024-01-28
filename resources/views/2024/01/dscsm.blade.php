@extends('welcome')
@section('title', 'diaSinCarro')
@section('contenido')

    <!-- Set diaSinCarro -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">
    <div class="set-wrapper diaSinCarro">

        <!-- Sección box header -->
        <div class="box-header">
            <div class="img img-1">
                <picture>
                    <source media="(min-width: 768px)" srcset="https://via.placeholder.com/300x350">
                    <img alt="Logo - día sin carro y sin moto febrero 2024" class="img-responsive"
                        src="https://via.placeholder.com/300x350">
                </picture>
            </div>

            <div class="imagen img-sub"><img alt="Movilizate de forma sostenoble" class="img-responsive w-100"
                    src="https://via.placeholder.com/250x250" title=""></div>
        </div>
        <style type="text/css">
            .field-item.even .centertil {
                visibility: hidden;
                margin-top: -50px;
            }

            .set-wrapper .box-header {
                grid-area: box-header;
                background: rgb(5, 42, 10);
                /* background: linear-gradient(180deg, rgba(5, 42, 10, 1) 0%, rgba(67, 148, 3, 1) 100%); */
                background: url('https://via.placeholder.com/1200x350');
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

        <!-- bloque box video-->
        <div class="box box-video">
            <div class="video video-ppal video-16by9">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width='100%' src='https://www.youtube.com/embed/Qb7lyVdgxVw?si=4zmBYG1Dul3WS5e5' title='YouTube video player' frameborder='0'
                        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <style>
            .set-wrapper .box-video {
                grid-area: box-video;
                max-width: 800px;
                padding: 2em 1em 0 1em;
                margin: auto
            }
        </style>

        <!-- Sección box bloque-1 -->
        <div class="box box-bloque-1">
            <h3 class="title title-type-1 title-id-1">Objetivo</h3>
            <p>Promover la movilización en <b>modos de transporte sostenible</b> como: a pie, en bici y transporte público
                para:</p>
            <ul>
                <li>Contribuir a la <b>disminución de la huella de carbono</b> que producen los combustibles fósiles.</li>
                <li>Reducir el tráfico vehicular y los tiempos de viaje.</li>
            </ul>
            <h3 class="title title-type-1 title-id-1-b">Horario</h3>
            <dl>
                <dt>Febrero 01</dt>
                <dd>De 5:00&nbsp;a.m. a 9:00&nbsp;p.m.</dd>
            </dl>
        </div>
        <style type="text/css">
            .set-wrapper .box-bloque-1 {
                grid-area: box-bloque-1;
            }
        </style>
        <!-- Sección box bloque-2 -->
        <div class="box box-bloque-2">
            <div class="imagen img-2">
                <picture>
                    <source media="(min-width: 768px)"
                        srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/recurso_dscsm_sep_2023_003.png">
                    <img alt="Foto: Biciusuarios, de fondo buses duales de Transmilenio" class="img-responsive"
                        src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/recurso_dscsm_sep_2023_001.png">
                </picture>
            </div>

            <div>
                <h3 class="title title-type-1 title-id-2">¿Quiénes pueden circular?</h3>

                <ul>
                    <li>Vehículos eléctricos o cero emisiones, incluyendo motocicletas.</li>
                    <li>Transporte para personas con discapacidad.</li>
                    <li>Motocicletas que prestan el servicio de mensajería y/o domicilio.</li>
                    <li>Transporte vinculado a servicios públicos domiciliarios.</li>
                    <li>Transporte escolar.</li>
                    <li>Motocicletas de vigilancia y seguridad privada.</li>
                    <li>Vehículos con capacidad de más de 10 pasajeros.</li>
                    <li>Transporte público.</li>
                    <li>Vehículos de emergencia.</li>
                    <li>Carrozas fúnebres.</li>
                    <li>Destinado al control de tráfico.</li>
                    <li>Transporte de valores.</li>
                    <li>Caravana presidencial.</li>
                    <li>Vehículos Militares, de Policía Nacional, de Organismos de Seguridad del Estado y CTI seccional
                        Bogotá.</li>
                    <li>Vehículos diplomáticos o consulares.</li>
                    <li>Vehículos asignados por la Unidad Nacional de Protección.</li>
                    <li>Vehículos destinados para el control operacional y mantenimiento del SITP.</li>
                    <li>Control de emisiones.</li>
                </ul>
            </div>
        </div>
        <style type="text/css">
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
                    <li>Carros y motos particulares.</li>
                    <li>Vehículos y motos de las escuelas de conducción.</li>
                    <li>Vehículos con permiso de Pico y placa solidario (se repone automáticamente).</li>
                    <li>Vehículos de medios de comunicación con placa amarilla.</li>
                    <li>Vehículos híbridos.</li>
                    <li>Vehículos dedicados a gas.</li>
                    <li>Taxis con pico y placa (7 y 8).</li>
                </ul>
            </div>

            <div>
                <div class="imagen img-3"><img alt="Vehículo, taxi y motocicleta circulando por avenida"
                        class="img-responsive w-100"
                        src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/recurso_dscsm_sep_2023_002.png"
                        title=""></div>
            </div>
        </div>
        <style type="text/css">
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
            <div>
                <p>La ciudad cuenta con la infraestructura para movilizarse de forma sostenible:</p>
            </div>

            <div class="item item-1">
                <div class="imagen icono img-icon-1"><img alt="icono de peatón cruzando por la cebra"
                        class="img-responsive w-100"
                        src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/path34529.png">
                </div>

                <dl>
                    <dt>A pie</dt>
                    <dd>
                        <ul>
                            <li>9.575 kms de andenes, de los cuales 3.350 km son de la red peatonal que facilitan la
                                conexión y articulación de los sistemas de movilidad</li>
                            {{-- <li>9.603 kms de red peatonal</li> --}}
                        </ul>
                    </dd>
                </dl>
            </div>

            <div class="item item-2">
                <div class="imagen icono img-icon-2"><img alt="icono de bicicleta" class="img-responsive w-100"
                        src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/path34521.png">
                </div>

                <dl>
                    <dt>En bici</dt>
                    <dd>
                        <ul>
                            <li>3.300 bicicletas del Sistema de Bicicletas Compartidas</li>
                            <li>630 kms de red de cicloruta</li>
                            <li>101.1 kms de ciclovía complementaria</li>
                            <li>69.130 cupos de cicloparqueaderos</li>
                        </ul>
                    </dd>
                </dl>
            </div>

            <div class="item item-3">
                <div class="imagen icono img-icon-3"><img alt="icono de bus" class="img-responsive w-100"
                        src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-09-2023/path34525.png">
                </div>

                <dl>
                    <dt>En transporte público</dt>
                    <dd>
                        <ul>
                            <li>Troncal</li>
                            <li>TransMicable</li>
                            <li>Zonal</li>
                            <li>Taxis</li>
                            <li>Buses intermunicipales</li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
        <style type="text/css">
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
        <!-- bloque box bloque-5-->
        <div class="box box-bloque-5">
            <div class="b5-title">
                <h3 class="title title-type-1 title-id-4">Actividades</h3>
            </div>
            <style>
                .box-bloque-5 .boxes {
                    display: grid;
                    gap: 8px;
                    grid-auto-flow: dense;
                    grid-template-columns: 1fr;
                    grid-template-rows: auto;
                    padding: 8px;
                }

                .box-bloque-5 .boxes:nth-child(even) {
                    background-color: #efefef;
                }

                @media(min-width:768px) {
                    .box-bloque-5 .boxes {
                        grid-template-columns: repeat(3, 1fr);
                        gap: 4px 16px;
                        padding: 12px;
                    }
                }

                .box-bloque-5 .box-items {
                    display: grid;
                    gap: 12px;
                    grid-auto-flow: dense;
                    grid-template-columns: 1fr;
                    grid-template-rows: auto;
                }

                .box-bloque-5 .item-title {
                    border-bottom: solid 1px #c5c5c5;
                    padding-bottom: 4px
                }


                .box-bloque-5 .item {
                    display: flex;
                    flex-direction: column;
                    justify-content: flex-start;
                    align-items: start;
                }

                .box-bloque-5 .item p {
                    margin: 0;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 14px;
                    font-weight: 500;
                    text-align: left;
                    line-height: 1.2;
                    color: #00000098;
                }

                @media(min-width:768px) {
                    .span-2 {
                        grid-column: span 2;
                    }

                    .span-3 {
                        grid-column: span 3;
                    }
                }

                .box-bloque-5 .item-title p {
                    font-family: 'Montserrat', sans-serif;
                    font-size: 16px;
                    font-weight: 700;
                    text-align: left;
                    line-height: 1.3;
                    color: #000000bf;
                }

                .box-bloque-5 .item a {
                    font-family: 'Montserrat', sans-serif;
                    font-size: 14px;
                    font-weight: 500;
                    text-align: left;
                    line-height: 1.2;
                }
            </style>

            <div class="b5-boxes">
                <div class="boxes">
                    <div class="item item-title span-3">
                        <p><strong>Registro Bici y sensibilización sobre seguridad vial y cuidado de la vida en las vías
                                para ciclistas</strong></p>
                        <small></small>
                    </div>
                    <div class="item">
                        <p><b>Ubicación:</b></p>
                        <p>Centros Locales de Movilidad</p>

                    </div>
                    <div class="item span-2">
                        <p><b>Horario:</b></p>
                        <p>9:00 a.m. a 5:00 p.m.</p>
                    </div>
                </div>
                <div class="boxes">
                    <div class="item item-title span-3">
                        <p><strong>Sensibilización de puntos ciegos, juegos de gran formato y registro bici</strong></p>
                        <small></small>
                    </div>
                    <div class="item">
                        <p><b>Dirección:</b></p>
                        <p><a href="">Carrera Séptima con calle 24</a></p>
                        <p><a href="">Av. Boyacá con 53</a></p>
                        <p><a href="">Parque Lourdes</a></p>

                    </div>
                    <div class="item span-2">
                        <p><b>Horario:</b></p>
                        <p>10:00 a.m. a 1:00 p.m.</p>
                    </div>
                </div>
                <div class="boxes">
                    <div class="item item-title span-3">
                        <p><strong>Orientación para víctimas de Siniestros Viales - ORVI</strong></p>
                        <small></small>
                    </div>
                    <div class="item">
                        <p><b>Dirección:</b></p>
                        <p><a href="">Carrera 50 con Av. Primera de Mayo.</a></p>

                    </div>
                    <div class="item span-2">
                        <p><b>Horario:</b></p>
                        <p></p>
                    </div>
                </div>
                <div class="boxes">
                    <div class="item item-title span-3">
                        <p><strong>Al trabajo en bici</strong></p>
                        <small></small>
                    </div>
                    <div class="item">
                        <p><b>Dirección:</b></p>
                        <p><a href="">Carrera Séptima</a></p>
                        <p><a href="">Calle 63 </a></p>
                        <p><a href="">Autopista Sur</a></p>

                    </div>
                    <div class="item span-2">
                        <p><b>Horario:</b></p>
                        <p>6:30 a.m. a 9:30 a.m. </p>
                    </div>
                </div>
                <div class="boxes">
                    <div class="item item-title span-3">
                        <p><strong>Escuela de la bici</strong></p>
                        <small></small>
                    </div>
                    <div class="item">
                        <p><b>Dirección:</b></p>
                        <p><a href="">Parque Fontanar del Río</a></p>
                        <p><a href="">Parque Hippies</a></p>
                        <p><a href="">Parque San Andrés</a></p>
                        <p><a href="">Parque Atahualpa</a></p>
                        <p><a href="">Parque Cayetano Cañizales</a></p>
                        <p><a href="">Parque Timiza</a></p>
                        <p><a href="">Parque Sierra Morena</a></p>
                        <p><a href="">Parque Tunal</a></p>
                        <p><a href="">Parque Villa Mayor</a></p>
                        <p><a href="">Parque San Carlos</a></p>
                        <p><a href="">Parque Velódromo Primera de Mayo </a></p>
                        <p><a href="">Parque Cantarrana</a></p>
                        <p><a href=""></a></p>

                    </div>
                    <div class="item span-2">
                        <p><b>Horario:</b></p>
                        <p>8:00 a.m. a 4:00 p.m.</p>
                    </div>
                </div>
                <div class="boxes">
                    <div class="item item-title span-3">
                        <p><strong>Promoción del autocuidado y del cuidado del medio ambiente</strong></p>
                        <small></small>
                    </div>
                    <div class="item">
                        <p><b>Dirección:</b></p>
                        <p><a href="">Ciudad Montes</a></p>
                        <p><a href="">Jardín Botánico</a></p>
                        <p><a href="">La Macarena</a></p>
                        <p><a href="">El Tunal.</a></p>

                    </div>
                    <div class="item span-2">
                        <p><b>Horario:</b></p>
                        <p>7:00 a.m. a 3:00 p.m</p>
                    </div>
                </div>
                <div class="boxes">
                    <div class="item item-title span-3">
                        <p><strong>Ventanilla Única de Servicios - VUS</strong></p>
                        <small></small>
                    </div>
                    <div class="item">
                        <p><b>Dirección:</b></p>
                        <p><a href=""></a></p>

                    </div>
                    <div class="item span-2">
                        <p><b>Horario:</b></p>
                        <p>Extiende su atención, su horario será de 7:00 a.m. a 7:00 p.m. </p>
                    </div>
                </div>
                <div class="boxes">
                    <div class="item item-title span-3">
                        <p><strong>Promoción del autocuidado y del cuidado del medio ambiente:</strong></p>
                        <small></small>
                    </div>
                    <div class="item">
                        <p><b>Dirección:</b></p>
                        <p><a href="">Ciudad Montes</a></p>
                        <p><a href="">Jardín Botánico</a></p>
                        <p><a href="">La Macarena</a></p>
                        <p><a href="">El Tunal</a></p>

                    </div>
                    <div class="item span-2">
                        <p><b>Horario:</b></p>
                        <p>7:00&nbsp;a.m. a 3:00&nbsp;p.m</p>
                    </div>
                </div>
                <div class="boxes">
                    <div class="item item-title span-3">
                        <p><strong>Ventanilla Única de Servicios - VUS</strong></p>
                        <small></small>
                    </div>

                    <div class="item span-3">
                        <p><b>Horario:</b></p>
                        <p>Extiende su atención, su horario será de 7:00 a.m. a 7:00 p.m.</p>
                    </div>
                </div>

            </div>


        </div>
        <style>
            .set-wrapper .box-bloque-5 {
                grid-area: box-bloque-5;
                margin: 2em 1em 0 1em;
            }

            @media(min-width:768px) {
                .box-bloque-5 .b5-boxes {
                    padding: 32px
                }

                .box-bloque-5 .boxes {
                    padding: 32px
                }
            }
        </style>

        <!-- Sección box bloque-6 -->
        <div class="box box-bloque-6">
            <div class="b6-title">
                <h3 class="title title-type-1 title-id-4">Normatividad</h3>
            </div>

            <div>
                <div class="item item-1">
                    <div class="imagen icono img-icon-1"><img alt="icono de documento pdf" class="media-object"
                            src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png"
                            width="48px"></div>

                    <dl>
                        <dt><a
                                href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-09-2023/decreto_423_de_2023.pdf">Decreto
                                Distrital 423 de 2023</a></dt>
                        <dd>
                            <p>"Por medio del cual se establecen medidas para la circulación de vehículos automotores y
                                motocicletas el día xx de febrero de 2024, en la ciudad de Bogotá D.C."</p>

                            <ul></ul>
                        </dd>
                    </dl>
                </div>

                <div class="item item-1">
                    <div class="imagen icono img-icon-1"><img alt="icono de documento pdf" class="media-object"
                            src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png"
                            width="48px"></div>

                    <dl>
                        <dt><a href="">Decreto Distrital XXX de 2023</a></dt>
                        <dd>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, fugit magnam ad natus
                                eveniet fuga vitae non pariatur est beatae blanditiis corporis possimus consectetur nihil
                                eaque! Eligendi eos iure in!</p>

                            <ul></ul>
                        </dd>
                    </dl>
                </div>

                <div class="item item-2">
                    <div class="imagen icono img-icon-2"><img alt="icono de enlace url" class="media-object"
                            src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-09-2023/url.png"
                            width="48px"></div>

                    <dl>
                        <dt><a
                                href="https://www.movilidadbogota.gov.co/web/noticia/bogotanos_se_movilizaran_de_forma_sostenible_en_el_dia_sin_carro_y_sin_moto">Noticia:
                                Bogotanos se movilizarán de forma sostenible en el Día sin Carro y sin Moto</a></dt>
                        <dd>
                            <p>Bogotá, 15 de septiembre de 2023. El próximo 21 de septiembre, en el marco del Día Mundial
                                sin Automóvil, Bogotá vivirá una nueva jornada del Día sin Carro y sin Moto, de 5:00 a. m. a
                                9:00 p. m.</p>

                            <ul></ul>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <style type="text/css">
            .set-wrapper .box-bloque-6 {
                grid-area: box-bloque-6;
            }


            .box-bloque-6 .b6-title {
                padding-bottom: 32px;
            }

            /*
                                .box-bloque-6 .item-1,
                                .box-bloque-6 .item-3 {
                                    background-color: #f3f3f3cc;
                                } */

            .box-bloque-6 .item {
                display: grid;
                gap: 16px;
                grid-auto-flow: dense;
                grid-template-rows: auto;
                grid-template-columns: 1fr;
                justify-content: center;
                align-items: center;
                padding: 16px;


            }

            .box-bloque-6 .item .icono {
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            @media(min-width:768px) {
                .box-bloque-6 .item {
                    grid-template-columns: 12% 88%;
                    padding: 16px 0 16px 32px;
                }

                .box-bloque-6 .item .icono {
                    /* height: px; */
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }

            }

            .box-bloque-6 .icono img {
                width: 40px;
            }
        </style>
    </div>
    <!-- Fin Set -->
    <style type="text/css">
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
            color: #00000098;
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
            color: #000000bf;
            padding-bottom: 8px;
            border-bottom: solid 2px #000000bf;
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


