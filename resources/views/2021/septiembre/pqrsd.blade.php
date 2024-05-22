@extends ('welcome')
@section ('contenido')
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">.field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        margin: 0;
        padding: 15px;
    }

    /* .col-sm-12 {
        margin: 0 !important;
        padding: 0 !important;
    } */

    .seccion {
        background-color: #fff;
        max-width: 940px;
    }

    .w-100 {
        max-width: 100%;
    }

    .w-75 {
        width: 75%;
    }

    /* .d-flex {
        display: flex;
    } */

    .align-items-center {
        align-items: center;
    }

    .justify-content-center {
        justify-content: center;
    }

    .rh {
        margin-top: 15px !important;
    }

    .h3-xs {
        font-family: 'Signika', sans-serif;
        margin: 0px !important;
        font-size: 5rem;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/banner_xs_0.png');
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .h3-xs h1 {
        padding: 6%;
        margin: 0px 20px 15px 20px;
        color: #fff;
        font-weight: 700;
        font-size: 5rem;

    }

    .h3-sm {
        font-family: 'Signika', sans-serif;
        margin: 0px !important;
        font-size: 5rem;
        background-image: url('https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/banner_lg_0.png');
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .h3-sm h1 {
        padding: 6%;
        margin: 0px 20px 15px 20px;
        color: #fff;
        font-weight: 700;
        font-size: 40px;

    }


    img {
        /* margin: 5px; */
        /* width: 0%; */

    }

    .bs {
        -webkit-box-shadow: 3px 3px 20px -10px rgba(0, 0, 0, 0.78) !important;
        box-shadow: 3px 3px 20px -10px rgba(0, 0, 0, 0.78) !important;
    }

    .panel-body {
        padding: 10px !important;
        text-align: center;
        font-size: 2rem;
        font-weight: 500;
        color: #080808 !important;
        /* text-align: justify; */
        height: 282px;
        display: flex;
        line-height: 1.3 !important;
    }

    .panel-heading {
        height: 190px;

    }

    .panel-footer {
        background-color: #fff !important;
        height: 160px;
        display: flex;
        justify-content: center;
        border-top: none !important;
        padding: 0px !important;

    }

    .ph-c1 {
        text-align: center;
        background-color: #A12B46 !important;
        color: #fff !important;
    }

    .ph-c1 h1 {
        font-size: 6rem !important;
        font-weight: 700;
    }

    .ph-c1 h3 {
        font-size: 2rem !important;
        font-weight: 600;
    }

    .ph-c2 {
        text-align: center;
        background-color: #8C90F2 !important;
        color: #080808 !important;
    }

    .ph-c2 h1 {
        font-size: 6rem !important;
        font-weight: 700;
    }

    .ph-c2 h3 {
        font-size: 2rem !important;
        font-weight: 600;
    }

    .ph-c3 {
        text-align: center;
        background-color: #76cbd0ff !important;
        color: #080808 !important;
    }

    .ph-c3 h1 {
        font-size: 6rem !important;
        font-weight: 700;
    }

    .ph-c3 h3 {
        font-size: 2rem !important;
        font-weight: 600;
    }

    .c-verde {
        background-color: #F0F2D9;

    }

    .c-verde h3 {
        font-weight: 700;
    }

    .pc1 {
        background-color: #A12B46;
        height: 30px;
        width: 60px;
    }

    .pc2 {
        background-color: #8C90F2;
        height: 30px;
        width: 60px;
    }

    .pc3 {
        background-color: #76cbd0ff;
        height: 30px;
        width: 60px;
    }

    .c-verde-2 {
        background-color: #c9d41eff;
        padding: 15px;
        color: #080808;
        margin-left: 15px;
        margin-right: 15px;
        margin-top: 25px;
        text-align: center;
        display: flex;
        vertical-align: middle;
        justify-content: center;
        align-items: center;
    }

    .c-verde-2 h3 {
        font-weight: 700;
    }

    .btn-icon {
        height: 280px;
        padding: 0px 25px 25px 25px;
        margin: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        text-align: center;
        vertical-align: middle;
        background-color: #4D541F;
        color: #fff;
        border-radius: 4px;
        /* transition: 0.5s all; */
    }

    .btn-icon a {
        color: #fff;
        text-decoration: none !important;
    }

    .btn-icon:hover a {
        color: #000;
    }

    .btn-icon:hover,
    .btn-icon:hover p,
    .btn-icon:hover .fa {
        background-color: #c9d41eff;
        color: #000 !important;
    }

    .p-btn-icon {
        font-size: 2rem;
        color: #fff !important;
        text-decoration: none;
        vertical-align: middle;
    }


    .p-btn-icon a {
        font-size: 2rem;
        color: #fff !important;
        text-decoration: none;
    }

    .p-btn-icon:hover a {
        color: #000 !important;
    }


    .fa {
        margin: 20px;
        color: #c9d41eff !important;
    }

    .caption {
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        vertical-align: middle;


    }

    .caption h3 {
        height: 70px;
        /* color: #4D541F; */
        font-weight: 700;
        border-bottom: solid #777 1px;
        font-size: 2rem;
    }

    .caption p {
        height: 80px;
    }

    .thumbnail>a>img {
        height: 150px !important;

    }

    .p-pn {
        padding: 30px;
        margin: 35px;
        border: solid;
        border-color: #4D541F;
        border-width: 0.1px;
        border-radius: 5px;

    }

    .p-pn h3,
    .p-pn a,
    .p-pn p {
        color: #080808 !important;
        font-weight: 700;
        text-decoration: none !important;

        word-wrap: break-word;
        overflow: hidden !important;
        text-overflow: clip !important;

    }

    .p-pn p {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;

    }

    .termino-box {
        height: 230px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        text-align: center;
    }

    @media(max-width:767px) {}

    @media(min-width:768px) {

        .box-descripcion {
            height: 140px;
        }

        .box-imgpeticion {
            height: 140px;
        }

    }

    @media(min-width:992px) {}

    @media(min-width:1200px) {}
</style>
<div class="container-fluid seccion">
	<div class="row"><!-- xs -->
		<div class="col-xs-12 visible-xs-12 visible-xs-block">
			<div class="h3-xs d-flex align-items-center">
				<h1 class="text-center w-75">Tipos de Peticiones</h1>
			</div>
		</div>
		<!-- sm -->

		<div class="col-sm-12 hidden-xs">
			<div class="h3-sm d-flex align-items-center">
				<h1 class="text-center w-75">Tipos de Peticiones</h1>
			</div>
		</div>
	</div>

	<div class="box-peticion">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="box-numero bg1">
					<div class="numero">
						<h1>1</h1>
					</div>

					<div class="descripcion">
						<h3 class="panel-title text-center">Derecho de Petición en Interés General</h3>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div class="box-descripcion">
					<div>
						<p>Solicitud que busca respuesta a una situación que concierne a un colectivo de individuos.</p>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-3">
				<div class="box-imgpeticion">
					<div>
						<div class="imagen"><img alt="Dercho de petición" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono1.png" title="Dercho de petición"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="box-peticion">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="box-numero bg1">
					<div class="numero">
						<h1>2</h1>
					</div>

					<div class="descripcion">
						<h3 class="panel-title text-center">Derecho de Petición en Interés Particular</h3>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div class="box-descripcion">
					<div>
						<p>Solicitud en busca de una respuesta a una situación que le afecta ole concierne a un ciudadano.</p>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-3">
				<div class="box-imgpeticion">
					<div>
						<div class="imagen"><img alt="Dercho de petición" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono2.png" title="Dercho de petición"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="box-peticion">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="box-numero bg1">
					<div class="numero">
						<h1>3</h1>
					</div>

					<div class="descripcion">
						<h3 class="panel-title text-center">Queja</h3>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div class="box-descripcion">
					<div>
						<p>Manifestación de descontento o inconformidad en relación con una conducta que se considera irregular de uno o varios servidores públicos en el desarrollo de sus funciones.</p>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-3">
				<div class="box-imgpeticion">
					<div>
						<div class="imagen"><img alt="Queja" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono3.png" title="Queja"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="box-peticion">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="box-numero bg1">
					<div class="numero">
						<h1>4</h1>
					</div>

					<div class="descripcion">
						<h3 class="panel-title text-center">Reclamo</h3>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div class="box-descripcion">
					<div>
						<p>Manifestación de descontento o inconformidad por un proceso relacionado con la prestación de servicios.</p>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-3">
				<div class="box-imgpeticion">
					<div>
						<div class="imagen"><img alt="Icono de reclamo" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono4.png" title="Icono de reclamo"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="box-peticion">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="box-numero bg1">
					<div class="numero">
						<h1>5</h1>
					</div>

					<div class="descripcion">
						<h3 class="panel-title text-center">Sugerencia</h3>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div class="box-descripcion">
					<div>
						<p>Propuesta para mejorar un proceso relacionado con la prestación de un tramite o servicio.</p>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-3">
				<div class="box-imgpeticion">
					<div>
						<div class="imagen"><img alt="Icono de bombillo" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono5.png" title="Icono de bombillo"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="box-peticion">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="box-numero bg1">
					<div class="numero">
						<h1>6</h1>
					</div>

					<div class="descripcion">
						<h3 class="panel-title text-center">Denuncia posible Acto de Corrupción</h3>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div class="box-descripcion">
					<div>
						<p>Es la puesta en conocimiento de un presunta conducta irregular por parte de un servidor publico.</p>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-3">
				<div class="box-imgpeticion">
					<div>
						<div class="imagen"><img alt="Icono de balanza" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono6.png" title="Icono de balanza"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="box-peticion">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="box-numero bg1">
					<div class="numero">
						<h1>7</h1>
					</div>

					<div class="descripcion">
						<h3 class="panel-title text-center">Felicitación</h3>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div class="box-descripcion">
					<div>
						<p>Manifestación positiva hacia un funcionario o la entidad por la satisfacción del servicio prestado.</p>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-3">
				<div class="box-imgpeticion">
					<div>
						<div class="imagen"><img alt="Icono de manos aplaudiendo" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono7.png" title="Icono de manos aplaudiendo"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="box-peticion">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="box-numero bg2">
					<div class="numero">
						<h1>8</h1>
					</div>

					<div class="descripcion">
						<h3 class="panel-title text-center">Solicitud de Acceso a la Información</h3>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div class="box-descripcion">
					<div>
						<p>Solicitud para tener acceso a la información sobre las funciones de la entidad y sus distintas dependencias.</p>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-3">
				<div class="box-imgpeticion">
					<div>
						<div class="imagen"><img alt="Icono de lupa" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono8.png" title="Icono de lupa"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="box-peticion">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="box-numero bg2">
					<div class="numero">
						<h1>9</h1>
					</div>

					<div class="descripcion">
						<h3 class="panel-title text-center">Solicitud de Copias</h3>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div class="box-descripcion">
					<div>
						<p>Reproducción y entrega de documentos que no tengan el carácter de reservado al interior.</p>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-3">
				<div class="box-imgpeticion">
					<div>
						<div class="imagen"><img alt="Icono de documentos" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono9.png" title="Icono de documentos"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="box-peticion">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="box-numero bg3">
					<div class="numero">
						<h1>10</h1>
					</div>

					<div class="descripcion">
						<h3 class="panel-title text-center">Consulta</h3>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div class="box-descripcion">
					<div>
						<p>Consulta a las autoridades en relación con las materias a su cargo. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-3">
				<div class="box-imgpeticion">
					<div>
						<div class="imagen"><img alt="Icono signo de pregunta" class="img-responsive w-100" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono10.png" title="Icono signo de pregunta"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<style type="text/css">.box-peticion {
            background-color: rgba(240, 240, 240, 1);
            padding: 5px;
            display: inline-flex;
            margin: 8px;
        }

        .box-numero {
            padding: 10px;
        }

        .box-peticion .numero {
            /* height: 100px; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box-peticion .descripcion {
            height: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .bg1 {
            background-color: #A12B46;
        }

        .bg2 {
            background-color: #8C90F2;
        }

        .bg3 {
            background-color: #76cbd0;
        }

        .numero h1 {
            font-size: 60px;
            font-weight: 700;
            text-align: center;
            line-height: 1;
            color: rgba(255, 255, 255, 1);
            margin: 0px;
        }

        .descripcion {}

        .descripcion h3 {
            font-size: 20px;
            font-weight: 700;
            text-align: center;
            line-height: 1;
            color: rgba(255, 255, 255, 1);
            margin: 0px;
        }

        .box-descripcion {
            /* height: 100%; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 5%;
        }

        .box-descripcion p {
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            line-height: 1.2;
            color: rgba(25, 25, 25, 1);
            margin: auto;
        }

        .box-imgpeticion {
            /* height: 100%; */
            background-color: rgba(255, 255, 255, 1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box-imgpeticion .imagen {
            margin: auto;
        }

        .box-imgpeticion .imagen img {
            max-width: 140px;
            margin: auto;
        }
	</style>
	<div class="row rh"><!--         <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel bs panel-default">
                <div class="panel-heading ph-c1">
                    <h1>1</h1>
                    <h3 class="panel-title text-center">Derecho de Petición en Interés General</h3>
                </div>
                <div class="panel-body container-fluid align-items-center">
                    <p>Solicitud que busca respuesta a una situación que concierne a un colectivo de individuos.</p>
                </div>
                <div class="panel-footer">
                    <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/28-08-2021/icono1.png" alt="Manos alzadas participando" title="Derecho de petición en interés general">
                </div>
            </div>
        </div> --></div>

	<hr>
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<div class="termino-box c-verde">
				<div>
					<h3>Término para resolver*</h3>

					<p>LEY 1755 de 2015</p>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 bs">
			<div class="table-responsive">
				<table class="table">
					<tbody>
						<tr>
							<th class="text-center">Color:</th>
							<th class="text-center">Termino:</th>
						</tr>
						<tr>
							<td class="text-center" style="margin: auto;">
								<p class="pc1">&nbsp;</p>
							</td>
							<td class="text-center">
								<p>15 días hábiles</p>
							</td>
						</tr>
						<tr>
							<td class="text-center">
								<p class="pc2">&nbsp;</p>
							</td>
							<td class="text-center">
								<p>10 días hábiles</p>
							</td>
						</tr>
						<tr>
							<td class="text-center">
								<p class="pc3">&nbsp;</p>
							</td>
							<td class="text-center">
								<p>30 días hábiles</p>
							</td>
						</tr>
						<!-- <tr class="c-verde">
                        <td class="text-center" colspan="2"><strong>Ley 1755 de 2015</strong></td>
                    </tr> --></tbody>
				</table>
			</div>
		</div>
	</div>

	<hr>
	<div class="row">
		<div class="c-verde-2 bs">
			<h3 class="text-center">Canales donde se puede realizar</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<div class="btn-icon bs">
				<div>
					<h3>Telefónico</h3>
				</div>

				<div>&nbsp;</div>

				<div>
					<p class="p-btn-icon">Teléfono<br>
						<strong><a href="6013649400">(601) 364 9400</a>, opción 2</strong></p>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4">
			<div class="btn-icon bs">
				<div>
					<h3><a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php" rel="noopener noreferrer" target="_blank">Virtual</a></h3>
				</div>

				<div>&nbsp;</div>

				<div>
					<p class="p-btn-icon"><a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php" rel="noopener noreferrer" target="_blank">Correo institucional<br>
						<strong>Bogotá te escucha</strong></a></p>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4">
			<div class="btn-icon bs">
				<div>
					<h3><a href="http://www.movilidadbogota.gov.co/web/puntos_de_atencion" rel="noopener noreferrer" target="_blank">Presencial</a></h3>
				</div>

				<div>&nbsp;</div>

				<div>
					<p class="p-btn-icon"><a href="http://www.movilidadbogota.gov.co/web/puntos_de_atencion" rel="noopener noreferrer" target="_blank">Puntos de<br>
						<strong>Correspondencia </strong></a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs 12 col-sm-6">
			<div class="text-center p-pn bs">General
				<h3>Radicación Documentos</h3>

				<p><a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php">Formulario radicación de correspondencia</a></p>
			</div>
		</div>

		<div class="col-xs 12 col-sm-6">
			<div class="text-center p-pn bs">Exclusivo
				<h3>Notificaciones Judiciales</h3>

				<p><a href="mailto:judicial@movilidadbogota.gov.co">judicial@movilidadbogota.gov.co</a></p>
			</div>
		</div>
	</div>

	<hr>
	<div class="row">
		<div class="col-xs-12">
			<h2 class="text-center"><strong>MÁS SERVICIOS</strong></h2>
		</div>
	</div>
	&nbsp;

	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<div class="thumbnail bs"><a href="https://bogota.gov.co/sdqs/crear-peticion" rel="noopener noreferrer" target="_blank"><img alt="Logo Bogotá te escucha" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-08-2021/imagen-bogota-te-escucha.jpg" title="Registre PQRS"> </a>

				<div class="caption">
					<div>
						<h3><a href="https://bogota.gov.co/sdqs/crear-peticion" rel="noopener noreferrer" target="_blank">Registre<br>
							PQRSD</a></h3>

						<p><a href="https://bogota.gov.co/sdqs/crear-peticion" rel="noopener noreferrer" target="_blank">Aquí podrás crear peticiones con tu usuario, con las diferentes opciones que te ofrece el sistema. </a></p>
					</div>
				</div>
				<a href="https://bogota.gov.co/sdqs/crear-peticion" rel="noopener noreferrer" target="_blank"> </a></div>
		</div>

		<div class="col-xs-12 col-sm-4">
			<div class="thumbnail bs"><a href="https://bogota.gov.co/sdqs/consultar-peticion" rel="noopener noreferrer" target="_blank"><img alt="Logo Bogotá te escucha" src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-08-2021/imagen-bogota-te-escucha.jpg" title="Consulte su petición"> </a>

				<div class="caption">
					<div>
						<h3><a href="https://bogota.gov.co/sdqs/consultar-peticion" rel="noopener noreferrer" target="_blank">Consulte su<br>
							Petición</a></h3>

						<p><a href="https://bogota.gov.co/sdqs/consultar-peticion" rel="noopener noreferrer" target="_blank">Aquí podrás consultar las peticiones con tu usuario, siguiendo las diferentes opciones.</a></p>
					</div>
				</div>
				<a href="https://bogota.gov.co/sdqs/consultar-peticion" rel="noopener noreferrer" target="_blank"> </a></div>
		</div>

		<div class="col-xs-12 col-sm-4">
			<div class="thumbnail bs"><a href="https://gestiondocumental.movilidadbogota.gov.co/orfeo-api/" rel="noopener noreferrer" target="_blank"><img alt="Logo ORFEO" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/26-11-2020/orfeo.png" style="height: 134px;" title="Consulte su radicado"> </a>

				<div class="caption">
					<div>
						<h3><a href="https://gestiondocumental.movilidadbogota.gov.co/orfeo-api/" rel="noopener noreferrer" target="_blank">Consulte Radicado SDM</a></h3>

						<p><a href="https://gestiondocumental.movilidadbogota.gov.co/orfeo-api/" rel="noopener noreferrer" target="_blank">Aquí podrá consultar, con su número de radicado, el estado de su petición.</a></p>
					</div>
				</div>
				<a href="https://gestiondocumental.movilidadbogota.gov.co/orfeo-api/" rel="noopener noreferrer" target="_blank"> </a></div>
		</div>

		<div class="col-xs-12 col-sm-4">
			<div class="thumbnail bs"><a href="https://www.movilidadbogota.gov.co/web/derechos-anonimos" rel="noopener noreferrer" target="_blank"><!-- <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-08-2021/correo-electronico_0.png" style="height: 155px; color:#4D541F !important" alt="..."> --> </a>

				<div class="caption">
					<div>
						<h3><a href="https://www.movilidadbogota.gov.co/web/derechos-anonimos" rel="noopener noreferrer" target="_blank">Notificaciones Derechos de<br>
							Petición Anónimos</a></h3>

						<p><a href="https://www.movilidadbogota.gov.co/web/derechos-anonimos" rel="noopener noreferrer" target="_blank">Aquí reposan las respuesta que no tienen datos de los peticionarios</a></p>
					</div>
				</div>
				<a href="https://www.movilidadbogota.gov.co/web/derechos-anonimos" rel="noopener noreferrer" target="_blank"> </a></div>
		</div>

		<div class="col-xs-12 col-sm-4">
			<div class="thumbnail bs"><a href="https://docs.google.com/forms/d/e/1FAIpQLSf_XK6RvcctCN4nyePLpdZ-rA_dND8Y_fZff3jZyBzx8FUSQw/viewform?vc=0&amp;c=0&amp;w=1" rel="noopener noreferrer" target="_blank"><!-- <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-08-2021/correo-electronico_0.png" style="height: 155px; color:#4D541F !important" alt="..."> --> </a>

				<div class="caption">
					<div>
						<h3><a href="https://docs.google.com/forms/d/e/1FAIpQLSf_XK6RvcctCN4nyePLpdZ-rA_dND8Y_fZff3jZyBzx8FUSQw/viewform?vc=0&amp;c=0&amp;w=1" rel="noopener noreferrer" target="_blank">Califique Nuestro Servicio</a></h3>

						<p><a href="https://docs.google.com/forms/d/e/1FAIpQLSf_XK6RvcctCN4nyePLpdZ-rA_dND8Y_fZff3jZyBzx8FUSQw/viewform?vc=0&amp;c=0&amp;w=1" rel="noopener noreferrer" target="_blank">Apreciado ciudadano: Lo invitamos a calificar la calidad de la respuesta a su requerimiento, ésto nos ayudará a prestar un mejor servicio.</a></p>
					</div>
				</div>
				<a href="https://docs.google.com/forms/d/e/1FAIpQLSf_XK6RvcctCN4nyePLpdZ-rA_dND8Y_fZff3jZyBzx8FUSQw/viewform?vc=0&amp;c=0&amp;w=1" rel="noopener noreferrer" target="_blank"> </a></div>
		</div>

		<div class="col-xs-12 col-sm-4">
			<div class="thumbnail bs"><a href="https://www.movilidadbogota.gov.co/web/respuestas-a-oficio-sin-notificar" rel="noopener noreferrer" target="_blank"><!-- <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-08-2021/correo-electronico_0.png" style="height: 155px; color:#4D541F !important" alt="..."> --> </a>

				<div class="caption">
					<div>
						<h3><a href="https://www.movilidadbogota.gov.co/web/respuestas-a-oficio-sin-notificar" rel="noopener noreferrer" target="_blank">Respuestas a Oficio sin Notificar</a></h3>

						<p><a href="https://www.movilidadbogota.gov.co/web/respuestas-a-oficio-sin-notificar" rel="noopener noreferrer" target="_blank">Respuestas a sus solicitudes que no pudieron ser entregadas a la dirección física registrada.</a></p>
					</div>
				</div>
				<a href="https://www.movilidadbogota.gov.co/web/respuestas-a-oficio-sin-notificar" rel="noopener noreferrer" target="_blank"> </a></div>
		</div>

		<div class="col-xs-12 col-sm-4">
			<div class="thumbnail bs">
				<div class="caption">
					<div>
						<h3><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/04-12-2023/pm04-rg01_reglamento_interno_para_la_gestion_de_pqrsd_v.3.0_24-11-2023_2.pdf" rel="noopener noreferrer" target="_blank">Reglamento Interno de Gestión PQRSD</a></h3>

						<p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/04-12-2023/pm04-rg01_reglamento_interno_para_la_gestion_de_pqrsd_v.3.0_24-11-2023_2.pdf" rel="noopener noreferrer" target="_blank">Con el propósito de orientar de forma clara y concreta sobre el manejo de las peticiones.</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4">
			<div class="thumbnail bs"><a href="https://www.movilidadbogota.gov.co/web/trato-digno" rel="noopener noreferrer" target="_blank"><!-- <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/30-08-2021/correo-electronico_0.png" style="height: 155px; color:#4D541F !important" alt="..."> --> </a>

				<div class="caption">
					<div>
						<h3><a href="https://www.movilidadbogota.gov.co/web/carta_de_compromiso_a_la_ciudadania" rel="noopener noreferrer" target="_blank">Carta de Compromiso a la Ciudadanía</a></h3>

						<p><a href="https://www.movilidadbogota.gov.co/web/carta_de_compromiso_a_la_ciudadania" rel="noopener noreferrer" target="_blank">Establece el trato entre ciudadanos y la entidad. Exalta las practicas de un buen Gobierno.</a></p>
					</div>
				</div>
				<a href="https://www.movilidadbogota.gov.co/web/trato-digno" rel="noopener noreferrer" target="_blank"> </a></div>
		</div>

		<div class="col-xs-12 col-sm-4">
			<div class="thumbnail bs">
				<div class="caption">
					<div>
						<h3><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/22-08-2022/pa02-m03-pt02-protocolo-de-denuncias-por-corrupcion-v-1.0-28-10-2021.pdf" rel="noopener noreferrer" target="_blank">Protocolo de Denuncias por Actos de Corrupción</a></h3>

						<p><a href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/22-08-2022/pa02-m03-pt02-protocolo-de-denuncias-por-corrupcion-v-1.0-28-10-2021.pdf" rel="noopener noreferrer" target="_blank">Directrices y el procedimiento a seguir en la recepción y atención de las denuncias de presuntos hechos de corrupción</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-sm-offset-4">
			<div class="thumbnail bs">
				<div class="caption">
					<div>
						<h3><a href="https://www.movilidadbogota.gov.co/web/informacion_pqrs" rel="noopener noreferrer" target="_blank">Informes de PQRSD</a></h3>

						<p><a href="https://www.movilidadbogota.gov.co/web/informacion_pqrs" rel="noopener noreferrer" target="_blank">Informes de todas las solicitudes, quejas y reclamos y los tiempos de respuesta del sujeto obligado.</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


