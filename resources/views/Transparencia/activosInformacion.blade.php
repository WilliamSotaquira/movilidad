@extends('welcome')
@section('title','activosInformacion')
@section('contenido')

<!-- Set activosInformacion -->
<div class="set-wrapper activosInformacion">

    <br>
    <p>Es la relación de todas las categorías de información que la Secretaría Distrital de Movilidad tiene en posesión, custodia o bajo control, independientemente del formato físico o electrónico. Es útil para identificar la información que posee la entidad y en dónde se puede consultar.</p>
    <br>
    <!-- collapse_activosInformacion -->
    <div class='panel-group' id='accordion_activosInformacion' role='tablist ' aria-multiselectable='true'>

        <!-- collapse otic -->
        <div class='panel panel-primary'>
            <div class='panel-heading' role='tab' id='heading_otic'>
                <h4 class='panel-title'>
                    <a role='button' data-toggle='collapse' data-parent='#accordion_activosInformacion' href='#collapse_otic' aria-expanded='false' aria-controls='collapse_otic'>
                        Oficina de Tecnologías de la Información y las Comunicaciones (OTIC)
                    </a>
                </h4>
            </div>
            <div id='collapse_otic' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_otic' aria-expanded='false'>
                <div class='panel-body'>
                    <div class='box-otic'>
                        <ul>
                            <li>
                                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-12-2022/activos_informacion_sdm_2022_2.xlsx">Inventario de activos de información  | 30 de diciembre de 2022</a> (Excel descargable)
                            </li>
                            <li>
                                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-12-2021/pa04-in03-instructivo-para-la-identificacion-valoracion-y-clasificacion-de-informacion-v2.0-del-03-12-2021_1.pdf">PA04-IN03 v2 - Instructivo para la identificación, valoración y clasificación de activos de información | 03 de diciembre de 2021</a> (PDF descargable)
                            </li>
                            <li>
                                <a href="https://datosabiertos.bogota.gov.co/dataset/activos-de-informacion-secretaria-de-movilidad">Activos de Información hardware y software de la Secretaría Distrital de Movilidad de Bogotá D.C.</a> (Página de Datos Abiertos)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- collapse documental -->
        <div class='panel panel-primary'>
            <div class='panel-heading' role='tab' id='heading_documental'>
                <h4 class='panel-title'>
                    <a role='button' data-toggle='collapse' data-parent='#accordion_activosInformacion' href='#collapse_documental' aria-expanded='false' aria-controls='collapse_documental'>
                        Gestión Documental
                    </a>
                </h4>
            </div>
            <div id='collapse_documental' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_documental' aria-expanded='false'>
                <div class='panel-body'>
                    <div class='box-documental'>
<ul>
    <li>
        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/24-07-2023/registro_de_activos_informacion_0.xlsx">PA04-IN03-F01 Formato inventario de activos de información | abril 2023 </a> (Excel descargable)
    </li>
</ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /#fin _activosInformacion -->

</div>
<br>
<!-- Fin Set -->
