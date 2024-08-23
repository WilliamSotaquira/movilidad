@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<div class="container-fluid taxis">
	<div class="row"><!-- xs -->
		<div class="col-xs-12 visible-xs-12 visible-xs-block"><img alt="Taxis de Bogotá - Servicio legal y de calidad las 24 horas." class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Temas/2024-07-09/banner_si_voy_en_taxi_1920_x_320.png" title="Taxis de Bogotá - Servicio legal y de calidad las 24 horas."></div>
		<!-- sm -->

		<div class="col-sm-12 hidden-xs"><img alt="Taxis de Bogotá - Servicio legal y de calidad las 24 horas." class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Temas/2024-07-09/banner_si_voy_en_taxi_1920_x_320_2.png" title="Taxis de Bogotá - Servicio legal y de calidad las 24 horas."></div>
	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12">
			<h1 class="pt-h1">El servicio de taxi en Bogotá</h1>

			<p class="pt-p">En Bogotá el servicio de taxi es individual y está disponible las 24 horas sin sujeción a rutas ni horarios; es decir, el usuario fija el lugar o sitio de destino y el recorrido es establecido libremente por las partes.</p>

			<p class="pt-p">El taxi está regulado desde la reglamentación nacional y distrital de transporte público y se presta bajo la responsabilidad de empresas de transporte debidamente habilitadas y con vehículos vinculados a su parque automotor. Estos vehículos cumplen con los requisitos exigidos por las disposiciones reglamentarias para esta modalidad de servicio.<br>
				Adicionalmente, conductores y vehículos cumplen con los siguientes requisitos y documentación:</p>

			<ul>
				<li class="pt-li">Tarjeta de operación y tarjeta de control</li>
				<li class="pt-li">Seguro Obligatorio de Accidentes de Tránsito (SOAT)</li>
				<li class="pt-li">Póliza de responsabilidad civil contractual y extracontractual</li>
				<li class="pt-li">Revisión técnico-mecánica</li>
				<li class="pt-li">Mantenimiento periódico preventivo y correctivo de los vehículos</li>
				<li class="pt-li">Seguridad social de conductores</li>
			</ul>

			<p class="pt-p">Estos requisitos son garantía y respaldo hacia el usuario en caso de presentarse un imprevisto, contingencia o un siniestro vial durante el servicio, conductores, usuarios y empresas cuenten con las herramientas destinadas para su atención.</p>

			<p class="pt-p">El servicio puede ser solicitado en calle, a través de los centros de atención telefónica (call center) de las empresas de taxi o por medio de las plataformas tecnológicas que operan en la ciudad habilitadas por el Ministerio de Transporte.</p>
		</div>
	</div>

	<hr>
	<div class="row row-button p-md" style="width: 100%">
		<div class="container-fluid" style="width: 100%; height: 100%;">
			<div class="col-sm-6 col-sm-offset-3 text-center p-xs"><a class="btn btn-lg div-button p-sm pt-a" href="https://www.movilidadbogota.gov.co/web/sites/default/files/Temas/2021-04-09/directorio_taxi_0.jpg" style="vertical-align: middle; padding-top: 1.7rem;">Teléfonos para pedir un taxi</a></div>
			<!-- <div class="col-sm-6 text-center p-xs"><a class="btn btn-lg div-button p-sm pt-a" href="https://www.movilidadbogota.gov.co/web/plataformas_tecnologicas_para_pedir_un_taxi" style="vertical-align: middle; padding-top: 1.05rem;">Plataformas tecnológicas habilitadas<br>para el servicio de taxi en Bogotá</a></div> --></div>
	</div>

	<hr>
	<div class="row">
		<div class="col-12">
			<h1 class="pt-h1">Cuánto vale tomar un taxi en Bogotá</h1>

			<p class="pt-p">Para la liquidación de la tarifa de taxi se debe tener en cuenta el mecanismo de cobro empleado: taxímetro o plataforma tecnológica.</p>

			<h2 class="pt-h1">Tarifas para cobro por taxímetro</h2>

			<p class="pt-p">Para la liquidación de la tarifa del servicio de transporte público individual tipo taxi y sus recargos, se deben tener en cuenta los siguientes parámetros.</p>
		</div>
		&nbsp;

		<div class="col-12 align-self-center justify-content-center">
			<div class="d-flex text-center justify-content-center align-items-center">
				<div class="col-sm-10 center-block">
					<table class="w-8 table table-responsive table-mov table-hover mb-0">
						<tbody>
							<tr>
								<th class="tbl-rw-th" style="width: 40%;">Item</th>
								<th class="tbl-rw-th" style="width: 30%;">Número de Unidades</th>
								<th class="tbl-rw-th" style="width: 30%;">Valor a pagar</th>
							</tr>
							<tr>
								<td class="tbl-row-pr">Valor unidad cada 100 metros</td>
								<td class="tbl-row-sc">1</td>
								<td class="tbl-row-sc">$125</td>
							</tr>
							<tr>
								<td class="tbl-row-pr">Banderazo o Arranque</td>
								<td class="tbl-row-sc">28</td>
								<td class="tbl-row-sc">$3.500</td>
							</tr>
							<tr>
								<td class="tbl-row-pr">Valor por cada 24 segundos de espera</td>
								<td class="tbl-row-sc">1</td>
								<td class="tbl-row-sc">$125</td>
							</tr>
							<tr>
								<td class="tbl-row-pr">Recargo hacia y desde el Aeropuerto o Puente Aéreo</td>
								<td class="tbl-row-sc">50</td>
								<td class="tbl-row-sc">$6.300</td>
							</tr>
							<tr>
								<td class="tbl-row-pr">Recargo nocturno (20:00 horas a 05:00 horas), dominical y/o festivo</td>
								<td class="tbl-row-sc">24</td>
								<td class="tbl-row-sc">$3.000</td>
							</tr>
							<tr>
								<td class="tbl-row-pr">Carrera mínima</td>
								<td class="tbl-row-sc">50</td>
								<td class="tbl-row-sc">$6.300</td>
							</tr>
							<tr>
								<td class="tbl-row-pr">Recargo por servicio puerta a puerta</td>
								<td class="tbl-row-sc">9</td>
								<td class="tbl-row-sc">$1.100</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="3 ">&nbsp;</td>
							</tr>
						</tfoot>
					</table>

					<p class="m-0 p-0 f-table text-center"><small><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=153453#:~:text=DECRETA%3A,art%C3%ADculo%202%20del%20presente%20decreto." rel="noopener noreferrer" target="_blank">Fuente: Decreto 086 de 2024</a></small></p>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<h1 class="pt-h1">Tarifas para cobro por plataforma tecnológica</h1>

			<p class="pt-p">Si el mecanismo de liquidación es mediante plataforma tecnológica, los parámetros de cobro serán:</p>
		</div>
		&nbsp;

		<div class="col-12 align-self-center justify-content-center">
			<div class="d-flex text-center justify-content-center align-items-center">
				<div class="col-sm-10 center-block">
					<table class="w-8 table table-responsive table-mov table-hover mb-0">
						<tbody>
							<tr>
								<th class="tbl-rw-th" style="width: 40% !important;">Ítem</th>
								<th class="tbl-rw-th" style="width: 20%;">Equivalencia en km</th>
								<th class="tbl-rw-th" style="width: 20%;">Valor a pagar sin factor de calidad</th>
								<th class="tbl-rw-th" style="width: 20%;">Valor a pagar con factor de calidad</th>
							</tr>
							<tr>
								<td class="tbl-row-pr">Costo por Kilómetro</td>
								<td class="tbl-row-sc">1</td>
								<td class="tbl-row-sc">$1.296</td>
								<td class="tbl-row-sc">$1.418</td>
							</tr>
							<tr>
								<td class="tbl-row-pr">Banderazo o Arranque</td>
								<td class="tbl-row-sc">2,8</td>
								<td class="tbl-row-sc">$3.600</td>
								<td class="tbl-row-sc">$4.000</td>
							</tr>
							<tr>
								<td class="tbl-row-pr">Recargo hacia y desde el Aeropuerto o Puente Aéreo</td>
								<td class="tbl-row-sc">5</td>
								<td class="tbl-row-sc">$6.500</td>
								<td class="tbl-row-sc">$7.100</td>
							</tr>
							<tr>
								<td class="tbl-row-pr">Recargo nocturno (20:00 horas a 05:00 horas), dominical y/o festivo</td>
								<td class="tbl-row-sc">2,4</td>
								<td class="tbl-row-sc">$3.100</td>
								<td class="tbl-row-sc">$3.400</td>
							</tr>
							<tr>
								<td class="tbl-row-pr">Carrera mínima</td>
								<td class="tbl-row-sc">5</td>
								<td class="tbl-row-sc">$6.500</td>
								<td class="tbl-row-sc">$7.100</td>
							</tr>
							<tr>
								<td class="tbl-row-pr">Recargo por el servicio puerta a puerta</td>
								<td class="tbl-row-sc">0,9</td>
								<td class="tbl-row-sc">$1.200</td>
								<td class="tbl-row-sc">$1.300</td>
							</tr>
							<tr>
								<td class="tbl-row-pr">Factor de seguridad vial</td>
								<td class="tbl-row-sc">&nbsp;</td>
								<td class="tbl-row-sc">$500</td>
								<td class="tbl-row-sc">$500</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="4">&nbsp;</td>
							</tr>
						</tfoot>
					</table>

					<p class="m-0 p-0 f-table text-center"><small><a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=153453#:~:text=DECRETA%3A,art%C3%ADculo%202%20del%20presente%20decreto." rel="noopener noreferrer" target="_blank">Fuente: Decreto 086 de 2024</a></small></p>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<p class="pt-p">En este caso, la tarifa es liquidada automáticamente por la plataforma tecnológica antes de iniciar la carrera , es mostrada en la pantalla y se calcula con la distancia del recorrido y la información de tráfico de la ciudad.</p>

			<p class="pt-p">Los valores asociados a factor de calidad aplican para quienes además de implementar el cobro a través de las plataformas, cumplen las características descritas en el <a class="pt-a" href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=72264">Art.16 del Decreto 568 de 2017</a> o que sean vehículos de propulsión exclusivamente eléctrica.</p>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">&nbsp;
			<h1 class="pt-h1">¿Qué es la Tarjeta de Control?</h1>

			<div class="text-center "><img alt="Imagen con ejemplo de la tarjeta de control" class="pt-img" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Temas/2024-07-09/tarjeta_de_control.png" title="Tarjeta de control" width="90%">
				<p class="m-0 p-0 f-table text-center"><small>Tarjeta de control</small></p>
			</div>
			&nbsp;

			<p class="pt-p">La Tarjeta de Control es un documento individual e intransferible que le expide la empresa de transporte a cada conductora o conductor.</p>

			<p class="pt-p">Este documento acredita al conductor o conductora como la persona autorizada para desarrollar esta actividad, bajo la responsabilidad de la empresa de transporte debidamente habilitada a la que se encuentra vinculado el vehículo.</p>

			<p class="pt-p">La tarjeta de control se encuentre ubicada en la parte trasera del asiento del copiloto y que en ella se debe encontrar mínimo siguiente información:</p>

			<ul>
				<li class="pt-li" type="disc">Fotografía reciente del conductor.</li>
				<li class="pt-li" type="disc">Número de la tarjeta.</li>
				<li class="pt-li" type="disc">Nombre completo del conductor.</li>
				<li class="pt-li" type="disc">Grupo sanguíneo e información de la EPS y ARL a las que el conductor se encuentra afiliado.</li>
				<li class="pt-li" type="disc">Nombre o razón social de la empresa y número de identificación tributaria.</li>
				<li class="pt-li" type="disc">Letras y números correspondientes a las placas del vehículo que opera.</li>
				<li class="pt-li" type="disc">Firma y sello de la empresa.</li>
				<li class="pt-li" type="disc">Número interno del vehículo.</li>
				<li class="pt-li" type="disc">Información relacionada con el valor de las tarifas vigentes.</li>
			</ul>

			<p class="pt-p">Las empresas habilitadas para prestar el servicio de Taxi en el nivel básico en Bogotá no permitirán, bajo ningún caso, la prestación del servicio por parte de conductoras o conductores que no cuenten con su respectiva Tarjeta de Control vigente.</p>

			<p class="pt-p">La vigencia de la Tarjeta de Control es de un mes calendario (Resolución 2020 de 2017 anexo 1, numeral 5) y por tanto debe ser refrendada por la empresa de taxi mensualmente con dicha periodicidad.</p>
		</div>
	</div>
	&nbsp;

	<div class="row">
		<div class="col-sm-12">
			<h1 class="pt-h1">Recomendaciones para usuarias y usuarios de taxi en Bogotá</h1>

			<ol>
				<li class="pt-li">Antes de entrar al vehículo verifique que la información contenida en la tarjeta de control, que debe ir en el espaldar de la silla del copiloto, corresponde a la persona y vehículo que lo está transportando.</li>
				<li class="pt-li">Los usuarios pueden validar la anterior información a través de la página web SIMUR https://www.simur.gov.co/conductores-de-taxi ingresando el número de la placa del vehículo o de la Tarjeta de Control.</li>
				<li class="pt-li">Revise que el vehículo se encuentre limpio y que cuente con cinturones de seguridad en funcionamiento. Utilícelos tan pronto ingrese al vehículo.</li>
				<li class="pt-li">Confirme que el conductor ponga en funcionamiento el taxímetro al iniciar la carrera y que marque las unidades indicadas para el arranque o banderazo.</li>
				<li class="pt-li">Si solicitó el taxi a través de una plataforma tecnológica tenga en cuenta que esta indicará el precio de la carrera al inicio y que este no cambia a lo largo de la misma.</li>
				<li class="pt-li">Actualmente la ciudad de Bogotá cuenta, bajo el esquema de piloto, con 46 taxis eléctricos activos y 40 en operación, de los cuales 38 tienen color blanco azul y 2 color verde, estos tienen una tarifa del servicio igual a la del servicio básico.</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-8 col-xs-offset-2"><br>
			<img alt="Taxi eléctrico de Bogotá" class="img-responsive w-100 pt-img" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Temas/2022-04-07/taxi1.jpg">
			<p class="m-0 p-0 f-table text-center"><small>Foto: cortesía Taxatelite</small></p>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-8 col-xs-offset-2"><br>
			<img alt="Taxi eléctrico de Bogotá" class="img-responsive w-100 pt-img" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Temas/2022-04-07/taxi2.jpg">
			<p class="m-0 p-0 f-table text-center"><small>Foto: Secretaría Distrital de Movilidad</small></p>
		</div>
	</div>
	&nbsp;

	<div class="row">
		<div class="col-sm 12">
			<h1 class="pt-h1">Cómo interponer una queja por el servicio de taxi</h1>

			<p class="pt-p">Para interponer una queja por el servicio de taxi en Bogotá, es importante identificar:</p>

			<ul><br>
				<li class="pt-li" type="disc">El motivo y el detalle de la queja</li>
				<li class="pt-li" type="disc">La placa y empresa del vehículo</li>
				<li class="pt-li" type="disc">Si se pidió por teléfono o por plataforma</li>
				<li class="pt-li" type="disc">El nombre de la empresa o la plataforma</li>
				<li class="pt-li" type="disc">El número de unidades que marcó el taxímetro</li>
				<li class="pt-li" type="disc">La fecha y hora del servicio</li>
				<li class="pt-li" type="disc">El origen y destino de la carrera</li>
				<li class="pt-li" type="disc">Los datos de contacto de quien interpone la queja</li>
			</ul>

			<p class="pt-p">La queja se puede interponer:</p>

			<p class="pt-p"><strong>Por teléfono:</strong>marcando la línea 195 de atención al ciudadano de la Alcaldía de Bogotá</p>

			<p class="pt-p"><strong>Por Internet:</strong>en el portal Bogotá te Escucha <a class="pt-a" href="https://bogota.gov.co/sdqs/">www.bogota.gov.co/sdqs</a> de la Alcaldía de Bogotá</p>
		</div>
	</div>
	&nbsp;

	<div class="row">
		<div class="col-sm-12">
			<h1 class="pt-h1">“LOS TAXISTAS DE BOGOTÁ HACEMOS UN PACTO POR LA VIDA”</h1>

			<ul>
				<li class="pt-li">Aseamos nuestras manos y usamos tapabocas</li>
				<li class="pt-li">Prestamos servicios a través de call center y plataformas tecnológicas</li>
				<li class="pt-li">Limpiamos nuestro vehículo al menos tres veces al día</li>
				<li class="pt-li">Cobramos la tarifa justa</li>
				<li class="pt-li">Respetamos los límites de velocidad y las señales de tránsito</li>
				<li class="pt-li">Mejoramos la experiencia de viaje</li>
				<li class="pt-li">Cuidamos a los usuarios, ciclistas, peatones y a todos los actores viales</li>
			</ul>
		</div>
	</div>
</div>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ --><!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type="text/css">.field-item.even>h2 {
        visibility: hidden;
        margin-top: -20px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .taxis {
        font-size: 13px !important;
        line-height: 1.4 !important;
        max-width: 980px;
    }

    /*
    .taxis [class*='col-'] {
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

    .pt-a {
        font-size: 1em;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-decoration: none;
    }

    .pt-p {
        font-size: 1.4em;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-decoration: none;
        text-align: justify;
    }

    .pt-li {
        font-size: 1.4em;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-decoration: none;
        text-align: justify;
        line-height: 1.48;
    }

    p small {
        font-size: 0.9em;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-decoration: none;
        text-align: justify;
    }

    fieldset {
        min-width: 0;
        width: 100%;
    }

    .pt-h1 {
        font-size: 1.6em;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 900;
        font-weight: bold;
    }

    .pt-h2 {
        font-size: 1.4em;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 900;
        font-weight: bold;
    }

    .header {
        padding-top: 0px;
        padding-bottom: 20px;
        /* background: url("https://www.movilidadbogota.gov.co/web/sites/default/files/Temas/2021-04-09/pieza_2_-_header.png"); */
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
    }


    .row-button {
        /* padding: 2em; */
        /* width: 100%; */
        display: flex;
    }

    .div-button {
        background-color: #FECE00;
        color: #000000ff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 600 !important;
        /* font-size: 1em; */
        text-align: center;
        border: none;
        min-height: 5rem;
    }

    .div-button:hover {
        background-color: #fea500;
        color: #000000ff;

    }

    table {
        min-width: 60% !important;
    }

    .tbl-rw-th {
        background-color: #FECE00 !important;
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 1.2em;
    }

    tr {
        border: #F5DD8D 3px solid;
    }

    td {
        background-color: #FECE00 !important;
    }

    .tbl-row-pr {
        background-color: #FFEFA4 !important;
    }

    .tbl-row-sc {
        background: #FFF7D0 !important;
        text-align: center;
    }

    /*Margin and Padding helpers*/
    /*xs*/

    .f-table {
        margin-top: -1.3rem;
    }

    .p-xs {
        padding: .25em;
    }

    .p-x-xs {
        padding: 0 .25em;
    }

    .p-y-xs {
        padding: .25em 0;
    }

    .p-t-xs {
        padding-top: .25em;
    }

    .p-r-xs {
        padding-right: .25em;
    }

    .p-b-xs {
        padding-bottom: .25em;
    }

    .p-l-xs {
        padding-left: .25em;
    }

    .m-xs {
        margin: .25em;
    }

    .m-x-xs {
        margin: 0 .25em;
    }

    .m-y-xs {
        margin: .25em 0;
    }

    .m-r-xs {
        margin-right: .25em;
    }

    .m-l-xs {
        margin-left: .25em;
    }

    .m-t-xs {
        margin-top: .25em;
    }

    .m-b-xs {
        margin-bottom: .25em;
    }

    /*sm*/

    @media (min-width:768px) {

        /*sm*/
        .p-sm {
            padding: .5em;
        }

        .p-x-sm {
            padding: 0 .5em;
        }

        .p-y-sm {
            padding: .5em 0;
        }

        .p-t-sm {
            padding-top: .5em;
        }

        .p-r-sm {
            padding-right: .5em;
        }

        .p-b-sm {
            padding-bottom: .5em;
        }

        .p-l-sm {
            padding-left: .5em;
        }

        .m-sm {
            margin: .5em;
        }

        .m-x-sm {
            margin: 0 .5em;
        }

        .m-y-sm {
            margin: .5em 0;
        }

        .m-t-sm {
            margin-top: .5em;
        }

        .m-r-sm {
            margin-right: .5em;
        }

        .m-b-sm {
            margin-bottom: .5em;
        }

        .m-l-sm {
            margin-left: .5em;
        }
    }

    /*md*/

    @media (min-width: 992px) {
        .p-md {
            padding: 1em;
        }

        .p-x-md {
            padding: 0 1em;
        }

        .p-y-md {
            padding: 1em 0;
        }

        .p-t-md {
            padding-top: 1em;
        }

        .p-r-md {
            padding-right: 1em;
        }

        .p-b-md {
            padding-bottom: 1em;
        }

        .p-l-md {
            padding-left: 1em;
        }

        .m-md {
            margin: 1em;
        }

        .m-x-md {
            margin: 0 1em;
        }

        .m-y-md {
            margin: 1em 0;
        }

        .m-t-md {
            margin-top: 1em;
        }

        .m-r-md {
            margin-right: 1em;
        }

        .m-b-md {
            margin-bottom: 1em;
        }

        .m-l-md {
            margin-left: 1em;
        }
    }

    /*lg*/

    @media (min-width: 1200px) {
        .p-lg {
            padding: 1.5em;
        }

        .p-x-lg {
            padding: 0 1.5em;
        }

        .p-y-lg {
            padding: 1.5em 0;
        }

        .p-t-lg {
            padding-top: 1.5em;
        }

        .p-r-lg {
            padding-right: 1.5em;
        }

        .p-b-lg {
            padding-bottom: 1.5em;
        }

        .p-l-lg {
            padding-left: 1.5em;
        }

        .m-lg {
            margin: 1.5em;
        }

        .m-x-lg {
            margin: 0 1.5em;
        }

        .m-y-lg {
            margin: 1.5em 0;
        }

        .m-t-lg {
            margin-top: 1.5em;
        }

        .m-r-lg {
            margin-right: 1.5em;
        }

        .m-b-lg {
            margin-bottom: 1.5em;
        }

        .m-l-lg {
            margin-left: 1.5em;
        }
    }

    /*xl*/

    .p-xl {
        padding: 3em;
    }

    .p-x-xl {
        padding: 0 3em;
    }

    .p-y-xl {
        padding: 3em 0;
    }

    .p-t-xl {
        padding-top: 3em;
    }

    .p-r-xl {
        padding-right: 3em;
    }

    .p-b-xl {
        padding-bottom: 3em;
    }

    .p-l-xl {
        padding-left: 3em;
    }

    .m-xl {
        margin: 3em;
    }

    .m-x-xl {
        margin: 0 3em;
    }

    .m-y-xl {
        margin: 3em 0;
    }

    .m-t-xl {
        margin-top: 3em;
    }

    .m-r-xl {
        margin-right: 3em;
    }

    .m-b-xl {
        margin-bottom: 3em;
    }

    .m-l-xl {
        margin-left: 3em;
    }

    .center-block {
        float: none;
    }

    .pt-img {
        padding: 10px;
        background-color: #FECE00;
        border-radius: 2px;
        margin: 3rem;
    }
</style>
