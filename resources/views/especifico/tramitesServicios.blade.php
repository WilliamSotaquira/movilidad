@extends ('welcome')
@section ('contenido')

<style type="text/css">
    .w-100 {
        width: 100%;
    }

    .bs {
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
    }

    .zoom {
        transition: 0.5s ease;
        -moz-transition: 0.5s ease;
        /* Firefox */
        -webkit-transition: 0.5s ease;
        /* Chrome - Safari */
        -o-transition: 0.5s ease;
        /* Opera */
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

    }

    /* IE9 */

    .boton-servicio {
        margin: 0px !important;
    }
</style>
<p><img class="img-responsive img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/headerybotones_mesa_de_trabajo_1.jpg"></p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="font-size:18px;">Hemos dispuesto de este canal para acercar a los Ciudadanos con la entidad. A continuación, encontrará los trámites y/o servicios a su disposición, seleccione el que desea consultar y siga las instrucciones:</span></p>
<p style="text-align: justify;">&nbsp;</p>
<div class="row">
    <div class="col-xs-12 col-sm-4 boton-servicio zoom">
        <div class="thumbnail"><a href="https://www.movilidadbogota.gov.co/web/consulta_de_comparendos" target="_blank"><img alt="Lights" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/headerybotones_boton_copia_2.jpg" style="width:100%"> </a></div>
    </div>
    <div class="col-xs-12 col-sm-4 boton-servicio zoom">
        <div class="thumbnail"><a href="https://www.simbogota.com.co/index.php/homepage/tramites-para-vehiculos-15-2/" target="_blank"><img alt="Nature" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/headerybotones_boton.png" style="width:100%"> </a></div>
    </div>
    <div class="col-xs-12 col-sm-4 boton-servicio zoom">
        <div class="thumbnail"><a href="https://www.movilidadbogota.gov.co/web/inmovilizados" target="_blank"><img alt="Fjords" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/ordendeentrega.png" style="width:100%"> </a></div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-4 boton-servicio zoom">
        <div class="thumbnail"><a href="https://www.movilidadbogota.gov.co/web/sdqs" target="_blank"><img alt="Fjords" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/headerybotones_boton_copia_5.png" style="width:100%"> </a></div>
    </div>
    <div class="col-xs-12 col-sm-4 boton-servicio zoom">
        <div class="thumbnail"><a href="https://www.movilidadbogota.gov.co/web/content/liquidacion_de_servicios_de_parqueadero_y_gruas" target="_blank"><img alt="Lights" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/headerybotones_boton_copia.jpg" style="width:100%"> </a></div>
    </div>
    <div class="col-xs-12 col-sm-4 boton-servicio zoom">
        <div class="thumbnail"><a href="https://registrobicibogota.movilidadbogota.gov.co/#!/" target="_blank"><img alt="Lights" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/headerybotones_boton_copia_6.png" style="width:100%"> </a></div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-4 boton-servicio zoom">
        <div class="thumbnail"><a href="https://www.movilidadbogota.gov.co/web/cicloparqueaderos" target="_blank"><img alt="Fjords" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/headerybotones_boton_copia_9.jpg" style="width:100%"> </a></div>
    </div>
    <div class="col-xs-12 col-sm-4 boton-servicio zoom">
        <div class="thumbnail"><a href="https://www.movilidadbogota.gov.co/web/SIMUR/sigatjs/consultaPlaca/" target="_blank"><img alt="Nature" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-07-2020/headerybotones_boton_copia.png" style="width:100%"> </a></div>
    </div>
    <div class="col-xs-12 col-sm-4 boton-servicio zoom">
        <div class="thumbnail"><a href="https://www.movilidadbogota.gov.co/web/preinscripcion-excepciones" target="_blank"><img alt="Nature" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/headerybotones_boton_copia_7.jpg" style="width:100%"> </a></div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-4 boton-servicio zoom">
        <div class="thumbnail"><a href="https://www.movilidadbogota.gov.co/web/content/plan_marshall" target="_blank"><img alt="Fjords" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-07-2021/headerybotones_boton_-26.jpg" style="width:100%"> </a></div>
    </div>
    <div class="col-xs-12 col-sm-4 boton-servicio zoom">
        <div class="thumbnail"><a href="https://www.movilidadbogota.gov.co/web/ORVI" target="_blank"><img alt="Nature" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-07-2021/headerybotones_boton_-28.jpg" style="width:100%"></a></div>
    </div>
    <div class="col-xs-12 col-sm-4 boton-servicio zoom">
        <div class="thumbnail"><a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepcionesTemporal/radicarSolicitud/" target="_blank"><img alt="Nature" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-07-2021/headerybotones_boton_-30.jpg" style="width:100%"> </a></div>
    </div>
</div>

<div class="row">
    <dov class="col-xs-12 col-sm-4 col-md-offset-4">
        <div class="thumbnail boton-servicio zoom"><a href="https://guiatramitesyservicios.bogota.gov.co/tramite-servicio/entrega-de-licencia-retenidas-por-infraccion-a-las-normas-de-transito-sdm-37108-2/" target="_blank"><img alt="Entrega de licencia de conducción retenida" title="Entrega de licencia de conducción retenida" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2021/headerybotones_boton_-32.jpg" style="width:100%"> </a></div>
    </dov>
</div>
<h3 style="text-align: justify;"><strong><span style="font-size:18px;">Trámites asociados a la Cadena de Urbanismo y Construcción</span></strong></h3>
<p style="text-align: justify;"><span style="font-size:18px;">La ventanilla única de la construcción- VUC es un canal virtual, donde se pueden realizar solicitudes, seguimiento y respuesta de los trámites asociados al proceso de urbanismo y construcción en Bogotá, respondiendo así al modelo Distrital de SuperCADE virtual de trámites y servicios interconectados a través de una sola plataforma.<br>A continuación, haga clic en el trámite y servicio que desea consultar:</span></p>
<div class="row">
    <div class="col-sm-3 boton-servicio zoom">
        <div class="thumbnail"><a href="http://vucapp.habitatbogota.gov.co/vuc/login.seam" target="_blank"><img alt="Nature" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/headerybotones_boton_copia_3_0.jpg" style="width:100%"> </a></div>
    </div>
    <div class="col-sm-3 boton-servicio zoom">
        <div class="thumbnail"><a href="http://vucapp.habitatbogota.gov.co/vuc/login.seam" target="_blank"><img alt="Fjords" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-04-2020/headerybotones_boton_copia_8.png" style="width:100%"> </a></div>
    </div>
    <div class="col-sm-3 boton-servicio zoom">
        <div class="thumbnail"><a href="http://vucapp.habitatbogota.gov.co/vuc/login.seam" target="_blank"><img alt="Nature" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-05-2020/headerybotones_boton_.png" style="width:100%"> </a></div>
    </div>
    <div class="col-sm-3 boton-servicio zoom">
        <div class="thumbnail"><a href="http://vucapp.habitatbogota.gov.co/vuc/login.seam" target="_blank"><img alt="Nature" class="img-respomsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-05-2020/headerybotones_boton-12.png" style="width:100%"> </a></div>
    </div>
</div>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="font-size:18px;">Para mayor información de nuestros horarios y puntos de atención visite&nbsp;</span><a href="https://guiatramitesyservicios.bogota.gov.co/entidad/secretaria_distrital_de_movilidad/">Secretaría Distrital de Movilidad - SDM Archives - Guía de Trámites y Servicios (bogota.gov.co)</a><span style="font-size:18px;">&nbsp;o comuníquese a Línea /span></p>

