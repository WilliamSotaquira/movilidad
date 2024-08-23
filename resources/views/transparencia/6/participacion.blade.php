@extends('welcome')
@section('title','participacion')
@section('contenido')

<!-- Set participacion -->
<div class="set-wrapper participacion">
	<div class="container-fluid participacion">
		<div class="box-wrp">
			<div class="box-head">
				<h3 class="text-center"><strong>Participación Ciudadana</strong></h3>
			</div>

			<div class="box-definicion">
				<p style="text-indent:0px; -webkit-text-stroke-width:0px; text-align:justify; margin-bottom:10px"><span>La participación ciudadana es una condición de primer orden para una gestión pública íntegra y transparente, por lo tanto, la Secretaría Distrital de Movilidad (SDM) procura constantemente que sus acciones estén dotadas de valor público, es decir, que su quehacer institucional sea percibido por la ciudadanía en general como un ejercicio que genera cambios positivos en el bienestar social del Distrito. Para que esto sea posible, especialmente en un sector de tan alta complejidad como la movilidad en una ciudad como Bogotá, se requiere de la generación de mecanismos de confianza entre la ciudadanía y la institución pública, por medio de un ejercicio sistemático de comunicación y participación ciudadana.</span></p>

				<p><span>Es por ello que la Secretaría Distrital de Movilidad (SDM) cuenta con un Plan Institucional de Participación Ciudadana el cual tiene como objetivo promover la incidencia de la participación ciudadana en las acciones, proyectos, programas, planes y políticas de Movilidad, orientadas al desarrollo de iniciativas de movilidad segura, accesible, incluyente, sostenible y multimodal en el Distrito Capital, a través de estrategias de gestión social.</span></p>
			</div>

			<div class="box-estrategicos">
				<h4 class="text-center"><strong>Líneas estratégicas del Plan Institucional de Participación</strong></h4>
				&nbsp;

				<ul>
					<li>
						<p><strong>Línea estratégica 1: Gestión Social de las Políticas Públicas</strong>Fortalece el cumplimiento de las políticas públicas sociales en los procesos participativos, así como en los planes, programas y proyectos de la Secretaría Distrital de Movilidad, a través de herramientas de gestión social que faciliten la transversalización de los enfoques diferencial, poblacional, territorial y de género.</p>
					</li>
					<li>
						<p><strong>Línea estratégica 2: Gestión Social de Proyectos</strong> Desarrolla acciones que garanticen la inclusión de la gestión social en las fases del desarrollo del ciclo de programas y proyectos de tránsito, transporte y movilidad, operación e infraestructura vial del servicio de transporte público de pasajeros y pasajeras y transporte no motorizado a cargo de la SDM, a través del diseño de estrategias de gestión social y participación ciudadana</p>
					</li>
					<li>
						<p><strong>Línea estratégica 3: Rendición de cuentas</strong> Genera un ejercicio de transparencia que permita fortalecer la confianza entre las entidades que conforman el Sector Movilidad y la ciudadanía, a partir de la información, el diálogo y la responsabilidad.</p>
					</li>
					<li>
						<p><strong>Línea estratégica 4: Gestión Social Local</strong> Fortalecer la participación ciudadana en la escala local, mediante acciones de información, fortalecimiento de capacidades y conocimientos de la entidad, así como gestión de las solicitudes ciudadanas, con el fin de garantizar el derecho a la movilidad y aportar desde esta línea en el cumplimiento de los logros institucionales.</p>
					</li>
				</ul>
			</div>

			<div class="box-botonPIP">
				<div class="pip"><a href="https://www.movilidadbogota.gov.co/web/transparencia/plan_institucional_de_participacion" rel="noopener noreferrer" target="_blank"><img alt="Portada de el Plan Institucional de Participación" class="zoom img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-05-2024/caratula.jpg" title="De clic aqui para ir al historico de Plan Institucional De Participación – PIP"> </a></div>

				<div class="parrafo-pip">

					<div>
						<h4>Aquí podrás acceder al Plan Institucional De Participación</h4>
					</div>

					<div class="btn-pip"><a href="https://www.movilidadbogota.gov.co/web/transparencia/plan_institucional_de_participacion" rel="noopener noreferrer" style="color: #fff" target="_blank">Ingrese aquí </a></div>
				</div>
			</div>

			<div>
				<hr></div>

			<div class="box-botones ">
				<div class="boton-clm zoom featured">
					<h4><a href="https://www.movilidadbogota.gov.co/web/rendicion_de_cuentas_locales" rel="noopener noreferrer" target="_blank">Rendición de Cuentas Locales</a></h4>
				</div>

				<div class="boton-clm zoom">
					<h4><a href="https://www.movilidadbogota.gov.co/web/centros-locales-de-movilidad" rel="noopener noreferrer" target="_blank">Centros Locales de Movilidad</a></h4>
				</div>

				<div class="boton-clm zoom">
					<h4><a href="https://www.movilidadbogota.gov.co/web/agendas_participativas" rel="noopener noreferrer" target="_blank">Informes de seguimiento y planes de acción</a></h4>
				</div>

				<div class="boton-clm zoom">
					<h4><a href="https://www.movilidadbogota.gov.co/web/barrios_vitales" rel="noopener noreferrer" target="_blank">Barrios Vitales</a></h4>
				</div>

				<div class="boton-clm zoom">
					<h4><a href="https://www.movilidadbogota.gov.co/web/ferias_de_servicio_movil" rel="noopener noreferrer" target="_blank">Ferias de Servicio Móvil</a></h4>
				</div>

				<div class="boton-clm zoom featured">
					<h4><a href="https://www.movilidadbogota.gov.co/web/grupos_de_valor_partes_interesadas_sdm" rel="noopener noreferrer" target="_blank">Grupos de Valor - Partes Interesadas</a></h4>
				</div>
			</div>
		</div>
	</div>

	<p>&nbsp;</p>

	<p><br>
		<!-- End Set Wrapper -->
		<style type="text/css">.box-wrp {
                padding: 16px;
                display: grid;
                gap: 20px;
                grid-auto-flow: dense;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    '';
            }

            .box-wrp ul>li {
                padding-top: 16px;
            }

            .box-botonPIP {
                display: grid;
                /* gap: 10px; */
                grid-auto-flow: dense;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;

            }

            .box-botonPIP .pip {
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .box-botonPIP .pip img {
                width: 60%;
                margin: auto;
                border: solid 1px #d5d5d5;
                border-radius: 6px;
                -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            }

            .parrafo-pip {
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .parrafo-pip img {
                max-width: 250px;
                margin: auto;
                padding: 20px;
            }

            .parrafo-pip h4 {
                /* font-size: 1em; */
                font-weight: 700;
                text-align: center;
                line-height: 1.3;
                color: rgba(25, 25, 25, 1);
                margin: 8px;
            }

            .parrafo-pip .btn-pip {
                background-color: rgba(77, 84, 31, 1);
                color: rgba(255, 255, 255, 1);
                padding: 8px 16px;
                margin: 20px;
                border-radius: 3px;
            }

            .parrafo-pip .btn-pip:hover {
                background-color: #A6B517;
                color: rgba(25, 25, 25, 1);

            }

            .parrafo-pip a .btn-pip {
                color: rgba(255, 255, 255, 1);
                text-decoration: none !important;
            }

            .parrafo-pip a .btn-pip:hover {
                color: rgba(25, 25, 25, 1);
            }

            .box-botones {
                display: grid;
                gap: 20px;
                grid-auto-flow: dense;
                grid-template-columns: repeat(auto-fill, minmax(min(100%, 200px), 1fr));
                grid-auto-rows: 90px;
                grid-template-areas:
                    '';
            }

            .box-botones a {
                text-decoration: none !important;
                font-size: 16px;
                font-weight: 600;
                text-align: center;
                line-height: 1.1;
                color: rgba(255, 255, 255, 1);

            }

            .box-botones .boton-clm {
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-decoration: none !important;
                border-radius: 4px;
                -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
                box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.16);
            }

            .box-botones .boton-clm {
                /* margin: 20px; */
                padding: 10px 8px;
                background-color: rgba(77, 84, 31, 1);
            }

            .box-botones .boton-clm:hover {
                background-color: #A6B517;
            }
            .box-botones .boton-clm:hover a{
                color: #303030;
            }

            .box-botones .boton-clm h4 {
                font-size: 16px;
                font-weight: 600;
                text-align: center;
                line-height: 1.1;
                color: rgba(255, 255, 255, 1);
                margin: 8px;
            }

            .box-botones .boton-clm:hover h4 {
                color: rgba(25, 25, 25, 1);
            }
		</style>
		<!-- Styles -->
		<style type="text/css">.field-item.even h2 {
                visibility: hidden;
                margin-top: -50px;
            }

            .featured {
                grid-column: span 2;
            }

            .region-content {
                padding: 0px;
                overflow: hidden;
            }

            .participacion {
                max-width: 980px;
                word-wrap: break-word !important;
                font-family: 'Montserrat', sans-serif;
                font-size: 15px;
                font-weight: 500;
                text-align: justify;
                line-height: 1.4;
                color: rgba(25, 25, 25, 1);
                margin: auto;
                padding: 8px;
            }

            .zoom {
                transition: 0.5s ease;
                -moz-transition: 0.5s ease;
                /* Firefox */
                -webkit-transition: 0.5s ease;
                /* Chrome - Safari */
                -o-transition: 0.5s ease;
                /* Opera */
                -ms-transition: 0.5s ease;
            }

            .zoom:hover {
                transform: scale(1.02);
                -moz-transform: scale(1.02);
                /* Firefox */
                -webkit-transform: scale(1.02);
                /* Chrome - Safari */
                -o-transform: scale(1.02);
                /* Opera */
                -ms-transform: scale(1.02);
            }

            /* IE9 */

            .w-100 {
                width: 100%;
            }
		</style>
		<!-- End Styles --></p>

	<p>&nbsp;</p>
</div>
<!-- Fin Set -->
