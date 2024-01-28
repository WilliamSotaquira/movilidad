@extends('welcome')
@section('contenido')

<!-- tramitesServicios -->
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

    .field-item.even h2 {
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

    .tramitesServicios {
        max-width: 980px;
        margin: auto;
        padding-bottom: 20px;
        word-break: break-word;
        word-wrap: break-word;
    }
</style>
<!-- End Styles -->

<!-- Set Wrapper -->
<div class='container-fluid tramitesServicios'>
    <div class='set-wrapper'>


        <!-- Sección box head -->
        <div class="box-head">
            <div class="title title-h2">
                <h2>Trámites, Servicios y PQRSD</h2>
            </div>
        </div>
        <style>
            .set-wrapper .box-head {
                grid-area: box-head;
                padding: 16px 16px 16px 16px;
                border-bottom: solid 1px var(--color-gris);
            }

            .box-head .title-h2 h2 {
                /* font-size: 15px; */
                font-weight: 600;
                text-align: center;
                line-height: 1.3;
                color: var(--color-primario);
            }
        </style>


        <!-- Sección box cards -->
        <div class="box-cards">

        </div>
        <style>
            .set-wrapper .box-cards {
                grid-area: box-cards;
            }
        </style>



    </div>
</div>
<br>
<!-- End Set Wrapper -->
<!-- End tramitesServicios  -->
