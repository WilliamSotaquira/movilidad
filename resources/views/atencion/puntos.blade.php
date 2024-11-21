@extends('welcome')
@section('title', 'puntos')
@section('contenido')

<!-- Resurces -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><!-- Set puntos -->
<div class="set-wrapper puntos"><!-- bloque box title-->
    <style type="text/css">
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .set-wrapper .box-title {
            margin: 2em 1em 0 1em;
        }

        .box-title .cmpnt-title-center .title-type-h2 {
            padding: 32px;
            border-bottom: solid 2px #00000085;
            font-family: 'Montserrat', sans-serif;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            line-height: 1;
            color: rgba(25, 28, 58, 1);
        }

        @media(min-width:768px) {
            .box-title .cmpnt-title-center .title-type-h2 {
                line-height: 1.2;
                padding: 1em 2em;
            }
        }

        .box-title .cmpnt-paragraph p {
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            line-height: 1.3;
            text-align: justify;
            margin-top: 1em;
            margin-bottom: 1em;
            padding: 16px;
        }
    </style>
    <div class="box box-title">
        <div class="cmpnt cmpnt-title-center">
            <h2 class="title title-type-h2 title-id-ppal">Puntos de atención</h2>
        </div>

        <div class="cmpnt cmpnt-paragraph">
            <p>Descubre los diferentes lugares donde la Secretaría Distrital de Movilidad te brinda atención presencial, virtual y telefónica. Por medio de nuestros variados canales de comunicación, estarás en contacto directo para recibir asesoramiento e información detallada acerca de nuestros procesos y servicios. Además, tendrás la opción de programar tus citas para las impugnaciones, salida de patios, participar en cursos pedagógicos y establecer acuerdos de pago de manera cómoda y oportuna.</p>
        </div>
    </div>
    <!-- bloque box video-ppal-->
    <style type="text/css">
        .set-wrapper .box-video-ppal {
            grid-area: box-video-ppal;
            margin: 2em auto;
            max-width: 850px;
        }

        @media(min-width:768px) {
            .box-video-ppal .video-ppal {
                margin: 50px 100px;
                border: 6px solid rgba(25, 28, 58, 1);
                border-radius: 8px;
                -webkit-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
                box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.16);
            }
        }
    </style>
    <div class="box box-video-ppal">
        <div class="cmpnt cmpnt-video-ppal">
            <div class="video video-ppal">
                <video controls="" style="width: 100%;">
                    <source poster="" preload="" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/video_puntos.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <!-- bloque box boxes-->
    <style type="text/css">
        .puntos .box-boxes {
            position: relative;
            display: grid;
            gap: 8px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            margin: 4px;
        }

        @media(min-width:768px) {
            .puntos .box-boxes {
                grid-template-columns: 1fr 1fr 1fr;
                margin-bottom: 32px;
                margin-top: 32px;
                margin-left: 16px;
                margin-right: 16px;
            }
        }

        .puntos .box-boxes .box-bottom {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 16px;
            margin: 32px;
            border-radius: 8px;
            border: solid 1px #efefef;
            background-color: #191C3A;
        }

        .puntos .box-boxes .box-bottom:hover {
            background-color: #66E026;
            cursor: pointer;
        }


        .puntos .box-boxes .box-bottom .tooltip-img {
            position: absolute;
            visibility: hidden;
            background-color: #252525;
            height: 150px;
            width: 150px;
            border-radius: 11px;
            border: solid 4px #66E026;
            margin: 8px;
            bottom: 165px;
            transition: all 0.1s ease-in;
        }


        @media(min-width:768px) {
            .puntos .box-boxes .box-bottom:hover .tooltip-img {
                visibility: visible;
            }
        }

        .puntos .box-boxes .box-bottom .tooltip-img::after {
            content: "";
            display: inline-block;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-top: 15px solid #66E026;
            position: absolute;
            bottom: -15px;
            left: calc(50% - 15px);
        }

        .puntos .box-boxes .box-bottom .tooltip-img img {
            border-radius: 8px;
            max-width: 100%;
            object-fit: cover;
            background-color: #fff;
        }

        .puntos .box-boxes .box-bottom .icon {
            width: 60px;
            height: 60px;
            margin: 24px;
            margin-bottom: 16px;
        }

        .box-bottom .icon1 {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/mapas_v.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;

        }

        .box-bottom .icon2 {

            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/cursor_v.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;

        }

        .box-bottom .icon3 {

            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/telefono_v_0.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;

        }

        .box-bottom:hover .icon1 {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/mapas_a.png');
        }

        .box-bottom:hover .icon2 {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/cursor_a.png');
        }

        .box-bottom:hover .icon3 {
            background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/telefono_a_0.png');
        }

        .puntos .box-boxes .box-bottom p {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            line-height: 1;
            color: #fff;
        }

        .puntos .box-boxes .box-bottom:hover p {
            color: #252525;
        }
    </style>


    <div class="box box-boxes">

        <a onclick="activeBox(1);">
            <div class="box-bottom">
                <span class="tooltip-img">
                    <img alt="acceder a presencial" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/presencial.gif" title="acceder a presencial">
                </span>
                <div class="icon icon1"></div>
                <p><strong>Presencial</strong></p>
            </div>
        </a>
        <style type="text/css">
            .box-boxes .box-summary {
                display: none !important;
                position: absolute !important;
                visibility: hidden !important;
                padding: 16px;
                border-radius: 8px;
                border: solid 1px #efefef;
                background-color: #fff;
            }

            .box-boxes .box-summary.visible {
                display: block !important;
                position: relative !important;
                visibility: visible !important;
                padding: 4px;
                border-radius: 8px;
                border: solid 1px #00000020;
                background-color: #fff;
            }

            @media(min-width:768px) {
                .box-boxes .box-summary.visible {
                    position: relative !important;
                    visibility: visible !important;
                    grid-column: span 3;
                    background-color: #fff;
                    padding: 16px;
                }
            }

            .cmpnt-boxes .box-summary-1 .cmpnt-title-1 {
                padding: 24px 4px;
            }

            .cmpnt-title-1 .title-cmpnt {
                font-family: 'Montserrat', sans-serif;
                font-size: 24px;
                font-weight: 700;
                text-align: left;
                line-height: 1.3;
                color: #191C3A;
                margin: 12px;

            }

            .selected {
                position: relative !important;
                visibility: visible !important;
                transition: ease-out 0.5s all !important;
            }
        </style>

        <div class="box-summary box-summary-1">
            <div class="cmpnt-title cmpnt-title-1">
                <h3 class="title title-type-3 title-cmpnt">Conoce nuestros puntos de atención presencial</h3>
            </div>
            <style type="text/css">
                .box-summary-1 .cmpnt-tabpills-1 {
                    display: grid;
                    gap: 8px;
                    grid-auto-flow: dense;
                    grid-template-columns: 1fr;
                    grid-template-rows: auto;

                }



                @media(min-width:768px) {
                    .box-summary-1 .cmpnt-tabpills-1 {
                        grid-template-columns: 25% 75%;

                    }
                }
            </style>
            <div class="cmpnt-tabpills cmpnt-tabpills-1">
                <style type="text/css">
                    .box-summary-1 .select-collapse-1 {
                        visibility: visible;
                        position: relative;
                    }

                    @media(min-width:768px) {
                        .box-summary-1 .select-collapse-1 {
                            visibility: hidden;
                            position: absolute;
                        }
                    }

                    .box-summary-1 .select-collapse-1 p {
                        font-family: 'Montserrat', sans-serif;
                        font-size: 16px;
                        font-weight: 500;
                        text-align: left;
                        line-height: 1.5;
                        color: #00000099;
                        padding-left: 12px;
                        padding-bottom: 12px
                    }
                </style>
                <div class="select-collapse select-collapse-1">
                    <p>Seleccione de la siguiente lista despleglable una opción:</p>
                    <select class="form-control" id="select-1" name="select-1" onchange="Selected_one();">
                        <option value="1">Centros de servicios</option>
                        <option value="2">Patios</option>
                        <option value="3">Sedes administrativas</option>
                        <option value="4">Centros locales de movilidad</option>
                        <option value="6">Cursos pedagógicos</option>
                        <option value="5">Ventanillas de movilidad</option>
                    </select>
                </div>
                <style type="text/css">
                    .cmpnt-tabpills-1 .tabs-collapse-1 {
                        visibility: hidden;
                        position: absolute;

                    }

                    @media(min-width:768px) {
                        .box-summary-1 .tabs-collapse-1 {
                            visibility: visible;
                            position: relative;
                            display: grid;
                            gap: 8px;
                            grid-auto-flow: dense;
                            grid-template-columns: 1fr;
                            grid-template-rows: auto;
                            align-content: baseline;
                        }
                    }

                    .cmpnt-tabpills-1 .tabs-collapse-1 .push {
                        padding: 12px;
                        border-radius: 8px;
                        background-color: #efefef;
                        color: #00000099;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                    }

                    .cmpnt-tabpills-1 .tabs-collapse-1 .push-tabpills-1 {
                        font-family: montserrat, sans-serif;
                        font-weight: 500;
                        padding-left: 17px;
                        font-weight: 700;
                        padding-left: 40px
                    }

                    #push_one_1::before {
                        content: "";
                        position: absolute;
                        padding: 8px;
                        margin-right: 5px;
                        margin-left: -22px;
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/maps_a.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_one_1:hover::before {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/maps_v.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_one_2::before {
                        content: "";
                        position: absolute;
                        padding: 8px;
                        margin-right: 5px;
                        margin-left: -22px;
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/car_a.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_one_2:hover::before {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/car_v.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_one_3::before {
                        content: "";
                        position: absolute;
                        padding: 8px;
                        margin-right: 5px;
                        margin-left: -22px;
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/building_a.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_one_3:hover::before {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/building_v.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_one_4::before {
                        content: "";
                        position: absolute;
                        padding: 8px;
                        margin-right: 5px;
                        margin-left: -22px;
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/checklist_a.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_one_4:hover::before {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/checklist_v.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_one_5::before {
                        content: "";
                        position: absolute;
                        padding: 8px;
                        margin-right: 5px;
                        margin-left: -22px;
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-02-2024/vus_a.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_one_5:hover::before {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-02-2024/vus_v.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_one_6::before {
                        content: "";
                        position: absolute;
                        padding: 8px;
                        margin-right: 5px;
                        margin-left: -22px;
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-02-2024/birrete_a.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_one_6:hover::before {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-02-2024/birrete_v.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }




                    .cmpnt-tabpills-1 .tabs-collapse-1 .push:focus-visible {
                        background-color: #efefef;
                    }

                    .cmpnt-tabpills-1 .tabs-collapse-1 .push:hover {
                        background-color: #191C3A;
                        color: #fff;
                        font-weight: 700;
                    }

                    .cmpnt-tabpills-1 .tabs-collapse-1 .push:active {
                        background-color: #191C3A90 !important;
                        color: #66E026;
                    }

                    .cmpnt-tabpills-1 .tabs-collapse-1 .push:focus {
                        background-color: #191C3A;
                        color: #66E026;
                        outline: #191C3A auto 1px;
                        font-weight: 600;

                    }
                </style>
                <div class="tabs-collapse tabs-collapse-1"><a class="push push-tabpills-1" data-tab="1" id="push_one_1">Centros de servicios</a> <a class="push push-tabpills-1" data-tab="6" id="push_one_6">Cursos Pedagógicos</a> <a class="push push-tabpills-1" data-tab="2" id="push_one_2">Patios</a> <a class="push push-tabpills-1" data-tab="3" id="push_one_3">Sedes administrativas</a> <a class="push push-tabpills-1" data-tab="4" id="push_one_4">Centros locales de movilidad</a> <a class="push push-tabpills-1" data-tab="5" id="push_one_5">Ventanilla Única de Servicios</a></div>
                <style type="text/css">
                    .cmpnt-tabpills-1 .content-collapse-1 {
                        border-radius: 8px;
                        border: solid 1px #efefef;
                        background-color: #fff;
                    }

                    @media(min-width:768px) {
                        .cmpnt-tabpills-1 .content-collapse-1 {
                            padding: 32px;
                        }
                    }

                    .content-collapse-1 .summary-collapse {
                        position: absolute;
                        visibility: hidden;
                        transition: all 3 ease;
                        display: none;
                    }

                    .content-collapse .title-type-3c {
                        font-family: 'Montserrat', sans-serif;
                        font-size: 24px;
                        font-weight: 700;
                        text-align: Center;
                        line-height: 1.3;
                        color: #66E026;
                        margin-top: 0px;
                        margin-bottom: 32px;
                        background: #191C3A;
                        padding: 16px;
                    }
                </style>
                <div class="content-collapse content-collapse-1">
                    <div class="summary-collapse summary-collapse-1">
                        <h3 class="title title-type-3c title-id-3c1">Centros de Servicios</h3>

                        <div class="box-items">
                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Centro&nbsp;de&nbsp;Servicios&nbsp;de&nbsp;Movilidad - Calle&nbsp;13</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/jcvxRhuBeXSYSu5H8">Calle 13 # 37 - 35 </a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item">
                                    <p><b>Punto de atención:</b></p>

                                    <p>Lunes a viernes 7:00&nbsp;a.m a 6:00&nbsp;p.m.</p>

                                    <p>Sábado 8:00&nbsp;a.m. a 12:00&nbsp;m.</p>
                                </div>

                                <div class="item">
                                    <p><b>Radicación Presencial:</b></p>

                                    <p>Lunes a Viernes:&nbsp;7:00&nbsp;a.m. a 5:00&nbsp;p.m.</p>
                                    <p>Sábado 8:00&nbsp;a.m. a 12:00&nbsp;m.</p>

                                    <p><a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php">Formulario Radicación de correspondencia</a></p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Centro&nbsp;de&nbsp;Servicios&nbsp;de&nbsp;Movilidad - Paloquemao</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>
                                    <p><a class="url-map" href="https://maps.app.goo.gl/JmkpBQXuDmzxeo9eA">Cra 28 A # 17 A 20</a></p>
                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item">
                                    <p><b>Punto de atención:</b></p>

                                    <p>Lunes a viernes 8:00&nbsp;a.m. a 5:00&nbsp;p.m.</p>
                                </div>

                                <div class="item">
                                    <p><b>Radicación Presencial:</b></p>

                                    <p>Lunes a Viernes:&nbsp;7:00&nbsp;a.m. a 5:00&nbsp;p.m.</p>

                                    <p><a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php">Formulario Radicación de correspondencia</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="summary-collapse summary-collapse-2">
                        <h3 class="title title-type-3c title-id-3c2">Patios</h3>

                        <div class="box-items">
                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Parqueadero autorizado No. 01</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/8GeCZHNYkR9JudYA7">Transversal 93 N° 53-35</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Punto de atención:</b></p>

                                    <p>24 horas 7 días de la semana*</p>

                                    <p>*Una vez sea autorizada la salida y realizado el pago del trámite.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Transitorio</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/upv6ZvKuL5HJEy48A">Av. calle 63 # 94 - 51</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Punto de atención:</b></p>

                                    <p><b>Para peritaje: </b>Cita previa antes de las 7am.</p>

                                    <p><b>Para entrega de vehículos:</b>Cita previa Lunes a viernes 9am a 4:30pm.</p>

                                    <p>Sábados de 9am a 11:30am.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Alamos 200</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/3HF7UBsHY2sQ8Bf29">Transversal 93 # 52- 03. Entrada Alámos</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Punto de atención:</b></p>

                                    <p>Lunes a viernes 8:00&nbsp;a.m a 4:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Fontibón Público</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/SykWWtT9FLb7mWiD9">Calle 17 # 90 - 90</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Punto de atención:</b></p>

                                    <p>Lunes a viernes 8:00&nbsp;a.m a 4:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Alamos 201</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/KmYbUykVrvsG8Tq9A">Calle 51 # 93 - 33</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Punto de atención:</b></p>

                                    <p>Lunes a viernes 8:00&nbsp;a.m a 4:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Fontibon Propio</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/7B8MRCWLYZFtiWiJ6">Calle 17 # 123b - 10</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Punto de atención:</b></p>

                                    <p>Lunes a viernes 8:00&nbsp;a.m a 4:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Suba</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/2CKoqz4HFScxnfqw5">Cra 104F # 128C - 09</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Punto de atención:</b></p>

                                    <p>Lunes a viernes 8:00&nbsp;a.m a 4:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Patio 50 Puente Aranda</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/xvGRao81gw4UmWHq5">Calle 19 # 50 - 50</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Punto de atención:</b></p>

                                    <p>Lunes a viernes 8:00&nbsp;a.m a 4:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Mutis</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a>Calle 64 # 94 - 91</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Punto de atención:</b></p>

                                    <p>Lunes a viernes 8:00&nbsp;a.m a 4:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Patio sur</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a>Calle 57R # 75D - 11</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Punto de atención:</b></p>

                                    <p>Lunes a viernes 8:00&nbsp;a.m a 4:00&nbsp;p.m.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ------------------------------------------------------------------------------------------------------------------------------- -->

                    <div class="summary-collapse summary-collapse-3">
                        <h3 class="title title-type-3c title-id-3c3">Sedes Administrativas</h3>

                        <div class="box-items">
                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Sede Administrativa Secretaría Distrital de Movilidad Calle&nbsp;13</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>
                                    <p><a class="url-map" href="https://maps.app.goo.gl/jcvxRhuBeXSYSu5H8">Calle 13 # 37 - 35 </a></p>
                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item">
                                    <p><b>Punto de atención:</b></p>
                                    <p>Lunes a viernes 7:00&nbsp;a.m a 6:00&nbsp;p.m.</p>
                                    <p>Sábado 08:00&nbsp;a.m. a 12:00&nbsp;m</p>
                                </div>

                                <div class="item">
                                    <p><b>Radicación Presencial:</b></p>
                                    <p>Lunes a Viernes:&nbsp;7:00&nbsp;a.m. a 5:00&nbsp;p.m.</p>
                                    <p>Sábado 08:00&nbsp;a.m. a 12:00&nbsp;m</p>
                                    <p><a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php">Formulario Radicación de correspondencia</a></p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Centro de Servicios de Movilidad - Paloquemao</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/JmkpBQXuDmzxeo9eA">Cra 28 A # 17 A 20</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item">
                                    <p><b>Punto de atención:</b></p>
                                    <p>Lunes a viernes 8:00&nbsp;a.m. a 5:00&nbsp;p.m.</p>
                                </div>

                                <div class="item">
                                    <p><b>Radicación Presencial:</b></p>

                                    <p>unes a Viernes:&nbsp;7:00&nbsp;a.m. a 5:00&nbsp;p.m.</p>

                                    <p><a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php">Formulario Radicación de correspondencia</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="summary-collapse summary-collapse-4">
                        <h3 class="title title-type-3c title-id-3c4">Centros Locales de Movilidad</h3>
                        <style type="text/css">
                            .cmpnt-tabpills-1 .content-collapse-1 .summary-collapse-4 .summary-clm .logo-clm img {
                                max-width: 300px;
                                margin: auto;
                                padding-bottom: 24px;
                            }

                            .summary-collapse-4 .summary-clm .text {
                                font-family: 'Montserrat', sans-serif;
                                font-size: 14px;
                                font-weight: 500;
                                text-align: left;
                                line-height: 1.5;
                                color: #000000;
                            }

                            .summary-collapse-4 .box-atencion {
                                background: #66E026;
                                font-family: 'Montserrat', sans-serif;
                                font-size: 14px;
                                font-weight: 500;
                                text-align: center;
                                line-height: 1.5;
                                color: #191C3A;
                                padding: 16px;
                                margin-top: 16px;
                            }

                            .summary-collapse-4 .box-atencion h3 {
                                font-weight: 700;
                                color: #191C3A;
                            }
                        </style>
                        <div class="summary-clm">
                            <div class="logo logo-clm"><img alt="logo " class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-02-2024/logo_clm.png"></div>

                            <div class="text">
                                <p><b>¿Cómo está conformado el equipo del Centro Local de Movilidad?</b></p>

                                <ul>
                                    <li><b>Gestor de Local de Movilidad:</b> Profesional de perfil social, cuya presencia en la localidad facilita los procesos de participación y quien, a través de la comunicación directa, acompaña los trámites y solicitudes ciudadanas. Su trabajo permite optimizar el tiempo de los usuarios y su misión es ofrecer información veraz y oportuna.</li>
                                    <li><b>Orientador de Servicio Local:</b> Es la persona encargada de orientar a la comunidad en trámites y servicios, así como acompañar en los procesos de convocatoria comunitaria. Apoyan en la logística y en los operativos pedagógicos implementados en las localidades.</li>
                                </ul>

                                <p>Cada Centro Local de Movilidad cuenta con un equipo de trabajo compuesto por Gestores y Orientadores, que gestionan las necesidades de la comunidad en materia de movilidad.</p>

                                <hr>
                                <p>A continuación encontrara los canales de atención de los Centros Locales de Movilidad.</p>
                            </div>
                        </div>

                        <div class="box-items">
                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Usaquén</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/rLE1tSXogpdLvnkL7">Cl 120a No 7 - 55 Antigua JAL</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clusaquen@movilidadbogota.gov.co">clusaquen@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Chapinero</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/uGE3M14ghQRgqcqc8">Cr 13 No 54 -74 Alcaldia Local Chapinero 1 Piso</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clchapinero@movilidadbogota.gov.co">clchapinero@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Santa Fe</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/i5CAojENbNur5QH97">Cl 21 No 5 - 74 Alcaldia Local Santa Fe Piso 3</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clsantafe@movilidadbogota.gov.co">clsantafe@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>San Cristobal</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/NQ6gQBzFtM6hCiDf7">Av. Primera de Mayo No 1 - 40 Sur Alcaldia Local San Cristobal</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clsancristobal@movilidadbogota.gov.co">clsancristobal@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Usme</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/Ub6e6ePkJkCPjXxu8">Cl 137B No 14 - 24 sur Alcaldia Local de Usme</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clusme@movilidadbogota.gov.co">clusme@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Tunjuelito</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/SwmN3N2apiHhFD3e7">Diagonal 50 A No 18- 48 Sur Alcaldia Local de Tunjuelito</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:cltunjuelito@movilidadbogota.gov.co">cltunjuelito@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Bosa</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/dcwMtkRMy27mtP8A6">Cr 80k No 61 - 28 sur Casa de la Participación</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clbosa@movilidadbogota.gov.co">clbosa@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Kennedy</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/i8ZWjYdYZhQAxgAp9"> Transversal 78 k # 41 a 04 sur - Alcaldía local de Kennedy</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clkennedy@movilidadbogota.gov.co">clkennedy@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Fontibon</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/q9rZ2tEnivc97f4P8">Calle 18 No. 99-56</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clfontibon@movilidadbogota.gov.co">clfontibon@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Engativá</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/swkvQiL3cocWQPqP8">Cl 71 No 73a - 44 Alcaldia Local Engativa Piso 1</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clengativa@movilidadbogota.gov.co">clengativa@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Suba</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/RSTrAY7ZgBS7c3r67">carrera 93c # 129c-15</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clsuba@movilidadbogota.gov.co">clsuba@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Barrios Unidos</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/oyizUcfsL6L5pSw18">Cl 74a No 63 - 07 Piso 2</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clbarriosunidos@movilidadbogota.gov.co">clbarriosunidos@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Teusaquillo</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/n6Ksni5cK4v8JVg69">Travs 18 bis # 38- 41 Alcaldia Local Teusaquillo</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clteusaquillo@movilidadbogota.gov.co">clteusaquillo@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Los Mártires</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/CAR2JsvoiDxj5qaX8">Cr 19b N 23 - 90 Junta Administradora Local</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clmartires@movilidadbogota.gov.co">clmartires@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Antonio Nariño</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/tdfA86i83AQ1Zy9x9">Cl 17 sur No 18 - 49 Alcaldia Local Antonio Nariño Piso 5</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clantonionarino@movilidadbogota.gov.co">clantonionarino@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Puente Aranda</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/zPSXjFFWxbQeafhR8">Cl 4 No 31d - 30 Alcaldia Local Puente Aranda</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clpuentearanda@movilidadbogota.gov.co">clpuentearanda@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>La Candelaria</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/a3H4GWkoeecBC1Qz9">Cl 12d No. 3 -22 Casa Comunitaria la Concordia</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clcandelaria@movilidadbogota.gov.co">clcandelaria@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Rafael Uribe</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/pwMhUFosWen6woKT9">Cl 32 sur No 23 -62 Alcaldia Local Rafael Uribe Piso 1</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clrafaeluribeuribe@movilidadbogota.gov.co">clrafaeluribeuribe@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Ciudad Bolivar</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/FrdRUFRQZJvDAxtw9">Diag 62 sur No 20 f - 20 Alcaldía Local Ciudad Bolivar Piso 2</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clciudadbolivar@movilidadbogota.gov.co">clciudadbolivar@movilidadbogota.gov.co</a>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Sumapaz</strong></p>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/zTdmJKUAm7EvgaBi8">Centro de Servicios de Santa Rosa</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Correo:</b></p>
                                    <a href="mailto:clsumapaz@movilidadbogota.gov.co">clsumapaz@movilidadbogota.gov.co</a>
                                </div>
                            </div>
                        </div>

                        <div class="box-atencion">
                            <h3>Horario de atención a la ciudadanía</h3>

                            <h4>Primer día de hábil de la semana de 7:00 a.m. - 4:30 p.m.</h4>

                            <h4>Jueves de 8:00 a.m. - 4:30 p.m.</h4>
                        </div>
                    </div>

                    <div class="summary-collapse summary-collapse-5">
                        <h3 class="title title-type-3c title-id-3c5">Ventanilla Única de Servicios</h3>

                        <div class="box-items">
                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Antonio Nariño (Edificio Restrepo)</strong></p>
                                    <span>Localidad: Antonio Nariño</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/3pwubyBqAHk9s4m48">Calle 14 Sur # 22 - 27</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Barrios Unidos (72 HUB)</strong></p>
                                    <span>Localidad: Barrios Unidos</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/Ud8SZzxBtKDBZNbdA">Carrera 26 # 71B - 30, Piso 2, Local 46B</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Bosa (Gran Plaza Bosa)</strong></p>
                                    <span>Localidad: Bosa</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/Yne2k9626TNTf4PV7">Calle 65 Sur # 78H - 51, Local L-241</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Chapinero (CC Bulevar 42)</strong></p>
                                    <span>Localidad: Chapinero</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/HyCv6TuesPuSFH6w9">Carrera 13 # 41 - 36, Local 1 (CC Bulevar 42)</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Ciudad Bolívar (Gran Plaza Ensueño)</strong></p>
                                    <span>Localidad: Ciudad Bolivar</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/9geDLLF7i9bjxDpKA">Calle 59C Sur # 51 - 21, Local 209</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Engativá (Nuestro Bogotá)</strong></p>
                                    <span>Localidad: Engativá</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/Ub9ZDGFUqtArbMVv8">Carrera 86 # 55A - 75, L3 - 43, 47 y 51</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>
                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>
                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                    <p>Domingos:&nbsp;8:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Fontibón 1 (Fontibón Centro)</strong></p>
                                    <span>Localidad: Fontibón</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/VHHsxBqr3dhU8ndK9">Calle 19 # 99 - 68</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Fontibón 2 (C. C. Meridiano 13 del Este)</strong></p>
                                    <span>Localidad: Fontibón</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/8S3AgQ62F1v4Ut48A">Calle 18 # 77 - 67, Locales 226, 227, 228 y ZC-2A Barrio La Felicidad</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Kennedy (Tintal Plaza)</strong></p>
                                    <span>Localidad: Fontibón</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/EJVFDyvJWeWCHrjNA">Avenida Carrera 86 # 6 - 37, Local 286 - 287</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Los Mártires (Mallplaza)</strong></p>
                                    <span>Localidad: Los Mártires</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/jmumwoCdRvSZPs6M9">Avenida Carrera 30 # 19 - 00, Nivel 4</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Puente Aranda (C. C. Carrera)</strong></p>
                                    <span>Localidad: Puente Aranda</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/SwtwybQdwXSHznyh7">Avenida de las Américas # 50 - 15, Local A1002</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS San Cristóbal (Juan Rey)</strong></p>
                                    <span>Localidad: San Cristobal</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/FWkWYZ5sDDEApLm59">Calle 69 Sur # 13B - 41 Este</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Suba 1 (C. C. San Rafael)</strong></p>
                                    <span>Localidad: Suba</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/jQiFGELq9YL2NipT7">Calle 134 # 55 - 30, Sótano 2</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Suba 2 (C. C. Suba Fiesta)</strong></p>
                                    <span>Localidad: Suba</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/SKXiLG9vmDbBgQ4n7">Calle 147 # 101 - 56, Local 22A</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Teusaquillo (Tribeca)</strong></p>
                                    <span>Localidad: Teusaquillo</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/C3PhemcXa3ShH9zZ9">Calle 28 # 20 - 16, Locales 3, 4 y 5</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Tunjuelito (Centro Automotriz Autogrande)</strong></p>
                                    <span>Localidad: Tunjuelito</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/5NmoWyPxX6mDf9Pq9">Carrera 57 # 45A - 08 Sur Int. 1, (Centro Automotriz La Sevillana - Autogrande)</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Usaquén (North Point Mall)</strong></p>
                                    <span>Localidad: Usaquén</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/gZMhNAiY2TF6Nzeu9">Carrera 7 # 155 - 80, Local 1</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>VUS Usme (C. C. Altavista)</strong></p>
                                    <span>Localidad: Usme</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/wWM5ch2FdZ9vbVF76">Carrera 1ª. # 65D - 58 Sur, Locales 167, 174, 175 y 176</a></p>

                                    <p>Bogotá - Colombia</p>
                                </div>

                                <div class="item span-2">
                                    <p><b>Horario:</b></p>

                                    <p>Lunes a viernes:&nbsp;7:00&nbsp;a.m. — 7:00&nbsp;p.m.</p>

                                    <p>Sábados:&nbsp;7:00&nbsp;a.m. — 2:00&nbsp;p.m.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="summary-collapse summary-collapse-6">
                        <h3 class="title title-type-3c title-id-3c5">Cursos pedagógicos</h3>

                        <div class="box-items">
                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Centro de Servicios de Movilidad Calle&nbsp;13</strong></p>
                                    <span>Localidad: Puente Aranda</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>
                                    <p><a class="url-map" href="https://maps.app.goo.gl/56YDWyJ4Pcg37o456">Calle 13 #37-35</a></p>
                                </div>
                            </div>

                            <!-- <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Centro de Servicios de Movilidad Paloquemao</strong></p>
                                    <span>Localidad: Los Mártires</span>
                                </div>
                                <div class="item">
                                    <p><b>Dirección:</b></p>
                                    <p><a class="url-map" href="https://maps.app.goo.gl/YnesuS5JXnwafYE68">Carrera 28 A #18-20</a></p>
                                </div>
                            </div> -->

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Edificio Restrepo</strong></p>
                                    <span>Localidad: Antonio Nariño</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/uiiMX2GSbvqk19Mr6">Calle 14 Sur # 22-27</a></p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>C.C. 72 HUB</strong></p>
                                    <span>Localidad: Barrios Unidos</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/oNqZteVNTvdmmaeS6">Carrera 26 # 71B - 30, Piso 2, Local 46B</a></p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>C.C. Gran Plaza Bosa</strong></p>
                                    <span>Localidad: Bosa</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/YpudckRSSF1UPRSL6">Calle 65 Sur # 78H - 51, Local L-241</a></p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>Fontibón Centro</strong></p>
                                    <span>Localidad: Fontibón</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/TtTiUD38XRiN1Fuw6">Calle 19 # 99 - 68</a></p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>C.C. Tintal Plaza</strong></p>
                                    <span>Localidad: Kennedy</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/AmKhRmajkSY3dm4C8">Avenida Carrera 86 # 6 - 37, Local 286 - 287</a></p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>C.C. Mallplaza</strong></p>
                                    <span>Localidad: Los Mártires</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/GWFe65zoJkcnePkv8">Avenida Carrera 30 # 19 - 00, Nivel 4</a></p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>C. C. Carrera</strong></p>
                                    <span>Localidad: Puente Aranda</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/wXDaP6B5o4UyCwFQ7">Avenida de las Américas # 50 - 15, Local A1002</a></p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>C. C. San Rafael</strong></p>
                                    <span>Localidad: Suba</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/TDsdsebeFs2VFt75A">Calle 134 # 55 - 30, Sótano 2</a></p>
                                </div>
                            </div>

                            <div class="boxes">
                                <div class="item item-title span-3">
                                    <p><strong>C.C. North Point Mall</strong></p>
                                    <span>Localidad: Usaquén</span>
                                </div>

                                <div class="item">
                                    <p><b>Dirección:</b></p>

                                    <p><a class="url-map" href="https://maps.app.goo.gl/CxoMCrGi7ZTHLZ7D9">Carrera 7 # 155 - 80, Local 1</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var temp_one;

                document.addEventListener('DOMContentLoaded', function() {

                    Validate_one(0);
                    let button = document.querySelectorAll('.tabs-collapse-1 .push-tabpills-1').forEach(function(button) {
                        button.addEventListener('click', function() {
                            let id_one = parseInt(button.dataset.tab);
                            Validate_one(id_one);

                        });
                    });
                });

                function Selected_one() {
                    /* Para obtener el valor */
                    var cod_one = document.getElementById("select-1").value;
                    Validate_one(cod_one);
                }

                function Validate_one(id_one) {
                    console.log('id_one ' + id_one);
                    if (id_one == 0) {
                        Toggled_one(1);
                    } else {
                        if (id_one != temp_one) {
                            console.log('temp_one ' + temp_one);
                            let oldSummary;
                            oldSummary = document.querySelector(`.content-collapse-1 .summary-collapse-${temp_one}`);
                            console.log(oldSummary);
                            oldSummary.classList.toggle('selected');
                            Toggled_one(id_one);
                        }
                    }

                }

                function Toggled_one(num) {
                    console.log('num ' + num);
                    let collapseSummary;
                    collapseSummary = document.querySelector(`.content-collapse-1 .summary-collapse-${num}`);
                    // console.log('collapseSummary '+collapseSummary);
                    collapseSummary.classList.toggle('selected');
                    temp_one = num;
                    console.log('Temp Toggled_one ' + temp_one);
                }

                $(document).ready(function() {
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>
        </div>

        <a onclick="activeBox(2);">
            <div class="box-bottom">
                <span class="tooltip-img">
                    <img alt="acceder a virtual" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/virtual.gif" title="acceder a virtual">
                </span>
                <div class="icon icon2"></div>
                <p><strong>Virtual</strong></p>
            </div>
        </a>

        <div class="box-summary box-summary-2">
            <div class="cmpnt-title cmpnt-title-1">
                <h3 class="title title-type-3 title-cmpnt">Conoce nuestras formas de atención virtual</h3>
            </div>
            <style type="text/css">
                .box-summary-2 .cmpnt-tabpills-2 {
                    display: grid;
                    gap: 8px;
                    grid-auto-flow: dense;
                    grid-template-columns: 1fr;
                    grid-template-rows: auto;

                }

                .selected {
                    position: relative !important;
                    visibility: visible !important;
                    transition: ease-out 0.5s all !important;
                    display: block !important;
                }


                @media(min-width:768px) {
                    .box-summary-2 .cmpnt-tabpills-2 {
                        grid-template-columns: 25% 75%;

                    }
                }
            </style>
            <div class="cmpnt-tabpills cmpnt-tabpills-2">
                <style type="text/css">
                    .box-summary-2 .select-collapse-2 {
                        visibility: visible;
                        position: relative;
                    }

                    @media(min-width:768px) {
                        .box-summary-2 .select-collapse-2 {
                            visibility: hidden;
                            position: absolute;
                        }
                    }

                    .box-summary-2 .select-collapse-2 p {
                        font-family: 'Montserrat', sans-serif;
                        font-size: 16px;
                        font-weight: 500;
                        text-align: left;
                        line-height: 1.5;
                        color: #00000099;
                        padding-left: 12px;
                        padding-bottom: 12px
                    }
                </style>
                <div class="select-collapse select-collapse-2">
                    <p>Seleccione de la siguiente lista despleglable una opción:</p>
                    <select class="form-control" id="select-2" name="select-2" onchange="Selected_two();">
                        <option value="1">Chatea con nuestro asesor en línea</option>
                        <option value="2">Llámanos</option>
                        <option value="3">Te regresamos la llamada</option>
                        <option value="4">Videollamada en lengua de señas Colombiana</option>
                        <option value="5">Chatea con Lucia</option>
                    </select>
                </div>
                <style type="text/css">
                    .cmpnt-tabpills-2 .tabs-collapse-2 {
                        visibility: hidden;
                        position: absolute;

                    }

                    @media(min-width:768px) {
                        .box-summary-2 .tabs-collapse-2 {
                            visibility: visible;
                            position: relative;
                            display: grid;
                            gap: 8px;
                            grid-auto-flow: dense;
                            grid-template-columns: 1fr;
                            grid-template-rows: auto;
                            align-content: baseline;
                        }
                    }

                    .cmpnt-tabpills-2 .tabs-collapse-2 .push {
                        padding: 12px;
                        border-radius: 8px;
                        background-color: #efefef;
                        color: #00000099;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                    }

                    .cmpnt-tabpills-2 .tabs-collapse-2 .push-tabpills-2 {
                        font-family: montserrat, sans-serif;
                        background-color: #efefef !important;
                        border-color: #efefef;
                        font-weight: 500;
                        padding-left: 17px;
                        font-weight: 700;
                        padding-left: 40px
                    }

                    #push_two_1::before {
                        content: "";
                        position: absolute;
                        padding: 8px;
                        margin-right: 5px;
                        margin-left: -22px;
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/chat_a.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_two_1:hover::before {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/chat_v.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_two_2::before {
                        content: "";
                        position: absolute;
                        padding: 8px;
                        margin-right: 5px;
                        margin-left: -22px;
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/llamada_a.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_two_2:hover::before {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/llamada_v.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_two_3::before {
                        content: "";
                        position: absolute;
                        padding: 8px;
                        margin-right: 5px;
                        margin-left: -22px;
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/telefono_a.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_two_3:hover::before {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/telefono_v.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_two_4::before {
                        content: "";
                        position: absolute;
                        padding: 8px;
                        margin-right: 5px;
                        margin-left: -22px;
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/videollamada_a.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_two_4:hover::before {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/videollamada_v.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_two_5::before {
                        content: "";
                        position: absolute;
                        padding: 10px;
                        margin-right: 7px;
                        margin-left: -22px;
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/chatbot_a.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_two_5:hover::before {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/chatbot_v.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_two_6::before {
                        content: "";
                        position: absolute;
                        padding: 8px;
                        margin-right: 5px;
                        margin-left: -22px;
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/cita_a.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #push_two_6:hover::before {
                        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/cita_v.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }


                    .tabs-collapse-2 .push:focus-visible {
                        background-color: #efefef !important;
                    }

                    .tabs-collapse-2 .push:hover {
                        background-color: #191C3A !important;
                        color: #fff;
                        font-weight: 700;
                    }

                    .tabs-collapse-2 .push:active {
                        background-color: #191C3A90 !important;
                        color: #66E026
                    }

                    .tabs-collapse-2 .push:focus {
                        background-color: #191C3A !important;
                        color: #66E026;
                        outline: #191C3A auto 1px !important;
                        font-weight: 600;

                    }
                </style>
                <div class="tabs-collapse tabs-collapse-2"><a class="push push-tabpills-2" data-tab="1" id="push_two_1">Chatea con nuestro asesor en línea</a> <a class="push push-tabpills-2" data-tab="2" id="push_two_2">Llámanos</a> <a class="push push-tabpills-2" data-tab="3" id="push_two_3">Te regresamos la llamada</a> <a class="push push-tabpills-2" data-tab="4" id="push_two_4">Videollamada en lengua de señas Colombiana</a> <a class="push push-tabpills-2" data-tab="5" id="push_two_5">Chatea con Lucia</a></div>
                <style type="text/css">
                    .cmpnt-tabpills-2 .content-collapse-2 {
                        border-radius: 8px;
                        border: solid 1px #efefef;
                        background-color: #fff;
                    }

                    @media(min-width:768px) {
                        .cmpnt-tabpills-2 .content-collapse-2 {
                            padding: 32px;
                        }
                    }

                    .content-collapse-2 .summary-collapse {
                        position: absolute;
                        visibility: hidden;
                        transition: all 3 ease;
                    }

                    .box-summary-2 .box-items .video iframe {
                        padding: 2em 6em;
                    }

                    .box-summary-2 .box-items .paragraph {
                        font-family: 'Montserrat', sans-serif;

                    }

                    .content-collapse .title-type-3s {
                        font-family: 'Montserrat', sans-serif;
                        font-size: 24px;
                        font-weight: 700;
                        text-align: Center;
                        line-height: 1.3;
                        color: #66E026;
                        margin-top: 0px;
                        margin-bottom: 32px;
                        background: #191C3A;
                        padding: 16px;
                    }
                    .content-collapse dd{
                        font-family: 'Montserrat', sans-serif;
                        font-optical-sizing: auto;
                        font-size: 14px;
                        font-weight: normal;
                        text-align: left;
                        line-height: 1.4;
                    }
                </style>
                <div class="content-collapse content-collapse-2">
                    <div class="summary-collapse summary-collapse-1">
                        <h3 class="title title-type-3s title-id-3s1">Chatea con nuestro asesor en línea</h3>

                        <div class="box-items">
                            <div class="colspan-2">
                                <div class="video video-1 video-16by9">
                                    <div class="embed-responsive embed-responsive-16by9"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/8OLbJ0ICxE0" title="YouTube video player" width="100%"></iframe></div>
                                </div>

                                <p class="paragraph ph-type-1 ph-id-sc1">El chat de atención al ciudadano de la Secretaría Distrital de Movilidad está habilitado de lunes a viernes de 7:00 a.m. a 6:00 p.m. jornada continua y sábados de 8:00 a.m. a 12:00 m. <a href="https://secmovilidad.cari.ai/smb/chatWeb">Clic aquí para iniciar el chat.</a></p>

                            </div>
                        </div>
                    </div>

                    <div class="summary-collapse summary-collapse-2">
                        <h3 class="title title-type-3s title-id-3s2">Llámanos</h3>

                        <div class="box-items">
                            <div class="colspan-2">
                                <div class="video video-2 video-16by9">
                                    <div class="embed-responsive embed-responsive-16by9"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/kn6vuBAKo1Y" title="YouTube video player" width="100%"></iframe></div>
                                </div>

                                <p class="paragraph ph-type-1 ph-id-sc2">La Secretaría Distrital de Movilidad te brinda esta herramienta para facilitar nuestra comunicación, la puedes usar desde un computador, celular o tableta. <a href="https://secmovilidad.cari.ai/smb/llamadas">Clic aquí para iniciar la llamada</a></p>
                                <dl>
                                    <dt>Horario de Atención:</dt>
                                    <dd>Lunes a viernes 7:00 a.m a 6:00 p.m.</dd>
                                    <dd>Sábado 08:00 a.m. a 12:00 m </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class="summary-collapse summary-collapse-3">
                        <h3 class="title title-type-3s title-id-3s3">Te regresamos la llamada</h3>

                        <div class="box-items">
                            <div class="colspan-2">
                                <div class="video video-3 video-16by9">
                                    <div class="embed-responsive embed-responsive-16by9"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/ZebTw7k0rkk" title="YouTube video player" width="100%"></iframe></div>
                                </div>

                                <p class="paragraph ph-type-1 ph-id-sc3">Déjanos tus datos y te regresamos la llamada respetando tu turno. <a href="https://secmovilidad.cari.ai/smb/callBack">Clic aquí para solicitar que te regresamos la llamada</a></p>
                                <dl>
                                    <dt>Horario de Atención:</dt>
                                    <dd>Lunes a viernes 7:00 a.m a 6:00 p.m.</dd>
                                    <dd>Sábado 08:00 a.m. a 12:00 m </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class="summary-collapse summary-collapse-4">
                        <h3 class="title title-type-3s title-id-3s4">Videollamada en lengua de señas Colombiana</h3>

                        <div class="box-items">
                            <div class="colspan-2">
                                <div class="video video-4 video-16by9">
                                    <div class="embed-responsive embed-responsive-16by9"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/yimG3ap9aE4" title="YouTube video player" width="100%"></iframe></div>
                                </div>

                                <p class="paragraph ph-type-1 ph-id-sc4">Comunícate con un asesor de servicio a través de videollamada. Este servicio también está disponible en lengua de señas. <a href="https://secmovilidad.cari.ai/smb/videollamada">Clic aquí para hacer el agendamiento.</a></p>
                                <dl>
                                    <dt>Horario de Atención:</dt>
                                    <dd>Lunes a viernes 7:00 a.m a 6:00 p.m.</dd>
                                    <dd>Sábado 08:00 a.m. a 12:00 m </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class="summary-collapse summary-collapse-5">
                        <h3 class="title title-type-3s title-id-3s5">Chatea con Lucia</h3>

                        <div class="box-items">
                            <div class="colspan-2">

                                <div class="logo logo-lucia"><a href="https://www.movilidadbogota.gov.co/web/"><img alt="logo " class="img-responsive w-100" src="https://chat1-cls45-dal.i6.inconcertcc.com/inconcert/apps/webdesigner/designer/applications/9EB4BD8DB699F4781504C26A8F373990/BotSecMovilidad_V2/resources/BOTON_INICIO.png"> </a></div>


                                <p class="paragraph ph-type-1 ph-id-6">Da clic en la imagen para conversar con Lucía, tu asesora de Servicios a la Ciudadanía.</p>
                                <dl>
                                    <dt>Horario de Atención:</dt>
                                    <dd>Lunes a viernes 7:00 a.m a 6:00 p.m.</dd>
                                    <dd>Sábado 08:00 a.m. a 12:00 m </dd>
                                </dl>
                            </div>
                            <style type="text/css">
                                .box-summary-2 .box-items .logo-lucia img {
                                    padding: 2em 6em;
                                    max-width: 450px;
                                    margin: auto;
                                }
                            </style>
                        </div>
                    </div>
                    <style type="text/css">
                        .box-summary-2 .summary-collapse-6 {
                            padding: 0;
                            margin: 0;
                            border: 0;
                        }
                    </style>
                </div>
            </div>
            <script>
                var temp_two;

                document.addEventListener('DOMContentLoaded', function() {

                    Validate_two(0);
                    let button = document.querySelectorAll('.tabs-collapse-2 .push-tabpills-2').forEach(function(button) {
                        button.addEventListener('click', function() {
                            let id_two = parseInt(button.dataset.tab);
                            Validate_two(id_two);

                        });
                    });
                });

                function Selected_two() {
                    /* Para obtener el valor */
                    var cod = document.getElementById("select-2").value;
                    Validate_two(cod);
                }

                function Validate_two(id_two) {
                    console.log('id_two ' + id_two);
                    if (id_two == 0) {
                        Toggled_two(1);
                    } else {
                        if (id_two != temp_two) {
                            console.log('temp_two ' + temp_two);
                            let oldSummary;
                            oldSummary = document.querySelector(`.content-collapse-2 .summary-collapse-${temp_two}`);
                            console.log(oldSummary);
                            oldSummary.classList.toggle('selected');
                            Toggled_two(id_two);
                        }
                    }

                }

                function Toggled_two(num_two) {
                    console.log('num_two ' + num_two);
                    let collapseSummary;
                    collapseSummary = document.querySelector(`.content-collapse-2 .summary-collapse-${num_two}`);
                    // console.log('collapseSummary '+collapseSummary);
                    collapseSummary.classList.toggle('selected');
                    temp_two = num_two;
                    console.log('Temp Toggled_two ' + temp_two);
                }
            </script>
        </div>

        <a onclick="activeBox(3)">
            <div class="box-bottom">
                <span class="tooltip-img">
                    <img alt="acceder a telefónico" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/telefonico.gif" title="acceder a telefónico">
                </span>
                <div class="icon icon3"></div>
                <p><strong>Telefónico</strong></p>
            </div>
        </a>

        <div class="box-summary box-summary-3">
            <div class="imagen img-call"><img alt="" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-03-2024/atencion.jpg" title="">
                <style type="text/css">
                    .box-summary-3 .img-call img {
                        padding: 2em 6em;
                        max-width: 1100px;
                        height: 350px;
                        margin: auto;
                        object-fit: cover;
                    }
                </style>
            </div>

            <div class="list-dl">
                <dl>
                    <dt>Línea de atención:</dt>
                    <dd><a href="tel:+6013649400">364-9400 opción 2</a></dd>
                </dl>

                <dl>
                    <dt>Línea nacional:</dt>
                    <dd><a href="tel:+018000 127425">018000 127425</a></dd>
                </dl>

                <dl>
                    <dt>Horario de Atención:</dt>
                    <dd>Lunes a viernes 7:00 a.m a 6:00 p.m.</dd>
                    <dd>Sábado 08:00 a.m. a 12:00 m</dd>
                </dl>
            </div>
            <style type="text/css">
                .box-summary-3 .list-dl {
                    max-width: 940px;
                    margin: auto;
                }

                .box-summary-3 .list-dl dl {
                    font-family: 'Montserrat', sans-serif;
                    font-size: 16px;
                    font-weight: 500;
                    text-align: left;
                    line-height: 1.5;
                    color: #00000099;
                }

                .box-summary-3 .list-dl dl dt {
                    font-weight: 700;
                }

                .box-summary-3 .list-dl dl dd {
                    margin: 0;
                }
            </style>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let cmpnt = document.querySelector('.box-summary-1');
                cmpnt.classList.add('visible');

            });

            function activeBox(e) {
                let visible = document.querySelector('.visible');
                visible.classList.remove('visible');

                let cmpnt = document.querySelector('.box-summary-' + e);
                console.log(cmpnt);

                if (cmpnt.classList.contains('visible')) {
                    cmpnt.classList.remove('visible');
                } else {
                    cmpnt.classList.add('visible');
                }
            }
        </script>
    </div>
</div>
<!-- Fin Set -->
<style type="text/css">
    .set-wrapper .puntos {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: normal;
        text-align: left;
        line-height: 1.5;
        color: #252525;
    }

    .content-collapse .summary-collapse .boxes {
        display: grid;
        gap: 8px;
        grid-auto-flow: dense;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        padding: 16px;
    }


    .content-collapse .summary-collapse .colspan-2:nth-child(odd) {
        background-color: #fff;
    }

    .content-collapse .summary-collapse .boxes {
        background-color: #f5f5f5;
    }

    @media(min-width:768px) {


        .content-collapse .summary-collapse .boxes {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 4px 16px;
            padding: 8px;
            padding: 12px;
        }

    }

    .content-collapse .summary-collapse .box-items {
        display: grid;
        gap: 12px;
        grid-auto-flow: dense;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
    }

    @media(min-width:768px) {
        .content-collapse .summary-collapse .box-items {
            display: grid;
            gap: 12px;
            grid-auto-flow: dense;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
        }
    }

    @media(min-width:768px) {
        .colspan-2 {
            grid-column: span 2;
        }


    }



    .content-collapse .summary-collapse .item-title {
        border-bottom: solid 1px #c5c5c5;
        padding-bottom: 4px
    }


    .content-collapse .summary-collapse .item {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: start;
    }

    .content-collapse .summary-collapse .item p {
        margin: 0;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: 500;
        text-align: left;
        line-height: 1.2;
        color: #00000099;
    }

    @media(min-width:768px) {
        .span-2 {
            grid-column: span 2;
        }

        .span-3 {
            grid-column: span 3;
        }
    }

    .content-collapse .summary-collapse .item-title p {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: 700;
        text-align: left;
        line-height: 1.3;
        color: #191C3A;
    }

    .content-collapse .summary-collapse .item a {
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: 500;
        text-align: left;
        line-height: 1.2;
        color: #191C3A;
    }

    .content-collapse .summary-collapse .item a:hover,
    .content-collapse .summary-collapse .item a:active,
    .content-collapse .summary-collapse .item a:focus {
        color: #66E026;
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

    .puntos .url-map {
        margin-left: 22px;
    }

    .puntos .url-map::before {
        content: "";
        position: absolute;
        padding: 8px;
        margin-right: 5px;
        margin-left: -22px;
        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-02-2024/maps_a.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
    }

    .puntos .url-map:hover::before {
        background: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-02-2024/maps_v.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>
