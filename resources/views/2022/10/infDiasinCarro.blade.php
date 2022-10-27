@extends('welcome')
@section('contenido')

<!-- Set Wrapper -->
<div class='container-fluid informe'>
    <div class='box-wrp'>

        <hr>
        <p>Encuentre aquí los indicadores de operación del transporte público, la siniestralidad vial registrada, las velocidades promedio que se presentaron en los principales corredores viales, el número de comparendos impuestos y la demanda de los cicloparqueaderos.</p>
        <br>

        <!-- collapse_informes -->
        <div class='panel-group' id='accordion_informes' role='tablist ' aria-multiselectable='true'>
            <!-- collapse_2022 -->
            <div class='panel panel-primary'>
                <div class='panel-heading' role='tab' id='heading_2022'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse_2022' aria-expanded='false' aria-controls='collapse_2022'>
                            2022
                        </a>
                    </h4>
                </div>
                <div id='collapse_2022' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_2022' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class'box_2022'>
                            <ul>
                                <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-10-2022/informe_dia_sin_carro.pdf" target="_blank" rel="noopener noreferrer">Informe de seguimiento Día sin carro y sin moto 2022 (.pdf)</a></li>
                                <!-- <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-10-2022/informe_final_dia_sin_carro.docx" target="_blank" rel="noopener noreferrer">Balance positivo de la jornada del Día sin carro y sin Moto en Bogotá 2022 (docx)</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <style>
                    .box_2022 {
                        grid-area: box_2022;
                    }
                </style>
            </div>
            <!-- /#fin _2022 -->
        </div>
        <!-- /#fin _informes -->

    </div>
</div>
<!-- End Set Wrapper -->

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

    .informe {
        max-width: 980px;
        margin: auto;
        word-break: break-all;
        word-wrap: break-word;

    }

    /*
    .informe [class*='col-'] {
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
