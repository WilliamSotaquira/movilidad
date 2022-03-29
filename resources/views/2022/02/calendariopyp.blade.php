@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
    <div class='s1'>
        <div class="encabezado">
            <h3>Pico y Placa</h3>
        </div>
        <div>
            <div class="descripcion">
                <p>Descargue o vea en línea el calendario oficial del Pico y Placa en Bogotá</p>
            </div>
        </div>
        <div class="cuerpo">

        

            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <p style="text-align: center;"><a class="btn btn-primary btn-lg btn-block" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Temas/2021-12-31/calendario_pico_y_placa_primer_semestre_2022_a.pdf" role="button" target="_blank">Pico y placa PRIMER SEMESTRE 2022</a></p>
                </div>
            </div>
            <hr>
            <div class='row'>
                <div class='col-xs-12 col-sm-12 col-md-12'>
                    <br>
                    <p>Conozca la normativa que sustenta la medida de Pico y Placa para vehículos particulares, taxis, transporte especial y vehículos de carga mayores a 20 años en Bogotá.</p>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse1">Vehículos de Servicio Particular</a></h4>
                            </div>

                            <div class="panel-collapse collapse" id="collapse1">
                                <div class="panel-body">
                                <p><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=55963" target="_blank" rel="noopener noreferrer">Decreto 575 del 17 de diciembre de 2013 </a> “Por medio del cual se dictan disposiciones para el mejor ordenamiento del tránsito de vehículos automotores de servicio particular por las vías públicas en el Distrito Capital, y se derogan los Decretos Distritales 271 y 300 de 2012” modificado por el <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=67497" target="_blank" rel="noopener noreferrer">Decreto 515 del 22 de noviembre de 2016</a> “Por medio del cual se toman medidas para el mejor ordenamiento del tránsito en las vías públicas de todo el perímetro del Distrito Capital, y se dictan otras disposiciones”, por el <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=88574" target="_blank" rel="noopener noreferrer">Decreto 846</a> “Por medio del cual se modifican los artículos 4 y 6 del Decreto Distrital 575 de 2013”, modificado por el Decreto 073 de 2021 “Por medio del cual se toman medidas para la regulación y control del tránsito en Bogotá D.C. y se dictan otras disposiciones” y modificado por el <a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Temas/2022-01-28/decreto_002_de_2022.pdf" target="_blank" rel="noopener noreferrer">Decreto 002 de 2022</a> “Por medio del cual se modifican los artículos 1, 2 y 3 del Decreto Distrital 575 de 2013”  Para mayor información como la dirección de los límites del pico y placa de vehículos del servicio particular u otra información consultar: <a href="https://movilidadbogota.maps.arcgis.com/apps/Cascade/index.html?appid=5995d86ebcd34be1ba11bb22719394ee" target="_blank" rel="noopener noreferrer">https://movilidadbogota.maps.arcgis.com/apps/Cascade/index.html?appid=5995d86ebcd34be1ba11bb22719394ee</a></p>
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
                        <!-- 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse5">Vehículos de Servicio Público Colectivo</a></h4>
				</div>

				<div class="panel-collapse collapse" id="collapse5">
					<div class="panel-body"><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=59702&amp;dt=S">Decreto 444 del 14 de octubre de 2014</a>. "Por medio del cual se toman medidas para el ordenamiento del tránsito de los vehículos de transporte público colectivo en las vías públicas del Distrito Capital, durante su etapa de transición al Sistema Integrado de Transporte Público -SITP" Medida suspendida por el <a href="https://bogota.gov.co/mi-ciudad/seguridad/cuarentena/decreto-126-de-2020-medidas-para-manejo-de-la-pandemia-por-covid-19">Artículo 13 del Decreto Distrital 126 de 2020 </a> “Por medio del cual se establecen medidas transitorias para el manejo del riesgo derivado de la pandemia por Coronavirus COVID-19 durante el estado de calamidad pública declarado en el distrito capital y se toman otras determinaciones” Vehículos de Servicio Público Colectivo. <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=59702&amp;dt=S">Decreto 444 del 14 de octubre de 2014</a>. "Por medio del cual se toman medidas para el ordenamiento del tránsito de los vehículos de transporte público colectivo en las vías públicas del Distrito Capital, durante su etapa de transición al Sistema Integrado de Transporte Público -SITP" Medida suspendida por el <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=92900" target="_blank">Artículo 13 del Decreto Distrital 126 de 2020</a>&nbsp;“Por medio del cual se establecen medidas transitorias para el manejo del riesgo derivado de la pandemia por Coronavirus COVID-19 durante el estado de calamidad pública declarado en el distrito capital y se toman otras determinaciones”</div>
				</div>
			</div> -->
                        <!-- 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse6">Vehículos de Servicio Público Colectivo con restricción ambiental</a></h4>
				</div>

				<div class="panel-collapse collapse" id="collapse6">
					<div class="panel-body"><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=20361&amp;dt=S">Decreto 174 del 30 de mayo de 2006</a> "Por medio del cual se adoptan medidas para reducir la contaminación y mejorar la calidad del Aire en el Distrito Capital" modificado por el Decreto <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=21050&amp;dt=S">Distrital 325 de 2006</a> "Por medio del cual se corrige un error en el Decreto 174 de 2006, "por medio de cual se adoptan medidas para reducir la contaminación y mejorar la calidad del Aire en el Distrito Capital" Medida suspendida por el <a href="https://bogota.gov.co/mi-ciudad/seguridad/cuarentena/decreto-126-de-2020-medidas-para-manejo-de-la-pandemia-por-covid-19">Artículo 13 del Decreto Distrital 126 de 2020</a> “Por medio del cual se establecen medidas transitorias para el manejo del riesgo derivado de la pandemia por Coronavirus COVID-19 durante el estado de calamidad pública declarado en el distrito capital y se toman otras determinaciones”.</div>

					<div class="panel-body"><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Temas/2021-07-16/decreto_073_de_2021.pdf" target="_blank">Decreto 073 de 16 de marzo de 2021</a>&nbsp;“Por medio del cual se toman medidas para la regulación y control del tránsito en Bogotá D.C. y se dictan otras disposiciones”</div>
				</div>
			</div> -->

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
        max-width: 940px;
    }


    .w-100 {
        width: 100%;
    }
</style>
<style>
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
    .s1 .cuerpo p{
        text-align: justify;
        padding: 4px 8px;
        line-height: 1.4;
        font-size: 14px;

    }
    .s1 .cuerpo h4{
        font-size: 16px !important;
    }
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->