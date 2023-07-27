@extends ('welcome')
@section ('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class="mpv-body">
    <!-- row banner principal -->
    <div class="row">
        <!-- sx -->
        <div class="col-xs-12 visible-xs-block"><img alt="Titulo Principal: Más y mejores cicloparqueaderos." class="bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-05-2021/16_-_banner_mas.y-mejores-cicloparqueaderos_v3.1.jpg" style="width: 100%;" title="Más y mejores cicloparqueaderos."></div>
        <!-- sm -->
        <div class="col-xs-12 hidden-xs"><img alt="Titulo Principal: Más y mejores cicloparqueaderos." class="bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-05-2021/16_-_banner_mas.y-mejores-cicloparqueaderos_v3.jpg" style="width: 100%;" title="Más y mejores cicloparqueaderos."></div>
    </div><!-- fin row banner principal -->


    <!-- Sección box contador -->
    <div class="box-contador">
        <div class="titulo">
            <div class='row'>
                <div class='col-xs-12 col-sm-12 col-md-12 '>
                    <h3>Contador de cupos <span class="enfasis">de cicloparqueaderos de Bogotá</span></h3>
                </div>
            </div>
        </div>
        <div class="cards">
            <div class="card-cont cont-1">
                <div class="imagen img-contador-1">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-07-2023/logo_sellodorado_230710.png" alt="Icono sello dorado" title="Icono sello dorado">
                </div>
                <div class="texto">
                    <p>Sellos de calidad</p>
                </div>
                <div class="valor">
                    <p>30.392</p>
                </div>
            </div>
            <div class="card-cont cont-2">
                <div class="imagen img-contador-2">
                    <img class="img-responsive w-100" src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-03-2022/actualizacion_piezas_micrositio_cicloparqueaderos_dic_2021_icono3.png' alt='icono sellos de calidad' title='icono sellos de calidad'>
                </div>
                <div class="texto">
                    <p>Total de cupos en Bogotá</p>
                </div>
                <div class="valor">
                    <p>62.670</p>
                </div>
            </div>

        </div>

    </div>
    <style>
        .mpv-body .box-contador {
            padding: 20px 25px 10px 25px;
            margin-top: 30px;
            margin-bottom: 30px;
            background-color: rgba(255, 255, 255, 1);
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        }

        .box-contador .titulo {
            text-align: center;
        }

        .box-contador .titulo h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 22px;
            font-weight: 800;
            text-align: center;
            line-height: 1.4;
            color: #1C2046;
            margin: 8px;
            margin-bottom: 16px;
        }

        .box-contador .titulo .enfasis {
            background-color: #66e026;
            color: #fff;
            text-transform: uppercase;
            padding: 5px;
            font-weight: 800;
            font-size: 1.1em;
        }

        .mpv-body .box-contador .cards {
            background: rgba(255, 255, 255, 1);
            grid-area: box-contador;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr ;
            grid-template-rows: auto;
        }
        @media(min-width:768px){
            .mpv-body .box-contador .cards {
            display: grid;
            gap: 8px;
            grid-template-columns: 1fr 1fr;
        }
        }

        .box-contador .cards .card-cont {
            /* height: px; */
            display: flex;
            /* flex-direction: column; */
            justify-content: center;
            align-items: center;
        }

        .box-contador .imagen {
            max-width: 80px;
        }

        .box-contador .texto {
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            line-height: 1;
            margin: 0px;
            color: #1C2046;
            letter-spacing: 1.1;
            padding: 5px;
        }
        .box-contador .texto p{
           margin: 8px;
        }

        .box-contador .valor {
            background-color: #66e026;
        }

        .box-contador .valor p {
            margin: 0px;
            padding: 8px;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
            font-weight: 700;
            text-align: center;
            line-height: 1;
        }
    </style>




    <hr><!-- row mapa -->
    <div class="row row-mp">
        <div class="col-xs-12 col-cp-car">
            <div class="cp-mp-title bs-n">
                <h3 class="ts-b">Red de cicloparqueaderos de Bogotá</h3>
            </div>
            <div class="cp-mp-img "><iframe _ngcontent-c2="" allowfullscreen="" class="embed-responsive-item" height="450" src="https://movilidadbogota.maps.arcgis.com/apps/webappviewer/index.html?id=209e406d0989438ab38e8255eab63144" width="100%"></iframe>
                <!-- <a href="https://mapas.bogota.gov.co/"><img class="img-responsive bs-n" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-04-2021/7_-_mapa_ciclorrutas_bogota0.jpg" alt=""></a> -->
            </div>
        </div>
    </div><!-- row mapa -->
    <hr><!-- row tab-pane -->
    <div class="row row-cp-cont-tp bs-n">
        <div class="col-xs-12 col-sm-8 col-cp-car">
            <!-- Carousel Default -->
            <div class="cp-carousel">

                <div class="carousel slide bs" data-ride="carousel" id="carousel-default">


                    <!-- indicadores -->
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#carousel-default"></li>
                        <li data-slide-to="1" data-target="#carousel-default"></li>
                        <li data-slide-to="2" data-target="#carousel-default"></li>
                        <li data-slide-to="3" data-target="#carousel-default"></li>
                        <li data-slide-to="4" data-target="#carousel-default"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">

                        <div class="item active">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-07-2023/recurso_cicloparqueaderos_680x450_003.png" title="La secretaria de Movilidad, Deyanira Ávila entregó la certificación. Foto:SDM" alt="La secretaria de Movilidad, Deyanira Ávila entregó la certificación. Foto:SDM" height="100%">
                            <div class="carousel-caption bs-n">
                                <p>Bogotá, 28 de abril de 2023. @Sectormovilidad. Marymount se convierte en el primer colegio de Bogotá en recibir la certificación Sello Oro de la Red de Cicloparqueaderos</p>
                            </div>
                        </div>
                        <div class="item ">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-07-2023/recurso_cicloparqueaderos_680x450_005.png" title="Fotografia de actividades Cicloparqueaderos" alt="Fotografia de actividades Cicloparqueaderos " height="100%">
                            <!-- <div class="carousel-caption bs-n">
                                <p>Bogotá cierra el año con más de 56.000 cupos para el parqueo de bicicletas y 301 establecimientos certificados por la Red Distrital de Cicloparqueaderos</p>
                            </div> -->
                        </div>
                        <div class="item ">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-07-2023/recurso_cicloparqueaderos_680x450_001.png" title="Bogotá, la Red Distrital de Cicloparqueaderos cierra este año con más de 56.000 cupos para el parqueo seguro de bicicletas, de los cuales, 27.012 han sido certificados con los Sellos de Calidad Oro y Plata de la Secretaría Distrital de Movilidad." alt="Bogotá, la Red Distrital de Cicloparqueaderos cierra este año con más de 56.000 cupos para el parqueo seguro de bicicletas, de los cuales, 27.012 han sido certificados con los Sellos de Calidad Oro y Plata de la Secretaría Distrital de Movilidad. " height="100%">
                            <div class="carousel-caption bs-n">
                                <p>Bogotá, 26 de diciembre de 2022. @Sectormovilidad.- @UMVbogota). Bogotá cierra el año con más de 56.000 cupos para el parqueo de bicicletas y 301 establecimientos certificados por la Red Distrital de Cicloparqueaderos</p>
                            </div>
                        </div>
                        <div class="item ">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-07-2023/recurso_cicloparqueaderos_680x450_004.png" title="Fotografia de actividades Cicloparqueaderos" alt="Fotografia de actividades Cicloparqueaderos " height="100%">
                            <!-- <div class="carousel-caption bs-n">
                                <p>Bogotá cierra el año con más de 56.000 cupos para el parqueo de bicicletas y 301 establecimientos certificados por la Red Distrital de Cicloparqueaderos</p>
                            </div> -->
                        </div>
                        <div class="item">
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-07-2023/recurso_cicloparqueaderos_680x450_002.png" title="Entrega de la certificación Sello Oro al cicloparqueadero del Concejo de Bogotá. De izq. a der. concejala María Fernanda Rojas; secretaria de Movilidad, Deyanira Ávila; y el presidente del Concejo, Samir Abisambra" alt="" height="100%">
                            <div class="carousel-caption bs-n">
                                <p>Bogotá, 11 de noviembre de 2022. @Sectormovilidad. Concejo de Bogotá recibe la certificación Sello Oro por su cicloparqueadero.</p>
                            </div>
                        </div>
                    </div>

                    <a class="left carousel-control" data-slide="prev" href="#carousel-default" role="button"><span class="sr-only">Previous</span> </a> <a class="right carousel-control" data-slide="next" href="#carousel-default" role="button"> <span class="sr-only">Next</span> </a>
                </div>
            </div>
        </div>
        <div aria-hidden="true" aria-labelledby="modal1Label" class="modal fade" id="modal1" role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content cp-modal"><img alt="imagen - contador de sellos de calidad" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-12-2021/contador_sellos_de_calidad_-_dic.jpg">
                    <!-- <div class="cp-tp-img-text">
                                            <p>Some content in menu 1.</p>
                                        </div> -->
                </div>
            </div>
        </div>
        <div aria-hidden="true" aria-labelledby="modal1Label" class="modal fade" id="modal3" role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content cp-modal">
                    <!-- <img class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-05-2021/12_-_tipos_de_mobiliario-p1.jpg" alt=""> -->
                    <div class="row" style="margin: 20px;">
                        <div class="col-xs-12 cp-col"><img alt="imagen - cantidad de ciclopaqueaderos vs cantidad de parqueaderos" class="bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-05-2021/11a_-_cicloparqueaderos_vs_parqueaderos_-_v1.jpg" style="width: 100%;"></div>
                    </div>
                    <div class="row" style="margin: 20px;">
                        <div class="col-xs-12 cp-col"><img alt="imagen - cantidad de funcionarios que van en bicicleta al trabajo" class="bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-05-2021/11b_-_funcionarios_bicicleta-v1.jpg" style="width: 100%;"></div>
                    </div>
                    <div class="row" style="margin: 20px;">
                        <div class="col-xs-12 cp-col"><img alt="imagen - cantidad de contratistas que van en bicicleta al trabajo" class="bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-05-2021/11c_-_contratistas_bicicleta-v1.jpg" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div aria-hidden="true" aria-labelledby="modal1Label" class="modal fade" id="modal4" role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content cp-modal"><img alt="imagen - mobiliario urbano tipo cicloparqueadero o rack de bicicletas" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-05-2021/12_-_tipos_de_mobiliario-p1.jpg">
                    <!-- <div class="cp-tp-img-text">
                                            <p>Some content in menu 1.</p>
                                        </div> -->
                </div>
            </div>
        </div>
        <div aria-hidden="true" aria-labelledby="modal1Label" class="modal fade" id="modal5" role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content cp-modal"><img alt="imagen - guiá rápida para asegurar tu bici" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-05-2021/14_-_como_asegurar_bici.jpg"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4" style="vertical-align: middle;">
            <div class="row row-btn">
                <!-- 1 OK-->
                <div class="col-xs-12 btn-sub-cp bs"><span class="navbar-header"><img alt=" icono - moneda" class="icon-btn" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-05-2021/17.01_-_icono_dinero.png"> </span> <a class="bs-b" href="https://bit.ly/Procedimientos-y-Parametros-Plan-Marshall" target="_blank"> Inversión de Cicloparqueaderos ¡Entérate!</a></div><!-- 2 OK-->
                <div class="col-xs-12 btn-sub-cp bs">
                    <div class="navbar-header"><img alt="icono - libreta" class="icon-btn" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-05-2021/17.02_-_icono_documento.png"></div><a class="bs-b" href="http://bit.ly/Plan_Marshall" target="_blank">Formato de registro cicloparqueaderos</a>
                </div><!-- 3 -->
                <div class="col-xs-12 btn-sub-cp bs">
                    <div class="navbar-header"><img alt="icono - bicicleta" class="icon-btn" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-05-2021/17.03_-_icono_bici_cicloparqueadero_1.png"></div><a class="bs-b" href="https://www.movilidadbogota.gov.co/web/conoce_acerca_de_los_sellos_de_calidad" target="_blank">Conoce acerca de los Sellos de Calidad</a>
                </div><!-- 4 OK-->
                <div class="col-xs-12 btn-sub-cp bs">
                    <div class="navbar-header"><img alt="icono - bicicleta" class="icon-btn" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-05-2021/17.03_-_icono_bici_cicloparqueadero_1.png"></div><a class="bs-b" data-controls-modal="your_div_id" data-keyboard="false" data-toggle="modal" href="https://docs.google.com/forms/d/e/1FAIpQLScmxJreGcrc1LUuQ1I5XyAf373k2qA-erkzGvdF5MGRhKqV_g/viewform" target="_blank">Postúlate a los Sellos de Calidad</a>
                </div><!-- 4-2 OK-->
                <div class="col-xs-12 btn-sub-cp bs">
                    <div class="navbar-header"><img alt="icono - registro Bici" class="icon-btn" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-05-2021/icono-registro-bici-bogota.png"></div><a class="bs-b" data-controls-modal="your_div_id" data-keyboard="false" data-toggle="modal" href="https://registrobicibogota.movilidadbogota.gov.co/#!/" target="_blank">Registro Bici</a>
                </div><!-- 5 OK-->
                <div class="col-xs-12 btn-sub-cp bs">
                    <div class="navbar-header"><img alt="icono - la bici en cifras" class="icon-btn" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-05-2021/17.05_-_icono_grafica.png"></div><a class="bs-b" href="https://www.movilidadbogota.gov.co/web/cicloparqueaderos_2" target="_blank">La bici en cifras ¡Conócelas!</a>
                </div><!-- 6 OK-->
                <div class="col-xs-12 btn-sub-cp bs">
                    <div class="navbar-header"><img alt="icono - ranking distrital" class="icon-btn" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-05-2021/17.06_-_icono_ranking.png"></div><a class="bs-b" data-controls-modal="your_div_id" data-keyboard="false" data-toggle="modal" href="#modal3">Ranking distrital de cicloparqueaderos ¡Míralos!</a>
                </div><!-- 7 OK-->
                <div class="col-xs-12 btn-sub-cp bs">
                    <div class="navbar-header"><img alt="icono - tipos de mobiliarios" class="icon-btn" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-05-2021/17.07_-_icono_cicloparqueadero_u_invertida.png"></div><a class="bs-b" data-controls-modal="your_div_id" data-keyboard="false" data-toggle="modal" href="#modal4">Conoce los tipos de mobiliarios</a>
                </div><!-- 8 OK-->
                <div class="col-xs-12 btn-sub-cp bs">
                    <div class="navbar-header"><img alt="icono - Tips de cuidado " class="icon-btn" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-05-2021/17.08_-_icono_candado.png"></div><a class="bs-b" data-controls-modal="your_div_id" data-keyboard="false" data-toggle="modal" href="#modal5">¡Ojo con la bici! Tips de cuidado</a>
                </div>
            </div>
        </div>

    </div><!--  fin row tab-pane -->
    <hr><!-- row botones documentos -->
    <div class="row row-cp-cont-bn">
        <div class="div-cp-cont-bn">
            <div class="col-xs-6 col-sm-3">
                <div class="cp-bn-img"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-04-2021/politica_publica_de_la_bicicleta.pdf" target="_blank"><img alt="botón - Politica Bicicleta" class="img-responsive cp-btn-img zoom bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-05-2021/3_-_btn_cicloparqueaderos-1_politica_bicicleta_-_v2.1.jpg"></a></div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="cp-bn-img"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-04-2021/guia_de_ciclo-infraestructura_para_ciudades_colombianas.pdf" target="_blank"><img alt="Botón - Guía Infraestructura" class="img-responsive cp-btn-img zoom bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-05-2021/4_-_btn_cicloparqueaderos-2_guia_infraestructura_-_v2.1.jpg"></a></div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="cp-bn-img"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-04-2021/decreto_058_de_2021_antejardines.pdf_.pdf" target="_blank"><img alt="Botón -  Decreto 59 de 2021" class="img-responsive cp-btn-img zoom bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-05-2021/5_-_btn_cicloparqueaderos-3_decreto_-_v2.1.jpg"></a></div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="cp-bn-img"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-05-2021/acuerdo_780_de_2020_y_decreto_reglamentario_091_de_2021.pdf" target="_blank"><img alt="Botón -  Plan Marshall" class="img-responsive cp-btn-img zoom bs" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-05-2021/6_-_btn_cicloparqueaderos-4_plan_marshall_-_v2.1.jpg"></a></div>
            </div>
        </div>
    </div><!--  fin row botones documentos -->
    <hr><!-- row noticias -->
    <div class="row  row-cp-nt">
        <div class="col-xs-12 col-sm-6 cp-col-video">
            <div class="cp-video bs">
                <iframe src="https://www.youtube.com/embed/2fl8Hh66bro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="row">
                <div class="cp-card bs">
                    <a href="https://www.movilidadbogota.gov.co/web/noticia/a_partir_de_hoy_el_registro_bici_se_realiza_de_manera_virtual_en_un_solo_paso">
                        <div class="col-xs-4 col-sm-3 cp-np-img-1"></div>
                        <div class="col-xs-7 col-sm-9">
                            <div class="cp-np-text">
                                <h4>En el año 2022 Bogotá avanzó en movilidad sostenible y siguió mejorando su infraestructura vial.</h4>
                                <p>Bogotá, 24 de febrero de 2023 (@SectorMovilidad). Este viernes, 24 de febrero, el sector Movilidad y las entidades que lo conforman (Secretaría de Movilidad, IDU, UMV, TransMilenio, Empresa Metro, La Rolita y La Terminal de Transportes) llevaron a cabo la Audiencia Pública de Rendición de Cuentas, espacio en donde se dieron a  conocer los logros alcanzados a lo largo del año 2022. </p>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="cp-card bs">
                    <a href="https://www.movilidadbogota.gov.co/web/noticia/marcando_el_cambio_hacia_una_movilidad_mas_sostenible">
                        <div class="col-xs-4 col-sm-3 cp-np-img-2"></div>
                        <div class="col-xs-7 col-sm-9">
                            <div class="cp-np-text">
                                <h4>La ciudad se consolida como un referente mundial en el uso y promoción de la bicicleta</h4>
                                <p>Bogotá, 4 de enero de 2023 (@SectorMovilidad). La Secretaría Distrital de Movilidad le presentó a la ciudadanía un balance sobre los avances que ha tenido Bogotá en materia de infraestructura, proyectos, pedagogía y estrategias enfocadas en el uso y promoción de la bicicleta como un medio de transporte sostenible.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div><!-- fin row noticias -->
    <hr><!-- row boton alerta -->
    <div class="row row-report-btn ">
        <div class="col-xs-12 col-cp-car visible-xs-block"><a href="https://docs.google.com/a/movilidadbogota.gov.co/forms/d/e/1FAIpQLScr3QmW2vSJF9cvFynRwUJjG6RdqjlFEO1SJtihbHLRraz4Kg/viewform"><img alt="Banner - Reporte Cicloparqueaderos qu no cumplen los requisitos" class="img-responsive bs-n" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-05-2021/piezas_para_micrositio_cicloparqueaderos_btn_reporte_cicloparqueaderos400x110.png"> </a></div>
        <div class="col-xs-12 col-cp-car hidden-xs"><a href="https://docs.google.com/a/movilidadbogota.gov.co/forms/d/e/1FAIpQLScr3QmW2vSJF9cvFynRwUJjG6RdqjlFEO1SJtihbHLRraz4Kg/viewform"><img alt="Banner - Reporte Cicloparqueaderos qu no cumplen los requisitos" class="img-responsive bs-n" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-04-2021/15_-_btn_reporte_cicloparqueaderos0.jpg"> </a></div>
    </div><!-- fin row boton alerta -->
</div>


<style type="text/css">
    .node-unpublished {
        background: none;
    }

    .field-name-title {
        visibility: hidden;
        height: 0px;
    }

    .mpv-body {
        max-width: 940px;
        margin: auto;
    }

    h2 {
        /* visibility: hidden; */
        text-align: center;
        padding: 1rem;
        color: #1C2046 !important;
    }

    html {
        width: 100%;
        background: #ffffffff;
        color: rgb(30, 30, 30);
        font-size: 14pt !important;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        line-height: normal;
        line-height: 1.4;
    }

    /*Margin and Padding helpers*/
    /*xs*/

    .f-table {
        margin-top: -1.8rem;
    }

    .p-xs {
        padding: .25em;
    }

    .p-x-xs {
        padding: 0 .25em;
    }

    .p-y-xs {
        padding: .25em 0;
    }

    .p-t-xs {
        padding-top: .25em;
    }

    .p-r-xs {
        padding-right: .25em;
    }

    .p-b-xs {
        padding-bottom: .25em;
    }

    .p-l-xs {
        padding-left: .25em;
    }

    .m-xs {
        margin: .25em;
    }

    .m-x-xs {
        margin: 0 .25em;
    }

    .m-y-xs {
        margin: .25em 0;
    }

    .m-r-xs {
        margin-right: .25em;
    }

    .m-l-xs {
        margin-left: .25em;
    }

    .m-t-xs {
        margin-top: .25em;
    }

    .m-b-xs {
        margin-bottom: .25em;
    }
    }

    @media (min-width:1200px) {
        .hidden-xl {
            display: none !important;
        }

        /*sm*/
        /*sm*/

        .p-sm {
            padding: .5em;
        }

        .p-x-sm {
            padding: 0 .5em;
        }

        .p-y-sm {
            padding: .5em 0;
        }

        .p-t-sm {
            padding-top: .5em;
        }

        .p-r-sm {
            padding-right: .5em;
        }

        .p-b-sm {
            padding-bottom: .5em;
        }

        .p-l-sm {
            padding-left: .5em;
        }

        .m-sm {
            margin: .5em;
        }

        .m-x-sm {
            margin: 0 .5em;
        }

        .m-y-sm {
            margin: .5em 0;
        }

        .m-t-sm {
            margin-top: .5em;
        }

        .m-r-sm {
            margin-right: .5em;
        }

        .m-b-sm {
            margin-bottom: .5em;
        }

        .m-l-sm {
            margin-left: .5em;
        }
    }

    /*md*/
    @media (min-width: 992px) {
        .p-md {
            padding: 1em;
        }

        .p-x-md {
            padding: 0 1em;
        }

        .p-y-md {
            padding: 1em 0;
        }

        .p-t-md {
            padding-top: 1em;
        }

        .p-r-md {
            padding-right: 1em;
        }

        .p-b-md {
            padding-bottom: 1em;
        }

        .p-l-md {
            padding-left: 1em;
        }

        .m-md {
            margin: 1em;
        }

        .m-x-md {
            margin: 0 1em;
        }

        .m-y-md {
            margin: 1em 0;
        }

        .m-t-md {
            margin-top: 1em;
        }

        .m-r-md {
            margin-right: 1em;
        }

        .m-b-md {
            margin-bottom: 1em;
        }

        .m-l-md {
            margin-left: 1em;
        }
    }

    /*lg*/
    @media (min-width: 1200px) {
        .p-lg {
            padding: 1.5em;
        }

        .p-x-lg {
            padding: 0 1.5em;
        }

        .p-y-lg {
            padding: 1.5em 0;
        }

        .p-t-lg {
            padding-top: 1.5em;
        }

        .p-r-lg {
            padding-right: 1.5em;
        }

        .p-b-lg {
            padding-bottom: 1.5em;
        }

        .p-l-lg {
            padding-left: 1.5em;
        }

        .m-lg {
            margin: 1.5em;
        }

        .m-x-lg {
            margin: 0 1.5em;
        }

        .m-y-lg {
            margin: 1.5em 0;
        }

        .m-t-lg {
            margin-top: 1.5em;
        }

        .m-r-lg {
            margin-right: 1.5em;
        }

        .m-b-lg {
            margin-bottom: 1.5em;
        }

        .m-l-lg {
            margin-left: 1.5em;
        }
    }

    /*xl*/
    .p-xl {
        padding: 3em;
    }

    .p-x-xl {
        padding: 0 3em;
    }

    .p-y-xl {
        padding: 3em 0;
    }

    .p-t-xl {
        padding-top: 3em;
    }

    .p-r-xl {
        padding-right: 3em;
    }

    .p-b-xl {
        padding-bottom: 3em;
    }

    .p-l-xl {
        padding-left: 3em;
    }

    .m-xl {
        margin: 3em;
    }

    .m-x-xl {
        margin: 0 3em;
    }

    .m-y-xl {
        margin: 3em 0;
    }

    .m-t-xl {
        margin-top: 3em;
    }

    .m-r-xl {
        margin-right: 3em;
    }

    .m-b-xl {
        margin-bottom: 3em;
    }

    .m-l-xl {
        margin-left: 3em;
    }
    }

    /*------------------------------------------------------------------------------------------------------  Contenido CSS editable --------------------------------------------------------------------------------- */
    .cp-hr {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .cp-container {
        padding-left: 0px;
        padding-right: 0px;
    }

    .row-cp-nt {
        margin: 50px 0px 20px 0px;
    }

    .cp-video {
        display: flex;
        height: 360px;
        width: 100%;
        margin: auto 0rem auto 0rem;
        /* display: table-cell; */
        vertical-align: middle;
        align-items: center;
        text-align: center;
        justify-content: center;
    }

    .cp-video iframe {
        width: 100%;
        height: 100%;
    }

    .cp-col-video {
        padding-bottom: 20px;
    }

    .cp-card {
        padding: 10px;
        height: 170px;
        max-height: 170px;
        margin: 10px;
    }

    .cp-card a {
        /* max-height: 300px; */
        text-decoration: none;
        color: black;
    }

    .cp-np-img-1 {
        height: 150px;
        background-image: url('https://lh6.googleusercontent.com/L1rfa40ttXuc7kE7QVedlne2F_mixar5JdeYlX3gt9E8K6koYLFW5MaSTy8v1d8mFio9xbKmrwXPf3egcJ1bESafvQzVUjj0RSI-Vv2Hb9mA23PMFKwgIOrhzpQyh_HUUsO8goamsy3NajwtUdybwQ');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        overflow: hidden;

    }

    .cp-np-img-2 {
        height: 150px;
        background-image: url('https://lh3.googleusercontent.com/6-UNwkzd5jbK7KkRWazDLCtSyOjOuOzK883d8QkyazCAyqDTKjuuJSVd2aVqaN3Xt-wSGLl_B0gqVo7HY34WG7kIZi4pt5dxpwA5gpvQF1ica_d9ZrjTOhfNM4X0Futbu37J6URtHiClLPJHqGYsTq_RsGlFzfiHcED929d-V1KKv6JGNZEuAlyoh3V0g9l-unXOCLjVGw');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        overflow: hidden;

    }

    .cp-np-img {
        padding: 5px;
        max-width: 140px;
        min-width: 100px;

    }

    .cp-btn-img {
        max-width: 180px;
        min-width: 80px;
    }

    .cp-np-text {
        overflow: hidden !important;
    }

    .cp-np-text p,
    h4 {
        padding: 4px;
    }

    .cp-np-text h4 {
        height: 50px;
        white-space: wrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 0.8rem;
        font-weight: 600;
        color: #1C2046;
    }

    .cp-np-text p {
        height: 80px;
        white-space: pre-wrap;
        overflow: auto;
        text-overflow: "Ver más" !important;
        font-size: small;
        text-align: left;
        color: #1C2046;
        /* font-weight: 600; */
    }

    .div-cp-cont-bn {
        display: block;
        margin: auto;
        text-align: center;
    }

    /* botones */
    .row-btn {
        margin: 5px auto;
        padding: 5px;
        height: 360px;
        max-height: 360px;
    }

    .btn-sub-cp {
        margin: 5px;
        background: #ffffffff;
        height: 45.5px;
        display: table;
        padding: 0px;
    }

    .btn-sub-cp:hover,
    {
    margin: 5px;
    background: #1C2046;
    display: table;
    }

    .btn-sub-cp a {
        display: table-cell;
        vertical-align: middle;
        text-decoration: none;
        color: #1C2046 !important;
        margin: 5px;
        font-weight: 600;
        padding-right: 10px;
        width: 100%;
        padding-left: 5px;
    }

    .btn-sub-cp:hover>a {
        color: #66e026 !important;
        background: #1C2046;
        padding-left: 5px;
    }

    .btn-sub-cp navbar-header:hover,
    .btn-sub-cp a:hover {
        display: table-cell;
        text-decoration: none;
        color: #66e026 !important;
    }

    .row-cp-cont-tp {
        padding: 15px 0px;
    }

    /* carrusel */
    .row-cp-cont-bn {
        margin: 0px 0px 0px 0px;
        /* background: #66e026 !important; */
        /* max-height: ; */
    }

    .cp-carousel {
        padding: 17px 10px 10px 10px;
        min-height: 200px;
        max-height: 500px;
    }

    .cp-carousel>.carousel img {
        min-height: 200px;
        max-height: 490px;
    }

    .carousel-inner {
        background: #0000009f;
    }

    .carousel-inner>.item img {
        justify-content: center;
        margin: 0 auto;
    }

    .carousel-caption {
        background: #33333365;
        border-radius: 5px;
    }

    /* carrusel 1080*/
    @media (min-width:768px) {
        .cp-carousel>.carousel img {
            height: 500px;
        }

        .btn-sub-cp {
            margin: 5px;
            background: #ffffffff;
            height: 46px;
            display: table;
        }
    }

    /* carrusel 1080*/
    @media (min-width:1080px) {
        .cp-carousel>.carousel img {
            min-height: 200px;
            x max-height: 470px;
        }

        .btn-sub-cp {
            margin: 5px;
            background: #ffffffff;
            height: 46px;
            display: table;
        }
    }

    .cp-bn-img {
        margin-top: 5%;
        margin-bottom: 5%;
        padding: 15px 30px 15px 30px;
        /* width: 100%; */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .cp-bn-img img {
        width: 100%;
        border-radius: 6px;
    }

    .row-cp-cont-tp {
        margin: 40px 0px 20px 0px;
        background: #dadada65;
    }

    .cp-tp-li {
        border-radius: 0%;
        padding: auto;
        list-style: square !important;
        margin-bottom: 10px;
        margin-right: 10px;
        height: 55px;
    }

    .cp-tp-li a {
        color: #1C2046 !important;
        font-size: 0.8rem;
        font-weight: 700;
        text-shadow: 1px 1px 20px rgba(0, 0, 0, 0.54);
        /* font-style: italic; */
    }

    .cp-tp-li a:hover {
        color: #eee !important;
        font-size: 0.8rem;
        font-weight: 600;
        /* font-style: italic; */
        background: #1C2046 !important;
        border-radius: 0px;
    }

    .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover {
        color: #66e026 !important;
        background-color: #1C2046;
        border-radius: 0%;
        height: 100%;
    }

    .cp-tp-img-text {
        padding: 10px;
        color: #66e026;
        text-align: center;
        text-shadow: 1.5px 1.5px 1.5px 1.5px #ffffff54;
        /* position: absolute; */
        /* top: 10px;
            left: 10px;
            margin: -80px 0px 0px 15px; */
    }

    .cp-modal {
        background: #0000009f;
        /* height: 10vh; */
    }

    .cp-mp-title {
        background: #1C2046;
        min-height: 60px;
        padding: 10px 0px 10px 0px;
        text-align: center;
        color: #ffffffff;
        font-size: medium;
    }

    .row-mp {
        margin: 40px 0px 20px 0px;
    }

    .cp-mp-img {
        width: 100%;
        padding: 20px 0px 20px 0px;
    }

    .cp-np-imgr {
        height: 125px;
        max-width: 125px;
    }

    .row-report-btn {
        margin: 15px 0px 10px 0px;
    }

    .col-cp-car {
        padding-right: 0%;
        padding-left: 0%;
    }

    .col-nav {
        margin: 15px 0px 15px 0px;
        padding: 0px;
    }

    .zoom {
        transition: 1.5s ease;
        -moz-transition: 1.5s ease;
        /* Firefox */
        -webkit-transition: 1.5s ease;
        /* Chrome - Safari */
        -o-transition: 1.5s ease;
        /* Opera */
    }

    .zoom:hover {
        transform: scale(1.2);
        -moz-transform: scale(1.2);
        /* Firefox */
        -webkit-transform: scale(1.2);
        /* Chrome - Safari */
        -o-transform: scale(1.2);
        /* Opera */
        -ms-transform: scale(1.2);
        /* IE9 */
    }

    .bs {
        box-shadow: 5px 5px 15px #1c204654;
    }

    .bs-n {
        box-shadow: 5px 5px 15px #00000054;
    }

    .ts-b {
        text-shadow: 1.5px 1.5px 1.5px 1.5px #ffffff54;
        color: #66e026;
        font-weight: 700;
    }

    .icon-btn {
        margin: 10px !important;
        width: 25px;
    }

    /*------------------------------------------------------------------------------------------------------ Fin Contenido editable --------------------------------------------------------------------------------- */
</style>
