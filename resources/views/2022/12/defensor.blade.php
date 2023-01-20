@extends('welcome')
@section('contenido')

<!-- defensor -->
<!-- Google fonts - Montserrat  -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>

<!-- Styles -->
<style type='text/css'>
    :root {
        --color-primario: #20223D;
        --color-secundario: #BBCE31;
        --color-terciario: #bed000;
        --color-cuaternario: #98A520;
        --color-gris: #e5e5e5;
        --color-gris-fuerte: #c5c5c5;
        --color-blanco: #ffffff;
        --color-negro: #191919;
        --color-fondo: #333333;
    }

    .field-item.even .centertil{
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .w-100 {
        width: 100%;
    }

    .defensor {
        max-width: 980px;
        margin: auto;
        padding-bottom: 20px;
        word-break: break-word;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: left;
        line-height: 1.5;
        color: var(--color-primario);
    }

    .defensor .paragraph {
        font-size: 15px;
        font-weight: 500;
        text-align: left;
        line-height: 1.5;
        color: var(--color-primario);
    }
</style>
<!-- End Styles -->

<!-- Set Wrapper -->
<div class='container-fluid defensor'>
    <div class='set-wrapper'>


        <!-- Sección box header -->
        <div class="box-header">

            <div class="logo logo-ppal">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2022/recurso_3.png" alt="logo - Defensor Ciudadano">
            </div>
            <style>
                .box-header .logo-ppal {
                    grid-area: cpte-logo-ppal;
                    padding: 2em;
                }

                .box-header .logo-ppal img {
                    max-width: 300px;
                    margin: auto;
                }
            </style>

            <div class="title title-h2-ppal">
                <h2>Soy defensor del ciudadano</h2>
            </div>
            <style>
                .box-header .title-h2-ppal {
                    grid-area: cpte-title-ppal;
                    background-color: var(--color-terciario);
                }

                .box-header .title-h2-ppal h2 {
                    font-size: 24px;
                    font-weight: 700;
                    line-height: 1;
                    text-align: center;
                    margin: 0px;
                    color: var(--color-primario);
                    text-transform: uppercase;
                    padding: 16px;

                }
            </style>

            <div class="title title-h3-sdo">
                <h3>¡Estoy para servirte!</h3>
            </div>
            <style>
                .box-header .title-h3-sdo {
                    grid-area: cpte-title-sdo;
                    padding: 16px;
                }

                .box-header .title-h3-sdo h3 {
                    font-size: 18px;
                    font-weight: 600;
                    text-align: center;
                    line-height: 1;
                    color: var(--color-blanco);
                    text-transform: uppercase;
                    margin: 0px;
                }
            </style>

            <div class="imagen img-silueta-ppal">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2022/recurso_4.png" alt="Imagen de funcionaria con el pulgar arriba" title="Imagen de funcionaria con el pulgar arriba">
            </div>
            <style>
                .box-header .img-silueta-ppal {
                    grid-area: cpte-silueta;
                    visibility: hidden;
                    position: absolute;
                }
            </style>

        </div>
        <style>
            .set-wrapper .box-header {
                grid-area: box-header;
                background-color: var(--color-primario);
                background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2022/recurso_10.png');
                background-repeat: no-repeat;
                background-size: cover;
                background-blend-mode: soft-light;
            }

            @media(min-width:768px) {
                .set-wrapper .box-header {
                    display: grid;
                    grid-auto-flow: dense;
                    grid-template-columns: 1fr 1fr;
                    grid-template-rows: auto;
                    grid-template-areas:
                        'cpte-logo-ppal cpte-silueta'
                        'cpte-title-ppal cpte-silueta'
                        'cpte-title-sdo cpte-silueta';
                    border-radius: 3em 3em 0 0;
                }

                .box-header .img-silueta-ppal {
                    visibility: visible;
                    position: relative;
                    transform: scale(1.04);
                    max-width: 350px;
                    margin: auto;
                    margin-top: -36px;

                }

                .box-header .title-h2-ppal {
                    grid-area: cpte-title-ppal;
                    background-color: var(--color-terciario);
                    padding: 0px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                }

            }

            @media(min-width:992px) {
                .box-header .img-silueta-ppal {
                    visibility: visible;
                    position: relative;
                    transform: scale(1.04);
                    max-width: 350;
                    margin: auto;
                    margin-top: -50px;
                }
            }
        </style>


        <!-- Sección box definicion -->
        <div class="box-definicion">
            <div class="paragraph ph-1">
                <p>La Secretaría Distrital de Movilidad cuenta con la figura del <strong>Defensor de la Ciudadanía</strong>, como herramienta que garantiza el cumplimiento de los derechos y deberes a los ciudadanos, a obtener respuestas oportunas y de calidad a sus requerimientos, que sus quejas y reclamos sean solucionadas y que se establezcan mecanismos de participación en el diseño y prestación de servicios.</p>
                <p><strong>En cumplimiento al Decreto 847 de 2019 y a la Resolución 078 de 2019, de la Secretaría Distrital de Movilidad.</strong></p>
            </div>
        </div>
        <style>
            .set-wrapper .box-definicion {
                grid-area: box-definicion;
                padding: 16px;
            }

            .box-definicion .ph-1 {
                text-align: center;
            }
        </style>


        <!-- Sección box cuando -->
        <div class="box-cuando">
            <div class="box-titulo">
                <div class="icon ico-agenda">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2022/recurso_2.png">
                </div>
                <div class="title title-h3">
                    <h3>¿Cuándo acudir?</h3>
                </div>
            </div>
            <style>
                .box-cuando .box-titulo {
                    grid-area: cpte-titulo;
                    display: grid;
                    grid-auto-flow: dense;
                    grid-template-columns: 100px auto;
                    grid-template-rows: auto;

                }

                .box-cuando .box-titulo .ico-agenda {
                    padding: 16px;
                    /* height: px; */
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }

                .box-cuando .box-titulo .ico-agenda img {
                    max-width: 80px;

                }

                .box-cuando .box-titulo .title-h3 {
                    /* height: px; */
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }

                .box-cuando .box-titulo .title-h3 h3 {
                    padding: 8px;
                    margin: auto;
                    /* font-size: 15px; */
                    font-weight: 700;
                    text-align: center;
                    line-height: 1.3;
                    color: var(--color-primario);
                }

                @media(min-width:768px) {
                    .set-wrapper .box-cuando {
                        margin-top: 12px;
                        border-radius: 3em 0 0 0;
                    }

                    .set-wrapper .box-definicion {
                        grid-area: box-definicion;
                        padding: 16px;
                        display: flex;
                        align-items: center;
                    }
                }

                @media(min-width:992px) {}
            </style>
            <div class="paragraph ph-2">
                <p><strong>Si tu PQRS no fue resuelta u obtuviste una respuesta incompleta y oportuna, podrás hacer una reiteración.</strong> En esta situación, luego de haber efectuado la reiteración, continúas obteniendo la misma respuesta que no te satisface o responde de fondo a la solicitud, podrás requerir una cita con el defensor del ciudadano para buscar una solución definitiva.</p>
            </div>
        </div>
        <style>
            .set-wrapper .box-cuando {
                grid-area: box-cuando;
                background-color: var(--color-terciario);
            }

            .box-cuando .ph-2 {
                padding: 16px;
                margin: 8px;
            }

            .box-cuando .ph-2 p {
                text-align: center;
            }
        </style>


        <!-- Sección box funciones -->
        <div class="box-funciones">
            <div class="box-titulo">
                <div class="icon ico-agenda">
                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2022/icono2.png">
                </div>
                <div class="title title-h3">
                    <h3>¿Cuáles son las funciones del Defensor de la Ciudadanía?</h3>
                </div>
            </div>
            <style>
                .box-funciones .box-titulo {
                    grid-area: cpte-titulo;
                    display: grid;
                    grid-auto-flow: dense;
                    grid-template-columns: 100px auto;
                    grid-template-rows: auto;

                }

                .box-funciones .box-titulo .ico-agenda {
                    padding: 16px;
                    /* height: px; */
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }

                .box-funciones .box-titulo .ico-agenda img {
                    max-width: 80px;

                }

                .box-funciones .box-titulo .title-h3 {
                    /* height: px; */
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }

                .box-funciones .box-titulo .title-h3 h3 {
                    padding: 8px;
                    margin: auto;
                    /* font-size: 15px; */
                    font-weight: 700;
                    text-align: center;
                    line-height: 1.3;
                    color: var(--color-negro);
                }
            </style>
        </div>
        <style>
            .set-wrapper .box-funciones {
                grid-area: box-funciones;
                background: var(--color-cuaternario)
            }
        </style>

        <!-- Sección box col-uno -->
        <div class="box-col box-col-uno">
            <ul>
                <li><strong>Ser vocero</strong> de los ciudadanos para la protección de sus derechos y conocer sus deberes.</li>
                <li><strong>Conocer y hacer</strong> seguimiento a los requerimientos, quejas, reclamos o solicitudes de los ciudadanos por el posible incumplimiento de las normatividades vigentes, dentro de los tiempos establecidos; que rigen el desarrollo de los trámites y servicios que presta la entidad.</li>
                <li><strong>Promover y divulgar</strong> la figura del Defensor del Ciudadano y sus actividades a la ciudadanía.</li>
                <li><strong>Diseñar e Implementar</strong> estrategias acerca de los derechos y deberes de la ciudadanía.</li>
                <li><strong>Ser vocero</strong> de los ciudadanos para la protección de sus derechos y conocer sus deberes.</li>
            </ul>
        </div>
        <style>
            .set-wrapper .box-col-uno {
                grid-area: box-col-uno;
                padding: 16px 16px 0px 16px;
            }
        </style>

        <!-- Sección box col-dos -->
        <div class="box-col box-col-dos">
            <ul>
                <li><strong>Conocer y hacer</strong> seguimiento a los requerimientos, quejas, reclamos o solicitudes de los ciudadanos por el posible incumplimiento de las normatividades vigentes, dentro de los tiempos establecidos; que rigen el desarrollo de los trámites y servicios que presta la entidad.</li>
                <li><strong>Promover y divulgar</strong> la figura del Defensor del Ciudadano y sus actividades a la ciudadanía.</li>
                <li><strong>Diseñar e Implementar</strong> estrategias acerca de los derechos y deberes de la ciudadanía.</li>
            </ul>
        </div>
        <style>
            .set-wrapper .box-col-dos {
                grid-area: box-col-dos;
                padding: 0px 16px 16px 16px;
            }
        </style>


        <!-- Sección box footer -->
        <div class="box-footer">
            <div class="logo logo-footer">
                <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2022/logo.png" alt="logo Trato digno al ciudadano es transparencia">
            </div>
        </div>
        <style>
            .set-wrapper .box-footer {
                grid-area: box-footer;

                background-color: var(--color-secundario);
                height: 50px;
                border-top: solid 10px var(--color-primario);
                border-bottom: solid 10px var(--color-primario);
                margin-top: 180px;
            }

            .box-footer .logo-footer {
                margin-top: -190px;
            }

            .box-footer .logo-footer img {
                max-width: 280px;
                margin: auto;
            }

            @media(min-width:768px) {

                .box-footer .logo-footer img {
                    max-width: 280px;
                    float: right;
                    margin-right: 24px;
                }
            }

            @media(min-width:992px) {}
        </style>

        <div class="s4">
            <div class="box-btn">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="btn-defensor"><a href="https://www.movilidadbogota.gov.co/web/govi-sdqs/crear">Realiza aquí tu solicitud al Defensor del Ciudadano </a></div>
                    </div>
                </div>
            </div>

            <hr>
            <h3 class="text-center">Informes Defensor al Ciudadano</h3>
            <br>
            <!-- Sección box collapse -->
            <div class="box-collapse">
                <div class="panel-group" id="accordion">
                    <!-- collapse_defensor2022 -->
                    <div class="panel panel-primary">
                        <div class="panel-heading" id="heading_defensor2022" role="tab">
                            <h4 class="panel-title"><a aria-controls="collapse_defensor2022" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapse_defensor2022" role="button">2022 </a></h4>
                        </div>

                        <div aria-labelledby="heading_defensor2022" class="panel-collapse collapse in" id="collapse_defensor2022" role="tabpanel">
                            <div class="panel-body">
                                <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-09-2022/informe_del_defensor_del_ciudadano_i_semestre_de_2022-_vf.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO I SEMESTRE 2022</a></p>

                                <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-09-2022/informe_anexo_al_informe_semestral_de_gestion_defensor_de_la_ciudadania_-_buenas_practicas_i_semestre_2021.pdf" target="_blank">INFORME ANEXO AL INFORME SEMESTRAL DE GESTIÓN DEFENSOR DE LA CIUDADANÍA - BUENAS PRÁCTICAS I SEMESTRE 2022</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /#fin _defensor2022 -->

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse1">2021</a></h4>
                        </div>

                        <div class="panel-collapse collapse" id="collapse1">
                            <div class="panel-body">
                                <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-02-2022/informe_defensor_de_la_ciudadania_ii_semestre_2021_.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO II SEMESTRE 2021</a></p>

                                <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-07-2021/informe_defensor_del_ciudadano_i_semestre_2021.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO I SEMESTRE 2021</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse2">2020</a></h4>
                        </div>

                        <div class="panel-collapse collapse" id="collapse2">
                            <div class="panel-body">
                                <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2021/informe_defensor_del_ciudadano_ii_semestre_2020.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO II SEMESTRE 2020</a></p>

                                <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-07-2020/-informe_defensor_i_semestre_2020.doc_1.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO I SEMESTRE 2020</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse3">2019</a></h4>
                        </div>

                        <div class="panel-collapse collapse" id="collapse3">
                            <div class="panel-body">
                                <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-02-2020/informe_defensor_del_ciudadano_ii_semestre_2019.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO II SEMESTRE 2019</a></p>

                                <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/2019-07-29/informe_defensor_del_ciudadano_i_semestre_2019.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO I SEMESTRE 2019</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse4">2018</a></h4>
                        </div>

                        <div class="panel-collapse collapse" id="collapse4">
                            <div class="panel-body">
                                <p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/2019-02-05/Informe%20%20Defensor%20II%20SEMESTRE%202018%20FINAL.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO II SEMESTRE 2018</a></p>

                                <p><a href="http://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/2018-09-03/INFORME%20DEFENSOR%20DEL%20CIUDADANO%20I%20SEMESTRE%202018.pdf" target="_blank">INFORME DEFENSOR DEL CIUDADANO I SEMESTRE 2018</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style type="text/css">
                .seccion .box-collapse {
                    grid-area: box-collapse;
                }
            </style>
            <hr>
            <div class="box-btn">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="btn-defensor"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-07-2021/protocolo_de_la_figura_del_defensor_al_ciudadano.pdf">Protocolo de la Figura del Defensor al Ciudadano </a></div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .set-wrapper .s4 {
                grid-area: s4;
            }

            .set-wrapper .s4 .btn-defensor {
                background: #1C1D3C !important;
                color: #fff;
                border-radius: 0px;
                border: none;
                font-size: 18px !important;
                font-family: 'Montserrat', sans-serif !important;
                font-weight: 700;
                padding: 15px 20px;
                text-align: center;
                -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            }

            .set-wrapper .s4 .btn-defensor a {
                color: var(--color-blanco);

            }
            .set-wrapper .s4 .btn-defensor:hover {
                background: #c6d21d !important;
                color: #000;
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .set-wrapper .s4 .btn-defensor:hover a{
                color: var(--color-negro);

            }

            .s4 .glyphicon-chevron-right::before {
                color: var(--color-negro) !important;
            }

            .s4 .glyphicon-chevron-left::before {
                color: var(--color-negro) !important;
            }

            .s4 .panel-heading {
                border-color: var(--color-gris) !important;
                background-color: var(--color-gris) !important;
                background-image: none !important;
            }

            .s4 .panel-heading .panel-title a {
                text-decoration: none;
                color: var(--color-negro) !important;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: 1px;
            }

            .s4 .panel-heading .panel-title a:after {
                font-family: 'Glyphicons Halflings';
                content: "\e080";
                float: right;
                color: var(--color-negro);
                font-size: 18px;
            }

            .s4 .panel-heading .panel-title a.collapsed:after {
                content: "\e114";
            }
            .s4 .panel-primary{
                border-color: var(--color-gris-fuerte);
            }
            .s4 .panel-primary > .panel-heading + .panel-collapse > .panel-body {
                border-top-color: var(--color-gris-fuerte);
            }
            @media(min-width:768px){
                .set-wrapper .s4{
                padding: 3em;
                }
            }
            @media(min-width:992px){}
        </style>


    </div>
    <style>
        .set-wrapper {
            display: grid;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                'box-header'
                'box-definicion'
                'box-cuando'
                'box-funciones'
                'box-col-uno'
                'box-col-dos'
                'box-footer'
                's4';

        }

        .set-wrapper .box-col ul {
            padding-left: 2rem;
            list-style-type: none;
        }

        .set-wrapper .box-col li {
            padding-left: 2rem;
            margin-top: 12px;
            background-image: url(https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-11-2022/recurso_5.png);
            background-position: 0 5px;
            background-size: 1.6rem 1.6rem;
            background-repeat: no-repeat;
        }

        @media(min-width:768px) {
            .set-wrapper {
                display: grid;
                grid-auto-flow: dense;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'box-header box-header'
                    'box-definicion box-cuando'
                    'box-funciones box-funciones'
                    'box-col-uno box-col-dos'
                    'box-footer box-footer'
                    's4 s4';
                margin-top: 80px;

            }

            .set-wrapper .box-footer {
                grid-area: box-footer;

                background-color: var(--color-secundario);
                height: 50px;
                border-top: solid 10px var(--color-primario);
                border-bottom: solid 10px var(--color-primario);
                margin-top: 50px;
            }
        }

        @media(min-width:992px) {
            .set-wrapper {}
        }
    </style>



</div>
<br>
<!-- End Set Wrapper -->
<!-- End defensor  -->
