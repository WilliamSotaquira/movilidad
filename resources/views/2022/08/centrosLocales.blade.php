@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- Set Wrapper -->
<div class='container-fluid centrosLocales'>
    <div class='box-wrp'>

        <div class="box-centrosLocales">
            <h3 class="text-center"><strong>Centros Locales de Movilidad</strong></h3>
            <div class='imagen'>
                <img class='img-responsive w-100' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-07-2022/clm_ninos_logo_0.png' alt='Icono de Centros Locales de Movilidad' title='Icono de Centros Locales de Movilidad'>
            </div>
        </div>
        <br>
        <div>
            <h4><strong>¿Cómo está conformado el equipo del Centro Local de Movilidad?</strong></h4>
            <ul>
                <li><strong>Gestor de Local de Movilidad:</strong> Profesional de perfil social, cuya presencia en la localidad facilita los procesos de participación y quien, a través de la comunicación directa, acompaña los trámites y solicitudes ciudadanas. Su trabajo permite optimizar el tiempo de los usuarios y su misión es ofrecer información veraz y oportuna.</li>
                <li><strong>Orientador de Servicio Local:</strong> Es la persona encargada de orientar a la comunidad en trámites y servicios, así como acompañar en los procesos de convocatoria comunitaria. Apoyan en la logística y en los operativos pedagógicos implementados en las localidades.</li>
            </ul>
            <p>Cada Centro Local de Movilidad cuenta con un equipo de trabajo compuesto por Gestores y Orientadores, que gestionan las necesidades de la comunidad en materia de movilidad.</p>
        </div>
        <div class="box-centroslocales">
            <div class="box-mensaje">
                Aviso Importante
            </div>
            <div class="parrafo-mensaje">
                La Secretaría Distrital de Movilidad informa a toda la ciudadanía que <strong>los Centros Locales de Movilidad siguen trabajando para ustedes,</strong> por esta razón queremos recordar nuestros canales de atención en este tipo de cuarentena.
            </div>
        </div>
        <div class="box-paneles">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">1.USAQUÉN</h3>
                </div>
                <div class="panel-body">
                    <dl>
                        <dt><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></dt>
                        <dd><a href="https://www.google.com/maps/place/Junta+Administradora+Local+Jal+Usaqu%C3%A9n/@4.6976182,-74.0343967,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f9aa84fd858a3:0xce02fbff32cc52a!8m2!3d4.6975929!4d-74.0322158" target="_blank" rel="noopener noreferrer">Cl 120a No 7 - 55 Antigua JAL</a></dd>
                        <dt><span class="glyphicon glyphicon-envelope" aria-hipen="true"></span></dt>
                        <dd><a href="mailto:clusaquen@movilidadbogota.gov.co">clusaquen@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">2. CHAPINERO</h3>
                </div>
                <div class="panel-body">
                    <dl>
                        <dt><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></dt>
                        <dd><a href="https://goo.gl/maps/BXuuGxW6ZzHbQ9K59" target="_blank" rel="noopener noreferrer">Cr 13 No 54 -74 Alcaldia Local Chapinero 1 Piso </a></dd>
                        <dt><span class="glyphicon glyphicon-envelope" aria-hipen="true"></span></dt>
                        <dd><a href="mailto:clchapinero@movilidadbogota.gov.co">clchapinero@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">3. SANTA FE</h3>
                </div>
                <div class="panel-body">
                    <dl>
                        <dt><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></dt>
                        <dd><a href="https://goo.gl/maps/BztHwcZpdnU1gWkw8" target="_blank" rel="noopener noreferrer">Cl 21 No 5 - 74 Alcaldia Local Santa Fe Piso 3</a></dd>
                        <dt><span class="glyphicon glyphicon-envelope" aria-hipen="true"></span></dt>
                        <dd><a href="mailto:clsantafe@movilidadbogota.gov.co">clsantafe@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">4. SAN CRISTOBAL </h3>
                </div>
                <div class="panel-body">
                    <dl>
                        <dt><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></dt>
                        <dd><a href="https://goo.gl/maps/5RLRNnd1iT9foH4o8" target="_blank" rel="noopener noreferrer">Av. Primera de Mayo No 1 - 40 Sur Alcaldia Local San Cristobal</a></dd>
                        <dt><span class="glyphicon glyphicon-envelope" aria-hipen="true"></span></dt>
                        <dd><a href="mailto:clsancristobal@movilidadbogota.gov.co">clsancristobal@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">5. USME</h3>
                </div>
                <div class="panel-body">
                    <dl>
                        <dt><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></dt>
                        <dd><a href="https://goo.gl/maps/9uyJnzcsH2D6sa2JA" target="_blank" rel="noopener noreferrer">Cl 137B No 14 - 24 sur Alcaldia Local de Usme </a></dd>
                        <dt><span class="glyphicon glyphicon-envelope" aria-hipen="true"></span></dt>
                        <dd><a href="mailto:clusme@movilidadbogota.gov.co">clusme@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">6. TUNJUELITO</h3>
                </div>
                <div class="panel-body">
                    <dl>
                        <dt><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></dt>
                        <dd><a href="https://goo.gl/maps/1au24WP9U9A16h2s5" target="_blank" rel="noopener noreferrer">Diagonal 50 A No 18- 48 Sur Alcaldia Local de Tunjuelito</a></dd>
                        <dt><span class="glyphicon glyphicon-envelope" aria-hipen="true"></span></dt>
                        <dd><a href="mailto:cltunjuelito@movilidadbogota.gov.co">cltunjuelito@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>7. BOSA</h3>
                </div>
                <div class='panel-body'>
                    <dl>
                        <dt><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span></dt>
                        <dd><a href='https://goo.gl/maps/KSap8XfdLeyauoap9' target='_blank' rel='noopener noreferrer'>Cr 80k No 61 - 28 sur Casa de la Participación</a></dd>
                        <dt><span class='glyphicon glyphicon-envelope' aria-hipen='true'></span></dt>
                        <dd><a href='mailto:clbosa@movilidadbogota.gov.co'>clbosa@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>

            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>8. KENNEDY</h3>
                </div>
                <div class='panel-body'>
                    <dl>
                        <dt><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span></dt>
                        <dd><a href='https://goo.gl/maps/HT37LWhV4aYBpEtWA' target='_blank' rel='noopener noreferrer'>Plaza de las Américas, Cra 71D No. 6-94 Sur</a></dd>
                        <dt><span class='glyphicon glyphicon-envelope' aria-hipen='true'></span></dt>
                        <dd><a href='mailto:clkennedy@movilidadbogota.gov.co'>clkennedy@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>

            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>9. FONTIBON</h3>
                </div>
                <div class='panel-body'>
                    <dl>
                        <dt><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span></dt>
                        <dd><a href='https://goo.gl/maps/gUVz5JCnirME47R47' target='_blank' rel='noopener noreferrer'>Cl 18 No 99 - 38 Punto Vive Digital Piso 2</a></dd>
                        <dt><span class='glyphicon glyphicon-envelope' aria-hipen='true'></span></dt>
                        <dd><a href='mailto:clfontibon@movilidadbogota.gov.co'>clfontibon@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>

            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>10. ENGATIVÁ </h3>
                </div>
                <div class='panel-body'>
                    <dl>
                        <dt><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span></dt>
                        <dd><a href='https://goo.gl/maps/fEozeUVQPsGR3AvZ9' target='_blank' rel='noopener noreferrer'>Cl 71 No 73a - 44 Alcaldia Local Engativa Piso 1</a></dd>
                        <dt><span class='glyphicon glyphicon-envelope' aria-hipen='true'></span></dt>
                        <dd><a href='mailto:clengativa@movilidadbogota.gov.co'>clengativa@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>11. SUBA </h3>
                </div>
                <div class='panel-body'>
                    <dl>
                        <dt><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span></dt>
                        <dd><a href='https://goo.gl/maps/VPRPrS5G57pPEw55A' target='_blank' rel='noopener noreferrer'>carrera 93c # 129c-15</a></dd>
                        <dt><span class='glyphicon glyphicon-envelope' aria-hipen='true'></span></dt>
                        <dd><a href='mailto:clsuba@movilidadbogota.gov.co'>clsuba@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>12. BARRIOS UNIDOS </h3>
                </div>
                <div class='panel-body'>
                    <dl>
                        <dt><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span></dt>
                        <dd><a href='https://goo.gl/maps/szLqfu1hKGWL8M558' target='_blank' rel='noopener noreferrer'>Cl 74a No 63 - 07 Piso 2</a></dd>
                        <dt><span class='glyphicon glyphicon-envelope' aria-hipen='true'></span></dt>
                        <dd><a href='mailto:clbarriosunidos@movilidadbogota.gov.co'>clbarriosunidos@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>

            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>13. TEUSAQUILLO</h3>
                </div>
                <div class='panel-body'>
                    <dl>
                        <dt><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span></dt>
                        <dd><a href='https://goo.gl/maps/Dd7fcatV5Fm9dtR7A' target='_blank' rel='noopener noreferrer'>Travs 18 bis # 38- 41 Alcaldia Local Teusaquillo</a></dd>
                        <dt><span class='glyphicon glyphicon-envelope' aria-hipen='true'></span></dt>
                        <dd><a href='mailto:clteusaquillo@movilidadbogota.gov.co'>clteusaquillo@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>14. LOS MARTIRES</h3>
                </div>
                <div class='panel-body'>
                    <dl>
                        <dt><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span></dt>
                        <dd><a href='https://goo.gl/maps/mXUUdtmMoMZBeH2M7' target='_blank' rel='noopener noreferrer'>Cr 19b N 23 - 90 Junta de Accion Local </a></dd>
                        <dt><span class='glyphicon glyphicon-envelope' aria-hipen='true'></span></dt>
                        <dd><a href='mailto:clmartires@movilidadbogota.gov.co'>clmartires@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>15. ANTONIO NARIÑO</h3>
                </div>
                <div class='panel-body'>
                    <dl>
                        <dt><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span></dt>
                        <dd><a href='https://goo.gl/maps/H2vps9DWTZ1eMSww5' target='_blank' rel='noopener noreferrer'>Cl 17 sur No 18 - 49 Alcaldia Local Antonio Nariño Piso 5</a></dd>
                        <dt><span class='glyphicon glyphicon-envelope' aria-hipen='true'></span></dt>
                        <dd><a href='mailto:clantonionarino@movilidadbogota.gov.co'>clantonionarino@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>16. PUENTE ARANDA </h3>
                </div>
                <div class='panel-body'>
                    <dl>
                        <dt><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span></dt>
                        <dd><a href='https://goo.gl/maps/Wa9fYiKuiUJLdNFL9' target='_blank' rel='noopener noreferrer'>Cl 4 No 31d - 30 Alcaldia Local Puente Aranda </a></dd>
                        <dt><span class='glyphicon glyphicon-envelope' aria-hipen='true'></span></dt>
                        <dd><a href='mailto:clpuentearanda@movilidadbogota.gov.co'>clpuentearanda@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>17. LA CANDELARIA </h3>
                </div>
                <div class='panel-body'>
                    <dl>
                        <dt><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span></dt>
                        <dd><a href='https://goo.gl/maps/bKDbipXnohEqDksR8' target='_blank' rel='noopener noreferrer'>Cr 8 No 6b - 36 Casa Santa Barbara </a></dd>
                        <dt><span class='glyphicon glyphicon-envelope' aria-hipen='true'></span></dt>
                        <dd><a href='mailto:clcandelaria@movilidadbogota.gov.co'>clcandelaria@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>18. RAFAEL URIBE </h3>
                </div>
                <div class='panel-body'>
                    <dl>
                        <dt><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span></dt>
                        <dd><a href='https://goo.gl/maps/r2Fqi6VeUd3oUYDa6' target='_blank' rel='noopener noreferrer'>Cl 32 sur No 23 -62 Alcaldia Local Rafael Uribe Piso 1 </a></dd>
                        <dt><span class='glyphicon glyphicon-envelope' aria-hipen='true'></span></dt>
                        <dd><a href='mailto:clrafaeluribeuribe@movilidadbogota.gov.co'>clrafaeluribeuribe@movilidadbogota.gov.co </a></dd>
                    </dl>
                </div>
            </div>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>19. CIUDAD BOLIVAR </h3>
                </div>
                <div class='panel-body'>
                    <dl>
                        <dt><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span></dt>
                        <dd><a href='https://goo.gl/maps/iRq6fBjh1EfC8jzw7' target='_blank' rel='noopener noreferrer'>Diag 62sur No 20f - 20 Alcaldia Local Ciudad Bolivar Piso 2</a></dd>
                        <dt><span class='glyphicon glyphicon-envelope' aria-hipen='true'></span></dt>
                        <dd><a href='mailto:clciudadbolivar@movilidadbogota.gov.co'>clciudadbolivar@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3 class='panel-title'>20. SUMAPAZ </h3>
                </div>
                <div class='panel-body'>
                    <dl>
                        <dt><span class='glyphicon glyphicon-map-marker' aria-hidden='true'></span></dt>
                        <dd><a href='https://goo.gl/maps/Pv9DvymUq8Dx6f4L6' target='_blank' rel='noopener noreferrer'>Centro de Servicios de Santa Rosa</a></dd>
                        <dt><span class='glyphicon glyphicon-envelope' aria-hipen='true'></span></dt>
                        <dd><a href='mailto:clsumapaz@movilidadbogota.gov.co'>clsumapaz@movilidadbogota.gov.co</a></dd>
                    </dl>
                </div>
            </div>


            <style>
                .box-paneles .panel-body {
                    padding: 8px;
                }

                .box-paneles .panel {
                    margin-bottom: 0px !important;
                }

                .box-paneles .panel-body dl {
                    display: grid;
                    column-gap: 15px;
                    row-gap: 15px;
                    grid-template-columns: max-content auto;
                    margin-bottom: 0px;

                }

                .box-paneles .panel-body dt {
                    grid-column-start: 1;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .box-paneles .panel-body dd {
                    grid-column-start: 2;
                    /* word-break: break-all !important; */
                    display: flex;
                    justify-content: left;
                    align-items: center;

                }

                .box-paneles dd a {
                    color: rgba(25, 25, 25, 1);
                    word-break: break-word !important;
                    /* text-decoration: none; */
                    font-size: 14px;
                    font-weight: 500;
                    text-align: left;
                    line-height: 1.2 !important;
                    color: rgba(25, 25, 25, 1);
                    /* margin: 8px; */
                }

                .box-paneles .glyphicon {
                    color: #A6B517;
                    font-size: 20px;

                }

                .box-paneles .panel-default>.panel-heading {
                    background-image: none;
                    color: #fff;
                    background-color: rgba(77, 84, 31, 1) !important;
                    border-color: #ddd;
                }
            </style>
            <br>
        </div>
        <div class="box-mensaje-2">
            <div class="mensaje2">
                <h3>Horario de atención a la ciudadanía</h3>
                <h4>Primer día de hábil de la semana de 7:00 a.m. - 4:30 p.m.</h4>
                <h4>Jueves de 8:00 a.m. - 4:30 p.m.</h4>
            </div>
        </div>

        <style>
            .box-centrosLocales {
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                /* border-top: solid 1px #e5e5e5; */
                padding-top: 20px;
            }

            .box-centrosLocales img {
                max-width: 200px;
                text-align: center;
                margin: 25px;
                /* padding: 30px; */
            }

            .box-mensaje {
                background-color: #A6B517 !important;
                width: 100%;
                padding: 10px;
                font-size: 28px;
                font-weight: 700;
                text-align: center;
                line-height: 1.5;
                color: rgba(25, 25, 25, 1);
                margin: 8px;
                padding: 15px 30px;
                margin-top: 25px;
            }

            .box-mensaje-2 {
                background-color: #A6B517 !important;
                width: 100%;
                padding: 10px;
                margin-top: 25px;
            }

            .parrafo-mensaje {
                font-size: 16px;
                font-weight: 500;
                text-align: center;
                line-height: 1.5;
                color: rgba(25, 25, 25, 1);
                margin: 8px;
                padding: 15px 30px;
            }


            .mensaje2 h3 {
                font-size: 26px;
                font-weight: 700;
                text-align: center;
                line-height: 1.4;
                color: rgba(25, 25, 25, 1);
                border-bottom: 1px solid #555555;
                margin: 5px;
            }

            .mensaje2 h4 {
                font-size: 18px;
                font-weight: 700;
                text-align: center;
                line-height: 1;
                color: rgba(45, 45, 45, 1);
            }

            .parrafo-mensaje2 {
                font-size: 16px;
                font-weight: 500;
                text-align: center;
                line-height: 1.5;
                color: rgba(25, 25, 25, 1);
                margin: 8px;
                padding: 15px 30px;
            }

            .box-paneles {
                position: relative;
                display: grid;
                gap: 16px;
                grid-auto-flow: dense;
                grid-template-columns: repeat(auto-fill, minmax(min(100%, 227px), 1fr));
                /* grid-template-rows: repeat(3, 1fr); */
                grid-template-rows: auto;

            }

            .box-paneles .panel-body a {
                word-wrap: break-word !important;

            }
        </style>
    </div>
</div>
<!-- End Set Wrapper -->
<br>
<!-- Styles -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .centrosLocales {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.3;
        color: rgba(25, 25, 25, 1);
        margin: 8px;
    }

    /*
    .centrosLocales [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }
    */

    .w-100 {
        width: 100%;
    }
</style>
<!-- End Styles -->