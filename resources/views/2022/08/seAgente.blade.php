@extends('welcome')
@section('contenido')
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Montserrat -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet"><!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Montserrat -  ----- ----- ----- ----- ----- ----- ----- ----- ------ --><!-- Set Wrapper -->
<div class="container-fluid seAgente">
	<div class="box-wrp">
		<div class="box-head">
			<div class="logo">
				<div class="imagen">&nbsp;</div>
			</div>

			<div class="titulo">
				<h3>Conoce los requisitos de ingreso, formación y experiencia para ser <span class="enfasis_ppal">Agente Civil de Tránsito y Transporte de Bogotá.</span></h3>
			</div>
		</div>
		<style type="text/css">.box-head {
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas:
                    'titulo'
                    'logo';
                border-top: 8px solid rgba(31, 34, 62, 1);
                border-bottom: 16px solid rgba(31, 34, 62, 1);
            }

            .box-head .logo {
                background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/05-04-2024/se_agente.png');
                background-size: cover;
                background-position: top center;
                background-repeat: no-repeat;
                min-height: 250px;
                grid-area: logo;

            }

            .box-head .titulo {
                /* height: px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                position: relative;
                grid-area: titulo;
            }

            .box-head .titulo .vector1 {
                background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-07-2022/seagente_1.png');
                background-size: contain;
                background-position: center;
                background-repeat: no-repeat;
                width: 100%;
                height: 70px;
                top: 0px;
                position: absolute;
            }

            .box-head .titulo .vector2 {
                background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-07-2022/g6939.png');
                background-size: contain;
                background-position: center;
                background-repeat: no-repeat;
                width: 100%;
                height: 70px;
                bottom: 0px;
                position: absolute;
            }

            .box-head .titulo h3 {
                padding: 60px 30px;
                /* font-size: 1em; */
                font-weight: 500;
                text-align: center;
                line-height: 1.2;
                color: rgba(31, 34, 62, 1);
                margin: 8px;
            }

            .enfasis_ppal {
                font-size: 1.1em;
                font-weight: 700;
                text-align: left;
                line-height: 1.2;
                color: rgba(31, 34, 62, 1);
                margin: 8px;
            }
		</style>
		<div class="box-body">
			<div class="parrafos">
				<p>Si estás interesado o interesada, deberás registrar tu hoja de vida con los soportes respectivos en: <a href="https://www.talentonopalanca.gov.co/index.html" rel="noopener noreferrer" target="_blank">www.talentonopalanca.gov.co</a></p>

				<p>Personas con discapacidad que cumplan los requisitos se pueden presentar.</p>

				<h4>Requisitos de ingreso</h4>

				<p>(Artículo 7, ley 1310 de 2009)</p>

				<ul>
					<li>Ser colombiano, mayor de edad, con situación militar definida.</li>
					<li>Título de bachiller en cualquier modalidad.</li>
					<li>Poseer licencia de conducción de las categorías A2 para motocicletas y C1 para vehículos como mínimo.</li>
					<li>No haber sido condenado en cualquier época por sentencia judicial, pena privativa de la libertad, excepto por delitos políticos culposos.</li>
					<li>Certificado de Técnico Laboral por competencias en áreas relacionadas con Seguridad Vial, Tránsito y Transporte. Debe acreditar mediante certificados expedidos por instituciones debidamente registradas ante las Secretarías de Educación o Ministerio de Educación Nacional, formación profesional o técnica de conformidad con el artículo 4 de la Resolución 4548 de 2013.</li>
					<li>Mínimo 6 meses de experiencia laboral relacionada con las funciones del cargo.</li>
				</ul>
			</div>
			<style type="text/css">.box-body .parrafos {
                    margin-top: 40px;
                    margin-bottom: 30px;
                    padding: 0px 30px;
                }

                .box-body .parrafos ul>li {
                    margin-top: 16px;
                }
			</style>
			<div class="box-table">
				<h4>Requisitos de formación y experiencia, según el manual de funciones.</h4>

				<div class="table">
					<div class="table-seAgente table-responsive">
						<p class="text-center">&nbsp;</p>

						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<th>PERFIL</th>
									<th>REQUISITOS</th>
								</tr>
								<tr>
									<td><strong>Comandante de Tránsito</strong></td>
									<td>
										<ul>
											<li>Título profesional en disciplina académica del núcleo básico de conocimiento en Derecho y Afines; Formación relacionada con el campo militar o policial; Administración; Ingeniería Ambiental, Sanitaria y Afines; Ingeniería Civil y Afines; Ingeniería de Sistemas, Telemática y Afines; Ingeniería Electrónica, Telecomunicaciones y Afines; Ingeniería Industrial y Afines o Ingeniería Mecánica y Afines; Educación.</li>
											<li>Título de postgrado en la modalidad de especialización en áreas relacionadas con las funciones del cargo.</li>
											<li>6 años de experiencia relacionada con las funciones del cargo.</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td><strong>Subcomandante de Tránsito</strong></td>
									<td>
										<ul>
											<li>Título de formación técnica profesional, tecnológica o terminación y aprobación del pénsum académico de educación superior en formación del Núcleo Básico de Conocimiento: en Derecho y Afines; Formación Relacionada con el Campo Militar o Policial; Administración; Ingeniería Ambiental, Sanitaria y Afines; Ingeniería Civil y Afines; Ingeniería de Sistemas, Telemática y Afines; Ingeniería Electrónica, Telecomunicaciones y Afines; Ingeniería Industrial y Afines; Ingeniería Mecánica y Afines; Educación.</li>
											<li>6 años de experiencia relacionada con las funciones del cargo.</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td><strong>Técnico operativo de Tránsito</strong></td>
									<td>
										<ul>
											<li>Título de bachiller en cualquier modalidad.</li>
											<li>Dieciocho (18) meses de experiencia relacionada con las funciones del cargo.</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td><strong>Agente de Tránsito</strong></td>
									<td>
										<ul>
											<li>Título de bachiller en cualquier modalidad.</li>
											<li>6 meses de experiencia relacionada con las funciones del cargo.</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>

						<p class="text-center">&nbsp;</p>
					</div>
				</div>
			</div>
			<style type="text/css">.box-table {
                    padding: 0px 30px;

                }

                .box-table .table {
                    margin: auto;
                    max-width: 90%;

                }

                .table-seAgente {
                    font-size: 15px;
                    font-weight: 500;
                    text-align: left;
                    line-height: 1.4;
                    color: rgba(25, 25, 25, 1);
                    margin: 8px;
                }

                .table-seAgente th {
                    background-color: rgba(31, 34, 62, 1);
                    color: #fff;
                    text-align: center;
                }
			</style>
			<style type="text/css">.box-wrp .vector3 {
                    background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/30-07-2022/g887.png');
                    background-size: contain;
                    background-position: center;
                    background-repeat: no-repeat;
                    width: 100%;
                    height: 70px;
                    bottom: 0px;
                    position: absolute;
                }

                .box-body {
                    padding-bottom: 40px;
                    position: relative;
                }
			</style>
		</div>
	</div>
</div>
<!-- End Set Wrapper --><!-- Styles -->
<style type="text/css">.field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }

    .seAgente {
        max-width: 980px;
        word-wrap: break-word;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        margin: 8px;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    /*
    .seAgente [class*='col-'] {
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

    .box-wrp h4 {
        font-size: 18px;
        font-weight: 700;
        text-align: left;
        line-height: 1.3;
        color: rgba(31, 34, 62, 1);
        margin: 8px 0px;
        margin-top: 30px;
    }

    @media(max-width:767px) {


        .box-head .titulo h3 {
            padding: 60px 0px;
        }

        .box-body .parrafos {
            padding: 0px;
        }

        .box-table {
            padding: 0px;
        }

        .box-table .table {
            max-width: 100%;
        }

    }

    @media(min-width:768px) {
        .box-head {
            grid-template-columns: 1fr 1fr;
            grid-template-areas:
                'logo titulo';
        }

        .box-head .titulo h3 {
            padding: 50px 30px;

        }
    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<!-- End Styles -->