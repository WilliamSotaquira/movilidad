@extends('welcome')
@section('title','inversion2024')
@section('contenido')

<!-- Set inversion2024 -->
<style>
    .inversion2024 {
        font-weight: normal;
        font-size: 16px;
        margin: 0px;
        padding: 32px;
        color: #252525;
    }
</style>
<div class="set-wrapper inversion2024">
    <div class="cpnt cpnt-1">
        <p>A continuación, se encuentran los documentos base del Plan de Desarrollo Bogotá Camina Segura 2024-2027, los proyectos de inversión de la Secretaría Distrital de Movilidad (SDM) registrados en el Banco de Programas y Proyectos de Inversión en el Sistema de Seguimiento al Plan de Desarrollo – SEGPLAN, en cada uno de ellos podrá consultar la Ficha EBI D y la Ficha de Formulación. Así mismo, se encuentra el listado de los proyectos de inversión vigentes.
        </p>
        <br>
        <!-- collapse base -->
        <div class='panel panel-primary'>
            <div class='panel-heading' role='tab' id='heading-base'>
                <h4 class='panel-title'>
                    <a role='button' data-toggle='collapse' data-parent='#accordion-base' href='#collapse-base' aria-expanded='false' aria-controls='collapse-base'>
                        Documentos Base del Plan de Desarrollo Bogotá Camina Segura
                    </a>
                </h4>
            </div>
            <div id='collapse-base' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading-base' aria-expanded='false'>
                <div class='panel-body'>
                    <div class='body-collapse-base'>
                        <ul>
                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-07-2024/copia_de_cadena_de_valor_para_publicar_1_1_0_1.xlsx">Cadena de valor PDD BCS 2024-2027 (.xlsx)</a></li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-07-2024/acuerdo_no._927_de_2024.pdf">Acuerdo No. 927 de 2024 (.pdf)</a></li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-07-2024/20240526_proyecto_bases_pdd_2024-2027_2_1.pdf">Proyecto Plan Distrital de Desarrollo BCS 2024-2027 (.pdf)</a></li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-07-2024/presentacion_pdd_movilidad.pdf">Presentación Plan de Desarrollo Distrital BCS_Sector Movilidad (.pdf)</a></li>
                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-07-2024/listado_metas_de_producto_finalvf_2_5.pdf">Documento Metas Producto Plan de Desarrollo BCS (.pdf)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .cpnt-2 {}
    </style>
    <div class="cpnt cpnt-2">
        <br>
        <p class="paragraph ph-1">
            El listado contiene los proyectos de inversión de la Secretaría Distrital de Movilidad vigentes para 2025 por Estructura Plan de Desarrollo.
        </p>
        <br>
        <!-- collapse listado -->
        <div class='panel panel-primary'>
            <div id='collapse-listado' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading-listado' aria-expanded='false'>
                <div class='panel-body'>
                    <div class='body-collapse-listado'>
                        <ul>
                            <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/listado_de_proyectos_vigentes_sdm.pdf">Listado de proyectos SDN vigentes 2025 (.pdf)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <style>
        .inversion2024 .cpnt-3 {
            display: flex;
            gap: 8px;
            grid-auto-flow: dense;
            /* grid-template-columns: repeat(auto-fill, minmax(min(100%, 225px), 1fr)); */
            grid-template-rows: auto;
            align-content: stretch;
            justify-content: center;
            align-items: center;
            justify-items: stretch;
            margin-bottom: 32px;
            flex-wrap: wrap;
        }

        .inversion2024 .cpnt-3 .card-pi {
            background-color: #dff0d8;
            border: solid 1px #e5e5e5;
            border-radius: 4px;
            display: flex;
            flex-direction: column;
            height: 170px;
            transition: height 0.8s ease;
            width: 240px;
        }


        .cpnt-3 .card-pi .title {
            text-align: center;
            width: 100%;
            height: 170px;
            background-color: #e5e5e5;
            padding: 8px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
            align-items: stretch;
            align-content: stretch;
        }


        .cpnt-3 .card-pi .title h3 {
            display: inline-block;
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            color: #4d541f;
            margin: 8px;
        }

        .cpnt-3 .card-pi .title p {
            font-size: 14px;
            text-align: center;
            line-height: normal;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 6;
            line-clamp: 6;
            overflow: hidden;
            margin: 4px;
            height: 100px;

        }

        .cpnt-3 .card-pi .links {
            visibility: hidden;
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
            height: 0;
            padding: 0;
        }

        .cpnt-3 .card-pi:hover {
            background-color: #d0e9c6;
            height: 230px;
        }

        .cpnt-3 .card-pi:hover .links {
            visibility: visible;
            text-align: center;
            height: 80px;
        }

        .cpnt-3 .card-pi:hover .links a {
            display: block;
            font-size: 14px;
            margin: auto 8px;
            padding: auto;
        }
    </style>
    <hr>


    <div class="cpnt cpnt-3">

        <div class="card card-pi">
            <div class="title">
                <h3>7941</h3>
                <p>Fortalecimiento del componente de gobernanza para la implementación de la estrategia de seguridad vial en Bogotá&nbsp;D.C.</p>
            </div>
            <div class="links">
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-01-2025/ficha_formulacion_proyecto_7941.pdf">Ficha Formulación Proyecto 7941</a>
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_7941.pdf">Ficha EBI_D proyecto 7941</a>
            </div>
        </div>

        <div class="card card-pi">
            <div class="title">
                <h3>7969</h3>
                <p>Mejoramiento en la gestión de las acciones de transparencia e integridad de la Secretaría Distrital de Movilidad en Bogotá D.C</p>
            </div>
            <div class="links">
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2025/ficha_formulacion_proyecto_7969.pdf">Ficha Formulación Proyecto 7969</a>
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_7969.pdf">Ficha EBI_D proyecto 7969</a>
            </div>
        </div>

        <div class="card card-pi">
            <div class="title">
                <h3>7974</h3>
                <p>Fortalecimiento de los procesos contravencionales asociados a las infracciones de normas de tránsito y transporte público en Bogotá&nbsp;D.C.</p>
            </div>
            <div class="links">
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2025/ficha_formulacion_proyecto_7974.pdf">Ficha Formulación Proyecto 7974</a>
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_7974.pdf">Ficha EBI_D proyecto 7974</a>
            </div>
        </div>

        <div class="card card-pi">
            <div class="title">
                <h3>7975</h3>
                <p>Implementación de acciones para una movilidad sostenible, segura y confiable para Bogotá&nbsp;D.C.</p>
            </div>
            <div class="links">
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2025/ficha_formulacion_proyecto_7975.pdf">Ficha Formulación Proyecto 7975</a>
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_7975.pdf">Ficha EBI_D proyecto 7975</a>
            </div>
        </div>

        <div class="card card-pi">
            <div class="title">
                <h3>7980</h3>
                <p>Implementación de intervenciones integrales de cultura, comunicación y pedagogía, para la movilidad segura en Bogotá&nbsp;D.C.</p>
            </div>
            <div class="links">
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2025/ficha_formulacion_proyecto_7980.pdf">Ficha Formulación Proyecto 7980</a>
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_7980.pdf">Ficha EBI_D proyecto 7980</a>
            </div>
        </div>
        <div class="card card-pi">
            <div class="title">
                <h3>7982</h3>
                <p>Mejoramiento y mantenimiento de los servicios de TI asociados a la infraestructura tecnológica operacional de la Secretaría Distrital de Movilidad de Bogotá&nbsp;D.C.</p>
            </div>
            <div class="links">
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2025/ficha_formulacion_proyecto_7982.pdf">Ficha Formulación Proyecto 7982</a>
                <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_7982.pdf">Ficha EBI_D proyecto 7982</a>
            </div>
        </div>
        <div class="card card-pi">
            <div class="title">
                <h3>7985</h3>
                <p>Consolidación del trabajo colaborativo y apoyo institucional en la Secretaría Distrital de Movilidad de Bogotá&nbsp;D.C.</p>
            </div>
            <div class="links">
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2025/ficha_formulacion_proyecto_7985.pdf">Ficha Formulación Proyecto 7985</a>
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_7985.pdf">Ficha EBI_D proyecto 7985</a>
            </div>
        </div>
        <div class="card card-pi">
            <div class="title">
                <h3>7994</h3>
                <p>Fortalecimiento de la Gestión Jurídica en la Secretaría Distrital de Movilidad de Bogotá&nbsp;D.C.</p>
            </div>
            <div class="links">
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2025/ficha_formulacion_proyecto_7994.pdf">Ficha Formulación Proyecto 7994</a>
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_7994.pdf">Ficha EBI_D proyecto 7994</a>
            </div>
        </div>
        <div class="card card-pi">
            <div class="title">
                <h3>7996</h3>
                <p>Fortalecimiento del programa niñas y niños primero para mejorar la seguridad vial y la confianza en el camino al colegio en Bogotá&nbsp;D.C.</p>
            </div>
            <div class="links">
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-02-2025/ficha_formulacion_proyecto_7996.pdf">Ficha Formulación Proyecto 7996</a>
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_7996.pdf">Ficha EBI_D proyecto 7996</a>
            </div>
        </div>
        <div class="card card-pi">
            <div class="title">
                <h3>7998</h3>
                <p>Fortalecimiento de la red de cicloinfraestructura en la ciudad de Bogotá&nbsp;D.C.</p>
            </div>
            <div class="links">
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2025/ficha_formulacion_proyecto_7998.pdf">Ficha Formulación Proyecto 7998</a>
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_7998.pdf">Ficha EBI_D proyecto 7998</a>
            </div>
        </div>
        <div class="card card-pi">
            <div class="title">
                <h3>8000</h3>
                <p>Fortalecimiento del sistema de señalización para la movilidad enfocada en la mejora de la seguridad vial en la ciudad de Bogotá D.C</p>
            </div>
            <div class="links">
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-02-2025/ficha_formulacion_proyecto_8000.pdf">Ficha Formulación Proyecto 8000</a>
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_8000.pdf">Ficha EBI_D proyecto 8000</a>
            </div>
        </div>
        <div class="card card-pi">
            <div class="title">
                <h3>8001</h3>
                <p>Consolidación de las intervenciones en el espacio público para el mejoramiento de las condiciones de movilidad y seguridad vial en los corredores y puntos estratégicos en Bogotá&nbsp;D.C.</p>
            </div>
            <div class="links">
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-02-2025/ficha_formulacion_proyecto_8001.pdf">Ficha Formulación Proyecto 8001</a>
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_8001.pdf">Ficha EBI_D proyecto 8001</a>
            </div>
        </div>
        <div class="card card-pi">
            <div class="title">
                <h3>8008</h3>
                <p>Mejoramiento de los servicios prestados en la Secretaría Distrital de Movilidad de Bogotá&nbsp;D.C.</p>
            </div>
            <div class="links">
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2025/ficha_formulacion_proyecto_8008.pdf">Ficha Formulación Proyecto 8008</a>
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_8008.pdf">Ficha EBI_D proyecto 8008</a>
            </div>
        </div>
        <div class="card card-pi">
            <div class="title">
                <h3>8009</h3>
                <p>Fortalecimiento de las intervenciones de control y prevención del tránsito y el transporte para mejorar la seguridad vial en Bogotá&nbsp;D.C.</p>
            </div>
            <div class="links">
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/25-02-2025/ficha_formulacion_proyecto_8009.pdf">Ficha Formulación Proyecto 8009</a>
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_8009.pdf">Ficha EBI_D proyecto 8009</a>
            </div>
        </div>
        <div class="card card-pi">
            <div class="title">
                <h3>8012</h3>
                <p>Implementación de espacios de participación ciudadana incidente en la Secretaría Distrital de Movilidad de Bogotá&nbsp;D.C.</p>
            </div>
            <div class="links">
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/07-03-2025/ficha_formulacion_proyecto_8012.pdf">Ficha Formulación Proyecto 8012</a>
               <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/04-02-2025/ficha_ebi_d_proyecto_8012.pdf">Ficha EBI_D proyecto 8012</a>
            </div>
        </div>


    </div>

</div>
<!-- Fin Set -->

