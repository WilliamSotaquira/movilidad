@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='sf2'>

    <div class="footer-bg1">
        <div class="container" id="footer" style="padding:0px;">
            <div class="container arriba">
                <div class="col-md-3 footer_siganos">
                    <div class="footer-h3">SÍGANOS<div class="footer-hr">&nbsp;</div>
                    </div>
                    <center>
                        <div class="footer-h5">Síguenos en nuestras Redes Sociales</div>
                        <div class="redes">
                            <div class="row">
                                <div class="col-xs-3">
                                    <a href="https://www.facebook.com/secretariamovilidadbogota"><img alt="facebook" class="footer-facebook footer-redes-ico-sp footer-redes-ico" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-10-2021/botones_redes_sociales_-_pie_de_pagina_entidad_fb.png"></a>
                                </div>
                                <div class="col-xs-3">
                                    <a href="https://twitter.com/SectorMovilidad"><img alt="twitter" class="footer-twiter footer-redes-ico-sp footer-redes-ico" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-10-2021/botones_redes_sociales_-_pie_de_pagina_entidad_tw.png"></a>
                                </div>
                                <div class="col-xs-3">
                                    <a href="https://www.youtube.com/user/secretariamovilidad?feature=guide"><img alt="youtube" class="footer-youtube footer-redes-ico-sp footer-redes-ico" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-10-2021/botones_redes_sociales_-_pie_de_pagina_entidad_you.png"></a>
                                </div>
                                <div class="col-xs-3">
                                    <a href="https://www.instagram.com/sectormovilidad/"><img alt="instagram" class="footer-instagram footer-redes-ico" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-10-2021/botones_redes_sociales_-_pie_de_pagina_entidad_inst.png"></a>
                                </div>
                            </div>
                        </div>
                    </center>
                    <style>
                        .footer-redes-ico {
                            width: none;
                            height: none;
                            padding: 0px;
                        }

                        .sf2 {
                            background-color: #4c531e;
                            word-wrap: break-word;
                        }
                    </style>
                </div>
                <div class="col-md-3">
                    <div class="footer-h3">INFORMACIÓN SDM<div class="footer-hr">&nbsp;</div>
                    </div>
                    <div class="footer-h5"><a class="nw-link" href="http://www.movilidadbogota.gov.co/web/mision" rel="noopener noreferrer" target="_blank">Acerca de nosotros</a></div>
                    <div class="footer-h5"><a class="nw-link" href="https://www.movilidadbogota.gov.co/web/POLITICAS_DE_SEGURIDAD_Y_PROTECCION_DE_DATOS_PERSONALES" rel="noopener noreferrer" target="_blank">Política de privacidad</a></div>
                    <div class="footer-h5"><a class="nw-link" href="https://www.movilidadbogota.gov.co/web/mapa_de_sitio" rel="noopener noreferrer" target="_blank">Mapa del sitio</a></div>
                    <div class="footer-h5"><a class="nw-link" href="https://www.movilidadbogota.gov.co/web/content/nuestra_entidad" rel="noopener noreferrer" target="_blank">Aplicativos de la SDM</a></div>
                    <style type="text/css">
                        .nw-link {
                            text-decoration: none;
                            color: rgb(26, 26, 26);

                        }
                    </style>
                </div>
                <div class="col-md-3 contacto">
                    <div class="footer-h3">SERVICIOS<div class="footer-hr">&nbsp;</div>
                    </div>
                    <div class="footer-h5"><a class="nw-link" href="https://www.movilidadbogota.gov.co/web/tramites_y_servicios_virtuales" rel="noopener noreferrer" target="_blank">Trámites y Servicios Virtuales</a></div>
                    <div class="footer-h5"><a class="nw-link" href="https://www.movilidadbogota.gov.co/web/sdqs" rel="noopener noreferrer" target="_blank">PQRSD</a></div>
                    <div class="footer-h5"><a class="nw-link" href="https://www.movilidadbogota.gov.co/web/consulta_de_comparendos" rel="noopener noreferrer" target="_blank">Consulta de Comparendos</a></div>
                    <div class="footer-h5"><a class="nw-link" href="https://www.movilidadbogota.gov.co/web/content/liquidacion_de_servicios_de_parqueadero_y_gruas" rel="noopener noreferrer" target="_blank">Pago Seguro</a></div>
                </div>
                <div class="col-md-3">
                    <div class="footer-h3">TABLERO<div class="footer-hr">&nbsp;</div>
                    </div>
                    <div class="footer-h5">&nbsp;</div>
                    <div class="footer-h5" align="center">
                        <p>&nbsp;</p><a class="hvr-float" href="http://tablerocontrolciudadano.veeduriadistrital.gov.co:3838/TCC/"><img alt="" class="img-rounded img-responsive" src="/web/sites/default/files/Paginas/09-08-2019/boton-tablero-de-control.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bg2">
        <div class="container" id="footer" style="padding:0px;">
            <div class="container medio">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12 text-center footer-sec-1 contacto">
                        <style type="text/css">
                            .footer-h4 {
                                margin-bottom: 10px;
                            }

                            .footer-h7 {
                                margin-bottom: 5px;
                            }

                            .contacto a {
                                overflow: hidden;
                                text-overflow: clip;
                                flex-shrink: 0;
                            }
                        </style>
                        <div class="footer-h4 text-left">Secretaría Distrital de Movilidad</div>
                        <div class="footer-h7 text-left"><strong>NIT</strong> 899.999.061-9</div><!-- <div class="footer-h6 text-left"> Horario de Atención al Público</div>-->
                        <!-- <div class="footer-h7 text-left"> Lunes a viernes de 7:00am a 4:30pm </div>-->
                        <div class="footer-h7 text-left"><strong>Correo Institucional: <kbd><a href="https://www.movilidadbogota.gov.co/web/govi-sdqs/crear" style="color:#fff !important;">Bogotá te escucha</a></kbd></strong></div>
                        <div class="footer-h7 text-left"><strong>Radicación documentos</strong> <strong><a href="https://www.movilidadbogota.gov.co/web/content/contacto_ciudadano" style="color:#fff !important;">contactociudadano@movilidadbogota.gov.co</a></strong></div>
                        <div class="footer-h7 text-left"><strong>E-mail exclusivo para notificaciones judiciales</strong><strong><a href="mailto:judicial@movilidadbogota.gov.co" style="color:#fff !important;">judicial@movilidadbogota.gov.co</a></strong></div>
                        <div class="footer-h7 text-left"><strong>Centro de Contacto de Movilidad:</strong> (601) 364 - 9400 opción 2</div>
                    </div>
                    <div class="col-md-4  col-sm-12 col-xs-12 ">
                        <div class="text-center footer_direccion footer-h2">
                            <div class="row">
                                <div class="col-xs-12">
                                    <img class="footer-tel img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-02-2020/linea-195_0.png">
                                </div>
                                <div class="col-xs-12">
                                    <a href="http://www.bogota.gov.co/sdqs">
                                        <img class="footer-tel img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-02-2020/buzon-sugerencias.png">
                                    </a>
                                </div>
                                <div class="col-xs-12">
                                    <a href="https://supercade.bogota.gov.co/">
                                        <img class="footer-tel img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-08-2020/boton_supercade_virtual_3.png">
                                    </a>
                                </div>
                                <div class="col-xs-12">
                                    <img class="footer-tel img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/10-02-2020/ubicacion-texto.png">
                                </div>
                            </div>
                            <style>
                                .footer-tel {
                                    height: 30px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box-co">
                <div class="ico-co">
                    <a href="https://www.gov.co/" target="blank">
                        <img class="img-responsive img-footer-2" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-05-2021/co-colombia.png" height="65">
                    </a>
                </div>
                <div class="ico-co">
                    <a href="https://www.gov.co/" target="blank">
                        <img class="img-responsive img-footer-2" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-05-2021/geadergov.png">
                    </a>
                </div>
            </div>
            <style>
                .box-co {
                    display: flex;
                    justify-content: space-evenly;
                    padding: 1vw;
                }
            </style>

        </div>
        <style>
            .img-footer-2 {
                max-height: 40px;
                text-align: center;
            }
        </style>
    </div>
    <div class="footer-bg3 text-center footer-copy">© 2017 Secretaría de Movilidad. Todos los Derechos Reservados.</div>

</div>
<style>
    :focus-visible {
        outline: 4px dotted #66e026 !important;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->



<!-- Sección Banner de Mantenimiento  -->
<!-- <hr> -->
<!-- <div class="row">
      <div class="col-xs-12 visible-xs-12 visible-xs-block">
          <img alt="Ventana de Mantenimiento Tecnológico desde el Sabado 16 de octubre hasta el domingo 17" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-10-2021/piezas_apagado_de_computadores_apagado_de_computadores_-_banner_900_x_450.jpg" title="Ventana de Mantenimiento Tecnológico desde el Sabado 16 de octubre hasta el domingo 17">
      </div>
      <div class="col-sm-12 hidden-xs">
          <img alt="Ventana de Mantenimiento Tecnológico desde el Sabado 16 de octubre hasta el domingo 17" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-10-2021/piezas_apagado_de_computadores_apagado_de_computadores_-_banner_1920_x_640.jpg" title="Ventana de Mantenimiento Tecnológico desde el Sabado 16 de octubre hasta el domingo 17">
      </div>
  </div> -->
<!-- Fin Sección Banner de Mantenimiento  -->
<hr>
<div class="row">
    <div class="col-xs-12 visible-xs-12 visible-xs-block"><a href="https://observatorio.movilidadbogota.gov.co/infraestructura" rel="noopener noreferrer" target="_blank"><img alt="Aquí puede acceder a Bogotá está mejorando con arreglo de calles y vías" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-01-2022/banners_bem_900x450.jpg" title="Aquí puede acceder a Bogotá está mejorando con arreglo de calles y vías"></a></div>

    <div class="col-sm-12 hidden-xs"><a href="https://observatorio.movilidadbogota.gov.co/infraestructura" rel="noopener noreferrer" target="_blank"><img alt="Aquí puede acceder a Bogotá está mejorando con arreglo de calles y vías" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-01-2022/banners_bem_1920x320.jpg" title="Aquí puede acceder a Bogotá está mejorando con arreglo de calles y vías"></a></div>
</div>

<div class="row">
    <div class="col-xs-12 visible-xs-12 visible-xs-block"><a href="https://picoyplacasolidario.movilidadbogota.gov.co/PortalCiudadano/#/" rel="noopener noreferrer" target="_blank"><img alt="Aquí puede acceder a Pico y Placa Solidario" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-picoyplacasolidario_1.png" title="Aquí puede acceder a Pico y Placa Solidario"></a></div>

    <div class="col-sm-12 hidden-xs"><a href="https://picoyplacasolidario.movilidadbogota.gov.co/PortalCiudadano/#/" rel="noopener noreferrer" target="_blank"><img alt="Aquí puede acceder a Pico y Placa Solidario" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-09-2021/banner_1920x320_b.jpg" title="Aquí puede acceder a Pico y Placa Solidario"></a></div>
</div>

<div class="row">
    <div class="col-xs-12 visible-xs-12 visible-xs-block"><a href="https://www.movilidadbogota.gov.co/web/registro_restriccion_vehicular" rel="noopener noreferrer" target="_blank"><img alt="Aquí puede acceder al Registro de Exceptuados - Vehículo Compartido" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-01-2022/banner-carro_compartido_900x300.png" title="Aquí puede acceder al Registro de Exceptuados - Vehículo Compartido"></a></div>

    <div class="col-sm-12 hidden-xs"><a href="https://www.movilidadbogota.gov.co/web/registro_restriccion_vehicular" rel="noopener noreferrer" target="_blank"><img alt="Aquí puede acceder al Registro de Exceptuados - Vehículo Compartido" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-01-2022/banner-carro_compartido_1920x320.png" title="Aquí puede acceder al Registro de Exceptuados - Vehículo Compartido"></a></div>
</div>

<div class="row">
    <div class="col-xs-12 visible-xs-12 visible-xs-block"><a href="https://www.movilidadbogota.gov.co/web/pico_y_placa_2022" rel="noopener noreferrer" target="_blank"><img alt="Aquí puede acceder al Abecé del Pico Y Placa 2022 en Bogotá" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-01-2022/banner-pico-placa-2022_900x450.png" title="Aquí puede acceder al Abecé del Pico Y Placa 2022 en Bogotá"></a></div>

    <div class="col-sm-12 hidden-xs"><a href="https://www.movilidadbogota.gov.co/web/pico_y_placa_2022" rel="noopener noreferrer" target="_blank"><img alt="Aquí puede acceder al Abecé del Pico Y Placa 2022 en Bogotá" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-01-2022/banner-pico-placa-2022_1920x320.png" title="Aquí puede acceder al Abecé del Pico Y Placa 2022 en Bogotá"></a></div>
</div>

<hr>
<div class="row">
    <div class="col-sm-6"><a href="https://www.movilidadbogota.gov.co/web/consulta_de_comparendos" rel="noopener noreferrer" target="_blank"><img alt="Consulta de Comparendos" class="bs focusable img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2021/consulta_comparendos_xs_0.png" title="Consulta de Comparendos"></a></div>

    <div class="col-sm-6"><a href="http://zonadeparqueopago.gov.co/" rel="noopener noreferrer" target="_blank"><img alt="Zona de Parqueo Pago" class="bs focusable img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-11-2021/banner_zonas_parqueo_900x300.png" title="Zona de Parqueo Pago"></a></div>
</div>

<div class="row">
    <div class="col-sm-6"><a href="https://salidadepatios.movilidadbogota.gov.co/" rel="noopener noreferrer" target="_blank"><img alt="Realiza de forma virtual el trámite para la salida de patios" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-salidapatios_1_0.png"></a></div>

    <div class="col-sm-6"><a href="https://www.movilidadbogota.gov.co/web/nueva-concesion-tramites-servicios-movilidad" rel="noopener noreferrer" target="_blank"><img alt="Concesión de Tramites y Servicios de Movilidad focusable" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2021/concesion_tramites_xs_0.png" title="Concesión de Tramites y Servicios de Movilidad"></a></div>
</div>

<div class="row">
    <div class="col-sm-6"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-10-2020/manual_del_buen_ciclista.pdf" rel="noopener noreferrer" target="_blank"><img alt="Consulta aquí el manual del buen ciclista - tercera edición 2020" class="bs center-block img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-manualciclista_1_0.png" title="Consulta aquí el manual del buen ciclista - tercera edición 2020"> </a></div>

    <div class="col-sm-6"><a href="https://www.movilidadbogota.gov.co/web/mapa_de_ciclorrutas_de_bogota" rel="noopener noreferrer" target="_blank"><img alt="Mapa de Ciclorrutas de Bogotá" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-12-2021/2021-12-02_banner-mapa-ciclorrutas_900x300.png" title="Mapa de Ciclorrutas de Bogotá"> </a></div>
</div>

<hr>
<div class="row">
    <div class="col-xs-12 visible-xs-12 visible-xs-block"><a href="https://www.movilidadbogota.gov.co/web/integridad_antisoborno_y_anticorrupcion" rel="noopener noreferrer" target="_blank"><img alt="Portal Transparencia, Antisoborno y Anticorrupción" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-08-2021/banner_t-a-a_anticorrupcion_900.jpg" title="Portal Transparencia, Antisoborno y Anticorrupción"></a></div>

    <div class="col-sm-12 hidden-xs"><a href="https://www.movilidadbogota.gov.co/web/integridad_antisoborno_y_anticorrupcion" rel="noopener noreferrer" target="_blank"><img alt="Portal Transparencia, Antisoborno y Anticorrupción" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-10-2021/banner_antisoborno_micrositio-02_1.jpg" title="Portal Transparencia, Antisoborno y Anticorrupción"></a></div>
</div>

<div class="row">
    <div class="col-xs-12 visible-xs-12 visible-xs-block">&nbsp;</div>

    <div class="col-sm-12 hidden-xs">&nbsp;</div>
</div>

<hr><!-- Sección de imágenes en contenedor slider para dispositivos panorámicos-->
<div class="row">
    <!--carrusel largo -->
    <div class="col-sm-12 hidden-xs">
        <div class="carousel slide" id="carousel_banner_lg">
            <ol>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
            </ol>

            <div class="carousel-inner">
                <div class="active item"><a href="http://www.sdp.gov.co/gestion-socioeconomica/conpes-dc/documentos-conpes-dc/conpes-dc-aprobados" rel="noopener noreferrer" target="_blank"><img alt="Política publica de la bicicleta" class="img-responsive img-rounded w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-politicapublicabicicleta_1.png" title="Política publica de la bicicleta"></a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/conozca_las_medidas_para_mejorar_el_transito_de_vehiculos_en_la_calle_13_avenida_centenario" rel="noopener noreferrer" target="_blank"><img alt="Conozca las medidas para mejorar el tránsito de vehículos en la Calle 13 (Avenida Centenario)" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-movilidadcalle13_1.png" title="Conozca las medidas para mejorar el tránsito de vehículos en la Calle 13 (Avenida Centenario)"></a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/encuesta_de_movilidad_2019" rel="noopener noreferrer" target="_blank"><img alt="Encuentra aquí los datos más relevantes para la movilidad en Bogotá" class="img-responsive img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-movilidaddatos_1.png" title="Encuentra aquí los datos más relevantes para la movilidad en Bogotá:"> </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/plan-desarrollo-economico-social-ambiental-2020-2024" rel="noopener noreferrer" target="_blank"><img alt="Plan de Desarrollo Económico, Social, Ambiental y de Obras Públicas del Distrito Capital  2020 - 2024" class="img-responsive img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-nuevocontratosocialambienta_1.png" title="Plan de Desarrollo Económico, Social, Ambiental y de Obras Públicas del Distrito Capital  2020 - 2024"> </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/muevete-en-bici-por-bogota" rel="noopener noreferrer" target="_blank"><img alt="Muévete en Bici por Bogotá" class="img-responsive img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-06-2021/np-mueveteenbici_1.png" title="Muévete en Bici por Bogotá"> </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/cicloparqueaderos" rel="noopener noreferrer" target="_blank"><img alt="Mas y mejores cicloparqueaderos" class="img-responsive img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-06-2021/np-cicloparqueaderos_1.png" title="Mas y mejores cicloparqueaderos"></a></div>
                <!-- <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/reconocimiento-excelencia-logistica-2021"><img alt="Reconocimiento Excelencia Logística 2021" class="img-rounded w-100 img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-excelenciallogistica_1.png" title="Reconocimiento Excelencia Logística 2021"></a></div> -->
            </div>
        </div>
    </div>
    <!-- fin carrusel largo -->
    <!-- carrusel en contenedor slider para dispositivos móviles -->

    <div class="col-xs-12 visible-xs-12 visible-xs-block">
        <div class="carousel slide" id="carousel-sdm-xs">
            <ol>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
            </ol>

            <div class="carousel-inner">
                <div class="active item"><a href="http://www.sdp.gov.co/gestion-socioeconomica/conpes-dc/documentos-conpes-dc/conpes-dc-aprobados" rel="noopener noreferrer" target="_blank"><img alt="Política publica de la bicicleta" class="img-responsive img-rounded w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-politicapublicabicicleta_2.png" title="Política publica de la bicicleta"></a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/conozca_las_medidas_para_mejorar_el_transito_de_vehiculos_en_la_calle_13_avenida_centenario" rel="noopener noreferrer" target="_blank"><img alt="Conozca las medidas para mejorar el tránsito de vehículos en la Calle 13 (Avenida Centenario)" class="bs img-responsive img-rounded w-100 zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-movilidadcalle13_2.png" title="Conozca las medidas para mejorar el tránsito de vehículos en la Calle 13 (Avenida Centenario)"></a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/encuesta_de_movilidad_2019" rel="noopener noreferrer" target="_blank"><img alt="Encuentra aquí los datos más relevantes para la movilidad en Bogotá" class="img-responsive img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-movilidaddatos_2.png" title="Encuentra aquí los datos más relevantes para la movilidad en Bogotá:"></a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/plan-desarrollo-economico-social-ambiental-2020-2024" rel="noopener noreferrer" target="_blank"><img alt="Plan de Desarrollo Económico, Social, Ambiental y de Obras Públicas del Distrito Capital  2020 - 2024" class="img-responsive img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-nuevocontratosocialambienta_2.png" title="Plan de Desarrollo Económico, Social, Ambiental y de Obras Públicas del Distrito Capital  2020 - 2024"> </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/muevete-en-bici-por-bogota" rel="noopener noreferrer" target="_blank"><img alt="Muévete en Bici por Bogotá" class="img-responsive img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-06-2021/np-mueveteenbici_2.png" title="Muévete en Bici por Bogotá"> </a></div>

                <div class="item"><a href="https://www.movilidadbogota.gov.co/web/cicloparqueaderos" rel="noopener noreferrer" target="_blank"><img alt="Mas y mejores cicloparqueaderos" class="img-responsive img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-06-2021/np-cicloparqueaderos_2.png" title="Mas y mejores cicloparqueaderos"></a></div>
                <!-- <div class="item"><a target="_blank" rel="noopener noreferrer" href="https://www.movilidadbogota.gov.co/web/reconocimiento-excelencia-logistica-2021"><img alt="Política publica de la bicicleta" class="img-rounded w-100 img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-06-2021/np-excelenciallogistica_2.png" title="Reconocimiento Excelencia Logística 2021"></a></div> -->
            </div>
        </div>
    </div>
    <!-- fin carrusel corto -->
</div>
<!--Fin Sección de imágenes en contenedor slider-->

