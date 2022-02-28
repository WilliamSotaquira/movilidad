@extends('welcome')
@section('contenido')

<!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->

<div class='container-fluid seccion'>
	<div class='s1'>
		<div class='row'>
			<div class='col-xs-12 col-sm-12 col-md-12 text-center'>
				<h3>Participación Ciudadana en la Planeación y Rendición de Cuentas de la Secretaría Distrital de Movilidad</h3>
				<br>
				<br>
				<div class="row btn-box">
					<div class="col-xs-12 col-sm-8">

						<a href="https://docs.google.com/forms/d/19wNZJj_sbzBsHWK0eva2-ck12Nh7xk_IvmJzG8Oq4gE/viewform?edit_requested=true" target="_blank" rel="noopener noreferrer">
							<div class="btn-2022">
								<p>Te invitamos a participar haz tus aportes aquí</p>
							</div>
						</a>
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
		font-size: 13px !important;
		line-height: 1.4 !important;
		max-width: 940px;
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
	.seccion .btn-box{
display:flex ;
justify-content: center;
	}

	.btn-2022 {
		background-color: #4D541F !important;
		border-radius: 0px !important;
		padding: 20px 40px !important;
		border: none !important;
		overflow: hidden;
		text-overflow: clip;
		transition: 0.5s;
		margin: auto;

	}

	.btn-2022 p {
		margin: 0px;
	}

	.seccion a {
		color: #fff;
		font-weight: 700;
		text-transform: uppercase;
		font-size: 16px;
		text-decoration: none !important;

	}

	.btn-2022:hover {
		background-color: #828F26 !important;
		color: #151515 !important;
	}

	.s1 h3 {
		color: #4D541F;
		border-bottom: solid 2px #4D541F;
		padding-bottom: 15px;
	}
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->