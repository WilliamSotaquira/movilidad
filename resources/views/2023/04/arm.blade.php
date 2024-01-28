@extends('welcome')
@section('title','arm')
@section('contenido')


<!-- Set arm -->
<div class="set-wrapper arm">

    <!-- Sección box header
	<div class="box-header">
		<div class="box-header-title">
			<h2>Agencia Regional de Movilidad</h2>
		</div>
	</div>
	<style type="text/css">.set-wrapper .box-header {
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
	</style> -->


    <!-- Sección box logo-full -->
    <div class="box-logo-full">

        <picture>
            <source media="(min-width: 650px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-11-2023/piezas_arm_logo_banner_1_0.jpg">
            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-11-2023/piezas_arm_logo_banner_1_0.jpg">
            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-11-2023/piezas_arm_logo_banner_2_0.jpg" alt="Logo Agencia Regional de Movilidad">
        </picture>
    </div>
    <style>
        .set-wrapper .box-logo-full {
            grid-area: box-logo-full;
            margin-bottom: 40px
        }

        .box-logo-full img {
            max-width: 100%;
            margin: auto;
        }
    </style>

    <!-- Sección box pills-hz -->
    <div class="box-pills-hz">
        <ul class="nav nav-pills nav-justified" id="pills-arm">
            <li class="active"><a data-toggle="pill" href="#que">¿Qué es?</a></li>
            <li><a data-toggle="pill" href="#proyectos">Proyectos</a></li>
            <li><a data-toggle="pill" href="#normatividad">Normatividad</a></li>
        </ul>
        <style type="text/css">
            #pills-arm li>a {
                position: relative;
                display: block;
                padding: 10px 15px;
                border: #dbab2d solid 2px !important;
                margin: 0.5em !important;
            }
        </style>
        <style type="text/css">
            #pills-arm li.active>a {
                position: relative;
                display: block;
                padding: 10px 15px;
                border: #0a4064 solid 2px !important;
                margin: 0.5em !important;
            }
        </style>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="que"><!-- <div class="imagen  img-arm-1">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-04-2023/image_arm_003.webp" alt="hombre sonríe junto a su bicicleta" title="hombre sonríe junto a su bicicleta">
                </div> -->
                <div class="video video-ppal video-16by9">
                    <div class="embed-responsive embed-responsive-16by9"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/IpKKmv9vzEQ" title="YouTube video player" width="100%"></iframe></div>
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
            <style type="text/css">
                #que .video-ppal {
                    padding: 1em 3em;
                }
            </style>
            <div class="tab-pane fade" id="proyectos">
                <div class="imagen img-arm-2"><img alt="" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-04-2023/image_arm_001.webp" title=""></div>

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


            <div class="tab-pane fade" id="normatividad">
                <div class="title title-h3">
                    <h3>Normatividad</h3>

                    <hr class="line-arm">
                </div>

                <div class="cards-normas">
                    <div class="media">
                        <div class="media-left"><a download="" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-04-2023/ley2199de2022.pdf" rel="noopener noreferrer" target="_blank" title="Ley 2199 de 2022"><img alt="icono de documento pdf" class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" width="48px"> </a></div>

                        <div class="media-body">
                            <h4 class="media-heading"><a download="" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-04-2023/ley2199de2022.pdf" rel="noopener noreferrer" target="_blank" title="Descargar Ley 2199 de 2022">Ley 2199 de 2022</a></h4>

                            <p>"Por medio de la cual se desarrolla el Artículo 325 de la Constitución Política y se expide el régimen especial de la región metropolitana Bogotá - Cundinamarca"</p>
                        </div>
                    </div>

                    <div class="media">
                        <div class="media-left"><a download="" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-04-2023/decreto145de2023.pdf" rel="noopener noreferrer" target="_blank" title="Decreto 145 de 2023"><img alt="icono de documento pdf" class="media-object" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-01-2023/pdf.png" width="48px"> </a></div>

                        <div class="media-body">
                            <h4 class="media-heading"><a download="" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-04-2023/decreto145de2023.pdf" rel="noopener noreferrer" target="_blank" title="Descargar Decreto 145 de 2023">Decreto 145 de 2023</a></h4>

                            <p>"Por medio del cual se distribuyen unas funciones trasladadas transitoriamente por la Región Metropolitana al Sector Movilidad de la Administración del Distrito Capital y se dictan otras disposiciones"</p>
                        </div>
                    </div>
                </div>
                <style type="text/css">
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
    <style type="text/css">
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
            margin-top: 2em;
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

    <!-- Sección box noticias -->
    <div class="box box-noticias">


        <div class="title title-h3">
            <h3>Noticias</h3>

            <hr class="line-arm">
        </div>

        <div class="new">
            <div class="img-new"><a href="https://www.movilidadbogota.gov.co/web/noticia/intercambiador_de_la_calle_80_con_av_las_quintas_cuenta_con_presupuesto_para_siguientes" rel="noopener noreferrer" target="_blank"><img alt="Foto - Corredor de la calle 80" class="img-responsive w-100" src="https://lh7-us.googleusercontent.com/NEXptqG9Corm-8K0vWUrtK3dGSFeBRACnXcg_wWosb9qDoAP0Tlf7vMyCtTvNA_BjlgxWFrnJfgapYBZ4dnXBw9qcQI0tGWeLBAFsuSKpqyNViKHWDa_wePHn1sCjNPNMwqlUMl94Gb96LlDQE2JEQ" title="Foto - Corredor de la calle 80"> </a></div>
            <div class="txt-new">
                <h3><a href="https://www.movilidadbogota.gov.co/web/noticia/intercambiador_de_la_calle_80_con_av_las_quintas_cuenta_con_presupuesto_para_siguientes" rel="noopener noreferrer" target="_blank">Intercambiador de la calle 80 con Av. Las Quintas cuenta con presupuesto para siguientes vigencias</a></h3>
                <p><strong>Bogotá, 14 de noviembre de 2023 (@ARMovilidad).</strong> Durante el Consejo Regional que se realizó este martes, en la Gobernación de Cundinamarca, se aprobaron las vigencias futuras por un valor de 64 mil millones de pesos para la realización del proyecto del intercambiador de la calle 80 con Av. Las Quintas.</p>
                <a href="https://www.movilidadbogota.gov.co/web/noticia/intercambiador_de_la_calle_80_con_av_las_quintas_cuenta_con_presupuesto_para_siguientes" rel="noopener noreferrer" target="_blank">Ir a la noticia completa</a>
            </div>
        </div>

        <div class="new">
            <div class="img-new"><a href="https://www.movilidadbogota.gov.co/web/noticia/agencia_regional_de_movilidad_gobernacion_y_alcaldia_de_soacha_firman_nuevo_convenio_para" rel="noopener noreferrer" target="_blank"><img alt="Foto - La primera gran obra será el intercambiador de la calle 80 con Av. Las Quintas" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/08-11-2023/img-20231108-wa0018.jpg" title="Foto - La primera gran obra será el intercambiador de la calle 80 con Av. Las Quintas"> </a></div>
            <div class="txt-new">
                <h3><a href="https://www.movilidadbogota.gov.co/web/noticia/agencia_regional_de_movilidad_gobernacion_y_alcaldia_de_soacha_firman_nuevo_convenio_para" rel="noopener noreferrer" target="_blank">Agencia Regional de Movilidad, Gobernacion y Alcaldía de Soacha firman nuevo convenio para garantizar prestación del servicio de transporte público</a></h3>
                <p><strong>Bogotá, D.C., 7 de noviembre de 2023.</strong> Con el objetivo de permitir que el transporte público urbano de Soacha transite en Bogotá, la Agencia Regional de Movilidad (ARM), el Ministerio de Transporte y la Alcaldía de Soacha firmaron un nuevo convenio para continuar con la prestación de este servicio a los ciudadanos durante cinco meses, mientras se analizan y actualizan las condiciones que requiere esta operación.</p>
                <a href="https://www.movilidadbogota.gov.co/web/noticia/agencia_regional_de_movilidad_gobernacion_y_alcaldia_de_soacha_firman_nuevo_convenio_para" rel="noopener noreferrer" target="_blank">Ir a la noticia completa</a>
            </div>
        </div>

        <div class="new">
            <div class="img-new"><a href="https://www.movilidadbogota.gov.co/web/noticia/deyanira_avila_nueva_directora_transitoria_de_la_agencia_regional_de_movilidad" rel="noopener noreferrer" target="_blank"><img alt="Foto - La primera gran obra será el intercambiador de la calle 80 con Av. Las Quintas" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/26-10-2023/sxcv-imagen_231026_13p.png" title="Foto - La primera gran obra será el intercambiador de la calle 80 con Av. Las Quintas"> </a></div>
            <div class="txt-new">
                <h3><a href="https://www.movilidadbogota.gov.co/web/noticia/deyanira_avila_nueva_directora_transitoria_de_la_agencia_regional_de_movilidad" rel="noopener noreferrer" target="_blank">Deyanira Ávila, nueva directora transitoria de la Agencia Regional de Movilidad</a></h3>
                <p><strong>Bogotá, 26 de octubre de 2023 (@SectorMovilidad).</strong> Durante la junta directiva de la Agencia Región Movilidad - ARM, que se realizó este jueves, se designó a la secretaria Distrital de Movilidad, Deyanira Ávila, como su nueva directora para el periodo de desempeño transitorio de funciones en el Sector Movilidad de la Alcaldía Mayor de Bogotá. </p>
                <a href="https://www.movilidadbogota.gov.co/web/noticia/deyanira_avila_nueva_directora_transitoria_de_la_agencia_regional_de_movilidad" rel="noopener noreferrer" target="_blank">Ir a la noticia completa</a>
            </div>
        </div>

        <div class="new">
            <div class="img-new"><a href="https://www.movilidadbogota.gov.co/web/noticia/la_primera_gran_obra_sera_el_intercambiador_de_la_calle_80_con_av_las_quintas" rel="noopener noreferrer" target="_blank"><img alt="Foto - La primera gran obra será el intercambiador de la calle 80 con Av. Las Quintas" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/26-04-2023/sxcv-imagen_230426_r5.jpg" title="Foto - La primera gran obra será el intercambiador de la calle 80 con Av. Las Quintas"> </a></div>
            <div class="txt-new">
                <h3><a href="https://www.movilidadbogota.gov.co/web/noticia/la_primera_gran_obra_sera_el_intercambiador_de_la_calle_80_con_av_las_quintas" rel="noopener noreferrer" target="_blank">La primera gran obra será el intercambiador de la calle 80 con Av. Las Quintas</a></h3>
                <p><strong>Bogotá, 26 de abril de 2023 (@SectorMovilidad).</strong> La Agencia Regional de Movilidad -ARM- nace para mejorar los desplazamientos de los ciudadanos en Bogotá y la región, gracias a que adelantará entre otros, proyectos de infraestructura que articulen el sistema regional de transporte.</p>
                <a href="https://www.movilidadbogota.gov.co/web/noticia/la_primera_gran_obra_sera_el_intercambiador_de_la_calle_80_con_av_las_quintas" rel="noopener noreferrer" target="_blank">Ir a la noticia completa</a>
            </div>
        </div>

        <style type="text/css">
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
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
                /* padding: 0 2em 2em 2em; */
                margin: 1em;
            }

            .img-new img {
                max-height: 300px;
                object-fit: cover;
                object-position: center;
                border-radius: 4px;
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
                    grid-template-columns: 20% 80%;
                    grid-template-areas:
                        'imagen texto';
                }
            }
        </style>


    </div>
    <style>
        .set-wrapper .box-noticias {
            grid-area: box-noticias;
        }
    </style>

</div>
<!-- Fin Set -->
