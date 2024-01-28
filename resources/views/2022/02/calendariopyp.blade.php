@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<div class="container-fluid seccion">
    <div class="s1">
        <div class="encabezado">
            <h3>Pico y Placa</h3>
        </div>

        <div>
            <div class="descripcion">
                <p>Descargue o vea en línea el calendario oficial del Pico y Placa en Bogotá</p>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <p style="text-align: center;"><a class="btn btn-primary btn-lg btn-block" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Temas/2024-01-02/calendario_pico_y_placa_2024_enero.pdf" role="button" target="_blank">Pico y Placa enero 2024</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">&nbsp;
                <br>
                <p>Conozca la normativa que sustenta la medida de Pico y Placa para vehículos particulares, taxis, transporte especial y vehículos de carga mayores a 20 años en Bogotá.</p>
                <br>
            </div>
        </div>

        <div class="cuerpo">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse1">Vehículos de Servicio Particular</a></h4>
                            </div>

                            <div class="panel-collapse collapse" id="collapse1">
                                <div class="panel-body">
                                    <p><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=132580" rel="noopener noreferrer" target="_blank">Decreto 003 del 6 de enero de 2023</a> "Por medio del cual se dictan disposiciones para el mejor ordenamiento del tránsito de vehículos automotores de servicio particular dentro del perímetro urbano de Bogotá y se dictan otras disposiciones" . Para mayor información como la dirección de los límites del pico y placa de vehículos del servicio particular u otra información consultar: <a href="https://movilidadbogota.maps.arcgis.com/apps/Cascade/index.html?appid=5995d86ebcd34be1ba11bb22719394ee" rel="noopener noreferrer" target="_blank">https://movilidadbogota.maps.arcgis.com/apps/Cascade/index.html?appid=5995d86ebcd34be1ba11bb22719394ee</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse2">Vehículos de Servicio Público Individual de Pasajeros</a></h4>
                            </div>

                            <div class="panel-collapse collapse" id="collapse2">
                                <div class="panel-body">
                                    <p><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=4643&amp;dt=S">Decreto 660 del 27 de agosto de 2001</a>. “Por el cual se toman medidas para el mejor ordenamiento del tránsito de vehículos en las vías públicas de Bogotá, D.C. y se modifica el Decreto 621 de 2001”</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse3">Vehículos de Servicio Público Transporte terrestre automotor Especial</a></h4>
                            </div>

                            <div class="panel-collapse collapse" id="collapse3">
                                <div class="panel-body">
                                    <p>Vehículos de Servicio Público de Transporte terrestre automotor Especial, clase automóvil, camioneta o campero, con capacidad para 4 pasajeros sin incluir conductor. <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=66359&amp;dt=S">Decreto 248 del 14 de junio de 2016</a>. “Por medio del cual se toman medidas para el ordenamiento del tránsito de vehículos de transporte público especial en las vías públicas del Distrito Capital, y se dictan otras disposiciones”.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse7">Vehículos de Carga con restricción por generación vehicular</a></h4>
                            </div>

                            <div class="panel-collapse collapse" id="collapse7">
                                <div class="panel-body">
                                    <p><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=88592">Decreto 840 del 27 de diciembre de 2019 modificado por el Decreto 077 de marzo de 2020</a> "Por medio del cual se establecen las condiciones y restricciones para el tránsito de los vehículos de transporte de carga en el Distrito Capital, y se dictan otras disposiciones"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <h3>Recursos</h3>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <!-- collapse_historico -->
                <div class='panel-group' id='accordion_historico' role='tablist ' aria-multiselectable='true'>

                    <!-- collapse 2023 -->
                    <div class='panel panel-default'>
                        <div class='panel-heading' role='tab' id='heading_2023'>
                            <h4 class='panel-title'>
                                <a role='button' data-toggle='collapse' data-parent='#accordion_historico' href='#collapse_2023' aria-expanded='false' aria-controls='collapse_2023'>
                                    Histórico 2023
                                </a>
                            </h4>
                        </div>
                        <div id='collapse_2023' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading_2023' aria-expanded='false'>
                            <div class='panel-body'>
                                <div class='box-2023'>
                                    <ul>
                                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Temas/2023-09-15/calendario_pico_y_placa_2023-q3_1.pdf">Pico y placa de septiembre a diciembre 2023</a></li>
                                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Temas/2023-05-02/calendario_pico_y_placa_2023-q2.pdf">Pico y placa de mayo a agosto 2023</a></li>
                                        <li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Temas/2022-12-30/calendario_pico_y_placa_2023-q1.pdf">Pico y placa de enero a abril 2023</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /#fin _historico -->

            </div>
        </div>
    </div>
</div>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ --><!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type="text/css">
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
        max-width: 940px;
    }


    .w-100 {
        width: 100%;
    }
</style>
<style type="text/css">
    .s1 .encabezado h3 {
        color: #4D541F;
        text-align: center;
        font-weight: 700;
        font-size: 26px;
        margin: 10px;
        padding-bottom: 10px;
        border-bottom: solid 3px #4D541F;
    }

    .s1 .descripcion p {
        padding: 3% 6%;
        text-align: center;
        font-size: 20px;
        font-weight: 700;
        line-height: 1.4;
    }

    .s1 .cuerpo p {
        text-align: justify;
        padding: 4px 8px;
        line-height: 1.4;
        font-size: 14px;

    }

    .s1 .cuerpo h4 {
        font-size: 16px !important;
    }

    #accordion_historico ul {
        list-style-type: none;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
