@extends('welcome')
@section('contenido')

<hr>
<div class="seccion">


    <div class="row title-agendamiento">
        <h3>AGENDAMIENTO <strong>VIRTUAL</strong></h3>
    </div>
    <div class="row agendamiento-virtual">
        <div class="col-xs-6"><a href="https://www.movilidadbogota.gov.co/web/content/agendamiento_cursos" target="_blank"><img alt="Cursos Pedagógicos" class="btn-agendamiento zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-09-2020/cursos-pedagogicos.png" title="Cursos Pedagógicos"></a></div>
        <div class="col-xs-6"><a href="https://www.movilidadbogota.gov.co/web/content/agendamiento_facilidades_de_pago" target="_blank"><img alt="Acuerdos de pago" class="btn-agendamiento zoom" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/01-09-2020/acuerdos-pago.png" title="Acuerdos de pago"></a></div>
        <!-- <div class="col-xs -6"><img alt="Impugnaciones" class="img-responsive btn-agendamiento" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-10-2021/impug.jpg" title="Impugnaciones"></div> -->
    </div>
    <div class="row footer-agendamiento">
        <p>Agenda tu cita de <strong>impugnación y salida de patios</strong> a través de la <strong>línea 195, opción 4</strong></p>
    </div>

</div>
<style type="text/css">
    #carousel-sdm {
        margin: 20px 0;
        z-index: 0;
    }

    #carousel-sdm .carousel-indicators {
        bottom: -40px;
    }

    #carousel-sdm .carousel-indicators li {
        border: 1px solid #bed000;
    }

    #carousel-sdm .carousel-indicators .active {
        background-color: #4c531e;
    }

    .title-agendamiento {
        background-color: #bfd010;
        text-align: center;
        color: #6e416a;
        font-family: 'Sora', sans-serif;

    }

    .title-agendamiento>h3{
        margin-top: 10px !important;
        margin-bottom: 5px !important;
        font-weight: 600;

    }

    .agendamiento-virtual {
        background-color: #f3f6db;
        border-top: 3px solid #6e416c;
        text-align: center;

    }

    .btn-agendamiento {
        transition: ease all 0.5s;
        transform: scale(0.8);
    }

    .footer-agendamiento {
        background-color: #6e416a;
        text-align: center;
        padding: 8px;
        color: #bfd010;
        font-family: 'Sora', sans-serif;

    }

    .footer-agendamiento p {
        margin: 0px;
    }

    .px-0 {
        padding-left: 0;
        padding-right: 0;
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
        transform: scale(1.008);
        -moz-transform: scale(1.008);
        /* Firefox */
        -webkit-transform: scale(1.008);
        /* Chrome - Safari */
        -o-transform: scale(1.008);
        /* Opera */
        -ms-transform: scale(1.008);
        
    }/* IE9 */
</style>