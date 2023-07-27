@extends('welcome')
@section('title','indiceClasificadaReservada')
@section('contenido')

<!-- Set indiceClasificadaReservada -->
<div class="set-wrapper indiceClasificadaReservada">
    <br>
    <p>En este espacio web encontrará la información que, de manera excepcional para la ley o la constitución justifican una restricción y conllevan a que ésta sea clasificada o reservada y que no pueda ser puesta a disposición de la ciudadanía. Se trata de información que, por su naturaleza, podría afectar la seguridad nacional, el orden público, la salud pública o los derechos fundamentales de las personas si se divulga sin control.</p>
    <br>
    <!-- collapse_clasifiacadaReservada -->
    <div class='panel-group' id='accordion_clasificadaReservada' role='tablist' aria-multiselectable='true'>

        <!-- collapse otic -->
        <div class='panel panel-primary'>
            <div class='panel-heading' role='tab' id='heading_otic'>
                <h4 class='panel-title'>
                    <a role='button' data-toggle='collapse' data-parent='#accordion_clasificadaReservada' href='#collapse_otic' aria-expanded='false' aria-controls='collapse_otic'>
                        Oficina de Tecnologías de la Información y las Comunicaciones (OTIC)
                    </a>
                </h4>
            </div>
            <div id='collapse_otic' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_otic' aria-expanded='false'>
                <div class='panel-body'>
                    <div class='box-otic'>
                        <ul>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- collapse gestionDocumental -->
        <div class='panel panel-primary'>
            <div class='panel-heading' role='tab' id='heading_gestionDocumental'>
                <h4 class='panel-title'>
                    <a role='button' data-toggle='collapse' data-parent='#accordion_clasificadaReservada' href='#collapse_gestionDocumental' aria-expanded='false' aria-controls='collapse_gestionDocumental'>
                        Gestión Documental
                    </a>
                </h4>
            </div>
            <div id='collapse_gestionDocumental' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_gestionDocumental' aria-expanded='false'>
                <div class='panel-body'>
                    <div class='box-gestionDocumental'>
                        <ul>
                            <li>
                                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-11-2021/indice_de_informacion_clasificada_y_de_reservada_sdm.xlsx">PA01-PR04-F02 v1.0 - Formato indice de información clasificada y reservada | 9 de noviembre de 2022</a> (Excel descargable)
                            </li>
                            <!-- <li>
                                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-11-2021/indice_de_informacion_clasificada_y_de_reservada_sdm.xlsx">PA01-PR04-F02 Formato indice de información clasificada y reservada - v1.0</a>
                            </li>
                            <li>
                            <li class="rtejustify"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-03-2022/pa01-pl01_plan_de_preservacion_documental_sic_v2.0_03.11.pdf">PA01-PL01 Plan de preservación documental SIC v2.0 </a></li>
                            <li class="rtejustify"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-05-2023/pa01-pl01_plan_integral_de_conservacion_sic_v1.0_del_31.01.2023_0.pdf">PA01-PL01 Plan institucional sistema integrado de conservación de documentos (SIC) v1.0 <i>31 de enero de 2023</i></a></li>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /#fin _clasifiacadaReservada -->
</div>
<br>
<!-- Fin Set -->
