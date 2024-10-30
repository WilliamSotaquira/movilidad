@extends('welcome')
@section('title','contratos')
@section('contenido')

<!-- Set contratos -->
<div class="set-wrapper contratos">
    <br>
    <div class="cpnt cpnt-1">
        <p class="paragraph ph1">A continuación se relaciona el estado de la ejecución de los contratos de la SDM, con información de la fecha de inicio y finalización, valor del contrato, porcentaje de ejecución, recursos totales desembolsados o pagados, recursos pendientes de ejecutar, cantidad de otrosíes y adiciones realizadas (y sus montos), entre otros.</p>
        <p class="paragraph ph2">Para descargar la información consulte los siguientes documentos.</p>
    </div>
    <br>
    <div class="cpnt cpnt-2">
        <!-- collapse group contratos -->
        <div class='panel-group' id='accordion-contratos' role='tablist ' aria-multiselectable='true'>

            <!-- collapse 2024 -->
            <div class='panel panel-primary'>
                <div class='panel-heading' role='tab' id='heading-2024'>
                    <h4 class='panel-title'>
                        <a data-toggle='collapse' data-parent='#accordion-contratos' href='#collapse-2024' aria-expanded='false' aria-controls='collapse-2024'>
                            2024
                        </a>
                    </h4>
                </div>
                <div id='collapse-2024' class='panel-collapse collapse in' role='tabpanel'>
                    <div class='panel-body'>
                        <div class='body-collapse-2024'>
                            <ul>
                                <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/23-09-2024/publicacion_de_la_ejecucion_de_los_contratos_01_de_ene_2024_a_31_jul_2024.xlsx">Publicación de la ejecución de los contratos 01 de ene 2024 a 31 jul 2024 (.xlsx)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



</div>
<!-- Fin Set -->
