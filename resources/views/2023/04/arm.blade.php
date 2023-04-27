@extends('welcome')
@section('title','arm')
@section('contenido')

<!-- Set arm -->
<div class="set-wrapper arm">


    <!-- Sección box header -->
    <div class="box-header">
        <div class="box-header-title">
            <h2>Agencia Regional de Movilidad</h2>
        </div>
    </div>

    <style>
        .set-wrapper .box-header {
            grid-area: box-header;
            text-align: center;
            height: 160px;
            display: flex;
            justify-content: center;
            align-items: center;
            /* background-color: rgba(77, 84, 31, 0.1); */
        }

        .box-header-title {
            font-weight: 700;
            color: #0a4064;

        }

        .box-header-title h2 {
            margin: 0;
            font-weight: 600;
            font-size: 40px;
        }
    </style>



    <!-- Sección box video-ppal -->
    <div class="box-video-ppal">
        <div class="video video-ppal video-16by9">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width='100%' src='https://www.youtube.com/embed/IpKKmv9vzEQ' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <style>
        .set-wrapper .box-video-ppal {
            grid-area: box-video-ppal;
            padding: 0 3em 2em 3em;

        }
    </style>


    <!-- Sección box pills-hz -->
    <div class="box-pills-hz">

        <ul class="nav nav-pills nav-justified">
            <li class="active"><a data-toggle="pill" href="#que">¿Qué es?</a></li>
            <li><a data-toggle="pill" href="#proyectos">Proyectos</a></li>
            <li><a data-toggle="pill" href="#noticias">Noticias</a></li>
            <li><a data-toggle="pill" href="#normatividad">Normatividad</a></li>
        </ul>


        <div class="tab-content">
            <div id="que" class="tab-pane fade in active">
                <div class="imagen  img-arm-1">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-04-2023/image_arm_003.webp" alt="hombre sonríe junto a su bicicleta" title="hombre sonríe junto a su bicicleta">
                </div>
                <div class="title title-h3">
                    <h3>¿Qué es?</h3>
                    <hr class="line-arm">
                </div>
                <div class="paragraph ph-1">
                    <p>La Agencia Regional de Movilidad - ARM es la autoridad de transporte para la Región Metropolitana. Nace para mejorar los desplazamientos de los ciudadanos en Bogotá y la región, a través de acciones que articulen el sistema regional de transporte y la interoperabilidad de los medios de pago del transporte público.</p>
                </div>
                <div class="paragraph ph-1">
                    <p>La Agencia Regional de Movilidad fue creada en la Ley 2199 de 2022. Su entrada en funcionamiento tiene tres momentos:</p>
                    <ol>
                        <li>Traslado transitorio de las funciones, aprobado por el Consejo Regional a través del Acuerdo Regional 7 de 2022.</li>
                        <li>Operación transitoria designada, a través del Decreto 145 de 2023, a la Secretaría Distrital de Movilidad, junto a las entidades del sector: IDU, TransMilenio y Empresa Metro de Bogotá.</li>
                        <li>Operación definitiva luego de que se concluyan los estudios de estructura institucional de la entidad, y se apropien los recursos necesarios para su funcionamiento.</li>
                    </ol>
                </div>
            </div>
            <div id="proyectos" class="tab-pane fade">
                <div class="imagen img-arm-2">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-04-2023/image_arm_001.webp" alt="" title="">
                </div>
                <div class="title title-h3">
                    <h3>Proyectos</h3>
                    <hr class="line-arm">
                </div>
                <div class="paragraph ph-1">
                    <p>Bogotá y Cundinamarca identificaron los siguientes proyectos de importancia regional que podrían ser ejecutados:</p>
                    <ul>
                        <li>Plan de Movilidad Segura y Sostenible Regional</li>
                        <li>Intercambiador calle 80 con Av. las Quintas</li>
                        <li>Extensión rutas del SITP a Cota y Mosquera</li>
                        <li>Identificación de fuentes de financiación regionales</li>
                        <li>Formulación de lineamientos regionales para carga</li>
                        <li>Gestión del tránsito</li>
                    </ul>
                </div>
            </div>
            <div id="noticias" class="tab-pane fade">
                <div class="title title-h3">
                    <h3>Noticias</h3>
                    <hr class="line-arm">
                </div>
                <div class="new">
                    <div class="imagen img-new">
                        <a href="https://www.movilidadbogota.gov.co/web/noticia/la_encuesta_de_movilidad_2023_fortalecera_la_integracion_y_conectividad_con_la_region" target="_blank" rel="noopener noreferrer">
                            <img class="img-responsive w-100" src="https://lh6.googleusercontent.com/U37uWemE1NSGvOYJxeTGBUPb4h8nO8xyuJu0FWvwFyTLmVhyGmftxEpa0YuBQe4cqNWWiW0yAdZQF0Ppk8p9x6sql9ZRAShU5gwuVfDSfm7-70KKpxXoeVDROKQ6AvejAR2B9sjz8m11rM6ZkQQgtQ" alt="Foto - SDM: Lanzamiento de la Encuesta de Movilidad 2023 Bogotá - Región" title="Foto - SDM: Lanzamiento de la Encuesta de Movilidad 2023 Bogotá - Región">
                        </a>
                    </div>
                    <div class="txt-new">
                        <a href="https://www.movilidadbogota.gov.co/web/noticia/la_encuesta_de_movilidad_2023_fortalecera_la_integracion_y_conectividad_con_la_region" target="_blank" rel="noopener noreferrer">
                            <h3>La Encuesta de Movilidad 2023 fortalecerá la integración y conectividad con la Región Metropolitana</h3>
                        </a>
                        <p><strong>Bogotá. Marzo 21 de 2023. (@SectorMovilidad)</strong> La Secretaría Distrital de Movilidad, en sinergia con las autoridades de Cundinamarca, hicieron apertura de la Encuesta de Movilidad 2023 Bogotá – Región, la cual comenzará a aplicarse en la capital del país el próximo 23 de marzo y en 20 municipios vecinos que conforman la Región Metropolitana a partir del 2 de mayo. </p>
                        <a href="https://www.movilidadbogota.gov.co/web/noticia/la_encuesta_de_movilidad_2023_fortalecera_la_integracion_y_conectividad_con_la_region" target="_blank" rel="noopener noreferrer">Ver más</a>
                    </div>
                </div>

                <style>
                    .arm .new {
                        display: grid;
                        gap: 8px;
                        grid-auto-flow: dense;
                        grid-template-columns: 1fr;
                        grid-template-rows: auto;
                        grid-template-areas:
                            'imagen'
                            'texto';
                    }

                    .img-new {
                        grid-area: imagen;
                        /* padding: 0 2em 2em 2em; */
                    }

                    .img-new img {
                        max-height: 300px;
                        object-fit: cover;
                        object-position: center;
                    }

                    .txt-new {
                        grid-area: texto;
                        padding: 0 2em 2em 2em;
                    }

                    .txt-new h3 {
                        color: #0a4064;
                        margin-top: 0px;
                    }

                    @media(min-width:768px) {
                        .arm .new {
                            gap: 8px;
                            grid-template-columns: 1fr 1fr;
                            grid-template-areas:
                                'imagen texto';
                        }
                    }
                </style>

            </div>
            <div id="normatividad" class="tab-pane fade">
                <div class="title title-h3">
                    <h3>Normatividad</h3>
                    <hr class="line-arm">
                    </hr>
                </div>

                <div class="cards-normas">

                    <div class="media">
                        <div class="media-left">
                            <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-04-2023/ley2199de2022.pdf" target="_blank" rel="noopener noreferrer" download="" title="Ley 2199 de 2022">
                                <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-04-2023/ley2199de2022.pdf" target="_blank" rel="noopener noreferrer" download="" title="Descargar Ley 2199 de 2022">
                                <h4 class="media-heading">Ley 2199 de 2022</h4>
                            </a>
                            <p>"Por medio de la cual se desarrolla el Artículo 325 de la Constitución Política y se expide el régimen especial de la región metropolitana Bogotá - Cundinamarca"</p>
                        </div>
                    </div>

                    <div class="media">
                        <div class="media-left">
                            <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-04-2023/decreto145de2023.pdf" target="_blank" rel="noopener noreferrer" download="" title="Decreto 145 de 2023">
                                <img class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" alt="icono de documento pdf" width="48px">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-04-2023/decreto145de2023.pdf" target="_blank" rel="noopener noreferrer" download="" title="Descargar Decreto 145 de 2023">
                                <h4 class="media-heading">Decreto 145 de 2023</h4>
                            </a>
                            <p>"Por medio del cual se distribuyen unas funciones trasladadas transitoriamente por la Región Metropolitana al Sector Movilidad de la Administración del Distrito Capital y se dictan otras disposiciones"</p>
                        </div>
                    </div>


                </div>
                <style>
                    .arm .cards-normas {
                        display: grid;
                        gap: 8px;
                        grid-auto-flow: dense;
                        grid-template-columns: 1fr;
                        grid-template-rows: auto;
                        grid-template-areas:
                            '';
                    }
                </style>

            </div>
        </div>
    </div>
    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .set-wrapper .box-pills-hz {
            grid-area: box-pills-hz;
        }

        .arm {
            font-size: 16px;
            font-weight: 500;
            text-align: left;
            line-height: 1.5;
            color: #252525;
        }

        .arm .title-h3 {
            margin-top: 4em;
            margin-bottom: 2em;
        }

        .arm .title-h3 h3 {
            margin: 0px;
            font-size: 32px;
            font-weight: 700;
            text-align: center;
            line-height: 1.5;
            color: #dda92b;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            overflow: hidden;
        }

        .arm .line-arm {
            border-bottom: #dda92b solid 1px;
            width: 250px;
            text-align: left;
            margin: 4px auto;
        }

        .imagen {
            margin: 4em;
            -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.05);
            box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.05);
            border-radius: 10px;
        }

        .imagen img {
            border-radius: 10px;
            max-height: 400px;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }


        .arm .paragraph {
            margin-top: 2em;
            margin-bottom: 2em;
            font-size: 16px;
            font-weight: 500;
            text-align: left;
            line-height: 1.5;
            color: #252525;
        }
    </style>


</div>
<!-- Fin Set -->
