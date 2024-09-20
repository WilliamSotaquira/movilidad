@extends('welcome')
@section('title','sdb')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Set sdb -->
<div class="set-wrapper sdb">
    <style>
        .field-item.even .centertil {
            visibility: hidden;
            margin-top: -50px;
        }

        .sdb {
            font-family: 'work sans', sans-serif;
            font-optical-sizing: auto;
            font-size: 14px;
            font-weight: normal;
            text-align: justify;
            line-height: 1.3;
            color: #00000099;
        }

        @media(min-width:768px) {
            .sdb {
                font-size: 16px;
                /* text-align: left; */
            }
        }

        .sdb>.cpnt {
            margin-bottom: 16px;
            padding: 0px;
        }

        @media(min-width:768px) {
            .sdb>.cpnt {
                margin-bottom: 42px;
                padding: 0 28px;
            }
        }


        .sdb .cpnt-1 picture img {
            max-width: 200px;
            margin: auto;
        }

        @media(min-width:768px) {
            .sdb .cpnt-1 picture img {
                border-radius: 8px;
                max-width: 500px;
                margin: 0 auto;
            }
        }
    </style>

    <div class="cpnt cpnt-1">
        <picture>
            <source media="(min-width: 465px)" srcset="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-09-2024/logo_semana_bici_240823_lp.png">
            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-09-2024/logo_ok_semana_bici_240823_vf_vert.png" class="img-responsive w-100" alt="Logo Semana de la Bici XVII" title="Image: Logo Semana de la Bici XVII">
        </picture>
    </div>
    <div class="cpnt cpnt-2">
        <p class="paragraph ph1">Bogotá mi ciudad, mi casa, celebra una vez más la Semana de la Bici, en su edición número 17.</p>
        <p class="paragraph ph2">El evento ciclista más importante para nuestra ciudadanía estará lleno de actividades y sorpresa. Disfruta de una nutrida agenda académica, bicirecorridos, campañas de sensibilización ciclista, conversatorios, competencias y más. </p>
    </div>
    <style>
        .sdb .cpnt-3 .video {
            margin-left: 0;
            margin-right: 0;
        }

        @media(min-width:768px) {
            .sdb .cpnt-3 .video {
                margin-left: 12rem;
                margin-right: 12rem;
            }

        }
    </style>
    <div class="cpnt cpnt-3">
        <div class="video video-1 video-16by9">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width='100%' src='https://www.youtube.com/embed/6SqQTtptZug?si=ZcQ3_FLdeFXd58pE' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="cpnt cpnt-4">
        <p class="paragraph ph1">¡Este año, en Bogotá, nos mueve el respeto! Por eso, queremos que sigas rodando, pero siempre, de forma responsable. Sé un replicador de nuestro mensaje.</p>
        <p class="paragraph ph2">¿Listo para participar? Bienvenido a la fiesta capitalina más grande en honor a la bici.</p>
    </div>
    <style>
        .sdb .cpnt-5 .title h2 {
            font-family: 'Montserrat', sans-serif;
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            color: #4d541f;
            margin: 0;
            padding: 32px 32px 8px 32px;
            margin-bottom: 24px;
            border-bottom: solid 2px #BED000;
        }


        .sdb .cpnt-5 .navs-agenda .navs .nav-pills {
            background-color: #f2f2f2;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 16px !important;
        }

        @media(min-width:768px) {
            .sdb .cpnt-5 .navs-agenda .navs .nav-pills {
                margin-bottom: 0px !important;
            }
        }

        .sdb .cpnt-5 .navs-agenda .navs .nav-pills li>a {
            font-family: 'Montserrat', sans-serif;
            text-align: left;
            font-size: 16px;
            font-weight: 700;
            color: #4d541f;
            padding: 10px 15px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .sdb .cpnt-5 .nav-pills>li>a {
            text-align: start;
        }

        @media(min-width:768px) {
            .sdb .cpnt-5 .nav-pills>li>a {
                text-align: end;
            }

        }

        .sdb .tab-pane.active {
            margin-top: 16px;
            padding-top: 16px;

        }

        @media(min-width:768px) {
            .sdb .tab-pane.active {
                margin-top: 0 !important;
                padding-top: 0 !important;

            }
        }

        .navs-agenda .tab-content .event .glyphicon {
            color: #4d541f;
            margin-left: 8px;
            margin-right: 8px;
            width: 20px;
        }

        .cpnt-5 .event {
            border: solid 1px gray;
            border-radius: 8px;
            padding: 12px 24px;
            margin-bottom: 12px;

        }

        .cpnt-5 .tab-pane .img-1 img {
            border-radius: 8px;
            box-shadow: var(--perfect-shadow);
            --base: hsl(214 80% 27% / 4%);
            --shade: hsl(from var(--base) calc(h + 8) 25 calc(l - 5));
            --perfect-shadow:
                0 0 0 1px var(--base),
                0 1px 1px -0.5px var(--shade),
                0 3px 3px -1.5px var(--shade),
                0 6px 6px -3px var(--shade),
                0 12px 12px -6px var(--base),
                0 24px 24px -12px var(--base);
        }

        .event .title-event h3 {
            font-family: 'Montserrat', sans-serif;
            text-align: left;
            font-weight: 800;
            font-size: 18px;
            color: #4d541f;
            text-transform: uppercase;
        }

        .event .info-event,
        .event .contact-event,
        .event .contact-organizer {
            margin: 16px;
        }

        .event .contact-event .ph1,
        .event .contact-organizer .ph1 {

            color: #4d541f;
            font-weight: bold;
            margin-top: 18px;
            line-height: 0;
        }

        .event .contact-event .ph1,
        .event .contact-organizer .ph1 {
            color: #4d541f;
            font-weight: bold;
            margin-top: 18px;
        }
    </style>
    <div class="cpnt cpnt-5">
        <div class="title">
            <h2>Agenda Semana de la Bici XVII</h2>
        </div>
        <div class="navs navs-agenda">
            <div class="tabbable">

                <ul class="nav nav-pills nav-stacked col-sm-3">
                    <li class="active"><a href="#tab0" data-toggle="tab">Mapa de actividades</a></li>
                    <li><a href="#tab1" data-toggle="tab">Lunes, 23 de septiembre</a></li>
                    <li><a href="#tab2" data-toggle="tab">Martes, 24 de septiembre</a></li>
                    <li><a href="#tab3" data-toggle="tab">Miercoles, 25 de septiembre</a></li>
                    <li><a href="#tab4" data-toggle="tab">Jueves, 26 de septiembre</a></li>
                    <li><a href="#tab5" data-toggle="tab">Viernes, 27 de septiembre</a></li>
                    <li><a href="#tab6" data-toggle="tab">Sábado, 28 de septiembre</a></li>
                    <li><a href="#tab7" data-toggle="tab">Domingo, 29 de septiembre</a></li>
                </ul>
                <div class="tab-content col-sm-9">
                    <div class="tab-pane active" id="tab0">
                        <div class="cpnt cpnt-1">
                            <div class="imagen img-1">
                                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-09-2024/mapa_sdb_2024-09-18.png" target="_blank" rel="noopener noreferrer">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-09-2024/mapa_sdb_2024-09-18.png" alt="Mapa de las actividades en la Semana de la Bici 2024" title="Mapa de las actividades en la Semana de la Bici 2024">
                                </a>
                            </div>
                        </div>
                        <div class="cpnt cpnt-2">
                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                            <link type="text/css" rel="stylesheet" href="resources/sheet.css">
                            <style type="text/css">
                                .cpnt-5 .waffle .s0,
                                .cpnt-5 .waffle .s1,
                                .cpnt-5 .waffle .s2,
                                .cpnt-5 .waffle .s3,
                                .cpnt-5 .waffle .s4,
                                .cpnt-5 .waffle .s5,
                                .cpnt-5 .waffle .s6,
                                .cpnt-5 .waffle .s7,
                                .cpnt-5 .waffle .s8,
                                .cpnt-5 .waffle .s9,
                                .cpnt-5 .waffle .s10,
                                .cpnt-5 .waffle .s11,
                                .cpnt-5 .waffle .s12,
                                .cpnt-5 .waffle .s13,
                                .cpnt-5 .waffle .s14,
                                .cpnt-5 .waffle .s15,
                                .cpnt-5 .waffle .s16,
                                .cpnt-5 .waffle .s17 {
                                    font-family: 'work sans', sans-serif !important;
                                    font-optical-sizing: auto;
                                    font-size: 16px;
                                    font-weight: normal;
                                    text-align: left;
                                    line-height: 1.3;
                                    color: #1f1f1f;
                                }

                                .cpnt-5 .waffle a {
                                    color: inherit;
                                    border: #000000 solid 1px;
                                }

                                .cpnt-5 .waffle .s5 {
                                    background-color: #fce5cd;
                                    text-align: left;
                                    color: #000000;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s14 {
                                    background-color: #76a5af;
                                    text-align: center;
                                    font-weight: bold;
                                    color: #ffffff;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s1 {
                                    background-color: #b6d7a8;
                                    text-align: center;
                                    font-weight: bold;
                                    color: #00000099;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s9 {
                                    background-color: #ea9999;
                                    text-align: center;
                                    font-weight: bold;
                                    color: #ffffff;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s0 {
                                    background-color: #ffffff;
                                    text-align: center;
                                    font-weight: bold;
                                    color: #000000;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s12 {
                                    background-color: #fff2cc;
                                    text-align: left;
                                    color: #1f1f1f;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s4 {
                                    background-color: #f9cb9c;
                                    text-align: center;
                                    font-weight: bold;
                                    color: #00000099;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s7 {
                                    background-color: #ead1dc;
                                    text-align: left;
                                    color: #000000;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s6 {
                                    background-color: #d5a6bd;
                                    text-align: center;
                                    font-weight: bold;
                                    color: #ffffff;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s8 {
                                    background-color: #ead1dc;
                                    text-align: left;
                                    color: #000000;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s13 {
                                    background-color: #fff2cc;
                                    text-align: left;
                                    color: #000000;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s10 {
                                    background-color: #f4cccc;
                                    text-align: left;
                                    color: #000000;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s15 {
                                    background-color: #d0e0e3;
                                    text-align: left;
                                    color: #000000;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s16 {
                                    background-color: #a4c2f4;
                                    text-align: center;
                                    font-weight: bold;
                                    color: #ffffff;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s3 {
                                    background-color: #cccccc;
                                    text-align: left;
                                    color: #000000;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s11 {
                                    background-color: #ffe599;
                                    text-align: center;
                                    font-weight: bold;
                                    color: #00000099;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s2 {
                                    background-color: #d9ead3;
                                    text-align: left;
                                    color: #000000;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }

                                .cpnt-5 .waffle .s17 {
                                    background-color: #cfe2f3;
                                    text-align: left;
                                    color: #000000;
                                    font-family: Arial;
                                    font-size: 10pt;
                                    vertical-align: top;
                                    white-space: normal;
                                    overflow: hidden;
                                    word-wrap: break-word;
                                    direction: ltr;
                                    padding: 0px 3px 0px 3px;
                                }
                            </style>
                            <div class="cp.cpnt-5 grid-container" dir="ltr">
                                <table class="waffle table table-bordered table-condensed" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr style="height: 19px">
                                            <td class="s0">XVII SEMANA DE LA BICICLETA</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s0">EVENTO</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s1">LUNES 23 SEP</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s2">1. Museo de la Historia de la Bicicleta </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s2">2. Prueba de resistencia de scratch<br></td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s2">3. Registro bici- Sensibilización comportamiento vial</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s4">MARTES 24 SEP</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s5">4. Jornada de resignificación &#39;Bogotá mi ciudad, mi casa, mi espacio seguro&#39;</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s5">5. Certificación de estacionamientos de micromovilidad</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s5">6. Desayuno empresarial para conmemorar el aniversario del Sistema de Bicicletas Compartidas </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s5">7. Ruta segura al Alto de Boquerón </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s5">8. Acciones de pedagogía en vía </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s5">9. Ciclistas con sentido&#39; jornada de embellecimiento punto Tihuaque</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s5">10. Campaña Vidas Reflectivas</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s6">MIERCOLES 25 SEP</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s7">11. Aniversario Barrios Vitales<br></td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s7">12. Bogotá avanza en seguridad &#39;Unidos por el bienestar ciclista&#39;, entrega de candados </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s7">13. Rescatando la memoria ciclista: La restauranción y el coleccionismo de bicicletas clásica y antiguas en Bogotá </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s7">14. Guadalupe Nocturno</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s7">15. Green Movil Fontibón, bicidestrezas ANSV</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s7">16. Muévete Fontibón Bicipensante / SDM</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s7">17. I Festival de Gymkanas en San Cristóbal</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s7">18. Recorrido patrimonial por San Cristóbal</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s7">19. Taller de elaboración de bidorjas</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s8">20. Taller de mecánica básica para bicicletas </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s9">JUEVES 26 SEP</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s10">22. Foro académico &#39;Mi casa es cultura bici&#39;</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s10">23. II Bienal de Estacionamientos de Micromovilidad y Premios Al Trabajo en Bici</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s10">24. Registro Bici, sensibilización comportamiento vial </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s10">25. Ruta segura al páramo El Verjón</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s10">26. Mártires rueda segura</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s10">27. Foro &#39;Cicloturismo en Bogotá - Región y el país de la belleza&#39; </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s10">28. Bici - FONTI</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s10">29. Universidades en bici, cuarta edición</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s11">VIERNES 27 SEP</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s12">30. Caravana con &#39;Las fuerzas de la bici&#39; y entrega de andenes/ciclorruta autonorte </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s13">31. Taller: Diseñando redes y calles para ciclistas</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s13">32. Proyección de la serie documental &#39;Victorias y glorias, relatos de campeonas&#39;</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s13">33. Boquerón Nocturno</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s13">34. Foro &#39;Biciestaciones y bienestar en los recorridos en Bogotá DC&#39; </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s13">35. Clínica de la Bici</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s13">36. Encuentro interlocal, Consejo de la Bicicleta de Tunjuelito, Usme y Ciudad Bolívar </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s13">37. Veo bien, me ven mejor 2° versión</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s14">SABADO 28 SEP</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s15">38. Bicirrecorrido Patrimonial </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s15">39. Vivamos un recorrido en Biciaranda</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s15">41. Bicifest SDDE</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s15">42. Alleycat Cargobike - MTB - Piñón fijo</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s15">43. 1,2,3 Mártires pedalea visible otra vez</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s15">44. Feria de servicios: Kennedy se mueve en bici</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s15">45. Festival de la bicicleta </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s15">46. Respiro y alivio, dando un bicirrecorrido por Usaquén</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s15">47. Clínica de la Bici</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s15">48. I Festival de Gymkanas San Cristóbal </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s16">DOMINGO 29 SEP</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s17">49. Bicifest SDDE</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s17">50. Registratón de Bicicletas y showroom de servicios de la bici</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s17">51. Bicirrecorrido ¡Únete a la rodada por la seguridad vial!</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s17">52. Suba, tierra de ciclistas</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s17">53. Ciclotour turístico - recreativo </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s17">54. Ruta segura al Alto de Boquerón </td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s17">55. V Válida Copa Bogotana de Pista</td>
                                        </tr>
                                        <tr style="height: 19px">
                                            <td class="s17">56. Bingo musical entre ciclistas</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab1">

                        <div class="event event1">
                            <div class="title-event">
                                <h3>REGISTRO BICI - SENSIBILIZACIÓN PARA UN COMPORTAMIENTO VIAL SEGURO
                                </h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Jornada de presencia institucional con la estrategia Registro Bici y acciones de sensibilización sobre buen comportamiento vial para las y los ciclistas, así como promoción del uso de elementos básicos de protección.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Lunes, 23 de septiembre y jueves 26 de septiembre</p>
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>7:00 a.m. a 9:00 a.m. </p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Carrera 6 con calle 1 sur </p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretarías de Movilidad, Seguridad y de la Mujer, Policia Nacional y Consejo Bici</p>
                            </div>
                        </div>

                        <div class="event event2">
                            <div class="title-event">
                                <h3>Museo de la historia de la bicicleta a través de los tiempos</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Exposición fotográfica en gran formato, que busca visibilizar una época específica, así como los usos de la bicicleta.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Del lunes 23 al viernes, 27 de septiembre</p>
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>7:00 a.m. 4:30 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Alcaldía de Kennedy, plazoleta central piso 1, transversal 78k # 41a - 04 sur</p>
                            </div>

                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta de Kennedy</p>
                            </div>
                        </div>

                        <div class="event event3">
                            <div class="title-event">
                                <h3>PRUEBA DE RESISTENCIA SCRATCH</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Prueba de resistencia en el velódromo de la Primero de Mayo, lugar emblemático en la localidad de Kennedy para los y las ciclistas amantes de la pista. En esta competencia los corredores saldrán al mismo tiempo en pelotón. Actividad con inscripción previa.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>7:00 a.m. a 10:00 a.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Pista velódromo Primero de Mayo, cra. 5 # 19 - 20 sur</p>
                            </div>
                            <div class="contact-event">
                                <p class="paragraph ph1">Link de inscripción:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://forms.office.com/r/dgXdJ96xcD</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Tren al sur oriente </p>
                            </div>
                        </div>

                        <div class="event event4">
                            <div class="title-event">
                                <h3>ESCUELA DE LA BICICLETA</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">El programa “Escuela de la Bicicleta”, es un proceso de formación secuencial y continuo que permite a la ciudadanía, acceder de una forma lúdico-pedagógica a la bicicleta como elemento formador y transformador de ciudad, en un marco de inclusión, calidad de vida y conciencia ambiental. Para participar, los interesados deben acercarse al punto más cercano y agendar la clase.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Del lunes 23 al sábado, 28 de septiembre</p>
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. a 4:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>34 puntos de la Escuela de la Bicicleta en 20 localidades</p>
                            </div>
                            <div class="contact-event">
                                <p class="paragraph ph1">Programación completa en:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://www.idrd.gov.co/recreacion/bogota-en-bici/escuela-de-la-bicicleta</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Instituto Distrital de Recreación y Deporte</p>
                            </div>
                        </div>

                        <div class="event event5">
                            <div class="title-event">
                                <h3>MEJORA TUS HABILIDADES Y DESTREZAS EN LA BICI</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Actividad de afianzamiento del trabajo interinstitucional en el uso y promoción de la bicicleta para concejales, funcionarios y visitantes del Concejo de Bogotá, donde se desarrollará un circuito de habilidades y destrezas en bicicleta, así como un taller de mecánica de bicicletas y actividades lúdicas de gran formato, apoyado por la Secretaría Distrital de Movilidad.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>2:00 p.m. a 5:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Plazoleta del Concejo de Bogotá, calle 36 # 28a - 41</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad / Instituto Distrital de Recreación y Deporte</p>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="event event1">
                            <div class="title-event">
                                <h3>RUTA SEGURA ALTO DE BOQUERÓN</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Con el fin de incentivar la recreación, el deporte y la actividad física, nacen las Rutas Seguras para ciclistas, y el Alto de Boquerón, con 16 kilómetros, es una de ellas para ascender y conocer esta atractiva ruta. Este recorrido en bicicleta iniciará en el portal 20 de Julio, pasará por la antigua av. Villavicencio e irá hasta la parte alta de San Cristóbal.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>5:45 a.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de salida: Portal 20 de Julio</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de llegada: Alto de Boquerón</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad / Alcaldía Local de San Cristóbal</p>
                            </div>
                        </div>
                        <div class="event event2">
                            <div class="title-event">
                                <h3>DESAYUNO EMPRESARIAL, ANIVERSARIO DEL SISTEMA DE BICICLETAS COMPARTIDAS</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">En el marco del segundo aniversario del Sistema de Bicicletas Compartidas, representantes de empresas locales e internacionales, se reunirán para conversar sobre los principales logros y desafíos que ha afrontado este modelo, además de la importancia de la colaboración con el sector privado como pilar fundamental para asegurar su sostenibilidad a largo plazo y promover una mayor apropiación por parte de la ciudadanía.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Evento cerrado</p>
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>7:00 a.m. </p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Cámara de Comercio de Bogotá, sede Chapinero, calle 67 # 8-32, sala 301/302</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad / Cámara de Comercio de Bogotá / Invest In Bogotá</p>
                            </div>
                        </div>
                        <div class="event event3">
                            <div class="title-event">
                                <h3>"CICLISTAS CON SENTIDO" JORNADA DE EMBELLECIMIENTO PUNTO TIHUAQUE</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">En el marco de la estrategia Ruta Segura al Alto de Boquerón, los y las ciclistas podrán participar en la jornada de apropiación del espacio público, con la cual, se busca lograr que las y los ciclistas encuentren un lugar de parada cómodo y seguro para hidratarse y descansar durante el recorrido.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. a 12:00 m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Patio Gaviotas: carrera 14 este # 47f sur - 24/70</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Bici San Cristóbal - Usme / Consorcio Exprés / Mesa Territorial de Usme</p>
                            </div>
                        </div>

                        <div class="event event4">
                            <div class="title-event">
                                <h3>CERTIFICACIÓN RED DE ESTACIONAMIENTOS DE MICROMOVILIDAD</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">En la actualidad, Bogotá cuenta con más de 72.000 cupos para el parqueo de vehículos de micromovilidad como bicicletas y patinetas. El Plan Distrital de Desarrollo ‘Bogotá Camina Segura’ proyecta llegar a 83.000 cupos, por lo que la Red de Estacionamientos de Micromovilidad estará certificando con el Sello de Calidad Oro en simultánea a 8 establecimientos que facilitan y estimulan la intermodalidad en nuestra ciudad.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:30 a.m. a 11:00 a.m. </p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Sitios:</p>

                                <ol>
                                    <li>Alcaldía Local de Kennedy, transversal 78k # 41a - 04 sur</li>
                                    <li>Edificio City Bank, carrera 9a # 99 - 02</li>
                                    <li>Aeropuerto El Dorado, av. El Dorado # 103 - 09</li>
                                    <li>C.C. Plaza de Las Américas. carrera 71d # 6 - 94 sur</li>
                                    <li>Alcaldía Local de Usaquén, carrera 6a # 119b - 05</li>
                                    <li>Estación de Bomberos Bosa, calle 63 sur # 80k - 15</li>
                                    <li>Telecomunicaciones S.A., transversal 60 # 114ª – 55</li>
                                    <li>TransMilenio, av. El Dorado entre la av.Ciudad de Cali y la transversal 93</li>
                                </ol>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad</p>
                            </div>
                        </div>

                        <div class="event event5">
                            <div class="title-event">
                                <h3>JORNADA DE RESIGNIFICACIÓN: BOGOTÁ MI CIUDAD, MI CASA, MI ESPACIO SEGURO</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">El proyecto Biciparceros registra solo un 26 % de participación femenina, un porcentaje que refleja las barreras y retos que las mujeres pueden encontrar al decidir usar la bicicleta. Fomentar actividades de resignificación del espacio público, principalmente en lugares percibidos como inseguros, hacen que se incentive la reapropiación de estos, a través de esta jornada de intervención, apropiación y resignificación dirigida a mujeres, niñas y adolescentes.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>10:30 a.m. a 2:30 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Diagonal 68 con transversal 114 - 21</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad / Secretaría Distrital de la Mujer</p>
                            </div>
                        </div>

                        <div class="event event6">
                            <div class="title-event">
                                <h3>CULTURA PARA LA MOVILIDAD EN BICI - PUNTOS CIEGOS</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Acciones pedagógicas en las que se compartirá información de interés a ciclistas sobre normativa, factores y conductas seguras en vía con un enfoque en puntos ciegos, uso de la cicloinfraestructura y conflicto bici - SITP.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>4:00 p.m. a 7:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Av. Ciudad de Cali con calle 66, costado oriental - tramo priorizado</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad</p>
                            </div>
                        </div>

                        <div class="event event7">
                            <div class="title-event">
                                <h3>CAMPAÑA VIDAS REFLECTIVAS</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Jornada de carácter pedagógico en la que se busca compartir un mensaje de seguridad vial sobre la importancia de usar elementos reflectivos y luces en horarios nocturnos para el bienestar ciclista. También se contará con un punto de Registro Bici.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>5:00 p.m a 8:00 p.m</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Puntos:</p>
                                <ol>
                                    <li>Av. Guayacanes con calle 51 sur</li>
                                    <li>Av. carrera 30 con calle 80</li>
                                </ol>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad</p>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="tab3">

                        <div class="event event1">
                            <div class="title-event">
                                <h3>ANIVERSARIO BARRIOS VITALES</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Bicirrecorrido de reconocimiento y conversatorio para celebrar el aniversario de los Barrios Vitales en Bogotá con una visita a las intervenciones de urbanismo táctico en Bosa - El Porvenir. Durante esta actividad, también se visitarán las Huertas Urbanas, la Escuela de la Bici y la manzana del cuidado, proyectos implementados en este sector.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>7:30 a.m. a 11:00 a.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de encuentro: carrera 95a con calle 49 sur</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Desarrollo conversatorio: carrera 100 # 52 sur - 24, CDC El Porvenir </p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad</p>
                            </div>
                        </div>

                        <div class="event event2">
                            <div class="title-event">
                                <h3>JUEGA Y AJUSTA TU BICI CON LA ESCUELA DE LA BICI</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Jornada masiva de ajustes preventivos a las bicicletas de las y los beneficiarios del proyecto BiciParceros de 7 localidades. Allí mismo, se hará pedagogía frente al mantenimiento y cuidado de la bicicleta, en alianza con programas como la Escuela de la Bici y Niñas y Niños Primero.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. 10:30 a.m. y 1:45 p.m. a 4:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Puntos:</p>
                                <ol>
                                    <li>Parque Altablanca, carrera 8 # 158 - 4</li>
                                    <li>Parque La Gaitana, carrera 125b # 131</li>
                                    <li>Parque Fontanar del Río, calle 144c con carrera 141</li>
                                    <li>Parque Villa Luz, calle 63f Bis # 77c 18 - 60</li>
                                    <li>Parque San Andrés, calle 82 # 100a - 91</li>
                                    <li>Parque Cayetano Cañizares, calle 41b Sur # 81a - 80</li>
                                    <li>Parque Atahualpa, carrera 113 # 23b - 35</li>
                                    <li>Colegio de la Bici, carrera 81a # 58j - 45 sur</li>
                                    <li>Parque Bosa Porvenir, carrera 100 # 52 - 3 sur</li>
                                    <li>Parque Milenta, calle 1b # 57 - 51</li>
                                    <li>Parque La Estancia, calle 59 sur # 74 - 19</li>
                                </ol>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad / Instituto Distrital de Recreación y Deporte</p>
                            </div>
                        </div>
                        <div class="event event3">
                            <div class="title-event">
                                <h3>RECORRIDO PATRIMONIAL POR SAN CRISTÓBAL</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Recorrido en bicicleta para admirar la riqueza patrimonial de esta localidad. Partiendo desde la Alcaldía Local de San Cristóbal, pasando por la iglesia 20 de Julio - barrio Velódromo - Parque Velódromo - Castillo Doña Julia – Imprenta Distrital – Iglesia de San Cristóbal – Castillo Escuela Logística, terminando nuevamente en el punto de encuentro.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>9:00 a.m. a 12:00 m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Alcaldía Local de San Cristóbal, av. Primero de Mayo # 1- 40 sur</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta San Cristóbal / Escuela de la Bici / IDRD</p>
                            </div>
                        </div>
                        <div class="event event4">
                            <div class="title-event">
                                <h3>TALLER DE ELABORACIÓN DE BIDORJAS</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Taller práctico dirigido a cicloviajeros o personas que llevan todo tipo de carga en sus bicicletas, sobre cómo elaborar alforjas con bidones o canecas reutilizadas.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>9:00 a.m. a 3:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Esquina redonda del Distrito Creativo Bronx, carrera 15 con calle 10, salón Container</p>
                            </div>
                            <div class="contact-event">
                                <p class="paragraph ph1">Enlace al formulario de inscripción:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://forms.gle/EKQKVgyPQDHp5j1H8</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Colectivo Cicloviajeros Colombia</p>
                            </div>
                        </div>

                        <div class="event event5">
                            <div class="title-event">
                                <h3>HABILIDAD Y DESTREZA EN LA SEGURIDAD VIAL</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Con el objetivo de fomentar y apoyar el uso de la Bici, TransMilenio, en colaboración con la Secretaría Distrital de Movilidad y la Agencia Nacional de Seguridad Vial, se une a la Semana de la Bicicleta para trabajar de la mano por la Seguridad Vial, la movilidad sostenible y la cultura ciudadana, brindando actividades para que conductores ciclistas puedan mejorar sus habilidades y destrezas, promoviendo así un transporte responsable y seguro para todos.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>10:00 a.m. a 12:00 m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Bicidestrezas: carrera. 134 # 22a -01, patio Mueve Fontibón</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Bicipensante: transversal 133 # 22b-99 a 22 b-1, patio Green Móvil</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad / Transmilenio / Agencia Nacional de Seguridad Vial</p>
                            </div>
                        </div>
                        <div class="event event5">
                            <div class="title-event">
                                <h3>I FESTIVAL DE GYMKANAS SAN CRISTÓBAL</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Festival con diferentes circuitos y pruebas de habilidad adaptables a diferentes espacios, en los cuales, los participantes podrán practicar diferentes maniobras sobre la bicicleta. Dirigido exclusivamente a niños y niñas de 6 a 12 años.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>12:00 m. a 3:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Pista de patinaje del parque Velódromo, cra. 5 # 19 - 20 sur</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Club Deportivo Capital Bike</p>
                            </div>
                        </div>

                        <div class="event event6">
                            <div class="title-event">
                                <h3>TALLER DE MECÁNICA BÁSICA PARA BICICLETAS</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Aprende o refuerza tus conocimientos en: mantenimiento y limpieza de la transmisión de tu bici, reparación de pinchazos, poner y quitar los pedales, conocer el funcionamiento general de tu bici, reparación de cadena y uso de tronchacadenas.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>2:00 p.m. a 4:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Parque Velódromo av. Primero de Mayo, calle 1B sur #. 5-13, punto Escuela de la Bici</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Ciclo Export</p>
                            </div>
                        </div>
                        <div class="event event7">
                            <div class="title-event">
                                <h3>CONVERSATORIO: RESCATANDO LA MEMORIA CICLISTA: LA RESTAURACIÓN Y EL COLECCIONISMO DE BICICLETAS CLÁSICAS Y ANTIGUAS EN BOGOTÁ</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">El uso de la bicicleta en Bogotá ha sido parte integral del desarrollo de la ciudad, no solo como un medio de transporte sostenible, sino también como un elemento de la vida cotidiana de miles de personas y elemento identitario de la cultura urbana. Este conversatorio sobre la restauración y coleccionismo de bicicletas clásicas y antiguas se plantea como un espacio de reflexión y diálogo para resaltar la importancia de este oficio en la salvaguardia de la cultura bogotana de la bicicleta.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Entrada libre hasta completar el aforo</p>
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>2:00 p.m. a 4:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Archivo Distrital de Bogotá, calle 6b # 5 - 75</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Instituto Distrital de Patrimonio Cultural</p>
                            </div>
                        </div>

                        <div class="event event8">
                            <div class="title-event">
                                <h3>FORO MOVILIDAD SOSTENIBLE “LA MOVILIDAD Y LA BICI”</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">La Universidad Distrital se une a la Semana de la Bicicleta, con un foro en el cual participarán expertos que compartirán sus experiencias respecto a la importancia de los modos de transporte enfocados en movilidad sostenible, género y la posición de la bicicleta en la ciudad.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>3:00 p.m. a 5:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Universidad Distrital, calle 13 # 31 - 75, sede Aduanilla de Paiba </p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Universidad Distrital Francisco José de Caldas</p>
                            </div>
                        </div>
                        <div class="event event9">
                            <div class="title-event">
                                <h3>"BOGOTÁ AVANZA EN SEGURIDAD, UNIDOS POR EL BIENESTAR CICLISTA" ENTREGA DE CANDADOS</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">La Secretaría Distrital de Movilidad sensibiliza y orienta a la ciudadanía sobre la forma correcta de parquear sus bicicletas. La ciudad cuenta con una amplia red de estacionamientos que están dispuestos en el espacio público y privado, como una estrategia para reducir el hurto. Esta actividad está enfocada en la entrega de candados a población vulnerable que no cuentan con recursos para adquirirlos.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>4:00 p.m. a 7:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Diagonal 15a, plazoleta AUM, frente al canal del Río Fucha (Cicloalameda El Porvenir)</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad</p>
                            </div>
                        </div>

                        <div class="event event10">
                            <div class="title-event">
                                <h3>GUADALUPE NOCTURNO</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">El bicirrecorrido a Guadalupe hace parte de una serie de iniciativas desarrolladas por la Alcaldía Local de Santa Fe, con el fin de brindar espacios de esparcimiento y goce para los ciudadanos. Esta emblemática subida al cerro, se ha convertido poco a poco en una de las subidas favoritas para las y los bogotanos en horario nocturno.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>De 5:00 p.m. a 9:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de salida: Guadalupe Nocturno</p>
                                <p><a href="https://maps.app.goo.gl/jtpvaDrBA5YGRJWr7">Plazoleta Asosandiego, frente al Museo Nacional, carrera 7 con calle 28</a></p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de llegada: Cerro Guadalupe</p>

                            </div>
                            <div class="contact-event">
                                <p class="paragraph ph1">Enlace al formulario de inscripción:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://forms.gle/Ri4bSkTUqtNwpW7f9</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad / Alcaldía Local de Santa Fe</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab4">

                        <div class="event event1">
                            <div class="title-event">
                                <h3>RUTA SEGURA PÁRAMO EL VERJÓN</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Emblemática subida al páramo de Cruz Verde en la vereda El Verjón conocida por diversos grupos de ciclistas de Bogotá, en donde se busca incentivar la práctica recreodeportiva por la zona y habitar un espacio que se ha convertido en una de las subidas favoritas para las y los bogotanos.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>5:45 a.m. a 8:00 a.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de encuentro: Batallón de Mantenimiento, calle 19 sur con carrera 6</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Alcaldía Local de San Cristóbal</p>
                            </div>
                        </div>
                        <div class="event event2">
                            <div class="title-event">
                                <h3>FORO “ MI CASA ES CULTURA BICI”</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Espacio que busca visibilizar la cultura bogotana en los usos y disfrutes de la bicicleta, así como su apropiación y declaración como Patrimonio Cultural Inmaterial del Ámbito Distrital. Igualmente, propiciar espacios para la promoción de la bicicleta proyectando a Bogotá como una capital global atractiva y sostenible en donde la bicicleta tiene un rol estratégico en el sistema de movilidad y en el desarrollo urbano sostenible, inclusivo, accesible y con enfoque de género.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>7:30 a.m. a 1:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Sala de Música de la Biblioteca Virgilio Barco, av. carrera 60 # 57 - 60 </p>
                            </div>
                            <div class="contact-event">
                                <p class="paragraph ph1">Enlace al formulario de inscripción:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://forms.gle/5j7abtYxZYFQqYu46</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad</p>
                            </div>
                        </div>
                        <div class="event event3">
                            <div class="title-event">
                                <h3>UNIVERSIDADES EN BICI – CUARTA EDICIÓN</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Actividad grupal realizada por diversas universidades, encaminada en la participación, uso recreativo y pedagógico de la bicicleta en entornos de educación superior.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. a 12:00 m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Ruta 1: desde el parque El Country a la Biblioteca Virgilio Barco</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Ruta 2: desde la UNAD Edificio José Acevedo y Gómez a la Biblioteca Virgilio Barco</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Universidad Distrital Francisco José de Caldas / Universidad Nacional Abierta y a Distancia / Pontificia Universidad Javeriana / Universidad del Rosario / Corporación Universitaria Minuto de Dios / Universidad Santo Tomás / Universidad de la Salle / Universidad Antonio Nariño / Fundación Universitaria del Área Andina / Universidad Nacional de Colombia / Universidad de San Buenaventura / Escuela de Moda y Diseño Arturo Tejada Cano</p>
                            </div>
                        </div>
                        <div class="event event4">
                            <div class="title-event">
                                <h3>FORO CICLOTURISMO EN BOGOTÁ REGIÓN Y EL PAÍS DE LA BELLEZA.</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Foro académico sobre el cicloturismo en Bogotá Capital Mundial de la Bici y en Colombia, país de la belleza, una mirada socio cultural para la promoción de la economía. Exposición fotográfica sobre cicloturismo de experiencias bogotanas.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>2:00 p.m. a 4:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Esquina redonda del Distrito Creativo Bronx, carrera 15 con calle 10</p>
                            </div>
                            <div class="contact-event">
                                <p class="paragraph ph1">Enlace al formulario de inscripción:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://forms.gle/zVHwbJ3PhT7gJ3NN7</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Colectivo Cicloviajeros Colombia</p>
                            </div>
                        </div>
                        <div class="event event5">
                            <div class="title-event">
                                <h3>II BIENAL DE ESTACIONAMIENTOS DE MICROMOVILIDAD Y PREMIOS AL TRABAJO EN BICI</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Espacio de reconocimiento a organizaciones públicas y privadas que implementan estacionamientos seguros y de calidad para la ciudad. Igualmente, se premiará a las entidades distritales con mejores implementaciones de los Planes Integrales de Movilidad Sostenible de la Red Muévete Mejor, a través de la entrega de los Premios Al trabajo en bici, que destaca las estrategias de promoción del uso de la bicicleta.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>De 4:00 p.m. a 7:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Sala de Música de la Biblioteca Virgilio Barco, av. carrera 60 # 57 - 60</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad</p>
                            </div>
                        </div>
                        <div class="event event6">
                            <div class="title-event">
                                <h3>MÁRTIRES RUEDA SEGURA</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Bicirrecorrido para identificar y visibilizar las diferentes problemáticas y la seguridad local que tienen las y los ciclistas de la localidad, por medio de controles a establecimientos de bicicletas.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>4:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Parque Renacimiento, carrera 19b con calle 26</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta Los Mártires</p>
                            </div>
                        </div>
                        <div class="event event7">
                            <div class="title-event">
                                <h3>BICI - FONTI</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Actividad recreodeportiva que busca incentivar el uso de la bicicleta, se realizará un recorrido desde Maloka hasta el parque Zona Franca, espacio en el que se llevarán a cabo varias carreras cortas por el circuito MTB del parque. Solo para mayores de edad, se recomienda llevar kit de despinche e hidratación.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>7:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de encuentro 1: Maloka, av. de La Esperanza con carrera 68d </p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de encuentro 2: Parque Fundacional Fontibón, carrera 99 con calle 18a</p>
                            </div>
                            <div class="contact-event">
                                <p class="paragraph ph1">Enlace al formulario de inscripción:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://forms.gle/jYYCmPtuc5jt1ZZn9</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta Fontibón</p>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="tab5">

                        <div class="event event1">
                            <div class="title-event">
                                <h3>CARAVANA DE RECONOCIMIENTO A LOS EQUIPOS QUE CONFORMAN “LAS FUERZAS DE LA BICI” Y ENTREGA DE CICLORRUTA / ANDENES AUTONORTE</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Recorrido en bici liderado por el alcalde Carlos Fernando Galán y los equipos que conforman ‘Las Fuerzas de la Bici’. En esta actividad se reconocerá y exaltará el trabajo y la trascendencia de quienes, durante años, se han consolidado para brindar un servicio a la ciudadanía en diferentes contextos y actividades a bordo de su bicicleta (guardianes de la ciclovía, guías ACB, guías en vía SDM, guías de turismo, Policía). Finalizada la caravana, se hará la entrega de un nuevo proyecto de cicloinfraestructura que tiene como objetivo mejorar las condiciones y calidad de vida de la ciudadanía, mediante accesibilidad, sostenibilidad y seguridad vial.</p>
                                <p class="paragraph ph2">Actividad con inscripción previa</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>7:00 a.m a 9:00 a.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de encuentro: Parque Alcalá, autopista Norte con calle 137</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de llegada: Parque Alhambra. av. calle 116 con canal Molinos</p>
                            </div>
                            <div class="contact-event">
                                <p class="paragraph ph1">Enlace al formulario de inscripción:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://forms.gle/L9c6q7N1tV7ghwKz7</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad / Instituto De Desarrollo Urbano</p>
                            </div>
                        </div>

                        <div class="event event2">
                            <div class="title-event">
                                <h3>TALLER DISEÑANDO REDES Y CALLES PARA CICLISTAS</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Taller de diseño para analizar diferentes contextos, estrategias y soluciones para el diseño de redes y calles que permitan a ciclistas de todos los géneros, edades y habilidades pedalear de forma cómoda y segura.</p>
                                <p class="paragraph ph2">Evento exclusivo para funcionarios IDU, UMV y alcaldías locales</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>9:00 a.m. a 3:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Auditorio IDU, calle 22 # 6-27</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad / Global Designing Cities Initiative</p>
                            </div>
                        </div>
                        <div class="event event3">
                            <div class="title-event">
                                <h3>VEO BIEN, ME VEN MEJOR, 2° versión</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">La Universidad El Bosque se une a esta celebración, adoptando el enfoque biopsicosocial y cultural como un pilar para concientizar, no solo a los profesionales de la salud en formación, sino a la comunidad universitaria promoviendo el evento académico y lúdico “La Cultura del autocuidado del Ciclista”.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. a 12:00 m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Auditorio Fundadores Universidad El Bosque, av. cra. 9° # 132-01</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Facultad de Medicina de la Universidad El Bosque</p>
                            </div>
                        </div>
                        <div class="event event4">
                            <div class="title-event">
                                <h3>WORKSHOP CON PAÍSES BAJOS </h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Workshop que reunirá a destacadas autoridades locales (Gobernación de Cundinamarca, Bogotá D.C. y municipios de la región central), que compartirán sus visiones y experiencias en torno a la movilidad activa. Exploraremos estrategias innovadoras para mejorar el uso del espacio público, a través de cicloinfraestructuras, así como acciones para fomentar la movilidad peatonal y ciclista en grandes ciudades con un enfoque de género.</p>
                                <p class="paragraph ph2">Evento cerrado</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>9:00 a.m a 11:00 a.m.</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2"> Ministerio de Transporte</p>
                            </div>
                        </div>
                        <div class="event event5">
                            <div class="title-event">
                                <h3>SPRINT POR PAREJAS PARA ATLETISMO</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">El para atletismo es, sin duda alguna, la disciplina más numerosa y participativa del programa paradeportivo. Permite la participación de paratletas con discapacidad física, visual e intelectual en diversas pruebas, tanto en pista como en campo, e incluso en pruebas como el maratón. Conoce más de esta disciplina, ven y disfruta de esta gran exhibición.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>10:00 a.m. a 12:00 m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Calle 19 sur entre carrera 8 y carrera 6</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Selección Paratletas de Bogotá</p>
                            </div>
                        </div>
                        <div class="event event6">
                            <div class="title-event">
                                <h3>FORO “BICIESTACIONES Y BIENESTAR EN LOS RECORRIDOS EN BOGOTÁ D.C”</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Este foro contará con la participación de cuatro ponentes que estarán conversando sobre el bienestar del ciclista en los recorridos bogotanos.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>2:00 p.m. a 4:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Esquina redonda del Distrito Creativo Bronx, carrera 15 con calle 10, salón Container</p>
                            </div>
                            <div class="contact-event">
                                <p class="paragraph ph1">Enlace al formulario de inscripción:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://forms.gle/ci2AEmSpJbFx1nSK8</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Colectivo Cicloviajeros Colombia</p>
                            </div>
                        </div>
                        <div class="event event7">
                            <div class="title-event">
                                <h3>PROYECCIÓN DE LA SERIE DOCUMENTAL VICTORIAS Y GLORIAS, RELATOS DE CAMPEONAS</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Proyección de la serie, conversatorio y exposición museográfica sobre el ciclismo femenino en Colombia, en el que, a través de un diálogo intergeneracional, rinde homenaje a 5 mujeres pioneras de este deporte en el país.</p>
                                <p class="paragraph ph2">Entrada libre hasta completar el aforo</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>3:00 p.m a 7:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Auditorio de la Biblioteca Virgilio Barco, carrera 60 # 57 - 60</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">CINEMAZUL</p>
                            </div>
                        </div>
                        <div class="event event8">
                            <div class="title-event">
                                <h3>BOQUERÓN NOCTURNO</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Emblemático recorrido nocturno en bicicleta desde el portal 20 de Julio hasta el Alto de Boquerón.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>5:30 p.m. a 8:30 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Portal 20 de Julio, carrera 5a con calle 31 sur</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta San Cristóbal</p>
                            </div>
                        </div>
                        <div class="event event9">
                            <div class="title-event">
                                <h3>ENCUENTRO INTERLOCAL, CONSEJO DE LA BICI TUNJUELITO, USME, CIUDAD BOLÍVAR.</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Encuentro interlocal de la bici, iniciando en Usme, atravesando Tunjuelito y llegando hasta Ciudad Bolívar, donde se realizará un recorrido entre los Consejos Locales de la Bicicleta, para el conocimiento de las diferentes localidades que conectan la zona.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>5:00 p.m. a 8:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Alcaldía Local de Tunjuelito, diagonal 50a # 18 - 48 sur</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta Tunjuelito</p>
                            </div>
                        </div>
                        <div class="event event10">
                            <div class="title-event">
                                <h3>CLÍNICA DE LA BICI</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Actividades para las y los usuarios de la bicicleta en la localidad, con el fin de capacitarlos en legislación del tránsito de la bicicleta y sus partes, mecánica y ergonomía de la bicicleta. En la segunda jornada se realizará un taller práctico de habilidades y destrezas con la bicicleta.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Viernes, 27 de septiembre / sábado, 28 de septiembre</p>
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>7:00 p.m. a 9:00 p.m. / 9:00 a.m. a 12:00 m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Alcaldía de Kennedy, transversal 78k # 41a - 04 sur, auditorio A</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta Kennedy</p>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="tab6">

                        <div class="event event1">
                            <div class="title-event">
                                <h3>BICIRRECORRIDO PATRIMONIAL“VIVIR LA CULTURA DE LA BICICLETA COMO PATRIMONIO DE BOGOTÁ” </h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">¿La cultura de la bicicleta es patrimonio de Bogotá? En este recorrido vamos a identificar algunos de los usos, manifestaciones y disfrutes que hacen de la cultura de la bicicleta en Bogotá un patrimonio integral. Asimismo, visitaremos sitios de valor patrimonial tales como parques, plazas de mercado y bibliotecas. Será un espacio de sensibilización sobre la inclusión de la “Cultura bogotana de los usos y disfrutes de la bicicleta en la LRPCI de Bogotá” y la implementación del Plan Especial de Salvaguardia. No se requiere inscripción.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>9:00 a.m a 1:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de salida: Parque Nacional</p>
                                <p class="paragraph ph-punto"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span>Espacios a visitar: Plaza de mercado 7 de agosto, av. calle 68 con carrera 28 - Comercio de bicicletas</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de llegada: Biblioteca Virgilio Barco</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Instituto Distrital de Patrimonio Cultural</p>
                            </div>
                        </div>
                        <div class="event event2">
                            <div class="title-event">
                                <h3>VIVAMOS UN RECORRIDO EN BICIARANDA</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Rodada por sitios de interés de la localidad de Puente Aranda, aquí conocerás 5 puntos recreativos, culturales y urbanísticos de la localidad a bordo de tu bici.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. a 11:00 a.m. </p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Distrito Graffiti, carrera 53f # 5c-1</p>
                            </div>
                            <div class="contact-event">
                                <p class="paragraph ph1">Enlace al formulario de inscripción:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://forms.gle/FauFf6vD3swXuQC27</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta Puente Aranda</p>
                            </div>
                        </div>
                        <div class="event event3">
                            <div class="title-event">
                                <h3>RESPIRAR, VER, COMER Y RODAR POR ENGATIVÁ</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Rodada ciclista por corredores de la localidad de Engativá, visitando puntos emblemáticos y finalizando en el parque San Andrés con actividades y servicios para ciclistas.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. a 12:00 m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de encuentro: humedal Santa María del Lago, carrera 76 # 75b-02</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto final: Parque San Andrés, calle 82 # 100ª-91</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta Engativá</p>
                            </div>
                        </div>
                        <div class="event event3_2">
                            <div class="title-event">
                                <h3>RESPIRAR, VER, COMER Y RODAR POR ENGATIVÁ</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Rodada ciclista por corredores de la localidad de Engativá, visitando puntos emblemáticos y finalizando en el parque San Andrés con actividades y servicios para ciclistas.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. a 12:00 m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de encuentro: humedal Santa María del Lago, carrera 76 # 75b-02</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto final: Parque San Andrés, calle 82 # 100ª-91</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta Engativá</p>
                            </div>
                        </div>
                        <div class="event event4">
                            <div class="title-event">
                                <h3>FESTIVAL DE LA BICICLETA</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Bicirrecorrido por las principales ciclorrutas de la localidad de Bosa con punto de inicio y llegada en el parque La Esperanza. Habrá oferta institucional, espacio académico y actividad en el Skate Park.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. a 1:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Parque zonal La Esperanza, av. Ciudad de Cali / Cra. 80j</p>
                            </div>
                            <div class="contact-event">
                                <p class="paragraph ph1">Enlace al formulario de inscripción:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://forms.gle/Azy76KsaJgJiT3bk6</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta Bosa</p>
                            </div>
                        </div>
                        <div class="event event5">
                            <div class="title-event">
                                <h3>RESPIRO Y ALIVIO DANDO UN BICI RECORRIDO POR USAQUÉN</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Bicirrecorrido por la localidad de Usaquén en bici, con el fin de conocer lugares representativos de la misma en dos ruedas.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. a 11:00 a.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Parque de Las Rampas, Cedritos, av. carrera 9 con calle 146</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta Usaquén</p>
                            </div>
                        </div>
                        <div class="event event6">
                            <div class="title-event">
                                <h3>FERIA DE SERVICIOS KENNEDY SE MUEVE EN BICI</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Feria de servicios con emprendimientos, oferta institucional y registro de bicicletas.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>9:00 a.m. a 2:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Alcaldía de Kennedy, plazoleta exterior, transversal 78k # 41a 04 sur</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta Kennedy</p>
                            </div>
                        </div>
                        <div class="event event7">
                            <div class="title-event">
                                <h3>BICIFEST, FERIA DE SERVICIOS</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Feria de emprendimientos y servicios que busca fomentar la venta de bicicletas, accesorios y ropa deportiva de marcas producidas a nivel local, a través de la feria de emprendimiento Hecho en Bogotá a cargo de la Secretaría de Desarrollo Económico. En este espacio se propende la reactivación económica de empresas y emprendimientos Bici y la visibilización de la oferta institucional, a través de charlas pedagógicas, talleres y muestras artísticas.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>10:00 a.m. a 5:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Biblioteca Virgilio Barco, av. carrera 60 # 57 - 60</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Desarrollo Económico</p>
                            </div>
                        </div>
                        <div class="event event8">
                            <div class="title-event">
                                <h3>1,2,3 MÁRTIRES PEDALEA VISIBLE OTRA VEZ</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Feria de servicios de diferentes entidades y comerciantes, donde se ofrecerán diversos productos, resultado de sus emprendimientos.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>10:00 a.m. a 3:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Plazoleta estación Ricaurte, calle 12b con cra. 29 </p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta Los Mártires</p>
                            </div>
                        </div>
                        <div class="event event9">
                            <div class="title-event">
                                <h3>ALLEYCAT SAN CRISTÓBAL</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Carrera de bicicletas originalmente creada y organizada por y para mensajeros ciclistas. Esta competencia suele tener lugar en ciudades y no sigue una ruta específica preestablecida. En lugar de eso, los participantes reciben una lista de puntos de control que deben visitar, a menudo en el orden de su elección, para completar la carrera.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>1:00 p.m. a 5:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de partida: plazoleta de la iglesia 20 de Julio, carrera 5a con calle 27 sur</p>
                            </div>
                            <div class="contact-event">
                                <p class="paragraph ph1">Enlace al formulario de inscripción:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://forms.office.com/r/3UiwjGL7jd</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2"></p>
                            </div>
                        </div>
                        <div class="event event10">
                            <div class="title-event">
                                <h3>I FESTIVAL DE GYMKANAS SAN CRISTÓBAL</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Festival con diferentes circuitos y pruebas de habilidad adaptables a diferentes espacios, en los cuales, los participantes podrán practicar diferentes maniobras sobre la bicicleta. Dirigido a niños y niñas de 6 a 12 años.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>2:00 p.m. a 6:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Velódromo av. Primero de Mayo - Cancha de hockey y patinódromo, carrera 5 # 19 - 20 sur</p>
                            </div>
                            <div class="contact-event">
                                <p class="paragraph ph1">Enlace al formulario de inscripción:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>Por confirmar</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Club Deportivo Capital Bike</p>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="tab7">

                        <div class="event event1">
                            <div class="title-event">
                                <h3>I REGISTRATÓN DE BICICLETAS Y SHOWROOM DE SERVICIOS DE LA BICI</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Registro Bici es el sistema único distrital para el registro obligatorio de bicicletas en Bogotá, un mecanismo que permite a los y las ciclistas asociar sus datos con los de su(s) bicicleta(s) y obtener un comprobante que les permita determinar su propiedad. En esta gran jornada masiva de registro también habrá marcación de bicicletas con apoyo de la Policía de Bogotá y la Secretaría Distrital de Seguridad, Convivencia y Justicia.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. a 1:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><a href="https://maps.app.goo.gl/UfpdwxmrN97aL6dj8">Av. Boyacá con calle 26, costado nororiental, Ciclovía Dominical</a></p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Movilidad </p>
                            </div>
                        </div>
                        <div class="event event2">
                            <div class="title-event">
                                <h3>RUTA SEGURA ALTO DE BOQUERÓN</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Emblemática subida al Alto de Boquerón, esta ruta segura iniciará en el portal 20 de Julio, pasará por la antigua av. Villavicencio e irá hasta la parte alta de San Cristóbal.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>5:45 a.m. a 8:00 a.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Portal 20 de Julio</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Alcaldía Local de San Cristóbal</p>
                            </div>
                        </div>
                        <div class="event event3">
                            <div class="title-event">
                                <h3>BICIPICNIC CAPITALINO</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Ciclopaseo por diferentes puntos del programa Escuela de la Bicicleta durante la Ciclovía Dominical, con el ánimo de reunirse en el Parque Virgilio Barco para compartir de un Picnic Capitalino en bici.</p>
                                <p class="paragraph ph2">300 cupos para usuarios de la Escuela de la Bicicleta</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>6:00 a.m. a 1:00 p.m. </p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Puntos de partida:</p>
                            </div>

                            <div class="contact-event">
                                <p class="paragraph ph1">Consulta los puntos de partida en:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://www.idrd.gov.co/recreacion/bogota-en-bici/escuela-de-la-bicicleta</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Instituto Distrital de Recreación y Deporte</p>
                            </div>
                        </div>
                        <div class="event event4">
                            <div class="title-event">
                                <h3>CICLOTOUR TURÍSTICO - RECREATIVO</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Recorrido turístico – recreativo en bicicleta de MTB, donde se conocerá y socializará la importancia del cuidado y protección del ecosistema, a partir de la historia de los cerros orientales de la localidad de San Cristóbal.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>7:00 a.m. a 10:00 a.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Portal 20 de Julio</p>
                            </div>
                            <div class="contact-event">
                                <p class="paragraph ph1">Enlace al formulario de inscripción:</p>
                                <p class="paragraph ph2"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>https://forms.office.com/r/QW7FvL9NU5</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Alcaldía Local de San Cristóbal / Consejo Local de la Bicicleta</p>
                            </div>
                        </div>
                        <div class="event event5">
                            <div class="title-event">
                                <h3>ESCUELA DE LA BICICLETA</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">El programa “Escuela de la Bicicleta”, es un proceso de formación secuencial y continuo que permite a la ciudadanía acceder de una forma lúdico-pedagógica a la bicicleta como elemento formador y transformador de ciudad, en un marco de inclusión, calidad de vida y conciencia ambiental. Para participar, los interesados deben acercarse al punto más cercano y agendar la clase.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. a 1:00 p.m</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>2 puntos Itinerantes ubicados en la Ciclovía</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Instituto Distrital de Recreación y Deporte</p>
                            </div>
                        </div>
                        <div class="event event6">
                            <div class="title-event">
                                <h3>V VÁLIDA COPA BOGOTANA DE PISTA</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Desarrollo de actividades deportivas en la modalidad de pista con la participación de los ciclistas que hacen parte del Ranking Distrital de Pista de la Liga de Ciclismo de Bogotá. Dentro de la actividad se realizarán pruebas de grupo e individuales de pista, en damas y varones.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. a 3:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Velódromo av. Primero de Mayo, carrera 5 # 19 - 20</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Club Capital Bike</p>
                            </div>
                        </div>
                        <div class="event event7">
                            <div class="title-event">
                                <h3>BINGO MUSICAL ENTRE CICLISTAS</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Espacio cultural único dedicado a la promoción de emprendimientos relacionados con el mundo de las bicicletas. Este lugar se ha convertido en punto de encuentro para ciclistas, emprendedores y entusiastas del ciclismo. Aquí, se celebran talleres, eventos y actividades como el bingo musical que fomentan la cultura de la bicicleta, así como el intercambio de conocimientos sobre mecánica, sostenibilidad y estilo de vida saludable.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. a 2:00 p.m. </p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Av. Boyacá con calle 26, costado nororiental, Ciclovía Dominical</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Pulguero Cletero</p>
                            </div>
                        </div>
                        <div class="event event8">
                            <div class="title-event">
                                <h3>BICIRRECORRIDO ¡ÚNETE A LA RODADA POR LA SEGURIDAD VIAL!</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">TransMilenio se une a esta Semana de la Bici con un recorrido por la carrera 7, con el fin de promover la convivencia vial y resaltar la importancia de la movilidad sostenible en Bogotá. Esta actividad busca destacar el compromiso de los operadores del sistema con un transporte más seguro y amigable para todos. Incluye actividad pedagógica de puntos ciegos.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:00 a.m. a 1:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de encuentro: plazoleta principal estación Museo Nacional, carrera 7 entre calles 28 y 30</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Punto de llegada: carrera 7 con calle 100</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">TransMilenio</p>
                            </div>
                        </div>
                        <div class="event event9">
                            <div class="title-event">
                                <h3>SUBA, TIERRA DE CICLISTAS</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Bicirrecorrido con varias paradas en sitios conmemorativos de la localidad de Suba, toda la comunidad podrá participar de esta experiencia local. Contará con una feria de emprendimientos bici disponible para toda la comunidad en la Plazoleta Fundacional, la cual estará habilitada de 9:00 a.m. a 5:00 p.m.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:30 a.m. - 12:30 m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Plazoleta frente al Portal de Suba</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Consejo Local de la Bicicleta Suba</p>
                            </div>
                        </div>
                        <div class="event event11">
                            <div class="title-event">
                                <h3>BICIFEST, FERIA DE SERVICIOS</h3>
                            </div>
                            <div class="description-event">
                                <p class="paragraph ph1">Feria de servicios y emprendimientos en el marco de la Semana de la Bici, que busca fomentar la venta de bicicletas, accesorios y ropa deportiva de marcas producidas a nivel local, a través de la feria de emprendimiento Hecho en Bogotá a cargo de la Secretaría de Desarrollo Económico. En este espacio se propende la reactivación económica de empresas y emprendimientos Bici y la visibilización de la oferta institucional, a través de charlas pedagógicas, talleres y muestras artísticas.</p>
                            </div>
                            <div class="info-event">
                                <p class="paragraph ph-hour"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>10:00 a.m a 5:00 p.m.</p>
                                <p class="paragraph ph-site"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Parque Biblioteca Virgilio Barco, av. carrera 60 # 57 - 60</p>
                            </div>
                            <div class="contact-organizer">
                                <p class="paragraph ph1">Organiza:</p>
                                <p class="paragraph ph2">Secretaría Distrital de Desarrollo Económico</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Fin Set -->
