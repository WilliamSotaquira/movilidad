@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet"><!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ --><!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<div class="container-fluid seccion">
	<div class="encabezado">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="h1-heading"><strong>Transparencia y Acceso a la<br>
					Información Pública</strong></h1>
			</div>
		</div>
		<style type="text/css">.h1-heading {
            font-size: 30px;
            font-weight: normal;
            text-align: center;
            line-height: 1.2;
            color: rgba(77, 84, 31, 1);
            padding: 15px 30px;
            margin: 0px;
            border-bottom: 2px solid rgba(77, 84, 31, 1);
            margin-bottom: 20px;
         }
		</style>
	</div>

	<div class="video">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="embed-responsive embed-responsive-16by9 bs">
					<video controls="" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-08-2021/video_menu_transparencia.mp4" type="video/mp4" width="560" height="315">&nbsp;</video>
				</div>
			</div>
		</div>
		<style type="text/css">.video {
            background-color: #929292;
            padding: 35px;
            margin-left: 15px;
            margin-right: 15px;
         }

         .bs {
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
         }
		</style>
	</div>

	<div class="s1">
		<hr>
		<div class="row">
			<div class="col-xs-12">
				<p class="p-panel">La Secretaría Distrital de Movilidad pone a disposición de la ciudadanía la nueva sección de Transparencia y Acceso a la Información Pública, de acuerdo las directrices de la Ley 1712 de 2014 y la Resolución 1519 de 2020 de MinTIC.</p>

				<p class="p-panel">En esta sección encontrará información de interés de la Secretaría Distrital de Movilidad, los mecanismos de contacto, la estructura orgánica, talento humano, normatividad aplicable, planeación, mecanismos de control, contratación, trámites y servicios y gestión de la información.</p>
			</div>
		</div>

		<hr>
		<style type="text/css">.s1 {
            padding: 25px;
         }
		</style>
	</div>

	<div class="s2">
		<div class="row">
			<div class="col-xs-12">
				<div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist"><!-- collapseIMO -->
					<div class="panel panel-default">
						<div class="panel-heading ph-1" id="headingIMO" role="tab">
							<h4 class="panel-title"><a aria-controls="collapseIMO" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseIMO" role="button">Información mínima obligatoria </a></h4>
						</div>

						<div aria-labelledby="headingIMO" class="panel-collapse collapse" id="collapseIMO" role="tabpanel">
							<div class="panel-body">
								<ul>
									<li><a href="https://www.movilidadbogota.gov.co/web/organigrama" rel="noopener noreferrer" target="_blank">Estructura orgánica,</a> <a href="https://www.movilidadbogota.gov.co/web/Funciones_deberes" rel="noopener noreferrer" target="_blank">funciones y deberes,</a> <a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion" rel="noopener noreferrer" target="_blank">la ubicación de sus sedes y áreas,</a> <a href="https://www.movilidadbogota.gov.co/web/organigrama" rel="noopener noreferrer" target="_blank">divisiones o departamentos,</a> <a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion" rel="noopener noreferrer" target="_blank"> y sus horas de atención al público.</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/presupuesto" rel="noopener noreferrer" target="_blank">Presupuesto general,</a> <a href="https://www.movilidadbogota.gov.co/web/ejecucion_presupuestal" rel="noopener noreferrer" target="_blank"> ejecución presupuestal histórica anual</a> <a href="https://www.movilidadbogota.gov.co/web/ejecucion_presupuestal#collapse3" rel="noopener noreferrer" target="_blank"> y </a><a href="https://www.movilidadbogota.gov.co/web/plan_del_gasto_publico" rel="noopener noreferrer" target="_blank">planes de gasto público</a> para cada año fiscal</li>
									<li><a href="https://www.movilidadbogota.gov.co/web/funcionarios" rel="noopener noreferrer" target="_blank">Directorio que incluya el cargo</a>, direcciones de correo electrónico y teléfono del despacho de los empleados y funcionarios y las <a href="https://www.movilidadbogota.gov.co/web/asignacion-salarial-2019">escalas salariales</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/normatividad_aplicable" rel="noopener noreferrer" target="_blank">Normas generales y reglamentarias, políticas, lineamientos o manuales, las metas y objetivos de las unidades administrativas de conformidad con sus programas operativos y los resultados de las auditorías al ejercicio presupuestal e indicadores de desempeño</a></li>
									<li><a href="http://www.movilidadbogota.gov.co/web/plan_anual_de_adquisiciones" rel="noopener noreferrer" target="_blank">Plan de compras anual</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/procesos_de_contratacion" rel="noopener noreferrer" target="_blank">Los plazos de cumplimiento de los contratos contrataciones adjudicadas para la correspondiente vigencia en lo relacionado con funcionamiento e inversión, las obras públicas, los bienes adquiridos, arrendados y en caso de los servicios de </a><a href="https://www.simur.gov.co/biblioteca-digital/" rel="noopener noreferrer" target="_blank">estudios o investigaciones</a> deberá señalarse el tema específico, de conformidad con el artículo 74 de la Ley 1474 de 2011. En el caso de las personas naturales con contratos de prestación de servicios, deberá publicarse el objeto del contrato, monto de los honorarios y direcciones de correo electrónico, de conformidad con el formato de información de servidores públicos y contratistas</li>
									<!-- <li><a href="#" rel="noopener noreferrer" target="_blank">Plazos de cumplimiento de los contratos</a></li> -->
									<li><a href="https://www.movilidadbogota.gov.co/web/Plan_contra_corrupcion" rel="noopener noreferrer" target="_blank">Plan Anticorrupción y de Atención al Ciudadano</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/procesos_de_contratacion" rel="noopener noreferrer" target="_blank">Contrataciones en curso y un vínculo al sistema electrónico para la contratación pública o el que haga sus veces, a través del cual podrá accederse directamente a la información correspondiente al respectivo proceso contractual, en aquellos que se encuentren sometidas a dicho sistema, sin excepción</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/12-05-2022/pm04-m01_manual_de_servicio_a_la_ciudadania_v6._de_4052022.pdf" rel="noopener noreferrer" target="_blank">Servicio al público, normas, formularios y protocolos de atención</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/portafolio_tramites_y_servicios" rel="noopener noreferrer" target="_blank">Trámites</a> (normativa, proceso, costos y formatos o formularios).</li>
									<li><a href="https://www.movilidadbogota.gov.co/web/procesos-y-procedimientos" rel="noopener noreferrer" target="_blank">Procedimientos que se siguen para tomar decisiones en las diferentes áreas</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/historico_noticias" rel="noopener noreferrer" target="_blank">Decisiones y/o políticas que hayan adoptado y afecte al público, junto con sus fundamentos y toda interpretación autorizada de ella</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/informes_de_gestion" rel="noopener noreferrer" target="_blank">Informes de gestión, evaluación y auditoría del sujeto obligado</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/mecanismos_de_control_al_interior_de_la_entidad" rel="noopener noreferrer" target="_blank">Mecanismos internos</a> y<a href="https://www.movilidadbogota.gov.co/web/mecanismos-control-supervision" rel="noopener noreferrer" target="_blank"> externos de supervisión, notificación y vigilancia pertinente del sujeto obligado</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/procedimientos-lineamientos-políticas-adquisicion-compras" rel="noopener noreferrer" target="_blank">Procedimientos, lineamientos, políticas en materia de adquisiciones y compras, así como todos los datos de adjudicación y ejecución de contratos, incluidos concursos y licitaciones</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/tramites_y_servicios_virtuales" rel="noopener noreferrer" target="_blank">Mecanismo de presentación directa de solicitudes, quejas y reclamos a disposición del público en relación con acciones u omisiones del sujeto obligado, junto con un informe de todas las solicitudes, denuncias y los tiempos de respuesta del sujeto obligado</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/participacion-formulacion-politicas" rel="noopener noreferrer" target="_blank">Mecanismo o procedimiento por medio del cual el público pueda participar en la formulación de la política o el ejercicio de las facultades de ese sujeto obligado</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/registro-publicaciones" rel="noopener noreferrer" target="_blank">Registro de publicaciones que contenga los documentos publicados de conformidad con la presente ley y automáticamente disponibles,</a> <a href="https://www.movilidadbogota.gov.co/web/informacion-clasificada-reservada" rel="noopener noreferrer" target="_blank"> así como un Registro de Activos de Información</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/node/1654" rel="noopener noreferrer" target="_blank">Datos abiertos, para lo cual deberán contemplar las excepciones establecidas en el título 3 de la presente ley</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/informacion-clasificada-reservada" rel="noopener noreferrer" target="_blank">Registro de Activos de Información</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/informacion-clasificada-reservada" rel="noopener noreferrer" target="_blank">Índice de Información Clasificada y Reservada</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/esquema-publicacion-informacion" rel="noopener noreferrer" target="_blank">Esquema de Publicación de Información</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/programa-gestion-documental" rel="noopener noreferrer" target="_blank">Programa de Gestión Documental</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/tablas-retencion-documental" rel="noopener noreferrer" target="_blank">Tablas de Retención Documental</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/solicitudes_acceso_infomacion" rel="noopener noreferrer" target="_blank">Informe de solicitudes de acceso a la información señalado en el artículo 2.1.1.6.2 del presente Título</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-11-2020/resolucion_pago_de_copias_version_29.10.2020._financiera.pdf" rel="noopener noreferrer" target="_blank">Costos de reproducción de la información pública, con su respectiva motivación</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /collapseIMO --><!-- collapseUno -->

					<div class="panel panel-default">
						<div class="panel-heading ph-2" id="headingUno" role="tab">
							<h4 class="panel-title"><a aria-controls="collapseUno" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseUno" role="button">1. Información de la entidad </a></h4>
						</div>

						<div aria-labelledby="headingUno" class="panel-collapse collapse" id="collapseUno" role="tabpanel">
							<div class="panel-body">
								<p class="p-panel">En esta sección encontrará información relevante sobre la entidad sus funciones, procesos, directorios, calendario de actividades, entes que los vigilan, hojas de vida, entre otros.</p>

								<ol>
									<li><span class="enfasis_num">1.1.</span>Misión, visión, funciones y deberes

										<ul>
											<li><a href="https://www.movilidadbogota.gov.co/web/mision" rel="noopener noreferrer" target="_blank">Plan Estratégico / Misión y Visión.</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/Funciones_deberes" rel="noopener noreferrer" target="_blank">Funciones y Deberes</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/analisis_del_contexto" rel="noopener noreferrer" target="_blank">Análisis del Contexto</a></li>
										</ul>
									</li>
									<li><a href="https://www.movilidadbogota.gov.co/web/organigrama" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">1.2.</span>Estructura orgánica - Organigrama</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/procesos-y-procedimientos" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">1.3.</span>Mapas y Cartas descriptivas de los procesos</a></li>
									<li><a href="http://www.movilidadbogota.gov.co/web/puntos_de_atencion" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">1.4.</span>Directorio Institucional</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/funcionarios" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">1.5.</span>Directorio de servidores públicos, empleados o contratistas</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/directorio_entidades" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">1.6.</span>Directorio de entidades</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-12-2021/agremiaciones_actualizado_julio_-_diciembre_2021_web.xlsx" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">1.7.</span>Directorio de agremiaciones o asociaciones en las que participe</a></li>
									<li><span class="enfasis_num">1.8.</span>Servicio al público, normas, formularios y protocolos de atención
										<ul>
											<li><a href="https://www.movilidadbogota.gov.co/web/preguntas_frecuentes" rel="noopener noreferrer" target="_blank">Preguntas y respuestas frecuentes</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/derechos_y_deberes_de_los_ciudadanos" rel="noopener noreferrer" target="_blank">Derechos y Deberes de los Ciudadanos</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/16-05-2022/pm04-m01_manual_de_servicio_a_la_ciudadania_v6._de_4052022_1.pdf" rel="noopener noreferrer" target="_blank">Manual de Servicio al Ciudadano</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/glosario" rel="noopener noreferrer" target="_blank">Glosario</a></li>
										</ul>
									</li>
									<li><a href="https://www.movilidadbogota.gov.co/web/procesos-y-procedimientos" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">1.9.</span>Procedimientos que se siguen para tomar decisiones en las diferentes áreas</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/govi-sdqs/crear" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">1.10.</span>Mecanismo de presentación directa de solicitudes, quejas y reclamos a disposición del público en relación con acciones u omisiones del sujeto obligado</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/calendario_de_actividades" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">1.11.</span>Calendario de actividades y eventos</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/historico_noticias" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">1.12.</span>Información sobre decisiones que puede afectar al público</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/mecanismos-control-supervision" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">1.13.</span>Entes y autoridades que lo vigilan</a></li>
									<li><a href="https://serviciocivil.gov.co/transparencia/publicacion-hojas-de-vida" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">1.14.</span>Publicación de hojas de vida</a></li>
									<!-- <li><a href="#" target="_blank" rel="noopener noreferrer"><span class="enfasis_num">1.15.</span>Aporte público al empleo</a></li> --></ol>
							</div>
						</div>
					</div>
					<!-- /#collapseUno --><!-- collapseDos -->

					<div class="panel panel-default">
						<div class="panel-heading ph-2" id="headingDos" role="tab">
							<h4 class="panel-title"><a aria-controls="collapseDos" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseDos" role="button">2. Normativa </a></h4>
						</div>

						<div aria-labelledby="headingDos" class="panel-collapse collapse" id="collapseDos" role="tabpanel">
							<div class="panel-body">
								<p class="p-panel">Esta sección encontrará el acceso a las normas correspondientes al sujeto obligado.</p>
								<!-- collapseDosUno -->

								<div class="panel panel-default">
									<div class="panel-heading ph-3" id="headingDosUno" role="tab">
										<h4 class="panel-title"><a aria-controls="collapseDosUno" aria-expanded="true" data-parent="#headingDos" data-toggle="collapse" href="#collapseDosUno" role="button">2.1. Normativa de la entidad o autoridad </a></h4>
									</div>

									<div aria-labelledby="headingDosUno" class="panel-collapse collapse" id="collapseDosUno" role="tabpanel">
										<div class="panel-body">
											<ol>
												<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2021/copia_de_formato_matriz_17_09_2021.xlsx" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">2.1.1.</span>Leyes</a></li>
												<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2021/copia_de_formato_matriz_17_09_2021.xlsx" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">2.1.2.</span>Decreto Único Reglamentario</a></li>
												<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2021/copia_de_formato_matriz_17_09_2021.xlsx" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">2.1.3.</span>Normativa aplicable</a></li>
												<li><a href="https://registrodistrital.secretariageneral.gov.co/publico/actos-administrativos" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">2.1.4.</span>Vínculo al Diario o Gaceta Oficial.</a></li>
												<li><span class="enfasis_num">2.1.5.</span>Políticas, lineamientos y manuales.
													<ul>
														<li><a href="https://www.movilidadbogota.gov.co/web/politicas_lineamientos_y_manuales" rel="noopener noreferrer" target="_blank">Políticas, lineamientos y manuales</a></li>
														<li><a href="https://www.movilidadbogota.gov.co/web/POLITICAS_DE_SEGURIDAD_Y_PROTECCION_DE_DATOS_PERSONALES" rel="noopener noreferrer" target="_blank">Manual y políticas de seguridad de la información</a></li>
														<li><a href="https://www.movilidadbogota.gov.co/web/protocolos_eticos" rel="noopener noreferrer" target="_blank">Protocolos éticos</a></li>
														<li><a href="https://www.movilidadbogota.gov.co/web/conceptos-juridicos" rel="noopener noreferrer" target="_blank">Conceptos Jurídicos Secretaria Distrital de Movilidad</a></li>
														<li><a href="https://www.movilidadbogota.gov.co/web/Plan%20Sectorial" rel="noopener noreferrer" target="_blank">Plan estratégico sectorial</a></li>
													</ul>
												</li>
												<li><span class="enfasis_num">2.1.6.</span>Agenda Regulatoria
													<ul>
														<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/08-07-2022/agenda_regulatoria_actualizada_sdm_07_07_2022_0.xlsx" rel="noopener noreferrer" target="_blank">Agenda Regulatoria 2022</a></li>
														<li><a href="https://www.movilidadbogota.gov.co/web/proyecto_de_agenda_regulatoria_2022">Proyecto Agenda Regulatoria 2022</a></li>
													</ul>
												</li>
											</ol>
										</div>
									</div>
								</div>
								<!-- /#collapseDosUno --><!-- collapseDosDos -->

								<div class="panel panel-default">
									<div class="panel-heading ph-3" id="headingDosDos" role="tab">
										<h4 class="panel-title"><a aria-controls="collapseDosDos" aria-expanded="true" data-parent="#headingDos" data-toggle="collapse" href="#collapseDosDos" role="button">2.2. Búsqueda de normas </a></h4>
									</div>

									<div aria-labelledby="headingDosDos" class="panel-collapse collapse" id="collapseDosDos" role="tabpanel">
										<div class="panel-body">
											<ol>
												<li><a href="http://www.suin-juriscol.gov.co/" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">2.2.1.</span>Sistema Único de Información Normativa – SUIN</a></li>
												<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-09-2021/copia_de_formato_matriz_17_09_2021.xlsx" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">2.2.2.</span>Sistema de búsquedas de normas, propio de la entidad.</a></li>
											</ol>
										</div>
									</div>
								</div>
								<!-- /#collapseDosDos --><!-- collapseDosTres -->

								<div class="panel panel-default">
									<div class="panel-heading ph-3" id="headingDosTres" role="tab">
										<h4 class="panel-title"><a aria-controls="collapseDosTres" aria-expanded="true" data-parent="#headingDos" data-toggle="collapse" href="#collapseDosTres" role="button">2.3. Proyectos de normas para comentarios </a></h4>
									</div>

									<div aria-labelledby="headingDosTres" class="panel-collapse collapse" id="collapseDosTres" role="tabpanel">
										<div class="panel-body">
											<ol>
												<li><a href="https://legalbog.secretariajuridica.gov.co/regimen-legal-publico#/acto-admin-publico" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">2.3.1.</span>Proyectos normativos</a></li>
												<li><a href="https://legalbog.secretariajuridica.gov.co/regimen-legal-publico#/acto-admin-publico" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">2.3.2.</span>Comentarios y documento de respuesta a comentarios.</a></li>
											</ol>
										</div>
									</div>
								</div>
								<!-- /#collapseDosTres --></div>
						</div>
					</div>
					<!-- /#collapseDos --><!-- collapseTres -->

					<div class="panel panel-default">
						<div class="panel-heading ph-2" id="headingTres" role="tab">
							<h4 class="panel-title"><a aria-controls="collapseTres" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseTres" role="button">3. Contratación </a></h4>
						</div>

						<div aria-labelledby="headingTres" class="panel-collapse collapse" id="collapseTres" role="tabpanel">
							<div class="panel-body">
								<p class="p-panel">En esta sección encontrará información relevante sobre plan de adquisición, información contractual, ejecución de los contratos, entre otros.</p>

								<ol>
									<li><a href="http://www.movilidadbogota.gov.co/web/plan_anual_de_adquisiciones" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">3.1.</span>Plan Anual de Adquisiciones</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/formulariotransparenciasgc/" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">3.2.</span>Publicación de la información contractual</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/procesos_de_contratacion" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">3.3.</span>Publicación de la ejecución de los contratos</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/manuales_de_contratacion" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">3.4.</span>Manual de contratación, adquisición y/o compras</a></li>
									<li><span class="enfasis_num">3.5.</span>Formatos o modelos de contratos o pliegos tipo
										<div class="box-blockquote">
											<blockquote>
												<p>Corresponde a la Agencia Nacional de Contratación Pública, Colombia Compra Eficiente, o a quien haga sus veces adoptar "documentos tipo que serán de obligatorio cumplimiento en la actividad contractual de todas las entidades sometidas al Estatuto General de Contratación de la Administración Pública", de conformidad con lo establecido en el parágrafo 7 del artículo 2 de la Ley 1150 de 2007, que fue adicionado por el artículo 4 de la Ley 1882 de 2018.</p>

												<p>Los documentos tipo adoptados pueden ser consultados en la <a href="https://www.colombiacompra.gov.co/documentos-tipo/documentos-tipo">Agencia Nacional de Contratación Pública Colombia Compra Eficiente</a>.</p>
											</blockquote>
										</div>
									</li>
								</ol>
							</div>
						</div>
					</div>
					<!-- /#collapseTres --><!-- collapseCuatro -->

					<div class="panel panel-default">
						<div class="panel-heading ph-2" id="headingCuatro" role="tab">
							<h4 class="panel-title"><a aria-controls="collapseCuatro" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseCuatro" role="button">4. Planeación, Presupuesto e Informes </a></h4>
						</div>

						<div aria-labelledby="headingCuatro" class="panel-collapse collapse" id="collapseCuatro" role="tabpanel">
							<div class="panel-body">
								<p class="p-panel">En esta sección encontrará información sobre asuntos presupuestales y de planeación, control interno, auditoría e Informes de la entidad.</p>

								<ol>
									<li><span class="enfasis_num">4.1.</span>Presupuesto general de ingresos, gastos e inversión

										<ul>
											<li><a href="https://www.movilidadbogota.gov.co/web/estados_financieros" rel="noopener noreferrer" target="_blank">Ingresos y gastos</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/presupuesto" rel="noopener noreferrer" target="_blank">Presupuesto</a></li>
											<li><a href="http://www.movilidadbogota.gov.co/web/modificaciones-presupuestales" rel="noopener noreferrer" target="_blank">Modificaciones presupuestales</a></li>
										</ul>
									</li>
									<li><a href="https://www.movilidadbogota.gov.co/web/ejecucion_presupuestal" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">4.2.</span>Ejecución presupuestal</a></li>
									<li><span class="enfasis_num">4.3.</span>Plan de Acción
										<ul>
											<li><a href="https://www.movilidadbogota.gov.co/web/planes_institucionales_y_estrategicos" rel="noopener noreferrer" target="_blank">Planes Institucionales y Estratégicos (Decreto 612 de 2018 y Otros Planes)</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/plan_del_gasto_publico" rel="noopener noreferrer" target="_blank">Plan de gasto público</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/plan_estrategico_institucional" rel="noopener noreferrer" target="_blank">Plan estratégico institucional</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/planes_de_accion_anual" rel="noopener noreferrer" target="_blank">Planes de acción anual</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/estatuto_anticorrupcion" rel="noopener noreferrer" target="_blank">Estatuto Anticorrupción (Ley 1474 de 2011)</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/programas_y_proyectos" rel="noopener noreferrer" target="_blank">Programas y proyectos</a></li>
										</ul>
									</li>
									<li><a href="https://www.movilidadbogota.gov.co/web/programas_y_proyectos" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">4.4.</span>Proyectos de Inversión</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/informes_de_empalme" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">4.5.</span>Informes de empalme</a></li>
									<li><span class="enfasis_num">4.6.</span>Información pública y/o relevante.
										<ul>
											<li><a href="https://www.movilidadbogota.gov.co/web/estados_financieros" rel="noopener noreferrer" target="_blank">Estados financieros</a></li>
										</ul>
									</li>
									<li><span class="enfasis_num">4.7.</span>Informes de gestión, evaluación y auditoría.
										<ul>
											<li><a href="https://www.movilidadbogota.gov.co/web/informes_de_gestion" rel="noopener noreferrer" target="_blank">Informe de Gestión</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/reportes_de_control_interno" rel="noopener noreferrer" target="_blank">Informe de rendición de cuentas ante la Contraloría General de la República, o a los organismos de Contraloría o Control territoriales</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/informes-rendicion-cuentas" rel="noopener noreferrer" target="_blank">Informe de rendición de cuentas a la ciudadanía</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/informes_entes_de_control" rel="noopener noreferrer" target="_blank">Informes a organismos de inspección, vigilancia y control</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/reportes_de_control_interno" rel="noopener noreferrer" target="_blank">Planes de mejoramiento</a></li>
										</ul>
									</li>
									<li><span class="enfasis_num">4.8.</span>Informes de la Oficina de Control Interno
										<ul>
											<li><a href="https://www.movilidadbogota.gov.co/web/reportes_de_control_interno" rel="noopener noreferrer" target="_blank">Informe pormenorizado</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/reportes_de_control_interno" rel="noopener noreferrer" target="_blank">Otros informes y/o consultas a bases de datos o sistemas de información, conforme le aplique</a></li>
										</ul>
									</li>
									<li><a href="https://www.movilidadbogota.gov.co/web/defensa-judicial" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">4.9.</span>Informe sobre Defensa Pública y Prevención del Daño Antijurídico</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/informacion_pqrs" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">4.10.</span>Informes mensuales sobre acceso a información, quejas y reclamos</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/gestion_de_riesgos" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">4.11.</span>Gestión de los Riesgos</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/analisis_del_contexto" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">4.12.</span>Análisis del Contexto</a></li>
								</ol>
							</div>
						</div>
					</div>
					<!-- /#collapseCuatro --><!-- collapseCinco -->

					<div class="panel panel-default">
						<div class="panel-heading ph-2" id="headingCinco" role="tab">
							<h4 class="panel-title"><a aria-controls="collapseCinco" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseCinco" role="button">5. Trámites </a></h4>
						</div>

						<div aria-labelledby="headingCinco" class="panel-collapse collapse" id="collapseCinco" role="tabpanel">
							<div class="panel-body">
								<p class="p-panel">En esta sección encontrará información de los Trámites.</p>

								<ol>
									<li><a href="https://www.movilidadbogota.gov.co/web/tramites_y_servicios_virtuales" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">5.1.</span>Trámites y Servicios en Linea</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/portafolio_tramites_y_servicios" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">5.2.</span>Portafolio de Trámites y Servicios</a></li>
									<li><a href="https://www.gov.co/ficha-tramites-y-servicios/" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">5.3.</span>Trámites y Servicios Portal GOV.CO</a></li>
									<li><a href="https://www.funcionpublica.gov.co/web/suit" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">5.4.</span>Trámites y Servicios Portal SUIT</a></li>
								</ol>
							</div>
						</div>
					</div>
					<!-- /#collapseCinco --><!-- collapseSeis -->

					<div class="panel panel-default">
						<div class="panel-heading ph-2" id="headingSeis" role="tab">
							<h4 class="panel-title"><a aria-controls="collapseSeis" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseSeis" role="button">6. Participa </a></h4>
						</div>

						<div aria-labelledby="headingSeis" class="panel-collapse collapse" id="collapseSeis" role="tabpanel">
							<div class="panel-body">
								<p class="p-panel">En esta sección encontrará información mecanismos de participación.</p>

								<ol>
									<li><a href="https://www.movilidadbogota.gov.co/web/participacion_para_la_identificacion_de_problemas_y_diagnostico_de_necesidades"><span class="enfasis_num">6.1.</span>Participación para la identificación de problemas y diagnóstico de necesidades</a></li>
									<li><a href="#"><span class="enfasis_num">6.2.</span>Planeación y/o presupuesto participativo</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/planes_institucionales_y_estrategicos" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">6.3.</span>Participación y consulta ciudadana de proyectos, normas, políticas o programas</a></li>
									<li><span class="enfasis_num">6.4.</span>Colaboración e innovación abierta
										<ul>
											<li><a href="https://www.movilidadbogota.gov.co/web/transparencia/conoce_propone_y_prioriza" rel="noopener noreferrer" target="_blank">Conoce, Propone y Prioriza</a></li>
										</ul>
									</li>
									<li><span class="enfasis_num">6.5.</span><a href="https://www.movilidadbogota.gov.co/web/rendicion_de_cuentas_locales" rel="noopener noreferrer" target="_blank">Rendición de Cuentas locales</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/gestion_social" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">6.6.</span>Gestión Social</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/centros-locales-de-movilidad" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">6.7.</span>Control ciudadano</a></li>
								</ol>
							</div>
						</div>
					</div>
					<!-- /#collapseSeis --><!-- collapseSiete -->

					<div class="panel panel-default">
						<div class="panel-heading ph-2" id="headingSiete" role="tab">
							<h4 class="panel-title"><a aria-controls="collapseSiete" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseSiete" role="button">7. Datos abiertos </a></h4>
						</div>

						<div aria-labelledby="headingSiete" class="panel-collapse collapse" id="collapseSiete" role="tabpanel">
							<div class="panel-body">
								<p class="p-panel">En esta sección encontrará el repositorio de documentos y la sección de datos abiertos.</p>

								<ol>
									<li><span class="enfasis_num">7.1.</span>Instrumentos de gestión de la información

										<ol>
											<li><a href="https://datosabiertos.bogota.gov.co/dataset/activos-de-informacion-secretaria-de-movilidad" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">7.1.1.</span>Registros De Activos De Información</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-11-2021/indice_de_informacion_clasificada_y_de_reservada_sdm.xlsx" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">7.1.2.</span>Índice De Información Clasificada Y Reservada</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/esquema-publicacion-informacion" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">7.1.3.</span>Esquema De Publicación De La Información</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/informacion-clasificada-reservada" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">7.1.4.</span>Tipos De Datos - Información Clasificada o Reservada</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/programa-gestion-documental" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">7.1.5.</span>Programa De Gestión Documental</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/tablas-retencion-documental" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">7.1.6.</span>Tablas De Retención Documental</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/29-06-2022/resolucion_sic_2021_1728326.pdf" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">7.1.7.</span>Resolución Aprobación Sistema Integrado de Conservación - SIC</a></li>
										</ol>

										<ul>
											<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-11-2020/resolucion_pago_de_copias_version_29.10.2020._financiera.pdf" rel="noopener noreferrer" target="_blank">Costos de reproducción de información pública</a></li>
										</ul>
									</li>
									<li><a href="https://www.movilidadbogota.gov.co/web/node/1654" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">7.2.</span>Sección de Datos Abiertos</a>
										<ol>
											<li><a href="https://www.simur.gov.co/datos-abiertos" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">7.2.1.</span>Datos Abiertos SIMUR</a></li>
											<li><a href="https://datosabiertos.bogota.gov.co/dataset?organization=sdm" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">7.2.2.</span>Datos Abiertos GOV.co </a></li>
										</ol>
									</li>
								</ol>
							</div>
						</div>
					</div>
					<!-- /#collapseSiete --><!-- collapseOcho -->

					<div class="panel panel-default">
						<div class="panel-heading ph-2" id="headingOcho" role="tab">
							<h4 class="panel-title"><a aria-controls="collapseOcho" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseOcho" role="button">8. Información específica para Grupos de Interés </a></h4>
						</div>

						<div aria-labelledby="headingOcho" class="panel-collapse collapse" id="collapseOcho" role="tabpanel">
							<div class="panel-body">
								<p class="p-panel">En esta sección encontrará información dirigida a niños, niñas y adolescentes; mujeres, entre otros.</p>

								<ol>
									<li><span class="enfasis_num">8.1.</span>Información para niños, niñas y adolescentes

										<ol>
											<li><a href="https://www.movilidadbogota.gov.co/web/portal-infantil" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">8.1.1.</span>Portal Infantil</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/28-12-2021/ninos_ninas_y_adolescentes_julio_-_diciembre_2021_web.xlsx" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">8.1.2.</span>Información de interés para niñas, niños y adolescentes</a></li>
										</ol>
									</li>
									<li><a href="#"><span class="enfasis_num">8.2.</span>Información para Mujeres</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/informacion-poblacion-vulnerable"><span class="enfasis_num">8.3.</span>Información para población vulnerable</a></li>
									<!-- <li><a href="#" target="_blank" rel="noopener noreferrer">8.3 Informes rendición de cuentas construcción de paz</a></li>
                <li><a href="#" target="_blank" rel="noopener noreferrer">8.4 Informes de los indicadores de grupos étnicos de paz</a></li> -->
									<li><span class="enfasis_num">8.4.</span>Otros Idiomas:
										<ol>
											<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/27-11-2020/idioma_kichwa.pdf" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">8.4.1.</span>Idioma Kichwa</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-12-2020/idioma-muisca.pdf" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">8.4.2.</span>Idioma Muisca</a></li>
										</ol>
									</li>
								</ol>
							</div>
						</div>
					</div>
					<!-- /#collapseOcho --><!-- collapseNueve -->

					<div class="panel panel-default">
						<div class="panel-heading ph-2" id="headingNueve" role="tab">
							<h4 class="panel-title"><a aria-controls="collapseNueve" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseNueve" role="button">9. Obligación de reporte de información </a></h4>
						</div>

						<div aria-labelledby="headingNueve" class="panel-collapse collapse" id="collapseNueve" role="tabpanel">
							<div class="panel-body">
								<p class="p-panel">En esta sección encontrará otra información relevante de la entidad.</p>

								<ol>
                        
									<li><span class="enfasis_num">9.1.</span>Informes, estudios, investigaciones y otras publicaciones
										<ul>
                                 <li><a href="https://www.movilidadbogota.gov.co/web/instancias_de_coordinacion" rel="noopener noreferrer" target="_blank">Instancias de Coordinación</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/informes_de_siniestralidad_sitp_asociada_a_exceso_de_velocidad" rel="noopener noreferrer" target="_blank">Informes de siniestralidad SITP asociada a exceso de velocidad</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/informes_de_ciclovias_temporales" rel="noopener noreferrer" target="_blank">Informes de Ciclovías Temporales</a></li>
											<li><a href="https://www.movilidadbogota.gov.co/web/libros_y_cartillas" rel="noopener noreferrer" target="_blank">Libros y cartillas</a></li>
										</ul>
									</li>
									<li><a href="https://www.movilidadbogota.gov.co/web/eliminaciones_documentales_trd" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">9.2.</span>Eliminaciones Documentales - TRD</a></li>
									<li><span class="enfasis_num">9.3.</span>Convocatorias
										<ul>
											<li><a href="https://www.movilidadbogota.gov.co/web/movilab" rel="noopener noreferrer" target="_blank">Movilab</a></li>
										</ul>
									</li>
									<li><a href="https://www.movilidadbogota.gov.co/web/modelo_integrado_de_planeacion_y_gestion" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">9.4.</span>Modelo Integrado de Planeacion y Gestión (MIPG) </a></li>
									<li><span class="enfasis_num">9.5.</span>Gestión del Talento Humano
										<ul>
											<li><a href="https://www.movilidadbogota.gov.co/web/nombramientos" rel="noopener noreferrer" target="_blank">Nombramientos</a></li>
											<li><a href="Comisión Nacional del Servicio Civil" rel="noopener noreferrer" target="_blank">Comisión Nacional del Servicio Civil</a></li>
											<li><a href="https://talentonopalanca.gov.co/index.html" rel="noopener noreferrer" target="_blank">Trabaja con nosotros</a></li>
										</ul>
									</li>
									<li><a href="https://www.movilidadbogota.gov.co/web/canal_anticorrupcion" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">9.6.</span>Denuncias por actos de corrupción</a></li>
									<li><a href="https://www.movilidadbogota.gov.co/web/agenda_directivos" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">9.7.</span>Agenda Directivos</a></li>
									<!-- <li><a href="#" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">9.7.</span>Accesibilidad</a></li> --><!-- <li><a href="#" rel="noopener noreferrer" target="_blank"><span class="enfasis_num">9.8.</span>Datos Personales</a></li> --></ol>
							</div>
						</div>
					</div>
					<!-- /#collapseNueve --></div>
			</div>
		</div>

		<hr>
		<div class="row">
			<div class="col-xs-12"><img alt="" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/13-11-2019/encuesta-transparencia.jpg"></div>
		</div>
	</div>
</div>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ --><!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type="text/css">.field-item.even h2 {
      visibility: hidden;
      margin-top: -50px;
   }

   .region-content {
      padding: 0px;
      overflow: hidden;
   }

   .seccion {

      max-width: 980px;
      font-family: 'Montserrat', sans-serif;
      font-size: 13px;
      font-weight: normal;
      text-align: justify;
      line-height: 1.4;
      color: rgba(25, 25, 25, 1);
   }

   /*
   .seccion [class*='col-'] {
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
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<style type="text/css">.w-100 {
      width: 100%;
   }


   .p-panel {
      font-size: 16px;
      font-weight: normal;
      text-align: justify;
      line-height: 1.4;
      color: rgba(25, 25, 25, 1);
      margin-left: 15px;
      margin-right: 15px;
   }

   .panel-title {
      font-size: 18px;
      font-weight: 700;
      text-align: justify;
      line-height: 1;
      color: rgba(25, 25, 25, 1);
   }


   .node-unpublished {
      background-color: #ffffff;
   }

   .panel-heading {
      background-color: #c9d64f !important;
      font-size: 18px;
      font-weight: normal;
      text-align: justify;
      line-height: 1.4;
      color: rgba(25, 25, 25, 1);
   }

   .ph-1 {
      background-color: #4D541F !important;

   }

   .ph-1 a {
      color: #FFFFFF !important;
   }

   .ph-1 a:hover {
      color: #c9d64f !important;
   }

   .ph-2 {
      background-color: #909D2A !important;
   }

   .ph-2 a {
      color: #000 !important;
   }

   .ph-2 a:hover {
      color: #4D541F !important;
   }

   .ph-3 {
      background-color: #A6B517 !important;
   }

   .ph-3 a {
      color: #212121 !important;
   }

   .ph-3 a:hover {
      color: #4D541F !important;
   }

   .panel-body {
      background-color: #F0F2D9 !important;
      font-size: 16px;
      font-weight: 500;
      text-align: justify;
      line-height: 1.4;
      color: rgba(25, 25, 25, 1);
   }

   .s2 ol {
      list-style: none;
      /* Remove list bullets */
      /* padding: 0; */
      /* margin: 3px; */

   }

   .s2 li {
      margin-top: 6px;
   }

   .s2 li a {
      font-size: 16px;
      font-weight: 500;
      text-align: justify;
      line-height: 1.4;
      color: rgba(25, 25, 25, 1);
      text-decoration: none;

   }

   .s2 li a:hover {
      color: rgba(77, 84, 31, 1);
      font-weight: 700;

   }

   .s2 .enfasis_num {
      font-weight: 700;
      color: rgba(0, 0, 0, 1);
      margin-right: 8px;

   }
   .box-blockquote{
      padding: 15px;
   }
   .box-blockquote blockquote{
      font-size: 16px;
      font-weight: normal;
      text-align: justify;
      line-height: 1.4;
      color: rgba(25, 25, 25, 1);
      border-left: 3px solid rgba(77, 84, 31, 1);
   }
.box-blockquote blockquote a{
   font-size: 16px;
   font-weight: 700;
   text-align: justify;
   line-height: 1.4;
   color: rgba(25, 25, 25, 1);
}
</style>
