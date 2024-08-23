@extends('welcome')
@section('title','estadistica')
@section('contenido')

<!-- Set estadistica -->
<div class="set-wrapper estadistica">
    <style>
        .paragraph {
            margin: 0;
            padding: 16px;
        }
    </style>
    <div class="cpnt cpnt-1">
        <p class="paragraph ph1">En el marco de la Política de Gestión de la Información Estadística del Modelo Integrado de Planeación y Gestión – MIPG, la Secretaria Distrital de Movilidad los invita a consultar a continuación la información relacionada con el diagnóstico de la actividad estadística, que incluye la encuesta de satisfacción de las necesidades de información, así como los inventarios y documentación de las operaciones estadísticas y registros administrativos identificados en la entidad.</p>
    </div>
    <div class="cpnt cpnt-2 cpnt-collapse">

        <!-- collapse group estadistica -->
        <div class='panel-group' id='accordion-estadistica' role='tablist ' aria-multiselectable='true'>

            <!-- collapse est2023 -->
            <div class='panel panel-primary'>
                <div class='panel-heading' role='tab' id='heading-est2023'>
                    <h4 class='panel-title'>
                        <a role='button' data-toggle='collapse' data-parent='#accordion-estadistica' href='#collapse-est2023' aria-expanded='false' aria-controls='collapse-est2023'>
                            2023
                        </a>
                    </h4>
                </div>
                <div id='collapse-est2023' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading-est2023' aria-expanded='false'>
                    <div class='panel-body'>
                        <div class='body-collapse-est2023'>

                            <!-- collapse group est2023 -->
                            <div class='panel-group' id='accordion-est2023' role='tablist ' aria-multiselectable='true'>

                                <!-- collapse est2023Diagnostico -->
                                <div class='panel panel-primary'>
                                    <div class='panel-heading' role='tab' id='heading-est2023Diagnostico'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion-est2023' href='#collapse-est2023Diagnostico' aria-expanded='false' aria-controls='collapse-est2023Diagnostico'>
                                                Diagnóstico
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse-est2023Diagnostico' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-est2023Diagnostico' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='body-collapse-est2023Diagnostico'>
                                                <ul>
                                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/diagnostico_de_gestion_actividad_estadistica_2023.pdf">Diagnostico de gestión actividad estadistica 2023 (.pdf)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse est2023Encuesta -->
                                <div class='panel panel-primary'>
                                    <div class='panel-heading' role='tab' id='heading-est2023Encuesta'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion-est2023' href='#collapse-est2023Encuesta' aria-expanded='false' aria-controls='collapse-est2023Encuesta'>
                                                Encuesta de Satisfacción
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse-est2023Encuesta' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-est2023Encuesta' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='body-collapse-est2023Encuesta'>
                                                <ul>
                                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/informe_satisfaccion_de_las_necesidades_de_info_2023_2_1.pdf">Informe satisfacción de las necesidades de info 2023 (.pdf)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse est2023Inventario -->
                                <div class='panel panel-primary'>
                                    <div class='panel-heading' role='tab' id='heading-est2023Inventario'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion-est2023' href='#collapse-est2023Inventario' aria-expanded='false' aria-controls='collapse-est2023Inventario'>
                                                Inventario de operaciones estadísticas y registros administrativos
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse-est2023Inventario' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-est2023Inventario' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='body-collapse-est2023Inventario'>
                                                <ul>
                                                    <li>
                                                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/inventario_operaciones_estadisticas_y_registros_admnistrativos_2023.xlsx">Inventario de operaciones estadísticas y registros administrativos 2023 (.xlsx)</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse est2023Operaciones -->
                                <div class='panel panel-primary'>
                                    <div class='panel-heading' role='tab' id='heading-est2023Operaciones'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion-est2023' href='#collapse-est2023Operaciones' aria-expanded='false' aria-controls='collapse-est2023Operaciones'>
                                                Operaciones Estadísticas
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse-est2023Operaciones' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-est2023Operaciones' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='body-collapse-est2023Operaciones'>
                                                <ul>
                                                    <li>
                                                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/ficha_metodologica_operacion_estadistico_monitoreo_2023.pdf">Ficha metodológica operación estadístico monitoreo 2023 (.pdf)</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/ficha_metodologica_operaciones_estadisticas_emg_2023.pdf">Ficha metodologica operaciones estadisticas emg 2023 (.pdf)</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/ficha_metodologica_operaciones_estadisticas_eprv_2023.pdf">Ficha metodologica operaciones estadisticas eprv 2023 (.pdf)</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- collapse est23Registros -->
                                <div class='panel panel-primary'>
                                    <div class='panel-heading' role='tab' id='heading-est23Registros'>
                                        <h4 class='panel-title'>
                                            <a role='button' data-toggle='collapse' data-parent='#accordion-est2023' href='#collapse-est23Registros' aria-expanded='false' aria-controls='collapse-est23Registros'>
                                                Registros Administrativos
                                            </a>
                                        </h4>
                                    </div>
                                    <div id='collapse-est23Registros' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading-est23Registros' aria-expanded='false'>
                                        <div class='panel-body'>
                                            <div class='body-collapse-est23Registros'>
                                                <ul>
                                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/ficha_metodologica_registro_adminstrativoimpugnacionordenescomparendo_2023.pdf">Ficha metodológica registro administrativo impugnación ordenes comparendo 2023 (.pdf)</a></li>
                                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/ficha_metodologica_registro_adminstrativo_comparendos_2023.pdf">Ficha metodológica registro administrativo comparendos 2023 (.pdf)</a></li>
                                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/ficha_metodologica_registro_adminstrativo_zonas_amarilas_2023.pdf">Ficha metodológica registro administrativo zonas amarillas 2023 (.pdf)</a></li>
                                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/ficha_metodologica_registro_adminstrativo_sigat_2023.pdf">Ficha metodológica registro administrativo SIGAT 2023 (.pdf)</a></li>
                                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/ficha_metodologica_registro_adminstrativo_registro_bici_bogota_2023.pdf">Ficha metodológica registro administrativo Registro Bici Bogotá 2023 (.pdf)</a></li>
                                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/ficha_metodologica_registro_adminstrativo_rde_2023.pdf">Ficha metodológica registro administrativo RDE 2023 (.pdf)</a></li>
                                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/ficha_metodologica_registro_adminstrativo_pims_2023.pdf">Ficha metodológica registro administrativo PIMS 2023 (.pdf)</a></li>
                                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/ficha_metodologica_registro_adminstrativo_entregavehiculosinmovilizados_2023.pdf">Ficha metodológica registro administrativo entrega vehículos inmovilizados 2023 (.pdf)</a></li>
                                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/ficha_metodologica_registro_administrativo_rda_2023.pdf">Ficha metodológica registro administrativo RDA 2023 (.pdf)</a></li>
                                                    <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-08-2024/ficha_metodologica_registro_adminstrativo_pqrsd_2023.pdf">Ficha metodológica registro administrativo PQRSD 2023 (.pdf)</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

</div>
<!-- Fin Set -->
