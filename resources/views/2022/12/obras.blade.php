@extends('welcome')
@section('contenido')

<!-- obras -->
<!-- Styles -->
<style type='text/css'>
    :root {
        --color-primario: #4c531e;
        --color-secundario: #879225;
        --color-terciario: #bed000;
        --color-gris: #e5e5e5;
        --color-blanco: #ffffff;
        --color-negro: #191919;
        --color-fondo: #333333;
    }

    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .w-100 {
        width: 100%;
    }

    .obras {
        max-width: 980px;
        margin: auto;
        padding-bottom: 20px;
        word-break: break-word;
        word-wrap: break-word;
    }

    .box-obras-body .glyphicon-chevron-right::before {
        color: rgba(255, 255, 255, 1) !important;
    }

    .box-obras-body .glyphicon-chevron-left::before {
        color: rgba(255, 255, 255, 1) !important;
    }

    .box-obras-body .panel-heading {
        border-color: rgba(77, 84, 31, 1) !important;
        background-color: rgba(77, 84, 31, 1) !important;
        background-image: none !important;
    }

    .box-obras-body .panel-heading .panel-title a {
        text-decoration: none;
        color: rgba(255, 255, 255, 1) !important;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
    }

    .box-obras-body .panel-heading .panel-title a:after {
        font-family: 'Glyphicons Halflings';
        content: "\e080";
        float: right;
        color: rgba(255, 255, 255, 1);
        font-size: 18px;
    }

    .box-obras-body .panel-heading .panel-title a.collapsed:after {
        content: "\e114";
    }
</style>
<!-- End Styles -->

<!-- Set Wrapper -->
<div class='container-fluid obras'>
    <div class='set-wrapper'>

        <!-- Sección box obras-body -->
        <div class="box-obras-body">

            <!-- collapse_obras2023 -->
            <div class='panel-group' id='accordion_obras2023' role='tablist ' aria-multiselectable='true'>

                <!-- collapse collapse_o23_idu -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading_collapse_o23_idu'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_obras2023' href='#collapse_collapse_o23_idu' aria-expanded='false' aria-controls='collapse_collapse_o23_idu'>
                                IDU
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_collapse_o23_idu' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_collapse_o23_idu' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-collapse_o23_idu'>
                                <div class="title title-h3">
                                    <h3>IDU intensifica trabajos para el mantenimiento de la malla vial y de ciclorrutas durante fin de año</h3>
                                </div>
                                <div class="paragraph ph-1">
                                    <p>Con una inversión de $17.938 millones y 105 frentes de obra diurnos y nocturnos, el Instituto de Desarrollo Urbano -IDU- realiza actividades de conservación en 26 kilómetros- carril de vías (equivalentes a 159 calles) en varios corredores de la ciudad, como parte del Plan de Mantenimiento Vial de fin de año. También interviene más de 5 kilómetros de ciclorruta y 2.533 metros cuadrados de espacio público.</p>
                                </div>
                                <div class="imagen img-1">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-12-2022/221221_obras_1.png" alt="Personal de la UMA realizando trabajos de mejora a los andenes" title="Personal de la UMA realizando trabajos de mejora a los andenes">
                                </div>
                                <div class="paragraph ph-2">
                                    <p>Alrededor de 2.480 personas estarán trabajando en el mantenimiento de la malla vial, espacio público y ciclorrutas con actividades que van desde mantenimiento periódico hasta parcheos y bacheos localizados en las vías. Buscamos generar mejores condiciones de movilidad para los peatones, ciclistas y para el transporte público y privado al regresar de la temporada de fin de año.</p>
                                    <p>En malla vial arterial troncal, 5,25 km-carril (33 calles) en la Autopista Norte, calles 80 y 26, NQS, avenidas Caracas y Las Américas, entre otras. En malla vial arterial no troncal, el IDU intervendrá 10,75 km-carril (67 calles), principalmente en las avenidas Boyacá, Ciudad de Cali, Las Américas, La Esperanza, Circunvalar, Primera de Mayo y en las calles 170 y 138. En las vías que soportan las rutas SITP, serán intervenidos 3,59 km-carril (22 calles), en diferentes segmentos viales de 17 localidades de Bogotá.</p>
                                </div>
                                <div class="imagen img-2">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-12-2022/221221_obras_3.png" alt="Fotografía personal de obra adelantando acciones de mejoras a cazada en la noche" title="Fotografía personal de obra adelantando acciones de mejoras a cazada en la noche">
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        .box-collapse_o23_idu {
                            grid-area: collapse_o23_idu;
                        }
                    </style>
                </div>

                <!-- collapse umv -->
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='heading_umv'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#accordion_obras2023' href='#collapse_umv' aria-expanded='false' aria-controls='collapse_umv'>
                                UMV
                            </a>
                        </h4>
                    </div>
                    <div id='collapse_umv' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_umv' aria-expanded='false'>
                        <div class='panel-body'>
                            <div class='box-umv'>
                                <div class="title title-h3">
                                    <h3></h3>
                                </div>
                                <div class="paragraph ph-3">
                                    <p>La UMV realizará tres estrategias para el plan de Mantenimiento Vial en Bogotá desde el 5 de diciembre de 2022 hasta el 30 de enero de 2023.Las intervenciones nocturnas que se realizarán durante ese mes serán: Carrera séptima: desde la calle 183 hasta la calle 32, Calle 170 desde la Autopista Norte hasta la Avenida Boyacá, Avenida Circunvalar desde la Calle 39 hasta la calle 6ta y la Carrera 5ta desde la calle72 hasta la calle 26.</p>
                                </div>
                                <div class="imagen img-3">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-12-2022/221221_obras_5.png" alt="Personal de la UMV haciendo separación de calzada en la noche" title="Personal de la UMV haciendo reparación de calzada en la noche">
                                </div>
                                <div class="paragraph ph-4">
                                    <p>La UMV también priorizó intervenciones diurnas y ha establecido una estrategia para atender más de 30 mil metros cuadrados de vías reportadas en la plataforma Gobierno Abierto Bogotá, trabajará en 3 sectores diferentes de la ciudad, en el primero atenderá 23 calles de las localidades de Chapinero, Suba y Usaquén, 23 calles en el segundo sector localizado en Teusaquillo, y en el tercer sector intervendrá 15 calles en Rafael Uribe Uribe y Tunjuelito. Además contará para este plan con más de 800 personas distribuidas en 40 unidades operativas, 7 de topografía y un equipo de diagnóstico, plantas de asfalto en caliente y mezcla en frío, unidades móviles de parcheo y equipo menor.</p>
                                </div>
                                <div class="imagen img-4">
                                    <img class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-12-2022/221221_obras_7.png" alt="Cuadrilla de la UMV reparando loza de hormigón" title="Cuadrilla de la UMV reparando loza de hormigón">
                                </div>
                                <div class="paragraph ph-5">
                                    <p>La entidad dispondrá de un equipo completo con personal y maquinaria para la atención de emergencias que afecten la movilidad en Bogotá. Adicionalmente estará en operación la sala de monitoreo y control de obras, para revisar en tiempo real el avance de los trabajos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        .box-umv {
                            grid-area: umv;
                        }
                    </style>
                </div>

            </div>
            <!-- /#fin _obras2023 -->
            <style>
                .box-obras-body .title-h3{
                    font-size: 24px;
                    font-weight: 900 !important;
                    text-align: center;
                    line-height: 1.5;
                    color: #4c531e;
                    margin: 10px 5vh;
                    text-transform: uppercase;
                }
                .box-obras-body .imagen{
                    padding: 16px 5vh;
                }
                .box-obras-body .paragraph{
                    padding: 1vh 5vh;
                }
            </style>

        </div>
        <style>
            .set-wrapper .box-obras-body {
                grid-area: box-obras-body;
            }
        </style>

    </div>
</div>
<br>
<!-- End Set Wrapper -->
<!-- End obras  -->
