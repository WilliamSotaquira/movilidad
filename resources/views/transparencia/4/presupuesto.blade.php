@extends('welcome')
@section('title','presupuesto')
@section('contenido')

<!-- Set presupuesto -->
<div class="set-wrapper presupuesto">

    <div class="cmpnt cmpnt-parrafo-ppal">
        <br>
        <p>A continuación la Secretaría Distrital de Movilidad presenta la información sobre los ingresos, gastos e inversión. Además se podrá visualizar el presupuesto de gastos y las modificaciones presupuestales. </p>
        <br>
    </div>
    <div class="cmpnt cmpnt-acordion">
        <!-- collapse-presupuesto -->
        <div class='panel-group' id='accordion_presupuesto' role='tablist ' aria-multiselectable='true'>

            <!-- collapse ingresos -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading_ingresos'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_presupuesto' href='#collapse_ingresos' aria-expanded='false' aria-controls='collapse_ingresos'>
                            Ingresos
                        </a>
                    </h4>
                </div>
                <div id='collapse_ingresos' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_ingresos' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-ingresos'>
                            <p>El enlace a continuación lo conduce a la página de la Secretaría Distrital de Hacienda, quien reporta el informe de Ejecución del Presupuesto de Rentas e Ingresos, desde la Dirección Distrital de Presupuesto.</p>

                            <p>Allí encontrará en el código O1102 - ingresos No Tributarios, los siguientes conceptos correspondientes a la Secretaría Distrital de Movilidad:</p>

                            <blockquote>

                                <ul class="list-unstyled">
                                    <li>
                                        <p>O11020100599 - Semaforización</p>
                                    </li>
                                    <li>
                                        <p>O110202093 - Derechos de tránsito en áreas restringidas o de alta congestión</p>
                                    </li>
                                    <li>
                                        <p>O110202102 - Derechos de tránsito</p>
                                    </li>
                                    <li>
                                        <p>O110202120 - Contraprestaciones por el uso del espacio público</p>
                                    </li>
                                    <li>
                                        <p>O110202122 - Áreas de restricción vehicular</p>
                                    </li>
                                    <li>
                                        <p>O11020300109 - Multas de tránsito y transporte</p>
                                    </li>
                                </ul>
                            </blockquote>
                            <p><br>
                                <a href="https://www.haciendabogota.gov.co/es/sdh/ejecucion-presupuestal-de-la-secretaria-distrital-de-hacienda" rel="noopener noreferrer" target="_blank">Código O1102 - ingresos No Tributarios</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- collapse gastos -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading_gastos'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_presupuesto' href='#collapse_gastos' aria-expanded='false' aria-controls='collapse_gastos'>
                            Presupuesto de Gastos
                        </a>
                    </h4>
                </div>
                <div id='collapse_gastos' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_gastos' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-gastos'>
                            <p><a href="https://www.movilidadbogota.gov.co/web/presupuesto_de_gastos" rel="noopener noreferrer" target="_blank">Ir a presupuesto de gastos</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- collapse modificaciones -->
            <div class='panel panel-default'>
                <div class='panel-heading' role='tab' id='heading_modificaciones'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion_presupuesto' href='#collapse_modificaciones' aria-expanded='false' aria-controls='collapse_modificaciones'>
                            Modificaciones Presupuestales
                        </a>
                    </h4>
                </div>
                <div id='collapse_modificaciones' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_modificaciones' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='box-modificaciones'>
                            <p><a href="http://www.movilidadbogota.gov.co/web/modificaciones-presupuestales" rel="noopener noreferrer" target="_blank">Ir a modificaciones presupuestales</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#fin -presupuesto -->
    </div>

</div>
<br>
<!-- Fin Set -->
