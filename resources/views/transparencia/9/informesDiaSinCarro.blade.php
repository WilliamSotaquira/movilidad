@extends('welcome')
@section('title','informesDiaSinCarro')
@section('contenido')

<!-- Set informesDiaSinCarro -->
<div class="set-wrapper informesDiaSinCarro">
    <hr>
    <p>Encuentre aquí los indicadores de operación del transporte público, la siniestralidad vial registrada, las velocidades promedio que se presentaron en los principales corredores viales, el número de comparendos impuestos y la demanda de los cicloparqueaderos.</p>

    <p><br>
        <!-- collapse_informes --></p>

    <div aria-multiselectable="true" class="panel-group" id="accordion_informes" role="tablist ">
        <!-- collapse_2022 --><!-- collapse 2023 -->

        <!-- collapse 2024 -->
        <div class='panel panel-primary'>
            <div class='panel-heading' role='tab' id='heading_2024'>
                <h4 class='panel-title'>
                    <a role='button' data-toggle='collapse' data-parent='#accordion_informes' href='#collapse_2024' aria-expanded='false' aria-controls='collapse_2024'>
                        2024
                    </a>
                </h4>
            </div>
            <div id='collapse_2024' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading_2024' aria-expanded='false'>
                <div class='panel-body'>
                    <div class='box-2024'>
                        <ul>
                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-03-2024/informe_dia_sin_carro_2024_v5.pdf" rel="noopener noreferrer" target="_blank">Informe de seguimiento Día sin carro y sin moto - Febrero 2024 (.pdf)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading" id="heading_2023" role="tab">
                <h4 class="panel-title"><a aria-controls="collapse_2023" aria-expanded="false" data-parent="#accordion_informes" data-toggle="collapse" href="#collapse_2023" role="button">2023 </a></h4>
            </div>

            <div aria-expanded="false" aria-labelledby="heading_2023" class="panel-collapse collapse" id="collapse_2023" role="tabpanel">
                <div class="panel-body">
                    <div class="box-2023">
                        <div>
                            <ul>
                                <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2023/informe_dia_sin_carro_v_2.pdf" rel="noopener noreferrer" target="_blank">Informe de seguimiento Día sin carro y sin moto - Septiembre 2023 (.pdf)</a></li>
                                <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/06-03-2023/informe_dia_sin_carro_20230306.pdf" rel="noopener noreferrer" target="_blank">Informe de seguimiento Día sin carro y sin moto - Febrero 2023 (.pdf)</a></li>
                                <!-- <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-10-2022/informe_final_dia_sin_carro.docx" target="_blank" rel="noopener noreferrer">Balance positivo de la jornada del Día sin carro y sin Moto en Bogotá 2022 (docx)</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <style type="text/css">
                .box-2023 {
                    grid-area: 2023;
                }
            </style>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading" id="heading_2022" role="tab">
                <h4 class="panel-title"><a aria-controls="collapse_2022" aria-expanded="false" data-parent="#accordion_informes" data-toggle="collapse" href="#collapse_2022" role="button">2022 </a></h4>
            </div>

            <div aria-expanded="false" aria-labelledby="heading_2022" class="panel-collapse collapse" id="collapse_2022" role="tabpanel">
                <div class="panel-body">
                    <div>
                        <ul>
                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2022/informe_dia_sin_carro.pdf" rel="noopener noreferrer" target="_blank">Informe de seguimiento Día sin carro y sin moto 2022 (.pdf)</a></li>
                            <!-- <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/22-10-2022/informe_final_dia_sin_carro.docx" target="_blank" rel="noopener noreferrer">Balance positivo de la jornada del Día sin carro y sin Moto en Bogotá 2022 (docx)</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <style type="text/css">
                .box_2022 {
                    grid-area: box_2022;
                }
            </style>
        </div>
        <!-- /#fin _2022 -->
    </div>
    <!-- /#fin _informes -->
</div>
<!-- Fin Set -->
