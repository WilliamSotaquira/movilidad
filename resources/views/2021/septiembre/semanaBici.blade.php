@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
                                                          Bloque Seccion
----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='seccion'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='row'>
                <!-- xs -->
                <div class='col-xs-12 visible-xs-12 visible-xs-block'>
                    <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2021/banner_semana_de_la_bici_900_x_300_v1.jpg' alt='Semana de la Bici, Bogotá - Región' title='Semana de la Bici, Bogotá - Región'>
                </div>
                <!-- lg -->
                <div class='col-sm-12 hidden-xs'>
                    <img class='img-responsive w-100 ' src='https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2021/banner_semana_de_la_bici_1920_x_480_v2.jpg' alt='Semana de la Bici, Bogotá - Región' title='Semana de la Bici, Bogotá - Región'>
                </div>
            </div>
        </div>
    </div>
    <div class='row row-botones'>
        <div class='col-xs-12 col-sm-4'>
            <div class="boton-sb zoom">
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2021/vesion21_sep_agenda_general_opt.pdf" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2021/btn_1_semana_de_la_bici_600_x_300.png" alt="enlace a agenda genera" title="Agenda General" class="img responsive w-100">
                </a>
            </div>
        </div>
        <div class='col-xs-12 col-sm-4'>
            <div class="boton-sb zoom">
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2021/version21_sep_agenda_webinars_opt.pdf" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2021/btn_2_semana_de_la_bici_600_x_300.png" alt="enlace a Webinars" title="Webinars" class="img responsive w-100">
                </a>
            </div>
        </div>
        <div class='col-xs-12 col-sm-4'>
            <div class="boton-sb zoom">
                <a href="http://www.desarrolloeconomico.gov.co/sites/default/files/congreso-bici/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-09-2021/btn_3_semana_de_la_bici_600_x_300.png" alt="enlace a Rueda de Negocios Bici" title="Rueda de Negocios Bici" class="img responsive w-100">
                </a>
            </div>
        </div>

    </div>
</div>

<!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
                                                        Fin Bloque Sección 
----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->


<!-- ----- ----- ----- ----- ----- ----- ----- ----- Hoja de estilo --- ----- ----- ----- ----- ----- ----- ----- ----- -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .seccion {
        font-size: 14px;
    }

    .w-100 {
        width: 100%;
    }

    .row-botones {
        margin: 15px !important;
        padding-top: 20px;
        padding-bottom: 20px;

    }

    .boton-sb {
        margin: 20px;
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
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- ----- Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- -->