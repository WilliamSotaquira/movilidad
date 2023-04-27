@extends('welcome')
@section('title','rlu')
@section('contenido')

<!-- Set rlu -->
<div class="set-wrapper rlu">

	<style type="text/css">
		.h2,
		h2 {
			display: none;
		}

		.region-content {
			background-color: transparent;
		}

		.panel-naranja,
		.panel-naranja .panel-heading {
			border-color: #141135 !important;
			background-color: #141135 !important;
			color: #fff !important;
			border-radius: 0 !important;
		}

		.panel-azul,
		.panel-azul .panel-heading {
			border-color: #244064 !important;
			background-color: #244064 !important;
			color: #E91A01 !important;
			border-radius: 0 !important;
		}

		.panel-group
		{
		background-color: white;
		color: #000;
		}

		.panel-body {
			background-color: #fff !important;
			color: #141135;
			padding: 50px;
		}

		.panel-body p,
		.panel-body ul,
		.panel-body ol,
		.panel-body li {
			font-size: 14px;
		}

		.panel {
			border: 0 !important;
			border-radius: 0 !important;
			box-shadow: noen !important;
		}

		.panel-heading {
			border-radius: 0 !important;
		}

		.panel-title {
			text-align: center;
			font-weight: 600;
		}

		.panel-title a {
			text-decoration: none;
			color: #fff !important;
		}

		.panel-heading a:after {
			font-family: 'Glyphicons Halflings';
			content: "\e080";
			float: right;
			color: #fff;
		}

		.panel-heading a.collapsed:after {
			content: "\e114";
		}

		.footer-concurso {
			background: #E91A01;
			padding: 25px;
		}

		.img-center {
			display: block;
			margin: 0 auto;
			max-width: 100%;
		}

		.col-entidad {
			display: flex;
			align-items: center;
			min-height: 80px;
		}

		.d-flex {
			display: flex;
		}

		.align-items-center {
			align-items: center;
		}

		.terminos-referencia a {
			text-decoration: none;
			color: #141135;
		}

		.terminos-referencia a i {
			color: #26317F;
		}

		.bg-naranja {
			background: #D65601 !important;
		}

		.btn-propuesta {
			background: #141135;
			border: 2px solid #141135;
			color: #fff !important;
			width: 100%;
			padding: 10px;
			text-align: center;
			font-size: 20px;
			font-weight: 600;
			text-transform: uppercase;
			border-radius: 30px;
			margin: 20px 0;
			transition: ease all .5s;
			text-decoration: none !important;
		}

		.btn-propuesta:hover {
			background: #D65601;
			color: #141135 !important;
			border: 2px solid #141135;
		}

		.border-naranja {
			border-left: 2px solid #D65601;
			padding-left: 10px;
		}

		.py-50 {
			padding-top: 50px;
			padding-bottom: 50px;
		}

		.px-0 {
			padding-left: 0px;
			padding-right: 0px;
		}

		.pr-0 {
			padding-right: 0px;
		}

		.pl-0 {
			padding-left: 0px;
		}

		.pl-30 {
			padding-left: 30px;
		}

		.pl-50 {
			padding-left: 50px;
		}

		.pt-30 {
			padding-top: 30px;
		}

		.pt-50 {
			padding-top: 50px;
		}

		.pb-30 {
			padding-bottom: 30px;
		}

		.logo-ppal {
			max-width: 400px !important;
			margin: 2em 2em !important;
		}

		@media (max-width: 543px) {
			body {
				background-color: #333333 !important;
				background-image: none;
			}
		}

		@media(min-width:768px) {
			.region-content * {
				font-size: 16px;
			}

			#accordion-rlu {
				padding: 2em;
			}

			img {
				padding: 1em;
			}
			.panel-title {
			font-size: 25px;
			text-align: center;
			font-weight: 600;
		}


		}
	</style>
	<div align="center"><img alt="Red de Logística Urbana (RLU)" class="img-rounded img-responsive logo-ppal" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2023/logo_rlu_color.png"></div>

	<div align="center"><img alt="Red de Logística Urbana (RLU)" class="img-rounded img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-08-2020/red_carga_imagen_1.png"></div>

	<hr>
	<div class="panel-group" id="accordion-rlu">
		<div class="panel panel-primary panel-naranja">
			<div class="panel-heading">
				<h4 class="panel-title"><a aria-expanded="true" class="collapsed" data-parent="#accordion-rlu" data-toggle="collapse" href="#rlu1">¿Qué es la Red de Logística Urbana?</a></h4>
			</div>

			<div aria-expanded="true" class="panel-collapse collapse in" id="rlu1" style="">
				<div class="panel-body px-0">
					<p style="text-align: justify;">Es una alianza entre la Secretaría Distrital de Movilidad y el sector privado, con apoyo de la academia, que busca fortalecer la competitividad de las empresas y desarrollar integralmente el ecosistema de logística urbana, a través de acciones relacionadas con eficiencias operacionales, seguridad y movilidad en Bogotá y la región.</p>

					<p style="text-align: justify;">Periódicamente, se realiza el <i>‘Conversatorio Muévete con Carga’</i>, espacio en el que se tratan diferentes temas de interés con grupos de pequeños y medianos transportadores. Además, se realizan gestiones con otras entidades para impulsar políticas y estrategias relacionadas al transporte de carga, a través del desarrollo de proyectos impulsados por la Subdirección de Transporte Privado de la Secretaría Distrital de Movilidad.</p>
				</div>
			</div>
		</div>

		<div class="panel panel-primary panel-naranja">
			<div class="panel-heading">
				<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-rlu" data-toggle="collapse" href="#rlu2">Líneas de acción</a></h4>
			</div>

			<div aria-expanded="false" class="panel-collapse collapse" id="rlu2" style="">
				<div class="panel-body px-0">
					<div>
						<ol>
							<li><strong><i>Divulgación del conocimiento:</i></strong> facilitar la interacción entre las empresas, a través de charlas, talleres y capacitaciones que ofrece la Red.</li>
							<li><strong><i>Fomento a la participación:</i></strong> realizar un trabajo colaborativo y de acercamiento con otras empresas de la Red e invitar a participar en los proyectos del Distrito.</li>
							<li><strong><i>Reconocimiento de buenas prácticas logísticas:</i></strong> exaltar las acciones de impacto que mejoran la competitividad de la empresa y la movilidad de la ciudad en términos de eficiencia, seguridad y sostenibilidad.</li>
						</ol>

					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-primary panel-naranja">
			<div class="panel-heading panel-heading-objetivos">
				<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-rlu" data-toggle="collapse" href="#rlu3">¿Qué busca la RLU?</a></h4>
			</div>

			<div aria-expanded="false" class="panel-collapse collapse" id="rlu3" style="height: 0px;">
				<div class="panel-body px-0">
					<div class="row d-flex">
						<div class="col-sm-6 d-flex align-items-center">
							<div>
								<p class="text-center" style="text-align: justify;">Promover el desarrollo de buenas prácticas logísticas de manera sostenible, garantizando un equilibrio entre la responsabilidad con la sociedad, la competitividad económica y la preservación del medio ambiente.</p>
							</div>
						</div>

						<div class="col-sm-6 d-flex align-items-center">
							<div class="border-naranja">
								<p class="text-center" style="text-align: justify;">Acompañar y apoyar la implementación de iniciativas de las empresas, generando estrategias que mejoren la movilidad y las entregas de mercancía en la última milla.</p>
							</div>
						</div>
					</div>

					<hr>
					<div class="row d-flex">
						<div class="col-sm-6 d-flex align-items-center">
							<div>
								<p class="text-center" style="text-align: justify;">Aportar al crecimiento sostenible de las empresas que operan en Bogotá mediante el apoyo a la optimización de sus procesos logísticos.</p>
							</div>
						</div>

						<div class="col-sm-6 d-flex align-items-center">
							<div class="border-naranja">
								<p class="text-center" style="text-align: justify;">Implementar proyectos que permitan armonizar el movimiento de la carga en la ciudad con mejores tiempos operacionales y menor accidentalidad.</p>
							</div>
						</div>
					</div>

					<hr>
					<div class="row d-flex">
						<div class="col-sm-6 d-flex align-items-center">
							<div>
								<p class="text-center" style="text-align: justify;">Fomentar el intercambio de buenas prácticas logísticas entre las diferentes empresas de la Red.</p>
							</div>
						</div>

						<div class="col-sm-6 d-flex align-items-center">
							<div class="border-naranja">
								<p class="text-center" style="text-align: justify;">Lograr un compromiso empresarial privado en la implementación de planes y prácticas competitivas de gestión logística responsable socio-ambientalmente.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-primary panel-naranja">
			<div class="panel-heading panel-heading-certificacion">
				<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-rlu" data-toggle="collapse" href="#rlu4">Cifras</a></h4>
			</div>

			<div aria-expanded="false" class="panel-collapse collapse" id="rlu4" style="height: 0px;">
				<div class="panel-body px-0">
					<p style="text-align: justify;">La comunidad de la red está conformada por empresas generadoras, transportadoras y receptoras de carga, prestadoras de servicios, gremios, asociaciones, colectivos académicos y entidades públicas que trabajan de la mano con la Secretaría Distrital de Movilidad para desarrollar una logística más eficiente en Bogotá. Al trabajar de manera colaborativa, creamos soluciones que benefician a las empresas, las comunidades y la ciudad.</p>

					<div align="center"><img alt="Red de Logística Urbana (RLU)" class="img-rounded img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2023/datos_relevantes_rlu.png"></div>

					<p style="text-align: center;">“Al trabajar de manera colaborativa, creamos soluciones que benefician a las empresas, las comunidades y la ciudad” (RLU).</p>

					<p style="text-align: justify;">A 19 de junio de 2020 la RLU cuenta con la participación de 154 organizaciones, ha realizado 6 talleres técnicos de capacitación virtuales y presenciales y 2 talleres pedagógicos con un promedio de 40 personas capacitadas en cada taller.</p>
				</div>
			</div>
		</div>

		<div class="panel panel-primary panel-naranja">
			<div class="panel-heading panel-heading-beneficios">
				<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-rlu" data-toggle="collapse" href="#rlu5">Beneficios de pertenecer a la Red</a></h4>
			</div>

			<div aria-expanded="false" class="panel-collapse collapse" id="rlu5" style="height: 0px;">
				<div class="panel-body px-0">
					<div align="center"><img alt="Red de Logística Urbana (RLU)" class="img-rounded img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-08-2020/red_carga_imagen_3.png"></div>

					<hr>
					<div class="row d-flex">
						<div class="col-sm-6 d-flex">
							<div>
								<p style="text-align: justify;"><strong>Apoyo y acompañamiento:</strong> Las empresas de la RLU cuentan con el acompañamiento del Distrito en la puesta en marcha de nuevas iniciativas referentes a transporte de carga. Además, tienen a su disposición capacitaciones y sensibilización para el personal de la empresa.</p>
							</div>
						</div>

						<div class="col-sm-6 d-flex">
							<div class="border-naranja">
								<p style="text-align: justify;"><strong>Trabajo colaborativo:</strong> Las empresas de la RLU pueden hacer más eficientes sus procesos logísticos mediante el acercamiento y trabajo colaborativo con otras empresas de la Red.</p>
							</div>
						</div>
					</div>

					<hr>
					<div class="row d-flex">
						<div class="col-sm-6 d-flex">
							<div>
								<p style="text-align: justify;"><strong>Intercambio de conocimiento: </strong>Las organizaciones de la RLU pueden participar en espacios de intercambio de experiencias y de generación y divulgación de conocimiento a través de los talleres y espacios que ofrece la Red.</p>
							</div>
						</div>

						<div class="col-sm-6 d-flex">
							<div class="border-naranja">
								<p style="text-align: justify;"><strong>Reconocimiento:</strong> Las buenas prácticas en transporte de carga son un factor de calidad inherente a la prestación de los servicios, lo que hace de las organizaciones reconocidas por la RLU referentes en transporte de mercancías en Colombia.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-primary panel-naranja">
			<div class="panel-heading panel-heading-beneficios">
				<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-rlu" data-toggle="collapse" href="#rlu6">¿Qué encuentran las organizaciones en la RLU?</a></h4>
			</div>

			<div aria-expanded="false" class="panel-collapse collapse" id="rlu6" style="height: 0px;">
				<div class="panel-body px-0">
					<div>
						<ul>
							<li style="text-align: justify;">Espacios de relacionamiento con otras organizaciones para el intercambio de información y trabajo colaborativo.</li>
							<li style="text-align: justify;">Información actualizada sobre cambios normativos y temas referentes al transporte de carga.</li>
							<li style="text-align: justify;">Innovación y estrategias en logística urbana con temas de actualidad, y la participación en proyectos novedosos y de impacto para la ciudad.</li>
							<li style="text-align: justify;">Apoyo y promoción de buenas prácticas logísticas para que las operaciones del abastecimiento y los servicios logren los mejores niveles de competitividad y sostenibilidad en pro de una mejor distribución de mercancías.</li>
							<li style="text-align: justify;">Estrategias de socialización y participación ciudadana para fortalecer los compromisos de cada uno de los actores de la cadena logística en las estrategias de mejora y optimización.</li>
							<li style="text-align: justify;">Talleres, eventos, foros y acciones conjuntas para la mejora del transporte de mercancías.</li>
						</ul>

						<p><a class="btn btn-propuesta" href="http://bit.ly/EnCargaTe" target="_blank">Unirse a la RLU</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-primary panel-naranja">
			<div class="panel-heading panel-heading-beneficios">
				<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-rlu" data-toggle="collapse" href="#rlu7">Reconocimiento Excelencia Logística</a></h4>
			</div>

			<div aria-expanded="false" class="panel-collapse collapse" id="rlu7" style="height: 0px;">
				<div class="panel-body px-0">
					<div align="center"><img alt="Red de Logística Urbana (RLU)" class="img-rounded img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2023/rlu-recurso_imagen_0.png"></div>

					<p style="text-align: justify;">El reconocimiento Excelencia Logística de la Red de Logística Urbana - RLU tiene como objetivo el fomento y desarrollo de la gestión logística de empresas que operan en Bogotá, con la firme voluntad de estimular la innovación en el sector.</p>

					<p style="text-align: justify;">Las iniciativas reconocidas suponen un aporte relevante, no sólo en la gestión de la cadena de suministro de la empresa, sino también en la competitividad de la industria y el desarrollo sostenible de la ciudad-región.</p>

					<p style="text-align: justify;">El reconocimiento se entrega anualmente, para el año 2023, se tendrá las siguientes cuatro categorías:</p>

					<div class="row d-flex">
						<div class="col-sm-3 d-flex align-items-center">
							<div align="center"><img alt="Red de Logística Urbana (RLU)" class="img-rounded img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2023/icono1_rlu.png"></div>
						</div>

						<div class="col-sm-3 d-flex align-items-center">
							<div align="center"><img alt="Red de Logística Urbana (RLU)" class="img-rounded img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2023/icono2_rlu.png"></div>
						</div>

						<div class="col-sm-3 d-flex align-items-center">
							<div align="center"><img alt="Red de Logística Urbana (RLU)" class="img-rounded img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2023/icono3_rlu.png"></div>
						</div>

						<div class="col-sm-3 d-flex align-items-center">
							<div align="center"><img alt="Red de Logística Urbana (RLU)" class="img-rounded img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2023/icono4_rlu.png"></div>
						</div>
					</div>

					<hr>
					<h3 style="text-align: center;">Empresas reconocidas en al año 2022:</h3>
					<!-- <p><a class="btn btn-propuesta" href="http://bit.ly/EnCargaTe" target="_blank">Unirse a la RLU</a></p> -->
					<p><a class="btn btn-propuesta" href="https://www.movilidadbogota.gov.co/web/noticia/distrito_reconoce_al_sector_privado_en_logistica_urbana" target="_blank">Empresas reconocidas en al año 2022</a></p>
					<hr>
				</div>
			</div>
		</div>

		<div class="panel panel-primary panel-naranja">
			<div class="panel-heading">
				<h4 class="panel-title"><a aria-expanded="true" class="collapsed" data-parent="#accordion-rlu" data-toggle="collapse" href="#rlu8">Proyectos de la Red de Logística Urbana (RLU)</a></h4>
			</div>

			<div aria-expanded="true" class="panel-collapse collapse" id="rlu8" style="">
				<div class="panel-body px-0">
					<img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/21-04-2023/sxcv-imagen_230421_qf.png" class="img-responsive" alt="Image">
					<br>
					<p style="text-align: justify;">Para mayor información de cada proyecto escribir a <a href="mailto:cargabogota@movilidadbogota.gov.co">cargabogota@movilidadbogota.gov.co</a> y colocar en el asunto el nombre del proyecto.</p>
				</div>
			</div>
		</div>

		<div class="panel panel-primary panel-naranja">
			<div class="panel-heading">
				<h4 class="panel-title"><a aria-expanded="true" class="collapsed" data-parent="#accordion-rlu" data-toggle="collapse" href="#rlu9">Herramientas </a></h4>
			</div>

			<div aria-expanded="true" class="panel-collapse collapse" id="rlu9" style="">
				<div class="panel-body px-0">
					<p style="text-align: justify;">La Secretaría Distrital de Movilidad tiene disponibles para las organizaciones pertenecientes a la RLU, para el sector de carga y para la ciudadanía en general una serie de recursos a los que se puede acceder en línea a través de la portal SIMUR desde el siguiente enlace:</p>

					<p><a class="btn btn-propuesta" href="https://www.simur.gov.co/transporte-de-carga" target="_blank">Ingrese aquí</a></p>
				</div>
			</div>
		</div>

		<div class="panel panel-primary panel-naranja">
			<div class="panel-heading">
				<h4 class="panel-title"><a aria-expanded="true" class="collapsed" data-parent="#accordion-rlu" data-toggle="collapse" href="#rlu10">Contacto </a></h4>
			</div>

			<div aria-expanded="true" class="panel-collapse collapse" id="rlu10" style="">
				<div class="panel-body px-0">
					<p style="text-align: justify;">Para mayor información sobre la Red de Logística Urbana (RLU), escriba al correo electrónico:</p>

					<p style="color:#E91A01"><a href="mailto:cargabogota@movilidadbogota.gov.co">cargabogota@movilidadbogota.gov.co</a></p>

					<p>&nbsp;</p>
				</div>
			</div>
		</div>
	</div>

	<section class="footer-concurso">
		<p style="text-align: justify;">&nbsp;</p>
	</section>


</div>
<br>
<!-- Fin Set -->
