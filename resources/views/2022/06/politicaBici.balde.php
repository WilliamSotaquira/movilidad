@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='row'>
        <div class='col-xs-12'>

            <!-- collapse -->
            <div class='panel-group ' id='accordion_politicaBici' role='tablist ' aria-multiselectable='true'>

                <!-- collapse_2022 -->
                <!-- <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_2022'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_politicaBici' href='#collapse_2022' aria-expanded='true' aria-controls='collapse_2022'>
                                2022
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_2022' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_2022'>
                        <div class='panel-body'>

                        </div>
                    </div>
                </div> -->
                <!-- /#fin _2022 -->

                <!-- collapse_2021 -->
                <div class='panel panel-default'>
                    <div class='panel-heading' role='tab' id='heading_2021'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_politicaBici' href='#collapse_2021' aria-expanded='true' aria-controls='collapse_2021'>
                                2021
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_2021' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_2021'>
                        <div class='panel-body'>
                            <ul>
                                <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-06-2022/segundo_informe_de_seguimiento_de_implementacion_de_la_politica_publica_de_la_bicicleta_para_el_periodo_comprendido_entre_el_1_de_junio_y_el_31_de_diciembre_de_2021_1.pdf" target="_blank" rel="noopener noreferrer">Segundo informe de seguimiento de implementación de la Política Pública de la Bicicleta para el periodo comprendido entre el 1 de junio y el 31 de diciembre de 2021</a></li>
                                <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/17-06-2022/primer_informe_de_seguimiento_de_implementacion_de_la_politica_publica_de_la_bicicleta_para_el_periodo_comprendido_entre_el_1_de_marzo_y_el_31_de_junio_de_2021_1_1.pdf" target="_blank" rel="noopener noreferrer">Primer informe de seguimiento de implementación de la Política Pública de la Bicicleta para el periodo comprendido entre el 1 de marzo y el 31 de junio de 2021</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /#fin _2021 -->

            </div>
            <!-- /#fin  -->


        </div>
    </div>
</div>


<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type='text/css'>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .seccion {
        font-size: 16px !important;
        line-height: 1 !important;
        max-width: 980px;
        margin: auto;
    }

    .seccion [class*='col-'] {
        margin: 0px;
        padding: 0px;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
    }

    .w-100 {
        width: 100%;
    }

    .accordion_politicaBici ul>li {
        padding: 5px;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->