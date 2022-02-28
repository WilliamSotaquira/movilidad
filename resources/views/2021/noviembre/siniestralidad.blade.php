@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class="encabezado">
                <h3>
                    Informes de siniestralidad SITP asociada a exceso de velocidad
                </h3>
            </div>
            <hr>
            <div class="descripcion">
                <p>La Secretaría Distrital de Movilidad pública informe trimestral con información de siniestralidad vial asociado con el SITP y exceso de velocidad, dando cumplimiento al Acuerdo 799 expedido el 5 de febrero de 2021 por el Concejo de Bogotá.</p>
            </div>
            <div class="normativo">
                <p>Lineamientos Siniestralidad Vial <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-11-2021/acuerdo_no._799_de_2021_-_lineamientos_siniestralidad_vial.pdf" target="_blank" rel="noopener noreferrer">Acuerdo No. 799 DE 2021</a></p>
            </div>
            <hr>
        </div>
    </div>
    <div class='row'>
        <div class='col-xs-12'>

            <!-- collapse_i2021 -->
            <div class='panel-group ' id='accordion_i2021' role='tablist ' aria-multiselectable='true'>
                <div class='panel panel-default'>
                    <div class='panel-heading ph1' role='tab' id='heading_i2021'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse_i2021' aria-expanded='true' aria-controls='collapse_i2021'>
                                2021
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_i2021' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_i2021'>
                        <div class='panel-body'>

                            <ul>
                                <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-11-2021/2021-11-04_informe_tecnico_no.1_siniestralidad_sitp_asociada_exceso_velocidad_feb_5_-_jul_31_de_2021.pdf" target="_blank" rel="noopener noreferrer">Informe técnico No.1 Siniestralidad SITP asociada exceso velocidad (Feb 5 - Jul 31 de 2021) (.pdf)</a></li>
                                <br>
                                <li><a href="https://www.movilidadbogota.gov.co/web/sits/default/files/Paginas/22-11-2021/2021-11-18_informe_tecnico_no.2_siniestralidad_sitp_asociada_exceso_velocidad_ago_1_-_oct_31_de_2021.pdf" target="_blank" rel="noopener noreferrer">Informe técnico No.2 Siniestralidad SITP asociada exceso velocidad (Ago 1 - Oct 31 de 2021) (.pdf)</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /#fin _i2021 -->

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

    .seccion .encabezado {
        text-align: center;
    }

    .ph1 {
        background-color: #4D541F !important;

    }

    .ph1 a {
        color: #FFFFFF !important;
        font-size: 1em;
    }

    .ph1 a:hover {
        color: #c9d64f !important;
    }

    .ph2 {
        background-color: #909D2A !important;
    }

    .ph2 a {
        color: #000 !important;
    }

    .ph2 a:hover {
        color: #4D541F !important;
    }

    .ph2 {
        background-color: #A6B517 !important;
    }

    .ph2 a {
        color: #212121 !important;
    }

    .ph2 a:hover {
        color: #4D541F !important;
    }

    .panel-body {
        font-size: calc(1rem + 0.6vw) !important;
        background-color: #F0F2D9 !important;
    }

    .seccion ul li {
        font-size: 0.95em !important;
    }

    .panel-body>ul>li>p {
        font-size: 0.9em;
        font-weight: 700;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->