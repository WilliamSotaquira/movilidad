@extends('welcome')
@section('contenido')

<!-- Styles -->
<style type='text/css'>
    :root {
        --color-primario: #4c531e;
        --color-secundario: #879225;
        --color-terciario: #bed000;
        --color-gris: #e5e5e5;
        --color-blanco: #ffffff;
        --color-negro: #191919;
        --color-fondo: #333333;
    }

    .region-content {
        padding: 0px;
    }

    .box-avisos {
        max-width: 980px;
        word-wrap: break-word;
        margin: auto;

    }

    .w-100 {
        width: 100%;
    }


</style>
<!-- End Styles -->




<!-- Sección Bloque de Mantenimiento  -->
<!-- Primero banner-xs, segundo banner-lg  -->

<div class="box-avisos">
    <hr>
    <div class="row">
        <div class="col-xs-12 visible-xs-12 visible-xs-block">
            <img alt="Aviso Mantenimiento" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-12-2022/banner_600x300_copia-100.jpg" title="Aviso Mantenimiento">
        </div>
        <div class="col-sm-12 hidden-xs">
            <img alt="Aviso Mantenimiento" class="img-responsive bs zoom w-100 img-rounded" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-12-2022/banner_1920x640_copia-100.jpg" title="Aviso Mantenimiento">
        </div>
    </div>
    <hr>
</div>

<!-- Fin Sección Bloque de Mantenimiento  -->
