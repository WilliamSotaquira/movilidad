@extends('welcome')
@section('contenido')

<!-- Set Wrapper -->
<div class='container-fluid controlSocial'>

    <hr>
    <!-- collapse_controlSocial -->
    <div class='panel-group' id='accordion_controlSocial' role='tablist ' aria-multiselectable='true'>

        <!-- collapse_caracterizacion -->
        <div class='panel panel-default'>
            <div class='panel-heading' role='tab' id='heading_caracterizacion'>
                <h4 class='panel-title'>
                    <a role='button' data-toggle='collapse' data-parent='#accordion_controlSocial' href='#collapse_caracterizacion' aria-expanded='true' aria-controls='collapse_caracterizacion'>
                        1. Caracterización del talento humano de la SDM
                    </a>
                </h4>
            </div>
            <div id='collapse_caracterizacion' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_caracterizacion'>
                <div class='panel-body'>

                </div>
            </div>
        </div>
        <!-- /#fin _caracterizacion -->

        <!-- collapse_bienestarLaboral -->
        <div class='panel panel-default'>
            <div class='panel-heading' role='tab' id='heading_bienestarLaboral'>
                <h4 class='panel-title'>
                    <a role='button' data-toggle='collapse' data-parent='#accordion_controlSocial' href='#collapse_bienestarLaboral' aria-expanded='true' aria-controls='collapse_bienestarLaboral'>
                        2. Asuntos relacionados con el Bienestar Laboral
                    </a>
                </h4>
            </div>
            <div id='collapse_bienestarLaboral' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_bienestarLaboral'>
                <div class='panel-body'>

                </div>
            </div>
        </div>
        <!-- /#fin _bienestarLaboral -->

        <!-- collapse_evaluacionDesempeño -->
        <div class='panel panel-default'>
            <div class='panel-heading' role='tab' id='heading_evaluacionDesempeño'>
                <h4 class='panel-title'>
                    <a role='button' data-toggle='collapse' data-parent='#accordion_controlSocial' href='#collapse_evaluacionDesempeño' aria-expanded='true' aria-controls='collapse_evaluacionDesempeño'>
                        3. Evaluación del desempeño
                    </a>
                </h4>
            </div>
            <div id='collapse_evaluacionDesempeño' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_evaluacionDesempeño'>
                <div class='panel-body'>

                </div>
            </div>
        </div>
        <!-- /#fin _evaluacionDesempeño -->

        <!-- collapse_procesosMeritocraticos -->
        <div class='panel panel-default'>
            <div class='panel-heading' role='tab' id='heading_procesosMeritocraticos'>
                <h4 class='panel-title'>
                    <a role='button' data-toggle='collapse' data-parent='#accordion_controlSocial' href='#collapse_procesosMeritocraticos' aria-expanded='true' aria-controls='collapse_procesosMeritocraticos'>
                        4. Procesos meritocraticos, inducción, reinducción y capacitación
                    </a>
                </h4>
            </div>
            <div id='collapse_procesosMeritocraticos' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_procesosMeritocraticos'>
                <div class='panel-body'>

                </div>
            </div>
        </div>
        <!-- /#fin _procesosMeritocraticos -->

        <!-- collapse_contratistas -->
        <div class='panel panel-default'>
            <div class='panel-heading' role='tab' id='heading_contratistas'>
                <h4 class='panel-title'>
                    <a role='button' data-toggle='collapse' data-parent='#accordion_controlSocial' href='#collapse_contratistas' aria-expanded='true' aria-controls='collapse_contratistas'>
                        5. Contratistas - Prestación de Servicios
                    </a>
                </h4>
            </div>
            <div id='collapse_contratistas' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_contratistas'>
                <div class='panel-body'>

                </div>
            </div>
        </div>
        <!-- /#fin _contratistas -->

    </div>
    <!-- /#fin _controlSocial -->


</div>
<style>
    .controlSocial .panel-default>.panel-heading {
        background-color: rgba(77, 84, 31, 1) !important;
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#2a611f+0,4d541f+30,4d541f+70,2a611f+100 */
        background: rgb(42, 97, 31);
        /* Old browsers */
        background: -moz-linear-gradient(top, rgba(42, 97, 31, 1) 0%, rgba(77, 84, 31, 1) 30%, rgba(77, 84, 31, 1) 70%, rgba(42, 97, 31, 1) 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(top, rgba(42, 97, 31, 1) 0%, rgba(77, 84, 31, 1) 30%, rgba(77, 84, 31, 1) 70%, rgba(42, 97, 31, 1) 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, rgba(42, 97, 31, 1) 0%, rgba(77, 84, 31, 1) 30%, rgba(77, 84, 31, 1) 70%, rgba(42, 97, 31, 1) 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2a611f', endColorstr='#2a611f', GradientType=0);
        /* IE6-9 */
    }

    .controlSocial .panel-default>.panel-heading h4>a {
        /* font-size: 1em; */
        font-weight: 700;
        text-align: left;
        line-height: 1.4;
        color: rgba(255, 255, 255, 1);
        margin: 8px;
    }
</style>

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

    .controlSocial {
        max-width: 980px;
        word-wrap: break-word;

    }

    /*
    .controlSocial [class*='col-'] {
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